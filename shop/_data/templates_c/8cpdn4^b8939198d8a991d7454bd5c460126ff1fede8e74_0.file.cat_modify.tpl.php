<?php
/* Smarty version 3.1.29, created on 2020-06-27 04:11:40
  from "/home4/sexydive/public_html/shop/admin/themes/default/template/cat_modify.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ef70d4cd2a5b7_28687589',
  'file_dependency' => 
  array (
    'b8939198d8a991d7454bd5c460126ff1fede8e74' => 
    array (
      0 => '/home4/sexydive/public_html/shop/admin/themes/default/template/cat_modify.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/colorbox.inc.tpl' => 1,
  ),
),false)) {
function content_5ef70d4cd2a5b7_28687589 ($_smarty_tpl) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:include/colorbox.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'LocalStorageCache','load'=>'footer','path'=>'admin/themes/default/js/LocalStorageCache.js'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.selectize','load'=>'footer','path'=>'themes/default/js/plugins/selectize.min.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('id'=>'jquery.selectize','path'=>"themes/default/js/plugins/selectize.".((string)$_smarty_tpl->tpl_vars['themeconf']->value['colorscheme']).".css"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


var categoriesCache = new CategoriesCache({
  serverKey: '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['categories'];?>
',
  serverId: '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['_hash'];?>
',
  rootUrl: '<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
'
});

categoriesCache.selectize(jQuery('[data-selectize=categories]'), {
  default: 0,
  filter: function(categories, options) {
    // remove itself and children
    var filtered = jQuery.grep(categories, function(cat) {
      return !(/\b<?php echo $_smarty_tpl->tpl_vars['CAT_ID']->value;?>
\b/.test(cat.uppercats));
    });
    
    filtered.push({
      id: 0,
      fullname: '------------',
      global_rank: 0
    });
    
    return filtered;
  }
});

jQuery(document).ready(function() {
  jQuery(document).on('click', '.refreshRepresentative',  function(e) {
    var $this = jQuery(this);
    var method = 'pwg.categories.refreshRepresentative';

    jQuery.ajax({
      url: "ws.php?format=json&method="+method,
      type:"POST",
      data: {
        category_id: $this.data("category_id")
      },
      success:function(data) {
        var data = jQuery.parseJSON(data);
        if (data.stat == 'ok') {
          jQuery(".albumThumbnailImage")
            .attr('href', data.result.url)
            .find("img").attr('src', data.result.src)
            .end().show();

          jQuery(".albumThumbnailRandom").hide();
        }
        else {
          alert("error on "+method);
        }
      },
      error:function(XMLHttpRequest, textStatus, errorThrows) {
        alert("serious error on "+method);
      }
    });

    e.preventDefault();
  });

  jQuery(document).on('click', '.deleteRepresentative',  function(e) {
    var $this = jQuery(this);
    var method = 'pwg.categories.deleteRepresentative';

    jQuery.ajax({
      url: "ws.php?format=json&method="+method,
      type:"POST",
      data: {
        category_id: $this.data("category_id")
      },
      success:function(data) {
        var data = jQuery.parseJSON(data);
        if (data.stat == 'ok') {
          jQuery(".albumThumbnailImage").hide();
          if (jQuery(".albumThumbnailActions").data('random_allowed') == '') {
            jQuery(".deleteRepresentative").hide();
          } else {
            jQuery(".albumThumbnailRandom").show();
          }
        }
        else {
          alert("error on "+method);
        }
      },
      error:function(XMLHttpRequest, textStatus, errorThrows) {
        alert("serious error on "+method);
      }
    });

    e.preventDefault();
  });

  jQuery(".deleteAlbum").click(function() {
    jQuery.colorbox({
      inline:true,
      title:"<?php echo strtr(l10n('delete album'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
      href:".delete_popin"
    });

    return false;
  });

  function set_photo_deletion_mode() {
    if (jQuery("input[name=photo_deletion_mode]").length > 0) {
      var $photo_deletion_mode = jQuery("input[name=photo_deletion_mode]:checked").val();
      jQuery("#deleteConfirm").data("photo_deletion_mode", $photo_deletion_mode);
    }
  }

  set_photo_deletion_mode();

  jQuery("input[name=photo_deletion_mode]").change(function() {
    set_photo_deletion_mode();
  });

  jQuery("#deleteConfirm").click(function() {
    if (jQuery("input[name=photo_deletion_mode]").length > 0) {
      var $href = jQuery(this).attr("href");
      jQuery(this).attr("href", $href+"&photo_deletion_mode="+jQuery(this).data("photo_deletion_mode"));
    }
  });

  jQuery(document).on('click', '.close-delete_popin',  function(e) {
    jQuery('.delete_popin').colorbox.close();
    e.preventDefault();
  });
});

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('html_style', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

.delete_popin {
  padding:20px 30px;
}

.delete_popin p {
  margin:0;
}

.delete_popin ul {
  padding:0;
  margin:30px 0;
}

.delete_popin ul li {
  list-style-type:none;
  margin:10px 0;
}

.delete_popin .buttonLike {
  padding:5px;
  margin-right:10px;
}

.delete_popin p.popin-actions {
  margin-top:30px;
}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>



<div class="titrePage">
  <h2><span style="letter-spacing:0"><?php echo $_smarty_tpl->tpl_vars['CATEGORIES_NAV']->value;?>
</span> &#8250; <?php echo l10n('Edit album');?>
 <?php echo $_smarty_tpl->tpl_vars['TABSHEET_TITLE']->value;?>
</h2>
</div>

<div id="catModify">

<fieldset>
  <legend><?php echo l10n('Informations');?>
</legend>

  <table style="width:100%">
    <tr>
      <td id="albumThumbnail">
<?php if (isset($_smarty_tpl->tpl_vars['representant']->value)) {?>
        <a class="albumThumbnailImage" style="<?php if (!isset($_smarty_tpl->tpl_vars['representant']->value['picture'])) {?>display:none<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['representant']->value['picture']['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['representant']->value['picture']['src'];?>
"></a>
        <img class="albumThumbnailRandom" style="<?php if (isset($_smarty_tpl->tpl_vars['representant']->value['picture'])) {?>display:none<?php }?>" src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['admin_icon_dir'];?>
/category_representant_random.png" alt="<?php echo l10n('Random photo');?>
">

<p class="albumThumbnailActions" data-random_allowed="<?php echo $_smarty_tpl->tpl_vars['representant']->value['ALLOW_SET_RANDOM'];?>
">
  <?php $_smarty_tpl->tpl_vars["action_separator"] = new Smarty_Variable('', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "action_separator", 0);
if ($_smarty_tpl->tpl_vars['representant']->value['ALLOW_SET_RANDOM']) {?>
  <a href="#refresh" data-category_id="<?php echo $_smarty_tpl->tpl_vars['CAT_ID']->value;?>
" class="refreshRepresentative" title="<?php echo l10n('Find a new representant by random');?>
"><?php echo l10n('Refresh');?>
</a>
  <?php $_smarty_tpl->tpl_vars["action_separator"] = new Smarty_Variable("|", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "action_separator", 0);
}
if (isset($_smarty_tpl->tpl_vars['representant']->value['ALLOW_DELETE'])) {?>
  <?php echo $_smarty_tpl->tpl_vars['action_separator']->value;?>

   <a href="#delete" data-category_id="<?php echo $_smarty_tpl->tpl_vars['CAT_ID']->value;?>
" class="deleteRepresentative" title="<?php echo l10n('Delete Representant');?>
"><?php echo l10n('Delete');?>
</a>
<?php }?>
</p>
<?php }?>
      </td>

      <td id="albumLinks">
<p><?php echo $_smarty_tpl->tpl_vars['INTRO']->value;?>
</p>
<ul>
<?php if (cat_admin_access($_smarty_tpl->tpl_vars['CAT_ID']->value)) {?>
  <li><a class="icon-eye" href="<?php echo $_smarty_tpl->tpl_vars['U_JUMPTO']->value;?>
"><?php echo l10n('jump to album');?>
 →</a></li>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['U_MANAGE_ELEMENTS']->value)) {?>
  <li><a class="icon-picture" href="<?php echo $_smarty_tpl->tpl_vars['U_MANAGE_ELEMENTS']->value;?>
"><?php echo l10n('manage album photos');?>
</a></li>
<?php }?>

  <li style="text-transform:lowercase;"><a class="icon-plus-circled" href="<?php echo $_smarty_tpl->tpl_vars['U_ADD_PHOTOS_ALBUM']->value;?>
"><?php echo l10n('Add Photos');?>
</a></li>

  <li><a class="icon-sitemap" href="<?php echo $_smarty_tpl->tpl_vars['U_CHILDREN']->value;?>
"><?php echo l10n('manage sub-albums');?>
</a></li>

<?php if (isset($_smarty_tpl->tpl_vars['U_SYNC']->value)) {?>
  <li><a class="icon-exchange" href="<?php echo $_smarty_tpl->tpl_vars['U_SYNC']->value;?>
"><?php echo l10n('Synchronize');?>
</a> (<?php echo l10n('Directory');?>
 = <?php echo $_smarty_tpl->tpl_vars['CAT_FULL_DIR']->value;?>
)</li>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['U_DELETE']->value)) {?>
  <li><a class="icon-trash deleteAlbum" href="#"><?php echo l10n('delete album');?>
</a></li>
<?php }?>

</ul>
      </td>
    </tr>
  </table>

</fieldset>

<form action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="POST">
<fieldset>
  <legend><?php echo l10n('Properties');?>
</legend>
  <p>
    <strong><?php echo l10n('Name');?>
</strong>
    <br>
    <input type="text" class="large" name="name" value="<?php echo $_smarty_tpl->tpl_vars['CAT_NAME']->value;?>
" maxlength="255">
  </p>

  <p>
    <strong><?php echo l10n('Description');?>
</strong>
    <br>
    <textarea cols="50" rows="5" name="comment" id="comment" class="description"><?php echo $_smarty_tpl->tpl_vars['CAT_COMMENT']->value;?>
</textarea>
  </p>

<?php if (isset($_smarty_tpl->tpl_vars['parent_category']->value)) {?>
  <p>
    <strong><?php echo l10n('Parent album');?>
</strong>
    <br>
    <select data-selectize="categories" data-value="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['parent_category']->value), ENT_QUOTES, 'UTF-8', true);?>
"
        name="parent" style="width:600px"></select>
  </p>
<?php }?>

  <p>
    <strong><?php echo l10n('Lock');?>
</strong>
    <br>
      <label class="font-checkbox"><span class="icon-dot-circled"></span><input type="radio" name="visible" value="true"<?php if ($_smarty_tpl->tpl_vars['CAT_VISIBLE']->value == "true") {?> checked="checked"<?php }?>><?php echo l10n('No');?>
</label>
      <label class="font-checkbox"><span class="icon-dot-circled"></span><input type="radio" name="visible" value="true_sub"><?php echo l10n('No and unlock sub-albums');?>
</label>
      <label class="font-checkbox"><span class="icon-dot-circled"></span><input type="radio" name="visible" value="false"<?php if ($_smarty_tpl->tpl_vars['CAT_VISIBLE']->value == "false") {?> checked="checked"<?php }?>><?php echo l10n('Yes');?>
</label>
  </p>

<?php if (isset($_smarty_tpl->tpl_vars['CAT_COMMENTABLE']->value)) {?>
  <p>
    <strong><?php echo l10n('Comments');?>
</strong>
    <br>
      <label class="font-checkbox"><span class="icon-dot-circled"></span><input type="radio" name="commentable" value="false"<?php if ($_smarty_tpl->tpl_vars['CAT_COMMENTABLE']->value == "false") {?> checked="checked"<?php }?>><?php echo l10n('No');?>
</label>
      <label class="font-checkbox"><span class="icon-dot-circled"></span><input type="radio" name="commentable" value="true"<?php if ($_smarty_tpl->tpl_vars['CAT_COMMENTABLE']->value == "true") {?> checked="checked"<?php }?>><?php echo l10n('Yes');?>
</label>
    <label id="applytoSubAction">
      <label class="font-checkbox"><span class="icon-check"></span><input type="checkbox" name="apply_commentable_on_sub"></label>
      <?php echo l10n('Apply to sub-albums');?>

    </label>
  </p>
<?php }?>
  <p style="margin:0">
    <button name="submit" type="submit" class="buttonLike">
      <i class="icon-floppy"></i> <?php echo l10n('Save Settings');?>

    </button>
  </p>
</fieldset>

</form>

<div style="display:none">
  <div class="delete_popin">

    <p>
<?php if ($_smarty_tpl->tpl_vars['NB_SUBCATS']->value == 0) {?>
      <?php echo l10n('Delete album "%s".',$_smarty_tpl->tpl_vars['CATEGORY_FULLNAME']->value);?>

<?php } else { ?>
      <?php echo l10n('Delete album "%s" and its %d sub-albums.',$_smarty_tpl->tpl_vars['CATEGORIES_NAV']->value,$_smarty_tpl->tpl_vars['NB_SUBCATS']->value);?>

<?php }?>
    </p>

<?php if ($_smarty_tpl->tpl_vars['NB_IMAGES_RECURSIVE']->value > 0) {?>
  <ul>
<?php if ($_smarty_tpl->tpl_vars['NB_IMAGES_ASSOCIATED_OUTSIDE']->value > 0) {?>
    <li><label class="font-checkbox"><span class="icon-dot-circled"></span><input type="radio" name="photo_deletion_mode" value="force_delete"> <?php echo l10n('delete album and all %d photos, even the %d associated to other albums',$_smarty_tpl->tpl_vars['NB_IMAGES_RECURSIVE']->value,$_smarty_tpl->tpl_vars['NB_IMAGES_ASSOCIATED_OUTSIDE']->value);?>
</label></li>
<?php }
if ($_smarty_tpl->tpl_vars['NB_IMAGES_BECOMING_ORPHAN']->value > 0) {?>
    <li><label class="font-checkbox"><span class="icon-dot-circled"></span><input type="radio" name="photo_deletion_mode" value="delete_orphans"> <?php echo l10n('delete album and the %d orphan photos',$_smarty_tpl->tpl_vars['NB_IMAGES_BECOMING_ORPHAN']->value);?>
</label></li>
<?php }?>
    <li><label class="font-checkbox"><span class="icon-dot-circled"></span><input type="radio" name="photo_deletion_mode" value="no_delete" checked="checked"> <?php echo l10n('delete only album, not photos');?>
</label></li>
  </ul>
<?php }?>

    <p class="popin-actions">
      <a id="deleteConfirm" class="buttonLike" type="submit" href="<?php echo $_smarty_tpl->tpl_vars['U_DELETE']->value;?>
"><i class="icon-trash"></i> <?php echo l10n('Confirm deletion');?>
</button>
      <a class="icon-cancel-circled close-delete_popin" href="#"><?php echo l10n('Cancel');?>
</a>
    </p>


  </div>
</div>

</div> <?php }
}
