(window.webpackJsonp_nextgen=window.webpackJsonp_nextgen||[]).push([[15],{75:function(e,t,n){}}]),this.nextgen=this.nextgen||{},this.nextgen["layout-selector"]=function(e){function t(t){for(var r,c,i=t[0],s=t[1],u=t[2],g=0,f=[];g<i.length;g++)c=i[g],Object.prototype.hasOwnProperty.call(o,c)&&o[c]&&f.push(o[c][0]),o[c]=0;for(r in s)Object.prototype.hasOwnProperty.call(s,r)&&(e[r]=s[r]);for(l&&l(t);f.length;)f.shift()();return a.push.apply(a,u||[]),n()}function n(){for(var e,t=0;t<a.length;t++){for(var n=a[t],r=!0,i=1;i<n.length;i++){var s=n[i];0!==o[s]&&(r=!1)}r&&(a.splice(t--,1),e=c(c.s=n[0]))}return e}var r={},o={4:0},a=[];function c(t){if(r[t])return r[t].exports;var n=r[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,c),n.l=!0,n.exports}c.m=e,c.c=r,c.d=function(e,t,n){c.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},c.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},c.t=function(e,t){if(1&t&&(e=c(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(c.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)c.d(n,r,function(t){return e[t]}.bind(null,r));return n},c.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return c.d(t,"a",t),t},c.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},c.p="";var i=window.webpackJsonp_nextgen=window.webpackJsonp_nextgen||[],s=i.push.bind(i);i.push=t,i=i.slice();for(var u=0;u<i.length;u++)t(i[u]);var l=s;return a.push([74,15]),n()}({0:function(e,t){e.exports=window.wp.element},1:function(e,t){e.exports=window.wp.primitives},14:function(e,t){e.exports=window.wp.compose},2:function(e,t){e.exports=window.wp.i18n},21:function(e,t,n){var r=n(22);e.exports=function(e,t){if(e){if("string"==typeof e)return r(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return"Object"===n&&e.constructor&&(n=e.constructor.name),"Map"===n||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?r(e,t):void 0}}},22:function(e,t){e.exports=function(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}},25:function(e,t){e.exports=function(e){if(Array.isArray(e))return e}},26:function(e,t){e.exports=function(e,t){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(e)){var n=[],_n=!0,r=!1,o=void 0;try{for(var a,c=e[Symbol.iterator]();!(_n=(a=c.next()).done)&&(n.push(a.value),!t||n.length!==t);_n=!0);}catch(e){r=!0,o=e}finally{try{_n||null==c.return||c.return()}finally{if(r)throw o}}return n}}},27:function(e,t){e.exports=function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}},3:function(e,t){e.exports=window.wp.components},32:function(e,t){function n(){return e.exports=n=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(e[r]=n[r])}return e},n.apply(this,arguments)}e.exports=n},4:function(e,t){e.exports=window.wp.data},48:function(e,t){e.exports=window.wp.hooks},49:function(e,t){e.exports=window.wp.keycodes},51:function(e,t,n){"use strict";var r=n(0),o=n(1),a=Object(r.createElement)(o.SVG,{viewBox:"0 0 24 24",xmlns:"http://www.w3.org/2000/svg"},Object(r.createElement)(o.Path,{d:"M17.5 11.6L12 16l-5.5-4.4.9-1.2L12 14l4.5-3.6 1 1.2z"}));t.a=a},7:function(e,t,n){var r;!function(){"use strict";var n={}.hasOwnProperty;function o(){for(var e=[],t=0;t<arguments.length;t++){var r=arguments[t];if(r){var a=typeof r;if("string"===a||"number"===a)e.push(r);else if(Array.isArray(r)&&r.length){var c=o.apply(null,r);c&&e.push(c)}else if("object"===a)for(var i in r)n.call(r,i)&&r[i]&&e.push(i)}}return e.join(" ")}e.exports?(o.default=o,e.exports=o):void 0===(r=function(){return o}.apply(t,[]))||(e.exports=r)}()},74:function(e,t,n){e.exports=n(93)},8:function(e,t){e.exports=function(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}},9:function(e,t,n){var r=n(25),o=n(26),a=n(21),c=n(27);e.exports=function(e,t){return r(e)||o(e,t)||a(e,t)||c()}},93:function(e,t,n){"use strict";n.r(t);var r=n(8),o=n.n(r),a=n(4);function c(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function i(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?c(Object(n),!0).forEach((function(t){o()(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):c(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}var s="undefined"==typeof nextgenImageCategories?{}:nextgenImageCategories,u={imageCategoriesSuggestions:Object.values(s)||[],imageCategories:s||[],imageCategory:Object(a.select)("core").getEditedEntityRecord("root","site").imageCategory},l=(Object(a.registerStore)("nextgen/layout-selector",{reducer:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:u,t=arguments.length>1?arguments[1]:void 0;switch(t.type){case"UPDATE_IMAGE_CATEGORIES":return i(i({},e),{},{imageCategories:t.imageCategories,imageCategory:t.imageCategory})}return e},actions:{updateImageCategories:function(e){return{type:"UPDATE_IMAGE_CATEGORIES",imageCategories:e}},updateImageCategory:function(e){return{type:"UPDATE_IMAGE_CATEGORY",imageCategory:e}}},selectors:{getImageCategories:function(e){return e.imageCategories||[]},getCategorySuggestions:function(e){return e.imageCategoriesSuggestions||[]},hasImageCategories:function(e){return Object.keys(e.imageCategories).length>0},getCategoryBySlug:function(e){return t=e.imageCategories,n={},Object.keys(t).forEach((function(e){n[t[e]]=e})),n;var t,n},getSelectedCategory:function(){return Object(a.select)("core").getEditedEntityRecord("root","site").image_category}}}),n(32)),g=n.n(l),f=n(9),p=n.n(f),b=n(0),m=n(14),y=n(2),d=[{name:Object(y.__)("Fashion","nextgen"),slug:"fashion"},{name:Object(y.__)("Home Decor","nextgen"),slug:"homedecor"},{name:Object(y.__)("Coffee","nextgen"),slug:"coffee"},{name:Object(y.__)("Construction","nextgen"),slug:"constructioncompany"},{name:Object(y.__)("Art","nextgen"),slug:"personal_art"},{name:Object(y.__)("Baking","nextgen"),slug:"bakeries"},{name:Object(y.__)("Fitness","nextgen"),slug:"fitness"},{name:Object(y.__)("Landscaping","nextgen"),slug:"landscaping"}],v=n(7),O=n.n(v),h=n(3),w=n(51),j=n(1),C=Object(b.createElement)(j.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},Object(b.createElement)(j.Path,{d:"M13.5 6C10.5 6 8 8.5 8 11.5c0 1.1.3 2.1.9 3l-3.4 3 1 1.1 3.4-2.9c1 .9 2.2 1.4 3.6 1.4 3 0 5.5-2.5 5.5-5.5C19 8.5 16.5 6 13.5 6zm0 9.5c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"})),_=n(49),x=function(e){return[_.DOWN,_.UP,"ArrowDown","ArrowUp"].includes(e.code||e.keyCode)&&e.preventDefault()},E=function(e){var t=e.setSelectedImageCategory,n=e.getCategoryBySlug,r=e.imageCategories,o=e.imageCategory,a=Object(b.useState)(""),c=p()(a,2),i=c[0],s=c[1],u=Object(b.useState)(-1),l=p()(u,2),g=l[0],f=l[1];Object(b.useEffect)((function(){return j()}),[i]);var m=Object(b.useMemo)((function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:i,t=e,n=[],o=[];return 0===t.length?d.map((function(e){return e.name})):(Object.values(r).forEach((function(e){var r=e.toLocaleLowerCase().indexOf(t.toLowerCase());switch(!0){case r>0:o.push(e);break;case 0===r:n.push(e)}})),n.concat(o))}),[i]),v=function(e){var t,n=null===(t=m.filter((function(t){return t.trim()===e})))||void 0===t?void 0:t[0],r=m.indexOf(n);r>=0&&f(r)},j=function(){f(-1)},_=function(e){var t=function(e){var t=i;if(!t.length)return null;var n=e.toLocaleLowerCase().indexOf(t.toLowerCase());return{suggestionBeforeMatch:e.substring(0,n),suggestionMatch:e.substring(n,n+t.length),suggestionAfterMatch:e.substring(n+t.length)}}(e);return t?Object(b.createElement)("span",{"aria-label":e.toLocaleLowerCase()},t.suggestionBeforeMatch,Object(b.createElement)("strong",{className:"image-category__suggestion-match"},t.suggestionMatch),t.suggestionAfterMatch):e},E=function(e,t){var n=null==t?void 0:t.innerText;switch(!0){case 0===e:f(-1);break;case e>0&&!!n:v(n)}t.focus(),t.scrollIntoView()};return Object(b.createElement)(h.Dropdown,{className:"coblocks-layout-selector__dropdown",renderToggle:function(e){var t=e.isOpen,n=e.onToggle;return Object(b.createElement)(h.Button,{isLink:!0,className:O()("coblocks-layout-selector__dropdown-button",{"is-open":t}),onClick:n},r[o],Object(b.createElement)(h.Icon,{icon:w.a,className:"chevron"}))},contentClassName:"coblocks-layout-selector__pop",renderContent:function(e){var r=e.onClose;return Object(b.createElement)(b.Fragment,null,Object(b.createElement)(h.NavigableMenu,{role:"tablist",onNavigate:E,onKeyDown:x},Object(b.createElement)("span",{className:"coblocks-layout-selector__category-search"},Object(b.createElement)("input",{type:"text",placeholder:Object(y.__)("Search","nextgen"),value:i,className:"coblocks-layout-selector__category-search-input",onChange:function(e){return s(e.target.value)}}),Object(b.createElement)(h.Icon,{icon:C,className:"coblocks-layout-selector__category-search-icon"})),Object(b.createElement)(h.MenuGroup,{role:"option",className:"image-category__suggestions-list"},Object.values(m).map((function(e,o){return Object(b.createElement)(h.MenuItem,{key:"image-category-".concat(o),role:"option",className:O()("image-category__suggestion",{"is-selected":o===g}),onMouseDown:function(e){return e.preventDefault()},onClick:function(){r(),function(e){var r,o,a,c=null===(r=n())||void 0===r?void 0:r[e];if(c)return t(c),void s("");(c=null===(o=d.filter((function(t){return t.name===e})))||void 0===o||null===(a=o[0])||void 0===a?void 0:a.slug)&&(t(c),s(""))}(e)},onMouseEnter:function(){return v(e)},"aria-selected":o===g,children:_(e)})})))))}})},S=Object(m.compose)([Object(a.withSelect)((function(e){var t=e("nextgen/layout-selector"),n=t.hasImageCategories,r=t.getImageCategories,o=t.getSelectedCategory,a=t.getCategoryBySlug,c=t.getCategorySuggestions;return{imageCategoriesEnabled:n(),imageCategories:r(),imageCategory:o(),getCategoryBySlug:a,getCategorySuggestions:c}})),Object(a.withDispatch)((function(e){return{saveEntityRecord:e("core").saveEntityRecord}}))])((function(e){var t=e.imageCategoriesEnabled,n=e.imageCategory,r=e.saveEntityRecord,o=Object(b.useState)(n),a=p()(o,2),c=a[0],i=a[1];return Object(b.useEffect)((function(){r("root","site",{image_category:c})}),[c]),t?Object(b.createElement)(b.Fragment,null,Object(b.createElement)("span",{className:"coblocks-layout-selector__about"},Object(y.__)("My site is about:","nextgen")),Object(b.createElement)(E,g()({},e,{setSelectedImageCategory:i}))):null})),k=(n(75),n(48));Object(k.addFilter)("coblocks-layout-selector-controls","coblocks-image-category-selector",(function(e){return e.push(S),e}))}});