<?php
/* Smarty version 3.1.29, created on 2020-07-20 14:33:12
  from "/home4/sexydive/public_html/shop/themes/default/template/menubar_categories.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f15f178597e05_93264342',
  'file_dependency' => 
  array (
    '1dfb8156e3301b86c4ec5b7565fe1d52cce30849' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/default/template/menubar_categories.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f15f178597e05_93264342 ($_smarty_tpl) {
?>
<dt>
<?php if (isset($_smarty_tpl->tpl_vars['U_START_FILTER']->value)) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['U_START_FILTER']->value;?>
" class="pwg-state-default pwg-button menubarFilter" title="<?php echo l10n('display only recently posted photos');?>
" rel="nofollow"><span class="pwg-icon pwg-icon-filter"> </span></a>
<?php }
if (isset($_smarty_tpl->tpl_vars['U_STOP_FILTER']->value)) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['U_STOP_FILTER']->value;?>
" class="pwg-state-default pwg-button menubarFilter" title="<?php echo l10n('return to the display of all photos');?>
"><span class="pwg-icon pwg-icon-filter-del"> </span></a>
<?php }?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['block']->value->data['U_CATEGORIES'];?>
"><?php echo l10n('Albums');?>
</a>
</dt>
<dd>
<?php $_smarty_tpl->tpl_vars['ref_level'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'ref_level', 0);
$_from = $_smarty_tpl->tpl_vars['block']->value->data['MENU_CATEGORIES'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cat_0_saved_item = isset($_smarty_tpl->tpl_vars['cat']) ? $_smarty_tpl->tpl_vars['cat'] : false;
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$__foreach_cat_0_saved_local_item = $_smarty_tpl->tpl_vars['cat'];
if ($_smarty_tpl->tpl_vars['cat']->value['LEVEL'] > $_smarty_tpl->tpl_vars['ref_level']->value) {?>
  <ul>
<?php } else { ?>
    </li>
    <?php echo str_repeat('</ul></li>',($_smarty_tpl->tpl_vars['ref_level']->value-$_smarty_tpl->tpl_vars['cat']->value['LEVEL']));?>

<?php }?>
    <li <?php if ($_smarty_tpl->tpl_vars['cat']->value['SELECTED']) {?>class="selected"<?php }?>>
      <a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
" <?php if ($_smarty_tpl->tpl_vars['cat']->value['IS_UPPERCAT']) {?>rel="up"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['cat']->value['TITLE'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['NAME'];?>
</a>
<?php if ($_smarty_tpl->tpl_vars['cat']->value['count_images'] > 0) {?>
      <span class="<?php if ($_smarty_tpl->tpl_vars['cat']->value['nb_images'] > 0) {?>menuInfoCat<?php } else { ?>menuInfoCatByChild<?php }?> badge" title="<?php echo $_smarty_tpl->tpl_vars['cat']->value['TITLE'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['count_images'];?>
</span>
<?php }
if (!empty($_smarty_tpl->tpl_vars['cat']->value['icon_ts'])) {?>
      <span class=albSymbol title="<?php echo $_smarty_tpl->tpl_vars['cat']->value['icon_ts']['TITLE'];?>
"><?php if ($_smarty_tpl->tpl_vars['cat']->value['icon_ts']['IS_CHILD_DATE']) {?>✻<?php } else { ?>✽<?php }?></span>
<?php }?>
  <?php $_smarty_tpl->tpl_vars['ref_level'] = new Smarty_Variable($_smarty_tpl->tpl_vars['cat']->value['LEVEL'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'ref_level', 0);
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_0_saved_local_item;
}
if ($__foreach_cat_0_saved_item) {
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_0_saved_item;
}
echo str_repeat('</li></ul>',$_smarty_tpl->tpl_vars['ref_level']->value);?>


	<p class="totalImages"><?php echo l10n_dec('%d photo','%d photos',$_smarty_tpl->tpl_vars['block']->value->data['NB_PICTURE']);?>
</p>
</dd>
<?php }
}
