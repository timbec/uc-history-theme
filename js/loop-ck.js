(function(e,t,n,r,i){"use strict";function g(e){var t=t>0?t-1:0,n=-1===e?c:window.location.protocol+"//"+r.pathInfo.host+r.pathInfo.path.replace(/%d/,e+t)+r.pathInfo.parameters;window.location.href!==n&&history.pushState(null,null,n)}function y(){var t=e(window).scrollTop(),n=t+e(window).height(),r=e(window).height(),i=[],s=!1;o.find(".post-set").each(function(){var r=e(this),s=r.offset().top,o=r.outerHeight(!1),u=s+o,a=parseInt(r.attr("data-page-num"));0===o&&e("> *",this).each(function(){o+=r.outerHeight(!1)});s<t&&u>n?i.push({id:r.attr("id"),top:s,bottom:u,pageNum:a}):s>t&&s<n?i.push({id:r.attr("id"),top:s,bottom:u,pageNum:a}):u>t&&u<n&&i.push({id:r.attr("id"),top:s,bottom:u,pageNum:a})});if(0===i.length)s=-1;else if(1===i.length){var u=i.pop();(n-u.top)/r<.5?s=-1:s=u.pageNum}else{var a=0;e.each(i,function(e,i){var o=0,u=0,f=0;i.top>t&&i.top<n&&(o=(n-i.top)/r);i.bottom>t&&i.bottom<n&&(u=(i.bottom-t)/r);o>=u?f=o:u>=o&&(f=u);if(f>a){s=i.pageNum;a=f}})}"number"==typeof s&&g(s)}function b(){e(window).on("scroll",function(){clearTimeout(d);d=setTimeout(y,100)})}function w(){o.on("click",".more-button",function(t){t.preventDefault();f.hide();var n=e('<div data-page-num="'+v.state.currentPage+'" class="post-set"></div>');v.each(function(e){n.append(l({post:e.attributes,settings:r}))});o.append(n);v.hasMore()&&v.more().done(function(){f.appendTo(o).show()})})}var s=window.document,o=e(s.getElementById("container")),u=s.getElementById("more-button-template"),a=s.getElementById("content-template");if(!o||!u||!a)return!1;var f=e(n.template(u.innerHTML)()),l=n.template(a.innerHTML),c=window.location.href,h=1,p=1,d,v=new wp.api.collections.Posts,m={data:{page:r.page||2}};if("archive"===r.loopType){m.data.filter={};m.data.filter[r.taxonomy.query_var]=r.queriedObject.slug}else"search"===r.loopType?m.data.filter={s:r.searchQuery}:"author"===r.loopType&&(m.data.filter={author:r.queriedObject.data.ID});v.fetch(m).done(function(){if(v.length>0){o.append(f);w();b()}})})(jQuery,Backbone,_,settings);