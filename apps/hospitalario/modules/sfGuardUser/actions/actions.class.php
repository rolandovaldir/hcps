<?php

require_once(sfConfig::get('sf_plugins_dir').'/sfDoctrineGuardPlugin/modules/sfGuardUser/lib/BasesfGuardUserActions.class.php');

class sfGuardUserActions extends BasesfGuardUserActions
{
    
    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $vals = $request->getParameter($form->getName());        
        $vals['tipo'] = substr($vals['custom_tipo_empleado_id'], 0, 1);        
        $vals['empleado_id'] = substr($vals['custom_tipo_empleado_id'], 1);
        unset($vals['custom_tipo_empleado_id']);
        $request->setParameter($form->getName(),$vals);
        
        parent::processForm($request, $form);
    }
    
}