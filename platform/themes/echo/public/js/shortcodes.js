$(document).ready((function(){var t=$('[data-bb-toggle="shortcode-load-ajax"]');t.length&&t.each((function(){var t;t=$(this),$.ajax({url:t.data("url"),method:"GET",dataType:"json",success:function(a){var e=a.error,n=a.data;e||(n.content?t.html(n.content):t.hide(),n.hasSwiper&&window.dispatchEvent(new Event("init-swiper")),n.hasSidebar&&window.dispatchEvent(new Event("shortcode-has-sidebar-loaded")))},error:function(t){throw t}})}))}));