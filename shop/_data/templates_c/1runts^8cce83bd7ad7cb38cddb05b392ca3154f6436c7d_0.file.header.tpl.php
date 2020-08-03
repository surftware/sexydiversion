<?php
/* Smarty version 3.1.29, created on 2020-07-27 05:29:51
  from "/home4/sexydive/public_html/shop/themes/default/template/mail/text/plain/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f1eac9f121815_17306162',
  'file_dependency' => 
  array (
    '8cce83bd7ad7cb38cddb05b392ca3154f6436c7d' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/default/template/mail/text/plain/header.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1eac9f121815_17306162 ($_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['MAIL_TITLE']->value;?>

<?php if (!empty($_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value)) {
echo $_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value;?>

<?php }?>
----

<?php }
}
