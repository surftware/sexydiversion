<?php
/* Smarty version 3.1.29, created on 2020-06-27 04:15:26
  from "/home4/sexydive/public_html/shop/themes/modus/template/mainpage_categories.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ef70e2e3c32f0_20475976',
  'file_dependency' => 
  array (
    'bac3711dbf3aa2d5b6f0fd87f266106caa9c25e8' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/modus/template/mainpage_categories.tpl',
      1 => 1585290230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef70e2e3c32f0_20475976 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home4/sexydive/public_html/shop/include/smarty/libs/plugins/modifier.replace.php';
if (!empty($_smarty_tpl->tpl_vars['album_thumb_size']->value)) {?>
<ul class="albThumbs" id="rv-at">
<?php
$_from = $_smarty_tpl->tpl_vars['category_thumbnails']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['URL'];?>
"> <img class=albImg<?php echo $_smarty_tpl->tpl_vars['item']->value['MODUS_STYLE'];?>
 src="<?php echo $_smarty_tpl->tpl_vars['item']->value['modus_deriv']->get_url();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['TN_ALT'];?>
"> <div class=albLegend> <h4><?php echo $_smarty_tpl->tpl_vars['item']->value['NAME'];?>
</h4><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['icon_ts'])) {?><div class=albLegendRight><span class=albSymbol title="<?php if ($_smarty_tpl->tpl_vars['item']->value['icon_ts']['IS_CHILD_DATE']) {
echo l10n('Recent albums');?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['icon_ts']['TITLE'];?>
">✻<?php } else {
echo l10n('Recent photos');?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['icon_ts']['TITLE'];?>
">✽<?php }?></span></div><?php }?><div><?php if ($_smarty_tpl->tpl_vars['item']->value['nb_images']) {
echo l10n_dec('%d photo','%d photos',$_smarty_tpl->tpl_vars['item']->value['nb_images']);
if ($_smarty_tpl->tpl_vars['item']->value['nb_categories']) {?>, <?php }
}
if ($_smarty_tpl->tpl_vars['item']->value['nb_categories']) {?><span title="<?php echo l10n_dec('%d photo','%d photos',$_smarty_tpl->tpl_vars['item']->value['count_images']);?>
 <?php echo l10n_dec('in %d sub-album','in %d sub-albums',$_smarty_tpl->tpl_vars['item']->value['count_categories']);?>
"><?php echo l10n_dec('%d album','%d albums',$_smarty_tpl->tpl_vars['item']->value['nb_categories']);?>
</span><?php }?></div> </div> </a></li>
<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
</ul>
<?php } else {
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('html_style', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
.thumbnailCategory .illustration{width:<?php echo $_smarty_tpl->tpl_vars['derivative_params']->value->max_width()+5;?>
px;}.content .thumbnailCategory .description{height:<?php echo $_smarty_tpl->tpl_vars['derivative_params']->value->max_height()+5;?>
px;}@media <?php echo modus_css_resolution(array('min'=>1.3),$_smarty_tpl);?>
{.thumbnailCategory .illustration{width:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/2+5));?>
px;}.content .thumbnailCategory .description{height:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_height()/2+5));?>
px;}.illustration IMG{max-width:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/2));?>
px;max-height:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_height()/2));?>
px;}}@media (max-width: <?php echo intval((2+2*($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()+1+120)));?>
px),<?php ob_start();
echo intval((2+2*($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/2+1+120)));
$_tmp1=ob_get_clean();
$_smarty_tpl->tpl_vars['maxw'] = new Smarty_Variable($_tmp1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'maxw', 0);
echo modus_css_resolution(array('base'=>(('(max-width:').($_smarty_tpl->tpl_vars['maxw']->value)).('px)'),'min'=>1.3),$_smarty_tpl);?>
 {.thumbnailCategories LI{width:99%}}<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<ul class="thumbnailCategories">
<?php
$_from = $_smarty_tpl->tpl_vars['category_thumbnails']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cat_loop_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_cat_loop']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_cat_loop'] : false;
$__foreach_cat_loop_1_saved_item = isset($_smarty_tpl->tpl_vars['cat']) ? $_smarty_tpl->tpl_vars['cat'] : false;
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_cat_loop'] = new Smarty_Variable(array('index' => -1));
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_cat_loop']->value['index']++;
$__foreach_cat_loop_1_saved_local_item = $_smarty_tpl->tpl_vars['cat'];
$_smarty_tpl->tpl_vars['derivative'] = new Smarty_Variable($_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params']->value,$_smarty_tpl->tpl_vars['cat']->value['representative']['src_image']), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'derivative', 0);?>
  <li class="<?php if ((1 & (isset($_smarty_tpl->tpl_vars['__smarty_foreach_cat_loop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_cat_loop']->value['index'] : null))) {?>odd<?php } else { ?>even<?php }?>">
		<div class="thumbnailCategory">
			<div class="illustration">
			<a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['cat']->value['TN_ALT'];?>
" title="<?php echo strip_tags(smarty_modifier_replace($_smarty_tpl->tpl_vars['cat']->value['NAME'],'"',' '));?>
 - <?php echo l10n('display this album');?>
">
			</a>
			</div>
			<div class="description">
				<h3>
					<a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['NAME'];?>
</a>
<?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['icon_ts'])) {?>
					<span class=albSymbol title="<?php echo $_smarty_tpl->tpl_vars['cat']->value['icon_ts']['TITLE'];?>
"><?php if ($_smarty_tpl->tpl_vars['cat']->value['icon_ts']['IS_CHILD_DATE']) {?>✻<?php } else { ?>✽<?php }?></span>
<?php }?>
				</h3>
		<div class="text">
<?php if (isset($_smarty_tpl->tpl_vars['cat']->value['INFO_DATES'])) {?>
				<div class="dates"><?php echo $_smarty_tpl->tpl_vars['cat']->value['INFO_DATES'];?>
</div>
<?php }?>
				<div class="Nb_images"><?php echo $_smarty_tpl->tpl_vars['cat']->value['CAPTION_NB_IMAGES'];?>
</div>
<?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['DESCRIPTION'])) {?>
				<div><?php echo $_smarty_tpl->tpl_vars['cat']->value['DESCRIPTION'];?>
</div>
<?php }?>
		</div>
			</div>
		</div>
	</li>
<?php
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_loop_1_saved_local_item;
}
if ($__foreach_cat_loop_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_cat_loop'] = $__foreach_cat_loop_1_saved;
}
if ($__foreach_cat_loop_1_saved_item) {
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_loop_1_saved_item;
}
?>
</ul>
<?php }
}
}
