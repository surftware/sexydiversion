<?php
/* Smarty version 3.1.29, created on 2020-06-27 05:42:00
  from "/home4/sexydive/public_html/shop/themes/smartpocket/template/menubar_identification.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ef722787053f0_23953079',
  'file_dependency' => 
  array (
    '9e741a8c4b39d1a91b77c2430b6507677af1c7ad' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/smartpocket/template/menubar_identification.tpl',
      1 => 1585290234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef722787053f0_23953079 ($_smarty_tpl) {
?>
<h3><?php echo l10n('Identification');?>
</h3>
<ul data-role="listview">
  <?php if (isset($_smarty_tpl->tpl_vars['U_REGISTER']->value)) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['U_REGISTER']->value;?>
"><?php echo l10n('Register');?>
</a></li><?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['U_LOGIN']->value)) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['U_LOGIN']->value;?>
"><?php echo l10n('Login');?>
</a></li><?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['U_LOGOUT']->value)) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['U_LOGOUT']->value;?>
"><?php echo l10n('Logout');?>
</a></li><?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['U_PROFILE']->value)) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['U_PROFILE']->value;?>
"><?php echo l10n('Customize');?>
</a></li><?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['U_ADMIN']->value)) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['U_ADMIN']->value;?>
"><?php echo l10n('Administration');?>
</a></li><?php }?>
</ul>
<?php }
}
