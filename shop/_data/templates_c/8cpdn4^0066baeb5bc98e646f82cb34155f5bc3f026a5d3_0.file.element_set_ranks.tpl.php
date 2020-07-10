<?php
/* Smarty version 3.1.29, created on 2020-06-27 04:24:52
  from "/home4/sexydive/public_html/shop/admin/themes/default/template/element_set_ranks.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ef71064898c02_73083640',
  'file_dependency' => 
  array (
    '0066baeb5bc98e646f82cb34155f5bc3f026a5d3' => 
    array (
      0 => '/home4/sexydive/public_html/shop/admin/themes/default/template/element_set_ranks.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef71064898c02_73083640 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home4/sexydive/public_html/shop/include/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_function_html_options')) require_once '/home4/sexydive/public_html/shop/include/smarty/libs/plugins/function.html_options.php';
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array('require'=>'jquery.ui.sortable')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.ui.sortable'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

jQuery(document).ready(function() {
  function checkOrderOptions() {
    jQuery("#image_order_user_define_options").hide();
    if (jQuery("input[name=image_order_choice]:checked").val() == "user_define") {
      jQuery("#image_order_user_define_options").show();
    }        
  }

  jQuery('ul.thumbnails').sortable( { 
    revert: true, opacity: 0.7,
    handle: jQuery('.rank-of-image').add('.rank-of-image img'),
    update: function() {
      jQuery(this).find('li').each(function(i) { 
        jQuery(this).find("input[name^=rank_of_image]").each(function() {
          jQuery(this).attr('value', (i+1)*10)
        });
      });

      jQuery('#image_order_rank').prop('checked', true);
      checkOrderOptions();
    }
  });

  jQuery("input[name=image_order_choice]").click(function () {
    checkOrderOptions();
  });

  checkOrderOptions();
});
jQuery(document).ready(function() {
jQuery('.thumbnail').tipTip({
'delay' : 0,
'fadeIn' : 200,
'fadeOut' : 200
});
}); 
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.ui.sortable'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div class="titrePage">
  <h2><span style="letter-spacing:0"><?php echo $_smarty_tpl->tpl_vars['CATEGORIES_NAV']->value;?>
</span> &#8250; <?php echo l10n('Edit album');?>
 <?php echo $_smarty_tpl->tpl_vars['TABSHEET_TITLE']->value;?>
</h2>
</div>

<form action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="post">
<?php if (!empty($_smarty_tpl->tpl_vars['thumbnails']->value)) {?>
  <p><input type="submit" value="<?php echo l10n('Submit');?>
" name="submit"></p>
  <fieldset>
    <legend><?php echo l10n('Manual order');?>
</legend>
<?php if (!empty($_smarty_tpl->tpl_vars['thumbnails']->value)) {?>
    <p><?php echo l10n('Drag to re-order');?>
</p>
    <ul class="thumbnails">
<?php
$_from = $_smarty_tpl->tpl_vars['thumbnails']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_thumbnail_0_saved_item = isset($_smarty_tpl->tpl_vars['thumbnail']) ? $_smarty_tpl->tpl_vars['thumbnail'] : false;
$_smarty_tpl->tpl_vars['thumbnail'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['thumbnail']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['thumbnail']->value) {
$_smarty_tpl->tpl_vars['thumbnail']->_loop = true;
$__foreach_thumbnail_0_saved_local_item = $_smarty_tpl->tpl_vars['thumbnail'];
?>
      <li class="rank-of-image">
        <img src="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['TN_SRC'];?>
" class="thumbnail" alt="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['thumbnail']->value['NAME'],'"',' ');?>
" title="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['thumbnail']->value['NAME'],'"',' ');?>
"  style="width:<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['SIZE'][0];?>
px; height:<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['SIZE'][1];?>
px; ">
        <input type="text" name="rank_of_image[<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['ID'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['RANK'];?>
" style="display:none">
      </li>
<?php
$_smarty_tpl->tpl_vars['thumbnail'] = $__foreach_thumbnail_0_saved_local_item;
}
if ($__foreach_thumbnail_0_saved_item) {
$_smarty_tpl->tpl_vars['thumbnail'] = $__foreach_thumbnail_0_saved_item;
}
?>
    </ul>
<?php }?>
  </fieldset>
<?php }?>

  <fieldset>
    <legend><?php echo l10n('Sort order');?>
</legend>
    <p class="field">
      <label class="font-checkbox">
        <span class="icon-dot-circled"></span>
        <input type="radio" name="image_order_choice" id="image_order_default" value="default"<?php if ($_smarty_tpl->tpl_vars['image_order_choice']->value == 'default') {?> checked="checked"<?php }?>>
        <?php echo l10n('Use the default photo sort order');?>

      </label>
    </p>
    <p class="field">
      <label class="font-checkbox">
        <span class="icon-dot-circled"></span>
        <input type="radio" name="image_order_choice" id="image_order_rank" value="rank"<?php if ($_smarty_tpl->tpl_vars['image_order_choice']->value == 'rank') {?> checked="checked"<?php }?>>
        <?php echo l10n('manual order');?>

      </label>
    </p>
    <p class="field">
      <label class="font-checkbox">
        <span class="icon-dot-circled"></span>
        <input type="radio" name="image_order_choice" id="image_order_user_define" value="user_define"<?php if ($_smarty_tpl->tpl_vars['image_order_choice']->value == 'user_define') {?> checked="checked"<?php }?>>
        <?php echo l10n('automatic order');?>

      </label>
      <div id="image_order_user_define_options">
<?php
$_from = $_smarty_tpl->tpl_vars['image_order']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_order_1_saved_item = isset($_smarty_tpl->tpl_vars['order']) ? $_smarty_tpl->tpl_vars['order'] : false;
$_smarty_tpl->tpl_vars['order'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['order']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
$__foreach_order_1_saved_local_item = $_smarty_tpl->tpl_vars['order'];
?>
      <p class="field">
        <select name="image_order[]">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['image_order_options']->value,'selected'=>$_smarty_tpl->tpl_vars['order']->value),$_smarty_tpl);?>

        </select>
      </p>
<?php
$_smarty_tpl->tpl_vars['order'] = $__foreach_order_1_saved_local_item;
}
if ($__foreach_order_1_saved_item) {
$_smarty_tpl->tpl_vars['order'] = $__foreach_order_1_saved_item;
}
?>
      </div>
  </fieldset>
  <p>
    <button name="submit" type="submit" class="buttonLike">
      <i class="icon-floppy"></i> <?php echo l10n('Save Settings');?>

    </button>

    <label class="font-checkbox">
      <span class="icon-check"></span>
      <input type="checkbox" name="image_order_subcats" id="image_order_subcats">
      <?php echo l10n('Apply to sub-albums');?>

    </label>
  </p>
</form>
<?php }
}
