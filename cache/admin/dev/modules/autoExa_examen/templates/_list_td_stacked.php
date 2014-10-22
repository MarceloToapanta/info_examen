<td colspan="4">
  <?php echo __('%%nombre_tipo_examen%% - %%exa_nombre_examen%% - %%exa_descrip_examen%% - %%exa_observacion%%', array('%%nombre_tipo_examen%%' => $exa_examen->getNombreTipoExamen(), '%%exa_nombre_examen%%' => $exa_examen->getExaNombreExamen(), '%%exa_descrip_examen%%' => $exa_examen->getExaDescripExamen(), '%%exa_observacion%%' => $exa_examen->getExaObservacion()), 'messages') ?>
</td>
