<?php

require_once dirname(__FILE__).'/../lib/solicitudes_examen_laboratorioGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/solicitudes_examen_laboratorioGeneratorHelper.class.php';

/**
 * solicitudes_examen_laboratorio actions.
 *
 * @package    hcps
 * @subpackage solicitudes_examen_laboratorio
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class solicitudes_examen_laboratorioActions extends autoSolicitudes_examen_laboratorioActions
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
        }
        $request->setParameter($form->getName(),$vals);
        
        parent::processForm($request, $form);
    } 
    
}
