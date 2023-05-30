import{_ as r}from"./AppLayout.9dcb42c7.js";import{_ as s}from"./NavLink.a8501dd2.js";import{e as l,D as n}from"./dataTables.select.6ab0dcb8.js";import{o as h,c,w as e,a as t,b as o}from"./app.937ab2e3.js";import"./_plugin-vue_export-helper.cdc0426e.js";import"./ResponsiveNavLink.0bfe1a7f.js";const i={class:"pt-2 pb-4 space-y-1 text-sm"},d=t("svg",{xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24","stroke-width":"1.5",stroke:"currentColor",class:"w-6 h-6 text-gray-100"},[t("path",{"stroke-linecap":"round","stroke-linejoin":"round",d:"M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z"})],-1),p=t("span",{class:"text-gray-100 pl-2"},"Home",-1),m=t("svg",{xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24","stroke-width":"1.5",stroke:"currentColor",class:"w-6 h-6 text-gray-100"},[t("path",{stroke:"none",d:"M0 0h24v24H0z",fill:"none"}),t("path",{d:"M4 4h6v8h-6z"}),t("path",{d:"M4 16h6v4h-6z"}),t("path",{d:"M14 12h6v8h-6z"}),t("path",{d:"M14 4h6v4h-6z"})],-1),f=t("span",{class:"text-gray-100 pl-2"},"Master Data",-1),u=t("svg",{xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24","stroke-width":"1.5",stroke:"currentColor",class:"w-6 h-6 text-gray-100"},[t("path",{stroke:"none",d:"M0 0h24v24H0z",fill:"none"}),t("path",{d:"M3 21h18"}),t("path",{d:"M5 21v-12l5 4v-4l5 4h4"}),t("path",{d:"M19 21v-8l-1.436 -9.574a0.5 .5 0 0 0 -.495 -.426h-1.145a0.5 .5 0 0 0 -.494 .418l-1.43 8.582"}),t("path",{d:"M9 17h1"}),t("path",{d:"M14 17h1"})],-1),_=t("span",{class:"text-gray-100 pl-2"},"Waho & Kanban",-1),w=t("svg",{xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24","stroke-width":"1.5",stroke:"currentColor",class:"w-6 h-6 text-gray-100"},[t("path",{"stroke-linecap":"round","stroke-linejoin":"round",d:"M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"}),t("path",{"stroke-linecap":"round","stroke-linejoin":"round",d:"M15 12a3 3 0 11-6 0 3 3 0 016 0z"})],-1),v=t("span",{class:"text-gray-100 pl-2"},"Pengaturan User",-1),C={__name:"HomeFams",props:{masterData:{type:Object,default:()=>({})}},setup(g){return l.use(n),(a,k)=>(h(),c(r,{title:"Data Produk"},{sidenav:e(()=>[t("ul",i,[t("li",null,[o(s,{href:a.route("fams.homefams"),active:a.route().current("fams.homefams")},{default:e(()=>[d,p]),_:1},8,["href","active"])]),t("li",null,[o(s,{href:a.route("fams.masterdatafams")},{default:e(()=>[m,f]),_:1},8,["href"])]),t("li",null,[o(s,{href:a.route("deltas.produksi_mf2w")},{default:e(()=>[u,_]),_:1},8,["href"])]),t("li",null,[o(s,{href:a.route("deltas.produksi_mf2w")},{default:e(()=>[w,v]),_:1},8,["href"])])])]),_:1}))}};export{C as default};
