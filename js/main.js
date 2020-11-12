  $(document).ready(function() {
      $(".owl-carousel").owlCarousel({
          animateOut: 'slideOutDown',
          animateIn: 'flipInX',
          items: 1,
          loop: true,
          mergeFit: false,
      });
      $(".contacts_button").on("click", function() {
          $('.overlay').show();
      });
      $('.popup-close').on("click", function() {
          $('.overlay').hide();
      });
      $(".tel").on("click", function() {
          $('.overlay').show();
      });
      $('.popup-close').on("click", function() {
          $('.overlay').hide();
      });
      $(".burg").on("click", function() {
          $(".menu").addClass('active');
      });
      $(".menu_close").on("click", function() {
          $(".menu").removeClass('active');
      });

  });