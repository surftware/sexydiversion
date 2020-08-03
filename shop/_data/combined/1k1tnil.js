/*BEGIN header */

/*BEGIN themes/default/js/plugins/jquery.ajaxmanager.js */
(function($){"use strict";var managed={},cache={};$.manageAjax=(function(){function create(name,opts){managed[name]=new $.manageAjax._manager(name,opts);return managed[name];}
function destroy(name){if(managed[name]){managed[name].clear(true);delete managed[name];}}
var publicFns={create:create,destroy:destroy};return publicFns;})();$.manageAjax._manager=function(name,opts){this.requests={};this.inProgress=0;this.name=name;this.qName=name;this.opts=$.extend({},$.manageAjax.defaults,opts);if(opts&&opts.queue&&opts.queue!==true&&typeof opts.queue==='string'&&opts.queue!=='clear'){this.qName=opts.queue;}};$.manageAjax._manager.prototype={add:function(url,o){if(typeof url=='object'){o=url;}else if(typeof url=='string'){o=$.extend(o||{},{url:url});}
o=$.extend({},this.opts,o);var origCom=o.complete||$.noop,origSuc=o.success||$.noop,beforeSend=o.beforeSend||$.noop,origError=o.error||$.noop,strData=(typeof o.data=='string')?o.data:$.param(o.data||{}),xhrID=o.type+o.url+strData,that=this,ajaxFn=this._createAjax(xhrID,o,origSuc,origCom);if(o.preventDoubleRequests&&o.queueDuplicateRequests){if(o.preventDoubleRequests){o.queueDuplicateRequests=false;}
setTimeout(function(){throw("preventDoubleRequests and queueDuplicateRequests can't be both true");},0);}
if(this.requests[xhrID]&&o.preventDoubleRequests){return;}
ajaxFn.xhrID=xhrID;o.xhrID=xhrID;o.beforeSend=function(xhr,opts){var ret=beforeSend.call(this,xhr,opts);if(ret===false){that._removeXHR(xhrID);}
xhr=null;return ret;};o.complete=function(xhr,status){that._complete.call(that,this,origCom,xhr,status,xhrID,o);xhr=null;};o.success=function(data,status,xhr){that._success.call(that,this,origSuc,data,status,xhr,o);xhr=null;};o.error=function(ahr,status,errorStr){var httpStatus='',content='';if(status!=='timeout'&&ahr){httpStatus=ahr.status;content=ahr.responseXML||ahr.responseText;}
if(origError){origError.call(this,ahr,status,errorStr,o);}else{setTimeout(function(){throw status+'| status: '+httpStatus+' | URL: '+o.url+' | data: '+strData+' | thrown: '+errorStr+' | response: '+content;},0);}
ahr=null;};if(o.queue==='clear'){$(document).clearQueue(this.qName);}
if(o.queue||(o.queueDuplicateRequests&&this.requests[xhrID])){$.queue(document,this.qName,ajaxFn);if(this.inProgress<o.maxRequests&&(!this.requests[xhrID]||!o.queueDuplicateRequests)){$.dequeue(document,this.qName);}
return xhrID;}
return ajaxFn();},_createAjax:function(id,o,origSuc,origCom){var that=this;return function(){if(o.beforeCreate.call(o.context||that,id,o)===false){return;}
that.inProgress++;if(that.inProgress===1){$.event.trigger(that.name+'AjaxStart');}
if(o.cacheResponse&&cache[id]){if(!cache[id].cacheTTL||cache[id].cacheTTL<0||((new Date().getTime()-cache[id].timestamp)<cache[id].cacheTTL)){that.requests[id]={};setTimeout(function(){that._success.call(that,o.context||o,origSuc,cache[id]._successData,'success',cache[id],o);that._complete.call(that,o.context||o,origCom,cache[id],'success',id,o);},0);}else{delete cache[id];}}
if(!o.cacheResponse||!cache[id]){if(o.async){that.requests[id]=$.ajax(o);}else{$.ajax(o);}}
return id;};},_removeXHR:function(xhrID){if(this.opts.queue||this.opts.queueDuplicateRequests){$.dequeue(document,this.qName);}
this.inProgress--;this.requests[xhrID]=null;delete this.requests[xhrID];},clearCache:function(){cache={};},_isAbort:function(xhr,status,o){if(!o.abortIsNoSuccess||(!xhr&&!status)){return false;}
var ret=!!((!xhr||xhr.readyState===0||this.lastAbort===o.xhrID));xhr=null;return ret;},_complete:function(context,origFn,xhr,status,xhrID,o){if(this._isAbort(xhr,status,o)){status='abort';o.abort.call(context,xhr,status,o);}
origFn.call(context,xhr,status,o);$.event.trigger(this.name+'AjaxComplete',[xhr,status,o]);if(o.domCompleteTrigger){$(o.domCompleteTrigger).trigger(this.name+'DOMComplete',[xhr,status,o]).trigger('DOMComplete',[xhr,status,o]);}
this._removeXHR(xhrID);if(!this.inProgress){$.event.trigger(this.name+'AjaxStop');}
xhr=null;},_success:function(context,origFn,data,status,xhr,o){var that=this;if(this._isAbort(xhr,status,o)){xhr=null;return;}
if(o.abortOld){$.each(this.requests,function(name){if(name===o.xhrID){return false;}
that.abort(name);});}
if(o.cacheResponse&&!cache[o.xhrID]){if(!xhr){xhr={};}
cache[o.xhrID]={status:xhr.status,statusText:xhr.statusText,responseText:xhr.responseText,responseXML:xhr.responseXML,_successData:data,cacheTTL:o.cacheTTL,timestamp:new Date().getTime()};if('getAllResponseHeaders'in xhr){var responseHeaders=xhr.getAllResponseHeaders();var parsedHeaders;var parseHeaders=function(){if(parsedHeaders){return;}
parsedHeaders={};$.each(responseHeaders.split("\n"),function(i,headerLine){var delimiter=headerLine.indexOf(":");parsedHeaders[headerLine.substr(0,delimiter)]=headerLine.substr(delimiter+2);});};$.extend(cache[o.xhrID],{getAllResponseHeaders:function(){return responseHeaders;},getResponseHeader:function(name){parseHeaders();return(name in parsedHeaders)?parsedHeaders[name]:null;}});}}
origFn.call(context,data,status,xhr,o);$.event.trigger(this.name+'AjaxSuccess',[xhr,o,data]);if(o.domSuccessTrigger){$(o.domSuccessTrigger).trigger(this.name+'DOMSuccess',[data,o]).trigger('DOMSuccess',[data,o]);}
xhr=null;},getData:function(id){if(id){var ret=this.requests[id];if(!ret&&this.opts.queue){ret=$.grep($(document).queue(this.qName),function(fn,i){return(fn.xhrID===id);})[0];}
return ret;}
return{requests:this.requests,queue:(this.opts.queue)?$(document).queue(this.qName):[],inProgress:this.inProgress};},abort:function(id){var xhr;if(id){xhr=this.getData(id);if(xhr&&xhr.abort){this.lastAbort=id;xhr.abort();this.lastAbort=false;}else{$(document).queue(this.qName,$.grep($(document).queue(this.qName),function(fn,i){return(fn!==xhr);}));}
xhr=null;return;}
var that=this,ids=[];$.each(this.requests,function(id){ids.push(id);});$.each(ids,function(i,id){that.abort(id);});},clear:function(shouldAbort){$(document).clearQueue(this.qName);if(shouldAbort){this.abort();}}};$.manageAjax._manager.prototype.getXHR=$.manageAjax._manager.prototype.getData;$.manageAjax.defaults={beforeCreate:$.noop,abort:$.noop,abortIsNoSuccess:true,maxRequests:1,cacheResponse:false,async:true,domCompleteTrigger:false,domSuccessTrigger:false,preventDoubleRequests:true,queueDuplicateRequests:false,cacheTTL:-1,queue:false};$.each($.manageAjax._manager.prototype,function(n,fn){if(n.indexOf('_')===0||!$.isFunction(fn)){return;}
$.manageAjax[n]=function(name,o){if(!managed[name]){if(n==='add'){$.manageAjax.create(name,o);}else{return;}}
var args=Array.prototype.slice.call(arguments,1);managed[name][n].apply(managed[name],args);};});})(jQuery);

