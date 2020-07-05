<?php
/* Smarty version 3.1.29, created on 2020-06-27 04:29:51
  from "/home4/sexydive/public_html/shop/themes/default/template/redirect.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ef7118fa3c5c5_86061712',
  'file_dependency' => 
  array (
    'dfaf4c977178a75286e2f306161a142aef69262f' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/default/template/redirect.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef7118fa3c5c5_86061712 ($_smarty_tpl) {
?>
<div style="margin:2em;text-align:center;font-size:larger">
	<?php echo $_smarty_tpl->tpl_vars['REDIRECT_MSG']->value;?>

</div>

<p style="margin:2em;text-align:center">
	<a href="<?php echo $_smarty_tpl->tpl_vars['page_refresh']->value['U_REFRESH'];?>
">
		<?php echo l10n('Click here if your browser does not automatically forward you');?>

	</a>
</p>
<?php }
}
