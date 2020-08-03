{footer_script}
jQuery(function($) {

if($('#metaogimagesaveAid').children("option:selected").val()=="-20"){
 $('#mognp').show();
}

$('#metaogimagesaveAid').change(function(event){
 var idphoto=$(this).children("option:selected").val();
 var realbum=$('#metaogimagesaveA2id').data('realbum');
 $('#metaogimagesaveA2id').val(idphoto);
 if($('#metaogimagesaveAid').children("option:selected").val()=="-10" || $('#metaogimagesaveAid').children("option:selected").val()=="-20" || idphoto==realbum){
   $('#mognp').show();
   $('#metaogimagescrA').attr("src",'');
   $('#metaogimagescrA').hide();
  }else{
  var urliog=$('#metaogimagesaveAid').children("option:selected").data('url'); 
   $('#metaogimagescrA').attr("src",urliog);
   $('#mognp').hide();
   $('#metaogimagescrA').show();
  } 
  $('#mognpe').hide();
  $('#metaogimagesaveAid').css('border', 'solid 1px #999');
  $('#metaogimagesaveA2id').css('border', 'solid 1px #999');
  $('input[name=submit]').show();
});

$('#metaogimagesaveA2id').change(function(){
 var idphoto2=$(this).val();
 var realbum=$('#metaogimagesaveA2id').data('realbum');
 $('#metaogimagesaveAid').val(idphoto2);
 
 if($('#metaogimagesaveAid').children("option:selected").val()==idphoto2){
  $('#metaogimagesaveAid').css('border', 'solid 1px #999');
  $('#metaogimagesaveA2id').css('border', 'solid 1px #999');
  $('#mognpe').hide();
  $('input[name=submit]').show();
  if($('#metaogimagesaveAid').children("option:selected").val()=="-10" || $('#metaogimagesaveAid').children("option:selected").val()=="-20"|| idphoto2==realbum){
   $('#mognp').show();
   $('#metaogimagescrA').attr("src",'');
   $('#metaogimagescrA').hide();
  }else{
  var urliog=$('#metaogimagesaveAid').children("option:selected").data('url'); 
   $('#metaogimagescrA').attr("src",urliog);
   $('#mognp').hide();
   $('#metaogimagescrA').show();
  } 
 }else{
  $('#metaogimagesaveAid').css('border', 'solid 2px red');
  $('#metaogimagesaveA2id').css('border', 'solid 2px red');
  $('#mognpe').show();
  $('#mognp').hide();
  $('#metaogimagescrA').attr("src",'');
  $('input[name=submit]').hide();
  $('#metaogimagescrA').hide();
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
	  <input type="hidden" name="metaogidA" value="{$metaog_editA.metaogidid}">
	  <input type="hidden" name="metaogidobjA" value="{$metaog_editA.metaogidobj}">
	  <span style="margin: 0 0 0 20px"><input type="text" name="metaogtitlesaveA" value="{$metaog_editA.metaogtitle}" size="100" maxlenght="100"></span>
	<br>	
	<br>
	  <span style="margin: 0 0 0 20px">{'Metadata Open Graph description'|@translate}</span>
	<br>
	  <span style="margin: 0 0 0 20px"><textarea rows="2" cols="60" name="metaogdescriptionsaveA" id="metaogdescriptionsaveA" class="metaogdescriptionsaveA">{$metaog_editA.metaogdescription}</textarea></span>
	<br>	
	<br>
  {if ($SHOWMOGI==1)}	
	  <span style="margin: 0 0 0 20px">{'Metadata Open Graph link image'|@translate}</span>
	<br>
	  <span style="margin: 0 0 0 20px">
	  <input data-realbum="{$metaog_editA.metaogrealbum}" id="metaogimagesaveA2id" type="number" name="metaogimagescrA2" value="{$metaog_editA.metaogimage}"> {'or'|@translate}
	  <select id="metaogimagesaveAid" name="metaogimagesaveA">
		<option value="-20">-----</option>
		<option value="-10">{'use representative photo for this album'|@translate}</option>
	    {foreach from=$info_photos item=infophoto}
		  <option data-url="{$infophoto.PHOTOURL}" value="{$infophoto.PHOTOID}" {$infophoto.PHOTOSELECT}>{$infophoto.PHOTOINFO}</option>
		{/foreach}
	  </select>
	  </span>
	<br>
      <span style="margin: 0 0 0 20px"><span style="display:none;" id="mognp">{'use representative photo for this album'|@translate}</span></span>
	  <span style="margin: 0 0 0 20px"><span style="display:none;" id="mognpe">{'This ID isn\'t used in your gallery'|@translate}</span></span>
	<br>
	  <img id="metaogimagescrA" src="{$metaog_editA.metaogpath}"><br>
	<br>
  {/if}	
</p>
<p style="margin:0">';