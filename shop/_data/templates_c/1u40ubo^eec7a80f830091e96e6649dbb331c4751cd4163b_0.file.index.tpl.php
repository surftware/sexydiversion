<?php
/* Smarty version 3.1.29, created on 2020-06-27 05:42:00
  from "/home4/sexydive/public_html/shop/themes/smartpocket/template/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ef7227872a813_93179197',
  'file_dependency' => 
  array (
    'eec7a80f830091e96e6649dbb331c4751cd4163b' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/smartpocket/template/index.tpl',
      1 => 1585290234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef7227872a813_93179197 ($_smarty_tpl) {
?>
<div data-role="content">
<?php if (!empty($_smarty_tpl->tpl_vars['CATEGORIES']->value)) {
echo $_smarty_tpl->tpl_vars['CATEGORIES']->value;
}
if (!empty($_smarty_tpl->tpl_vars['THUMBNAILS']->value)) {
echo $_smarty_tpl->tpl_vars['THUMBNAILS']->value;
}
if (!empty($_smarty_tpl->tpl_vars['CONTENT_DESCRIPTION']->value)) {?>
<div class="additional_info">
	<?php echo $_smarty_tpl->tpl_vars['CONTENT_DESCRIPTION']->value;?>

</div>
<?php }
if (!empty($_smarty_tpl->tpl_vars['CONTENT']->value)) {
echo $_smarty_tpl->tpl_vars['CONTENT']->value;
}?>
</div>

<?php }
}
