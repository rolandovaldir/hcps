<?php

require_once(sfConfig::get('sf_plugins_dir').'/sfDoctrineGuardPlugin/modules/sfGuardAuth/lib/BasesfGuardAuthActions.class.php');

class sfGuardAuthActions extends BasesfGuardAuthActions
{
    public function executeSignin($request)
    {
        $this->setLayout('login');
        parent::executeSignin($request);
                
    }
}