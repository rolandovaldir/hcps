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
    public function executeVisitar(sfWebRequest $request)
    {        
        $user = $this->getUser();
        $user-> setAttribute('internado',  $this->getRoute()->getObject());
        $internado = $user->getAttribute('internado');
        $this->nombre_completo_internado = $this->getRoute()->getObject()->getNombreCompleto();                
        $this->internado = $this->getRoute()->getObject();
        $this->setLayout('layout');
    }
   
    public function executeSecure()
    {
        
    }
}
