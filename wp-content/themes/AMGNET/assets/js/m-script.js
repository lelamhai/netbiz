//toggle menu
$(document).ready(function(){
    $('.search-button').click(function(){
      $('#frmSearch').slideToggle(200);
    });
    
    $('.menu-button').click(function(){
      $('.menu-list').toggleClass('show_main_menu');
    })
  })
  
  $(document).ready(function() {
    // fit shortcut-item to mobile screen
    var featured = $('#list-featured');
    var featuredItems = $('#list-featured a');
    var totalWidth = 0;
    var itemToShow = 0;
    var itemPadding;
    var widthCheck = 0;
  
    featuredItems.each(function(id,val){
      widthCheck += $(this).width() + 16;
      if(featured.innerWidth() > widthCheck) {
        itemToShow += 1;
        totalWidth += $(this).width();
      }
    })
  
    itemPadding = (featured.innerWidth() - totalWidth - itemToShow) / (itemToShow*2) + 'px';
    
    $('#list-featured a').css({paddingLeft: itemPadding, paddingRight: itemPadding})
  })
  
  
  $(document).ready(function(){
    $(function () {
      // Detect Scroll direction
      var position = $(window).scrollTop();
      $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > position & $('#shortcut').hasClass('nav-fixed') & !$('.menu-button').hasClass('show_main_menu')) {
          $('#shortcut').addClass('nav-up');
        } else {
          $('#shortcut').removeClass('nav-up');
        }
        position = scroll;
      });
    });
    
    // grab the initial top offset of the navigation 
    if ($('#shortcut').size()) {
      var stickyNavTop = $('#shortcut').offset().top;
    }
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var stickyNav = function () {
      var scrollTop = $(window).scrollTop(); // our current vertical position from the top		  
      // if we've scrolled more than the navigation, change its position to fixed to stick to top,
      // otherwise change it back to relative
      if (scrollTop > stickyNavTop) {
        $('#shortcut').addClass('nav-fixed');
        
      } else {
        $('#shortcut').removeClass('nav-fixed');
      }
    };
    
    stickyNav();
    // and run it again every time you scroll
    $(window).scroll(function () {
      stickyNav();
    });
    
  })
  
  
  
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
  
  $(document).ready(function() {
    // cháº¡y slide box emagazine
    $('.cat-emagazine .js-slide').slick({
      dots: true,
      arrows: false,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
    })
    
    //list down subcategory cá»§a cĂ¡c box trang chá»§
    $('.js-list-down-btn').on('click',function() {
      $(this).toggleClass('active');
      $(this).next().slideToggle();
    })
  });