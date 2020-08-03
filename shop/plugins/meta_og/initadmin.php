<?php
// +-----------------------------------------------------------------------+
// | meta_og plugin for Piwigo by TEMMII                                   |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2020 ddtddt               http://temmii.com/piwigo/ |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
include_once(metaog_PATH . 'include/function.mog.inc.php');
//Add link menu
add_event_handler('get_admin_plugin_menu_links', 'metaog_admin_menu');
function metaog_admin_menu($menu){
  $menu[] = array(
    'NAME' => l10n('Metadata Open Graph'),
    'URL' => METAOG_ADMIN,
  );
    return $menu;
}

//add prefiltre photo
add_event_handler('loc_begin_admin_page', 'metaogPadminf',95);

function metaogPadminf(){
  global $template;
  $template->set_prefilter('picture_modify', 'metaogPadminfT');
  $template->set_filename('mog_adminphoto', realpath(metaog_PATH.'mog_adminphoto.tpl'));
  $template->assign_var_from_handle('MOG_ADMINPHOTO', 'mog_adminphoto');
}

function metaogPadminfT($content, &$smarty){
  $search = '#<p style="margin:40px 0 0 0">#';
  return preg_replace($search,'{$MOG_ADMINPHOTO}', $content);
}

add_event_handler('loc_begin_admin_page', 'metaogPadminA',60);
 
function metaogPadminA(){
  if (isset($_GET['image_id'])){
	global $template, $prefixeTable, $conf;
	$pageog=$_GET['image_id'];
    $metaog = pwg_db_fetch_assoc(pwg_query("SELECT * FROM " . METAOG_TABLE . " WHERE type = 2 AND idobj = '".$_GET['image_id']."';"));
	if(empty($metaog)){
		$metaog['id']='';
		$metaog['metaogtitle']='';
		$metaog['metaogdescription']='';
		$metaog['metaogimage']='';
	}
	if($conf['mogshowpa']==2||$conf['mogshowpa']==4){
	$tab_picture = listphotosmog();
	 if (pwg_db_num_rows($tab_picture)){
      while ($info_photos = pwg_db_fetch_assoc($tab_picture)) {
		if($info_photos['id']==$metaog['metaogimage']){
		  $select="SELECTED";
		  $metaog['path']=$info_photos['path'];
		}else{
		  $select="";
		}
	  if(empty($info_photos['name'])){$legend=$info_photos['file'];}else{$legend=$info_photos['name'];}
	  	$metaoglistphotoT[] = $info_photos['id'].' - '.$legend;
		$metaoglistphoto[] = $info_photos['id'];
		$metaoglistphotodataurl[] = get_absolute_root_url().PWG_DERIVATIVE_DIR.substr($info_photos['path'], 2, -4)."-th".substr($info_photos['path'],-4);
		$items = array(
		  'PHOTOID' => $info_photos['id'],
		  'PHOTOINFO' => $info_photos['id'].' - '.$legend,
		  'PHOTOSELECT' => $select,
		  'PHOTOURL' => get_absolute_root_url().PWG_DERIVATIVE_DIR.substr($info_photos['path'], 2, -4)."-th".substr($info_photos['path'],-4),
		);
		$template->append('info_photos', $items);
      }
   }
   if (empty($metaog['metaogimage'])){unset($metaog['metaogimage']);}
   if(isset($metaog['metaogimage'])){	
	  $metaogpath=get_absolute_root_url().PWG_DERIVATIVE_DIR.substr($metaog['path'], 2, -4)."-th".substr($metaog['path'],-4);
   }else{
	  $metaogpath="";
	  $metaog['metaogimage']="";
   }
   $template->assign('SHOWMOGI', "1");
  }else{
   $template->assign('SHOWMOGI', "0");
  }
  $template->assign(
    'metaog_editP',
	  array(
		'metaogidid'  => $metaog['id'],
		'metaogidobj'  => $pageog,
        'metaogtitle' => $metaog['metaogtitle'],
		'metaogdescription' => $metaog['metaogdescription'],
		'metaogimage' => $metaog['metaogimage'],
		'metaogpath' => $metaogpath,
    ));
  }
  if(isset($_POST['metaogtitlesaveP']) or isset($_POST['metaogdescriptionsaveP'])or isset($_POST['metaogimagesaveP'])){
	if($_POST['metaogimagesaveP']=="-10" || $_POST['metaogimagesaveP']=="-20" || $_POST['metaogimagesaveP']==$_POST['metaogidobjP']){$_POST['metaogimagesaveP']='';}
	if(!empty($_POST['metaogidP'])){
	$query = '
		UPDATE ' . METAOG_TABLE . '
			SET metaogtitle= \''.$_POST['metaogtitlesaveP'].'\'
			,metaogdescription= \''.$_POST['metaogdescriptionsaveP'].'\'
			,metaogimage= \''.$_POST['metaogimagesaveP'].'\'
			WHERE id = \''.$_POST['metaogidP'].'\'
    ;';
	pwg_query($query);
	}else{
	$q = 'INSERT INTO ' . $prefixeTable . 'metaog(type,idobj,metaogtitle,metaogdescription,metaogimage)VALUES (2,"' . $_POST['metaogidobjP'] . '","' . $_POST['metaogtitlesaveP'] . '","' . $_POST['metaogdescriptionsaveP'] . '","' . $_POST['metaogimagesaveP'] .'");';
    pwg_query($q);
    }
  	header('Location:'.get_root_url().'admin.php?page=photo-'.$_POST['metaogidobjP'].'-properties');
}
}
	
