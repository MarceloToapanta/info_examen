<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_exa_nombre_usuario">
  <?php if ('exa_nombre_usuario' == $sort[0]): ?>
    <?php echo link_to(__('Nombre Usuario', array(), 'messages'), '@exa_usuario', array('query_string' => 'sort=exa_nombre_usuario&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Nombre Usuario', array(), 'messages'), '@exa_usuario', array('query_string' => 'sort=exa_nombre_usuario&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_exa_login">
  <?php if ('exa_login' == $sort[0]): ?>
    <?php echo link_to(__('Usuario', array(), 'messages'), '@exa_usuario', array('query_string' => 'sort=exa_login&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Usuario', array(), 'messages'), '@exa_usuario', array('query_string' => 'sort=exa_login&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_exa_pass_usuario">
  <?php if ('exa_pass_usuario' == $sort[0]): ?>
    <?php echo link_to(__('Clave', array(), 'messages'), '@exa_usuario', array('query_string' => 'sort=exa_pass_usuario&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Clave', array(), 'messages'), '@exa_usuario', array('query_string' => 'sort=exa_pass_usuario&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_exa_permiso_usuario">
  <?php if ('exa_permiso_usuario' == $sort[0]): ?>
    <?php echo link_to(__('Permiso', array(), 'messages'), '@exa_usuario', array('query_string' => 'sort=exa_permiso_usuario&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Permiso', array(), 'messages'), '@exa_usuario', array('query_string' => 'sort=exa_permiso_usuario&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>