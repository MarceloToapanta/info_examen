<?php use_helper('I18N', 'Date') ?>
<?php include_partial('exa_usuario/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Editar Usuario', array(), 'messages') ?></h1>

  <?php include_partial('exa_usuario/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('exa_usuario/form_header', array('exa_usuario' => $exa_usuario, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('exa_usuario/form', array('exa_usuario' => $exa_usuario, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('exa_usuario/form_footer', array('exa_usuario' => $exa_usuario, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
