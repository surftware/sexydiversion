<?php
/* Smarty version 3.1.29, created on 2020-07-27 05:27:10
  from "/home4/sexydive/public_html/shop/admin/themes/default/template/admin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f1eabfe57f789_94548214',
  'file_dependency' => 
  array (
    '7376bdf467d05082d9a6c3c7cff7d0d2d7bc6b9c' => 
    array (
      0 => '/home4/sexydive/public_html/shop/admin/themes/default/template/admin.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/colorbox.inc.tpl' => 1,
  ),
),false)) {
function content_5f1eabfe57f789_94548214 ($_smarty_tpl) {
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

jQuery.fn.lightAccordion = function(options) {
  var settings = $.extend({
    header: 'dt',
    content: 'dd',
    active: 0
  }, options);
  
  return this.each(function() {
    var self = jQuery(this);
    
    var contents = self.find(settings.content),
        headers = self.find(settings.header);
    
    contents.not(contents[settings.active]).hide();
  
    self.on('click', settings.header, function() {
        var content = jQuery(this).next(settings.content);
        content.slideDown();
        contents.not(content).slideUp();
    });
  });
};

$('#menubar').lightAccordion({
  active: <?php echo $_smarty_tpl->tpl_vars['ACTIVE_MENU']->value;?>

});

/* in case we have several infos/errors/warnings display bullets */
jQuery(document).ready(function() {
  var eiw = ["infos","erros","warnings", "messages"];

  for (var i = 0; i < eiw.length; i++) {
    var boxType = eiw[i];

    if (jQuery("."+boxType+" ul li").length > 1) {
      jQuery("."+boxType+" ul li").css("list-style-type", "square");
      jQuery("."+boxType+" .eiw-icon").css("margin-right", "20px");
    }
  }

  if (jQuery('h2').length > 0) {
    jQuery('h1').html(jQuery('h2').html());
  }
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div id="menubar">
  <div id="adminHome"><a href="<?php echo $_smarty_tpl->tpl_vars['U_ADMIN']->value;?>
"><i class="icon-television"></i> <?php echo l10n('Dashboard');?>
</a></div>

	<dl>
		<dt><i class="icon-picture"> </i><span><?php echo l10n('Photos');?>
&nbsp;</span><i class="icon-down-open open-menu"></i></dt>
		<dd>
			<ul>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_ADD_PHOTOS']->value;?>
"><i class="icon-plus-circled"></i><?php echo l10n('Add');?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_RATING']->value;?>
"><i class="icon-star"></i><?php echo l10n('Rating');?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_TAGS']->value;?>
"><i class="icon-tags"></i><?php echo l10n('Tags');?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_RECENT_SET']->value;?>
"><i class="icon-clock"></i><?php echo l10n('Recent photos');?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_BATCH']->value;?>
"><i class="icon-pencil"></i><?php echo l10n('Batch Manager');?>
</a></li>
<?php if ($_smarty_tpl->tpl_vars['NB_PHOTOS_IN_CADDIE']->value > 0) {?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_CADDIE']->value;?>
"><i class="icon-flag"></i><?php echo l10n('Caddie');?>
<span class="adminMenubarCounter"><?php echo $_smarty_tpl->tpl_vars['NB_PHOTOS_IN_CADDIE']->value;?>
</span></a></li>
<?php }
if ($_smarty_tpl->tpl_vars['NB_ORPHANS']->value > 0) {?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_ORPHANS']->value;?>
"><i class="icon-heart-broken"></i><?php echo l10n('Orphans');?>
<span class="adminMenubarCounter"><?php echo $_smarty_tpl->tpl_vars['NB_ORPHANS']->value;?>
</span></a></li>
<?php }?>
			</ul>
		</dd>
  </dl>
  <dl>
		<dt><i class="icon-sitemap"> </i><span><?php echo l10n('Albums');?>
&nbsp;</span><i class="icon-down-open open-menu"></i></dt>
    <dd>
      <ul>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_CATEGORIES']->value;?>
"><i class="icon-folder-open"></i><?php echo l10n('Manage');?>
</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_CAT_OPTIONS']->value;?>
"><i class="icon-pencil"></i><?php echo l10n('Properties');?>
</a></li>
      </ul>
    </dd>
  </dl>
  <dl>
		<dt><i class="icon-users"> </i><span><?php echo l10n('Users');?>
&nbsp;</span><i class="icon-down-open open-menu"></i></dt>
		<dd>
      <ul>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_USERS']->value;?>
"><i class="icon-user-add"></i><?php echo l10n('Manage');?>
</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_GROUPS']->value;?>
"><i class="icon-group"></i><?php echo l10n('Groups');?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_NOTIFICATION_BY_MAIL']->value;?>
"><i class="icon-mail-1"></i><?php echo l10n('Notification');?>
</a></li>
      </ul>
		</dd>
  </dl>
  <dl>
		<dt><i class="icon-puzzle"> </i><span><?php echo l10n('Plugins');?>
&nbsp;</span><i class="icon-down-open open-menu"></i></dt>
		<dd>
      <ul>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_PLUGINS']->value;?>
"><i class="icon-equalizer"></i><?php echo l10n('Manage');?>
</a></li>
      </ul>
<?php if (!empty($_smarty_tpl->tpl_vars['plugin_menu_items']->value)) {?>
      <div id="pluginsMenuSeparator"></div>
      <ul class="scroll">
<?php
$_from = $_smarty_tpl->tpl_vars['plugin_menu_items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_menu_item_0_saved_item = isset($_smarty_tpl->tpl_vars['menu_item']) ? $_smarty_tpl->tpl_vars['menu_item'] : false;
$_smarty_tpl->tpl_vars['menu_item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['menu_item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['menu_item']->value) {
$_smarty_tpl->tpl_vars['menu_item']->_loop = true;
$__foreach_menu_item_0_saved_local_item = $_smarty_tpl->tpl_vars['menu_item'];
?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['menu_item']->value['URL'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu_item']->value['NAME'];?>
</a></li>
<?php
$_smarty_tpl->tpl_vars['menu_item'] = $__foreach_menu_item_0_saved_local_item;
}
if ($__foreach_menu_item_0_saved_item) {
$_smarty_tpl->tpl_vars['menu_item'] = $__foreach_menu_item_0_saved_item;
}
?>
      </ul>
<?php }?>
		</dd>
  </dl>
  <dl>
		<dt><i class="icon-wrench"> </i><span><?php echo l10n('Tools');?>
&nbsp;</span><i class="icon-down-open open-menu"></i></dt>
		<dd>
      <ul>
<?php if ($_smarty_tpl->tpl_vars['ENABLE_SYNCHRONIZATION']->value) {?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_CAT_UPDATE']->value;?>
"><i class="icon-exchange"></i><?php echo l10n('Synchronize');?>
</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_SITE_MANAGER']->value;?>
"><i class="icon-flow-branch"></i><?php echo l10n('Site manager');?>
</a></li>
<?php }?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_HISTORY_STAT']->value;?>
"><i class="icon-signal"></i><?php echo l10n('History');?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_MAINTENANCE']->value;?>
"><i class="icon-tools"></i><?php echo l10n('Maintenance');?>
</a></li>
<?php if (isset($_smarty_tpl->tpl_vars['U_COMMENTS']->value)) {?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_COMMENTS']->value;?>
"><i class="icon-chat"></i><?php echo l10n('Comments');?>

<?php if ($_smarty_tpl->tpl_vars['NB_PENDING_COMMENTS']->value > 0) {?>
          <span class="adminMenubarCounter" title="<?php echo l10n('%d waiting for validation',$_smarty_tpl->tpl_vars['NB_PENDING_COMMENTS']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['NB_PENDING_COMMENTS']->value;?>
</span>
        <?php }?></a></li>
<?php }?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_UPDATES']->value;?>
"><i class="icon-arrows-cw"></i><?php echo l10n('Updates');?>
</a></li>
      </ul>
		</dd>
  </dl>
  <dl>
		<dt><i class="icon-cog"> </i><span><?php echo l10n('Configuration');?>
&nbsp;</span><i class="icon-down-open open-menu"></i></dt>
		<dd>
      <ul>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_CONFIG_GENERAL']->value;?>
"><i class="icon-cog-alt"></i><?php echo l10n('Options');?>
</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_CONFIG_MENUBAR']->value;?>
"><i class="icon-menu"></i><?php echo l10n('Menu Management');?>
</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_CONFIG_EXTENTS']->value;?>
"><i class="icon-code"></i><?php echo l10n('Templates');?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['U_CONFIG_LANGUAGES']->value;?>
"><i class="icon-language"></i><?php echo l10n('Languages');?>
</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_CONFIG_THEMES']->value;?>
"><i class="icon-brush"></i><?php echo l10n('Themes');?>
</a></li>
      </ul>
    </dd>
  </dl>
</div> <!-- menubar -->

<div id="content" class="content">

  <h1><?php echo $_smarty_tpl->tpl_vars['ADMIN_PAGE_TITLE']->value;?>
</h1>

<?php if (isset($_smarty_tpl->tpl_vars['TABSHEET']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['TABSHEET']->value;?>

<?php }
if (isset($_smarty_tpl->tpl_vars['U_HELP']->value)) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:include/colorbox.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  jQuery('.help-popin').colorbox({ width:"500px" });
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

  <ul class="HelpActions">
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['U_HELP']->value;?>
&amp;output=content_only" title="<?php echo l10n('Help');?>
" class="help-popin"><span class="icon-help-circled"></span></a></li>
  </ul>
<?php }?>
<div class="eiw">
<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="errors">
    <i class="eiw-icon icon-cancel"></i>
    <ul>
<?php
$_from = $_smarty_tpl->tpl_vars['errors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_error_1_saved_item = isset($_smarty_tpl->tpl_vars['error']) ? $_smarty_tpl->tpl_vars['error'] : false;
$_smarty_tpl->tpl_vars['error'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['error']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
$__foreach_error_1_saved_local_item = $_smarty_tpl->tpl_vars['error'];
?>
      <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
<?php
$_smarty_tpl->tpl_vars['error'] = $__foreach_error_1_saved_local_item;
}
if ($__foreach_error_1_saved_item) {
$_smarty_tpl->tpl_vars['error'] = $__foreach_error_1_saved_item;
}
?>
    </ul>
  </div>
<?php }
if (isset($_smarty_tpl->tpl_vars['infos']->value)) {?>
  <div class="infos">
    <i class="eiw-icon icon-ok"></i>
    <ul>
<?php
$_from = $_smarty_tpl->tpl_vars['infos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_info_2_saved_item = isset($_smarty_tpl->tpl_vars['info']) ? $_smarty_tpl->tpl_vars['info'] : false;
$_smarty_tpl->tpl_vars['info'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['info']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
$__foreach_info_2_saved_local_item = $_smarty_tpl->tpl_vars['info'];
?>
      <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
<?php
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_2_saved_local_item;
}
if ($__foreach_info_2_saved_item) {
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_2_saved_item;
}
?>
    </ul>
  </div>
<?php }
if (isset($_smarty_tpl->tpl_vars['warnings']->value)) {?>
  <div class="warnings">
    <i class="eiw-icon icon-attention"></i>
    <ul>
<?php
$_from = $_smarty_tpl->tpl_vars['warnings']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_warning_3_saved_item = isset($_smarty_tpl->tpl_vars['warning']) ? $_smarty_tpl->tpl_vars['warning'] : false;
$_smarty_tpl->tpl_vars['warning'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['warning']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['warning']->value) {
$_smarty_tpl->tpl_vars['warning']->_loop = true;
$__foreach_warning_3_saved_local_item = $_smarty_tpl->tpl_vars['warning'];
?>
      <li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
<?php
$_smarty_tpl->tpl_vars['warning'] = $__foreach_warning_3_saved_local_item;
}
if ($__foreach_warning_3_saved_item) {
$_smarty_tpl->tpl_vars['warning'] = $__foreach_warning_3_saved_item;
}
?>
    </ul>
  </div>
<?php }
if (isset($_smarty_tpl->tpl_vars['messages']->value)) {?>
  <div class="messages">
    <i class="eiw-icon icon-info-circled-1"></i>
    <ul>
<?php
$_from = $_smarty_tpl->tpl_vars['messages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_message_4_saved_item = isset($_smarty_tpl->tpl_vars['message']) ? $_smarty_tpl->tpl_vars['message'] : false;
$_smarty_tpl->tpl_vars['message'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['message']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
$__foreach_message_4_saved_local_item = $_smarty_tpl->tpl_vars['message'];
?>
      <li><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</li>
<?php
$_smarty_tpl->tpl_vars['message'] = $__foreach_message_4_saved_local_item;
}
if ($__foreach_message_4_saved_item) {
$_smarty_tpl->tpl_vars['message'] = $__foreach_message_4_saved_item;
}
?>
    </ul>
  </div>
<?php }?>
</div> 

  <?php echo $_smarty_tpl->tpl_vars['ADMIN_CONTENT']->value;?>

</div>
<?php }
}
