<?php
/* Smarty version 3.1.29, created on 2020-07-27 05:27:44
  from "/home4/sexydive/public_html/shop/themes/default/template/profile_content.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f1eac20d07aa9_15833861',
  'file_dependency' => 
  array (
    '72bf928d21a8b21a5f20bd19662f365f525fef70' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/default/template/profile_content.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1eac20d07aa9_15833861 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/home4/sexydive/public_html/shop/include/smarty/libs/plugins/function.html_options.php';
if (!is_callable('smarty_function_html_radios')) require_once '/home4/sexydive/public_html/shop/include/smarty/libs/plugins/function.html_radios.php';
?>
<form method="post" name="profile" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" id="profile" class="properties">

  <fieldset>
    <legend><?php echo l10n('Registration');?>
</legend>
    <input type="hidden" name="redirect" value="<?php echo $_smarty_tpl->tpl_vars['REDIRECT']->value;?>
">
    <ul>
      <li>
        <span class="property"><?php echo l10n('Username');?>
</span>
        <?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>

      </li>
    <?php if (!$_smarty_tpl->tpl_vars['SPECIAL_USER']->value) {?> 
      <li>
        <span class="property">
          <label for="mail_address"><?php echo l10n('Email address');?>
</label>
        </span>
        <input type="text" name="mail_address" id="mail_address" value="<?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
">
      </li>
      <li>
        <span class="property">
          <label for="password"><?php echo l10n('Password');?>
</label>
        </span>
        <input type="password" name="password" id="password" value="">
      </li>
      <li>
        <span class="property">
          <label for="use_new_pwd"><?php echo l10n('New password');?>
</label>
        </span>
        <input type="password" name="use_new_pwd" id="use_new_pwd" value="">
      </li>
      <li>
        <span class="property">
          <label for="passwordConf"><?php echo l10n('Confirm Password');?>
</label>
        </span>
        <input type="password" name="passwordConf" id="passwordConf" value="">
      </li>
<?php }?>
    </ul>
  </fieldset>

<?php if ($_smarty_tpl->tpl_vars['ALLOW_USER_CUSTOMIZATION']->value) {?>
  <fieldset>
    <legend><?php echo l10n('Preferences');?>
</legend>

    <ul>
      <li>
        <span class="property">
          <label for="nb_image_page"><?php echo l10n('Number of photos per page');?>
</label>
        </span>
        <input type="text" size="4" maxlength="3" name="nb_image_page" id="nb_image_page" value="<?php echo $_smarty_tpl->tpl_vars['NB_IMAGE_PAGE']->value;?>
">
      </li>
      <li>
        <span class="property">
          <label for="template"><?php echo l10n('Theme');?>
</label>
        </span>
        <?php echo smarty_function_html_options(array('name'=>'theme','options'=>$_smarty_tpl->tpl_vars['template_options']->value,'selected'=>$_smarty_tpl->tpl_vars['template_selection']->value),$_smarty_tpl);?>

      </li>
      <li>
        <span class="property">
          <label for="Language"><?php echo l10n('Language');?>
</label>
        </span>
        <?php echo smarty_function_html_options(array('name'=>'language','options'=>$_smarty_tpl->tpl_vars['language_options']->value,'selected'=>$_smarty_tpl->tpl_vars['language_selection']->value),$_smarty_tpl);?>

      </li>
      <li>
        <span class="property">
          <label for="Recent period"><?php echo l10n('Recent period');?>
</label>
        </span>
        <input type="text" size="3" maxlength="2" name="recent_period" id="recent_period" value="<?php echo $_smarty_tpl->tpl_vars['RECENT_PERIOD']->value;?>
">
      </li>
      <li>
        <span class="property"><?php echo l10n('Expand all albums');?>
</span>
        <?php echo smarty_function_html_radios(array('name'=>'expand','options'=>$_smarty_tpl->tpl_vars['radio_options']->value,'selected'=>$_smarty_tpl->tpl_vars['EXPAND']->value),$_smarty_tpl);?>

      </li>
<?php if ($_smarty_tpl->tpl_vars['ACTIVATE_COMMENTS']->value) {?>
      <li>
        <span class="property"><?php echo l10n('Show number of comments');?>
</span>
        <?php echo smarty_function_html_radios(array('name'=>'show_nb_comments','options'=>$_smarty_tpl->tpl_vars['radio_options']->value,'selected'=>$_smarty_tpl->tpl_vars['NB_COMMENTS']->value),$_smarty_tpl);?>

      </li>
<?php }?>
      <li>
        <span class="property"><?php echo l10n('Show number of hits');?>
</span>
        <?php echo smarty_function_html_radios(array('name'=>'show_nb_hits','options'=>$_smarty_tpl->tpl_vars['radio_options']->value,'selected'=>$_smarty_tpl->tpl_vars['NB_HITS']->value),$_smarty_tpl);?>

      </li>
    </ul>
  </fieldset>
<?php }?>

  <p class="bottomButtons">
    <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">
    <input class="submit" type="submit" name="validate" value="<?php echo l10n('Submit');?>
">
    <input class="submit" type="reset" name="reset" value="<?php echo l10n('Reset');?>
">
<?php if ($_smarty_tpl->tpl_vars['ALLOW_USER_CUSTOMIZATION']->value) {?>
    <input class="submit" type="submit" name="reset_to_default" value="<?php echo l10n('Reset to default values');?>
">
<?php }?>
  </p>

</form>
<?php }
}
