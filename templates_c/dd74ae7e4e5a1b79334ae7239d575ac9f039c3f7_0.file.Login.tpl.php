<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-24 20:43:01
  from 'C:\xampp\htdocs\Progra\EjerProgra\templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef39eb5a8b715_46506606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd74ae7e4e5a1b79334ae7239d575ac9f039c3f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Progra\\EjerProgra\\templates\\Login.tpl',
      1 => 1593023076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef39eb5a8b715_46506606 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row justify-content-md-center">
	<div class="col-6 ">
		<br><h1>LOGIN</h1><br>
		<form method="post" action="?controller=User&action=ValidarUsuario">
			<div class="form-group">
				<label for="usuario">Usuario</label>
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
</div>

<?php }
}
