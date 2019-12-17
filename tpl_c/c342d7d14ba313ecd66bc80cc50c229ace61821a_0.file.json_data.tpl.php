<?php
/* Smarty version 3.1.30, created on 2019-12-16 14:15:53
  from "C:\wamp64\www\booked\tpl\json_data.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5df791992ef6c6_93725203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c342d7d14ba313ecd66bc80cc50c229ace61821a' => 
    array (
      0 => 'C:\\wamp64\\www\\booked\\tpl\\json_data.tpl',
      1 => 1568839898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df791992ef6c6_93725203 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }
if ($_smarty_tpl->tpl_vars['error']->value != '') {
echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
