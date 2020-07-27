<?php
/* Smarty version 3.1.29, created on 2020-07-27 05:27:14
  from "/home4/sexydive/public_html/shop/themes/modus/template/menubar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f1eac026586b8_90622195',
  'file_dependency' => 
  array (
    '4cd80486890a9ca26eb153d6b0587d077ab4d0b3' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/modus/template/menubar.tpl',
      1 => 1585290230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1eac026586b8_90622195 ($_smarty_tpl) {
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array('require'=>'jquery')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		var h = jQuery("#theHeader div.banner").css("height");
		var d = jQuery("#menuSwitcher").css("padding-top");

		jQuery(document).ready(function(){
			if( jQuery('#theHeader div.banner').is(':visible') && jQuery("body").css("display") == "flex"){
				jQuery("#menuSwitcher").css("padding-top",parseInt(h)+parseInt(d));
			};
		});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>




<?php if (!empty($_smarty_tpl->tpl_vars['blocks']->value)) {?>
<aside id=menubar>
	<?php
$_from = $_smarty_tpl->tpl_vars['blocks']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_block_0_saved_item = isset($_smarty_tpl->tpl_vars['block']) ? $_smarty_tpl->tpl_vars['block'] : false;
$__foreach_block_0_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['block'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['block']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
$__foreach_block_0_saved_local_item = $_smarty_tpl->tpl_vars['block'];
if (($_smarty_tpl->tpl_vars['id']->value != "mbIdentification" && $_smarty_tpl->tpl_vars['id']->value != "mbMenu")) {?>
	<dl id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
>
<?php if ($_smarty_tpl->tpl_vars['id']->value == "mbLinks") {?>

<?php if (count($_smarty_tpl->tpl_vars['block']->value->data) == 1) {?>
<dt><a href="<?php echo $_smarty_tpl->tpl_vars['block']->value->data[0]['URL'];?>
"><?php echo $_smarty_tpl->tpl_vars['block']->value->data[0]['LABEL'];?>
</a></dt>
<?php } else { ?>
<dt><?php echo l10n('Links');?>
</dt>
<dd>
	<ul><?php
$_from = $_smarty_tpl->tpl_vars['block']->value->data;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_link_1_saved_item = isset($_smarty_tpl->tpl_vars['link']) ? $_smarty_tpl->tpl_vars['link'] : false;
$_smarty_tpl->tpl_vars['link'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['link']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
$__foreach_link_1_saved_local_item = $_smarty_tpl->tpl_vars['link'];
?><li> <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['URL'];?>
" class="external"<?php if (isset($_smarty_tpl->tpl_vars['link']->value['new_window'])) {?> onclick="window.open(this.href, '<?php echo $_smarty_tpl->tpl_vars['link']->value['new_window']['NAME'];?>
','<?php echo $_smarty_tpl->tpl_vars['link']->value['new_window']['FEATURES'];?>
'); return false;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['link']->value['LABEL'];?>
</a> </li><?php
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_1_saved_local_item;
}
if ($__foreach_link_1_saved_item) {
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_1_saved_item;
}
?></ul>
</dd>
<?php }?>

<?php } elseif ($_smarty_tpl->tpl_vars['id']->value == "mbTags") {?>

<dt><a><?php echo l10n('Related tags');?>
</a></dt>
<dd>
	<div id=menuTagCloud>
		<?php
$_from = $_smarty_tpl->tpl_vars['block']->value->data;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_tag_2_saved_item = isset($_smarty_tpl->tpl_vars['tag']) ? $_smarty_tpl->tpl_vars['tag'] : false;
$_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tag']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
$__foreach_tag_2_saved_local_item = $_smarty_tpl->tpl_vars['tag'];
?><a class="tagLevel<?php echo $_smarty_tpl->tpl_vars['tag']->value['level'];?>
" href=<?php if (isset($_smarty_tpl->tpl_vars['tag']->value['U_ADD'])) {?>"<?php echo $_smarty_tpl->tpl_vars['tag']->value['U_ADD'];?>
" title="<?php echo l10n_dec('%d photo is also linked to current tags','%d photos are also linked to current tags',$_smarty_tpl->tpl_vars['tag']->value['counter']);?>
" rel=nofollow>+<?php } else { ?>"<?php echo $_smarty_tpl->tpl_vars['tag']->value['URL'];?>
" title="<?php echo l10n('display photos linked to this tag');?>
"><?php }
echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a>
<?php
$_smarty_tpl->tpl_vars['tag'] = $__foreach_tag_2_saved_local_item;
}
if ($__foreach_tag_2_saved_item) {
$_smarty_tpl->tpl_vars['tag'] = $__foreach_tag_2_saved_item;
}
?>
	</div>
</dd>

<?php } elseif ($_smarty_tpl->tpl_vars['id']->value == "mbSpecials") {?>

<dt><a><?php echo l10n('Explore');?>
</a></dt>
<dd>
	<ul><?php
$_from = $_smarty_tpl->tpl_vars['block']->value->data;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_link_3_saved_item = isset($_smarty_tpl->tpl_vars['link']) ? $_smarty_tpl->tpl_vars['link'] : false;
$_smarty_tpl->tpl_vars['link'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['link']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
$__foreach_link_3_saved_local_item = $_smarty_tpl->tpl_vars['link'];
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['URL'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['link']->value['TITLE'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['link']->value['REL'])) {?> <?php echo $_smarty_tpl->tpl_vars['link']->value['REL'];
}?>><?php echo $_smarty_tpl->tpl_vars['link']->value['NAME'];?>
</a></li><?php
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_3_saved_local_item;
}
if ($__foreach_link_3_saved_item) {
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_3_saved_item;
}
if (isset($_smarty_tpl->tpl_vars['blocks']->value['mbMenu'])) {?><hr><?php
$_from = $_smarty_tpl->tpl_vars['blocks']->value['mbMenu']->data;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_link_4_saved_item = isset($_smarty_tpl->tpl_vars['link']) ? $_smarty_tpl->tpl_vars['link'] : false;
$_smarty_tpl->tpl_vars['link'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['link']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
$__foreach_link_4_saved_local_item = $_smarty_tpl->tpl_vars['link'];
if (is_array($_smarty_tpl->tpl_vars['link']->value)) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['URL'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['link']->value['TITLE'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['link']->value['REL'])) {?> <?php echo $_smarty_tpl->tpl_vars['link']->value['REL'];
}?>><?php echo $_smarty_tpl->tpl_vars['link']->value['NAME'];?>
</a><?php if (isset($_smarty_tpl->tpl_vars['link']->value['COUNTER'])) {?> (<?php echo $_smarty_tpl->tpl_vars['link']->value['COUNTER'];?>
)<?php }?></li><?php }
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_4_saved_local_item;
}
if ($__foreach_link_4_saved_item) {
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_4_saved_item;
}
}?></ul>
</dd>

<?php } else {
if (!empty($_smarty_tpl->tpl_vars['block']->value->template)) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['block']->value->template, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php } else { ?>
		<?php echo $_smarty_tpl->tpl_vars['block']->value->raw_content;?>

<?php }
}?>
	</dl>
	<?php }
$_smarty_tpl->tpl_vars['block'] = $__foreach_block_0_saved_local_item;
}
if ($__foreach_block_0_saved_item) {
$_smarty_tpl->tpl_vars['block'] = $__foreach_block_0_saved_item;
}
if ($__foreach_block_0_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_block_0_saved_key;
}
?>

<?php if (isset($_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['most_visited'])) {?>
<dl id="mbMostVisited"><dt><a href="<?php echo $_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['most_visited']['URL'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['most_visited']['TITLE'];?>
"><?php echo $_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['most_visited']['NAME'];?>
</a></dt></dl>
<?php }
if (isset($_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['best_rated'])) {?>
<dl id="mbBestRated"><dt><a href="<?php echo $_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['best_rated']['URL'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['best_rated']['TITLE'];?>
"><?php echo $_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['best_rated']['NAME'];?>
</a></dt></dl>
<?php }
if (isset($_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['recent_pics'])) {?>
<dl><dt><a href="<?php echo $_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['recent_pics']['URL'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['recent_pics']['TITLE'];?>
"><?php echo $_smarty_tpl->tpl_vars['blocks']->value['mbSpecials']->data['recent_pics']['NAME'];?>
</a></dt></dl>
<?php }?>
<dl style="float:none">
	<form style="margin:0;display:inline" action="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
qsearch.php" method=get id=quicksearch onsubmit="return this.q.value!='';">
		<input type="text" name=q id=qsearchInput placeholder="<?php echo htmlspecialchars(l10n('Search'), ENT_QUOTES, 'UTF-8', true);?>
..." <?php if (!empty($_smarty_tpl->tpl_vars['QUERY_SEARCH']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['QUERY_SEARCH']->value;?>
"<?php }?>>
	</form>
</dl>
<?php if (isset($_smarty_tpl->tpl_vars['U_LOGIN']->value)) {?>
<dl style="float:right;margin-top:3px">
	<dt style="font-size:100%;font-weight:normal;padding-left:15px"><a href="<?php echo $_smarty_tpl->tpl_vars['U_LOGIN']->value;?>
" rel=nofollow><?php echo l10n('Login');?>
</a></dt>
	<dd style="right:0">
		<ul>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_LOGIN']->value;?>
" rel="nofollow"><?php echo l10n('Login');?>
</a></li>
<?php if (isset($_smarty_tpl->tpl_vars['U_REGISTER']->value)) {?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_REGISTER']->value;?>
" title="<?php echo l10n('Create a new account');?>
" rel="nofollow"><?php echo l10n('Register');?>
</a></li>
<?php }?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_LOST_PASSWORD']->value;?>
" title="<?php echo l10n('Forgot your password?');?>
" rel="nofollow"><?php echo l10n('Forgot your password?');?>
</a></li>
		</ul>
<form method=post action="<?php echo $_smarty_tpl->tpl_vars['U_LOGIN']->value;?>
" id=quickconnect> <fieldset> <legend><?php echo l10n('Quick connect');?>
</legend> <p> <label for=userX><?php echo l10n('Username');?>
</label><br> <input type=text name=username id=userX value="" style="width:99%"> </p> <p><label for=passX><?php echo l10n('Password');?>
</label><br> <input type=password name=password id=passX style="width:99%"> </p><?php if ($_smarty_tpl->tpl_vars['AUTHORIZE_REMEMBERING']->value) {?><p><label><?php echo l10n('Auto login');?>
&nbsp;<input type=checkbox name=remember_me value=1> </label></p><?php }?><p> <input type=hidden name=redirect value="<?php echo urlencode($_SERVER['REQUEST_URI']);?>
"> <input type=submit name=login value="<?php echo l10n('Submit');?>
"> </p> </fieldset> </form>
	</dd>
</dl>
<?php }
if (isset($_smarty_tpl->tpl_vars['U_LOGOUT']->value)) {?>
<dl style="float:right;margin-top:3px">
	<dt style="font-size:100%;font-weight:normal">
	<?php if (isset($_smarty_tpl->tpl_vars['USERNAME']->value)) {
echo l10n('Hello');?>
 <?php if (isset($_smarty_tpl->tpl_vars['U_PROFILE']->value)) {?><a href="<?php echo $_smarty_tpl->tpl_vars['U_PROFILE']->value;?>
"><?php }
echo $_smarty_tpl->tpl_vars['USERNAME']->value;
if (isset($_smarty_tpl->tpl_vars['U_PROFILE']->value)) {?></a><?php }?> ! &nbsp;<?php }?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['U_LOGOUT']->value;?>
"><?php echo l10n('Logout');?>
</a>
<?php if (isset($_smarty_tpl->tpl_vars['U_PROFILE']->value)) {?>
	<a id="mbProfile" href="<?php echo $_smarty_tpl->tpl_vars['U_PROFILE']->value;?>
" title="<?php echo l10n('customize the appareance of the gallery');?>
"><?php echo l10n('Customize');?>
</a>
<?php }
if (isset($_smarty_tpl->tpl_vars['U_ADMIN']->value)) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['U_ADMIN']->value;?>
" title="<?php echo l10n('available for administrators only');?>
">Admin</a>
<?php }?>
	</dt>
</dl>
<?php }?>

</aside>
<?php }?>
<a id="menuSwitcher" class="pwg-button" title="<?php echo l10n('Menu');?>
"><span class="pwg-icon pwg-icon-menu"></span></a>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'zzz.d1.menu','load'=>'async','path'=>"themes/".((string)$_smarty_tpl->tpl_vars['themeconf']->value['id'])."/js/menuh.js",'require'=>"jquery",'version'=>0),$_smarty_tpl);?>

<?php }
}
