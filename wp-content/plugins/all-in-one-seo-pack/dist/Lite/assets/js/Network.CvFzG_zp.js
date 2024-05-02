import{i as r,u as s}from"./links.rndHrQjc.js";import{j as o}from"./helpers.BYd0a-KO.js";const c={computed:{getSites(){const t=r();return JSON.parse(JSON.stringify(t.networkData.sites.sites))},getSitesIds(){return Array.from(this.getSites,t=>this.getUniqueSiteId(t))},inactiveSitesIds(){return o(this.getSitesIds,this.activeSitesIds)},activeSitesIds(){const t=[],e=r();return this.getSites.forEach(i=>{e.activeSites.some(n=>n.domain===i.domain&&n.path===i.path)&&t.push(this.getUniqueSiteId(i))}),t}},methods:{getUniqueSiteId(t){return`${t.blog_id}_${t.domain}_${t.path}`},getMainSite(){let t=null;return this.getSites.forEach(e=>{this.isMainSite(e.domain,e.path)&&(t=e)}),t},isMainSite(t,e){const i=s();return(i.aioseo.urls.mainSiteUrl+"/").includes(`${i.aioseo.data.isSsl?"https":"http"}://${t}${e}`)},getSiteByDomainAndPath(t,e){return this.getSites.find(i=>i.domain===t&&i.path===e)},getSiteByUniqueId(t){return this.getSites.find(e=>this.getUniqueSiteId(e)===t)},getActiveSiteByUniqueId(t){const e=this.getSiteByUniqueId(t);return e?r().activeSites.find(n=>n.domain===e.domain&&n.path===e.path):null},isSiteActive(t){return this.activeSitesIds.includes(this.getUniqueSiteId(t))},parseSiteValue(t){const e=[];return t.forEach(i=>{e.push(this.getSiteByUniqueId(i))}),e}}};export{c as N};
