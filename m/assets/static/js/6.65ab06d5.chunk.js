(this["webpackJsonpreactive-sportsbook"]=this["webpackJsonpreactive-sportsbook"]||[]).push([[6,11,40,85,169,269,337,338,339,340,341,342,368,449,450,728,743,778,782],{1171:function(e,t,s){"use strict";s.r(t);var a=s(1531);s.d(t,"VerticalNavigationListContainer",(function(){return a.VerticalNavigationListContainer}));var i=s(1530);s.d(t,"VerticalNavigationListGroup",(function(){return i.VerticalNavigationListGroup}));var c=s(1532);s.d(t,"VerticationNavigationListGroupItem",(function(){return c.VerticationNavigationListGroupItem}))},1175:function(e,t,s){"use strict";s.r(t);var a=s(1556);s.d(t,"GameListItem",(function(){return a.GameListItem}));var i=s(1557);s.d(t,"GamesListHeaderWithChildren",(function(){return i.GamesListHeaderWithChildren}));var c=s(1558);s.d(t,"GameListItemSelectHeader",(function(){return c.GameListItemSelectHeader}));var n=s(1559);s.d(t,"GameListItemInfo",(function(){return n.GameListItemInfo}));var r=s(1585);s.d(t,"GameListItemStats",(function(){return r.GameListItemStats}));var o=s(1560);s.d(t,"GameListItemTeams",(function(){return o.GameListItemTeams}));var l=s(1561);s.d(t,"GameListItemMarkets",(function(){return l.GameListItemMarkets}));var m=s(1563);s.d(t,"SportLiveGamesInfo",(function(){return m.SportLiveGamesInfo}));var d=s(1562);s.d(t,"GameListCompetition",(function(){return d.GameListCompetition}))},1530:function(e,t,s){"use strict";s.r(t),s.d(t,"VerticalNavigationListGroup",(function(){return r}));var a=s(1),i=s(41),c=s.n(i),n=s(0);const r=({children:e,title:t,secondaryTitle:s,count:i,initiallyExpanded:r=!1,iconClass:o,selected:l=!1,className:m="",onExpanded:d=c.a,alwaysMounted:b=!1,showArrow:p=!0})=>{const[u,j]=Object(a.useState)(r),[v,h]=Object(a.useState)(b),g=a.Children.count(e)>0,f="string"===typeof t;return Object(n.jsxs)("div",{className:"sp-sub-list-bc ".concat(m," ").concat(g&&u?"active":""," ").concat(l?"selected":""),onTransitionEnd:()=>h(b||u),children:[Object(n.jsxs)("div",{className:"sp-s-l-head-bc",onClick:e=>{e.stopPropagation();const t=!u;j(t),d(t)},title:"".concat(s?s+" ":"").concat(f?t:""),children:[o?Object(n.jsx)("i",{className:"sp-s-l-h-flag-bc ".concat(o)}):null,Object(n.jsxs)("div",{className:"sp-s-l-h-title-content ellipsis",children:[s?Object(n.jsx)("p",{className:"sp-s-l-h-title-bc ellipsis",children:s}):null,f?Object(n.jsx)("p",{className:"sp-s-l-h-title-bc ellipsis",children:t}):t]}),void 0!==i&&Object(n.jsx)("span",{className:"sp-s-l-b-c-i-g-league-c-bc",children:i}),p&&Object(n.jsx)("i",{className:"sp-s-l-h-arrow-icon-bc bc-i-small-arrow-".concat(g?"down":"right")})]}),(u||v)&&Object(n.jsx)("div",{className:"sp-s-l-b-content-bc",children:e})]})}},1531:function(e,t,s){"use strict";s.r(t),s.d(t,"VerticalNavigationListContainer",(function(){return i}));s(2600),s(2601);var a=s(0);const i=({children:e})=>Object(a.jsx)("div",{className:"pp-sport-list-holder-bc",children:Object(a.jsx)("div",{className:"left-menu-scroll",children:e})})},1532:function(e,t,s){"use strict";s.r(t),s.d(t,"VerticationNavigationListGroupItem",(function(){return c}));s(1);var a=s(46),i=s(0);const c=({onClick:e,icons:t,title:s,additionalIndicator:c,count:n,showArrow:r=!0,selected:o=!1,regionAlias:l,regionName:m})=>Object(i.jsxs)("div",{className:"sp-s-l-b-c-item-bc ".concat(o?"active":""),onClick:t=>{t.stopPropagation(),e()},title:s,children:[t,Object(i.jsx)("span",{className:"sp-s-l-b-c-i-title-bc ellipsis",children:s}),c,l&&Object(i.jsx)("i",{className:"sp-s-l-h-flag-bc flag-bc ".concat(Object(a.w)(l)),title:m}),void 0!==n&&Object(i.jsx)("span",{className:"sp-s-l-b-c-i-g-count-bc",children:n}),r?Object(i.jsx)("i",{className:"competition-ico-arr-bc bc-i-small-arrow-right"}):null]})},1556:function(e,t,s){"use strict";s.r(t),s.d(t,"GameListItem",(function(){return m}));var a=s(3317),i=s.n(a),c=(s(1190),s(1191),s(49)),n=s(46),r=s(12),o=s(1600),l=s(0);const m=({game:e,onGameSelect:t=i.a,sportAlias:s,displayKey:a="",eventTypes:m,streamEnabled:d=!1,timePreset:b="datetimeShortYearShort",isDynamicPartLoading:p=!1,showSportIcon:u,regionAlias:j,regionName:v,onSwipedAnimationThreshold:h,selected:g=!1})=>{const{languageRtl:f}=Object(r.a)(),{is_live:O,is_blocked:x,stats:N,info:L,id:I,market:k={},teams_info:G,show_type:w,current_set:S="",start_ts:_,markets_count:y=0,text_info:C,is_stat_available:A,sportcast_id:T,competition:E}=e,P=1===x,M=1===O;let V;return M&&L&&N&&s&&(V=L.current_game_state===c.d?c.d:Object(n.z)(L,N,s,f,C)),Object(l.jsx)(o.GameListItemTemplate,{id:I,onGameSelect:t,onSwipedAnimationThreshold:h,isBlocked:P,market:k[a],isDynamicPartLoading:p,teams_info:G,show_type:w,eventTypes:m,sportAlias:s,current_set:S,isLive:M,info:L,markets_count:y,additionalInfo:V,streamEnabled:d,is_stat_available:A,timePreset:b,regionAlias:j,regionName:v,start_ts:_,showSportIcon:u,selected:g,sportcast_id:T,competition:E})}},1557:function(e,t,s){"use strict";s.r(t),s.d(t,"GamesListHeaderWithChildren",(function(){return n}));var a=s(104),i=s(1596),c=s(0);const n=({regionAlias:e,regionName:t,title:s,children:n,date:r,collapsable:o=!0,eventTypes:l})=>{const[m,d]=Object(a.a)(!1);return Object(c.jsxs)("div",{className:"competition-bc",children:[Object(c.jsx)(i.GamesListHeader,{onClick:o?d:void 0,collapsed:m,title:s,regionAlias:e,regionName:t,date:r,showArrow:o,eventTypes:l}),m?null:n]})}},1558:function(e,t,s){"use strict";s.r(t),s.d(t,"GameListItemSelectHeader",(function(){return r}));var a=s(1),i=(s(1184),s(2)),c=s(74),n=s(0);const r=Object(a.memo)((function({options:e,onChange:t,selectedOption:s,headers:a=[]}){const r=Object(i.a)();return Object(n.jsxs)("div",{className:"market-filter-bc",onClick:e=>e.stopPropagation(),children:[Object(n.jsx)("div",{className:"market-filter-s-bc",children:e.length>0&&Object(n.jsx)(c.Select,{inputValue:s||e[0].value,onChange:t,className:"s-small",children:e.map((({value:e,label:t})=>Object(n.jsx)(c.Option,{value:e,label:t},e)))})}),Object(n.jsx)("div",{className:"market-filter-cell-bc",children:a.map((e=>Object(n.jsx)("div",{className:"market-filter-info-bc",children:r(e).toUpperCase()},e)))})]})}))},1559:function(e,t,s){"use strict";s.r(t),s.d(t,"GameListItemInfo",(function(){return r}));var a=s(49),i=s(36),c=s(2),n=s(0);const r=({sportAlias:e,isLive:t=!1,time:s=null,currentSet:r,timePreset:o,additionalInfo:l})=>{const m=Object(c.a)();return Object(n.jsxs)("div",{className:"c-info-content-bc",children:[e&&Object(n.jsx)("i",{className:"bc-i-".concat(e," game-d-c-h-c-r-sport-icon")}),Object(n.jsx)("i",{className:"info-live-prematch-icon-bc bc-i-".concat(t?"live":"prematch")}),s&&Object(n.jsx)(i.a,{seconds:Number(s),preset:o,className:"c-info-time-bc"}),Object(n.jsxs)("div",{className:"c-info-score-wrapper",children:[r&&Object(n.jsx)("span",{className:"c-info-score-bc",children:r}),l&&(l===a.d?Object(n.jsx)("span",{className:"c-info-score-bc ellipsis",children:m("Not Started")}):Object(n.jsx)("span",{className:"c-info-score-bc fixed-direction ellipsis",children:l}))]})]})}},1560:function(e,t,s){"use strict";s.r(t),s.d(t,"GameListItemTeams",(function(){return c}));var a=s(49),i=s(0);const c=({teamsInfo:e})=>Object(i.jsx)("div",{className:"c-teams-bc",children:e.map(((e,t)=>Object(i.jsxs)("div",{className:"c-teams-row-bc",children:[Object(i.jsx)("span",{className:"c-team-info-team-bc team",title:e.name,children:e.name}),void 0!==e.score&&Object(i.jsx)("b",{className:"c-team-info-scores-bc",children:e.score!==a.f?e.score:""})]},t)))})},1561:function(e,t,s){"use strict";s.r(t),s.d(t,"GameListItemMarkets",(function(){return o}));var a=s(49),i=s(46),c=s(363),n=s(180),r=s(0);const o=({sportAlias:e,eventTypes:t=[],gameId:s,gameIsBlocked:o,isMarketLoading:l,market:m,showType:d,teamsInfo:b,isLive:p})=>Object(r.jsx)(r.Fragment,{children:d!==a.j.Outright?l?Object(r.jsx)(c.MarketEventListLoader,{numMarketEvents:t.length,className:"c-odd-bc"}):t.map((t=>{if(o)return Object(r.jsx)("div",{className:"c-odd-bc",onClick:e=>e.stopPropagation(),children:Object(r.jsx)(n.DisabledMarketEvent,{})},t);const a=null===m||void 0===m?void 0:m.event[t];if(!a)return Object(r.jsx)("div",{className:"c-odd-bc",onClick:e=>e.stopPropagation(),children:Object(r.jsx)(n.UnavailableMarketEvent,{})},t);if(Object(i.S)(a.price))return Object(r.jsx)("div",{className:"c-odd-bc",onClick:e=>e.stopPropagation(),children:Object(r.jsx)(n.DisabledMarketEvent,{})},t);const{type:c,id:l,express_id:d}=m,[u,j]=b;return Object(r.jsx)("div",{className:"c-odd-bc",children:Object(r.jsx)(n.MarketEvent,{id:a.id,type:a.type_1,gameId:s,price:a.price,base:a.base,marketType:c,marketId:l,name:a.name,team1Name:u.name,team2Name:j&&j.name,expressId:d,sportAlias:e,isLive:Number(p)})},t)})):null})},1562:function(e,t,s){"use strict";s.r(t),s.d(t,"GameListCompetition",(function(){return i}));var a=s(0);const i=({competition:e})=>Object(a.jsx)("p",{className:"c-segment-holder-title c-title-bc ellipsis",children:e.name})},1563:function(e,t,s){"use strict";s.r(t),s.d(t,"SportLiveGamesInfo",(function(){return I}));var a=s(1),i=s(58),c=s.n(i),n=s(126),r=s.n(n),o=s(6),l=s(49),m=s(294),d=s(17),b=s(207),p=s(46),u=s(3312),j=s(26),v=s(182),h=s(1176),g=s(1175),f=s(1171),O=s(1575),x=s(0);const N=(e,t)=>c()(Object(d.a)({sport_alias:e,is_live:1}),m.d,m.h,Object(m.g)(t)),L=m.a.filter((e=>"sport_alias"!==e));const I=({sportAlias:e,gameId:t,competitionId:s})=>{const[i,c]=Object(a.useState)(!1),[{data:n,loading:m},d]=Object(a.useState)({data:[],loading:!0}),[I,k]=Object(a.useState)((()=>({...s&&{[s]:!0}})));Object(v.a)(i);const G=Object(j.a)(),w=Object(u.a)({sport:{alias:e},game:{type:1}}),{streamsMap:S}=Object(a.useContext)(h.a);return Object(a.useEffect)((()=>{if(i){const t=b.a.getInstance().enabled,s=o.b.subscribe(function(e){return{source:"betting",what:{region:["order"],competition:["id","order","name"],game:[...L,"info","stats","region_alias","start_ts"]},where:{game:{type:1},sport:{alias:e}}}}(e),(({region:s})=>{d({data:r()(s,"order").flatMap((({competition:s})=>r()(s,"order").map((({game:s,...a})=>({...a,games:r()(s,["start_ts","id"]).map(N(e,t))}))))),loading:!1})}),(()=>d({data:[],loading:!1})));return()=>o.b.unsubscribe(s)}}),[i,e]),Object(a.useEffect)((function(){i&&w<2&&c(!1)}),[i,w]),w<2?null:Object(x.jsxs)(x.Fragment,{children:[Object(x.jsx)("i",{onClick:e=>{e.stopPropagation(),c((e=>!e))},className:"competition-icon-arrow-bc bc-i-small-arrow-".concat(i?"up":"down")}),i&&Object(x.jsx)("div",{className:"game-details-list",children:Object(x.jsx)("div",{className:"game-details-list-scroll","data-scroll-lock-scrollable":"",children:m?Object(x.jsx)(O.SportRegionsLoader,{}):n.map((s=>Object(x.jsx)(f.VerticalNavigationListGroup,{title:s.name,count:s.games.length,onExpanded:e=>k((t=>({...t,[s.id]:e}))),initiallyExpanded:I[s.id],iconClass:"c-country-bc flag-bc ".concat(Object(p.w)(s.games[0].region_alias)),children:s.games.map((a=>Object(x.jsx)(g.GameListItem,{game:a,sportAlias:a.sport_alias,streamEnabled:void 0!==S[a.id],onGameSelect:()=>(({gameId:t,competitionId:s,regionAlias:a})=>G.push("/sports/".concat(l.e.Live,"/").concat(l.c.EventView,"/").concat(e,"/").concat(a,"/").concat(s,"/").concat(t)))({gameId:a.id,competitionId:s.id,regionAlias:a.region_alias}),selected:a.id===t},a.id)))},s.id)))})})]})}},1575:function(e,t,s){"use strict";s.r(t),s.d(t,"SportRegionsLoader",(function(){return i}));s(73),s(197);var a=s(0);const i=()=>Object(a.jsx)("div",{className:"sp-sub-list-bc",children:Object(a.jsx)("div",{className:"sp-s-l-head-bc",children:Object(a.jsx)("span",{className:"sp-s-l-h-title-bc skeleton-loader-text"})})})},1596:function(e,t,s){"use strict";s.r(t),s.d(t,"GamesListHeader",(function(){return r}));s(1);var a=s(36),i=s(46),c=s(2),n=s(0);const r=({onClick:e=(()=>{}),collapsed:t,title:s,regionName:r="",regionAlias:o="",date:l,showArrow:m=!0,eventTypes:d})=>{const b=Object(c.a)();return Object(n.jsx)("div",{className:"c-segment-holder-bc head",onClick:e,children:Object(n.jsxs)("div",{className:"c-head-bc",children:[l&&Object(n.jsx)(a.a,{className:"c-title-bc ellipsis",seconds:l,preset:"dateShort"}),d&&Object(n.jsx)("div",{className:"market-filter-cell-bc",children:d.map((e=>Object(n.jsx)("div",{className:"market-filter-info-bc",children:b(e).toUpperCase()},e)))}),s&&Object(n.jsxs)(n.Fragment,{children:[o?Object(n.jsx)("i",{className:"c-country-bc flag-bc ".concat(Object(i.w)(o))}):null,Object(n.jsxs)("p",{className:"c-country-bc-text ellipsis",children:[r?Object(n.jsx)("span",{className:"c-title-bc ellipsis",children:r}):null,Object(n.jsx)("span",{className:"c-title-bc ellipsis",children:s})]})]}),m&&Object(n.jsx)("i",{className:"sgm-market-g-h-toggle-icon-bc bc-i-small-arrow-".concat(t?"down":"up")})]})})}},1600:function(e,t,s){"use strict";s.r(t),s.d(t,"GameListItemTemplate",(function(){return d}));var a=s(62),i=s(49),c=s(76),n=s(533),r=s(2),o=s(360),l=s(1175),m=s(0);const d=({id:e,onGameSelect:t,onSwipedAnimationThreshold:s,isBlocked:d,market:b,isDynamicPartLoading:p,teams_info:u,show_type:j,eventTypes:v,sportAlias:h,current_set:g,isLive:f,info:O,start_ts:x,markets_count:N,additionalInfo:L,streamEnabled:I,is_stat_available:k,timePreset:G,regionAlias:w,regionName:S,showSportIcon:_,selected:y,sportcast_id:C,competition:A})=>{var T,E;const P=Object(r.a)(),{isSportGameFavorite:M,toggleFavoriteSportGame:V}=Object(o.b)(),{pathname:D}=Object(a.h)(),H=M(e);return Object(m.jsxs)(n.a,{onSwiped:()=>V(e),iconClass:"bc-i-".concat(H?"star":"favorite"),swipeDisabled:D.includes("embed")||D.includes("widget"),onContainerClick:e=>{e.stopPropagation(),t()},onSwipedAnimationThreshold:s,animationStorageKey:c.j,children:[Object(m.jsxs)("div",{className:"c-segment-holder-bc markets ".concat(y?"active":""),children:[A&&Object(m.jsx)(l.GameListCompetition,{competition:A}),Object(m.jsxs)("div",{className:"c-row-bc bordered",children:[Object(m.jsx)(l.GameListItemTeams,{teamsInfo:u}),Object(m.jsx)(l.GameListItemMarkets,{gameId:e,gameIsBlocked:d,market:b,isMarketLoading:p,teamsInfo:u,showType:j,eventTypes:v,sportAlias:h,isLive:f})]})]}),Object(m.jsx)("div",{className:"c-segment-holder-bc info",children:Object(m.jsxs)("div",{className:"c-info-bc",children:[Object(m.jsx)(l.GameListItemInfo,{timePreset:G,isLive:f,currentSet:g?P(g):"",time:f&&O&&O.current_game_state!==i.d?null:x,additionalInfo:L,sportAlias:_?h:void 0}),Object(m.jsx)(l.GameListItemStats,{isBlocked:d,start_ts:x,sportAlias:h,gameId:e,team1Name:null===(T=u[0])||void 0===T?void 0:T.name,team2Name:null===(E=u[1])||void 0===E?void 0:E.name,regionAlias:w,regionName:S,streamEnabled:I,hasStatistics:k,marketsCount:N,sportcast_id:C})]})})]})}},1719:function(e,t,s){"use strict";s.r(t),s.d(t,"CompetitionDetailsGame",(function(){return c}));var a=s(1556),i=(s(2657),s(2650),s(0));const c=({game:e,selectedMarketFilterOption:t,isDynamicPartLoading:s,eventTypes:c,onGameSelect:n,onSwipedAnimationThreshold:r})=>Object(i.jsx)(a.GameListItem,{game:e,displayKey:t,isDynamicPartLoading:s,eventTypes:c,onGameSelect:()=>n(e.id),timePreset:"timeSimple",sportAlias:e.sport_alias,onSwipedAnimationThreshold:r})},2600:function(e,t,s){},2601:function(e,t,s){},2650:function(e,t,s){},2657:function(e,t,s){},3312:function(e,t,s){"use strict";s.d(t,"a",(function(){return c}));var a=s(1),i=s(6);const c=e=>{const[t,s]=Object(a.useState)(-1),c=Object(a.useMemo)((()=>JSON.stringify(e)),[e]);return Object(a.useEffect)((function(){const e=i.b.subscribe({source:"betting",what:{game:"@count"},where:JSON.parse(c)},(({game:e})=>s(e)),(()=>s(0)));return()=>{i.b.unsubscribe(e)}}),[c]),t}},3317:function(e,t,s){var a=s(208)("noop",s(41),s(1192));a.placeholder=s(196),e.exports=a}}]);