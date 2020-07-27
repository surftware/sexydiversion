<?php
/* Smarty version 3.1.29, created on 2020-07-27 05:27:14
  from "/home4/sexydive/public_html/shop/themes/modus/template/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f1eac0278c209_90327308',
  'file_dependency' => 
  array (
    '91684c4cf4bfd750b789d0cd13d077b2d99c1e3f' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/modus/template/footer.tpl',
      1 => 1585290230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1eac0278c209_90327308 ($_smarty_tpl) {
?>
<div id="copyright">
<?php if (isset($_smarty_tpl->tpl_vars['debug']->value['TIME'])) {
if (!is_admin()) {?><!--<?php echo $_smarty_tpl->tpl_vars['debug']->value['TIME'];?>
 (<?php echo $_smarty_tpl->tpl_vars['debug']->value['NB_QUERIES'];?>
 <?php echo $_smarty_tpl->tpl_vars['debug']->value[SQL_TIME];?>
)--><?php } else {
echo l10n('Page generated in');?>
 <?php echo $_smarty_tpl->tpl_vars['debug']->value['TIME'];?>
 (<?php echo $_smarty_tpl->tpl_vars['debug']->value['NB_QUERIES'];?>
 <?php echo l10n('SQL queries in');?>
 <?php echo $_smarty_tpl->tpl_vars['debug']->value[SQL_TIME];?>
) - <?php }
}?>

	<?php echo l10n('Powered by');?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['PHPWG_URL']->value;?>
">Piwigo</a>
	<?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['CONTACT_MAIL']->value)) {?>
	- <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['CONTACT_MAIL']->value;?>
?subject=<?php echo rawurlencode(l10n('A comment on your site'));?>
"><?php echo l10n('Contact webmaster');?>
</a>
<?php }
if (isset($_smarty_tpl->tpl_vars['TOGGLE_MOBILE_THEME_URL']->value)) {?>
	- <?php echo l10n('View in');?>
 : <a href="<?php echo $_smarty_tpl->tpl_vars['TOGGLE_MOBILE_THEME_URL']->value;?>
"><?php echo l10n('Mobile');?>
</a> | <b><?php echo l10n('Desktop');?>
</b>
<?php }
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_combined_scripts'][0][0]->func_get_combined_scripts(array('load'=>'footer'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['footer_elements']->value)) {
$_from = $_smarty_tpl->tpl_vars['footer_elements']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
echo $_smarty_tpl->tpl_vars['v']->value;?>

<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
}?>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['debug']->value['QUERIES_LIST'])) {?>
<div id="debug">
<?php echo $_smarty_tpl->tpl_vars['debug']->value['QUERIES_LIST'];?>

</div>
<?php }?>
</body>
</html><?php }
}
