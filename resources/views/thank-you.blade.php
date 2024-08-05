<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせありがとうございました | やすらぎ供養</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- スタイルシートをリンク -->
</head>
<body>
@include('partials.header')<!-- ヘッダーをインクルード -->

<main>
    <!-- パンくずリスト -->
    <nav class="breadcrumb">
        <ul>
            <li><a href="{{ url('/') }}">TOP</a></li>
            <li>お問い合わせありがとうございました</li>
        </ul>
    </nav>

    <!-- サンキューセクション -->
    <section class="thank-you">
        <div class="container">
            <h2>お問い合わせありがとうございました</h2>
            <p>お問い合わせいただき、誠にありがとうございます。内容を確認次第、担当者よりご連絡いたします。</p>
            <p>今後とも「やすらぎ供養」をよろしくお願い申し上げます。</p>
            <a href="{{ url('/') }}" class="btn">トップページに戻る</a>
            <a href="{{ url('/services') }}" class="btn">サービス紹介を見る</a>
        </div>
    </section>
</main>

@include('partials.footer') <!-- フッターをインクルード -->
</body>
</html>