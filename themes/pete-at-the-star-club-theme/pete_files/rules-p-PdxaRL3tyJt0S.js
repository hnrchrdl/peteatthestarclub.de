/*
 Quantcast measurement tag
 Copyright (c) 2008-2020, Quantcast Corp.
*/
(function(e,k,g){var l=function(c){return c.replace(/^[\s\ufeff\xA0]+|[\s\ufeff\xA0]+$/g,"")},m=function(c,b){if(!b)return b;var d,a;d=-1!==c.toLowerCase().indexOf("tag")||-1!==c.toLowerCase().indexOf("keyword")||0===c.toLowerCase().indexOf("qc:");a=-1===c.toLowerCase().indexOf("tag")&&-1===c.toLowerCase().indexOf("keyword")&&0===c.toLowerCase().indexOf("qc:")?!1:!0;a&&(b=b.replace(/\.+/g," "));if(d){a=b.split(",");for(d=0;d<a.length;d++)a[d]=l(a[d]);return a}return l(b.replace(/,+/g," "))},f=function(c,
b,d){b=document.getElementsByTagName("meta");for(var a,f,e=[],g=0;g<b.length;g++)a=b[g],f=a.getAttribute("name")||a.getAttribute("property"),f==d&&(e=e.concat(m(d,a.getAttribute("content"))));0<e.length?c(e):c(!1)},h=function(c,b){var d=[],a;if("array"==={}.toString.call(b).match(/\s([a-zA-Z]+)/)[1].toLowerCase()){for(a=0;a<b.length;a++)d.push(c+"."+b[a]);return{labels:d.join(",")}}return{labels:c+"."+b}},f=["rules",[e,null,[[h,"keywords"]],[[f,"exactmatch","keywords"]]],[e,null,[[h,"title"]],[[f,
"exactmatch","og:title"]]],[e,null,[[h,"author"]],[[f,"exactmatch","author"]]]];__qc.apply(null,f);(function(c){var b=function(){var a;if(k.top===k.self)a=g.location.href;else{a=g.referrer;var b=g.createElement("a");b.href=a;a=b.href}return a},d=b();setInterval(function(){var a=b();a!==d&&(d=a,__qc.apply(null,c),__qc("push",{qacct:e,event:"load"},!0))},2E3)})(f)})("p-PdxaRL3tyJt0S",window,document);