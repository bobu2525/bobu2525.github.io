<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>よくあるご質問 | やすらぎ供養</title>
    <link rel="stylesheet" href="css/style.css"> <!-- スタイルシートをリンク -->
</head>
<body>
@include('partials.header')

<main>
    <!-- パンくずリスト -->
    <nav class="breadcrumb">
        <ul>
            <li><a href="index.php">TOP</a></li>
            <li>よくあるご質問</li>
        </ul>
    </nav>

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
                <p class="answer">可能でございます。特定の商品などをご希望の際は、作業3日前までに郵送いただければお供えさせていただきます。</p>
            </div>
            <div class="faq-item">
                <p class="question">お花のお色味の指定などはできますか？</p>
                <p class="answer">ご指定可能です。故人様が好きだった色や、故人様をイメージした色のお花などを、お供えさせていただきます。</p>
            </div>
            <div class="faq-item">
                <p class="question">造花をお供えすることは可能ですか？</p>
                <p class="answer">可能でございます。造花にもよりますが、３か月～長ければ６か月ほど綺麗な状態を保ちます。造花の内容やデザインは、お気軽にご相談ください。</p>
            </div>
            <div class="faq-item">
                <p class="question">どのような支払い方法がありますか？</p>
                <p class="answer">銀行振込支払いのみをご利用いただけます。</p>
            </div>
            <div class="faq-item">
                <p class="question">清掃後に写真を送ってもらえますか？</p>
                <p class="answer">はい、清掃後には写真付きの報告書をお送りしておりますので、安心してご依頼いただけます。</p>
            </div>
            <div class="faq-item">
                <p class="question">清掃の際に何か準備が必要ですか？</p>
                <p class="answer">特に必要な準備はございません。ご依頼後は、すべて当社のスタッフが対応いたします。</p>
            </div>
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

@include('partials.footer')
</body>
</html>