<?php
/*
Plugin Name: Meta Open Graph
Version: 0.7.beta7
Description: Allows to add metadata Open Graph
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=889
Author: ddtddt
Author URI: http://temmii.com/piwigo/
*/

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

/*
$conf['fb:app_id'] -> for use Insights Facebook
$conf['mogsize'] > for size image
$conf['moglocal'] > for local:og
$conf['mogsitename'] > for og:site_name
$conf['mogtwcard'] > for twitter:card
$conf['mogtwsite'] > for twitter:site
$conf['mogtwcreator'] > for twitter:creator
$conf['mogshowpa'] > for change meta og photo on photo or album page
$conf['moglista'] > list album for meta og photo

type
1 : standart page
2 : photo
3 : Album
4 : AP

*/

if (!defined('PHPWG_ROOT_PATH'))
    die('Hacking attempt!');

global $prefixeTable, $page, $conf;

define('metaog_DIR', basename(dirname(__FILE__)));
define('metaog_PATH', PHPWG_PLUGINS_PATH . metaog_DIR . '/');
define('METAOG_ADMIN',get_root_url().'admin.php?page=plugin-'.metaog_DIR);
if (!defined('METAOG_TABLE'))
  define('METAOG_TABLE', $prefixeTable . 'metaog');


add_event_handler('loading_lang', 'metaog_loading_lang');	  
function metaog_loading_lang(){
  load_language('plugin.lang', metaog_PATH);
}

// Plugin for admin
if (script_basename() == 'admin') {
    include_once(dirname(__FILE__) . '/initadmin.php');
}

//Gestion des meta dans le header
add_event_handler('loc_end_page_header', 'add_metaog', 66);


