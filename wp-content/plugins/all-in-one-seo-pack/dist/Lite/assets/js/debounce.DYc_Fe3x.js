import{r as b,i as C}from"./helpers.BYd0a-KO.js";import{t as k}from"./toNumber.ai1CpWpw.js";var _=function(){return b.Date.now()},M="Expected a function",R=Math.max,S=Math.min;function O(x,t,u){var a,c,m,o,e,r,l=0,T=!1,s=!1,g=!0;if(typeof x!="function")throw new TypeError(M);t=k(t)||0,C(u)&&(T=!!u.leading,s="maxWait"in u,m=s?R(k(u.maxWait)||0,t):m,g="trailing"in u?!!u.trailing:g);function p(n){var i=a,f=c;return a=c=void 0,l=n,o=x.apply(f,i),o}function I(n){return l=n,e=setTimeout(d,t),T?p(n):o}function L(n){var i=n-r,f=n-l,E=t-i;return s?S(E,m-f):E}function y(n){var i=n-r,f=n-l;return r===void 0||i>=t||i<0||s&&f>=m}function d(){var n=_();if(y(n))return h(n);e=setTimeout(d,L(n))}function h(n){return e=void 0,g&&a?p(n):(a=c=void 0,o)}function A(){e!==void 0&&clearTimeout(e),l=0,a=r=c=e=void 0}function W(){return e===void 0?o:h(_())}function v(){var n=_(),i=y(n);if(a=arguments,c=this,r=n,i){if(e===void 0)return I(r);if(s)return clearTimeout(e),e=setTimeout(d,t),p(r)}return e===void 0&&(e=setTimeout(d,t)),o}return v.cancel=A,v.flush=W,v}export{O as d};
