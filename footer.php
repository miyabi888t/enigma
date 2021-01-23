<footer>
        <div class="footer__top">
            <div class="container">
                <div class="footer__img">
                    <img src="<?php echo get_template_directory_uri() ; ?>/img/enigma.svg" alt="enigma">
                </div>
         
                    <!-- <li><a href="teacher.html">自慢の講師陣</a></li>
                    <li><a href="class.html">授業について</a></li>
                    <li><a href="company.html">会社概要</a></li>
                    <li><a href="contact.html" class="footer__item-white">無料体験に申し込む</a></li>
                    <li><a href="https://twitter.com/overksg" class="footer__item-img"><img src="<?php echo get_template_directory_uri() ; ?>/img/twitter.svg" alt="twitter"></a></li>-->
                    <?php
                    wp_nav_menu(
                        array(
                            'depth' => 1,
                            'theme_location' => 'footer',
                            'container' => false,
                            'menu_class' => 'footer__list'
                        )
                        );
                    ?>
          
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <p>copyright©2020 Enigma. all rights reserved.</p>
            </div>
        </div>
    </footer>

    <?php wp_footer() ;?>
</body>

</html>