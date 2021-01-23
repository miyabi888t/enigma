<?php get_header() ;?>

    <section class="fv__wrapper">
        <div class="container">
            <h2>難関大受験対策<br>
                ENIGMAオンライン<br>
                受講予約受付開始</h2>
            <div class="fv__btn">
                <a href="<?php echo home_url('/contact'); ?>">無料体験に申し込む</a>
            </div>
        </div>
    </section>

    <section class="explain__wrapper">
        <div class="container">
            <div class="explain__item">
                <p>大阪・谷町九丁目で中高一貫校の生徒が通う<br class="pc-only">
                    難関大受験専門塾 ENIGMA。<br>
                    <span>オンライン受講コース</span>がスタートしました。
                </p>
            </div>
        </div>
    </section>

    <div class="banner__img">
        <div class="container">
            <a href="<?php echo home_url('/contact'); ?>"><img src="<?php echo get_template_directory_uri() ; ?>/img/banner-online1.jpg" alt="オンライン授業無料体験実施中"></a>
        </div>
    </div>

    <section class="feature__wrapper">
        <div class="container">
            <h2 class="section__title">ENIGMAオンラインの3つの特徴</h2>
            <div class="feature__items">
                <div class="feature__item">
                    <div class="feature__item-text">
                        <div class="feature__title">
                            <img src="<?php echo get_template_directory_uri() ; ?>/img/num1.svg" alt="1">
                            <h3>一流講師陣</h3>
                        </div>
                        <p class="feature__text">
                            ENIGMA（エニグマ）の講師は、プロ講師を中心とした一流講師陣です。全国模試執筆者の先生、大手予備校で教えておられた先生、名門高校で教えておられた先生など、大学受験の指導経験豊富な先生方です。
                            一部、学生の先生もおられますが、京大、阪大、神大、医学部などの難関大入試を突破した先生方ばかりです。</p>
                        <a href="<?php echo home_url('/teacher'); ?>" class="feature__link">講師について</a>
                    </div>
                    <div class="feature__item-img">
                        <img src="<?php echo get_template_directory_uri() ; ?>/img/f1.jpg" srcset="<?php echo get_template_directory_uri() ; ?>/img/f1.jpg 1x, <?php echo get_template_directory_uri() ; ?>/img/f1@2x.jpg 2x" alt="一流講師陣">
                    </div>
                </div>
                <div class="feature__item">
                    <div class="feature__item-text">
                        <div class="feature__title">
                            <img src="<?php echo get_template_directory_uri() ; ?>/img/num2.svg" alt="2">
                            <h3>難関大受験のノウハウ</h3>
                        </div>
                        <p class="feature__text">
                            ENIGMA（エニグマ）は、大阪で難関大受験生を指導している塾です。東大、京大、医学部など難関大受験のためのノウハウを多く蓄積しています。
                            特に、京大、阪大など、関西の大学受験を考えておられる方は、是非受講をご検討下さい。</p>
                    </div>
                    <div class="feature__item-img">
                        <img src="<?php echo get_template_directory_uri() ; ?>/img/f2.jpg" srcset="<?php echo get_template_directory_uri() ; ?>/img/f2.jpg 1x, <?php echo get_template_directory_uri() ; ?>/img/f2@2x.jpg 2x" alt="難関大受験のノウハウ">
                    </div>
                </div>
                <div class="feature__item">
                    <div class="feature__item-text">
                        <div class="feature__title">
                            <img src="<?php echo get_template_directory_uri() ; ?>/img/num3.svg" alt="3">
                            <h3>1ケ月単位の講座設計</h3>
                        </div>
                        <p class="feature__text">
                            ENIGMAオンラインでは、1ケ月（４回単位）の受講になります。
                            もちろん「１年通して受講したい」などの対応も可能ですが、例えば入塾時の面談で「京大の理系数学について２か月（８回）で演習したい」「有機化学のとっかかりだけ１か月（４回）で習ってみたい」など、要望によって回数を設定していきます。
                        </p>
                        <a href="<?php echo home_url('/class'); ?>" class="feature__link">講座について</a>
                    </div>
                    <div class="feature__item-img">
                        <img src="<?php echo get_template_directory_uri() ; ?>/img/f3.jpg" srcset="<?php echo get_template_directory_uri() ; ?>/img/f3.jpg 1x, <?php echo get_template_directory_uri() ; ?>/img/f3@2x.jpg 2x" alt="1ケ月単位の講座設計">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="recommend__wrapper">
        <div class="container">
            <div class="recommend__contents">
                <h2 class="section__title">こんな人におすすめ</h2>
                <div class="recommend__items">
                    <div class="recommend__item">
                        <img src="<?php echo get_template_directory_uri() ; ?>/img/check.svg" alt="check">
                        <p>近くに難関大受験の指導をしてくれる塾がない</p>
                    </div>
                    <div class="recommend__item">
                        <img src="<?php echo get_template_directory_uri() ; ?>/img/check.svg" alt="check">
                        <p>「数学を入試レベルにしたい」など、課題とする科目、課題点がはっきりしている</p>
                    </div>
                    <div class="recommend__item">
                        <img src="<?php echo get_template_directory_uri() ; ?>/img/check.svg" alt="check">
                        <p>関西在住ではないが、京都大、大阪大など関西の大学を志望している</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="question__wrapper">
        <div class="container">
            <h2 class="section__title">よくある質問</h2>
            <div class="question__items">
                <dl class="accordion__item">
                    <dt class="accordion__title js-accordion__title">
                        <div class="question__top">
                            <span>Q</span>
                            <p>海外に住んでいますが受講可能でしょうか？</p>
                        </div>
                    </dt>
                    <dd class="accordion__content">
                        <div class="question__bottom">
                            <span>A</span>
                            <p>オンラインでの指導なので、海外の方でも受講可能です。ただし、日本語が堪能でない方はお断りする場合もございます。</p>
                        </div>
                    </dd>
                </dl>
                <dl class="accordion__item">
                    <dt class="accordion__title js-accordion__title">
                        <div class="question__top">
                            <span>Q</span>
                            <p>一度の授業で複数の科目を教えていただくことは可能でしょうか？</p>
                        </div>
                    </dt>
                    <dd class="accordion__content">
                        <div class="question__bottom">
                            <span>A</span>
                            <p>先生によって可能な場合は対応させていただくこともございますが、基本的には１科目のみの授業になります。</p>
                        </div>
                    </dd>
                </dl>
                <dl class="accordion__item">
                    <dt class="accordion__title js-accordion__title">
                        <div class="question__top">
                            <span>Q</span>
                            <p>使う教材を指定することはできますか？？</p>
                        </div>
                    </dt>
                    <dd class="accordion__content">
                        <div class="question__bottom">
                            <span>A</span>
                            <p>受講前の面談でご相談下さい。</p>
                        </div>
                    </dd>
                </dl>
                <dl class="accordion__item">
                    <dt class="accordion__title js-accordion__title">
                        <div class="question__top">
                            <span>Q</span>
                            <p>集団授業での指導はありますか?</p>
                        </div>
                    </dt>
                    <dd class="accordion__content">
                        <div class="question__bottom">
                            <span>A</span>
                            <p>一部の科目で、開講していることもあります。最新の状況はお問合せ下さい。</p>
                        </div>
                    </dd>
                </dl>
                <dl class="accordion__item">
                    <dt class="accordion__title js-accordion__title">
                        <div class="question__top">
                            <span>Q</span>
                            <p>インターネットにつながる環境があれば、すぐに受講可能でしょうか？</p>
                        </div>
                    </dt>
                    <dd class="accordion__content">
                        <div class="question__bottom">
                            <span>A</span>
                            <p>ZOOMというソフトをインストールしていただく必要がございます。</p>
                        </div>
                    </dd>
                </dl>
            </div>
        </div>
    </section>









    <section class="contact__wrapper-bottom">
        <div class="container">
            <h2 class="section__title">お問い合わせ</h2>
            <p>ご不明点、ご質問などございましたら<br>
                以下からお気軽にお問い合わせください。</p>
        </div>
    </section>
    <?php get_footer() ;?>