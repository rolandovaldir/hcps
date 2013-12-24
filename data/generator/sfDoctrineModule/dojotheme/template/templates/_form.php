<?php if (array_key_exists('extra_url_custom_id', $this->params)): $aux_extra_url_custom_id = '\'extra_url_custom_id\' => $extra_url_custom_id' ?>
[?php $extra_url_custom_id = '<?php echo $this->params['extra_url_custom_id'] ?>=' . $sf_request->getParameter('<?php echo $this->params['extra_url_custom_id'] ?>') ?]
<?php else: $aux_extra_url_custom_id = '' ?>
<?php endif ?>
[?php use_stylesheets_for_form($form) ?]
[?php use_javascripts_for_form($form) ?]

<div class="sf_admin_form">
  [?php //echo form_tag_for($form, '@<?php echo $this->params['route_prefix'] ?>',array('data-dojo-type'=>'dijit/form/Form')) ?]
  [?php echo $form->renderFormTag(url_for_form($form, '@<?php echo $this->params['route_prefix'] ?>')<?php echo array_key_exists('extra_url_custom_id', $this->params) ? ' . \'?\' . $extra_url_custom_id ' : '' ?>, array('data-dojo-type'=>'dijit/form/Form')) ?]  
    <script type="dojo/method" data-dojo-event="onSubmit">
        dojo.xhrPost({
            form: this.get('id'),
            load: function(data) {
                dijit.byId('dojotheme-maincontainer').set('content',data);
            },
            error: function(error) {
                console.log(error);
            }
        });
        dijit.byId('dojotheme-maincontainer').set('content',dijit.byId('dojotheme-maincontainer').loadingMessage);
        return false;
    </script>
    [?php echo $form->renderHiddenFields(false) ?]

    [?php if ($form->hasGlobalErrors()): ?]
      [?php echo $form->renderGlobalErrors() ?]
    [?php endif; ?]

    [?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?]
      [?php include_partial('<?php echo $this->getModuleName() ?>/form_fieldset', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'fields' => $fields, 'fieldset' => $fieldset, <?php echo $aux_extra_url_custom_id ?>)) ?]
    [?php endforeach; ?]

    [?php include_partial('<?php echo $this->getModuleName() ?>/form_actions', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper, <?php echo $aux_extra_url_custom_id ?>)) ?]
  </form>
</div>
