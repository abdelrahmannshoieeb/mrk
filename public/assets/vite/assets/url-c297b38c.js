const n=(c,r)=>{const a=r||window.location,e=RegExp(`[?&]${c}=([^&]*)`).exec(a.search);return e&&decodeURIComponent(e[1].replace(/\+/g," "))},o=(c,r)=>{const a=new URL(c);return Object.keys(r).forEach(e=>{a.searchParams.append(e,r[e])}),`${c}${a.search}`};export{o as a,n as g};
//# sourceMappingURL=url-c297b38c.js.map
