<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-09 00:35:11
  from 'C:\xampp\htdocs\Progra\EjerProgra\templates\Admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f064a1f2df204_81383853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e0523c12e20d494e76c621ff561d961b55019a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Progra\\EjerProgra\\templates\\Admin.tpl',
      1 => 1594247708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:AdminCrearUser.tpl' => 1,
  ),
),false)) {
function content_5f064a1f2df204_81383853 (Smarty_Internal_Template $_smarty_tpl) {
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
				<a class="nav-link active" href="#">Crear Usuario</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Crear Habilitar/Deshabilitar Usuario</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Ver Inventario</a>
			</li><br><br><br>
		</ul>
	</div>

	<div class="col-9">
		<?php $_smarty_tpl->_subTemplateRender('file:AdminCrearUser.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
</div>

<?php }
}
