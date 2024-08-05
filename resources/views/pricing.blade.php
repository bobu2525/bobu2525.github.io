<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>料金詳細 | やすらぎ供養</title>
    <link rel="stylesheet" href="css/style.css"> <!-- スタイルシートをリンク -->
</head>
<body>
@include('partials.header') <!-- 正しいパスを使用 -->


<main>
    <!-- パンくずリスト -->
    <nav class="breadcrumb">
        <ul>
            <li><a href="index.php">TOP</a></li>
            <li><a href="services.php">サービス紹介</a></li>
            <li>料金詳細</li>
        </ul>
    </nav>
    
    <!-- プラン詳細 -->
    <section class="plans">
        <div class="container">
            <h2>料金詳細</h2>
            <div class="plans-grid">
                <div class="plan">
                    <img src="img/laito.png" alt="ライトプラン">
                    <h3>ライトプラン</h3>
                    <p class="price">￥9,900円(税込)</p>
                    <p>お墓の基本的な清掃を行うプランです。墓石や備品の掃除、雑草の除去も含みます、お供えのお花やお線香を用意します。<br>清掃完了後には、<br>メールで報告いたします。</p>
                    <ul>
                        <li>お供え</li>
                        <li>拭き掃除</li>
                        <li>お線香</li>
                    </ul>
                    <a href="grave-cleaning-apply.php?plan=basic" class="btn">このプランで申し込む</a>
                </div>
                <div class="plan">
                    <img src="img/kihon.png" alt="基本プラン">
                    <h3>基本プラン</h3>
                    <p class="price">￥19,800円(税込)</p>
                    <p>お墓周辺の徹底的な清掃を行うプランです。墓石はもちろん、お線香台や備品の清掃、雑草の除去も含みます。清掃後には、<br>写真で状態を報告し、安心していただけます。</p>
                    <ul>
                        <li>お供え</li>
                        <li>拭き掃除</li>
                        <li>お線香</li>
                        <li>合掌礼拝</li>
                        <li>敷地清掃</li>
                        <li>写真撮影</li>
                    </ul>
                    <a href="grave-cleaning-apply.php?plan=standard" class="btn">このプランで申し込む</a>
                </div>
                <div class="plan">
                    <img src="img/puremia.png" alt="プレミアムプラン">
                    <h3>プレミアムプラン</h3>
                    <p class="price">￥29,800円(税込)</p>
                    <p>墓石のクリーニングとコーティングを含む最高級プランです。特殊な撥水コート剤で汚れが付きにくくなり、墓石に光沢を与えます。長期間の<br>美しさを保ちたい方に最適です。</p>
                    <ul>
                        <li>お供え</li>
                        <li>拭き掃除</li>
                        <li>お線香</li>
                        <li>合掌礼拝</li>
                        <li>敷地清掃</li>
                        <li>写真撮影</li>
                        <li>墓石のクリーニング、コーティング</li>
                    </ul>
                    <a href="contact.php?subject=カスタムプランについて" class="btn">このプランで申し込む</a>
                </div>
                <div class="plan">
                    <img src="img/puremia.png" alt="カスタムプラン">
                    <h3>カスタムプラン</h3>
                    <p class="price">要問合せ</p>
                    <p>様々なニーズに合わせてカスタムすます</p>
                    <ul>
                  
                    </ul>
                    <a href="contact.php?subject=カスタムプランについて" class="btn">このプランで申し込む</a>
                </div>
            </div>
        </div>
    </section>



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
<!-- お問い合わせ -->
<section class="contact-bigbtn">
    <div class="container">
        <p class="info"><span class="highlight">24時間365日</span> ご相談受付中</p>
        <p class="phone">☏075-1234-5678</p>
        <p class="note">お気軽にご相談ください。</p>
        <a href="contact.php" class="btn-contact">問い合わせ</a>
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
                    <p>￥3,000円(税込)</p>
                </div>
                <div class="option-item">
                    <img src="img/syasin.png" alt="1基追加">
                    <p>1基追加</p>
                    <p>￥3,000円(税込)</p>
                </div>
                <div class="option-item">
                    <img src="img/syasin.png" alt="墓石コーティング">
                    <p>墓石コーティング</p>
                    <p>￥5,000円(税込)</p>
                </div>
                <div class="option-item">
                    <img src="img/syasin.png" alt="造花">
                    <p>造花</p>
                    <p>￥1,000円(税込)</p>
                </div>
                <div class="option-item">
                    <img src="img/syasin.png" alt="生花増量">
                    <p>生花増量</p>
                    <p>￥2,000円(税込)</p>
                </div>
                <div class="option-item">
                    <img src="img/syasin.png" alt="2㎡以上">
                    <p>2㎡以上</p>
                    <p>￥3,000円(税込)</p>
                </div>
            </div>
        </div>
    </section>
    
