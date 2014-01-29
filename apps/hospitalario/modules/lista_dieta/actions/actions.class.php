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
        $this->hcps_internado = InternadoTable::getInstance()->find($this->getRequest()->getParameter('internado_id'));
        $siAlta = false;        
        if (is_object($this->hcps_internado)){
            if ($this->hcps_internado->getAlta()){
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
        $filters['internado_id'] = is_object($this->hcps_internado) ? $this->hcps_internado->getId() : array();
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
