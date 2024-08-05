<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog['title'] }} | やすらぎ供養</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
@include('partials.header')

<main>
    <!-- パンくずリスト -->
    <nav class="breadcrumb">
        <ul>
            <li><a href="{{ url('/') }}">TOP</a></li>
            <li><a href="{{ url('/blog') }}">ブログ/ニュース</a></li>
            <li>{{ $blog['title'] }}</li>
        </ul>
    </nav>

    <!-- ブログ詳細セクション -->
    <section class="blog-detail">
        <div class="container">
            <h2>{{ $blog['title'] }}</h2>
            <img class="blog-image" src="{{ asset($blog['image']) }}" alt="{{ $blog['title'] }}">
            <p>{{ $blog['content'] }}</p>
            <a href="{{ url('/blog') }}" class="btn">ブログ一覧に戻る</a>
        </div>
    </section>
</main>

@include('partials.footer')
</body>
</html>