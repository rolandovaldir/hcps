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
        $internado_id = $this->getRequest()->getParameter('internado_id',null);        
        if ($internado_id){
            $this->hcps_internado = InternadoTable::getInstance()->find($internado_id);
        }       
        
        if (is_object($this->hcps_internado) && !$this->getUser()->isSuperAdmin()){
            /*si el internado esta de alta solo los usuarios con permiso ver_historial 
              pueden ver los registros del intenado*/
            if ($this->hcps_internado->getAlta() && !$this->getUser()->hasCredential('ver_historial')){
                $this->forward(sfConfig::get('sf_secure_module'),'secure');
            }
            /*si el internado esta en una planta diferente del asignado al usuario
              solo los usuarios con permiso ver_toda_area pueden ver los registros del intenado*/
            if (!$this->getUser()->checkPlantaAllowedByCamaId($this->hcps_internado->getCamaId())
                && !$this->getUser()->hasCredential('ver_toda_area')){
                $this->forward(sfConfig::get('sf_secure_module'),'secure');
            }            
        }
        if (!is_object($this->hcps_internado) || $this->hcps_internado->getAlta() 
                || !$this->getUser()->hasCredential(array('crear','enfermera'))){
            $siAlta = true;
        }
        else { $siAlta = false; }
        
        $this->getUser()->addCredential($siAlta ? 'Alta' : 'noAlta');
        $this->getUser()->removeCredential($siAlta ? 'noAlta' : 'Alta');

        parent::preExecute();
    }
        
    public function postExecute()
    {
        if ($this->getUser()->hasCredential('Alta') && is_object($this->form)){            
            $this->form->disableAllWidgets();
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
