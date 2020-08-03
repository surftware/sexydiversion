{combine_script id='LocalStorageCache' load='footer' path='admin/themes/default/js/LocalStorageCache.js'}
{combine_script id='jquery.selectize' load='footer' path='themes/default/js/plugins/selectize.min.js'}
{combine_css id='jquery.selectize' path="themes/default/js/plugins/selectize.{$themeconf.colorscheme}.css"}
{footer_script}
jQuery(function($) {

{* <!-- CATEGORIES --> *}
var categoriesCache = new CategoriesCache({
  serverKey: '{$CACHE_KEYS.categories}',
  serverId: '{$CACHE_KEYS._hash}',
  rootUrl: '{$ROOT_URL}'
});

categoriesCache.selectize(jQuery('[data-selectize=categories]'));

if($('#metaogimagesaveid').children("option:selected").val()=="-20"){
 $('#mognp').show();
}

$('#metaogimagesaveid').change(function(event){
 var idphoto=$(this).children("option:selected").val();
 $('#metaogimagesave2id').val(idphoto);
 if($('#metaogimagesaveid').children("option:selected").val()=="-10" || $('#metaogimagesaveid').children("option:selected").val()=="-20"){
   $('#mognp').show();
   $('#metaogimagescr').attr("src",'');
   $('#metaogimagescr').hide();
  }else{
  var urliog=$('#metaogimagesaveid').children("option:selected").data('url'); 
   $('#metaogimagescr').attr("src",urliog);
   $('#metaogimagescr').show();
   $('#mognp').hide();
  } 
  $('#mognpe').hide();
  $('#metaogimagesaveid').css('border', 'solid 1px #999');
  $('#metaogimagesave2id').css('border', 'solid 1px #999');
  $('#submetaogsave').show();
});

$('#metaogimagesave2id').change(function(){
 var idphoto2=$(this).val();
 $('#metaogimagesaveid').val(idphoto2);
 
 if($('#metaogimagesaveid').children("option:selected").val()==idphoto2){
  $('#metaogimagesaveid').css('border', 'solid 1px #999');
  $('#metaogimagesave2id').css('border', 'solid 1px #999');
  $('#mognpe').hide();
  $('#submetaogsave').show();
  if($('#metaogimagesaveid').children("option:selected").val()=="-10" || $('#metaogimagesaveid').children("option:selected").val()=="-20"){
   $('#mognp').show();
   $('#metaogimagescr').attr("src",'');
   $('#metaogimagescr').hide();
  }else{
  var urliog=$('#metaogimagesaveid').children("option:selected").data('url'); 
   $('#metaogimagescr').attr("src",urliog);
   $('#metaogimagescr').show();
   $('#mognp').hide();
  } 
 }else{
  $('#metaogimagesaveid').css('border', 'solid 2px red');
  $('#metaogimagesave2id').css('border', 'solid 2px red');
  $('#mognpe').show();
  $('#mognp').hide();
  $('#metaogimagescr').attr("src",'');
  $('#metaogimagescr').hide();
  $('#submetaogsave').hide();
 }
});

});
{/footer_script}

<div class="titrePage">
  <h2>{'Manage tags metadata Open Graph'|@translate}</h2>
