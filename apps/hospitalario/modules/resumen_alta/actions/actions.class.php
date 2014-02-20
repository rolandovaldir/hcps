<?php

require_once dirname(__FILE__).'/../lib/resumen_altaGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/resumen_altaGeneratorHelper.class.php';

/**
 * resumen_alta actions.
 *
 * @package    hcps
 * @subpackage resumen_alta
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class resumen_altaActions extends autoResumen_altaActions
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
        if (is_object($this->form) && !$this->form->getObject()->isNew()){            
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
        if(!$form->getObject()->isNew()){ exit(); }
        $vals = $request->getParameter($form->getName());                
        $vals['internado_id'] = $request->getParameter('internado_id');        
        $request->setParameter($form->getName(),$vals);
        parent::processForm($request, $form);
    }   
    
}
