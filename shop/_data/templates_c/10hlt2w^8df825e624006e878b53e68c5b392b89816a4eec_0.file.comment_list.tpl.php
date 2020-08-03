<?php
/* Smarty version 3.1.29, created on 2020-07-27 05:28:07
  from "/home4/sexydive/public_html/shop/themes/modus/template/comment_list.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f1eac37245cb4_76719725',
  'file_dependency' => 
  array (
    '8df825e624006e878b53e68c5b392b89816a4eec' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/modus/template/comment_list.tpl',
      1 => 1585290230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1eac37245cb4_76719725 ($_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['comment_derivative_params']->value)) {
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('html_style', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
.commentElement .illustration{width:<?php echo $_smarty_tpl->tpl_vars['comment_derivative_params']->value->max_width()+5;?>
px}.content .commentElement .description{min-height:<?php echo $_smarty_tpl->tpl_vars['comment_derivative_params']->value->max_height()+5;?>
px}@media <?php echo modus_css_resolution(array('min'=>1.3),$_smarty_tpl);?>
{.illustration IMG{max-width:<?php echo intval(($_smarty_tpl->tpl_vars['comment_derivative_params']->value->max_width()/2));?>
px;max-height:<?php echo intval(($_smarty_tpl->tpl_vars['comment_derivative_params']->value->max_height()/2));?>
px;}.commentElement .illustration{width:<?php echo intval(($_smarty_tpl->tpl_vars['comment_derivative_params']->value->max_width()/2+5));?>
px}.content .commentElement .description{min-height:<?php echo intval(($_smarty_tpl->tpl_vars['comment_derivative_params']->value->max_height()/2+5));?>
px}}<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }?>
<ul class="commentsList">
<?php
$_from = $_smarty_tpl->tpl_vars['comments']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_comment_loop_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_comment_loop']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_comment_loop'] : false;
$__foreach_comment_loop_0_saved_item = isset($_smarty_tpl->tpl_vars['comment']) ? $_smarty_tpl->tpl_vars['comment'] : false;
$_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_comment_loop'] = new Smarty_Variable(array('index' => -1));
$_smarty_tpl->tpl_vars['comment']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_comment_loop']->value['index']++;
$__foreach_comment_loop_0_saved_local_item = $_smarty_tpl->tpl_vars['comment'];
?>
<li class="commentElement <?php if ((1 & (isset($_smarty_tpl->tpl_vars['__smarty_foreach_comment_loop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_comment_loop']->value['index'] : null))) {?>odd<?php } else { ?>even<?php }?>">
<?php if (isset($_smarty_tpl->tpl_vars['comment']->value['src_image'])) {
if (isset($_smarty_tpl->tpl_vars['comment_derivative_params']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['derivative'] = new Smarty_Variable($_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['comment_derivative_params']->value,$_smarty_tpl->tpl_vars['comment']->value['src_image']), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'derivative', 0);
} else { ?>
	<?php $_smarty_tpl->tpl_vars['derivative'] = new Smarty_Variable($_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params']->value,$_smarty_tpl->tpl_vars['comment']->value['src_image']), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'derivative', 0);
}?>
	<div class="illustration">
		<a href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['U_PICTURE'];?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['comment']->value['ALT'];?>
">
		</a>
	</div>
<?php }?>
	<div class="description">
<?php if (isset($_smarty_tpl->tpl_vars['comment']->value['U_DELETE']) || isset($_smarty_tpl->tpl_vars['comment']->value['U_VALIDATE']) || isset($_smarty_tpl->tpl_vars['comment']->value['U_EDIT'])) {?>
		<div class="actions" style="float:right;font-size:90%">
<?php if (isset($_smarty_tpl->tpl_vars['comment']->value['U_DELETE'])) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['U_DELETE'];?>
" onclick="return confirm('<?php echo strtr(l10n('Are you sure?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');">
				<?php echo l10n('Delete');?>

			</a><?php if (isset($_smarty_tpl->tpl_vars['comment']->value['U_VALIDATE']) || isset($_smarty_tpl->tpl_vars['comment']->value['U_EDIT']) || isset($_smarty_tpl->tpl_vars['comment']->value['U_CANCEL'])) {?> | <?php }
}
if (isset($_smarty_tpl->tpl_vars['comment']->value['U_CANCEL'])) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['U_CANCEL'];?>
">
				<?php echo l10n('Cancel');?>

			</a><?php if (isset($_smarty_tpl->tpl_vars['comment']->value['U_VALIDATE'])) {?> | <?php }
}
if (isset($_smarty_tpl->tpl_vars['comment']->value['U_EDIT']) && !isset($_smarty_tpl->tpl_vars['comment']->value['IN_EDIT'])) {?>
			<a class="editComment" href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['U_EDIT'];?>
#edit_comment">
				<?php echo l10n('Edit');?>

			</a><?php if (isset($_smarty_tpl->tpl_vars['comment']->value['U_VALIDATE'])) {?> | <?php }
}
if (isset($_smarty_tpl->tpl_vars['comment']->value['U_VALIDATE'])) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['U_VALIDATE'];?>
">
				<?php echo l10n('Validate');?>

			</a>
		<?php }?>&nbsp;
		</div>
<?php }?>
		<span class="commentAuthor"><?php if ($_smarty_tpl->tpl_vars['comment']->value['WEBSITE_URL']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['comment']->value['WEBSITE_URL'];?>
" class="external" target="_blank" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['comment']->value['AUTHOR'];?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['comment']->value['AUTHOR'];
}?></span>
			<?php if (isset($_smarty_tpl->tpl_vars['comment']->value['EMAIL'])) {?>- <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['comment']->value['EMAIL'];?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value['EMAIL'];?>
</a><?php }?>
			- <span class="commentDate"><?php echo $_smarty_tpl->tpl_vars['comment']->value['DATE'];?>
</span>
<?php if (isset($_smarty_tpl->tpl_vars['comment']->value['IN_EDIT'])) {?>
		<a name="edit_comment"></a>
		<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['comment']->value['U_EDIT'];?>
" id="editComment">
			<p><label for="contenteditid"><?php echo l10n('Edit a comment');?>
 :</label></p>
			<p><textarea name="content" id="contenteditid" rows="5" cols="80"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['CONTENT'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></p>
			<p><label for="website_url"><?php echo l10n('Website');?>
 :</label></p>
			<p><input type="text" name="website_url" id="website_url" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value['WEBSITE_URL'];?>
" size="40"></p>
			<p><input type="hidden" name="key" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value['KEY'];?>
">
				<input type="hidden" name="pwg_token" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value['PWG_TOKEN'];?>
">
				<input type="hidden" name="image_id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['comment']->value['IMAGE_ID'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['current']->value['id'] : $tmp);?>
">
				<input type="submit" value="<?php echo l10n('Submit');?>
">
			</p>
		</form>
<?php } else { ?>
		<blockquote><div><?php echo $_smarty_tpl->tpl_vars['comment']->value['CONTENT'];?>
</div></blockquote>
<?php }?>
	</div>
</li>
<?php
$_smarty_tpl->tpl_vars['comment'] = $__foreach_comment_loop_0_saved_local_item;
}
if ($__foreach_comment_loop_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_comment_loop'] = $__foreach_comment_loop_0_saved;
}
if ($__foreach_comment_loop_0_saved_item) {
$_smarty_tpl->tpl_vars['comment'] = $__foreach_comment_loop_0_saved_item;
}
?>
</ul>
<?php }
}
