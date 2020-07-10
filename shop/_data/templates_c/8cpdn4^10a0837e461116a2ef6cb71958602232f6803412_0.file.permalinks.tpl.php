<?php
/* Smarty version 3.1.29, created on 2020-06-27 04:25:49
  from "/home4/sexydive/public_html/shop/admin/themes/default/template/permalinks.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ef7109d4141a1_18158100',
  'file_dependency' => 
  array (
    '10a0837e461116a2ef6cb71958602232f6803412' => 
    array (
      0 => '/home4/sexydive/public_html/shop/admin/themes/default/template/permalinks.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef7109d4141a1_18158100 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/home4/sexydive/public_html/shop/include/smarty/libs/plugins/function.html_options.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array('require'=>'jquery.ui.sortable')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.ui.sortable'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

jQuery(document).ready(function(){
  jQuery("#addPermalinkOpen").click(function(){
    jQuery("#addPermalink").show();
    jQuery("#showAddPermalink").hide();
  });

  jQuery("#addPermalinkClose").click(function(){
    jQuery("#addPermalink").hide();
    jQuery("#showAddPermalink").show();
  });
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.ui.sortable'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>



<style>
#showAddPermalink {text-align:left;margin-left:1em;margin-top:0;}
form fieldset p {margin:0 0 1em 0;}
form fieldset p.actionButtons {margin-bottom:0}
</style>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('html_style', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

[name="permalink"] {
  width : 100%;
  max-width : 600px;
}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div class="titrePage">
  <h2><?php echo l10n('Permalinks');?>
</h2>
</div>

<p id="showAddPermalink"><a href="#" id="addPermalinkOpen"><?php echo l10n('Add/delete a permalink');?>
</a></p>

<form method="post" action="" id="addPermalink" style="display:none">
<fieldset>
  <legend><?php echo l10n('Add/delete a permalink');?>
</legend>
  <p>
    <strong><?php echo l10n('Album');?>
</strong>
    <br>
    <select name="cat_id">
      <option value="0">------</option>
      <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categories']->value,'selected'=>$_smarty_tpl->tpl_vars['categories_selected']->value),$_smarty_tpl);?>

    </select>
  </p>

  <p>
    <strong><?php echo l10n('Permalink');?>
</strong>
    <br><input name="permalink">
  </p>

  <p>
    <label><input type="checkbox" name="save" checked="checked"> <strong><?php echo l10n('Save to permalink history');?>
</strong></label>
  </p>

  <p class="actionButtons">
    <input type="submit" class="submit" name="set_permalink" value="<?php echo l10n('Submit');?>
">
    <a href="#" id="addPermalinkClose"><?php echo l10n('Cancel');?>
</a>
  </p>
</fieldset>
<input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
">
</form>

<fieldset>
  <legend><?php echo l10n('Permalinks');?>
</legend>
<table class="table2" style="margin:0">
	<tr class="throw">
		<td>Id <?php echo $_smarty_tpl->tpl_vars['SORT_ID']->value;?>
</td>
		<td><?php echo l10n('Album');?>
 <?php echo $_smarty_tpl->tpl_vars['SORT_NAME']->value;?>
</td>
		<td><?php echo l10n('Permalink');?>
 <?php echo $_smarty_tpl->tpl_vars['SORT_PERMALINK']->value;?>
</td>
	</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['permalinks']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_permalink_loop_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_permalink_loop']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_permalink_loop'] : false;
$__foreach_permalink_loop_0_saved_item = isset($_smarty_tpl->tpl_vars['permalink']) ? $_smarty_tpl->tpl_vars['permalink'] : false;
$_smarty_tpl->tpl_vars['permalink'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_permalink_loop'] = new Smarty_Variable(array('index' => -1));
$_smarty_tpl->tpl_vars['permalink']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['permalink']->value) {
$_smarty_tpl->tpl_vars['permalink']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_permalink_loop']->value['index']++;
$__foreach_permalink_loop_0_saved_local_item = $_smarty_tpl->tpl_vars['permalink'];
?>
	<tr class="<?php if ((1 & (isset($_smarty_tpl->tpl_vars['__smarty_foreach_permalink_loop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_permalink_loop']->value['index'] : null))) {?>row1<?php } else { ?>row2<?php }?>" style="line-height:1.5em;">
		<td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['permalink']->value['id'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['permalink']->value['name'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['permalink']->value['permalink'];?>
</td>
	</tr>
<?php
$_smarty_tpl->tpl_vars['permalink'] = $__foreach_permalink_loop_0_saved_local_item;
}
if ($__foreach_permalink_loop_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_permalink_loop'] = $__foreach_permalink_loop_0_saved;
}
if ($__foreach_permalink_loop_0_saved_item) {
$_smarty_tpl->tpl_vars['permalink'] = $__foreach_permalink_loop_0_saved_item;
}
?>
</table>
</fieldset>

<fieldset>
  <legend><?php echo l10n('Permalink history');?>
 <a name="old_permalinks"></a></legend>
<table class="table2" style="margin:0">
	<tr class="throw">
		<td>Id <?php echo $_smarty_tpl->tpl_vars['SORT_OLD_CAT_ID']->value;?>
</td>
		<td><?php echo l10n('Album');?>
</td>
		<td><?php echo l10n('Permalink');?>
 <?php echo $_smarty_tpl->tpl_vars['SORT_OLD_PERMALINK']->value;?>
</td>
		<td><?php echo l10n('Deleted on');?>
 <?php echo $_smarty_tpl->tpl_vars['SORT_OLD_DATE_DELETED']->value;?>
</td>
		<td><?php echo l10n('Last hit');?>
 <?php echo $_smarty_tpl->tpl_vars['SORT_OLD_LAST_HIT']->value;?>
</td>
		<td><?php echo l10n('Hit');?>
 <?php echo $_smarty_tpl->tpl_vars['SORT_OLD_HIT']->value;?>
</td>
		<td style="width:5px;"></td>
	</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['deleted_permalinks']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_permalink_1_saved_item = isset($_smarty_tpl->tpl_vars['permalink']) ? $_smarty_tpl->tpl_vars['permalink'] : false;
$_smarty_tpl->tpl_vars['permalink'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['permalink']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['permalink']->value) {
$_smarty_tpl->tpl_vars['permalink']->_loop = true;
$__foreach_permalink_1_saved_local_item = $_smarty_tpl->tpl_vars['permalink'];
?>
	<tr style="line-height:1.5em;">
		<td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['permalink']->value['cat_id'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['permalink']->value['name'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['permalink']->value['permalink'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['permalink']->value['date_deleted'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['permalink']->value['last_hit'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['permalink']->value['hit'];?>
</td>
		<td><a href="<?php echo $_smarty_tpl->tpl_vars['permalink']->value['U_DELETE'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['admin_icon_dir'];?>
/delete.png" alt="[<?php echo l10n('Delete');?>
]"></a></td>
	</tr>
<?php
$_smarty_tpl->tpl_vars['permalink'] = $__foreach_permalink_1_saved_local_item;
}
if ($__foreach_permalink_1_saved_item) {
$_smarty_tpl->tpl_vars['permalink'] = $__foreach_permalink_1_saved_item;
}
?>
</table>
</fieldset>
<?php }
}
