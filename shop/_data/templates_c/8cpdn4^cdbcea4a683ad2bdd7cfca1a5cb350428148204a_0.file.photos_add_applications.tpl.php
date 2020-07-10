<?php
/* Smarty version 3.1.29, created on 2020-06-27 04:08:48
  from "/home4/sexydive/public_html/shop/admin/themes/default/template/photos_add_applications.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ef70ca0a91011_39338887',
  'file_dependency' => 
  array (
    'cdbcea4a683ad2bdd7cfca1a5cb350428148204a' => 
    array (
      0 => '/home4/sexydive/public_html/shop/admin/themes/default/template/photos_add_applications.tpl',
      1 => 1585290202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/colorbox.inc.tpl' => 1,
  ),
),false)) {
function content_5ef70ca0a91011_39338887 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:include/colorbox.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

jQuery().ready(function(){
  jQuery(".illustration a").colorbox({rel:'group1'});
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('html_head', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0]->block_html_head(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<style type="text/css">
.illustration {float:left; margin-right:10px;}
.illustration img {max-width: 150px;}
fieldset p {text-align:left;margin-top:0}
</style>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0]->block_html_head(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div class="titrePage">
  <h2><?php echo l10n('Upload Photos');?>
 <?php echo $_smarty_tpl->tpl_vars['TABSHEET_TITLE']->value;?>
</h2>
</div>

<fieldset>
  <legend>Piwigo Remote Sync</legend>

<div class="illustration"><a href="https://piwigo.org/screenshots/applications/piwigo-remote-sync.png" title="Piwigo Remote Sync"><img src="https://piwigo.org/screenshots/applications/thumbnail/piwigo-remote-sync.jpg"></a></div>
<p><?php echo l10n('Piwigo Remote Sync is able to upload a whole folder hierarchy. If you run it again, only new photos will be uploaded.');?>
</p>

<p><a href="http://piwigo.org/ext/extension_view.php?eid=851" target="_blank"><?php echo l10n('Learn more');?>
</a></p>
</fieldset>

<fieldset>
  <legend><?php echo l10n('Piwigo for iOS (iPhone, iPad, iPod Touch)');?>
</legend>
<div class="illustration"><a href="https://piwigo.org/screenshots/applications/piwigo-ios.png" title="<?php echo l10n('Piwigo for iOS (iPhone, iPad, iPod Touch)');?>
"><img src="https://piwigo.org/screenshots/applications/thumbnail/piwigo-ios.png"></a></div>
<p><?php echo l10n('<em>Piwigo for iOS</em> application empowers you to connect to your Piwigo gallery from your iPhone, iPad or iPod Touch, create some albums and upload several photos at once.');?>
</p>

<p>
<?php echo l10n('Available on');?>
 <a target="_blank" href="http://itunes.apple.com/us/app/piwigo/id472225196">Apple AppStore</a>
</p>
</fieldset>

<fieldset>
  <legend><?php echo l10n('Piwigo for Android');?>
</legend>
<div class="illustration"><a href="https://piwigo.org/screenshots/applications/piwigo-android.png" title="<?php echo l10n('Piwigo for Android');?>
"><img src="https://piwigo.org/screenshots/applications/thumbnail/piwigo-android.png"></a></div>
<p><?php echo l10n('<em>Piwigo for Android</em> application empowers you to connect your Android phone or table to your Piwigo gallery, create some albums and upload several photos at once.');?>
</p>

<p>
<?php echo l10n('Available on');?>
 <a target="_blank" href="https://play.google.com/store/apps/details?id=org.piwigo.android">Google Play</a>
</p>
</fieldset>

<fieldset>
  <legend>Lightroom</legend>

<div class="illustration"><a href="https://piwigo.org/screenshots/applications/lightroom.png" title="<?php echo l10n('Piwigo Publish plugin for Lightroom');?>
"><img src="https://piwigo.org/screenshots/applications/thumbnail/lightroom.png"></a></div>
<p>
<?php echo l10n('Adobe Photoshop Lightroom is a photography software designed to manage large quantities of digital images and doing post production work.');?>

<?php echo l10n('The Piwigo publish Plug-in allows you to export and synchronize photos from Lightroom directly to your Piwigo photo gallery.');?>

</p>

<p>
<?php echo l10n('Available on');?>
 <a target="_blank" href="http://alloyphoto.com/plugins/piwigo/">alloyphoto.com</a>
</p>
</fieldset>

<fieldset>
  <legend>Shotwell</legend>

<div class="illustration"><a href="https://piwigo.org/screenshots/applications/shotwell.png" title="<?php echo l10n('Piwigo publish plugin for Shotwell');?>
"><img src="https://piwigo.org/screenshots/applications/thumbnail/shotwell.jpg"></a></div>
<p><?php echo l10n('Shotwell is an open source digital photo organizer that runs on Linux. It is the default photo manager in Ubuntu and Fedora.');?>
</p>

<p>
<?php echo l10n('On your Linux, simply install Shotwell with your package manager and the activate Piwigo publishing option.');?>

<a href="http://yorba.org/shotwell/" target="_blank"><?php echo l10n('Learn more');?>
</a>
</p>
</fieldset>

<fieldset>
  <legend>digiKam</legend>
<div class="illustration"><a href="https://piwigo.org/screenshots/applications/digikam.png" title="<?php echo l10n('Piwigo publish plugin for digiKam');?>
"><img src="https://piwigo.org/screenshots/applications/thumbnail/digikam.jpg"></a></div>
<p>
<?php echo l10n('digiKam is an advanced digital photo management free software for Linux, Windows, and MacOSX.');?>

<?php echo l10n('digiKam is designed for photographers who want to view, manage, edit, enhance, organize, tag, and share photographs.');?>

</p>

<p>
<?php echo l10n('To export your photos from digiKam to Piwigo, simply install digiKam and the Kipi-plugins.');?>

<a href="http://digikam.org/" target="_blank"><?php echo l10n('Learn more');?>
</a>
</p>
</fieldset>

<fieldset>
  <legend>MacShareToPiwigo</legend>

<div class="illustration"><a href="https://piwigo.org/screenshots/applications/macsharetopiwigo.jpg" title="MacShareToPiwigo"><img src="https://piwigo.org/screenshots/applications/thumbnail/macsharetopiwigo.jpg"></a></div>
<p><?php echo l10n('Share / Send your photos directly from your Mac Os X (10.10 and following) to Piwigo');?>
</p>

<p>
<a target="_blank" href="http://piwigo.org/ext/extension_view.php?eid=804"><?php echo l10n('Learn more');?>
</a>
</p>
</fieldset>

<fieldset>
  <legend>iPhoto</legend>

<div class="illustration"><a href="https://piwigo.org/screenshots/applications/iphoto.jpg" title="<?php echo l10n('Piwigo export plugin for iPhoto');?>
"><img src="https://piwigo.org/screenshots/applications/thumbnail/iphoto.jpg"></a></div>
<p><?php echo l10n('iPhoto is the default photo manager on MacOSX. The Piwigo export plugin let you create new albums and export your photos directly from iPhoto to your Piwigo photo gallery.');?>
</p>

<p>
<a target="_blank" href="http://piwigo.org/ext/extension_view.php?eid=592"><?php echo l10n('Learn more');?>
</a>
</p>
</fieldset>

<fieldset>
  <legend>Aperture</legend>

<div class="illustration"><a href="https://piwigo.org/screenshots/applications/aperture.png" title="<?php echo l10n('Piwigo export plugin for Aperture');?>
"><img src="https://piwigo.org/screenshots/applications/thumbnail/aperture.jpg"></a></div>
<p>
<?php echo l10n('Aperture is a powerful tool to refine images and manage massive libraries on Mac.');?>

<?php echo l10n('Aperture is designed for professional photographers with iPhoto simplicity.');?>

<?php echo l10n('The Piwigo export plugin allows you to create albums and export photos.');?>

</p>

<p>
<a target="_blank" href="http://piwigo.org/ext/extension_view.php?eid=598"><?php echo l10n('Learn more');?>
</a>
</p>
</fieldset>


<?php }
}
