<?php

require_once dirname(__FILE__).'/../lib/recien_nacidosGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/recien_nacidosGeneratorHelper.class.php';

/**
 * recien_nacidos actions.
 *
 * @package    hcps
 * @subpackage recien_nacidos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class recien_nacidosActions extends autoRecien_nacidosActions
{
    private $hcps_internado = null;

    public function preExecute()
    {
        $request = $this->getRequest();         
        $this->hcps_internado = InternadoTable::getInstance()->find($request->getParameter('internado_id'));
        
        if ((is_object($this->hcps_internado) && !$this->hcps_internado->getAlta())){
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
    
    public function executeNew(sfWebRequest $request)
    {
        $this->form = $this->configuration->getForm();
        $this->examen_medico_recien_nacido = $this->form->getObject();
        $internado = $this->getUser()->getAttribute('internado');
        $this->form->setDefault('internado_id', $internado->getId());
    }
    
    protected function getFilters()
    {   
        $filters = parent::getFilters();        
        $filters['internado_id'] = sfContext::getInstance()->getRequest()->getParameter('internado_id');
        return $filters;
    }
    
    public function executeApgar($request)
    {
        $user = $this->getUser();
        $this->examen_fisico_recien_nacido = $this->getRoute()->getObject();
        $user->setAttribute('recien_nacido', $this->examen_fisico_recien_nacido);
        
        if(sfConfig::get('sf_environment') == 'dev')
        {
            $env = '_dev';
        }
        $this->redirect('/hospitalario'.$env.'.php/apgar');   
    }
    
    public function executeVerForm(sfWebRequest $request)
    {
        $this->recien_nacido = $this->getRoute()->getObject();
        $this->internado_id = $request->getParameter('id');
        
    }
}
