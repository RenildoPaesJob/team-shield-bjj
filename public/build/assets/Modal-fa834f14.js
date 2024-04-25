import{R as f,r as u,b as tt,e as oe,j as D}from"./app-f0dd2ff0.js";import{l as Q,s as j,a as R,u as N,b as de,D as y,X as $,o as h,c as fe,y as S,p as nt,f as Te,T as rt,d as xe,S as we,C as ot,e as q,t as te}from"./transition-311b88a5.js";var be;let k=(be=f.useId)!=null?be:function(){let e=Q(),[t,n]=f.useState(e?()=>j.nextId():null);return R(()=>{t===null&&n(j.nextId())},[t]),t!=null?""+t:void 0};function Se(e){return j.isServer?null:e instanceof Node?e.ownerDocument:e!=null&&e.hasOwnProperty("current")&&e.current instanceof Node?e.current.ownerDocument:document}let le=["[contentEditable=true]","[tabindex]","a[href]","area[href]","button:not([disabled])","iframe","input:not([disabled])","select:not([disabled])","textarea:not([disabled])"].map(e=>`${e}:not([tabindex='-1'])`).join(",");var F=(e=>(e[e.First=1]="First",e[e.Previous=2]="Previous",e[e.Next=4]="Next",e[e.Last=8]="Last",e[e.WrapAround=16]="WrapAround",e[e.NoScroll=32]="NoScroll",e))(F||{}),Le=(e=>(e[e.Error=0]="Error",e[e.Overflow=1]="Overflow",e[e.Success=2]="Success",e[e.Underflow=3]="Underflow",e))(Le||{}),lt=(e=>(e[e.Previous=-1]="Previous",e[e.Next=1]="Next",e))(lt||{});function at(e=document.body){return e==null?[]:Array.from(e.querySelectorAll(le)).sort((t,n)=>Math.sign((t.tabIndex||Number.MAX_SAFE_INTEGER)-(n.tabIndex||Number.MAX_SAFE_INTEGER)))}var Pe=(e=>(e[e.Strict=0]="Strict",e[e.Loose=1]="Loose",e))(Pe||{});function it(e,t=0){var n;return e===((n=Se(e))==null?void 0:n.body)?!1:N(t,{0(){return e.matches(le)},1(){let r=e;for(;r!==null;){if(r.matches(le))return!0;r=r.parentElement}return!1}})}var ut=(e=>(e[e.Keyboard=0]="Keyboard",e[e.Mouse=1]="Mouse",e))(ut||{});typeof window<"u"&&typeof document<"u"&&(document.addEventListener("keydown",e=>{e.metaKey||e.altKey||e.ctrlKey||(document.documentElement.dataset.headlessuiFocusVisible="")},!0),document.addEventListener("click",e=>{e.detail===1?delete document.documentElement.dataset.headlessuiFocusVisible:e.detail===0&&(document.documentElement.dataset.headlessuiFocusVisible="")},!0));function C(e){e==null||e.focus({preventScroll:!0})}let st=["textarea","input"].join(",");function ct(e){var t,n;return(n=(t=e==null?void 0:e.matches)==null?void 0:t.call(e,st))!=null?n:!1}function dt(e,t=n=>n){return e.slice().sort((n,r)=>{let a=t(n),l=t(r);if(a===null||l===null)return 0;let o=a.compareDocumentPosition(l);return o&Node.DOCUMENT_POSITION_FOLLOWING?-1:o&Node.DOCUMENT_POSITION_PRECEDING?1:0})}function X(e,t,{sorted:n=!0,relativeTo:r=null,skipElements:a=[]}={}){let l=Array.isArray(e)?e.length>0?e[0].ownerDocument:document:e.ownerDocument,o=Array.isArray(e)?n?dt(e):e:at(e);a.length>0&&o.length>1&&(o=o.filter(p=>!a.includes(p))),r=r??l.activeElement;let i=(()=>{if(t&5)return 1;if(t&10)return-1;throw new Error("Missing Focus.First, Focus.Previous, Focus.Next or Focus.Last")})(),s=(()=>{if(t&1)return 0;if(t&2)return Math.max(0,o.indexOf(r))-1;if(t&4)return Math.max(0,o.indexOf(r))+1;if(t&8)return o.length-1;throw new Error("Missing Focus.First, Focus.Previous, Focus.Next or Focus.Last")})(),c=t&32?{preventScroll:!0}:{},d=0,m=o.length,E;do{if(d>=m||d+m<=0)return 0;let p=s+d;if(t&16)p=(p+m)%m;else{if(p<0)return 3;if(p>=m)return 1}E=o[p],E==null||E.focus(c),d+=i}while(E!==l.activeElement);return t&6&&ct(E)&&E.select(),2}function K(e,t,n){let r=de(t);u.useEffect(()=>{function a(l){r.current(l)}return document.addEventListener(e,a,n),()=>document.removeEventListener(e,a,n)},[e,n])}function De(e,t,n){let r=de(t);u.useEffect(()=>{function a(l){r.current(l)}return window.addEventListener(e,a,n),()=>window.removeEventListener(e,a,n)},[e,n])}function ft(e,t,n=!0){let r=u.useRef(!1);u.useEffect(()=>{requestAnimationFrame(()=>{r.current=n})},[n]);function a(o,i){if(!r.current||o.defaultPrevented)return;let s=i(o);if(s===null||!s.getRootNode().contains(s)||!s.isConnected)return;let c=function d(m){return typeof m=="function"?d(m()):Array.isArray(m)||m instanceof Set?m:[m]}(e);for(let d of c){if(d===null)continue;let m=d instanceof HTMLElement?d:d.current;if(m!=null&&m.contains(s)||o.composed&&o.composedPath().includes(m))return}return!it(s,Pe.Loose)&&s.tabIndex!==-1&&o.preventDefault(),t(o,s)}let l=u.useRef(null);K("pointerdown",o=>{var i,s;r.current&&(l.current=((s=(i=o.composedPath)==null?void 0:i.call(o))==null?void 0:s[0])||o.target)},!0),K("mousedown",o=>{var i,s;r.current&&(l.current=((s=(i=o.composedPath)==null?void 0:i.call(o))==null?void 0:s[0])||o.target)},!0),K("click",o=>{l.current&&(a(o,()=>l.current),l.current=null)},!0),K("touchend",o=>a(o,()=>o.target instanceof HTMLElement?o.target:null),!0),De("blur",o=>a(o,()=>window.document.activeElement instanceof HTMLIFrameElement?window.document.activeElement:null),!0)}function mt(e){let t=e.parentElement,n=null;for(;t&&!(t instanceof HTMLFieldSetElement);)t instanceof HTMLLegendElement&&(n=t),t=t.parentElement;let r=(t==null?void 0:t.getAttribute("disabled"))==="";return r&&pt(n)?!1:r}function pt(e){if(!e)return!1;let t=e.previousElementSibling;for(;t!==null;){if(t instanceof HTMLLegendElement)return!1;t=t.previousElementSibling}return!0}let vt="div";var z=(e=>(e[e.None=1]="None",e[e.Focusable=2]="Focusable",e[e.Hidden=4]="Hidden",e))(z||{});function gt(e,t){let{features:n=1,...r}=e,a={ref:t,"aria-hidden":(n&2)===2?!0:void 0,style:{position:"fixed",top:1,left:1,width:1,height:0,padding:0,margin:-1,overflow:"hidden",clip:"rect(0, 0, 0, 0)",whiteSpace:"nowrap",borderWidth:"0",...(n&4)===4&&(n&2)!==2&&{display:"none"}}};return $({ourProps:a,theirProps:r,slot:{},defaultTag:vt,name:"Hidden"})}let ae=y(gt);var Fe=(e=>(e.Space=" ",e.Enter="Enter",e.Escape="Escape",e.Backspace="Backspace",e.Delete="Delete",e.ArrowLeft="ArrowLeft",e.ArrowUp="ArrowUp",e.ArrowRight="ArrowRight",e.ArrowDown="ArrowDown",e.Home="Home",e.End="End",e.PageUp="PageUp",e.PageDown="PageDown",e.Tab="Tab",e))(Fe||{});function me(e,t){let n=u.useRef([]),r=h(e);u.useEffect(()=>{let a=[...n.current];for(let[l,o]of t.entries())if(n.current[l]!==o){let i=r(t,a);return n.current=t,i}},[r,...t])}function ht(){return/iPhone/gi.test(window.navigator.platform)||/Mac/gi.test(window.navigator.platform)&&window.navigator.maxTouchPoints>0}function B(...e){return u.useMemo(()=>Se(...e),[...e])}var H=(e=>(e[e.Forwards=0]="Forwards",e[e.Backwards=1]="Backwards",e))(H||{});function Et(){let e=u.useRef(0);return De("keydown",t=>{t.key==="Tab"&&(e.current=t.shiftKey?1:0)},!0),e}function Me(e,t,n,r){let a=de(n);u.useEffect(()=>{e=e??window;function l(o){a.current(o)}return e.addEventListener(t,l,r),()=>e.removeEventListener(t,l,r)},[e,t,r])}function wt(e){function t(){document.readyState!=="loading"&&(e(),document.removeEventListener("DOMContentLoaded",t))}typeof window<"u"&&typeof document<"u"&&(document.addEventListener("DOMContentLoaded",t),t())}function Ce(e){let t=h(e),n=u.useRef(!1);u.useEffect(()=>(n.current=!1,()=>{n.current=!0,fe(()=>{n.current&&t()})}),[t])}function Re(e){if(!e)return new Set;if(typeof e=="function")return new Set(e());let t=new Set;for(let n of e.current)n.current instanceof HTMLElement&&t.add(n.current);return t}let bt="div";var Ae=(e=>(e[e.None=1]="None",e[e.InitialFocus=2]="InitialFocus",e[e.TabLock=4]="TabLock",e[e.FocusLock=8]="FocusLock",e[e.RestoreFocus=16]="RestoreFocus",e[e.All=30]="All",e))(Ae||{});function yt(e,t){let n=u.useRef(null),r=S(n,t),{initialFocus:a,containers:l,features:o=30,...i}=e;Q()||(o=1);let s=B(n);xt({ownerDocument:s},!!(o&16));let c=St({ownerDocument:s,container:n,initialFocus:a},!!(o&2));Lt({ownerDocument:s,container:n,containers:l,previousActiveElement:c},!!(o&8));let d=Et(),m=h(v=>{let T=n.current;T&&(L=>L())(()=>{N(d.current,{[H.Forwards]:()=>{X(T,F.First,{skipElements:[v.relatedTarget]})},[H.Backwards]:()=>{X(T,F.Last,{skipElements:[v.relatedTarget]})}})})}),E=nt(),p=u.useRef(!1),Z={ref:r,onKeyDown(v){v.key=="Tab"&&(p.current=!0,E.requestAnimationFrame(()=>{p.current=!1}))},onBlur(v){let T=Re(l);n.current instanceof HTMLElement&&T.add(n.current);let L=v.relatedTarget;L instanceof HTMLElement&&L.dataset.headlessuiFocusGuard!=="true"&&(Ne(T,L)||(p.current?X(n.current,N(d.current,{[H.Forwards]:()=>F.Next,[H.Backwards]:()=>F.Previous})|F.WrapAround,{relativeTo:v.target}):v.target instanceof HTMLElement&&C(v.target)))}};return f.createElement(f.Fragment,null,!!(o&4)&&f.createElement(ae,{as:"button",type:"button","data-headlessui-focus-guard":!0,onFocus:m,features:z.Focusable}),$({ourProps:Z,theirProps:i,defaultTag:bt,name:"FocusTrap"}),!!(o&4)&&f.createElement(ae,{as:"button",type:"button","data-headlessui-focus-guard":!0,onFocus:m,features:z.Focusable}))}let $t=y(yt),O=Object.assign($t,{features:Ae}),P=[];wt(()=>{function e(t){t.target instanceof HTMLElement&&t.target!==document.body&&P[0]!==t.target&&(P.unshift(t.target),P=P.filter(n=>n!=null&&n.isConnected),P.splice(10))}window.addEventListener("click",e,{capture:!0}),window.addEventListener("mousedown",e,{capture:!0}),window.addEventListener("focus",e,{capture:!0}),document.body.addEventListener("click",e,{capture:!0}),document.body.addEventListener("mousedown",e,{capture:!0}),document.body.addEventListener("focus",e,{capture:!0})});function Tt(e=!0){let t=u.useRef(P.slice());return me(([n],[r])=>{r===!0&&n===!1&&fe(()=>{t.current.splice(0)}),r===!1&&n===!0&&(t.current=P.slice())},[e,P,t]),h(()=>{var n;return(n=t.current.find(r=>r!=null&&r.isConnected))!=null?n:null})}function xt({ownerDocument:e},t){let n=Tt(t);me(()=>{t||(e==null?void 0:e.activeElement)===(e==null?void 0:e.body)&&C(n())},[t]),Ce(()=>{t&&C(n())})}function St({ownerDocument:e,container:t,initialFocus:n},r){let a=u.useRef(null),l=Te();return me(()=>{if(!r)return;let o=t.current;o&&fe(()=>{if(!l.current)return;let i=e==null?void 0:e.activeElement;if(n!=null&&n.current){if((n==null?void 0:n.current)===i){a.current=i;return}}else if(o.contains(i)){a.current=i;return}n!=null&&n.current?C(n.current):X(o,F.First)===Le.Error&&console.warn("There are no focusable elements inside the <FocusTrap />"),a.current=e==null?void 0:e.activeElement})},[r]),a}function Lt({ownerDocument:e,container:t,containers:n,previousActiveElement:r},a){let l=Te();Me(e==null?void 0:e.defaultView,"focus",o=>{if(!a||!l.current)return;let i=Re(n);t.current instanceof HTMLElement&&i.add(t.current);let s=r.current;if(!s)return;let c=o.target;c&&c instanceof HTMLElement?Ne(i,c)?(r.current=c,C(c)):(o.preventDefault(),o.stopPropagation(),C(s)):C(r.current)},!0)}function Ne(e,t){for(let n of e)if(n.contains(t))return!0;return!1}let ke=u.createContext(!1);function Pt(){return u.useContext(ke)}function ie(e){return f.createElement(ke.Provider,{value:e.force},e.children)}function Dt(e){let t=Pt(),n=u.useContext(Oe),r=B(e),[a,l]=u.useState(()=>{if(!t&&n!==null||j.isServer)return null;let o=r==null?void 0:r.getElementById("headlessui-portal-root");if(o)return o;if(r===null)return null;let i=r.createElement("div");return i.setAttribute("id","headlessui-portal-root"),r.body.appendChild(i)});return u.useEffect(()=>{a!==null&&(r!=null&&r.body.contains(a)||r==null||r.body.appendChild(a))},[a,r]),u.useEffect(()=>{t||n!==null&&l(n.current)},[n,l,t]),a}let Ft=u.Fragment;function Mt(e,t){let n=e,r=u.useRef(null),a=S(rt(d=>{r.current=d}),t),l=B(r),o=Dt(r),[i]=u.useState(()=>{var d;return j.isServer?null:(d=l==null?void 0:l.createElement("div"))!=null?d:null}),s=u.useContext(ue),c=Q();return R(()=>{!o||!i||o.contains(i)||(i.setAttribute("data-headlessui-portal",""),o.appendChild(i))},[o,i]),R(()=>{if(i&&s)return s.register(i)},[s,i]),Ce(()=>{var d;!o||!i||(i instanceof Node&&o.contains(i)&&o.removeChild(i),o.childNodes.length<=0&&((d=o.parentElement)==null||d.removeChild(o)))}),c?!o||!i?null:tt.createPortal($({ourProps:{ref:a},theirProps:n,defaultTag:Ft,name:"Portal"}),i):null}let Ct=u.Fragment,Oe=u.createContext(null);function Rt(e,t){let{target:n,...r}=e,a={ref:S(t)};return f.createElement(Oe.Provider,{value:n},$({ourProps:a,theirProps:r,defaultTag:Ct,name:"Popover.Group"}))}let ue=u.createContext(null);function At(){let e=u.useContext(ue),t=u.useRef([]),n=h(l=>(t.current.push(l),e&&e.register(l),()=>r(l))),r=h(l=>{let o=t.current.indexOf(l);o!==-1&&t.current.splice(o,1),e&&e.unregister(l)}),a=u.useMemo(()=>({register:n,unregister:r,portals:t}),[n,r,t]);return[t,u.useMemo(()=>function({children:l}){return f.createElement(ue.Provider,{value:a},l)},[a])]}let Nt=y(Mt),kt=y(Rt),se=Object.assign(Nt,{Group:kt}),Ie=u.createContext(null);function He(){let e=u.useContext(Ie);if(e===null){let t=new Error("You used a <Description /> component, but it is not inside a relevant parent.");throw Error.captureStackTrace&&Error.captureStackTrace(t,He),t}return e}function Ot(){let[e,t]=u.useState([]);return[e.length>0?e.join(" "):void 0,u.useMemo(()=>function(n){let r=h(l=>(t(o=>[...o,l]),()=>t(o=>{let i=o.slice(),s=i.indexOf(l);return s!==-1&&i.splice(s,1),i}))),a=u.useMemo(()=>({register:r,slot:n.slot,name:n.name,props:n.props}),[r,n.slot,n.name,n.props]);return f.createElement(Ie.Provider,{value:a},n.children)},[t])]}let It="p";function Ht(e,t){let n=k(),{id:r=`headlessui-description-${n}`,...a}=e,l=He(),o=S(t);R(()=>l.register(r),[r,l.register]);let i={ref:o,...l.props,id:r};return $({ourProps:i,theirProps:a,slot:l.slot||{},defaultTag:It,name:l.name||"Description"})}let jt=y(Ht),Bt=Object.assign(jt,{}),pe=u.createContext(()=>{});pe.displayName="StackContext";var ce=(e=>(e[e.Add=0]="Add",e[e.Remove=1]="Remove",e))(ce||{});function _t(){return u.useContext(pe)}function Ut({children:e,onUpdate:t,type:n,element:r,enabled:a}){let l=_t(),o=h((...i)=>{t==null||t(...i),l(...i)});return R(()=>{let i=a===void 0||a===!0;return i&&o(0,n,r),()=>{i&&o(1,n,r)}},[o,n,r,a]),f.createElement(pe.Provider,{value:o},e)}function Wt(e,t){return e===t&&(e!==0||1/e===1/t)||e!==e&&t!==t}const Vt=typeof Object.is=="function"?Object.is:Wt,{useState:Yt,useEffect:Gt,useLayoutEffect:qt,useDebugValue:Kt}=oe;function Xt(e,t,n){const r=t(),[{inst:a},l]=Yt({inst:{value:r,getSnapshot:t}});return qt(()=>{a.value=r,a.getSnapshot=t,ne(a)&&l({inst:a})},[e,r,t]),Gt(()=>(ne(a)&&l({inst:a}),e(()=>{ne(a)&&l({inst:a})})),[e]),Kt(r),r}function ne(e){const t=e.getSnapshot,n=e.value;try{const r=t();return!Vt(n,r)}catch{return!0}}function zt(e,t,n){return t()}const Jt=typeof window<"u"&&typeof window.document<"u"&&typeof window.document.createElement<"u",Qt=!Jt,Zt=Qt?zt:Xt,en="useSyncExternalStore"in oe?(e=>e.useSyncExternalStore)(oe):Zt;function tn(e){return en(e.subscribe,e.getSnapshot,e.getSnapshot)}function nn(e,t){let n=e(),r=new Set;return{getSnapshot(){return n},subscribe(a){return r.add(a),()=>r.delete(a)},dispatch(a,...l){let o=t[a].call(n,...l);o&&(n=o,r.forEach(i=>i()))}}}function rn(){let e;return{before({doc:t}){var n;let r=t.documentElement;e=((n=t.defaultView)!=null?n:window).innerWidth-r.clientWidth},after({doc:t,d:n}){let r=t.documentElement,a=r.clientWidth-r.offsetWidth,l=e-a;n.style(r,"paddingRight",`${l}px`)}}}function on(){if(!ht())return{};let e;return{before(){e=window.pageYOffset},after({doc:t,d:n,meta:r}){function a(l){return r.containers.flatMap(o=>o()).some(o=>o.contains(l))}n.microTask(()=>{if(window.getComputedStyle(t.documentElement).scrollBehavior!=="auto"){let o=xe();o.style(t.documentElement,"scroll-behavior","auto"),n.add(()=>n.microTask(()=>o.dispose()))}n.style(t.body,"marginTop",`-${e}px`),window.scrollTo(0,0);let l=null;n.addEventListener(t,"click",o=>{if(o.target instanceof HTMLElement)try{let i=o.target.closest("a");if(!i)return;let{hash:s}=new URL(i.href),c=t.querySelector(s);c&&!a(c)&&(l=c)}catch{}},!0),n.addEventListener(t,"touchmove",o=>{o.target instanceof HTMLElement&&!a(o.target)&&o.preventDefault()},{passive:!1}),n.add(()=>{window.scrollTo(0,window.pageYOffset+e),l&&l.isConnected&&(l.scrollIntoView({block:"nearest"}),l=null)})})}}}function ln(){return{before({doc:e,d:t}){t.style(e.documentElement,"overflow","hidden")}}}function an(e){let t={};for(let n of e)Object.assign(t,n(t));return t}let M=nn(()=>new Map,{PUSH(e,t){var n;let r=(n=this.get(e))!=null?n:{doc:e,count:0,d:xe(),meta:new Set};return r.count++,r.meta.add(t),this.set(e,r),this},POP(e,t){let n=this.get(e);return n&&(n.count--,n.meta.delete(t)),this},SCROLL_PREVENT({doc:e,d:t,meta:n}){let r={doc:e,d:t,meta:an(n)},a=[on(),rn(),ln()];a.forEach(({before:l})=>l==null?void 0:l(r)),a.forEach(({after:l})=>l==null?void 0:l(r))},SCROLL_ALLOW({d:e}){e.dispose()},TEARDOWN({doc:e}){this.delete(e)}});M.subscribe(()=>{let e=M.getSnapshot(),t=new Map;for(let[n]of e)t.set(n,n.documentElement.style.overflow);for(let n of e.values()){let r=t.get(n.doc)==="hidden",a=n.count!==0;(a&&!r||!a&&r)&&M.dispatch(n.count>0?"SCROLL_PREVENT":"SCROLL_ALLOW",n),n.count===0&&M.dispatch("TEARDOWN",n)}});function un(e,t,n){let r=tn(M),a=e?r.get(e):void 0,l=a?a.count>0:!1;return R(()=>{if(!(!e||!t))return M.dispatch("PUSH",e,n),()=>M.dispatch("POP",e,n)},[t,e]),l}let re=new Map,I=new Map;function ye(e,t=!0){R(()=>{var n;if(!t)return;let r=typeof e=="function"?e():e.current;if(!r)return;function a(){var o;if(!r)return;let i=(o=I.get(r))!=null?o:1;if(i===1?I.delete(r):I.set(r,i-1),i!==1)return;let s=re.get(r);s&&(s["aria-hidden"]===null?r.removeAttribute("aria-hidden"):r.setAttribute("aria-hidden",s["aria-hidden"]),r.inert=s.inert,re.delete(r))}let l=(n=I.get(r))!=null?n:0;return I.set(r,l+1),l!==0||(re.set(r,{"aria-hidden":r.getAttribute("aria-hidden"),inert:r.inert}),r.setAttribute("aria-hidden","true"),r.inert=!0),a},[e,t])}function sn({defaultContainers:e=[],portals:t,mainTreeNodeRef:n}={}){var r;let a=u.useRef((r=n==null?void 0:n.current)!=null?r:null),l=B(a),o=h(()=>{var i;let s=[];for(let c of e)c!==null&&(c instanceof HTMLElement?s.push(c):"current"in c&&c.current instanceof HTMLElement&&s.push(c.current));if(t!=null&&t.current)for(let c of t.current)s.push(c);for(let c of(i=l==null?void 0:l.querySelectorAll("html > *, body > *"))!=null?i:[])c!==document.body&&c!==document.head&&c instanceof HTMLElement&&c.id!=="headlessui-portal-root"&&(c.contains(a.current)||s.some(d=>c.contains(d))||s.push(c));return s});return{resolveContainers:o,contains:h(i=>o().some(s=>s.contains(i))),mainTreeNodeRef:a,MainTreeNode:u.useMemo(()=>function(){return n!=null?null:f.createElement(ae,{features:z.Hidden,ref:a})},[a,n])}}var cn=(e=>(e[e.Open=0]="Open",e[e.Closed=1]="Closed",e))(cn||{}),dn=(e=>(e[e.SetTitleId=0]="SetTitleId",e))(dn||{});let fn={0(e,t){return e.titleId===t.id?e:{...e,titleId:t.id}}},J=u.createContext(null);J.displayName="DialogContext";function _(e){let t=u.useContext(J);if(t===null){let n=new Error(`<${e} /> is missing a parent <Dialog /> component.`);throw Error.captureStackTrace&&Error.captureStackTrace(n,_),n}return t}function mn(e,t,n=()=>[document.body]){un(e,t,r=>{var a;return{containers:[...(a=r.containers)!=null?a:[],n]}})}function pn(e,t){return N(t.type,fn,e,t)}let vn="div",gn=we.RenderStrategy|we.Static;function hn(e,t){var n;let r=k(),{id:a=`headlessui-dialog-${r}`,open:l,onClose:o,initialFocus:i,__demoMode:s=!1,...c}=e,[d,m]=u.useState(0),E=ot();l===void 0&&E!==null&&(l=(E&q.Open)===q.Open);let p=u.useRef(null),Z=S(p,t),v=B(p),T=e.hasOwnProperty("open")||E!==null,L=e.hasOwnProperty("onClose");if(!T&&!L)throw new Error("You have to provide an `open` and an `onClose` prop to the `Dialog` component.");if(!T)throw new Error("You provided an `onClose` prop to the `Dialog`, but forgot an `open` prop.");if(!L)throw new Error("You provided an `open` prop to the `Dialog`, but forgot an `onClose` prop.");if(typeof l!="boolean")throw new Error(`You provided an \`open\` prop to the \`Dialog\`, but the value is not a boolean. Received: ${l}`);if(typeof o!="function")throw new Error(`You provided an \`onClose\` prop to the \`Dialog\`, but the value is not a function. Received: ${o}`);let w=l?0:1,[U,je]=u.useReducer(pn,{titleId:null,descriptionId:null,panelRef:u.createRef()}),A=h(()=>o(!1)),ve=h(g=>je({type:0,id:g})),W=Q()?s?!1:w===0:!1,V=d>1,ge=u.useContext(J)!==null,[Be,_e]=At(),{resolveContainers:ee,mainTreeNodeRef:Y,MainTreeNode:Ue}=sn({portals:Be,defaultContainers:[(n=U.panelRef.current)!=null?n:p.current]}),We=V?"parent":"leaf",he=E!==null?(E&q.Closing)===q.Closing:!1,Ve=(()=>ge||he?!1:W)(),Ye=u.useCallback(()=>{var g,x;return(x=Array.from((g=v==null?void 0:v.querySelectorAll("body > *"))!=null?g:[]).find(b=>b.id==="headlessui-portal-root"?!1:b.contains(Y.current)&&b instanceof HTMLElement))!=null?x:null},[Y]);ye(Ye,Ve);let Ge=(()=>V?!0:W)(),qe=u.useCallback(()=>{var g,x;return(x=Array.from((g=v==null?void 0:v.querySelectorAll("[data-headlessui-portal]"))!=null?g:[]).find(b=>b.contains(Y.current)&&b instanceof HTMLElement))!=null?x:null},[Y]);ye(qe,Ge);let Ke=(()=>!(!W||V))();ft(ee,A,Ke);let Xe=(()=>!(V||w!==0))();Me(v==null?void 0:v.defaultView,"keydown",g=>{Xe&&(g.defaultPrevented||g.key===Fe.Escape&&(g.preventDefault(),g.stopPropagation(),A()))});let ze=(()=>!(he||w!==0||ge))();mn(v,ze,ee),u.useEffect(()=>{if(w!==0||!p.current)return;let g=new ResizeObserver(x=>{for(let b of x){let G=b.target.getBoundingClientRect();G.x===0&&G.y===0&&G.width===0&&G.height===0&&A()}});return g.observe(p.current),()=>g.disconnect()},[w,p,A]);let[Je,Qe]=Ot(),Ze=u.useMemo(()=>[{dialogState:w,close:A,setTitleId:ve},U],[w,U,A,ve]),Ee=u.useMemo(()=>({open:w===0}),[w]),et={ref:Z,id:a,role:"dialog","aria-modal":w===0?!0:void 0,"aria-labelledby":U.titleId,"aria-describedby":Je};return f.createElement(Ut,{type:"Dialog",enabled:w===0,element:p,onUpdate:h((g,x)=>{x==="Dialog"&&N(g,{[ce.Add]:()=>m(b=>b+1),[ce.Remove]:()=>m(b=>b-1)})})},f.createElement(ie,{force:!0},f.createElement(se,null,f.createElement(J.Provider,{value:Ze},f.createElement(se.Group,{target:p},f.createElement(ie,{force:!1},f.createElement(Qe,{slot:Ee,name:"Dialog.Description"},f.createElement(O,{initialFocus:i,containers:ee,features:W?N(We,{parent:O.features.RestoreFocus,leaf:O.features.All&~O.features.FocusLock}):O.features.None},f.createElement(_e,null,$({ourProps:et,theirProps:c,slot:Ee,defaultTag:vn,features:gn,visible:w===0,name:"Dialog"}))))))))),f.createElement(Ue,null))}let En="div";function wn(e,t){let n=k(),{id:r=`headlessui-dialog-overlay-${n}`,...a}=e,[{dialogState:l,close:o}]=_("Dialog.Overlay"),i=S(t),s=h(d=>{if(d.target===d.currentTarget){if(mt(d.currentTarget))return d.preventDefault();d.preventDefault(),d.stopPropagation(),o()}}),c=u.useMemo(()=>({open:l===0}),[l]);return $({ourProps:{ref:i,id:r,"aria-hidden":!0,onClick:s},theirProps:a,slot:c,defaultTag:En,name:"Dialog.Overlay"})}let bn="div";function yn(e,t){let n=k(),{id:r=`headlessui-dialog-backdrop-${n}`,...a}=e,[{dialogState:l},o]=_("Dialog.Backdrop"),i=S(t);u.useEffect(()=>{if(o.panelRef.current===null)throw new Error("A <Dialog.Backdrop /> component is being used, but a <Dialog.Panel /> component is missing.")},[o.panelRef]);let s=u.useMemo(()=>({open:l===0}),[l]);return f.createElement(ie,{force:!0},f.createElement(se,null,$({ourProps:{ref:i,id:r,"aria-hidden":!0},theirProps:a,slot:s,defaultTag:bn,name:"Dialog.Backdrop"})))}let $n="div";function Tn(e,t){let n=k(),{id:r=`headlessui-dialog-panel-${n}`,...a}=e,[{dialogState:l},o]=_("Dialog.Panel"),i=S(t,o.panelRef),s=u.useMemo(()=>({open:l===0}),[l]),c=h(d=>{d.stopPropagation()});return $({ourProps:{ref:i,id:r,onClick:c},theirProps:a,slot:s,defaultTag:$n,name:"Dialog.Panel"})}let xn="h2";function Sn(e,t){let n=k(),{id:r=`headlessui-dialog-title-${n}`,...a}=e,[{dialogState:l,setTitleId:o}]=_("Dialog.Title"),i=S(t);u.useEffect(()=>(o(r),()=>o(null)),[r,o]);let s=u.useMemo(()=>({open:l===0}),[l]);return $({ourProps:{ref:i,id:r},theirProps:a,slot:s,defaultTag:xn,name:"Dialog.Title"})}let Ln=y(hn),Pn=y(yn),Dn=y(Tn),Fn=y(wn),Mn=y(Sn),$e=Object.assign(Ln,{Backdrop:Pn,Panel:Dn,Overlay:Fn,Title:Mn,Description:Bt});function An({className:e="",disabled:t,children:n,...r}){return D.jsx("button",{...r,className:`inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 ${t&&"opacity-25"} `+e,disabled:t,children:n})}function Nn({children:e,show:t=!1,maxWidth:n="2xl",closeable:r=!0,onClose:a=()=>{}}){const l=()=>{r&&a()},o={sm:"sm:max-w-sm",md:"sm:max-w-md",lg:"sm:max-w-lg",xl:"sm:max-w-xl","2xl":"sm:max-w-2xl"}[n];return D.jsx(te,{show:t,as:u.Fragment,leave:"duration-200",children:D.jsxs($e,{as:"div",id:"modal",className:"fixed inset-0 flex overflow-y-auto px-4 py-6 sm:px-0 items-center z-50 transform transition-all",onClose:l,children:[D.jsx(te.Child,{as:u.Fragment,enter:"ease-out duration-300",enterFrom:"opacity-0",enterTo:"opacity-100",leave:"ease-in duration-200",leaveFrom:"opacity-100",leaveTo:"opacity-0",children:D.jsx("div",{className:"absolute inset-0 bg-gray-500/75 dark:bg-gray-900/75"})}),D.jsx(te.Child,{as:u.Fragment,enter:"ease-out duration-300",enterFrom:"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95",enterTo:"opacity-100 translate-y-0 sm:scale-100",leave:"ease-in duration-200",leaveFrom:"opacity-100 translate-y-0 sm:scale-100",leaveTo:"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95",children:D.jsx($e.Panel,{className:`mb-6 bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:mx-auto ${o}`,children:e})})]})})}export{An as D,Nn as M};
