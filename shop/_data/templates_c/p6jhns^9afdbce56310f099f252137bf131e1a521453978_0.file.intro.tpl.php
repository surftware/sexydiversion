<?php
/* Smarty version 3.1.29, created on 2020-06-27 04:07:02
  from "/home4/sexydive/public_html/shop/admin/themes/default/template/intro.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ef70c36c98a30_43027861',
  'file_dependency' => 
  array (
    '9afdbce56310f099f252137bf131e1a521453978' => 
    array (
      0 => '/home4/sexydive/public_html/shop/admin/themes/default/template/intro.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/colorbox.inc.tpl' => 1,
  ),
),false)) {
function content_5ef70c36c98a30_43027861 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:include/colorbox.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.cluetip','load'=>'async','require'=>'jquery','path'=>'themes/default/js/plugins/jquery.cluetip.js'),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array('require'=>'jquery.cluetip')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.cluetip'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

var piwigo_need_update_msg = '<a href="admin.php?page=updates"><?php echo strtr(l10n('A new version of Piwigo is available.'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
 <i class="icon-right"></i></a>';
var ext_need_update_msg = '<a href="admin.php?page=updates&amp;tab=ext"><?php echo strtr(l10n('Some upgrades are available for extensions.'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
 <i class="icon-right"></i></a>';


jQuery().ready(function(){
	jQuery('.cluetip').cluetip({
		width: 300,
		splitTitle: '|',
		positionBy: 'bottomTop'
	});
  jQuery.ajax({
    type: 'GET',
    url: 'ws.php',
    dataType: 'json',
    data: { method: 'pwg.extensions.checkUpdates', format: 'json' },
    timeout: 5000,
    success: function (data) {
      if (data['stat'] != 'ok')
        return;
      piwigo_update = data['result']['piwigo_need_update'];
      ext_update = data['result']['ext_need_update']
      if ((piwigo_update || ext_update) && !jQuery(".warnings").is('div'))
        jQuery(".eiw").prepend('<div class="warnings"><i class="eiw-icon icon-attention"></i><ul></ul></div>');
      if (piwigo_update)
        jQuery(".warnings ul").append('<li>'+piwigo_need_update_msg+'</li>');
      if (ext_update)
        jQuery(".warnings ul").append('<li>'+ext_need_update_msg+'</li>');
    }
  });

  jQuery('.newsletter-subscription a').click(function() {
    jQuery('.newsletter-subscription').hide();

    jQuery.ajax({
      type: 'GET',
      url: 'admin.php?action=hide_newsletter_subscription'
    });

    if (jQuery(this).hasClass('newsletter-hide')) {
      return false;
    }
  });
});

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.cluetip'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('html_style', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

.eiw .messages ul li {
  list-style-type:none !important;
}

.eiw .messages .eiw-icon {
  margin-right:10px !important;
}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<h2><?php echo l10n('Piwigo Administration');?>
</h2>

<div class="stat-boxes">

<?php if ($_smarty_tpl->tpl_vars['NB_PHOTOS']->value > 1) {?>
<a class="stat-box stat-box-yellow" href="<?php echo $_smarty_tpl->tpl_vars['U_ADD_PHOTOS']->value;?>
">
<i class="icon-picture"></i>
<span class="number"><?php echo number_format($_smarty_tpl->tpl_vars['NB_PHOTOS']->value);?>
</span><span class="caption"><?php echo l10n('Photos');?>
</span>
</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['NB_ALBUMS']->value > 1) {?>
<a class="stat-box stat-box-red" href="<?php echo $_smarty_tpl->tpl_vars['U_CATEGORIES']->value;?>
">
<i class="icon-sitemap"></i>
<span class="number"><?php echo $_smarty_tpl->tpl_vars['NB_ALBUMS']->value;?>
</span><span class="caption"><?php echo l10n('Albums');?>
</span>
</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['NB_TAGS']->value > 1) {?>
<a class="stat-box stat-box-yellow" href="<?php echo $_smarty_tpl->tpl_vars['U_TAGS']->value;?>
">
<i class="icon-tags"></i>
<span class="number"><?php echo $_smarty_tpl->tpl_vars['NB_TAGS']->value;?>
</span><span class="caption" title="<?php echo l10n('%d associations',$_smarty_tpl->tpl_vars['NB_IMAGE_TAG']->value);?>
"><?php echo l10n('Tags');?>
</span>
</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['NB_USERS']->value > 2) {?>
<a class="stat-box stat-box-purple" href="<?php echo $_smarty_tpl->tpl_vars['U_USERS']->value;?>
">
<i class="icon-users"></i>
<span class="number"><?php echo $_smarty_tpl->tpl_vars['NB_USERS']->value;?>
</span><span class="caption"><?php echo l10n('Users');?>
</span>
</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['NB_GROUPS']->value > 0) {?>
<a class="stat-box stat-box-purple" href="<?php echo $_smarty_tpl->tpl_vars['U_GROUPS']->value;?>
">
<i class="icon-group"></i>
<span class="number"><?php echo $_smarty_tpl->tpl_vars['NB_GROUPS']->value;?>
</span><span class="caption"><?php echo l10n('Groups');?>
</span>
</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['NB_COMMENTS']->value > 1) {?>
<a class="stat-box stat-box-blue" href="<?php echo $_smarty_tpl->tpl_vars['U_COMMENTS']->value;?>
">
<i class="icon-chat"></i>
<span class="number"><?php echo $_smarty_tpl->tpl_vars['NB_COMMENTS']->value;?>
</span><span class="caption"><?php echo l10n('Comments');?>
</span>
</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['NB_RATES']->value > 0) {?>
<a class="stat-box stat-box-yellow" href="<?php echo $_smarty_tpl->tpl_vars['U_RATING']->value;?>
">
<i class="icon-star"></i>
<span class="number"><?php echo $_smarty_tpl->tpl_vars['NB_RATES']->value;?>
</span><span class="caption"><?php echo l10n('Rating');?>
</span>
</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['NB_VIEWS']->value > 0) {?>
<a class="stat-box stat-box-blue" href="<?php echo $_smarty_tpl->tpl_vars['U_HISTORY_STAT']->value;?>
">
<i class="icon-signal"></i>
<span class="number"><?php echo $_smarty_tpl->tpl_vars['NB_VIEWS']->value;?>
</span><span class="caption"><?php echo l10n('Pages seen');?>
</span>
</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['NB_PLUGINS']->value > 0) {?>
<a class="stat-box stat-box-green" href="<?php echo $_smarty_tpl->tpl_vars['U_PLUGINS']->value;?>
">
<i class="icon-puzzle"></i>
<span class="number"><?php echo $_smarty_tpl->tpl_vars['NB_PLUGINS']->value;?>
</span><span class="caption"><?php echo l10n('Plugins');?>
</span>
</a>
<?php }?>

<div class="stat-box stat-box-blue">
<i class="icon-hdd"></i>
<span class="number"><?php echo $_smarty_tpl->tpl_vars['STORAGE_USED']->value;?>
</span><span class="caption"><?php echo l10n('Storage used');?>
</span>
</div>

<?php if ($_smarty_tpl->tpl_vars['NB_PHOTOS']->value > 1) {?>
<div class="stat-box stat-box-yellow">
<i class="icon-back-in-time"></i>
<span class="number"><?php echo $_smarty_tpl->tpl_vars['first_added_age']->value;?>
</span><span class="caption" title="<?php echo l10n('first photo added on %s',$_smarty_tpl->tpl_vars['first_added_date']->value);?>
"><?php echo l10n('First photo added');?>
</span>
</div>
<?php }?>

</div> 

<p class="showCreateAlbum">
<?php if ($_smarty_tpl->tpl_vars['ENABLE_SYNCHRONIZATION']->value) {?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['U_QUICK_SYNC']->value;?>
" class="icon-exchange"><?php echo l10n('Quick Local Synchronization');?>
</a>
<?php }?>


<?php if (isset($_smarty_tpl->tpl_vars['SUBSCRIBE_BASE_URL']->value)) {?>
  <br><span class="newsletter-subscription"><a href="<?php echo $_smarty_tpl->tpl_vars['SUBSCRIBE_BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
" id="newsletterSubscribe" class="externalLink cluetip icon-mail-alt" title="<?php echo l10n('Piwigo Announcements Newsletter');?>
|<?php echo nl2br(htmlspecialchars(l10n('Keep in touch with Piwigo project, subscribe to Piwigo Announcement Newsletter. You will receive emails when a new release is available (sometimes including a security bug fix, it\'s important to know and upgrade) and when major events happen to the project. Only a few emails a year.')));?>
"><?php echo l10n('Subscribe %s to Piwigo Announcements Newsletter',$_smarty_tpl->tpl_vars['EMAIL']->value);?>
</a> <a href="#" class="newsletter-hide"><?php echo l10n('... or hide this link');?>
</a></span>
<?php }?>
</p>
<?php }
}