function add_metaog(){
 global $template, $page, $metaog, $conf, $protocol, $pwg_loaded_plugins;
 if(isset($_SERVER['HTTPS'])){if($_SERVER['HTTPS'] == 'on'){$protocol="https://";}}
   else{$protocol="http://";}

  if (isset($pwg_loaded_plugins['ExtendedDescription'])){
    add_event_handler('AP_render_content', 'get_user_language_desc');
  }  
   
 $metaogurl=$protocol.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
 if (!empty($page['category']['id']) and empty($page['image_id'])){

  $metaog = pwg_db_fetch_assoc(pwg_query("SELECT * FROM " . METAOG_TABLE . " WHERE type = 3 AND idobj = '".$page['category']['id']."';"));
  if(empty($metaog)){
	$metaog['metaogtitle']='';
	$metaog['metaogdescription']='';
	$metaog['metaogimage']='';
  }	
    
  $albums = pwg_db_fetch_assoc(pwg_query("SELECT * FROM " . CATEGORIES_TABLE . " WHERE id = '".$page['category']['id']."';"));
  $metaog['type']="website";
  if(empty($metaog['metaogtitle'])){$metaog['metaogtitle']=$albums['name'];}
  if(empty($metaog['metaogdescription'])){
	 $metaog['metaogdescription']=$albums['comment'];}
	 if (isset($pwg_loaded_plugins['ExtendedDescription'])){
			$metaog['metaogdescription']=trigger_change('AP_render_content', $metaog['metaogdescription']);
		if( strstr($metaog['metaogdescription'],'<!--complete-->')) {
			$desc=explode('<!--complete-->', $metaog['metaogdescription']);
			$metaog['metaogdescription']=$desc[0];
		} 
		if( strstr($metaog['metaogdescription'],'<!--more-->')) {
			$desc=explode('<!--more-->', $metaog['metaogdescription']);
			$metaog['metaogdescription']=$desc[0];
		}
		if( strstr($metaog['metaogdescription'],'<!--up-down-->')) {
			$desc=explode('<!--up-down-->', $metaog['metaogdescription']);
			$metaog['metaogdescription']=$desc[0];
		} 
	}
  if(empty($metaog['metaogimage'])){
	if(isset($albums['representative_picture_id'])){
	  $images = pwg_db_fetch_assoc(pwg_query("SELECT id,path FROM " . IMAGES_TABLE . " WHERE id = '".$albums['representative_picture_id']."';"));
	}
  }else{
	$images = pwg_db_fetch_assoc(pwg_query("SELECT id,path FROM " . IMAGES_TABLE . " WHERE id = '".$metaog['metaogimage']."';"));
  }
  if(isset($images)){
      $metaog['metaogimage']=PWG_DERIVATIVE_DIR.substr($images['path'], 2, -4)."-".$conf['mogsize'].substr($images['path'],-4);
	  if (file_exists($metaog['metaogimage']) AND $conf['mogsize']!='original'){
		$metaog['metaogimage']=get_absolute_root_url().PWG_DERIVATIVE_DIR.substr($images['path'], 2, -4)."-".$conf['mogsize'].substr($images['path'],-4);
	  }else{
        $metaog['metaogimage']=get_absolute_root_url().substr($images['path'],2);
	  }
  } 
 }else if (!empty($page['image_id'])) {
  $metaog = pwg_db_fetch_assoc(pwg_query("SELECT * FROM " . METAOG_TABLE . " WHERE type = 2 AND idobj = '".$page['image_id']."';"));
  if(empty($metaog)){
	$metaog['metaogtitle']='';
	$metaog['metaogdescription']='';
	$metaog['metaogimage']='';
  }		 

  $images = pwg_db_fetch_assoc(pwg_query("SELECT * FROM " . IMAGES_TABLE . " WHERE id = '".$page['image_id']."';"));
  $metaog['type']="website";
  if(empty($metaog['metaogtitle'])){$metaog['metaogtitle']=$images['name'];}
  if(empty($metaog['metaogdescription'])){$metaog['metaogdescription']=$images['comment'];}
  if(!empty($metaog['metaogimage'])){
    $images2 = pwg_db_fetch_assoc(pwg_query("SELECT id,path FROM " . IMAGES_TABLE . " WHERE id = '".$metaog['metaogimage']."';"));
	$images['path']=$images2['path'];
  }
  $metaog['metaogimage']=PWG_DERIVATIVE_DIR.substr($images['path'], 2, -4)."-".$conf['mogsize'].substr($images['path'],-4);
  if (file_exists($metaog['metaogimage']) AND $conf['mogsize']!='original'){
	$metaog['metaogimage']=get_absolute_root_url().PWG_DERIVATIVE_DIR.substr($images['path'], 2, -4)."-".$conf['mogsize'].substr($images['path'],-4);
  }else{
    $metaog['metaogimage']=get_absolute_root_url().substr($images['path'],2);
  }
 }else if(isset($page['section']) and empty($page['category']['id']))  {
	 	if($page['section'] == 'additional_page'){
		   $metaog = pwg_db_fetch_assoc(pwg_query("SELECT * FROM " . METAOG_TABLE . " WHERE type =4 AND page = '".$page['additional_page']['id']."';"));
		}else{
		   $metaog = pwg_db_fetch_assoc(pwg_query("SELECT * FROM " . METAOG_TABLE . " WHERE type =1 AND page = '".$page['section']."';"));
		}
  if(empty($metaog)){
	$metaog['metaogtitle']='';
	$metaog['metaogdescription']='';
	$metaog['metaogimage']='';
  }
  if(!empty($metaog['metaogimage'])){
	$images = pwg_db_fetch_assoc(pwg_query("SELECT id,path FROM " . IMAGES_TABLE . " WHERE id = '".$metaog['metaogimage']."';"));
      $metaog['metaogimage']=PWG_DERIVATIVE_DIR.substr($images['path'], 2, -4)."-".$conf['mogsize'].substr($images['path'],-4);
	  if (file_exists($metaog['metaogimage']) AND $conf['mogsize']!='original'){
		$metaog['metaogimage']=get_absolute_root_url().PWG_DERIVATIVE_DIR.substr($images['path'], 2, -4)."-".$conf['mogsize'].substr($images['path'],-4);
	  }else{
        $metaog['metaogimage']=get_absolute_root_url().substr($images['path'],2);
	  }
  }
  $metaog['type']="website";
}else if(script_basename() == 'tags' ||script_basename() == 'comments'||script_basename() == 'about'||script_basename() == 'search'||script_basename() == 'notification'){
	$metaog = pwg_db_fetch_assoc(pwg_query("SELECT * FROM " . METAOG_TABLE . " WHERE type = 1 AND page = '".script_basename()."';"));
  if(empty($metaog)){
	$metaog['metaogtitle']='';
	$metaog['metaogdescription']='';
	$metaog['metaogimage']='';
  }

  if(!empty($metaog['metaogimage']) AND $conf['mogsize']!='original'){
	$images = pwg_db_fetch_assoc(pwg_query("SELECT id,path FROM " . IMAGES_TABLE . " WHERE id = '".$metaog['metaogimage']."';"));
      $metaog['metaogimage']=PWG_DERIVATIVE_DIR.substr($images['path'], 2, -4)."-".$conf['mogsize'].substr($images['path'],-4);
	  if (file_exists($metaog['metaogimage'])){
		$metaog['metaogimage']=get_absolute_root_url().PWG_DERIVATIVE_DIR.substr($images['path'], 2, -4)."-".$conf['mogsize'].substr($images['path'],-4);
	  }else{
        $metaog['metaogimage']=get_absolute_root_url().substr($images['path'],2);
	  }
  } 
  $metaog['type']="website";
}else{
  $metaog['type']="website";
  $metaog['metaogtitle']=$template->get_template_vars('PAGE_TITLE');
  $metaog['metaogdescription']=$template->get_template_vars('INFO_FILE');
}



  // og:url
  if (!empty($metaogurl)) {
    $template->append('head_elements', '<meta property="og:url" content="' . $metaogurl . '">');
  }
    // og:type
  if (!empty($metaog['type'])) {
    $template->append('head_elements', '<meta property="og:type" content="' . $metaog['type'] . '">');
  }
  
    // og:title
  if (!empty($metaog['metaogtitle'])) {
    $template->append('head_elements', '<meta property="og:title" content="' . strip_tags(trigger_change('AP_render_content', $metaog['metaogtitle'])) . '">');
  }
  
    // og:description
  if (!empty($metaog['metaogdescription'])) {
    $template->append('head_elements', '<meta property="og:description" content="' . strip_tags($metaog['metaogdescription']) . '">');
  }
  
    // og:image
  if (!empty($metaog['metaogimage'])) {
	$metaog['metaogimagetype']=substr($metaog['metaogimage'],-3);
	if($metaog['metaogimagetype']=='jpg'){$metaog['metaogimagetype']='jpeg';}
    $template->append('head_elements', '<meta property="og:image" content="' . $metaog['metaogimage'] . '">');
	$template->append('head_elements', '<meta property="og:image:type" content="image/' . $metaog['metaogimagetype'] . '">');
  }
  
    // og:app_id
  if (!empty($conf['fb:app_id'])) {
    $template->append('head_elements', '<meta property="fb:app_id" content="' . $conf['fb:app_id'] . '">');
  }
    // og:local
  if (!empty($conf['moglocal'])) {
    $template->append('head_elements', '<meta property="og:locale" content="' . $conf['moglocal'] . '">');
  }
  
    // og:site_name
  if (!empty($conf['mogsitename'])) {
    $template->append('head_elements', '<meta property="og:site_name" content="' . $conf['mogsitename'] . '">');
  }
  
    // twitter:card
  if (!empty($conf['mogtwcard'])) {
    $template->append('head_elements', '<meta property="twitter:card" content="' . $conf['mogtwcard'] . '">');
  }
  
    // twitter:site
  if (!empty($conf['mogtwsite'])) {
    $template->append('head_elements', '<meta property="twitter:site" content="' . $conf['mogtwsite'] . '">');
  }
 
    // twitter:creator
  if (!empty($conf['mogtwcreator'])) {
    $template->append('head_elements', '<meta property="twitter:creator" content="' . $conf['mogtwcreator'] . '">');
  }
}
?>