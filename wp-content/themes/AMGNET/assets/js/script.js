 //go to top button
 $(window).load(function () {
    $(".gotop").hide();
    $(function () {
      $(window).scroll(function () {
        if ($(this).scrollTop() > $(".webpage").offset().top) {
          $(".gotop").fadeIn();
        } else {
          $(".gotop").fadeOut();
        }
      });
      $(".gotop").click(function () {
        $("body,html").animate({ scrollTop: $(".webpage").offset().top }, 500);
        return false;
      });
    });
  });