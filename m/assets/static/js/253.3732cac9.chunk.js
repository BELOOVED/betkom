(this["webpackJsonpreactive-sportsbook"]=this["webpackJsonpreactive-sportsbook"]||[]).push([[253],{1910:function(t,e,n){"use strict";n.r(e);var o=n(1),c=n(59),a=n(3341),s=n(360),r=n(10),i=n(0);const p=Object(o.memo)((function({iconClass:t,setBadgeCount:e}){const{favoritesCount:n}=Object(s.b)();return Object(o.useEffect)((function(){e(n)}),[n,e]),Object(i.jsxs)(i.Fragment,{children:[Object(i.jsx)("i",{id:c.r,className:"sp-button-icon-bc ".concat(t)}),Object(i.jsx)(r.CountBadge,{count:n})]})}));e.default=Object(a.a)(p,{persistent:!0})},3341:function(t,e,n){"use strict";var o=n(1),c=n(2),a=n(142),s=n(34),r=n(0);e.a=function(t,e){return function(n){const{target:i,component:p,actions:u,title:b}=n,[l,m]=Object(o.useState)(!1),d=Object(c.a)(),f=Object(o.useCallback)((t=>{p&&s.b.dispatchEvent("setSmartPanelBadgeCount",{component:p,value:t})}),[p]);return Object(o.useEffect)((function(){if(p&&e.persistent&&i)return a.contentManagerEventDispatcher.dispatchEvent(i===a.ContentManagerTargetType.POPUP?"mountContainerPopup":"mountContainerPanel",{component:p,props:{title:b}}),()=>{a.contentManagerEventDispatcher.dispatchEvent(i===a.ContentManagerTargetType.POPUP?"unmountContainerPopup":"unmountContainerPanel",{component:p})}}),[p,i,b]),Object(o.useEffect)((()=>a.contentManagerEventDispatcher.addEventListener("activeComponent",(({selectedComponent:t})=>{m(void 0!==t&&t.name===p)}))),[p]),Object(o.useEffect)((function(){return()=>f(0)}),[f]),Object(r.jsx)("button",{className:"sp-button-bc ".concat(l?"active":""),onClick:()=>{l||(p&&i&&a.contentManagerEventDispatcher.dispatchEvent(i===a.ContentManagerTargetType.POPUP?"toggleComponentPopup":"toggleComponentPanel",{component:p,props:{title:b}}),u.forEach((t=>s.b.dispatchEvent(t.type,t.data)))),s.b.dispatchEvent("closeSmartPanel")},title:d(b),"data-component":p,children:Object(r.jsx)(t,{...n,setBadgeCount:f})})}}}}]);