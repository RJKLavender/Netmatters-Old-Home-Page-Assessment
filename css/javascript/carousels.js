//javascript for banner carousel using slick jquwey plugin
$(document).ready(function(){
  $('.banner').slick({
    autoplay:true,
    autoplaySpeed:4000,
    arrows:false,
    dots:true,
    draggable:true,
    infinite:true,
    speed:300,
  });
});

// //javascript for partners/clients sliding carousel using slick jquwey plugin
$(document).ready(function(){
  $('.sliding-list').slick({
    autoplay:true,
    autoplaySpeed:3500,
    arrows:false,
    dots:false,
    infinite:true,
    speed:300,
   variableWidth: true,
    draggable: false,
    centerMode: false,
    responsive: [
    {
      breakpoint: 768, 
      settings: {
        centerMode: true,
      }
    }]
  });
});