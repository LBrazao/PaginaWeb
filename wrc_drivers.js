// file: jquery.min.js
/*! jQuery v1.8.3 jquery.com | jquery.org/license */
(function(e,t){function _(e){var t=M[e]={};return v.each(e.split(y),function(e,n){t[n]=!0}),t}function H(e,n,r){if(r===t&&e.nodeType===1){var i="data-"+n.replace(P,"-$1").toLowerCase();r=e.getAttribute(i);if(typeof r=="string"){try{r=r==="true"?!0:r==="false"?!1:r==="null"?null:+r+""===r?+r:D.test(r)?v.parseJSON(r):r}catch(s){}v.data(e,n,r)}else r=t}return r}function B(e){var t;for(t in e){if(t==="data"&&v.isEmptyObject(e[t]))continue;if(t!=="toJSON")return!1}return!0}function et(){return!1}function tt(){return!0}function ut(e){return!e||!e.parentNode||e.parentNode.nodeType===11}function at(e,t){do e=e[t];while(e&&e.nodeType!==1);return e}function ft(e,t,n){t=t||0;if(v.isFunction(t))return v.grep(e,function(e,r){var i=!!t.call(e,r,e);return i===n});if(t.nodeType)return v.grep(e,function(e,r){return e===t===n});if(typeof t=="string"){var r=v.grep(e,function(e){return e.nodeType===1});if(it.test(t))return v.filter(t,r,!n);t=v.filter(t,r)}return v.grep(e,function(e,r){return v.inArray(e,t)>=0===n})}function lt(e){var t=ct.split("|"),n=e.createDocumentFragment();if(n.createElement)while(t.length)n.createElement(t.pop());return n}function Lt(e,t){return e.getElementsByTagName(t)[0]||e.appendChild(e.ownerDocument.createElement(t))}function At(e,t){if(t.nodeType!==1||!v.hasData(e))return;var n,r,i,s=v._data(e),o=v._data(t,s),u=s.events;if(u){delete o.handle,o.events={};for(n in u)for(r=0,i=u[n].length;r<i;r++)v.event.add(t,n,u[n][r])}o.data&&(o.data=v.extend({},o.data))}function Ot(e,t){var n;if(t.nodeType!==1)return;t.clearAttributes&&t.clearAttributes(),t.mergeAttributes&&t.mergeAttributes(e),n=t.nodeName.toLowerCase(),n==="object"?(t.parentNode&&(t.outerHTML=e.outerHTML),v.support.html5Clone&&e.innerHTML&&!v.trim(t.innerHTML)&&(t.innerHTML=e.innerHTML)):n==="input"&&Et.test(e.type)?(t.defaultChecked=t.checked=e.checked,t.value!==e.value&&(t.value=e.value)):n==="option"?t.selected=e.defaultSelected:n==="input"||n==="textarea"?t.defaultValue=e.defaultValue:n==="script"&&t.text!==e.text&&(t.text=e.text),t.removeAttribute(v.expando)}function Mt(e){return typeof e.getElementsByTagName!="undefined"?e.getElementsByTagName("*"):typeof e.querySelectorAll!="undefined"?e.querySelectorAll("*"):[]}function _t(e){Et.test(e.type)&&(e.defaultChecked=e.checked)}function Qt(e,t){if(t in e)return t;var n=t.charAt(0).toUpperCase()+t.slice(1),r=t,i=Jt.length;while(i--){t=Jt[i]+n;if(t in e)return t}return r}function Gt(e,t){return e=t||e,v.css(e,"display")==="none"||!v.contains(e.ownerDocument,e)}function Yt(e,t){var n,r,i=[],s=0,o=e.length;for(;s<o;s++){n=e[s];if(!n.style)continue;i[s]=v._data(n,"olddisplay"),t?(!i[s]&&n.style.display==="none"&&(n.style.display=""),n.style.display===""&&Gt(n)&&(i[s]=v._data(n,"olddisplay",nn(n.nodeName)))):(r=Dt(n,"display"),!i[s]&&r!=="none"&&v._data(n,"olddisplay",r))}for(s=0;s<o;s++){n=e[s];if(!n.style)continue;if(!t||n.style.display==="none"||n.style.display==="")n.style.display=t?i[s]||"":"none"}return e}function Zt(e,t,n){var r=Rt.exec(t);return r?Math.max(0,r[1]-(n||0))+(r[2]||"px"):t}function en(e,t,n,r){var i=n===(r?"border":"content")?4:t==="width"?1:0,s=0;for(;i<4;i+=2)n==="margin"&&(s+=v.css(e,n+$t[i],!0)),r?(n==="content"&&(s-=parseFloat(Dt(e,"padding"+$t[i]))||0),n!=="margin"&&(s-=parseFloat(Dt(e,"border"+$t[i]+"Width"))||0)):(s+=parseFloat(Dt(e,"padding"+$t[i]))||0,n!=="padding"&&(s+=parseFloat(Dt(e,"border"+$t[i]+"Width"))||0));return s}function tn(e,t,n){var r=t==="width"?e.offsetWidth:e.offsetHeight,i=!0,s=v.support.boxSizing&&v.css(e,"boxSizing")==="border-box";if(r<=0||r==null){r=Dt(e,t);if(r<0||r==null)r=e.style[t];if(Ut.test(r))return r;i=s&&(v.support.boxSizingReliable||r===e.style[t]),r=parseFloat(r)||0}return r+en(e,t,n||(s?"border":"content"),i)+"px"}function nn(e){if(Wt[e])return Wt[e];var t=v("<"+e+">").appendTo(i.body),n=t.css("display");t.remove();if(n==="none"||n===""){Pt=i.body.appendChild(Pt||v.extend(i.createElement("iframe"),{frameBorder:0,width:0,height:0}));if(!Ht||!Pt.createElement)Ht=(Pt.contentWindow||Pt.contentDocument).document,Ht.write("<!doctype html><html><body>"),Ht.close();t=Ht.body.appendChild(Ht.createElement(e)),n=Dt(t,"display"),i.body.removeChild(Pt)}return Wt[e]=n,n}function fn(e,t,n,r){var i;if(v.isArray(t))v.each(t,function(t,i){n||sn.test(e)?r(e,i):fn(e+"["+(typeof i=="object"?t:"")+"]",i,n,r)});else if(!n&&v.type(t)==="object")for(i in t)fn(e+"["+i+"]",t[i],n,r);else r(e,t)}function Cn(e){return function(t,n){typeof t!="string"&&(n=t,t="*");var r,i,s,o=t.toLowerCase().split(y),u=0,a=o.length;if(v.isFunction(n))for(;u<a;u++)r=o[u],s=/^\+/.test(r),s&&(r=r.substr(1)||"*"),i=e[r]=e[r]||[],i[s?"unshift":"push"](n)}}function kn(e,n,r,i,s,o){s=s||n.dataTypes[0],o=o||{},o[s]=!0;var u,a=e[s],f=0,l=a?a.length:0,c=e===Sn;for(;f<l&&(c||!u);f++)u=a[f](n,r,i),typeof u=="string"&&(!c||o[u]?u=t:(n.dataTypes.unshift(u),u=kn(e,n,r,i,u,o)));return(c||!u)&&!o["*"]&&(u=kn(e,n,r,i,"*",o)),u}function Ln(e,n){var r,i,s=v.ajaxSettings.flatOptions||{};for(r in n)n[r]!==t&&((s[r]?e:i||(i={}))[r]=n[r]);i&&v.extend(!0,e,i)}function An(e,n,r){var i,s,o,u,a=e.contents,f=e.dataTypes,l=e.responseFields;for(s in l)s in r&&(n[l[s]]=r[s]);while(f[0]==="*")f.shift(),i===t&&(i=e.mimeType||n.getResponseHeader("content-type"));if(i)for(s in a)if(a[s]&&a[s].test(i)){f.unshift(s);break}if(f[0]in r)o=f[0];else{for(s in r){if(!f[0]||e.converters[s+" "+f[0]]){o=s;break}u||(u=s)}o=o||u}if(o)return o!==f[0]&&f.unshift(o),r[o]}function On(e,t){var n,r,i,s,o=e.dataTypes.slice(),u=o[0],a={},f=0;e.dataFilter&&(t=e.dataFilter(t,e.dataType));if(o[1])for(n in e.converters)a[n.toLowerCase()]=e.converters[n];for(;i=o[++f];)if(i!=="*"){if(u!=="*"&&u!==i){n=a[u+" "+i]||a["* "+i];if(!n)for(r in a){s=r.split(" ");if(s[1]===i){n=a[u+" "+s[0]]||a["* "+s[0]];if(n){n===!0?n=a[r]:a[r]!==!0&&(i=s[0],o.splice(f--,0,i));break}}}if(n!==!0)if(n&&e["throws"])t=n(t);else try{t=n(t)}catch(l){return{state:"parsererror",error:n?l:"No conversion from "+u+" to "+i}}}u=i}return{state:"success",data:t}}function Fn(){try{return new e.XMLHttpRequest}catch(t){}}function In(){try{return new e.ActiveXObject("Microsoft.XMLHTTP")}catch(t){}}function $n(){return setTimeout(function(){qn=t},0),qn=v.now()}function Jn(e,t){v.each(t,function(t,n){var r=(Vn[t]||[]).concat(Vn["*"]),i=0,s=r.length;for(;i<s;i++)if(r[i].call(e,t,n))return})}function Kn(e,t,n){var r,i=0,s=0,o=Xn.length,u=v.Deferred().always(function(){delete a.elem}),a=function(){var t=qn||$n(),n=Math.max(0,f.startTime+f.duration-t),r=n/f.duration||0,i=1-r,s=0,o=f.tweens.length;for(;s<o;s++)f.tweens[s].run(i);return u.notifyWith(e,[f,i,n]),i<1&&o?n:(u.resolveWith(e,[f]),!1)},f=u.promise({elem:e,props:v.extend({},t),opts:v.extend(!0,{specialEasing:{}},n),originalProperties:t,originalOptions:n,startTime:qn||$n(),duration:n.duration,tweens:[],createTween:function(t,n,r){var i=v.Tween(e,f.opts,t,n,f.opts.specialEasing[t]||f.opts.easing);return f.tweens.push(i),i},stop:function(t){var n=0,r=t?f.tweens.length:0;for(;n<r;n++)f.tweens[n].run(1);return t?u.resolveWith(e,[f,t]):u.rejectWith(e,[f,t]),this}}),l=f.props;Qn(l,f.opts.specialEasing);for(;i<o;i++){r=Xn[i].call(f,e,l,f.opts);if(r)return r}return Jn(f,l),v.isFunction(f.opts.start)&&f.opts.start.call(e,f),v.fx.timer(v.extend(a,{anim:f,queue:f.opts.queue,elem:e})),f.progress(f.opts.progress).done(f.opts.done,f.opts.complete).fail(f.opts.fail).always(f.opts.always)}function Qn(e,t){var n,r,i,s,o;for(n in e){r=v.camelCase(n),i=t[r],s=e[n],v.isArray(s)&&(i=s[1],s=e[n]=s[0]),n!==r&&(e[r]=s,delete e[n]),o=v.cssHooks[r];if(o&&"expand"in o){s=o.expand(s),delete e[r];for(n in s)n in e||(e[n]=s[n],t[n]=i)}else t[r]=i}}function Gn(e,t,n){var r,i,s,o,u,a,f,l,c,h=this,p=e.style,d={},m=[],g=e.nodeType&&Gt(e);n.queue||(l=v._queueHooks(e,"fx"),l.unqueued==null&&(l.unqueued=0,c=l.empty.fire,l.empty.fire=function(){l.unqueued||c()}),l.unqueued++,h.always(function(){h.always(function(){l.unqueued--,v.queue(e,"fx").length||l.empty.fire()})})),e.nodeType===1&&("height"in t||"width"in t)&&(n.overflow=[p.overflow,p.overflowX,p.overflowY],v.css(e,"display")==="inline"&&v.css(e,"float")==="none"&&(!v.support.inlineBlockNeedsLayout||nn(e.nodeName)==="inline"?p.display="inline-block":p.zoom=1)),n.overflow&&(p.overflow="hidden",v.support.shrinkWrapBlocks||h.done(function(){p.overflow=n.overflow[0],p.overflowX=n.overflow[1],p.overflowY=n.overflow[2]}));for(r in t){s=t[r];if(Un.exec(s)){delete t[r],a=a||s==="toggle";if(s===(g?"hide":"show"))continue;m.push(r)}}o=m.length;if(o){u=v._data(e,"fxshow")||v._data(e,"fxshow",{}),"hidden"in u&&(g=u.hidden),a&&(u.hidden=!g),g?v(e).show():h.done(function(){v(e).hide()}),h.done(function(){var t;v.removeData(e,"fxshow",!0);for(t in d)v.style(e,t,d[t])});for(r=0;r<o;r++)i=m[r],f=h.createTween(i,g?u[i]:0),d[i]=u[i]||v.style(e,i),i in u||(u[i]=f.start,g&&(f.end=f.start,f.start=i==="width"||i==="height"?1:0))}}function Yn(e,t,n,r,i){return new Yn.prototype.init(e,t,n,r,i)}function Zn(e,t){var n,r={height:e},i=0;t=t?1:0;for(;i<4;i+=2-t)n=$t[i],r["margin"+n]=r["padding"+n]=e;return t&&(r.opacity=r.width=e),r}function tr(e){return v.isWindow(e)?e:e.nodeType===9?e.defaultView||e.parentWindow:!1}var n,r,i=e.document,s=e.location,o=e.navigator,u=e.jQuery,a=e.$,f=Array.prototype.push,l=Array.prototype.slice,c=Array.prototype.indexOf,h=Object.prototype.toString,p=Object.prototype.hasOwnProperty,d=String.prototype.trim,v=function(e,t){return new v.fn.init(e,t,n)},m=/[\-+]?(?:\d*\.|)\d+(?:[eE][\-+]?\d+|)/.source,g=/\S/,y=/\s+/,b=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,w=/^(?:[^#<]*(<[\w\W]+>)[^>]*$|#([\w\-]*)$)/,E=/^<(\w+)\s*\/?>(?:<\/\1>|)$/,S=/^[\],:{}\s]*$/,x=/(?:^|:|,)(?:\s*\[)+/g,T=/\\(?:["\\\/bfnrt]|u[\da-fA-F]{4})/g,N=/"[^"\\\r\n]*"|true|false|null|-?(?:\d\d*\.|)\d+(?:[eE][\-+]?\d+|)/g,C=/^-ms-/,k=/-([\da-z])/gi,L=function(e,t){return(t+"").toUpperCase()},A=function(){i.addEventListener?(i.removeEventListener("DOMContentLoaded",A,!1),v.ready()):i.readyState==="complete"&&(i.detachEvent("onreadystatechange",A),v.ready())},O={};v.fn=v.prototype={constructor:v,init:function(e,n,r){var s,o,u,a;if(!e)return this;if(e.nodeType)return this.context=this[0]=e,this.length=1,this;if(typeof e=="string"){e.charAt(0)==="<"&&e.charAt(e.length-1)===">"&&e.length>=3?s=[null,e,null]:s=w.exec(e);if(s&&(s[1]||!n)){if(s[1])return n=n instanceof v?n[0]:n,a=n&&n.nodeType?n.ownerDocument||n:i,e=v.parseHTML(s[1],a,!0),E.test(s[1])&&v.isPlainObject(n)&&this.attr.call(e,n,!0),v.merge(this,e);o=i.getElementById(s[2]);if(o&&o.parentNode){if(o.id!==s[2])return r.find(e);this.length=1,this[0]=o}return this.context=i,this.selector=e,this}return!n||n.jquery?(n||r).find(e):this.constructor(n).find(e)}return v.isFunction(e)?r.ready(e):(e.selector!==t&&(this.selector=e.selector,this.context=e.context),v.makeArray(e,this))},selector:"",jquery:"1.8.3",length:0,size:function(){return this.length},toArray:function(){return l.call(this)},get:function(e){return e==null?this.toArray():e<0?this[this.length+e]:this[e]},pushStack:function(e,t,n){var r=v.merge(this.constructor(),e);return r.prevObject=this,r.context=this.context,t==="find"?r.selector=this.selector+(this.selector?" ":"")+n:t&&(r.selector=this.selector+"."+t+"("+n+")"),r},each:function(e,t){return v.each(this,e,t)},ready:function(e){return v.ready.promise().done(e),this},eq:function(e){return e=+e,e===-1?this.slice(e):this.slice(e,e+1)},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},slice:function(){return this.pushStack(l.apply(this,arguments),"slice",l.call(arguments).join(","))},map:function(e){return this.pushStack(v.map(this,function(t,n){return e.call(t,n,t)}))},end:function(){return this.prevObject||this.constructor(null)},push:f,sort:[].sort,splice:[].splice},v.fn.init.prototype=v.fn,v.extend=v.fn.extend=function(){var e,n,r,i,s,o,u=arguments[0]||{},a=1,f=arguments.length,l=!1;typeof u=="boolean"&&(l=u,u=arguments[1]||{},a=2),typeof u!="object"&&!v.isFunction(u)&&(u={}),f===a&&(u=this,--a);for(;a<f;a++)if((e=arguments[a])!=null)for(n in e){r=u[n],i=e[n];if(u===i)continue;l&&i&&(v.isPlainObject(i)||(s=v.isArray(i)))?(s?(s=!1,o=r&&v.isArray(r)?r:[]):o=r&&v.isPlainObject(r)?r:{},u[n]=v.extend(l,o,i)):i!==t&&(u[n]=i)}return u},v.extend({noConflict:function(t){return e.$===v&&(e.$=a),t&&e.jQuery===v&&(e.jQuery=u),v},isReady:!1,readyWait:1,holdReady:function(e){e?v.readyWait++:v.ready(!0)},ready:function(e){if(e===!0?--v.readyWait:v.isReady)return;if(!i.body)return setTimeout(v.ready,1);v.isReady=!0;if(e!==!0&&--v.readyWait>0)return;r.resolveWith(i,[v]),v.fn.trigger&&v(i).trigger("ready").off("ready")},isFunction:function(e){return v.type(e)==="function"},isArray:Array.isArray||function(e){return v.type(e)==="array"},isWindow:function(e){return e!=null&&e==e.window},isNumeric:function(e){return!isNaN(parseFloat(e))&&isFinite(e)},type:function(e){return e==null?String(e):O[h.call(e)]||"object"},isPlainObject:function(e){if(!e||v.type(e)!=="object"||e.nodeType||v.isWindow(e))return!1;try{if(e.constructor&&!p.call(e,"constructor")&&!p.call(e.constructor.prototype,"isPrototypeOf"))return!1}catch(n){return!1}var r;for(r in e);return r===t||p.call(e,r)},isEmptyObject:function(e){var t;for(t in e)return!1;return!0},error:function(e){throw new Error(e)},parseHTML:function(e,t,n){var r;return!e||typeof e!="string"?null:(typeof t=="boolean"&&(n=t,t=0),t=t||i,(r=E.exec(e))?[t.createElement(r[1])]:(r=v.buildFragment([e],t,n?null:[]),v.merge([],(r.cacheable?v.clone(r.fragment):r.fragment).childNodes)))},parseJSON:function(t){if(!t||typeof t!="string")return null;t=v.trim(t);if(e.JSON&&e.JSON.parse)return e.JSON.parse(t);if(S.test(t.replace(T,"@").replace(N,"]").replace(x,"")))return(new Function("return "+t))();v.error("Invalid JSON: "+t)},parseXML:function(n){var r,i;if(!n||typeof n!="string")return null;try{e.DOMParser?(i=new DOMParser,r=i.parseFromString(n,"text/xml")):(r=new ActiveXObject("Microsoft.XMLDOM"),r.async="false",r.loadXML(n))}catch(s){r=t}return(!r||!r.documentElement||r.getElementsByTagName("parsererror").length)&&v.error("Invalid XML: "+n),r},noop:function(){},globalEval:function(t){t&&g.test(t)&&(e.execScript||function(t){e.eval.call(e,t)})(t)},camelCase:function(e){return e.replace(C,"ms-").replace(k,L)},nodeName:function(e,t){return e.nodeName&&e.nodeName.toLowerCase()===t.toLowerCase()},each:function(e,n,r){var i,s=0,o=e.length,u=o===t||v.isFunction(e);if(r){if(u){for(i in e)if(n.apply(e[i],r)===!1)break}else for(;s<o;)if(n.apply(e[s++],r)===!1)break}else if(u){for(i in e)if(n.call(e[i],i,e[i])===!1)break}else for(;s<o;)if(n.call(e[s],s,e[s++])===!1)break;return e},trim:d&&!d.call("\ufeff\u00a0")?function(e){return e==null?"":d.call(e)}:function(e){return e==null?"":(e+"").replace(b,"")},makeArray:function(e,t){var n,r=t||[];return e!=null&&(n=v.type(e),e.length==null||n==="string"||n==="function"||n==="regexp"||v.isWindow(e)?f.call(r,e):v.merge(r,e)),r},inArray:function(e,t,n){var r;if(t){if(c)return c.call(t,e,n);r=t.length,n=n?n<0?Math.max(0,r+n):n:0;for(;n<r;n++)if(n in t&&t[n]===e)return n}return-1},merge:function(e,n){var r=n.length,i=e.length,s=0;if(typeof r=="number")for(;s<r;s++)e[i++]=n[s];else while(n[s]!==t)e[i++]=n[s++];return e.length=i,e},grep:function(e,t,n){var r,i=[],s=0,o=e.length;n=!!n;for(;s<o;s++)r=!!t(e[s],s),n!==r&&i.push(e[s]);return i},map:function(e,n,r){var i,s,o=[],u=0,a=e.length,f=e instanceof v||a!==t&&typeof a=="number"&&(a>0&&e[0]&&e[a-1]||a===0||v.isArray(e));if(f)for(;u<a;u++)i=n(e[u],u,r),i!=null&&(o[o.length]=i);else for(s in e)i=n(e[s],s,r),i!=null&&(o[o.length]=i);return o.concat.apply([],o)},guid:1,proxy:function(e,n){var r,i,s;return typeof n=="string"&&(r=e[n],n=e,e=r),v.isFunction(e)?(i=l.call(arguments,2),s=function(){return e.apply(n,i.concat(l.call(arguments)))},s.guid=e.guid=e.guid||v.guid++,s):t},access:function(e,n,r,i,s,o,u){var a,f=r==null,l=0,c=e.length;if(r&&typeof r=="object"){for(l in r)v.access(e,n,l,r[l],1,o,i);s=1}else if(i!==t){a=u===t&&v.isFunction(i),f&&(a?(a=n,n=function(e,t,n){return a.call(v(e),n)}):(n.call(e,i),n=null));if(n)for(;l<c;l++)n(e[l],r,a?i.call(e[l],l,n(e[l],r)):i,u);s=1}return s?e:f?n.call(e):c?n(e[0],r):o},now:function(){return(new Date).getTime()}}),v.ready.promise=function(t){if(!r){r=v.Deferred();if(i.readyState==="complete")setTimeout(v.ready,1);else if(i.addEventListener)i.addEventListener("DOMContentLoaded",A,!1),e.addEventListener("load",v.ready,!1);else{i.attachEvent("onreadystatechange",A),e.attachEvent("onload",v.ready);var n=!1;try{n=e.frameElement==null&&i.documentElement}catch(s){}n&&n.doScroll&&function o(){if(!v.isReady){try{n.doScroll("left")}catch(e){return setTimeout(o,50)}v.ready()}}()}}return r.promise(t)},v.each("Boolean Number String Function Array Date RegExp Object".split(" "),function(e,t){O["[object "+t+"]"]=t.toLowerCase()}),n=v(i);var M={};v.Callbacks=function(e){e=typeof e=="string"?M[e]||_(e):v.extend({},e);var n,r,i,s,o,u,a=[],f=!e.once&&[],l=function(t){n=e.memory&&t,r=!0,u=s||0,s=0,o=a.length,i=!0;for(;a&&u<o;u++)if(a[u].apply(t[0],t[1])===!1&&e.stopOnFalse){n=!1;break}i=!1,a&&(f?f.length&&l(f.shift()):n?a=[]:c.disable())},c={add:function(){if(a){var t=a.length;(function r(t){v.each(t,function(t,n){var i=v.type(n);i==="function"?(!e.unique||!c.has(n))&&a.push(n):n&&n.length&&i!=="string"&&r(n)})})(arguments),i?o=a.length:n&&(s=t,l(n))}return this},remove:function(){return a&&v.each(arguments,function(e,t){var n;while((n=v.inArray(t,a,n))>-1)a.splice(n,1),i&&(n<=o&&o--,n<=u&&u--)}),this},has:function(e){return v.inArray(e,a)>-1},empty:function(){return a=[],this},disable:function(){return a=f=n=t,this},disabled:function(){return!a},lock:function(){return f=t,n||c.disable(),this},locked:function(){return!f},fireWith:function(e,t){return t=t||[],t=[e,t.slice?t.slice():t],a&&(!r||f)&&(i?f.push(t):l(t)),this},fire:function(){return c.fireWith(this,arguments),this},fired:function(){return!!r}};return c},v.extend({Deferred:function(e){var t=[["resolve","done",v.Callbacks("once memory"),"resolved"],["reject","fail",v.Callbacks("once memory"),"rejected"],["notify","progress",v.Callbacks("memory")]],n="pending",r={state:function(){return n},always:function(){return i.done(arguments).fail(arguments),this},then:function(){var e=arguments;return v.Deferred(function(n){v.each(t,function(t,r){var s=r[0],o=e[t];i[r[1]](v.isFunction(o)?function(){var e=o.apply(this,arguments);e&&v.isFunction(e.promise)?e.promise().done(n.resolve).fail(n.reject).progress(n.notify):n[s+"With"](this===i?n:this,[e])}:n[s])}),e=null}).promise()},promise:function(e){return e!=null?v.extend(e,r):r}},i={};return r.pipe=r.then,v.each(t,function(e,s){var o=s[2],u=s[3];r[s[1]]=o.add,u&&o.add(function(){n=u},t[e^1][2].disable,t[2][2].lock),i[s[0]]=o.fire,i[s[0]+"With"]=o.fireWith}),r.promise(i),e&&e.call(i,i),i},when:function(e){var t=0,n=l.call(arguments),r=n.length,i=r!==1||e&&v.isFunction(e.promise)?r:0,s=i===1?e:v.Deferred(),o=function(e,t,n){return function(r){t[e]=this,n[e]=arguments.length>1?l.call(arguments):r,n===u?s.notifyWith(t,n):--i||s.resolveWith(t,n)}},u,a,f;if(r>1){u=new Array(r),a=new Array(r),f=new Array(r);for(;t<r;t++)n[t]&&v.isFunction(n[t].promise)?n[t].promise().done(o(t,f,n)).fail(s.reject).progress(o(t,a,u)):--i}return i||s.resolveWith(f,n),s.promise()}}),v.support=function(){var t,n,r,s,o,u,a,f,l,c,h,p=i.createElement("div");p.setAttribute("className","t"),p.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",n=p.getElementsByTagName("*"),r=p.getElementsByTagName("a")[0];if(!n||!r||!n.length)return{};s=i.createElement("select"),o=s.appendChild(i.createElement("option")),u=p.getElementsByTagName("input")[0],r.style.cssText="top:1px;float:left;opacity:.5",t={leadingWhitespace:p.firstChild.nodeType===3,tbody:!p.getElementsByTagName("tbody").length,htmlSerialize:!!p.getElementsByTagName("link").length,style:/top/.test(r.getAttribute("style")),hrefNormalized:r.getAttribute("href")==="/a",opacity:/^0.5/.test(r.style.opacity),cssFloat:!!r.style.cssFloat,checkOn:u.value==="on",optSelected:o.selected,getSetAttribute:p.className!=="t",enctype:!!i.createElement("form").enctype,html5Clone:i.createElement("nav").cloneNode(!0).outerHTML!=="<:nav></:nav>",boxModel:i.compatMode==="CSS1Compat",submitBubbles:!0,changeBubbles:!0,focusinBubbles:!1,deleteExpando:!0,noCloneEvent:!0,inlineBlockNeedsLayout:!1,shrinkWrapBlocks:!1,reliableMarginRight:!0,boxSizingReliable:!0,pixelPosition:!1},u.checked=!0,t.noCloneChecked=u.cloneNode(!0).checked,s.disabled=!0,t.optDisabled=!o.disabled;try{delete p.test}catch(d){t.deleteExpando=!1}!p.addEventListener&&p.attachEvent&&p.fireEvent&&(p.attachEvent("onclick",h=function(){t.noCloneEvent=!1}),p.cloneNode(!0).fireEvent("onclick"),p.detachEvent("onclick",h)),u=i.createElement("input"),u.value="t",u.setAttribute("type","radio"),t.radioValue=u.value==="t",u.setAttribute("checked","checked"),u.setAttribute("name","t"),p.appendChild(u),a=i.createDocumentFragment(),a.appendChild(p.lastChild),t.checkClone=a.cloneNode(!0).cloneNode(!0).lastChild.checked,t.appendChecked=u.checked,a.removeChild(u),a.appendChild(p);if(p.attachEvent)for(l in{submit:!0,change:!0,focusin:!0})f="on"+l,c=f in p,c||(p.setAttribute(f,"return;"),c=typeof p[f]=="function"),t[l+"Bubbles"]=c;return v(function(){var n,r,s,o,u="padding:0;margin:0;border:0;display:block;overflow:hidden;",a=i.getElementsByTagName("body")[0];if(!a)return;n=i.createElement("div"),n.style.cssText="visibility:hidden;border:0;width:0;height:0;position:static;top:0;margin-top:1px",a.insertBefore(n,a.firstChild),r=i.createElement("div"),n.appendChild(r),r.innerHTML="<table><tr><td></td><td>t</td></tr></table>",s=r.getElementsByTagName("td"),s[0].style.cssText="padding:0;margin:0;border:0;display:none",c=s[0].offsetHeight===0,s[0].style.display="",s[1].style.display="none",t.reliableHiddenOffsets=c&&s[0].offsetHeight===0,r.innerHTML="",r.style.cssText="box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;padding:1px;border:1px;display:block;width:4px;margin-top:1%;position:absolute;top:1%;",t.boxSizing=r.offsetWidth===4,t.doesNotIncludeMarginInBodyOffset=a.offsetTop!==1,e.getComputedStyle&&(t.pixelPosition=(e.getComputedStyle(r,null)||{}).top!=="1%",t.boxSizingReliable=(e.getComputedStyle(r,null)||{width:"4px"}).width==="4px",o=i.createElement("div"),o.style.cssText=r.style.cssText=u,o.style.marginRight=o.style.width="0",r.style.width="1px",r.appendChild(o),t.reliableMarginRight=!parseFloat((e.getComputedStyle(o,null)||{}).marginRight)),typeof r.style.zoom!="undefined"&&(r.innerHTML="",r.style.cssText=u+"width:1px;padding:1px;display:inline;zoom:1",t.inlineBlockNeedsLayout=r.offsetWidth===3,r.style.display="block",r.style.overflow="visible",r.innerHTML="<div></div>",r.firstChild.style.width="5px",t.shrinkWrapBlocks=r.offsetWidth!==3,n.style.zoom=1),a.removeChild(n),n=r=s=o=null}),a.removeChild(p),n=r=s=o=u=a=p=null,t}();var D=/(?:\{[\s\S]*\}|\[[\s\S]*\])$/,P=/([A-Z])/g;v.extend({cache:{},deletedIds:[],uuid:0,expando:"jQuery"+(v.fn.jquery+Math.random()).replace(/\D/g,""),noData:{embed:!0,object:"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",applet:!0},hasData:function(e){return e=e.nodeType?v.cache[e[v.expando]]:e[v.expando],!!e&&!B(e)},data:function(e,n,r,i){if(!v.acceptData(e))return;var s,o,u=v.expando,a=typeof n=="string",f=e.nodeType,l=f?v.cache:e,c=f?e[u]:e[u]&&u;if((!c||!l[c]||!i&&!l[c].data)&&a&&r===t)return;c||(f?e[u]=c=v.deletedIds.pop()||v.guid++:c=u),l[c]||(l[c]={},f||(l[c].toJSON=v.noop));if(typeof n=="object"||typeof n=="function")i?l[c]=v.extend(l[c],n):l[c].data=v.extend(l[c].data,n);return s=l[c],i||(s.data||(s.data={}),s=s.data),r!==t&&(s[v.camelCase(n)]=r),a?(o=s[n],o==null&&(o=s[v.camelCase(n)])):o=s,o},removeData:function(e,t,n){if(!v.acceptData(e))return;var r,i,s,o=e.nodeType,u=o?v.cache:e,a=o?e[v.expando]:v.expando;if(!u[a])return;if(t){r=n?u[a]:u[a].data;if(r){v.isArray(t)||(t in r?t=[t]:(t=v.camelCase(t),t in r?t=[t]:t=t.split(" ")));for(i=0,s=t.length;i<s;i++)delete r[t[i]];if(!(n?B:v.isEmptyObject)(r))return}}if(!n){delete u[a].data;if(!B(u[a]))return}o?v.cleanData([e],!0):v.support.deleteExpando||u!=u.window?delete u[a]:u[a]=null},_data:function(e,t,n){return v.data(e,t,n,!0)},acceptData:function(e){var t=e.nodeName&&v.noData[e.nodeName.toLowerCase()];return!t||t!==!0&&e.getAttribute("classid")===t}}),v.fn.extend({data:function(e,n){var r,i,s,o,u,a=this[0],f=0,l=null;if(e===t){if(this.length){l=v.data(a);if(a.nodeType===1&&!v._data(a,"parsedAttrs")){s=a.attributes;for(u=s.length;f<u;f++)o=s[f].name,o.indexOf("data-")||(o=v.camelCase(o.substring(5)),H(a,o,l[o]));v._data(a,"parsedAttrs",!0)}}return l}return typeof e=="object"?this.each(function(){v.data(this,e)}):(r=e.split(".",2),r[1]=r[1]?"."+r[1]:"",i=r[1]+"!",v.access(this,function(n){if(n===t)return l=this.triggerHandler("getData"+i,[r[0]]),l===t&&a&&(l=v.data(a,e),l=H(a,e,l)),l===t&&r[1]?this.data(r[0]):l;r[1]=n,this.each(function(){var t=v(this);t.triggerHandler("setData"+i,r),v.data(this,e,n),t.triggerHandler("changeData"+i,r)})},null,n,arguments.length>1,null,!1))},removeData:function(e){return this.each(function(){v.removeData(this,e)})}}),v.extend({queue:function(e,t,n){var r;if(e)return t=(t||"fx")+"queue",r=v._data(e,t),n&&(!r||v.isArray(n)?r=v._data(e,t,v.makeArray(n)):r.push(n)),r||[]},dequeue:function(e,t){t=t||"fx";var n=v.queue(e,t),r=n.length,i=n.shift(),s=v._queueHooks(e,t),o=function(){v.dequeue(e,t)};i==="inprogress"&&(i=n.shift(),r--),i&&(t==="fx"&&n.unshift("inprogress"),delete s.stop,i.call(e,o,s)),!r&&s&&s.empty.fire()},_queueHooks:function(e,t){var n=t+"queueHooks";return v._data(e,n)||v._data(e,n,{empty:v.Callbacks("once memory").add(function(){v.removeData(e,t+"queue",!0),v.removeData(e,n,!0)})})}}),v.fn.extend({queue:function(e,n){var r=2;return typeof e!="string"&&(n=e,e="fx",r--),arguments.length<r?v.queue(this[0],e):n===t?this:this.each(function(){var t=v.queue(this,e,n);v._queueHooks(this,e),e==="fx"&&t[0]!=="inprogress"&&v.dequeue(this,e)})},dequeue:function(e){return this.each(function(){v.dequeue(this,e)})},delay:function(e,t){return e=v.fx?v.fx.speeds[e]||e:e,t=t||"fx",this.queue(t,function(t,n){var r=setTimeout(t,e);n.stop=function(){clearTimeout(r)}})},clearQueue:function(e){return this.queue(e||"fx",[])},promise:function(e,n){var r,i=1,s=v.Deferred(),o=this,u=this.length,a=function(){--i||s.resolveWith(o,[o])};typeof e!="string"&&(n=e,e=t),e=e||"fx";while(u--)r=v._data(o[u],e+"queueHooks"),r&&r.empty&&(i++,r.empty.add(a));return a(),s.promise(n)}});var j,F,I,q=/[\t\r\n]/g,R=/\r/g,U=/^(?:button|input)$/i,z=/^(?:button|input|object|select|textarea)$/i,W=/^a(?:rea|)$/i,X=/^(?:autofocus|autoplay|async|checked|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped|selected)$/i,V=v.support.getSetAttribute;v.fn.extend({attr:function(e,t){return v.access(this,v.attr,e,t,arguments.length>1)},removeAttr:function(e){return this.each(function(){v.removeAttr(this,e)})},prop:function(e,t){return v.access(this,v.prop,e,t,arguments.length>1)},removeProp:function(e){return e=v.propFix[e]||e,this.each(function(){try{this[e]=t,delete this[e]}catch(n){}})},addClass:function(e){var t,n,r,i,s,o,u;if(v.isFunction(e))return this.each(function(t){v(this).addClass(e.call(this,t,this.className))});if(e&&typeof e=="string"){t=e.split(y);for(n=0,r=this.length;n<r;n++){i=this[n];if(i.nodeType===1)if(!i.className&&t.length===1)i.className=e;else{s=" "+i.className+" ";for(o=0,u=t.length;o<u;o++)s.indexOf(" "+t[o]+" ")<0&&(s+=t[o]+" ");i.className=v.trim(s)}}}return this},removeClass:function(e){var n,r,i,s,o,u,a;if(v.isFunction(e))return this.each(function(t){v(this).removeClass(e.call(this,t,this.className))});if(e&&typeof e=="string"||e===t){n=(e||"").split(y);for(u=0,a=this.length;u<a;u++){i=this[u];if(i.nodeType===1&&i.className){r=(" "+i.className+" ").replace(q," ");for(s=0,o=n.length;s<o;s++)while(r.indexOf(" "+n[s]+" ")>=0)r=r.replace(" "+n[s]+" "," ");i.className=e?v.trim(r):""}}}return this},toggleClass:function(e,t){var n=typeof e,r=typeof t=="boolean";return v.isFunction(e)?this.each(function(n){v(this).toggleClass(e.call(this,n,this.className,t),t)}):this.each(function(){if(n==="string"){var i,s=0,o=v(this),u=t,a=e.split(y);while(i=a[s++])u=r?u:!o.hasClass(i),o[u?"addClass":"removeClass"](i)}else if(n==="undefined"||n==="boolean")this.className&&v._data(this,"__className__",this.className),this.className=this.className||e===!1?"":v._data(this,"__className__")||""})},hasClass:function(e){var t=" "+e+" ",n=0,r=this.length;for(;n<r;n++)if(this[n].nodeType===1&&(" "+this[n].className+" ").replace(q," ").indexOf(t)>=0)return!0;return!1},val:function(e){var n,r,i,s=this[0];if(!arguments.length){if(s)return n=v.valHooks[s.type]||v.valHooks[s.nodeName.toLowerCase()],n&&"get"in n&&(r=n.get(s,"value"))!==t?r:(r=s.value,typeof r=="string"?r.replace(R,""):r==null?"":r);return}return i=v.isFunction(e),this.each(function(r){var s,o=v(this);if(this.nodeType!==1)return;i?s=e.call(this,r,o.val()):s=e,s==null?s="":typeof s=="number"?s+="":v.isArray(s)&&(s=v.map(s,function(e){return e==null?"":e+""})),n=v.valHooks[this.type]||v.valHooks[this.nodeName.toLowerCase()];if(!n||!("set"in n)||n.set(this,s,"value")===t)this.value=s})}}),v.extend({valHooks:{option:{get:function(e){var t=e.attributes.value;return!t||t.specified?e.value:e.text}},select:{get:function(e){var t,n,r=e.options,i=e.selectedIndex,s=e.type==="select-one"||i<0,o=s?null:[],u=s?i+1:r.length,a=i<0?u:s?i:0;for(;a<u;a++){n=r[a];if((n.selected||a===i)&&(v.support.optDisabled?!n.disabled:n.getAttribute("disabled")===null)&&(!n.parentNode.disabled||!v.nodeName(n.parentNode,"optgroup"))){t=v(n).val();if(s)return t;o.push(t)}}return o},set:function(e,t){var n=v.makeArray(t);return v(e).find("option").each(function(){this.selected=v.inArray(v(this).val(),n)>=0}),n.length||(e.selectedIndex=-1),n}}},attrFn:{},attr:function(e,n,r,i){var s,o,u,a=e.nodeType;if(!e||a===3||a===8||a===2)return;if(i&&v.isFunction(v.fn[n]))return v(e)[n](r);if(typeof e.getAttribute=="undefined")return v.prop(e,n,r);u=a!==1||!v.isXMLDoc(e),u&&(n=n.toLowerCase(),o=v.attrHooks[n]||(X.test(n)?F:j));if(r!==t){if(r===null){v.removeAttr(e,n);return}return o&&"set"in o&&u&&(s=o.set(e,r,n))!==t?s:(e.setAttribute(n,r+""),r)}return o&&"get"in o&&u&&(s=o.get(e,n))!==null?s:(s=e.getAttribute(n),s===null?t:s)},removeAttr:function(e,t){var n,r,i,s,o=0;if(t&&e.nodeType===1){r=t.split(y);for(;o<r.length;o++)i=r[o],i&&(n=v.propFix[i]||i,s=X.test(i),s||v.attr(e,i,""),e.removeAttribute(V?i:n),s&&n in e&&(e[n]=!1))}},attrHooks:{type:{set:function(e,t){if(U.test(e.nodeName)&&e.parentNode)v.error("type property can't be changed");else if(!v.support.radioValue&&t==="radio"&&v.nodeName(e,"input")){var n=e.value;return e.setAttribute("type",t),n&&(e.value=n),t}}},value:{get:function(e,t){return j&&v.nodeName(e,"button")?j.get(e,t):t in e?e.value:null},set:function(e,t,n){if(j&&v.nodeName(e,"button"))return j.set(e,t,n);e.value=t}}},propFix:{tabindex:"tabIndex",readonly:"readOnly","for":"htmlFor","class":"className",maxlength:"maxLength",cellspacing:"cellSpacing",cellpadding:"cellPadding",rowspan:"rowSpan",colspan:"colSpan",usemap:"useMap",frameborder:"frameBorder",contenteditable:"contentEditable"},prop:function(e,n,r){var i,s,o,u=e.nodeType;if(!e||u===3||u===8||u===2)return;return o=u!==1||!v.isXMLDoc(e),o&&(n=v.propFix[n]||n,s=v.propHooks[n]),r!==t?s&&"set"in s&&(i=s.set(e,r,n))!==t?i:e[n]=r:s&&"get"in s&&(i=s.get(e,n))!==null?i:e[n]},propHooks:{tabIndex:{get:function(e){var n=e.getAttributeNode("tabindex");return n&&n.specified?parseInt(n.value,10):z.test(e.nodeName)||W.test(e.nodeName)&&e.href?0:t}}}}),F={get:function(e,n){var r,i=v.prop(e,n);return i===!0||typeof i!="boolean"&&(r=e.getAttributeNode(n))&&r.nodeValue!==!1?n.toLowerCase():t},set:function(e,t,n){var r;return t===!1?v.removeAttr(e,n):(r=v.propFix[n]||n,r in e&&(e[r]=!0),e.setAttribute(n,n.toLowerCase())),n}},V||(I={name:!0,id:!0,coords:!0},j=v.valHooks.button={get:function(e,n){var r;return r=e.getAttributeNode(n),r&&(I[n]?r.value!=="":r.specified)?r.value:t},set:function(e,t,n){var r=e.getAttributeNode(n);return r||(r=i.createAttribute(n),e.setAttributeNode(r)),r.value=t+""}},v.each(["width","height"],function(e,t){v.attrHooks[t]=v.extend(v.attrHooks[t],{set:function(e,n){if(n==="")return e.setAttribute(t,"auto"),n}})}),v.attrHooks.contenteditable={get:j.get,set:function(e,t,n){t===""&&(t="false"),j.set(e,t,n)}}),v.support.hrefNormalized||v.each(["href","src","width","height"],function(e,n){v.attrHooks[n]=v.extend(v.attrHooks[n],{get:function(e){var r=e.getAttribute(n,2);return r===null?t:r}})}),v.support.style||(v.attrHooks.style={get:function(e){return e.style.cssText.toLowerCase()||t},set:function(e,t){return e.style.cssText=t+""}}),v.support.optSelected||(v.propHooks.selected=v.extend(v.propHooks.selected,{get:function(e){var t=e.parentNode;return t&&(t.selectedIndex,t.parentNode&&t.parentNode.selectedIndex),null}})),v.support.enctype||(v.propFix.enctype="encoding"),v.support.checkOn||v.each(["radio","checkbox"],function(){v.valHooks[this]={get:function(e){return e.getAttribute("value")===null?"on":e.value}}}),v.each(["radio","checkbox"],function(){v.valHooks[this]=v.extend(v.valHooks[this],{set:function(e,t){if(v.isArray(t))return e.checked=v.inArray(v(e).val(),t)>=0}})});var $=/^(?:textarea|input|select)$/i,J=/^([^\.]*|)(?:\.(.+)|)$/,K=/(?:^|\s)hover(\.\S+|)\b/,Q=/^key/,G=/^(?:mouse|contextmenu)|click/,Y=/^(?:focusinfocus|focusoutblur)$/,Z=function(e){return v.event.special.hover?e:e.replace(K,"mouseenter$1 mouseleave$1")};v.event={add:function(e,n,r,i,s){var o,u,a,f,l,c,h,p,d,m,g;if(e.nodeType===3||e.nodeType===8||!n||!r||!(o=v._data(e)))return;r.handler&&(d=r,r=d.handler,s=d.selector),r.guid||(r.guid=v.guid++),a=o.events,a||(o.events=a={}),u=o.handle,u||(o.handle=u=function(e){return typeof v=="undefined"||!!e&&v.event.triggered===e.type?t:v.event.dispatch.apply(u.elem,arguments)},u.elem=e),n=v.trim(Z(n)).split(" ");for(f=0;f<n.length;f++){l=J.exec(n[f])||[],c=l[1],h=(l[2]||"").split(".").sort(),g=v.event.special[c]||{},c=(s?g.delegateType:g.bindType)||c,g=v.event.special[c]||{},p=v.extend({type:c,origType:l[1],data:i,handler:r,guid:r.guid,selector:s,needsContext:s&&v.expr.match.needsContext.test(s),namespace:h.join(".")},d),m=a[c];if(!m){m=a[c]=[],m.delegateCount=0;if(!g.setup||g.setup.call(e,i,h,u)===!1)e.addEventListener?e.addEventListener(c,u,!1):e.attachEvent&&e.attachEvent("on"+c,u)}g.add&&(g.add.call(e,p),p.handler.guid||(p.handler.guid=r.guid)),s?m.splice(m.delegateCount++,0,p):m.push(p),v.event.global[c]=!0}e=null},global:{},remove:function(e,t,n,r,i){var s,o,u,a,f,l,c,h,p,d,m,g=v.hasData(e)&&v._data(e);if(!g||!(h=g.events))return;t=v.trim(Z(t||"")).split(" ");for(s=0;s<t.length;s++){o=J.exec(t[s])||[],u=a=o[1],f=o[2];if(!u){for(u in h)v.event.remove(e,u+t[s],n,r,!0);continue}p=v.event.special[u]||{},u=(r?p.delegateType:p.bindType)||u,d=h[u]||[],l=d.length,f=f?new RegExp("(^|\\.)"+f.split(".").sort().join("\\.(?:.*\\.|)")+"(\\.|$)"):null;for(c=0;c<d.length;c++)m=d[c],(i||a===m.origType)&&(!n||n.guid===m.guid)&&(!f||f.test(m.namespace))&&(!r||r===m.selector||r==="**"&&m.selector)&&(d.splice(c--,1),m.selector&&d.delegateCount--,p.remove&&p.remove.call(e,m));d.length===0&&l!==d.length&&((!p.teardown||p.teardown.call(e,f,g.handle)===!1)&&v.removeEvent(e,u,g.handle),delete h[u])}v.isEmptyObject(h)&&(delete g.handle,v.removeData(e,"events",!0))},customEvent:{getData:!0,setData:!0,changeData:!0},trigger:function(n,r,s,o){if(!s||s.nodeType!==3&&s.nodeType!==8){var u,a,f,l,c,h,p,d,m,g,y=n.type||n,b=[];if(Y.test(y+v.event.triggered))return;y.indexOf("!")>=0&&(y=y.slice(0,-1),a=!0),y.indexOf(".")>=0&&(b=y.split("."),y=b.shift(),b.sort());if((!s||v.event.customEvent[y])&&!v.event.global[y])return;n=typeof n=="object"?n[v.expando]?n:new v.Event(y,n):new v.Event(y),n.type=y,n.isTrigger=!0,n.exclusive=a,n.namespace=b.join("."),n.namespace_re=n.namespace?new RegExp("(^|\\.)"+b.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,h=y.indexOf(":")<0?"on"+y:"";if(!s){u=v.cache;for(f in u)u[f].events&&u[f].events[y]&&v.event.trigger(n,r,u[f].handle.elem,!0);return}n.result=t,n.target||(n.target=s),r=r!=null?v.makeArray(r):[],r.unshift(n),p=v.event.special[y]||{};if(p.trigger&&p.trigger.apply(s,r)===!1)return;m=[[s,p.bindType||y]];if(!o&&!p.noBubble&&!v.isWindow(s)){g=p.delegateType||y,l=Y.test(g+y)?s:s.parentNode;for(c=s;l;l=l.parentNode)m.push([l,g]),c=l;c===(s.ownerDocument||i)&&m.push([c.defaultView||c.parentWindow||e,g])}for(f=0;f<m.length&&!n.isPropagationStopped();f++)l=m[f][0],n.type=m[f][1],d=(v._data(l,"events")||{})[n.type]&&v._data(l,"handle"),d&&d.apply(l,r),d=h&&l[h],d&&v.acceptData(l)&&d.apply&&d.apply(l,r)===!1&&n.preventDefault();return n.type=y,!o&&!n.isDefaultPrevented()&&(!p._default||p._default.apply(s.ownerDocument,r)===!1)&&(y!=="click"||!v.nodeName(s,"a"))&&v.acceptData(s)&&h&&s[y]&&(y!=="focus"&&y!=="blur"||n.target.offsetWidth!==0)&&!v.isWindow(s)&&(c=s[h],c&&(s[h]=null),v.event.triggered=y,s[y](),v.event.triggered=t,c&&(s[h]=c)),n.result}return},dispatch:function(n){n=v.event.fix(n||e.event);var r,i,s,o,u,a,f,c,h,p,d=(v._data(this,"events")||{})[n.type]||[],m=d.delegateCount,g=l.call(arguments),y=!n.exclusive&&!n.namespace,b=v.event.special[n.type]||{},w=[];g[0]=n,n.delegateTarget=this;if(b.preDispatch&&b.preDispatch.call(this,n)===!1)return;if(m&&(!n.button||n.type!=="click"))for(s=n.target;s!=this;s=s.parentNode||this)if(s.disabled!==!0||n.type!=="click"){u={},f=[];for(r=0;r<m;r++)c=d[r],h=c.selector,u[h]===t&&(u[h]=c.needsContext?v(h,this).index(s)>=0:v.find(h,this,null,[s]).length),u[h]&&f.push(c);f.length&&w.push({elem:s,matches:f})}d.length>m&&w.push({elem:this,matches:d.slice(m)});for(r=0;r<w.length&&!n.isPropagationStopped();r++){a=w[r],n.currentTarget=a.elem;for(i=0;i<a.matches.length&&!n.isImmediatePropagationStopped();i++){c=a.matches[i];if(y||!n.namespace&&!c.namespace||n.namespace_re&&n.namespace_re.test(c.namespace))n.data=c.data,n.handleObj=c,o=((v.event.special[c.origType]||{}).handle||c.handler).apply(a.elem,g),o!==t&&(n.result=o,o===!1&&(n.preventDefault(),n.stopPropagation()))}}return b.postDispatch&&b.postDispatch.call(this,n),n.result},props:"attrChange attrName relatedNode srcElement altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),fixHooks:{},keyHooks:{props:"char charCode key keyCode".split(" "),filter:function(e,t){return e.which==null&&(e.which=t.charCode!=null?t.charCode:t.keyCode),e}},mouseHooks:{props:"button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),filter:function(e,n){var r,s,o,u=n.button,a=n.fromElement;return e.pageX==null&&n.clientX!=null&&(r=e.target.ownerDocument||i,s=r.documentElement,o=r.body,e.pageX=n.clientX+(s&&s.scrollLeft||o&&o.scrollLeft||0)-(s&&s.clientLeft||o&&o.clientLeft||0),e.pageY=n.clientY+(s&&s.scrollTop||o&&o.scrollTop||0)-(s&&s.clientTop||o&&o.clientTop||0)),!e.relatedTarget&&a&&(e.relatedTarget=a===e.target?n.toElement:a),!e.which&&u!==t&&(e.which=u&1?1:u&2?3:u&4?2:0),e}},fix:function(e){if(e[v.expando])return e;var t,n,r=e,s=v.event.fixHooks[e.type]||{},o=s.props?this.props.concat(s.props):this.props;e=v.Event(r);for(t=o.length;t;)n=o[--t],e[n]=r[n];return e.target||(e.target=r.srcElement||i),e.target.nodeType===3&&(e.target=e.target.parentNode),e.metaKey=!!e.metaKey,s.filter?s.filter(e,r):e},special:{load:{noBubble:!0},focus:{delegateType:"focusin"},blur:{delegateType:"focusout"},beforeunload:{setup:function(e,t,n){v.isWindow(this)&&(this.onbeforeunload=n)},teardown:function(e,t){this.onbeforeunload===t&&(this.onbeforeunload=null)}}},simulate:function(e,t,n,r){var i=v.extend(new v.Event,n,{type:e,isSimulated:!0,originalEvent:{}});r?v.event.trigger(i,null,t):v.event.dispatch.call(t,i),i.isDefaultPrevented()&&n.preventDefault()}},v.event.handle=v.event.dispatch,v.removeEvent=i.removeEventListener?function(e,t,n){e.removeEventListener&&e.removeEventListener(t,n,!1)}:function(e,t,n){var r="on"+t;e.detachEvent&&(typeof e[r]=="undefined"&&(e[r]=null),e.detachEvent(r,n))},v.Event=function(e,t){if(!(this instanceof v.Event))return new v.Event(e,t);e&&e.type?(this.originalEvent=e,this.type=e.type,this.isDefaultPrevented=e.defaultPrevented||e.returnValue===!1||e.getPreventDefault&&e.getPreventDefault()?tt:et):this.type=e,t&&v.extend(this,t),this.timeStamp=e&&e.timeStamp||v.now(),this[v.expando]=!0},v.Event.prototype={preventDefault:function(){this.isDefaultPrevented=tt;var e=this.originalEvent;if(!e)return;e.preventDefault?e.preventDefault():e.returnValue=!1},stopPropagation:function(){this.isPropagationStopped=tt;var e=this.originalEvent;if(!e)return;e.stopPropagation&&e.stopPropagation(),e.cancelBubble=!0},stopImmediatePropagation:function(){this.isImmediatePropagationStopped=tt,this.stopPropagation()},isDefaultPrevented:et,isPropagationStopped:et,isImmediatePropagationStopped:et},v.each({mouseenter:"mouseover",mouseleave:"mouseout"},function(e,t){v.event.special[e]={delegateType:t,bindType:t,handle:function(e){var n,r=this,i=e.relatedTarget,s=e.handleObj,o=s.selector;if(!i||i!==r&&!v.contains(r,i))e.type=s.origType,n=s.handler.apply(this,arguments),e.type=t;return n}}}),v.support.submitBubbles||(v.event.special.submit={setup:function(){if(v.nodeName(this,"form"))return!1;v.event.add(this,"click._submit keypress._submit",function(e){var n=e.target,r=v.nodeName(n,"input")||v.nodeName(n,"button")?n.form:t;r&&!v._data(r,"_submit_attached")&&(v.event.add(r,"submit._submit",function(e){e._submit_bubble=!0}),v._data(r,"_submit_attached",!0))})},postDispatch:function(e){e._submit_bubble&&(delete e._submit_bubble,this.parentNode&&!e.isTrigger&&v.event.simulate("submit",this.parentNode,e,!0))},teardown:function(){if(v.nodeName(this,"form"))return!1;v.event.remove(this,"._submit")}}),v.support.changeBubbles||(v.event.special.change={setup:function(){if($.test(this.nodeName)){if(this.type==="checkbox"||this.type==="radio")v.event.add(this,"propertychange._change",function(e){e.originalEvent.propertyName==="checked"&&(this._just_changed=!0)}),v.event.add(this,"click._change",function(e){this._just_changed&&!e.isTrigger&&(this._just_changed=!1),v.event.simulate("change",this,e,!0)});return!1}v.event.add(this,"beforeactivate._change",function(e){var t=e.target;$.test(t.nodeName)&&!v._data(t,"_change_attached")&&(v.event.add(t,"change._change",function(e){this.parentNode&&!e.isSimulated&&!e.isTrigger&&v.event.simulate("change",this.parentNode,e,!0)}),v._data(t,"_change_attached",!0))})},handle:function(e){var t=e.target;if(this!==t||e.isSimulated||e.isTrigger||t.type!=="radio"&&t.type!=="checkbox")return e.handleObj.handler.apply(this,arguments)},teardown:function(){return v.event.remove(this,"._change"),!$.test(this.nodeName)}}),v.support.focusinBubbles||v.each({focus:"focusin",blur:"focusout"},function(e,t){var n=0,r=function(e){v.event.simulate(t,e.target,v.event.fix(e),!0)};v.event.special[t]={setup:function(){n++===0&&i.addEventListener(e,r,!0)},teardown:function(){--n===0&&i.removeEventListener(e,r,!0)}}}),v.fn.extend({on:function(e,n,r,i,s){var o,u;if(typeof e=="object"){typeof n!="string"&&(r=r||n,n=t);for(u in e)this.on(u,n,r,e[u],s);return this}r==null&&i==null?(i=n,r=n=t):i==null&&(typeof n=="string"?(i=r,r=t):(i=r,r=n,n=t));if(i===!1)i=et;else if(!i)return this;return s===1&&(o=i,i=function(e){return v().off(e),o.apply(this,arguments)},i.guid=o.guid||(o.guid=v.guid++)),this.each(function(){v.event.add(this,e,i,r,n)})},one:function(e,t,n,r){return this.on(e,t,n,r,1)},off:function(e,n,r){var i,s;if(e&&e.preventDefault&&e.handleObj)return i=e.handleObj,v(e.delegateTarget).off(i.namespace?i.origType+"."+i.namespace:i.origType,i.selector,i.handler),this;if(typeof e=="object"){for(s in e)this.off(s,n,e[s]);return this}if(n===!1||typeof n=="function")r=n,n=t;return r===!1&&(r=et),this.each(function(){v.event.remove(this,e,r,n)})},bind:function(e,t,n){return this.on(e,null,t,n)},unbind:function(e,t){return this.off(e,null,t)},live:function(e,t,n){return v(this.context).on(e,this.selector,t,n),this},die:function(e,t){return v(this.context).off(e,this.selector||"**",t),this},delegate:function(e,t,n,r){return this.on(t,e,n,r)},undelegate:function(e,t,n){return arguments.length===1?this.off(e,"**"):this.off(t,e||"**",n)},trigger:function(e,t){return this.each(function(){v.event.trigger(e,t,this)})},triggerHandler:function(e,t){if(this[0])return v.event.trigger(e,t,this[0],!0)},toggle:function(e){var t=arguments,n=e.guid||v.guid++,r=0,i=function(n){var i=(v._data(this,"lastToggle"+e.guid)||0)%r;return v._data(this,"lastToggle"+e.guid,i+1),n.preventDefault(),t[i].apply(this,arguments)||!1};i.guid=n;while(r<t.length)t[r++].guid=n;return this.click(i)},hover:function(e,t){return this.mouseenter(e).mouseleave(t||e)}}),v.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),function(e,t){v.fn[t]=function(e,n){return n==null&&(n=e,e=null),arguments.length>0?this.on(t,null,e,n):this.trigger(t)},Q.test(t)&&(v.event.fixHooks[t]=v.event.keyHooks),G.test(t)&&(v.event.fixHooks[t]=v.event.mouseHooks)}),function(e,t){function nt(e,t,n,r){n=n||[],t=t||g;var i,s,a,f,l=t.nodeType;if(!e||typeof e!="string")return n;if(l!==1&&l!==9)return[];a=o(t);if(!a&&!r)if(i=R.exec(e))if(f=i[1]){if(l===9){s=t.getElementById(f);if(!s||!s.parentNode)return n;if(s.id===f)return n.push(s),n}else if(t.ownerDocument&&(s=t.ownerDocument.getElementById(f))&&u(t,s)&&s.id===f)return n.push(s),n}else{if(i[2])return S.apply(n,x.call(t.getElementsByTagName(e),0)),n;if((f=i[3])&&Z&&t.getElementsByClassName)return S.apply(n,x.call(t.getElementsByClassName(f),0)),n}return vt(e.replace(j,"$1"),t,n,r,a)}function rt(e){return function(t){var n=t.nodeName.toLowerCase();return n==="input"&&t.type===e}}function it(e){return function(t){var n=t.nodeName.toLowerCase();return(n==="input"||n==="button")&&t.type===e}}function st(e){return N(function(t){return t=+t,N(function(n,r){var i,s=e([],n.length,t),o=s.length;while(o--)n[i=s[o]]&&(n[i]=!(r[i]=n[i]))})})}function ot(e,t,n){if(e===t)return n;var r=e.nextSibling;while(r){if(r===t)return-1;r=r.nextSibling}return 1}function ut(e,t){var n,r,s,o,u,a,f,l=L[d][e+" "];if(l)return t?0:l.slice(0);u=e,a=[],f=i.preFilter;while(u){if(!n||(r=F.exec(u)))r&&(u=u.slice(r[0].length)||u),a.push(s=[]);n=!1;if(r=I.exec(u))s.push(n=new m(r.shift())),u=u.slice(n.length),n.type=r[0].replace(j," ");for(o in i.filter)(r=J[o].exec(u))&&(!f[o]||(r=f[o](r)))&&(s.push(n=new m(r.shift())),u=u.slice(n.length),n.type=o,n.matches=r);if(!n)break}return t?u.length:u?nt.error(e):L(e,a).slice(0)}function at(e,t,r){var i=t.dir,s=r&&t.dir==="parentNode",o=w++;return t.first?function(t,n,r){while(t=t[i])if(s||t.nodeType===1)return e(t,n,r)}:function(t,r,u){if(!u){var a,f=b+" "+o+" ",l=f+n;while(t=t[i])if(s||t.nodeType===1){if((a=t[d])===l)return t.sizset;if(typeof a=="string"&&a.indexOf(f)===0){if(t.sizset)return t}else{t[d]=l;if(e(t,r,u))return t.sizset=!0,t;t.sizset=!1}}}else while(t=t[i])if(s||t.nodeType===1)if(e(t,r,u))return t}}function ft(e){return e.length>1?function(t,n,r){var i=e.length;while(i--)if(!e[i](t,n,r))return!1;return!0}:e[0]}function lt(e,t,n,r,i){var s,o=[],u=0,a=e.length,f=t!=null;for(;u<a;u++)if(s=e[u])if(!n||n(s,r,i))o.push(s),f&&t.push(u);return o}function ct(e,t,n,r,i,s){return r&&!r[d]&&(r=ct(r)),i&&!i[d]&&(i=ct(i,s)),N(function(s,o,u,a){var f,l,c,h=[],p=[],d=o.length,v=s||dt(t||"*",u.nodeType?[u]:u,[]),m=e&&(s||!t)?lt(v,h,e,u,a):v,g=n?i||(s?e:d||r)?[]:o:m;n&&n(m,g,u,a);if(r){f=lt(g,p),r(f,[],u,a),l=f.length;while(l--)if(c=f[l])g[p[l]]=!(m[p[l]]=c)}if(s){if(i||e){if(i){f=[],l=g.length;while(l--)(c=g[l])&&f.push(m[l]=c);i(null,g=[],f,a)}l=g.length;while(l--)(c=g[l])&&(f=i?T.call(s,c):h[l])>-1&&(s[f]=!(o[f]=c))}}else g=lt(g===o?g.splice(d,g.length):g),i?i(null,o,g,a):S.apply(o,g)})}function ht(e){var t,n,r,s=e.length,o=i.relative[e[0].type],u=o||i.relative[" "],a=o?1:0,f=at(function(e){return e===t},u,!0),l=at(function(e){return T.call(t,e)>-1},u,!0),h=[function(e,n,r){return!o&&(r||n!==c)||((t=n).nodeType?f(e,n,r):l(e,n,r))}];for(;a<s;a++)if(n=i.relative[e[a].type])h=[at(ft(h),n)];else{n=i.filter[e[a].type].apply(null,e[a].matches);if(n[d]){r=++a;for(;r<s;r++)if(i.relative[e[r].type])break;return ct(a>1&&ft(h),a>1&&e.slice(0,a-1).join("").replace(j,"$1"),n,a<r&&ht(e.slice(a,r)),r<s&&ht(e=e.slice(r)),r<s&&e.join(""))}h.push(n)}return ft(h)}function pt(e,t){var r=t.length>0,s=e.length>0,o=function(u,a,f,l,h){var p,d,v,m=[],y=0,w="0",x=u&&[],T=h!=null,N=c,C=u||s&&i.find.TAG("*",h&&a.parentNode||a),k=b+=N==null?1:Math.E;T&&(c=a!==g&&a,n=o.el);for(;(p=C[w])!=null;w++){if(s&&p){for(d=0;v=e[d];d++)if(v(p,a,f)){l.push(p);break}T&&(b=k,n=++o.el)}r&&((p=!v&&p)&&y--,u&&x.push(p))}y+=w;if(r&&w!==y){for(d=0;v=t[d];d++)v(x,m,a,f);if(u){if(y>0)while(w--)!x[w]&&!m[w]&&(m[w]=E.call(l));m=lt(m)}S.apply(l,m),T&&!u&&m.length>0&&y+t.length>1&&nt.uniqueSort(l)}return T&&(b=k,c=N),x};return o.el=0,r?N(o):o}function dt(e,t,n){var r=0,i=t.length;for(;r<i;r++)nt(e,t[r],n);return n}function vt(e,t,n,r,s){var o,u,f,l,c,h=ut(e),p=h.length;if(!r&&h.length===1){u=h[0]=h[0].slice(0);if(u.length>2&&(f=u[0]).type==="ID"&&t.nodeType===9&&!s&&i.relative[u[1].type]){t=i.find.ID(f.matches[0].replace($,""),t,s)[0];if(!t)return n;e=e.slice(u.shift().length)}for(o=J.POS.test(e)?-1:u.length-1;o>=0;o--){f=u[o];if(i.relative[l=f.type])break;if(c=i.find[l])if(r=c(f.matches[0].replace($,""),z.test(u[0].type)&&t.parentNode||t,s)){u.splice(o,1),e=r.length&&u.join("");if(!e)return S.apply(n,x.call(r,0)),n;break}}}return a(e,h)(r,t,s,n,z.test(e)),n}function mt(){}var n,r,i,s,o,u,a,f,l,c,h=!0,p="undefined",d=("sizcache"+Math.random()).replace(".",""),m=String,g=e.document,y=g.documentElement,b=0,w=0,E=[].pop,S=[].push,x=[].slice,T=[].indexOf||function(e){var t=0,n=this.length;for(;t<n;t++)if(this[t]===e)return t;return-1},N=function(e,t){return e[d]=t==null||t,e},C=function(){var e={},t=[];return N(function(n,r){return t.push(n)>i.cacheLength&&delete e[t.shift()],e[n+" "]=r},e)},k=C(),L=C(),A=C(),O="[\\x20\\t\\r\\n\\f]",M="(?:\\\\.|[-\\w]|[^\\x00-\\xa0])+",_=M.replace("w","w#"),D="([*^$|!~]?=)",P="\\["+O+"*("+M+")"+O+"*(?:"+D+O+"*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|("+_+")|)|)"+O+"*\\]",H=":("+M+")(?:\\((?:(['\"])((?:\\\\.|[^\\\\])*?)\\2|([^()[\\]]*|(?:(?:"+P+")|[^:]|\\\\.)*|.*))\\)|)",B=":(even|odd|eq|gt|lt|nth|first|last)(?:\\("+O+"*((?:-\\d)?\\d*)"+O+"*\\)|)(?=[^-]|$)",j=new RegExp("^"+O+"+|((?:^|[^\\\\])(?:\\\\.)*)"+O+"+$","g"),F=new RegExp("^"+O+"*,"+O+"*"),I=new RegExp("^"+O+"*([\\x20\\t\\r\\n\\f>+~])"+O+"*"),q=new RegExp(H),R=/^(?:#([\w\-]+)|(\w+)|\.([\w\-]+))$/,U=/^:not/,z=/[\x20\t\r\n\f]*[+~]/,W=/:not\($/,X=/h\d/i,V=/input|select|textarea|button/i,$=/\\(?!\\)/g,J={ID:new RegExp("^#("+M+")"),CLASS:new RegExp("^\\.("+M+")"),NAME:new RegExp("^\\[name=['\"]?("+M+")['\"]?\\]"),TAG:new RegExp("^("+M.replace("w","w*")+")"),ATTR:new RegExp("^"+P),PSEUDO:new RegExp("^"+H),POS:new RegExp(B,"i"),CHILD:new RegExp("^:(only|nth|first|last)-child(?:\\("+O+"*(even|odd|(([+-]|)(\\d*)n|)"+O+"*(?:([+-]|)"+O+"*(\\d+)|))"+O+"*\\)|)","i"),needsContext:new RegExp("^"+O+"*[>+~]|"+B,"i")},K=function(e){var t=g.createElement("div");try{return e(t)}catch(n){return!1}finally{t=null}},Q=K(function(e){return e.appendChild(g.createComment("")),!e.getElementsByTagName("*").length}),G=K(function(e){return e.innerHTML="<a href='#'></a>",e.firstChild&&typeof e.firstChild.getAttribute!==p&&e.firstChild.getAttribute("href")==="#"}),Y=K(function(e){e.innerHTML="<select></select>";var t=typeof e.lastChild.getAttribute("multiple");return t!=="boolean"&&t!=="string"}),Z=K(function(e){return e.innerHTML="<div class='hidden e'></div><div class='hidden'></div>",!e.getElementsByClassName||!e.getElementsByClassName("e").length?!1:(e.lastChild.className="e",e.getElementsByClassName("e").length===2)}),et=K(function(e){e.id=d+0,e.innerHTML="<a name='"+d+"'></a><div name='"+d+"'></div>",y.insertBefore(e,y.firstChild);var t=g.getElementsByName&&g.getElementsByName(d).length===2+g.getElementsByName(d+0).length;return r=!g.getElementById(d),y.removeChild(e),t});try{x.call(y.childNodes,0)[0].nodeType}catch(tt){x=function(e){var t,n=[];for(;t=this[e];e++)n.push(t);return n}}nt.matches=function(e,t){return nt(e,null,null,t)},nt.matchesSelector=function(e,t){return nt(t,null,null,[e]).length>0},s=nt.getText=function(e){var t,n="",r=0,i=e.nodeType;if(i){if(i===1||i===9||i===11){if(typeof e.textContent=="string")return e.textContent;for(e=e.firstChild;e;e=e.nextSibling)n+=s(e)}else if(i===3||i===4)return e.nodeValue}else for(;t=e[r];r++)n+=s(t);return n},o=nt.isXML=function(e){var t=e&&(e.ownerDocument||e).documentElement;return t?t.nodeName!=="HTML":!1},u=nt.contains=y.contains?function(e,t){var n=e.nodeType===9?e.documentElement:e,r=t&&t.parentNode;return e===r||!!(r&&r.nodeType===1&&n.contains&&n.contains(r))}:y.compareDocumentPosition?function(e,t){return t&&!!(e.compareDocumentPosition(t)&16)}:function(e,t){while(t=t.parentNode)if(t===e)return!0;return!1},nt.attr=function(e,t){var n,r=o(e);return r||(t=t.toLowerCase()),(n=i.attrHandle[t])?n(e):r||Y?e.getAttribute(t):(n=e.getAttributeNode(t),n?typeof e[t]=="boolean"?e[t]?t:null:n.specified?n.value:null:null)},i=nt.selectors={cacheLength:50,createPseudo:N,match:J,attrHandle:G?{}:{href:function(e){return e.getAttribute("href",2)},type:function(e){return e.getAttribute("type")}},find:{ID:r?function(e,t,n){if(typeof t.getElementById!==p&&!n){var r=t.getElementById(e);return r&&r.parentNode?[r]:[]}}:function(e,n,r){if(typeof n.getElementById!==p&&!r){var i=n.getElementById(e);return i?i.id===e||typeof i.getAttributeNode!==p&&i.getAttributeNode("id").value===e?[i]:t:[]}},TAG:Q?function(e,t){if(typeof t.getElementsByTagName!==p)return t.getElementsByTagName(e)}:function(e,t){var n=t.getElementsByTagName(e);if(e==="*"){var r,i=[],s=0;for(;r=n[s];s++)r.nodeType===1&&i.push(r);return i}return n},NAME:et&&function(e,t){if(typeof t.getElementsByName!==p)return t.getElementsByName(name)},CLASS:Z&&function(e,t,n){if(typeof t.getElementsByClassName!==p&&!n)return t.getElementsByClassName(e)}},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(e){return e[1]=e[1].replace($,""),e[3]=(e[4]||e[5]||"").replace($,""),e[2]==="~="&&(e[3]=" "+e[3]+" "),e.slice(0,4)},CHILD:function(e){return e[1]=e[1].toLowerCase(),e[1]==="nth"?(e[2]||nt.error(e[0]),e[3]=+(e[3]?e[4]+(e[5]||1):2*(e[2]==="even"||e[2]==="odd")),e[4]=+(e[6]+e[7]||e[2]==="odd")):e[2]&&nt.error(e[0]),e},PSEUDO:function(e){var t,n;if(J.CHILD.test(e[0]))return null;if(e[3])e[2]=e[3];else if(t=e[4])q.test(t)&&(n=ut(t,!0))&&(n=t.indexOf(")",t.length-n)-t.length)&&(t=t.slice(0,n),e[0]=e[0].slice(0,n)),e[2]=t;return e.slice(0,3)}},filter:{ID:r?function(e){return e=e.replace($,""),function(t){return t.getAttribute("id")===e}}:function(e){return e=e.replace($,""),function(t){var n=typeof t.getAttributeNode!==p&&t.getAttributeNode("id");return n&&n.value===e}},TAG:function(e){return e==="*"?function(){return!0}:(e=e.replace($,"").toLowerCase(),function(t){return t.nodeName&&t.nodeName.toLowerCase()===e})},CLASS:function(e){var t=k[d][e+" "];return t||(t=new RegExp("(^|"+O+")"+e+"("+O+"|$)"))&&k(e,function(e){return t.test(e.className||typeof e.getAttribute!==p&&e.getAttribute("class")||"")})},ATTR:function(e,t,n){return function(r,i){var s=nt.attr(r,e);return s==null?t==="!=":t?(s+="",t==="="?s===n:t==="!="?s!==n:t==="^="?n&&s.indexOf(n)===0:t==="*="?n&&s.indexOf(n)>-1:t==="$="?n&&s.substr(s.length-n.length)===n:t==="~="?(" "+s+" ").indexOf(n)>-1:t==="|="?s===n||s.substr(0,n.length+1)===n+"-":!1):!0}},CHILD:function(e,t,n,r){return e==="nth"?function(e){var t,i,s=e.parentNode;if(n===1&&r===0)return!0;if(s){i=0;for(t=s.firstChild;t;t=t.nextSibling)if(t.nodeType===1){i++;if(e===t)break}}return i-=r,i===n||i%n===0&&i/n>=0}:function(t){var n=t;switch(e){case"only":case"first":while(n=n.previousSibling)if(n.nodeType===1)return!1;if(e==="first")return!0;n=t;case"last":while(n=n.nextSibling)if(n.nodeType===1)return!1;return!0}}},PSEUDO:function(e,t){var n,r=i.pseudos[e]||i.setFilters[e.toLowerCase()]||nt.error("unsupported pseudo: "+e);return r[d]?r(t):r.length>1?(n=[e,e,"",t],i.setFilters.hasOwnProperty(e.toLowerCase())?N(function(e,n){var i,s=r(e,t),o=s.length;while(o--)i=T.call(e,s[o]),e[i]=!(n[i]=s[o])}):function(e){return r(e,0,n)}):r}},pseudos:{not:N(function(e){var t=[],n=[],r=a(e.replace(j,"$1"));return r[d]?N(function(e,t,n,i){var s,o=r(e,null,i,[]),u=e.length;while(u--)if(s=o[u])e[u]=!(t[u]=s)}):function(e,i,s){return t[0]=e,r(t,null,s,n),!n.pop()}}),has:N(function(e){return function(t){return nt(e,t).length>0}}),contains:N(function(e){return function(t){return(t.textContent||t.innerText||s(t)).indexOf(e)>-1}}),enabled:function(e){return e.disabled===!1},disabled:function(e){return e.disabled===!0},checked:function(e){var t=e.nodeName.toLowerCase();return t==="input"&&!!e.checked||t==="option"&&!!e.selected},selected:function(e){return e.parentNode&&e.parentNode.selectedIndex,e.selected===!0},parent:function(e){return!i.pseudos.empty(e)},empty:function(e){var t;e=e.firstChild;while(e){if(e.nodeName>"@"||(t=e.nodeType)===3||t===4)return!1;e=e.nextSibling}return!0},header:function(e){return X.test(e.nodeName)},text:function(e){var t,n;return e.nodeName.toLowerCase()==="input"&&(t=e.type)==="text"&&((n=e.getAttribute("type"))==null||n.toLowerCase()===t)},radio:rt("radio"),checkbox:rt("checkbox"),file:rt("file"),password:rt("password"),image:rt("image"),submit:it("submit"),reset:it("reset"),button:function(e){var t=e.nodeName.toLowerCase();return t==="input"&&e.type==="button"||t==="button"},input:function(e){return V.test(e.nodeName)},focus:function(e){var t=e.ownerDocument;return e===t.activeElement&&(!t.hasFocus||t.hasFocus())&&!!(e.type||e.href||~e.tabIndex)},active:function(e){return e===e.ownerDocument.activeElement},first:st(function(){return[0]}),last:st(function(e,t){return[t-1]}),eq:st(function(e,t,n){return[n<0?n+t:n]}),even:st(function(e,t){for(var n=0;n<t;n+=2)e.push(n);return e}),odd:st(function(e,t){for(var n=1;n<t;n+=2)e.push(n);return e}),lt:st(function(e,t,n){for(var r=n<0?n+t:n;--r>=0;)e.push(r);return e}),gt:st(function(e,t,n){for(var r=n<0?n+t:n;++r<t;)e.push(r);return e})}},f=y.compareDocumentPosition?function(e,t){return e===t?(l=!0,0):(!e.compareDocumentPosition||!t.compareDocumentPosition?e.compareDocumentPosition:e.compareDocumentPosition(t)&4)?-1:1}:function(e,t){if(e===t)return l=!0,0;if(e.sourceIndex&&t.sourceIndex)return e.sourceIndex-t.sourceIndex;var n,r,i=[],s=[],o=e.parentNode,u=t.parentNode,a=o;if(o===u)return ot(e,t);if(!o)return-1;if(!u)return 1;while(a)i.unshift(a),a=a.parentNode;a=u;while(a)s.unshift(a),a=a.parentNode;n=i.length,r=s.length;for(var f=0;f<n&&f<r;f++)if(i[f]!==s[f])return ot(i[f],s[f]);return f===n?ot(e,s[f],-1):ot(i[f],t,1)},[0,0].sort(f),h=!l,nt.uniqueSort=function(e){var t,n=[],r=1,i=0;l=h,e.sort(f);if(l){for(;t=e[r];r++)t===e[r-1]&&(i=n.push(r));while(i--)e.splice(n[i],1)}return e},nt.error=function(e){throw new Error("Syntax error, unrecognized expression: "+e)},a=nt.compile=function(e,t){var n,r=[],i=[],s=A[d][e+" "];if(!s){t||(t=ut(e)),n=t.length;while(n--)s=ht(t[n]),s[d]?r.push(s):i.push(s);s=A(e,pt(i,r))}return s},g.querySelectorAll&&function(){var e,t=vt,n=/'|\\/g,r=/\=[\x20\t\r\n\f]*([^'"\]]*)[\x20\t\r\n\f]*\]/g,i=[":focus"],s=[":active"],u=y.matchesSelector||y.mozMatchesSelector||y.webkitMatchesSelector||y.oMatchesSelector||y.msMatchesSelector;K(function(e){e.innerHTML="<select><option selected=''></option></select>",e.querySelectorAll("[selected]").length||i.push("\\["+O+"*(?:checked|disabled|ismap|multiple|readonly|selected|value)"),e.querySelectorAll(":checked").length||i.push(":checked")}),K(function(e){e.innerHTML="<p test=''></p>",e.querySelectorAll("[test^='']").length&&i.push("[*^$]="+O+"*(?:\"\"|'')"),e.innerHTML="<input type='hidden'/>",e.querySelectorAll(":enabled").length||i.push(":enabled",":disabled")}),i=new RegExp(i.join("|")),vt=function(e,r,s,o,u){if(!o&&!u&&!i.test(e)){var a,f,l=!0,c=d,h=r,p=r.nodeType===9&&e;if(r.nodeType===1&&r.nodeName.toLowerCase()!=="object"){a=ut(e),(l=r.getAttribute("id"))?c=l.replace(n,"\\$&"):r.setAttribute("id",c),c="[id='"+c+"'] ",f=a.length;while(f--)a[f]=c+a[f].join("");h=z.test(e)&&r.parentNode||r,p=a.join(",")}if(p)try{return S.apply(s,x.call(h.querySelectorAll(p),0)),s}catch(v){}finally{l||r.removeAttribute("id")}}return t(e,r,s,o,u)},u&&(K(function(t){e=u.call(t,"div");try{u.call(t,"[test!='']:sizzle"),s.push("!=",H)}catch(n){}}),s=new RegExp(s.join("|")),nt.matchesSelector=function(t,n){n=n.replace(r,"='$1']");if(!o(t)&&!s.test(n)&&!i.test(n))try{var a=u.call(t,n);if(a||e||t.document&&t.document.nodeType!==11)return a}catch(f){}return nt(n,null,null,[t]).length>0})}(),i.pseudos.nth=i.pseudos.eq,i.filters=mt.prototype=i.pseudos,i.setFilters=new mt,nt.attr=v.attr,v.find=nt,v.expr=nt.selectors,v.expr[":"]=v.expr.pseudos,v.unique=nt.uniqueSort,v.text=nt.getText,v.isXMLDoc=nt.isXML,v.contains=nt.contains}(e);var nt=/Until$/,rt=/^(?:parents|prev(?:Until|All))/,it=/^.[^:#\[\.,]*$/,st=v.expr.match.needsContext,ot={children:!0,contents:!0,next:!0,prev:!0};v.fn.extend({find:function(e){var t,n,r,i,s,o,u=this;if(typeof e!="string")return v(e).filter(function(){for(t=0,n=u.length;t<n;t++)if(v.contains(u[t],this))return!0});o=this.pushStack("","find",e);for(t=0,n=this.length;t<n;t++){r=o.length,v.find(e,this[t],o);if(t>0)for(i=r;i<o.length;i++)for(s=0;s<r;s++)if(o[s]===o[i]){o.splice(i--,1);break}}return o},has:function(e){var t,n=v(e,this),r=n.length;return this.filter(function(){for(t=0;t<r;t++)if(v.contains(this,n[t]))return!0})},not:function(e){return this.pushStack(ft(this,e,!1),"not",e)},filter:function(e){return this.pushStack(ft(this,e,!0),"filter",e)},is:function(e){return!!e&&(typeof e=="string"?st.test(e)?v(e,this.context).index(this[0])>=0:v.filter(e,this).length>0:this.filter(e).length>0)},closest:function(e,t){var n,r=0,i=this.length,s=[],o=st.test(e)||typeof e!="string"?v(e,t||this.context):0;for(;r<i;r++){n=this[r];while(n&&n.ownerDocument&&n!==t&&n.nodeType!==11){if(o?o.index(n)>-1:v.find.matchesSelector(n,e)){s.push(n);break}n=n.parentNode}}return s=s.length>1?v.unique(s):s,this.pushStack(s,"closest",e)},index:function(e){return e?typeof e=="string"?v.inArray(this[0],v(e)):v.inArray(e.jquery?e[0]:e,this):this[0]&&this[0].parentNode?this.prevAll().length:-1},add:function(e,t){var n=typeof e=="string"?v(e,t):v.makeArray(e&&e.nodeType?[e]:e),r=v.merge(this.get(),n);return this.pushStack(ut(n[0])||ut(r[0])?r:v.unique(r))},addBack:function(e){return this.add(e==null?this.prevObject:this.prevObject.filter(e))}}),v.fn.andSelf=v.fn.addBack,v.each({parent:function(e){var t=e.parentNode;return t&&t.nodeType!==11?t:null},parents:function(e){return v.dir(e,"parentNode")},parentsUntil:function(e,t,n){return v.dir(e,"parentNode",n)},next:function(e){return at(e,"nextSibling")},prev:function(e){return at(e,"previousSibling")},nextAll:function(e){return v.dir(e,"nextSibling")},prevAll:function(e){return v.dir(e,"previousSibling")},nextUntil:function(e,t,n){return v.dir(e,"nextSibling",n)},prevUntil:function(e,t,n){return v.dir(e,"previousSibling",n)},siblings:function(e){return v.sibling((e.parentNode||{}).firstChild,e)},children:function(e){return v.sibling(e.firstChild)},contents:function(e){return v.nodeName(e,"iframe")?e.contentDocument||e.contentWindow.document:v.merge([],e.childNodes)}},function(e,t){v.fn[e]=function(n,r){var i=v.map(this,t,n);return nt.test(e)||(r=n),r&&typeof r=="string"&&(i=v.filter(r,i)),i=this.length>1&&!ot[e]?v.unique(i):i,this.length>1&&rt.test(e)&&(i=i.reverse()),this.pushStack(i,e,l.call(arguments).join(","))}}),v.extend({filter:function(e,t,n){return n&&(e=":not("+e+")"),t.length===1?v.find.matchesSelector(t[0],e)?[t[0]]:[]:v.find.matches(e,t)},dir:function(e,n,r){var i=[],s=e[n];while(s&&s.nodeType!==9&&(r===t||s.nodeType!==1||!v(s).is(r)))s.nodeType===1&&i.push(s),s=s[n];return i},sibling:function(e,t){var n=[];for(;e;e=e.nextSibling)e.nodeType===1&&e!==t&&n.push(e);return n}});var ct="abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",ht=/ jQuery\d+="(?:null|\d+)"/g,pt=/^\s+/,dt=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,vt=/<([\w:]+)/,mt=/<tbody/i,gt=/<|&#?\w+;/,yt=/<(?:script|style|link)/i,bt=/<(?:script|object|embed|option|style)/i,wt=new RegExp("<(?:"+ct+")[\\s/>]","i"),Et=/^(?:checkbox|radio)$/,St=/checked\s*(?:[^=]|=\s*.checked.)/i,xt=/\/(java|ecma)script/i,Tt=/^\s*<!(?:\[CDATA\[|\-\-)|[\]\-]{2}>\s*$/g,Nt={option:[1,"<select multiple='multiple'>","</select>"],legend:[1,"<fieldset>","</fieldset>"],thead:[1,"<table>","</table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],col:[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"],area:[1,"<map>","</map>"],_default:[0,"",""]},Ct=lt(i),kt=Ct.appendChild(i.createElement("div"));Nt.optgroup=Nt.option,Nt.tbody=Nt.tfoot=Nt.colgroup=Nt.caption=Nt.thead,Nt.th=Nt.td,v.support.htmlSerialize||(Nt._default=[1,"X<div>","</div>"]),v.fn.extend({text:function(e){return v.access(this,function(e){return e===t?v.text(this):this.empty().append((this[0]&&this[0].ownerDocument||i).createTextNode(e))},null,e,arguments.length)},wrapAll:function(e){if(v.isFunction(e))return this.each(function(t){v(this).wrapAll(e.call(this,t))});if(this[0]){var t=v(e,this[0].ownerDocument).eq(0).clone(!0);this[0].parentNode&&t.insertBefore(this[0]),t.map(function(){var e=this;while(e.firstChild&&e.firstChild.nodeType===1)e=e.firstChild;return e}).append(this)}return this},wrapInner:function(e){return v.isFunction(e)?this.each(function(t){v(this).wrapInner(e.call(this,t))}):this.each(function(){var t=v(this),n=t.contents();n.length?n.wrapAll(e):t.append(e)})},wrap:function(e){var t=v.isFunction(e);return this.each(function(n){v(this).wrapAll(t?e.call(this,n):e)})},unwrap:function(){return this.parent().each(function(){v.nodeName(this,"body")||v(this).replaceWith(this.childNodes)}).end()},append:function(){return this.domManip(arguments,!0,function(e){(this.nodeType===1||this.nodeType===11)&&this.appendChild(e)})},prepend:function(){return this.domManip(arguments,!0,function(e){(this.nodeType===1||this.nodeType===11)&&this.insertBefore(e,this.firstChild)})},before:function(){if(!ut(this[0]))return this.domManip(arguments,!1,function(e){this.parentNode.insertBefore(e,this)});if(arguments.length){var e=v.clean(arguments);return this.pushStack(v.merge(e,this),"before",this.selector)}},after:function(){if(!ut(this[0]))return this.domManip(arguments,!1,function(e){this.parentNode.insertBefore(e,this.nextSibling)});if(arguments.length){var e=v.clean(arguments);return this.pushStack(v.merge(this,e),"after",this.selector)}},remove:function(e,t){var n,r=0;for(;(n=this[r])!=null;r++)if(!e||v.filter(e,[n]).length)!t&&n.nodeType===1&&(v.cleanData(n.getElementsByTagName("*")),v.cleanData([n])),n.parentNode&&n.parentNode.removeChild(n);return this},empty:function(){var e,t=0;for(;(e=this[t])!=null;t++){e.nodeType===1&&v.cleanData(e.getElementsByTagName("*"));while(e.firstChild)e.removeChild(e.firstChild)}return this},clone:function(e,t){return e=e==null?!1:e,t=t==null?e:t,this.map(function(){return v.clone(this,e,t)})},html:function(e){return v.access(this,function(e){var n=this[0]||{},r=0,i=this.length;if(e===t)return n.nodeType===1?n.innerHTML.replace(ht,""):t;if(typeof e=="string"&&!yt.test(e)&&(v.support.htmlSerialize||!wt.test(e))&&(v.support.leadingWhitespace||!pt.test(e))&&!Nt[(vt.exec(e)||["",""])[1].toLowerCase()]){e=e.replace(dt,"<$1></$2>");try{for(;r<i;r++)n=this[r]||{},n.nodeType===1&&(v.cleanData(n.getElementsByTagName("*")),n.innerHTML=e);n=0}catch(s){}}n&&this.empty().append(e)},null,e,arguments.length)},replaceWith:function(e){return ut(this[0])?this.length?this.pushStack(v(v.isFunction(e)?e():e),"replaceWith",e):this:v.isFunction(e)?this.each(function(t){var n=v(this),r=n.html();n.replaceWith(e.call(this,t,r))}):(typeof e!="string"&&(e=v(e).detach()),this.each(function(){var t=this.nextSibling,n=this.parentNode;v(this).remove(),t?v(t).before(e):v(n).append(e)}))},detach:function(e){return this.remove(e,!0)},domManip:function(e,n,r){e=[].concat.apply([],e);var i,s,o,u,a=0,f=e[0],l=[],c=this.length;if(!v.support.checkClone&&c>1&&typeof f=="string"&&St.test(f))return this.each(function(){v(this).domManip(e,n,r)});if(v.isFunction(f))return this.each(function(i){var s=v(this);e[0]=f.call(this,i,n?s.html():t),s.domManip(e,n,r)});if(this[0]){i=v.buildFragment(e,this,l),o=i.fragment,s=o.firstChild,o.childNodes.length===1&&(o=s);if(s){n=n&&v.nodeName(s,"tr");for(u=i.cacheable||c-1;a<c;a++)r.call(n&&v.nodeName(this[a],"table")?Lt(this[a],"tbody"):this[a],a===u?o:v.clone(o,!0,!0))}o=s=null,l.length&&v.each(l,function(e,t){t.src?v.ajax?v.ajax({url:t.src,type:"GET",dataType:"script",async:!1,global:!1,"throws":!0}):v.error("no ajax"):v.globalEval((t.text||t.textContent||t.innerHTML||"").replace(Tt,"")),t.parentNode&&t.parentNode.removeChild(t)})}return this}}),v.buildFragment=function(e,n,r){var s,o,u,a=e[0];return n=n||i,n=!n.nodeType&&n[0]||n,n=n.ownerDocument||n,e.length===1&&typeof a=="string"&&a.length<512&&n===i&&a.charAt(0)==="<"&&!bt.test(a)&&(v.support.checkClone||!St.test(a))&&(v.support.html5Clone||!wt.test(a))&&(o=!0,s=v.fragments[a],u=s!==t),s||(s=n.createDocumentFragment(),v.clean(e,n,s,r),o&&(v.fragments[a]=u&&s)),{fragment:s,cacheable:o}},v.fragments={},v.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(e,t){v.fn[e]=function(n){var r,i=0,s=[],o=v(n),u=o.length,a=this.length===1&&this[0].parentNode;if((a==null||a&&a.nodeType===11&&a.childNodes.length===1)&&u===1)return o[t](this[0]),this;for(;i<u;i++)r=(i>0?this.clone(!0):this).get(),v(o[i])[t](r),s=s.concat(r);return this.pushStack(s,e,o.selector)}}),v.extend({clone:function(e,t,n){var r,i,s,o;v.support.html5Clone||v.isXMLDoc(e)||!wt.test("<"+e.nodeName+">")?o=e.cloneNode(!0):(kt.innerHTML=e.outerHTML,kt.removeChild(o=kt.firstChild));if((!v.support.noCloneEvent||!v.support.noCloneChecked)&&(e.nodeType===1||e.nodeType===11)&&!v.isXMLDoc(e)){Ot(e,o),r=Mt(e),i=Mt(o);for(s=0;r[s];++s)i[s]&&Ot(r[s],i[s])}if(t){At(e,o);if(n){r=Mt(e),i=Mt(o);for(s=0;r[s];++s)At(r[s],i[s])}}return r=i=null,o},clean:function(e,t,n,r){var s,o,u,a,f,l,c,h,p,d,m,g,y=t===i&&Ct,b=[];if(!t||typeof t.createDocumentFragment=="undefined")t=i;for(s=0;(u=e[s])!=null;s++){typeof u=="number"&&(u+="");if(!u)continue;if(typeof u=="string")if(!gt.test(u))u=t.createTextNode(u);else{y=y||lt(t),c=t.createElement("div"),y.appendChild(c),u=u.replace(dt,"<$1></$2>"),a=(vt.exec(u)||["",""])[1].toLowerCase(),f=Nt[a]||Nt._default,l=f[0],c.innerHTML=f[1]+u+f[2];while(l--)c=c.lastChild;if(!v.support.tbody){h=mt.test(u),p=a==="table"&&!h?c.firstChild&&c.firstChild.childNodes:f[1]==="<table>"&&!h?c.childNodes:[];for(o=p.length-1;o>=0;--o)v.nodeName(p[o],"tbody")&&!p[o].childNodes.length&&p[o].parentNode.removeChild(p[o])}!v.support.leadingWhitespace&&pt.test(u)&&c.insertBefore(t.createTextNode(pt.exec(u)[0]),c.firstChild),u=c.childNodes,c.parentNode.removeChild(c)}u.nodeType?b.push(u):v.merge(b,u)}c&&(u=c=y=null);if(!v.support.appendChecked)for(s=0;(u=b[s])!=null;s++)v.nodeName(u,"input")?_t(u):typeof u.getElementsByTagName!="undefined"&&v.grep(u.getElementsByTagName("input"),_t);if(n){m=function(e){if(!e.type||xt.test(e.type))return r?r.push(e.parentNode?e.parentNode.removeChild(e):e):n.appendChild(e)};for(s=0;(u=b[s])!=null;s++)if(!v.nodeName(u,"script")||!m(u))n.appendChild(u),typeof u.getElementsByTagName!="undefined"&&(g=v.grep(v.merge([],u.getElementsByTagName("script")),m),b.splice.apply(b,[s+1,0].concat(g)),s+=g.length)}return b},cleanData:function(e,t){var n,r,i,s,o=0,u=v.expando,a=v.cache,f=v.support.deleteExpando,l=v.event.special;for(;(i=e[o])!=null;o++)if(t||v.acceptData(i)){r=i[u],n=r&&a[r];if(n){if(n.events)for(s in n.events)l[s]?v.event.remove(i,s):v.removeEvent(i,s,n.handle);a[r]&&(delete a[r],f?delete i[u]:i.removeAttribute?i.removeAttribute(u):i[u]=null,v.deletedIds.push(r))}}}}),function(){var e,t;v.uaMatch=function(e){e=e.toLowerCase();var t=/(chrome)[ \/]([\w.]+)/.exec(e)||/(webkit)[ \/]([\w.]+)/.exec(e)||/(opera)(?:.*version|)[ \/]([\w.]+)/.exec(e)||/(msie) ([\w.]+)/.exec(e)||e.indexOf("compatible")<0&&/(mozilla)(?:.*? rv:([\w.]+)|)/.exec(e)||[];return{browser:t[1]||"",version:t[2]||"0"}},e=v.uaMatch(o.userAgent),t={},e.browser&&(t[e.browser]=!0,t.version=e.version),t.chrome?t.webkit=!0:t.webkit&&(t.safari=!0),v.browser=t,v.sub=function(){function e(t,n){return new e.fn.init(t,n)}v.extend(!0,e,this),e.superclass=this,e.fn=e.prototype=this(),e.fn.constructor=e,e.sub=this.sub,e.fn.init=function(r,i){return i&&i instanceof v&&!(i instanceof e)&&(i=e(i)),v.fn.init.call(this,r,i,t)},e.fn.init.prototype=e.fn;var t=e(i);return e}}();var Dt,Pt,Ht,Bt=/alpha\([^)]*\)/i,jt=/opacity=([^)]*)/,Ft=/^(top|right|bottom|left)$/,It=/^(none|table(?!-c[ea]).+)/,qt=/^margin/,Rt=new RegExp("^("+m+")(.*)$","i"),Ut=new RegExp("^("+m+")(?!px)[a-z%]+$","i"),zt=new RegExp("^([-+])=("+m+")","i"),Wt={BODY:"block"},Xt={position:"absolute",visibility:"hidden",display:"block"},Vt={letterSpacing:0,fontWeight:400},$t=["Top","Right","Bottom","Left"],Jt=["Webkit","O","Moz","ms"],Kt=v.fn.toggle;v.fn.extend({css:function(e,n){return v.access(this,function(e,n,r){return r!==t?v.style(e,n,r):v.css(e,n)},e,n,arguments.length>1)},show:function(){return Yt(this,!0)},hide:function(){return Yt(this)},toggle:function(e,t){var n=typeof e=="boolean";return v.isFunction(e)&&v.isFunction(t)?Kt.apply(this,arguments):this.each(function(){(n?e:Gt(this))?v(this).show():v(this).hide()})}}),v.extend({cssHooks:{opacity:{get:function(e,t){if(t){var n=Dt(e,"opacity");return n===""?"1":n}}}},cssNumber:{fillOpacity:!0,fontWeight:!0,lineHeight:!0,opacity:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":v.support.cssFloat?"cssFloat":"styleFloat"},style:function(e,n,r,i){if(!e||e.nodeType===3||e.nodeType===8||!e.style)return;var s,o,u,a=v.camelCase(n),f=e.style;n=v.cssProps[a]||(v.cssProps[a]=Qt(f,a)),u=v.cssHooks[n]||v.cssHooks[a];if(r===t)return u&&"get"in u&&(s=u.get(e,!1,i))!==t?s:f[n];o=typeof r,o==="string"&&(s=zt.exec(r))&&(r=(s[1]+1)*s[2]+parseFloat(v.css(e,n)),o="number");if(r==null||o==="number"&&isNaN(r))return;o==="number"&&!v.cssNumber[a]&&(r+="px");if(!u||!("set"in u)||(r=u.set(e,r,i))!==t)try{f[n]=r}catch(l){}},css:function(e,n,r,i){var s,o,u,a=v.camelCase(n);return n=v.cssProps[a]||(v.cssProps[a]=Qt(e.style,a)),u=v.cssHooks[n]||v.cssHooks[a],u&&"get"in u&&(s=u.get(e,!0,i)),s===t&&(s=Dt(e,n)),s==="normal"&&n in Vt&&(s=Vt[n]),r||i!==t?(o=parseFloat(s),r||v.isNumeric(o)?o||0:s):s},swap:function(e,t,n){var r,i,s={};for(i in t)s[i]=e.style[i],e.style[i]=t[i];r=n.call(e);for(i in t)e.style[i]=s[i];return r}}),e.getComputedStyle?Dt=function(t,n){var r,i,s,o,u=e.getComputedStyle(t,null),a=t.style;return u&&(r=u.getPropertyValue(n)||u[n],r===""&&!v.contains(t.ownerDocument,t)&&(r=v.style(t,n)),Ut.test(r)&&qt.test(n)&&(i=a.width,s=a.minWidth,o=a.maxWidth,a.minWidth=a.maxWidth=a.width=r,r=u.width,a.width=i,a.minWidth=s,a.maxWidth=o)),r}:i.documentElement.currentStyle&&(Dt=function(e,t){var n,r,i=e.currentStyle&&e.currentStyle[t],s=e.style;return i==null&&s&&s[t]&&(i=s[t]),Ut.test(i)&&!Ft.test(t)&&(n=s.left,r=e.runtimeStyle&&e.runtimeStyle.left,r&&(e.runtimeStyle.left=e.currentStyle.left),s.left=t==="fontSize"?"1em":i,i=s.pixelLeft+"px",s.left=n,r&&(e.runtimeStyle.left=r)),i===""?"auto":i}),v.each(["height","width"],function(e,t){v.cssHooks[t]={get:function(e,n,r){if(n)return e.offsetWidth===0&&It.test(Dt(e,"display"))?v.swap(e,Xt,function(){return tn(e,t,r)}):tn(e,t,r)},set:function(e,n,r){return Zt(e,n,r?en(e,t,r,v.support.boxSizing&&v.css(e,"boxSizing")==="border-box"):0)}}}),v.support.opacity||(v.cssHooks.opacity={get:function(e,t){return jt.test((t&&e.currentStyle?e.currentStyle.filter:e.style.filter)||"")?.01*parseFloat(RegExp.$1)+"":t?"1":""},set:function(e,t){var n=e.style,r=e.currentStyle,i=v.isNumeric(t)?"alpha(opacity="+t*100+")":"",s=r&&r.filter||n.filter||"";n.zoom=1;if(t>=1&&v.trim(s.replace(Bt,""))===""&&n.removeAttribute){n.removeAttribute("filter");if(r&&!r.filter)return}n.filter=Bt.test(s)?s.replace(Bt,i):s+" "+i}}),v(function(){v.support.reliableMarginRight||(v.cssHooks.marginRight={get:function(e,t){return v.swap(e,{display:"inline-block"},function(){if(t)return Dt(e,"marginRight")})}}),!v.support.pixelPosition&&v.fn.position&&v.each(["top","left"],function(e,t){v.cssHooks[t]={get:function(e,n){if(n){var r=Dt(e,t);return Ut.test(r)?v(e).position()[t]+"px":r}}}})}),v.expr&&v.expr.filters&&(v.expr.filters.hidden=function(e){return e.offsetWidth===0&&e.offsetHeight===0||!v.support.reliableHiddenOffsets&&(e.style&&e.style.display||Dt(e,"display"))==="none"},v.expr.filters.visible=function(e){return!v.expr.filters.hidden(e)}),v.each({margin:"",padding:"",border:"Width"},function(e,t){v.cssHooks[e+t]={expand:function(n){var r,i=typeof n=="string"?n.split(" "):[n],s={};for(r=0;r<4;r++)s[e+$t[r]+t]=i[r]||i[r-2]||i[0];return s}},qt.test(e)||(v.cssHooks[e+t].set=Zt)});var rn=/%20/g,sn=/\[\]$/,on=/\r?\n/g,un=/^(?:color|date|datetime|datetime-local|email|hidden|month|number|password|range|search|tel|text|time|url|week)$/i,an=/^(?:select|textarea)/i;v.fn.extend({serialize:function(){return v.param(this.serializeArray())},serializeArray:function(){return this.map(function(){return this.elements?v.makeArray(this.elements):this}).filter(function(){return this.name&&!this.disabled&&(this.checked||an.test(this.nodeName)||un.test(this.type))}).map(function(e,t){var n=v(this).val();return n==null?null:v.isArray(n)?v.map(n,function(e,n){return{name:t.name,value:e.replace(on,"\r\n")}}):{name:t.name,value:n.replace(on,"\r\n")}}).get()}}),v.param=function(e,n){var r,i=[],s=function(e,t){t=v.isFunction(t)?t():t==null?"":t,i[i.length]=encodeURIComponent(e)+"="+encodeURIComponent(t)};n===t&&(n=v.ajaxSettings&&v.ajaxSettings.traditional);if(v.isArray(e)||e.jquery&&!v.isPlainObject(e))v.each(e,function(){s(this.name,this.value)});else for(r in e)fn(r,e[r],n,s);return i.join("&").replace(rn,"+")};var ln,cn,hn=/#.*$/,pn=/^(.*?):[ \t]*([^\r\n]*)\r?$/mg,dn=/^(?:about|app|app\-storage|.+\-extension|file|res|widget):$/,vn=/^(?:GET|HEAD)$/,mn=/^\/\//,gn=/\?/,yn=/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi,bn=/([?&])_=[^&]*/,wn=/^([\w\+\.\-]+:)(?:\/\/([^\/?#:]*)(?::(\d+)|)|)/,En=v.fn.load,Sn={},xn={},Tn=["*/"]+["*"];try{cn=s.href}catch(Nn){cn=i.createElement("a"),cn.href="",cn=cn.href}ln=wn.exec(cn.toLowerCase())||[],v.fn.load=function(e,n,r){if(typeof e!="string"&&En)return En.apply(this,arguments);if(!this.length)return this;var i,s,o,u=this,a=e.indexOf(" ");return a>=0&&(i=e.slice(a,e.length),e=e.slice(0,a)),v.isFunction(n)?(r=n,n=t):n&&typeof n=="object"&&(s="POST"),v.ajax({url:e,type:s,dataType:"html",data:n,complete:function(e,t){r&&u.each(r,o||[e.responseText,t,e])}}).done(function(e){o=arguments,u.html(i?v("<div>").append(e.replace(yn,"")).find(i):e)}),this},v.each("ajaxStart ajaxStop ajaxComplete ajaxError ajaxSuccess ajaxSend".split(" "),function(e,t){v.fn[t]=function(e){return this.on(t,e)}}),v.each(["get","post"],function(e,n){v[n]=function(e,r,i,s){return v.isFunction(r)&&(s=s||i,i=r,r=t),v.ajax({type:n,url:e,data:r,success:i,dataType:s})}}),v.extend({getScript:function(e,n){return v.get(e,t,n,"script")},getJSON:function(e,t,n){return v.get(e,t,n,"json")},ajaxSetup:function(e,t){return t?Ln(e,v.ajaxSettings):(t=e,e=v.ajaxSettings),Ln(e,t),e},ajaxSettings:{url:cn,isLocal:dn.test(ln[1]),global:!0,type:"GET",contentType:"application/x-www-form-urlencoded; charset=UTF-8",processData:!0,async:!0,accepts:{xml:"application/xml, text/xml",html:"text/html",text:"text/plain",json:"application/json, text/javascript","*":Tn},contents:{xml:/xml/,html:/html/,json:/json/},responseFields:{xml:"responseXML",text:"responseText"},converters:{"* text":e.String,"text html":!0,"text json":v.parseJSON,"text xml":v.parseXML},flatOptions:{context:!0,url:!0}},ajaxPrefilter:Cn(Sn),ajaxTransport:Cn(xn),ajax:function(e,n){function T(e,n,s,a){var l,y,b,w,S,T=n;if(E===2)return;E=2,u&&clearTimeout(u),o=t,i=a||"",x.readyState=e>0?4:0,s&&(w=An(c,x,s));if(e>=200&&e<300||e===304)c.ifModified&&(S=x.getResponseHeader("Last-Modified"),S&&(v.lastModified[r]=S),S=x.getResponseHeader("Etag"),S&&(v.etag[r]=S)),e===304?(T="notmodified",l=!0):(l=On(c,w),T=l.state,y=l.data,b=l.error,l=!b);else{b=T;if(!T||e)T="error",e<0&&(e=0)}x.status=e,x.statusText=(n||T)+"",l?d.resolveWith(h,[y,T,x]):d.rejectWith(h,[x,T,b]),x.statusCode(g),g=t,f&&p.trigger("ajax"+(l?"Success":"Error"),[x,c,l?y:b]),m.fireWith(h,[x,T]),f&&(p.trigger("ajaxComplete",[x,c]),--v.active||v.event.trigger("ajaxStop"))}typeof e=="object"&&(n=e,e=t),n=n||{};var r,i,s,o,u,a,f,l,c=v.ajaxSetup({},n),h=c.context||c,p=h!==c&&(h.nodeType||h instanceof v)?v(h):v.event,d=v.Deferred(),m=v.Callbacks("once memory"),g=c.statusCode||{},b={},w={},E=0,S="canceled",x={readyState:0,setRequestHeader:function(e,t){if(!E){var n=e.toLowerCase();e=w[n]=w[n]||e,b[e]=t}return this},getAllResponseHeaders:function(){return E===2?i:null},getResponseHeader:function(e){var n;if(E===2){if(!s){s={};while(n=pn.exec(i))s[n[1].toLowerCase()]=n[2]}n=s[e.toLowerCase()]}return n===t?null:n},overrideMimeType:function(e){return E||(c.mimeType=e),this},abort:function(e){return e=e||S,o&&o.abort(e),T(0,e),this}};d.promise(x),x.success=x.done,x.error=x.fail,x.complete=m.add,x.statusCode=function(e){if(e){var t;if(E<2)for(t in e)g[t]=[g[t],e[t]];else t=e[x.status],x.always(t)}return this},c.url=((e||c.url)+"").replace(hn,"").replace(mn,ln[1]+"//"),c.dataTypes=v.trim(c.dataType||"*").toLowerCase().split(y),c.crossDomain==null&&(a=wn.exec(c.url.toLowerCase()),c.crossDomain=!(!a||a[1]===ln[1]&&a[2]===ln[2]&&(a[3]||(a[1]==="http:"?80:443))==(ln[3]||(ln[1]==="http:"?80:443)))),c.data&&c.processData&&typeof c.data!="string"&&(c.data=v.param(c.data,c.traditional)),kn(Sn,c,n,x);if(E===2)return x;f=c.global,c.type=c.type.toUpperCase(),c.hasContent=!vn.test(c.type),f&&v.active++===0&&v.event.trigger("ajaxStart");if(!c.hasContent){c.data&&(c.url+=(gn.test(c.url)?"&":"?")+c.data,delete c.data),r=c.url;if(c.cache===!1){var N=v.now(),C=c.url.replace(bn,"$1_="+N);c.url=C+(C===c.url?(gn.test(c.url)?"&":"?")+"_="+N:"")}}(c.data&&c.hasContent&&c.contentType!==!1||n.contentType)&&x.setRequestHeader("Content-Type",c.contentType),c.ifModified&&(r=r||c.url,v.lastModified[r]&&x.setRequestHeader("If-Modified-Since",v.lastModified[r]),v.etag[r]&&x.setRequestHeader("If-None-Match",v.etag[r])),x.setRequestHeader("Accept",c.dataTypes[0]&&c.accepts[c.dataTypes[0]]?c.accepts[c.dataTypes[0]]+(c.dataTypes[0]!=="*"?", "+Tn+"; q=0.01":""):c.accepts["*"]);for(l in c.headers)x.setRequestHeader(l,c.headers[l]);if(!c.beforeSend||c.beforeSend.call(h,x,c)!==!1&&E!==2){S="abort";for(l in{success:1,error:1,complete:1})x[l](c[l]);o=kn(xn,c,n,x);if(!o)T(-1,"No Transport");else{x.readyState=1,f&&p.trigger("ajaxSend",[x,c]),c.async&&c.timeout>0&&(u=setTimeout(function(){x.abort("timeout")},c.timeout));try{E=1,o.send(b,T)}catch(k){if(!(E<2))throw k;T(-1,k)}}return x}return x.abort()},active:0,lastModified:{},etag:{}});var Mn=[],_n=/\?/,Dn=/(=)\?(?=&|$)|\?\?/,Pn=v.now();v.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var e=Mn.pop()||v.expando+"_"+Pn++;return this[e]=!0,e}}),v.ajaxPrefilter("json jsonp",function(n,r,i){var s,o,u,a=n.data,f=n.url,l=n.jsonp!==!1,c=l&&Dn.test(f),h=l&&!c&&typeof a=="string"&&!(n.contentType||"").indexOf("application/x-www-form-urlencoded")&&Dn.test(a);if(n.dataTypes[0]==="jsonp"||c||h)return s=n.jsonpCallback=v.isFunction(n.jsonpCallback)?n.jsonpCallback():n.jsonpCallback,o=e[s],c?n.url=f.replace(Dn,"$1"+s):h?n.data=a.replace(Dn,"$1"+s):l&&(n.url+=(_n.test(f)?"&":"?")+n.jsonp+"="+s),n.converters["script json"]=function(){return u||v.error(s+" was not called"),u[0]},n.dataTypes[0]="json",e[s]=function(){u=arguments},i.always(function(){e[s]=o,n[s]&&(n.jsonpCallback=r.jsonpCallback,Mn.push(s)),u&&v.isFunction(o)&&o(u[0]),u=o=t}),"script"}),v.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/javascript|ecmascript/},converters:{"text script":function(e){return v.globalEval(e),e}}}),v.ajaxPrefilter("script",function(e){e.cache===t&&(e.cache=!1),e.crossDomain&&(e.type="GET",e.global=!1)}),v.ajaxTransport("script",function(e){if(e.crossDomain){var n,r=i.head||i.getElementsByTagName("head")[0]||i.documentElement;return{send:function(s,o){n=i.createElement("script"),n.async="async",e.scriptCharset&&(n.charset=e.scriptCharset),n.src=e.url,n.onload=n.onreadystatechange=function(e,i){if(i||!n.readyState||/loaded|complete/.test(n.readyState))n.onload=n.onreadystatechange=null,r&&n.parentNode&&r.removeChild(n),n=t,i||o(200,"success")},r.insertBefore(n,r.firstChild)},abort:function(){n&&n.onload(0,1)}}}});var Hn,Bn=e.ActiveXObject?function(){for(var e in Hn)Hn[e](0,1)}:!1,jn=0;v.ajaxSettings.xhr=e.ActiveXObject?function(){return!this.isLocal&&Fn()||In()}:Fn,function(e){v.extend(v.support,{ajax:!!e,cors:!!e&&"withCredentials"in e})}(v.ajaxSettings.xhr()),v.support.ajax&&v.ajaxTransport(function(n){if(!n.crossDomain||v.support.cors){var r;return{send:function(i,s){var o,u,a=n.xhr();n.username?a.open(n.type,n.url,n.async,n.username,n.password):a.open(n.type,n.url,n.async);if(n.xhrFields)for(u in n.xhrFields)a[u]=n.xhrFields[u];n.mimeType&&a.overrideMimeType&&a.overrideMimeType(n.mimeType),!n.crossDomain&&!i["X-Requested-With"]&&(i["X-Requested-With"]="XMLHttpRequest");try{for(u in i)a.setRequestHeader(u,i[u])}catch(f){}a.send(n.hasContent&&n.data||null),r=function(e,i){var u,f,l,c,h;try{if(r&&(i||a.readyState===4)){r=t,o&&(a.onreadystatechange=v.noop,Bn&&delete Hn[o]);if(i)a.readyState!==4&&a.abort();else{u=a.status,l=a.getAllResponseHeaders(),c={},h=a.responseXML,h&&h.documentElement&&(c.xml=h);try{c.text=a.responseText}catch(p){}try{f=a.statusText}catch(p){f=""}!u&&n.isLocal&&!n.crossDomain?u=c.text?200:404:u===1223&&(u=204)}}}catch(d){i||s(-1,d)}c&&s(u,f,c,l)},n.async?a.readyState===4?setTimeout(r,0):(o=++jn,Bn&&(Hn||(Hn={},v(e).unload(Bn)),Hn[o]=r),a.onreadystatechange=r):r()},abort:function(){r&&r(0,1)}}}});var qn,Rn,Un=/^(?:toggle|show|hide)$/,zn=new RegExp("^(?:([-+])=|)("+m+")([a-z%]*)$","i"),Wn=/queueHooks$/,Xn=[Gn],Vn={"*":[function(e,t){var n,r,i=this.createTween(e,t),s=zn.exec(t),o=i.cur(),u=+o||0,a=1,f=20;if(s){n=+s[2],r=s[3]||(v.cssNumber[e]?"":"px");if(r!=="px"&&u){u=v.css(i.elem,e,!0)||n||1;do a=a||".5",u/=a,v.style(i.elem,e,u+r);while(a!==(a=i.cur()/o)&&a!==1&&--f)}i.unit=r,i.start=u,i.end=s[1]?u+(s[1]+1)*n:n}return i}]};v.Animation=v.extend(Kn,{tweener:function(e,t){v.isFunction(e)?(t=e,e=["*"]):e=e.split(" ");var n,r=0,i=e.length;for(;r<i;r++)n=e[r],Vn[n]=Vn[n]||[],Vn[n].unshift(t)},prefilter:function(e,t){t?Xn.unshift(e):Xn.push(e)}}),v.Tween=Yn,Yn.prototype={constructor:Yn,init:function(e,t,n,r,i,s){this.elem=e,this.prop=n,this.easing=i||"swing",this.options=t,this.start=this.now=this.cur(),this.end=r,this.unit=s||(v.cssNumber[n]?"":"px")},cur:function(){var e=Yn.propHooks[this.prop];return e&&e.get?e.get(this):Yn.propHooks._default.get(this)},run:function(e){var t,n=Yn.propHooks[this.prop];return this.options.duration?this.pos=t=v.easing[this.easing](e,this.options.duration*e,0,1,this.options.duration):this.pos=t=e,this.now=(this.end-this.start)*t+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),n&&n.set?n.set(this):Yn.propHooks._default.set(this),this}},Yn.prototype.init.prototype=Yn.prototype,Yn.propHooks={_default:{get:function(e){var t;return e.elem[e.prop]==null||!!e.elem.style&&e.elem.style[e.prop]!=null?(t=v.css(e.elem,e.prop,!1,""),!t||t==="auto"?0:t):e.elem[e.prop]},set:function(e){v.fx.step[e.prop]?v.fx.step[e.prop](e):e.elem.style&&(e.elem.style[v.cssProps[e.prop]]!=null||v.cssHooks[e.prop])?v.style(e.elem,e.prop,e.now+e.unit):e.elem[e.prop]=e.now}}},Yn.propHooks.scrollTop=Yn.propHooks.scrollLeft={set:function(e){e.elem.nodeType&&e.elem.parentNode&&(e.elem[e.prop]=e.now)}},v.each(["toggle","show","hide"],function(e,t){var n=v.fn[t];v.fn[t]=function(r,i,s){return r==null||typeof r=="boolean"||!e&&v.isFunction(r)&&v.isFunction(i)?n.apply(this,arguments):this.animate(Zn(t,!0),r,i,s)}}),v.fn.extend({fadeTo:function(e,t,n,r){return this.filter(Gt).css("opacity",0).show().end().animate({opacity:t},e,n,r)},animate:function(e,t,n,r){var i=v.isEmptyObject(e),s=v.speed(t,n,r),o=function(){var t=Kn(this,v.extend({},e),s);i&&t.stop(!0)};return i||s.queue===!1?this.each(o):this.queue(s.queue,o)},stop:function(e,n,r){var i=function(e){var t=e.stop;delete e.stop,t(r)};return typeof e!="string"&&(r=n,n=e,e=t),n&&e!==!1&&this.queue(e||"fx",[]),this.each(function(){var t=!0,n=e!=null&&e+"queueHooks",s=v.timers,o=v._data(this);if(n)o[n]&&o[n].stop&&i(o[n]);else for(n in o)o[n]&&o[n].stop&&Wn.test(n)&&i(o[n]);for(n=s.length;n--;)s[n].elem===this&&(e==null||s[n].queue===e)&&(s[n].anim.stop(r),t=!1,s.splice(n,1));(t||!r)&&v.dequeue(this,e)})}}),v.each({slideDown:Zn("show"),slideUp:Zn("hide"),slideToggle:Zn("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(e,t){v.fn[e]=function(e,n,r){return this.animate(t,e,n,r)}}),v.speed=function(e,t,n){var r=e&&typeof e=="object"?v.extend({},e):{complete:n||!n&&t||v.isFunction(e)&&e,duration:e,easing:n&&t||t&&!v.isFunction(t)&&t};r.duration=v.fx.off?0:typeof r.duration=="number"?r.duration:r.duration in v.fx.speeds?v.fx.speeds[r.duration]:v.fx.speeds._default;if(r.queue==null||r.queue===!0)r.queue="fx";return r.old=r.complete,r.complete=function(){v.isFunction(r.old)&&r.old.call(this),r.queue&&v.dequeue(this,r.queue)},r},v.easing={linear:function(e){return e},swing:function(e){return.5-Math.cos(e*Math.PI)/2}},v.timers=[],v.fx=Yn.prototype.init,v.fx.tick=function(){var e,n=v.timers,r=0;qn=v.now();for(;r<n.length;r++)e=n[r],!e()&&n[r]===e&&n.splice(r--,1);n.length||v.fx.stop(),qn=t},v.fx.timer=function(e){e()&&v.timers.push(e)&&!Rn&&(Rn=setInterval(v.fx.tick,v.fx.interval))},v.fx.interval=13,v.fx.stop=function(){clearInterval(Rn),Rn=null},v.fx.speeds={slow:600,fast:200,_default:400},v.fx.step={},v.expr&&v.expr.filters&&(v.expr.filters.animated=function(e){return v.grep(v.timers,function(t){return e===t.elem}).length});var er=/^(?:body|html)$/i;v.fn.offset=function(e){if(arguments.length)return e===t?this:this.each(function(t){v.offset.setOffset(this,e,t)});var n,r,i,s,o,u,a,f={top:0,left:0},l=this[0],c=l&&l.ownerDocument;if(!c)return;return(r=c.body)===l?v.offset.bodyOffset(l):(n=c.documentElement,v.contains(n,l)?(typeof l.getBoundingClientRect!="undefined"&&(f=l.getBoundingClientRect()),i=tr(c),s=n.clientTop||r.clientTop||0,o=n.clientLeft||r.clientLeft||0,u=i.pageYOffset||n.scrollTop,a=i.pageXOffset||n.scrollLeft,{top:f.top+u-s,left:f.left+a-o}):f)},v.offset={bodyOffset:function(e){var t=e.offsetTop,n=e.offsetLeft;return v.support.doesNotIncludeMarginInBodyOffset&&(t+=parseFloat(v.css(e,"marginTop"))||0,n+=parseFloat(v.css(e,"marginLeft"))||0),{top:t,left:n}},setOffset:function(e,t,n){var r=v.css(e,"position");r==="static"&&(e.style.position="relative");var i=v(e),s=i.offset(),o=v.css(e,"top"),u=v.css(e,"left"),a=(r==="absolute"||r==="fixed")&&v.inArray("auto",[o,u])>-1,f={},l={},c,h;a?(l=i.position(),c=l.top,h=l.left):(c=parseFloat(o)||0,h=parseFloat(u)||0),v.isFunction(t)&&(t=t.call(e,n,s)),t.top!=null&&(f.top=t.top-s.top+c),t.left!=null&&(f.left=t.left-s.left+h),"using"in t?t.using.call(e,f):i.css(f)}},v.fn.extend({position:function(){if(!this[0])return;var e=this[0],t=this.offsetParent(),n=this.offset(),r=er.test(t[0].nodeName)?{top:0,left:0}:t.offset();return n.top-=parseFloat(v.css(e,"marginTop"))||0,n.left-=parseFloat(v.css(e,"marginLeft"))||0,r.top+=parseFloat(v.css(t[0],"borderTopWidth"))||0,r.left+=parseFloat(v.css(t[0],"borderLeftWidth"))||0,{top:n.top-r.top,left:n.left-r.left}},offsetParent:function(){return this.map(function(){var e=this.offsetParent||i.body;while(e&&!er.test(e.nodeName)&&v.css(e,"position")==="static")e=e.offsetParent;return e||i.body})}}),v.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(e,n){var r=/Y/.test(n);v.fn[e]=function(i){return v.access(this,function(e,i,s){var o=tr(e);if(s===t)return o?n in o?o[n]:o.document.documentElement[i]:e[i];o?o.scrollTo(r?v(o).scrollLeft():s,r?s:v(o).scrollTop()):e[i]=s},e,i,arguments.length,null)}}),v.each({Height:"height",Width:"width"},function(e,n){v.each({padding:"inner"+e,content:n,"":"outer"+e},function(r,i){v.fn[i]=function(i,s){var o=arguments.length&&(r||typeof i!="boolean"),u=r||(i===!0||s===!0?"margin":"border");return v.access(this,function(n,r,i){var s;return v.isWindow(n)?n.document.documentElement["client"+e]:n.nodeType===9?(s=n.documentElement,Math.max(n.body["scroll"+e],s["scroll"+e],n.body["offset"+e],s["offset"+e],s["client"+e])):i===t?v.css(n,r,i,u):v.style(n,r,i,u)},n,o?i:t,o,null)}})}),e.jQuery=e.$=v,typeof define=="function"&&define.amd&&define.amd.jQuery&&define("jquery",[],function(){return v})})(window);// file: jquery.socialshareprivacy.js
/*
 * jquery.socialshareprivacy.js | 2 Klicks fuer mehr Datenschutz
 *
 * http://www.heise.de/extras/socialshareprivacy/
 * http://www.heise.de/ct/artikel/2-Klicks-fuer-mehr-Datenschutz-1333879.html
 *
 * Copyright (c) 2011 Hilko Holweg, Sebastian Hilbig, Nicolas Heiringhoff, Juergen Schmidt,
 * Heise Zeitschriften Verlag GmbH & Co. KG, http://www.heise.de
 *
 * is released under the MIT License http://www.opensource.org/licenses/mit-license.php
 *
 * Spread the word, link to us if you can.
 */
(function ($) {

    "use strict";

	/*
	 * helper functions
	 */ 

    // abbreviate at last blank before length and add "\u2026" (horizontal ellipsis)
    function abbreviateText(text, length) {
        var abbreviated = decodeURIComponent(text);
        if (abbreviated.length <= length) {
            return text;
        }

        var lastWhitespaceIndex = abbreviated.substring(0, length - 1).lastIndexOf(' ');
        abbreviated = encodeURIComponent(abbreviated.substring(0, lastWhitespaceIndex)) + "\u2026";

        return abbreviated;
    }

    // returns content of <meta name="" content=""> tags or '' if empty/non existant
    function getMeta(name) {
        var metaContent = $('meta[name="' + name + '"]').attr('content');
        return metaContent || '';
    }
    
    // create tweet text from content of <meta name="DC.title"> and <meta name="DC.creator">
    // fallback to content of <title> tag
    function getTweetText() {
        var title = getMeta('DC.title');
        var creator = getMeta('DC.creator');

        if (title.length > 0 && creator.length > 0) {
            title += ' - ' + creator;
        } else {
            title = $('title').text();
        }

        return encodeURIComponent(title);
    }

    // build URI from rel="canonical" or document.location
    function getURI() {
        var uri = document.location.href;
        var canonical = $("link[rel=canonical]").attr("href");

        if (canonical && canonical.length > 0) {
            if (canonical.indexOf("http") < 0) {
                canonical = document.location.protocol + "//" + document.location.host + canonical;
            }
            uri = canonical;
        }

        return uri;
    }

    function cookieSet(name, value, days, path, domain) {
        var expires = new Date();
        expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));
        document.cookie = name + '=' + value + '; expires=' + expires.toUTCString() + '; path=' + path + '; domain=' + domain;
    }
    function cookieDel(name, value, path, domain) {
        var expires = new Date();
        expires.setTime(expires.getTime() - 100);
        document.cookie = name + '=' + value + '; expires=' + expires.toUTCString() + '; path=' + path + '; domain=' + domain;
    }

    // extend jquery with our plugin function
    $.fn.socialSharePrivacy = function (settings) {
        var defaults = {
            'services' : {
                'facebook' : {
                    'status'            : 'on',
                    'dummy_img'         : 'socialshareprivacy/images/dummy_facebook.png',
                    'txt_info'          : '2 Klicks f&uuml;r mehr Datenschutz: Erst wenn Sie hier klicken, wird der Button aktiv und Sie k&ouml;nnen Ihre Empfehlung an Facebook senden. Schon beim Aktivieren werden Daten an Dritte &uuml;bertragen &ndash; siehe <em>i</em>.',
                    'txt_fb_off'        : 'nicht mit Facebook verbunden',
                    'txt_fb_on'         : 'mit Facebook verbunden',
                    'perma_option'      : 'on',
                    'display_name'      : 'Facebook',
                    'referrer_track'    : '',
                    'language'          : 'de_DE',
                    'action'            : 'recommend'
                }, 
                'twitter' : {
                    'status'            : 'on', 
                    'dummy_img'         : 'socialshareprivacy/images/dummy_twitter.png',
                    'txt_info'          : '2 Klicks f&uuml;r mehr Datenschutz: Erst wenn Sie hier klicken, wird der Button aktiv und Sie k&ouml;nnen Ihre Empfehlung an Twitter senden. Schon beim Aktivieren werden Daten an Dritte &uuml;bertragen &ndash; siehe <em>i</em>.',
                    'txt_twitter_off'   : 'nicht mit Twitter verbunden',
                    'txt_twitter_on'    : 'mit Twitter verbunden',
                    'perma_option'      : 'on',
                    'display_name'      : 'Twitter',
                    'referrer_track'    : '', 
                    'tweet_text'        : getTweetText,
                    'language'          : 'en'
                },
                'gplus' : {
                    'status'            : 'on',
                    'dummy_img'         : 'socialshareprivacy/images/dummy_gplus.png',
                    'txt_info'          : '2 Klicks f&uuml;r mehr Datenschutz: Erst wenn Sie hier klicken, wird der Button aktiv und Sie k&ouml;nnen Ihre Empfehlung an Google+ senden. Schon beim Aktivieren werden Daten an Dritte &uuml;bertragen &ndash; siehe <em>i</em>.',
                    'txt_gplus_off'     : 'nicht mit Google+ verbunden',
                    'txt_gplus_on'      : 'mit Google+ verbunden',
                    'perma_option'      : 'on',
                    'display_name'      : 'Google+',
                    'referrer_track'    : '',
                    'language'          : 'de'
                }
            },
            'info_link'         : 'http://www.heise.de/ct/artikel/2-Klicks-fuer-mehr-Datenschutz-1333879.html',
            'txt_help'          : 'Wenn Sie diese Felder durch einen Klick aktivieren, werden Informationen an Facebook, Twitter oder Google in die USA &uuml;bertragen und unter Umst&auml;nden auch dort gespeichert. N&auml;heres erfahren Sie durch einen Klick auf das <em>i</em>.',
            'settings_perma'    : 'Dauerhaft aktivieren und Daten&uuml;ber&shy;tragung zustimmen:',
            'cookie_path'       : '/',
            'cookie_domain'     : document.location.host,
            'cookie_expires'    : '365',
            'css_path'          : 'socialshareprivacy/socialshareprivacy.css',
            'uri'               : getURI
        };

        // Standardwerte des Plug-Ings mit den vom User angegebenen Optionen ueberschreiben
        var options = $.extend(true, defaults, settings);

        var facebook_on = (options.services.facebook.status === 'on');
        var twitter_on  = (options.services.twitter.status  === 'on');
        var gplus_on    = (options.services.gplus.status    === 'on');

        // check if at least one service is "on"
        if (!facebook_on && !twitter_on && !gplus_on) {
            return;
        }

        // insert stylesheet into document and prepend target element
        if (options.css_path.length > 0) {
            // IE fix (noetig fuer IE < 9 - wird hier aber fuer alle IE gemacht)
            if (document.createStyleSheet) {
                document.createStyleSheet(options.css_path);
            } else {
                $('head').append('<link rel="stylesheet" type="text/css" href="' + options.css_path + '" />');
            }
        }

        return this.each(function () {

            $(this).prepend('<ul class="social_share_privacy_area"></ul>');
            var context = $('.social_share_privacy_area', this);

            // canonical uri that will be shared
            var uri = options.uri;
            if (typeof uri === 'function') {
                uri = uri(context);
            }

            //
            // Facebook
            //
            if (facebook_on) {
                var fb_enc_uri = encodeURIComponent(uri + options.services.facebook.referrer_track);
                var fb_code = '<iframe src="http://www.facebook.com/plugins/like.php?locale=' + options.services.facebook.language + '&amp;href=' + fb_enc_uri + '&amp;send=false&amp;layout=button_count&amp;width=120&amp;show_faces=false&amp;action=' + options.services.facebook.action + '&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:145px; height:21px;" allowTransparency="true"></iframe>';
                var fb_dummy_btn = '<img src="' + options.services.facebook.dummy_img + '" alt="Facebook &quot;Like&quot;-Dummy" class="fb_like_privacy_dummy" />';

                context.append('<li class="facebook help_info"><span class="info">' + options.services.facebook.txt_info + '</span><span class="switch off">' + options.services.facebook.txt_fb_off + '</span><div class="fb_like dummy_btn">' + fb_dummy_btn + '</div></li>');

                var $container_fb = $('li.facebook', context);
				console.log("test 1");
                $('li.facebook div.fb_like img.fb_like_privacy_dummy,li.facebook span.switch', context).on('click', function () {
						console.log("test 2");
                    if ($container_fb.find('span.switch').hasClass('off')) {
                        $container_fb.addClass('info_off');
                        $container_fb.find('span.switch').addClass('on').removeClass('off').html(options.services.facebook.txt_fb_on);
                        $container_fb.find('img.fb_like_privacy_dummy').replaceWith(fb_code);
                    } else {
                        $container_fb.removeClass('info_off');
                        $container_fb.find('span.switch').addClass('off').removeClass('on').html(options.services.facebook.txt_fb_off);
                        $container_fb.find('.fb_like').html(fb_dummy_btn);
                    }
                });
            }


            //
            // Google+  
            //
            if (gplus_on) {
                // fuer G+ wird die URL nicht encoded, da das zu einem Fehler fuehrt
                var gplus_uri = uri + options.services.gplus.referrer_track;
                
                // we use the Google+ "asynchronous" code, standard code is flaky if inserted into dom after load
                var gplus_code = '<div class="g-plusone" data-size="medium" data-href="' + gplus_uri + '"></div><script type="text/javascript">window.___gcfg = {lang: "' + options.services.gplus.language + '"}; (function() { var po = document.createElement("script"); po.type = "text/javascript"; po.async = true; po.src = "https://apis.google.com/js/plusone.js"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s); })(); </script>';
                var gplus_dummy_btn = '<img src="' + options.services.gplus.dummy_img + '" alt="&quot;Google+1&quot;-Dummy" class="gplus_one_dummy" />';

                context.append('<li class="gplus help_info"><span class="info">' + options.services.gplus.txt_info + '</span><span class="switch off">' + options.services.gplus.txt_gplus_off + '</span><div class="gplusone dummy_btn">' + gplus_dummy_btn + '</div></li>');

                var $container_gplus = $('li.gplus', context);

                $('li.gplus div.gplusone img,li.gplus span.switch', context).on('click', function () {
                    if ($container_gplus.find('span.switch').hasClass('off')) {
                        $container_gplus.addClass('info_off');
                        $container_gplus.find('span.switch').addClass('on').removeClass('off').html(options.services.gplus.txt_gplus_on);
                        $container_gplus.find('img.gplus_one_dummy').replaceWith(gplus_code);
                    } else {
                        $container_gplus.removeClass('info_off');
                        $container_gplus.find('span.switch').addClass('off').removeClass('on').html(options.services.gplus.txt_gplus_off);
                        $container_gplus.find('.gplusone').html(gplus_dummy_btn);
                    }
                });
            }

            //
            // Twitter
            //
            if (twitter_on) {
                var text = options.services.twitter.tweet_text;
                if (typeof text === 'function') {
                    text = text();
                }
                // 120 is the max character count left after twitters automatic url shortening with t.co
                text = abbreviateText(text, '120');

                var twitter_enc_uri = encodeURIComponent(uri + options.services.twitter.referrer_track);
                var twitter_count_url = encodeURIComponent(uri);
                var twitter_code = '<iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.html?url=' + twitter_enc_uri + '&amp;counturl=' + twitter_count_url + '&amp;text=' + text + '&amp;count=horizontal&amp;lang=' + options.services.twitter.language + '" style="width:130px; height:25px;"></iframe>';
                var twitter_dummy_btn = '<img src="' + options.services.twitter.dummy_img + '" alt="&quot;Tweet this&quot;-Dummy" class="tweet_this_dummy" />';

                context.append('<li class="twitter help_info"><span class="info">' + options.services.twitter.txt_info + '</span><span class="switch off">' + options.services.twitter.txt_twitter_off + '</span><div class="tweet dummy_btn">' + twitter_dummy_btn + '</div></li>');

                var $container_tw = $('li.twitter', context);

                $('li.twitter div.tweet img,li.twitter span.switch', context).on('click', function () {
                    if ($container_tw.find('span.switch').hasClass('off')) {
                        $container_tw.addClass('info_off');
                        $container_tw.find('span.switch').addClass('on').removeClass('off').html(options.services.twitter.txt_twitter_on);
                        $container_tw.find('img.tweet_this_dummy').replaceWith(twitter_code);
                    } else {
                        $container_tw.removeClass('info_off');
                        $container_tw.find('span.switch').addClass('off').removeClass('on').html(options.services.twitter.txt_twitter_off);
                        $container_tw.find('.tweet').html(twitter_dummy_btn);
                    }
                });
            }


            //
            // Der Info/Settings-Bereich wird eingebunden
            //
            context.append('<li class="settings_info"><div class="settings_info_menu off perma_option_off"><a href="' + options.info_link + '"><span class="help_info icon"><span class="info">' + options.txt_help + '</span></span></a></div></li>');

            // Info-Overlays mit leichter Verzoegerung einblenden
            $('.help_info:not(.info_off)', context).on('mouseenter', function () {
                var $info_wrapper = $(this);
                var timeout_id = window.setTimeout(function () { $($info_wrapper).addClass('display'); }, 500);
                $(this).data('timeout_id', timeout_id);
            });
            $('.help_info', context).on('mouseleave', function () {
                var timeout_id = $(this).data('timeout_id');
                window.clearTimeout(timeout_id);
                if ($(this).hasClass('display')) {
                    $(this).removeClass('display');
                }
            });

            var facebook_perma = (options.services.facebook.perma_option === 'on');
            var twitter_perma  = (options.services.twitter.perma_option  === 'on');
            var gplus_perma    = (options.services.gplus.perma_option    === 'on');

            // Menue zum dauerhaften Einblenden der aktiven Dienste via Cookie einbinden
            // Die IE7 wird hier ausgenommen, da er kein JSON kann und die Cookies hier ueber JSON-Struktur abgebildet werden
            if (((facebook_on && facebook_perma)
                || (twitter_on && twitter_perma)
                || (gplus_on && gplus_perma))
                    && (!$.browser.msie || ($.browser.msie && $.browser.version > 7.0))) {

                // Cookies abrufen
                var cookie_list = document.cookie.split(';');
                var cookies = '{';
                var i = 0;
                for (; i < cookie_list.length; i += 1) {
                    var foo = cookie_list[i].split('=');
                    cookies += '"' + $.trim(foo[0]) + '":"' + $.trim(foo[1]) + '"';
                    if (i < cookie_list.length - 1) {
                        cookies += ',';
                    }
                }
                cookies += '}';
                cookies = JSON.parse(cookies);

                // Container definieren
                var $container_settings_info = $('li.settings_info', context);

                // Klasse entfernen, die das i-Icon alleine formatiert, da Perma-Optionen eingeblendet werden
                $container_settings_info.find('.settings_info_menu').removeClass('perma_option_off');

                // Perma-Optionen-Icon (.settings) und Formular (noch versteckt) einbinden
                $container_settings_info.find('.settings_info_menu').append('<span class="settings">Einstellungen</span><form><fieldset><legend>' + options.settings_perma + '</legend></fieldset></form>');


                // Die Dienste mit <input> und <label>, sowie checked-Status laut Cookie, schreiben
                var checked = ' checked="checked"';
                if (facebook_on && facebook_perma) {
                    var perma_status_facebook = cookies.socialSharePrivacy_facebook === 'perma_on' ? checked : '';
                    $container_settings_info.find('form fieldset').append(
                        '<input type="checkbox" name="perma_status_facebook" id="perma_status_facebook"'
                            + perma_status_facebook + ' /><label for="perma_status_facebook">'
                            + options.services.facebook.display_name + '</label>'
                    );
                }

                if (twitter_on && twitter_perma) {
                    var perma_status_twitter = cookies.socialSharePrivacy_twitter === 'perma_on' ? checked : '';
                    $container_settings_info.find('form fieldset').append(
                        '<input type="checkbox" name="perma_status_twitter" id="perma_status_twitter"'
                            + perma_status_twitter + ' /><label for="perma_status_twitter">'
                            + options.services.twitter.display_name + '</label>'
                    );
                }

                if (gplus_on && gplus_perma) {
                    var perma_status_gplus = cookies.socialSharePrivacy_gplus === 'perma_on' ? checked : '';
                    $container_settings_info.find('form fieldset').append(
                        '<input type="checkbox" name="perma_status_gplus" id="perma_status_gplus"'
                            + perma_status_gplus + ' /><label for="perma_status_gplus">'
                            + options.services.gplus.display_name + '</label>'
                    );
                }

                // Cursor auf Pointer setzen fuer das Zahnrad
                $container_settings_info.find('span.settings').css('cursor', 'pointer');

                // Einstellungs-Menue bei mouseover ein-/ausblenden
                $($container_settings_info.find('span.settings'), context).on('mouseenter', function () {
                    var timeout_id = window.setTimeout(function () { $container_settings_info.find('.settings_info_menu').removeClass('off').addClass('on'); }, 500);
                    $(this).data('timeout_id', timeout_id);
                }); 
                $($container_settings_info, context).on('mouseleave', function () {
                    var timeout_id = $(this).data('timeout_id');
                    window.clearTimeout(timeout_id);
                    $container_settings_info.find('.settings_info_menu').removeClass('on').addClass('off');
                });

                // Klick-Interaktion auf <input> um Dienste dauerhaft ein- oder auszuschalten (Cookie wird gesetzt oder geloescht)
                $($container_settings_info.find('fieldset input')).on('click', function (event) {
                    var click = event.target.id;
                    var service = click.substr(click.lastIndexOf('_') + 1, click.length);
                    var cookie_name = 'socialSharePrivacy_' + service;

                    if ($('#' + event.target.id + ':checked').length) {
                        cookieSet(cookie_name, 'perma_on', options.cookie_expires, options.cookie_path, options.cookie_domain);
                        $('form fieldset label[for=' + click + ']', context).addClass('checked');
                    } else {
                        cookieDel(cookie_name, 'perma_on', options.cookie_path, options.cookie_domain);
                        $('form fieldset label[for=' + click + ']', context).removeClass('checked');
                    }
                });

                // Dienste automatisch einbinden, wenn entsprechendes Cookie vorhanden ist
                if (facebook_on && facebook_perma && cookies.socialSharePrivacy_facebook === 'perma_on') {
                    $('li.facebook span.switch', context).click();
                }
                if (twitter_on && twitter_perma && cookies.socialSharePrivacy_twitter === 'perma_on') {
                    $('li.twitter span.switch', context).click();
                }
                if (gplus_on && gplus_perma && cookies.socialSharePrivacy_gplus === 'perma_on') {
                    $('li.gplus span.switch', context).click();
                }
            }
        }); // this.each(function ()
    };      // $.fn.socialSharePrivacy = function (settings) {
}(jQuery));

// file: jquery.mCustomScrollbar.concat.min.js
/*mousewheel*/
(function(a){function d(b){var c=b||window.event,d=[].slice.call(arguments,1),e=0,f=!0,g=0,h=0;return b=a.event.fix(c),b.type="mousewheel",c.wheelDelta&&(e=c.wheelDelta/120),c.detail&&(e=-c.detail/3),h=e,c.axis!==undefined&&c.axis===c.HORIZONTAL_AXIS&&(h=0,g=-1*e),c.wheelDeltaY!==undefined&&(h=c.wheelDeltaY/120),c.wheelDeltaX!==undefined&&(g=-1*c.wheelDeltaX/120),d.unshift(b,e,g,h),(a.event.dispatch||a.event.handle).apply(this,d)}var b=["DOMMouseScroll","mousewheel"];if(a.event.fixHooks)for(var c=b.length;c;)a.event.fixHooks[b[--c]]=a.event.mouseHooks;a.event.special.mousewheel={setup:function(){if(this.addEventListener)for(var a=b.length;a;)this.addEventListener(b[--a],d,!1);else this.onmousewheel=d},teardown:function(){if(this.removeEventListener)for(var a=b.length;a;)this.removeEventListener(b[--a],d,!1);else this.onmousewheel=null}},a.fn.extend({mousewheel:function(a){return a?this.bind("mousewheel",a):this.trigger("mousewheel")},unmousewheel:function(a){return this.unbind("mousewheel",a)}})})(jQuery);
/*custom scrollbar*/
(function(c){var b={init:function(e){var f={set_width:false,set_height:false,horizontalScroll:false,scrollInertia:950,mouseWheel:true,mouseWheelPixels:"auto",autoDraggerLength:true,autoHideScrollbar:false,snapAmount:null,snapOffset:0,scrollButtons:{enable:false,scrollType:"continuous",scrollSpeed:"auto",scrollAmount:40},advanced:{updateOnBrowserResize:true,updateOnContentResize:false,autoExpandHorizontalScroll:false,autoScrollOnFocus:true,normalizeMouseWheelDelta:false},contentTouchScroll:true,callbacks:{onScrollStart:function(){},onScroll:function(){},onTotalScroll:function(){},onTotalScrollBack:function(){},onTotalScrollOffset:0,onTotalScrollBackOffset:0,whileScrolling:function(){}},theme:"light"},e=c.extend(true,f,e);return this.each(function(){var m=c(this);if(e.set_width){m.css("width",e.set_width)}if(e.set_height){m.css("height",e.set_height)}if(!c(document).data("mCustomScrollbar-index")){c(document).data("mCustomScrollbar-index","1")}else{var t=parseInt(c(document).data("mCustomScrollbar-index"));c(document).data("mCustomScrollbar-index",t+1)}m.wrapInner("<div class='mCustomScrollBox mCS-"+e.theme+"' id='mCSB_"+c(document).data("mCustomScrollbar-index")+"' style='position:relative; height:100%; overflow:hidden; max-width:100%;' />").addClass("mCustomScrollbar _mCS_"+c(document).data("mCustomScrollbar-index"));var g=m.children(".mCustomScrollBox");if(e.horizontalScroll){g.addClass("mCSB_horizontal").wrapInner("<div class='mCSB_h_wrapper' style='position:relative; left:0; width:999999px;' />");var k=g.children(".mCSB_h_wrapper");k.wrapInner("<div class='mCSB_container' style='position:absolute; left:0;' />").children(".mCSB_container").css({width:k.children().outerWidth(),position:"relative"}).unwrap()}else{g.wrapInner("<div class='mCSB_container' style='position:relative; top:0;' />")}var o=g.children(".mCSB_container");if(c.support.touch){o.addClass("mCS_touch")}o.after("<div class='mCSB_scrollTools' style='position:absolute;'><div class='mCSB_draggerContainer'><div class='mCSB_dragger' style='position:absolute;' oncontextmenu='return false;'><div class='mCSB_dragger_bar' style='position:relative;'></div></div><div class='mCSB_draggerRail'></div></div></div>");var l=g.children(".mCSB_scrollTools"),h=l.children(".mCSB_draggerContainer"),q=h.children(".mCSB_dragger");if(e.horizontalScroll){q.data("minDraggerWidth",q.width())}else{q.data("minDraggerHeight",q.height())}if(e.scrollButtons.enable){if(e.horizontalScroll){l.prepend("<a class='mCSB_buttonLeft' oncontextmenu='return false;'></a>").append("<a class='mCSB_buttonRight' oncontextmenu='return false;'></a>")}else{l.prepend("<a class='mCSB_buttonUp' oncontextmenu='return false;'></a>").append("<a class='mCSB_buttonDown' oncontextmenu='return false;'></a>")}}g.bind("scroll",function(){if(!m.is(".mCS_disabled")){g.scrollTop(0).scrollLeft(0)}});m.data({mCS_Init:true,mCustomScrollbarIndex:c(document).data("mCustomScrollbar-index"),horizontalScroll:e.horizontalScroll,scrollInertia:e.scrollInertia,scrollEasing:"mcsEaseOut",mouseWheel:e.mouseWheel,mouseWheelPixels:e.mouseWheelPixels,autoDraggerLength:e.autoDraggerLength,autoHideScrollbar:e.autoHideScrollbar,snapAmount:e.snapAmount,snapOffset:e.snapOffset,scrollButtons_enable:e.scrollButtons.enable,scrollButtons_scrollType:e.scrollButtons.scrollType,scrollButtons_scrollSpeed:e.scrollButtons.scrollSpeed,scrollButtons_scrollAmount:e.scrollButtons.scrollAmount,autoExpandHorizontalScroll:e.advanced.autoExpandHorizontalScroll,autoScrollOnFocus:e.advanced.autoScrollOnFocus,normalizeMouseWheelDelta:e.advanced.normalizeMouseWheelDelta,contentTouchScroll:e.contentTouchScroll,onScrollStart_Callback:e.callbacks.onScrollStart,onScroll_Callback:e.callbacks.onScroll,onTotalScroll_Callback:e.callbacks.onTotalScroll,onTotalScrollBack_Callback:e.callbacks.onTotalScrollBack,onTotalScroll_Offset:e.callbacks.onTotalScrollOffset,onTotalScrollBack_Offset:e.callbacks.onTotalScrollBackOffset,whileScrolling_Callback:e.callbacks.whileScrolling,bindEvent_scrollbar_drag:false,bindEvent_content_touch:false,bindEvent_scrollbar_click:false,bindEvent_mousewheel:false,bindEvent_buttonsContinuous_y:false,bindEvent_buttonsContinuous_x:false,bindEvent_buttonsPixels_y:false,bindEvent_buttonsPixels_x:false,bindEvent_focusin:false,bindEvent_autoHideScrollbar:false,mCSB_buttonScrollRight:false,mCSB_buttonScrollLeft:false,mCSB_buttonScrollDown:false,mCSB_buttonScrollUp:false});if(e.horizontalScroll){if(m.css("max-width")!=="none"){if(!e.advanced.updateOnContentResize){e.advanced.updateOnContentResize=true}}}else{if(m.css("max-height")!=="none"){var s=false,r=parseInt(m.css("max-height"));if(m.css("max-height").indexOf("%")>=0){s=r,r=m.parent().height()*s/100}m.css("overflow","hidden");g.css("max-height",r)}}m.mCustomScrollbar("update");if(e.advanced.updateOnBrowserResize){var i,j=c(window).width(),u=c(window).height();c(window).bind("resize."+m.data("mCustomScrollbarIndex"),function(){if(i){clearTimeout(i)}i=setTimeout(function(){if(!m.is(".mCS_disabled")&&!m.is(".mCS_destroyed")){var w=c(window).width(),v=c(window).height();if(j!==w||u!==v){if(m.css("max-height")!=="none"&&s){g.css("max-height",m.parent().height()*s/100)}m.mCustomScrollbar("update");j=w;u=v}}},150)})}if(e.advanced.updateOnContentResize){var p;if(e.horizontalScroll){var n=o.outerWidth()}else{var n=o.outerHeight()}p=setInterval(function(){if(e.horizontalScroll){if(e.advanced.autoExpandHorizontalScroll){o.css({position:"absolute",width:"auto"}).wrap("<div class='mCSB_h_wrapper' style='position:relative; left:0; width:999999px;' />").css({width:o.outerWidth(),position:"relative"}).unwrap()}var v=o.outerWidth()}else{var v=o.outerHeight()}if(v!=n){m.mCustomScrollbar("update");n=v}},300)}})},update:function(){var n=c(this),k=n.children(".mCustomScrollBox"),q=k.children(".mCSB_container");q.removeClass("mCS_no_scrollbar");n.removeClass("mCS_disabled mCS_destroyed");k.scrollTop(0).scrollLeft(0);var y=k.children(".mCSB_scrollTools"),o=y.children(".mCSB_draggerContainer"),m=o.children(".mCSB_dragger");if(n.data("horizontalScroll")){var A=y.children(".mCSB_buttonLeft"),t=y.children(".mCSB_buttonRight"),f=k.width();if(n.data("autoExpandHorizontalScroll")){q.css({position:"absolute",width:"auto"}).wrap("<div class='mCSB_h_wrapper' style='position:relative; left:0; width:999999px;' />").css({width:q.outerWidth(),position:"relative"}).unwrap()}var z=q.outerWidth()}else{var w=y.children(".mCSB_buttonUp"),g=y.children(".mCSB_buttonDown"),r=k.height(),i=q.outerHeight()}if(i>r&&!n.data("horizontalScroll")){y.css("display","block");var s=o.height();if(n.data("autoDraggerLength")){var u=Math.round(r/i*s),l=m.data("minDraggerHeight");if(u<=l){m.css({height:l})}else{if(u>=s-10){var p=s-10;m.css({height:p})}else{m.css({height:u})}}m.children(".mCSB_dragger_bar").css({"line-height":m.height()+"px"})}var B=m.height(),x=(i-r)/(s-B);n.data("scrollAmount",x).mCustomScrollbar("scrolling",k,q,o,m,w,g,A,t);var D=Math.abs(q.position().top);n.mCustomScrollbar("scrollTo",D,{scrollInertia:0,trigger:"internal"})}else{if(z>f&&n.data("horizontalScroll")){y.css("display","block");var h=o.width();if(n.data("autoDraggerLength")){var j=Math.round(f/z*h),C=m.data("minDraggerWidth");if(j<=C){m.css({width:C})}else{if(j>=h-10){var e=h-10;m.css({width:e})}else{m.css({width:j})}}}var v=m.width(),x=(z-f)/(h-v);n.data("scrollAmount",x).mCustomScrollbar("scrolling",k,q,o,m,w,g,A,t);var D=Math.abs(q.position().left);n.mCustomScrollbar("scrollTo",D,{scrollInertia:0,trigger:"internal"})}else{k.unbind("mousewheel focusin");if(n.data("horizontalScroll")){m.add(q).css("left",0)}else{m.add(q).css("top",0)}y.css("display","none");q.addClass("mCS_no_scrollbar");n.data({bindEvent_mousewheel:false,bindEvent_focusin:false})}}},scrolling:function(h,p,m,j,w,e,A,v){var k=c(this);if(!k.data("bindEvent_scrollbar_drag")){var n,o;if(c.support.msPointer){j.bind("MSPointerDown",function(H){H.preventDefault();k.data({on_drag:true});j.addClass("mCSB_dragger_onDrag");var G=c(this),J=G.offset(),F=H.originalEvent.pageX-J.left,I=H.originalEvent.pageY-J.top;if(F<G.width()&&F>0&&I<G.height()&&I>0){n=I;o=F}});c(document).bind("MSPointerMove."+k.data("mCustomScrollbarIndex"),function(H){H.preventDefault();if(k.data("on_drag")){var G=j,J=G.offset(),F=H.originalEvent.pageX-J.left,I=H.originalEvent.pageY-J.top;D(n,o,I,F)}}).bind("MSPointerUp."+k.data("mCustomScrollbarIndex"),function(x){k.data({on_drag:false});j.removeClass("mCSB_dragger_onDrag")})}else{j.bind("mousedown touchstart",function(H){H.preventDefault();H.stopImmediatePropagation();var G=c(this),K=G.offset(),F,J;if(H.type==="touchstart"){var I=H.originalEvent.touches[0]||H.originalEvent.changedTouches[0];F=I.pageX-K.left;J=I.pageY-K.top}else{k.data({on_drag:true});j.addClass("mCSB_dragger_onDrag");F=H.pageX-K.left;J=H.pageY-K.top}if(F<G.width()&&F>0&&J<G.height()&&J>0){n=J;o=F}}).bind("touchmove",function(H){H.preventDefault();H.stopImmediatePropagation();var K=H.originalEvent.touches[0]||H.originalEvent.changedTouches[0],G=c(this),J=G.offset(),F=K.pageX-J.left,I=K.pageY-J.top;D(n,o,I,F)});c(document).bind("mousemove."+k.data("mCustomScrollbarIndex"),function(H){if(k.data("on_drag")){var G=j,J=G.offset(),F=H.pageX-J.left,I=H.pageY-J.top;D(n,o,I,F)}}).bind("mouseup."+k.data("mCustomScrollbarIndex"),function(x){k.data({on_drag:false});j.removeClass("mCSB_dragger_onDrag")})}k.data({bindEvent_scrollbar_drag:true})}function D(G,H,I,F){if(k.data("horizontalScroll")){k.mCustomScrollbar("scrollTo",(j.position().left-(H))+F,{moveDragger:true,trigger:"internal"})}else{k.mCustomScrollbar("scrollTo",(j.position().top-(G))+I,{moveDragger:true,trigger:"internal"})}}if(c.support.touch&&k.data("contentTouchScroll")){if(!k.data("bindEvent_content_touch")){var l,B,r,s,u,C,E;p.bind("touchstart",function(x){x.stopImmediatePropagation();l=x.originalEvent.touches[0]||x.originalEvent.changedTouches[0];B=c(this);r=B.offset();u=l.pageX-r.left;s=l.pageY-r.top;C=s;E=u});p.bind("touchmove",function(x){x.preventDefault();x.stopImmediatePropagation();l=x.originalEvent.touches[0]||x.originalEvent.changedTouches[0];B=c(this).parent();r=B.offset();u=l.pageX-r.left;s=l.pageY-r.top;if(k.data("horizontalScroll")){k.mCustomScrollbar("scrollTo",E-u,{trigger:"internal"})}else{k.mCustomScrollbar("scrollTo",C-s,{trigger:"internal"})}})}}if(!k.data("bindEvent_scrollbar_click")){m.bind("click",function(F){var x=(F.pageY-m.offset().top)*k.data("scrollAmount"),y=c(F.target);if(k.data("horizontalScroll")){x=(F.pageX-m.offset().left)*k.data("scrollAmount")}if(y.hasClass("mCSB_draggerContainer")||y.hasClass("mCSB_draggerRail")){k.mCustomScrollbar("scrollTo",x,{trigger:"internal",scrollEasing:"draggerRailEase"})}});k.data({bindEvent_scrollbar_click:true})}if(k.data("mouseWheel")){if(!k.data("bindEvent_mousewheel")){h.bind("mousewheel",function(H,J){var G,F=k.data("mouseWheelPixels"),x=Math.abs(p.position().top),I=j.position().top,y=m.height()-j.height();if(k.data("normalizeMouseWheelDelta")){if(J<0){J=-1}else{J=1}}if(F==="auto"){F=100+Math.round(k.data("scrollAmount")/2)}if(k.data("horizontalScroll")){I=j.position().left;y=m.width()-j.width();x=Math.abs(p.position().left)}if((J>0&&I!==0)||(J<0&&I!==y)){H.preventDefault();H.stopImmediatePropagation()}G=x-(J*F);k.mCustomScrollbar("scrollTo",G,{trigger:"internal"})});k.data({bindEvent_mousewheel:true})}}if(k.data("scrollButtons_enable")){if(k.data("scrollButtons_scrollType")==="pixels"){if(k.data("horizontalScroll")){v.add(A).unbind("mousedown touchstart MSPointerDown mouseup MSPointerUp mouseout MSPointerOut touchend",i,g);k.data({bindEvent_buttonsContinuous_x:false});if(!k.data("bindEvent_buttonsPixels_x")){v.bind("click",function(x){x.preventDefault();q(Math.abs(p.position().left)+k.data("scrollButtons_scrollAmount"))});A.bind("click",function(x){x.preventDefault();q(Math.abs(p.position().left)-k.data("scrollButtons_scrollAmount"))});k.data({bindEvent_buttonsPixels_x:true})}}else{e.add(w).unbind("mousedown touchstart MSPointerDown mouseup MSPointerUp mouseout MSPointerOut touchend",i,g);k.data({bindEvent_buttonsContinuous_y:false});if(!k.data("bindEvent_buttonsPixels_y")){e.bind("click",function(x){x.preventDefault();q(Math.abs(p.position().top)+k.data("scrollButtons_scrollAmount"))});w.bind("click",function(x){x.preventDefault();q(Math.abs(p.position().top)-k.data("scrollButtons_scrollAmount"))});k.data({bindEvent_buttonsPixels_y:true})}}function q(x){if(!j.data("preventAction")){j.data("preventAction",true);k.mCustomScrollbar("scrollTo",x,{trigger:"internal"})}}}else{if(k.data("horizontalScroll")){v.add(A).unbind("click");k.data({bindEvent_buttonsPixels_x:false});if(!k.data("bindEvent_buttonsContinuous_x")){v.bind("mousedown touchstart MSPointerDown",function(y){y.preventDefault();var x=z();k.data({mCSB_buttonScrollRight:setInterval(function(){k.mCustomScrollbar("scrollTo",Math.abs(p.position().left)+x,{trigger:"internal",scrollEasing:"easeOutCirc"})},17)})});var i=function(x){x.preventDefault();clearInterval(k.data("mCSB_buttonScrollRight"))};v.bind("mouseup touchend MSPointerUp mouseout MSPointerOut",i);A.bind("mousedown touchstart MSPointerDown",function(y){y.preventDefault();var x=z();k.data({mCSB_buttonScrollLeft:setInterval(function(){k.mCustomScrollbar("scrollTo",Math.abs(p.position().left)-x,{trigger:"internal",scrollEasing:"easeOutCirc"})},17)})});var g=function(x){x.preventDefault();clearInterval(k.data("mCSB_buttonScrollLeft"))};A.bind("mouseup touchend MSPointerUp mouseout MSPointerOut",g);k.data({bindEvent_buttonsContinuous_x:true})}}else{e.add(w).unbind("click");k.data({bindEvent_buttonsPixels_y:false});if(!k.data("bindEvent_buttonsContinuous_y")){e.bind("mousedown touchstart MSPointerDown",function(y){y.preventDefault();var x=z();k.data({mCSB_buttonScrollDown:setInterval(function(){k.mCustomScrollbar("scrollTo",Math.abs(p.position().top)+x,{trigger:"internal",scrollEasing:"easeOutCirc"})},17)})});var t=function(x){x.preventDefault();clearInterval(k.data("mCSB_buttonScrollDown"))};e.bind("mouseup touchend MSPointerUp mouseout MSPointerOut",t);w.bind("mousedown touchstart MSPointerDown",function(y){y.preventDefault();var x=z();k.data({mCSB_buttonScrollUp:setInterval(function(){k.mCustomScrollbar("scrollTo",Math.abs(p.position().top)-x,{trigger:"internal",scrollEasing:"easeOutCirc"})},17)})});var f=function(x){x.preventDefault();clearInterval(k.data("mCSB_buttonScrollUp"))};w.bind("mouseup touchend MSPointerUp mouseout MSPointerOut",f);k.data({bindEvent_buttonsContinuous_y:true})}}function z(){var x=k.data("scrollButtons_scrollSpeed");if(k.data("scrollButtons_scrollSpeed")==="auto"){x=Math.round((k.data("scrollInertia")+100)/40)}return x}}}if(k.data("autoScrollOnFocus")){if(!k.data("bindEvent_focusin")){h.bind("focusin",function(){h.scrollTop(0).scrollLeft(0);var x=c(document.activeElement);if(x.is("input,textarea,select,button,a[tabindex],area,object")){var G=p.position().top,y=x.position().top,F=h.height()-x.outerHeight();if(k.data("horizontalScroll")){G=p.position().left;y=x.position().left;F=h.width()-x.outerWidth()}if(G+y<0||G+y>F){k.mCustomScrollbar("scrollTo",y,{trigger:"internal"})}}});k.data({bindEvent_focusin:true})}}if(k.data("autoHideScrollbar")){if(!k.data("bindEvent_autoHideScrollbar")){h.bind("mouseenter",function(x){h.addClass("mCS-mouse-over");d.showScrollbar.call(h.children(".mCSB_scrollTools"))}).bind("mouseleave touchend",function(x){h.removeClass("mCS-mouse-over");if(x.type==="mouseleave"){d.hideScrollbar.call(h.children(".mCSB_scrollTools"))}});k.data({bindEvent_autoHideScrollbar:true})}}},scrollTo:function(e,f){var i=c(this),o={moveDragger:false,trigger:"external",callbacks:true,scrollInertia:i.data("scrollInertia"),scrollEasing:i.data("scrollEasing")},f=c.extend(o,f),p,g=i.children(".mCustomScrollBox"),k=g.children(".mCSB_container"),r=g.children(".mCSB_scrollTools"),j=r.children(".mCSB_draggerContainer"),h=j.children(".mCSB_dragger"),t=draggerSpeed=f.scrollInertia,q,s,m,l;if(!k.hasClass("mCS_no_scrollbar")){i.data({mCS_trigger:f.trigger});if(i.data("mCS_Init")){f.callbacks=false}if(e||e===0){if(typeof(e)==="number"){if(f.moveDragger){p=e;if(i.data("horizontalScroll")){e=h.position().left*i.data("scrollAmount")}else{e=h.position().top*i.data("scrollAmount")}draggerSpeed=0}else{p=e/i.data("scrollAmount")}}else{if(typeof(e)==="string"){var v;if(e==="top"){v=0}else{if(e==="bottom"&&!i.data("horizontalScroll")){v=k.outerHeight()-g.height()}else{if(e==="left"){v=0}else{if(e==="right"&&i.data("horizontalScroll")){v=k.outerWidth()-g.width()}else{if(e==="first"){v=i.find(".mCSB_container").find(":first")}else{if(e==="last"){v=i.find(".mCSB_container").find(":last")}else{v=i.find(e)}}}}}}if(v.length===1){if(i.data("horizontalScroll")){e=v.position().left}else{e=v.position().top}p=e/i.data("scrollAmount")}else{p=e=v}}}if(i.data("horizontalScroll")){if(i.data("onTotalScrollBack_Offset")){s=-i.data("onTotalScrollBack_Offset")}if(i.data("onTotalScroll_Offset")){l=g.width()-k.outerWidth()+i.data("onTotalScroll_Offset")}if(p<0){p=e=0;clearInterval(i.data("mCSB_buttonScrollLeft"));if(!s){q=true}}else{if(p>=j.width()-h.width()){p=j.width()-h.width();e=g.width()-k.outerWidth();clearInterval(i.data("mCSB_buttonScrollRight"));if(!l){m=true}}else{e=-e}}var n=i.data("snapAmount");if(n){e=Math.round(e/n)*n-i.data("snapOffset")}d.mTweenAxis.call(this,h[0],"left",Math.round(p),draggerSpeed,f.scrollEasing);d.mTweenAxis.call(this,k[0],"left",Math.round(e),t,f.scrollEasing,{onStart:function(){if(f.callbacks&&!i.data("mCS_tweenRunning")){u("onScrollStart")}if(i.data("autoHideScrollbar")){d.showScrollbar.call(r)}},onUpdate:function(){if(f.callbacks){u("whileScrolling")}},onComplete:function(){if(f.callbacks){u("onScroll");if(q||(s&&k.position().left>=s)){u("onTotalScrollBack")}if(m||(l&&k.position().left<=l)){u("onTotalScroll")}}h.data("preventAction",false);i.data("mCS_tweenRunning",false);if(i.data("autoHideScrollbar")){if(!g.hasClass("mCS-mouse-over")){d.hideScrollbar.call(r)}}}})}else{if(i.data("onTotalScrollBack_Offset")){s=-i.data("onTotalScrollBack_Offset")}if(i.data("onTotalScroll_Offset")){l=g.height()-k.outerHeight()+i.data("onTotalScroll_Offset")}if(p<0){p=e=0;clearInterval(i.data("mCSB_buttonScrollUp"));if(!s){q=true}}else{if(p>=j.height()-h.height()){p=j.height()-h.height();e=g.height()-k.outerHeight();clearInterval(i.data("mCSB_buttonScrollDown"));if(!l){m=true}}else{e=-e}}var n=i.data("snapAmount");if(n){e=Math.round(e/n)*n-i.data("snapOffset")}d.mTweenAxis.call(this,h[0],"top",Math.round(p),draggerSpeed,f.scrollEasing);d.mTweenAxis.call(this,k[0],"top",Math.round(e),t,f.scrollEasing,{onStart:function(){if(f.callbacks&&!i.data("mCS_tweenRunning")){u("onScrollStart")}if(i.data("autoHideScrollbar")){d.showScrollbar.call(r)}},onUpdate:function(){if(f.callbacks){u("whileScrolling")}},onComplete:function(){if(f.callbacks){u("onScroll");if(q||(s&&k.position().top>=s)){u("onTotalScrollBack")}if(m||(l&&k.position().top<=l)){u("onTotalScroll")}}h.data("preventAction",false);i.data("mCS_tweenRunning",false);if(i.data("autoHideScrollbar")){if(!g.hasClass("mCS-mouse-over")){d.hideScrollbar.call(r)}}}})}if(i.data("mCS_Init")){i.data({mCS_Init:false})}}}function u(w){this.mcs={top:k.position().top,left:k.position().left,draggerTop:h.position().top,draggerLeft:h.position().left,topPct:Math.round((100*Math.abs(k.position().top))/Math.abs(k.outerHeight()-g.height())),leftPct:Math.round((100*Math.abs(k.position().left))/Math.abs(k.outerWidth()-g.width()))};switch(w){case"onScrollStart":i.data("mCS_tweenRunning",true).data("onScrollStart_Callback").call(i,this.mcs);break;case"whileScrolling":i.data("whileScrolling_Callback").call(i,this.mcs);break;case"onScroll":i.data("onScroll_Callback").call(i,this.mcs);break;case"onTotalScrollBack":i.data("onTotalScrollBack_Callback").call(i,this.mcs);break;case"onTotalScroll":i.data("onTotalScroll_Callback").call(i,this.mcs);break}}},stop:function(){var g=c(this),e=g.children().children(".mCSB_container"),f=g.children().children().children().children(".mCSB_dragger");d.mTweenAxisStop.call(this,e[0]);d.mTweenAxisStop.call(this,f[0])},disable:function(e){var j=c(this),f=j.children(".mCustomScrollBox"),h=f.children(".mCSB_container"),g=f.children(".mCSB_scrollTools"),i=g.children().children(".mCSB_dragger");f.unbind("mousewheel focusin mouseenter mouseleave touchend");h.unbind("touchstart touchmove");if(e){if(j.data("horizontalScroll")){i.add(h).css("left",0)}else{i.add(h).css("top",0)}}g.css("display","none");h.addClass("mCS_no_scrollbar");j.data({bindEvent_mousewheel:false,bindEvent_focusin:false,bindEvent_content_touch:false,bindEvent_autoHideScrollbar:false}).addClass("mCS_disabled")},destroy:function(){var e=c(this);e.removeClass("mCustomScrollbar _mCS_"+e.data("mCustomScrollbarIndex")).addClass("mCS_destroyed").children().children(".mCSB_container").unwrap().children().unwrap().siblings(".mCSB_scrollTools").remove();c(document).unbind("mousemove."+e.data("mCustomScrollbarIndex")+" mouseup."+e.data("mCustomScrollbarIndex")+" MSPointerMove."+e.data("mCustomScrollbarIndex")+" MSPointerUp."+e.data("mCustomScrollbarIndex"));c(window).unbind("resize."+e.data("mCustomScrollbarIndex"))}},d={showScrollbar:function(){this.stop().animate({opacity:1},"fast")},hideScrollbar:function(){this.stop().animate({opacity:0},"fast")},mTweenAxis:function(g,i,h,f,o,y){var y=y||{},v=y.onStart||function(){},p=y.onUpdate||function(){},w=y.onComplete||function(){};var n=t(),l,j=0,r=g.offsetTop,s=g.style;if(i==="left"){r=g.offsetLeft}var m=h-r;q();e();function t(){if(window.performance&&window.performance.now){return window.performance.now()}else{if(window.performance&&window.performance.webkitNow){return window.performance.webkitNow()}else{if(Date.now){return Date.now()}else{return new Date().getTime()}}}}function x(){if(!j){v.call()}j=t()-n;u();if(j>=g._time){g._time=(j>g._time)?j+l-(j-g._time):j+l-1;if(g._time<j+1){g._time=j+1}}if(g._time<f){g._id=_request(x)}else{w.call()}}function u(){if(f>0){g.currVal=k(g._time,r,m,f,o);s[i]=Math.round(g.currVal)+"px"}else{s[i]=h+"px"}p.call()}function e(){l=1000/60;g._time=j+l;_request=(!window.requestAnimationFrame)?function(z){u();return setTimeout(z,0.01)}:window.requestAnimationFrame;g._id=_request(x)}function q(){if(g._id==null){return}if(!window.requestAnimationFrame){clearTimeout(g._id)}else{window.cancelAnimationFrame(g._id)}g._id=null}function k(B,A,F,E,C){switch(C){case"linear":return F*B/E+A;break;case"easeOutQuad":B/=E;return -F*B*(B-2)+A;break;case"easeInOutQuad":B/=E/2;if(B<1){return F/2*B*B+A}B--;return -F/2*(B*(B-2)-1)+A;break;case"easeOutCubic":B/=E;B--;return F*(B*B*B+1)+A;break;case"easeOutQuart":B/=E;B--;return -F*(B*B*B*B-1)+A;break;case"easeOutQuint":B/=E;B--;return F*(B*B*B*B*B+1)+A;break;case"easeOutCirc":B/=E;B--;return F*Math.sqrt(1-B*B)+A;break;case"easeOutSine":return F*Math.sin(B/E*(Math.PI/2))+A;break;case"easeOutExpo":return F*(-Math.pow(2,-10*B/E)+1)+A;break;case"mcsEaseOut":var D=(B/=E)*B,z=D*B;return A+F*(0.499999999999997*z*D+-2.5*D*D+5.5*z+-6.5*D+4*B);break;case"draggerRailEase":B/=E/2;if(B<1){return F/2*B*B*B+A}B-=2;return F/2*(B*B*B+2)+A;break}}},mTweenAxisStop:function(e){if(e._id==null){return}if(!window.requestAnimationFrame){clearTimeout(e._id)}else{window.cancelAnimationFrame(e._id)}e._id=null},rafPolyfill:function(){var f=["ms","moz","webkit","o"],e=f.length;while(--e>-1&&!window.requestAnimationFrame){window.requestAnimationFrame=window[f[e]+"RequestAnimationFrame"];window.cancelAnimationFrame=window[f[e]+"CancelAnimationFrame"]||window[f[e]+"CancelRequestAnimationFrame"]}}};d.rafPolyfill.call();c.support.touch=!!("ontouchstart" in window);c.support.msPointer=window.navigator.msPointerEnabled;var a=("https:"==document.location.protocol)?"https:":"http:";c.event.special.mousewheel||document.write('<script src="'+a+'//cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.0.6/jquery.mousewheel.min.js"><\/script>');c.fn.mCustomScrollbar=function(e){if(b[e]){return b[e].apply(this,Array.prototype.slice.call(arguments,1))}else{if(typeof e==="object"||!e){return b.init.apply(this,arguments)}else{c.error("Method "+e+" does not exist")}}}})(jQuery);// file: jquery.cookie.js
/*!
 * jQuery Cookie Plugin v1.3
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2011, Klaus Hartl
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.opensource.org/licenses/GPL-2.0
 */
(function ($, document, undefined) {

	var pluses = /\+/g;

	function raw(s) {
		return s;
	}

	function decoded(s) {
		return decodeURIComponent(s.replace(pluses, ' '));
	}

	var config = $.cookie = function (key, value, options) {

		// write
		if (value !== undefined) {
			options = $.extend({}, config.defaults, options);

			if (value === null) {
				options.expires = -1;
			}

			if (typeof options.expires === 'number') {
				var days = options.expires, t = options.expires = new Date();
				t.setDate(t.getDate() + days);
			}

			value = config.json ? JSON.stringify(value) : String(value);

			return (document.cookie = [
				encodeURIComponent(key), '=', config.raw ? value : encodeURIComponent(value),
				options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
				options.path    ? '; path=' + options.path : '',
				options.domain  ? '; domain=' + options.domain : '',
				options.secure  ? '; secure' : ''
			].join(''));
		}

		// read
		var decode = config.raw ? raw : decoded;
		var cookies = document.cookie.split('; ');
		for (var i = 0, l = cookies.length; i < l; i++) {
			var parts = cookies[i].split('=');
			if (decode(parts.shift()) === key) {
				var cookie = decode(parts.join('='));
				return config.json ? JSON.parse(cookie) : cookie;
			}
		}

		return null;
	};

	config.defaults = {};

	$.removeCookie = function (key, options) {
		if ($.cookie(key) !== null) {
			$.cookie(key, null, options);
			return true;
		}
		return false;
	};

})(jQuery, document);
// file: jquery.imagemapster.min.js
/* ImageMapster
   Version: 1.2.10 (2/25/2013)

Copyright 2011-2012 James Treworgy

http://www.outsharked.com/imagemapster
https://github.com/jamietre/ImageMapster

A jQuery plugin to enhance image maps.

*/
(function(e){e(function(){function i(){}function s(t){var n=new i;return n.then=function(e){var n;try{return e&&(n=e(t)),c(n===r?t:n)}catch(i){return o(i)}},e(n)}function o(t){var n=new i;return n.then=function(e,n){var i;try{return n?(i=n(t),c(i===r?t:i)):o(t)}catch(s){return o(s)}},e(n)}function u(e){return l(e,function(e){return o(e)})}function a(){function p(e,t,n){return l(e,t,n)}function d(e){h(s(e))}function v(e){h(o(e))}function m(e){c(e)}var t,n,u,f,l,c,h;return u=[],f=[],l=function(t,n,r){var i=a();return u.push(function(e){e.then(t,n).then(i.resolve,i.reject,i.progress)}),r&&f.push(r),i.promise},c=function(e){var t,n=0;while(t=f[n++])t(e)},h=function(e){var t,n=0;l=e.then,h=c=function(){throw new Error("already completed")},f=r;while(t=u[n++])t(e);u=[]},t={},n=new i,n.then=t.then=p,t.promise=e(n),t.resolver=e({resolve:t.resolve=d,reject:t.reject=v,progress:t.progress=m}),t}function f(e){return e&&typeof e.then=="function"}function l(e,t,n,r){var i=c(e);return i.then(t,n,r)}function c(e){var t,n;return e instanceof i?t=e:(n=a(),f(e)?(e.then(n.resolve,n.reject,n.progress),t=n.promise):(n.resolve(e),t=n.promise)),t}function h(e,t,n,r,i){return E(2,arguments),l(e,function(e){function m(e){c(e)}function g(e){h(e)}function y(e){p(e)}function b(){c=h=p=S}var s,o,u,f,c,h,p,d,v;d=e.length>>>0,s=Math.max(0,Math.min(t,d)),o=[],f=a(),u=l(f,n,r,i);if(!s)f.resolve(o);else{c=function(e){o.push(e),--s||(b(),f.resolve(o))},h=function(e){b(),f.reject(e)},p=f.progress;for(v=0;v<d;++v)v in e&&l(e[v],m,g,y)}return u})}function p(e,t,n,r){return E(1,arguments),l(e,function(e){return b(e,d,[])}).then(t,n,r)}function d(e,t,n){return e[n]=t,e}function v(e,t,n,r){function i(e){return t?t(e[0]):e[0]}return h(e,1,i,n,r)}function m(e,t){return l(e,function(e){return g(e,t)})}function g(e,t){var n,r,i;r=e.length>>>0,n=new Array(r);for(i=0;i<r;i++)i in e&&(n[i]=l(e[i],t));return b(n,d,n)}function y(e,t,i){var s=n.call(arguments,1);return l(e,function(e){return b.apply(r,[e].concat(s))})}function b(e,n,r){var i,s;return i=e.length,s=[function(e,t,r){return l(e,function(e){return l(t,function(t){return n(e,t,r,i)})})}],arguments.length>2&&s.push(r),t.apply(e,s)}function w(e,t,n){var r=arguments.length>2;return l(e,function(e){return r&&(e=n),t.resolve(e),e},function(e){return t.reject(e),o(e)},t.progress)}function E(e,t){var n,r=t.length;while(r>e){n=t[--r];if(n!=null&&typeof n!="function")throw new Error("callback is not a function")}}function S(){}var e,t,n,r;return l.defer=a,l.reject=u,l.isPromise=f,l.all=p,l.some=h,l.any=v,l.map=m,l.reduce=y,l.chain=w,e=Object.freeze||function(e){return e},i.prototype=e({always:function(e,t){return this.then(e,e,t)},otherwise:function(e){return this.then(r,e)}}),n=[].slice,t=[].reduce||function(e){var t,n,r,i,s;s=0,t=Object(this),i=t.length>>>0,n=arguments;if(n.length<=1)for(;;){if(s in t){r=t[s++];break}if(++s>=i)throw new TypeError}else r=n[1];for(;s<i;++s)s in t&&(r=e(r,t[s],s,t));return r},l})})(typeof define=="function"?define:function(e){typeof module!="undefined"?module.exports=e():jQuery.mapster_when=e()}),function($){$.fn.mapster=function(e){var t=$.mapster.impl;if($.isFunction(t[e]))return t[e].apply(this,Array.prototype.slice.call(arguments,1));if(typeof e=="object"||!e)return t.bind.apply(this,arguments);$.error("Method "+e+" does not exist on jQuery.mapster")},$.mapster={version:"1.2.10",render_defaults:{isSelectable:!0,isDeselectable:!0,fade:!1,fadeDuration:150,fill:!0,fillColor:"000000",fillColorMask:"FFFFFF",fillOpacity:.7,highlight:!0,stroke:!1,strokeColor:"ff0000",strokeOpacity:1,strokeWidth:1,includeKeys:"",altImage:null,altImageId:null,altImages:{}},defaults:{clickNavigate:!1,wrapClass:null,wrapCss:null,onGetList:null,sortList:!1,listenToList:!1,mapKey:"",mapValue:"",singleSelect:!1,listKey:"value",listSelectedAttribute:"selected",listSelectedClass:null,onClick:null,onMouseover:null,onMouseout:null,mouseoutDelay:0,onStateChange:null,boundList:null,onConfigured:null,configTimeout:3e4,noHrefIsMask:!0,scaleMap:!0,safeLoad:!1,areas:[]},shared_defaults:{render_highlight:{fade:!0},render_select:{fade:!1},staticState:null,selected:null},area_defaults:{includeKeys:"",isMask:!1},canvas_style:{position:"absolute",left:0,top:0,padding:0,border:0},hasCanvas:null,isTouch:null,map_cache:[],hooks:{},addHook:function(e,t){this.hooks[e]=(this.hooks[e]||[]).push(t)},callHooks:function(e,t){$.each(this.hooks[e]||[],function(e,n){n.apply(t)})},utils:{when:$.mapster_when,defer:$.mapster_when.defer,subclass:function(e,t){var n=function(){var n=this,r=Array.prototype.slice.call(arguments,0);n.base=e.prototype,n.base.init=function(){e.prototype.constructor.apply(n,r)},t.apply(n,r)};return n.prototype=new e,n.prototype.constructor=n,n},asArray:function(e){return e.constructor===Array?e:this.split(e)},split:function(e,t){var n,r,i=e.split(",");for(n=0;n<i.length;n++)r=$.trim(i[n]),r===""?i.splice(n,1):i[n]=t?t(r):r;return i},updateProps:function(e,t){var n,r=e||{},i=$.isEmptyObject(r)?t:e;return n=[],$.each(i,function(e){n.push(e)}),$.each(Array.prototype.slice.call(arguments,1),function(e,t){$.each(t||{},function(e){if(!n||$.inArray(e,n)>=0){var i=t[e];$.isPlainObject(i)?r[e]=$.extend(r[e]||{},i):i&&i.constructor===Array?r[e]=i.slice(0):typeof i!="undefined"&&(r[e]=t[e])}})}),r},isElement:function(e){return typeof HTMLElement=="object"?e instanceof HTMLElement:e&&typeof e=="object"&&e.nodeType===1&&typeof e.nodeName=="string"},indexOfProp:function(e,t,n){var r=e.constructor===Array?-1:null;return $.each(e,function(e,i){if(i&&(t?i[t]:i)===n)return r=e,!1}),r},boolOrDefault:function(e,t){return this.isBool(e)?e:t||!1},isBool:function(e){return typeof e=="boolean"},isUndef:function(e){return typeof e=="undefined"},ifFunction:function(e,t,n){$.isFunction(e)&&e.call(t,n)},size:function(e,t){var n=$.mapster.utils;return{width:t?e.width||e.naturalWidth:n.imgWidth(e,!0),height:t?e.height||e.naturalHeight:n.imgHeight(e,!0),complete:function(){return!!this.height&&!!this.width}}},setOpacity:function(e,t){$.mapster.hasCanvas()?e.style.opacity=t:$(e).each(function(e,n){typeof n.opacity!="undefined"?n.opacity=t:$(n).css("opacity",t)})},fader:function(){var e={},t=0,n=function(r,i,s,o){var u,a=o/15,f,l=$.mapster.utils;if(typeof r=="number"){f=e[r];if(!f)return}else u=l.indexOfProp(e,null,r),u&&delete e[u],e[++t]=f=r,r=t;s=s||1,i=i+s/a>s-.01?s:i+s/a,l.setOpacity(f,i),i<s&&setTimeout(function(){n(r,i,s,o)},15)};return n}()},getBoundList:function(e,t){if(!e.boundList)return null;var n,r,i=$(),s=$.mapster.utils.split(t);return e.boundList.each(function(t,o){for(n=0;n<s.length;n++)r=s[n],$(o).is("["+e.listKey+'="'+r+'"]')&&(i=i.add(o))}),i},setBoundListProperties:function(e,t,n){t.each(function(t,r){e.listSelectedClass&&(n?$(r).addClass(e.listSelectedClass):$(r).removeClass(e.listSelectedClass)),e.listSelectedAttribute&&$(r).attr(e.listSelectedAttribute,n)})},getMapDataIndex:function(e){var t,n;switch(e.tagName&&e.tagName.toLowerCase()){case"area":n=$(e).parent().attr("name"),t=$("img[usemap='#"+n+"']")[0];break;case"img":t=e}return t?this.utils.indexOfProp(this.map_cache,"image",t):-1},getMapData:function(e){var t=this.getMapDataIndex(e.length?e[0]:e);if(t>=0)return t>=0?this.map_cache[t]:null},queueCommand:function(e,t,n,r){return e?!e.complete||e.currentAction?(e.commands.push({that:t,command:n,args:r}),!0):!1:!1},unload:function(){this.impl.unload(),this.utils=null,this.impl=null,$.fn.mapster=null,$.mapster=null,$("*").unbind()}};var m=$.mapster,u=m.utils,ap=Array.prototype;$.each(["width","height"],function(e,t){var n=t.substr(0,1).toUpperCase()+t.substr(1);u["img"+n]=function(e,r){return(r?$(e)[t]():0)||e[t]||e["natural"+n]||e["client"+n]||e["offset"+n]}}),m.Method=function(e,t,n,r){var i=this;i.name=r.name,i.output=e,i.input=e,i.first=r.first||!1,i.args=r.args?ap.slice.call(r.args,0):[],i.key=r.key,i.func_map=t,i.func_area=n,i.name=r.name,i.allowAsync=r.allowAsync||!1},m.Method.prototype={constructor:m.Method,go:function(){var e,t,n,r,i,s=this.input,o=[],u=this;r=s.length;for(e=0;e<r;e++){t=$.mapster.getMapData(s[e]);if(t){if(!u.allowAsync&&m.queueCommand(t,u.input,u.name,u.args)){this.first&&(i="");continue}n=t.getData(s[e].nodeName==="AREA"?s[e]:this.key),n?$.inArray(n,o)<0&&o.push(n):i=this.func_map.apply(t,u.args);if(this.first||typeof i!="undefined")break}}return $(o).each(function(e,t){i=u.func_area.apply(t,u.args)}),typeof i!="undefined"?i:this.output}},$.mapster.impl=function(){function hasVml(){var e=$("<div />").appendTo("body");e.html('<v:shape id="vml_flag1" adj="1" />');var t=e[0].firstChild;t.style.behavior="url(#default#VML)";var n=t?typeof t.adj=="object":!0;return e.remove(),n}function namespaces(){return typeof document.namespaces=="object"?document.namespaces:null}function hasCanvas(){var e=namespaces();return e&&e.g_vml_?!1:$("<canvas />")[0].getContext?!0:!1}function merge_areas(e,t){var n,r,i=e.options.areas;t&&$.each(t,function(t,s){if(!s||!s.key)return;r=u.indexOfProp(i,"key",s.key),r>=0?$.extend(i[r],s):i.push(s),n=e.getDataForKey(s.key),n&&$.extend(n.options,s)})}function merge_options(e,t){var n=u.updateProps({},t);delete n.areas,u.updateProps(e.options,n),merge_areas(e,t.areas),u.updateProps(e.area_options,e.options)}var me={},addMap=function(e){return m.map_cache.push(e)-1},removeMap=function(e){m.map_cache.splice(e.index,1);for(var t=m.map_cache.length-1;t>=this.index;t--)m.map_cache[t].index--};return me.get=function(e){var t=m.getMapData(this);if(!t||!t.complete)throw"Can't access data until binding complete.";return(new m.Method(this,function(){return this.getSelected()},function(){return this.isSelected()},{name:"get",args:arguments,key:e,first:!0,allowAsync:!0,defaultReturn:""})).go()},me.data=function(e){return(new m.Method(this,null,function(){return this},{name:"data",args:arguments,key:e})).go()},me.highlight=function(e){return(new m.Method(this,function(){if(e!==!1){var t=this.highlightId;return t>=0?this.data[t].key:null}this.ensureNoHighlight()},function(){this.highlight()},{name:"highlight",args:arguments,key:e,first:!0})).go()},me.keys=function(e,t){function i(e){var r,i=[];t?(r=e.areas(),$.each(r,function(e,t){i=i.concat(t.keys)})):i.push(e.key),$.each(i,function(e,t){$.inArray(t,n)<0&&n.push(t)})}var n=[],r=m.getMapData(this);if(!r||!r.complete)throw"Can't access data until binding complete.";return!r||!r.complete?"":(typeof e=="string"?t?i(r.getDataForKey(e)):n=[r.getKeysForGroup(e)]:(t=e,this.each(function(e,t){t.nodeName==="AREA"&&i(r.getDataForArea(t))})),n.join(","))},me.select=function(){me.set.call(this,!0)},me.deselect=function(){me.set.call(this,!1)},me.set=function(e,t,n){function f(t){if(t)switch(e){case!0:t.select(s);break;case!1:t.deselect(!0);break;default:t.toggle(s)}}function l(e){e&&$.inArray(e,a)<0&&(a.push(e),o+=(o===""?"":",")+e.key)}function c(t){$.each(a,function(e,t){f(t)}),e||t.removeSelectionFinish(),t.options.boundList&&m.setBoundListProperties(t.options,m.getBoundList(t.options,o),e)}var r,i,s=n,o,a;return this.filter("img,area").each(function(n,f){var h;i=m.getMapData(f),i!==r&&(r&&c(r),a=[],o=""),i&&(h="",f.nodeName.toUpperCase()==="IMG"?m.queueCommand(i,$(f),"set",[e,t,s])||(t instanceof Array?t.length&&(h=t.join(",")):h=t,h&&$.each(u.split(h),function(e,t){l(i.getDataForKey(t.toString())),r=i})):(s=t,m.queueCommand(i,$(f),"set",[e,s])||(l(i.getDataForArea(f)),r=i)))}),i&&c(i),this},me.unbind=function(e){return(new m.Method(this,function(){this.clearEvents(),this.clearMapData(e),removeMap(this)},null,{name:"unbind",args:arguments})).go()},me.rebind=function(e){return(new m.Method(this,function(){var t=this;t.complete=!1,t.configureOptions(e),t.bindImages().then(function(){t.buildDataset(!0),t.complete=!0})},null,{name:"rebind",args:arguments})).go()},me.get_options=function(e,t){var n=u.isBool(e)?e:t;return(new m.Method(this,function(){var e=$.extend({},this.options);return n&&(e.render_select=u.updateProps({},m.render_defaults,e,e.render_select),e.render_highlight=u.updateProps({},m.render_defaults,e,e.render_highlight)),e},function(){return n?this.effectiveOptions():this.options},{name:"get_options",args:arguments,first:!0,allowAsync:!0,key:e})).go()},me.set_options=function(e){return(new m.Method(this,function(){merge_options(this,e)},null,{name:"set_options",args:arguments})).go()},me.unload=function(){var e;for(e=m.map_cache.length-1;e>=0;e--)m.map_cache[e]&&me.unbind.call($(m.map_cache[e].image));me.graphics=null},me.snapshot=function(){return(new m.Method(this,function(){$.each(this.data,function(e,t){t.selected=!1}),this.base_canvas=this.graphics.createVisibleCanvas(this),$(this.image).before(this.base_canvas)},null,{name:"snapshot"})).go()},me.state=function(){var e,t=null;return $(this).each(function(n,r){if(r.nodeName==="IMG")return e=m.getMapData(r),e&&(t=e.state()),!1}),t},me.bind=function(e){return this.each(function(t,n){var r,i,s,o;r=$(n),o=m.getMapData(n);if(o){me.unbind.apply(r);if(!o.complete)return r.bind(),!0;o=null}s=this.getAttribute("usemap"),i=s&&$('map[name="'+s.substr(1)+'"]');if(!(r.is("img")&&s&&i.size()>0))return!0;r.css("border",0),o||(o=new m.MapData(this,e),o.index=addMap(o),o.map=i,o.bindImages().then(function(){o.initialize()}))})},me.init=function(e){var t,n;m.hasCanvas=function(){return u.isBool(m.hasCanvas.value)||(m.hasCanvas.value=u.isBool(e)?e:hasCanvas()),m.hasCanvas.value},m.hasVml=function(){if(!u.isBool(m.hasVml.value)){var e=namespaces();e&&!e.v&&(e.add("v","urn:schemas-microsoft-com:vml"),t=document.createStyleSheet(),n=["shape","rect","oval","circ","fill","stroke","imagedata","group","textbox"],$.each(n,function(e,n){t.addRule("v\\:"+n,"behavior: url(#default#VML); antialias:true")})),m.hasVml.value=hasVml()}return m.hasVml.value},m.isTouch=!!document.documentElement.ontouchstart,$.extend(m.defaults,m.render_defaults,m.shared_defaults),$.extend(m.area_defaults,m.render_defaults,m.shared_defaults)},me.test=function(obj){return eval(obj)},me}(),$.mapster.impl.init()}(jQuery),function(e){function o(t,n,r){var i=t,s=i.map_data,o=r.isMask;e.each(n.areas(),function(e,t){r.isMask=o||t.nohref&&s.options.noHrefIsMask,i.addShape(t,r)}),r.isMask=o}function u(e){return Math.max(0,Math.min(parseInt(e,16),255))}function a(e,t){return"rgba("+u(e.substr(0,2))+","+u(e.substr(2,2))+","+u(e.substr(4,2))+","+t+")"}function f(){}var t,n=e.mapster,r=n.utils,i,s;n.Graphics=function(e){var t=this;t.active=!1,t.canvas=null,t.width=0,t.height=0,t.shapes=[],t.masks=[],t.map_data=e},t=n.Graphics.prototype={constructor:n.Graphics,begin:function(t,n){var r=e(t);this.elementName=n,this.canvas=t,this.width=r.width(),this.height=r.height(),this.shapes=[],this.masks=[],this.active=!0},addShape:function(e,t){var n=t.isMask?this.masks:this.shapes;n.push({mapArea:e,options:t})},createVisibleCanvas:function(t){return e(this.createCanvasFor(t)).addClass("mapster_el").css(n.canvas_style)[0]},addShapeGroup:function(t,i,s){var u=this,a,f,l,c=this.map_data,h=t.effectiveRenderOptions(i);s&&e.extend(h,s),i==="select"?(f="static_"+t.areaId.toString(),l=c.base_canvas):l=c.overlay_canvas,u.begin(l,f),h.includeKeys&&(a=r.split(h.includeKeys),e.each(a,function(e,t){var n=c.getDataForKey(t.toString());o(u,n,n.effectiveRenderOptions(i))})),o(u,t,h),u.render(),h.fade&&r.fader(n.hasCanvas()?l:e(l).find("._fill").not(".mapster_mask"),0,n.hasCanvas()?1:h.fillOpacity,h.fadeDuration)}},i={renderShape:function(e,t,n){var r,i=t.coords(null,n);switch(t.shape){case"rect":e.rect(i[0],i[1],i[2]-i[0],i[3]-i[1]);break;case"poly":e.moveTo(i[0],i[1]);for(r=2;r<t.length;r+=2)e.lineTo(i[r],i[r+1]);e.lineTo(i[0],i[1]);break;case"circ":case"circle":e.arc(i[0],i[1],i[2],0,Math.PI*2,!1)}},addAltImage:function(e,t,n,r){e.beginPath(),this.renderShape(e,n),e.closePath(),e.clip(),e.globalAlpha=r.altImageOpacity||r.fillOpacity,e.drawImage(t,0,0,n.owner.scaleInfo.width,n.owner.scaleInfo.height)},render:function(){var t,n,r=this,i=r.map_data,s=r.masks.length,o=r.createCanvasFor(i),u=o.getContext("2d"),f=r.canvas.getContext("2d");return s&&(t=r.createCanvasFor(i),n=t.getContext("2d"),n.clearRect(0,0,t.width,t.height),e.each(r.masks,function(e,t){n.save(),n.beginPath(),r.renderShape(n,t.mapArea),n.closePath(),n.clip(),n.lineWidth=0,n.fillStyle="#000",n.fill(),n.restore()})),e.each(r.shapes,function(e,t){u.save(),t.options.fill&&(t.options.altImageId?r.addAltImage(u,i.images[t.options.altImageId],t.mapArea,t.options):(u.beginPath(),r.renderShape(u,t.mapArea),u.closePath(),u.fillStyle=a(t.options.fillColor,t.options.fillOpacity),u.fill())),u.restore()}),e.each(r.shapes.concat(r.masks),function(e,t){var n=t.options.strokeWidth===1?.5:0;t.options.stroke&&(u.save(),u.strokeStyle=a(t.options.strokeColor,t.options.strokeOpacity),u.lineWidth=t.options.strokeWidth,u.beginPath(),r.renderShape(u,t.mapArea,n),u.closePath(),u.stroke(),u.restore())}),s?(n.globalCompositeOperation="source-out",n.drawImage(o,0,0),f.drawImage(t,0,0)):f.drawImage(o,0,0),r.active=!1,r.canvas},createCanvasFor:function(t){return e('<canvas width="'+t.scaleInfo.width+'" height="'+t.scaleInfo.height+'"></canvas>')[0]},clearHighlight:function(){var e=this.map_data.overlay_canvas;e.getContext("2d").clearRect(0,0,e.width,e.height)},refreshSelections:function(){var t,n=this.map_data;t=n.base_canvas,n.base_canvas=this.createVisibleCanvas(n),e(n.base_canvas).hide(),e(t).before(n.base_canvas),n.redrawSelections(),e(n.base_canvas).show(),e(t).remove()}},s={renderShape:function(t,n,r){var i=this,s,o,u,a,f,l,c,h=t.coords();f=i.elementName?'name="'+i.elementName+'" ':"",l=r?'class="'+r+'" ':"",a='<v:fill color="#'+n.fillColor+'" class="_fill" opacity="'+(n.fill?n.fillOpacity:0)+'" /><v:stroke class="_fill" opacity="'+n.strokeOpacity+'"/>',o=n.stroke?" strokeweight="+n.strokeWidth+' stroked="t" strokecolor="#'+n.strokeColor+'"':' stroked="f"',s=n.fill?' filled="t"':' filled="f"';switch(t.shape){case"rect":c="<v:rect "+l+f+s+o+' style="zoom:1;margin:0;padding:0;display:block;position:absolute;left:'+h[0]+"px;top:"+h[1]+"px;width:"+(h[2]-h[0])+"px;height:"+(h[3]-h[1])+'px;">'+a+"</v:rect>";break;case"poly":c="<v:shape "+l+f+s+o+' coordorigin="0,0" coordsize="'+i.width+","+i.height+'" path="m '+h[0]+","+h[1]+" l "+h.slice(2).join(",")+' x e" style="zoom:1;margin:0;padding:0;display:block;position:absolute;top:0px;left:0px;width:'+i.width+"px;height:"+i.height+'px;">'+a+"</v:shape>";break;case"circ":case"circle":c="<v:oval "+l+f+s+o+' style="zoom:1;margin:0;padding:0;display:block;position:absolute;left:'+(h[0]-h[2])+"px;top:"+(h[1]-h[2])+"px;width:"+h[2]*2+"px;height:"+h[2]*2+'px;">'+a+"</v:oval>"}return u=e(c),e(i.canvas).append(u),u},render:function(){var t,n=this;return e.each(this.shapes,function(e,t){n.renderShape(t.mapArea,t.options)}),this.masks.length&&e.each(this.masks,function(e,i){t=r.updateProps({},i.options,{fillOpacity:1,fillColor:i.options.fillColorMask}),n.renderShape(i.mapArea,t,"mapster_mask")}),this.active=!1,this.canvas},createCanvasFor:function(t){var n=t.scaleInfo.width,r=t.scaleInfo.height;return e('<var width="'+n+'" height="'+r+'" style="zoom:1;overflow:hidden;display:block;width:'+n+"px;height:"+r+'px;"></var>')[0]},clearHighlight:function(){e(this.map_data.overlay_canvas).children().remove()},removeSelections:function(t){t>=0?e(this.map_data.base_canvas).find('[name="static_'+t.toString()+'"]').remove():e(this.map_data.base_canvas).children().remove()}},e.each(["renderShape","addAltImage","render","createCanvasFor","clearHighlight","removeSelections","refreshSelections"],function(e,r){t[r]=function(e){return function(){return t[e]=(n.hasCanvas()?i[e]:s[e])||f,t[e].apply(this,arguments)}}(r)})}(jQuery),function(e){var t=e.mapster,n=t.utils,r=[];t.MapImages=function(e){this.owner=e,this.clear()},t.MapImages.prototype={constructor:t.MapImages,slice:function(){return r.slice.apply(this,arguments)},splice:function(){r.slice.apply(this.status,arguments);var e=r.slice.apply(this,arguments);return e},complete:function(){return e.inArray(!1,this.status)<0},_add:function(e){var t=r.push.call(this,e)-1;return this.status[t]=!1,t},indexOf:function(t){return e.inArray(t,this)},clear:function(){var t=this;t.ids&&t.ids.length>0&&e.each(t.ids,function(e,n){delete t[n]}),t.ids=[],t.length=0,t.status=[],t.splice(0)},add:function(t,n){var r,i,s=this;if(!t)return;if(typeof t=="string"){i=t,t=s[i];if(typeof t=="object")return s.indexOf(t);t=e("<img />").addClass("mapster_el").hide(),r=s._add(t[0]),t.bind("load",function(e){s.imageLoaded.call(s,e)}).bind("error",function(e){s.imageLoadError.call(s,e)}),t.attr("src",i)}else r=s._add(e(t)[0]);if(n){if(this[n])throw n+" is already used or is not available as an altImage alias.";s.ids.push(n),s[n]=s[r]}return r},bind:function(e){var t=this,r,i=t.owner.options.configTimeout/200,s=function(){var e;e=t.length;while(e-->0)if(!t.isLoaded(e))break;t.complete()?t.resolve():i-->0?t.imgTimeout=window.setTimeout(function(){s.call(t,!0)},50):t.imageLoadError.call(t)};return r=t.deferred=n.defer(),s(),r},resolve:function(){var e=this,t=e.deferred;t&&(e.deferred=null,t.resolve())},imageLoaded:function(t){var n=this,r=n.indexOf(t.target);r>=0&&(n.status[r]=!0,e.inArray(!1,n.status)<0&&n.resolve())},imageLoadError:function(e){clearTimeout(this.imgTimeout),this.triesLeft=0;var t=e?"The image "+e.target.src+" failed to load.":"The images never seemed to finish loading. You may just need to increase the configTimeout if images could take a long time to load.";throw t},isLoaded:function(e){var t,r=this,i=r.status;return i[e]?!0:(t=r[e],typeof t.complete!="undefined"?i[e]=t.complete:i[e]=!!n.imgWidth(t),i[e])}}}(jQuery),function(e){function r(t){e.extend(t,{complete:!1,map:null,base_canvas:null,overlay_canvas:null,commands:[],data:[],mapAreas:[],_xref:{},highlightId:-1,currentAreaId:-1,_tooltip_events:[],scaleInfo:null,index:-1,activeAreaEvent:null})}function i(e){return[e,e.render_highlight,e.render_select]}function s(r){var s=r.options,o=r.images;t.hasCanvas()&&(e.each(s.altImages||{},function(e,t){o.add(t,e)}),e.each([s].concat(s.areas),function(t,n){e.each(i(n),function(e,t){t&&t.altImage&&(t.altImageId=o.add(t.altImage))})})),r.area_options=n.updateProps({},t.area_defaults,s)}function o(e,t,r,i){function s(t){e.currentAreaId!==t&&e.highlightId>=0&&i.resolve()}i=i||n.when.defer(),e.activeAreaEvent&&(window.clearTimeout(e.activeAreaEvent),e.activeAreaEvent=0);if(t<0)return;return r.owner.currentAction||t?e.activeAreaEvent=window.setTimeout(function(){return function(){o(e,0,r,i)}}(r),t||100):s(r.areaId),i}function u(e){t.hasCanvas()||this.blur(),e.preventDefault()}function a(t,n){var r=t.getAllDataForArea(this),i=r.length?r[0]:null;if(!i||i.isNotRendered()||i.owner.currentAction)return;if(t.currentAreaId===i.areaId)return;t.highlightId!==i.areaId&&(t.clearEffects(),i.highlight(),t.options.showToolTip&&e.each(r,function(e,t){t.effectiveOptions().toolTip&&t.showToolTip()})),t.currentAreaId=i.areaId,e.isFunction(t.options.onMouseover)&&t.options.onMouseover.call(this,{e:n,options:i.effectiveOptions(),key:i.key,selected:i.isSelected()})}function f(t,n){var r,i=t.getDataForArea(this),s=t.options;if(t.currentAreaId<0||!i)return;r=t.getDataForArea(n.relatedTarget);if(r===i)return;t.currentAreaId=-1,i.area=null,o(t,s.mouseoutDelay,i).then(t.clearEffects),e.isFunction(s.onMouseout)&&s.onMouseout.call(this,{e:n,options:s,key:i.key,selected:i.isSelected()})}function l(t){var n=t.options;t.ensureNoHighlight(),n.toolTipClose&&e.inArray("area-mouseout",n.toolTipClose)>=0&&t.activeToolTip&&t.clearToolTip()}function c(r,i){function v(u){var p,g;l=u.isSelectable()&&(u.isDeselectable()||!u.isSelected()),l?f=!u.isSelected():f=u.isSelected(),a=t.getBoundList(d,u.key);if(e.isFunction(d.onClick)){c=d.onClick.call(h,{e:i,listTarget:a,key:u.key,selected:f});if(n.isBool(c)){if(!c)return!1;g=e(u.area).attr("href");if(g!=="#")return window.location.href=g,!1}}l&&(s=u.toggle()),d.boundList&&d.boundList.length>0&&t.setBoundListProperties(d,a,u.isSelected()),p=u.effectiveOptions(),p.includeKeys&&(o=n.split(p.includeKeys),e.each(o,function(e,t){var n=r.getDataForKey(t.toString());n.options.isMask||v(n)}))}var s,o,a,f,l,c,h=this,p=r.getDataForArea(this),d=r.options;u.call(this,i);if(d.clickNavigate&&p.href){window.location.href=p.href;return}p&&!p.owner.currentAction&&(d=r.options,v(p))}var t=e.mapster,n=t.utils;t.MapData=function(e,n){var i=this;i.image=e,i.images=new t.MapImages(i),i.graphics=new t.Graphics(i),i.imgCssText=e.style.cssText||null,r(i),i.configureOptions(n),i.mouseover=function(e){a.call(this,i,e)},i.mouseout=function(e){f.call(this,i,e)},i.click=function(e){c.call(this,i,e)},i.clearEffects=function(e){l.call(this,i,e)}},t.MapData.prototype={constructor:t.MapData,configureOptions:function(e){this.options=n.updateProps({},t.defaults,e)},bindImages:function(){var e=this,t=e.images;return t.length>2?t.splice(2):t.length===0&&(t.add(e.image),t.add(e.image.src)),s(e),e.images.bind()},isActive:function(){return!this.complete||this.currentAction},state:function(){return{complete:this.complete,resizing:this.currentAction==="resizing",zoomed:this.zoomed,zoomedArea:this.zoomedArea,scaleInfo:this.scaleInfo}},wrapId:function(){return"mapster_wrap_"+this.index},_idFromKey:function(e){return typeof e=="string"&&this._xref.hasOwnProperty(e)?this._xref[e]:-1},getSelected:function(){var t="";return e.each(this.data,function(e,n){n.isSelected()&&(t+=(t?",":"")+this.key)}),t},getAllDataForArea:function(t,r){var i,s,o,u=this,a=e(t).filter("area").attr(u.options.mapKey);if(a){o=[],a=n.split(a);for(i=0;i<(r||a.length);i++)s=u.data[u._idFromKey(a[i])],s.area=t.length?t[0]:t,o.push(s)}return o},getDataForArea:function(e){var t=this.getAllDataForArea(e,1);return t?t[0]||null:null},getDataForKey:function(e){return this.data[this._idFromKey(e)]},getKeysForGroup:function(e){var t=this.getDataForKey(e);return t?t.isPrimary?t.key:this.getPrimaryKeysForMapAreas(t.areas()).join(","):""},getPrimaryKeysForMapAreas:function(t){var n=[];return e.each(t,function(t,r){e.inArray(r.keys[0],n)<0&&n.push(r.keys[0])}),n},getData:function(e){return typeof e=="string"?this.getDataForKey(e):e&&e.mapster||n.isElement(e)?this.getDataForArea(e):null},ensureNoHighlight:function(){var e;this.highlightId>=0&&(this.graphics.clearHighlight(),e=this.data[this.highlightId],e.changeState("highlight",!1),this.setHighlightId(-1))},setHighlightId:function(e){this.highlightId=e},clearSelections:function(){e.each(this.data,function(e,t){t.selected&&t.deselect(!0)}),this.removeSelectionFinish()},setAreaOptions:function(e){var t,r,i;e=e||[];for(t=e.length-1;t>=0;t--)r=e[t],r&&(i=this.getDataForKey(r.key),i&&(n.updateProps(i.options,r),n.isBool(r.selected)&&(i.selected=r.selected)))},drawSelections:function(e){var t,r=n.asArray(e);for(t=r.length-1;t>=0;t--)this.data[r[t]].drawSelection()},redrawSelections:function(){e.each(this.data,function(e,t){t.isSelectedOrStatic()&&t.drawSelection()})},initialize:function(){var r,i,s,o,u,a,f,l,c,h,p,d,v=this,g=v.options;if(v.complete)return;c=e(v.image),u=c.parent().attr("id"),u&&u.length>=12&&u.substring(0,12)==="mapster_wrap"?(o=c.parent(),o.attr("id",v.wrapId())):(o=e('<div id="'+v.wrapId()+'"></div>'),g.wrapClass&&(g.wrapClass===!0?o.addClass(c[0].className):o.addClass(g.wrapClass))),v.wrapper=o,v.scaleInfo=d=n.scaleMap(v.images[0],v.images[1],g.scaleMap),v.base_canvas=i=v.graphics.createVisibleCanvas(v),v.overlay_canvas=s=v.graphics.createVisibleCanvas(v),r=e(v.images[1]).addClass("mapster_el "+v.images[0].className).attr({id:null,usemap:null}),l=n.size(v.images[0]),l.complete&&r.css({width:l.width,height:l.height}),v.buildDataset(),a={display:"block",position:"relative",padding:0,width:d.width,height:d.height},g.wrapCss&&e.extend(a,g.wrapCss),c.parent()[0]!==v.wrapper[0]&&c.before(v.wrapper),o.css(a),e(v.images.slice(2)).hide();for(f=1;f<v.images.length;f++)o.append(v.images[f]);o.append(i).append(s).append(c.css(t.canvas_style)),n.setOpacity(v.images[0],0),e(v.images[1]).show(),n.setOpacity(v.images[1],1),g.isSelectable&&g.onGetList&&(p=v.data.slice(0),g.sortList&&(g.sortList==="desc"?h=function(e,t){return e===t?0:e>t?-1:1}:h=function(e,t){return e===t?0:e<t?-1:1},p.sort(function(e,t){return e=e.value,t=t.value,h(e,t)})),v.options.boundList=g.onGetList.call(v.image,p)),v.complete=!0,v.processCommandQueue(),g.onConfigured&&typeof g.onConfigured=="function"&&g.onConfigured.call(c,!0)},buildDataset:function(n){function E(e,n){var r=new t.AreaData(y,e,n);return r.areaId=y._xref[e]=y.data.push(r)-1,r.areaId}var r,i,s,o,u,a,f,l,c,h,p,d,v,g,y=this,b=y.options,w;y._xref={},y.data=[],n||(y.mapAreas=[]),w=!b.mapKey,w&&(b.mapKey="data-mapster-key"),r=t.hasVml()?"area":w?"area[coords]":"area["+b.mapKey+"]",i=e(y.map).find(r).unbind(".mapster");for(p=0;p<i.length;p++){o=0,a=i[p],u=e(a);if(!a.coords)continue;w?(f=String(p),u.attr("data-mapster-key",f)):f=a.getAttribute(b.mapKey),n?(l=y.mapAreas[u.data("mapster")-1],l.configure(f)):(l=new t.MapArea(y,a,f),y.mapAreas.push(l)),h=l.keys;for(s=h.length-1;s>=0;s--)c=h[s],b.mapValue&&(d=u.attr(b.mapValue)),w?(o=E(y.data.length,d),v=y.data[o],v.key=c=o.toString()):(o=y._xref[c],o>=0?(v=y.data[o],d&&!y.data[o].value&&(v.value=d)):(o=E(c,d),v=y.data[o],v.isPrimary=s===0)),l.areaDataXref.push(o),v.areasXref.push(p);g=u.attr("href"),g&&g!=="#"&&!v.href&&(v.href=g),l.nohref||(u.bind("click.mapster",y.click),t.isTouch||u.bind("mouseover.mapster",y.mouseover).bind("mouseout.mapster",y.mouseout).bind("mousedown.mapster",y.mousedown)),u.data("mapster",p+1)}y.setAreaOptions(b.areas),y.redrawSelections()},processCommandQueue:function(){var e,n=this;while(!n.currentAction&&n.commands.length)e=n.commands[0],n.commands.splice(0,1),t.impl[e.command].apply(e.that,e.args)},clearEvents:function(){e(this.map).find("area").unbind(".mapster"),e(this.images).unbind(".mapster")},_clearCanvases:function(t){t||e(this.base_canvas).remove(),e(this.overlay_canvas).remove()},clearMapData:function(t){var r=this;this._clearCanvases(t),e.each(this.data,function(e,t){t.reset()}),this.data=null,t||(this.image.style.cssText=this.imgCssText,e(this.wrapper).before(this.image).remove()),r.images.clear(),this.image=null,n.ifFunction(this.clearTooltip,this)},removeSelectionFinish:function(){var e=this.graphics;e.refreshSelections(),e.clearHighlight()}}}(jQuery),function(e){function r(t){var n=this,r=n.owner;r.options.singleSelect&&r.clearSelections(),n.isSelected()||(t&&(n.optsCache=e.extend(n.effectiveRenderOptions("select"),t,{altImageId:r.images.add(t.altImage)})),n.drawSelection(),n.selected=!0,n.changeState("select",!0)),r.options.singleSelect&&r.graphics.refreshSelections()}function i(e){var t=this;t.selected=!1,t.changeState("select",!1),t.optsCache=null,t.owner.graphics.removeSelections(t.areaId),e||t.owner.removeSelectionFinish()}function s(e){var t=this;return t.isSelected()?t.deselect():t.select(e),t.isSelected()}var t=e.mapster,n=t.utils;t.AreaData=function(t,n,r){e.extend(this,{owner:t,key:n||"",isPrimary:!0,areaId:-1,href:"",value:r||"",options:{},selected:null,areasXref:[],area:null,optsCache:null})},t.AreaData.prototype={constuctor:t.AreaData,select:r,deselect:i,toggle:s,areas:function(){var e,t=[];for(e=0;e<this.areasXref.length;e++)t.push(this.owner.mapAreas[this.areasXref[e]]);return t},coords:function(t){var n=[];return e.each(this.areas(),function(e,r){n=n.concat(r.coords(t))}),n},reset:function(){e.each(this.areas(),function(e,t){t.reset()}),this.areasXref=[],this.options=null},isSelectedOrStatic:function(){var e=this.effectiveOptions();return n.isBool(e.staticState)?e.staticState:this.isSelected()},isSelected:function(){return n.isBool(this.selected)?this.selected:n.isBool(this.owner.area_options.selected)?this.owner.area_options.selected:!1},isSelectable:function(){return n.isBool(this.effectiveOptions().staticState)?!1:n.isBool(this.owner.options.staticState)?!1:n.boolOrDefault(this.effectiveOptions().isSelectable,!0)},isDeselectable:function(){return n.isBool(this.effectiveOptions().staticState)?!1:n.isBool(this.owner.options.staticState)?!1:n.boolOrDefault(this.effectiveOptions().isDeselectable,!0)},isNotRendered:function(){var t=e(this.area);return t.attr("nohref")||!t.attr("href")||this.effectiveOptions().isMask},effectiveOptions:function(e){var t=n.updateProps({},this.owner.area_options,this.options,e||{},{id:this.areaId});return t.selected=this.isSelected(),t},effectiveRenderOptions:function(t,r){var i,s=this.optsCache;if(!s||t==="highlight")i=this.effectiveOptions(r),s=n.updateProps({},i,i["render_"+t]),t!=="highlight"&&(this.optsCache=s);return e.extend({},s)},changeState:function(t,n){e.isFunction(this.owner.options.onStateChange
)&&this.owner.options.onStateChange.call(this.owner.image,{key:this.key,state:t,selected:n})},highlight:function(e){var t=this.owner;this.effectiveOptions().highlight&&t.graphics.addShapeGroup(this,"highlight",e),t.setHighlightId(this.areaId),this.changeState("highlight",!0)},drawSelection:function(){this.owner.graphics.addShapeGroup(this,"select")}},t.MapArea=function(t,r,i){if(!t)return;var s=this;s.owner=t,s.area=r,s.areaDataXref=[],s.originalCoords=[],e.each(n.split(r.coords),function(e,t){s.originalCoords.push(parseFloat(t))}),s.length=s.originalCoords.length,s.shape=r.shape.toLowerCase(),s.nohref=r.nohref||!r.href,s.configure(i)},t.MapArea.prototype={constructor:t.MapArea,configure:function(e){this.keys=n.split(e)},reset:function(){this.area=null},coords:function(t){return e.map(this.originalCoords,function(e){return t?e:e+t})}}}(jQuery),function(e){var t=e.mapster.utils;t.areaCorners=function(n,r,i,s,o){var a,f,l,c,h,p,d,v,m,g,y,b,w,E,S=0,x=0,T,N,C,k,L,A,O=[];n=n.length?n:[n],i=i?e(i):e(document.body),a=i.offset(),T=a.left,N=a.top,r&&(a=e(r).offset(),S=a.left,x=a.top);for(E=0;E<n.length;E++){A=n[E];if(A.nodeName==="AREA"){C=t.split(A.coords,parseInt);switch(A.shape){case"circle":y=C[0],b=C[1],k=C[2],O=[];for(E=0;E<360;E+=20)L=E*Math.PI/180,O.push(y+k*Math.cos(L),b+k*Math.sin(L));break;case"rect":O.push(C[0],C[1],C[2],C[1],C[2],C[3],C[0],C[3]);break;default:O=O.concat(C)}for(E=0;E<O.length;E+=2)O[E]=parseInt(O[E],10)+S,O[E+1]=parseInt(O[E+1],10)+x}else A=e(A),a=A.position(),O.push(a.left,a.top,a.left+A.width(),a.top,a.left+A.width(),a.top+A.height(),a.left,a.top+A.height())}l=c=d=m=999999,h=p=v=g=-1;for(E=O.length-2;E>=0;E-=2)y=O[E],b=O[E+1],y<l&&(l=y,g=b),y>h&&(h=y,m=b),b<c&&(c=b,v=y),b>p&&(p=b,d=y);return s&&o&&(f=!1,e.each([[v-s,c-o],[d,c-o],[l-s,g-o],[l-s,m],[h,g-o],[h,m],[v-s,p],[d,p]],function(e,t){if(!f&&t[0]>T&&t[1]>N)return w=t,f=!0,!1}),f||(w=[h,p])),w}}(jQuery),function(e){var t=e.mapster,n=t.utils,r=t.MapArea.prototype;t.utils.getScaleInfo=function(e,t){var n;return t?(n=e.width/t.width||e.height/t.height,n>.98&&n<1.02&&(n=1)):(n=1,t=e),{scale:n!==1,scalePct:n,realWidth:t.width,realHeight:t.height,width:e.width,height:e.height,ratio:e.width/e.height}},t.utils.scaleMap=function(e,t,r){var i=n.size(e),s=n.size(t,!0);if(!s.complete())throw"Another script, such as an extension, appears to be interfering with image loading. Please let us know about this.";return i.complete()||(i=s),this.getScaleInfo(i,r?s:null)},t.MapData.prototype.resize=function(r,i,s,o){function v(n,r,i){t.hasCanvas()?(n.width=r,n.height=i):(e(n).width(r),e(n).height(i))}function g(){d.currentAction="",e.isFunction(o)&&o(),d.processCommandQueue()}function y(){v(d.overlay_canvas,r,i);if(h>=0){var e=d.data[h];e.tempOptions={fade:!1},d.getDataForKey(e.key).highlight(),e.tempOptions=null}v(d.base_canvas,r,i),d.redrawSelections(),g()}function b(){e(d.image).css(l),d.scaleInfo=n.getScaleInfo({width:r,height:i},{width:d.scaleInfo.realWidth,height:d.scaleInfo.realHeight}),e.each(d.data,function(t,n){e.each(n.areas(),function(e,t){t.resize()})})}var a,f,l,c,h,p,d=this;o=o||s;if(d.scaleInfo.width===r&&d.scaleInfo.height===i)return;h=d.highlightId,r||(p=i/d.scaleInfo.realHeight,r=Math.round(d.scaleInfo.realWidth*p)),i||(p=r/d.scaleInfo.realWidth,i=Math.round(d.scaleInfo.realHeight*p)),l={width:String(r)+"px",height:String(i)+"px"},t.hasCanvas()||e(d.base_canvas).children().remove(),c=e(d.wrapper).find(".mapster_el").add(d.wrapper),s?(f=[],d.currentAction="resizing",c.each(function(t,r){a=n.defer(),f.push(a),e(r).animate(l,{duration:s,complete:a.resolve,easing:"linear"})}),a=n.defer(),f.push(a),n.when.all(f).then(y),b(),a.resolve()):(c.css(l),b(),y())},t.MapArea=n.subclass(t.MapArea,function(){this.base.init(),this.owner.scaleInfo.scale&&this.resize()}),r.coords=function(e,t){var n,r=[],i=e||this.owner.scaleInfo.scalePct,s=t||0;if(i===1&&t===0)return this.originalCoords;for(n=0;n<this.length;n++)r.push(Math.round(this.originalCoords[n]*i)+s);return r},r.resize=function(){this.area.coords=this.coords().join(",")},r.reset=function(){this.area.coords=this.coords(1).join(",")},t.impl.resize=function(e,n,r,i){if(!e&&!n)return!1;var s=(new t.Method(this,function(){this.resize(e,n,r,i)},null,{name:"resize",args:arguments})).go();return s}}(jQuery),function(e){function r(t,n,r){var i;return n?(i=typeof n=="string"?e(n):e(n).clone(),i.append(t)):i=e(t),i.css(e.extend(r||{},{display:"block",position:"absolute"})).hide(),e("body").append(i),i.attr("data-opacity",i.css("opacity")).css("opacity",0),i.show()}function i(e,t){var r={left:t.left+"px",top:t.top+"px"},i=e.attr("data-opacity")||0,s=e.css("z-index");if(parseInt(s,10)===0||s==="auto")r["z-index"]=9999;e.css(r).addClass("mapster_tooltip"),t.fadeDuration&&t.fadeDuration>0?n.fader(e[0],0,i,t.fadeDuration):n.setOpacity(e[0],i)}function s(t,n,r,i,s,o){var u=r+".mapster-tooltip";if(e.inArray(n,t)>=0)return i.unbind(u).bind(u,function(e){if(!s||s.call(this,e))i.unbind(".mapster-tooltip"),o&&o.call(this)}),{object:i,event:u}}function o(e,t,r,s,o){var u,a={};return o=o||{},t?(u=n.areaCorners(t,r,s,e.outerWidth(!0),e.outerHeight(!0)),a.left=u[0],a.top=u[1]):(a.left=o.left,a.top=o.top),a.left+=o.offsetx||0,a.top+=o.offsety||0,a.css=o.css,a.fadeDuration=o.fadeDuration,i(e,a),e}function u(e){return e?typeof e=="string"||e.jquery?e:e.content:null}var t=e.mapster,n=t.utils;e.extend(t.defaults,{toolTipContainer:'<div style="border: 2px solid black; background: #EEEEEE; width:160px; padding:4px; margin: 4px; -moz-box-shadow: 3px 3px 5px #535353; -webkit-box-shadow: 3px 3px 5px #535353; box-shadow: 3px 3px 5px #535353; -moz-border-radius: 6px 6px 6px 6px; -webkit-border-radius: 6px; border-radius: 6px 6px 6px 6px; opacity: 0.9;"></dteniv>',showToolTip:!1,toolTipFade:!0,toolTipClose:["area-mouseout","image-mouseout"],onShowToolTip:null,onHideToolTip:null}),e.extend(t.area_defaults,{toolTip:null,toolTipClose:null}),t.MapData.prototype.clearToolTip=function(){this.activeToolTip&&(this.activeToolTip.stop().remove(),this.activeToolTip=null,this.activeToolTipID=null,n.ifFunction(this.options.onHideToolTip,this))},t.AreaData.prototype.showToolTip=function(t,i){var u,a,f,l,c,h={},p=this,d=p.owner,v=p.effectiveOptions();i=i?e.extend({},i):{},t=t||v.toolTip,a=i.closeEvents||v.toolTipClose||d.options.toolTipClose||"tooltip-click",c=typeof i.template!="undefined"?i.template:d.options.toolTipContainer,i.closeEvents=typeof a=="string"?a=n.split(a):a,i.fadeDuration=i.fadeDuration||(d.options.toolTipFade?d.options.fadeDuration||v.fadeDuration:0),f=p.area?p.area:e.map(p.areas(),function(e){return e.area});if(d.activeToolTipID===p.areaId)return;return d.clearToolTip(),d.activeToolTip=u=r(t,c,i.css),d.activeToolTipID=p.areaId,l=function(){d.clearToolTip()},s(a,"area-click","click",e(d.map),null,l),s(a,"tooltip-click","click",u,null,l),s(a,"image-mouseout","mouseout",e(d.image),function(e){return e.relatedTarget&&e.relatedTarget.nodeName!=="AREA"&&e.relatedTarget!==p.area},l),o(u,f,d.image,i.container,c,i),n.ifFunction(d.options.onShowToolTip,p.area,{toolTip:u,options:h,areaOptions:v,key:p.key,selected:p.isSelected()}),u},t.impl.tooltip=function(n,i){return(new t.Method(this,function(){var a,f,l=this;if(!n)l.clearToolTip();else{f=e(n);if(l.activeToolTipID===f[0])return;l.clearToolTip(),l.activeToolTip=a=r(u(i),i.template||l.options.toolTipContainer,i.css),l.activeToolTipID=f[0],s(["tooltip-click"],"tooltip-click","click",a,null,function(){l.clearToolTip()}),l.activeToolTip=a=o(a,f,l.image,i.container,i)}},function(){e.isPlainObject(n)&&!i&&(i=n),this.showToolTip(u(i),i)},{name:"tooltip",args:arguments,key:n})).go()}}(jQuery);
// file: jquery.ui.tooltip.js
/*! jQuery UI - v1.11.0 - 2014-07-10
* http://jqueryui.com
* Includes: core.js, widget.js, position.js, tooltip.js
* Copyright 2014 jQuery Foundation and other contributors; Licensed MIT */

(function(e){"function"==typeof define&&define.amd?define(["jquery"],e):e(jQuery)})(function(e){function t(t,s){var a,n,o,r=t.nodeName.toLowerCase();return"area"===r?(a=t.parentNode,n=a.name,t.href&&n&&"map"===a.nodeName.toLowerCase()?(o=e("img[usemap=#"+n+"]")[0],!!o&&i(o)):!1):(/input|select|textarea|button|object/.test(r)?!t.disabled:"a"===r?t.href||s:s)&&i(t)}function i(t){return e.expr.filters.visible(t)&&!e(t).parents().addBack().filter(function(){return"hidden"===e.css(this,"visibility")}).length}e.ui=e.ui||{},e.extend(e.ui,{version:"1.11.0",keyCode:{BACKSPACE:8,COMMA:188,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,LEFT:37,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SPACE:32,TAB:9,UP:38}}),e.fn.extend({scrollParent:function(){var t=this.css("position"),i="absolute"===t,s=this.parents().filter(function(){var t=e(this);return i&&"static"===t.css("position")?!1:/(auto|scroll)/.test(t.css("overflow")+t.css("overflow-y")+t.css("overflow-x"))}).eq(0);return"fixed"!==t&&s.length?s:e(this[0].ownerDocument||document)},uniqueId:function(){var e=0;return function(){return this.each(function(){this.id||(this.id="ui-id-"+ ++e)})}}(),removeUniqueId:function(){return this.each(function(){/^ui-id-\d+$/.test(this.id)&&e(this).removeAttr("id")})}}),e.extend(e.expr[":"],{data:e.expr.createPseudo?e.expr.createPseudo(function(t){return function(i){return!!e.data(i,t)}}):function(t,i,s){return!!e.data(t,s[3])},focusable:function(i){return t(i,!isNaN(e.attr(i,"tabindex")))},tabbable:function(i){var s=e.attr(i,"tabindex"),a=isNaN(s);return(a||s>=0)&&t(i,!a)}}),e("<a>").outerWidth(1).jquery||e.each(["Width","Height"],function(t,i){function s(t,i,s,n){return e.each(a,function(){i-=parseFloat(e.css(t,"padding"+this))||0,s&&(i-=parseFloat(e.css(t,"border"+this+"Width"))||0),n&&(i-=parseFloat(e.css(t,"margin"+this))||0)}),i}var a="Width"===i?["Left","Right"]:["Top","Bottom"],n=i.toLowerCase(),o={innerWidth:e.fn.innerWidth,innerHeight:e.fn.innerHeight,outerWidth:e.fn.outerWidth,outerHeight:e.fn.outerHeight};e.fn["inner"+i]=function(t){return void 0===t?o["inner"+i].call(this):this.each(function(){e(this).css(n,s(this,t)+"px")})},e.fn["outer"+i]=function(t,a){return"number"!=typeof t?o["outer"+i].call(this,t):this.each(function(){e(this).css(n,s(this,t,!0,a)+"px")})}}),e.fn.addBack||(e.fn.addBack=function(e){return this.add(null==e?this.prevObject:this.prevObject.filter(e))}),e("<a>").data("a-b","a").removeData("a-b").data("a-b")&&(e.fn.removeData=function(t){return function(i){return arguments.length?t.call(this,e.camelCase(i)):t.call(this)}}(e.fn.removeData)),e.ui.ie=!!/msie [\w.]+/.exec(navigator.userAgent.toLowerCase()),e.fn.extend({focus:function(t){return function(i,s){return"number"==typeof i?this.each(function(){var t=this;setTimeout(function(){e(t).focus(),s&&s.call(t)},i)}):t.apply(this,arguments)}}(e.fn.focus),disableSelection:function(){var e="onselectstart"in document.createElement("div")?"selectstart":"mousedown";return function(){return this.bind(e+".ui-disableSelection",function(e){e.preventDefault()})}}(),enableSelection:function(){return this.unbind(".ui-disableSelection")},zIndex:function(t){if(void 0!==t)return this.css("zIndex",t);if(this.length)for(var i,s,a=e(this[0]);a.length&&a[0]!==document;){if(i=a.css("position"),("absolute"===i||"relative"===i||"fixed"===i)&&(s=parseInt(a.css("zIndex"),10),!isNaN(s)&&0!==s))return s;a=a.parent()}return 0}}),e.ui.plugin={add:function(t,i,s){var a,n=e.ui[t].prototype;for(a in s)n.plugins[a]=n.plugins[a]||[],n.plugins[a].push([i,s[a]])},call:function(e,t,i,s){var a,n=e.plugins[t];if(n&&(s||e.element[0].parentNode&&11!==e.element[0].parentNode.nodeType))for(a=0;n.length>a;a++)e.options[n[a][0]]&&n[a][1].apply(e.element,i)}};var s=0,a=Array.prototype.slice;e.cleanData=function(t){return function(i){for(var s,a=0;null!=(s=i[a]);a++)try{e(s).triggerHandler("remove")}catch(n){}t(i)}}(e.cleanData),e.widget=function(t,i,s){var a,n,o,r,h={},l=t.split(".")[0];return t=t.split(".")[1],a=l+"-"+t,s||(s=i,i=e.Widget),e.expr[":"][a.toLowerCase()]=function(t){return!!e.data(t,a)},e[l]=e[l]||{},n=e[l][t],o=e[l][t]=function(e,t){return this._createWidget?(arguments.length&&this._createWidget(e,t),void 0):new o(e,t)},e.extend(o,n,{version:s.version,_proto:e.extend({},s),_childConstructors:[]}),r=new i,r.options=e.widget.extend({},r.options),e.each(s,function(t,s){return e.isFunction(s)?(h[t]=function(){var e=function(){return i.prototype[t].apply(this,arguments)},a=function(e){return i.prototype[t].apply(this,e)};return function(){var t,i=this._super,n=this._superApply;return this._super=e,this._superApply=a,t=s.apply(this,arguments),this._super=i,this._superApply=n,t}}(),void 0):(h[t]=s,void 0)}),o.prototype=e.widget.extend(r,{widgetEventPrefix:n?r.widgetEventPrefix||t:t},h,{constructor:o,namespace:l,widgetName:t,widgetFullName:a}),n?(e.each(n._childConstructors,function(t,i){var s=i.prototype;e.widget(s.namespace+"."+s.widgetName,o,i._proto)}),delete n._childConstructors):i._childConstructors.push(o),e.widget.bridge(t,o),o},e.widget.extend=function(t){for(var i,s,n=a.call(arguments,1),o=0,r=n.length;r>o;o++)for(i in n[o])s=n[o][i],n[o].hasOwnProperty(i)&&void 0!==s&&(t[i]=e.isPlainObject(s)?e.isPlainObject(t[i])?e.widget.extend({},t[i],s):e.widget.extend({},s):s);return t},e.widget.bridge=function(t,i){var s=i.prototype.widgetFullName||t;e.fn[t]=function(n){var o="string"==typeof n,r=a.call(arguments,1),h=this;return n=!o&&r.length?e.widget.extend.apply(null,[n].concat(r)):n,o?this.each(function(){var i,a=e.data(this,s);return"instance"===n?(h=a,!1):a?e.isFunction(a[n])&&"_"!==n.charAt(0)?(i=a[n].apply(a,r),i!==a&&void 0!==i?(h=i&&i.jquery?h.pushStack(i.get()):i,!1):void 0):e.error("no such method '"+n+"' for "+t+" widget instance"):e.error("cannot call methods on "+t+" prior to initialization; "+"attempted to call method '"+n+"'")}):this.each(function(){var t=e.data(this,s);t?(t.option(n||{}),t._init&&t._init()):e.data(this,s,new i(n,this))}),h}},e.Widget=function(){},e.Widget._childConstructors=[],e.Widget.prototype={widgetName:"widget",widgetEventPrefix:"",defaultElement:"<div>",options:{disabled:!1,create:null},_createWidget:function(t,i){i=e(i||this.defaultElement||this)[0],this.element=e(i),this.uuid=s++,this.eventNamespace="."+this.widgetName+this.uuid,this.options=e.widget.extend({},this.options,this._getCreateOptions(),t),this.bindings=e(),this.hoverable=e(),this.focusable=e(),i!==this&&(e.data(i,this.widgetFullName,this),this._on(!0,this.element,{remove:function(e){e.target===i&&this.destroy()}}),this.document=e(i.style?i.ownerDocument:i.document||i),this.window=e(this.document[0].defaultView||this.document[0].parentWindow)),this._create(),this._trigger("create",null,this._getCreateEventData()),this._init()},_getCreateOptions:e.noop,_getCreateEventData:e.noop,_create:e.noop,_init:e.noop,destroy:function(){this._destroy(),this.element.unbind(this.eventNamespace).removeData(this.widgetFullName).removeData(e.camelCase(this.widgetFullName)),this.widget().unbind(this.eventNamespace).removeAttr("aria-disabled").removeClass(this.widgetFullName+"-disabled "+"ui-state-disabled"),this.bindings.unbind(this.eventNamespace),this.hoverable.removeClass("ui-state-hover"),this.focusable.removeClass("ui-state-focus")},_destroy:e.noop,widget:function(){return this.element},option:function(t,i){var s,a,n,o=t;if(0===arguments.length)return e.widget.extend({},this.options);if("string"==typeof t)if(o={},s=t.split("."),t=s.shift(),s.length){for(a=o[t]=e.widget.extend({},this.options[t]),n=0;s.length-1>n;n++)a[s[n]]=a[s[n]]||{},a=a[s[n]];if(t=s.pop(),1===arguments.length)return void 0===a[t]?null:a[t];a[t]=i}else{if(1===arguments.length)return void 0===this.options[t]?null:this.options[t];o[t]=i}return this._setOptions(o),this},_setOptions:function(e){var t;for(t in e)this._setOption(t,e[t]);return this},_setOption:function(e,t){return this.options[e]=t,"disabled"===e&&(this.widget().toggleClass(this.widgetFullName+"-disabled",!!t),t&&(this.hoverable.removeClass("ui-state-hover"),this.focusable.removeClass("ui-state-focus"))),this},enable:function(){return this._setOptions({disabled:!1})},disable:function(){return this._setOptions({disabled:!0})},_on:function(t,i,s){var a,n=this;"boolean"!=typeof t&&(s=i,i=t,t=!1),s?(i=a=e(i),this.bindings=this.bindings.add(i)):(s=i,i=this.element,a=this.widget()),e.each(s,function(s,o){function r(){return t||n.options.disabled!==!0&&!e(this).hasClass("ui-state-disabled")?("string"==typeof o?n[o]:o).apply(n,arguments):void 0}"string"!=typeof o&&(r.guid=o.guid=o.guid||r.guid||e.guid++);var h=s.match(/^([\w:-]*)\s*(.*)$/),l=h[1]+n.eventNamespace,u=h[2];u?a.delegate(u,l,r):i.bind(l,r)})},_off:function(e,t){t=(t||"").split(" ").join(this.eventNamespace+" ")+this.eventNamespace,e.unbind(t).undelegate(t)},_delay:function(e,t){function i(){return("string"==typeof e?s[e]:e).apply(s,arguments)}var s=this;return setTimeout(i,t||0)},_hoverable:function(t){this.hoverable=this.hoverable.add(t),this._on(t,{mouseenter:function(t){e(t.currentTarget).addClass("ui-state-hover")},mouseleave:function(t){e(t.currentTarget).removeClass("ui-state-hover")}})},_focusable:function(t){this.focusable=this.focusable.add(t),this._on(t,{focusin:function(t){e(t.currentTarget).addClass("ui-state-focus")},focusout:function(t){e(t.currentTarget).removeClass("ui-state-focus")}})},_trigger:function(t,i,s){var a,n,o=this.options[t];if(s=s||{},i=e.Event(i),i.type=(t===this.widgetEventPrefix?t:this.widgetEventPrefix+t).toLowerCase(),i.target=this.element[0],n=i.originalEvent)for(a in n)a in i||(i[a]=n[a]);return this.element.trigger(i,s),!(e.isFunction(o)&&o.apply(this.element[0],[i].concat(s))===!1||i.isDefaultPrevented())}},e.each({show:"fadeIn",hide:"fadeOut"},function(t,i){e.Widget.prototype["_"+t]=function(s,a,n){"string"==typeof a&&(a={effect:a});var o,r=a?a===!0||"number"==typeof a?i:a.effect||i:t;a=a||{},"number"==typeof a&&(a={duration:a}),o=!e.isEmptyObject(a),a.complete=n,a.delay&&s.delay(a.delay),o&&e.effects&&e.effects.effect[r]?s[t](a):r!==t&&s[r]?s[r](a.duration,a.easing,n):s.queue(function(i){e(this)[t](),n&&n.call(s[0]),i()})}}),e.widget,function(){function t(e,t,i){return[parseFloat(e[0])*(p.test(e[0])?t/100:1),parseFloat(e[1])*(p.test(e[1])?i/100:1)]}function i(t,i){return parseInt(e.css(t,i),10)||0}function s(t){var i=t[0];return 9===i.nodeType?{width:t.width(),height:t.height(),offset:{top:0,left:0}}:e.isWindow(i)?{width:t.width(),height:t.height(),offset:{top:t.scrollTop(),left:t.scrollLeft()}}:i.preventDefault?{width:0,height:0,offset:{top:i.pageY,left:i.pageX}}:{width:t.outerWidth(),height:t.outerHeight(),offset:t.offset()}}e.ui=e.ui||{};var a,n,o=Math.max,r=Math.abs,h=Math.round,l=/left|center|right/,u=/top|center|bottom/,d=/[\+\-]\d+(\.[\d]+)?%?/,c=/^\w+/,p=/%$/,f=e.fn.position;e.position={scrollbarWidth:function(){if(void 0!==a)return a;var t,i,s=e("<div style='display:block;position:absolute;width:50px;height:50px;overflow:hidden;'><div style='height:100px;width:auto;'></div></div>"),n=s.children()[0];return e("body").append(s),t=n.offsetWidth,s.css("overflow","scroll"),i=n.offsetWidth,t===i&&(i=s[0].clientWidth),s.remove(),a=t-i},getScrollInfo:function(t){var i=t.isWindow||t.isDocument?"":t.element.css("overflow-x"),s=t.isWindow||t.isDocument?"":t.element.css("overflow-y"),a="scroll"===i||"auto"===i&&t.width<t.element[0].scrollWidth,n="scroll"===s||"auto"===s&&t.height<t.element[0].scrollHeight;return{width:n?e.position.scrollbarWidth():0,height:a?e.position.scrollbarWidth():0}},getWithinInfo:function(t){var i=e(t||window),s=e.isWindow(i[0]),a=!!i[0]&&9===i[0].nodeType;return{element:i,isWindow:s,isDocument:a,offset:i.offset()||{left:0,top:0},scrollLeft:i.scrollLeft(),scrollTop:i.scrollTop(),width:s?i.width():i.outerWidth(),height:s?i.height():i.outerHeight()}}},e.fn.position=function(a){if(!a||!a.of)return f.apply(this,arguments);a=e.extend({},a);var p,m,g,v,y,b,_=e(a.of),x=e.position.getWithinInfo(a.within),w=e.position.getScrollInfo(x),k=(a.collision||"flip").split(" "),T={};return b=s(_),_[0].preventDefault&&(a.at="left top"),m=b.width,g=b.height,v=b.offset,y=e.extend({},v),e.each(["my","at"],function(){var e,t,i=(a[this]||"").split(" ");1===i.length&&(i=l.test(i[0])?i.concat(["center"]):u.test(i[0])?["center"].concat(i):["center","center"]),i[0]=l.test(i[0])?i[0]:"center",i[1]=u.test(i[1])?i[1]:"center",e=d.exec(i[0]),t=d.exec(i[1]),T[this]=[e?e[0]:0,t?t[0]:0],a[this]=[c.exec(i[0])[0],c.exec(i[1])[0]]}),1===k.length&&(k[1]=k[0]),"right"===a.at[0]?y.left+=m:"center"===a.at[0]&&(y.left+=m/2),"bottom"===a.at[1]?y.top+=g:"center"===a.at[1]&&(y.top+=g/2),p=t(T.at,m,g),y.left+=p[0],y.top+=p[1],this.each(function(){var s,l,u=e(this),d=u.outerWidth(),c=u.outerHeight(),f=i(this,"marginLeft"),b=i(this,"marginTop"),D=d+f+i(this,"marginRight")+w.width,S=c+b+i(this,"marginBottom")+w.height,N=e.extend({},y),M=t(T.my,u.outerWidth(),u.outerHeight());"right"===a.my[0]?N.left-=d:"center"===a.my[0]&&(N.left-=d/2),"bottom"===a.my[1]?N.top-=c:"center"===a.my[1]&&(N.top-=c/2),N.left+=M[0],N.top+=M[1],n||(N.left=h(N.left),N.top=h(N.top)),s={marginLeft:f,marginTop:b},e.each(["left","top"],function(t,i){e.ui.position[k[t]]&&e.ui.position[k[t]][i](N,{targetWidth:m,targetHeight:g,elemWidth:d,elemHeight:c,collisionPosition:s,collisionWidth:D,collisionHeight:S,offset:[p[0]+M[0],p[1]+M[1]],my:a.my,at:a.at,within:x,elem:u})}),a.using&&(l=function(e){var t=v.left-N.left,i=t+m-d,s=v.top-N.top,n=s+g-c,h={target:{element:_,left:v.left,top:v.top,width:m,height:g},element:{element:u,left:N.left,top:N.top,width:d,height:c},horizontal:0>i?"left":t>0?"right":"center",vertical:0>n?"top":s>0?"bottom":"middle"};d>m&&m>r(t+i)&&(h.horizontal="center"),c>g&&g>r(s+n)&&(h.vertical="middle"),h.important=o(r(t),r(i))>o(r(s),r(n))?"horizontal":"vertical",a.using.call(this,e,h)}),u.offset(e.extend(N,{using:l}))})},e.ui.position={fit:{left:function(e,t){var i,s=t.within,a=s.isWindow?s.scrollLeft:s.offset.left,n=s.width,r=e.left-t.collisionPosition.marginLeft,h=a-r,l=r+t.collisionWidth-n-a;t.collisionWidth>n?h>0&&0>=l?(i=e.left+h+t.collisionWidth-n-a,e.left+=h-i):e.left=l>0&&0>=h?a:h>l?a+n-t.collisionWidth:a:h>0?e.left+=h:l>0?e.left-=l:e.left=o(e.left-r,e.left)},top:function(e,t){var i,s=t.within,a=s.isWindow?s.scrollTop:s.offset.top,n=t.within.height,r=e.top-t.collisionPosition.marginTop,h=a-r,l=r+t.collisionHeight-n-a;t.collisionHeight>n?h>0&&0>=l?(i=e.top+h+t.collisionHeight-n-a,e.top+=h-i):e.top=l>0&&0>=h?a:h>l?a+n-t.collisionHeight:a:h>0?e.top+=h:l>0?e.top-=l:e.top=o(e.top-r,e.top)}},flip:{left:function(e,t){var i,s,a=t.within,n=a.offset.left+a.scrollLeft,o=a.width,h=a.isWindow?a.scrollLeft:a.offset.left,l=e.left-t.collisionPosition.marginLeft,u=l-h,d=l+t.collisionWidth-o-h,c="left"===t.my[0]?-t.elemWidth:"right"===t.my[0]?t.elemWidth:0,p="left"===t.at[0]?t.targetWidth:"right"===t.at[0]?-t.targetWidth:0,f=-2*t.offset[0];0>u?(i=e.left+c+p+f+t.collisionWidth-o-n,(0>i||r(u)>i)&&(e.left+=c+p+f)):d>0&&(s=e.left-t.collisionPosition.marginLeft+c+p+f-h,(s>0||d>r(s))&&(e.left+=c+p+f))},top:function(e,t){var i,s,a=t.within,n=a.offset.top+a.scrollTop,o=a.height,h=a.isWindow?a.scrollTop:a.offset.top,l=e.top-t.collisionPosition.marginTop,u=l-h,d=l+t.collisionHeight-o-h,c="top"===t.my[1],p=c?-t.elemHeight:"bottom"===t.my[1]?t.elemHeight:0,f="top"===t.at[1]?t.targetHeight:"bottom"===t.at[1]?-t.targetHeight:0,m=-2*t.offset[1];0>u?(s=e.top+p+f+m+t.collisionHeight-o-n,e.top+p+f+m>u&&(0>s||r(u)>s)&&(e.top+=p+f+m)):d>0&&(i=e.top-t.collisionPosition.marginTop+p+f+m-h,e.top+p+f+m>d&&(i>0||d>r(i))&&(e.top+=p+f+m))}},flipfit:{left:function(){e.ui.position.flip.left.apply(this,arguments),e.ui.position.fit.left.apply(this,arguments)},top:function(){e.ui.position.flip.top.apply(this,arguments),e.ui.position.fit.top.apply(this,arguments)}}},function(){var t,i,s,a,o,r=document.getElementsByTagName("body")[0],h=document.createElement("div");t=document.createElement(r?"div":"body"),s={visibility:"hidden",width:0,height:0,border:0,margin:0,background:"none"},r&&e.extend(s,{position:"absolute",left:"-1000px",top:"-1000px"});for(o in s)t.style[o]=s[o];t.appendChild(h),i=r||document.documentElement,i.insertBefore(t,i.firstChild),h.style.cssText="position: absolute; left: 10.7432222px;",a=e(h).offset().left,n=a>10&&11>a,t.innerHTML="",i.removeChild(t)}()}(),e.ui.position,e.widget("ui.tooltip",{version:"1.11.0",options:{content:function(){var t=e(this).attr("title")||"";return e("<a>").text(t).html()},hide:!0,items:"[title]:not([disabled])",position:{my:"left top+15",at:"left bottom",collision:"flipfit flip"},show:!0,tooltipClass:null,track:!1,close:null,open:null},_addDescribedBy:function(t,i){var s=(t.attr("aria-describedby")||"").split(/\s+/);s.push(i),t.data("ui-tooltip-id",i).attr("aria-describedby",e.trim(s.join(" ")))},_removeDescribedBy:function(t){var i=t.data("ui-tooltip-id"),s=(t.attr("aria-describedby")||"").split(/\s+/),a=e.inArray(i,s);-1!==a&&s.splice(a,1),t.removeData("ui-tooltip-id"),s=e.trim(s.join(" ")),s?t.attr("aria-describedby",s):t.removeAttr("aria-describedby")},_create:function(){this._on({mouseover:"open",focusin:"open"}),this.tooltips={},this.parents={},this.options.disabled&&this._disable(),this.liveRegion=e("<div>").attr({role:"log","aria-live":"assertive","aria-relevant":"additions"}).addClass("ui-helper-hidden-accessible").appendTo(this.document[0].body)},_setOption:function(t,i){var s=this;return"disabled"===t?(this[i?"_disable":"_enable"](),this.options[t]=i,void 0):(this._super(t,i),"content"===t&&e.each(this.tooltips,function(e,t){s._updateContent(t)}),void 0)},_disable:function(){var t=this;e.each(this.tooltips,function(i,s){var a=e.Event("blur");a.target=a.currentTarget=s[0],t.close(a,!0)}),this.element.find(this.options.items).addBack().each(function(){var t=e(this);t.is("[title]")&&t.data("ui-tooltip-title",t.attr("title")).removeAttr("title")})},_enable:function(){this.element.find(this.options.items).addBack().each(function(){var t=e(this);t.data("ui-tooltip-title")&&t.attr("title",t.data("ui-tooltip-title"))})},open:function(t){var i=this,s=e(t?t.target:this.element).closest(this.options.items);s.length&&!s.data("ui-tooltip-id")&&(s.attr("title")&&s.data("ui-tooltip-title",s.attr("title")),s.data("ui-tooltip-open",!0),t&&"mouseover"===t.type&&s.parents().each(function(){var t,s=e(this);s.data("ui-tooltip-open")&&(t=e.Event("blur"),t.target=t.currentTarget=this,i.close(t,!0)),s.attr("title")&&(s.uniqueId(),i.parents[this.id]={element:this,title:s.attr("title")},s.attr("title",""))}),this._updateContent(s,t))},_updateContent:function(e,t){var i,s=this.options.content,a=this,n=t?t.type:null;return"string"==typeof s?this._open(t,e,s):(i=s.call(e[0],function(i){e.data("ui-tooltip-open")&&a._delay(function(){t&&(t.type=n),this._open(t,e,i)})}),i&&this._open(t,e,i),void 0)},_open:function(t,i,s){function a(e){l.of=e,n.is(":hidden")||n.position(l)}var n,o,r,h,l=e.extend({},this.options.position);if(s){if(n=this._find(i),n.length)return n.find(".ui-tooltip-content").html(s),void 0;i.is("[title]")&&(t&&"mouseover"===t.type?i.attr("title",""):i.removeAttr("title")),n=this._tooltip(i),this._addDescribedBy(i,n.attr("id")),n.find(".ui-tooltip-content").html(s),this.liveRegion.children().hide(),s.clone?(h=s.clone(),h.removeAttr("id").find("[id]").removeAttr("id")):h=s,e("<div>").html(h).appendTo(this.liveRegion),this.options.track&&t&&/^mouse/.test(t.type)?(this._on(this.document,{mousemove:a}),a(t)):n.position(e.extend({of:i},this.options.position)),n.hide(),this._show(n,this.options.show),this.options.show&&this.options.show.delay&&(r=this.delayedShow=setInterval(function(){n.is(":visible")&&(a(l.of),clearInterval(r))},e.fx.interval)),this._trigger("open",t,{tooltip:n}),o={keyup:function(t){if(t.keyCode===e.ui.keyCode.ESCAPE){var s=e.Event(t);s.currentTarget=i[0],this.close(s,!0)}}},i[0]!==this.element[0]&&(o.remove=function(){this._removeTooltip(n)}),t&&"mouseover"!==t.type||(o.mouseleave="close"),t&&"focusin"!==t.type||(o.focusout="close"),this._on(!0,i,o)}},close:function(t){var i=this,s=e(t?t.currentTarget:this.element),a=this._find(s);this.closing||(clearInterval(this.delayedShow),s.data("ui-tooltip-title")&&!s.attr("title")&&s.attr("title",s.data("ui-tooltip-title")),this._removeDescribedBy(s),a.stop(!0),this._hide(a,this.options.hide,function(){i._removeTooltip(e(this))}),s.removeData("ui-tooltip-open"),this._off(s,"mouseleave focusout keyup"),s[0]!==this.element[0]&&this._off(s,"remove"),this._off(this.document,"mousemove"),t&&"mouseleave"===t.type&&e.each(this.parents,function(t,s){e(s.element).attr("title",s.title),delete i.parents[t]}),this.closing=!0,this._trigger("close",t,{tooltip:a}),this.closing=!1)},_tooltip:function(t){var i=e("<div>").attr("role","tooltip").addClass("ui-tooltip ui-widget ui-corner-all ui-widget-content "+(this.options.tooltipClass||"")),s=i.uniqueId().attr("id");return e("<div>").addClass("ui-tooltip-content").appendTo(i),i.appendTo(this.document[0].body),this.tooltips[s]=t,i},_find:function(t){var i=t.data("ui-tooltip-id");return i?e("#"+i):e()},_removeTooltip:function(e){e.remove(),delete this.tooltips[e.attr("id")]},_destroy:function(){var t=this;e.each(this.tooltips,function(i,s){var a=e.Event("blur");a.target=a.currentTarget=s[0],t.close(a,!0),e("#"+i).remove(),s.data("ui-tooltip-title")&&(s.attr("title")||s.attr("title",s.data("ui-tooltip-title")),s.removeData("ui-tooltip-title"))}),this.liveRegion.remove()}})});// file: jquery.cookiebar.js
/*
 * Copyright (C) 2012 PrimeBox (info@primebox.co.uk)
 * 
 * This work is licensed under the Creative Commons
 * Attribution 3.0 Unported License. To view a copy
 * of this license, visit
 * http://creativecommons.org/licenses/by/3.0/.
 * 
 * Documentation available at:
 * http://www.primebox.co.uk/projects/cookie-bar/
 * 
 * When using this software you use it at your own risk. We hold
 * no responsibility for any damage caused by using this plugin
 * or the documentation provided.
 */
(function($){
	$.cookieBar = function(options,val){
		if(options=='cookies'){
			var doReturn = 'cookies';
		}else if(options=='set'){
			var doReturn = 'set';
		}else{
			var doReturn = false;
		}
		var defaults = {
			message: 'We use cookies to track usage and preferences.', //Message displayed on bar
			acceptButton: true, //Set to true to show accept/enable button
			acceptText: 'I Understand', //Text on accept/enable button
			acceptFunction: function(cookieValue){if(cookieValue!='enabled' && cookieValue!='accepted') window.location = window.location.href;}, //Function to run after accept
			declineButton: false, //Set to true to show decline/disable button
			declineText: 'Disable Cookies', //Text on decline/disable button
			declineFunction: function(cookieValue){if(cookieValue=='enabled' || cookieValue=='accepted') window.location = window.location.href;}, //Function to run after decline
			policyButton: false, //Set to true to show Privacy Policy button
			policyText: 'Privacy Policy', //Text on Privacy Policy button
			policyURL: '/privacy-policy/', //URL of Privacy Policy
			autoEnable: true, //Set to true for cookies to be accepted automatically. Banner still shows
			acceptOnContinue: false, //Set to true to accept cookies when visitor moves to another page
			acceptOnScroll: false, //Set to true to accept cookies when visitor scrolls X pixels up or down
			acceptAnyClick: false, //Set to true to accept cookies when visitor clicks anywhere on the page
			expireDays: 365, //Number of days for cookieBar cookie to be stored for
			renewOnVisit: false, //Renew the cookie upon revisit to website
			forceShow: false, //Force cookieBar to show regardless of user cookie preference
			effect: 'slide', //Options: slide, fade, hide
			element: 'body', //Element to append/prepend cookieBar to. Remember "." for class or "#" for id.
			append: false, //Set to true for cookieBar HTML to be placed at base of website. Actual position may change according to CSS
			fixed: false, //Set to true to add the class "fixed" to the cookie bar. Default CSS should fix the position
			bottom: false, //Force CSS when fixed, so bar appears at bottom of website
			zindex: '', //Can be set in CSS, although some may prefer to set here
			domain: String(window.location.hostname), //Location of privacy policy
			referrer: String(document.referrer), //Where visitor has come from
			cookieName: 'cb-enabled' //Name of the cookie
		};
		var options = $.extend(defaults,options);
		
		//Sets expiration date for cookie
		var expireDate = new Date();
		expireDate.setTime(expireDate.getTime()+(options.expireDays*86400000));
		expireDate = expireDate.toGMTString();
		
		var cookieEntry = options.cookieName+'={value}; expires='+expireDate+'; path=/';
		
		//Retrieves current cookie preference
		var i,cookieValue='',aCookie,aCookies=document.cookie.split('; ');
		for (i=0;i<aCookies.length;i++){
			aCookie = aCookies[i].split('=');
			if(aCookie[0]==options.cookieName){
    			cookieValue = aCookie[1];
			}
		}
		//Sets up default cookie preference if not already set
		if(cookieValue=='' && doReturn!='cookies' && options.autoEnable){
			cookieValue = 'enabled';
			document.cookie = cookieEntry.replace('{value}','enabled');
		}else if((cookieValue=='accepted' || cookieValue=='declined') && doReturn!='cookies' && options.renewOnVisit){
			document.cookie = cookieEntry.replace('{value}',cookieValue);
		}
		if(options.acceptOnContinue){
			if(options.referrer.indexOf(options.domain)>=0 && String(window.location.href).indexOf(options.policyURL)==-1 && doReturn!='cookies' && doReturn!='set' && cookieValue!='accepted' && cookieValue!='declined'){
				doReturn = 'set';
				val = 'accepted';
			}
		}
		if(doReturn=='cookies'){
			//Returns true if cookies are enabled, false otherwise
			if(cookieValue=='enabled' || cookieValue=='accepted'){
				return true;
			}else{
				return false;
			}
		}else if(doReturn=='set' && (val=='accepted' || val=='declined')){
			//Sets value of cookie to 'accepted' or 'declined'
			document.cookie = cookieEntry.replace('{value}',val);
			if(val=='accepted'){
				return true;
			}else{
				return false;
			}
		}else{
			//Sets up enable/accept button if required
			var message = options.message.replace('{policy_url}',options.policyURL);
			
			if(options.acceptButton){
				var acceptButton = '<a href="" class="cb-enable">'+options.acceptText+'</a>';
			}else{
				var acceptButton = '';
			}
			//Sets up disable/decline button if required
			if(options.declineButton){
				var declineButton = '<a href="" class="cb-disable">'+options.declineText+'</a>';
			}else{
				var declineButton = '';
			}
			//Sets up privacy policy button if required
			if(options.policyButton){
				var policyButton = '<a href="'+options.policyURL+'" class="cb-policy">'+options.policyText+'</a>';
			}else{
				var policyButton = '';
			}
			//Whether to add "fixed" class to cookie bar
			if(options.fixed){
				if(options.bottom){
					var fixed = ' class="fixed bottom"';
				}else{
					var fixed = ' class="fixed"';
				}
			}else{
				var fixed = '';
			}
			if(options.zindex!=''){
				var zindex = ' style="z-index:'+options.zindex+';"';
			}else{
				var zindex = '';
			}
			
			//Displays the cookie bar if arguments met
			if(options.forceShow || cookieValue=='enabled' || cookieValue==''){
				if(options.append){
					$(options.element).append('<div id="cookie-bar"'+fixed+zindex+'><p>'+message+acceptButton+declineButton+policyButton+'</p></div>');
				}else{
					$(options.element).prepend('<div id="cookie-bar"'+fixed+zindex+'><p>'+message+acceptButton+declineButton+policyButton+'</p></div>');
				}
			}
			
			var removeBar = function(func){
				if(options.acceptOnScroll) $(document).off('scroll');
				if(typeof(func)==='function') func(cookieValue);
				if(options.effect=='slide'){
					$('#cookie-bar').slideUp(300,function(){$('#cookie-bar').remove();});
				}else if(options.effect=='fade'){
					$('#cookie-bar').fadeOut(300,function(){$('#cookie-bar').remove();});
				}else{
					$('#cookie-bar').hide(0,function(){$('#cookie-bar').remove();});
				}
				$(document).unbind('click',anyClick);
			};
			var cookieAccept = function(){
				document.cookie = cookieEntry.replace('{value}','accepted');
				removeBar(options.acceptFunction);
			};
			var cookieDecline = function(){
				var deleteDate = new Date();
				deleteDate.setTime(deleteDate.getTime()-(864000000));
				deleteDate = deleteDate.toGMTString();
				aCookies=document.cookie.split('; ');
				for (i=0;i<aCookies.length;i++){
					aCookie = aCookies[i].split('=');
					if(aCookie[0].indexOf('_')>=0){
						document.cookie = aCookie[0]+'=0; expires='+deleteDate+'; domain='+options.domain.replace('www','')+'; path=/';
					}else{
						document.cookie = aCookie[0]+'=0; expires='+deleteDate+'; path=/';
					}
				}
				document.cookie = cookieEntry.replace('{value}','declined');
				removeBar(options.declineFunction);
			};
			var anyClick = function(e){
				if(!$(e.target).hasClass('cb-policy')) cookieAccept();
			};
			
			$('#cookie-bar .cb-enable').click(function(){cookieAccept();return false;});
			$('#cookie-bar .cb-disable').click(function(){cookieDecline();return false;});
			if(options.acceptOnScroll){
				var scrollStart = $(document).scrollTop(),scrollNew,scrollDiff;
				$(document).on('scroll',function(){
					scrollNew = $(document).scrollTop();
					if(scrollNew>scrollStart){
						scrollDiff = scrollNew - scrollStart;
					}else{
						scrollDiff = scrollStart - scrollNew;
					}
					if(scrollDiff>=Math.round(options.acceptOnScroll)) cookieAccept();
				});
			}
			if(options.acceptAnyClick){
				$(document).bind('click',anyClick);
			}
		}
	};
})(jQuery);// file: swfobject.js
/*	SWFObject v2.2 <http://code.google.com/p/swfobject/> 
	is released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/
var swfobject=function(){var D="undefined",r="object",S="Shockwave Flash",W="ShockwaveFlash.ShockwaveFlash",q="application/x-shockwave-flash",R="SWFObjectExprInst",x="onreadystatechange",O=window,j=document,t=navigator,T=false,U=[h],o=[],N=[],I=[],l,Q,E,B,J=false,a=false,n,G,m=true,M=function(){var aa=typeof j.getElementById!=D&&typeof j.getElementsByTagName!=D&&typeof j.createElement!=D,ah=t.userAgent.toLowerCase(),Y=t.platform.toLowerCase(),ae=Y?/win/.test(Y):/win/.test(ah),ac=Y?/mac/.test(Y):/mac/.test(ah),af=/webkit/.test(ah)?parseFloat(ah.replace(/^.*webkit\/(\d+(\.\d+)?).*$/,"$1")):false,X=!+"\v1",ag=[0,0,0],ab=null;if(typeof t.plugins!=D&&typeof t.plugins[S]==r){ab=t.plugins[S].description;if(ab&&!(typeof t.mimeTypes!=D&&t.mimeTypes[q]&&!t.mimeTypes[q].enabledPlugin)){T=true;X=false;ab=ab.replace(/^.*\s+(\S+\s+\S+$)/,"$1");ag[0]=parseInt(ab.replace(/^(.*)\..*$/,"$1"),10);ag[1]=parseInt(ab.replace(/^.*\.(.*)\s.*$/,"$1"),10);ag[2]=/[a-zA-Z]/.test(ab)?parseInt(ab.replace(/^.*[a-zA-Z]+(.*)$/,"$1"),10):0}}else{if(typeof O.ActiveXObject!=D){try{var ad=new ActiveXObject(W);if(ad){ab=ad.GetVariable("$version");if(ab){X=true;ab=ab.split(" ")[1].split(",");ag=[parseInt(ab[0],10),parseInt(ab[1],10),parseInt(ab[2],10)]}}}catch(Z){}}}return{w3:aa,pv:ag,wk:af,ie:X,win:ae,mac:ac}}(),k=function(){if(!M.w3){return}if((typeof j.readyState!=D&&j.readyState=="complete")||(typeof j.readyState==D&&(j.getElementsByTagName("body")[0]||j.body))){f()}if(!J){if(typeof j.addEventListener!=D){j.addEventListener("DOMContentLoaded",f,false)}if(M.ie&&M.win){j.attachEvent(x,function(){if(j.readyState=="complete"){j.detachEvent(x,arguments.callee);f()}});if(O==top){(function(){if(J){return}try{j.documentElement.doScroll("left")}catch(X){setTimeout(arguments.callee,0);return}f()})()}}if(M.wk){(function(){if(J){return}if(!/loaded|complete/.test(j.readyState)){setTimeout(arguments.callee,0);return}f()})()}s(f)}}();function f(){if(J){return}try{var Z=j.getElementsByTagName("body")[0].appendChild(C("span"));Z.parentNode.removeChild(Z)}catch(aa){return}J=true;var X=U.length;for(var Y=0;Y<X;Y++){U[Y]()}}function K(X){if(J){X()}else{U[U.length]=X}}function s(Y){if(typeof O.addEventListener!=D){O.addEventListener("load",Y,false)}else{if(typeof j.addEventListener!=D){j.addEventListener("load",Y,false)}else{if(typeof O.attachEvent!=D){i(O,"onload",Y)}else{if(typeof O.onload=="function"){var X=O.onload;O.onload=function(){X();Y()}}else{O.onload=Y}}}}}function h(){if(T){V()}else{H()}}function V(){var X=j.getElementsByTagName("body")[0];var aa=C(r);aa.setAttribute("type",q);var Z=X.appendChild(aa);if(Z){var Y=0;(function(){if(typeof Z.GetVariable!=D){var ab=Z.GetVariable("$version");if(ab){ab=ab.split(" ")[1].split(",");M.pv=[parseInt(ab[0],10),parseInt(ab[1],10),parseInt(ab[2],10)]}}else{if(Y<10){Y++;setTimeout(arguments.callee,10);return}}X.removeChild(aa);Z=null;H()})()}else{H()}}function H(){var ag=o.length;if(ag>0){for(var af=0;af<ag;af++){var Y=o[af].id;var ab=o[af].callbackFn;var aa={success:false,id:Y};if(M.pv[0]>0){var ae=c(Y);if(ae){if(F(o[af].swfVersion)&&!(M.wk&&M.wk<312)){w(Y,true);if(ab){aa.success=true;aa.ref=z(Y);ab(aa)}}else{if(o[af].expressInstall&&A()){var ai={};ai.data=o[af].expressInstall;ai.width=ae.getAttribute("width")||"0";ai.height=ae.getAttribute("height")||"0";if(ae.getAttribute("class")){ai.styleclass=ae.getAttribute("class")}if(ae.getAttribute("align")){ai.align=ae.getAttribute("align")}var ah={};var X=ae.getElementsByTagName("param");var ac=X.length;for(var ad=0;ad<ac;ad++){if(X[ad].getAttribute("name").toLowerCase()!="movie"){ah[X[ad].getAttribute("name")]=X[ad].getAttribute("value")}}P(ai,ah,Y,ab)}else{p(ae);if(ab){ab(aa)}}}}}else{w(Y,true);if(ab){var Z=z(Y);if(Z&&typeof Z.SetVariable!=D){aa.success=true;aa.ref=Z}ab(aa)}}}}}function z(aa){var X=null;var Y=c(aa);if(Y&&Y.nodeName=="OBJECT"){if(typeof Y.SetVariable!=D){X=Y}else{var Z=Y.getElementsByTagName(r)[0];if(Z){X=Z}}}return X}function A(){return !a&&F("6.0.65")&&(M.win||M.mac)&&!(M.wk&&M.wk<312)}function P(aa,ab,X,Z){a=true;E=Z||null;B={success:false,id:X};var ae=c(X);if(ae){if(ae.nodeName=="OBJECT"){l=g(ae);Q=null}else{l=ae;Q=X}aa.id=R;if(typeof aa.width==D||(!/%$/.test(aa.width)&&parseInt(aa.width,10)<310)){aa.width="310"}if(typeof aa.height==D||(!/%$/.test(aa.height)&&parseInt(aa.height,10)<137)){aa.height="137"}j.title=j.title.slice(0,47)+" - Flash Player Installation";var ad=M.ie&&M.win?"ActiveX":"PlugIn",ac="MMredirectURL="+O.location.toString().replace(/&/g,"%26")+"&MMplayerType="+ad+"&MMdoctitle="+j.title;if(typeof ab.flashvars!=D){ab.flashvars+="&"+ac}else{ab.flashvars=ac}if(M.ie&&M.win&&ae.readyState!=4){var Y=C("div");X+="SWFObjectNew";Y.setAttribute("id",X);ae.parentNode.insertBefore(Y,ae);ae.style.display="none";(function(){if(ae.readyState==4){ae.parentNode.removeChild(ae)}else{setTimeout(arguments.callee,10)}})()}u(aa,ab,X)}}function p(Y){if(M.ie&&M.win&&Y.readyState!=4){var X=C("div");Y.parentNode.insertBefore(X,Y);X.parentNode.replaceChild(g(Y),X);Y.style.display="none";(function(){if(Y.readyState==4){Y.parentNode.removeChild(Y)}else{setTimeout(arguments.callee,10)}})()}else{Y.parentNode.replaceChild(g(Y),Y)}}function g(ab){var aa=C("div");if(M.win&&M.ie){aa.innerHTML=ab.innerHTML}else{var Y=ab.getElementsByTagName(r)[0];if(Y){var ad=Y.childNodes;if(ad){var X=ad.length;for(var Z=0;Z<X;Z++){if(!(ad[Z].nodeType==1&&ad[Z].nodeName=="PARAM")&&!(ad[Z].nodeType==8)){aa.appendChild(ad[Z].cloneNode(true))}}}}}return aa}function u(ai,ag,Y){var X,aa=c(Y);if(M.wk&&M.wk<312){return X}if(aa){if(typeof ai.id==D){ai.id=Y}if(M.ie&&M.win){var ah="";for(var ae in ai){if(ai[ae]!=Object.prototype[ae]){if(ae.toLowerCase()=="data"){ag.movie=ai[ae]}else{if(ae.toLowerCase()=="styleclass"){ah+=' class="'+ai[ae]+'"'}else{if(ae.toLowerCase()!="classid"){ah+=" "+ae+'="'+ai[ae]+'"'}}}}}var af="";for(var ad in ag){if(ag[ad]!=Object.prototype[ad]){af+='<param name="'+ad+'" value="'+ag[ad]+'" />'}}aa.outerHTML='<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"'+ah+">"+af+"</object>";N[N.length]=ai.id;X=c(ai.id)}else{var Z=C(r);Z.setAttribute("type",q);for(var ac in ai){if(ai[ac]!=Object.prototype[ac]){if(ac.toLowerCase()=="styleclass"){Z.setAttribute("class",ai[ac])}else{if(ac.toLowerCase()!="classid"){Z.setAttribute(ac,ai[ac])}}}}for(var ab in ag){if(ag[ab]!=Object.prototype[ab]&&ab.toLowerCase()!="movie"){e(Z,ab,ag[ab])}}aa.parentNode.replaceChild(Z,aa);X=Z}}return X}function e(Z,X,Y){var aa=C("param");aa.setAttribute("name",X);aa.setAttribute("value",Y);Z.appendChild(aa)}function y(Y){var X=c(Y);if(X&&X.nodeName=="OBJECT"){if(M.ie&&M.win){X.style.display="none";(function(){if(X.readyState==4){b(Y)}else{setTimeout(arguments.callee,10)}})()}else{X.parentNode.removeChild(X)}}}function b(Z){var Y=c(Z);if(Y){for(var X in Y){if(typeof Y[X]=="function"){Y[X]=null}}Y.parentNode.removeChild(Y)}}function c(Z){var X=null;try{X=j.getElementById(Z)}catch(Y){}return X}function C(X){return j.createElement(X)}function i(Z,X,Y){Z.attachEvent(X,Y);I[I.length]=[Z,X,Y]}function F(Z){var Y=M.pv,X=Z.split(".");X[0]=parseInt(X[0],10);X[1]=parseInt(X[1],10)||0;X[2]=parseInt(X[2],10)||0;return(Y[0]>X[0]||(Y[0]==X[0]&&Y[1]>X[1])||(Y[0]==X[0]&&Y[1]==X[1]&&Y[2]>=X[2]))?true:false}function v(ac,Y,ad,ab){if(M.ie&&M.mac){return}var aa=j.getElementsByTagName("head")[0];if(!aa){return}var X=(ad&&typeof ad=="string")?ad:"screen";if(ab){n=null;G=null}if(!n||G!=X){var Z=C("style");Z.setAttribute("type","text/css");Z.setAttribute("media",X);n=aa.appendChild(Z);if(M.ie&&M.win&&typeof j.styleSheets!=D&&j.styleSheets.length>0){n=j.styleSheets[j.styleSheets.length-1]}G=X}if(M.ie&&M.win){if(n&&typeof n.addRule==r){n.addRule(ac,Y)}}else{if(n&&typeof j.createTextNode!=D){n.appendChild(j.createTextNode(ac+" {"+Y+"}"))}}}function w(Z,X){if(!m){return}var Y=X?"visible":"hidden";if(J&&c(Z)){c(Z).style.visibility=Y}else{v("#"+Z,"visibility:"+Y)}}function L(Y){var Z=/[\\\"<>\.;]/;var X=Z.exec(Y)!=null;return X&&typeof encodeURIComponent!=D?encodeURIComponent(Y):Y}var d=function(){if(M.ie&&M.win){window.attachEvent("onunload",function(){var ac=I.length;for(var ab=0;ab<ac;ab++){I[ab][0].detachEvent(I[ab][1],I[ab][2])}var Z=N.length;for(var aa=0;aa<Z;aa++){y(N[aa])}for(var Y in M){M[Y]=null}M=null;for(var X in swfobject){swfobject[X]=null}swfobject=null})}}();return{registerObject:function(ab,X,aa,Z){if(M.w3&&ab&&X){var Y={};Y.id=ab;Y.swfVersion=X;Y.expressInstall=aa;Y.callbackFn=Z;o[o.length]=Y;w(ab,false)}else{if(Z){Z({success:false,id:ab})}}},getObjectById:function(X){if(M.w3){return z(X)}},embedSWF:function(ab,ah,ae,ag,Y,aa,Z,ad,af,ac){var X={success:false,id:ah};if(M.w3&&!(M.wk&&M.wk<312)&&ab&&ah&&ae&&ag&&Y){w(ah,false);K(function(){ae+="";ag+="";var aj={};if(af&&typeof af===r){for(var al in af){aj[al]=af[al]}}aj.data=ab;aj.width=ae;aj.height=ag;var am={};if(ad&&typeof ad===r){for(var ak in ad){am[ak]=ad[ak]}}if(Z&&typeof Z===r){for(var ai in Z){if(typeof am.flashvars!=D){am.flashvars+="&"+ai+"="+Z[ai]}else{am.flashvars=ai+"="+Z[ai]}}}if(F(Y)){var an=u(aj,am,ah);if(aj.id==ah){w(ah,true)}X.success=true;X.ref=an}else{if(aa&&A()){aj.data=aa;P(aj,am,ah,ac);return}else{w(ah,true)}}if(ac){ac(X)}})}else{if(ac){ac(X)}}},switchOffAutoHideShow:function(){m=false},ua:M,getFlashPlayerVersion:function(){return{major:M.pv[0],minor:M.pv[1],release:M.pv[2]}},hasFlashPlayerVersion:F,createSWF:function(Z,Y,X){if(M.w3){return u(Z,Y,X)}else{return undefined}},showExpressInstall:function(Z,aa,X,Y){if(M.w3&&A()){P(Z,aa,X,Y)}},removeSWF:function(X){if(M.w3){y(X)}},createCSS:function(aa,Z,Y,X){if(M.w3){v(aa,Z,Y,X)}},addDomLoadEvent:K,addLoadEvent:s,getQueryParamValue:function(aa){var Z=j.location.search||j.location.hash;if(Z){if(/\?/.test(Z)){Z=Z.split("?")[1]}if(aa==null){return L(Z)}var Y=Z.split("&");for(var X=0;X<Y.length;X++){if(Y[X].substring(0,Y[X].indexOf("="))==aa){return L(Y[X].substring((Y[X].indexOf("=")+1)))}}}return""},expressInstallCallback:function(){if(a){var X=c(R);if(X&&l){X.parentNode.replaceChild(l,X);if(Q){w(Q,true);if(M.ie&&M.win){l.style.display="block"}}if(E){E(B)}}a=false}}}}();// file: functions.js
// JavaScript Document

var wrc = {},
    marginYearHeader = 0,
    hash = window.location.hash ? window.location.hash.substring(1).split(',') : undefined,
    liveNavigation = [
        {
            "en": "Overall",
            "de": "Gesamt",
            "es": "Total",
            "fr": "Général"
        },
        {
            "en": "Split Times",
            "de": "Zwischenzeiten",
            "es": "Splits",
            "fr": "Temps Partiels"
        },
        {
            "en": "Stage Times",
            "de": "WP-Zeiten",
            "es": "Tiempos",
            "fr": "Temps des Es"
        },
        {
            "en": "Stagewinners",
            "de": "Etappensieger",
            "es": "Ganadores de Tramos",
            "fr": "Vainqueurs des Es"
        },
        {
            "en": "Itinerary",
            "de": "Zeitplan",
            "es": "Itinerario",
            "fr": "Itinéraire"
        },
        {
            "en": "Startlists",
            "de": "Startlisten",
            "es": "Orden de Salidas",
            "fr": "Ordres"
        },
        {
            "en": "Penalties",
            "de": "Strafen",
            "es": "Penalizaciones",
            "fr": "Pénalités"
        },
        {
            "en": "Retirements",
            "de": "Ausfälle",
            "es": "Abandonos",
            "fr": "Abandons"
        },
        {
            "en": "Championship Standings",
            "de": "WM-Stand",
            "es": "Puntos del Campeonato",
            "fr": "Points au Championnat"
        },
    ],
    resultsNavigation = [
        {
            "en": "Overall",
            "de": "Gesamt",
            "es": "Total",
            "fr": "Général"
        },
        {
            "en": "Split Times",
            "de": "Zwischenzeiten",
            "es": "Splits",
            "fr": "Temps Partiels"
        },
        {
            "en": "Stage Times",
            "de": "WP-Zeiten",
            "es": "Tiempos",
            "fr": "Temps des Es"
        },
        {
            "en": "Results",
            "de": "Ergebnisse",
            "es": "Resultados",
            "fr": "Résultats"
        },
        {
            "en": "Itinerary",
            "de": "Zeitplan",
            "es": "Itinerario",
            "fr": "Itinéraire"
        },
        {
            "en": "Startlist",
            "de": "Startliste",
            "es": "Orden de Salidas",
            "fr": "Vainquers/Ordres"
        },
        {
            "en": "Penalties",
            "de": "Strafen",
            "es": "Penalizaciones",
            "fr": "Pénalités"
        },
        {
            "en": "Retirements",
            "de": "Ausfälle",
            "es": "Abandonos",
            "fr": "Abandons"
        },
        {
            "en": "Drivers",
            "de": "Fahrer",
            "es": "Pilotos",
            "fr": "Pilotes"
        },
        {
            "en": "Co-Drivers",
            "de": "Beifahrer",
            "es": "Copilotos",
            "fr": "Co-Pilotes"
        },
        {
            "en": "WRC Manufactures",
            "de": "WRC Manufactures",
            "es": "WRC Manufactures",
            "fr": "WRC Manufactures"
        },
        {
            "en": "Archive",
            "de": "Archiv",
            "es": "Archive",
            "fr": "Archive"
        }
    ],
    resultsRallyNavigation = [
        {
            "en": "Championship Standings",
            "de": "WM-Stand",
            "es": "Clasificacón",
            "fr": "Classements"
        },
        {
            "en": "Select Rally:",
            "de": "Rally wechseln:",
            "es": "Seleccione Rallye",
            "fr": "Choix du Rallye:"
        }
    ];

if (hash != undefined) {
    //check if array contains key/value pair
    $.each(hash, function (index, value) {
        if (value.indexOf('=') >= 0) {
            var parts = value.split('=');
            hash[parts[0]] = parts[1]; //add key/value pair to array
            hash.splice(index, 1); //remove original element from array
        }
    });
}

//write pageOverlay div if page is used external
if (window.location.hash && $.inArray("wrcLiveExternal", hash) != -1) {
    document.write('<div id="pageOverlay" style="position: fixed; padding: 0; margin: 0; top: 0; left: 0; width: 100%; height: 100%; background-color: white; z-index: 1000"></div>');
}

(function () {

    wrc.settings = {};

    wrc.preview = window.location.pathname.indexOf("gen_pages") !== -1 || window.location.pathname.indexOf("gen_slideshows") !== -1;
    wrc.image_path = wrc.preview ? '../www_de/img/' : '/img/';

    wrc.ui = {};
    wrc.init = function () {
        wrc.ui.init();
    };

    wrc.ui.aufmacher = {};
    wrc.ui.aufmacherArchiv = {};
    wrc.ui.videocenter = {};
    wrc.ui.navi = {};
    wrc.ui.socialshare = {};

    wrc.ui.socialbox = {};
    wrc.ui.socialbox_driver = {};
    wrc.ui.related = {};
    wrc.ui.gallery = {
        year: null,
        rally: null,
        teams: null,
        drivers: null,
        active: null,
        length: null,
        offset: 0,
        limit: null,
        images: null,
        path: null,
        scrollappend: false
    };
    wrc.ui.newsverteil = {};
    wrc.ui.podcasts = {};
    wrc.ui.newsletter = {};
    wrc.ui.calendarmap = {};
    wrc.ui.liveticker = {};
    wrc.ui.resize_datasite = {};
    wrc.ui.external = {};

    wrc.ui.init = function () {
        $(document).ready(function () {

            wrc.settings.lang = $("#lang").val();

            wrc.ui.aufmacher.init();
            wrc.ui.aufmacherArchiv.init();
            wrc.ui.navi.init();
            wrc.ui.socialshare.init();
            wrc.ui.socialbox.init();
            wrc.ui.gallery.init();
            wrc.ui.related.init();
            wrc.ui.newsverteil.init();
            wrc.ui.podcasts.init();
            wrc.ui.newsletter.init();
            wrc.ui.calendarmap.init();
            wrc.ui.liveticker.init();
            wrc.ui.resize_datasite.init();
            wrc.ui.videocenter.init();

            var messages = {
                EN: 'We use cookies to improve your online experience.  For information on the cookies we use and for details on how we process your personal information, please see our <a href="http://www.wrc.com/en/footer/information/privacy-policy/cookie-policy/page/3208----.html" target="_blank">Cookie Policy</a> and <a href="http://www.wrc.com/en/footer/information/privacy-policy/page/688----.html" target="_blank">Privacy Policy</a>. By continuing to use our website you consent to us using cookies.',
                ENupdate: 'WE HAVE RECENTLY UPDATED OUR PRIVACY AND COOKIE POLICY.<br /><br />Please click <a href="http://www.wrc.com/en/footer/information/privacy-policy/page/688----.html" target="_blank">here</a> to review our updated <b>Privacy</b> and <b>Cookie Policy</b>.',
                ES: 'Este sitio web utiliza ‘cookies’ con fines publicitarios, de redes sociales y analíticos. Si desea conocer qué tipo de ‘cookies’ utilizamos y cómo cambiar los ajustes de configuración de las mismas, haga clic <a href="http://www.wrc.com/es/footer/information/privacy-policy/cookie-policy/page/3208----.html" target="_blank">aquí</a>. Su navegación continuada por este sitio web constituirá la aceptación por su parte del uso que hagamos de las ‘cookies’.',
                ESupdate: 'HEMOS ACTUALIZADO RECIENTEMENTE NUESTRAS <b>POLÍTICAS DE PRIVACIDAD</b> Y DE USO DE <b>"COOKIES"</b>.<br /><br />Haz clic <a href="http://www.wrc.com/es/footer/information/privacy-policy/page/688----.html" target="_blank">aquí</a> para verlas.',
                FR: 'Ce site web utilise des cookies, notamment �  des fins publicitaires, liés �  votre utilisation des réseaux sociaux et �  des fins d´analyse. Pour savoir quels cookies nous utilisons et pour modifier vos paramètres en la matière, cliquez <a href="http://www.wrc.com/fr/footer/information/privacy-policy/cookie-policy/page/3208----.html" target="_blank">ici</a>. En continuant d´utiliser ce site Web, vous acceptez l´utilisation que nous faisons des cookies.',
                FRupdate: 'NOUS AVONS RECEMMENT MIS A JOUR NOTRE <b>POLITIQUE DE CONFIDENTIALITE</b> ET NOTRE <b>POLITIQUE DE COOKIES</b>.<br /><br />Veuillez cliquer <a href="http://www.wrc.com/fr/footer/information/privacy-policy/page/688----.html" target="_blank">ici</a> afin de consulter la mise �  jour de notre politique de Confidentialité et notre politique de Cookies.'
            };

            if ((document.referrer.indexOf(window.location.host) === -1 || document.referrer.match(/wrc.*\/vs\//) !== null)
                && window.location.pathname.match(/\/vs\//) === null
                && window.location.pathname.match(/\/app-wv\//) === null
                && $.inArray("wrcLiveExternal", hash) == -1) {
                $.cookieBar({
                    message: (window.location.search == '?update') ? messages[wrc.settings.lang + "update"] : messages[wrc.settings.lang],
                    //message: messages[wrc.settings.lang+"update"],
                    acceptText: 'X',
                    renewOnVisit: true,
                    fixed: true,
                    zindex: '100',
                    cookieName: 'cb-enabled-20160207'
                });
            }

            wrc.ui.external.init();

            /** ready **/
            $('.frontpage-livecenter li.contentnav-right').hide();

            //$(document).find('.frontpage-livecenter').on('click', '.contentnav>li>a', function (e) {
            //    e.preventDefault();
            //    var $link = $(this);
            //    var url = $link.attr('href');
            //    $(document).find('.frontpage-livecenter .contentnav').remove();
            //    LiveCenter.loadHtmlAndReplaceWith(url, $(document).find('#datasite'));
            //    $('.frontpage-livecenter li.contentnav-right').hide();
            //});
            //
            //$(document).find('.frontpage-livecenter').on('change', 'form>select', function (e) {
            //    e.preventDefault();
            //    var $link = $(this);
            //    var url = $link.val();
            //    $(document).find('.frontpage-livecenter .contentnav').remove();
            //    LiveCenter.loadHtmlAndReplaceWith(url, $(document).find('#datasite'));
            //    $('.frontpage-livecenter li.contentnav-right').hide();
            //});
        });

        $(document).tooltip();
    };

    wrc.ui.related.init = function () {
        if ($("#relarticle_" + $("#tree").val()).length) {
            $("#relarticle_" + $("#tree").val()).hide();
        } else if ($(".relarticle").length > 5) {
            $(".relarticle").last().hide();
        }
    };

    wrc.ui.socialshare.init = function () {
        if ($('#socialshareprivacy').length) {
            $('#socialshareprivacy').socialSharePrivacy({
                services: {
                    facebook: {
                        'dummy_img': wrc.image_path + 'socialshare/dummy_facebook_en.png'
                    },
                    twitter: {
                        'dummy_img': wrc.image_path + 'socialshare/dummy_twitter.png'
                    },
                    gplus: {
                        'dummy_img': wrc.image_path + 'socialshare/dummy_gplus.png'
                    }
                }
            });
            switchmetaboxinfo();
        }

        // send with email
        $("a[class='smarticon email']").attr("href", "mailto:?body=" + location.href);
    };

    wrc.ui.gallery.init = function () {
        if ($("#gallery").length) {
            this.path = wrc.preview ? '../www_de/service/' : '/service/';
            galleryurl = window.location.href;
            ext = galleryurl.indexOf(".php") > 0 ? ".php" : ".html";
            galleryurl = galleryurl.split(ext);

            // Wenn Parameter mitgegeben
            if (galleryurl.length > 1) {
                galleryurl[1] = galleryurl[1].replace("?", "");
                galleryurl = galleryurl[1].split("&");
                for (i = 0; i < galleryurl.length; i++) {
                    pair = galleryurl[i].split("=");
                    if (pair[0] == "year") {
                        this.year = pair[1];
                    }
                    if (pair[0] == "rally") {
                        this.rally = pair[1];
                    }
                    if (pair[0] == "teams") {
                        this.teams = pair[1];
                    }
                    if (pair[0] == "drivers") {
                        this.drivers = pair[1];
                    }
                }
            }
            this.load();

            // Naechstes/Voriges oder Klick auf bestimmtes Image
            that = this;
            $(document).on("click", ".diashow_thumbs .paging .next, .diashow_thumbs .paging .prev, .gallery_teaser", function () {
                if ($(this).hasClass("next")) {
                    that.active++;
                } else if ($(this).hasClass("prev")) {
                    that.active--;
                } else if ($(this).hasClass("gallery_teaser")) {
                    that.active = parseInt($(this).attr("data-no"));
                }

                that.changeActive();
            });

            // Klick auf Image-Tag
            $(document).on("click", ".tag", function () {
                rubrics = new Array("year", "rally", "teams", "drivers");
                tagtype = $(this).attr("data-type");
                tagval = $(this).attr("data-tag");

                change = false;
                for (i = 0; i < rubrics.length; i++) {

                    // wenn rubrik == tagrubruk & ungleich aktuellem value der tag-rubrik
                    if ((tagtype == rubrics[i] && tagval != that[rubrics[i]])) {
                        change = true;
                        // wenn rubrik != tagrubrik & rubrik nicht null
                    } else if ((tagtype != rubrics[i] && that[rubrics[i]] !== null)) {
                        change = true;
                    }
                }

                if (change) {
                    that.year = that.rally = that.teams = that.drivers = null;
                    that.offset = 0;
                    that[$(this).attr("data-type")] = $(this).attr("data-tag");
                    that.load();
                }
            });
        }
    };

    // Laden einer Gallerie mit ausgewaehlten Rubriken
    wrc.ui.gallery.load = function () {
        that = this;

        var isAppWv = 0;
        // check if we are in an app-webview
        if ($(location).attr('href').indexOf('/app-wv/') !== -1) {
            isAppWv = 1;
        }

        $.get(this.path + "gallery.php", {
            appwv: isAppWv,
            offset: this.offset,
            year: this.year,
            rally: this.rally,
            teams: this.teams,
            drivers: this.drivers,
            lang: $("#lang").val()
        }, function (data) {
            data = $.parseJSON(data);

            // Wenn Images vorhanden

            if (data.error) {
                alert(data.msg);
            } else if (data.images.length) {
                // set limit
                if (that.limit === null) {
                    that.limit = data.limit;
                }

                //set default year if necessary
                if (data.defrubr.use) {
                    that.year = data.defrubr.year;
                }

                that.active = 0;
                that.images = data.images;
                that.length = data.sumimages;
                $("#gallery").html(data.out);
                wrc.ui.socialshare.init();
                // Scrollbar
                if ($('.scrollcontent').length) {
                    that.loadScrollbar();
                }
            } else {
                alert("We're sorry, please try again");
            }
        }).done(function () {
            if (window.location.hash && $.inArray("gallery", hash) != -1) {
                //keep code in case page has to be full width
                /*$('.diashow_thumbs').css('width', 'auto');
                 $("#gallery h1").css('margin-left', marginYearHeader + 'px');*/
            }
        });
    };

    // Aktives Image aendern
    wrc.ui.gallery.changeActive = function () {
        $(".gallery_teaser").removeClass("active");

        if (this.active == this.length) {
            this.active = this.length - 1;
        } else if (wrc.ui.gallery.active == -1) {
            this.active = 0;
        }

        if ((this.active + 3) >= this.images.length && (this.active + this.limit) <= this.length) {
            this.appendImages();
        } else {
            this.loadInfo();
        }
    };

    // Ladet Daten zum aktiven Image
    wrc.ui.gallery.loadInfo = function () {
        active = this.active;
        length = this.length;

        $(".gallery_teaser[data-no='" + active + "']").addClass("active");

        // Festlegen der Scroll-Position
        scroll_id = active;
        if (scroll_id <= 2) {
            scroll_id = 0;
        } else {
            scroll_id -= 2;
        }

        if (wrc.ui.gallery.scrollappend) {
            scroll_id = this.scrollappend - 3;
            this.scrollappend = false;
        }

        scroll_id = "#teaser_" + scroll_id;
        $(".scrollcontent").mCustomScrollbar("scrollTo", scroll_id);

        // Image Wechsel
        act_image = this.images[active];
        $(".bigpic img").attr("src", act_image.src_big);

        // Laden der Infobox
        $(".smarticon.date").html(act_image.sec_time);
        if (act_image.source !== null) {
            $(".smarticon.copy a").html(act_image.source);
            $(".smarticon.copy").parent().show();
        } else {
            $(".smarticon.copy").parent().hide();
        }

        tags = $(".smarticon.tags").clone();
        parenttag = $(".smarticon.tags").parent();
        parenttag.empty();
        parenttag.append(tags);
        $(".smarticon.tags").after(act_image.tags);
        $(".nr strong").html(active + 1);
    };

    // Ladet die Custom Scrollbar
    wrc.ui.gallery.loadScrollbar = function () {
        that = this;

        $(".scrollcontent").mCustomScrollbar({
            horizontalScroll: true,
            scrollButtons: {
                enable: true
            },
            advanced: {
                updateOnContentResize: true,
                updateOnBrowserResize: true
            },
            callbacks: {
                onTotalScroll: function () {
                    that.scrollappend = that.images.length;
                    if (that.scrollappend < that.length) {
                        that.appendImages();
                    } else {
                        that.scrollappend = false;
                    }
                }
            }
        });
    };

    // Haengt die Images in die Gallery an
    wrc.ui.gallery.appendImages = function () {
        that = this;
        this.offset += this.limit;
        $.get(this.path + "gallery.php", {
            offset: this.offset,
            year: this.year,
            rally: this.rally,
            teams: this.teams,
            drivers: this.drivers
        }, function (data) {
            data = $.parseJSON(data);
            for (i = 0; i < data.images.length; i++) {
                that.images.push(data.images[i]);
            }
            $(".scrollcontent ul").append(data.teaser);
            teaser_ul = $(".scrollcontent ul").clone();
            $(".scrollcontent").html(teaser_ul);
            that.loadScrollbar();
            that.loadInfo();
        });
    };

    // Submit der ausgewaehlten Rubriken
    wrc.ui.gallery.checkSelects = function () {
        that = this;
        changes = false;
        $("#gallery_select select").each(function () {
            value = $(this).val().length ? $(this).val() : null;
            if (that[$(this).attr("name")] != value) {
                that[$(this).attr("name")] = value;
                changes = true;
            }
        });

        if (changes) {
            this.offset = 0;
            this.load();
        }
    };

    wrc.ui.aufmacher.init = function () {
        if ($(".aufmacher.start").length) {
            $(".aufmacher.start").slick({
                arrows: true,
                dots: true,
                autoplay: true,
                autoplaySpeed: 5000,
                responsive: [
                    { breakpoint: 1170,
                        settings: {
                            arrows: false
                        }
                    }                    
                ]
                    
                
            });
        }

    };

    wrc.ui.aufmacherArchiv.init = function() {
        if ($(".aufmacher-archiv").length) {
             wechsel_sec = 5;
             // Sekunden, bis automatisch gewechselt wird; kein Wechsel wenn der Mauszeiger über dem Aufmacher schwebt

             to = window.setTimeout(toggleAufmacher, wechsel_sec * 1000);

             // bei Klick Aufmacher wechseln
             $(document).on("click", ".aufmacher-archiv .thumbs a", function () {
                toggleAufmacher($(this));
                $(".aufmacher-archiv .thumbs a").removeClass("active");
                $(this).addClass("active");
             });

             // move on swipe
             $(".aufmacher-archiv .current").touchstac({
                 preventDefault: true,
                 tapToClick: true,
                 wipeRight: function (result) {
                 var pos = $(".aufmacher-archiv .thumbs div a.active").removeClass('active').first().parent().index();

                 pos = (pos - 1 + 40) % 4; // ensure module, prevent stupid remainder
                 var target = $(".aufmacher-archiv .thumbs div:eq(" + pos + ")").find('a:first').addClass('active');
                 toggleAufmacher(target);
                 },
                 wipeLeft: function (result) {
                     var pos = $(".aufmacher-archiv .thumbs div a.active").removeClass('active').first().parent().index();

                     pos = (pos + 1 + 40) % 4; // ensure module, prevent stupid remainder
                     var target = $(".aufmacher-archiv .thumbs div:eq(" + pos + ")").find('a:first').addClass('active');
                     toggleAufmacher(target);
                 }
             });
        }
    };

    wrc.ui.videocenter.init = function () {

        if ($("section.videocenter").length) {
            $("section.videocenter .all-videos").each(function () {
                $(this).slick({
                    arrows: true,
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    infinite: false,
                    responsive: [{
                        breakpoint: 1170,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                        {
                            breakpoint: 650,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }]
                });
            });

            $(document).find('.videocenter .cat-nav li:first a').trigger('click');
        }
    };
    wrc.ui.navi.init = function () {

        $(document).on("mouseover", "header .lang", function () {
            $("header   .lang li ul").css("display", "block");
        });

        $(document).on("mouseout", "header .lang", function () {
            $("header   .lang li ul").css("display", "none");
        });

        $(window).resize(function () {
            if ($(".wrapper").width() >= 960)
                $("header   .champ li ul").css("display", "block");
            else if ($(".wrapper").width() < 960)
                $("header   .champ li ul").css("display", "none");

            if ($(".wrapper").width() >= 480)
                $("header   .social li ul").css("display", "block");
            else if ($(".wrapper").width() < 480)
                $("header   .social li ul").css("display", "none");
        });

        $(document).on("mouseover", "header   .champ", function () {
            if ($(".wrapper").width() < 960)
                $("header   .champ li ul").css("display", "block");
        });

        $(document).on("mouseout", "header   .champ", function () {
            if ($(".wrapper").width() < 960)
                $("header   .champ li ul").css("display", "none");
        });

        $(document).on("mouseover", "header   .social", function () {
            if ($(".wrapper").width() < 480)
                $("header   .social li ul").css("display", "block");
        });

        $(document).on("mouseout", "header   .social", function () {
            if ($(".wrapper").width() < 480)
                $("header   .social li ul").css("display", "none");
        });


        $("nav > ul > li a").on("mouseover", function () {
            $(this).next().addClass("hide");
        });

        // Bei kleiner Aufloesung Menue auf- und zuklappen
        $("nav .wrapper > ul > li.menu").on("click", function () {
            $(this).nextAll().toggle();
        });


        $("nav .wrapper >ul >li >a").on("click", function () {
            $(this).parent().addClass("active");
            $("nav .wrapper >ul >li:not('.active') .dropdown").hide();
            $("nav .wrapper >ul >li").removeClass("active");
            console.log($(this).next(".dropdown"));
            $(this).next(".dropdown").toggle();

        });


        var tmp = location.pathname.split('/');
        // klasse markieren
        if (tmp[2] !== undefined) {
            $("  .champ li li a[href*='" + tmp[2] + "']").eq(0).parent().addClass(tmp[2] + " active");
        }
        // 1. menue-ebene
        if (tmp[3] !== undefined && $("#m_" + tmp[3] + "_2").length > 0) {
            $("#m_" + tmp[3] + "_2").addClass("active");
            if ($("#m_" + tmp[3] + "_2").next().length) {
                $("#m_" + tmp[3] + "_2").next().removeClass("hide");
                $("nav > ul").addClass("showsub");
            }
        }
        // 2. menue-ebene
        if (tmp[4] !== undefined && $("#m_" + tmp[4] + "_3").length > 0) {
            $("#m_" + tmp[4] + "_3").addClass("active");
            if ($("#m_" + tmp[4] + "_3").next().length > 0) {
                $("#m_" + tmp[4] + "_3").next().removeClass("hide");
                $("nav > ul").removeClass("showsub").addClass("showsub2");
            }
        }
        // 3. menue-ebene
        if (tmp[5] !== undefined) {
            $("#m_" + tmp[5] + "_4").addClass("active");
        }

        // Content Navi
        var cnav = $(".cn_" + $("#tree").val());
        if (cnav.length > 0) {
            cnav.addClass("active");
            cnav.closest(".contentnav").show();
        }

        box_changer("a[href^='/live-ticker']", "click", "a[href^='/live-ticker']", "href");
        box_changer("a[class='changeContent']", "click", "a[class='changeContent']", "href");
        box_changer("select[name='rally_id']", "change", "select[name='rally_id'] option:selected", "value");
        box_changer(".contentnav .category form>select", "change", ".contentnav .category form>select option:selected", "value");


    };

    wrc.ui.socialbox.init = function () {
        if ($(".socialbox").length) {
            $(".socialbox .boxnav li[class*='active'] a").each(function () {
                $(this).closest(".socialbox").find(".social_" + $(this).attr("class")).show();
            });

            window.fbAsyncInit = function () {
                FB.Event.subscribe('xfbml.render', function () {
                    $(".socialbox .boxnav li[class*='active'] a").each(function () {
                        if ($(this).attr("class") !== 'fb') {
                            var socialbox = $(this).closest(".socialbox");
                            socialbox.find('.social_fb').hide();
                        }
                    });
                });
            }

            $(document).on("click", ".socialbox .boxnav li a", function () {
                var socialbox = $(this).closest(".socialbox");
                socialbox.find(".socialmedia").hide();
                socialbox.find(".social_" + $(this).attr("class")).show();

                socialbox.find(".boxnav li").removeClass("active");
                socialbox.find(".nav_" + $(this).attr("class")).addClass("active");
            });
        }

        // driver
        if ($("#socialbox_driver").length) {
            wrc.ui.socialbox_driver.active = $("#socialbox_driver li[class='active'] a").attr("class");
            $("#socialdriver_" + wrc.ui.socialbox_driver.active).show();
            $(document).on("click", "#socialbox_driver li a", function () {
                $(".social .socialmedia_driver").hide();
                $("#socialdriver_" + $(this).attr("class")).show();

                $("#socialbox_driver li").removeClass("active");
                $("#navdriver_" + $(this).attr("class")).addClass("active");
            });
        }
    };

    wrc.ui.newsverteil.init = function () {
        var lang = $("#lang").val();

        // Jahres-Auswahl
        $(document).on("change", "#nv_year", function () {
            if (!$(this).hasClass("ddyear")) {
                if ($(this).val() == $('#nv_year option:last').val()) {
                    $.get('/cache/' + lang + '/menu/newsverteil_start_months.html', function (data) {
                        $("#nv_month").replaceWith(data);
                    });
                } else if ($(this).val() == $('#nv_year option:first').val()) {
                    $.get('/cache/' + lang + '/menu/newsverteil_cur_months.html', function (data) {
                        $("#nv_month").replaceWith(data);
                    });
                } else {
                    $.get('/cache/' + lang + '/menu/newsverteil_all_months.html', function (data) {
                        $("#nv_month").replaceWith(data);
                    });
                }
            }
        });

        // Wechsel Newsverteil-Seite
        changeNewsverteilPage = function (lang, wrc_class, year, month, page) {

            var txt_no_news = {
                "DE": "Es wurden keine News gefunden.",
                "EN": "No news available.",
                "ES": "No hay noticias disponibles.",
                "FR": "There are no news available.",
                "PL": "Brak dostępnych wiadomości."
            };

            anz_pages = $('#news_all_pages').length ? $('#news_all_pages').html() : 1;

            if (page > 0 && page <= anz_pages) {
                $('#newsverteil').fadeTo(100, 0.01, function () {
                    $('#newsverteil').load('/cache/' + lang + '/pages/newsverteil_' + wrc_class + '_' + year + '_' + (parseInt(month) < 10 ? "0" : "") + (parseInt(month)) + '_' + page + '.html', false, function (responseText, textStatus, XMLHttpRequest) {
                        if (textStatus == "success") {
                            $('#newsverteil').fadeTo(1000, 1);
                        } else if (textStatus == "error") {
                            $('#newsverteil').html('<div class="article_list"><strong>' + txt_no_news[lang] + '</strong></div>');
                            $('#newsverteil').fadeTo(1000, 1);
                        }
                    });
                });
            }
        };
    };

    wrc.ui.podcasts.init = function () {

        // Wechsel Podcasts-Seite
        changePodcastsPage = function (lang, page) {

            var txt_no_news = {
                "DE": "Es wurden keine Podcasts gefunden.",
                "EN": "There are no podcasts available.",
                "ES": "There are no podcasts available.",
                "FR": "There are no podcasts available.",
                "PL": "There are no podcasts available."
            };

            anz_pages = $('#podcasts_all_pages').length ? $('#podcasts_all_pages').html() : 1;

            if (page > 0 && page <= anz_pages) {
                $('#podcasts').fadeTo(100, 0.01, function () {
                    $('#podcasts').load('/cache/' + lang + '/pages/podcasts_' + page + '.html', false, function (responseText, textStatus, XMLHttpRequest) {
                        if (textStatus == "success") {
                            $('#podcasts').fadeTo(1000, 1);
                        } else if (textStatus == "error") {
                            $('#podcasts').html('<div class="article_list"><strong>' + txt_no_news[lang] + '</strong></div>');
                            $('#podcasts').fadeTo(1000, 1);
                        }
                    });
                });
            }
        };
    };

    wrc.ui.newsletter.init = function () {

        $(document).on("submit", ".newsletter_anmeldung", function (event) {
            event.preventDefault();

            var newsletter_checked = "";

            $(this).find("input[name=newsletter]").each(function () {
                if ($(this).prop('checked')) {
                    newsletter_checked += newsletter_checked === "" ? $(this).val() : "," + $(this).val();
                }
            });

            $.ajax({
                type: "POST",
                url: "http://www.wrc.com/service/newsletter.php",
                data: {
                    lang: $("#lang").val(),
                    email: $(this).find("#email").val(),
                    newsletter: newsletter_checked,
                    g_recaptcha_response: $("#g-recaptcha-response").val()
                },
                dataType: "jsonp",
                success: function (data) {
                    if (data.status == 'nl_register_ok') {
                        location.href = "/" + $("#lang").val().toLowerCase() + "http://www.wrc.com/newsletter/registration-completed/page/75----.html";

                    } else {
                        grecaptcha.reset();

                        alert(data.message);
                    }
                }
            });
        });
    };

    wrc.ui.calendarmap.init = function () {
        if ($('#bigmap-img').length) {
            map = $('#bigmap-img'),
                captions = {
                    r1: [$('.r1').attr('data-title'), $('.r1').attr('data-date'), $('.r1').attr('data-img')],
                    r2: [$('.r2').attr('data-title'), $('.r2').attr('data-date'), $('.r2').attr('data-img')],
                    r3: [$('.r3').attr('data-title'), $('.r3').attr('data-date'), $('.r3').attr('data-img')],
                    r4: [$('.r4').attr('data-title'), $('.r4').attr('data-date'), $('.r4').attr('data-img')],
                    r5: [$('.r5').attr('data-title'), $('.r5').attr('data-date'), $('.r5').attr('data-img')],
                    r6: [$('.r6').attr('data-title'), $('.r6').attr('data-date'), $('.r6').attr('data-img')],
                    r7: [$('.r7').attr('data-title'), $('.r7').attr('data-date'), $('.r7').attr('data-img')],
                    r8: [$('.r8').attr('data-title'), $('.r8').attr('data-date'), $('.r8').attr('data-img')],
                    r9: [$('.r9').attr('data-title'), $('.r9').attr('data-date'), $('.r9').attr('data-img')],
                    r10: [$('.r10').attr('data-title'), $('.r10').attr('data-date'), $('.r10').attr('data-img')],
                    r11: [$('.r11').attr('data-title'), $('.r11').attr('data-date'), $('.r11').attr('data-img')],
                    r12: [$('.r12').attr('data-title'), $('.r12').attr('data-date'), $('.r12').attr('data-img')],
                    r13: [$('.r13').attr('data-title'), $('.r13').attr('data-date'), $('.r13').attr('data-img')],
                    r14: [$('.r14').attr('data-title'), $('.r14').attr('data-date'), $('.r14').attr('data-img')],
                    r15: [$('.r15').attr('data-title'), $('.r15').attr('data-date'), $('.r15').attr('data-img')],
                    r16: [$('.r16').attr('data-title'), $('.r16').attr('data-date'), $('.r16').attr('data-img')],
                    r17: [$('.r17').attr('data-title'), $('.r17').attr('data-date'), $('.r17').attr('data-img')],
                    r18: [$('.r18').attr('data-title'), $('.r18').attr('data-date'), $('.r18').attr('data-img')],
                    r19: [$('.r19').attr('data-title'), $('.r19').attr('data-date'), $('.r19').attr('data-img')],
                    r20: [$('.r20').attr('data-title'), $('.r20').attr('data-date'), $('.r20').attr('data-img')]
                },
                opts = {
                    mapKey: 'data-key',
                    render_highlight: {fillColor: '8DC72D', fillOpacity: 1, strockColor: '8DC72D'},
                    fillColor: '000000',
                    fillOpacity: 1,
                    clickNavigate: true,
                    stroke: true,
                    strokeColor: '000000',
                    strokeWidth: 1,
                    onMouseover: function (data) {
                        if ($('.wrapper').width() > '480') {
                            $('.bigmap .heading h1 span').text(captions[data.key][0]);
                            $('.bigmap .heading h2').text(captions[data.key][1]);
                            $('.bigmap .heading img').attr({'src': captions[data.key][2]});
                            $('.bigmap .heading').show();
                            //$('.bigmap ~ .data table tr:nth-child('+ [data.key].toString().substr(1,2) +')').addClass('hover');
                            $('.bigmap ~ .data table tr[data-number="' + parseInt([data.key].toString().substr(1, 2)) + '"]').addClass('hover');
                        }
                        else $('.bigmap .heading').hide();
                    },
                    onMouseout: function (data) {
                        $('.bigmap .heading').hide();
                        $('.bigmap ~ .data table tr').removeClass('hover');
                    }
                };
            map.mapster('unbind').mapster(opts).mapster('set', true, 'show');

            window.onresize = function () {
                map.mapster('resize', $('.bigmap').width());
            };
            window.onload = function () {
                map.mapster('resize', $('.bigmap').width());
            };
        }
    };

    wrc.ui.liveticker.init = function () {
        if ($("#live_text").length && !(window.location.hash && $.inArray("wrcLiveExternal", hash) != -1)) {
            window.setTimeout(reloadTicker, 60000);
        }
    };

    wrc.ui.resize_datasite.init = function () {

        if ($("#myTable").length) {
            $("#myTable").tablesorter({
                cssheader_sort: "header_sort",
                cssAsc: "header_sortSortDown",
                cssDesc: "header_sortSortUp"
            });
        }

        if ($('#datasite .w50').length) {
            var v;
            $(window).bind('load resize', function () {

                if ($('.wrapper').width() <= 608 && (v == 'vlarge' || v === undefined)) {
                    $('#datasite .w50:last').prependTo('#datasite .data').children('.scrolltable').hide().prev('h4').children('.toggle').text('+');
                    $('#datasite .w50:last').children('.scrolltable').show().prev('h4').children('.toggle').text('-');
                    $('.data').scrollTop(0);
                    v = 'vsmall';
                }
                if ($('.wrapper').width() > 608 && v == 'vsmall') {
                    $('#datasite .w50:last').prependTo('#datasite .data');
                    $('#datasite .scrolltable').show();
                    v = 'vlarge';
                }

            });

            $(document).on("click", '#datasite .w50 h4', function () {
                if ($('.wrapper').width() <= 608) {
                    $(this).next('.scrolltable').slideToggle();
                    $(this).children('.toggle').text($(this).children('.toggle').text() == "+" ? "-" : "+");
                }
            });
        }
    };

    wrc.ui.external.init = function () {
        $(document).ready(function () {
            //show only live part of page if used external
            if (window.location.hash && $.inArray("wrcLiveExternal", hash) != -1) {
                if ($.inArray("live", hash) != -1) {

                    if (!$('.content_full').length) {
                        $('.content').append('<div class="content_full"></div>');
                        $('.content .contentnav, .content .data').appendTo('.content_full');
                    }

                    //Body replacing
                    $('body').html('<main role="main"><div class="wrapper"><div class="content"><div class="content_full">' +
                        $('.content_full').html() + '</div></div></div></main>' + $("#lang").prop('outerHTML') + $("#tree").prop('outerHTML'));

                    //hide last navigation element
                    $('.news > ul > li:last-child').remove();


                    //Navigation url replacing
                    $('.content_full ul > li > a').each(function (index, value) {
                        var that = $(this);
                        that.attr('href', that.attr('href') + window.location.hash);
                    });

                    //CSS edits
                    $('.wrapper').css('padding', '0').css('width', '100%').css('min-height', 'auto');
                    $('ul.contentnav').css('margin', '0');
                    $('#datasite, .data').css('width', '100%').css('height', 'auto').css('border-left-width', '0').css('border-right-width', '0');
                    $('#datasite table, .data table').css('width', '100%');
                    $('.content_full .box').css('margin-bottom', '0');
                    $('.box').css('margin', '0');
                    $('#datasite > .data, .content_full').css('width', '100%');
                    $('.content_full ul.contentnav a').css('width', 'auto');

                    //Change language
                    if ("lang" in hash) {
                        //change language in navigation
                        $.each(resultsNavigation, function (index, value) {
                            $('a').filter(function () {
                                return $(this).text() === value["en"];
                            }).text(value[hash["lang"]]);
                        });

                        //change language for all other elements with lang data attribute
                        var dataElements = $('[data-lang-' + hash["lang"] + ']');
                        $.each(dataElements, function (index, value) {
                            $(value).text($(value).attr('data-lang-' + hash["lang"]));
                        });
                    }
                } else if ($.inArray("gallery", hash) != -1) {
                    //Body replacing
                    $('body').html('<div class="wrapper"><div class="content"><div id="gallery">' +
                        $('#gallery').html() + '</div></div></div>' + $("#lang").prop('outerHTML') + $("#tree").prop('outerHTML'));

                    //CSS edits
                    //keep code in case page has to be full width
                    /*var oldWidthWrapper = $('.wrapper').css('width');
                     $('.wrapper').css('padding', '0').css('width', '100%').css('min-height', 'auto');
                     var newWidthWrapper = $('.wrapper').css('width');
                     marginYearHeader = newWidthWrapper.substring(0, newWidthWrapper.length - 2) - oldWidthWrapper.substring(0, oldWidthWrapper.length - 2);*/
                } else if ($.inArray("results", hash) != -1) {
                    var $menuMobile = $('nav > ul > li.menu'),
                        $activeMenu = $('nav > ul > li > a.active'),
                        $rallyList = $activeMenu.parent().find('ul'),
                        content = '<div class="content">' + $('.content_full').prop('outerHTML') + '</div>';

                    $menuMobile.find('a').attr('href', 'javascript:void(0);');
                    $activeMenu.css('display', 'none');
                    $rallyList.css('top', '0px');

                    if (window.location.href.indexOf("/results/championship/") !== -1) {
                        content = $('.content').prop('outerHTML');
                    }

                    //Body replacing
                    $('body').html('<div class="wrapper"><nav><ul class="showsub">' + $menuMobile.prop('outerHTML') + '<li>' + $activeMenu.prop('outerHTML') + '' + $rallyList.prop('outerHTML') +
                        '</li></ul></nav>' + content + '</div>' + $("#lang").prop('outerHTML') + $("#tree").prop('outerHTML'));

                    //Navigation url replacing
                    $('.content ul li a, .content_full ul > li > a, nav ul li ul li a').each(function (index, value) {
                        var that = $(this);
                        that.attr('href', that.attr('href') + window.location.hash);

                        if (that.attr('href').indexOf("/results/") == -1 && that.attr('href').indexOf("/results/championship/") == -1) {
                            that.parent().remove();
                        }

                        if (that.attr('href').indexOf("/results/rally-results") !== -1) {
                            that.attr('href', 'javascript:void(0);');
                        }
                    });

                    //CSS edits
                    $('.wrapper').css('padding', '0').css('width', '100%').css('min-height', 'auto');
                    $('ul.contentnav').css('margin', '0').css('margin-top', '28px');
                    $('#datasite, .data').css('width', '100%').css('height', 'auto').css('border-left-width', '0').css('border-right-width', '0').css('margin', '0');
                    $('#datasite table, .data table').css('width', '100%');
                    $('.content_full .box').css('margin-bottom', '0');
                    $('.box').css('margin', '0');
                    $('#datasite > .data, .content_full').css('width', '100%');
                    $('.content_full ul.contentnav a').css('width', 'auto');
                    $('nav').css('margin', '0').css('border-top', 'none');
                    $('div.bigsize').remove();

                    //Change language
                    if ("lang" in hash) {
                        //change language in navigation
                        $.each(resultsNavigation, function (index, value) {
                            $('a').filter(function () {
                                return $(this).text() === value["en"];
                            }).text(value[hash["lang"]]);
                        });

                        //change language in rally navigation
                        $.each(resultsRallyNavigation, function (index, value) {
                            $('a').filter(function () {
                                return $(this).text() === value["en"];
                            }).text(value[hash["lang"]]);
                        });

                        //change language for all other elements with lang data attribute
                        var dataElements = $('[data-lang-' + hash["lang"] + ']');
                        $.each(dataElements, function (index, value) {
                            $(value).text($(value).attr('data-lang-' + hash["lang"]));
                        });
                    }

                    //re-initialize event handlers
                    $("nav > ul > li.menu").on("click", function () {
                        $(this).nextAll().toggle();
                    });
                }

                $('#pageOverlay').remove(); //remove div pageOverlay
            }

            /* Lightbox */
            if ($(".gallery").length) {
                $(".gallery").each(function () {
                    gallery_id = $(this).attr("id");
                    $("#" + gallery_id + " .lightbox").lightBox();
                });
            }
        });
    };

})();

wrc.init();


// Ticker neu laden
function reloadTicker() {
    $.get('/live-ticker/live_text.html', function (data) {
        $("#live_text").replaceWith(data);
    });
    var getfile = $("#datasite").attr("data-filename");
    $.get(getfile, function (data) {
        lang = $("#lang").val().toLowerCase();
        if (lang == "pl") {
            lang = "po";
        }
        data = $.parseHTML(data);

        $(data).find("*[data-lang-" + lang + "]").each(function () {
            if ($(this).attr("data-lang-" + lang) !== '') {
                var text = $(this).attr("data-lang-" + lang);

                if ($(this).is("h4")) {
                    if ($('.wrapper').width() <= 960) {
                        $(this).html(text + "<span class='toggle'>-</span>");
                    } else {
                        $(this).html(text + "<span class='toggle'>-</span>");
                    }
                } else {
                    $(this).html(text);
                }
            }
        });

        $("#datasite").replaceWith(data);
        var v;
        if ($('.wrapper').width() <= 960 && (v == 'vlarge' || v === undefined)) {
            $('#datasite .w50:last').prependTo('#datasite .data').children('.scrolltable').hide().prev('h4').children('.toggle').text('+');
            $('#datasite .w50:last').children('.scrolltable').show().prev('h4').children('.toggle').text('-');
            $('.data').scrollTop(0);
            v = 'vsmall';
        }
        if ($('.wrapper').width() > 960 && v == 'vsmall') {
            $('#datasite .w50:last').prependTo('#datasite .data');
            $('#datasite .scrolltable').show();
            v = 'vlarge';
        }
    }).success(function () {
        //box_changer("#datasite", "ready", "select[name='rally_id'] option:selected", "value");
    });
    window.setTimeout(reloadTicker, 60000);
}

// Wechsel des Aufmachers
function toggleAufmacher(obj) {
    window.clearTimeout(to);

    if ((typeof(obj) === 'undefined') && $('.aufmacher-archiv .current a').first().is(':hover')) {// mouse-cursor above Aufmacher => skip sliding)
        to = window.setTimeout(toggleAufmacher, wechsel_sec * 1000);
        return;
    }

    if (!obj) {
        var index = $(".aufmacher-archiv .thumbs div a.active").parent().index();
        index++;
        if (index > 3)
            index = 0;

        obj = $(".aufmacher-archiv .thumbs div:eq(" + index + ")").find('a:first');
        $(".aufmacher-archiv .thumbs a").removeClass("active");
        obj.addClass("active");
    }

    // Titel aendern
    $(".aufmacher-archiv .current .heading h1 a").html(obj.find("h2").html());

    // css Klasse aendern
    css_class = obj.find("h2").attr("class");
    $(".aufmacher-archiv .current .heading").attr("class", "heading" + (css_class !== undefined ? ' ' + css_class : ''));

    // Bild aendern
    img = obj.find("img").attr("src");
    img = img.replace("_240x135.jpg", "_944x531.jpg");
    img = img.replace("width=240&height=135", "width=944&height=531");
    $(".aufmacher-archiv .current #aufm_img").attr("src", img);

    // Link aendern
    $(".aufmacher-archiv .current a").attr("href", obj.attr("link"));
    $(".aufmacher-archiv .current a").attr("target", obj.attr("linktarget"));

    // Smarticons aendern
    smarticons = obj.next().html();
    $(".aufmacher-archiv .current .heading ul").remove();
    if (smarticons !== undefined)
        $(".aufmacher-archiv .current .heading").append("<ul>" + smarticons + "</ul>");

    to = window.setTimeout(toggleAufmacher, wechsel_sec * 1000);
}


// Factbox
$(document).on("click", ".fact_prev, .fact_next", function () {
    factbox_id = $(this).parents(".factbox").attr("data-id");
    factnum = parseInt($("#factbox_" + factbox_id).attr("data-active"));
    factlength = parseInt($("#factbox_" + factbox_id).attr("data-length"));

    if ($(this).hasClass("fact_next")) {
        factnum = (factnum + 1) > factlength ? 1 : factnum + 1;
    } else if ($(this).hasClass("fact_prev")) {
        factnum = factnum == 1 ? factlength : factnum - 1;
    }

    $("#factbox_" + factbox_id).attr("data-active", factnum);
    $("#factbox_" + factbox_id + " .facttext").hide();
    $("#factbox_" + factbox_id + " .facttext[data-num = '" + factnum + "']").show();
});

// Submit Trend
var htmltrend;
var htmlresult;

var alertdict =
{
    "DE": ["Sie haben bereits für diese Umfrage abgestimmt!", "Bitte wählen Sie eine Antwort!", "Danke fürs Abstimmen!"],
    "EN": ["You have already voted!", "Please select an answer!", "Thank you for voting!"],
    "ES": ["¡Ya has votado!", "Por favor, selecione una respuesta!", "Gracias por votar!"],
    "FR": ["Vous avez déj�  voté !", "Merci de choisir une réponse !", "Merci d'avoir voté !"],
    "PL": ["Już głosowałeś!", "Prosimy wybrać odpowiedź!", "Dziękujemy za oddanie głosu!"]
};

function submittrend() {
    answernr = $("#trend").find("input[type='radio']:checked").attr("id");
    trendnr = $("#trend").attr("data-trendnumber");
    lang = $("#trend").attr("data-trendlang");

    if ($.cookie('trend_' + trendnr) == 1) {
        alert(alertdict[lang][0]);

    } else {

        if (answernr === undefined) {
            alert(alertdict[lang][1]);

        } else {
            $.ajax({
                type: "POST",
                url: "http://www.wrc.com/service/trend.php",
                data: {answer: answernr, question: trendnr}
            }).success(function (e) {
                var expire_date = new Date();
                expire_date.setTime(expire_date.getTime() + (30 * 60 * 1000)); // 30min
                $.cookie('trend_' + trendnr, 1, {expires: expire_date, path: '/', secure: false});
                alert(alertdict[lang][2]);
                loadtrendresult();
            });
        }
    }
}

function showtrend() {
    $('#trend').html(htmltrend);
}

function loadtrendresult() {
    if (!htmlresult) {
        trendnr = $("#trend").attr("data-trendnumber");
        lang = $("#trend").attr("data-trendlang");
        $.ajax({
            type: "GET",
            url: "http://www.wrc.com/service/trend.php",
            data: {status: "result", question: trendnr, language: lang}
        }).success(function (html) {

            htmlresult = html;
            htmltrend = $('#trend').html();
            $('#trend').html(htmlresult);
        });

    } else {
        $('#trend').html(htmlresult);
    }
}

$(document).ready(function () {
    if ($("#socialshareprivacy").length) {
        switchmetaboxinfo();
    }

    translate();

    if (window.location.hash.indexOf('externalVideoBox') != -1) {
        $('body').replaceWith($('main'));
        $('main').wrap('<body></body>');
        $('.start-heading').remove();
        $('.wrapper').css('width','95%').css('padding-top','5%');
    }
});

function switchmetaboxinfo() {
    help_info = {
        "DE": '2 Clicks for more data protection: If you click here, the button activates and you can post your recommendation. By activating, data is already transmitted to third parties.',
        "EN": '2 Clicks for more data protection: If you click here, the button activates and you can post your recommendation. By activating, data is already transmitted to third parties.',
        "ES": '2 Clicks for more data protection: If you click here, the button activates and you can post your recommendation. By activating, data is already transmitted to third parties.',
        "FR": '2 Clicks for more data protection: If you click here, the button activates and you can post your recommendation. By activating, data is already transmitted to third parties.',
        "PL": '2 Clicks for more data protection: If you click here, the button activates and you can post your recommendation. By activating, data is already transmitted to third parties.'
    };

    legend = {
        "DE": 'Permanently activate and consent to data transmission.',
        "EN": 'Permanently activate and consent to data transmission.',
        "ES": 'Permanently activate and consent to data transmission.',
        "FR": 'Permanently activate and consent to data transmission.',
        "PL": 'Permanently activate and consent to data transmission.'
    };

    var lang = $("#lang").val();

    $(".help_info.icon").remove();

    $(".help_info").each(function () {
        $(this).find(".info").text(help_info[lang]);
    });

    $(".settings_info_menu legend").text(legend[lang]);
}

function podcast_change(id) {
    img = $("#podcast_img_" + id).attr("src");
    img = img.replace("_240x135.jpg", "_320x180.jpg");
    img = img.replace("width=240&height=135", "width=320&height=180");
    $("#podcast_img").attr("src", img);
    $("#podcast_title").html($("#podcast_title_" + id).html());
    $("#podcast_text").html($("#podcast_text_" + id).html());
    $("#podcast_date").html($("#podcast_date_" + id).html());

    // Abfrage, ob Flash-Plugin aktiviert ist
    if (swfobject.getFlashPlayerVersion().major !== 0) {
        //flash

        flashvars.url = $("#podcast_url_" + id).val();
        swfobject.embedSWF("http://www.wrc.com/fileadmin/swf/audioplayer.swf", "flashcontent", "912", "40", "10.0.0", false, flashvars, params, attributes);

    } else {
        // no flash

        writePodcastFallback($("#podcast_url_" + id).val());
    }
}

function writePodcastFallback(url) {
    $("#flashcontent").html('<audio controls autobuffer autoplay><source src="' + url + '" /></audio>');
}

function countdownFinished() {

}


/*
 * Tablesorter
 */
(function ($) {
    $.extend({
        tablesorter: new
            function () {
                var parsers = [], widgets = [];
                this.defaults = {
                    cssheader_sort: "header_sort",
                    cssAsc: "header_sortSortUp",
                    cssDesc: "header_sortSortDown",
                    cssChildRow: "expand-child",
                    sortInitialOrder: "desc",
                    sortMultiSortKey: "shiftKey",
                    sortForce: null,
                    sortAppend: null,
                    sortLocaleCompare: true,
                    textExtraction: "simple",
                    parsers: {},
                    widgets: [],
                    widgetZebra: {css: ["even", "odd"]},
                    header_sorts: {},
                    widthFixed: false,
                    cancelSelection: true,
                    sortList: [],
                    header_sortList: [],
                    dateFormat: "us",
                    decimal: '/\.|\,/g',
                    onRenderheader_sort: null,
                    selectorheader_sorts: 'thead th',
                    debug: false
                };
                function benchmark(s, d) {
                    log(s + "," + (new Date().getTime() - d.getTime()) + "ms");
                }

                this.benchmark = benchmark;
                function log(s) {
                    if (typeof console != "undefined" && typeof console.debug != "undefined") {
                        console.log(s);
                    } else {
                        alert(s);
                    }
                }

                function buildParserCache(table, $header_sorts) {
                    if (table.config.debug) {
                        var parsersDebug = "";
                    }
                    if (table.tBodies.length == 0)return;
                    var rows = table.tBodies[0].rows;
                    if (rows[0]) {
                        var list = [], cells = rows[0].cells, l = cells.length;
                        for (var i = 0; i < l; i++) {
                            var p = false;
                            if ($.metadata && ($($header_sorts[i]).metadata() && $($header_sorts[i]).metadata().sorter)) {
                                p = getParserById($($header_sorts[i]).metadata().sorter);
                            } else if ((table.config.header_sorts[i] && table.config.header_sorts[i].sorter)) {
                                p = getParserById(table.config.header_sorts[i].sorter);
                            }
                            if (!p) {
                                p = detectParserForColumn(table, rows, -1, i);
                            }
                            if (table.config.debug) {
                                parsersDebug += "column:" + i + " parser:" + p.id + "\n";
                            }
                            list.push(p);
                        }
                    }
                    if (table.config.debug) {
                        log(parsersDebug);
                    }
                    return list;
                };
                function detectParserForColumn(table, rows, rowIndex, cellIndex) {
                    var l = parsers.length, node = false, nodeValue = false, keepLooking = true;
                    while (nodeValue == '' && keepLooking) {
                        rowIndex++;
                        if (rows[rowIndex]) {
                            node = getNodeFromRowAndCellIndex(rows, rowIndex, cellIndex);
                            nodeValue = trimAndGetNodeText(table.config, node);
                            if (table.config.debug) {
                                log('Checking if value was empty on row:' + rowIndex);
                            }
                        } else {
                            keepLooking = false;
                        }
                    }
                    for (var i = 1; i < l; i++) {
                        if (parsers[i].is(nodeValue, table, node)) {
                            return parsers[i];
                        }
                    }
                    return parsers[0];
                }

                function getNodeFromRowAndCellIndex(rows, rowIndex, cellIndex) {
                    return rows[rowIndex].cells[cellIndex];
                }

                function trimAndGetNodeText(config, node) {
                    return $.trim(getElementText(config, node));
                }

                function getParserById(name) {
                    var l = parsers.length;
                    for (var i = 0; i < l; i++) {
                        if (parsers[i].id.toLowerCase() == name.toLowerCase()) {
                            return parsers[i];
                        }
                    }
                    return false;
                }

                function buildCache(table) {
                    if (table.config.debug) {
                        var cacheTime = new Date();
                    }
                    var totalRows = (table.tBodies[0] && table.tBodies[0].rows.length) || 0, totalCells = (table.tBodies[0].rows[0] && table.tBodies[0].rows[0].cells.length) || 0, parsers = table.config.parsers, cache = {
                        row: [],
                        normalized: []
                    };
                    for (var i = 0; i < totalRows; ++i) {
                        var c = $(table.tBodies[0].rows[i]), cols = [];
                        if (c.hasClass(table.config.cssChildRow)) {
                            cache.row[cache.row.length - 1] = cache.row[cache.row.length - 1].add(c);
                            continue;
                        }
                        cache.row.push(c);
                        for (var j = 0; j < totalCells; ++j) {
                            cols.push(parsers[j].format(getElementText(table.config, c[0].cells[j]), table, c[0].cells[j]));
                        }
                        cols.push(cache.normalized.length);
                        cache.normalized.push(cols);
                        cols = null;
                    }
                    ;
                    if (table.config.debug) {
                        benchmark("Building cache for " + totalRows + " rows:", cacheTime);
                    }
                    return cache;
                };
                function getElementText(config, node) {
                    var text = "";
                    if (!node)return "";
                    if (!config.supportsTextContent)config.supportsTextContent = node.textContent || false;
                    if (config.textExtraction == "simple") {
                        if (config.supportsTextContent) {
                            text = node.textContent;
                        } else {
                            if (node.childNodes[0] && node.childNodes[0].hasChildNodes()) {
                                text = node.childNodes[0].innerHTML;
                            } else {
                                text = node.innerHTML;
                            }
                        }
                    } else {
                        if (typeof(config.textExtraction) == "function") {
                            text = config.textExtraction(node);
                        } else {
                            text = $(node).text();
                        }
                    }
                    return text;
                }

                function appendToTable(table, cache) {
                    if (table.config.debug) {
                        var appendTime = new Date()
                    }
                    var c = cache, r = c.row, n = c.normalized, totalRows = n.length, checkCell = (n[0].length - 1), tableBody = $(table.tBodies[0]), rows = [];
                    for (var i = 0; i < totalRows; i++) {
                        var pos = n[i][checkCell];
                        rows.push(r[pos]);
                        if (!table.config.appender) {
                            var l = r[pos].length;
                            for (var j = 0; j < l; j++) {
                                tableBody[0].appendChild(r[pos][j]);
                            }
                        }
                    }
                    if (table.config.appender) {
                        table.config.appender(table, rows);
                    }
                    rows = null;
                    if (table.config.debug) {
                        benchmark("Rebuilt table:", appendTime);
                    }
                    applyWidget(table);
                    setTimeout(function () {
                        $(table).trigger("sortEnd");
                    }, 0);
                };
                function buildheader_sorts(table) {
                    if (table.config.debug) {
                        var time = new Date();
                    }
                    var meta = ($.metadata) ? true : false;
                    var header_sort_index = computeTableheader_sortCellIndexes(table);
                    $tableheader_sorts = $(table.config.selectorheader_sorts, table).each(function (index) {
                        this.column = header_sort_index[this.parentNode.rowIndex + "-" + this.cellIndex];
                        this.order = formatSortingOrder(table.config.sortInitialOrder);
                        this.count = this.order;
                        if (checkheader_sortMetadata(this) || checkheader_sortOptions(table, index))this.sortDisabled = true;
                        if (checkheader_sortOptionsSortingLocked(table, index))this.order = this.lockedOrder = checkheader_sortOptionsSortingLocked(table, index);
                        if (!this.sortDisabled) {
                            var $th = $(this).addClass(table.config.cssheader_sort);
                            if (table.config.onRenderheader_sort)table.config.onRenderheader_sort.apply($th);
                        }
                        table.config.header_sortList[index] = this;
                    });
                    if (table.config.debug) {
                        benchmark("Built header_sorts:", time);
                        log($tableheader_sorts);
                    }
                    return $tableheader_sorts;
                };
                function computeTableheader_sortCellIndexes(t) {
                    var matrix = [];
                    var lookup = {};
                    var thead = t.getElementsByTagName('THEAD')[0];
                    var trs = thead.getElementsByTagName('TR');
                    for (var i = 0; i < trs.length; i++) {
                        var cells = trs[i].cells;
                        for (var j = 0; j < cells.length; j++) {
                            var c = cells[j];
                            var rowIndex = c.parentNode.rowIndex;
                            var cellId = rowIndex + "-" + c.cellIndex;
                            var rowSpan = c.rowSpan || 1;
                            var colSpan = c.colSpan || 1
                            var firstAvailCol;
                            if (typeof(matrix[rowIndex]) == "undefined") {
                                matrix[rowIndex] = [];
                            }
                            for (var k = 0; k < matrix[rowIndex].length + 1; k++) {
                                if (typeof(matrix[rowIndex][k]) == "undefined") {
                                    firstAvailCol = k;
                                    break;
                                }
                            }
                            lookup[cellId] = firstAvailCol;
                            for (var k = rowIndex; k < rowIndex + rowSpan; k++) {
                                if (typeof(matrix[k]) == "undefined") {
                                    matrix[k] = [];
                                }
                                var matrixrow = matrix[k];
                                for (var l = firstAvailCol; l < firstAvailCol + colSpan; l++) {
                                    matrixrow[l] = "x";
                                }
                            }
                        }
                    }
                    return lookup;
                }

                function checkCellColSpan(table, rows, row) {
                    var arr = [], r = table.tHead.rows, c = r[row].cells;
                    for (var i = 0; i < c.length; i++) {
                        var cell = c[i];
                        if (cell.colSpan > 1) {
                            arr = arr.concat(checkCellColSpan(table, header_sortArr, row++));
                        } else {
                            if (table.tHead.length == 1 || (cell.rowSpan > 1 || !r[row + 1])) {
                                arr.push(cell);
                            }
                        }
                    }
                    return arr;
                };
                function checkheader_sortMetadata(cell) {
                    if (($.metadata) && ($(cell).metadata().sorter === false)) {
                        return true;
                    }
                    ;
                    return false;
                }

                function checkheader_sortOptions(table, i) {
                    if ((table.config.header_sorts[i]) && (table.config.header_sorts[i].sorter === false)) {
                        return true;
                    }
                    ;
                    return false;
                }

                function checkheader_sortOptionsSortingLocked(table, i) {
                    if ((table.config.header_sorts[i]) && (table.config.header_sorts[i].lockedOrder))return table.config.header_sorts[i].lockedOrder;
                    return false;
                }

                function applyWidget(table) {
                    var c = table.config.widgets;
                    var l = c.length;
                    for (var i = 0; i < l; i++) {
                        getWidgetById(c[i]).format(table);
                    }
                }

                function getWidgetById(name) {
                    var l = widgets.length;
                    for (var i = 0; i < l; i++) {
                        if (widgets[i].id.toLowerCase() == name.toLowerCase()) {
                            return widgets[i];
                        }
                    }
                };
                function formatSortingOrder(v) {
                    if (typeof(v) != "Number") {
                        return (v.toLowerCase() == "desc") ? 1 : 0;
                    } else {
                        return (v == 1) ? 1 : 0;
                    }
                }

                function isValueInArray(v, a) {
                    var l = a.length;
                    for (var i = 0; i < l; i++) {
                        if (a[i][0] == v) {
                            return true;
                        }
                    }
                    return false;
                }

                function setheader_sortsCss(table, $header_sorts, list, css) {
                    $header_sorts.removeClass(css[0]).removeClass(css[1]);
                    var h = [];
                    $header_sorts.each(function (offset) {
                        if (!this.sortDisabled) {
                            h[this.column] = $(this);
                        }
                    });
                    var l = list.length;
                    for (var i = 0; i < l; i++) {
                        h[list[i][0]].addClass(css[list[i][1]]);
                    }
                }

                function fixColumnWidth(table, $header_sorts) {
                    var c = table.config;
                    if (c.widthFixed) {
                        var colgroup = $('<colgroup>');
                        $("tr:first td", table.tBodies[0]).each(function () {
                            colgroup.append($('<col>').css('width', $(this).width()));
                        });
                        $(table).prepend(colgroup);
                    }
                    ;
                }

                function updateheader_sortSortCount(table, sortList) {
                    var c = table.config, l = sortList.length;
                    for (var i = 0; i < l; i++) {
                        var s = sortList[i], o = c.header_sortList[s[0]];
                        o.count = s[1];
                        o.count++;
                    }
                }

                function multisort(table, sortList, cache) {
                    if (table.config.debug) {
                        var sortTime = new Date();
                    }
                    var dynamicExp = "var sortWrapper = function(a,b) {", l = sortList.length;
                    for (var i = 0; i < l; i++) {
                        var c = sortList[i][0];
                        var order = sortList[i][1];
                        var s = (table.config.parsers[c].type == "text") ? ((order == 0) ? makeSortFunction("text", "asc", c) : makeSortFunction("text", "desc", c)) : ((order == 0) ? makeSortFunction("numeric", "asc", c) : makeSortFunction("numeric", "desc", c));
                        var e = "e" + i;
                        dynamicExp += "var " + e + " = " + s;
                        dynamicExp += "if(" + e + ") { return " + e + "; } ";
                        dynamicExp += "else { ";
                    }
                    var orgOrderCol = cache.normalized[0].length - 1;
                    dynamicExp += "return a[" + orgOrderCol + "]-b[" + orgOrderCol + "];";
                    for (var i = 0; i < l; i++) {
                        dynamicExp += "}; ";
                    }
                    dynamicExp += "return 0; ";
                    dynamicExp += "}; ";
                    if (table.config.debug) {
                        benchmark("Evaling expression:" + dynamicExp, new Date());
                    }
                    eval(dynamicExp);
                    cache.normalized.sort(sortWrapper);
                    if (table.config.debug) {
                        benchmark("Sorting on " + sortList.toString() + " and dir " + order + " time:", sortTime);
                    }
                    return cache;
                };
                function makeSortFunction(type, direction, index) {
                    var a = "a[" + index + "]", b = "b[" + index + "]";
                    if (type == 'text' && direction == 'asc') {
                        return "(" + a + " == " + b + " ? 0 : (" + a + " === null ? Number.POSITIVE_INFINITY : (" + b + " === null ? Number.NEGATIVE_INFINITY : (" + a + " < " + b + ") ? -1 : 1 )));";
                    } else if (type == 'text' && direction == 'desc') {
                        return "(" + a + " == " + b + " ? 0 : (" + a + " === null ? Number.POSITIVE_INFINITY : (" + b + " === null ? Number.NEGATIVE_INFINITY : (" + b + " < " + a + ") ? -1 : 1 )));";
                    } else if (type == 'numeric' && direction == 'asc') {
                        return "(" + a + " === null && " + b + " === null) ? 0 :(" + a + " === null ? Number.POSITIVE_INFINITY : (" + b + " === null ? Number.NEGATIVE_INFINITY : " + a + " - " + b + "));";
                    } else if (type == 'numeric' && direction == 'desc') {
                        return "(" + a + " === null && " + b + " === null) ? 0 :(" + a + " === null ? Number.POSITIVE_INFINITY : (" + b + " === null ? Number.NEGATIVE_INFINITY : " + b + " - " + a + "));";
                    }
                };
                function makeSortText(i) {
                    return "((a[" + i + "] < b[" + i + "]) ? -1 : ((a[" + i + "] > b[" + i + "]) ? 1 : 0));";
                };
                function makeSortTextDesc(i) {
                    return "((b[" + i + "] < a[" + i + "]) ? -1 : ((b[" + i + "] > a[" + i + "]) ? 1 : 0));";
                };
                function makeSortNumeric(i) {
                    return "a[" + i + "]-b[" + i + "];";
                };
                function makeSortNumericDesc(i) {
                    return "b[" + i + "]-a[" + i + "];";
                };
                function sortText(a, b) {
                    if (table.config.sortLocaleCompare)return a.localeCompare(b);
                    return ((a < b) ? -1 : ((a > b) ? 1 : 0));
                };
                function sortTextDesc(a, b) {
                    if (table.config.sortLocaleCompare)return b.localeCompare(a);
                    return ((b < a) ? -1 : ((b > a) ? 1 : 0));
                };
                function sortNumeric(a, b) {
                    return a - b;
                };
                function sortNumericDesc(a, b) {
                    return b - a;
                };
                function getCachedSortType(parsers, i) {
                    return parsers[i].type;
                };
                this.construct = function (settings) {
                    return this.each(function () {
                        if (!this.tHead || !this.tBodies)return;
                        var $this, $document, $header_sorts, cache, config, shiftDown = 0, sortOrder;
                        this.config = {};
                        config = $.extend(this.config, $.tablesorter.defaults, settings);
                        $this = $(this);
                        $.data(this, "tablesorter", config);
                        $header_sorts = buildheader_sorts(this);
                        this.config.parsers = buildParserCache(this, $header_sorts);
                        cache = buildCache(this);
                        var sortCSS = [config.cssDesc, config.cssAsc];
                        fixColumnWidth(this);
                        $header_sorts.click(function (e) {
                            var totalRows = ($this[0].tBodies[0] && $this[0].tBodies[0].rows.length) || 0;
                            if (!this.sortDisabled && totalRows > 0) {
                                $this.trigger("sortStart");
                                var $cell = $(this);
                                var i = this.column;
                                this.order = this.count++ % 2;
                                if (this.lockedOrder)this.order = this.lockedOrder;
                                if (!e[config.sortMultiSortKey]) {
                                    config.sortList = [];
                                    if (config.sortForce != null) {
                                        var a = config.sortForce;
                                        for (var j = 0; j < a.length; j++) {
                                            if (a[j][0] != i) {
                                                config.sortList.push(a[j]);
                                            }
                                        }
                                    }
                                    config.sortList.push([i, this.order]);
                                } else {
                                    if (isValueInArray(i, config.sortList)) {
                                        for (var j = 0; j < config.sortList.length; j++) {
                                            var s = config.sortList[j], o = config.header_sortList[s[0]];
                                            if (s[0] == i) {
                                                o.count = s[1];
                                                o.count++;
                                                s[1] = o.count % 2;
                                            }
                                        }
                                    } else {
                                        config.sortList.push([i, this.order]);
                                    }
                                }
                                ;
                                setTimeout(function () {
                                    setheader_sortsCss($this[0], $header_sorts, config.sortList, sortCSS);
                                    appendToTable($this[0], multisort($this[0], config.sortList, cache));
                                }, 1);
                                return false;
                            }
                        }).mousedown(function () {
                            if (config.cancelSelection) {
                                this.onselectstart = function () {
                                    return false
                                };
                                return false;
                            }
                        });
                        $this.bind("update", function () {
                            var me = this;
                            setTimeout(function () {
                                me.config.parsers = buildParserCache(me, $header_sorts);
                                cache = buildCache(me);
                            }, 1);
                        }).bind("updateCell", function (e, cell) {
                            var config = this.config;
                            var pos = [(cell.parentNode.rowIndex - 1), cell.cellIndex];
                            cache.normalized[pos[0]][pos[1]] = config.parsers[pos[1]].format(getElementText(config, cell), cell);
                        }).bind("sorton", function (e, list) {
                            $(this).trigger("sortStart");
                            config.sortList = list;
                            var sortList = config.sortList;
                            updateheader_sortSortCount(this, sortList);
                            setheader_sortsCss(this, $header_sorts, sortList, sortCSS);
                            appendToTable(this, multisort(this, sortList, cache));
                        }).bind("appendCache", function () {
                            appendToTable(this, cache);
                        }).bind("applyWidgetId", function (e, id) {
                            getWidgetById(id).format(this);
                        }).bind("applyWidgets", function () {
                            applyWidget(this);
                        });
                        if ($.metadata && ($(this).metadata() && $(this).metadata().sortlist)) {
                            config.sortList = $(this).metadata().sortlist;
                        }
                        if (config.sortList.length > 0) {
                            $this.trigger("sorton", [config.sortList]);
                        }
                        applyWidget(this);
                    });
                };
                this.addParser = function (parser) {
                    var l = parsers.length, a = true;
                    for (var i = 0; i < l; i++) {
                        if (parsers[i].id.toLowerCase() == parser.id.toLowerCase()) {
                            a = false;
                        }
                    }
                    if (a) {
                        parsers.push(parser);
                    }
                    ;
                };
                this.addWidget = function (widget) {
                    widgets.push(widget);
                };
                this.formatFloat = function (s) {
                    var i = parseFloat(s);
                    return (isNaN(i)) ? 0 : i;
                };
                this.formatInt = function (s) {
                    var i = parseInt(s);
                    return (isNaN(i)) ? 0 : i;
                };
                this.isDigit = function (s, config) {
                    return /^[-+]?\d*$/.test($.trim(s.replace(/[,.']/g, '')));
                };
                this.clearTableBody = function (table) {
                    if ($.browser.msie) {
                        function empty() {
                            while (this.firstChild)this.removeChild(this.firstChild);
                        }

                        empty.apply(table.tBodies[0]);
                    } else {
                        table.tBodies[0].innerHTML = "";
                    }
                };
            }
    });
    $.fn.extend({tablesorter: $.tablesorter.construct});
    var ts = $.tablesorter;
    ts.addParser({
        id: "text", is: function (s) {
            return true;
        }, format: function (s) {
            return $.trim(s.toLocaleLowerCase());
        }, type: "text"
    });
    ts.addParser({
        id: "digit", is: function (s, table) {
            var c = table.config;
            return $.tablesorter.isDigit(s, c);
        }, format: function (s) {
            return $.tablesorter.formatFloat(s);
        }, type: "numeric"
    });
    ts.addParser({
        id: "currency", is: function (s) {
            return /^[Â£$â‚¬?.]/.test(s);
        }, format: function (s) {
            return $.tablesorter.formatFloat(s.replace(new RegExp(/[Â£$â‚¬]/g), ""));
        }, type: "numeric"
    });
    ts.addParser({
        id: "ipAddress", is: function (s) {
            return /^\d{2,3}[\.]\d{2,3}[\.]\d{2,3}[\.]\d{2,3}$/.test(s);
        }, format: function (s) {
            var a = s.split("."), r = "", l = a.length;
            for (var i = 0; i < l; i++) {
                var item = a[i];
                if (item.length == 2) {
                    r += "0" + item;
                } else {
                    r += item;
                }
            }
            return $.tablesorter.formatFloat(r);
        }, type: "numeric"
    });
    ts.addParser({
        id: "url", is: function (s) {
            return /^(https?|ftp|file):\/\/$/.test(s);
        }, format: function (s) {
            return jQuery.trim(s.replace(new RegExp(/(https?|ftp|file):\/\//), ''));
        }, type: "text"
    });
    ts.addParser({
        id: "isoDate", is: function (s) {
            return /^\d{4}[\/-]\d{1,2}[\/-]\d{1,2}$/.test(s);
        }, format: function (s) {
            return $.tablesorter.formatFloat((s != "") ? new Date(s.replace(new RegExp(/-/g), "/")).getTime() : "0");
        }, type: "numeric"
    });
    ts.addParser({
        id: "percent", is: function (s) {
            return /\%$/.test($.trim(s));
        }, format: function (s) {
            return $.tablesorter.formatFloat(s.replace(new RegExp(/%/g), ""));
        }, type: "numeric"
    });
    ts.addParser({
        id: "usLongDate", is: function (s) {
            return s.match(new RegExp(/^[A-Za-z]{3,10}\.? [0-9]{1,2}, ([0-9]{4}|'?[0-9]{2}) (([0-2]?[0-9]:[0-5][0-9])|([0-1]?[0-9]:[0-5][0-9]\s(AM|PM)))$/));
        }, format: function (s) {
            return $.tablesorter.formatFloat(new Date(s).getTime());
        }, type: "numeric"
    });
    ts.addParser({
        id: "shortDate", is: function (s) {
            return /\d{1,2}[\/\-]\d{1,2}[\/\-]\d{2,4}/.test(s);
        }, format: function (s, table) {
            var c = table.config;
            s = s.replace(/\-/g, "/");
            if (c.dateFormat == "us") {
                s = s.replace(/(\d{1,2})[\/\-](\d{1,2})[\/\-](\d{4})/, "$3/$1/$2");
            } else if (c.dateFormat == "uk") {
                s = s.replace(/(\d{1,2})[\/\-](\d{1,2})[\/\-](\d{4})/, "$3/$2/$1");
            } else if (c.dateFormat == "dd/mm/yy" || c.dateFormat == "dd-mm-yy") {
                s = s.replace(/(\d{1,2})[\/\-](\d{1,2})[\/\-](\d{2})/, "$1/$2/$3");
            }
            return $.tablesorter.formatFloat(new Date(s).getTime());
        }, type: "numeric"
    });
    ts.addParser({
        id: "time", is: function (s) {
            return /^(([0-2]?[0-9]:[0-5][0-9])|([0-1]?[0-9]:[0-5][0-9]\s(am|pm)))$/.test(s);
        }, format: function (s) {
            return $.tablesorter.formatFloat(new Date("2000/01/01 " + s).getTime());
        }, type: "numeric"
    });
    ts.addParser({
        id: "metadata", is: function (s) {
            return false;
        }, format: function (s, table, cell) {
            var c = table.config, p = (!c.parserMetadataName) ? 'sortValue' : c.parserMetadataName;
            return $(cell).metadata()[p];
        }, type: "numeric"
    });
    ts.addWidget({
        id: "zebra", format: function (table) {
            if (table.config.debug) {
                var time = new Date();
            }
            var $tr, row = -1, odd;
            $("tr:visible", table.tBodies[0]).each(function (i) {
                $tr = $(this);
                if (!$tr.hasClass(table.config.cssChildRow))row++;
                odd = (row % 2 == 0);
                $tr.removeClass(table.config.widgetZebra.css[odd ? 0 : 1]).addClass(table.config.widgetZebra.css[odd ? 1 : 0])
            });
            if (table.config.debug) {
                $.tablesorter.benchmark("Applying Zebra widget", time);
            }
        }
    });
})(jQuery);


/** Abstract base class for collection plugins v1.0.1.
 Written by Keith Wood (kbwood{at}iinet.com.au) December 2013.
 Licensed under the MIT (http://keith-wood.name/licence.html) license. */
(function () {
    var j = false;
    window.JQClass = function () {
    };
    JQClass.classes = {};
    JQClass.extend = function extender(f) {
        var g = this.prototype;
        j = true;
        var h = new this();
        j = false;
        for (var i in f) {
            h[i] = typeof f[i] == 'function' && typeof g[i] == 'function' ? (function (d, e) {
                return function () {
                    var b = this._super;
                    this._super = function (a) {
                        return g[d].apply(this, a || [])
                    };
                    var c = e.apply(this, arguments);
                    this._super = b;
                    return c
                }
            })(i, f[i]) : f[i]
        }
        function JQClass() {
            if (!j && this._init) {
                this._init.apply(this, arguments)
            }
        }

        JQClass.prototype = h;
        JQClass.prototype.constructor = JQClass;
        JQClass.extend = extender;
        return JQClass
    }
})();
(function ($) {
    JQClass.classes.JQPlugin = JQClass.extend({
        name: 'plugin',
        defaultOptions: {},
        regionalOptions: {},
        _getters: [],
        _getMarker: function () {
            return 'is-' + this.name
        },
        _init: function () {
            $.extend(this.defaultOptions, (this.regionalOptions && this.regionalOptions['']) || {});
            var c = camelCase(this.name);
            $[c] = this;
            $.fn[c] = function (a) {
                var b = Array.prototype.slice.call(arguments, 1);
                if ($[c]._isNotChained(a, b)) {
                    return $[c][a].apply($[c], [this[0]].concat(b))
                }
                return this.each(function () {
                    if (typeof a === 'string') {
                        if (a[0] === '_' || !$[c][a]) {
                            throw'Unknown method: ' + a;
                        }
                        $[c][a].apply($[c], [this].concat(b))
                    } else {
                        $[c]._attach(this, a)
                    }
                })
            }
        },
        setDefaults: function (a) {
            $.extend(this.defaultOptions, a || {})
        },
        _isNotChained: function (a, b) {
            if (a === 'option' && (b.length === 0 || (b.length === 1 && typeof b[0] === 'string'))) {
                return true
            }
            return $.inArray(a, this._getters) > -1
        },
        _attach: function (a, b) {
            a = $(a);
            if (a.hasClass(this._getMarker())) {
                return
            }
            a.addClass(this._getMarker());
            b = $.extend({}, this.defaultOptions, this._getMetadata(a), b || {});
            var c = $.extend({name: this.name, elem: a, options: b}, this._instSettings(a, b));
            a.data(this.name, c);
            this._postAttach(a, c);
            this.option(a, b)
        },
        _instSettings: function (a, b) {
            return {}
        },
        _postAttach: function (a, b) {
        },
        _getMetadata: function (d) {
            try {
                var f = d.data(this.name.toLowerCase()) || '';
                f = f.replace(/'/g, '"');
                f = f.replace(/([a-zA-Z0-9]+):/g, function (a, b, i) {
                    var c = f.substring(0, i).match(/"/g);
                    return (!c || c.length % 2 === 0 ? '"' + b + '":' : b + ':')
                });
                f = $.parseJSON('{' + f + '}');
                for (var g in f) {
                    var h = f[g];
                    if (typeof h === 'string' && h.match(/^new Date\((.*)\)$/)) {
                        f[g] = eval(h)
                    }
                }
                return f
            } catch (e) {
                return {}
            }
        },
        _getInst: function (a) {
            return $(a).data(this.name) || {}
        },
        option: function (a, b, c) {
            a = $(a);
            var d = a.data(this.name);
            if (!b || (typeof b === 'string' && c == null)) {
                var e = (d || {}).options;
                return (e && b ? e[b] : e)
            }
            if (!a.hasClass(this._getMarker())) {
                return
            }
            var e = b || {};
            if (typeof b === 'string') {
                e = {};
                e[b] = c
            }
            this._optionsChanged(a, d, e);
            $.extend(d.options, e)
        },
        _optionsChanged: function (a, b, c) {
        },
        destroy: function (a) {
            a = $(a);
            if (!a.hasClass(this._getMarker())) {
                return
            }
            this._preDestroy(a, this._getInst(a));
            a.removeData(this.name).removeClass(this._getMarker())
        },
        _preDestroy: function (a, b) {
        }
    });
    function camelCase(c) {
        return c.replace(/-([a-z])/g, function (a, b) {
            return b.toUpperCase()
        })
    }

    $.JQPlugin = {
        createPlugin: function (a, b) {
            if (typeof a === 'object') {
                b = a;
                a = 'JQPlugin'
            }
            a = camelCase(a);
            var c = camelCase(b.name);
            JQClass.classes[c] = JQClass.classes[a].extend(b);
            new JQClass.classes[c]()
        }
    }
})(jQuery);
/* http://keith-wood.name/countdown.html
 Countdown for jQuery v2.0.2.
 Written by Keith Wood (kbwood{at}iinet.com.au) January 2008.
 Available under the MIT (http://keith-wood.name/licence.html) license.
 Please attribute the author if you use it. */
(function ($) {
    var w = 'countdown';
    var Y = 0;
    var O = 1;
    var W = 2;
    var D = 3;
    var H = 4;
    var M = 5;
    var S = 6;
    $.JQPlugin.createPlugin({
        name: w,
        defaultOptions: {
            until: null,
            since: null,
            timezone: null,
            serverSync: null,
            format: 'dHMS',
            layout: '',
            compact: false,
            padZeroes: false,
            significant: 0,
            description: '',
            expiryUrl: '',
            expiryText: '',
            alwaysExpire: false,
            onExpiry: null,
            onTick: null,
            tickInterval: 1
        },
        regionalOptions: {
            '': {
                labels: ['Years', 'Months', 'Weeks', 'Days', 'Hours', 'Minutes', 'Seconds'],
                labels1: ['Year', 'Month', 'Week', 'Day', 'Hour', 'Minute', 'Second'],
                compactLabels: ['y', 'm', 'w', 'd'],
                whichLabels: null,
                digits: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'],
                timeSeparator: ':',
                isRTL: false
            }
        },
        _getters: ['getTimes'],
        _rtlClass: w + '-rtl',
        _sectionClass: w + '-section',
        _amountClass: w + '-amount',
        _periodClass: w + '-period',
        _rowClass: w + '-row',
        _holdingClass: w + '-holding',
        _showClass: w + '-show',
        _descrClass: w + '-descr',
        _timerElems: [],
        _init: function () {
            var c = this;
            this._super();
            this._serverSyncs = [];
            var d = (typeof Date.now == 'function' ? Date.now : function () {
                return new Date().getTime()
            });
            var e = (window.performance && typeof window.performance.now == 'function');

            function timerCallBack(a) {
                var b = (a < 1e12 ? (e ? (performance.now() + performance.timing.navigationStart) : d()) : a || d());
                if (b - g >= 1000) {
                    c._updateElems();
                    g = b
                }
                f(timerCallBack)
            }

            var f = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || null;
            var g = 0;
            if (!f || $.noRequestAnimationFrame) {
                $.noRequestAnimationFrame = null;
                setInterval(function () {
                    c._updateElems()
                }, 980)
            } else {
                g = window.animationStartTime || window.webkitAnimationStartTime || window.mozAnimationStartTime || window.oAnimationStartTime || window.msAnimationStartTime || d();
                f(timerCallBack)
            }
        },
        UTCDate: function (a, b, c, e, f, g, h, i) {
            if (typeof b == 'object' && b.constructor == Date) {
                i = b.getMilliseconds();
                h = b.getSeconds();
                g = b.getMinutes();
                f = b.getHours();
                e = b.getDate();
                c = b.getMonth();
                b = b.getFullYear()
            }
            var d = new Date();
            d.setUTCFullYear(b);
            d.setUTCDate(1);
            d.setUTCMonth(c || 0);
            d.setUTCDate(e || 1);
            d.setUTCHours(f || 0);
            d.setUTCMinutes((g || 0) - (Math.abs(a) < 30 ? a * 60 : a));
            d.setUTCSeconds(h || 0);
            d.setUTCMilliseconds(i || 0);
            return d
        },
        periodsToSeconds: function (a) {
            return a[0] * 31557600 + a[1] * 2629800 + a[2] * 604800 + a[3] * 86400 + a[4] * 3600 + a[5] * 60 + a[6]
        },
        resync: function () {
            var d = this;
            $('.' + this._getMarker()).each(function () {
                var a = $.data(this, d.name);
                if (a.options.serverSync) {
                    var b = null;
                    for (var i = 0; i < d._serverSyncs.length; i++) {
                        if (d._serverSyncs[i][0] == a.options.serverSync) {
                            b = d._serverSyncs[i];
                            break
                        }
                    }
                    if (b[2] == null) {
                        var c = ($.isFunction(a.options.serverSync) ? a.options.serverSync.apply(this, []) : null);
                        b[2] = (c ? new Date().getTime() - c.getTime() : 0) - b[1]
                    }
                    if (a._since) {
                        a._since.setMilliseconds(a._since.getMilliseconds() + b[2])
                    }
                    a._until.setMilliseconds(a._until.getMilliseconds() + b[2])
                }
            });
            for (var i = 0; i < d._serverSyncs.length; i++) {
                if (d._serverSyncs[i][2] != null) {
                    d._serverSyncs[i][1] += d._serverSyncs[i][2];
                    delete d._serverSyncs[i][2]
                }
            }
        },
        _instSettings: function (a, b) {
            return {_periods: [0, 0, 0, 0, 0, 0, 0]}
        },
        _addElem: function (a) {
            if (!this._hasElem(a)) {
                this._timerElems.push(a)
            }
        },
        _hasElem: function (a) {
            return ($.inArray(a, this._timerElems) > -1)
        },
        _removeElem: function (b) {
            this._timerElems = $.map(this._timerElems, function (a) {
                return (a == b ? null : a)
            })
        },
        _updateElems: function () {
            for (var i = this._timerElems.length - 1; i >= 0; i--) {
                this._updateCountdown(this._timerElems[i])
            }
        },
        _optionsChanged: function (a, b, c) {
            if (c.layout) {
                c.layout = c.layout.replace(/&lt;/g, '<').replace(/&gt;/g, '>')
            }
            this._resetExtraLabels(b.options, c);
            var d = (b.options.timezone != c.timezone);
            $.extend(b.options, c);
            this._adjustSettings(a, b, c.until != null || c.since != null || d);
            var e = new Date();
            if ((b._since && b._since < e) || (b._until && b._until > e)) {
                this._addElem(a[0])
            }
            this._updateCountdown(a, b)
        },
        _updateCountdown: function (a, b) {
            a = a.jquery ? a : $(a);
            b = b || this._getInst(a);
            if (!b) {
                return
            }
            a.html(this._generateHTML(b)).toggleClass(this._rtlClass, b.options.isRTL);
            if ($.isFunction(b.options.onTick)) {
                var c = b._hold != 'lap' ? b._periods : this._calculatePeriods(b, b._show, b.options.significant, new Date());
                if (b.options.tickInterval == 1 || this.periodsToSeconds(c) % b.options.tickInterval == 0) {
                    b.options.onTick.apply(a[0], [c])
                }
            }
            var d = b._hold != 'pause' && (b._since ? b._now.getTime() < b._since.getTime() : b._now.getTime() >= b._until.getTime());
            if (d && !b._expiring) {
                b._expiring = true;
                if (this._hasElem(a[0]) || b.options.alwaysExpire) {
                    this._removeElem(a[0]);
                    if ($.isFunction(b.options.onExpiry)) {
                        b.options.onExpiry.apply(a[0], [])
                    }
                    if (b.options.expiryText) {
                        var e = b.options.layout;
                        b.options.layout = b.options.expiryText;
                        this._updateCountdown(a[0], b);
                        b.options.layout = e
                    }
                    if (b.options.expiryUrl) {
                        window.location = b.options.expiryUrl
                    }
                }
                b._expiring = false
            } else if (b._hold == 'pause') {
                this._removeElem(a[0])
            }
        },
        _resetExtraLabels: function (a, b) {
            for (var n in b) {
                if (n.match(/[Ll]abels[02-9]|compactLabels1/)) {
                    a[n] = b[n]
                }
            }
            for (var n in a) {
                if (n.match(/[Ll]abels[02-9]|compactLabels1/) && typeof b[n] === 'undefined') {
                    a[n] = null
                }
            }
        },
        _adjustSettings: function (a, b, c) {
            var d = null;
            for (var i = 0; i < this._serverSyncs.length; i++) {
                if (this._serverSyncs[i][0] == b.options.serverSync) {
                    d = this._serverSyncs[i][1];
                    break
                }
            }
            if (d != null) {
                var e = (b.options.serverSync ? d : 0);
                var f = new Date()
            } else {
                var g = ($.isFunction(b.options.serverSync) ? b.options.serverSync.apply(a[0], []) : null);
                var f = new Date();
                var e = (g ? f.getTime() - g.getTime() : 0);
                this._serverSyncs.push([b.options.serverSync, e])
            }
            var h = b.options.timezone;
            h = (h == null ? -f.getTimezoneOffset() : h);
            if (c || (!c && b._until == null && b._since == null)) {
                b._since = b.options.since;
                if (b._since != null) {
                    b._since = this.UTCDate(h, this._determineTime(b._since, null));
                    if (b._since && e) {
                        b._since.setMilliseconds(b._since.getMilliseconds() + e)
                    }
                }
                b._until = this.UTCDate(h, this._determineTime(b.options.until, f));
                if (e) {
                    b._until.setMilliseconds(b._until.getMilliseconds() + e)
                }
            }
            b._show = this._determineShow(b)
        },
        _preDestroy: function (a, b) {
            this._removeElem(a[0]);
            a.empty()
        },
        pause: function (a) {
            this._hold(a, 'pause')
        },
        lap: function (a) {
            this._hold(a, 'lap')
        },
        resume: function (a) {
            this._hold(a, null)
        },
        toggle: function (a) {
            var b = $.data(a, this.name) || {};
            this[!b._hold ? 'pause' : 'resume'](a)
        },
        toggleLap: function (a) {
            var b = $.data(a, this.name) || {};
            this[!b._hold ? 'lap' : 'resume'](a)
        },
        _hold: function (a, b) {
            var c = $.data(a, this.name);
            if (c) {
                if (c._hold == 'pause' && !b) {
                    c._periods = c._savePeriods;
                    var d = (c._since ? '-' : '+');
                    c[c._since ? '_since' : '_until'] = this._determineTime(d + c._periods[0] + 'y' + d + c._periods[1] + 'o' + d + c._periods[2] + 'w' + d + c._periods[3] + 'd' + d + c._periods[4] + 'h' + d + c._periods[5] + 'm' + d + c._periods[6] + 's');
                    this._addElem(a)
                }
                c._hold = b;
                c._savePeriods = (b == 'pause' ? c._periods : null);
                $.data(a, this.name, c);
                this._updateCountdown(a, c)
            }
        },
        getTimes: function (a) {
            var b = $.data(a, this.name);
            return (!b ? null : (b._hold == 'pause' ? b._savePeriods : (!b._hold ? b._periods : this._calculatePeriods(b, b._show, b.options.significant, new Date()))))
        },
        _determineTime: function (k, l) {
            var m = this;
            var n = function (a) {
                var b = new Date();
                b.setTime(b.getTime() + a * 1000);
                return b
            };
            var o = function (a) {
                a = a.toLowerCase();
                var b = new Date();
                var c = b.getFullYear();
                var d = b.getMonth();
                var e = b.getDate();
                var f = b.getHours();
                var g = b.getMinutes();
                var h = b.getSeconds();
                var i = /([+-]?[0-9]+)\s*(s|m|h|d|w|o|y)?/g;
                var j = i.exec(a);
                while (j) {
                    switch (j[2] || 's') {
                        case's':
                            h += parseInt(j[1], 10);
                            break;
                        case'm':
                            g += parseInt(j[1], 10);
                            break;
                        case'h':
                            f += parseInt(j[1], 10);
                            break;
                        case'd':
                            e += parseInt(j[1], 10);
                            break;
                        case'w':
                            e += parseInt(j[1], 10) * 7;
                            break;
                        case'o':
                            d += parseInt(j[1], 10);
                            e = Math.min(e, m._getDaysInMonth(c, d));
                            break;
                        case'y':
                            c += parseInt(j[1], 10);
                            e = Math.min(e, m._getDaysInMonth(c, d));
                            break
                    }
                    j = i.exec(a)
                }
                return new Date(c, d, e, f, g, h, 0)
            };
            var p = (k == null ? l : (typeof k == 'string' ? o(k) : (typeof k == 'number' ? n(k) : k)));
            if (p)p.setMilliseconds(0);
            return p
        },
        _getDaysInMonth: function (a, b) {
            return 32 - new Date(a, b, 32).getDate()
        },
        _normalLabels: function (a) {
            return a
        },
        _generateHTML: function (c) {
            var d = this;
            c._periods = (c._hold ? c._periods : this._calculatePeriods(c, c._show, c.options.significant, new Date()));
            var e = false;
            var f = 0;
            var g = c.options.significant;
            var h = $.extend({}, c._show);
            for (var i = Y; i <= S; i++) {
                e |= (c._show[i] == '?' && c._periods[i] > 0);
                h[i] = (c._show[i] == '?' && !e ? null : c._show[i]);
                f += (h[i] ? 1 : 0);
                g -= (c._periods[i] > 0 ? 1 : 0)
            }
            var j = [false, false, false, false, false, false, false];
            for (var i = S; i >= Y; i--) {
                if (c._show[i]) {
                    if (c._periods[i]) {
                        j[i] = true
                    } else {
                        j[i] = g > 0;
                        g--
                    }
                }
            }
            var k = (c.options.compact ? c.options.compactLabels : c.options.labels);
            var l = c.options.whichLabels || this._normalLabels;
            var m = function (a) {
                var b = c.options['compactLabels' + l(c._periods[a])];
                return (h[a] ? d._translateDigits(c, c._periods[a]) + (b ? b[a] : k[a]) + ' ' : '')
            };
            var n = (c.options.padZeroes ? 2 : 1);
            var o = function (a) {
                var b = c.options['labels' + l(c._periods[a])];
                return ((!c.options.significant && h[a]) || (c.options.significant && j[a]) ? '<span class="' + d._sectionClass + '">' + '<span class="' + d._amountClass + '">' + d._minDigits(c, c._periods[a], n) + '</span>' + '<span class="' + d._periodClass + '">' + (b ? b[a] : k[a]) + '</span></span>' : '')
            };
            return (c.options.layout ? this._buildLayout(c, h, c.options.layout, c.options.compact, c.options.significant, j) : ((c.options.compact ? '<span class="' + this._rowClass + ' ' + this._amountClass + (c._hold ? ' ' + this._holdingClass : '') + '">' + m(Y) + m(O) + m(W) + m(D) + (h[H] ? this._minDigits(c, c._periods[H], 2) : '') + (h[M] ? (h[H] ? c.options.timeSeparator : '') + this._minDigits(c, c._periods[M], 2) : '') + (h[S] ? (h[H] || h[M] ? c.options.timeSeparator : '') + this._minDigits(c, c._periods[S], 2) : '') : '<span class="' + this._rowClass + ' ' + this._showClass + (c.options.significant || f) + (c._hold ? ' ' + this._holdingClass : '') + '">' + o(Y) + o(O) + o(W) + o(D) + o(H) + o(M) + o(S)) + '</span>' + (c.options.description ? '<span class="' + this._rowClass + ' ' + this._descrClass + '">' + c.options.description + '</span>' : '')))
        },
        _buildLayout: function (c, d, e, f, g, h) {
            var j = c.options[f ? 'compactLabels' : 'labels'];
            var k = c.options.whichLabels || this._normalLabels;
            var l = function (a) {
                return (c.options[(f ? 'compactLabels' : 'labels') + k(c._periods[a])] || j)[a]
            };
            var m = function (a, b) {
                return c.options.digits[Math.floor(a / b) % 10]
            };
            var o = {
                desc: c.options.description,
                sep: c.options.timeSeparator,
                yl: l(Y),
                yn: this._minDigits(c, c._periods[Y], 1),
                ynn: this._minDigits(c, c._periods[Y], 2),
                ynnn: this._minDigits(c, c._periods[Y], 3),
                y1: m(c._periods[Y], 1),
                y10: m(c._periods[Y], 10),
                y100: m(c._periods[Y], 100),
                y1000: m(c._periods[Y], 1000),
                ol: l(O),
                on: this._minDigits(c, c._periods[O], 1),
                onn: this._minDigits(c, c._periods[O], 2),
                onnn: this._minDigits(c, c._periods[O], 3),
                o1: m(c._periods[O], 1),
                o10: m(c._periods[O], 10),
                o100: m(c._periods[O], 100),
                o1000: m(c._periods[O], 1000),
                wl: l(W),
                wn: this._minDigits(c, c._periods[W], 1),
                wnn: this._minDigits(c, c._periods[W], 2),
                wnnn: this._minDigits(c, c._periods[W], 3),
                w1: m(c._periods[W], 1),
                w10: m(c._periods[W], 10),
                w100: m(c._periods[W], 100),
                w1000: m(c._periods[W], 1000),
                dl: l(D),
                dn: this._minDigits(c, c._periods[D], 1),
                dnn: this._minDigits(c, c._periods[D], 2),
                dnnn: this._minDigits(c, c._periods[D], 3),
                d1: m(c._periods[D], 1),
                d10: m(c._periods[D], 10),
                d100: m(c._periods[D], 100),
                d1000: m(c._periods[D], 1000),
                hl: l(H),
                hn: this._minDigits(c, c._periods[H], 1),
                hnn: this._minDigits(c, c._periods[H], 2),
                hnnn: this._minDigits(c, c._periods[H], 3),
                h1: m(c._periods[H], 1),
                h10: m(c._periods[H], 10),
                h100: m(c._periods[H], 100),
                h1000: m(c._periods[H], 1000),
                ml: l(M),
                mn: this._minDigits(c, c._periods[M], 1),
                mnn: this._minDigits(c, c._periods[M], 2),
                mnnn: this._minDigits(c, c._periods[M], 3),
                m1: m(c._periods[M], 1),
                m10: m(c._periods[M], 10),
                m100: m(c._periods[M], 100),
                m1000: m(c._periods[M], 1000),
                sl: l(S),
                sn: this._minDigits(c, c._periods[S], 1),
                snn: this._minDigits(c, c._periods[S], 2),
                snnn: this._minDigits(c, c._periods[S], 3),
                s1: m(c._periods[S], 1),
                s10: m(c._periods[S], 10),
                s100: m(c._periods[S], 100),
                s1000: m(c._periods[S], 1000)
            };
            var p = e;
            for (var i = Y; i <= S; i++) {
                var q = 'yowdhms'.charAt(i);
                var r = new RegExp('\\{' + q + '<\\}([\\s\\S]*)\\{' + q + '>\\}', 'g');
                p = p.replace(r, ((!g && d[i]) || (g && h[i]) ? '$1' : ''))
            }
            $.each(o, function (n, v) {
                var a = new RegExp('\\{' + n + '\\}', 'g');
                p = p.replace(a, v)
            });
            return p
        },
        _minDigits: function (a, b, c) {
            b = '' + b;
            if (b.length >= c) {
                return this._translateDigits(a, b)
            }
            b = '0000000000' + b;
            return this._translateDigits(a, b.substr(b.length - c))
        },
        _translateDigits: function (b, c) {
            return ('' + c).replace(/[0-9]/g, function (a) {
                return b.options.digits[a]
            })
        },
        _determineShow: function (a) {
            var b = a.options.format;
            var c = [];
            c[Y] = (b.match('y') ? '?' : (b.match('Y') ? '!' : null));
            c[O] = (b.match('o') ? '?' : (b.match('O') ? '!' : null));
            c[W] = (b.match('w') ? '?' : (b.match('W') ? '!' : null));
            c[D] = (b.match('d') ? '?' : (b.match('D') ? '!' : null));
            c[H] = (b.match('h') ? '?' : (b.match('H') ? '!' : null));
            c[M] = (b.match('m') ? '?' : (b.match('M') ? '!' : null));
            c[S] = (b.match('s') ? '?' : (b.match('S') ? '!' : null));
            return c
        },
        _calculatePeriods: function (c, d, e, f) {
            c._now = f;
            c._now.setMilliseconds(0);
            var g = new Date(c._now.getTime());
            if (c._since) {
                if (f.getTime() < c._since.getTime()) {
                    c._now = f = g
                } else {
                    f = c._since
                }
            } else {
                g.setTime(c._until.getTime());
                if (f.getTime() > c._until.getTime()) {
                    c._now = f = g
                }
            }
            var h = [0, 0, 0, 0, 0, 0, 0];
            if (d[Y] || d[O]) {
                var i = this._getDaysInMonth(f.getFullYear(), f.getMonth());
                var j = this._getDaysInMonth(g.getFullYear(), g.getMonth());
                var k = (g.getDate() == f.getDate() || (g.getDate() >= Math.min(i, j) && f.getDate() >= Math.min(i, j)));
                var l = function (a) {
                    return (a.getHours() * 60 + a.getMinutes()) * 60 + a.getSeconds()
                };
                var m = Math.max(0, (g.getFullYear() - f.getFullYear()) * 12 + g.getMonth() - f.getMonth() + ((g.getDate() < f.getDate() && !k) || (k && l(g) < l(f)) ? -1 : 0));
                h[Y] = (d[Y] ? Math.floor(m / 12) : 0);
                h[O] = (d[O] ? m - h[Y] * 12 : 0);
                f = new Date(f.getTime());
                var n = (f.getDate() == i);
                var o = this._getDaysInMonth(f.getFullYear() + h[Y], f.getMonth() + h[O]);
                if (f.getDate() > o) {
                    f.setDate(o)
                }
                f.setFullYear(f.getFullYear() + h[Y]);
                f.setMonth(f.getMonth() + h[O]);
                if (n) {
                    f.setDate(o)
                }
            }
            var p = Math.floor((g.getTime() - f.getTime()) / 1000);
            var q = function (a, b) {
                h[a] = (d[a] ? Math.floor(p / b) : 0);
                p -= h[a] * b
            };
            q(W, 604800);
            q(D, 86400);
            q(H, 3600);
            q(M, 60);
            q(S, 1);
            if (p > 0 && !c._since) {
                var r = [1, 12, 4.3482, 7, 24, 60, 60];
                var s = S;
                var t = 1;
                for (var u = S; u >= Y; u--) {
                    if (d[u]) {
                        if (h[s] >= t) {
                            h[s] = 0;
                            p = 1
                        }
                        if (p > 0) {
                            h[u]++;
                            p = 0;
                            s = u;
                            t = 1
                        }
                    }
                    t *= r[u]
                }
            }
            if (e) {
                for (var u = Y; u <= S; u++) {
                    if (e && h[u]) {
                        e--
                    } else if (!e) {
                        h[u] = 0
                    }
                }
            }
            return h
        }
    })
})(jQuery);

function getServerTime() {
    var time = null;

    $.ajax({
        url: getUrl('/service/getServerTime.php'),
        async: false,
        dataType: 'text',
        success: function (text) {
            time = text;
        },
        error: function (http, message, exc) {
            time = Math.floor(Date.now() / 1000);
        }
    });
    return time;
}

function getUrl(url) {
    if (wrc.preview) {
        url = '/www_de/' + url;
    }

    return url;
}

function translate() {
    var lang = $("#lang").val().toLowerCase();
    $(document).find("*[data-lang-" + lang + "]").each(function () {
        if ($(this).attr("data-lang-" + lang) !== '') {
            $(this).html($(this).attr("data-lang-" + lang));
            var text = $(this).attr("data-lang-" + lang);
            $(this).html(text);
        }
    });
}

var videoBox = {
    playerUrl: 'http://www.laola1.tv/titanplayer_hls.php?type=V&lang=en&customer=2112&videoid=',
    playerHtml: '<iframe src="PLAYERURL" scrolling="no" style="border: none;"> </iframe>',
    switchTab: function (that) {
        if (!that.parent().hasClass('active')) {
            var tab = that.data('tab');

            $(document).find('.videocenter .cat-nav li').each(function () {
                $(this).removeClass('active');
            });

            $(document).find('.all-videos').each(function () {
                $(this).hide();
            });

            that.parent().addClass('active');
            $(document).find('.all-videos[data-tab="' + tab + '"').show().slick('setPosition');
        }

    },
    switchVideo: function (that) {
        $(document).find('.videocenter .slide').each(function () {
            $(this).removeClass('active');
        });

        var videoId = that.data('id');
        var parent = that.parent();


        if (!parent.hasClass('active') && videoId != 0) {
            var player = $(document).find('.player-wrapper');
            player.html(this.playerHtml.replace('PLAYERURL', this.playerUrl + videoId));
        } else {
            $('.videocenter .player img, .videocenter .player iframe').replaceWith('<a target="_blank" href="' + that.data('link') + '"><img style="width: 100%; float: left;" src="' + that.data('img') + '"/></a>');
        }

        parent.addClass('active');
    }
};

// Links innerhalb von Daten-HTMLs
function box_changer(selector, event, sel_link, attr_link) {

    $(document).on(event, selector, function (e) {

        e.preventDefault();
        if (window.location.hash && $.inArray("wrcLiveExternal", hash) != -1) {
            $(document).find('.contentnav').remove();

        } else if (selector === "a[href^='/live-ticker']" || selector === ".contentnav .category form>select" || selector === "select[name='rally_id']") {
            $(document).find('.frontpage-livecenter .contentnav, .liveCenterContent .contentnav').remove();
        }


        var that = $(this);
        $.get(that.attr(attr_link), function (data) {
            lang = $("#lang").val().toLowerCase();
            if (lang == "pl") {
                lang = "po";
            }
            data = $.parseHTML(data);

            $(data).find("*[data-lang-" + lang + "]").each(function () {
                if ($(this).attr("data-lang-" + lang) !== '') {
                    $(this).html($(this).attr("data-lang-" + lang));
                    var text = $(this).attr("data-lang-" + lang);

                    if ($(this).is("h4")) {
                        if ($('.wrapper').width() <= 960) {
                            $(this).html(text + "<span class='toggle'>-</span>");
                        } else {
                            $(this).html(text + "<span class='toggle'>-</span>");
                        }
                    } else {
                        $(this).html(text);
                    }
                }

            });

            var rootLookup = $("#datasite");
            if (rootLookup.length == 0) {
                rootLookup = that.closest("#datasite");
            }
            if (window.location.hash && $.inArray("wrcLiveExternal", hash) !== -1) {
                rootLookup = $("#datasite");
            }
            rootLookup.replaceWith(data);
            rootLookup.fadeTo(200, 1);
            var v;
            if ($('.wrapper').width() <= 960 && (v == 'vlarge' || v === undefined)) {
                $('#datasite .w50:last').prependTo('#datasite .data').children('.scrolltable').hide().prev('h4').children('.toggle').text('+');
                $('#datasite .w50:last').children('.scrolltable').show().prev('h4').children('.toggle').text('-');
                $('.data').scrollTop(0);
                v = 'vsmall';
            }
            if ($('.wrapper').width() > 960 && v == 'vsmall') {
                $('#datasite .w50:last').prependTo('#datasite .data');
                $('#datasite .scrolltable').show();
                v = 'vlarge';
            }

        }).done(function () {
            if ($("#myTable").length) {
                $("#myTable").tablesorter({
                    cssheader_sort: "header_sort",
                    cssAsc: "header_sortSortDown",
                    cssDesc: "header_sortSortUp"
                });
            }

            //CSS edits if used external
            if (window.location.hash && $.inArray("wrcLiveExternal", hash) !== -1) {
                console.log("in it");
                $('#datasite').css('width', '100%').css('height', 'auto').css('border-left-width', '0').css('border-right-width', '0').css('margin', '0');
                $('.content_full .box').css('margin-bottom', '0');
                $('.box').css('margin', '0');
                $('#datasite > .data, .content_full, #datasite table').css('width', '100%');
                $('.content_full ul.contentnav a').css('width', 'auto');
            }
            if (window.location.hash && $.inArray("wrcLiveExternal", hash) != -1) {
                $(document).find('a').each(function () {
                    if ($(this).attr('href').indexOf('#') == -1) {
                        $(this).attr('href', $(this).attr('href') + window.location.hash);
                    }
                })
                $(document).find('li.contentnav-right').hide();
            } else if (selector === "a[href^='/live-ticker']" || selector === ".contentnav .category form>select" || selector === "select[name='rally_id']") {
                $(document).find('.frontpage-livecenter li.contentnav-right, .liveCenterContent li.contentnav-right').hide();
            }

        });


    });
}// file: jquery.touchstac.js
// jQuery TouchStac 1.0
//
// USAGE
// $(selector).touchstac(config);
//
// The wipe events should expect the result object with the following properties:
// speed - the wipe speed from 1 to 5
// x - how many pixels moved on the horizontal axis
// y - how many pixels moved on the vertical axis
//
// EXAMPLE
//      $(document).touchstac({
//          allowDiagonal: true,
//          wipeLeft: function(result) { alert("Left on speed " + result.speed) },
//          wipeTopLeft: function(result) { alert("Top left on speed " + result.speed) },
//          wipeBottomLeft: function(result) { alert("Bottom left on speed " + result.speed) }
//      });
//
//

(function($) {
    $.fn.touchstac = function(settings) {
        // ------------------------------------------------------------------------
        // PLUGIN SETTINGS
        // ------------------------------------------------------------------------

        var config = {
            // Variables and options
            moveX : 40, // minimum amount of horizontal pixels to trigger a wipe event
            moveY : 40, // minimum amount of vertical pixels to trigger a wipe event
            preventDefault : true, // if true, prevents default events (click for example)
            allowDiagonal : false, // if false, will trigger horizontal and vertical movements so
            // wipeTopLeft, wipeDownLeft, wipeTopRight, wipeDownRight are ignored
            tapToClick : false, // if user taps the screen it will fire a click event on the touched element

            // Wipe events
            wipeLeft : false, // called on wipe left gesture
            wipeRight : false, // called on wipe right gesture
            wipeUp : false, // called on wipe up gesture
            wipeDown : false, // called on wipe down gesture
            wipeUpLeft : false, // called on wipe top and left gesture
            wipeDownLeft : false, // called on wipe bottom and left gesture
            wipeUpRight : false, // called on wipe top and right gesture
            wipeDownRight : false, // called on wipe bottom and right gesture
            wipeMove : false, // triggered whenever touchMove acts
            wipeMoveCancel : false, // triggered when a move results in tap or cancelled by system
            wipeMoveEnd : false, // triggered everytime move ends irrespective of wipeUp/Left/Right/Down...

            wipeTopLeft : false, // DEPRECATED, USE WIPEUPLEFT
            wipeBottomLeft : false, // DEPRECATED, USE WIPEDOWNLEFT
            wipeTopRight : false, // DEPRECATED, USE WIPEUPRIGHT
            wipeBottomRight : false, // DEPRECATED, USE WIPEDOWNRIGHT

            // Gesture events
            gestureStart : false,
            gestureChange : false,
            gestureEnd : false,
            wipeWithGesture : false
        };

        if (settings) {
            $.extend(config, settings);
        }

        this.each(function() {
            // ------------------------------------------------------------------------
            // INTERNAL VARIABLES
            // ------------------------------------------------------------------------
            var startX = [];
            // where touch has started, left
            var startY = [];
            // where touch has started, top
            var startDate = false;
            // used to calculate timing and aprox. acceleration
            var curX = [];
            // keeps touch X position while moving on the screen
            var curY = [];
            // keeps touch Y position while moving on the screen
            var isMoving = false;
            // is user touching and moving?
            var touchedElement = false;
            // element which user has touched
            var fingersTouching = 0;
            var fingersTotal = 0;
            var isGesture = false;

            // these are for Windows Phone compatibility!
            var useMouseEvents = false;
            // force using the mouse events to simulate touch
            var clickEvent = false;
            // holds the click event of the target, when used hasn't clicked

            // ------------------------------------------------------------------------
            // TOUCH EVENTS
            // ------------------------------------------------------------------------

            // Called when user touches the screen
            function onTouchStart(e) {
                if (e.originalEvent.touches.length > 0) {
                    if (config.preventDefault) {
                        e.preventDefault();
                    }

                    // temporary fix for deprecated events, will be removed soon!!!
                    if (config.allowDiagonal) {
                        if (!config.wipeDownLeft)
                            config.wipeDownLeft = config.wipeBottomLeft;
                        if (!config.wipeDownRight)
                            config.wipeDownRight = config.wipeBottomRight;
                        if (!config.wipeUpLeft)
                            config.wipeUpLeft = config.wipeTopLeft;
                        if (!config.wipeUpRight)
                            config.wipeUpRight = config.wipeTopRight;
                    }
                    startDate = new Date().getTime();
                    if (!e.handling) {
                        resetTouch();
                    }
                    for (var i = fingersTouching; i < e.originalEvent.touches.length; i++) {
                        startX[i] = e.originalEvent.touches[i].pageX;
                        startY[i] = e.originalEvent.touches[i].pageY;
                        curX[i] = startX[i];
                        curY[i] = startY[i];
                        fingersTouching++;
                        fingersTotal++;
                    }
                    isMoving = true;

                    e.handling = true;

                    touchedElement = $(e.originalEvent.target);
                }
            }

            function onGestureStart(e) {
                triggerEvent(config.gestureStart, {
                    startX : startX,
                    startY : startY,
                    curX : curX,
                    curY : curY,
                    scale : e.originalEvent.scale,
                    rotation : e.originalEvent.rotation
                }, e);
                if (!config.wipeWithGesture && (config.gestureStart || config.gestureChange || config.gestureEnd)) {
                    isGesture = true;
                    onTouchCancel(e);
                }
            }

            function onGestureEnd(e) {
                triggerEvent(config.gestureEnd, {
                    startX : startX,
                    startY : startY,
                    curX : curX,
                    curY : curY,
                    scale : e.originalEvent.scale,
                    rotation : e.originalEvent.rotation
                }, e);
            }

            function onGestureChange(e) {
                triggerEvent(config.gestureChange, {
                    startX : startX,
                    startY : startY,
                    curX : curX,
                    curY : curY,
                    scale : e.originalEvent.scale,
                    rotation : e.originalEvent.rotation
                }, e);
            }

            // Called when user untouches the screen
            function onTouchEnd(e) {
                fingersTouching = 0;
                if (!isGesture)
                    touchCalculate(e);
            }

            function onTouchCancel(e) {
                triggerEvent(config.wipeMoveCancel, {
                    startX : startX,
                    startY : startY,
                    curX : curX,
                    curY : curY,
                    scale : e.originalEvent.scale
                }, e);
                resetTouch();
            }

            // Called when user is touching and moving on the screen
            function onTouchMove(e) {
                if (config.preventDefault) {
                    e.preventDefault();
                }

                if (isMoving) {
                    if (useMouseEvents) {
                        curX = e.originalEvent.pageX;
                        curY = e.originalEvent.pageY;
                    } else {
                        var avgCurX = 0;
                        var avgCurY = 0;
                        for ( i = 0; i < e.originalEvent.touches.length; i++) {
                            if (i == fingersTouching) {
                                startX[fingersTouching] = e.originalEvent.touches[i].pageX;
                                startY[fingersTouching] = e.originalEvent.touches[i].pageY;
                                fingersTotal++;
                                fingersTouching++;
                            }
                            curX[i] = e.originalEvent.touches[i].pageX;
                            curY[i] = e.originalEvent.touches[i].pageY;
                            avgCurX += curX[i];
                            avgCurY += curY[i];
                        }
                        avgCurX = Math.floor(avgCurX / e.originalEvent.touches.length);
                        avgCurY = Math.floor(avgCurY / e.originalEvent.touches.length);
                    }

                    // if there's a wipeMove event, call it passing
                    // current X and Y position (curX and curY)
                    if (config.wipeMove && !isGesture) {
                        triggerEvent(config.wipeMove, {
                            curX : curX,
                            curY : curY,
                            startX : startX,
                            startY : startY,
                        }, e);
                    }
                }
            }

            // ------------------------------------------------------------------------
            // CALCULATE TOUCH AND TRIGGER
            // ------------------------------------------------------------------------

            function touchCalculate(e) {
                var endDate = new Date().getTime();
                // current date to calculate timing
                var ms = startDate - endDate;
                // duration of touch in milliseconds

                var dx = 0;
                var dy = 0;
                for ( i = 0; i < fingersTotal; i++) {
                    var x = curX[i];
                    // current left position
                    var y = curY[i];
                    // current top position
                    dx += x - startX[i];
                    // diff of current left to starting left
                    dy += y - startY[i];
                    // diff of current top to starting top
                }
                dx /= fingersTotal;
                dy /= fingersTotal;
                var ax = Math.abs(dx);
                // amount of horizontal movement
                var ay = Math.abs(dy);
                // amount of vertical movement
                // moved less than 15 pixels and touch duration less than 100ms,
                // if tapToClick is true then triggers a click and stop processing
                if (config.tapToClick && ax < 15 && ay < 15 && ms < 100 && fingersTotal == 1) {

                    onTouchCancel(e);
                    resetTouch();
                    if (touchedElement.context.nodeName == "#text") {
                        touchedElement.parent().trigger("tap");
                    } else {
                        // add click, otherwise not working without mobile JQuery / old JQuery version
                        touchedElement.trigger("tap");
                        touchedElement.trigger("click");
                    }
                    return;
                }

                var toright = dx > 0;
                // if true X movement is to the right, if false is to the left
                var tobottom = dy > 0;
                // if true Y movement is to the bottom, if false is to the top

                // calculate speed from 1 to 5, being 1 slower and 5 faster
                var s = ((ax + ay) * 60) / ((ms) / 6 * (ms));

                if (s < 1)
                    s = 1;
                if (s > 5)
                    s = 5;

                var result = {
                    speed : parseInt(s),
                    x : ax,
                    y : ay,
                    startX : startX,
                    startY : startY,
                    curX : curX,
                    curY : curY,
                };

                if (ax >= config.moveX) {
                    // check if it's allowed and call diagonal wipe events
                    if (config.allowDiagonal && ay >= config.moveY) {
                        if (toright && tobottom) {
                            triggerEvent(config.wipeDownRight, result, e);
                        } else if (toright && !tobottom) {
                            triggerEvent(config.wipeUpRight, result, e);
                        } else if (!toright && tobottom) {
                            triggerEvent(config.wipeDownLeft, result, e);
                        } else {
                            triggerEvent(config.wipeUpLeft, result, e);
                        }
                    } else if (ax >= ay) {
                        if (toright) {
                            triggerEvent(config.wipeRight, result, e);
                        } else {
                            triggerEvent(config.wipeLeft, result, e);
                        }
                    }
                }

                if (ay >= config.moveY && ay > ax) {
                    if (tobottom) {
                        triggerEvent(config.wipeDown, result, e);
                    } else {
                        triggerEvent(config.wipeUp, result, e);
                    }
                }

                triggerEvent(config.wipeMoveEnd, result, e);

                if (config.preventDefault) {
                    e.preventDefault();
                    //e.stopPropagation();
                }

                resetTouch();
            }

            // Resets the cached variables
            function resetTouch() {
                startX = [];
                startY = [];
                startDate = false;
                isMoving = false;
                isGesture = false;
                curX = [];
                curY = [];
                fingersTotal = 0;
                fingersTouching = 0;
            }

            // Triggers a wipe event passing a result object with
            // speed from 1 to 5, and x / y movement amount in pixels
            function triggerEvent(wipeEvent, result, event) {
                if (wipeEvent) {
                    wipeEvent(result, event);
                }
            }

            // ------------------------------------------------------------------------
            // ADD TOUCHSTART AND TOUCHEND EVENT LISTENERS
            // ------------------------------------------------------------------------

            if ('ontouchstart' in document.documentElement) {
                $(this).off('touchstart', this);
                $(this).off('touchend', this);
                $(this).off('touchcancel', this);
                $(this).off('touchmove', this);
                $(this).off('gesturestart', this);
                $(this).off('gestureend', this);
                $(this).off('gesturechange', this);
                $(this).on('touchstart', this, onTouchStart);
                $(this).on('touchend', this, onTouchEnd);
                $(this).on('touchcancel', this, onTouchCancel);
                $(this).on('touchmove', this, onTouchMove);
                $(this).on('gesturestart', this, onGestureStart);
                $(this).on('gestureend', this, onGestureEnd);
                $(this).on('gesturechange', this, onGestureChange);
            }

        });

        return this;
    };
})(jQuery);
// file: jquery.lightbox-0.5.js
/**
 * jQuery lightBox plugin
 * This jQuery plugin was inspired and based on Lightbox 2 by Lokesh Dhakar (http://www.huddletogether.com/projects/lightbox2/)
 * and adapted to me for use like a plugin from jQuery.
 * @name jquery-lightbox-0.5.js
 * @author Leandro Vieira Pinho - http://leandrovieira.com
 * @version 0.5
 * @date April 11, 2008
 * @category jQuery plugin
 * @copyright (c) 2008 Leandro Vieira Pinho (leandrovieira.com)
 * @license CCAttribution-ShareAlike 2.5 Brazil - http://creativecommons.org/licenses/by-sa/2.5/br/deed.en_US
 * @example Visit http://leandrovieira.com/projects/jquery/lightbox/ for more informations about this jQuery plugin
 */

// Offering a Custom Alias suport - More info: http://docs.jquery.com/Plugins/Authoring#Custom_Alias
(function($) {
	/**
	 * $ is an alias to jQuery object
	 *
	 */

	$.fn.lightBox = function(settings) {
		// Settings to configure the jQuery lightBox plugin how you like
		settings = jQuery.extend({
			// Configuration related to overlay
			overlayBgColor: 		'#000',		// (string) Background color to overlay; inform a hexadecimal value like: #RRGGBB. Where RR, GG, and BB are the hexadecimal values for the red, green, and blue values of the color.
			overlayOpacity:			0.8,		// (integer) Opacity value to overlay; inform: 0.X. Where X are number from 0 to 9
			// Configuration related to navigation
			fixedNavigation:		false,		// (boolean) Boolean that informs if the navigation (next and prev button) will be fixed or not in the interface.
			// Configuration related to images
			imageLoading:			wrc.image_path + 'loading.gif',		// (string) Path and the name of the loading icon
			imageBtnPrev:			wrc.image_path + 'btn_prev.png',			// (string) Path and the name of the prev button image
			imageBtnNext:			wrc.image_path + 'btn_next.png',			// (string) Path and the name of the next button image
			imageBtnClose:			wrc.image_path + 'btn_close.png',		// (string) Path and the name of the close btn
			imageBlank:				wrc.image_path + 'blank.gif',			// (string) Path and the name of a blank image (one pixel)
			// Configuration related to container image box
			containerBorderSize:	8,			// (integer) If you adjust the padding in the CSS for the container, #lightbox-container-image-box, you will need to update this value
			containerResizeSpeed:	400,		// (integer) Specify the resize duration of container image. These number are miliseconds. 400 is default.
			// Configuration related to texts in caption. For example: Image 2 of 8. You can alter either "Image" and "of" texts.
			txtImage:				'Image',	// (string) Specify text "Image"
			txtOf:					'of',		// (string) Specify text "of"
			// Configuration related to keyboard navigation
			keyToClose:				'c',		// (string) (c = close) Letter to close the jQuery lightBox interface. Beyond this letter, the letter X and the SCAPE key is used to.
			keyToPrev:				'p',		// (string) (p = previous) Letter to show the previous image
			keyToNext:				'n',		// (string) (n = next) Letter to show the next image.
			// Don�t alter these variables in any way
			imageArray:				[],
			activeImage:			0,
			// Konfiguration fuer Werbung
			showCAD:				true, 		// (boolean) ob ContentAd in Lightbox angezeigt werden soll (wird beim Start überprüft)
			CADafterPicNo:			5, 			// (integer) nach wievielen Bildern ein ContentAd angezeigt werden soll
			pathCAD:				(window.location.pathname.indexOf("gen_pages") !== -1 || window.location.pathname.indexOf("gen_slideshows") !== -1  ? '../www_de' : '') + '/service/getWerbung.php?sitepage=schalke04.de/aktuell/&position=Middle4'
		},settings);
		// Caching the jQuery object with all elements matched
		var jQueryMatchedObj = this; // This, in this context, refer to jQuery object
		/**
		 * Initializing the plugin calling the start function
		 *
		 * @return boolean false
		 */
		function _initialize() {
			_start(this,jQueryMatchedObj); // This, in this context, refer to object (link) which the user have clicked
			return false; // Avoid the browser following the link
		}
		/**
		 * Start the jQuery lightBox plugin
		 *
		 * @param object objClicked The object (link) whick the user have clicked
		 * @param object jQueryMatchedObj The jQuery object with all elements matched
		 */
		function _start(objClicked,jQueryMatchedObj) {
			// Hime some elements to avoid conflict with overlay in IE. These elements appear above the overlay.
			$('embed, object, select').css({ 'visibility' : 'hidden' });
			// Call the function to create the markup structure; style some elements; assign events in some elements.
			_set_interface();
			// Unset total images in imageArray
			settings.imageArray.length = 0;
			// Unset image active information
			settings.activeImage = 0;
			// We have an image set? Or just an image? Let�s see it.
			if ( jQueryMatchedObj.length == 1 ) {
				settings.imageArray.push(new Array(objClicked.getAttribute('href'),objClicked.getAttribute('title')));
			} else {
				// Add an Array (as many as we have), with href and title atributes, inside the Array that storage the images references		
				for ( var i = 0; i < jQueryMatchedObj.length; i++ ) {
					settings.imageArray.push(new Array(jQueryMatchedObj[i].getAttribute('href'),jQueryMatchedObj[i].getAttribute('title')));
				}
			}
			
			// Diashow-ID heraussuchen und prüfen, ob Content Ad angezeigt werden soll
			attrClass = $(objClicked).attr("class");
			attrClass = attrClass.replace("lightbox[", "");
			attrClass = attrClass.replace("]", "");
			attrClass = attrClass.split("_");
			$.ajax({
				url: '/service/getPixelInfos.php',
				type: 'GET',
				data: ({ id: attrClass[0], lang: $("#lang").val() }),
				dataType: 'json',
				success: function(data) {
					settings.showCAD = (data && data.show_cad==0) ? false : true;
				},
				error: function() { settings.showCAD = false; },
				complete : function() {
					// Werbung
					// wenn ContentAd angezeigt werden soll, an entsprechenden Stellen im imageArray einfügen
					if(settings.showCAD == true) {
						for(i=0; i<settings.imageArray.length; i++) {
							if((i+1)%(settings.CADafterPicNo+1)==0 && i!=0) { 
								settings.imageArray.splice(i, 0, new Array("contentad", "Werbung"));
							}
						}
					}
					
					while ( settings.imageArray[settings.activeImage][0] != objClicked.getAttribute('href') ) {
						settings.activeImage++;
					}
					// Call the function that prepares image exibition
					_set_image_to_view();
				}
			});
		}
		/**
		 * Create the jQuery lightBox plugin interface
		 *
		 * The HTML markup will be like that:
			<div id="jquery-overlay"></div>
			<div id="jquery-lightbox">
				<div id="lightbox-container-image-box">
					<div id="lightbox-container-image">
						<img src="../fotos/XX.jpg" id="lightbox-image">
						<div id="lightbox-nav">
							<a href="#" id="lightbox-nav-btnPrev"></a>
							<a href="#" id="lightbox-nav-btnNext"></a>
						</div>
						<div id="lightbox-loading">
							<a href="#" id="lightbox-loading-link">
								<img src="../images/lightbox-ico-loading.gif">
							</a>
						</div>
					</div>
				</div>
				<div id="lightbox-container-image-data-box">
					<div id="lightbox-container-image-data">
						<div id="lightbox-image-details">
							<span id="lightbox-image-details-caption"></span>
							<span id="lightbox-image-details-currentNumber"></span>
						</div>
						<div id="lightbox-secNav">
							<a href="#" id="lightbox-secNav-btnClose">
								<img src="../images/lightbox-btn-close.gif">
							</a>
						</div>
					</div>
				</div>
			</div>
		 *
		 */
		function _set_interface() {
			// Apply the HTML markup into body tag
			$('body').append('<div id="jquery-overlay"></div><div id="jquery-lightbox"><div id="lightbox-container-image-box"><div id="lightbox-container-image"><iframe src="" id="lightbox_DiaContentAd" scrolling="no" frameborder="0" border="0" style="position:relative; width:300px; height:250px; background:none; margin-top:130px; z-index:20; display:none;"></iframe><img id="lightbox-image"><div style="" id="lightbox-nav"><a href="#" id="lightbox-nav-btnPrev"></a><a href="#" id="lightbox-nav-btnNext"></a></div><div id="lightbox-loading"><a href="#" id="lightbox-loading-link"><img src="' + settings.imageLoading + '"></a></div></div></div><div id="lightbox-container-image-data-box"><div id="lightbox-container-image-data"><div id="lightbox-image-details"><span id="lightbox-image-details-caption"></span><span id="lightbox-image-details-currentNumber"></span></div><div id="lightbox-secNav"><a href="#" id="lightbox-secNav-btnClose"><img src="' + settings.imageBtnClose + '"></a></div></div></div></div>');	
			// Get page sizes
			var arrPageSizes = ___getPageSize();
			// Style overlay and show it
			$('#jquery-overlay').css({
				backgroundColor:	settings.overlayBgColor,
				opacity:			settings.overlayOpacity,
				width:				arrPageSizes[0],
				height:				arrPageSizes[1]
			}).fadeIn();
			// Get page scroll
			var arrPageScroll = ___getPageScroll();
			// Calculate top and left offset for the jquery-lightbox div object and show it
			$('#jquery-lightbox').css({
				top:	arrPageScroll[1] + (arrPageSizes[3] / 10),
				left:	arrPageScroll[0]
			}).show();
			// Assigning click events in elements to close overlay
			$('#jquery-overlay,#jquery-lightbox').click(function() {
				_finish();									
			});
			// Assign the _finish function to lightbox-loading-link and lightbox-secNav-btnClose objects
			$('#lightbox-loading-link,#lightbox-secNav-btnClose').click(function() {
				_finish();
				return false;
			});
			// If window was resized, calculate the new overlay dimensions
			$(window).resize(function() {
				// Get page sizes
				var arrPageSizes = ___getPageSize();
				// Style overlay and show it
				$('#jquery-overlay').css({
					width:		arrPageSizes[0],
					height:		arrPageSizes[1]
				});
				// Get page scroll
				var arrPageScroll = ___getPageScroll();
				// Calculate top and left offset for the jquery-lightbox div object and show it
				$('#jquery-lightbox').css({
					top:	arrPageScroll[1] + (arrPageSizes[3] / 10),
					left:	arrPageScroll[0]
				});
			});
		}
		/**
		 * Prepares image exibition; doing a image�s preloader to calculate it�s size
		 *
		 */
		function _set_image_to_view() { // show the loading
			
			// Show the loading
			$('#lightbox-loading').show();
			
			$('#lightbox_DiaContentAd').attr("src", "").hide();
			
			if ( settings.fixedNavigation ) {
				$('#lightbox-image,#lightbox-container-image-data-box,#lightbox-image-details-currentNumber').hide();
			} else {
				// Hide some elements
				$('#lightbox-image,#lightbox-nav,#lightbox-nav-btnPrev,#lightbox-nav-btnNext,#lightbox-container-image-data-box,#lightbox-image-details-currentNumber').hide();
			}
			// Image preload process
			var objImagePreloader = new Image();
			objImagePreloader.onload = function() {
				$('#lightbox-image').attr('src',settings.imageArray[settings.activeImage][0]);
				// Perfomance an effect in the image container resizing it
				_resize_container_image_box(objImagePreloader.width,objImagePreloader.height);
				//	clear onLoad, IE behaves irratically with animated gifs otherwise
				objImagePreloader.onload=function(){};
			};
			objImagePreloader.src = settings.imageArray[settings.activeImage][0];
			
			// Werbung
			// wenn ContentAd angezeigt werden soll, dementsprechend anzeigen
			if(settings.showCAD==true && (settings.activeImage+1)%(settings.CADafterPicNo+1)==0 && settings.activeImage!=0 && settings.activeImage!=settings.imageArray.length-1) {
				$('#lightbox-image').hide();
				$('#lightbox_DiaContentAd').attr("src", settings.pathCAD);
				//$('#lightbox_DiaContentAd').show();
				$('#lightbox_DiaContentAd').fadeIn(function() {
					_show_image_data();
					//_set_clickNumber();
					_set_navigation();
				});
				$('#lightbox-loading').hide();
			}
		};
		/**
		 * Perfomance an effect in the image container resizing it
		 *
		 * @param integer intImageWidth The image�s width that will be showed
		 * @param integer intImageHeight The image�s height that will be showed
		 */
		function _resize_container_image_box(intImageWidth,intImageHeight) {
			// Get current width and height
			var intCurrentWidth = $('#lightbox-container-image-box').width();
			var intCurrentHeight = $('#lightbox-container-image-box').height();
			// Get the width and height of the selected image plus the padding
			var intWidth = (intImageWidth + (settings.containerBorderSize * 2)); // Plus the image�s width and the left and right padding value
			var intHeight = (intImageHeight + (settings.containerBorderSize * 2)); // Plus the image�s height and the left and right padding value
			// Diferences
			var intDiffW = intCurrentWidth - intWidth;
			var intDiffH = intCurrentHeight - intHeight;
			// Perfomance the effect
			$('#lightbox-container-image-box').animate({ width: intWidth, height: intHeight },settings.containerResizeSpeed,function() { _show_image(); });
			if ( ( intDiffW == 0 ) && ( intDiffH == 0 ) ) {
				if ( $.browser.msie ) {
					___pause(250);
				} else {
					___pause(100);	
				}
			} 
			$('#lightbox-container-image-data-box').css({ width: intImageWidth });
			$('#lightbox-nav-btnPrev,#lightbox-nav-btnNext').css({ height: intImageHeight + (settings.containerBorderSize * 2) });
		};
		/**
		 * Show the prepared image
		 *
		 */
		function _show_image() {
			$('#lightbox-loading').hide();
			$('#lightbox-image').fadeIn(function() {
				_show_image_data();
				_set_navigation();
			});
			_preload_neighbor_images();
		};
		/**
		 * Show the image information
		 *
		 */
		function _show_image_data() {
			$('#lightbox-container-image-data-box').slideDown('fast');
			$('#lightbox-image-details-caption').hide();
			if ( settings.imageArray[settings.activeImage][1] ) {
				$('#lightbox-image-details-caption').html(settings.imageArray[settings.activeImage][1]).show();
			}
			// If we have a image set, display 'Image X of X'
			if ( settings.imageArray.length > 1 ) {
				$('#lightbox-image-details-currentNumber').html(settings.txtImage + ' ' + ( settings.activeImage + 1 ) + ' ' + settings.txtOf + ' ' + settings.imageArray.length).show();
			}		
		}
		/**
		 * Display the button navigations
		 *
		 */
		function _set_navigation() {
			$('#lightbox-nav').show();

			// Instead to define this configuration in CSS file, we define here. And it�s need to IE. Just.
			$('#lightbox-nav-btnPrev,#lightbox-nav-btnNext').css({ 'background' : 'transparent url(' + settings.imageBlank + ') no-repeat' });
			
			// Show the prev button, if not the first image in set
			if ( settings.activeImage != 0 ) {
				if ( settings.fixedNavigation ) {
					$('#lightbox-nav-btnPrev').css({ 'background' : 'url(' + settings.imageBtnPrev + ') left 15% no-repeat' })
						.unbind()
						.bind('click',function() {
							settings.activeImage = settings.activeImage - 1;
							_set_image_to_view();
							return false;
						});
				} else {
					// Show the images button for Next buttons
					$('#lightbox-nav-btnPrev').unbind().hover(function() {
						$(this).css({ 'background' : 'url(' + settings.imageBtnPrev + ') left 15% no-repeat' });
					},function() {
						$(this).css({ 'background' : 'transparent url(' + settings.imageBlank + ') no-repeat' });
					}).show().bind('click',function() {
						settings.activeImage = settings.activeImage - 1;
						_set_image_to_view();
						return false;
					});
				}
			}
			
			// Show the next button, if not the last image in set
			if ( settings.activeImage != ( settings.imageArray.length -1 ) ) {
				if ( settings.fixedNavigation ) {
					$('#lightbox-nav-btnNext').css({ 'background' : 'url(' + settings.imageBtnNext + ') right 15% no-repeat' })
						.unbind()
						.bind('click',function() {
							settings.activeImage = settings.activeImage + 1;
							_set_image_to_view();
							return false;
						});
				} else {
					// Show the images button for Next buttons
					$('#lightbox-nav-btnNext').unbind().hover(function() {
						$(this).css({ 'background' : 'url(' + settings.imageBtnNext + ') right 15% no-repeat' });
					},function() {
						$(this).css({ 'background' : 'transparent url(' + settings.imageBlank + ') no-repeat' });
					}).show().bind('click',function() {
						settings.activeImage = settings.activeImage + 1;
						_set_image_to_view();
						return false;
					});
				}
			}
			// Enable keyboard navigation
			_enable_keyboard_navigation();
		}
		/**
		 * Enable a support to keyboard navigation
		 *
		 */
		function _enable_keyboard_navigation() {
			$(document).keydown(function(objEvent) {
				_keyboard_action(objEvent);
			});
		}
		/**
		 * Disable the support to keyboard navigation
		 *
		 */
		function _disable_keyboard_navigation() {
			$(document).unbind();
		}
		/**
		 * Perform the keyboard actions
		 *
		 */
		function _keyboard_action(objEvent) {
			// To ie
			if ( objEvent == null ) {
				keycode = event.keyCode;
				escapeKey = 27;
			// To Mozilla
			} else {
				keycode = objEvent.keyCode;
				escapeKey = objEvent.DOM_VK_ESCAPE;
			}
			// Get the key in lower case form
			key = String.fromCharCode(keycode).toLowerCase();
			// Verify the keys to close the ligthBox
			if ( ( key == settings.keyToClose ) || ( key == 'x' ) || ( keycode == escapeKey ) ) {
				_finish();
			}
			// Verify the key to show the previous image
			if ( ( key == settings.keyToPrev ) || ( keycode == 37 ) ) {
				// If we�re not showing the first image, call the previous
				if ( settings.activeImage != 0 ) {
					settings.activeImage = settings.activeImage - 1;
					_set_image_to_view();
					_disable_keyboard_navigation();
				}
			}
			// Verify the key to show the next image
			if ( ( key == settings.keyToNext ) || ( keycode == 39 ) ) {
				// If we�re not showing the last image, call the next
				if ( settings.activeImage != ( settings.imageArray.length - 1 ) ) {
					settings.activeImage = settings.activeImage + 1;
					_set_image_to_view();
					_disable_keyboard_navigation();
				}
			}
		}
		/**
		 * Preload prev and next images being showed
		 *
		 */
		function _preload_neighbor_images() {
			if ( (settings.imageArray.length -1) > settings.activeImage ) {
				objNext = new Image();
				objNext.src = settings.imageArray[settings.activeImage + 1][0];
			}
			if ( settings.activeImage > 0 ) {
				objPrev = new Image();
				objPrev.src = settings.imageArray[settings.activeImage -1][0];
			}
		}
		/**
		 * Remove jQuery lightBox plugin HTML markup
		 *
		 */
		function _finish() {
			$('#jquery-lightbox').remove();
			$('#jquery-overlay').fadeOut(function() { $('#jquery-overlay').remove(); });
			// Show some elements to avoid conflict with overlay in IE. These elements appear above the overlay.
			$('embed, object, select').css({ 'visibility' : 'visible' });
		}
		/**
		 / THIRD FUNCTION
		 * getPageSize() by quirksmode.com
		 *
		 * @return Array Return an array with page width, height and window width, height
		 */
		function ___getPageSize() {
			var xScroll, yScroll;
			if (window.innerHeight && window.scrollMaxY) {	
				xScroll = window.innerWidth + window.scrollMaxX;
				yScroll = window.innerHeight + window.scrollMaxY;
			} else if (document.body.scrollHeight > document.body.offsetHeight){ // all but Explorer Mac
				xScroll = document.body.scrollWidth;
				yScroll = document.body.scrollHeight;
			} else { // Explorer Mac...would also work in Explorer 6 Strict, Mozilla and Safari
				xScroll = document.body.offsetWidth;
				yScroll = document.body.offsetHeight;
			}
			var windowWidth, windowHeight;
			if (self.innerHeight) {	// all except Explorer
				if(document.documentElement.clientWidth){
					windowWidth = document.documentElement.clientWidth; 
				} else {
					windowWidth = self.innerWidth;
				}
				windowHeight = self.innerHeight;
			} else if (document.documentElement && document.documentElement.clientHeight) { // Explorer 6 Strict Mode
				windowWidth = document.documentElement.clientWidth;
				windowHeight = document.documentElement.clientHeight;
			} else if (document.body) { // other Explorers
				windowWidth = document.body.clientWidth;
				windowHeight = document.body.clientHeight;
			}	
			// for small pages with total height less then height of the viewport
			if(yScroll < windowHeight){
				pageHeight = windowHeight;
			} else { 
				pageHeight = yScroll;
			}
			// for small pages with total width less then width of the viewport
			if(xScroll < windowWidth){	
				pageWidth = xScroll;		
			} else {
				pageWidth = windowWidth;
			}
			arrayPageSize = new Array(pageWidth,pageHeight,windowWidth,windowHeight);
			return arrayPageSize;
		};
		/**
		 / THIRD FUNCTION
		 * getPageScroll() by quirksmode.com
		 *
		 * @return Array Return an array with x,y page scroll values.
		 */
		function ___getPageScroll() {
			var xScroll, yScroll;
			if (self.pageYOffset) {
				yScroll = self.pageYOffset;
				xScroll = self.pageXOffset;
			} else if (document.documentElement && document.documentElement.scrollTop) {	 // Explorer 6 Strict
				yScroll = document.documentElement.scrollTop;
				xScroll = document.documentElement.scrollLeft;
			} else if (document.body) {// all other Explorers
				yScroll = document.body.scrollTop;
				xScroll = document.body.scrollLeft;	
			}
			arrayPageScroll = new Array(xScroll,yScroll);
			return arrayPageScroll;
		};
		 /**
		  * Stop the code execution from a escified time in milisecond
		  *
		  */
		 function ___pause(ms) {
			var date = new Date(); 
			curDate = null;
			do { var curDate = new Date(); }
			while ( curDate - date < ms);
		 };
		// Return the jQuery object for chaining. The unbind method is used to avoid click conflict when the plugin is called more than once
		return this.unbind('click').click(_initialize);
	};
})(jQuery); // Call and execute the function immediately passing the jQuery object// file: liveCenter.js
(function ($) {
    //$(document).ready(function () {
    //    $(document).find('.liveCenterContent').on('click', '.contentnav>li>a', function (e) {
    //        e.preventDefault();
    //        var $link = $(this);
    //        var url = $link.attr('href');
    //        $(document).find('.liveCenterContent .contentnav').remove();
    //        LiveCenter.loadHtmlAndReplaceWith(url, $(document).find('#datasite'));
    //        $('.liveCenterContent li.contentnav-right').hide();
    //    });
    //
    //    $(document).find('.liveCenterContent').on('change', 'form>select', function () {
    //        var $link = $(this);
    //        var url = $link.val();
    //        $(document).find('.liveCenterContent .contentnav').remove();
    //        LiveCenter.loadHtmlAndReplaceWith(url, $(document).find('#datasite'));
    //        $('.liveCenterContent li.contentnav-right').hide();
    //    });
    //
    //});

    var LiveCenter = {
        $navi: undefined,
        $content: undefined,
        content: {
            liveTiming: {
                type: 'AJAX',
                active: true,
                // live ->
                url: ['/live-ticker/live/itinerary.0.html', '/live-ticker/driverbar.html'],
                translations: {
                    EN: 'Live Timing',
                    ES: 'Tiempo vivo',
                    FR: 'Calendrier'
                },
                callback: function () {
                    $('.liveCenterContent li.contentnav-right').hide();
                    wrc.ui.gallery.loadScrollbar();
                }
            },
            liveText: {
                type: 'AJAX',
                active: true,
                url: ['/live-ticker/live_text_livecenter.html', '/live-ticker/live/stage.0.0.overall.html'],
                translations: {
                    EN: 'Live Text',
                    ES: 'Texto en vivo',
                    FR: 'Texte en direct'
                },
                callback: function () {
                    $(document).find('.popupcontent').wrap('<div class="popup"></div>');

                    $("p").has(".smarticon").each(function () {
                        var name = $(this).find("span").attr("class").split(" ");
                        if (!$("#select option[value=" + name[1] + "]").length) {
                            var html = "<option value='" + name[1] + "'>" + name[1] + "</option>";
                            $("#select").append(html);
                        }
                    });

                    $("#select").change(function () {
                        $("p").has(".smarticon").css("display", "none");
                        $("p").has("." + $(this).val()).css("display", "block");
                        if ($(this).val() == "All") {
                            $("p").has(".smarticon").css("display", "block");
                        }
                    });

                    $('.liveCenterContent .btn').on('click', function (e) {
                        e.preventDefault();
                        $(document).find('[data-tab="liveText"]').trigger('click');
                    })

                    var $dataEl = $('.liveCenterContent #datasite');
                    $dataEl.find('form, h5').remove();
                    $dataEl.parent().find('.contentnav').remove();
                }
            },
            liveRadio: {
                type: 'AJAX',
                active: true,
                url: ['/live-ticker/live_radio_livecenter.html'],
                translations: {
                    EN: 'WRC Radio',
                    ES: 'Radio del WRC',
                    FR: 'Radio WRC'
                },
                callback: function () {
                    $(document).find('.popupcontent').wrap('<div class="popup"></div>');
                }
            },
            liveStream: {
                type: 'LINK_EXTERN',
                active: true,
                url: 'https://plus.wrc.com/live-stages/live/',
                translations: {
                    EN: 'Live Stages',
                    ES: 'Etapas en vivo',
                    FR: 'Étapes vivantes'
                }
            },
            liveMaps: {
                type: 'LINK_EXTERN',
                active: true,
                url: 'https://plus.wrc.com/live_maps/live_maps/',
                translations: {
                    EN: 'Live Maps',
                    ES: 'Mapas en vivo',
                    FR: 'Cartes Live'
                }
            },
            serviceParkStream: {
                type: 'AJAX',
                active: true,
                url: '/live-ticker/livestream.html',
                translations: {
                    EN: 'Servicepark Live',
                    ES: 'Servicepark en vivo',
                    FR: 'Servicepark Live'
                }
            }
        },
        init: function () {
            LiveCenter.$navi = $('.liveCenterNavigation');
            LiveCenter.$content = $('.liveCenterContent');
            LiveCenter.$navi.html(LiveCenter.generateNavigation(LiveCenter.content));
            LiveCenter.$navi.find('li:eq(0) a').click();
        },
        loadHtmlInto: function (url, $into) {
            var html = '';
            if (typeof url === 'object') {
                var urls = url;
                $.each(urls, function (k, url) {
                    html += LiveCenter.getHtml(url);
                })
            }
            if (typeof url === 'string') {
                html = LiveCenter.getHtml(url);
            }


            if (html !== '') {
                $into.html(html);
            } else {
                console.log('EMPTY Response @ Replace Into');
            }
        },
        loadHtmlAndReplaceWith: function (url, $replaceWith) {
            var html = '';
            if (typeof url === 'object') {
                var urls = url;
                $.each(urls, function (k, url) {
                    html += LiveCenter.getHtml(url);
                })
            }
            if (typeof url === 'string') {
                html = LiveCenter.getHtml(url);
            }

            if (html !== '') {
                $replaceWith.replaceWith(html);
            } else {
                console.log('EMPTY Response @ Replace With');
            }
        },
        getHtml: function (url) {
            var html = '';
            var baseUrl = window.location.origin;
            if (window.location.origin.indexOf('cms') > 0) {
                baseUrl += '/www_de';
            }

            $.ajax({
                async: false,
                url: baseUrl + url
            }).success(function (data) {
                html = data;
            });

            return html;
        },
        isActive: function (options) {
            return typeof options === 'object' && typeof options.active !== 'undefined' && options.active === true;
        },
        generateNavigation: function (content) {
            var html = '<ul class="subnav">';
            $.each(content, function (name, options) {
                if (LiveCenter.isActive(options)) {
                    html += '<li>';
                    html += '<a href="javascript:void(0);" ';
                    html += ' data-tab="' + name + '" ';

                    $.each(options.translations, function (lang, translation) {
                        html += 'data-lang-' + lang.toLowerCase() + '="' + translation + '"';
                    });

                    html += ' onclick="LiveCenter.switchTab($(this))">';
                    html += options.translations[lang.value];
                    html += '</a>';
                    html += '</li>';
                }
            });
            html += '</ul>';
            return html;
        },
        switchTab: function (that) {
            /** reload onclick if AJAX */
            if (LiveCenter.content[that.data('tab')].type === 'AJAX') {
                LiveCenter.$navi.find('li').each(function () {
                    if ($(this).hasClass('active')) {
                        $(this).removeClass('active');
                    }
                });
                that.parent().addClass('active');
                LiveCenter.loadHtmlInto(LiveCenter.content[that.data('tab')].url, LiveCenter.$content);

                if (typeof LiveCenter.content[that.data('tab')].callback === 'function') {
                    LiveCenter.content[that.data('tab')].callback();
                }
            }
            /** Open new Tab*/
            if (LiveCenter.content[that.data('tab')].type === 'LINK_EXTERN') {
                window.open(LiveCenter.content[that.data('tab')].url, '_blank');
            }
        }
    };

    window.LiveCenter = LiveCenter;
}(jQuery));// file: searchapi.js
var totalXml = new Array();
var categoryResults = new Array();
var categoryOrder = new Array();

var suche = 
{
	searchPage		: null,
	searchApi		: null,
	pages			: 0,
	actPage 		: 1,
	actCategoryId	: 1,
	value 			: null,
	firstShow		: true,
	tagonly			: "0",
	totalresults	: 0,
	resultsPerPage	: 20,
	init			: function(s) {
		// check Tag
		if(s.length) {
		    for(var i  = 0; i < s.length; i++) {
		        var parts = s[i].split('=');
		        if(parts[0] == "tag" || parts[0] == "t") {
					this.tagonly = "1";
				}
		    }
		}	
	}
}

suche.init(window.location.search.substring(1).split('&'));

// Aufruf der Search-Api
suche.search = function() {
	that = this;
	if(totalXml[that.actPage] != undefined){
		that.showResults();
	} else{
		$.ajax({
	   		type: "GET",
	   		data: { q: that.value, p: that.actPage, i: that.searchApi+(that.tagonly == "1" ? "-tagonly" : "") },
			timeout: 5000,
			dataType: "jsonp",
			url: "http://search-api."+that.searchPage,
			success: function(data) {
				totalXml[that.actPage] = data.result;
				that.parseXml();
				that.getCategoryResultCount();
				that.showResults();
			},
			error: function(request, error) { 
				if(error == "timeout") {
					$(".suche_info").html("Ein Fehler ist aufgetreten, bitte probieren Sie es " + unescape("sp%E4ter") + " nochmal!");
				} else if (request.status == 404 || request.status == 500) {
					$(".suche_info").html("Die Seite ist momentan nicht erreichbar, bitte probieren Sie es " + unescape("sp%E4ter") + " nochmal!");
				}
			}
		});
	}
}

// XML-Parse fuer Internet Explorer
suche.parseXml = function() {
	if (jQuery.browser.msie) {
    	var xmlDoc = new ActiveXObject("Microsoft.XMLDOM");
    	xmlDoc.loadXML(totalXml[this.actPage]);
    	totalXml[this.actPage] = xmlDoc;
    }
}

// Suchergebnisse pro Kategorie & gesamt
suche.getCategoryResultCount = function() {
	that = this;
	xml = totalXml[that.actPage];
	
	activeNav = false;
	that.totalresults = 0;
	$(".contentnav_search li").each(function() {
		id = $(this).attr("id").split("_");
		id = id[2];
		cat = $(xml).find("category[id='"+id+"']");
		results = parseInt(cat.attr("total"));
		
		if(!results) {
			$("#search_cat_"+id+" a").addClass("inactive");
		}
		
		if(results && !activeNav && that.firstShow) {
			$("#search_cat_"+id+" a").addClass("active");
			that.actCategoryId = id;
			activeNav = true;
			that.firstShow = false;
		}
					
		that.totalresults += results;
		categoryResults[id] = results;
		$("#search_cat_"+id+" span").html(results);
	});
}

// Seite vorwaerts
suche.searchNext = function() {
	if(this.actPage < this.pages) {
		this.actPage++;
		this.search();
	}
}

// Seite zurueck
suche.searchPrev = function() {
	if(this.actPage > 1) {
		this.actPage--;
		this.search();
	}
}

// Bei Kategorie-Wechsel
suche.changeCategory = function(category) {
	this.actCategoryId = category;
	this.actPage = 1;
	$(".contentnav_search li a").removeClass("active");
	$("#search_cat_"+category+" a").addClass("active");
		
	this.search();
}

// XML-Results aus aktueller Kategorie und aktueller Page anzeigen
suche.showResults = function() {
	that = this;
	if(categoryResults[that.actCategoryId]) {
		xml = totalXml[that.actPage];
		that.pages = Math.ceil(categoryResults[that.actCategoryId]/that.resultsPerPage);
	
		var html = "";
		$("#searchtext").show();
		$("#searcherror").hide();
		$("#sumResults").html(that.totalresults);
		$("#searchValue").html(that.value);
		$(".searchMiddle .pageakt").html(that.actPage);
		$(".searchMiddle .pagesum").html(that.pages);
		
		var searchtemp;
		$.get('/templates/basic/DE/search.html', function(data) {
			searchtemp = data;
			html_articles = "";
			$(xml).find("category[id='"+that.actCategoryId+"']").find("result").each(function() {
			    id = $(this).attr("id");
			    title = $(this).find("title").text();
			    
			    date = $(this).find("datetime").text();
			    tmp = date.split(' ');

			    if(tmp.length == 2) {
			    	date_day = tmp[0].split('-');
				    date_time = tmp[1].split(':');
				    date = date_day[2]+'.'+date_day[1]+'.'+date_day[0];	
			    } else {
			    	date = "";
			    }
			    
			    link = $(this).find("url").text();
			    pic = $(this).find("pic").text();
			    
			    if(pic == "http://images."+that.searchPage+"/" && that.searchPage == "wrc.com") {
			    	pic = "<img width='144' height='81' />";
			    } else if(pic == "http://images."+that.searchPage+"/") {
			    	pic = "";
			    } else {
			    	pic = "<img src='"+pic+"' />";
			    }
			    
			    rubrik = $(this).find("rubric").text().split(' »');
			    rubrik = rubrik[0];
			    if(rubrik == "Jwrc") {
			    	rubrik = "Junior WRC";
			    }
			    rubrikclass = rubrik.replace(/\s/g, "").toLowerCase();
			    text = $(this).find("text").text();
				
				html_article = searchtemp.replace(/{{pic}}/g, pic).replace(/{{link}}/g, link).replace(/{{date}}/g, date).replace(/{{rubrik}}/g, rubrik).replace(/{{rubrikclass}}/g, rubrikclass).replace(/{{title}}/g, title).replace(/{{text}}/g, text);
				html_articles += html_article;
			});

			$("#news_area2").html(html_articles);
		});
	} else {
		$("#searchValue").html(that.value);
	}
}

$(document).ready(function() {	
	// get SearchApi
	$("script").each(function(){
		jsparam = $(this).attr("src");
		if(jsparam != undefined) {
			jsparam = jsparam.split("&");
			laenge = jsparam.length;
			for(i= 1; i < laenge; i++) {
				param = jsparam[i].split("=");
				if(param[0] == "suche") {
					api = param[1].split(".");
					suche.searchPage = param[1];
					suche.searchApi = api[0];
				}
			}
		}
	});	
	
	// get SearchValue
	suche.value = $("#searchinput").attr("value");
	if (suche.value != undefined && suche.value.length>2 && suche.value != "undefined") {
		suche.value = decodeURI(suche.value).replace(/\+/g, ' ');
		suche.search();
	} else {
		$("#searcherror").show();
		$("#searchtext").hide();
	}
});
// file: nextRallyCountdown.js
var NextRallyCountdown = {
    countdowns: {
        0: {
            filename: 'nextRallyCountdownData',
            selector: '.rallyCountdown.rally',
            nowlive: 'nowlive'
        },
        1: {
            filename: 'nextRallyCountdownTvData',
            selector: '.rallyCountdown.television',
            nowlive: 'nowlive-lead'
        }
    },
    init: function() {
        var thisRallyCountdown = this;
        $.each(this.countdowns, function(index, value) {
            thisRallyCountdown.setHtml(value);
        });
    },
    getDataJsonPath: function(jsonFilename) {
        var path = 'cache/' + jsonFilename + '.json';

        if(!wrc.preview) {
            path = '/' + path;
        }

        return path;
    },
    setHtml: function(countdownData) {
        var selector = countdownData.selector;
        var nowlive = countdownData.nowlive;

        var nextRallyCountdownDataPath = this.getDataJsonPath(countdownData.filename);
        $.getJSON(nextRallyCountdownDataPath, function(data) {
            var rallyLogo = data.logo;
            var rallyTimestamp = data.timestamp;
            var rallyStatus = data.status;
            var liveUrls = data.liveLinks;
            var liveUrl = liveUrls[$("#wrcClass").val()];

            var timeDiff = rallyTimestamp - getServerTime();
            var liveUrl = 'http://www.wrc.com/'+$("#lang").val().toLowerCase()+'/'+liveUrl;

            var htmlRallyLogo = '<a href="'+liveUrl+'"><img src="'+rallyLogo+'" class="rally-logo" /></a>';
            var htmlLogoCertina = '<a href="'+liveUrl+'" class="logo-certina"><img src="http://www.wrc.com/img/logo_certina-neg.png" /></a>';
            if(timeDiff > 0 && (rallyStatus === 'Pre-Event' || rallyStatus === 'Next-Event')) {
                var htmlRallyCountdown = htmlRallyLogo + '<a href="'+liveUrl+'" class="digital-countdown clearfix"></a>' + htmlLogoCertina;
                $(selector).html(htmlRallyCountdown);
                $(selector + ' .digital-countdown').countdown({
                    until: timeDiff,
                    layout: '<div class="counter days"><span class="value">{dnn}</' + 'span><strong class="title">days</' + 'strong></' + 'div>' +
                    '<div class="counter hours"><span class="value">{hnn}</' + 'span><strong class="title">hrs</' + 'strong></' + 'div>' +
                    '<div class="counter mins"><span class="value">{mnn}</' + 'span><strong class="title">mins</' + 'strong></' + 'div>' +
                    '<div class="counter secs"><span class="value">{snn}</' + 'span><strong class="title">secs</' + 'strong></' + 'div>' +
                    '<div class="sec-stripes s{sn}"><img src="http://www.wrc.com/img/countdown/stripes_fallback.png"></' + 'div>'
                });
            } else if(rallyStatus === 'Live-Event') {
                var htmlNowLive = htmlRallyLogo + '<a href="'+liveUrl+'"><img class="nowlive" src="http://www.wrc.com/img/' + nowlive +'.gif" /></a>' + htmlLogoCertina;
                $(selector).html(htmlNowLive);
            } else if(rallyStatus === 'Post-Event') {
                var htmlFinished = htmlRallyLogo + '<a href="'+liveUrl+'" class="finished">FINISHED</a>' + htmlLogoCertina;
                $(selector).html(htmlFinished);
            }
        });
    }
}

$(document).ready(function() {
    NextRallyCountdown.init();
});// JavaScript Document