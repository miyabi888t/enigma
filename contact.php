<?php
/*
 * Template Name: contact
 */ 
?>

<?php get_header() ;?> 
    <section class="contact__wrapper">
        <div class="container">
            <h2 class="section__title">お問い合わせ / 無料体験受付</h2>
            <p class="contact__text-top">
                当塾にご興味を持って頂きありがとうございます。<br class="sp-tb-only"><br class="sp-tb-only">
                2営業日以内にお客様のメールアドレスにご連絡致します。
            </p>
            <div class="contact__body">
                <form action="#">
                    <div class="contact__item">
                        <label class="contact__title">お名前<span>必須</span></label>
                        <input type="text" required>
                    </div>
                    <div class="contact__item">
                        <label class="contact__title">メールアドレス<span>必須</span></label>
                        <input type="text" required>
                    </div>
                    <div class="contact__item">
                        <label class="contact__title">お電話番号</label>
                        <input type="text">
                    </div>
                
                    <div class="contact__item">
                        <label class="contact__title">通っている学校名</label>
                        <input type="text">
                    </div>
                
                    <div class="contact__item">
                        <label class="contact__title">お問い合わせ目的</label>
                        <div class="contact__item-radio">
                            <div class="contact__input">
                                <input type="radio" name="radio" class="contact__input-radio" id="radio-01" value="無料体験希望">
                                <label for="radio-01">無料体験希望</label><br>
                            </div>
                            <div class="contact__input">
                                <input type="radio" name="radio" class="contact__input-radio" id="radio-02" value="資料請求">
                                <label for="radio-02">資料請求</label><br>
                            </div>
                            <div class="contact__input">
                                <input type="radio" name="radio" class="contact__input-radio" id="radio-03" value="その他">
                                <label for="radio-03">その他</label><br>
                            </div>
                        </div>
                    </div>
                    <div class="contact__item">
                        <label class="contact__title">お問い合わせ内容</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <input type="submit" value="送信">
                </form>
            </div>
        </div>
    </section>

<?php get_footer() ;?>