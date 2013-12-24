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
