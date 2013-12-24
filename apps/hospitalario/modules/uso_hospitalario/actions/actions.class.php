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
