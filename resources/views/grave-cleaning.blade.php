@include('partials.header')


<main>
    <!-- パンくずリスト -->
    <nav class="breadcrumb">
        <ul>
            <li><a href="{{ url('/') }}">TOP</a></li>
            <li><a href="{{ url('services') }}">サービス紹介</a></li>
            <li>墓清掃代行</li>
        </ul>
    </nav>

    <!-- カルーセル -->
    <section class="carousel">
        <div class="carousel-container" id="carousel-container">
            <div class="carousel-slide" style="background-image: url('{{ asset('img/main01.png') }}');"></div>
            <div class="carousel-slide" style="background-image: url('{{ asset('img/main04.png') }}');"></div>
            <div class="carousel-slide" style="background-image: url('{{ asset('img/main05.png') }}');"></div>
            <div class="carousel-slide" style="background-image: url('{{ asset('img/main06.png') }}');"></div>
            <div class="carousel-slide" style="background-image: url('{{ asset('img/main07.png') }}');"></div>
        </div>
        <button class="carousel-control prev" onclick="prevSlide()">&#10094;</button>
        <button class="carousel-control next" onclick="nextSlide()">&#10095;</button>
    </section>
    <script src="{{ asset('js/carousel.js') }}"></script> <!-- カルーセル用JavaScript -->

    <!-- メインコンテンツ -->
    <section class="service-detail">
        <div class="container">
            <h2>墓清掃代行サービス</h2>
            <p>遠方に住む方や忙しい方のために、墓の清掃を代行するサービスです。専門スタッフが丁寧に掃除し、お墓の美観を保ちます。</p>
            <p>以下のプランからお選びいただけます:</p>
            <section class="plans">
                <div class="container">
                    <h2>サービス詳細</h2>
                    <div class="plans-grid">
                        <div class="plan plan-light">
                            <img src="{{ asset('img/laito.png') }}" alt="ライトプラン">
                            <h3>ライトプラン</h3>
                            <p class="price">￥9,900円(税込)</p>
                            <p class="plan-p">お墓の基本的な清掃を行うプランです。墓石や備品の掃除、雑草の除去、お供えのお花やお線香を用意します。<br>清掃完了後には、<br>メールで報告いたします。</p>
                            <ul class="ul-pran">
                                <li>お供え</li>
                                <li>拭き掃除</li>
                                <li>お線香</li>
                            </ul>
                            <a href="{{ url('grave-cleaning-apply') }}?plan=basic" class="plan-btn">このプランで申し込む</a>
                        </div>
                        <div class="plan plan-basic">
                            <img src="{{ asset('img/kihon.png') }}" alt="基本プラン">
                            <h3>基本プラン</h3>
                            <p class="price">￥19,800円(税込)</p>
                            <p>お墓周辺の徹底的な清掃を行うプランです。墓石はもちろん、お線香台や備品の清掃、雑草の除去も含みます。清掃後には、写真で状態を報告し、安心していただけます。</p>
                            <ul class="ul-pran">
                                <li>お供え</li>
                                <li>拭き掃除</li>
                                <li>お線香</li>
                                <li>合掌礼拝</li>
                                <li>敷地清掃</li>
                                <li>写真撮影</li>
                            </ul>
                            <a href="{{ url('grave-cleaning-apply') }}?plan=standard" class="plan-btn">このプランで申し込む</a>
                        </div>
                        <div class="plan plan-premium">
                            <img src="{{ asset('img/puremia.png') }}" alt="プレミアムプラン">
                            <h3>プレミアムプラン</h3>
                            <p class="price">29,800円(税込)</p>
                            <p>墓石のクリーニングとコーティングを含む最高級プランです。特殊な撥水コート剤で汚れが付きにくくなり、墓石に光沢を与えます。長期間の美しさを保ちたい方に最適です。</p>
                            <ul class="ul-pran">
                                <li>お供え</li>
                                <li>拭き掃除</li>
                                <li>お線香</li>
                                <li>合掌礼拝</li>
                                <li>敷地清掃</li>
                                <li>写真撮影</li>
                                <li>墓石のクリーニング、コーティング</li>
                            </ul>
                            <a href="{{ url('contact') }}?subject=カスタムプランについて" class="plan-btn">このプランで申し込む</a>
                        </div>
                    </div>
                    <div class="custom-plan-container">
                        <div class="custom-plan">
                            <img src="{{ asset('img/puremia.png') }}" alt="カスタムプラン">
                            <h3>カスタムプラン</h3>
                            <p class="price">要問合せ</p>
                            <p>様々なニーズに合わせてカスタムします。</p>
                            <ul class="ul-pran">
                                <!-- カスタムプランの詳細項目をここに追加 -->
                            </ul>
                            <a href="{{ url('contact') }}?subject=カスタムプランについて" class="plan-btn">このプランで申し込む</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!-- オプション -->
    <section class="options">
        <div class="container">
            <h2>その他オプション</h2>
            <div class="option-grid">
                <!-- 各オプション項目 -->
                <div class="option-item">
                    <img src="{{ asset('img/OP_syasin.png') }}" alt="写真納品">
                    <p>写真納品</p>
                </div>
                <div class="option-item">
                    <img src="{{ asset('img/OP_hakatuika.png') }}" alt="1基追加">
                    <p>1基追加 3,000円</p>
                </div>
                <div class="option-item">
                    <img src="{{ asset('img/PO_hakakou.png') }}" alt="墓石コーティング">
                    <p>墓石コーティング</p>
                </div>
                <div class="option-item">
                    <img src="{{ asset('img/OP_namahana.png') }}" alt="造花">
                    <p>造花</p>
                </div>
                <div class="option-item">
                    <img src="{{ asset('img/OP_namahana.png') }}" alt="生花増量">
                    <p>生花増量</p>
                </div>
                <div class="option-item">
                    <img src="{{ asset('img/OP_hakatuika.png') }}" alt="2㎡以上">
                    <p>2㎡以上 1㎡毎3,000円</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 墓清掃定期プラン -->
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
                    <a href="{{ url('contact') }}?subject=年2回コースについて" class="btn-teiki">このプランで申し込む</a>
                </div>
                <div class="plan">
                    <h3>年 4回コース</h3>
                    <p class="price">19,800円× 4回 <br>→ <span class="discounted-price"> 70,400円</span><br>(税込)</p>
                    <p class="discount-info">通常価格79,200円から<br>8,800円の割引！</p>
                    <p>お彼岸2回の他にお盆、年末年始などでご利用される方が多い年4回コースです。</p>
                    <a href="{{ url('contact') }}?subject=年4回コースについて" class="btn-teiki">このプランで申し込む</a>
                </div>
                <div class="plan">
                    <h3>年12回コース</h3>
                    <p class="price">19,800円×12回 <br>→ <span class="discounted-price">198,000円</span><br>(税込)</p>
                    <p class="discount-info">通常価格237,600円から<br>39,600円の割引！</p>
                    <p>毎月ご希望に沿った日に伺います。毎月のお掃除でご先祖様もお喜びいただけるかと思います。</p>
                    <a href="{{ url('contact') }}?subject=年12回コースについて" class="btn-teiki">このプランで申し込む</a>
                </div>
                <div class="plan">
                    <h3>カスタムコース</h3>
                    <p class="price">要お問い合わせ</p>
                    <p>毎月や各月のお掃除を、ご希望に応じてカスタマイズするプランです。故人様を想念で、特別清掃を行います。ご相談をお待ちいただけると幸いです。</p>
                    <a href="{{ url('contact') }}?subject=カスタムコースについて" class="btn-teiki">このプランで申し込む</a>
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
            <!-- 他のFAQ項目を追加 -->
        </div>
    </section>

    <!-- お問い合わせセクション -->
    <section class="contact-bigbtn">
        <div class="container">
            <p class="info"><span class="highlight">24時間365日</span> ご相談受付中</p>
            <p class="phone">☏075-1234-5678</p>
            <p class="note">お気軽にご相談ください。</p>
            <a href="{{ url('contact') }}" class="btn-contact">問い合わせ</a>
        </div>
    </section>
    </main>
@include('partials.footer')


</body>
</html>