<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-17 22:02:26
  from 'C:\xampp\htdocs\Progra\EjerProgra\templates\Default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eea76d26d1f08_29511091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e7d2abde1c7764c250eda35d9598621d5a5f715' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Progra\\EjerProgra\\templates\\Default.tpl',
      1 => 1592424139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/header.tpl' => 1,
    'file:Cabeceras/footer.tpl' => 1,
  ),
),false)) {
function content_5eea76d26d1f08_29511091 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div align ="Center">
	<br>
    <h1>Hello, world!</h1>
	</div>
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>	
    
<?php }
}
