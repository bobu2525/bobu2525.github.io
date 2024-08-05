@include('partials.header')

<main>
    <nav class="breadcrumb">
        <ul>
            <li class="pannkuzu-li"><a href="{{ url('/') }}">TOP</a></li>
        </ul>        
    </nav>    
    
<!-- カルーセル -->
<section class="carousel">
            <div class="carousel-container" id="carousel-container">
                <div class="carousel-slide" style="background-image: url('img/main01.png');"></div>
                <div class="carousel-slide" style="background-image: url('img/main04.png');"></div>
                <div class="carousel-slide" style="background-image: url('img/main05.png');"></div>
                <div class="carousel-slide" style="background-image: url('img/main06.png');"></div>
                <div class="carousel-slide" style="background-image: url('img/main07.png');"></div>
            </div>
            <button class="carousel-control prev" onclick="prevSlide()">&#10094;</button>
            <button class="carousel-control next" onclick="nextSlide()">&#10095;</button>
        </section>
    <script src="{{ asset('js/carousel.js') }}"></script> 
    
    <section class="hero">
        <div class="container hero-content">
            <h2 id="hero-text"></h2>
            <p id="hero-subtext"></p>
            <a href="{{ url('services') }}" class="btn">サービスを詳しく見る</a>
        </div>    
    </section>
    <script src="{{ asset('js/typingEffect.js') }}"></script>
    
    <section class="sdgs">
        <div class="container sdgs-content">
            <h2>やすらぎ供養ではSDGsの目標「海の豊かさを守る」と「自然の豊かさも守ろう」を支援します</h2>
            <p>SDGsとは2016年に国連で採択され、2030年までに達成すべき【世界共通の目標】です。</p>
            <p>やすらぎ供養では、SDGsの目標14「海の豊かさを守る」と目標15「陸の豊かさも守ろう」を支援する活動に対して、売り上げの一部を寄付しています。海と陸は地球上の生命の基盤であり、その豊かさを守ることは、持続可能な社会を築くために不可欠です。</p>
            <p>この活動は、私たちの経営理念である「環境への配慮」および「革新と伝統の調和」に基づいており、自然環境を大切にすることで、未来の世代へ豊かな地球を引き継ぐ責任を果たします。また、売り上げの一部を寄付することで、地域社会の持続可能な発展にも寄与し、地域に根差した企業としての使命を全うするものです。</p>
        </div>
    </section>

    <section class="philosophy">
        <div class="container philosophy-content">
            <h2>企業理念</h2>
            <p class="intro">「やすらぎ供養」は、現代のライフスタイルや社会環境に適応した新しい供養方法を提供する企業です。私たちは、伝統的な供養方法に代わる選択肢を提案し、核家族化や遺族化が進む現代社会においても、故人を敬い、尊重しながら供養できる方法を提供しています。</p>
            <h3>企業理念</h3>
            <ul class="philosophy-list">
                <li><strong>お客様第一:</strong> 常にお客様のニーズを最優先に考え、最良の供養方法を提供します。</li>
                <li><strong>革新と伝統の調和:</strong> 伝統的な供養の価値を保ちつつ、現代のライフスタイルに合わせた新しい方法を追求します。</li>
                <li><strong>環境への配慮:</strong> 環境に優しい供養方法を提案し、持続可能な社会の実現に貢献します。</li>
            </ul>
        </div>
    </section>

    <section class="reasons">
        <div class="container">
            <h2>やすらぎ供養が選ばれる理由</h2>
            <div class="reason-item">
                <img class="coin" src="{{ asset('img/sinsetu.png') }}" alt="お一人様ずつおもいやりを持って">
                <p>ご遺族様に安心していただけるよう対応いたします。お困りごとがございましたらいつでもお気軽にご相談ください。</p>
            </div>
            <div class="reason-item">
                <img class="coin" src="{{ asset('img/kankyou.png') }}" alt="自然環境にも配慮">
                <p>自然環境影響のあるものだと考えております。できるだけ影響の無いよう配慮を持って清掃を行います。</p>
            </div>
            <div class="reason-item">
                <img class="coin" src="{{ asset('img/manzoku.png') }}" alt="豊富な実績">
                <p>豊富な実績を持ち、すべてのご遺族様に安心していただけるよう対応いたします。お困りごとがございましたらいつでもお気軽にご相談ください。</p>
            </div>
        </div>
    </section>

    <section class="plans">
        <div class="container">
            <h2>墓清掃プラン</h2>
            <div class="plan-item">
                <img class="plan-image" src="{{ asset('img/teiki (2).png') }}" alt="墓清掃代行">
                <div class="plan-content">
                    <h3>墓清掃代行プラン</h3>
                    <p>ご遺族様に安心していただけるよう対応いたします。お困りごとがございましたらいつでもお気軽にご相談ください。</p>
                    <a href="{{ url('grave-cleaning') }}" class="btn">詳細を見る</a>
                </div>
            </div>
            <div class="plan-item">
                <img class="plan-image" src="{{ asset('img/teiki (1).png') }}" alt="墓清掃定期プラン">
                <div class="plan-content">
                    <h3>墓清掃定期プラン</h3>
                    <p>定期的にお墓の清掃を行うプランです。四季に合わせた清掃や季節の花の手入れなど、年間を通してお墓を美しく保ちます。</p>
                    <a href="{{ url('grave-cleaning-plan') }}" class="btn">詳細を見る</a>
                </div>
            </div>
        </div>
    </section>

    <section class="flow">
        <div class="container-flow-content">
            <h2>ご依頼の流れ</h2>
            <div class="flow-steps">
                <div class="flow-step">
                    <img src="{{ asset('img/keina.png') }}" alt="ステップ1">
                    <p>お問い合わせ</p>
                </div>
                <div class="flow-arrow">
                    <span>&rarr;</span>
                </div>
                <div class="flow-step">
                    <img src="{{ asset('img/keina.png') }}" alt="ステップ2">
                    <p>お見積り</p>
                </div>
                <div class="flow-arrow">
                    <span>&rarr;</span>
                </div>
                <div class="flow-step">
                    <img src="{{ asset('img/keina.png') }}" alt="ステップ3">
                    <p>ご契約</p>
                </div>
            </div>
            <div class="flow-steps">
                <div class="flow-step">
                    <img src="{{ asset('img/keina.png') }}" alt="ステップ4">
                    <p>各種サービス</p>
                </div>
                <div class="flow-arrow">
                    <span>&rarr;</span>
                </div>
                <div class="flow-step">
                    <img src="{{ asset('img/keina.png') }}" alt="ステップ5">
                    <p>サービス実施<br>報告書送信</p>
                </div>
            </div>
            <a href="{{ url('service-flow') }}" class="btn">墓清掃代行の流れはこちら</a>
        </div>
    </section>

    <section class="topics">
        <div class="container">
            <h2>トピックス一覧</h2>
            <article class="topic-item">
                <img src="{{ asset('img/keina.png') }}" alt="トピック画像1" class="topic-image">
                <div class="topic-content">
                    <h3>墓清掃代行プラン <span class="highlight">NEW!</span></h3>
                    <p>忙しい方や遠方に住む方のために、墓の清掃を代行するサービスです。専門スタッフが丁寧に掃除し、墓地の美観を保ちます。</p>
                    <p class="quote">「大切な場所をいつでもきれいに。プロの手でお墓の清潔を守ります。」</p>
                </div>
            </article>
            <article class="topic-item">
                <img src="{{ asset('img/keina.png') }}" alt="トピック画像2" class="topic-image">
                <div class="topic-content">
                    <h3>墓清掃定期プラン <span class="highlight">セール中！</span></h3>
                    <p>定期的にお墓の清掃を行うプランです。四季に合わせた清掃や季節の花の手入れなど、年間を通してお墓を美しく保ちます。</p>
                    <p class="quote">「季節ごとのお手入れで、故人をいつも美しいお墓でお迎えします。」</p>
                </div>
            </article>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <h2>利用者様の声</h2>
            <div class="testimonial-item">
                <img class="testimonial-image" src="{{ asset('img/keina.png') }}" alt="顧客の写真">
                <div class="testimonial-content">
                    <p class="stars">★★★★★</p>
                    <p class="testimonial-text">A様 ペット粉骨 委託散骨 手元供養品</p>
                    <p class="testimonial-comment">愛するペットの粉骨を海に散骨するサービスです。ペットとの思い出を美しい海の中に刻みます。</p>
                    <p class="testimonial-quote">「いつまでも心の中に、自然と共に生きるペットのメモリアル。」</p>
                </div>
            </div>
            <div class="testimonial-item">
                <img class="testimonial-image" src="{{ asset('img/keina.png') }}" alt="顧客の写真">
                <div class="testimonial-content">
                    <p class="stars">★★★★★</p>
                    <p class="testimonial-text">B様 ペット粉骨 委託散骨 手元供養品</p>
                    <p class="testimonial-comment">愛するペットの粉骨を海に散骨するサービスです。ペットとの思い出を美しい海の中に刻みます。</p>
                    <p class="testimonial-quote">「いつまでも心の中に、自然と共に生きるペットのメモリアル。」</p>
                </div>
            </div>
        </div>
    </section>

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
        </div>
    </section>

    <section class="news">
        <div class="container">
            <h2>お知らせ・更新情報</h2>
            <div class="news-item">
                <p class="date">2024.07.15</p>
                <span class="tag notice">お知らせ</span>
                <p class="content">年末年始のご供養行事では12月29日以降は供品寄贈をお受け取りできない可能性がございます。</p>
            </div>
            <div class="news-item">
                <p class="date">2024.07.15</p>
                <span class="tag update">更新情報</span>
                <p class="content">ホームページを更新しました</p>
            </div>
            <div class="news-item">
                <p class="date">2024.07.15</p>
                <span class="tag notice">お知らせ</span>
                <p class="content">お盆特セール。年間パックが限定価格で！</p>
            </div>
        </div>
    </section>
<!-- お問い合わせ -->
<section class="contact-bigbtn">
    <div class="container">
        <p class="info"><span class="highlight">24時間365日</span> ご相談受付中</p>
        <p class="phone">☏075-1234-5678</p>
        <p class="note">お気軽にご相談ください。</p>
        <a href="{{ url('/contact') }}" class="btn-contact">問い合わせ</a>
    </div>
</section>

</main>
@include('partials.footer')


</body>
</html>