[?php use_stylesheets_for_form($form) ?]
[?php use_javascripts_for_form($form) ?]
<?php $dojo_forajax_component_id = array_key_exists('dojo_forajax_component_id', $this->params) ? $this->params['dojo_forajax_component_id'] : 'dojotheme-maincontainer' ?>
<div data-dojo-type="dijit/Fieldset"  data-dojo-props="open:false" class="forFilterFieldset">
  <legend>Filtros</legend>
  [?php if ($form->hasGlobalErrors()): ?]
    [?php echo $form->renderGlobalErrors() ?]
  [?php endif; ?]

  <form action="[?php echo url_for('<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'filter')) <?php echo array_key_exists('extra_url_custom_id', $this->params)? '. \'?\' . $extra_url_custom_id' : '' ?> ?]" method="post" data-dojo-type="dijit/form/Form">
      <script type="dojo/method" data-dojo-event="onSubmit">
        dojo.xhrPost({
            form: this.get('domNode'),
            load: function(data) {
                dijit.byId('<?php echo $dojo_forajax_component_id ?>').set('content',data);
            },
            error: function(error) {
                console.log(error);
            }
        });
        dijit.byId('<?php echo $dojo_forajax_component_id ?>').set('content',dijit.byId('<?php echo $dojo_forajax_component_id ?>').loadingMessage);
        return false;
    </script>
    <table cellspacing="0">      
      <tbody>[?php $aux_filters=0 ?]
        [?php foreach ($configuration->getFormFilterFields($form) as $name => $field): ?]
        [?php if ((isset($form[$name]) && $form[$name]->isHidden()) || (!isset($form[$name]) && $field->isReal())) continue ?]
          [?php include_partial('<?php echo $this->getModuleName() ?>/filters_field', array(
            'name'       => $name,
            'attributes' => $field->getConfig('attributes', array()),
            'label'      => $field->getConfig('label'),
            'help'       => $field->getConfig('help'),
            'form'       => $form,
            'field'      => $field,
            'class'      => 'sf_admin_form_row sf_admin_'.strtolower($field->getType()).' sf_admin_filter_field_'.$name,
          )); $aux_filters+=2 ?]
        [?php endforeach; ?]
      </tbody>
      <tfoot>
        <tr>
          <td colspan="[?php echo $aux_filters ?]">
            [?php echo $form->renderHiddenFields() ?]
            [?php // echo link_to(__('Reset', array(), 'sf_admin'), '<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'filter'), array('query_string' => '_reset', 'method' => 'post')) ?]                        
            [?php $aux_form = new BaseForm(); $aux_csrf_function = $aux_form->isCSRFProtected() ?  $aux_form->getCSRFFieldName() . '=' . $aux_form->getCSRFToken() : '';                  
                  echo link_to(__('Reset', array(), 'sf_admin'), '<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'filter'), array('query_string' =>'_reset'<?php echo array_key_exists('extra_url_custom_id', $this->params) ? ' . \'&\' . $extra_url_custom_id' : '' ?>, 
                       'data-dojo-type'=>'dijit/form/Button','data-dojo-props'=>"iconClass:'dijitEditorIcon dijitEditorIconUndo',onClick:function(){ var co = dijit.byId('<?php echo $dojo_forajax_component_id ?>'); dojo.xhrPost({url:this.href, postData: '" . $aux_csrf_function . "',load:function(data){ co.set('content',data); },error: function(error){ co.set('content',error);} }); co.set('content',co.loadingMessage); return false;}" ))  ?]
            <button type="submit" data-dojo-type="dijit/form/Button" data-dojo-props="iconClass:'dijitEditorIcon dijitEditorIconSelectAll'" >[?php echo __('Filter', array(), 'sf_admin') ?]</button>
          </td>
        </tr>
      </tfoot>
    </table>
  </form>
</div>
