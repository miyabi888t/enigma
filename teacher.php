<?php
/*
 * Template Name: teacher
 */ 
?>


<?php get_header() ;?>


    <section class="teacher__wrapper">
        <div class="container">
            <h2 class="section__title">講師紹介</h2>
            <div class="teacher__items">
                <div class="teacher__img">
                    <img src="<?php echo get_template_directory_uri() ; ?>/img/teacher1.png" srcset="<?php echo get_template_directory_uri() ; ?>/img/teacher1.png 1x, <?php echo get_template_directory_uri() ; ?>/img/teacher@2x.png 2x" alt="富田 昌史先生">
                </div>
                <div class="teacher__item-text">
                    <h3 class="teacher__title"><span>富田 昌史</span>先生</h3>
                    <p class="teacher__text-subject">担当科目：英語、日本史</p>
                    <p class="teacher__text-school">神戸大学経済学部卒、<br>
                        同大学大学院博士後期課程単位取得退学</p>
                    <p class="teacher__text">
                        日本だけでなく、イタリアを中心にヨーロッパを行き来しながら経済学の研究を行ってきた。また研究と共に、中学受験、中高一貫生専門塾で指導してきた。受験指導では、英語、数学を中心に担当している。
                    </p>
                </div>
            </div>
            <div class="teacher__items">
                <div class="teacher__img">
                    <img src="<?php echo get_template_directory_uri() ; ?>/img/teacher2.png" srcset="<?php echo get_template_directory_uri() ; ?>/img/teacher2.png 1x, <?php echo get_template_directory_uri() ; ?>/img/teacher2@2x.png 2x" alt="田中 秀彦先生">
                </div>
                <div class="teacher__item-text">
                    <h3 class="teacher__title"><span>田中 秀彦</span>先生</h3>
                    <p class="teacher__text-subject">担当科目：数学</p>
                    <p class="teacher__text-school">京都大学理学部卒、<br>
                        京都大学大学院修士課程（数学専攻）修了</p>
                    <p class="teacher__text">JICA（青年海外協力隊）の一員として海外で働いた後、数学指導者の道に。大手予備校、名門高校などで指導にあたってきた。
                        2012年から勤務した灘では、東大理Ⅲ合格者や数学オリンピックのメダリストなど多くの優秀な生徒を指導。大手出版社の問題集執筆、全国模試の問題作成など、教材作成面でも多くの経験をもつ。</p>
                </div>
            </div>
            <div class="teacher__items">
                <div class="teacher__img">
                    <img src="<?php echo get_template_directory_uri() ; ?>/img/teacher3.png" srcset="<?php echo get_template_directory_uri() ; ?>/img/teacher3.png 1x, <?php echo get_template_directory_uri() ; ?>/img/teacher3@2x.png 2x" alt="対島 広文先生">
                </div>
                <div class="teacher__item-text">
                    <h3 class="teacher__title"><span>対島 広文</span>先生</h3>
                    <p class="teacher__text-subject">担当科目：物理、化学、数学</p>
                    <p class="teacher__text-school">京都大学工学部卒、同大院了</p>
                    <p class="teacher__text">
                        大学受験予備校で数学、物理を教えた後、大手出版社にて全国規模の模擬試験の数学編集、通信教育の教材作成、模擬試験データのビッデータ解析責任者などを担当。現在も多くの出版社、教科書会社のブレーンとして活躍している。
                    </p>
                </div>
            </div>
            <h4 class="teacher__text-bottom">
                実績豊富な講師陣が<br>
                あなたをサポートします</h4>
        </div>
    </section>

  <div class="banner__img">
        <div class="container">
            <a href="<?php echo home_url('/contact'); ?>"><img src="<?php echo get_template_directory_uri() ; ?>/img/banner-online1.jpg" alt="オンライン授業無料体験実施中"></a>
        </div>
    </div>
    
    <?php get_footer() ;?>