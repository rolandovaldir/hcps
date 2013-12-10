<?php

require_once dirname(__FILE__).'/../lib/programacion_cirugiaGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/programacion_cirugiaGeneratorHelper.class.php';

/**
 * programacion_cirugia actions.
 *
 * @package    hcps
 * @subpackage programacion_cirugia
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class programacion_cirugiaActions extends autoProgramacion_cirugiaActions
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