//add prefiltre album
add_event_handler('loc_begin_admin_page', 'metaogAadminf', 95);

function metaogAadminf(){
	global $template;
	$template->set_prefilter('album_properties', 'metaogAadminfT');
	$template->set_filename('mog_adminalbum', realpath(metaog_PATH.'mog_adminalbum.tpl'));
	$template->assign_var_from_handle('MOG_ADMINALBUM', 'mog_adminalbum');
}

function metaogAadminfT($content, &$smarty){
  $search = '#<p style="margin:0">#';
   return preg_replace($search, '{$MOG_ADMINALBUM}', $content);
}

add_event_handler('loc_begin_admin_page', 'metaogAadminA', 60);
 
function metaogAadminA(){ 
  if (isset($_GET['cat_id']) and !isset($_GET['image_id'])){
	global $template, $prefixeTable, $conf;
	$pageog=$_GET['cat_id'];
    $metaog = pwg_db_fetch_assoc(pwg_query("SELECT * FROM " . METAOG_TABLE . " WHERE type = 3 AND idobj = '".$_GET['cat_id']."';"));
	if(empty($metaog)){
		$metaog['id']='';
		$metaog['metaogtitle']='';
		$metaog['metaogdescription']='';
		$metaog['metaogimage']='';
	}
	if($conf['mogshowpa']==3||$conf['mogshowpa']==4){
	$tab_picture = listphotosmog();
	$metaog['path']='';
	if (pwg_db_num_rows($tab_picture)){
      while ($info_photos = pwg_db_fetch_assoc($tab_picture)) {
		if($info_photos['id']==$metaog['metaogimage']){
		  $select="SELECTED";
		  $metaog['path']=$info_photos['path'];
		}else{
		  $select="";
		}
	  if(empty($info_photos['name'])){$legend=$info_photos['file'];}else{$legend=$info_photos['name'];}
		$items = array(
		  'PHOTOID' => $info_photos['id'],
		  'PHOTOINFO' => $info_photos['id'].' - '.$legend,
		  'PHOTOSELECT' => $select,
		  'PHOTOURL' => get_absolute_root_url().PWG_DERIVATIVE_DIR.substr($info_photos['path'], 2, -4)."-th".substr($info_photos['path'],-4),
		);
		$template->append('info_photos', $items);
      }
    }
  if (empty($metaog['metaogimage'])){unset($metaog['metaogimage']);}
  if(isset($metaog['metaogimage'])){	
	  $metaogpath=get_absolute_root_url().PWG_DERIVATIVE_DIR.substr($metaog['path'], 2, -4)."-th".substr($metaog['path'],-4);
	}else{
	  $metaogpath="";
	  $metaog['metaogimage']="";
	}
	$template->assign('SHOWMOGI', "1");
	}else{
	  $template->assign('SHOWMOGI', "0");
	}
  $tab_album = pwg_db_fetch_assoc(pwg_query("SELECT id,representative_picture_id FROM " . CATEGORIES_TABLE . " WHERE id = '".$_GET['cat_id']."';"));
  $template->assign(
    'metaog_editA',
	  array(
		'metaogidid'  => $metaog['id'],
		'metaogidobj'  => $pageog,
        'metaogtitle' => $metaog['metaogtitle'],
		'metaogdescription' => $metaog['metaogdescription'],
		'metaogimage' => $metaog['metaogimage'],
		'metaogpath' => $metaogpath,
		'metaogrealbum' => $tab_album['representative_picture_id'],
    ));
  
  }
  if(isset($_POST['metaogtitlesaveA']) or isset($_POST['metaogdescriptionsaveA'])or isset($_POST['metaogimagesaveA'])){
	if($_POST['metaogimagesaveA']=="-10"|| $_POST['metaogimagesaveA']=="-20" || $_POST['metaogimagesaveA']==$tab_album['representative_picture_id']){$_POST['metaogimagesaveA']='';}
	if(!empty($_POST['metaogidA'])){
		if($_POST['metaogidobjA'] == $_POST['metaogimagesaveA']){$_POST['metaogimagesaveA']='';}
	$query = '
		UPDATE ' . METAOG_TABLE . '
			SET metaogtitle= \''.$_POST['metaogtitlesaveA'].'\'
			,metaogdescription= \''.$_POST['metaogdescriptionsaveA'].'\'
			,metaogimage= \''.$_POST['metaogimagesaveA'].'\'
			WHERE id = \''.$_POST['metaogidA'].'\'
    ;';
	pwg_query($query);
	}else{
	$q = 'INSERT INTO ' . $prefixeTable . 'metaog(type,idobj,metaogtitle,metaogdescription,metaogimage)VALUES (3,"' . $_POST['metaogidobjA'] . '","' . $_POST['metaogtitlesaveA'] . '","' . $_POST['metaogdescriptionsaveA'] . '","' . $_POST['metaogimagesaveA'] .'");';
    pwg_query($q);
    }
  	header('Location:'.get_root_url().'admin.php?page=album-'.$_POST['metaogidobjP'].'-properties');
} 
}
 

?>