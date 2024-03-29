<?php
/* Smarty version 3.1.30, created on 2019-12-16 14:13:48
  from "C:\wamp64\www\booked\tpl\Install\install.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5df7911c966d96_58590023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a95168cea2854aa4d616f18c633837d8f3d55e6' => 
    array (
      0 => 'C:\\wamp64\\www\\booked\\tpl\\Install\\install.tpl',
      1 => 1568839898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:globalheader.tpl' => 1,
    'file:javascript-includes.tpl' => 1,
    'file:globalfooter.tpl' => 1,
  ),
),false)) {
function content_5df7911c966d96_58590023 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:globalheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="page-install">
	<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'InstallApplication'),$_smarty_tpl);?>
</h1>

    <?php if ($_smarty_tpl->tpl_vars['ShowScriptUrlWarning']->value) {?>
        <div class="alert alert-danger">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ScriptUrlWarning','args'=>((string)$_smarty_tpl->tpl_vars['CurrentScriptUrl']->value).",".((string)$_smarty_tpl->tpl_vars['SuggestedScriptUrl']->value)),$_smarty_tpl);?>

        </div>
    <?php }?>

	<div>
		<form class="register" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" role="form">

			<?php if ($_smarty_tpl->tpl_vars['ShowInvalidPassword']->value) {?>
				<div class="error"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'IncorrectInstallPassword'),$_smarty_tpl);?>
</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['InstallPasswordMissing']->value) {?>
				<div class='error'>
					<p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SetInstallPassword'),$_smarty_tpl);?>
</p>

					<p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'InstallPasswordInstructions','args'=>((string)$_smarty_tpl->tpl_vars['ConfigPath']->value).",".((string)$_smarty_tpl->tpl_vars['ConfigSetting']->value).",".((string)$_smarty_tpl->tpl_vars['SuggestedInstallPassword']->value)),$_smarty_tpl);?>
</p>
				</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['ShowUpToDateMessage']->value) {?>
				<div class="error" style="margin-bottom: 10px;">
					<h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoUpgradeNeeded'),$_smarty_tpl);?>
</h3>
				</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['ShowPasswordPrompt']->value) {?>
				<div class="form-group">
					<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ProvideInstallPassword'),$_smarty_tpl);?>
</div>
					<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'InstallPasswordLocation','args'=>((string)$_smarty_tpl->tpl_vars['ConfigPath']->value).",".((string)$_smarty_tpl->tpl_vars['ConfigSetting']->value)),$_smarty_tpl);?>
</div>
					<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('type'=>"password",'name'=>"INSTALL_PASSWORD",'size'=>"20"),$_smarty_tpl);?>
</div>
					<div>
						<button type="submit" name="" class="btn"
								value="submit"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Next'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"arrow_large_right.png"),$_smarty_tpl);?>
</button>
					</div>
				</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['ShowDatabasePrompt']->value) {?>
				<div class="">
					<div>1) <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'VerifyInstallSettings','args'=>$_smarty_tpl->tpl_vars['ConfigPath']->value),$_smarty_tpl);?>

						<div style="margin-left: 20px;">
							<div><b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DatabaseName'),$_smarty_tpl);?>
:</b> <?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
</div>
							<div><b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DatabaseUser'),$_smarty_tpl);?>
:</b> <?php echo $_smarty_tpl->tpl_vars['dbuser']->value;?>
</div>
							<div><b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DatabaseHost'),$_smarty_tpl);?>
:</b> <?php echo $_smarty_tpl->tpl_vars['dbhost']->value;?>
</div>
						</div>
					</div>
					<div>&nbsp;</div>
					<div>2) <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DatabaseCredentials'),$_smarty_tpl);?>
</div>
					<div class="form-group">
						<label for="dbUser"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MySQLUser'),$_smarty_tpl);?>
</label>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>"INSTALL_DB_USER",'size'=>"20",'id'=>'dbUser'),$_smarty_tpl);?>

					</div>
					<div class="form-group">
						<label for="dbPassword"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Password'),$_smarty_tpl);?>
</label>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('type'=>"password",'name'=>"INSTALL_DB_PASSWORD",'size'=>"20",'id'=>'dbPassword'),$_smarty_tpl);?>

					</div>
					<div>&nbsp;</div>
					<?php if ($_smarty_tpl->tpl_vars['ShowInstallOptions']->value) {?>
						<div>3)<i><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'InstallOptionsWarning'),$_smarty_tpl);?>
</i></div>
						<div><input type="checkbox" name="create_database"/> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CreateDatabase'),$_smarty_tpl);?>
 (<?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
)
							<span style="color:Red;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DataWipeWarning'),$_smarty_tpl);?>
</span></div>
						<div><input type="checkbox" name="create_user"/> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CreateDatabaseUser'),$_smarty_tpl);?>
 (<?php echo $_smarty_tpl->tpl_vars['dbuser']->value;?>
)
						</div>
						<div><input type="checkbox" name="create_sample_data"/> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PopulateExampleData'),$_smarty_tpl);?>

						</div>
						<div>
							<br/>
							<button type="submit" name="run_install" class="btn"
									value="submit"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RunInstallation'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"arrow_large_right.png"),$_smarty_tpl);?>

								<br/>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['ShowUpgradeOptions']->value) {?>
						<div>3) <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UpgradeNotice','args'=>((string)$_smarty_tpl->tpl_vars['CurrentVersion']->value).",".((string)$_smarty_tpl->tpl_vars['TargetVersion']->value)),$_smarty_tpl);?>
</div>
						<div>
							<br/>
							<button type="submit" name="run_upgrade" class="btn"
									value="submit"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RunUpgrade'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"arrow_large_right.png"),$_smarty_tpl);?>

								<br/>
						</div>
					<?php }?>
				</div>
			<?php }?>

			<div class="no-style">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['installresults']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>
					<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Executing'),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['result']->value->taskName;?>
</div>
					<?php if ($_smarty_tpl->tpl_vars['result']->value->WasSuccessful()) {?>
						<div style="background-color: #9acd32"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Success'),$_smarty_tpl);?>
</div>
					<?php } else { ?>
						<div style="border: solid red 5px;padding:10px;">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'StatementFailed'),$_smarty_tpl);?>

							<div class='no-style'>
								<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SQLStatement'),$_smarty_tpl);?>

									<pre><?php echo $_smarty_tpl->tpl_vars['result']->value->sqlText;?>
</pre>
								</div>
								<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ErrorCode'),$_smarty_tpl);?>

									<pre><?php echo $_smarty_tpl->tpl_vars['result']->value->sqlErrorCode;?>
</pre>
								</div>
								<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ErrorText'),$_smarty_tpl);?>

									<pre><?php echo $_smarty_tpl->tpl_vars['result']->value->sqlErrorText;?>
</pre>
								</div>
							</div>
						</div>
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				<div>&nbsp;</div>
				<div>
					<?php if ($_smarty_tpl->tpl_vars['InstallCompletedSuccessfully']->value) {?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'InstallationSuccess'),$_smarty_tpl);?>

						<br/>
						<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::REGISTRATION;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Register'),$_smarty_tpl);?>
</a>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RegisterAdminUser','args'=>((string)$_smarty_tpl->tpl_vars['ConfigPath']->value)),$_smarty_tpl);?>

						<br/>
						<br/>
						<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;
echo Pages::LOGIN;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Login'),$_smarty_tpl);?>
</a>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'LoginWithSampleAccounts'),$_smarty_tpl);?>

					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['UpgradeCompletedSuccessfully']->value) {?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'InstalledVersion','args'=>$_smarty_tpl->tpl_vars['TargetVersion']->value),$_smarty_tpl);?>

						<h3><a href="configure.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'InstallUpgradeConfig'),$_smarty_tpl);?>
</a></h3>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['InstallFailed']->value) {?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'InstallationFailure'),$_smarty_tpl);?>

					<?php }?>
				</div>
			</div>


		</form>
	</div>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
