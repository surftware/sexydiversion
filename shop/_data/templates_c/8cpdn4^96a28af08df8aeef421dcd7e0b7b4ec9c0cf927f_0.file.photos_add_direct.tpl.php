<?php
/* Smarty version 3.1.29, created on 2020-06-27 04:07:14
  from "/home4/sexydive/public_html/shop/admin/themes/default/template/photos_add_direct.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ef70c429f7362_15492950',
  'file_dependency' => 
  array (
    '96a28af08df8aeef421dcd7e0b7b4ec9c0cf927f' => 
    array (
      0 => '/home4/sexydive/public_html/shop/admin/themes/default/template/photos_add_direct.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/colorbox.inc.tpl' => 1,
    'file:include/add_album.inc.tpl' => 1,
  ),
),false)) {
function content_5ef70c429f7362_15492950 ($_smarty_tpl) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.plupload','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/plupload/plupload.full.min.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.plupload.queue','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.min.js'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/default/js/plugins/plupload/jquery.plupload.queue/css/jquery.plupload.queue.css"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars["plupload_i18n"] = new Smarty_Variable("themes/default/js/plugins/plupload/i18n/".((string)$_smarty_tpl->tpl_vars['lang_info']->value['plupload_code']).".js", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "plupload_i18n", 0);
if (file_exists((constant("PHPWG_ROOT_PATH")).($_smarty_tpl->tpl_vars['plupload_i18n']->value))) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>"plupload_i18n-".((string)$_smarty_tpl->tpl_vars['lang_info']->value['plupload_code']),'load'=>"footer",'path'=>$_smarty_tpl->tpl_vars['plupload_i18n']->value,'require'=>"jquery.plupload.queue"),$_smarty_tpl);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:include/colorbox.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:include/add_album.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'LocalStorageCache','load'=>'footer','path'=>'admin/themes/default/js/LocalStorageCache.js'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.selectize','load'=>'footer','path'=>'themes/default/js/plugins/selectize.min.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('id'=>'jquery.selectize','path'=>"themes/default/js/plugins/selectize.".((string)$_smarty_tpl->tpl_vars['themeconf']->value['colorscheme']).".css"),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'piecon','load'=>'footer','path'=>'themes/default/js/plugins/piecon.js'),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('html_style', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

.addAlbumFormParent { display: none; } /* specific to this page, do not move in theme.css */
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


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
  filter: function(categories, options) {
    if (categories.length > 0) {
      jQuery(".addAlbumEmptyCenter").css( "height", "auto" );
      jQuery(".addAlbumFormParent").attr( "style", "display: block !important;" );
    }
    
    return categories;
  }
});

jQuery('[data-add-album]').pwgAddAlbum({
  afterSelect: function() {
    jQuery("#uploadForm").show();
    jQuery(".addAlbumEmptyCenter").hide();
    jQuery(".addAlbumEmptyCenter").css( "height", "auto" );
    jQuery(".addAlbumFormParent").attr( "style", "display: block !important;" );

    var categorySelectedId = jQuery("select[name=category] option:selected").val();
    var categorySelectedPath = jQuery("select[name=category]")[0].selectize.getItem(categorySelectedId).text();
    jQuery('.selectedAlbum').show().find('span').html(categorySelectedPath);
    jQuery('.selectAlbumBlock').hide();
  }
});

Piecon.setOptions({
  color: '#ff7700',
  background: '#bbb',
  shadow: '#fff',
  fallback: 'force'
});

var pwg_token = '<?php echo $_smarty_tpl->tpl_vars['pwg_token']->value;?>
';
var photosUploaded_label = "<?php echo l10n('%d photos uploaded');?>
";
var batch_Label = "<?php echo l10n('Manage this set of %d photos');?>
";
var albumSummary_label = "<?php echo htmlspecialchars(l10n('Album "%s" now contains %d photos'), ENT_QUOTES, 'UTF-8', true);?>
";
var uploadedPhotos = [];
var uploadCategory = null;


