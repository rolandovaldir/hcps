<?php $aux_extra_url_custom_id = $this->params['extra_url_custom_id']!='' ? '\'query_string\'=>$extra_url_custom_id' : '';
      $extra_url_custom_id = $this->params['extra_url_custom_id']!='' ? ' . \'?\' . $extra_url_custom_id' : '';
?>
<ul class="sf_admin_actions">
<?php foreach (array('new', 'edit') as $action): ?>
<?php if ('new' == $action): ?>
[?php if ($form->isNew()): ?]
<?php else: ?>
[?php else: ?]
<?php endif; ?>
<?php foreach ($this->configuration->getValue($action.'.actions') as $name => $params): ?>
<?php if ('_delete' == $name): ?>
  <?php echo $this->addCredentialCondition('[?php //echo $helper->linkToDelete($form->getObject(), '.$this->asPhp($params).') ?]', $params) ?>
  <?php echo $this->addCredentialCondition('[?php if (!$form->getObject()->isNew()){ $aux_form = new BaseForm(); $aux_csrf_function = $aux_form->isCSRFProtected() ? \'&\' . $aux_form->getCSRFFieldName() . \'=\' . $aux_form->getCSRFToken() : \'\'; ' . 
       'echo \'<li class="sf_admin_action_delete">\' . link_to(__(\'' . $params['label'] . '\', array(), \'sf_admin\'), $helper->getUrlForAction(\'delete\'), $form->getObject(), array(\'onclick\'=>"' .
       "if(confirm('" . $params['confirm'] . "')){ var co = dijit.byId('dojotheme-maincontainer'); dojo.xhrPost({url:this.href, postData: 'sf_method=delete" . '" . $aux_csrf_function . "' . "',load:function(data){ co.set('content',data); },error: function(error){ co.set('content',error);} }); co.set('content',co.loadingMessage ); } return false;" . 
       '",' . $aux_extra_url_custom_id . ' )).\'</li>\'; } ?]', $params) ?> 

<?php elseif ('_list' == $name): ?>
  <?php //echo $this->addCredentialCondition('[?php echo $helper->linkToList('.$this->asPhp($params).') ?]', $params) ?>
  <?php echo $this->addCredentialCondition('[?php echo \'<li class="sf_admin_action_list">\' . link_to(__(\'' . $params['label'] . '\', array(), \'sf_admin\'), \'@\' . $helper->getUrlForAction(\'list\') ' . $extra_url_custom_id . ' , array(\'onclick\'=>"dijit.byId(\'dojotheme-maincontainer\').set(\'href\',this.href);return false;") ).\'</li>\'  ?]', $params) ?>

<?php elseif ('_save' == $name): ?>
  <?php //echo $this->addCredentialCondition('[?php echo $helper->linkToSave($form->getObject(), '.$this->asPhp($params).') ?]', $params) ?>
  <?php echo $this->addCredentialCondition('[?php echo \'<li class="sf_admin_action_save"><input type="submit" data-dojo-type="dijit/form/Button" data-dojo-props="iconClass:\\\'dijitEditorIcon dijitEditorIconSave\\\',label:\\\'\'.__(\'' . $params['label'] . '\', array(), \'sf_admin\').\'\\\'" /></li>\' ?]', $params) ?>  

<?php elseif ('_save_and_add' == $name): ?>
  <?php //echo $this->addCredentialCondition('[?php echo $helper->linkToSaveAndAdd($form->getObject(), '.$this->asPhp($params).') ?]', $params) ?>
  <?php echo $this->addCredentialCondition('[?php if ($form->getObject()->isNew()) { echo \'<li class="sf_admin_action_save"><input type="submit" name="_save_and_add" data-dojo-type="dijit/form/Button" data-dojo-props="iconClass:\\\'dijitEditorIcon dijitEditorIconSave\\\',label:\\\'\'.__(\'' . $params['label'] . '\', array(), \'sf_admin\').\'\\\'" /></li>\'; } ?]', $params) ?>  

<?php else: ?>
  <li class="sf_admin_action_<?php echo $params['class_suffix'] ?>">
[?php if (method_exists($helper, 'linkTo<?php echo $method = ucfirst(sfInflector::camelize($name)) ?>')): ?]
  <?php echo $this->addCredentialCondition('[?php echo $helper->linkTo'.$method.'($form->getObject(), '.$this->asPhp($params).') ?]', $params) ?>

[?php else: ?]
  <?php echo $this->addCredentialCondition($this->getLinkToAction($name, $params, true), $params) ?>

[?php endif; ?]
  </li>
<?php endif; ?>
<?php endforeach; ?>
<?php endforeach; ?>
[?php endif; ?]
</ul>
