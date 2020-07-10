<?php
/* Smarty version 3.1.29, created on 2020-06-27 04:07:05
  from "/home4/sexydive/public_html/shop/admin/themes/default/template/tabsheet.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ef70c39af9be4_98466320',
  'file_dependency' => 
  array (
    '2ec85871f59afbdd21183498ec613ae29cc0537b' => 
    array (
      0 => '/home4/sexydive/public_html/shop/admin/themes/default/template/tabsheet.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef70c39af9be4_98466320 ($_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['tabsheet']->value) && count($_smarty_tpl->tpl_vars['tabsheet']->value)) {?>
<div id="tabsheet">
<ul class="tabsheet">
<?php
$_from = $_smarty_tpl->tpl_vars['tabsheet']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_sheet_0_saved_item = isset($_smarty_tpl->tpl_vars['sheet']) ? $_smarty_tpl->tpl_vars['sheet'] : false;
$__foreach_sheet_0_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['sheet'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['sheet']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['sheet']->value) {
$_smarty_tpl->tpl_vars['sheet']->_loop = true;
$__foreach_sheet_0_saved_local_item = $_smarty_tpl->tpl_vars['sheet'];
?>
  <li class="<?php if (($_smarty_tpl->tpl_vars['name']->value == $_smarty_tpl->tpl_vars['tabsheet_selected']->value)) {?>selected_tab<?php } else { ?>normal_tab<?php }?>">
    <a href="<?php echo $_smarty_tpl->tpl_vars['sheet']->value['url'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['sheet']->value['caption'];?>
</span></a>
  </li>
<?php
$_smarty_tpl->tpl_vars['sheet'] = $__foreach_sheet_0_saved_local_item;
}
if ($__foreach_sheet_0_saved_item) {
$_smarty_tpl->tpl_vars['sheet'] = $__foreach_sheet_0_saved_item;
}
if ($__foreach_sheet_0_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_sheet_0_saved_key;
}
?>
</ul>
</div>
<?php }
}
}
