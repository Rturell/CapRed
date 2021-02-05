(function($) {
  $(function() {
    $('#ChangeToggle').click(function() {
      $('#navbar-hamburger').toggleClass('hidden');
      $('#navbar-close').toggleClass('hidden');  
    });
});
}(jQuery));

var swiper = new Swiper('.swiper-container', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  autoplay: {
    delay: 5000,
  },
});