jQuery(document).ready(function(){
  jQuery("#uploadWarningsSummary a.showInfo").click(function() {
    jQuery("#uploadWarningsSummary").hide();
    jQuery("#uploadWarnings").show();
    return false;
  });

  jQuery("#showPermissions").click(function() {
    jQuery(this).parent(".showFieldset").hide();
    jQuery("#permissions").show();
    return false;
  });

	jQuery("#uploader").pluploadQueue({
		// General settings
    browse_button : 'addFiles',
    container : 'uploadForm',
    
		// runtimes : 'html5,flash,silverlight,html4',
		runtimes : 'html5',

		// url : '../upload.php',
		url : 'ws.php?method=pwg.images.upload&format=json',
		
		chunk_size: '<?php echo $_smarty_tpl->tpl_vars['chunk_size']->value;?>
kb',
		
		filters : {
			// Maximum file size
			max_file_size : '1000mb',
			// Specify what files to browse for
			mime_types: [
				{title : "Image files", extensions : "<?php echo $_smarty_tpl->tpl_vars['file_exts']->value;?>
"}
			]
		},

		// Rename files by clicking on their titles
		// rename: true,

		// Enable ability to drag'n'drop files onto the widget (currently only HTML5 supports that)
		dragdrop: true,

    preinit: {
      Init: function (up, info) {
        jQuery('#uploader_container').removeAttr("title"); //remove the "using runtime" text
        
        jQuery('#startUpload').on('click', function(e) {
            e.preventDefault();
            up.start();
          });
        
        jQuery('#cancelUpload').on('click', function(e) {
            e.preventDefault();
            up.stop();
            up.trigger('UploadComplete', up.files);
          });
      }
    },

    init : {
      // update custom button state on queue change
      QueueChanged : function(up) {
        jQuery('#addFiles').addClass("addFilesButtonChanged");
        jQuery('#startUpload').prop('disabled', up.files.length == 0);

        if (up.files.length > 0) {
          jQuery('.plupload_filelist_footer').show();
          jQuery('.plupload_filelist').css("overflow-y", "scroll");
        }

        if (up.files.length == 0) {
          jQuery('#addFiles').removeClass("addFilesButtonChanged");
          jQuery('.plupload_filelist_footer').hide();
          jQuery('.plupload_filelist').css("overflow-y", "hidden");
        }
      },

      UploadProgress: function(up, file) {
        jQuery('#uploadingActions .progressbar').width(up.total.percent+'%');
        Piecon.setProgress(up.total.percent);
      },
      
      BeforeUpload: function(up, file) {
        //console.log('[BeforeUpload]', file);
        
        // hide buttons
        jQuery('#startUpload, .selectFilesButtonBlock, .selectAlbumBlock').hide();
        jQuery('#uploadingActions').show();
        var categorySelectedId = jQuery("select[name=category] option:selected").val();
        var categorySelectedPath = jQuery("select[name=category]")[0].selectize.getItem(categorySelectedId).text();
        jQuery('.selectedAlbum').show().find('span').html(categorySelectedPath);

        // warn user if she wants to leave page while upload is running
        jQuery(window).bind('beforeunload', function() {
          return "<?php echo htmlspecialchars(l10n('Upload in progress'), ENT_QUOTES, 'UTF-8', true);?>
";
        });

        // no more change on category/level
        jQuery("select[name=level]").attr("disabled", "disabled");

        // You can override settings before the file is uploaded
        up.setOption(
          'multipart_params',
          {
            category : jQuery("select[name=category] option:selected").val(),
            level : jQuery("select[name=level] option:selected").val(),
            pwg_token : pwg_token
            // name : file.name
          }
        );
      },

      FileUploaded: function(up, file, info) {
        // Called when file has finished uploading
        //console.log('[FileUploaded] File:', file, "Info:", info);
        
        // hide item line
        jQuery('#'+file.id).hide();
      
        var data = jQuery.parseJSON(info.response);
      
        jQuery("#uploadedPhotos").parent("fieldset").show();
      
        html = '<a href="admin.php?page=photo-'+data.result.image_id+'" target="_blank">';
        html += '<img src="'+data.result.square_src+'" class="thumbnail" title="'+data.result.name+'">';
        html += '</a> ';
      
        jQuery("#uploadedPhotos").prepend(html);

        // do not remove file, or it will reset the progress bar :-/
        // up.removeFile(file);
        uploadedPhotos.push(parseInt(data.result.image_id));
        uploadCategory = data.result.category;
      },

      Error: function(up, error) {
        // Called when file has finished uploading
        //console.log('[Error] error: ', error);
        var piwigoApiResponse = jQuery.parseJSON(error.response);

        jQuery(".errors ul").append('<li>'+piwigoApiResponse.message+'</li>');
        jQuery(".errors").show();
      },

      UploadComplete: function(up, files) {
        // Called when all files are either uploaded or failed
        //console.log('[UploadComplete]');
        
        Piecon.reset();

        jQuery(".selectAlbum, .selectFiles, #permissions, .showFieldset").hide();

        jQuery(".infos").append('<ul><li>'+sprintf(photosUploaded_label, uploadedPhotos.length)+'</li></ul>');

        html = sprintf(
          albumSummary_label,
          '<a href="admin.php?page=album-'+uploadCategory.id+'">'+uploadCategory.label+'</a>',
          parseInt(uploadCategory.nb_photos)
        );

        jQuery(".infos ul").append('<li>'+html+'</li>');

        jQuery(".infos").show();

        // TODO: use a new method pwg.caddie.empty +
        // pwg.caddie.add(uploadedPhotos) instead of relying on huge GET parameter
        // (and remove useless code from admin/photos_add_direct.php)

        jQuery(".batchLink").attr("href", "admin.php?page=photos_add&section=direct&batch="+uploadedPhotos.join(","));
        jQuery(".batchLink").html(sprintf(batch_Label, uploadedPhotos.length));

        jQuery(".afterUploadActions").show();
        jQuery('#uploadingActions').hide();

        // user can safely leave page without warning
        jQuery(window).unbind('beforeunload');
      }
    }
	});

});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div id="photosAddContent">
  <div class="addAlbumEmptyCenter">
    <div class="addAlbumEmpty"<?php if ($_smarty_tpl->tpl_vars['NB_ALBUMS']->value > 0) {?> style="display:none;"<?php }?>>
      <div class="addAlbumEmptyTitle"><?php echo l10n('Welcome!');?>
</div>
      <p class="addAlbumEmptyInfos"><?php echo l10n('Piwigo requires an album to add photos.');?>
</p>
      <a href="#" data-add-album="category" title="<?php echo l10n('Create a first album');?>
" class="buttonLike"><?php echo l10n('Create a first album');?>
</a>
    </div>
  </div>

<div class="infos" style="display:none"><i class="eiw-icon icon-ok"></i></div>
<div class="errors" style="display:none"><i class="eiw-icon icon-cancel"></i><ul></ul></div>

  <p class="afterUploadActions" style="margin:10px; display:none;"> <a class="batchLink icon-pencil"></a><span class="buttonSeparator"><?php echo l10n('or');?>
</span><a href="admin.php?page=photos_add" class="icon-plus-circled"><?php echo l10n('Add another set of photos');?>
</a></p>

<?php if (count($_smarty_tpl->tpl_vars['setup_errors']->value) > 0) {?>
<div class="errors">
  <ul>
<?php
$_from = $_smarty_tpl->tpl_vars['setup_errors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_error_0_saved_item = isset($_smarty_tpl->tpl_vars['error']) ? $_smarty_tpl->tpl_vars['error'] : false;
$_smarty_tpl->tpl_vars['error'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['error']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
$__foreach_error_0_saved_local_item = $_smarty_tpl->tpl_vars['error'];
?>
    <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
<?php
$_smarty_tpl->tpl_vars['error'] = $__foreach_error_0_saved_local_item;
}
if ($__foreach_error_0_saved_item) {
$_smarty_tpl->tpl_vars['error'] = $__foreach_error_0_saved_item;
}
?>
  </ul>
</div>
<?php } else {
if (count($_smarty_tpl->tpl_vars['setup_warnings']->value) > 0) {?>
<div class="warnings">
  <ul>
<?php
$_from = $_smarty_tpl->tpl_vars['setup_warnings']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_warning_1_saved_item = isset($_smarty_tpl->tpl_vars['warning']) ? $_smarty_tpl->tpl_vars['warning'] : false;
$_smarty_tpl->tpl_vars['warning'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['warning']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['warning']->value) {
$_smarty_tpl->tpl_vars['warning']->_loop = true;
$__foreach_warning_1_saved_local_item = $_smarty_tpl->tpl_vars['warning'];
?>
    <li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
<?php
$_smarty_tpl->tpl_vars['warning'] = $__foreach_warning_1_saved_local_item;
}
if ($__foreach_warning_1_saved_item) {
$_smarty_tpl->tpl_vars['warning'] = $__foreach_warning_1_saved_item;
}
?>
  </ul>
  <div class="hideButton" style="text-align:center"><a href="<?php echo $_smarty_tpl->tpl_vars['hide_warnings_link']->value;?>
"><?php echo l10n('Hide');?>
</a></div>
</div>
<?php }?>
  <form id="uploadForm" enctype="multipart/form-data" method="post" action="<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['NB_ALBUMS']->value == 0) {?> style="display:none;"<?php }?>>
    <fieldset class="selectAlbum">
      <legend><?php echo l10n('Drop into album');?>
</legend>
      <div class="selectedAlbum"<?php if (!isset($_smarty_tpl->tpl_vars['ADD_TO_ALBUM']->value)) {?> style="display: none"<?php }?>><span class="icon-sitemap"><?php echo $_smarty_tpl->tpl_vars['ADD_TO_ALBUM']->value;?>
</span></div>
      <div class="selectAlbumBlock"<?php if (isset($_smarty_tpl->tpl_vars['ADD_TO_ALBUM']->value)) {?> style="display: none"<?php }?>>
        <a href="#" data-add-album="category" title="<?php echo l10n('create a new album');?>
" class="icon-plus"></a>
        <span id="albumSelection">
          <select data-selectize="categories" data-value="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['selected_category']->value), ENT_QUOTES, 'UTF-8', true);?>
"
          data-default="first" name="category" style="width:600px"></select>
        </span>
      </div>
    </fieldset>

    <fieldset class="selectFiles">
      <legend><?php echo l10n('Select files');?>
</legend>
      <div class="selectFilesButtonBlock">
        <button id="addFiles" class="buttonLike"><?php echo l10n('Add Photos');?>
<i class="icon-plus-circled"></i></button>
        <div class="selectFilesinfo">
<?php if (isset($_smarty_tpl->tpl_vars['original_resize_maxheight']->value)) {?>
          <p class="uploadInfo"><?php echo l10n('The picture dimensions will be reduced to %dx%d pixels.',$_smarty_tpl->tpl_vars['original_resize_maxwidth']->value,$_smarty_tpl->tpl_vars['original_resize_maxheight']->value);?>
</p>
<?php }?>
          <p id="uploadWarningsSummary"><?php echo l10n('Allowed file types: %s.',$_smarty_tpl->tpl_vars['upload_file_types']->value);?>
</p>
          <p>
<?php if (isset($_smarty_tpl->tpl_vars['max_upload_resolution']->value)) {?>
            <?php echo l10n('Approximate maximum resolution: %dM pixels (that\'s %dx%d pixels).',$_smarty_tpl->tpl_vars['max_upload_resolution']->value,$_smarty_tpl->tpl_vars['max_upload_width']->value,$_smarty_tpl->tpl_vars['max_upload_height']->value);?>

<?php }?>
          </p>
        </div>
      </div>
      <div id="uploader">
        <p>Your browser doesn't have HTML5 support.</p>
      </div>

    </fieldset>
    
    <div id="uploadingActions" style="display:none">
      <button id="cancelUpload" class="buttonLike icon-cancel-circled"><?php echo l10n('Cancel');?>
</button>
      
      <div class="big-progressbar">
        <div class="progressbar" style="width:0%"></div>
      </div>
    </div>

    <button id="startUpload" class="buttonLike icon-upload" disabled><?php echo l10n('Start Upload');?>
</button>

  </form>

  <fieldset style="display:none" class="Addedphotos">
    <div id="uploadedPhotos"></div>
  </fieldset>

<?php }?> 

</div> <!-- photosAddContent -->
<?php }
}
