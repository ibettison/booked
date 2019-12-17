<?php
/* Smarty version 3.1.30, created on 2019-12-16 15:52:01
  from "C:\wamp64\www\booked\tpl\Ajax\reservation\update_successful.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5df7a821ca46c5_34596925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc9faf678d634120bc9e1f1fc6fba4a22d50c40f' => 
    array (
      0 => 'C:\\wamp64\\www\\booked\\tpl\\Ajax\\reservation\\update_successful.tpl',
      1 => 1568839898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Ajax/reservation/save_successful.tpl' => 1,
  ),
),false)) {
function content_5df7a821ca46c5_34596925 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:Ajax/reservation/save_successful.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('divId'=>"reservation-updated",'messageKey'=>"ReservationUpdated"), 0, false);
}
}
