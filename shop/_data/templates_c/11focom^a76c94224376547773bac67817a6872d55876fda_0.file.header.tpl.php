<?php
/* Smarty version 3.1.29, created on 2020-07-27 05:29:51
  from "/home4/sexydive/public_html/shop/themes/default/template/mail/text/html/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f1eac9f112803_83910873',
  'file_dependency' => 
  array (
    'a76c94224376547773bac67817a6872d55876fda' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/default/template/mail/text/html/header.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1eac9f112803_83910873 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['code'];?>
" dir="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['direction'];?>
">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['CONTENT_ENCODING']->value;?>
"/>
    <title>Piwigo Mail</title>

    <style type="text/css">
    <?php if (isset($_smarty_tpl->tpl_vars['GLOBAL_MAIL_CSS']->value)) {
echo $_smarty_tpl->tpl_vars['GLOBAL_MAIL_CSS']->value;
}?>
    <?php if (isset($_smarty_tpl->tpl_vars['MAIL_CSS']->value)) {
echo $_smarty_tpl->tpl_vars['MAIL_CSS']->value;
}?>
    </style>
  </head>

  <body>
    <table id="bodyTable" cellspacing="0" cellpadding="10" border="0">
      <tr><td align="center" valign="top">

        <table id="contentTable" cellspacing="0" cellpadding="0" border="0">
          <tr><td id="header">
            
            <div id="title"><?php echo $_smarty_tpl->tpl_vars['MAIL_TITLE']->value;?>
</div>
            <?php if (!empty($_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value)) {?><div id="subtitle"><?php echo $_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value;?>
</div><?php }?>
            
          </td></tr>

          <tr><td id="content">

            <div id="topSpacer"></div>
            <?php }
}
