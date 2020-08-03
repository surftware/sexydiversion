{footer_script}
jQuery(function($) {

if($('#metaogimagesavePid').children("option:selected").val()=="-20"){
 $('#mognp').show();
}

$('#metaogimagesavePid').change(function(event){
 var idphoto=$(this).children("option:selected").val();
 $('#metaogimagesaveP2id').val(idphoto);
 if(idphoto=="-10" || idphoto=="-20" ||idphoto==$('input[name=metaogidobjP]').val()){
   $('#mognp').show();
   $('#metaogimagescrP').attr("src",'');
   $('#metaogimagescrP').hide();
  }else{
  var urliog=$('#metaogimagesavePid').children("option:selected").data('url'); 
   $('#metaogimagescrP').attr("src",urliog);
   $('#metaogimagescrP').show();
   $('#mognp').hide();
  } 
  $('#mognpe').hide();
  $('#metaogimagesavePid').css('border', 'solid 1px #999');
  $('#metaogimagesaveP2id').css('border', 'solid 1px #999');
  $('input[name=submit]').show();
});

$('#metaogimagesaveP2id').change(function(){
 var idphoto2=$(this).val();
 $('#metaogimagesavePid').val(idphoto2);
 
 if($('#metaogimagesavePid').children("option:selected").val()==idphoto2){
  $('#metaogimagesavePid').css('border', 'solid 1px #999');
  $('#metaogimagesaveP2id').css('border', 'solid 1px #999');
  $('#mognpe').hide();
  $('input[name=submit]').show();
  if(idphoto2=="-10" ||idphoto2=="-20"||idphoto2==$('input[name=metaogidobjP]').val()){
   $('#mognp').show();
   $('#metaogimagescrP').attr("src",'');
   $('#metaogimagescrP').hide();
  }else{
  var urliog=$('#metaogimagesavePid').children("option:selected").data('url'); 
   $('#metaogimagescrP').attr("src",urliog);
   $('#metaogimagescrP').show();
   $('#mognp').hide();
  } 
 }else{
  $('#metaogimagesavePid').css('border', 'solid 2px red');
  $('#metaogimagesaveP2id').css('border', 'solid 2px red');
  $('#mognpe').show();
  $('#mognp').hide();
  $('#metaogimagescrP').attr("src",'');
  $('#metaogimagescrP').hide();
  $('input[name=submit]').hide();
 }
});

});
{/footer_script}

<p>
  <strong>{'Metadata Open Graph - Plugin meta og'|@translate}</strong>
    <br>
	<br>
	  <span style="margin: 0 0 0 20px">{'Metadata Open Graph title'|@translate}</span>
	<br>
	  <input type="hidden" name="metaogidP" value="{$metaog_editP.metaogidid}">
	  <input type="hidden" name="metaogidobjP" value="{$metaog_editP.metaogidobj}">
	  <span style="margin: 0 0 0 20px"><input type="text" name="metaogtitlesaveP" value="{$metaog_editP.metaogtitle}" size="100" maxlenght="100"></span>
	<br>	
	<br>
	  <span style="margin: 0 0 0 20px">{'Metadata Open Graph description'|@translate}</span>
	<br>
	  <span style="margin: 0 0 0 20px"><textarea rows="2" cols="60" name="metaogdescriptionsaveP" id="metaogdescriptionsaveP" class="metaogdescriptionsaveP">{$metaog_editP.metaogdescription}</textarea></span>
	<br>
	<br>
  {if ($SHOWMOGI==1)}	
	<span style="margin: 0 0 0 20px">{'Metadata Open Graph link image'|@translate}</span>
	<br>
	  <span style="margin: 0 0 0 20px">
	  <input id="metaogimagesaveP2id" type="number" name="metaogimagesaveP2" value="{$metaog_editP.metaogimage}"> {'or'|@translate}
	  <select id="metaogimagesavePid" name="metaogimagesaveP">
		<option value="-20">-----</option>
		<option value="-10">{'use photo for this page'|@translate}</option>
		  {foreach from=$info_photos item=infophoto}
			<option data-url="{$infophoto.PHOTOURL}" value="{$infophoto.PHOTOID}" {$infophoto.PHOTOSELECT}>{$infophoto.PHOTOINFO}</option>
		  {/foreach}
	  </select>
	  </span>
		<br>
    <span style="margin: 0 0 0 20px"><span style="display:none;" id="mognp">{'use photo for this page'|@translate}</span></span>
	<span style="margin: 0 0 0 20px"><span style="display:none;" id="mognpe">{'This ID isn\'t used in your gallery'|@translate}</span></span>
		<br>
			<img id="metaogimagescrP" src="{$metaog_editP.metaogpath}"><br>
		<br>
  {/if}
</p>
<p style="margin:40px 0 0 0">
