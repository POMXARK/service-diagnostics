(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[94],{5706:function(e,t,n){(window.__NEXT_P=window.__NEXT_P||[]).push(["/blog/[...slug]",function(){return n(5372)}])},2585:function(e,t,n){"use strict";n(7320),n(8100)},9831:function(e,t,n){"use strict";n.d(t,{$t:function(){return d},TQ:function(){return m},Uy:function(){return u}});var r=n(7320),a=n(9008),i=n.n(a),c=n(1163),l=n(1576),o=n.n(l);let s=e=>{let{title:t,description:n,ogType:a,ogImage:l,twImage:s}=e,m=(0,c.useRouter)();return(0,r.BX)(i(),{children:[(0,r.tZ)("title",{children:t}),(0,r.tZ)("meta",{name:"robots",content:"follow, index"}),(0,r.tZ)("meta",{name:"description",content:n}),(0,r.tZ)("meta",{property:"og:url",content:"".concat(o().siteUrl).concat(m.asPath)}),(0,r.tZ)("meta",{property:"og:type",content:a}),(0,r.tZ)("meta",{property:"og:site_name",content:o().title}),(0,r.tZ)("meta",{property:"og:description",content:n}),(0,r.tZ)("meta",{property:"og:title",content:t}),"Array"===l.constructor.name?l.map(e=>{let{url:t}=e;return(0,r.tZ)("meta",{property:"og:image",content:t},t)}):(0,r.tZ)("meta",{property:"og:image",content:l},l),(0,r.tZ)("meta",{name:"twitter:card",content:"summary_large_image"}),(0,r.tZ)("meta",{name:"twitter:site",content:o().twitter}),(0,r.tZ)("meta",{name:"twitter:title",content:t}),(0,r.tZ)("meta",{name:"twitter:description",content:n}),(0,r.tZ)("meta",{name:"twitter:image",content:s}),(0,r.tZ)("script",{type:"application/ld+json",dangerouslySetInnerHTML:{__html:JSON.stringify({"@context":"http://schema.org","@type":"Person",name:"Steve McKinney",url:"https://iamsteve.me",sameAs:["https://twitter.com/irsteve","https://instagram.com/stevemckinney","https://uk.linkedin.com/in/steve-mckinney-5b5836102"],homeLocation:{"@type":"City",name:"Manchester"}})}}),(0,r.tZ)("script",{type:"application/ld+json",dangerouslySetInnerHTML:{__html:JSON.stringify({"@context":"http://schema.org","@type":"Organization",url:"https://iamsteve.me",logo:"https://iamsteve.me/assets/images/iamsteve-logo.png"})}})]})},m=e=>{let{title:t,description:n}=e,a=o().siteUrl+o().socialBanner,i=o().siteUrl+o().socialBanner;return(0,r.tZ)(s,{title:t,description:n,ogType:"website",ogImage:a,twImage:i})},d=e=>{let{title:t,description:n}=e,a=o().siteUrl+o().socialBanner,l=o().siteUrl+o().socialBanner,m=(0,c.useRouter)();return(0,r.BX)(r.HY,{children:[(0,r.tZ)(s,{title:t,description:n,ogType:"website",ogImage:a,twImage:l}),(0,r.tZ)(i(),{children:(0,r.tZ)("link",{rel:"alternate",type:"application/rss+xml",title:"".concat(n," - RSS feed"),href:"".concat(o().siteUrl).concat(m.asPath,"/feed.xml")})})]})},u=e=>{let t,{authorDetails:n,title:a,summary:l,date:m,lastmod:d,url:u,images:p=[]}=e,h=(0,c.useRouter)(),g=new Date(m).toISOString(),f=new Date(d||m).toISOString(),y=0===p.length?[o().socialBanner]:"string"==typeof p?[p]:p,Z=y.map(e=>({"@type":"ImageObject",url:"".concat(o().siteUrl).concat(e)}));t=n?n.map(e=>({"@type":"Person",name:e.name})):{"@type":"Person",name:o().author};let b={"@context":"https://schema.org","@type":"Article",mainEntityOfPage:{"@type":"WebPage","@id":u},headline:a,image:Z,datePublished:g,dateModified:f,author:t,publisher:{"@type":"Organization",name:o().author,logo:{"@type":"ImageObject",url:"".concat(o().siteUrl).concat(o().siteLogo)}},description:l},w=Z[0].url;return(0,r.BX)(r.HY,{children:[(0,r.tZ)(s,{title:a,description:l,ogType:"article",ogImage:Z,twImage:w}),(0,r.BX)(i(),{children:[m&&(0,r.tZ)("meta",{property:"article:published_time",content:g}),d&&(0,r.tZ)("meta",{property:"article:modified_time",content:f}),(0,r.tZ)("link",{rel:"canonical",href:"".concat(o().siteUrl).concat(h.asPath)}),(0,r.tZ)("script",{type:"application/ld+json",dangerouslySetInnerHTML:{__html:JSON.stringify(b,null,2)}})]})]})}},5372:function(e,t,n){"use strict";n.r(t),n.d(t,{__N_SSG:function(){return j},default:function(){return M}});var r=n(7320),a=n(2918),i=n.n(a),c=n(9008),l=n.n(c);function o(e){let{children:t}=e;return(0,r.tZ)("h1",{className:"headline-l primary mb0 entry-title",children:t})}var s=n(1720),m=n(3194),d=n(5675),u=n.n(d);let p=e=>{let{...t}=e;return(0,r.tZ)(u(),{...t})};var h=n(7233);let g=e=>{let{toc:t,indentDepth:n=3,fromHeading:a=1,toHeading:i=6,asDisclosure:c=!1,exclude:l=""}=e,o=Array.isArray(l)?RegExp("^("+l.join("|")+")$","i"):RegExp("^("+l+")$","i"),s=t.filter(e=>e.depth>=a&&e.depth<=i&&!o.test(e.value)),m=(0,r.tZ)("ul",{children:s.map(e=>(0,r.tZ)("li",{className:"".concat(e.depth>=n&&"ml-6"),children:(0,r.tZ)("a",{href:e.url,children:e.value})},e.value))});return(0,r.tZ)(r.HY,{children:c?(0,r.BX)("details",{open:!0,children:[(0,r.tZ)("summary",{className:"pt-2 pb-2 ml-6 text-xl font-bold",children:"Table of Contents"}),(0,r.tZ)("div",{className:"ml-6",children:m})]}):m})},f=e=>{let t=(0,s.useRef)(null),[n,a]=(0,s.useState)(!1),[i,c]=(0,s.useState)(!1),l=()=>{a(!0)},o=()=>{a(!1),c(!1)},m=()=>{c(!0),navigator.clipboard.writeText(t.current.textContent),setTimeout(()=>{c(!1)},2e3)};return(0,r.BX)("div",{ref:t,onMouseEnter:l,onMouseLeave:o,className:"code-block relative",children:[(0,r.tZ)("button",{"aria-label":"Copy code",type:"button",className:"absolute button button-t button-copy rounded alternate-l2 ".concat(i?"focus:outline-none focus:border-green-400 border-green-400":"border-gray-300"),onClick:m,children:(0,r.tZ)("svg",{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24",width:"24",height:"24",stroke:"currentColor",fill:"none",className:i?"sw-2 secondary":"sw-2",children:i?(0,r.BX)(r.HY,{children:[(0,r.tZ)("rect",{x:"4",y:"4",width:"16",height:"18",rx:"1.5"}),(0,r.tZ)("rect",{x:"8",y:"4",width:"8",height:"3",className:"fill-currentcolor"}),(0,r.tZ)("path",{d:"M7 14L10 17L17 10"}),(0,r.tZ)("circle",{cx:"12",cy:"3",r:"2"})]}):(0,r.BX)(r.HY,{children:[(0,r.tZ)("rect",{x:"4",y:"4",width:"16",height:"18",rx:"1.5"}),(0,r.tZ)("rect",{x:"8",y:"4",width:"8",height:"3",className:"fill-currentcolor"}),(0,r.tZ)("circle",{cx:"12",cy:"3",r:"2"})]})})}),(0,r.tZ)("pre",{children:e.children})]})};var y=n(7726),Z=n(4298),b=n.n(Z),w=n(1576),v=n.n(w),x=n(6232),N=n(9831);n(2585);var A=n(3306),B=n(7245),_=n(397);let O=e=>"".concat(v().siteRepo,"/blob/main/data/blog/").concat(e),k={year:"numeric",month:"short",day:"numeric"},X=e=>{let{frontmatter:t,authorDetails:n,next:a,prev:i,children:c}=e,{slug:l,fileName:m,date:d,title:u,summary:g,tags:f,id:y,theme:Z,categories:w,images:X,medium:S,lastmod:I,readingTime:P,codepen:j,twitter:M}=t;return(0,s.useEffect)(()=>{fetch("/api/views/".concat(l),{method:"POST"})},[l]),(0,r.BX)(r.HY,{children:[(0,r.tZ)(N.Uy,{url:"".concat(v().siteUrl,"/blog/").concat(l),authorDetails:n,...t}),(0,r.tZ)(r.HY,{children:X?(0,r.tZ)(r.HY,{children:(0,r.tZ)("div",{className:"pt4 pb4 pt6-b pb6-b pt7-d pb8-d flex center featured-image entry-image",style:{backgroundColor:Z.toString()},children:X&&X.map(e=>(0,r.tZ)(p,{src:e,className:"radius",alt:"",width:744,height:492,blurDataURL:"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7",placeholder:"blur",priority:!0},e))})}):(0,r.tZ)(r.HY,{children:w&&w.includes("Design")?(0,r.tZ)(B.Z,{category:"Design",kind:"hero"}):(0,r.tZ)(B.Z,{category:"Code",kind:"hero"})})}),(0,r.BX)("article",{className:"entry-content pt6 pb6",children:[(0,r.BX)("header",{className:"entry-header relative pb4 p0-d",children:[(0,r.tZ)(o,{children:u}),(0,r.BX)("div",{className:"meta single-meta flex warm-l3",children:[(0,r.BX)("span",{className:"meta-item flex items-center",children:[(0,r.tZ)(A.Z,{kind:"date"}),(0,r.tZ)("time",{dateTime:d,children:new Date(d).toLocaleDateString(v().locale,k)})]}),w&&w.map(e=>(0,r.tZ)(_.Z,{text:e,styling:"meta-item flex items-center",icon:!0},e)),(0,r.BX)("span",{className:"meta-item flex items-center",children:[(0,r.tZ)(A.Z,{kind:"time"}),t.readingTime.text]}),(0,r.BX)("span",{className:"meta-item meta-item-last flex items-center",children:[(0,r.tZ)(A.Z,{kind:"save"}),(0,r.tZ)(h.Z,{href:O(m),children:"View on GitHub"})]}),(0,r.BX)("div",{className:"visuallyhidden","aria-hidden":"true",tabIndex:"-1",children:[(0,r.tZ)("a",{href:"https://iamsteve.me",className:"author vcard url fn",rel:"author",children:"Steve McKinney"}),(0,r.tZ)("time",{dateTime:I,className:"updated",children:(0,x.Z)(I)})]})]})]}),c]}),(0,r.tZ)("hr",{className:"mb4 mt4 divider"}),(0,r.BX)("div",{className:"support m-center measure-padding pb6 flex flex-wrap align-center items-center between",children:[(0,r.tZ)("div",{className:"column column-5-d mb4 mb0-d",children:(0,r.tZ)("p",{children:"I’m a tea drinker, but it’s equally appreciated if you found the article useful."})}),(0,r.tZ)("div",{className:"column column-3-d",children:(0,r.BX)("a",{href:"https://www.buymeacoffee.com/BQoVfY7gc",className:"button button-bmc flex align-center items-center justify-center self-end",children:[(0,r.tZ)(A.Z,{kind:"coffee",width:"24",height:"24"})," Buy me a coffee"]})})]}),a?(0,r.BX)("article",{className:"m-center measure-padding pb6",children:[(0,r.tZ)("h3",{className:"f1-l mb2 dashes",children:(0,r.tZ)("span",{children:"Next to read"})}),(0,r.BX)("h2",{className:"headline-l primary entry-next",children:[(0,r.tZ)(h.Z,{href:"/blog/".concat(a.slug),"data-event":"Related entry [v6-specific]",children:a.title}),(0,r.tZ)("span",{className:"icon icon-small icon-right tertiary",children:(0,r.tZ)(A.Z,{kind:"right"})})]})]}):null,j&&(0,r.tZ)(b(),{async:!0,src:"https://production-assets.codepen.io/assets/embed/ei.js",strategy:"lazyOnload"}),M&&(0,r.tZ)(b(),{async:!0,src:"https://platform.twitter.com/widgets.js",strategy:"lazyOnload"})]})},S={Image:p,TOCInline:g,a:h.Z,pre:f,BlogNewsletterForm:y.w,wrapper:e=>{let{components:t,layout:n,...a}=e;return(0,r.tZ)(X,{...a})}},I=e=>{let{layout:t,mdxSource:n,...a}=e,i=(0,s.useMemo)(()=>(0,m.getMDXComponent)(n),[n]);return(0,r.tZ)(i,{layout:t,components:S,...a})};var P=n(3610),j=!0;function M(e){let{post:t,authorDetails:n,filenameSlug:a,prev:c,next:o}=e,{mdxSource:s,toc:m,frontmatter:d}=t;return(0,r.tZ)(r.HY,{children:"open"===d.status?(0,r.tZ)(I,{layout:d.layout||"PostLayout",toc:m,mdxSource:s,frontmatter:d,authorDetails:n,prev:c,next:o}):(0,r.BX)(r.HY,{children:[(0,r.tZ)(l(),{children:(0,r.tZ)("meta",{name:"robots",content:"noindex"})}),(0,r.tZ)(i(),{statusCode:404})]})})}M.getLayout=function(e){return(0,r.tZ)(P.Z,{subtle:!0,children:e})}},2918:function(e,t,n){e.exports=n(67)},1032:function(e,t,n){n(1720),e.exports=n(6584)},3194:function(e,t,n){e.exports=n(8773)},8773:function(e,t,n){"use strict";t.getMDXComponent=function(e,t){let n=function(e,t){let n={React:r,ReactDOM:i,_jsx_runtime:a,...t},c=Function(...Object.keys(n),e);return c(...Object.values(n))}(e,t);return n.default};var r=l(n(1720)),a=l(n(1032)),i=l(n(3935));function c(e){if("function"!=typeof WeakMap)return null;var t=new WeakMap,n=new WeakMap;return(c=function(e){return e?n:t})(e)}function l(e,t){if(!t&&e&&e.__esModule)return e;if(null===e||"object"!=typeof e&&"function"!=typeof e)return{default:e};var n=c(t);if(n&&n.has(e))return n.get(e);var r={},a=Object.defineProperty&&Object.getOwnPropertyDescriptor;for(var i in e)if("default"!==i&&Object.prototype.hasOwnProperty.call(e,i)){var l=a?Object.getOwnPropertyDescriptor(e,i):null;l&&(l.get||l.set)?Object.defineProperty(r,i,l):r[i]=e[i]}return r.default=e,n&&n.set(e,r),r}}},function(e){e.O(0,[100,888,774,179],function(){return e(e.s=5706)}),_N_E=e.O()}]);