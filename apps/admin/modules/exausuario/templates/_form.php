<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('exausuario/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?exa_id_usuario='.$form->getObject()->getExaIdUsuario() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('exausuario/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'exausuario/delete?exa_id_usuario='.$form->getObject()->getExaIdUsuario(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['exa_nombre_usuario']->renderLabel() ?></th>
        <td>
          <?php echo $form['exa_nombre_usuario']->renderError() ?>
          <?php echo $form['exa_nombre_usuario'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['exa_pass_usuario']->renderLabel() ?></th>
        <td>
          <?php echo $form['exa_pass_usuario']->renderError() ?>
          <?php echo $form['exa_pass_usuario'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['exa_permiso_usuario']->renderLabel() ?></th>
        <td>
          <?php echo $form['exa_permiso_usuario']->renderError() ?>
          <?php echo $form['exa_permiso_usuario'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
