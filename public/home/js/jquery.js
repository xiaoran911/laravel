!function(e){function t(r){if(n[r])return n[r].exports;var i=n[r]={exports:{},id:r,loaded:!1};return e[r].call(i.exports,i,i.exports,t),i.loaded=!0,i.exports}var n={};return t.m=e,t.c=n,t.p="",t(0)}([function(e,t,n){e.exports=n(1)},function(e,t,n){n(2),~function(){var e,t={propertyName:"data-stat-id",urlParam:"stat",needMap:!0,domain:".mi.com",live:!1},n={parentLoop:!1,sonLoop:!1,exposure:null,re:{normalEnd:/\/(index.php|index.html|index.htm|index)$/,snapshotModalDate:/^(\/\d{10}\/)/,snapshotModalEnd:/.html$/},locationObj:{protocol:location.protocol+"//",host:location.host,pathname:location.pathname}},r=function(t,r,a){for(var s=document.querySelectorAll(".J_linksign-customize"),u=[],c=0;c<s.length;c++)for(var l=0;l<s[c].children.length;l++)u.push(s[c].children[l]);if(s)var d=xmstLittle.merge_object(t[0].getElementsByTagName("a"),u);else var d=t[0].getElementsByTagName("a");var m={page:xmstLittle.getPcid(),point:null},g=xmstLittle.getObjectLength(d)-1;0>g||(r===a&&(n.parentLoop=!0),xmstLittle.each(d,function(t,n){var a=xmstLittle(n).elements[0],s="";if("true"!=a.getAttribute("data-stat-exclude")){var u=xmstLittle.trim(a.getAttribute("href"))||a.getAttribute("data-stat-productid")||"",c=xmstLittle.trim(a.innerText),l=a.parentNode.getAttribute("class")||a.getAttribute("class")||"",d=r+""+t;aid=a.getAttribute("data-stat-aid"),pid=a.getAttribute("data-stat-pid"),logCode=a.getAttribute("data-log_code")||"";var g=u+c+l+d;m.point=pid?aid+"+"+pid:xmstMd5(g);var s=a.getAttribute("onclick")||"",p=i(o(m,"-"),u,logCode),f=p+s;e.repeat&&(f=p,a.removeAttribute(e.propertyName),a.removeAttribute("onclick"),a.setAttribute("data-stat-repeat",!0)),a.getAttribute(e.propertyName)||(a.setAttribute(e.propertyName,m.point),a.setAttribute("onclick",f))}}))},i=function(e,t,n){var r=xmstLittle.stripscript("'trackEvent', '"+e+"', '"+t+"', 'pcpid', '"+n+"'");return"_msq.push(["+r+"]);"},o=function(e,t){var n=[];if("undefined"!=typeof e)for(var r in e){var i=e[r];i=null==i||""==i?"00":i,n.push(i)}return n.join(t)};xmstLittle.fn.linkSign=function(n){e=xmstLittle.extend(t,n);var i=this.length-1,o=this.elements;xmstLittle.each(o,function(e,t){r(o,e,i)})},xmstLittle(function(){xmstLittle("body").linkSign()})}()},function(e,t){!function(e,t){var n={},r=n.toString,i="1.0.0",o=function(e,t){return new o.fn.init(e,t)};o.fn=o.prototype,o.fn={constructor:o,each:function(e,t){return o.each(this,e,t)},pushStack:function(e){var t=o.merge(this.constructor(),e);return t.prevObject=this,t.context=this.context,t}};var a=o.fn.init=function(e){if(this.elements=[],!e)return this;switch(typeof e){case"function":o.bindEvent(window,"load",e);break;case"string":this.elements=document.querySelectorAll(e);break;case"object":e.constructor===Array?this.elements=e:this.elements.push(e)}return void 0!==e&&(this.selector=e,this.length=this.elements.length,this.elements=this.elements),this};return a.prototype=o.fn,o.extend=o.fn.extend=function(){var e,t,n,r,i,a,s=arguments[0]||{},u=1,c=arguments.length,l=!1;for("boolean"==typeof s&&(l=s,s=arguments[u]||{},u++),"object"==typeof s||o.isFunction(s)||(s={}),u===c&&(s=this,u--);c>u;u++)if(null!=(i=arguments[u]))for(r in i)e=s[r],n=i[r],s!==n&&(l&&n&&(o.isPlainObject(n)||(t=o.isArray(n)))?(t?(t=!1,a=e&&o.isArray(e)?e:[]):a=e&&o.isPlainObject(e)?e:{},s[r]=o.extend(l,a,n)):void 0!==n&&(s[r]=n));return s},o.fn.extend({hasClass:function(e){for(var t=/[\t\r\n\f]/g,n=this.elements,r=" "+e+" ",i=0,o=n.length;o>i;i++)if(1===n[i].nodeType&&(" "+n[i].className+" ").replace(t," ").indexOf(r)>=0)return!0;return!1}}),o.extend({isFunction:function(e){return"function"===o.type(e)},isArray:Array.isArray||function(e){return"array"===o.type(e)},isWindow:function(e){return null!=e&&e==e.window},trim:function(e){try{return e.replace(/\s/g,"")}catch(t){return e}},stripscript:function(e){for(var t=new RegExp("[`~!$^*()%|{};\\[\\]<>?~！￥……*（）——|{}【】‘；”“。，、？]"),n="",r=0;r<e.length;r++)n+=e.substr(r,1).replace(t,"");return n},isPlainObject:function(e){var t;if(!e||"object"!==o.type(e)||e.nodeType||o.isWindow(e))return!1;try{if(e.constructor&&!hasOwn.call(e,"constructor")&&!hasOwn.call(e.constructor.prototype,"isPrototypeOf"))return!1}catch(n){return!1}if(support.ownLast)for(t in e)return hasOwn.call(e,t);for(t in e);return void 0===t||hasOwn.call(e,t)},type:function(e){return null==e?e+"":"object"==typeof e||"function"==typeof e?n[r.call(e)]||"object":typeof e},each:function(e,t,n){var r,i=0,a=e.length,s=o.isArraylike(e);if(n){if(s)for(;a>i&&(r=t.apply(e[i],n),r!==!1);i++);else for(i in e)if(r=t.apply(e[i],n),r===!1)break}else if(s)for(;a>i&&(r=t.call(e[i],i,e[i]),r!==!1);i++);else for(i in e)if(r=t.call(e[i],i,e[i]),r===!1)break;return e},isApp:function(){var e=navigator.userAgent.toLowerCase();return"undefined"!=typeof WE&&-1!==e.indexOf("xiaomi/miuibrowser/4.3/shop")&&-1===e.indexOf("iphone")?!0:!1},removeBlanks:function(e){for(var t="",n=0;n<e.length;n++){var r=e.charAt(n);" "!==r&&(t+=r)}return t},inArray:function(e,t){for(var n in t)if(t[n]==e)return!0;return!1},creatScript:function(e){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src=e;var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(t,n)},getByClass:function(e,t){for(var n=[],r=(e||document).getElementsByTagName("*"),i=0,o=r.length;o>i;i++)-1!==r[i].className.indexOf(t)&&n.push(r[i]);return n},bindEvent:function(e,t,n){e.listeners=e.listeners||{},e.listeners[t]=e.listeners[t]||[],e.listeners[t].push(n),n.bindFn=function(t){return t=t||window.event,n.call(e)===!1?(t.stopPropagation(),t.preventDefault(),!1):void 0},(1==e.nodeType||e==window||e==document)&&(e.addEventListener?e.addEventListener(t,n.bindFn,!1):e.attachEvent("on"+t,n.bindFn))},isArraylike:function(e){var t="length"in e&&e.length,n=o.type(e);return"function"===n||o.isWindow(e)?!1:1===e.nodeType&&t?!0:"array"===n||0===t||"number"==typeof t&&t>0&&t-1 in e},merge:function(e,t){for(var n=+t.length,r=0,i=e.length;n>r;)e[i++]=t[r++];if(n!==n)for(;void 0!==t[r];)e[i++]=t[r++];return e.length=i,e},merge_object:function(e,t){var n,r={};for(n in e)e.hasOwnProperty(n)&&(r[n]=e[n]);for(n in t)t.hasOwnProperty(n)&&(r[n]=t[n]);return r},setCookie:function(e,t,n,r){var i=arguments.length,o=new Date;o.setTime(o.getTime()+31104e6),document.cookie=3===i?e+"="+t+";path=/;domain="+n:e+"="+t+";path=/;domain="+n+";expires="+r},getCookie:function(e){for(var t=document.cookie,n=o.removeBlanks(t),r=n.split(";"),i=0;i<r.length;i++){var a=r[i].split("=");if(a.length>1&&a[0]===e)return a[1]}return""},getLanguage:function(){return navigator.language||navigator.userLanguage||navigator.browserLanguage||navigator.systemLanguage},getVendor:function(){return navigator.vendor},getPlatform:function(){return navigator.platform},getScreen:function(){return screen.width+"*"+screen.height},getDomain:function(){var e=window.location.hostname,t=e.split(".");size=t.length;var n="."+t[size-2]+"."+t[size-1];return n},triggerString:function(e){var t=window.WE||{};return t.triggerString&&t.triggerString(e,"")||""},getPcid:function(){var e=/\/(index.php|index.html|index.htm|index)$/,t=location.protocol+"//",n=location.host,r=location.pathname.replace(e,"/"),i=t+n+r;return o.setCookie("pageid",xmstMd5(i),o.getDomain()),xmstMd5(i)},getVistor:function(e){var t=o.getCookie("xm_vistor"),n=!0,r="",i=0,a=(new Date).getTime();if(""!==t){var s=t.split("-");2==s.length&&(r=s[0],i=s[1],18e5>=a-i&&(n=!1))}return n&&(r=e+"_"+a),i=a,o.setCookie("xm_vistor",r+"-"+i,o.getDomain()),r},getVars:function(e){var t="";if(e===[])return"";for(var n in e)t+="&"+n+"="+encodeURIComponent(e[n]);return t},getMstuid:function(){var e=new Date,t=e.getTime()+"_"+Math.round(1e4*Math.random());return t},getRandomNum:function(){return Math.round(2147483647*Math.random())},getObjectLength:function(e){var t=0;for(var n in e)t++;return t},getRefDomain:function(e){var t=document.createElement("a");return t.href=e,t.hostname},uuid:function(e,t){var n,r="0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz".split(""),i=[];if(t=t||r.length,e)for(n=0;e>n;n++)i[n]=r[0|Math.random()*t];else{var o;for(i[8]=i[13]=i[18]=i[23]="-",i[14]="4",n=0;36>n;n++)i[n]||(o=0|16*Math.random(),i[n]=r[19==n?3&o|8:o])}return i.join("")},getBaseParam:function(e){var t=document.location.href.replace(/&/g,"|"),n=document.referrer.replace(/&/g,"|");if(n=n.toLowerCase()){var r=o.getRefDomain(n),a=o.getCookie("lastsource");a&&o.setCookie("lastsource",a,o.getDomain()),(r.indexOf(".mi.com")<0||r.indexOf("s1.mi.com")>-1||r.indexOf("p.www.xiaomi.com")>-1||r.indexOf("a.union.mi.com")>-1)&&o.setCookie("lastsource",r,o.getDomain())}var s=o.getCookie("xm_www_sid"),u=o.getCookie("mstuid"),c=o.getCookie("muuid"),l=o.getCookie("mucid"),d=o.getCookie("mutid"),m=o.getCookie("mstz")||"";if(""===m||m.split("|").length<3){var g=[];g[0]="",g[1]="",g[2]=o.getRandomNum().toString()+".0";var p="mstz",f=g.join("|");o.setCookie(p,f,o.getDomain())}m=o.getCookie("mstz");var h=m.split("|")||[],v=(4==h.length?0:1,h[0]||""),x=h[1]||"";if(h[2]){var y=[];y=h[2].split(".")||"";var w=y[0],k=parseInt(y[1])+1;h[2]=y[0]+"."+k.toString()}var b=h[3]||"",C=h[4]||"",A=h[5]||"",L=0,_=encodeURIComponent(n);""==_&&(C="",A=""),_!=C&&t!=n?(A=C,C=_):""!=_&&(L=1),h[3]=encodeURIComponent(b),h[4]=encodeURIComponent(C),h[5]=encodeURIComponent(A),o.setCookie("mstz",h.join("|"),o.getDomain());var O=o.getCookie("lastsource"),j=0,D=new Date;D.setTime(D.getTime()+62208e6),""===u&&(j=1,u=o.getMstuid()),o.setCookie("mstuid",u,o.getDomain(),D.toGMTString());var E="",T=new Date;e.curl=location.href,e.xmv=o.getVistor(u),e.v=i,void 0===e.vuuid&&(e.vuuid=o.uuid(16,32));var S=o.getCookie("userId"),M="";o.isApp&&(S||(S=o.triggerString("get_encrypt_uid")),M=o.triggerString("get_shop_deviceid"));var N=function(e){e=e.replace(/[\[]/,"\\[").replace(/[\]]/,"\\]");var t=new RegExp("[\\?&]"+e+"=([^&#]*)"),n=t.exec(location.search);return null===n?"":decodeURIComponent(n[1].replace(/\+/g," "))},R=new Date;R.setTime(R.getTime()+18e5);var P=["client_id","masid","edm_task","miwd"];return o.each(P,function(e,t){var n=N(t);n&&o.setCookie(t,n,o.getDomain(),R)}),E="mid="+(o.getCookie("euid")||S)+"&device_id="+M+"&phpsessid="+s+"&mstuid="+u+"&muuid="+c+"&mucid="+l+"&sessionId="+w+"&step="+k+"&new_visitor="+j+"&mstprevpid="+encodeURIComponent(v)+"&mstprev_pid_loc="+b+"&prevtarget="+x+"&lastsource="+O+"&timestamp="+T.getTime()+"&ref="+_+"&domain="+o.getDomain()+"&screen="+o.getScreen()+"&language="+o.getLanguage()+"&vendor="+o.getVendor()+"&platform="+o.getPlatform()+"&gu="+A+"&miwd="+o.getCookie("miwd")+"&edm_task="+o.getCookie("edm_task")+"&masid="+o.getCookie("masid")+"&client_id="+o.getCookie("client_id")+"&pu="+C+"&rf="+L+"&mutid="+d+"&muwd="+encodeURIComponent(o.getCookie("muwd"))}}),o.each("Boolean Number String Function Array Date RegExp Object Error".split(" "),function(e,t){n["[object "+t+"]"]=t.toLowerCase()}),"undefined"!=typeof window&&(window.xmstLittle=o),o}(window)}]);