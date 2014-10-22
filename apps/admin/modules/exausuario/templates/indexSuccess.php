<h1>Exa usuarios List</h1>

<table>
  <thead>
    <tr>
      <th>Exa id usuario</th>
      <th>Exa nombre usuario</th>
      <th>Exa pass usuario</th>
      <th>Exa permiso usuario</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($exa_usuarios as $exa_usuario): ?>
    <tr>
      <td><a href="<?php echo url_for('exausuario/edit?exa_id_usuario='.$exa_usuario->getExaIdUsuario()) ?>"><?php echo $exa_usuario->getExaIdUsuario() ?></a></td>
      <td><?php echo $exa_usuario->getExaNombreUsuario() ?></td>
      <td><?php echo $exa_usuario->getExaPassUsuario() ?></td>
      <td><?php echo $exa_usuario->getExaPermisoUsuario() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('exausuario/new') ?>">New</a>
