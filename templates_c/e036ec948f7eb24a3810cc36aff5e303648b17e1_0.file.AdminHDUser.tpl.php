<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-13 21:07:36
  from 'C:\xampp\htdocs\Progra\EjerProgra\templates\AdminHDUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0cb0f808d6b6_16816347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e036ec948f7eb24a3810cc36aff5e303648b17e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Progra\\EjerProgra\\templates\\AdminHDUser.tpl',
      1 => 1594667223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0cb0f808d6b6_16816347 (Smarty_Internal_Template $_smarty_tpl) {
?><form>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="user">Usuario</label>
    <input type="text" class="form-control" id="tt">
  </div>
  <div class="form-group col-md-6">
  <label for="puesto">Puesto</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Administrador</option>
      <option>Trabajador</option>
      </select>
  </div>
  </div>
    <div class="form-group">
  <label for="puesto">Estado</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Habilitado</option>
      <option>Desahibilitado</option>
      </select>
  </div>
   <button type="submit" class="btn btn-secondary btn-lg btn-block">Actualizar</button>
    </form>
  </div><?php }
}
