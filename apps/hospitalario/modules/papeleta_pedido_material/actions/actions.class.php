<?php

require_once dirname(__FILE__).'/../lib/papeleta_pedido_materialGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/papeleta_pedido_materialGeneratorHelper.class.php';

/**
 * papeleta_pedido_material actions.
 *
 * @package    hcps
 * @subpackage papeleta_pedido_material
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class papeleta_pedido_materialActions extends autoPapeleta_pedido_materialActions
{
     private $hcps_internado = null;


    public function preExecute()
    {
        $request = $this->getRequest();         
        $this->hcps_internado = InternadoTable::getInstance()->find($request->getParameter('internado_id'));
        
        if (is_object($this->hcps_internado) && !$this->hcps_internado->getAlta()){
            $this->getUser()->addCredential('noHistory');
            $this->getUser()->removeCredential('siHistory');                    
        }
        else{            
            $this->getUser()->addCredential('siHistory');
            $this->getUser()->removeCredential('noHistory');
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
    
    public function executeNew(sfWebRequest $request)
    {        
        parent::executeNew($request);        
        $this->form->setDefault('internado_id',$request->getParameter('internado_id'));        
    }
    
    public function executeDeleteItem(sfWebRequest $request)
    {        
        $request->checkCSRFProtection();
        
        $objectD = Doctrine::getTable('DetallePapeletaPedidoMaterial')->find($request->getParameter('id'));
                        
        if (is_object($objectD) && $objectD->delete())
        {
            $this->getUser()->setFlash('notice', 'The item was deleted successfully.');
        }
        $this->redirect(array('sf_route' => 'papeleta_pedido_material_edit', 'id' => $objectD->getPapeletaPedidoMaterialId(),  'internado_id'=> $request->getParameter('internado_id')));
                
    }
    
}
