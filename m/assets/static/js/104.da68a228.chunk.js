(this["webpackJsonpreactive-sportsbook"]=this["webpackJsonpreactive-sportsbook"]||[]).push([[104,138,234,266,714,715,770,771],{1698:function(t,e,o){"use strict";o.r(e),o.d(e,"PromotionOptInButton",(function(){return r}));var n=o(1),s=o(3333),a=o(10),c=o(0);const r=Object(n.memo)((function({optIns:t,optInId:e,optIn:o,optOut:n,optInsLoading:r,optInInProgress:i}){if(!e)return null;const l=t.has(e),p="".concat("btn s-small promotions-opt-button"," ").concat(i===e?"disabled":""," ").concat(l?"a-outline a-white":"a-color"," ").concat(r===s.a.InProgress?"prevent-prevent-action ":"");return Object(c.jsx)(a.Button,{onClick:t=>{t.stopPropagation(),l?n(e):o(e)},title:l?"Opt out":"Opt in",className:p})}))},1763:function(t,e,o){"use strict";o.r(e);o(2642),o(2643);var n=o(1698),s=o(3),a=o(2),c=o(0);e.default=({promotion:t,optInButtonProps:e})=>{const o=Object(a.a)(),{title:r,content:i,src:l,srcAlt:p}=t;return Object(c.jsxs)("div",{className:"promotion-details-container",children:[Object(c.jsxs)("div",{className:"promotion-details-header",children:[Object(c.jsx)("img",{src:l,className:"promotion-details-img",alt:null!==p&&void 0!==p?p:"",title:r}),Object(c.jsx)(n.PromotionOptInButton,{optInId:t.optIn,...e}),s.a.app.promotions.showRegulationMessageInPopup&&Object(c.jsx)("div",{className:"footer-title",dangerouslySetInnerHTML:{__html:o("Regulations & Partners")}})]}),Object(c.jsx)("div",{className:"promotion-details-info",dangerouslySetInnerHTML:{__html:i},"data-scroll-lock-scrollable":""})]})}},1867:function(t,e,o){"use strict";o.r(e);var n=o(1),s=o(1698),a=o(0);const c=({promotion:t,onSelect:e,optInButtonProps:o})=>Object(a.jsxs)("div",{className:"skill-games-s-g-page-b-c-item-bc",onClick:()=>e(t),children:[Object(a.jsx)("img",{className:"skill-games-s-g-page-b-c-item-image-bc",src:t.src,alt:t.title}),Object(a.jsx)("p",{className:"skill-games-s-g-page-b-c-item-text-bc ellipsis",children:t.title}),Object(a.jsx)(s.PromotionOptInButton,{optInId:t.optIn,...o})]});e.default=Object(n.memo)(c)},1941:function(t,e,o){"use strict";o.r(e);var n=o(1),s=(o(2701),o(2702),o(15)),a=o(9),c=o(3333),r=o(3348),i=o(2),l=o(14),p=o(84),u=o(1763),d=o(1867),m=o(215),b=o(0);const g=({settings:{name:t}})=>{const{loading:e,promotions:o}=Object(r.a)({slug:t,excludeContent:!1}),[g,j]=Object(n.useState)(null),O=Object(i.a)(),{updateUserOptIns:f,optInButtonProps:h}=Object(c.b)(),I=()=>j(null);return Object(n.useEffect)((()=>{e||f(o)}),[e,o,f]),Object(n.useEffect)((()=>{!s.a.isMobile&&g&&a.b.open({title:g.title,hideCloseButton:!1,className:"promotion-details-popup poker-popup",onClose:I,Component:()=>Object(b.jsx)(m.default,{hideCloseButton:!0,children:Object(b.jsx)(u.default,{promotion:g,optInButtonProps:h})})})}),[h,g]),e?Object(b.jsx)(l.Loader,{}):o.length?Object(b.jsxs)(b.Fragment,{children:[s.a.isMobile>0&&g&&Object(b.jsxs)(p.Overlay,{className:"promotion-details-popup",onClose:I,children:[Object(b.jsx)(p.OverlayCloseButton,{onClick:I,displayName:g.title}),Object(b.jsx)(u.default,{promotion:g,optInButtonProps:h})]}),Object(b.jsxs)("div",{className:"skill-games-s-g-page-bottom-bc",children:[Object(b.jsx)("h3",{className:"skill-games-s-g-page-b-title-bc ellipsis",children:O("Best Promotions")}),Object(b.jsx)("div",{className:"skill-games-s-g-page-b-content-bc",children:o.map((t=>Object(b.jsx)(d.default,{promotion:t,onSelect:j,optInButtonProps:h},t.id)))})]})]}):null};e.default=Object(n.memo)(g)},2642:function(t,e,o){},2643:function(t,e,o){},2701:function(t,e,o){},2702:function(t,e,o){},3333:function(t,e,o){"use strict";o.d(e,"a",(function(){return d})),o.d(e,"b",(function(){return m}));var n=o(1),s=o(6),a=o(53),c=o(5),r=o(9),i=o(17),l=o(11),p=o(142);const u=t=>Boolean(t.optIn);let d;!function(t){t[t.NotLoaded=0]="NotLoaded",t[t.InProgress=1]="InProgress",t[t.Loaded=2]="Loaded"}(d||(d={}));const m=()=>{var t;const{isLoggedIn:e}=Object(l.a)(),[{loading:o,data:m},b]=Object(n.useState)({loading:d.NotLoaded,data:new Set}),[g,j]=Object(n.useState)(!1),[O,f]=Object(n.useState)(null),h=Object(n.useCallback)((t=>{f({code:t,command:"client_opt_in"})}),[]),I=Object(n.useCallback)((t=>{f({code:t,command:"client_opt_out"})}),[]),P=Object(n.useCallback)((t=>{e?o===d.NotLoaded&&void 0!==t&&j(Array.isArray(t)?t.some(u):u(t)):b({loading:d.NotLoaded,data:new Set})}),[e,o]);return Object(n.useEffect)((function(){if(g){let t=!0;return b((t=>({loading:t.loading===d.NotLoaded?t.loading:d.InProgress,data:t.data}))),s.b.get({},"get_player_opt_ins").then(Object(i.h)([],"details")).then((t=>new Set(t.map(Object(i.f)("Code"))))).then((e=>{t&&b({loading:d.Loaded,data:e})})).catch((()=>{t&&b({loading:d.NotLoaded,data:new Set})})).finally((()=>{t&&j(!1)})),()=>{t=!1}}}),[g]),Object(n.useEffect)((function(){if(O)if(e){if(o===d.Loaded){const{code:t,command:e}=O;if("client_opt_in"===e&&m.has(O.code))f(null),r.b.open({type:"error",title:"Error",content:c.uc});else{let o=!0;s.b.get({code:t},e).then((({result:t,result_text:e})=>{o&&(0===t?j(!0):r.b.open({type:"error",title:"Error",content:null!==e&&void 0!==e?e:"something_went_wrong"}))})).catch((()=>{o&&r.b.open({type:"error",title:"Error",content:"something_went_wrong"})})).finally((()=>{o&&f(null)}))}}}else{let t=!1;p.contentManagerEventDispatcher.dispatchEvent("addComponentPopup",{component:"AuthPopup",onClose:()=>{t||f(null)},props:{popupContentType:a.a.Login,onSuccess:()=>{t=!0}}})}}),[e,O,m,o]),{optInButtonProps:{optIns:m,optIn:h,optOut:I,optInsLoading:o,optInInProgress:null!==(t=null===O||void 0===O?void 0:O.code)&&void 0!==t?t:null},updateUserOptIns:P}}},3336:function(t,e,o){"use strict";var n=o(15),s=o(231);class a extends s.a{static getQueryParams(){return{use_webp:n.a.useWebp,platform:n.a.isMobile}}loadCategories(t){return this.loadDataFromNewAPI({urlSuffix:"categories/promotion",language:t,params:a.getQueryParams()})}loadPromotionsByCategory(t,e,o=!1){return this.loadDataFromNewAPI({urlSuffix:"promotions",language:t,params:{...a.getQueryParams(),category:e,...o&&{exclude:"content"},with_meta:1}})}loadPromotion(t,e){return this.loadDataFromNewAPI({urlSuffix:"promotions/".concat(e),language:t,params:a.getQueryParams()})}}e.a=new a},3348:function(t,e,o){"use strict";var n=o(1),s=o(47),a=o.n(s),c=o(3),r=o(3336),i=o(231),l=o(200),p=o(12),u=o(245),d=o(11);e.a=({slug:t,excludeContent:e})=>{const{language:o}=Object(p.a)(),{isLoggedIn:s,profile:{deposit_count:m}}=Object(d.a)(),b=Object(u.a)(),[g,j]=Object(n.useState)({loading:!0,promotions:[]});return Object(n.useEffect)((()=>{let n=!0;return r.a.loadPromotionsByCategory(o,t,e).then((t=>{n&&j({loading:!1,promotions:t.filter((({showTo:t,profileTypes:e,customProfileTypes:o,depositType:n})=>!Object(l.c)({showTo:t,profileTypes:e,customProfileTypes:o},b)&&Object(l.b)(m,s,n))).map((t=>{const e=t.eventDate?i.a.getTimestamp(t.eventDate):0;return{...t,...t.src&&{src:t.src.includes("http")?t.src:"".concat(c.a.cms.apiUrl).concat(t.src)},...e>0&&a()().unix()<e&&{endTime:e}}}))})})).catch((()=>{n&&j({loading:!1,promotions:[]})})),()=>{n=!1}}),[m,e,s,o,t,b]),g}}}]);