// Initialize Wow
new WOW().init();

 
$(document).ready(function(){
  $('.open_menu').click(function(){
    $('.menu_nav').addClass('show')
  });
  $('.close_nav').click(function(){
    $('.menu_nav').removeClass('show')
  })
})


var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});

const scroll = new LocomotiveScroll({
  el: document.querySelector("#main"),
  smooth: true,
});