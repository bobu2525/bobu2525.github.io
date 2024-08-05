<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ブログ/ニュース | やすらぎ供養</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
@include('partials.header')

<main>
    <!-- パンくずリスト -->
    <nav class="breadcrumb">
        <ul>
            <li><a href="{{ url('/') }}">TOP</a></li>
            <li>ブログ/ニュース</li>
        </ul>
    </nav>

    <!-- ブログ/ニュースセクション -->
    <section class="blog-news">
        <div class="container">
            <h2>ブログ/ニュース</h2>
            @foreach ($blogs as $blog)
                <div class="blog-item">
                    <img class="blog-image" src="{{ asset($blog['image']) }}" alt="{{ $blog['title'] }}">
                    <div class="blog-content">
                        <h3>{{ $blog['title'] }}</h3>
                        <p>{{ $blog['summary'] }}</p>
                        <a href="{{ url('blog/' . $blog['id']) }}" class="btn">続きを読む</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</main>

@include('partials.footer')
</body>
</html>