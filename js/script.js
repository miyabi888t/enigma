




     //トップへ戻る
     
     jQuery(function(){
        var pagetop = jQuery('.pagetop');
        pagetop.hide();
        jQuery(window).scroll(function () {
           if (jQuery(this).scrollTop() > 100) {
                pagetop.fadeIn();
           } else {
                pagetop.fadeOut();
           }
        });
        pagetop.click(function () {
           jQuery('body, html').animate({ scrollTop: 0 }, 500);
           return false;
        });
      });





      //ハンバーガーメニュー

      jQuery(function() {
        jQuery('.Toggle').click(function() {
        jQuery(this).toggleClass('active');
        
        if (jQuery(this).hasClass('active')) {
        jQuery('.NavMenu').addClass('active'); 
        } else {
        jQuery('.NavMenu').removeClass('active'); 
        }
        });
        });

        jQuery(function() {
          jQuery('.Toggle').click(function() {
            jQuery('.overlay').toggleClass('all-over');
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
          document.documentElement.style.setProperty('--vh', `jQuery{vh}px`);
        }
        
        // 画面のサイズ変動があった時に高さを再計算する
        window.addEventListener('resize', setFillHeight);
        
        // 初期化
setFillHeight();
        



jQuery(function () {
  jQuery('.js-accordion__title').on('click', function () {
    jQuery(this).next().slideToggle(200);
    jQuery(this).toggleClass('open', 200);
  });

});