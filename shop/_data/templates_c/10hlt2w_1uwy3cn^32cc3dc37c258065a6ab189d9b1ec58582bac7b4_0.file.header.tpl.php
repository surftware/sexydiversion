<?php
/* Smarty version 3.1.29, created on 2020-06-27 04:05:11
  from "/home4/sexydive/public_html/shop/themes/modus/template/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ef70bc76cc743_20333298',
  'file_dependency' => 
  array (
    '32cc3dc37c258065a6ab189d9b1ec58582bac7b4' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/modus/template/header.tpl',
      1 => 1585290230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef70bc76cc743_20333298 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang=<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['code'];?>
 dir=<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['direction'];?>
>
<head>
<title><?php if ($_smarty_tpl->tpl_vars['PAGE_TITLE']->value == l10n('Home')) {
echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;
} else {
echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;
}?></title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/favicon.ico">
<link rel="stylesheet" type="text/css" href="themes/<?php echo $_smarty_tpl->tpl_vars['themeconf']->value['id'];?>
/css/open-sans/open-sans.css"> 
<!-- COMBINED_CSS --><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/css/base.css.tpl",'version'=>$_smarty_tpl->tpl_vars['MODUS_CSS_VERSION']->value,'template'=>true,'order'=>-10),$_smarty_tpl);
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/css/iconfontello.css.tpl",'version'=>$_smarty_tpl->tpl_vars['MODUS_CSS_VERSION']->value,'template'=>true,'order'=>-10),$_smarty_tpl);
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/css/menuh.css.tpl",'version'=>$_smarty_tpl->tpl_vars['MODUS_CSS_VERSION']->value,'template'=>true,'order'=>-10),$_smarty_tpl);
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/css/index.css.tpl",'version'=>$_smarty_tpl->tpl_vars['MODUS_CSS_VERSION']->value,'template'=>true,'order'=>-10),$_smarty_tpl);
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/css/picture.css.tpl",'version'=>$_smarty_tpl->tpl_vars['MODUS_CSS_VERSION']->value,'template'=>true,'order'=>-10),$_smarty_tpl);
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/css/tags.css",'order'=>-10),$_smarty_tpl);
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/css/print.css",'order'=>-10),$_smarty_tpl);
if (isset($_smarty_tpl->tpl_vars['MODUS_CSS_SKIN']->value)) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/css/hf_base.css",'order'=>-10),$_smarty_tpl);
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/skins/".((string)$_smarty_tpl->tpl_vars['MODUS_CSS_SKIN']->value).".css",'order'=>-10),$_smarty_tpl);
}
if (isset($_smarty_tpl->tpl_vars['U_PREFETCH']->value)) {?><link rel=prefetch href="<?php echo $_smarty_tpl->tpl_vars['U_PREFETCH']->value;?>
"><?php }
if (isset($_smarty_tpl->tpl_vars['U_CANONICAL']->value)) {?><link rel=canonical href="<?php echo $_smarty_tpl->tpl_vars['U_CANONICAL']->value;?>
"><?php }
if (!empty($_smarty_tpl->tpl_vars['page_refresh']->value)) {?><meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['page_refresh']->value['TIME'];?>
;url=<?php echo $_smarty_tpl->tpl_vars['page_refresh']->value['U_REFRESH'];?>
"><?php }
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_combined_scripts'][0][0]->func_get_combined_scripts(array('load'=>'header'),$_smarty_tpl);?>

<?php if (empty($_SERVER['HTTP_USER_AGENT']) || strpos($_SERVER['HTTP_USER_AGENT'],'MSIE')) {?>
<meta http-equiv=x-ua-compatible content="IE=edge">
<!--[if lt IE 9]><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['themeconf']->value['id'];?>
/html5shiv.js"><?php echo '</script'; ?>
><![endif]-->
<?php }?>
<meta name=viewport content="width=device-width,initial-scale=1">

<?php if (!empty($_smarty_tpl->tpl_vars['head_elements']->value)) {
$_from = $_smarty_tpl->tpl_vars['head_elements']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_elt_0_saved_item = isset($_smarty_tpl->tpl_vars['elt']) ? $_smarty_tpl->tpl_vars['elt'] : false;
$_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['elt']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->_loop = true;
$__foreach_elt_0_saved_local_item = $_smarty_tpl->tpl_vars['elt'];
echo $_smarty_tpl->tpl_vars['elt']->value;?>

<?php
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_0_saved_local_item;
}
if ($__foreach_elt_0_saved_item) {
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_0_saved_item;
}
}?>
</head>

<body id=<?php echo $_smarty_tpl->tpl_vars['BODY_ID']->value;
if (!empty($_smarty_tpl->tpl_vars['PAGE_BANNER']->value) && $_smarty_tpl->tpl_vars['MODUS_DISPLAY_PAGE_BANNER']->value) {?> class="modus-withPageBanner"<?php }?>>
<?php if (!empty($_smarty_tpl->tpl_vars['header_msgs']->value)) {?>
<div class="header_msgs">
<?php if (!empty($_smarty_tpl->tpl_vars['header_msgs']->value)) {
$_from = $_smarty_tpl->tpl_vars['header_msgs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_elt_1_saved_item = isset($_smarty_tpl->tpl_vars['elt']) ? $_smarty_tpl->tpl_vars['elt'] : false;
$_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['elt']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->_loop = true;
$__foreach_elt_1_saved_local_item = $_smarty_tpl->tpl_vars['elt'];
?>
	<p><?php echo $_smarty_tpl->tpl_vars['elt']->value;?>
</p>
<?php
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_1_saved_local_item;
}
if ($__foreach_elt_1_saved_item) {
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_1_saved_item;
}
}
if (!empty($_smarty_tpl->tpl_vars['header_notes']->value)) {
$_from = $_smarty_tpl->tpl_vars['header_notes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_elt_2_saved_item = isset($_smarty_tpl->tpl_vars['elt']) ? $_smarty_tpl->tpl_vars['elt'] : false;
$_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['elt']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->_loop = true;
$__foreach_elt_2_saved_local_item = $_smarty_tpl->tpl_vars['elt'];
?>
	<p><?php echo $_smarty_tpl->tpl_vars['elt']->value;?>
</p>
<?php
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_2_saved_local_item;
}
if ($__foreach_elt_2_saved_item) {
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_2_saved_item;
}
}?>
</div>
<?php }
if (!empty($_smarty_tpl->tpl_vars['PAGE_BANNER']->value) && $_smarty_tpl->tpl_vars['MODUS_DISPLAY_PAGE_BANNER']->value) {?><div id="theHeader"><?php echo $_smarty_tpl->tpl_vars['PAGE_BANNER']->value;?>
</div><?php }
}
}
