import{a as s}from"./url-c297b38c.js";const o=({mediaUrl:r,width:e,height:t=""})=>s(r,{resize:`${e}x${t}`,vertical:"center"}),i=({mediaUrl:r,widths:e,aspectRatio:t})=>r?e.map(a=>{const n=Math.round(a/t);return`${o({mediaUrl:r,width:a,height:n})} ${a}w`}).join(", "):"";export{i as a,o as g};
//# sourceMappingURL=media-be04e287.js.map
