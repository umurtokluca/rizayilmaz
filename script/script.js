$(document).ready(function() {
  toggle();
  mouseHover();
});

function toggle() {
  $(".toggle-click").click(function(){
    $(this).parent().find('> div:last-of-type').slideToggle(500);
    $(this).parent().toggleClass("toggle-active");
  });
}

function mouseHover() {
  if ($(window).width() > 1000) {
    $(".top-headings img").mouseenter(function(){
      $(".about-container").fadeIn();
    });
  
    $(".about-r").mouseleave(function(){
      $(".about-container").fadeOut();
    });
  }
}

function scrollTo(className){
    var offset = $(className).offset();
    $("html, body").animate({ scrollTop: offset.top - 80 }, 600);
};

function menuOpen(el) {
  if ($(window).width() < 1000) {
    if ($(el).css('right') == '0px')
    $(el).animate({ 'right': '-100%' }, 500);
  else
    $(el).animate({ 'right': '0px' }, 500);
  }
}

$(document).ready(function() {
    $("#related-works-slider").owlCarousel({
      loop: false,
      margin: 30,
      nav: false,
      items: 2,
      dots: false,
      responsive: {
        700: {
          items: 2,
          stagePadding: 30
        },
        0: {
          items:1,
          stagePadding: 25
        }
      }
    });

});