<?php
/* Smarty version 3.1.29, created on 2020-06-27 05:42:00
  from "/home4/sexydive/public_html/shop/themes/smartpocket/template/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ef72278724e43_37548566',
  'file_dependency' => 
  array (
    '8db091e3779d64d069297d287737500e7f009cdd' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/smartpocket/template/header.tpl',
      1 => 1585290234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef72278724e43_37548566 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home4/sexydive/public_html/shop/include/smarty/libs/plugins/modifier.replace.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['code'];?>
" dir="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['direction'];?>
">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['CONTENT_ENCODING']->value;?>
">
<meta name="generator" content="Piwigo (aka PWG), see piwigo.org">
<?php if (isset($_smarty_tpl->tpl_vars['meta_ref']->value)) {?> 
<?php if (isset($_smarty_tpl->tpl_vars['INFO_AUTHOR']->value)) {?>
<meta name="author" content="<?php echo smarty_modifier_replace(strip_tags($_smarty_tpl->tpl_vars['INFO_AUTHOR']->value),'"',' ');?>
">
<?php }
if (isset($_smarty_tpl->tpl_vars['related_tags']->value)) {?>
<meta name="keywords" content="<?php
$_from = $_smarty_tpl->tpl_vars['related_tags']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_tag_loop_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop'] : false;
$__foreach_tag_loop_0_saved_item = isset($_smarty_tpl->tpl_vars['tag']) ? $_smarty_tpl->tpl_vars['tag'] : false;
$_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop'] = new Smarty_Variable(array());
$__foreach_tag_loop_0_first = true;
$_smarty_tpl->tpl_vars['tag']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['first'] = $__foreach_tag_loop_0_first;
$__foreach_tag_loop_0_first = false;
$__foreach_tag_loop_0_saved_local_item = $_smarty_tpl->tpl_vars['tag'];
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['first'] : null)) {?>, <?php }
echo $_smarty_tpl->tpl_vars['tag']->value['name'];
$_smarty_tpl->tpl_vars['tag'] = $__foreach_tag_loop_0_saved_local_item;
}
if ($__foreach_tag_loop_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop'] = $__foreach_tag_loop_0_saved;
}
if ($__foreach_tag_loop_0_saved_item) {
$_smarty_tpl->tpl_vars['tag'] = $__foreach_tag_loop_0_saved_item;
}
?>">
<?php }
if (isset($_smarty_tpl->tpl_vars['COMMENT_IMG']->value)) {?>
<meta name="description" content="<?php echo smarty_modifier_replace(strip_tags($_smarty_tpl->tpl_vars['COMMENT_IMG']->value),'"',' ');
if (isset($_smarty_tpl->tpl_vars['INFO_FILE']->value)) {?> - <?php echo $_smarty_tpl->tpl_vars['INFO_FILE']->value;
}?>">
<?php } else { ?>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;
if (isset($_smarty_tpl->tpl_vars['INFO_FILE']->value)) {?> - <?php echo $_smarty_tpl->tpl_vars['INFO_FILE']->value;
}?>">
<?php }
}?>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<meta name="apple-mobile-web-app-capable" content="yes" />

<?php if ((isset($_smarty_tpl->tpl_vars['REVERSE']->value) && $_smarty_tpl->tpl_vars['REVERSE']->value && $_smarty_tpl->tpl_vars['PAGE_TITLE']->value == l10n('Home'))) {?>
<title><?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;?>
</title><?php } else { ?>
<title><?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
</title><?php }?>
<link rel="start" title="<?php echo l10n('Home');?>
" href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
" >

<!-- COMBINED_CSS -->
<?php
$_from = $_smarty_tpl->tpl_vars['themes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_theme_1_saved_item = isset($_smarty_tpl->tpl_vars['theme']) ? $_smarty_tpl->tpl_vars['theme'] : false;
$_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['theme']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
$__foreach_theme_1_saved_local_item = $_smarty_tpl->tpl_vars['theme'];
if ($_smarty_tpl->tpl_vars['theme']->value['load_css']) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['theme']->value['id'])."/theme.css",'order'=>-10),$_smarty_tpl);?>

<?php }
if (!empty($_smarty_tpl->tpl_vars['theme']->value['local_head'])) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['theme']->value['local_head'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('load_css'=>$_smarty_tpl->tpl_vars['theme']->value['load_css']), 0, true);
}
$_smarty_tpl->tpl_vars['theme'] = $__foreach_theme_1_saved_local_item;
}
if ($__foreach_theme_1_saved_item) {
$_smarty_tpl->tpl_vars['theme'] = $__foreach_theme_1_saved_item;
}
?>

<?php if (isset($_smarty_tpl->tpl_vars['U_CANONICAL']->value)) {?><link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['U_CANONICAL']->value;?>
"><?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['page_refresh']->value)) {?><meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['page_refresh']->value['TIME'];?>
;url=<?php echo $_smarty_tpl->tpl_vars['page_refresh']->value['U_REFRESH'];?>
"><?php }?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_combined_scripts'][0][0]->func_get_combined_scripts(array('load'=>'header'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'config','path'=>'themes/smartpocket/js/config.js','require'=>'jquery'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.mobile','path'=>'themes/smartpocket/js/jquery.mobile.min.js','require'=>'jquery,config'),$_smarty_tpl);?>


</head>

<body>
<div data-role="page" data-theme="a">
<?php if (isset($_smarty_tpl->tpl_vars['MENUBAR']->value)) {?><div data-role="panel" id="menubar" data-position="right" data-display="overlay">
  <?php echo $_smarty_tpl->tpl_vars['MENUBAR']->value;?>

</div><?php }?>
<div data-role="header">
  <div class="title">
    <a href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
" class="home_button" data-icon="home" data-iconpos="notext" data-role="button"></a>
    <?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>

    <a href="#menubar" data-icon="grid" data-iconpos="notext" data-role="button" style="float: right" >Menu</a>
  </div>
</div>

<?php }
}
