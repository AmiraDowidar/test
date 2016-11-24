$( document ).ready(function() {
      // language switch menu
      $('.lang-switch').click(function(){
        $this = $(this);
        $this.children('.lang-list').slideToggle();
        $this.toggleClass('rotate');
      });
      // mobile menu opening
      $('.mobile-menu-icon').click(function(){
        $('menu').fadeIn();
        $('body').addClass('no-scroll');
      });
      // mobile menu closing
      $('.mobile-menu > .icon-close').click(function(){
        $('menu').fadeOut();
        $('body').removeClass('no-scroll');
      });
      //  mobile language list
      $('.flags-list').click(function(){
        $(this).next('div.langs').fadeToggle();
      });
      // AVAILABLE DESTINATIONS LIST
      $('.toggle-countries').click(function(){
        $('.countries-list').slideToggle();
      });
      // footer menu toggle
      $('.global-footer .visible-xs h4').click(function(){
        $(this).next('ul').slideToggle();
        $(this).toggleClass('opened');
      });
      $(window).scroll(function(){
        if($(window).scrollTop() > 300){
            $(".to-top").fadeIn("slow");
        }
      });
      $(window).scroll(function(){
        if($(window).scrollTop() < 100){
            $(".to-top").fadeOut("fast");
        }
      });
      $('.to-top').click(function(){
          $("html, body").animate({ scrollTop: 0 }, 600);
          return false;
      });
    });