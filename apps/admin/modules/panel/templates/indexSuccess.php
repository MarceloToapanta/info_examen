<?php slot('menu') ?>
    <li id="nombreu"><?php echo "(".$nombre.")" ; ?></li>
    <li ><?php echo link_to("Cerrar sesión", 'panel/logout'); ?></li>
<?php end_slot() ?>
<div class="instrucion">
    <div class="titulo">Panel de Administracion</div>
    <div class="subtitulo">Permite gestionar los diferentes modulos, para abrir modulo click en la imagen.</div>
</div>

<table id="panel">
  <tr>
    <td>Tipos Examen L.</td>
    <td>Examenes Lab.</td>
    <td>Tubos de Ensayo</td>
    <td>Tubos Examenes</td>
    <td>Usuarios</td>
  </tr>
  <tr>
    <td><?php echo link_to(image_tag('panel/tipoexa.png'),"exa_tipo_examen/index")?></td>
    <td><?php echo link_to(image_tag('panel/exa.png'),"exa_examen/index")?></td>
    <td><?php echo link_to(image_tag('panel/tubo.png'),"exa_tubo/index")?></td>
    <td><?php echo link_to(image_tag('panel/tuboe.png'),"exa_tubo_examen/index")?></td>
    <td><?php echo link_to(image_tag('panel/usuario.png'),"exa_usuario/index")?></td>
  
  </tr>
  

</table>