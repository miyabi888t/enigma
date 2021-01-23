<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php wp_head() ; ?>
</head>

<body>
    <header>
        <div class="header__inner">
            <nav class="NavMenu">
            <!-- ナビメニュー部分 
            
                <ul>
                    <li class="nav__list"><a href="<?php echo home_url('/teach'); ?>">自慢の講師陣</a></li>
                    <li class="nav__list"><a href="<?php echo home_url('/class'); ?>">授業について</a></li>
                    <li class="nav__list"><a href="company.html">会社概要</a></li>
                    <li class="nav__list"><a href="contact.html">無料体験に申し込む</a></li>
                </ul>
            -->
            
            <?php
            wp_nav_menu(
                array(
                    'depth' => 1,
                    'theme_location' => 'drawer',
                    'container' => false,
                    'menu_class' => 'nav__list',
                )
                );
            ?>
            </nav>
            <div class="overlay"></div>
            <!-- ハンバーガーメニュー部分 -->
            <div class="Toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="header__items">
                <a href="/index.php" class="header__img">
                    <img src="<?php echo get_template_directory_uri() ; ?>/img/enigma.svg" alt="ロゴ">
                </a>
                <div class="header__item-pc">
                            <!-- 
                                <li><a href="?/teacher.php">自慢の講師陣</a></li>
                                <li><a href="class.html">授業について</a></li>
                                <li><a href="company.html">会社概要</a></li>
                                <li><a href="contact.html" class="header__item-red">無料体験に申し込む</a></li>
                        -->
                            <?php
                            wp_nav_menu(
                                array(
                                    'depth' => 1,
                                    'theme_location' => 'global',
                                    'container' => false,
                                    'menu_class' => 'header__list'
                                )
                                );
                            ?>
                </div>
                 
               
            </div>
        </div>
    </header>