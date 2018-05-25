$(function() {
   $("img.lazy").lazyload({
      effect : "fadeIn"
   });
});


$('.scroll-top').click(function() {
   $("html, body").animate({ scrollTop: "0px" });
});
