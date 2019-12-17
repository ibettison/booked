<?php
/* Smarty version 3.1.30, created on 2019-12-16 14:35:04
  from "C:\wamp64\www\booked\tpl\Ajax\reservation\reservation_attributes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5df79618859e50_12050060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c2a29af056824b99b7eb710818b7b6f328e700a' => 
    array (
      0 => 'C:\\wamp64\\www\\booked\\tpl\\Ajax\\reservation\\reservation_attributes.tpl',
      1 => 1568839898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df79618859e50_12050060 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if (count($_smarty_tpl->tpl_vars['Attributes']->value) > 0) {?>
    <div class="customAttributes">
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Attributes']->value, 'attribute', false, NULL, 'attributes', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_attributes']->value['index']++;
?>
                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_attributes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_attributes']->value['index'] : null)%3 == 0) {?>
                    </div>
                    <div class="row">
                <?php }?>
                <div class="customAttribute col-sm-4 col-xs-12">
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'readonly'=>$_smarty_tpl->tpl_vars['ReadOnly']->value),$_smarty_tpl);?>

                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
    <div class="clear">&nbsp;</div>
<?php }
}
}
