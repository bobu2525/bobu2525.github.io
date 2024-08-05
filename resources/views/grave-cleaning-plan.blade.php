<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>墓清掃定期プラン | やすらぎ供養</title>
    <link rel="stylesheet" href="css/style.css"> <!-- スタイルシートをリンク -->
</head>
<body>
@include('partials.header') <!-- ヘッダーをインクルード -->
<main>
    <!-- パンくずリスト -->
    <nav class="breadcrumb">
        <ul>
            <li><a href="index.php">TOP</a></li>
            <li><a href="services.php">サービス紹介</a></li>
            <li>墓清掃定期プラン</li>
        </ul>
    </nav>

    <!-- メインコンテンツ -->
    <section class="regular-plans">
    <div class="container">
        <h2>墓清掃定期プラン</h2>
        <p>お得な定期プランもご用意しております:</p>
        <div class="plans-grid">
            <div class="plan">
                <h3>年 2回コース</h3>
                <p class="price">19,800円× 2回 <br>→ <span class="discounted-price"> 37,400円</span><br>(税込)</p>
                <p class="discount-info">通常価格39,600円から<br>2,200円の割引！</p>
                <p>2回、ご希望の時期に伺います。春と秋のお彼岸でご利用される方が多いです。</p>
                <a href="contact.php?subject=年2回コースについて" class="btn-teiki">このプランで申し込む</a>
            </div>
            <div class="plan">
                <h3>年 4回コース</h3>
                <p class="price">19,800円× 4回 <br>→ <span class="discounted-price"> 70,400円</span><br>(税込)</p>
                <p class="discount-info">通常価格79,200円から<br>8,800円の割引！</p>
                <p>お彼岸2回の他にお盆、年末年始などでご利用される方が多い年4回コースです。</p>
                <a href="contact.php?subject=年4回コースについて" class="btn-teiki">このプランで申し込む</a>
            </div>
            <div class="plan">
                <h3>年12回コース</h3>
                <p class="price">19,800円×12回 <br>→ <span class="discounted-price">198,000円</span><br>(税込)</p>
                <p class="discount-info">通常価格237,600円から<br>39,600円の割引！</p>
                <p>毎月ご希望に沿った日に伺います。毎月のお掃除でご先祖様もお喜びいただけるかと思います。</p>
                <a href="contact.php?subject=年12回コースについて" class="btn-teiki">このプランで申し込む</a>
            </div>
            <div class="plan">
                <h3>カスタムコース</h3>
                <p class="price">要お問い合わせ</p>
                <p>毎月や各月のお掃除を、ご希望に応じてカスタマイズするプランです。故人様を想念で、特別清掃を行います。ご相談をお待ちいただけると幸いです。</p>
                <a href="contact.php?subject=カスタムコースについて" class="btn-teiki">このプランで申し込む</a>
            </div>
        </div>
    </div>
</section>


<!-- オプション -->
<section class="options">
    <div class="container">
        <h2>その他オプション</h2>
        <div class="option-grid">
            <div class="option-item">
                <img src="img/syasin.png" alt="写真納品">
                <p>写真納品</p>
            </div>
            <div class="option-item">
                <img src="img/syasin.png" alt="1基追加">
                <p>1基追加 3,000円</p>
            </div>
            <div class="option-item">
                <img src="img/syasin.png" alt="墓石コーティング">
                <p>墓石コーティング</p>
            </div>
            <div class="option-item">
                <img src="img/syasin.png" alt="造花">
                <p>造花</p>
            </div>
            <div class="option-item">
                <img src="img/syasin.png" alt="生花増量">
                <p>生花増量</p>
            </div>
            <div class="option-item">
                <img src="img/syasin.png" alt="2㎡以上">
                <p>2㎡以上 1㎡毎3,000円</p>
            </div>
        </div>
    </div>
</section>

 <!-- よくあるご質問セクション -->
 <section class="faq">
        <div class="container">
            <h2>よくあるご質問</h2>
            <div class="faq-item">
                <p class="question">毎月、もしくは定期的に清掃の依頼をお願いしたいのですが、可能ですか？</p>
                <p class="answer">可能でございます。毎月1回、2か月に1回、3か月に1回や、様々な選択プランをご用意しております。お気軽にお問い合わせください。</p>
            </div>
            <div class="faq-item">
                <p class="question">お酒やお饅頭などのお供え物をしたいのですが、可能ですか？</p>
                <p class="answer">可能でございます。有名の商品などをご希望の場合は、作業3日前までに発送いただければお供えさせていただきます。</p>
            </div>
            <div class="faq-item">
                <p class="question">お花のお色味の指定などはできますか？</p>
                <p class="answer">ご指定可能です。花屋が季節やお客様のご要望に応じて、最適なサイズや色のお花をご用意し、お供えさせていただきます。</p>
            </div>
            <div class="faq-item">
                <p class="question">造花をお供えすることは可能ですか？</p>
                <p class="answer">可能でございます。造花によるお供えも、3か月から半年に1回および6か月に経過後の交換も承ります。造花の内容やデザインなど、ご相談ください。</p>
            </div>
            <div class="faq-item">
                <p class="question">定期プランの時期を変更することはできますか？</p>
            <p>A: 可能でございます。お客様のご都合に合わせて柔軟に対応いたしますので、お気軽にご相談ください。</p>
            <p class="answer"></p>
            </div>
            <div class="faq-item">
                <p class="question"> 定期プランに追加でオプションを付けることはできますか？</p>
                <p class="answer">もちろん可能です。追加したいオプションについては、お問い合わせフォームやお電話でご連絡ください。</p>
            </div>
            <div class="faq-item">
                <p class="question">支払いはどのように行うのですか？</p>
                <p class="answer">お支払い方法は、銀行振込、クレジットカード、コンビニ決済などに対応しております。詳細はお問い合わせください。</p>
            </div>
            <div class="faq-item">
                <p class="question">申し込み後のキャンセルは可能ですか？</p>
                <p class="answer">サービス開始前であればキャンセル可能です。キャンセルの際は、できるだけ早くご連絡ください。</p>
            </div>
            <!-- 他のFAQ項目を追加 -->
        </div>
    </section>
<!-- お問い合わせ -->
<section class="contact-bigbtn">
    <div class="container">
        <p class="info"><span class="highlight">24時間365日</span> ご相談受付中</p>
        <p class="phone">☏075-1234-5678</p>
        <p class="note">お気軽にご相談ください。</p>
        <a href="contact.php" class="btn-contact">問い合わせ</a>
    </div>
</section>

</main>

@include('partials.footer') <!-- フッターをインクルード -->
</body>
</html>