<?php

require_once dirname(__FILE__).'/../lib/reposicion_materialesGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/reposicion_materialesGeneratorHelper.class.php';

/**
 * reposicion_materiales actions.
 *
 * @package    hcps
 * @subpackage reposicion_materiales
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class reposicion_materialesActions extends autoReposicion_materialesActions
{
    
     private $hcps_internado = null;


    public function preExecute()
    {
        $request = $this->getRequest();         
        $this->hcps_internado = InternadoTable::getInstance()->find($request->getParameter('internado_id'));
        if (is_object($this->hcps_internado)){
            if ($this->hcps_internado->getAlta()){//disable all links (links para internados y dados de alta)
                $this->getUser()->addCredential('siHistory');
                $this->getUser()->removeCredential('noHistory');
            }
            else{                
                $this->getUser()->addCredential('noHistory');
                $this->getUser()->removeCredential('siHistory');
            }
        }        
        parent::preExecute();
    }
        
    public function postExecute()
    {
        if (is_object($this->hcps_internado)){
            if ($this->hcps_internado->getAlta()){
                if (is_object($this->form)){ //disable all widgets (si internado es dado de alta)
                    $this->form->disableAllWidgets();
                }                
            }
        }
        parent::postExecute();
    }
    
    public function executeNew(sfWebRequest $request)
    {
        $this->form = $this->configuration->getForm();
        $this->solicitud_reposicion_material = $this->form->getObject();
        $internado = $this->getUser()->getAttribute('internado');
        $this->form->setDefault('internado_id', $internado->getId());
    }
    
    protected function getFilters()
    {   
        $filters = parent::getFilters();        
        $filters['internado_id'] = sfContext::getInstance()->getRequest()->getParameter('internado_id');
        return $filters;
    }
    
    
    public function executeDeleteItem(sfWebRequest $request)
    {        
        $request->checkCSRFProtection();
        
        $objectD = Doctrine::getTable('DetalleMaterial')->find($request->getParameter('id'));
                        
        if (is_object($objectD) && $objectD->delete())
        {
            $this->getUser()->setFlash('notice', 'The item was deleted successfully.');
        }
        $this->redirect(array('sf_route' => 'solicitud_reposicion_material_edit', 'id' => $objectD->getSolicitudReposicionMaterial(),  'internado_id'=> $request->getParameter('internado_id')));
                
    }
    
    
}
