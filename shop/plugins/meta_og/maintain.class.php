<?php
// +-----------------------------------------------------------------------+
// | meta plugin for Piwigo                                                |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2016 ddtddt               http://temmii.com/piwigo/ |
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

class meta_og_maintain extends PluginMaintain
{
  function install($plugin_version, &$errors=array())
  {
 global $conf, $prefixeTable, $user;
    $q = 'CREATE TABLE ' . $prefixeTable . 'metaog(
id SMALLINT( 5 ) UNSIGNED NOT NULL AUTO_INCREMENT,
type SMALLINT( 5 ) UNSIGNED NOT NULL,
idobj SMALLINT( 5 ) UNSIGNED NOT NULL default "0",
page VARCHAR( 255 ) ,
metaogtitle VARCHAR( 255 ) NOT NULL ,
metaogdescription lONGTEXT NOT NULL ,
metaogimage lONGTEXT NOT NULL ,
PRIMARY KEY (id))DEFAULT CHARSET=utf8;';
    pwg_query($q);
   
   if ($user['theme'] == 'bootstrapdefault'||$user['theme'] == 'bootstrap_darkroom'){
		  conf_update_param('mogsize','cu');
   }else if ($user['theme'] == 'modus'){
		  conf_update_param('mogsize','2s');		
   }else{
		  conf_update_param('mogsize','th');
		}
   
   conf_update_param('fb:app_id','');
   conf_update_param('moglocal','');
   conf_update_param('mogsitename','');
   conf_update_param('mogtwcard','');
   conf_update_param('mogtwsite','');
   conf_update_param('mogtwcreator','');
   conf_update_param('mogshowpa','1');  
   }

  function uninstall()
  {

    global $prefixeTable;

    $q = 'DROP TABLE ' . $prefixeTable . 'metaog;';
    pwg_query($q);

    conf_delete_param('mogsize');
	conf_delete_param('fb:app_id');
	conf_delete_param('moglocal');
	conf_delete_param('mogsitename');
	conf_delete_param('mogtwcard','');
	conf_delete_param('mogtwsite','');
	conf_delete_param('mogtwcreator',''); 
	conf_delete_param('mogshowpa','');
	conf_delete_param('moglista','');
  }
}
