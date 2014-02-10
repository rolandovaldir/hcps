  public function executeDelete(sfWebRequest $request)
  {
<?php if (array_key_exists('sfGuard_check_created_by', $this->params)): ?>      
    if ($this->getRoute()->getObject()->getCreatedBy()!=$this->getUser()->getAttribute('<?php echo $this->params['sfGuard_check_created_by']?>', null, 'sfGuardSecurityUser')){
        $this->forward(sfConfig::get('sf_secure_module'),'secure');
    }
<?php endif ?>    
    $request->checkCSRFProtection();

    $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));

    if ($this->getRoute()->getObject()->delete())
    {
      $this->getUser()->setFlash('notice', 'The item was deleted successfully.');
    }
    
<?php $aux_extra_url_custom_id =  array_key_exists('extra_url_custom_id', $this->params) ? " . '?" . $this->params['extra_url_custom_id'] . '=\' . $request->getParameter(\'' .  $this->params['extra_url_custom_id'] . '\')' : '' ?>    
    $this->redirect('@<?php echo $this->getUrlForAction('list') ?>' <?php echo $aux_extra_url_custom_id ?>);
  }