/*BEGIN themes/default/js/plugins/jquery.tipTip.minified.js */
/*
 * TipTip
 * Copyright 2010 Drew Wilson
 * www.drewwilson.com
 * code.drewwilson.com/entry/tiptip-jquery-plugin
 *
 * Version 1.3   -   Updated: Mar. 23, 2010
 *
 * This Plug-In will create a custom tooltip to replace the default
 * browser tooltip. It is extremely lightweight and very smart in
 * that it detects the edges of the browser window and will make sure
 * the tooltip stays within the current window size. As a result the
 * tooltip will adjust itself to be displayed above, below, to the left 
 * or to the right depending on what is necessary to stay within the
 * browser window. It is completely customizable as well via CSS.
 *
 * This TipTip jQuery plug-in is dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 */
(function($){$.fn.tipTip=function(options){var defaults={activation:"hover",keepAlive:false,maxWidth:"200px",edgeOffset:3,defaultPosition:"bottom",delay:400,fadeIn:200,fadeOut:200,attribute:"title",content:false,enter:function(){},exit:function(){}};var opts=$.extend(defaults,options);if($("#tiptip_holder").length<=0){var tiptip_holder=$('<div id="tiptip_holder" style="max-width:'+opts.maxWidth+';"></div>');var tiptip_content=$('<div id="tiptip_content"></div>');var tiptip_arrow=$('<div id="tiptip_arrow"></div>');$("body").append(tiptip_holder.html(tiptip_content).prepend(tiptip_arrow.html('<div id="tiptip_arrow_inner"></div>')))}else{var tiptip_holder=$("#tiptip_holder");var tiptip_content=$("#tiptip_content");var tiptip_arrow=$("#tiptip_arrow")}return this.each(function(){var org_elem=$(this);if(opts.content){var org_title=opts.content}else{var org_title=org_elem.attr(opts.attribute)}if(org_title!=""){if(!opts.content){org_elem.removeAttr(opts.attribute)}var timeout=false;if(opts.activation=="hover"){org_elem.hover(function(){active_tiptip()},function(){if(!opts.keepAlive){deactive_tiptip()}});if(opts.keepAlive){tiptip_holder.hover(function(){},function(){deactive_tiptip()})}}else if(opts.activation=="focus"){org_elem.focus(function(){active_tiptip()}).blur(function(){deactive_tiptip()})}else if(opts.activation=="click"){org_elem.click(function(){active_tiptip();return false}).hover(function(){},function(){if(!opts.keepAlive){deactive_tiptip()}});if(opts.keepAlive){tiptip_holder.hover(function(){},function(){deactive_tiptip()})}}function active_tiptip(){opts.enter.call(this);tiptip_content.html(org_title);tiptip_holder.hide().removeAttr("class").css("margin","0").css("max-width",opts.maxWidth);tiptip_arrow.removeAttr("style");var top=parseInt(org_elem.offset()['top']);var left=parseInt(org_elem.offset()['left']);var org_width=parseInt(org_elem.outerWidth());var org_height=parseInt(org_elem.outerHeight());var tip_w=tiptip_holder.outerWidth();var tip_h=tiptip_holder.outerHeight();var w_compare=Math.round((org_width-tip_w)/2);var h_compare=Math.round((org_height-tip_h)/2);var marg_left=Math.round(left+w_compare);var marg_top=Math.round(top+org_height+opts.edgeOffset);var t_class="";var arrow_top="";var arrow_left=Math.round(tip_w-12)/2;if(opts.defaultPosition=="bottom"){t_class="_bottom"}else if(opts.defaultPosition=="top"){t_class="_top"}else if(opts.defaultPosition=="left"){t_class="_left"}else if(opts.defaultPosition=="right"){t_class="_right"}var right_compare=(w_compare+left)<parseInt($(window).scrollLeft());var left_compare=(tip_w+left)>parseInt($(window).width());if((right_compare&&w_compare<0)||(t_class=="_right"&&!left_compare)||(t_class=="_left"&&left<(tip_w+opts.edgeOffset+5))){t_class="_right";arrow_top=Math.round(tip_h-13)/2;arrow_left=-12;marg_left=Math.round(left+org_width+opts.edgeOffset);marg_top=Math.round(top+h_compare)}else if((left_compare&&w_compare<0)||(t_class=="_left"&&!right_compare)){t_class="_left";arrow_top=Math.round(tip_h-13)/2;arrow_left=Math.round(tip_w);marg_left=Math.round(left-(tip_w+opts.edgeOffset+5));marg_top=Math.round(top+h_compare)}var top_compare=(top+org_height+opts.edgeOffset+tip_h+8)>parseInt($(window).height()+$(window).scrollTop());var bottom_compare=((top+org_height)-(opts.edgeOffset+tip_h+8))<0;if(top_compare||(t_class=="_bottom"&&top_compare)||(t_class=="_top"&&!bottom_compare)){if(t_class=="_top"||t_class=="_bottom"){t_class="_top"}else{t_class=t_class+"_top"}arrow_top=tip_h;marg_top=Math.round(top-(tip_h+5+opts.edgeOffset))}else if(bottom_compare|(t_class=="_top"&&bottom_compare)||(t_class=="_bottom"&&!top_compare)){if(t_class=="_top"||t_class=="_bottom"){t_class="_bottom"}else{t_class=t_class+"_bottom"}arrow_top=-12;marg_top=Math.round(top+org_height+opts.edgeOffset)}if(t_class=="_right_top"||t_class=="_left_top"){marg_top=marg_top+5}else if(t_class=="_right_bottom"||t_class=="_left_bottom"){marg_top=marg_top-5}if(t_class=="_left_top"||t_class=="_left_bottom"){marg_left=marg_left+5}tiptip_arrow.css({"margin-left":arrow_left+"px","margin-top":arrow_top+"px"});tiptip_holder.css({"margin-left":marg_left+"px","margin-top":marg_top+"px"}).attr("class","tip"+t_class);if(timeout){clearTimeout(timeout)}timeout=setTimeout(function(){tiptip_holder.stop(true,true).fadeIn(opts.fadeIn)},opts.delay)}function deactive_tiptip(){opts.exit.call(this);if(timeout){clearTimeout(timeout)}tiptip_holder.fadeOut(opts.fadeOut)}}})}})(jQuery);

