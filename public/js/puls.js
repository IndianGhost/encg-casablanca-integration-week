$(document).ready(function(){
  $(".pulsating-circle").hover(function() {
    $(".pulsating-circle__paragraph").animate({opacity: '1'}, 500);
  });

  $(".pulsating-circle").mouseleave(function() {
  	$(".pulsating-circle__paragraph").animate({opacity: '0'}, 50);
  });
});