<!-- 作業の詳細手順 -->
<section class="work-details">
    <div class="container">
        <h2>作業の詳細手順</h2>
        <div class="work-steps">
            <div class="work-step">
                <img src="img/hikisouji.jpg" alt="拭き掃除" class="work-img">
                <h4>拭き掃除</h4>
                <p><strong>準備:</strong> 必要な清掃用具（柔らかい布、専用洗剤、バケツなど）を用意します。</p>
                <p><strong>手順:</strong> 墓石表面の汚れや埃を取り除きます。専用の墓石クリーナーを使用し、乾いた布で水分を拭き取ります。</p>
            </div>
            <div class="work-step">
                <img src="img/zassoujyo.jpg" alt="雑草除去" class="work-img">
                <h4>雑草除去</h4>
                <p><strong>準備:</strong> 草刈り鎌や雑草取り用の手袋、袋などを用意します。</p>
                <p><strong>手順:</strong> 墓地周辺の雑草を手で抜き取り、根元から除去します。地面を整地し、取り除いた雑草は袋に入れて適切に処分します。</p>
            </div>
            <div class="work-step">
                <img src="img/kyoka.jpg" alt="供花" class="work-img">
                <h4>供花</h4>
                <p><strong>準備:</strong> お客様の希望に合わせた生花を用意します。</p>
                <p><strong>手順:</strong> 枯れている花や古い花を取り除き、新しい花を花立てに整えます。花が倒れていないか確認します。</p>
            </div>
            <div class="work-step">
                <img src="img/osenko.jpg" alt="お線香" class="work-img">
                <h4>お線香</h4>
                <p><strong>準備:</strong> 必要なお線香とライターを用意します。</p>
                <p><strong>手順:</strong> 使用済みのお線香の灰を清掃し、新しいお線香を供えて火を灯します。火がきちんと燃えていることを確認します。</p>
            </div>
            <div class="work-step">
                <img src="img/gasshou.jpg" alt="合掌礼拝" class="work-img">
                <h4>合掌礼拝</h4>
                <p><strong>準備:</strong> 清掃が終わり次第、スタッフは墓前に立ちます。</p>
                <p><strong>手順:</strong> 合掌して、ご先祖様に対して礼を尽くし、一礼します。礼拝後、墓前の状況を確認します。</p>
            </div>
            <div class="work-step">
                <img src="img/shikichi.jpg" alt="敷地清掃" class="work-img">
                <h4>敷地清掃</h4>
                <p><strong>準備:</strong> 掃除用具（ほうき、ちり取り、ゴミ袋など）を用意します。</p>
                <p><strong>手順:</strong> 墓地周辺の落ち葉やゴミをほうきで掃き集めます。ゴミを袋に入れて適切に処分します。</p>
            </div>
            <div class="work-step">
                <img src="img/syasinsatuei.jpg" alt="写真撮影" class="work-img">
                <h4>写真撮影</h4>
                <p><strong>準備:</strong> カメラを用意します。</p>
                <p><strong>手順:</strong> 清掃前後の状態を撮影し、お客様に送付するために写真を整理します。</p>
            </div>
            <div class="work-step">
                <img src="img/cleaning.jpg" alt="墓石のクリーニング" class="work-img">
                <h4>墓石のクリーニング</h4>
                <p><strong>準備:</strong> 墓石専用のクリーナーやブラシ、布などを用意します。</p>
                <p><strong>手順:</strong> 墓石の表面をクリーナーで洗浄し、汚れを落とします。清掃後、水で十分にすすぎ、布で拭き取ります。</p>
            </div>
            <div class="work-step">
                <img src="img/coating.jpg" alt="墓石のコーティング" class="work-img">
                <h4>墓石のコーティング</h4>
                <p><strong>準備:</strong> 撥水コート剤、塗布用の布やスポンジを用意します。</p>
                <p><strong>手順:</strong> 墓石全体に撥水コート剤を塗布し、布やスポンジで均一に塗布します。乾燥させ、追加のコーティングを行います。</p>
            </div>
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






@include('partials.footer') <!-- フッターをインクルード -->

</body>
</html>