<?php use_helper('I18N', 'Date') ?>
<?php include_partial('exa_tubo/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Nuevo Tubo E.', array(), 'messages') ?></h1>

  <?php include_partial('exa_tubo/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('exa_tubo/form_header', array('exa_tubo' => $exa_tubo, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('exa_tubo/form', array('exa_tubo' => $exa_tubo, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('exa_tubo/form_footer', array('exa_tubo' => $exa_tubo, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
