(this["webpackJsonpreactive-sportsbook"]=this["webpackJsonpreactive-sportsbook"]||[]).push([[157,671,754],{1782:function(e,a,t){"use strict";t.r(a);var n=t(1),s=(t(2655),t(2656),t(213)),o=t(65),l=t(7),i=t(9),c=t(12),g=t(138),d=t(11),r=t(14),b=t(52),u=t(550),m=t(0);const j=Object(n.memo)((function({settings:e}){const{game:a,externalId:t}={...s.a,...e},{play:j}=Object(l.t)(),{language:p}=Object(c.a)(),{openGameWindow:O}=Object(g.a)(),{isLoggedIn:f,loginInProgress:k}=Object(d.a)(),[w,x]=Object(n.useState)({loading:!0,game:null});Object(n.useEffect)((()=>{if(!a){let e=!0;return o.a.loadGame({language:p,externalId:t}).then((a=>{e&&x({loading:!1,game:a})})),()=>{e=!1}}x({loading:!1,game:a})}),[a,t,p]);const{loading:h,game:y}=w;if(Object(n.useEffect)((()=>{y&&j&&!k&&(Object(l.b)("play"),O({game:y,language:p,type:j}))}),[j,y,k,O,p,f]),h)return Object(m.jsx)(r.CasinoLoader,{size:"medium"});if(!y)return null;return Object(m.jsxs)(m.Fragment,{children:[y.description?Object(m.jsx)("div",{className:"skill-games-s-g-page-h-t-right-icons-bc",children:Object(m.jsx)("i",{onClick:()=>{i.b.open({title:"Info",content:y.description})},className:"skill-games-info bc-i-player-info"})}):null,Object(m.jsxs)("div",{className:"skill-games-s-g-page-row-bc",children:[1===y.types.viewMode&&!f&&Object(m.jsx)(b.Button,{disabled:k,onClick:()=>O({game:y,language:p,type:"fun"}),className:"btn a-outline",title:"View"}),1===y.types.realMode&&Object(m.jsx)(b.Button,{disabled:k,onClick:()=>O({game:y,language:p,type:"real"}),className:"btn a-color",title:"Play"}),y.downloads&&Object(m.jsx)(u.CasinoGameDownloadButton,{downloads:y.downloads,gameName:y.name})]})]})}));a.default=j},2655:function(e,a,t){},2656:function(e,a,t){}}]);