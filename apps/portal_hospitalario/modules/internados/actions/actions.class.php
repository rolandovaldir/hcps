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
        $env = '';
        if(sfConfig::get('sf_environment') == 'dev')
        {
            $env = '_dev';
        } 
        
        $user = $this->getUser();
        $user-> setAttribute('internado',  $this->getRoute()->getObject());
        $internado = $user->getAttribute('internado');

        $this->redirect('/hospitalario'.$env.'.php/internado?id='.$internado->getId());
    }
}
