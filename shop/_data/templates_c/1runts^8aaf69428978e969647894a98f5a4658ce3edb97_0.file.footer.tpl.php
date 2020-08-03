<?php
/* Smarty version 3.1.29, created on 2020-07-27 05:29:51
  from "/home4/sexydive/public_html/shop/themes/default/template/mail/text/plain/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f1eac9f126495_81599271',
  'file_dependency' => 
  array (
    '8aaf69428978e969647894a98f5a4658ce3edb97' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/default/template/mail/text/plain/footer.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1eac9f126495_81599271 ($_smarty_tpl) {
?>



----
<?php echo l10n('Sent by');?>
 "<?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['GALLERY_URL']->value;?>

<?php echo l10n('Powered by');?>
 "Piwigo<?php if (!empty($_smarty_tpl->tpl_vars['VERSION']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;
}?>" <?php echo $_smarty_tpl->tpl_vars['PHPWG_URL']->value;?>

<?php echo l10n('Contact');?>
: <?php echo $_smarty_tpl->tpl_vars['CONTACT_MAIL']->value;
}
}
