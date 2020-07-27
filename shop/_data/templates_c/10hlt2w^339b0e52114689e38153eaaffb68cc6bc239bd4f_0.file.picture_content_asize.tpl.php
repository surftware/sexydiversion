<?php
/* Smarty version 3.1.29, created on 2020-07-27 05:28:07
  from "/home4/sexydive/public_html/shop/themes/modus/template/picture_content_asize.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f1eac3721a995_23150977',
  'file_dependency' => 
  array (
    '339b0e52114689e38153eaaffb68cc6bc239bd4f' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/modus/template/picture_content_asize.tpl',
      1 => 1585290230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1eac3721a995_23150977 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home4/sexydive/public_html/shop/include/smarty/libs/plugins/modifier.replace.php';
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'photo.autosize','path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/js/photo.autosize.min.js",'load'=>'footer','require'=>'jquery'),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
RVAS = {
derivatives: [
<?php
$_from = $_smarty_tpl->tpl_vars['current']->value['unique_derivatives'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_derivative_loop_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_derivative_loop']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_derivative_loop'] : false;
$__foreach_derivative_loop_0_saved_item = isset($_smarty_tpl->tpl_vars['derivative']) ? $_smarty_tpl->tpl_vars['derivative'] : false;
$__foreach_derivative_loop_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['derivative'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_derivative_loop'] = new Smarty_Variable(array());
$__foreach_derivative_loop_0_iteration=0;
$_smarty_tpl->tpl_vars['derivative']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['derivative']->value) {
$_smarty_tpl->tpl_vars['derivative']->_loop = true;
$__foreach_derivative_loop_0_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_derivative_loop']->value['last'] = $__foreach_derivative_loop_0_iteration == $__foreach_derivative_loop_0_total;
$__foreach_derivative_loop_0_saved_local_item = $_smarty_tpl->tpl_vars['derivative'];
$_smarty_tpl->tpl_vars['size'] = new Smarty_Variable($_smarty_tpl->tpl_vars['derivative']->value->get_size(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'size', 0);?>
{w:<?php echo $_smarty_tpl->tpl_vars['size']->value[0];?>
,h:<?php echo $_smarty_tpl->tpl_vars['size']->value[1];?>
,url:'<?php echo strtr($_smarty_tpl->tpl_vars['derivative']->value->get_url(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',type:'<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_type();?>
'}<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_derivative_loop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_derivative_loop']->value['last'] : null)) {?>,<?php }
$_smarty_tpl->tpl_vars['derivative'] = $__foreach_derivative_loop_0_saved_local_item;
}
if ($__foreach_derivative_loop_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_derivative_loop'] = $__foreach_derivative_loop_0_saved;
}
if ($__foreach_derivative_loop_0_saved_item) {
$_smarty_tpl->tpl_vars['derivative'] = $__foreach_derivative_loop_0_saved_item;
}
?>],
cp: '<?php echo strtr($_smarty_tpl->tpl_vars['COOKIE_PATH']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
}<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['RVAS_PENDING']->value) {?>
<noscript><img src="<?php echo $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_url();?>
" <?php echo $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_size_htm();?>
 alt="<?php echo $_smarty_tpl->tpl_vars['ALT_IMG']->value;?>
" id="theMainImage" usemap="#map<?php echo $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_type();?>
" title="<?php if (isset($_smarty_tpl->tpl_vars['COMMENT_IMG']->value)) {
echo smarty_modifier_replace(strip_tags($_smarty_tpl->tpl_vars['COMMENT_IMG']->value),'"',' ');
} else {
echo $_smarty_tpl->tpl_vars['current']->value['TITLE_ESC'];?>
 - <?php echo $_smarty_tpl->tpl_vars['ALT_IMG']->value;
}?>" itemprop=contentURL></noscript>
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
rvas_choose();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php } else {
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
rvas_choose(1);<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }?>
<img<?php if (!$_smarty_tpl->tpl_vars['RVAS_PENDING']->value) {?> src="<?php echo $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_url();?>
" <?php if (isset($_smarty_tpl->tpl_vars['rvas_display_size']->value)) {?>width=<?php echo $_smarty_tpl->tpl_vars['rvas_display_size']->value[0];?>
 height=<?php echo $_smarty_tpl->tpl_vars['rvas_display_size']->value[1];?>
 data-natural-w=<?php echo $_smarty_tpl->tpl_vars['rvas_natural_size']->value[0];
} else {
echo $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_size_htm();
}?> itemprop=contentURL<?php }?> alt="<?php echo $_smarty_tpl->tpl_vars['ALT_IMG']->value;?>
" id="theMainImage"<?php if (!isset($_smarty_tpl->tpl_vars['rvas_display_size']->value)) {?> usemap="#map<?php echo $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_type();?>
"<?php }?> title="<?php if (isset($_smarty_tpl->tpl_vars['COMMENT_IMG']->value)) {
echo smarty_modifier_replace(strip_tags($_smarty_tpl->tpl_vars['COMMENT_IMG']->value),'"',' ');
} else {
echo $_smarty_tpl->tpl_vars['current']->value['TITLE_ESC'];?>
 - <?php echo $_smarty_tpl->tpl_vars['ALT_IMG']->value;
}?>">

<?php
$_from = $_smarty_tpl->tpl_vars['current']->value['unique_derivatives'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_derivative_1_saved_item = isset($_smarty_tpl->tpl_vars['derivative']) ? $_smarty_tpl->tpl_vars['derivative'] : false;
$__foreach_derivative_1_saved_key = isset($_smarty_tpl->tpl_vars['derivative_type']) ? $_smarty_tpl->tpl_vars['derivative_type'] : false;
$_smarty_tpl->tpl_vars['derivative'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['derivative_type'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['derivative']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['derivative_type']->value => $_smarty_tpl->tpl_vars['derivative']->value) {
$_smarty_tpl->tpl_vars['derivative']->_loop = true;
$__foreach_derivative_1_saved_local_item = $_smarty_tpl->tpl_vars['derivative'];
?><map name="map<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_type();?>
"><?php $_smarty_tpl->tpl_vars['size'] = new Smarty_Variable($_smarty_tpl->tpl_vars['derivative']->value->get_size(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'size', 0);
if (isset($_smarty_tpl->tpl_vars['previous']->value)) {?><area shape=rect coords="0,0,<?php echo intval(($_smarty_tpl->tpl_vars['size']->value[0]/4));?>
,<?php echo $_smarty_tpl->tpl_vars['size']->value[1];?>
" href="<?php echo $_smarty_tpl->tpl_vars['previous']->value['U_IMG'];?>
" title="<?php echo l10n('Previous');?>
 : <?php echo $_smarty_tpl->tpl_vars['previous']->value['TITLE_ESC'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['previous']->value['TITLE_ESC'];?>
"><?php }?><area shape=rect coords="<?php echo intval(($_smarty_tpl->tpl_vars['size']->value[0]/4));?>
,0,<?php echo intval(($_smarty_tpl->tpl_vars['size']->value[0]/1.34));?>
,<?php echo intval(($_smarty_tpl->tpl_vars['size']->value[1]/4));?>
" href="<?php echo $_smarty_tpl->tpl_vars['U_UP']->value;?>
" title="<?php echo l10n('Thumbnails');?>
" alt="<?php echo l10n('Thumbnails');?>
"><?php if (isset($_smarty_tpl->tpl_vars['next']->value)) {?><area shape=rect coords="<?php echo intval(($_smarty_tpl->tpl_vars['size']->value[0]/1.33));?>
,0,<?php echo $_smarty_tpl->tpl_vars['size']->value[0];?>
,<?php echo $_smarty_tpl->tpl_vars['size']->value[1];?>
" href="<?php echo $_smarty_tpl->tpl_vars['next']->value['U_IMG'];?>
" title="<?php echo l10n('Next');?>
 : <?php echo $_smarty_tpl->tpl_vars['next']->value['TITLE_ESC'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['next']->value['TITLE_ESC'];?>
"><?php }?></map><?php
$_smarty_tpl->tpl_vars['derivative'] = $__foreach_derivative_1_saved_local_item;
}
if ($__foreach_derivative_1_saved_item) {
$_smarty_tpl->tpl_vars['derivative'] = $__foreach_derivative_1_saved_item;
}
if ($__foreach_derivative_1_saved_key) {
$_smarty_tpl->tpl_vars['derivative_type'] = $__foreach_derivative_1_saved_key;
}
}
}
