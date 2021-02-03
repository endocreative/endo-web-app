(function ($) {
  $(document).ready(function () {
    $(".login-link").click(function (e) {
      e.preventDefault();
      $("#login-popup").bPopup();
    });

    $(".signup-link").click(function (e) {
      e.preventDefault();
      $("#signup-popup").bPopup();
    });

    $('.tooltip-button').hover(function() {
      $(this).next().toggle();
    });

  });
})(jQuery);
