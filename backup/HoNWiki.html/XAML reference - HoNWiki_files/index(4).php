/* generated javascript */
var skin = 'monobook';
var stylepath = '/w/skins';

/* MediaWiki:Common.js */
<--!
var popScript     = 'http://web.archive.org/web/20111205105036/http://honwiki.net/w/Gadget-popups.js';
var popStyleSheet = 'http://web.archive.org/web/20111205105036/http://honwiki.net/w/navpop.css';
if ( window.localCSS ) { popStyleSheet = 'http://web.archive.org/web/20111205105036/http://localhost:8080/js/navpop.css'; }
 
function popups_importScriptURI(url) {
	var s = document.createElement('script');
	s.setAttribute('src',url);
	s.setAttribute('type','text/javascript');
	document.getElementsByTagName('head')[0].appendChild(s);
	return s;
}
 
function popups_importStylesheetURI(url) {
	return document.createStyleSheet ? document.createStyleSheet(url) : popups_appendCSS('@import "' + url + '";');
}
 
function popups_appendCSS(text) {
	var s = document.createElement('style');
	s.type = 'text/css';
	s.rel = 'stylesheet';
	if (s.styleSheet) s.styleSheet.cssText = text //IE
	else s.appendChild(document.createTextNode(text + '')) //Safari sometimes borks on null
	document.getElementsByTagName('head')[0].appendChild(s);
	return s;
}
 
popups_importStylesheetURI(popStyleSheet);
popups_importScriptURI(popScript);
-->

/* MediaWiki:Monobook.js */
/* Any JavaScript here will be loaded for users using the MonoBook skin */
/*
     FILE ARCHIVED ON 10:50:36 Dec 05, 2011 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 05:03:27 May 28, 2019.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  LoadShardBlock: 168.05 (3)
  esindex: 0.01
  captures_list: 197.868
  CDXLines.iter: 17.758 (3)
  PetaboxLoader3.datanode: 115.748 (4)
  exclusion.robots: 0.195
  exclusion.robots.policy: 0.183
  RedisCDXSource: 7.393
  PetaboxLoader3.resolve: 24.909
  load_resource: 107.011
*/