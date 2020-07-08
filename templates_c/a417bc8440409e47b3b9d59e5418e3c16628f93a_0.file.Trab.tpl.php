<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-09 00:23:32
  from 'C:\xampp\htdocs\Progra\EjerProgra\templates\Trab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f06476429fbd3_05818500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a417bc8440409e47b3b9d59e5418e3c16628f93a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Progra\\EjerProgra\\templates\\Trab.tpl',
      1 => 1594246712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f06476429fbd3_05818500 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row justify-content-md-center">
	<div class="col-12 ">
		<ul class="nav alert-primary">
			<li class="nav-item">
				<h4>Usuario: <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
 </h4>
			</li>
			<li class="nav-item">
			------------------------------
			</li>
			<li class="nav-item">
				<h4>Tipo: <?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
 </h4>
			</li>
		</ul>
	</div>
</div>

<div class="row justify-content-md-center">

	<div class="col-3">
		<ul class="nav flex-column alert-danger">
			<br><br><br>
			<li class="nav-item">
				<a class="nav-link active" href="#">Ingresar Inventario</a>
			</li>
			<br><br><br>
		</ul>
	</div>

	<div class="col-9">
		
	</div>
</div>

<?php }
}
