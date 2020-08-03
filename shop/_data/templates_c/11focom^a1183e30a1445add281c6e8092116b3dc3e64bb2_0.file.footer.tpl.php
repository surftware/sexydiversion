<?php
/* Smarty version 3.1.29, created on 2020-07-27 05:29:51
  from "/home4/sexydive/public_html/shop/themes/default/template/mail/text/html/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f1eac9f11bcc5_78881610',
  'file_dependency' => 
  array (
    'a1183e30a1445add281c6e8092116b3dc3e64bb2' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/default/template/mail/text/html/footer.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1eac9f11bcc5_78881610 ($_smarty_tpl) {
?>
            
          </td></tr>

          <tr><td id="footer">
            

      
            <?php echo l10n('Sent by');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['GALLERY_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
</a>
            - <?php echo l10n('Powered by');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['PHPWG_URL']->value;?>
" class="Piwigo">Piwigo</a>
            <?php if (!empty($_smarty_tpl->tpl_vars['VERSION']->value)) {
echo $_smarty_tpl->tpl_vars['VERSION']->value;
}?>
            
            - <?php echo l10n('Contact');?>

            <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['CONTACT_MAIL']->value;?>
?subject=<?php echo rawurlencode(l10n('A comment on your site'));?>
"><?php echo l10n('Webmaster');?>
</a>
            
          </td></tr>
        </table>

      </td></tr>
    </table>
  </body>
</html><?php }
}
