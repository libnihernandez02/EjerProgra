<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-09 00:35:40
  from 'C:\xampp\htdocs\Progra\EjerProgra\templates\AdminCrearUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f064a3cf13f11_27470963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c5fee93ae1aa5875b287b9c066054d18338f7d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Progra\\EjerProgra\\templates\\AdminCrearUser.tpl',
      1 => 1594247735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f064a3cf13f11_27470963 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row justify-content-md-center">
	<div class="col ">
		<br><h1>Crear Usuario</h1><br>
		<form method="post" action="">
			<div class="form-group">
				<label for="usuario">Usuarios</label>
				<input type="tex" class="form-control" id="usuario" name"usuario" aria-describedby="emailHelp">
			</div><br>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name"password" id="password" >
			</div><br>
			<div class="form-group">
				<label for="tipo">Tipo Trabajador</label>
				<select class="form-control" name="tipo" id="tipo">
					<option value="Trabajador">Trabajador</option>
					<option value="Administrador">Administrador</option>
				</select>
			</div><br>
			<button type="submit" class="btn btn-primary">Ingresar</button>
		</form>
	</div>
</div><?php }
}
