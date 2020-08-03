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

function listphotosmog(){
  global $conf;
  if ($conf['moglista'] != false){
	$listchose=safe_unserialize($conf['moglista']);
	$listchose= implode(",", $listchose);
  }
  $query='SELECT i.id,i.file,i.name,i.path 
			FROM ' . IMAGES_TABLE. ' as i ';
  if(isset($listchose)){
	$query.='INNER JOIN '.IMAGE_CATEGORY_TABLE.' AS ic ON i.id = ic.image_id 
	where ic.category_id IN ('.$listchose.') ';
  }

  $query.=' order by id;';
  
  
  $tab_picture = pwg_query($query);
  return $tab_picture;
}
?>