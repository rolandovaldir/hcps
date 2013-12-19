<?php

require_once dirname(__FILE__).'/../lib/reposicion_materialesGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/reposicion_materialesGeneratorHelper.class.php';

/**
 * reposicion_materiales actions.
 *
 * @package    hcps
 * @subpackage reposicion_materiales
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class reposicion_materialesActions extends autoReposicion_materialesActions
{
    public function executeNew(sfWebRequest $request)
    {
        $this->form = $this->configuration->getForm();
        $this->solicitud_reposicion_material = $this->form->getObject();
        $internado = $this->getUser()->getAttribute('internado');
        $this->form->setDefault('internado_id', $internado->getId());
    }
    
    protected function getFilters()
    {   
        $filters = parent::getFilters();        
        $filters['internado_id'] = sfContext::getInstance()->getRequest()->getParameter('internado_id');
        return $filters;
    }
    
    
    public function executeDeleteItem(sfWebRequest $request)
    {
        $res = array('status'=>0,'message'=>'Error!');
        $request->checkCSRFProtection();        
        
        $objectD = Doctrine::getTable('DetalleMaterial')->find($request->getParameter('id'));
                        
        if (is_object($objectD) && $objectD->delete())
        {
            $this->getUser()->setFlash('notice', 'The item was deleted successfully.');
            $res = array('status'=>1,'message'=>'Ok');            
        }
        return $this->renderText(json_encode($res));
    }
    
    
}
