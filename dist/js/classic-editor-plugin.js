!function(){var e={8192:function(e){var t;"undefined"!=typeof self&&self,t=()=>(()=>{var e={75:function(e){(function(){var t,n,r,o,a,i;"undefined"!=typeof performance&&null!==performance&&performance.now?e.exports=function(){return performance.now()}:"undefined"!=typeof process&&null!==process&&process.hrtime?(e.exports=function(){return(t()-a)/1e6},n=process.hrtime,o=(t=function(){var e;return 1e9*(e=n())[0]+e[1]})(),i=1e9*process.uptime(),a=o-i):Date.now?(e.exports=function(){return Date.now()-r},r=Date.now()):(e.exports=function(){return(new Date).getTime()-r},r=(new Date).getTime())}).call(this)},4087:(e,t,n)=>{for(var r=n(75),o="undefined"==typeof window?n.g:window,a=["moz","webkit"],i="AnimationFrame",s=o["request"+i],c=o["cancel"+i]||o["cancelRequest"+i],u=0;!s&&u<a.length;u++)s=o[a[u]+"Request"+i],c=o[a[u]+"Cancel"+i]||o[a[u]+"CancelRequest"+i];if(!s||!c){var l=0,p=0,d=[];s=function(e){if(0===d.length){var t=r(),n=Math.max(0,16.666666666666668-(t-l));l=n+t,setTimeout((function(){var e=d.slice(0);d.length=0;for(var t=0;t<e.length;t++)if(!e[t].cancelled)try{e[t].callback(l)}catch(e){setTimeout((function(){throw e}),0)}}),Math.round(n))}return d.push({handle:++p,callback:e,cancelled:!1}),p},c=function(e){for(var t=0;t<d.length;t++)d[t].handle===e&&(d[t].cancelled=!0)}}e.exports=function(e){return s.call(o,e)},e.exports.cancel=function(){c.apply(o,arguments)},e.exports.polyfill=function(e){e||(e=o),e.requestAnimationFrame=s,e.cancelAnimationFrame=c}}},t={};function n(r){var o=t[r];if(void 0!==o)return o.exports;var a=t[r]={exports:{}};return e[r].call(a.exports,a,a.exports,n),a.exports}n.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return n.d(t,{a:t}),t},n.d=(e,t)=>{for(var r in t)n.o(t,r)&&!n.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},n.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"==typeof window)return window}}(),n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t);var r={};return(()=>{"use strict";n.d(r,{default:()=>A});var e=n(4087),t=n.n(e);const o=function(e){return new RegExp(/<[a-z][\s\S]*>/i).test(e)},a=function(e){var t=document.createElement("div");return t.innerHTML=e,t.childNodes},i=function(e,t){return Math.floor(Math.random()*(t-e+1))+e};var s="TYPE_CHARACTER",c="REMOVE_CHARACTER",u="REMOVE_ALL",l="REMOVE_LAST_VISIBLE_NODE",p="PAUSE_FOR",d="CALL_FUNCTION",f="ADD_HTML_TAG_ELEMENT",v="CHANGE_DELETE_SPEED",h="CHANGE_DELAY",m="CHANGE_CURSOR",y="PASTE_STRING",g="HTML_TAG";function w(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function E(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?w(Object(n),!0).forEach((function(t){_(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):w(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}function b(e){return function(e){if(Array.isArray(e))return T(e)}(e)||function(e){if("undefined"!=typeof Symbol&&null!=e[Symbol.iterator]||null!=e["@@iterator"])return Array.from(e)}(e)||function(e,t){if(e){if("string"==typeof e)return T(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return"Object"===n&&e.constructor&&(n=e.constructor.name),"Map"===n||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?T(e,t):void 0}}(e)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function T(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}function _(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}const A=function(){function n(r,w){var T=this;if(function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,n),_(this,"state",{cursorAnimation:null,lastFrameTime:null,pauseUntil:null,eventQueue:[],eventLoop:null,eventLoopPaused:!1,reverseCalledEvents:[],calledEvents:[],visibleNodes:[],initialOptions:null,elements:{container:null,wrapper:document.createElement("span"),cursor:document.createElement("span")}}),_(this,"options",{strings:null,cursor:"|",delay:"natural",pauseFor:1500,deleteSpeed:"natural",loop:!1,autoStart:!1,devMode:!1,skipAddStyles:!1,wrapperClassName:"Typewriter__wrapper",cursorClassName:"Typewriter__cursor",stringSplitter:null,onCreateTextNode:null,onRemoveNode:null}),_(this,"setupWrapperElement",(function(){T.state.elements.container&&(T.state.elements.wrapper.className=T.options.wrapperClassName,T.state.elements.cursor.className=T.options.cursorClassName,T.state.elements.cursor.innerHTML=T.options.cursor,T.state.elements.container.innerHTML="",T.state.elements.container.appendChild(T.state.elements.wrapper),T.state.elements.container.appendChild(T.state.elements.cursor))})),_(this,"start",(function(){return T.state.eventLoopPaused=!1,T.runEventLoop(),T})),_(this,"pause",(function(){return T.state.eventLoopPaused=!0,T})),_(this,"stop",(function(){return T.state.eventLoop&&((0,e.cancel)(T.state.eventLoop),T.state.eventLoop=null),T})),_(this,"pauseFor",(function(e){return T.addEventToQueue(p,{ms:e}),T})),_(this,"typeOutAllStrings",(function(){return"string"==typeof T.options.strings?(T.typeString(T.options.strings).pauseFor(T.options.pauseFor),T):(T.options.strings.forEach((function(e){T.typeString(e).pauseFor(T.options.pauseFor).deleteAll(T.options.deleteSpeed)})),T)})),_(this,"typeString",(function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null;if(o(e))return T.typeOutHTMLString(e,t);if(e){var n=T.options||{},r=n.stringSplitter,a="function"==typeof r?r(e):e.split("");T.typeCharacters(a,t)}return T})),_(this,"pasteString",(function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null;return o(e)?T.typeOutHTMLString(e,t,!0):(e&&T.addEventToQueue(y,{character:e,node:t}),T)})),_(this,"typeOutHTMLString",(function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,n=arguments.length>2?arguments[2]:void 0,r=a(e);if(r.length>0)for(var o=0;o<r.length;o++){var i=r[o],s=i.innerHTML;i&&3!==i.nodeType?(i.innerHTML="",T.addEventToQueue(f,{node:i,parentNode:t}),n?T.pasteString(s,i):T.typeString(s,i)):i.textContent&&(n?T.pasteString(i.textContent,t):T.typeString(i.textContent,t))}return T})),_(this,"deleteAll",(function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"natural";return T.addEventToQueue(u,{speed:e}),T})),_(this,"changeDeleteSpeed",(function(e){if(!e)throw new Error("Must provide new delete speed");return T.addEventToQueue(v,{speed:e}),T})),_(this,"changeDelay",(function(e){if(!e)throw new Error("Must provide new delay");return T.addEventToQueue(h,{delay:e}),T})),_(this,"changeCursor",(function(e){if(!e)throw new Error("Must provide new cursor");return T.addEventToQueue(m,{cursor:e}),T})),_(this,"deleteChars",(function(e){if(!e)throw new Error("Must provide amount of characters to delete");for(var t=0;t<e;t++)T.addEventToQueue(c);return T})),_(this,"callFunction",(function(e,t){if(!e||"function"!=typeof e)throw new Error("Callbak must be a function");return T.addEventToQueue(d,{cb:e,thisArg:t}),T})),_(this,"typeCharacters",(function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null;if(!e||!Array.isArray(e))throw new Error("Characters must be an array");return e.forEach((function(e){T.addEventToQueue(s,{character:e,node:t})})),T})),_(this,"removeCharacters",(function(e){if(!e||!Array.isArray(e))throw new Error("Characters must be an array");return e.forEach((function(){T.addEventToQueue(c)})),T})),_(this,"addEventToQueue",(function(e,t){var n=arguments.length>2&&void 0!==arguments[2]&&arguments[2];return T.addEventToStateProperty(e,t,n,"eventQueue")})),_(this,"addReverseCalledEvent",(function(e,t){var n=arguments.length>2&&void 0!==arguments[2]&&arguments[2],r=T.options.loop;return r?T.addEventToStateProperty(e,t,n,"reverseCalledEvents"):T})),_(this,"addEventToStateProperty",(function(e,t){var n=arguments.length>2&&void 0!==arguments[2]&&arguments[2],r=arguments.length>3?arguments[3]:void 0,o={eventName:e,eventArgs:t||{}};return T.state[r]=n?[o].concat(b(T.state[r])):[].concat(b(T.state[r]),[o]),T})),_(this,"runEventLoop",(function(){T.state.lastFrameTime||(T.state.lastFrameTime=Date.now());var e=Date.now(),n=e-T.state.lastFrameTime;if(!T.state.eventQueue.length){if(!T.options.loop)return;T.state.eventQueue=b(T.state.calledEvents),T.state.calledEvents=[],T.options=E({},T.state.initialOptions)}if(T.state.eventLoop=t()(T.runEventLoop),!T.state.eventLoopPaused){if(T.state.pauseUntil){if(e<T.state.pauseUntil)return;T.state.pauseUntil=null}var r,o=b(T.state.eventQueue),a=o.shift();if(!(n<=(r=a.eventName===l||a.eventName===c?"natural"===T.options.deleteSpeed?i(40,80):T.options.deleteSpeed:"natural"===T.options.delay?i(120,160):T.options.delay))){var w=a.eventName,_=a.eventArgs;switch(T.logInDevMode({currentEvent:a,state:T.state,delay:r}),w){case y:case s:var A=_.character,C=_.node,S=document.createTextNode(A),N=S;T.options.onCreateTextNode&&"function"==typeof T.options.onCreateTextNode&&(N=T.options.onCreateTextNode(A,S)),N&&(C?C.appendChild(N):T.state.elements.wrapper.appendChild(N)),T.state.visibleNodes=[].concat(b(T.state.visibleNodes),[{type:"TEXT_NODE",character:A,node:N}]);break;case c:o.unshift({eventName:l,eventArgs:{removingCharacterNode:!0}});break;case p:var O=a.eventArgs.ms;T.state.pauseUntil=Date.now()+parseInt(O);break;case d:var x=a.eventArgs,j=x.cb,L=x.thisArg;j.call(L,{elements:T.state.elements});break;case f:var M=a.eventArgs,Q=M.node,P=M.parentNode;P?P.appendChild(Q):T.state.elements.wrapper.appendChild(Q),T.state.visibleNodes=[].concat(b(T.state.visibleNodes),[{type:g,node:Q,parentNode:P||T.state.elements.wrapper}]);break;case u:var D=T.state.visibleNodes,k=_.speed,R=[];k&&R.push({eventName:v,eventArgs:{speed:k,temp:!0}});for(var F=0,H=D.length;F<H;F++)R.push({eventName:l,eventArgs:{removingCharacterNode:!1}});k&&R.push({eventName:v,eventArgs:{speed:T.options.deleteSpeed,temp:!0}}),o.unshift.apply(o,R);break;case l:var I=a.eventArgs.removingCharacterNode;if(T.state.visibleNodes.length){var U=T.state.visibleNodes.pop(),G=U.type,q=U.node,Y=U.character;T.options.onRemoveNode&&"function"==typeof T.options.onRemoveNode&&T.options.onRemoveNode({node:q,character:Y}),q&&q.parentNode.removeChild(q),G===g&&I&&o.unshift({eventName:l,eventArgs:{}})}break;case v:T.options.deleteSpeed=a.eventArgs.speed;break;case h:T.options.delay=a.eventArgs.delay;break;case m:T.options.cursor=a.eventArgs.cursor,T.state.elements.cursor.innerHTML=a.eventArgs.cursor}T.options.loop&&(a.eventName===l||a.eventArgs&&a.eventArgs.temp||(T.state.calledEvents=[].concat(b(T.state.calledEvents),[a]))),T.state.eventQueue=o,T.state.lastFrameTime=e}}})),r)if("string"==typeof r){var A=document.querySelector(r);if(!A)throw new Error("Could not find container element");this.state.elements.container=A}else this.state.elements.container=r;w&&(this.options=E(E({},this.options),w)),this.state.initialOptions=E({},this.options),this.init()}var r,w;return r=n,(w=[{key:"init",value:function(){var e;this.setupWrapperElement(),this.addEventToQueue(m,{cursor:this.options.cursor},!0),this.addEventToQueue(u,null,!0),!window||window.___TYPEWRITER_JS_STYLES_ADDED___||this.options.skipAddStyles||((e=document.createElement("style")).appendChild(document.createTextNode(".Typewriter__cursor{-webkit-animation:Typewriter-cursor 1s infinite;animation:Typewriter-cursor 1s infinite;margin-left:1px}@-webkit-keyframes Typewriter-cursor{0%{opacity:0}50%{opacity:1}100%{opacity:0}}@keyframes Typewriter-cursor{0%{opacity:0}50%{opacity:1}100%{opacity:0}}")),document.head.appendChild(e),window.___TYPEWRITER_JS_STYLES_ADDED___=!0),!0===this.options.autoStart&&this.options.strings&&this.typeOutAllStrings().start()}},{key:"logInDevMode",value:function(e){this.options.devMode&&console.log(e)}}])&&function(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}(r.prototype,w),Object.defineProperty(r,"prototype",{writable:!1}),n}()})(),r.default})(),e.exports=t()}},t={};function n(r){var o=t[r];if(void 0!==o)return o.exports;var a=t[r]={exports:{}};return e[r].call(a.exports,a,a.exports,n),a.exports}n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,{a:t}),t},n.d=function(e,t){for(var r in t)n.o(t,r)&&!n.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},function(){"use strict";var e=n(8192),t=n.n(e);jQuery;const{__:r}=wp.i18n,o=(e,t=5e3)=>{const n=`<div id="handywriter-classic-editor-error" class="notice notice-error notice-alt"><p>${e}</p></div>`;jQuery("#wp-content-editor-tools").after(n),setTimeout((function(){jQuery("#handywriter-classic-editor-error").remove()}),t)};tinymce.PluginManager.add("handywriter_classic_editor_plugin",(function(e,n){const a=n.replace("/js","/images");e.addButton("handywriter_button",{icon:"mce-widget mce-btn",image:`${a}/handywriter-mce-icon.svg`,onclick(){const n=e.getContent({format:"text"}),a=e.selection.getContent({format:"text"});let i=a;return i.trim().length||(i=n),i.trim().length?(jQuery.post(window.ajaxurl,{beforeSend(){const e=`<div id="handywriter-classic-editor-info" class="inline notice notice-info notice-alt"><p><span class="spinner is-active"></span>${r("Generating...","handywriter")}</p></div>`;jQuery("#wp-content-editor-tools").after(e)},action:"handywriter_create_content",input:i,nonce:jQuery("#handywriter_admin_nonce").val(),content_type:"complete_paragraph"},(function(n){if(jQuery("#handywriter-classic-editor-info").remove(),n.success){const r=n.data.content[0];a&&e.insertContent(a);new(t())(null,{delay:(i=r.length,i>500?0:i>200?5:i>100?20:30),onCreateTextNode:t=>(e.insertContent(t),null)}).typeString(r).start()}else{if(n.data.message)return void o(n.data.message);o(r("An error occurred!","handywriter"))}var i})).always((function(){})),!1):(o(r("Empty content. Select or write some content to generate a result.","handywriter")),!1)},tooltip:r("Generate content for this selection","handywriter")}),e.addButton("handywriter_grammar_fixer_button",{icon:"mce-widget mce-btn",image:`${a}/handywriter-mce-icon-grammar-fixer.svg`,onclick(){const t=e.getContent();let n=e.selection.getContent({format:"text"});return n.trim().length||(n=t),n.trim().length?(jQuery.post(window.ajaxurl,{beforeSend(){const e=`<div id="handywriter-classic-editor-info" class="inline notice notice-info notice-alt"><p><span class="spinner is-active"></span>${r("Processing...","handywriter")}</p></div>`;jQuery("#wp-content-editor-tools").after(e)},action:"handywriter_edit_content",input:n,nonce:jQuery("#handywriter_admin_nonce").val()},(function(a){if(jQuery("#handywriter-classic-editor-info").remove(),a.success&&a.data.content[0]){const r=t.replace(n,a.data.content[0]);e.setContent(r)}else{if(a.data.message)return void o(a.data.message);o(r("An error occurred!","handywriter"))}})).always((function(){})),!1):(o(r("Empty content. Select or write some text to check grammar mistake(s).","handywriter")),!1)},tooltip:r("Fix grammar and spelling error(s) for this selection","handywriter")})}))}()}();