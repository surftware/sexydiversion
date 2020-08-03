<?php
/* Smarty version 3.1.29, created on 2020-07-20 14:34:44
  from "/home4/sexydive/public_html/shop/admin/themes/default/template/cat_list.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f15f1d4db1987_36346649',
  'file_dependency' => 
  array (
    '55ccdcb553c21887c979feacc3ddcba587700d83' => 
    array (
      0 => '/home4/sexydive/public_html/shop/admin/themes/default/template/cat_list.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f15f1d4db1987_36346649 ($_smarty_tpl) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array('require'=>'jquery.ui.sortable')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.ui.sortable'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

jQuery(document).ready(function(){
  jQuery(".drag_button").show();
  jQuery(".categoryLi").css("cursor","move");
  jQuery(".categoryUl").sortable({
    axis: "y",
    opacity: 0.8,
    update : function() {
      jQuery("#manualOrder").show();
      jQuery("#notManualOrder").hide();
      jQuery("#formAutoOrder").hide();
      jQuery("#formCreateAlbum").hide();
    }
  });

  jQuery("#categoryOrdering").submit(function(){
    ar = jQuery('.categoryUl').sortable('toArray');
    for(i=0;i<ar.length;i++) {
      cat = ar[i].split('cat_');
      document.getElementsByName('catOrd[' + cat[1] + ']')[0].value = i;
    }
  });

  jQuery("input[name=order_type]").click(function () {
    jQuery("#automatic_order_params").hide();
    if (jQuery("input[name=order_type]:checked").val() == "automatic") {
      jQuery("#automatic_order_params").show();
    }
  });

  jQuery("#addAlbumOpen").click(function(){
    jQuery("#formCreateAlbum").toggle();
    jQuery("input[name=virtual_name]").focus();
    jQuery("#formAutoOrder").hide();
  });

  jQuery("#addAlbumClose").click(function(){
    jQuery("#formCreateAlbum").hide();
  });


  jQuery("#autoOrderOpen").click(function(){
    jQuery("#formAutoOrder").toggle();
    jQuery("#formCreateAlbum").hide();
  });

  jQuery("#autoOrderClose").click(function(){
    jQuery("#formAutoOrder").hide();
  });

  jQuery("#cancelManualOrder").click(function(){
    jQuery(".categoryUl").sortable("cancel");
    jQuery("#manualOrder").hide();
    jQuery("#notManualOrder").show();
  });
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.ui.sortable'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div class="selectedAlbum cat-list-album-path"><span class="icon-sitemap"><?php echo $_smarty_tpl->tpl_vars['CATEGORIES_NAV']->value;?>
</span></div>
<p class="showCreateAlbum" id="notManualOrder">
  <a href="#" id="addAlbumOpen" class="icon-plus"><?php echo l10n('create a new album');?>
</a>
  <?php if (count($_smarty_tpl->tpl_vars['categories']->value)) {?><span class="userSeparator">&middot;</span><a href="#" id="autoOrderOpen" class="icon-sort-alt-down"><?php echo l10n('apply automatic sort order');?>
</a><?php }?>
  <?php if (($_smarty_tpl->tpl_vars['PARENT_EDIT']->value)) {?><span class="userSeparator">&middot;</span><a href="<?php echo $_smarty_tpl->tpl_vars['PARENT_EDIT']->value;?>
" class="icon-pencil"></span><?php echo l10n('edit');?>
</a><?php }?>
</p>
<form id="formCreateAlbum" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="post" style="display:none;">
  <fieldset class="with-border">
      <legend><?php echo l10n('create a new album');?>
</legend>
      <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">
      
      <p>
        <strong><?php echo l10n('Album name');?>
</strong><br>
        <input type="text" name="virtual_name" maxlength="255">
      </p>
      
      <p class="actionButtons">
        <button name="submitAdd" type="submit" class="buttonLike">
          <i class="icon-plus-circled"></i> <?php echo l10n('Create');?>

        </button>

        <a href="#" id="addAlbumClose" class="icon-cancel-circled"><?php echo l10n('Cancel');?>
</a>
      </p>
  </fieldset>
</form>
<?php if (count($_smarty_tpl->tpl_vars['categories']->value)) {?>
<form id="formAutoOrder" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="post" style="display:none;">
  <fieldset class="with-border">
    <legend><?php echo l10n('Automatic sort order');?>
</legend>
    <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">
    
    <p><strong><?php echo l10n('Sort order');?>
</strong>
<?php
$_from = $_smarty_tpl->tpl_vars['sort_orders']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_sort_label_0_saved_item = isset($_smarty_tpl->tpl_vars['sort_label']) ? $_smarty_tpl->tpl_vars['sort_label'] : false;
$__foreach_sort_label_0_saved_key = isset($_smarty_tpl->tpl_vars['sort_code']) ? $_smarty_tpl->tpl_vars['sort_code'] : false;
$_smarty_tpl->tpl_vars['sort_label'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['sort_code'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['sort_label']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sort_code']->value => $_smarty_tpl->tpl_vars['sort_label']->value) {
$_smarty_tpl->tpl_vars['sort_label']->_loop = true;
$__foreach_sort_label_0_saved_local_item = $_smarty_tpl->tpl_vars['sort_label'];
?>
      <br>
      <label class="font-checkbox">
        <span class="icon-dot-circled"></span>
        <input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['sort_code']->value;?>
" name="order_by" <?php if ($_smarty_tpl->tpl_vars['sort_code']->value == $_smarty_tpl->tpl_vars['sort_order_checked']->value) {?>checked="checked"<?php }?>> <?php echo $_smarty_tpl->tpl_vars['sort_label']->value;?>

      </label>
<?php
$_smarty_tpl->tpl_vars['sort_label'] = $__foreach_sort_label_0_saved_local_item;
}
if ($__foreach_sort_label_0_saved_item) {
$_smarty_tpl->tpl_vars['sort_label'] = $__foreach_sort_label_0_saved_item;
}
if ($__foreach_sort_label_0_saved_key) {
$_smarty_tpl->tpl_vars['sort_code'] = $__foreach_sort_label_0_saved_key;
}
?>
    </p>
  
    <p>
      <label class="font-checkbox">
        <span class="icon-check"></span>
        <input type="checkbox" name="recursive"> <strong><?php echo l10n('Apply to sub-albums');?>
</strong>
      </label>
    </p>
  
    <p class="actionButtons">
      <button name="submitAutoOrder" type="submit" class="buttonLike">
        <i class="icon-floppy"></i> <?php echo l10n('Save order');?>

      </button>
      <a href="#" id="autoOrderClose" class="icon-cancel-circled"><?php echo l10n('Cancel');?>
</a>
    </p>
  </fieldset>
</form>
<?php }?>

<form id="categoryOrdering" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="post">
  <input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">
  <p id="manualOrder" style="display:none">
    <input class="submit" name="submitManualOrder" type="submit" value="<?php echo l10n('Save manual order');?>
">
    <?php echo l10n('... or ');?>
 <a href="#" id="cancelManualOrder"><?php echo l10n('cancel manual order');?>
</a>
  </p>
  
<?php if (count($_smarty_tpl->tpl_vars['categories']->value)) {?>
  <ul class="categoryUl">
<?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_category_1_saved_item = isset($_smarty_tpl->tpl_vars['category']) ? $_smarty_tpl->tpl_vars['category'] : false;
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['category']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$__foreach_category_1_saved_local_item = $_smarty_tpl->tpl_vars['category'];
?>
    <li class="categoryLi<?php if ($_smarty_tpl->tpl_vars['category']->value['IS_VIRTUAL']) {?> virtual_cat<?php }?>" id="cat_<?php echo $_smarty_tpl->tpl_vars['category']->value['ID'];?>
">
      <!-- category <?php echo $_smarty_tpl->tpl_vars['category']->value['ID'];?>
 -->
      <div class="albumBlock">
        <div class="albumLineBlock">
          <p class="albumTitle">
            <i class="icon-arrow-combo" title="<?php echo l10n('Drag to re-order');?>
"></i>
            <strong><?php echo $_smarty_tpl->tpl_vars['category']->value['NAME'];?>
</strong>
          </p>
          <span class="albumInfos"><span class="userSeparator">&middot;</span> <?php echo l10n_dec('%d photo','%d photos',$_smarty_tpl->tpl_vars['category']->value['NB_PHOTOS']);?>
 <span class="userSeparator">&middot;</span> <?php echo l10n_dec('%d photo','%d photos',$_smarty_tpl->tpl_vars['category']->value['NB_SUB_PHOTOS']);?>
 <?php echo l10n_dec('in %d sub-album','in %d sub-albums',$_smarty_tpl->tpl_vars['category']->value['NB_SUB_ALBUMS']);?>
</span>
        </div>
  
        <input type="hidden" name="catOrd[<?php echo $_smarty_tpl->tpl_vars['category']->value['ID'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['RANK'];?>
">

        <p class="albumActions">
          <a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['U_EDIT'];?>
"><span class="icon-pencil"></span><?php echo l10n('Edit');?>
</a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['U_CHILDREN'];?>
" class="actionTitle"><span class="icon-flow-tree"></span><span><?php echo l10n('sub-albums');?>
</span></a>
<?php if (isset($_smarty_tpl->tpl_vars['category']->value['U_SYNC'])) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['U_SYNC'];?>
"><span class="icon-exchange"></span><?php echo l10n('Synchronize');?>
</a>
<?php }
if (cat_admin_access($_smarty_tpl->tpl_vars['category']->value['ID'])) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['U_JUMPTO'];?>
"><span class="icon-eye"><?php echo l10n('Visit Gallery');?>
 </a>
<?php }?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['U_ADD_PHOTOS_ALBUM'];?>
"><span class="icon-plus"><?php echo l10n('Add Photos');?>
 </a>
        </p>
      </div>

    </li>
<?php
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_1_saved_local_item;
}
if ($__foreach_category_1_saved_item) {
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_1_saved_item;
}
?>
  </ul>
<?php }?>
</form>
<?php }
}
