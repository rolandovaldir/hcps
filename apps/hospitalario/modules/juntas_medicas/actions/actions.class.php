<?php

require_once dirname(__FILE__).'/../lib/juntas_medicasGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/juntas_medicasGeneratorHelper.class.php';

/**
 * juntas_medicas actions.
 *
 * @package    hcps
 * @subpackage juntas_medicas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class juntas_medicasActions extends autoJuntas_medicasActions
{
    
    private $hcps_internado = null;
    
    public function preExecute()
    {
        $request = $this->getRequest();         
        $this->hcps_internado = InternadoTable::getInstance()->find($request->getParameter('internado_id'));
        
        if ((is_object($this->hcps_internado) && !$this->hcps_internado->getAlta())){
            $this->getUser()->addCredential('noHistory');
            $this->getUser()->removeCredential('siHistory');                    
        }
        else{
            $this->getUser()->addCredential('siHistory');
            $this->getUser()->removeCredential('noHistory');
        }
        parent::preExecute();
    }
        
    public function postExecute()
    {
        if ( !is_object($this->hcps_internado) || $this->hcps_internado->getAlta()){
            if (is_object($this->form)){ //disable all widgets (si internado es dado de alta)
                $this->form->disableAllWidgets();
            }
        }
        parent::postExecute();
    }
    
    public function executeNew(sfWebRequest $request)
    {
        $this->form = $this->configuration->getForm();
        $this->junta_medica = $this->form->getObject();
        $internado = $this->getUser()->getAttribute('internado');
        $this->form->setDefault('internado_id', $internado->getId());
    }
    
    protected function getFilters()
    {   
        $filters = parent::getFilters();        
        $filters['internado_id'] = sfContext::getInstance()->getRequest()->getParameter('internado_id');
        return $filters;
    }
    
    public function executeDeleteMedico(sfWebRequest $request)
    {        
        $request->checkCSRFProtection();
        
        $objectD = Doctrine::getTable('MedicoParticular')->find($request->getParameter('id'));
                        
        if (is_object($objectD) && $objectD->delete())
        {
            $this->getUser()->setFlash('notice', 'The item was deleted successfully.');
        }
        $this->redirect(array('sf_route' => 'junta_medica_edit', 'id' => $objectD->getJuntaMedica(),  'internado_id'=> $request->getParameter('internado_id')));
                
    }
}
