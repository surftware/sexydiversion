<?php
/* Smarty version 3.1.29, created on 2020-07-27 05:31:18
  from "/home4/sexydive/public_html/shop/themes/default/template/comments.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f1eacf6786451_68074618',
  'file_dependency' => 
  array (
    '1d320cd3d962a815f0c29c31f25872e7962dab8c' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/default/template/comments.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:infos_errors.tpl' => 1,
  ),
),false)) {
function content_5f1eacf6786451_68074618 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/home4/sexydive/public_html/shop/include/smarty/libs/plugins/function.html_options.php';
if (isset($_smarty_tpl->tpl_vars['MENUBAR']->value)) {
echo $_smarty_tpl->tpl_vars['MENUBAR']->value;
}?>
<div id="content" class="content<?php if (isset($_smarty_tpl->tpl_vars['MENUBAR']->value)) {?> contentWithMenu<?php }?>">

<div class="titrePage">
	<ul class="categoryActions">
	</ul>
	<h2><a href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
"><?php echo l10n('Home');?>
</a><?php echo $_smarty_tpl->tpl_vars['LEVEL_SEPARATOR']->value;
echo l10n('User comments');?>
</h2>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:infos_errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form class="filter" action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="get">

  <fieldset>
    <legend><?php echo l10n('Filter');?>
</legend>

		<ul>
			<li>
				<label><?php echo l10n('Keyword');?>
</label>
			</li>
			<li>
				<input type="text" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['F_KEYWORD']->value;?>
">
			</li>
		</ul>

		<ul>
			<li>
				<label><?php echo l10n('Author');?>
</label>
			</li>
			<li>
				<input type="text" name="author" value="<?php echo $_smarty_tpl->tpl_vars['F_AUTHOR']->value;?>
">
			</li>
		</ul>

		<ul>
			<li>
				<label><?php echo l10n('Album');?>
</label>
			</li>
			<li>
				<select name="cat">
					<option value="0">------------</option>
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categories']->value,'selected'=>$_smarty_tpl->tpl_vars['categories_selected']->value),$_smarty_tpl);?>

				</select>
			</li>
		</ul>

		<ul>
			<li>
				<label><?php echo l10n('Since');?>
</label>
			</li>
			<li>
				<select name="since">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['since_options']->value,'selected'=>$_smarty_tpl->tpl_vars['since_options_selected']->value),$_smarty_tpl);?>

				</select>
			</li>
		</ul>

  </fieldset>

  <fieldset>

    <legend><?php echo l10n('Display');?>
</legend>

		<ul>
			<li>
				<label><?php echo l10n('Sort by');?>
</label>
			</li>
			<li>
				<select name="sort_by">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['sort_by_options']->value,'selected'=>$_smarty_tpl->tpl_vars['sort_by_options_selected']->value),$_smarty_tpl);?>

				</select>
			</li>
		</ul>

		<ul>
			<li>
				<label><?php echo l10n('Sort order');?>
</label>
			</li>
			<li>
				<select name="sort_order">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['sort_order_options']->value,'selected'=>$_smarty_tpl->tpl_vars['sort_order_options_selected']->value),$_smarty_tpl);?>

				</select>
			</li>
		</ul>

		<ul>
			<li>
				<label><?php echo l10n('Number of items');?>
</label>
			</li>
			<li>
				<select name="items_number">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['item_number_options']->value,'selected'=>$_smarty_tpl->tpl_vars['item_number_options_selected']->value),$_smarty_tpl);?>

				</select>
			</li>
		</ul>

  </fieldset>

  <p><input type="submit" value="<?php echo l10n('Filter and display');?>
"></p>

</form>

<?php if (!empty($_smarty_tpl->tpl_vars['navbar']->value)) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['get_extent'][0][0]->get_extent('navigation_bar.tpl','navbar'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>

<?php if (isset($_smarty_tpl->tpl_vars['COMMENT_LIST']->value)) {?>
<div id="comments">
	<?php echo $_smarty_tpl->tpl_vars['COMMENT_LIST']->value;?>

</div>
<?php }?>

</div> <!-- content -->

<?php }
}
