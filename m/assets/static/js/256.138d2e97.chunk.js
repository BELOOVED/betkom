(this["webpackJsonpreactive-sportsbook"]=this["webpackJsonpreactive-sportsbook"]||[]).push([[256],{1950:function(t,e,n){"use strict";n.r(e);var o=n(1),a=n(3341),c=n(0);const s=Object(o.memo)((function({iconClass:t}){return Object(c.jsx)("i",{className:"sp-button-icon-bc ".concat(t)})}));e.default=Object(a.a)(s,{persistent:!1})},3341:function(t,e,n){"use strict";var o=n(1),a=n(2),c=n(142),s=n(34),r=n(0);e.a=function(t,e){return function(n){const{target:p,component:i,actions:u,title:b}=n,[l,m]=Object(o.useState)(!1),v=Object(a.a)(),g=Object(o.useCallback)((t=>{i&&s.b.dispatchEvent("setSmartPanelBadgeCount",{component:i,value:t})}),[i]);return Object(o.useEffect)((function(){if(i&&e.persistent&&p)return c.contentManagerEventDispatcher.dispatchEvent(p===c.ContentManagerTargetType.POPUP?"mountContainerPopup":"mountContainerPanel",{component:i,props:{title:b}}),()=>{c.contentManagerEventDispatcher.dispatchEvent(p===c.ContentManagerTargetType.POPUP?"unmountContainerPopup":"unmountContainerPanel",{component:i})}}),[i,p,b]),Object(o.useEffect)((()=>c.contentManagerEventDispatcher.addEventListener("activeComponent",(({selectedComponent:t})=>{m(void 0!==t&&t.name===i)}))),[i]),Object(o.useEffect)((function(){return()=>g(0)}),[g]),Object(r.jsx)("button",{className:"sp-button-bc ".concat(l?"active":""),onClick:()=>{l||(i&&p&&c.contentManagerEventDispatcher.dispatchEvent(p===c.ContentManagerTargetType.POPUP?"toggleComponentPopup":"toggleComponentPanel",{component:i,props:{title:b}}),u.forEach((t=>s.b.dispatchEvent(t.type,t.data)))),s.b.dispatchEvent("closeSmartPanel")},title:v(b),"data-component":i,children:Object(r.jsx)(t,{...n,setBadgeCount:g})})}}}}]);