<?php $aux_extra_url_custom_id = $this->params['extra_url_custom_id']!='' ? '\'query_string\'=>$extra_url_custom_id' : '' ?>
<td>
  <ul class="sf_admin_td_actions">
<?php foreach ($this->configuration->getValue('list.object_actions') as $name => $params): ?>
<?php if ('_delete' == $name): ?>
    <?php //echo $this->addCredentialCondition('[?php echo $helper->linkToDelete($'.$this->getSingularName().', '.$this->asPhp($params).') ?]', $params) ?>    
    <?php         
    echo $this->addCredentialCondition('[?php ' . ' $aux_form = new BaseForm(); $aux_csrf_function = $aux_form->isCSRFProtected() ? \'&\' . $aux_form->getCSRFFieldName() . \'=\' . $aux_form->getCSRFToken() : \'\'; ' .
         'echo \'<li class="sf_admin_action_delete">\' . link_to(__(\'' . $params['label'] . '\', array(), \'sf_admin\'), $helper->getUrlForAction(\'delete\'), $'.$this->getSingularName().', array(\'onclick\'=>"' . 
         "if(confirm('" . $params['confirm'] . "')){ var co = dijit.byId('dojotheme-maincontainer'); dojo.xhrPost({url:this.href, postData: 'sf_method=delete" . '" . $aux_csrf_function . "' . "',load:function(data){ co.set('content',data); },error: function(error){ co.set('content',error);} }); co.set('content','" . '<span class=\"dijitContentPaneLoading\"><span class=\"dijitInline dijitIconLoading\"></span>Loading...</span>' . "'); } return false;" . 
         '",' . $aux_extra_url_custom_id . ') ).\'</li>\' ?]', $params) 
    ?>      
<?php elseif ('_edit' == $name): ?>
    <?php //echo $this->addCredentialCondition('[?php echo $helper->linkToEdit($'.$this->getSingularName().', '.$this->asPhp($params).') ?]', $params)  ?>      
    <?php echo $this->addCredentialCondition('[?php echo \'<li class="sf_admin_action_edit">\' . link_to(__(\'' . $params['label'] . '\', array(), \'sf_admin\'), $helper->getUrlForAction(\'edit\'), $'.$this->getSingularName().', array(\'onclick\'=>"dijit.byId(\'dojotheme-maincontainer\').set(\'href\',this.href);return false;",' . $aux_extra_url_custom_id . ') ).\'</li>\'  ?]', $params) ?>    
      
<?php else: ?>
    <li class="sf_admin_action_<?php echo $params['class_suffix'] ?>">
      <?php echo $this->addCredentialCondition($this->getLinkToAction($name, $params, true), $params) ?>
        
    </li>
<?php endif; ?>
<?php endforeach; ?>
  </ul>    
</td>