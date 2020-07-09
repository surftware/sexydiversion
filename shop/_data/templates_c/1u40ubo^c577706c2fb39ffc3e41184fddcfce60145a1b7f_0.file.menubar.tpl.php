<?php
/* Smarty version 3.1.29, created on 2020-06-27 05:42:00
  from "/home4/sexydive/public_html/shop/themes/smartpocket/template/menubar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ef722786e79f7_62884473',
  'file_dependency' => 
  array (
    'c577706c2fb39ffc3e41184fddcfce60145a1b7f' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/smartpocket/template/menubar.tpl',
      1 => 1585290234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef722786e79f7_62884473 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home4/sexydive/public_html/shop/include/smarty/libs/plugins/modifier.replace.php';
?>
<ul data-role="listview">
  <li data-icon="delete"><a href="#menubar" data-rel="close"><?php echo l10n('Close');?>
</a></li>
</ul>
<?php if (!empty($_smarty_tpl->tpl_vars['blocks']->value)) {?>
<div data-role="collapsible-set" data-inset="false">
<?php
$_from = $_smarty_tpl->tpl_vars['blocks']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_block_0_saved_item = isset($_smarty_tpl->tpl_vars['block']) ? $_smarty_tpl->tpl_vars['block'] : false;
$__foreach_block_0_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['block'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['block']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
$__foreach_block_0_saved_local_item = $_smarty_tpl->tpl_vars['block'];
?>
		<div data-role="collapsible" data-inset="false" data-icon="false">
<?php if (!empty($_smarty_tpl->tpl_vars['block']->value->template)) {
ob_start();
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value->template, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->assign($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['get_extent'][0][0]->get_extent('the_block',$_smarty_tpl->tpl_vars['id']->value), ob_get_clean());
?>

    <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['the_block']->value,'dt','h3'),'<dd>',''),'</dd>','');?>

<?php } else { ?>
		<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['block']->value->raw_content,'dt','h3'),'<dd>',''),'</dd>','');?>

<?php }?>
    </div>
<?php
$_smarty_tpl->tpl_vars['block'] = $__foreach_block_0_saved_local_item;
}
if ($__foreach_block_0_saved_item) {
$_smarty_tpl->tpl_vars['block'] = $__foreach_block_0_saved_item;
}
if ($__foreach_block_0_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_block_0_saved_key;
}
?>
</div>
<?php }?>
<br>
<ul data-role="listview">
  <li data-role="list-divider"><?php echo l10n('View in');?>
</li>
  <li><a href="<?php echo $_smarty_tpl->tpl_vars['TOGGLE_MOBILE_THEME_URL']->value;?>
"><?php echo l10n('Desktop');?>
</a></li>
</ul>
<?php }
}
