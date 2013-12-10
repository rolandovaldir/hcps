<?php $extra_url_custom_id = 'internado_id=' . $sf_request->getParameter('internado_id') ?>
<?php use_helper('I18N', 'Date') ?>
<?php include_partial('internado/assets') ?>

<div id="sf_admin_container">    
  <h1><?php echo __('Bienvenido al Sistema', array(), 'messages') ?></h1>

  <?php include_partial('internado/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('internado/list_header', array('pager' => $pager)) ?>
  </div>


  <div id="sf_admin_content">
    <?php // include_partial('internado/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper,'extra_url_custom_id' => $extra_url_custom_id)) ?>
    <ul class="sf_admin_actions">
      <?php // include_partial('internado/list_batch_actions', array('helper' => $helper)) ?>
      <?php // include_partial('internado/list_actions', array('helper' => $helper)) ?>
    </ul>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('internado/list_footer', array('pager' => $pager)) ?>
  </div>
</div>
