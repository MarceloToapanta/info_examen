<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_ext_nombre_color">
  <?php if ('ext_nombre_color' == $sort[0]): ?>
    <?php echo link_to(__('Nombre Color Tubo', array(), 'messages'), '@exa_tubo', array('query_string' => 'sort=ext_nombre_color&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Nombre Color Tubo', array(), 'messages'), '@exa_tubo', array('query_string' => 'sort=ext_nombre_color&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_ext_codigo_color">
  <?php if ('ext_codigo_color' == $sort[0]): ?>
    <?php echo link_to(__('Codigo Color Tubo', array(), 'messages'), '@exa_tubo', array('query_string' => 'sort=ext_codigo_color&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Codigo Color Tubo', array(), 'messages'), '@exa_tubo', array('query_string' => 'sort=ext_codigo_color&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>