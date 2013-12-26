<?php

require_once dirname(__FILE__).'/../lib/internados_altaGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/internados_altaGeneratorHelper.class.php';

/**
 * internados_alta actions.
 *
 * @package    hcps
 * @subpackage internados_alta
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class internados_altaActions extends autoInternados_altaActions
{
    
    public function executeVisitar(sfWebRequest $request)
    {     
        $user = $this->getUser();
        $user-> setAttribute('internado',  $this->getRoute()->getObject());
        $internado = $user->getAttribute('internado');        
        $this->internado = $this->getRoute()->getObject();        
        $this->setLayout('layout');        
        $this->getResponse()->setSlot("nombre_completo_internado", $this->internado->getNombreCompleto());
        $this->getResponse()->setSlot("historial",true);
    }
    
}
