<?php

require_once dirname(__FILE__).'/../lib/autorizaciones_diagnostico_tratamientoGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/autorizaciones_diagnostico_tratamientoGeneratorHelper.class.php';

/**
 * autorizaciones_diagnostico_tratamiento actions.
 *
 * @package    hcps
 * @subpackage autorizaciones_diagnostico_tratamiento
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class autorizaciones_diagnostico_tratamientoActions extends autoAutorizaciones_diagnostico_tratamientoActions
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
    
    public function executeNew(sfWebRequest $request)
    {        
        parent::executeNew($request);        
        $this->form->setDefault('internado_id',$request->getParameter('internado_id'));
        //var_dump($this->form->getDefault('file_internacion_id'));
    }
}
