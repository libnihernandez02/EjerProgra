<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-13 21:09:38
  from 'C:\xampp\htdocs\Progra\EjerProgra\templates\Admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0cb172ebf2c4_15241380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e0523c12e20d494e76c621ff561d961b55019a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Progra\\EjerProgra\\templates\\Admin.tpl',
      1 => 1594667377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:AdminCrearUser.tpl' => 1,
    'file:AdminHDUser.tpl' => 1,
  ),
),false)) {
function content_5f0cb172ebf2c4_15241380 (Smarty_Internal_Template $_smarty_tpl) {
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
				<a class="nav-link active" href="?controller=Operaciones&action=VentanaCrearUsuario">Crear Usuario</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="?controller=Operaciones&action=VentanaHDUser">Habilitar/Deshabilitar Usuario</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="?controller=Operaciones&action=VentanaVerInventario">Ver Inventario</a>
			</li><br><br><br>
		</ul>
	</div>

	<div class="col-9">
		<?php if (isset($_smarty_tpl->tpl_vars['ventana']->value)) {?>
			<?php if ($_smarty_tpl->tpl_vars['ventana']->value == "vcu") {?>
				<?php $_smarty_tpl->_subTemplateRender('file:AdminCrearUser.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php } elseif ($_smarty_tpl->tpl_vars['ventana']->value == "vhdu") {?>
				<?php $_smarty_tpl->_subTemplateRender('file:AdminHDUser.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php } elseif ($_smarty_tpl->tpl_vars['ventana']->value == "vvi") {?>
				<p>ventana ver inventario</p>
			<?php } else { ?>
			<p>info de la empresa</p>
			<?php }?>
		<?php } else { ?>
			<p>info de la empresa</p>
		<?php }?>
	</div>
</div>

<?php }
}
