<?php
/* Smarty version 3.1.29, created on 2020-07-20 14:33:10
  from "/home4/sexydive/public_html/shop/admin/themes/default/template/batch_manager_global.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f15f176e3ba11_34309693',
  'file_dependency' => 
  array (
    '0f541a0ec5b53c546c6f5e61096f85f573f2ecc9' => 
    array (
      0 => '/home4/sexydive/public_html/shop/admin/themes/default/template/batch_manager_global.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/datepicker.inc.tpl' => 1,
    'file:include/colorbox.inc.tpl' => 1,
    'file:include/add_album.inc.tpl' => 1,
  ),
),false)) {
function content_5f15f176e3ba11_34309693 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/home4/sexydive/public_html/shop/include/smarty/libs/plugins/function.html_options.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:include/datepicker.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('load_mode'=>'async'), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:include/colorbox.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('load_mode'=>'footer'), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:include/add_album.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('load_mode'=>'async'), 0, false);
?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.ui.slider','require'=>'jquery.ui','load'=>'async','path'=>'themes/default/js/ui/minified/jquery.ui.slider.min.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/default/js/ui/theme/jquery.ui.slider.css"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'doubleSlider','load'=>'async','require'=>'jquery.ui.slider','path'=>'admin/themes/default/js/doubleSlider.js'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'LocalStorageCache','load'=>'footer','path'=>'admin/themes/default/js/LocalStorageCache.js'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.selectize','load'=>'footer','path'=>'themes/default/js/plugins/selectize.min.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('id'=>'jquery.selectize','path'=>"themes/default/js/plugins/selectize.".((string)$_smarty_tpl->tpl_vars['themeconf']->value['colorscheme']).".css"),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.progressBar','load'=>'async','path'=>'themes/default/js/plugins/jquery.progressbar.min.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.ajaxmanager','load'=>'async','path'=>'themes/default/js/plugins/jquery.ajaxmanager.js'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'batchManagerGlobal','load'=>'async','require'=>'jquery,datepicker,jquery.colorbox,addAlbum,doubleSlider','path'=>'admin/themes/default/js/batchManagerGlobal.js'),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

var lang = {
	Cancel: '<?php echo strtr(l10n('Cancel'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
	deleteProgressMessage: "<?php echo strtr(l10n('Deletion in progress'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
	syncProgressMessage: "<?php echo strtr(l10n('Synchronization in progress'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
	AreYouSure: "<?php echo strtr(l10n('Are you sure?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
};

var conf = {
  checksum_compute_blocksize: <?php echo $_smarty_tpl->tpl_vars['conf_checksum_compute_blocksize']->value;?>
,
};

jQuery(document).ready(function() {

  jQuery('.help-popin').colorbox({ width:"500px" });

  
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

  
  window.categoriesCache = new CategoriesCache({
    serverKey: '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['categories'];?>
',
    serverId: '<?php echo $_smarty_tpl->tpl_vars['CACHE_KEYS']->value['_hash'];?>
',
    rootUrl: '<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
'
  });
  
  var associated_categories = <?php echo json_encode($_smarty_tpl->tpl_vars['associated_categories']->value);?>
;

  categoriesCache.selectize(jQuery('[data-selectize=categories]'), {
    filter: function(categories, options) {
      if (this.name == 'dissociate') {
        var filtered = jQuery.grep(categories, function(cat) {
          return !!associated_categories[cat.id];
        });

        if (filtered.length > 0) {
          options.default = filtered[0].id;
        }

        return filtered;
      }
      else {
        return categories;
      }
    }
  });

});

var nb_thumbs_page = <?php echo $_smarty_tpl->tpl_vars['nb_thumbs_page']->value;?>
;
var nb_thumbs_set = <?php echo $_smarty_tpl->tpl_vars['nb_thumbs_set']->value;?>
;
var applyOnDetails_pattern = "<?php echo l10n('on the %d selected photos');?>
";
var all_elements = [<?php if (!empty($_smarty_tpl->tpl_vars['all_elements']->value)) {
echo implode(',',$_smarty_tpl->tpl_vars['all_elements']->value);
}?>];

var selectedMessage_pattern = "<?php echo l10n('%d of %d photos selected');?>
";
var selectedMessage_none = "<?php echo l10n('No photo selected, %d photos in current set');?>
";
var selectedMessage_all = "<?php echo l10n('All %d photos are selected');?>
";

$(document).ready(function() {
  function checkPermitAction() {
    var nbSelected = 0;
    if ($("input[name=setSelected]").is(':checked')) {
      nbSelected = nb_thumbs_set;
    }
    else {
      nbSelected = $(".thumbnails input[type=checkbox]").filter(':checked').length;
    }

    if (nbSelected == 0) {
      $("#permitAction").hide();
      $("#forbidAction").show();
    }
    else {
      $("#permitAction").show();
      $("#forbidAction").hide();
    }

    $("#applyOnDetails").text(
      sprintf(
        applyOnDetails_pattern,
        nbSelected
      )
    );

    // display the number of currently selected photos in the "Selection" fieldset
    if (nbSelected == 0) {
      $("#selectedMessage").text(
        sprintf(
          selectedMessage_none,
          nb_thumbs_set
        )
      );
    }
    else if (nbSelected == nb_thumbs_set) {
      $("#selectedMessage").text(
        sprintf(
          selectedMessage_all,
          nb_thumbs_set
        )
      );
    }
    else {
      $("#selectedMessage").text(
        sprintf(
          selectedMessage_pattern,
          nbSelected,
          nb_thumbs_set
        )
      );
    }
  }

  $("[id^=action_]").hide();

  $("select[name=selectAction]").change(function () {
    $("[id^=action_]").hide();

    var action = $(this).prop("value");
    if (action == 'move') {
      action = 'associate';
    }

    $("#action_"+action).show();

    if ($(this).val() != -1) {
      $("#applyActionBlock").show();
    }
    else {
      $("#applyActionBlock").hide();
    }
  });

  $(".wrap1 label").click(function (event) {
    $("input[name=setSelected]").prop('checked', false);

    var li = $(this).closest("li");
    var checkbox = $(this).children("input[type=checkbox]");

    checkbox.triggerHandler("shclick",event);

    if ($(checkbox).is(':checked')) {
      $(li).addClass("thumbSelected");
    }
    else {
      $(li).removeClass('thumbSelected');
    }

    checkPermitAction();
  });

  $("#selectAll").click(function () {
    $("input[name=setSelected]").prop('checked', false);
    selectPageThumbnails();
    checkPermitAction();
    return false;
  });

  function selectPageThumbnails() {
    $(".thumbnails label").each(function() {
      var checkbox = $(this).children("input[type=checkbox]");

      $(checkbox).prop('checked', true).trigger("change");
      $(this).closest("li").addClass("thumbSelected");
    });
  }

  $("#selectNone").click(function () {
    $("input[name=setSelected]").prop('checked', false);

    $(".thumbnails label").each(function() {
      var checkbox = $(this).children("input[type=checkbox]");

      if (jQuery(checkbox).is(':checked')) {
        $(checkbox).prop('checked', false).trigger("change");
      }

      $(this).closest("li").removeClass("thumbSelected");
    });
    checkPermitAction();
    return false;
  });

  $("#selectInvert").click(function () {
    $("input[name=setSelected]").prop('checked', false);

    $(".thumbnails label").each(function() {
      var checkbox = $(this).children("input[type=checkbox]");

      $(checkbox).prop('checked', !$(checkbox).is(':checked')).trigger("change");

      if ($(checkbox).is(':checked')) {
        $(this).closest("li").addClass("thumbSelected");
      }
      else {
        $(this).closest("li").removeClass('thumbSelected');
      }
    });
    checkPermitAction();
    return false;
  });

  $("#selectSet").click(function () {
    selectPageThumbnails();
    $("input[name=setSelected]").prop('checked', true);
    checkPermitAction();
    return false;
  });

  jQuery('#applyAction').click(function() {
		var action = jQuery('[name="selectAction"]').val();
		if (action == 'delete_derivatives') {
			var d_count = $('#action_delete_derivatives input[type=checkbox]').filter(':checked').length
				, e_count = $('input[name="setSelected"]').is(':checked') ? nb_thumbs_set : $('.thumbnails input[type=checkbox]').filter(':checked').length;
			if (d_count*e_count > 500)
				return confirm(lang.AreYouSure);
		}

		if (action != 'generate_derivatives'
			|| derivatives.finished() )
		{
			return true;
		}

		jQuery('.bulkAction').hide();

		var queuedManager = jQuery.manageAjax.create('queued', {
			queue: true,
			cacheResponse: false,
			maxRequests: 1
		});

		derivatives.elements = [];
		if (jQuery('input[name="setSelected"]').is(':checked'))
			derivatives.elements = all_elements;
		else
			jQuery('.thumbnails input[type=checkbox]').each(function() {
				if (jQuery(this).is(':checked')) {
					derivatives.elements.push(jQuery(this).val());
				}
			});

		jQuery('#applyActionBlock').hide();
		jQuery('select[name="selectAction"]').hide();
		jQuery('#regenerationMsg').show();

		progress();
		getDerivativeUrls();
		return false;
  });

  checkPermitAction();

  jQuery("select[name=filter_prefilter]").change(function() {
    jQuery("#empty_caddie").toggle(jQuery(this).val() == "caddie");
    jQuery("#duplicates_options").toggle(jQuery(this).val() == "duplicates");
    jQuery("#delete_orphans").toggle(jQuery(this).val() == "no_album");
    jQuery("#sync_md5sum").toggle(jQuery(this).val() == "no_sync_md5sum");
  });
});


var sliders = {
  widths: {
    values: [<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['widths'];?>
],
    selected: {
      min: <?php echo $_smarty_tpl->tpl_vars['dimensions']->value['selected']['min_width'];?>
,
      max: <?php echo $_smarty_tpl->tpl_vars['dimensions']->value['selected']['max_width'];?>
,
    },
    text: '<?php echo strtr(l10n('between %d and %d pixels'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
  },

  heights: {
    values: [<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['heights'];?>
],
    selected: {
      min: <?php echo $_smarty_tpl->tpl_vars['dimensions']->value['selected']['min_height'];?>
,
      max: <?php echo $_smarty_tpl->tpl_vars['dimensions']->value['selected']['max_height'];?>
,
    },
    text: '<?php echo strtr(l10n('between %d and %d pixels'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
  },

  ratios: {
    values: [<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['ratios'];?>
],
    selected: {
      min: <?php echo $_smarty_tpl->tpl_vars['dimensions']->value['selected']['min_ratio'];?>
,
      max: <?php echo $_smarty_tpl->tpl_vars['dimensions']->value['selected']['max_ratio'];?>
,
    },
    text: '<?php echo strtr(l10n('between %.2f and %.2f'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
  },

  filesizes: {
    values: [<?php echo $_smarty_tpl->tpl_vars['filesize']->value['list'];?>
],
    selected: {
      min: <?php echo $_smarty_tpl->tpl_vars['filesize']->value['selected']['min'];?>
,
      max: <?php echo $_smarty_tpl->tpl_vars['filesize']->value['selected']['max'];?>
,
    },
    text: '<?php echo strtr(l10n('between %s and %s MB'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
  }
};

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div id="batchManagerGlobal">

<h2><?php echo l10n('Batch Manager');?>
</h2>

  <form action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="post">
  <input type="hidden" name="start" value="<?php echo $_smarty_tpl->tpl_vars['START']->value;?>
">
  <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">

  <fieldset>
    <legend><i class="icon-filter"></i><?php echo l10n('Filter');?>
</legend>

    <ul id="filterList">
      <li id="filter_prefilter" <?php if (!isset($_smarty_tpl->tpl_vars['filter']->value['prefilter'])) {?>style="display:none"<?php }?>>
        <a href="#" class="removeFilter" title="<?php echo l10n('remove this filter');?>
"><span>[x]</span></a>
        <input type="checkbox" name="filter_prefilter_use" class="useFilterCheckbox" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['prefilter'])) {?>checked="checked"<?php }?>>
        <?php echo l10n('Predefined filter');?>

        <select name="filter_prefilter">
<?php
$_from = $_smarty_tpl->tpl_vars['prefilters']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_prefilter_0_saved_item = isset($_smarty_tpl->tpl_vars['prefilter']) ? $_smarty_tpl->tpl_vars['prefilter'] : false;
$_smarty_tpl->tpl_vars['prefilter'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['prefilter']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['prefilter']->value) {
$_smarty_tpl->tpl_vars['prefilter']->_loop = true;
$__foreach_prefilter_0_saved_local_item = $_smarty_tpl->tpl_vars['prefilter'];
?>
            <?php $_smarty_tpl->tpl_vars['optionClass'] = new Smarty_Variable('', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'optionClass', 0);?>
            <?php if ($_smarty_tpl->tpl_vars['prefilter']->value['ID'] == 'no_album') {
$_smarty_tpl->tpl_vars['optionClass'] = new Smarty_Variable('icon-heart-broken', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'optionClass', 0);
}?>
            <?php if ($_smarty_tpl->tpl_vars['prefilter']->value['ID'] == 'caddie') {
$_smarty_tpl->tpl_vars['optionClass'] = new Smarty_Variable('icon-flag', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'optionClass', 0);
}?>

          <option value="<?php echo $_smarty_tpl->tpl_vars['prefilter']->value['ID'];?>
"  class="<?php echo $_smarty_tpl->tpl_vars['optionClass']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['prefilter']) && $_smarty_tpl->tpl_vars['filter']->value['prefilter'] == $_smarty_tpl->tpl_vars['prefilter']->value['ID']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['prefilter']->value['NAME'];?>
</option>
<?php
$_smarty_tpl->tpl_vars['prefilter'] = $__foreach_prefilter_0_saved_local_item;
}
if ($__foreach_prefilter_0_saved_item) {
$_smarty_tpl->tpl_vars['prefilter'] = $__foreach_prefilter_0_saved_item;
}
?>
        </select>
        <a id="empty_caddie" href="admin.php?page=batch_manager&amp;action=empty_caddie" style="<?php if (!isset($_smarty_tpl->tpl_vars['filter']->value['prefilter']) || $_smarty_tpl->tpl_vars['filter']->value['prefilter'] != 'caddie') {?>display:none<?php }?>"><?php echo l10n('Empty caddie');?>
</a>
<?php if ($_smarty_tpl->tpl_vars['NB_ORPHANS']->value > 0) {?>
        <a id="delete_orphans" href="#" style="<?php if (!isset($_smarty_tpl->tpl_vars['filter']->value['prefilter']) || $_smarty_tpl->tpl_vars['filter']->value['prefilter'] != 'no_album') {?>display:none<?php }?>" class="icon-trash"><?php echo l10n('Delete %d orphan photos',$_smarty_tpl->tpl_vars['NB_ORPHANS']->value);?>
</a>
<?php }
if ($_smarty_tpl->tpl_vars['NB_NO_MD5SUM']->value > 0) {?>
<a id="sync_md5sum" href="#" style="<?php if (!isset($_smarty_tpl->tpl_vars['filter']->value['prefilter']) || $_smarty_tpl->tpl_vars['filter']->value['prefilter'] != 'no_sync_md5sum') {?>display:none<?php }?>" class="icon-arrows-cw"><?php ob_start();
echo $_smarty_tpl->tpl_vars['NB_NO_MD5SUM']->value;
$_tmp1=ob_get_clean();
echo l10n('Compute %d missing checksums',$_tmp1);?>
</a>
<?php }?>

        <span id="add_md5sum" style="display:none">
          <img class="loading" src="themes/default/images/ajax-loader-small.gif">
          <span id="md5sum_added">0</span>% -
          <span id="md5sum_to_add" data-origin="<?php echo $_smarty_tpl->tpl_vars['NB_NO_MD5SUM']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NB_NO_MD5SUM']->value;?>
</span>
          <?php echo l10n('checksums to add');?>

        </span>

        <span id="add_md5sum_error" class="errors" style="display:none"></span>

        <span id="orphans_deletion" style="display:none">
          <img class="loading" src="themes/default/images/ajax-loader-small.gif">
          <span id="orphans_deleted">0</span>% -
          <span id="orphans_to_delete" data-origin="<?php echo $_smarty_tpl->tpl_vars['NB_ORPHANS']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NB_ORPHANS']->value;?>
</span>
          <?php echo l10n('orphans to delete');?>

        </span>

        <span id="orphans_deletion_error" class="errors" style="display:none"></span>

        <span id="duplicates_options" style="<?php if (!isset($_smarty_tpl->tpl_vars['filter']->value['prefilter']) || $_smarty_tpl->tpl_vars['filter']->value['prefilter'] != 'duplicates') {?>display:none<?php }?>">
          <?php echo l10n('based on');?>

          <label class="font-checkbox"><span class="icon-check"></span><input type="checkbox" name="filter_duplicates_filename" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['duplicates_filename'])) {?>checked="checked"<?php }?>> <?php echo l10n('file name');?>
</label>
          <label class="font-checkbox" title="md5sum"><span class="icon-check"></span><input type="checkbox" name="filter_duplicates_checksum" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['duplicates_checksum'])) {?>checked="checked"<?php }?>> <?php echo l10n('checksum');?>
</label>
          <label class="font-checkbox"><span class="icon-check"></span><input type="checkbox" name="filter_duplicates_date" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['duplicates_date']) || (isset($_smarty_tpl->tpl_vars['filter']->value['prefilter']) && $_smarty_tpl->tpl_vars['filter']->value['prefilter'] != 'duplicates')) {?>checked="checked"<?php }?>> <?php echo l10n('date & time');?>
</label>
          <label class="font-checkbox"><span class="icon-check"></span><input type="checkbox" name="filter_duplicates_dimensions" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['duplicates_dimensions'])) {?>checked="checked"<?php }?>> <?php echo l10n('width & height');?>
</label>
        </span>
      </li>

      <li id="filter_category" <?php if (!isset($_smarty_tpl->tpl_vars['filter']->value['category'])) {?>style="display:none"<?php }?>>
        <a href="#" class="removeFilter" title="remove this filter"><span>[x]</span></a>
        <input type="checkbox" name="filter_category_use" class="useFilterCheckbox" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['category'])) {?>checked="checked"<?php }?>>
        <?php echo l10n('Album');?>

        <select data-selectize="categories" data-value="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['filter_category_selected']->value), ENT_QUOTES, 'UTF-8', true);?>
"
          data-default="first" name="filter_category" style="width:600px"></select>
        <label><input type="checkbox" name="filter_category_recursive" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['category_recursive'])) {?>checked="checked"<?php }?>> <?php echo l10n('include child albums');?>
</label>
      </li>

      <li id="filter_tags" <?php if (!isset($_smarty_tpl->tpl_vars['filter']->value['tags'])) {?>style="display:none"<?php }?>>
        <a href="#" class="removeFilter" title="remove this filter"><span>[x]</span></a>
        <input type="checkbox" name="filter_tags_use" class="useFilterCheckbox" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['tags'])) {?>checked="checked"<?php }?>>
        <?php echo l10n('Tags');?>

        <select data-selectize="tags" data-value="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['filter_tags']->value), ENT_QUOTES, 'UTF-8', true);?>
"
          placeholder="<?php echo l10n('Type in a search term');?>
"
          name="filter_tags[]" multiple style="width:600px;"></select>
        <label><span><input type="radio" name="tag_mode" value="AND" <?php if (!isset($_smarty_tpl->tpl_vars['filter']->value['tag_mode']) || $_smarty_tpl->tpl_vars['filter']->value['tag_mode'] == 'AND') {?>checked="checked"<?php }?>> <?php echo l10n('All tags');?>
</span></label>
        <label><span><input type="radio" name="tag_mode" value="OR" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['tag_mode']) && $_smarty_tpl->tpl_vars['filter']->value['tag_mode'] == 'OR') {?>checked="checked"<?php }?>> <?php echo l10n('Any tag');?>
</span></label>
      </li>

      <li id="filter_level" <?php if (!isset($_smarty_tpl->tpl_vars['filter']->value['level'])) {?>style="display:none"<?php }?>>
        <a href="#" class="removeFilter" title="remove this filter"><span>[x]</span></a>
        <input type="checkbox" name="filter_level_use" class="useFilterCheckbox" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['level'])) {?>checked="checked"<?php }?>>
        <?php echo l10n('Privacy level');?>

        <select name="filter_level" size="1">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['filter_level_options']->value,'selected'=>$_smarty_tpl->tpl_vars['filter_level_options_selected']->value),$_smarty_tpl);?>

        </select>
        <label><input type="checkbox" name="filter_level_include_lower" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['level_include_lower'])) {?>checked="checked"<?php }?>> <?php echo l10n('include photos with lower privacy level');?>
</label>
      </li>

      <li id="filter_dimension" <?php if (!isset($_smarty_tpl->tpl_vars['filter']->value['dimension'])) {?>style="display:none"<?php }?>>
        <a href="#" class="removeFilter" title="remove this filter"><span>[x]</span></a>
        <input type="checkbox" name="filter_dimension_use" class="useFilterCheckbox" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['dimension'])) {?>checked="checked"<?php }?>>
        <?php echo l10n('Dimensions');?>


        <blockquote>
          <div data-slider="widths">
            <?php echo l10n('Width');?>
 <span class="slider-info"><?php echo l10n('between %d and %d pixels',$_smarty_tpl->tpl_vars['dimensions']->value['selected']['min_width'],$_smarty_tpl->tpl_vars['dimensions']->value['selected']['max_width']);?>
</span>
            | <a class="slider-choice" data-min="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['bounds']['min_width'];?>
" data-max="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['bounds']['max_width'];?>
"><?php echo l10n('Reset');?>
</a>
            <div class="slider-slider"></div>

            <input type="hidden" data-input="min" name="filter_dimension_min_width" value="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['selected']['min_width'];?>
">
            <input type="hidden" data-input="max" name="filter_dimension_max_width" value="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['selected']['max_width'];?>
">
          </div>

          <div data-slider="heights">
            <?php echo l10n('Height');?>
 <span class="slider-info"><?php echo l10n('between %d and %d pixels',$_smarty_tpl->tpl_vars['dimensions']->value['selected']['min_height'],$_smarty_tpl->tpl_vars['dimensions']->value['selected']['max_height']);?>
</span>
            | <a class="slider-choice" data-min="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['bounds']['min_height'];?>
" data-max="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['bounds']['max_height'];?>
"><?php echo l10n('Reset');?>
</a>
            <div class="slider-slider"></div>
            
            <input type="hidden" data-input="min" name="filter_dimension_min_height" value="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['selected']['min_height'];?>
">
            <input type="hidden" data-input="max" name="filter_dimension_max_height" value="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['selected']['max_height'];?>
">
          </div>

          <div data-slider="ratios">
            <?php echo l10n('Ratio');?>
 (<?php echo l10n('Width');?>
/<?php echo l10n('Height');?>
) <span class="slider-info"><?php echo l10n('between %.2f and %.2f',$_smarty_tpl->tpl_vars['dimensions']->value['selected']['min_ratio'],$_smarty_tpl->tpl_vars['dimensions']->value['selected']['max_ratio']);?>
</span>
            <?php if (isset($_smarty_tpl->tpl_vars['dimensions']->value['ratio_portrait'])) {?>| <a class="slider-choice" data-min="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['ratio_portrait']['min'];?>
" data-max="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['ratio_portrait']['max'];?>
"><?php echo l10n('Portrait');?>
</a><?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['dimensions']->value['ratio_square'])) {?>| <a class="slider-choice" data-min="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['ratio_square']['min'];?>
" data-max="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['ratio_square']['max'];?>
"><?php echo l10n('square');?>
</a><?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['dimensions']->value['ratio_landscape'])) {?>| <a class="slider-choice" data-min="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['ratio_landscape']['min'];?>
" data-max="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['ratio_landscape']['max'];?>
"><?php echo l10n('Landscape');?>
</a><?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['dimensions']->value['ratio_panorama'])) {?>| <a class="slider-choice" data-min="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['ratio_panorama']['min'];?>
" data-max="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['ratio_panorama']['max'];?>
"><?php echo l10n('Panorama');?>
</a><?php }?>
            | <a class="slider-choice" data-min="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['bounds']['min_ratio'];?>
" data-max="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['bounds']['max_ratio'];?>
"><?php echo l10n('Reset');?>
</a>
            <div class="slider-slider"></div>

            <input type="hidden" data-input="min" name="filter_dimension_min_ratio" value="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['selected']['min_ratio'];?>
">
            <input type="hidden" data-input="max" name="filter_dimension_max_ratio" value="<?php echo $_smarty_tpl->tpl_vars['dimensions']->value['selected']['max_ratio'];?>
">
          </div>
        </blockquote>
      </li>

			<li id="filter_search"<?php if (!isset($_smarty_tpl->tpl_vars['filter']->value['search'])) {?> style="display:none"<?php }?>>
				<a href="#" class="removeFilter" title="remove this filter"><span>[x]</span></a>
				<input type="checkbox" name="filter_search_use" class="useFilterCheckbox"<?php if (isset($_smarty_tpl->tpl_vars['filter']->value['search'])) {?> checked="checked"<?php }?>>
				<?php echo l10n('Search');?>

				<input name="q" size=40 value="<?php echo htmlspecialchars(stripslashes($_smarty_tpl->tpl_vars['filter']->value['search']['q']));?>
">
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'core.scripts','load'=>'async','path'=>'themes/default/js/scripts.js'),$_smarty_tpl);?>

				<a href="admin/popuphelp.php?page=quick_search&amp;output=content_only" class="help-popin" title="<?php echo l10n('Help');?>
"><span class="icon-help-circled"></span></a>
<?php if ((isset($_smarty_tpl->tpl_vars['no_search_results']->value))) {?>
<div><?php echo l10n('No results for');?>
 :
	<em><strong>
<?php
$_from = $_smarty_tpl->tpl_vars['no_search_results']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_res_1_saved_item = isset($_smarty_tpl->tpl_vars['res']) ? $_smarty_tpl->tpl_vars['res'] : false;
$_smarty_tpl->tpl_vars['res'] = new Smarty_Variable();
$__foreach_res_1_first = true;
$_smarty_tpl->tpl_vars['res']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['res']->value) {
$_smarty_tpl->tpl_vars['res']->_loop = true;
$_smarty_tpl->tpl_vars['res']->first = $__foreach_res_1_first;
$__foreach_res_1_first = false;
$__foreach_res_1_saved_local_item = $_smarty_tpl->tpl_vars['res'];
?>
	<?php if (!$_smarty_tpl->tpl_vars['res']->first) {?> &mdash; <?php }?>
	<?php echo $_smarty_tpl->tpl_vars['res']->value;?>

<?php
$_smarty_tpl->tpl_vars['res'] = $__foreach_res_1_saved_local_item;
}
if ($__foreach_res_1_saved_item) {
$_smarty_tpl->tpl_vars['res'] = $__foreach_res_1_saved_item;
}
?>
	</strong></em>
</div>
<?php }?>
			</li>

      <li id="filter_filesize" <?php if (!isset($_smarty_tpl->tpl_vars['filter']->value['filesize'])) {?>style="display:none"<?php }?>>
        <a href="#" class="removeFilter" title="remove this filter"><span>[x]</span></a>
        <input type="checkbox" name="filter_filesize_use" class="useFilterCheckbox" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['filesize'])) {?>checked="checked"<?php }?>>
        <?php echo l10n('Filesize');?>


        <blockquote>
          <div data-slider="filesizes">
            <span class="slider-info"><?php echo l10n('between %s and %s MB',$_smarty_tpl->tpl_vars['filesize']->value['selected']['min'],$_smarty_tpl->tpl_vars['filesize']->value['selected']['max']);?>
</span>
            | <a class="slider-choice" data-min="<?php echo $_smarty_tpl->tpl_vars['filesize']->value['bounds']['min'];?>
" data-max="<?php echo $_smarty_tpl->tpl_vars['filesize']->value['bounds']['max'];?>
"><?php echo l10n('Reset');?>
</a>
            <div class="slider-slider"></div>

            <input type="hidden" data-input="min" name="filter_filesize_min" value="<?php echo $_smarty_tpl->tpl_vars['filesize']->value['selected']['min'];?>
">
            <input type="hidden" data-input="max" name="filter_filesize_max" value="<?php echo $_smarty_tpl->tpl_vars['filesize']->value['selected']['max'];?>
">
          </div>
        </blockquote>
      </li>
    </ul>

    <p class="actionButtons">
      <select id="addFilter">
        <option value="-1"><?php echo l10n('Add a filter');?>
</option>
        <option disabled="disabled">------------------</option>
        <option value="filter_prefilter" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['prefilter'])) {?>disabled="disabled"<?php }?>><?php echo l10n('Predefined filter');?>
</option>
        <option value="filter_category" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['category'])) {?>disabled="disabled"<?php }?>><?php echo l10n('Album');?>
</option>
        <option value="filter_tags" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['tags'])) {?>disabled="disabled"<?php }?>><?php echo l10n('Tags');?>
</option>
        <option value="filter_level" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['level'])) {?>disabled="disabled"<?php }?>><?php echo l10n('Privacy level');?>
</option>
        <option value="filter_dimension" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['dimension'])) {?>disabled="disabled"<?php }?>><?php echo l10n('Dimensions');?>
</option>
        <option value="filter_filesize" <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['filesize'])) {?>disabled="disabled"<?php }?>><?php echo l10n('Filesize');?>
</option>
				<option value="filter_search"<?php if (isset($_smarty_tpl->tpl_vars['filter']->value['search'])) {?> disabled="disabled"<?php }?>><?php echo l10n('Search');?>
</option>
      </select>
      <a id="removeFilters" class="icon-cancel"><?php echo l10n('Remove all filters');?>
</a>
    </p>

    <p class="actionButtons" id="applyFilterBlock">
      <button id="applyFilter" name="submitFilter" type="submit" class="buttonLike">
        <i class="icon-arrows-cw"></i> <?php echo l10n('Refresh photo set');?>

      </button>
    </p>

  </fieldset>

  <fieldset>

    <legend><i class="icon-check"></i><?php echo l10n('Selection');?>
</legend>

<?php if (!empty($_smarty_tpl->tpl_vars['thumbnails']->value)) {?>
  <p id="checkActions">
    <?php echo l10n('Select:');?>

<?php if ($_smarty_tpl->tpl_vars['nb_thumbs_set']->value > $_smarty_tpl->tpl_vars['nb_thumbs_page']->value) {?>
    <a href="#" id="selectAll"><?php echo l10n('The whole page');?>
</a>,
    <a href="#" id="selectSet"><?php echo l10n('The whole set');?>
</a>,
<?php } else { ?>
    <a href="#" id="selectAll"><?php echo l10n('All');?>
</a>,
<?php }?>
    <a href="#" id="selectNone"><?php echo l10n('None');?>
</a>,
    <a href="#" id="selectInvert"><?php echo l10n('Invert');?>
</a>

    <span id="selectedMessage"></span>

    <input type="checkbox" name="setSelected" style="display:none" <?php if (count($_smarty_tpl->tpl_vars['selection']->value) == $_smarty_tpl->tpl_vars['nb_thumbs_set']->value) {?>checked="checked"<?php }?>>
  </p>

	<ul class="thumbnails">
		<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('html_style', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

UL.thumbnails SPAN.wrap2{
  width: <?php echo $_smarty_tpl->tpl_vars['thumb_params']->value->max_width()+2;?>
px;
}
UL.thumbnails SPAN.wrap2 {
  height: <?php echo $_smarty_tpl->tpl_vars['thumb_params']->value->max_height()+25;?>
px;
}
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php
$_from = $_smarty_tpl->tpl_vars['thumbnails']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_thumbnail_2_saved_item = isset($_smarty_tpl->tpl_vars['thumbnail']) ? $_smarty_tpl->tpl_vars['thumbnail'] : false;
$_smarty_tpl->tpl_vars['thumbnail'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['thumbnail']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['thumbnail']->value) {
$_smarty_tpl->tpl_vars['thumbnail']->_loop = true;
$__foreach_thumbnail_2_saved_local_item = $_smarty_tpl->tpl_vars['thumbnail'];
?>
		<?php $_smarty_tpl->tpl_vars['isSelected'] = new Smarty_Variable(in_array($_smarty_tpl->tpl_vars['thumbnail']->value['id'],$_smarty_tpl->tpl_vars['selection']->value), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'isSelected', 0);?>
		<li<?php if ($_smarty_tpl->tpl_vars['isSelected']->value) {?> class="thumbSelected"<?php }?>>
			<span class="wrap1">
				<label class="font-checkbox">
					<span class="icon-check"></span><input type="checkbox" name="selection[]" value="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['isSelected']->value) {?>checked="checked"<?php }?>>
					<span class="wrap2">
					<div class="actions"><a href="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['FILE_SRC'];?>
" class="preview-box"><?php echo l10n('Zoom');?>
</a> &middot; <a href="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['U_EDIT'];?>
" target="_blank"><?php echo l10n('Edit');?>
</a></div>
<?php if ($_smarty_tpl->tpl_vars['thumbnail']->value['level'] > 0) {?>
						<em class="levelIndicatorB"><?php echo l10n(sprintf('Level %d',$_smarty_tpl->tpl_vars['thumbnail']->value['level']));?>
</em>
						<em class="levelIndicatorF" title="<?php echo l10n('Who can see these photos?');?>
 : "><?php echo l10n(sprintf('Level %d',$_smarty_tpl->tpl_vars['thumbnail']->value['level']));?>
</em>
<?php }?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['thumb']->get_url();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['file'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thumbnail']->value['TITLE'], ENT_QUOTES, 'UTF-8', true);?>
" <?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['thumb']->get_size_htm();?>
>
					</span>
				</label>
			</span>
		</li>
<?php
$_smarty_tpl->tpl_vars['thumbnail'] = $__foreach_thumbnail_2_saved_local_item;
}
if ($__foreach_thumbnail_2_saved_item) {
$_smarty_tpl->tpl_vars['thumbnail'] = $__foreach_thumbnail_2_saved_item;
}
?>
	</ul>

<?php if (!empty($_smarty_tpl->tpl_vars['navbar']->value)) {?>
  <div style="clear:both;">

    <div style="float:left">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['get_extent'][0][0]->get_extent('navigation_bar.tpl','navbar'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    </div>

    <div style="float:right;margin-top:10px;"><?php echo l10n('display');?>

      <a href="<?php echo $_smarty_tpl->tpl_vars['U_DISPLAY']->value;?>
&amp;display=20">20</a>
      &middot; <a href="<?php echo $_smarty_tpl->tpl_vars['U_DISPLAY']->value;?>
&amp;display=50">50</a>
      &middot; <a href="<?php echo $_smarty_tpl->tpl_vars['U_DISPLAY']->value;?>
&amp;display=100">100</a>
      &middot; <a href="<?php echo $_smarty_tpl->tpl_vars['U_DISPLAY']->value;?>
&amp;display=all"><?php echo l10n('all');?>
</a>
      <?php echo l10n('photos per page');?>

    </div>
  </div>
<?php }
} else { ?>
  <div><?php echo l10n('No photo in the current set.');?>
</div>
<?php }?>
  </fieldset>

  <fieldset id="action">

    <legend><i class="icon-cog"></i><?php echo l10n('Action');?>
</legend>
      <div id="forbidAction"<?php if (count($_smarty_tpl->tpl_vars['selection']->value) != 0) {?> style="display:none"<?php }?>><?php echo l10n('No photo selected, no action possible.');?>
</div>
      <div id="permitAction"<?php if (count($_smarty_tpl->tpl_vars['selection']->value) == 0) {?> style="display:none"<?php }?>>

    <select name="selectAction">
      <option value="-1"><?php echo l10n('Choose an action');?>
</option>
      <option disabled="disabled">------------------</option>
      <option value="delete" class="icon-trash"><?php echo l10n('Delete selected photos');?>
</option>
      <option value="associate"><?php echo l10n('Associate to album');?>
</option>
      <option value="move"><?php echo l10n('Move to album');?>
</option>
<?php if (!empty($_smarty_tpl->tpl_vars['associated_categories']->value)) {?>
      <option value="dissociate"><?php echo l10n('Dissociate from album');?>
</option>
<?php }?>
      <option value="add_tags"><?php echo l10n('Add tags');?>
</option>
<?php if (!empty($_smarty_tpl->tpl_vars['associated_tags']->value)) {?>
      <option value="del_tags"><?php echo l10n('remove tags');?>
</option>
<?php }?>
      <option value="author"><?php echo l10n('Set author');?>
</option>
      <option value="title"><?php echo l10n('Set title');?>
</option>
      <option value="date_creation"><?php echo l10n('Set creation date');?>
</option>
      <option value="level" class="icon-lock"><?php echo l10n('Who can see these photos?');?>
</option>
      <option value="metadata"><?php echo l10n('Synchronize metadata');?>
</option>
<?php if (($_smarty_tpl->tpl_vars['IN_CADDIE']->value)) {?>
      <option value="remove_from_caddie"><?php echo l10n('Remove from caddie');?>
</option>
<?php } else { ?>
      <option value="add_to_caddie"><?php echo l10n('Add to caddie');?>
</option>
<?php }?>
		<option value="delete_derivatives"><?php echo l10n('Delete multiple size images');?>
</option>
		<option value="generate_derivatives"><?php echo l10n('Generate multiple size images');?>
</option>
<?php if (!empty($_smarty_tpl->tpl_vars['element_set_global_plugins_actions']->value)) {
$_from = $_smarty_tpl->tpl_vars['element_set_global_plugins_actions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_action_3_saved_item = isset($_smarty_tpl->tpl_vars['action']) ? $_smarty_tpl->tpl_vars['action'] : false;
$_smarty_tpl->tpl_vars['action'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['action']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
$__foreach_action_3_saved_local_item = $_smarty_tpl->tpl_vars['action'];
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['action']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['action']->value['NAME'];?>
</option>
<?php
$_smarty_tpl->tpl_vars['action'] = $__foreach_action_3_saved_local_item;
}
if ($__foreach_action_3_saved_item) {
$_smarty_tpl->tpl_vars['action'] = $__foreach_action_3_saved_item;
}
}?>
    </select>

    <!-- delete -->
    <div id="action_delete" class="bulkAction">
    <p><label><input type="checkbox" name="confirm_deletion" value="1"> <?php echo l10n('Are you sure?');?>
</label><span class="errors" style="display:none"><?php echo l10n("You need to confirm deletion");?>
</span></p>
    </div>

    <!-- associate -->
    <div id="action_associate" class="bulkAction">
      <select data-selectize="categories" data-default="first" name="associate" style="width:600px"></select>
      <br><?php echo l10n('... or ');?>

      <a href="#" data-add-album="associate" title="<?php echo l10n('create a new album');?>
"><?php echo l10n('create a new album');?>
</a>
    </div>

    <!-- dissociate -->
    <div id="action_dissociate" class="bulkAction">
      <select data-selectize="categories" placeholder="<?php echo l10n('Type in a search term');?>
"
        name="dissociate" style="width:600px"></select>
    </div>


    <!-- add_tags -->
    <div id="action_add_tags" class="bulkAction">
      <select data-selectize="tags" data-create="true" placeholder="<?php echo l10n('Type in a search term');?>
"
        name="add_tags[]" multiple style="width:400px;"></select>
    </div>

    <!-- del_tags -->
    <div id="action_del_tags" class="bulkAction">
<?php if (!empty($_smarty_tpl->tpl_vars['associated_tags']->value)) {?>
      <select data-selectize="tags" name="del_tags[]" multiple style="width:400px;"
        placeholder="<?php echo l10n('Type in a search term');?>
">
<?php
$_from = $_smarty_tpl->tpl_vars['associated_tags']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_tag_4_saved_item = isset($_smarty_tpl->tpl_vars['tag']) ? $_smarty_tpl->tpl_vars['tag'] : false;
$_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tag']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
$__foreach_tag_4_saved_local_item = $_smarty_tpl->tpl_vars['tag'];
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</option>
<?php
$_smarty_tpl->tpl_vars['tag'] = $__foreach_tag_4_saved_local_item;
}
if ($__foreach_tag_4_saved_item) {
$_smarty_tpl->tpl_vars['tag'] = $__foreach_tag_4_saved_item;
}
?>
      </select>
<?php }?>
    </div>

    <!-- author -->
    <div id="action_author" class="bulkAction">
    <label><input type="checkbox" name="remove_author"> <?php echo l10n('remove author');?>
</label><br>
		<input type="text" class="large" name="author" placeholder="<?php echo l10n('Type here the author name');?>
">
    </div>

    <!-- title -->
    <div id="action_title" class="bulkAction">
    <label><input type="checkbox" name="remove_title"> <?php echo l10n('remove title');?>
</label><br>
		<input type="text" class="large" name="title" placeholder="<?php echo l10n('Type here the title');?>
">
    </div>

    <!-- date_creation -->
    <div id="action_date_creation" class="bulkAction">
      <label><input type="checkbox" name="remove_date_creation"> <?php echo l10n('remove creation date');?>
</label><br>
      <div id="set_date_creation">
        <input type="hidden" name="date_creation" value="<?php echo $_smarty_tpl->tpl_vars['DATE_CREATION']->value;?>
">
        <label>
          <i class="icon-calendar"></i>
          <input type="text" data-datepicker="date_creation" readonly>
        </label>
      </div>
    </div>

    <!-- level -->
    <div id="action_level" class="bulkAction">
        <select name="level" size="1">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['level_options']->value,'selected'=>$_smarty_tpl->tpl_vars['level_options_selected']->value),$_smarty_tpl);?>

        </select>
    </div>

    <!-- metadata -->
    <div id="action_metadata" class="bulkAction">
    </div>

		<!-- generate derivatives -->
		<div id="action_generate_derivatives" class="bulkAction">
			<a href="javascript:selectGenerateDerivAll()"><?php echo l10n('All');?>
</a>,
			<a href="javascript:selectGenerateDerivNone()"><?php echo l10n('None');?>
</a>
			<br>
<?php
$_from = $_smarty_tpl->tpl_vars['generate_derivatives_types']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_disp_5_saved_item = isset($_smarty_tpl->tpl_vars['disp']) ? $_smarty_tpl->tpl_vars['disp'] : false;
$__foreach_disp_5_saved_key = isset($_smarty_tpl->tpl_vars['type']) ? $_smarty_tpl->tpl_vars['type'] : false;
$_smarty_tpl->tpl_vars['disp'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['type'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['disp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['disp']->value) {
$_smarty_tpl->tpl_vars['disp']->_loop = true;
$__foreach_disp_5_saved_local_item = $_smarty_tpl->tpl_vars['disp'];
?>
				<label><input type="checkbox" name="generate_derivatives_type[]" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['disp']->value;?>
</label>
<?php
$_smarty_tpl->tpl_vars['disp'] = $__foreach_disp_5_saved_local_item;
}
if ($__foreach_disp_5_saved_item) {
$_smarty_tpl->tpl_vars['disp'] = $__foreach_disp_5_saved_item;
}
if ($__foreach_disp_5_saved_key) {
$_smarty_tpl->tpl_vars['type'] = $__foreach_disp_5_saved_key;
}
?>
		</div>

		<!-- delete derivatives -->
		<div id="action_delete_derivatives" class="bulkAction">
			<a href="javascript:selectDelDerivAll()"><?php echo l10n('All');?>
</a>,
			<a href="javascript:selectDelDerivNone()"><?php echo l10n('None');?>
</a>
			<br>
<?php
$_from = $_smarty_tpl->tpl_vars['del_derivatives_types']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_disp_6_saved_item = isset($_smarty_tpl->tpl_vars['disp']) ? $_smarty_tpl->tpl_vars['disp'] : false;
$__foreach_disp_6_saved_key = isset($_smarty_tpl->tpl_vars['type']) ? $_smarty_tpl->tpl_vars['type'] : false;
$_smarty_tpl->tpl_vars['disp'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['type'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['disp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['disp']->value) {
$_smarty_tpl->tpl_vars['disp']->_loop = true;
$__foreach_disp_6_saved_local_item = $_smarty_tpl->tpl_vars['disp'];
?>
				<label><input type="checkbox" name="del_derivatives_type[]" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['disp']->value;?>
</label>
<?php
$_smarty_tpl->tpl_vars['disp'] = $__foreach_disp_6_saved_local_item;
}
if ($__foreach_disp_6_saved_item) {
$_smarty_tpl->tpl_vars['disp'] = $__foreach_disp_6_saved_item;
}
if ($__foreach_disp_6_saved_key) {
$_smarty_tpl->tpl_vars['type'] = $__foreach_disp_6_saved_key;
}
?>
		</div>

    <!-- progress bar -->
    <div id="regenerationMsg" class="bulkAction" style="display:none">
      <p id="regenerationText" style="margin-bottom:10px;"><?php echo l10n('Generate multiple size images');?>
</p>
      <span class="progressBar" id="progressBar"></span>
      <input type="hidden" name="regenerateSuccess" value="0">
      <input type="hidden" name="regenerateError" value="0">
    </div>

    <!-- plugins -->
<?php if (!empty($_smarty_tpl->tpl_vars['element_set_global_plugins_actions']->value)) {
$_from = $_smarty_tpl->tpl_vars['element_set_global_plugins_actions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_action_7_saved_item = isset($_smarty_tpl->tpl_vars['action']) ? $_smarty_tpl->tpl_vars['action'] : false;
$_smarty_tpl->tpl_vars['action'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['action']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
$__foreach_action_7_saved_local_item = $_smarty_tpl->tpl_vars['action'];
?>
    <div id="action_<?php echo $_smarty_tpl->tpl_vars['action']->value['ID'];?>
" class="bulkAction">
    <?php if (!empty($_smarty_tpl->tpl_vars['action']->value['CONTENT'])) {
echo $_smarty_tpl->tpl_vars['action']->value['CONTENT'];
}?>
    </div>
<?php
$_smarty_tpl->tpl_vars['action'] = $__foreach_action_7_saved_local_item;
}
if ($__foreach_action_7_saved_item) {
$_smarty_tpl->tpl_vars['action'] = $__foreach_action_7_saved_item;
}
}?>

    <p id="applyActionBlock" style="display:none" class="actionButtons">
      <button id="applyAction" name="submit" type="submit" class="buttonLike">
        <i class="icon-cog-alt"></i> <?php echo l10n('Apply action');?>

      </button>

      <span id="applyOnDetails"></span>
    </p>

    </div> <!-- #permitAction -->
  </fieldset>

  </form>

</div> <!-- #batchManagerGlobal -->
<?php }
}
