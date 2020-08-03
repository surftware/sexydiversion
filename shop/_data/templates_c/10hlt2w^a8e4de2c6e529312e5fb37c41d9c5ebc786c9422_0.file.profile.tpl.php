<?php
/* Smarty version 3.1.29, created on 2020-07-27 05:27:44
  from "/home4/sexydive/public_html/shop/themes/default/template/profile.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f1eac20d23731_43679923',
  'file_dependency' => 
  array (
    'a8e4de2c6e529312e5fb37c41d9c5ebc786c9422' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/default/template/profile.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:infos_errors.tpl' => 1,
  ),
),false)) {
function content_5f1eac20d23731_43679923 ($_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['MENUBAR']->value)) {
echo $_smarty_tpl->tpl_vars['MENUBAR']->value;
}?>
<div id="content" class="content<?php if (isset($_smarty_tpl->tpl_vars['MENUBAR']->value)) {?> contentWithMenu<?php }?>">

<div class="titrePage">
	<ul class="categoryActions">
	</ul>
	<h2><a href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
"><?php echo l10n('Home');?>
</a><?php echo $_smarty_tpl->tpl_vars['LEVEL_SEPARATOR']->value;
echo l10n('Profile');?>
</h2>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:infos_errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo $_smarty_tpl->tpl_vars['PROFILE_CONTENT']->value;?>

</div> <!-- content -->
<?php }
}
