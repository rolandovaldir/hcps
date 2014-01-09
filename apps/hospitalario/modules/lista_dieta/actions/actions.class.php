<?php

require_once dirname(__FILE__).'/../lib/lista_dietaGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/lista_dietaGeneratorHelper.class.php';

/**
 * lista_dieta actions.
 *
 * @package    hcps
 * @subpackage lista_dieta
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class lista_dietaActions extends autoLista_dietaActions
{
    
    private $hcps_internado = null;


    public function preExecute()
    {
        $request = $this->getRequest();         
        $this->hcps_internado = InternadoTable::getInstance()->find($request->getParameter('internado_id'));
        
        if (!$this->getUser()->hasCredential('enfermera') || !is_object($this->hcps_internado) || $this->hcps_internado->getAlta() ){
            $this->getUser()->addCredential('siHistory');
            $this->getUser()->removeCredential('noHistory');
        }
        else{
            $this->getUser()->addCredential('noHistory');
            $this->getUser()->removeCredential('siHistory');                    
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
            if ($form->getObject()->getEnfermeraId()!=$this->getUser()->getHcpsUser()->getId()){
                $this->forward(sfConfig::get('sf_secure_module'),'secure');
            }
        }
        $vals['enfermera_id'] = $this->getUser()->getHcpsUser()->getId();
        
        $request->setParameter($form->getName(),$vals);
        
        parent::processForm($request, $form);
    }
    
    public function executeDelete(sfWebRequest $request)
    {
        if ($this->getRoute()->getObject()->getEnfermeraId()!=$this->getUser()->getHcpsUser()->getId()){
            $this->forward(sfConfig::get('sf_secure_module'),'secure');
        }
        parent::executeDelete($request);
    }
}
