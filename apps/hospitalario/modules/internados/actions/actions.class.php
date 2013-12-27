<?php

require_once dirname(__FILE__).'/../lib/internadosGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/internadosGeneratorHelper.class.php';

/**
 * internados actions.
 *
 * @package    hcps
 * @subpackage internados
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class internadosActions extends autoInternadosActions
{
    
    public function preExecute()
    {
        $user = $this->getUser();
        $user->setAuthenticated(true);
        $user->setAttribute("id",1);
        parent::preExecute();
    }
    
    public function executeVisitar(sfWebRequest $request)
    {        
        $user = $this->getUser();
        $user-> setAttribute('internado',  $this->getRoute()->getObject());
        $internado = $user->getAttribute('internado');        
        $this->internado = $this->getRoute()->getObject();        
        $this->setLayout('layout');        
        $this->getResponse()->setSlot("nombre_completo_internado", $this->internado->getNombreCompleto());
    }       
       
    public function executeSecure()
    {
        
    }
}
