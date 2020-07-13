<?php
/* Smarty version 3.1.29, created on 2020-06-27 04:25:17
  from "/home4/sexydive/public_html/shop/admin/themes/default/template/menubar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ef7107d92aa81_87132706',
  'file_dependency' => 
  array (
    '43d485919cbd5b6ab1d725e4662d571e0dce49da' => 
    array (
      0 => '/home4/sexydive/public_html/shop/admin/themes/default/template/menubar.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef7107d92aa81_87132706 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once '/home4/sexydive/public_html/shop/include/smarty/libs/plugins/function.math.php';
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'common','load'=>'footer','path'=>'admin/themes/default/js/common.js'),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array('require'=>'jquery.ui.sortable')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.ui.sortable'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

jQuery(document).ready(function(){
	jQuery(".menuPos").hide();
	jQuery(".drag_button").show();
	jQuery(".menuLi").css("cursor","move");
	jQuery(".menuUl").sortable({
		axis: "y",
		opacity: 0.8
	});
	jQuery("input[name^='hide_']").click(function() {
		men = this.name.split('hide_');
		if (this.checked) {
			jQuery("#menu_"+men[1]).addClass('menuLi_hidden');
		} else {
			jQuery("#menu_"+men[1]).removeClass('menuLi_hidden');
		}
	});
	jQuery("#menuOrdering").submit(function(){
		ar = jQuery('.menuUl').sortable('toArray');
		for(i=0;i<ar.length;i++) {
			men = ar[i].split('menu_');
			document.getElementsByName('pos_' + men[1])[0].value = i+1;
		}
	});
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.ui.sortable'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('html_style', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

.font-checkbox i {
  margin-left:5px;
}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div class="titrePage">
  <h2><?php echo l10n('Menu Management');?>
</h2>
</div>

<form id="menuOrdering" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="post">
  <ul class="menuUl">
<?php
$_from = $_smarty_tpl->tpl_vars['blocks']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_block_loop_0_saved_item = isset($_smarty_tpl->tpl_vars['block']) ? $_smarty_tpl->tpl_vars['block'] : false;
$_smarty_tpl->tpl_vars['block'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['block']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
$__foreach_block_loop_0_saved_local_item = $_smarty_tpl->tpl_vars['block'];
?>
    <li class="menuLi <?php if ($_smarty_tpl->tpl_vars['block']->value['pos'] < 0) {?>menuLi_hidden<?php }?>" id="menu_<?php echo $_smarty_tpl->tpl_vars['block']->value['reg']->get_id();?>
">
      <p>
        <span>
          <label class="font-checkbox"><strong><?php echo l10n('Hide');?>
</strong><i class="icon-check"></i><input type="checkbox" name="hide_<?php echo $_smarty_tpl->tpl_vars['block']->value['reg']->get_id();?>
" <?php if ($_smarty_tpl->tpl_vars['block']->value['pos'] < 0) {?>checked="checked"<?php }?>></label>
        </span>

        <img src="<?php echo $_smarty_tpl->tpl_vars['themeconf']->value['admin_icon_dir'];?>
/cat_move.png" class="drag_button" style="display:none;" alt="<?php echo l10n('Drag to re-order');?>
" title="<?php echo l10n('Drag to re-order');?>
">
        <strong><?php echo l10n($_smarty_tpl->tpl_vars['block']->value['reg']->get_name());?>
</strong> (<?php echo $_smarty_tpl->tpl_vars['block']->value['reg']->get_id();?>
)
      </p>

<?php if ($_smarty_tpl->tpl_vars['block']->value['reg']->get_owner() != 'piwigo') {?>
      <p class="menuAuthor">
        <?php echo l10n('Author');?>
: <i><?php echo $_smarty_tpl->tpl_vars['block']->value['reg']->get_owner();?>
</i>
      </p>
<?php }?>
      <p class="menuPos">
        <label>
          <?php echo l10n('Position');?>
 :
          <input type="text" size="4" name="pos_<?php echo $_smarty_tpl->tpl_vars['block']->value['reg']->get_id();?>
" maxlength="4" value="<?php echo smarty_function_math(array('equation'=>"abs(pos)",'pos'=>$_smarty_tpl->tpl_vars['block']->value['pos']),$_smarty_tpl);?>
">
        </label>
      </p>
    </li>
<?php
$_smarty_tpl->tpl_vars['block'] = $__foreach_block_loop_0_saved_local_item;
}
if ($__foreach_block_loop_0_saved_item) {
$_smarty_tpl->tpl_vars['block'] = $__foreach_block_loop_0_saved_item;
}
?>
  </ul>
  <p class="menuSubmit">
    <button name="submit" type="submit" class="buttonLike">
      <i class="icon-floppy"></i> <?php echo l10n('Save Settings');?>

    </button>
  </p>

</form>
<?php }
}
