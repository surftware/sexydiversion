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
global $template, $conf, $user;
include_once(PHPWG_ROOT_PATH .'admin/include/tabsheet.class.php');
include_once(metaog_PATH . 'include/function.mog.inc.php');
// +-----------------------------------------------------------------------+
// | Check Access and exit when user status is not ok                      |
// +-----------------------------------------------------------------------+
check_status(ACCESS_ADMINISTRATOR);

// Gestion des onglets
if (!isset($_GET['tab']))
  $page['tab'] = 'gestion';
else
  $page['tab'] = $_GET['tab'];

$tabsheet = new tabsheet();
$tabsheet->add('gestion', l10n('Add Open Graph metadata'), METAOG_ADMIN . '-gestion');
$tabsheet->add('config', l10n('Configuration'), METAOG_ADMIN . '-config');

$tabsheet->select($page['tab']);
$tabsheet->assign();

// Tab Title on specials pages
switch ($page['tab'])
{
 case 'gestion':
		global $pwg_loaded_plugins;
	
$metaogpagelistT = array(
    l10n('Select Page'),
	'----------------------',
    l10n('Home'),
    l10n('Best rated'),
    l10n('Most visited'),
	l10n('Recent pictures'),
	l10n('Recent categories'),
	l10n('Favorites'),
	l10n('Tags'),
	l10n('Comments'),
	l10n('About'),
	l10n('search'),
	l10n('Random pictures'),
	l10n('Notification'),
  );

$metaogpagelist = array(
    '',
    '',
    'categories',
    'best_rated',
    'most_visited',
	'recent_pics',
	'recent_cats',
	'favorites',
	'tags',
	'comments',
	'about',
	'search',
	'list',
	'notification',
  );
  if (isset($pwg_loaded_plugins['ContactForm'])){
	$metaogpagelistT[]=l10n('contact');
	$metaogpagelist[]='contact';
  }
  if (isset($pwg_loaded_plugins['GuestBook'])){
	$metaogpagelistT[]=l10n('GuestBook');
	$metaogpagelist[]='GuestBook';
  }
  if (isset($pwg_loaded_plugins['GuestBook'])){
    $result = pwg_query('SELECT id,title FROM ' . ADD_PAGES_TABLE . ' ORDER BY id ASC;');
	while ($row = pwg_db_fetch_assoc($result)) {
	  $metaogpagelistT[]=l10n('Additional Page').' : '.$row['title'];
	  $metaogpagelist[]=$row['id'];
	}
  
  
  }
    $template->assign(
    'metagestion',
    array(
      'a' => 'a',
      ));

$template->assign('metaogpagelist', $metaogpagelist);
$template->assign('metaogpagelistT', $metaogpagelistT);

  if (isset($_POST['submetaogchp'])){
	if(empty($_POST['metaoglist'])){
	array_push($page['errors'], l10n('You must select a page'));
	break;
	}
	$pageog=$_POST['metaoglist'];
    if(is_numeric($pageog)){$type='4';}else{$type='1';}
	$metaog = pwg_db_fetch_assoc(pwg_query("SELECT * FROM " . METAOG_TABLE . " WHERE type = ".$type." AND page = '".$_POST['metaoglist']."';"));
	if(empty($metaog)){
		$metaog['id']='';
		$metaog['metaogtitle']='';
		$metaog['metaogdescription']='';
		$metaog['metaogimage']='';
	}
	$metaog['path']='';
	$tab_picture = listphotosmog();
	if (pwg_db_num_rows($tab_picture)) {
        while ($info_photos = pwg_db_fetch_assoc($tab_picture)) {
			if($info_photos['id']==$metaog['metaogimage']){
				$select="SELECTED";
				$metaog['path']=$info_photos['path'];
			}else{
				$select="";
				$path="";
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
	 $template->assign(
     'metaog_edit',
	  array(
		'id'  => $metaog['id'],
		'VALUE'  => $pageog,
        'metaogtitle' => $metaog['metaogtitle'],
		'metaogdescription' => $metaog['metaogdescription'],
		'metaogimage' => $metaog['metaogimage'],
		'metaogpath' => $metaogpath,
    ));
  }

  if (isset($_POST['submetaogsave'])){
	if($_POST['metaogimagesave']=="-10" || $_POST['metaogimagesave']=="-20"){$_POST['metaogimagesave']='';}
	if(!empty($_POST['metaogid'])){
	$query = '
		UPDATE ' . METAOG_TABLE . '
			SET metaogtitle= \''.$_POST['metaogtitlesave'].'\'
			,metaogdescription= \''.$_POST['metaogdescriptionsave'].'\'
			,metaogimage= \''.$_POST['metaogimagesave'].'\'
			WHERE id = \''.$_POST['metaogid'].'\'
    ;';
	pwg_query($query);
	}else{
if(is_numeric($_POST['metaogpage'])){$type='4';}else{$type='1';}		
	$q = 'INSERT INTO ' . $prefixeTable . 'metaog(type,page,metaogtitle,metaogdescription,metaogimage)VALUES ('.$type.',"' . $_POST['metaogpage'] . '","' . $_POST['metaogtitlesave'] . '","' . $_POST['metaogdescriptionsave'] . '","' . $_POST['metaogimagesave'] .'");';
    pwg_query($q);
    }
	array_push($page['infos'], l10n('Metadata Open Graph updated'));
  }


 break;
 case 'config':
 
$mog1T = array(
    '    '.l10n('no photos and albums pages'),
    '    '.l10n('photos pages'),
    '    '.l10n('albums pages'),
	'    '.l10n('photos and albums pages'),
  );

$mog1 = array(
    '1',
    '2',
    '3',
	'4',
  );	

$template->assign('mog1T', $mog1T);
$template->assign('mog1', $mog1); 
 
$metaogsizelistT = array(
    '2s : '.l10n('size thumbnails modus'),
    'cu : '.l10n('size thumbnails bootstrap'),
    'th : '.l10n('size thumbnails default'),
	'sq : '.l10n('size thumbnails square'),
	'me : '.l10n('Size medium'),
	'la : '.l10n('size thumbnails large'),
	l10n('Original'),
  );
  
$metaogsizelist = array(
    '2s',
    'cu',
    'th',
	'sq',
	'me',
	'la',
	'original',
  );
 
$template->assign('metaogsizelist', $metaogsizelist);
$template->assign('metaogsizelistT', $metaogsizelistT);

$tab_lang = pwg_query('SELECT id,name FROM ' . LANGUAGES_TABLE . ' order by id;');
	if (pwg_db_num_rows($tab_lang)) {
        while ($info_lang = pwg_db_fetch_assoc($tab_lang)) {
			if($info_lang['id']==$conf['moglocal']){
				$select="SELECTED";
			}else{
				$select="";
			}
			$items = array(
					'OGLID' => $info_lang['id'],
					'OGLNAME' => $info_lang['name'],
					'LANGSELECT' => $select,
				);
			$template->append('info_lang', $items);
        }
    }
 $template->assign(array(
  'languages_other' => '',
  'CACHE_KEYS' => get_admin_client_cache_keys(array('languages')),
  'PWG_TOKEN' => get_pwg_token(),
  ));
  
  $metaogtwcalistT = array(
    l10n('empty'),
    'summary : '.l10n('share your pages with a small squared thumbnail and informations'),
    'summary_large_image : '.l10n('share your pages with a full width picture and informations'),
	//'app : '.l10n('explain app'),
	//'player : '.l10n('explain player'),
  );
  
$metaogtwcalist = array(
    'a',
    'summary',
    'summary_large_image',
	//'app',
	//'player',
  );
 
$template->assign('metaogtwcalist', $metaogtwcalist);
$template->assign('metaogtwcalistT', $metaogtwcalistT);

$listchose=safe_unserialize($conf['moglista']);
if(!isset($conf['mogshowpa'])){$conf['mogshowpa']=1;}
  
    $template->assign(
     'metaogconfig',
	  array(
        'MOGsize' => $conf['mogsize'],
		'MOGFB' => $conf['fb:app_id'],
		'MOGSN' => $conf['mogsitename'],
		'MOGTCA' => $conf['mogtwcard'],
		'MOGTS' => $conf['mogtwsite'],
		'MOGTCR' => $conf['mogtwcreator'],
		'MOGSPA' => $conf['mogshowpa'],
		'choose_albums' => $listchose,
    ));
	
  if (isset($_POST['submitogconfig'])){
    conf_update_param('mogshowpa', $_POST['metaogconfishowpa']);
	conf_update_param('moglista', $_POST['moglistea']);
	conf_update_param('mogsize', $_POST['metaogconfigsize']);
    conf_update_param('fb:app_id', $_POST['metaogconfigfb']);
  if (isset($_POST['metaogconfiglo'])){	
	if($_POST['metaogconfiglo']=="a" || $_POST['metaogconfiglo']=="b"){$_POST['metaogconfiglo']='';}
	  if($_POST['metaogconfiglo']=='en_UK'){
		$_POST['metaogconfiglo']='en_US';
	  }
	   if($_POST['metaogconfiglo']=='ar_SA'||$_POST['metaogconfiglo']=='ar_MA'||$_POST['metaogconfiglo']=='ar_EG'){
		$_POST['metaogconfiglo']='ar_AR';
	  }
	   if($_POST['metaogconfiglo']=='es_ES'){
		$_POST['metaogconfiglo']='en_LA';
	  }
	  conf_update_param('moglocal', $_POST['metaogconfiglo']);
  }
  if (isset($_POST['metaogconfigsname'])){
	  conf_update_param('mogsitename', $_POST['metaogconfigsname']);
  }
  if (isset($_POST['metaogconfigtwca'])){
	  if($_POST['metaogconfigtwca']=='a'){$_POST['metaogconfigtwca']='';}
	  conf_update_param('mogtwcard', $_POST['metaogconfigtwca']);
  }
  if (isset($_POST['metaogconfitws'])){
	  conf_update_param('mogtwsite', $_POST['metaogconfitws']);
  }
  if (isset($_POST['metaogconfitwcr'])){
	  conf_update_param('mogtwcreator', $_POST['metaogconfitwcr']);
  }
	header('Location:'.METAOG_ADMIN . '-config');
}
	
 break;
} 

$template->set_filenames(array('plugin_admin_content' => dirname(__FILE__) . '/admin.tpl')); 
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');
?>