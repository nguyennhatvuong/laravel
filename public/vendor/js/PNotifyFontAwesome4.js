!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?e(exports):"function"==typeof define&&define.amd?define(["exports"],e):e((t="undefined"!=typeof globalThis?globalThis:t||self).PNotifyFontAwesome4={})}(this,(function(t){"use strict";function e(t){return(e="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function n(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function r(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}function o(t){return(o=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}function f(t,e){return(f=Object.setPrototypeOf||function(t,e){return t.__proto__=e,t})(t,e)}function i(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}function u(t,e){return!e||"object"!=typeof e&&"function"!=typeof e?i(t):e}function a(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(t){return!1}}();return function(){var n,r=o(t);if(e){var f=o(this).constructor;n=Reflect.construct(r,arguments,f)}else n=r.apply(this,arguments);return u(this,n)}}function c(t){return function(t){if(Array.isArray(t))return l(t)}(t)||function(t){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(t))return Array.from(t)}(t)||function(t,e){if(!t)return;if("string"==typeof t)return l(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);"Object"===n&&t.constructor&&(n=t.constructor.name);if("Map"===n||"Set"===n)return Array.from(t);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return l(t,e)}(t)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function l(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}function s(){}function p(t){return t()}function y(){return Object.create(null)}function d(t){t.forEach(p)}function h(t){return"function"==typeof t}function b(t,n){return t!=t?n==n:t!==n||t&&"object"===e(t)||"function"==typeof t}function m(t){t.parentNode.removeChild(t)}function g(t){return Array.from(t.childNodes)}var v;function $(t){v=t}var _=[],x=[],w=[],O=[],j=Promise.resolve(),k=!1;function S(t){w.push(t)}var P=!1,A=new Set;function E(){if(!P){P=!0;do{for(var t=0;t<_.length;t+=1){var e=_[t];$(e),R(e.$$)}for($(null),_.length=0;x.length;)x.pop()();for(var n=0;n<w.length;n+=1){var r=w[n];A.has(r)||(A.add(r),r())}w.length=0}while(_.length);for(;O.length;)O.pop()();k=!1,P=!1,A.clear()}}function R(t){if(null!==t.fragment){t.update(),d(t.before_update);var e=t.dirty;t.dirty=[-1],t.fragment&&t.fragment.p(t.ctx,e),t.after_update.forEach(S)}}var T=new Set;function C(t,e){t&&t.i&&(T.delete(t),t.i(e))}function I(t,e,n){var r=t.$$,o=r.fragment,f=r.on_mount,i=r.on_destroy,u=r.after_update;o&&o.m(e,n),S((function(){var e=f.map(p).filter(h);i?i.push.apply(i,c(e)):d(e),t.$$.on_mount=[]})),u.forEach(S)}function M(t,e){-1===t.$$.dirty[0]&&(_.push(t),k||(k=!0,j.then(E)),t.$$.dirty.fill(0)),t.$$.dirty[e/31|0]|=1<<e%31}var N=function(t){!function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),e&&f(t,e)}(r,t);var e=a(r);function r(t){var o;return n(this,r),function(t,e,n,r,o,f){var i=arguments.length>6&&void 0!==arguments[6]?arguments[6]:[-1],u=v;$(t);var a=e.props||{},c=t.$$={fragment:null,ctx:null,props:f,update:s,not_equal:o,bound:y(),on_mount:[],on_destroy:[],before_update:[],after_update:[],context:new Map(u?u.$$.context:[]),callbacks:y(),dirty:i,skip_bound:!1},l=!1;if(c.ctx=n?n(t,a,(function(e,n){var r=!(arguments.length<=2)&&arguments.length-2?arguments.length<=2?void 0:arguments[2]:n;return c.ctx&&o(c.ctx[e],c.ctx[e]=r)&&(!c.skip_bound&&c.bound[e]&&c.bound[e](r),l&&M(t,e)),n})):[],c.update(),l=!0,d(c.before_update),c.fragment=!!r&&r(c.ctx),e.target){if(e.hydrate){var p=g(e.target);c.fragment&&c.fragment.l(p),p.forEach(m)}else c.fragment&&c.fragment.c();e.intro&&C(t.$$.fragment),I(t,e.target,e.anchor),E()}$(u)}(i(o=e.call(this)),t,null,null,b,{}),o}return r}(function(){function t(){n(this,t)}var e,o,f;return e=t,(o=[{key:"$destroy",value:function(){var t,e;t=1,null!==(e=this.$$).fragment&&(d(e.on_destroy),e.fragment&&e.fragment.d(t),e.on_destroy=e.fragment=null,e.ctx=[]),this.$destroy=s}},{key:"$on",value:function(t,e){var n=this.$$.callbacks[t]||(this.$$.callbacks[t]=[]);return n.push(e),function(){var t=n.indexOf(e);-1!==t&&n.splice(t,1)}}},{key:"$set",value:function(t){var e;this.$$set&&(e=t,0!==Object.keys(e).length)&&(this.$$.skip_bound=!0,this.$$set(t),this.$$.skip_bound=!1)}}])&&r(e.prototype,o),f&&r(e,f),t}());t.default=N,t.defaults={},t.init=function(t){t.defaults.icons={prefix:"fontawesome4",notice:"fa fa-exclamation-circle",info:"fa fa-info-circle",success:"fa fa-check-circle",error:"fa fa-exclamation-triangle",closer:"fa fa-times",sticker:"fa",stuck:"fa-play",unstuck:"fa-pause",refresh:"fa fa-refresh"}},t.position="PrependContainer",Object.defineProperty(t,"__esModule",{value:!0})}));
