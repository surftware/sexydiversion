<?php
/* Smarty version 3.1.29, created on 2020-07-27 05:31:37
  from "/home4/sexydive/public_html/shop/themes/default/template/about.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f1ead09c7d146_62727657',
  'file_dependency' => 
  array (
    'b772a8569767f23b7e22e040ed4bf4b5302bcd0c' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/default/template/about.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:infos_errors.tpl' => 1,
  ),
),false)) {
function content_5f1ead09c7d146_62727657 ($_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['MENUBAR']->value)) {
echo $_smarty_tpl->tpl_vars['MENUBAR']->value;
}?>
<div id="content" class="content<?php if (isset($_smarty_tpl->tpl_vars['MENUBAR']->value)) {?> contentWithMenu<?php }?>">
  <div class="titrePage">
    <ul class="categoryActions">
    </ul>
    <h2><a href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
"><?php echo l10n('Home');?>
</a><?php echo $_smarty_tpl->tpl_vars['LEVEL_SEPARATOR']->value;
echo l10n('About');?>
</h2>
  </div>
  
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:infos_errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div id="piwigoAbout">
  <?php echo $_smarty_tpl->tpl_vars['ABOUT_MESSAGE']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['THEME_ABOUT']->value)) {?>
  <ul>
   <li><?php echo $_smarty_tpl->tpl_vars['THEME_ABOUT']->value;?>
</li>
  </ul>
<?php }
if (!empty($_smarty_tpl->tpl_vars['about_msgs']->value)) {
$_from = $_smarty_tpl->tpl_vars['about_msgs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_elt_0_saved_item = isset($_smarty_tpl->tpl_vars['elt']) ? $_smarty_tpl->tpl_vars['elt'] : false;
$_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['elt']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->_loop = true;
$__foreach_elt_0_saved_local_item = $_smarty_tpl->tpl_vars['elt'];
?>
    <?php echo $_smarty_tpl->tpl_vars['elt']->value;?>

<?php
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_0_saved_local_item;
}
if ($__foreach_elt_0_saved_item) {
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_0_saved_item;
}
}?>
  </div>
</div>
<?php }
}
