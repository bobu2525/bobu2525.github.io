<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravelやすら供養</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/grave-cleaning.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pricing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reviews.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog-detail.css') }}">
    <link rel="stylesheet" href="{{ asset('css/grave-cleaning-apply.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/grave-cleaning-plan.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <!-- ヘッダーセクション -->
    <header class="header-container">
        <div class="container header-content">
            <!-- ロゴ -->
            <div class="header-logo">
                <img src="{{ asset('img/logo.png') }}" alt="やすらぎ供養" class="logo_img">
            </div>
        
            
            
             
           
            
            
            
            
            
            
            <!-- 電話番号 -->
            <div class="header-contact">
                <p class="company-name">やすらぎ供養</p>
                <p class="phone">
                    <img src="{{ asset('img/keina.png') }}" alt="電話アイコン"> 075-1234-5678
                </p>
            </div>
            




            <!-- ハンバーガーメニューアイコン -->
            <div class="menu-icon" onclick="toggleMenu()">
                ☰
            </div>
        </div>
        <!-- ナビゲーションバー -->
        <nav class="navibre" id="mobileMenu">
            <ul>
                <li class="nav-item"><a href="{{ url('/') }}">TOP</a></li>
                <li class="nav-item"><a href="{{ url('services') }}">サービス紹介</a></li>
                <li class="nav-item"><a href="{{ url('grave-cleaning') }}">墓清掃代行</a></li>
                <li class="nav-item"><a href="{{ url('grave-cleaning-plan') }}">墓清掃定期プラン</a></li>
                <li class="nav-item"><a href="{{ url('pricing') }}">料金詳細</a></li>
                <li class="nav-item"><a href="{{ url('faq') }}">FAQ</a></li>
                <li class="nav-item"><a href="{{ url('reviews') }}">お客様の声</a></li>
                <li class="nav-item"><a href="{{ url('blog') }}">ブログ/ニュース</a></li>
                <li class="nav-item"><a href="{{ url('contact') }}">お問い合わせ</a></li>
                <li class="nav-item"><a href="{{ url('company-info') }}">アクセス/会社情報</a></li>

                <!-- ログイン -->
                @if (Route::has('login'))
    @auth
        @if(auth()->user()->role === 'admin')
            <li class="nav-item"><a href="{{ url('/admin') }}" class="auth-link">マイページ</a></li>
        @elseif(auth()->user()->role === 'member')
            <li class="nav-item"><a href="{{ url('/member') }}" class="auth-link">マイページ</a></li>
        @endif
    @else
        <li class="nav-item"><a href="{{ route('login') }}" class="auth-link">ログイン</a></li>
        @if (Route::has('register'))
            <!-- 新規登録 -->
            <li class="nav-item"><a href="{{ route('register') }}" class="auth-link">新規登録</a></li>
        @endif
    @endauth
@endif
            </ul>
        </nav>
    </header>
    <script src="{{ asset('js/menu.js') }}"></script>