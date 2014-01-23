<?php

require_once dirname(__FILE__).'/../lib/uso_hospitalarioGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/uso_hospitalarioGeneratorHelper.class.php';

/**
 * uso_hospitalario actions.
 *
 * @package    hcps
 * @subpackage uso_hospitalario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class uso_hospitalarioActions extends autoUso_hospitalarioActions
{
   
    private $hcps_internado = null;

    public function preExecute()
    {        
        $this->hcps_internado = InternadoTable::getInstance()->find($this->getRequest()->getParameter('internado_id'));
        $siAlta = false;        
        if (is_object($this->hcps_internado)){
            if ($this->hcps_internado->getAlta()){
                if (!$this->getUser()->hasCredential('ver_historial'))
                {
                    $this->forward(sfConfig::get('sf_secure_module'),'secure');
                }
                $siAlta = true;                
            }            
        }
        else{ $siAlta = true; }//si es en reportes misma vista de pacientes dados de alta (sin opciones de edicion y eliminacion)

        $this->getUser()->addCredential($siAlta ? 'Alta' : 'noAlta');
        $this->getUser()->removeCredential($siAlta ? 'noAlta' : 'Alta');

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
    
    /**
     * overwrite the filter to list only the rows for the chosen internado
     * @return string 
     */
    protected function getFilters()
    {   
        $filters = parent::getFilters();        
        $filters['internado_id'] = sfContext::getInstance()->getRequest()->getParameter('internado_id');
        return $filters;
    }
    
    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $vals = $request->getParameter($form->getName());        
        
        if ($form->getObject()->isNew()){        
            $vals['internado_id'] = $request->getParameter('internado_id');
        }        
        else{
            $vals['internado_id'] = $form->getObject()->getInternadoId();            
        }        
        
        $request->setParameter($form->getName(),$vals);        
        parent::processForm($request, $form);
        
    }
    
    public function executeDeleteItem(sfWebRequest $request)
    {        
        $request->checkCSRFProtection();
        
        $objectD = Doctrine::getTable('DetalleUsoHospitalario')->find($request->getParameter('id'));
                        
        if (is_object($objectD) && $objectD->delete())
        {
            $this->getUser()->setFlash('notice', 'The item was deleted successfully.');
        }
        $this->redirect(array('sf_route' => 'uso_hospitalario_edit', 'id' => $objectD->getUsoHospitalarioId(),  'internado_id'=> $request->getParameter('internado_id')));
                
    }
    
}
