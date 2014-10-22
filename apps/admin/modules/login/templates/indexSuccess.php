<form action="<?php echo url_for('login/index'); ?>" method="post">

<table align="ceter">
	<?php echo $formulario ?>
	<tr>
		<td colspan="2"><input type="submit" value="Ingresar"> </td>
	</tr>
</table>
<?php if($sf_user->getFlash("error")): ?>
    <div class="error"><?php echo $sf_user->getFlash("error"); ?></div>
<?php endif; ?>
</form>