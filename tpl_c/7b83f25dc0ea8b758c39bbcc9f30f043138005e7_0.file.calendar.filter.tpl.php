<?php
/* Smarty version 3.1.30, created on 2019-12-16 14:50:27
  from "C:\wamp64\www\booked\tpl\Calendar\calendar.filter.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5df799b3038571_66791881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b83f25dc0ea8b758c39bbcc9f30f043138005e7' => 
    array (
      0 => 'C:\\wamp64\\www\\booked\\tpl\\Calendar\\calendar.filter.tpl',
      1 => 1568839898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df799b3038571_66791881 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row form-inline">
    <div id="filter">

		<?php if ($_smarty_tpl->tpl_vars['GroupName']->value) {?>
		<span class="groupName"><?php echo $_smarty_tpl->tpl_vars['GroupName']->value;?>
</span>
		<?php } else { ?>
		<div>
            <div class="inline"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array('id'=>'loadingIndicator'),$_smarty_tpl);?>
</div>
			<label for="calendarFilter"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ChangeCalendar"),$_smarty_tpl);?>
</label>
			<select id="calendarFilter">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters']->value->GetFilters(), 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
					<option value="s<?php echo $_smarty_tpl->tpl_vars['filter']->value->Id();?>
" class="schedule" <?php if ($_smarty_tpl->tpl_vars['filter']->value->Selected()) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['filter']->value->Name();?>
</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter']->value->GetFilters(), 'subfilter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subfilter']->value) {
?>
						<option value="r<?php echo $_smarty_tpl->tpl_vars['subfilter']->value->Id();?>
" class="resource" <?php if ($_smarty_tpl->tpl_vars['subfilter']->value->Selected()) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['subfilter']->value->Name();?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				<?php }?>
			</select>
			<a href="#" id="showResourceGroups"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceGroups'),$_smarty_tpl);?>
</a>
		</div>
	</div>

	<div id="resourceGroupsContainer">
		<div id="resourceGroups"></div>
	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	$(function(){
		$('#calendarFilter').select2();
	});

<?php echo '</script'; ?>
><?php }
}
