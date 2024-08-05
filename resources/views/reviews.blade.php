<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お客様の声 | やすらぎ供養</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- スタイルシートをリンク -->
</head>
<body>
@include('partials.header') <!-- 正しいパスを使用 -->

<main>
    <!-- パンくずリスト -->
    <nav class="breadcrumb">
        <ul>
            <li><a href="{{ url('/') }}">TOP</a></li>
            <li>お客様の声</li>
        </ul>
    </nav>

    <!-- お客様の声セクション -->
    <section class="reviews">
        <div class="container">
            <h2>お客様の声</h2>
            <div class="reviews-grid">
                <div class="review-item">
                    <img class="review-image" src="{{ asset('img/keina.png') }}" alt="顧客の写真">
                    <div class="review-content">
                        <p class="stars">★★★★★</p>
                        <p class="review-text">山田 太郎様 墓清掃代行プラン</p>
                        <p class="review-comment">とても満足しています。丁寧な清掃と親切な対応に感謝しています。また利用したいと思います。</p>
                        <p class="review-quote">「やすらぎ供養のおかげで、お墓が綺麗に保たれて安心しました。」</p>
                    </div>
                </div>
                <div class="review-item">
                    <img class="review-image" src="{{ asset('img/keina.png') }}" alt="顧客の写真">
                    <div class="review-content">
                        <p class="stars">★★★★☆</p>
                        <p class="review-text">鈴木 花子様 墓清掃定期プラン</p>
                        <p class="review-comment">定期的に利用していますが、いつも丁寧な対応で安心してお任せできます。写真付きの報告書も嬉しいです。</p>
                        <p class="review-quote">「定期プランでお墓の美観を保つことができています。ありがとうございます。」</p>
                    </div>
                </div>
                <!-- 追加のレビュー項目 -->
                <div class="review-item">
                    <img class="review-image" src="{{ asset('img/keina.png') }}" alt="顧客の写真">
                    <div class="review-content">
                        <p class="stars">★★★★☆</p>
                        <p class="review-text">佐藤 一郎様 ペット散骨サービス</p>
                        <p class="review-comment">愛犬の散骨をお願いしました。丁寧な説明と心遣いに感謝しています。家族全員が満足しています。</p>
                        <p class="review-quote">「ペットの思い出が自然の中に残るようで、とても感謝しています。」</p>
                    </div>
                </div>
                <div class="review-item">
                    <img class="review-image" src="{{ asset('img/keina.png') }}" alt="顧客の写真">
                    <div class="review-content">
                        <p class="stars">★★★★★</p>
                        <p class="review-text">高橋 美穂様 墓清掃代行プラン</p>
                        <p class="review-comment">スタッフの方の対応がとても良く、お墓の状態もいつも綺麗に保たれていて安心です。</p>
                        <p class="review-quote">「やすらぎ供養のおかげで、いつもお墓が綺麗に保たれていて感謝しています。」</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@include('partials.footer') <!-- 正しいパスを使用 -->
</body>
</html>