<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サービス紹介 | やすらぎ供養</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- スタイルシートをリンク -->
</head>
<body>
@include('partials.header')

<main>
    <!-- パンくずリスト -->
    <nav class="breadcrumb">
        <ul>
            <li><a href="{{ url('/') }}">TOP</a></li>
            <li>サービス紹介</li>
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

    <!-- サービス紹介セクション -->
    <section class="service-intro">
        <div class="container">
            <h2>サービス紹介</h2>
            <p class="p-servics">やすらぎ供養では、さまざまな供養サービスを提供しています。以下は、主なサービスの概要です。</p>
        </div>
    </section>

    <!-- 各サービスセクション -->
    <section class="services">
        <div class="container">
            <!-- 墓清掃サービス -->
            <div class="service-item">
                <img src="{{ asset('img/keina.png') }}" alt="墓清掃サービス" class="service-image">
                <div class="service-content">
                    <h3>墓清掃代行</h3>
                    <p class="p-servics">遠方にお住まいの方や忙しい方のために、墓の清掃を代行するサービスです。丁寧に清掃し、お墓の美観を保ちます。</p>
                    <a href="{{ url('/grave-cleaning') }}" class="btn-service">詳細を見る</a>
                </div>
            </div>

            <!-- 墓清掃定期プラン -->
            <div class="service-item">
                <img src="{{ asset('img/keina.png') }}" alt="墓清掃定期プラン" class="service-image">
                <div class="service-content">
                    <h3>墓清掃定期プラン</h3>
                    <p>定期的にお墓の清掃を行うプランです。四季に合わせた清掃や季節の花の手入れなど、年間を通してお墓を美しく保ちます。</p>
                    <a href="{{ url('/regular-cleaning') }}" class="btn-service">詳細を見る</a>
                </div>
            </div>
        </div>
    </section>
</main>

@include('partials.footer')
</body>
</html>