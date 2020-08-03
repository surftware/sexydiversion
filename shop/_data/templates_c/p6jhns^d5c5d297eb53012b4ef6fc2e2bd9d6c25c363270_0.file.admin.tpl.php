<?php
/* Smarty version 3.1.29, created on 2020-07-27 05:27:10
  from "/home4/sexydive/public_html/shop/plugins/LocalFilesEditor/template/admin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f1eabfe538e25_50585678',
  'file_dependency' => 
  array (
    'd5c5d297eb53012b4ef6fc2e2bd9d6c25c363270' => 
    array (
      0 => '/home4/sexydive/public_html/shop/plugins/LocalFilesEditor/template/admin.tpl',
      1 => 1585290208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1eabfe538e25_50585678 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/home4/sexydive/public_html/shop/include/smarty/libs/plugins/function.html_options.php';
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>"codemirror",'path'=>"plugins/LocalFilesEditor/codemirror/lib/codemirror.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>"codemirror.xml",'require'=>"codemirror",'path'=>"plugins/LocalFilesEditor/codemirror/mode/xml/xml.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>"codemirror.javascript",'require'=>"codemirror",'path'=>"plugins/LocalFilesEditor/codemirror/mode/javascript/javascript.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>"codemirror.css",'require'=>"codemirror",'path'=>"plugins/LocalFilesEditor/codemirror/mode/css/css.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>"codemirror.clike",'require'=>"codemirror",'path'=>"plugins/LocalFilesEditor/codemirror/mode/clike/clike.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>"codemirror.htmlmixed",'require'=>"codemirror.xml,codemirror.javascript,codemirror.css",'path'=>"plugins/LocalFilesEditor/codemirror/mode/htmlmixed/htmlmixed.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>"codemirror.php",'require'=>"codemirror.xml,codemirror.javascript,codemirror.css,codemirror.clike",'path'=>"plugins/LocalFilesEditor/codemirror/mode/php/php.js"),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"plugins/LocalFilesEditor/codemirror/lib/codemirror.css"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"plugins/LocalFilesEditor/codemirror/mode/xml/xml.css"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"plugins/LocalFilesEditor/codemirror/mode/javascript/javascript.css"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"plugins/LocalFilesEditor/codemirror/mode/css/css.css"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"plugins/LocalFilesEditor/codemirror/mode/clike/clike.css"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"plugins/LocalFilesEditor/template/locfiledit.css"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

if (document.getElementById("text") != null)
  var editor = CodeMirror.fromTextArea(document.getElementById("text"), {
    matchBrackets: true,
    mode: "<?php echo $_smarty_tpl->tpl_vars['CODEMIRROR_MODE']->value;?>
",
    tabMode: "shift"
  });
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div class="titrePage">
  <h2>LocalFiles Editor</h2>
</div>

<form method="post" class="properties" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" ENCTYPE="multipart/form-data" name="form">
<input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">

<div id="LocalFilesEditor">

<?php if (isset($_smarty_tpl->tpl_vars['theme']->value)) {?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" name="theme">
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['language']->value)) {?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
" name="language">
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['template']->value)) {?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
" name="template">
<?php }?>


<?php if (isset($_smarty_tpl->tpl_vars['create_tpl']->value)) {?>
  <table>
    <tr>
      <td style="text-align: right;"><?php echo l10n('locfiledit_new_filename');?>
</td>
      <td style="text-align: left;"><input type="text" size="55" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['create_tpl']->value['NEW_FILE_NAME'];?>
" name="tpl_name"/></td>
    </tr>
    <tr>
      <td style="text-align: right;"><?php echo l10n('locfiledit_parent_directory');?>
</td>
      <td style="text-align: left;"><?php echo smarty_function_html_options(array('name'=>'tpl_parent','options'=>$_smarty_tpl->tpl_vars['create_tpl']->value['PARENT_OPTIONS'],'selected'=>$_smarty_tpl->tpl_vars['create_tpl']->value['PARENT_SELECTED']),$_smarty_tpl);?>
</td>
    </tr>
    <tr>
      <td style="text-align: right;"><?php echo l10n('locfiledit_model');?>
</td>
      <td style="text-align: left;"><?php echo smarty_function_html_options(array('name'=>'tpl_model','options'=>$_smarty_tpl->tpl_vars['create_tpl']->value['MODEL_OPTIONS'],'selected'=>$_smarty_tpl->tpl_vars['create_tpl']->value['MODEL_SELECTED']),$_smarty_tpl);?>
</td>
    </tr>
  </table>
<br><br>
<input class="submit" type="submit" value="<?php echo l10n('Submit');?>
" name="create_tpl" />
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['css_lang_tpl']->value)) {?>
<select name="<?php echo $_smarty_tpl->tpl_vars['css_lang_tpl']->value['SELECT_NAME'];?>
">
<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['css_lang_tpl']->value['OPTIONS'],'selected'=>$_smarty_tpl->tpl_vars['css_lang_tpl']->value['SELECTED']),$_smarty_tpl);?>

</select>

<input class="submit" type="submit" value="<?php echo l10n('locfiledit_edit');?>
" name="edit" />
<br><br>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['css_lang_tpl']->value['NEW_FILE_URL'])) {?>
<span class="<?php echo $_smarty_tpl->tpl_vars['css_lang_tpl']->value['NEW_FILE_CLASS'];?>
">
<a href="<?php echo $_smarty_tpl->tpl_vars['css_lang_tpl']->value['NEW_FILE_URL'];?>
"><?php echo l10n('locfiledit_new_tpl');?>
</a>
</span>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['zone_edit']->value)) {?>
<div id="title_bar">
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['show_default']->value)) {
$_from = $_smarty_tpl->tpl_vars['show_default']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_default_loop_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_default_loop']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_default_loop'] : false;
$__foreach_default_loop_0_saved_item = isset($_smarty_tpl->tpl_vars['file']) ? $_smarty_tpl->tpl_vars['file'] : false;
$__foreach_default_loop_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['file'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_default_loop'] = new Smarty_Variable(array());
$__foreach_default_loop_0_iteration=0;
$_smarty_tpl->tpl_vars['file']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
$__foreach_default_loop_0_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_default_loop']->value['last'] = $__foreach_default_loop_0_iteration == $__foreach_default_loop_0_total;
$__foreach_default_loop_0_saved_local_item = $_smarty_tpl->tpl_vars['file'];
?>
<span class="default_file">
<a href="<?php echo $_smarty_tpl->tpl_vars['file']->value['URL'];?>
" onclick="window.open( this.href, 'local_file', 'location=no,toolbar=no,menubar=no,status=no,resizable=yes,scrollbars=yes,width=800,height=700' ); return false;"><?php echo l10n('locfiledit_show_default');?>
 "<?php echo $_smarty_tpl->tpl_vars['file']->value['FILE'];?>
"</a>
</span>
<?php if (!((isset($_smarty_tpl->tpl_vars['__smarty_foreach_default_loop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_default_loop']->value['last'] : null))) {?><br><?php }
$_smarty_tpl->tpl_vars['file'] = $__foreach_default_loop_0_saved_local_item;
}
if ($__foreach_default_loop_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_default_loop'] = $__foreach_default_loop_0_saved;
}
if ($__foreach_default_loop_0_saved_item) {
$_smarty_tpl->tpl_vars['file'] = $__foreach_default_loop_0_saved_item;
}
}?>

<?php if (isset($_smarty_tpl->tpl_vars['zone_edit']->value)) {?>
<span class="file_name"><?php echo $_smarty_tpl->tpl_vars['zone_edit']->value['FILE_NAME'];?>
</span>
</div> 

<textarea rows="30" cols="90" name="text" id="text"><?php echo $_smarty_tpl->tpl_vars['zone_edit']->value['CONTENT_FILE'];?>
</textarea>
<br>
<input class="submit" type="submit" value="<?php echo l10n('locfiledit_save_file');?>
" name="submit"/>

<?php if (isset($_smarty_tpl->tpl_vars['restore']->value)) {?>
<input class="submit" type="submit" value="<?php echo l10n('locfiledit_restore');?>
" name="restore" onclick="return confirm('<?php echo strtr(l10n('locfiledit_restore_confirm'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');"/>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['restore_infos']->value)) {?>
<br><br>
<?php echo l10n('locfiledit_save_bak');?>

<?php }?>

<?php }?> 
</div>
</form>
<?php }
}
