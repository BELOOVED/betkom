(this["webpackJsonpreactive-sportsbook"]=this["webpackJsonpreactive-sportsbook"]||[]).push([[116,23,241,276,367,406,407,723,775],{1211:function(e,a,t){"use strict";t.r(a);var s=t(1737);t.d(a,"SkillGameDetails",(function(){return s.SkillGameDetails}));var n=t(1750);t.d(a,"SkillGames",(function(){return n.SkillGames}));var i=t(1738);t.d(a,"SkillGamesList",(function(){return i.SkillGamesList}))},1737:function(e,a,t){"use strict";t.r(a),t.d(a,"SkillGameDetails",(function(){return o}));var s=t(1),n=t(3),i=t(209),l=t(537),c=t(0);const o=({game:e})=>{Object(i.a)();const a=n.a.dynamicallyStructuredPages[e.extearnal_game_id],t=Object(s.useMemo)((()=>{if(!a)return a;const t=a=>"CasinoGameOptionsWidget"!==a.name?a:{...a,settings:{...a.settings,game:e}},s=e=>({...e,content:e.content.map((e=>({...e,content:"ROW"===e.content[0].type?e.content.map(s):e.content.map(t)})))});return a.map(s)}),[e,a]);return Object(c.jsx)(l.default,{layout:t})}},1738:function(e,a,t){"use strict";t.r(a),t.d(a,"SkillGamesList",(function(){return i}));var s=t(80),n=t(0);const i=({games:e,onOpenGameDetails:a})=>Object(n.jsx)("div",{className:"skill-games-page-bc",children:e.map(((e,t)=>Object(n.jsx)(s.CasinoGame,{game:e,lazyLoadImage:t>4,onContainerClick:a},e.extearnal_game_id)))})},1750:function(e,a,t){"use strict";t.r(a),t.d(a,"SkillGames",(function(){return r}));var s=t(3),n=(t(2669),t(2670),t(43)),i=t(360),l=t(84),c=t(1211),o=t(0);const r=({games:e,selectedGame:a,closeGameDetails:t,openGameDetails:r})=>{const{isCasinoGameFavorite:m,toggleFavoriteCasinoGame:u}=Object(i.b)();return Object(o.jsxs)(o.Fragment,{children:[Object(o.jsx)(c.SkillGamesList,{games:e,onOpenGameDetails:r}),a&&a.extearnal_game_id in s.a.dynamicallyStructuredPages&&Object(o.jsx)(l.Overlay,{onClose:t,children:Object(o.jsxs)("div",{className:"skill-game",children:[Object(o.jsx)(l.OverlayCloseButton,{onClick:t,displayName:a.name,children:Object(o.jsx)("i",{onClick:e=>{e.stopPropagation(),u(a.extearnal_game_id,n.m)},className:"back-nav-favorite-icon bc-i-".concat(m(a.extearnal_game_id)?"star":"favorite")})}),Object(o.jsx)(c.SkillGameDetails,{game:a})]})})]})}},1790:function(e,a,t){"use strict";t.r(a),t.d(a,"SkillGamesListItemLoader",(function(){return n}));var s=t(0);const n=()=>Object(s.jsx)("div",{className:"skill-games-page-row-bc skill-games-page-row-bc-loader skeleton-loader-full-banner"})},1824:function(e,a,t){"use strict";t.r(a),t.d(a,"SkillGamesListLoader",(function(){return i}));var s=t(1790),n=t(0);const i=()=>Object(n.jsxs)("div",{className:"skill-games-page-bc",children:[Object(n.jsx)(s.SkillGamesListItemLoader,{}),Object(n.jsx)(s.SkillGamesListItemLoader,{}),Object(n.jsx)(s.SkillGamesListItemLoader,{}),Object(n.jsx)(s.SkillGamesListItemLoader,{})]})},1863:function(e,a,t){"use strict";t.r(a),t.d(a,"SkillGamesContainerLoader",(function(){return i}));var s=t(1824),n=t(0);const i=()=>Object(n.jsx)(s.SkillGamesListLoader,{})},2016:function(e,a,t){"use strict";t.r(a);var s=t(1),n=t(62),i=t(3),l=t(69),c=t(43),o=t(13),r=t(65),m=t(12),u=t(11),d=t(1207),g=t(2),j=t(123),b=t(3313),O=t(96),f=t(138),p=t(26),v=t(1211),k=t(1863),G=t(537),x=t(34),S=t(0);a.default=()=>{const[e,a]=Object(s.useState)({loading:!0,games:[]}),{language:t}=Object(m.a)(),{loginInProgress:h}=Object(u.a)(),L=Object(g.a)(),{externalId:C,type:y}=Object(n.i)(),_=Object(p.a)(),{openGameWindow:N,openSkillGameDetails:D}=Object(f.a)();Object(j.a)("skill-games-page"),Object(b.a)();const E=Object(O.a)(),I=Object(s.useCallback)(((e,a)=>{D({game:e,language:t,openGameIfDetailsUnavailable:a})}),[t,D]),{data:w,loading:P}=Object(d.a)("/skillGamesLandingPage.json?v=".concat("09/11/2023-15:59"),!0);Object(s.useEffect)((()=>(C&&!E.has(o.t)?x.b.dispatchEvent("removeRootClassName","page-full-size"):x.b.dispatchEvent("addRootClassName","page-full-size"),()=>{x.b.dispatchEvent("removeRootClassName","page-full-size")})),[C,E]),Object(s.useEffect)((()=>{let e=!0;const s={language:t,categoryId:c.m,countryCode:l.a.countryCode};return r.a.loadGames(s).then((({games:t})=>{e&&a({loading:!1,games:t})})).catch((()=>{e&&a({loading:!1,games:[]})})),()=>{e=!1}}),[t]);const{loading:R,games:F}=e,z=Object(s.useMemo)((()=>{if(C)return null===F||void 0===F?void 0:F.find((e=>e.extearnal_game_id===C))}),[C,F]);if(Object(s.useEffect)((()=>{!z||!y&&z.extearnal_game_id in i.a.dynamicallyStructuredPages||(_.replace("/games"),N({game:z,type:y||"real",language:t}))}),[_,t,N,z,y]),R||h)return Object(S.jsx)(k.SkillGamesContainerLoader,{});if(!F.length)return Object(S.jsx)("div",{children:L("Not Available")});const W=!(!C||E.has(o.t));return Object(S.jsxs)(S.Fragment,{children:[E.has(o.t)||C?null:!P&&null!==w&&Object(S.jsx)(G.default,{layout:w}),Object(S.jsx)(v.SkillGames,{withoutNavigation:W,games:F,selectedGame:z,openGameDetails:I,closeGameDetails:()=>_.push("/games")})]})}},2669:function(e,a,t){},2670:function(e,a,t){},3313:function(e,a,t){"use strict";t.d(a,"a",(function(){return c}));var s=t(1),n=t(34);const i="compact-footer",l=document.querySelector("#root"),c=()=>{Object(s.useEffect)((()=>{if(!(null===l||void 0===l?void 0:l.classList.contains(i)))return n.b.dispatchEvent("addRootClassName",i),()=>{n.b.dispatchEvent("removeRootClassName",i),n.b.dispatchEvent("hideCompactFooter")}}),[])}}}]);