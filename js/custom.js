// MENU SHADOW ANIMATION
$(window).bind('scroll', function () {
  if ($(window).scrollTop() > 54) {
    $('.shadow').addClass('show');
  } else {
    $('.shadow').removeClass('show');
  }
});

// SCROLL ANIMATIONS
window.sr = ScrollReveal();

sr.reveal('.reveal', {
  scale: 1,
  origin: 'bottom',
  distance: '50px',
  duration: 1000
});
