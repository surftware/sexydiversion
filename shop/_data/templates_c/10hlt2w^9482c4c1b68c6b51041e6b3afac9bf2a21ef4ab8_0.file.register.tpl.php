<?php
/* Smarty version 3.1.29, created on 2020-07-27 05:29:17
  from "/home4/sexydive/public_html/shop/themes/default/template/register.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f1eac7d7d30b4_61144288',
  'file_dependency' => 
  array (
    '9482c4c1b68c6b51041e6b3afac9bf2a21ef4ab8' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/default/template/register.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:infos_errors.tpl' => 1,
  ),
),false)) {
function content_5f1eac7d7d30b4_61144288 ($_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['MENUBAR']->value)) {
echo $_smarty_tpl->tpl_vars['MENUBAR']->value;
}?>
<div id="registerPage">

<div id="content" class="content<?php if (isset($_smarty_tpl->tpl_vars['MENUBAR']->value)) {?> contentWithMenu<?php }?>">

<div class="titrePage">
	<ul class="categoryActions">
	</ul>
	<h2><a href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
"><?php echo l10n('Home');?>
</a><?php echo $_smarty_tpl->tpl_vars['LEVEL_SEPARATOR']->value;
echo l10n('Registration');?>
</h2>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:infos_errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" class="properties" name="register_form">
  <fieldset>
    <legend><?php echo l10n('Enter your personnal informations');?>
</legend>

    <ul>
      <li>
        <span class="property">
          <label for="login">* <?php echo l10n('Username');?>
</label>
        </span>
        <input type="text" name="login" id="login" value="<?php echo $_smarty_tpl->tpl_vars['F_LOGIN']->value;?>
" >
      </li>
      <li>
        <span class="property">
          <label for="password">* <?php echo l10n('Password');?>
</label>
        </span>
        <input type="password" name="password" id="password" >
      </li>
      <li>
        <span class="property">
          <label for="password_conf">* <?php echo l10n('Confirm Password');?>
</label>
        </span>
        <input type="password" name="password_conf" id="password_conf" >
      </li>
      <li>
        <span class="property">
          <label for="mail_address"><?php if ($_smarty_tpl->tpl_vars['obligatory_user_mail_address']->value) {?>* <?php }
echo l10n('Email address');?>
</label>
        </span>
        <input type="text" name="mail_address" id="mail_address" value="<?php echo $_smarty_tpl->tpl_vars['F_EMAIL']->value;?>
" >
<?php if (!$_smarty_tpl->tpl_vars['obligatory_user_mail_address']->value) {?>
        (<?php echo l10n('useful when password forgotten');?>
)
<?php }?>
      </li>
      <li>
        <span class="property">
          <label for="send_password_by_mail"><?php echo l10n('Send my connection settings by email');?>
</label>
        </span>
        <input type="checkbox" name="send_password_by_mail" id="send_password_by_mail" value="1" checked="checked">
      </li>
    </ul>

  </fieldset>

  <p class="bottomButtons">
		<input type="hidden" name="key" value="<?php echo $_smarty_tpl->tpl_vars['F_KEY']->value;?>
" >
    <input class="submit" type="submit" name="submit" value="<?php echo l10n('Register');?>
">
    <input class="submit" type="reset" value="<?php echo l10n('Reset');?>
">
  </p>

</form>

<?php echo '<script'; ?>
 type="text/javascript"><!--
document.register_form.login.focus();
//--><?php echo '</script'; ?>
>

</div> <!-- content -->
</div> <!-- registerPage -->
<?php }
}
