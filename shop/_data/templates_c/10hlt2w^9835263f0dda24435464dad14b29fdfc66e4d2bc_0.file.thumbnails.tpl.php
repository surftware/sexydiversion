<?php
/* Smarty version 3.1.29, created on 2020-06-27 04:17:43
  from "/home4/sexydive/public_html/shop/themes/modus/template/thumbnails.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ef70eb7267649_95126915',
  'file_dependency' => 
  array (
    '9835263f0dda24435464dad14b29fdfc66e4d2bc' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/modus/template/thumbnails.tpl',
      1 => 1585290230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef70eb7267649_95126915 ($_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['thumbnails']->value)) {
if ($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/$_smarty_tpl->tpl_vars['derivative_params']->value->max_height() > 1.5 || ($_smarty_tpl->tpl_vars['derivative_params']->value->max_height() < 400 && !$_smarty_tpl->tpl_vars['derivative_params']->value->sizing->max_crop)) {
echo modus_thumbs(array(),$_smarty_tpl);
} else {
if (@constant('IMG_SQUARE') == $_smarty_tpl->tpl_vars['derivative_params']->value->type) {
$_smarty_tpl->tpl_vars['SHOW_THUMBNAIL_CAPTION'] = new Smarty_Variable(false, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'SHOW_THUMBNAIL_CAPTION', 0);
}
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('html_style', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
.thumbnails SPAN,.thumbnails .wrap2 A{width:<?php echo $_smarty_tpl->tpl_vars['derivative_params']->value->max_width()+2;?>
px}.thumbnails .wrap2{height:<?php echo $_smarty_tpl->tpl_vars['derivative_params']->value->max_height()+3;?>
px}@media <?php echo modus_css_resolution(array('min'=>1.3,'max'=>1.7),$_smarty_tpl);?>
{.thumbnails SPAN,.thumbnails .wrap2 A{width:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/1.5+2));?>
px}.thumbnails .wrap2{height:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_height()/1.5+3));?>
px}.thumbnails .wrap2 IMG{max-width:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/1.5));?>
px;max-height:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_height()/1.5));?>
px;}}@media <?php echo modus_css_resolution(array('min'=>1.7,'max'=>2.5),$_smarty_tpl);?>
{.thumbnails SPAN,.thumbnails .wrap2 A{width:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/2+2));?>
px}.thumbnails .wrap2{height:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_height()/2+3));?>
px}.thumbnails .wrap2 IMG{max-width:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/2));?>
px;max-height:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_height()/2));?>
px;}}@media <?php echo modus_css_resolution(array('min'=>2.5),$_smarty_tpl);?>
{.thumbnails SPAN,.thumbnails .wrap2 A{width:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/3+2));?>
px}.thumbnails .wrap2{height:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_height()/3+3));?>
px}.thumbnails .wrap2 IMG{max-width:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/3));?>
px;max-height:<?php echo intval(($_smarty_tpl->tpl_vars['derivative_params']->value->max_height()/3));?>
px;}}@media<?php $_smarty_tpl->tpl_vars['maxw'] = new Smarty_Variable(intval((2+2*($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()+1+7))), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'maxw', 0);
echo modus_css_resolution(array('base'=>(('(max-width:').($_smarty_tpl->tpl_vars['maxw']->value)).('px)'),'max'=>1),$_smarty_tpl);?>
,<?php $_smarty_tpl->tpl_vars['maxw'] = new Smarty_Variable(intval((2+2*($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/1.5+1+7))), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'maxw', 0);
echo modus_css_resolution(array('base'=>(('(max-width:').($_smarty_tpl->tpl_vars['maxw']->value)).('px)'),'min'=>1.3,'max'=>1.7),$_smarty_tpl);?>
,<?php $_smarty_tpl->tpl_vars['maxw'] = new Smarty_Variable(intval((2+2*($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/2+1+7))), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'maxw', 0);
echo modus_css_resolution(array('base'=>(('(max-width:').($_smarty_tpl->tpl_vars['maxw']->value)).('px)'),'min'=>1.7,'max'=>2.5),$_smarty_tpl);?>
,<?php $_smarty_tpl->tpl_vars['maxw'] = new Smarty_Variable(intval((2+2*($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/3+1+7))), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'maxw', 0);
echo modus_css_resolution(array('base'=>(('(max-width:').($_smarty_tpl->tpl_vars['maxw']->value)).('px)'),'min'=>2.5),$_smarty_tpl);?>
{.thumbnails .wrap2{height:auto;border:0}.thumbnails .thumbLegend{height:auto;min-height:4em;overflow:visible;}}@media<?php $_smarty_tpl->tpl_vars['maxw'] = new Smarty_Variable(intval((2+($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()+1+7))), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'maxw', 0);
echo modus_css_resolution(array('base'=>(('(max-width:').($_smarty_tpl->tpl_vars['maxw']->value)).('px)'),'max'=>1),$_smarty_tpl);?>
,<?php $_smarty_tpl->tpl_vars['maxw'] = new Smarty_Variable(intval((2+($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/1.5+1+7))), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'maxw', 0);
echo modus_css_resolution(array('base'=>(('(max-width:').($_smarty_tpl->tpl_vars['maxw']->value)).('px)'),'min'=>1.3,'max'=>1.7),$_smarty_tpl);?>
,<?php $_smarty_tpl->tpl_vars['maxw'] = new Smarty_Variable(intval((2+($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/2+1+7))), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'maxw', 0);
echo modus_css_resolution(array('base'=>(('(max-width:').($_smarty_tpl->tpl_vars['maxw']->value)).('px)'),'min'=>1.7,'max'=>2.5),$_smarty_tpl);?>
,<?php $_smarty_tpl->tpl_vars['maxw'] = new Smarty_Variable(intval((2+($_smarty_tpl->tpl_vars['derivative_params']->value->max_width()/3+1+7))), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'maxw', 0);
echo modus_css_resolution(array('base'=>(('(max-width:').($_smarty_tpl->tpl_vars['maxw']->value)).('px)'),'min'=>2.5),$_smarty_tpl);?>
{.thumbnails .wrap1{margin:0 0 5px}.thumbnails .wrap2{display:block}.thumbnails SPAN, .thumbnails .wrap2 A{max-width:99.8%}.thumbnails .wrap2 IMG{max-width:100%}}<?php if ($_smarty_tpl->tpl_vars['derivative_params']->value->max_width() > 400) {?>.thumbLegend {font-size: 110%}<?php } else { ?>.thumbLegend {font-size: 90%}<?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
$_from = $_smarty_tpl->tpl_vars['thumbnails']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_thumbnail_0_saved_item = isset($_smarty_tpl->tpl_vars['thumbnail']) ? $_smarty_tpl->tpl_vars['thumbnail'] : false;
$_smarty_tpl->tpl_vars['thumbnail'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['thumbnail']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['thumbnail']->value) {
$_smarty_tpl->tpl_vars['thumbnail']->_loop = true;
$__foreach_thumbnail_0_saved_local_item = $_smarty_tpl->tpl_vars['thumbnail'];
?><li> <span class="wrap1"> <span class="wrap2"> <a href="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['URL'];?>
"><?php $_smarty_tpl->tpl_vars['derivative'] = new Smarty_Variable($_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params']->value,$_smarty_tpl->tpl_vars['thumbnail']->value['src_image']), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'derivative', 0);?><img src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['TN_ALT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['TN_TITLE'];?>
"> </a> </span><?php if ($_smarty_tpl->tpl_vars['SHOW_THUMBNAIL_CAPTION']->value) {?><div class="thumbLegend"><?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['NAME'];
if (!empty($_smarty_tpl->tpl_vars['thumbnail']->value['icon_ts'])) {?><span class=albSymbol title="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['icon_ts']['TITLE'];?>
">✽</span><?php }
if (isset($_smarty_tpl->tpl_vars['thumbnail']->value['NB_COMMENTS'])) {?><span class="<?php if (0 == $_smarty_tpl->tpl_vars['thumbnail']->value['NB_COMMENTS']) {?>zero <?php }?>nb-comments"> <br><?php echo l10n_dec('%d comment','%d comments',$_smarty_tpl->tpl_vars['thumbnail']->value['NB_COMMENTS']);?>
</span><?php }
if (isset($_smarty_tpl->tpl_vars['thumbnail']->value['NB_HITS'])) {?><span class="<?php if (0 == $_smarty_tpl->tpl_vars['thumbnail']->value['NB_HITS']) {?>zero <?php }?>nb-hits"> <br><?php echo l10n_dec('%d hit','%d hits',$_smarty_tpl->tpl_vars['thumbnail']->value['NB_HITS']);?>
</span><?php }?><span class="thumbDesc"><br><?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['DESCRIPTION'];?>
</span> </div><?php }?></span> </li><?php
$_smarty_tpl->tpl_vars['thumbnail'] = $__foreach_thumbnail_0_saved_local_item;
}
if ($__foreach_thumbnail_0_saved_item) {
$_smarty_tpl->tpl_vars['thumbnail'] = $__foreach_thumbnail_0_saved_item;
}
}
}
}
}
