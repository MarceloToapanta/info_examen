<?php use_helper('I18N', 'Date') ?>
<?php include_partial('exa_examen/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Nuevo Examen', array(), 'messages') ?></h1>

  <?php include_partial('exa_examen/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('exa_examen/form_header', array('exa_examen' => $exa_examen, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('exa_examen/form', array('exa_examen' => $exa_examen, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('exa_examen/form_footer', array('exa_examen' => $exa_examen, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