</div>
{if isset ($metagestion)}
		  <h3>{'Add Open Graph metadata on Piwigo page'|@translate}</h3>
	<div>
		<form method="post" >
			<fieldset>
				<legend>{'Select page'|@translate}</legend>
					{'Pages list'|@translate}	
					{html_options name="metaoglist" values=$metaogpagelist output=$metaogpagelistT selected=$metaog_edit.VALUE}
				<br>	
				<br>
				<div style="text-align:center;">
					<input class="submit" name="submetaogchp" type="submit" value="{'edit Open Graph metadata'|@translate}" {$TAG_INPUT_ENABLED} />
				</div>
			</fieldset>
		</form>
	</div>
	{if isset ($metaog_edit)}
	<div>
		<form method="post" >
			<fieldset>
				<legend>{'Metadata Open Graph - Plugin meta og'|@translate}</legend>
					{'Metadata Open Graph title'|@translate}
				<br>
					<input type="hidden" name="metaogid" value="{$metaog_edit.id}">
					<input type="hidden" name="metaogpage" value="{$metaog_edit.VALUE}">
					<input type="text" name="metaogtitlesave" value="{$metaog_edit.metaogtitle}" size="100" maxlenght="100">
				<br>	
				<br>
					{'Metadata Open Graph description'|@translate}
				<br>
					<textarea rows="2" cols="60" name="metaogdescriptionsave" id="metaogdescriptionsave" class="metaogdescriptionsave">{$metaog_edit.metaogdescription}</textarea></span>
				<br>	
				<br>
					{'Metadata Open Graph link image'|@translate}
				<br>
				  <input id="metaogimagesave2id" type="number" name="metaogimagesave2" value="{$metaog_edit.metaogimage}"> {'or'|@translate}
				  <select id="metaogimagesaveid" name="metaogimagesave">
					<option value="-20">-----</option>
					<option value="-10">{'no photo'|@translate}</option>
					  {foreach from=$info_photos item=infophoto}
						<option data-url="{$infophoto.PHOTOURL}" value="{$infophoto.PHOTOID}" {$infophoto.PHOTOSELECT}>{$infophoto.PHOTOINFO}</option>
					  {/foreach}
					</select>
				<br>	
				<br>
				<span style="display:none;" id="mognp">{'don\'t use photo for this page'|@translate}</span>
				<span style="display:none;" id="mognpe">{'This ID isn\'t used in your gallery'|@translate}</span>
					<img id="metaogimagescr" src="{$metaog_edit.metaogpath}"<br>
				<br>	
				<br>
					<div style="text-align:center;">
					<input class="submit" id="submetaogsave" name="submetaogsave" type="submit" value="{'save Open Graph metadata in the database'|@translate}" {$TAG_INPUT_ENABLED} />
					</div>
			</fieldset>
		</form>
	</div>
	{/if}
{/if}

{if isset ($metaogconfig)}
  <form method="post" >
    <fieldset id="mainConf">
	  <strong>{'Customize meta Open Graph image'|@translate}</strong> 
      <div style="margin: 0 0 0 20px" class="mogradio">{html_radios separator="<br>" name="metaogconfishowpa" values=$mog1 output=$mog1T selected="{$metaogconfig.MOGSPA}"}</div>
	  <br>
	  <strong>{'albums for list choose photos for Open Graph image'|@translate}</strong>
      <br>
      <select data-selectize="categories" data-value="{$metaogconfig.choose_albums|@json_encode|escape:html}"
        placeholder="{'Type in a search term'|translate}"
        name="moglistea[]" multiple style="width:600px;"></select>
	  <br>
	  {'Size for Open Graph metadata'|@translate}&nbsp;:<br>
	  {html_options name="metaogconfigsize" values=$metaogsizelist output=$metaogsizelistT selected=$metaogconfig.MOGsize}
	  <br>	
	  <br>
	  {'Default language for local Open Graph'|@translate}&nbsp;:<br>
	  <select name="metaogconfiglo">
		<option value="a">-----</option>
		<option value="b">{'no delault language'|@translate}</option>
					  {foreach from=$info_lang item=infolang}
						<option value="{$infolang.OGLID}" {$infolang.LANGSELECT}>{$infolang.OGLNAME}</option>
					  {/foreach}
	  </select>
	  <br>
	  <br>
	  {'Site name for Open Graph'|@translate}&nbsp;:<br>
	  <textarea rows="2" cols="60" name="metaogconfigsname" id="metaogconfigsname" class="metaogconfigsname">{$metaogconfig.MOGSN}</textarea>
	  <br>
	  <br>
	  {'Face Book:app_id'|@translate}&nbsp;:<br>
	  <input type="text" name="metaogconfigfb" value="{$metaogconfig.MOGFB}" size="110" maxlenght="110">
	  <br>
	  <br>
	  twitter:card : {'The card type, which will be one of summary or summary_large_image.'|@translate}<br>
	  {html_options name="metaogconfigtwca" values=$metaogtwcalist output=$metaogtwcalistT selected=$metaogconfig.MOGTCA}
	  <br>	
	  <br>
	  twitter:site : {'@username for the website used in the card footer'|@translate}<br>
	  <input type="text" name="metaogconfitws" value="{$metaogconfig.MOGTS}" size="110" maxlenght="110">
	  <br>
	  <br>
	  twitter:creator: {'@username for the content creator / author.'|@translate}<br>
	  <input type="text" name="metaogconfitwcr" value="{$metaogconfig.MOGTCR}" size="110" maxlenght="110">
	  <br>		  
	  <br>
	  <p>
		<input class="submit" type="submit" name="submitogconfig" value="{'Submit'|@translate}">
		<input class="submit" type="reset" name="reset" value="{'Reset'|@translate}">
	  </p>
  </form>
{/if}