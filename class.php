<?php
/*
 * Template Name: class
 */ 
?>

<?php get_header() ;?>

    <section class="flow__wrapper">
        <div class="container">
            <h2 class="section__title">受講までの流れ</h2>
            <div class="flow__contents">
                <div class="flow__items">
                    <p class="flow__item-number">1</p>
                    <div class="flow__item-text">
                        <h3 class="flow__title"><span>1</span><p>受講前のご説明、面談</p></h3>
                        <p class="flow__text">実際にご受講される前に、ZOOMで授業に対する要望をお聞きしていきます。<br class="sp-only">
                            その中で、現在の立ち位置、今後の勉強の方向性を授業の目的を明確化します。<br class="sp-only">
                            年単位の受講」ではなく、４回、８回など、「回数を区切った受講」で目的意識を持ってご受講されることをおすすめしています。<br class="sp-only">面談後に体験授業にも参加頂けますので可能な限り保護者様と生徒様お揃いで参加して頂くことを推奨しています。
                        </p>
                    </div>
                </div>
                <div class="flow__img">
                    <img src="<?php echo get_template_directory_uri() ; ?>/img/Polygon.svg" alt="polygon">
                </div>
                <div class="flow__items">
                    <p class="flow__item-number">2</p>
                    <div class="flow__item-text">
                        <h3 class="flow__title"><span>2</span><p>体験授業</p></h3>
                        <p class="flow__text">基本的には、面談での設計に基づいて体験授業を行っていきます。<br class="sp-only">
                            やむを得ず保護者の方のみでのご説明になる場合は、別日程で生徒様に体験授業をさせていただきますので遠慮なくお申し出ください。</p>
                    </div>
                </div>
                <div class="flow__img">
                    <img src="<?php echo get_template_directory_uri() ; ?>/img/Polygon.svg" alt="polygon">
                </div>
                <div class="flow__items">
                    <p class="flow__item-number">3</p>
                    <div class="flow__item-text">
                        <h3 class="flow__title"><span>3</span><p>受講開始</p></h3>
                        <p class="flow__text">体験終了後、開始日時を相談して受講開始となります。授業は、初回にご契約頂いた回数のみで自動継続はありません。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="course__wrapper">
        <div class="container">
            <h2 class="section__title">コースについて</h2>
            <div class="course__items">
                <div class="course__title">
                    <h3 class="course__main-title">通常授業</h3>
                    <p class="course__price"><span>60</span>分×<span>4</span>回：<span class="course__big">36,000</span>円(税込)</p>
                </div>
                <ul>
                    <li>・基本のコースです。</li>
                    <li>・先生１名で生徒１名の授業です。</li>
                    <li>・毎回60分が基本ですが、30分程度の演習時間を追加する場合もあります。</li>
                </ul>
            </div>
            <div class="course__items">
                <div class="course__title">
                    <h3 class="course__main-title">グループ授業</h3>
                    <p class="course__price"><span>60</span>分×<span>4</span>回：<span class="course__big">20,000</span>円(税込)</p>
                </div>
                <ul>
                    <li>・生徒２～３名の授業です。</li>
                    <li>・友人同士など、グループで受講したい場合や、同じタイミングで同内容の受講希望があった場合に設定します。</li>
                </ul>
            </div>
            <div class="course__items">
                <div class="course__title">
                    <h3 class="course__main-title">特別対策授業</h3>
                    <p class="course__price"><span>60</span>分×<span>4</span>回：<span class="course__big">50,000</span>円(税込)</p>
                </div>
                <ul>
                    <li>・専門性の高いご要望にお応えする授業です。</li>
                    <li>・内容としては、理Ⅲなどハイレベルな受験対策、数学オリンピック等の対策、海外の大学志望の際の指導などです。</li>
                    <li>・普段は開講しておりません。受講希望がある場合、お問合せ時にご相談下さい。</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="banner__img">
        <div class="container">
            <a href="<?php echo home_url('/contact'); ?>"><img src="<?php echo get_template_directory_uri() ; ?>/img/banner-online1.jpg" alt="オンライン授業無料体験実施中"></a>
        </div>
    </div>
    

<?php get_footer() ; ?>