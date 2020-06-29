<?php
/* Smarty version 3.1.29, created on 2020-06-27 04:18:04
  from "/home4/sexydive/public_html/shop/admin/themes/default/template/picture_modify.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ef70ecccefbb3_91202838',
  'file_dependency' => 
  array (
    'eb83a9fc092345068dbdfd30f3041a920070ca98' => 
    array (
      0 => '/home4/sexydive/public_html/shop/admin/themes/default/template/picture_modify.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/autosize.inc.tpl' => 1,
    'file:include/datepicker.inc.tpl' => 1,
    'file:include/colorbox.inc.tpl' => 1,
  ),
),false)) {
function content_5ef70ecccefbb3_91202838 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/home4/sexydive/public_html/shop/include/smarty/libs/plugins/function.html_options.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:include/autosize.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:include/datepicker.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:include/colorbox.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'LocalStorageCache','load'=>'footer','path'=>'admin/themes/default/js/LocalStorageCache.js'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.selectize','load'=>'footer','path'=>'themes/default/js/plugins/selectize.min.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('id'=>'jquery.selectize','path'=>"themes/default/js/plugins/selectize.".((string)$_smarty_tpl->tpl_vars['themeconf']->value['colorscheme']).".css"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

(function(){

var categoriesCache = new CategoriesCache({
  serverKey: '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['categories'];?>
',
  serverId: '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['_hash'];?>
',
  rootUrl: '<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
'
});

categoriesCache.selectize(jQuery('[data-selectize=categories]'));


var tagsCache = new TagsCache({
  serverKey: '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['tags'];?>
',
  serverId: '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['_hash'];?>
',
  rootUrl: '<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
'
});

tagsCache.selectize(jQuery('[data-selectize=tags]'), { lang: {
  'Add': '<?php echo l10n('Create');?>
'
}});


jQuery(function(){ 
  jQuery('[data-datepicker]').pwgDatepicker({
    showTimepicker: true,
    cancelButton: '<?php echo l10n('Cancel');?>
'
  });
});


jQuery("a.preview-box").colorbox({
	photo: true
});
}());
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<h2><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 &#8250; <?php echo l10n('Edit photo');?>
 <?php echo $_smarty_tpl->tpl_vars['TABSHEET_TITLE']->value;?>
</h2>

<form action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="post" id="catModify">

  <fieldset>
    <legend><?php echo l10n('Informations');?>
</legend>

    <table>

      <tr>
        <td id="albumThumbnail">
          <a href="<?php echo $_smarty_tpl->tpl_vars['FILE_SRC']->value;?>
" class="preview-box icon-zoom-in" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TITLE']->value);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['TN_SRC']->value;?>
" alt="<?php echo l10n('Thumbnail');?>
"></a>
        </td>
        <td id="albumLinks" style="width:400px;vertical-align:top;">
          <ul style="padding-left:15px;margin:0;">
            <li><?php echo $_smarty_tpl->tpl_vars['INTRO']->value['file'];?>
</li>
            <li><?php echo $_smarty_tpl->tpl_vars['INTRO']->value['add_date'];?>
</li>
            <li><?php echo $_smarty_tpl->tpl_vars['INTRO']->value['added_by'];?>
</li>
            <li><?php echo $_smarty_tpl->tpl_vars['INTRO']->value['size'];?>
</li>
            <li><?php echo $_smarty_tpl->tpl_vars['INTRO']->value['formats'];?>
</li>
            <li><?php echo $_smarty_tpl->tpl_vars['INTRO']->value['stats'];?>
</li>
            <li><?php echo $_smarty_tpl->tpl_vars['INTRO']->value['id'];?>
</li>
          </ul>
        </td>
        <td class="photoLinks">
          <ul>
<?php if (isset($_smarty_tpl->tpl_vars['U_JUMPTO']->value)) {?>
            <li><a class="icon-eye" href="<?php echo $_smarty_tpl->tpl_vars['U_JUMPTO']->value;?>
"><?php echo l10n('jump to photo');?>
 →</a></li>
<?php }?>
          <li><a class="icon-download" href="<?php echo $_smarty_tpl->tpl_vars['U_DOWNLOAD']->value;?>
"><?php echo l10n('Download');?>
</a></li>
<?php if (!url_is_remote($_smarty_tpl->tpl_vars['PATH']->value)) {?>
            <li><a class="icon-arrows-cw" href="<?php echo $_smarty_tpl->tpl_vars['U_SYNC']->value;?>
"><?php echo l10n('Synchronize metadata');?>
</a></li>

            <li><a class="icon-trash" href="<?php echo $_smarty_tpl->tpl_vars['U_DELETE']->value;?>
" onclick="return confirm('<?php echo strtr(l10n('Are you sure?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');"><?php echo l10n('delete photo');?>
</a></li>
<?php }?>
          </ul>
        </td>
      </tr>
    </table>

  </fieldset>

  <fieldset>
    <legend><?php echo l10n('Properties');?>
</legend>

    <p>
      <strong><?php echo l10n('Title');?>
</strong>
      <br>
      <input type="text" class="large" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['NAME']->value, ENT_QUOTES, 'UTF-8', true);?>
">
    </p>

    <p>
      <strong><?php echo l10n('Author');?>
</strong>
      <br>
      <input type="text" class="large" name="author" value="<?php echo $_smarty_tpl->tpl_vars['AUTHOR']->value;?>
">
    </p>

    <p>
      <strong><?php echo l10n('Creation date');?>
</strong>
      <br>
      <input type="hidden" name="date_creation" value="<?php echo $_smarty_tpl->tpl_vars['DATE_CREATION']->value;?>
">
      <label>
        <i class="icon-calendar"></i>
        <input type="text" data-datepicker="date_creation" data-datepicker-unset="date_creation_unset" readonly>
      </label>
      <a href="#" class="icon-cancel-circled" id="date_creation_unset"><?php echo l10n('unset');?>
</a>
    </p>

    <p>
      <strong><?php echo l10n('Linked albums');?>
</strong>
      <br>
      <select data-selectize="categories" data-value="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['associated_albums']->value), ENT_QUOTES, 'UTF-8', true);?>
"
        placeholder="<?php echo l10n('Type in a search term');?>
"
        data-default="<?php echo $_smarty_tpl->tpl_vars['STORAGE_ALBUM']->value;?>
" name="associate[]" multiple style="width:600px;"></select>
    </p>

    <p>
      <strong><?php echo l10n('Representation of albums');?>
</strong>
      <br>
      <select data-selectize="categories" data-value="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['represented_albums']->value), ENT_QUOTES, 'UTF-8', true);?>
"
        placeholder="<?php echo l10n('Type in a search term');?>
"
        name="represent[]" multiple style="width:600px;"></select>
    </p>

    <p>
      <strong><?php echo l10n('Tags');?>
</strong>
      <br>
      <select data-selectize="tags" data-value="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['tag_selection']->value), ENT_QUOTES, 'UTF-8', true);?>
"
        placeholder="<?php echo l10n('Type in a search term');?>
"
        data-create="true" name="tags[]" multiple style="width:600px;"></select>
    </p>

    <p>
      <strong><?php echo l10n('Description');?>
</strong>
      <br>
      <textarea name="description" id="description" class="description"><?php echo $_smarty_tpl->tpl_vars['DESCRIPTION']->value;?>
</textarea>
    </p>

    <p>
      <strong><?php echo l10n('Who can see this photo?');?>
</strong>
      <br>
      <select name="level" size="1">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['level_options']->value,'selected'=>$_smarty_tpl->tpl_vars['level_options_selected']->value),$_smarty_tpl);?>

      </select>
   </p>

  <p style="margin:40px 0 0 0">
    <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">
    <input class="submit" type="submit" value="<?php echo l10n('Save Settings');?>
" name="submit">
  </p>
</fieldset>

</form>
<?php }
}
