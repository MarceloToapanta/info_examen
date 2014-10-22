<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_nombre_tipo_examen">
  <?php echo __('Tipo de Examen', array(), 'messages') ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_exa_nombre_examen">
  <?php if ('exa_nombre_examen' == $sort[0]): ?>
    <?php echo link_to(__('Nombre de Examen', array(), 'messages'), '@exa_examen', array('query_string' => 'sort=exa_nombre_examen&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Nombre de Examen', array(), 'messages'), '@exa_examen', array('query_string' => 'sort=exa_nombre_examen&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_exa_descrip_examen">
  <?php if ('exa_descrip_examen' == $sort[0]): ?>
    <?php echo link_to(__('Descripción', array(), 'messages'), '@exa_examen', array('query_string' => 'sort=exa_descrip_examen&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Descripción', array(), 'messages'), '@exa_examen', array('query_string' => 'sort=exa_descrip_examen&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_exa_observacion">
  <?php if ('exa_observacion' == $sort[0]): ?>
    <?php echo link_to(__('Observaciones', array(), 'messages'), '@exa_examen', array('query_string' => 'sort=exa_observacion&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Observaciones', array(), 'messages'), '@exa_examen', array('query_string' => 'sort=exa_observacion&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>