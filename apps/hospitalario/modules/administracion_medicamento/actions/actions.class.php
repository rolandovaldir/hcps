<?php

require_once dirname(__FILE__).'/../lib/administracion_medicamentoGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/administracion_medicamentoGeneratorHelper.class.php';

/**
 * administracion_medicamento actions.
 *
 * @package    hcps
 * @subpackage administracion_medicamento
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class administracion_medicamentoActions extends autoAdministracion_medicamentoActions
{
    
    public function preExecute()
    {
        $request = $this->getRequest(); 
        $user = $this->getUser();
        $user->setAuthenticated(true);
        $objInternado = InternadoTable::getInstance()->find($request->getParameter('internado_id'));
        if (is_object($objInternado)){            
            if ($objInternado->getAlta()){
                $user->addCredential('siHistory');
                $user->removeCredential('noHistory');
            }
            else{
                $user->addCredential('noHistory');
                $user->removeCredential('siHistory');
            }
        }
        var_dump($user->hasCredential('siHistory'));
        var_dump($user->hasCredential('noHistory'));
        parent::preExecute();
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
        //var_dump($this->form->getDefault('file_internacion_id'));
    }
    
}
