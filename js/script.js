




     //トップへ戻る
     
     $(function(){
        var pagetop = $('.pagetop');
        pagetop.hide();
        $(window).scroll(function () {
           if ($(this).scrollTop() > 100) {
                pagetop.fadeIn();
           } else {
                pagetop.fadeOut();
           }
        });
        pagetop.click(function () {
           $('body, html').animate({ scrollTop: 0 }, 500);
           return false;
        });
      });




      //fadein

      $(function(){
        $(window).scroll(function (){
          $('.fadein').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 200){
              $(this).addClass('scrollin');
            }
          });
        });
      });



      //ハンバーガーメニュー

      $(function() {
        $('.Toggle').click(function() {
        $(this).toggleClass('active');
        
        if ($(this).hasClass('active')) {
        $('.NavMenu').addClass('active'); 
        } else {
        $('.NavMenu').removeClass('active'); 
        }
        });
        });

        $(function() {
          $('.Toggle').click(function() {
            $('.overlay').toggleClass('all-over');
          });
        });

        








  

  








         //Q&A アコーディオン
    jQuery(function() {
      jQuery("#acMenu dt").on("click", function() {
        jQuery(this).next().slideToggle();
        jQuery(this).children('.ac-icon').toggleClass('ac-minus');
            });
        });


        const setFillHeight = () => {
          const vh = window.innerHeight * 0.01;
          document.documentElement.style.setProperty('--vh', `${vh}px`);
        }
        
        // 画面のサイズ変動があった時に高さを再計算する
        window.addEventListener('resize', setFillHeight);
        
        // 初期化
setFillHeight();
        



jQuery(function () {
  $('.js-accordion__title').on('click', function () {
    $(this).next().slideToggle(200);
    $(this).toggleClass('open', 200);
  });

});