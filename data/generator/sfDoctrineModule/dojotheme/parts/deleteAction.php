  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));

    if ($this->getRoute()->getObject()->delete())
    {
      $this->getUser()->setFlash('notice', 'The item was deleted successfully.');
    }
    
<?php $aux_extra_url_custom_id =  array_key_exists('extra_url_custom_id', $this->params) ? " . '?" . $this->params['extra_url_custom_id'] . '=\' . $request->getParameter(\'' .  $this->params['extra_url_custom_id'] . '\')' : '' ?>    
    $this->redirect('@<?php echo $this->getUrlForAction('list') ?>' <?php echo $aux_extra_url_custom_id ?>);
  }
