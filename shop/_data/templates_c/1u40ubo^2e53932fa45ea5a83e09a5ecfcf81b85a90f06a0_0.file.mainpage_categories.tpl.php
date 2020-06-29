<?php
/* Smarty version 3.1.29, created on 2020-06-27 05:42:00
  from "/home4/sexydive/public_html/shop/themes/smartpocket/template/mainpage_categories.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ef7227870e512_74864130',
  'file_dependency' => 
  array (
    '2e53932fa45ea5a83e09a5ecfcf81b85a90f06a0' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/smartpocket/template/mainpage_categories.tpl',
      1 => 1585290234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef7227870e512_74864130 ($_smarty_tpl) {
?>
<ul data-role="listview" data-inset="true">
<?php
$_from = $_smarty_tpl->tpl_vars['category_thumbnails']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cat_0_saved_item = isset($_smarty_tpl->tpl_vars['cat']) ? $_smarty_tpl->tpl_vars['cat'] : false;
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$__foreach_cat_0_saved_local_item = $_smarty_tpl->tpl_vars['cat'];
?>
	<li>
		<a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['pwg']->value->derivative_url($_smarty_tpl->tpl_vars['thumbnail_derivative_params']->value,$_smarty_tpl->tpl_vars['cat']->value['representative']['src_image']);?>
">
    <h3><?php echo $_smarty_tpl->tpl_vars['cat']->value['NAME'];?>
</h3>
		<p class="Nb_images"><?php echo $_smarty_tpl->tpl_vars['cat']->value['CAPTION_NB_IMAGES'];?>
</p>
		</a>
  </li>
<?php
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_0_saved_local_item;
}
if ($__foreach_cat_0_saved_item) {
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_0_saved_item;
}
?>
</ul>

<?php }
}
