<?php
/* Smarty version 3.1.29, created on 2020-06-27 04:07:02
  from "/home4/sexydive/public_html/shop/admin/themes/default/template/include/colorbox.inc.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ef70c36c9ed45_58791243',
  'file_dependency' => 
  array (
    '6d3c140aa539620e0e4509a49a05bbc2517ee1b2' => 
    array (
      0 => '/home4/sexydive/public_html/shop/admin/themes/default/template/include/colorbox.inc.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef70c36c9ed45_58791243 ($_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['load_mode']->value)) {
$_smarty_tpl->tpl_vars['load_mode'] = new Smarty_Variable('footer', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'load_mode', 0);
}
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.colorbox','load'=>$_smarty_tpl->tpl_vars['load_mode']->value,'require'=>'jquery','path'=>'themes/default/js/plugins/jquery.colorbox.min.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('id'=>'jquery.colorbox','path'=>"themes/default/js/plugins/colorbox/style2/colorbox.css"),$_smarty_tpl);?>

<?php }
}
