<?php use_helper('I18N', 'Date') ?>
<?php include_partial('exa_tubo_examen/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Nueva Asignacion', array(), 'messages') ?></h1>

  <?php include_partial('exa_tubo_examen/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('exa_tubo_examen/form_header', array('exa_tubo_examen' => $exa_tubo_examen, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('exa_tubo_examen/form', array('exa_tubo_examen' => $exa_tubo_examen, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('exa_tubo_examen/form_footer', array('exa_tubo_examen' => $exa_tubo_examen, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
