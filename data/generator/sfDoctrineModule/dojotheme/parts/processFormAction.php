  protected function processForm(sfWebRequest $request, sfForm $form)
  {  
<?php if (array_key_exists('sfGuard_check_created_by', $this->params)): ?>      
    if (!$form->getObject()->isNew() && $this->getRoute()->getObject()->getCreatedBy()!=$this->getUser()->getAttribute('<?php echo $this->params['sfGuard_check_created_by']?>', null, 'sfGuardSecurityUser')){
        $this->forward(sfConfig::get('sf_secure_module'),'secure');
    }
<?php endif ?> 
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      try {
        $<?php echo $this->getSingularName() ?> = $form->save();
      } catch (Doctrine_Validator_Exception $e) {

        $errorStack = $form->getObject()->getErrorStack();

        $message = get_class($form->getObject()) . ' has ' . count($errorStack) . " field" . (count($errorStack) > 1 ?  's' : null) . " with validation errors: ";
        foreach ($errorStack as $field => $errors) {
            $message .= "$field (" . implode(", ", $errors) . "), ";
        }
        $message = trim($message, ', ');

        $this->getUser()->setFlash('error', $message);
        return sfView::SUCCESS;
      }

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $<?php echo $this->getSingularName() ?>)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');
        <?php $aux_extra_url_custom_id = array_key_exists('extra_url_custom_id', $this->params) ? " . '?" . $this->params['extra_url_custom_id'] . '=\' . $request->getParameter(\'' .  $this->params['extra_url_custom_id'] . '\')' : '' ?> 
        $this->redirect('@<?php echo $this->getUrlForAction('new') ?>' <?php echo $aux_extra_url_custom_id ?>);
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);
        <?php $aux_extra_url_custom_id = array_key_exists('extra_url_custom_id', $this->params) ? ' \'' . $this->params['extra_url_custom_id'] . '\'=> $request->getParameter(\'' .  $this->params['extra_url_custom_id'] . '\')' : '' ?> 
        $this->redirect(array('sf_route' => '<?php echo $this->getUrlForAction('edit') ?>', 'sf_subject' => $<?php echo $this->getSingularName() ?>, <?php echo $aux_extra_url_custom_id ?>));
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
