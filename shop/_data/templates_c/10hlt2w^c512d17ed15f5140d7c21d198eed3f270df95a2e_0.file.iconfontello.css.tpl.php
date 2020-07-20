<?php
/* Smarty version 3.1.29, created on 2020-07-20 14:33:12
  from "/home4/sexydive/public_html/shop/themes/modus/css/iconfontello.css.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f15f1786ad1e3_64429597',
  'file_dependency' => 
  array (
    'c512d17ed15f5140d7c21d198eed3f270df95a2e' => 
    array (
      0 => '/home4/sexydive/public_html/shop/themes/modus/css/iconfontello.css.tpl',
      1 => 1585290230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f15f1786ad1e3_64429597 ($_smarty_tpl) {
?>
@import "fontello/css/modus.css";

A:hover .pwg-icon:before{
	text-decoration: none !important; /* IE 8,9*/
}

.pwg-icon {
<?php if (isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['language_switch']) || isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['BatchDownloader'])) {?>
	display: inline-block;
<?php }?>
	font-size: 24px
}


.pwg-button-text{
	display:none;
}

.pwg-state-disabled .pwg-icon {
	opacity: .5;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
	filter: alpha(opacity=50);
}

.pwg-button {
	display: inline-block;
	vertical-align: top;
	cursor:pointer;
}

.pwg-icon-slideshow:before { content: '\25b6';}
.pwg-icon-favorite-del:before { content: '\2661\2d'; letter-spacing: -2px}

<?php if ($_smarty_tpl->tpl_vars['conf']->value['index_posted_date_icon']) {
if ($_smarty_tpl->tpl_vars['conf']->value['index_created_date_icon']) {?>
.pwg-icon-calendar:before { content: '\f133'; }
.pwg-icon-camera-calendar:before { content: '\e70f'; }
<?php } else { ?>
.pwg-icon-calendar:before { content: '\f133'; }
<?php }
}?>

<?php if (isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['BatchDownloader'])) {?>
.batch-downloader-icon {
	width: 26px
}
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['loaded_plugins']->value['UserCollections'])) {?>
.user-collections-icon, .user-collections-share-icon, .user-collections-clear-icon, .user-collections-delete-icon, .user-collections-mail-icon {
	display: inline-block;
	height: 26px;
	width: 26px;
}
<?php }
}
}
