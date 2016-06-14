/* @preserve
 * Title                   : PhotoBox
 * Version                 : 0.98
 * Copyright               : 2015 CodEasily.com
 * Website                 : http://www.codeasily.com
 * Credits                 : Based on photobox.js ((c) 2013 Yair Even Or <http://dropthebit.com>)
 *   												Uses jQuery-mousewheel ((c) 2009 Brandon Aaron <http://brandonaaron.net>)
 */
!function($,e,t){"use strict";function i(e){for(var t=e.length,i=5381*t*(e.charCodeAt(0)+t),o=0;o<e.length;o++)i+=Math.floor((e.charCodeAt(o)+o+.33)/(e.charCodeAt(t-o-1)+t)+(e.charCodeAt(o)+t)*(e.charCodeAt(t-o-1)+o+.33));return i}function o(e,t,o){t||(t="0:lk"),o||(o="xyxx-xxyx-xxxy");var n=i((e+":"+t).toLowerCase()),s=n;o=o.replace(/[xy]/g,function(e){var t=n%16|0,i="x"==e?t:7&t|8;return n=Math.floor(15*n/16),i.toString(16)});var a=t+"-"+o;return a.toLowerCase()}function n(){F&&J.addClass("msie"),R&&J.hide(),le.off().on("click",B.toggle),de.off().on("click","a",P.click),W&&de.css("overflow","auto"),J.off().on("click","img",function(e){e.stopPropagation()}),$(e.body).prepend($(J)),I=e.documentElement}function s(e,t,i){1==t?(ee.css({transform:"translateX(25%)",transition:".7s",opacity:0}),setTimeout(function(){h(O)},200)):-1==t&&(ee.css({transform:"translateX(-25%)",transition:".7s",opacity:0}),setTimeout(function(){h(S)},200)),1==i?de.addClass("pbShow"):-1==i&&de.removeClass("pbShow")}function a(t){var i,o=e.createElement("p").style,n=["ms","O","Moz","Webkit"];if(""==o[t])return t;for(t=t.charAt(0).toUpperCase()+t.slice(1),i=n.length;i--;)if(""==o[n[i]+t])return n[i]+t}function r(e){var t=e.keyCode,i=T.keys,o;return i.close.indexOf(t)>=0&&x()||i.next.indexOf(t)>=0&&h(S)||i.prev.indexOf(t)>=0&&h(O)||!0}function l(){var e="pbPrevBtn"==this.id?O:S;return h(e),!1}function d(e){z=E,E=e,H=_[e].src,M="photoBox-"+_[e].id,O=(E||(T.loop?_.length:0))-1,S=(E+1)%_.length||(T.loop?0:-1)}function h(e,t,i){if((!e||0>e)&&(e=0),J.removeClass("pbError").addClass(e>E?"pb_next":"pb_prev"),d(e),w(),te.empty(),K.onerror=null,ee.add(te).data("zoom",1),D="video"==L[e].rel?"video":"image","video"==D)te.html(p()).addClass("pbHide"),m(t);else{var o=setTimeout(function(){J.addClass("pbLoading")},50);T.loop||(oe[e==_.length-1?"addClass":"removeClass"]("pbHide"),ie[0==e?"addClass":"removeClass"]("pbHide")),O>=0&&(Q.src=_[O].src),S>=0&&(Z.src=_[S].src),F&&J.addClass("pbHide"),T.autoplay&&B.progress.reset(),K=new Image,K.onload=function(){clearTimeout(o),m(t)},K.onerror=u,K.src=H}ae.on(N,c).addClass("pb_change"),(t||F)&&c(),T.thumbs&&P.changeActive(e,t,i),me.save()}function p(){var e=_[E].src,t=$("<a>").prop("href",_[E].src)[0].search?"&":"?";return e+=t+"vq=hd720&wmode=opaque",$("<iframe>").prop({scrolling:"no",frameborder:0,allowTransparency:!0,src:e}).attr({webkitAllowFullScreen:!0,mozallowfullscreen:!0,allowFullScreen:!0})}function c(){ae.off(N).removeClass("pb_change"),T.counter&&se.find(".pbCounter").text("("+(E+1)+" / "+_.length+")");var e=_[E].title;_[E].link&&(e=$("<a>").attr("href",_[E].link).text(e)),T.title&&se.find(".pbTitle").html(e),T.caption&&se.find(".pbDescription").html(_[E].text)}function u(){J.addClass("pbError"),ee[0].src=q,K.onerror=null}function m(e){function t(){clearTimeout(o),i.off(N).css({transition:"none"}),J.removeClass("pb_video"),"video"==D?(ee[0].src=q,te.addClass("pb_prepare"),J.addClass("pb_video")):ee.prop({src:H,"class":"pb_prepare"}),setTimeout(function(){ee.add(te).removeAttr("style").removeClass("pb_prepare"),J.removeClass("pbHide pb_next pb_prev"),setTimeout(function(){ee.add(te).on(N,v),F&&v()},0)},50)}var i,o;o=setTimeout(t,2e3),J.removeClass("pbLoading").addClass("pbHide"),ee.add(te).removeAttr("style").removeClass("pb_zoomable"),e||"video"!=L[z].rel?i=ee:(i=te,ee.addClass("pb_prepare")),e||F?t():i.on(N,t)}function v(){ee.add(te).off(N).addClass("pb_zoomable"),"video"==D?te.removeClass("pbHide"):le&&T.autoplay&&B.play(),"function"==typeof k.callback&&k.callback.apply(L[E])}function b(t,i){var o;if("video"==D){if(o=te.data("zoom")||1,o+=i/10,.5>o)return!1;te.data("zoom",o).css({width:624*o,height:351*o})}else{o=ee.data("zoom")||1;var n=ee[0].getBoundingClientRect();o+=i/10,.1>o&&(o=.1),ee.data("zoom",o).css({transform:"scale("+o+")"}),n.height>I.clientHeight||n.width>I.clientWidth?$(e).on("mousemove.photobox",g):($(e).off("mousemove.photobox"),ee[0].style[j]="50% 50%")}return!1}function f(e,t){e.preventDefault(),e.stopPropagation();var i=k.thumbsList;i.css("height",i[0].clientHeight+10*t);var o=se[0].clientHeight/2;he[0].style.cssText="margin-top: -"+o+"px; padding: "+o+"px 0;",de.hide().show(0),P.calc()}function g(e){var t=e.clientY/I.clientHeight*(I.clientHeight+200)-100,i=t/I.clientHeight*100,o=e.clientX/I.clientWidth*100,n=o.toFixed(2)+"% "+i.toFixed(2)+"%";ee[0].style[j]=n}function w(){clearTimeout(B.autoPlayTimer),$(e).off("mousemove.photobox"),K.onload=function(){},K.src=Q.src=Z.src=H}function x(){function e(){""!=J[0].className&&(J.removeClass("pbShow pbHide pbError pbLoading"),k.selector.removeClass("pbShowOn"),ee.removeAttr("class").removeAttr("style").off().data("zoom",1),R&&setTimeout(function(){J.hide()},200))}w(),te.find("iframe").prop("src","").empty(),C.prototype.setup(),me.clear(),J.removeClass("on pb_video").addClass("pbHide"),ee.on(N,e),F&&e(),setTimeout(e,500)}function y(e){var i=e||t.event,o=[].slice.call(arguments,1),n=0,s=!0,a=0,r=0;return e=$.event.fix(i),e.type="mousewheel",i.wheelDelta&&(n=i.wheelDelta/120),i.detail&&(n=-i.detail/3),r=n,void 0!==i.axis&&i.axis===i.HORIZONTAL_AXIS&&(r=0,a=-1*n),void 0!==i.wheelDeltaY&&(r=i.wheelDeltaY/120),void 0!==i.wheelDeltaX&&(a=-1*i.wheelDeltaX/120),o.unshift(e,n,a,r),($.event.dispatch||$.event.handle).apply(this,o)}var C,A=[],k,T,_=[],L,E=-1,M,H,z,D,O,S,P,I,B,N="transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd",F=!("placeholder"in e.createElement("input")),R=function(){var e=$("<p>")[0];return e.style.cssText="pointer-events:auto",!e.style.pointerEvents}(),W="ontouchend"in e,X,U,Y=$(),q="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==",j=a("transformOrigin"),G=a("transition"),K={},Q=new Image,Z=new Image,J,V,ee,te,ie,oe,ne="",se,ae,re,le,de,he,pe={keys:{close:"27, 88, 67",prev:"37, 80",next:"39, 78"}},ce={loop:!0,thumbs:!0,counter:!0,title:!0,caption:!0,autoplay:!1,history:!0,hideFlash:!0,zoomable:!0},ue={time:3e3,thumbwidth:75,thumbheight:68,thumbsvpad:18,thumbshpad:20};J=$('<div id="pbOverlay">').append(re=$('<div class="pbLoader"><b></b><b></b><b></b></div>'),ie=$('<div id="pbPrevBtn" class="pbPrevNext"><b></b></div>').on("click",l),oe=$('<div id="pbNextBtn" class="pbPrevNext"><b></b></div>').on("click",l),he=$('<div class="pbWrapper">').append(ee=$("<img>"),te=$("<div>")),V=$('<div id="pbCloseBtn">').on("click",x)[0],le=$('<div id="pbAutoplayBtn">').append($('<div class="pbProgress">')),se=$('<div id="pbCaption">').append(ae=$('<div class="pbCaptionText">').append('<div class="pbTitle"></div><div class="pbCounter"></div><div class="pbDescription"></div>'),de=$("<div>").addClass("pbThumbs"))),$.fn.photobox=function(e,i,s){if($(this).data("_photobox"))return this;if("string"!=typeof e&&(e="a"),"prepareDOM"===e)return n(),this;var a=$.extend({},pe,ce,ue,i||{});$.each(a,function(e,t){e in ce?a[e]=!(!t||"0"==t||"false"==t):e in ue&&(a[e]=parseInt(t))});var r=o(t.location.hostname.replace("www.",""),a.key.split("-",2)[0]);a.key&&a.key==r||(ne=$('<div style="background: transparent; position:absolute; z-index:10; height:auto; width:100%; padding:0; margin:0; box-sizing:border-box; -moz-box-sizing:border-box; top:0; left:0; text-align: center;"><a href="http://codeasily.com/portfolio-item/gmedia-photobox/" target="_blank" style="background:rgba(216,255,22,0.8); margin: 0 auto; padding: 4px 10px; width: auto; height: auto; text-indent: 0; display:none; font-size:14px; color:#123456; border-radius: 0 0 4px 4px; font-weight:bold;">built with GmediaGallery</a></div>'),J.append(ne));var l=new C(a,this,e);return $(this).data("_photobox",l),l.callback=s,A.push(l),this},C=function(t,i,o){this.options=$.extend({},t),this.target=o,this.selector=$(i||e);var n=$(".gmlove",this.selector);n=n.length?n[0].outerHTML:"",this.selector.empty();var s=$('<ul class="gmPhotoBox"></ul>').appendTo(this.selector);$(n).appendTo(this.selector);var a=this.options,r={padding:a.thumbsvpad+"px "+a.thumbshpad+"px"},l={width:a.thumbwidth,height:a.thumbheight};window.matchMedia&&window.matchMedia("all and (max-width:700px)").matches?(r={padding:Math.round(a.thumbsvpad/1.3)+"px "+Math.round(a.thumbshpad/1.3)+"px"},l={width:Math.round(a.thumbwidth/1.3),height:Math.round(a.thumbheight/1.3)}):window.matchMedia&&window.matchMedia("only screen and (-webkit-min-device-pixel-ratio: 2) and (min-width: 1300px), only screen and (min--moz-device-pixel-ratio: 2) and (min-width: 1300px), only screen and (-o-min-device-pixel-ratio: 2/1) and (min-width: 1300px), only screen and (min-device-pixel-ratio: 2) and (min-width: 1300px), only screen and (min-resolution: 192dpi) and (min-width: 1300px), only screen and (min-resolution: 2dppx) and (min-width: 1300px)").matches&&(r={padding:2*a.thumbsvpad+"px "+2*a.thumbshpad+"px"},l={width:2*a.thumbwidth,height:2*a.thumbheight}),this.options.thumbRatio=a.thumbwidth/a.thumbheight,s.css(r);var d=1;$.each(this.options.content,function(e,t){var i=new Image,o=document.createElement("a"),n=document.createElement("li"),r;$(n).css(l),o.href=a.libraryUrl+t.image,n.appendChild(o),s[0].appendChild(n),i.onload=function(e){i.onload=null,r=this.width/this.height,a.thumbRatio>r&&$(n).addClass("pb_imgHauto"),o.appendChild(this),setTimeout(function(){$(n).addClass("pbLoaded")},25*d++)},i.src=a.libraryUrl+t.thumb,i.alt=t.title,i.title=t.title,i.setAttribute("data-id",t.id),i.setAttribute("data-text",t.text)}),this.thumbsList=null;var h=this.imageLinksFilter(i.find(o));this.imageLinks=h[0],this.images=h[1],this.init()},C.prototype={init:function(){var e=this;this.options.thumbs&&(this.thumbsList=P.generate(this.imageLinks)),$(".gmPhotoBox",this.selector).on("click.photobox",this.target,function(t){t.preventDefault(),e.open(this)}),this.observerTimeout=null,1==this.selector[0].nodeType&&e.observeDOM(e.selector[0],function(){clearTimeout(e.observerTimeout),e.observerTimeout=setTimeout(function(){var t=e.imageLinksFilter(e.selector.find(e.target)),i;e.imageLinks=t[0],e.images=t[1],_=e.images,L=e.imageLinks,e.thumbsList=P.generate(e.imageLinks),de.html(e.thumbsList),H&&(i=e.thumbsList.find('a[href="'+H+'"]').eq(0).parent().index(),d(i),P.changeActive(i,0))},50)})},open:function(e){var t=$.inArray(e,this.imageLinks);if(-1==t)return!1;T=this.options,_=this.images,L=this.imageLinks,k=this,k.selector.addClass("pbShowOn"),this.setup(1);var i=!1;return J.on(N,function(){J.off(N).addClass("on"),h(t,!0),i=!0}).addClass("pbShow"),(F||!i)&&J.trigger("MSTransitionEnd"),!1},imageLinksFilter:function(e){T=this.options;var t=[];return[e.filter(function(e){var i=this,o=$(i).find("img")[0],n=$(o).data("id");if(!o)return!1;var s=n==T.content[e].id?T.content[e].link:"";return t.push({id:n,src:i.href,title:o.getAttribute("alt")||o.getAttribute("title")||"",text:o.getAttribute("data-text"),link:s}),!0}),t]},observeDOM:function(){var e=t.MutationObserver||t.WebKitMutationObserver,i=t.addEventListener;return function(t,o){if(e){var n=new e(function(e,t){(e[0].addedNodes.length||e[0].removedNodes.length)&&o()});n.observe(t,{childList:!0,subtree:!0})}else i&&(t.addEventListener("DOMNodeInserted",o,!1),t.addEventListener("DOMNodeRemoved",o,!1))}}(),setup:function(i){var o=i?"on":"off";ee[0].src=q,i?(ee.css({transition:"0s"}).removeAttr("style"),J.show(),de.html(this.thumbsList),J[T.thumbs?"addClass":"removeClass"]("pb_thumbs"),T.thumbs&&(Y.removeAttr("class"),$(t).on("resize.photobox",P.calc),P.calc()),this.images.length<2?J.removeClass("pb_thumbs pb_hasArrows pb_hasCounter pb_hasAutoplay"):(J.addClass("pb_hasArrows pb_hasCounter"),T.time>1e3?(J.addClass("pb_hasAutoplay"),T.autoplay?B.progress.start():B.pause()):J.removeClass("pb_hasAutoplay"))):$(t).off("resize.photobox"),T.hideFlash&&$.each(["object","embed"],function(e,t){$(t).each(function(){i&&(this._photobox=this.style.visibility),this.style.visibility=i?"hidden":this._photobox})}),$(e).off("keydown.photobox")[o]({"keydown.photobox":r}),"ontouchstart"in document.documentElement&&(J.removeClass("pb_hasArrows"),he[o]("swipe",s)),T.zoomable&&(J[o]({"mousewheel.photobox":b}),F||de[o]({"mousewheel.photobox":f}))},destroy:function(){return this.selector.off("click.photobox",this.target).removeData("_photobox"),x(),this.selector}},P={generate:function(e){var t=$("<ul>"),i,o=[],n,s=e.size(),a,r,l;for(n=0;s>n;n++)i=e[n],r=$(i).find("img"),a=r[0].title||r[0].alt||"",l=i.rel?" class='pb_"+i.rel+"'":"",o.push("<li"+l+'><a href="'+i.href+'"><img src="'+r[0].src+'" alt="" title="'+a+'" /></a></li>');return t.html(o.join("")),t},click:function(e){e.preventDefault(),Y.removeClass("pb_active"),Y=$(this).parent().addClass("pb_active");var t=$(this.parentNode).index();return h(t,0,1)},changeActiveTimeout:null,changeActive:function(e,t,i){var o=Y.index();Y.removeClass("pb_active"),Y=de.find("li").eq(e).addClass("pb_active"),i||(clearTimeout(this.changeActiveTimeout),this.changeActiveTimeout=setTimeout(function(){var e=Y[0].offsetLeft+Y[0].clientWidth/2-I.clientWidth/2;t?de.delay(800):de.stop(),de.animate({scrollLeft:e},500,"swing")},200))},calc:function(){X=de[0].clientWidth,U=de[0].firstChild.clientWidth;var e=U>X?"on":"off";return!W&&de[e]("mousemove",P.move),this},move:function(e){var t=U/X;de[0].scrollLeft=e.pageX*t-500}},B={autoPlayTimer:!1,play:function(){B.autoPlayTimer=setTimeout(function(){h(S)},T.time),B.progress.start(),le.removeClass("pb_play"),B.setTitle("Click to stop autoplay"),T.autoplay=!0},pause:function(){clearTimeout(B.autoPlayTimer),B.progress.reset(),le.addClass("pb_play"),B.setTitle("Click to resume autoplay"),T.autoplay=!1},progress:{reset:function(){le.find("div").removeAttr("style"),setTimeout(function(){le.removeClass("pb_playing")},200)},start:function(){F||le.find("div").css(G,T.time+"ms"),le.addClass("pb_playing")}},setTitle:function(e){e&&le.prop("title",e+" (every "+T.time/1e3+" seconds)")},toggle:function(e){e.stopPropagation(),B[T.autoplay?"pause":"play"]()}};var me={save:function(){"pushState"in window.history&&decodeURIComponent(window.location.hash.slice(1))!=M&&T.history&&window.history.pushState("photobox",e.title+"-"+_[E].title,window.location.pathname+window.location.search+"#"+encodeURIComponent(M))},load:function(){if(T&&!T.history)return!1;var e=decodeURIComponent(window.location.hash.slice(10)),t,i;if(!e&&J.hasClass("pbShow"))x();else for(t=0;t<A.length;t++)for(i in A[t].images)if(A[t].images[i].id==e)return A[t].open(A[t].imageLinks[i]),!0},clear:function(){T.history&&"pushState"in window.history&&window.history.pushState("photobox",e.title,window.location.pathname+window.location.search)}};window.onpopstate=function(){var e=window.onpopstate;return function(t){e&&e.apply(this,arguments),"photobox"==t.state&&me.load()}}();var ve=["DOMMouseScroll","mousewheel"];if($.event.fixHooks)for(var be=ve.length;be;)$.event.fixHooks[ve[--be]]=$.event.mouseHooks;$.event.special.mousewheel={setup:function(){if(this.addEventListener)for(var e=ve.length;e;)this.addEventListener(ve[--e],y,!1);else this.onmousewheel=y},teardown:function(){if(this.removeEventListener)for(var e=ve.length;e;)this.removeEventListener(ve[--e],y,!1);else this.onmousewheel=null}},$.fn.extend({mousewheel:function(e){return e?this.bind("mousewheel",e):this.trigger("mousewheel")},unmousewheel:function(e){return this.unbind("mousewheel",e)}}),$.event.special.swipe={setup:function(){$(this).bind("touchstart",$.event.special.swipe.handler)},teardown:function(){$(this).unbind("touchstart",$.event.special.swipe.handler)},handler:function(e){function t(){d.removeEventListener("touchmove",i),s=a=null}function i(i){i.preventDefault();var n=s-i.touches[0].pageX,h=a-i.touches[0].pageY;return Math.abs(n)>=20?(t(),r=n>0?-1:1):Math.abs(h)>=20&&(t(),l=h>0?1:-1),e.type="swipe",o.unshift(e,r,l),($.event.dispatch||$.event.handle).apply(d,o)}var o=[].slice.call(arguments,1),n=e.originalEvent.touches,s,a,r=0,l=0,d=this;e=$.event.fix(e),1==n.length&&(s=n[0].pageX,a=n[0].pageY,this.addEventListener("touchmove",i,!1))}},$(e).ready(n),window._photobox={history:me}}(jQuery,document,window);
