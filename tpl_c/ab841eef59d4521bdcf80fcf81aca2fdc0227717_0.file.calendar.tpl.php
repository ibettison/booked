<?php
/* Smarty version 3.1.30, created on 2019-12-16 14:50:26
  from "C:\wamp64\www\booked\tpl\Calendar\calendar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5df799b27f7fa8_05640014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab841eef59d4521bdcf80fcf81aca2fdc0227717' => 
    array (
      0 => 'C:\\wamp64\\www\\booked\\tpl\\Calendar\\calendar.tpl',
      1 => 1568839898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Calendar/calendar-page-base.tpl' => 1,
  ),
),false)) {
function content_5df799b27f7fa8_05640014 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['pageUrl']->value == null) {
ob_start();
echo Pages::CALENDAR;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('pageUrl', $_prefixVariable1);
}
$_smarty_tpl->_assignInScope('pageIdSuffix', "calendar");
$_smarty_tpl->_assignInScope('subscriptionTpl', "calendar.subscription.tpl");
$_smarty_tpl->_subTemplateRender("file:Calendar/calendar-page-base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
