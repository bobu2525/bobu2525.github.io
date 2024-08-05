<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アクセス/会社情報 | やすらぎ供養</title>
    <link rel="stylesheet" href="css/style.css"> <!-- スタイルシートをリンク -->
</head>
<body>
@include('partials.header')

<main>
    <!-- パンくずリスト -->
    <nav class="breadcrumb">
        <ul>
            <li><a href="index.php">TOP</a></li>
            <li>アクセス/会社情報</li>
        </ul>
    </nav>

    <!-- 会社情報セクション -->
    <section class="company-info">
        <div class="container">
            <h2>アクセス/会社情報</h2>
            <div class="company-details">
                <p><strong>会社名:</strong> やすらぎ供養株式会社</p>
                <p><strong>住所:</strong> 1600 Pennsylvania Ave NW, Washington, DC 20500 </p>
                <p><strong>電話番号:</strong> 📞+1-202-456-1414</p>
                <p><strong>FAX:</strong> 075-2345-6789</p>
                <p><strong>メールアドレス:</strong> info@yasuragi.com</p>
            </div>

            <!-- 地図セクション -->
            <div class="map-container">
                <h3>地図</h3>
                <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3104.907093050364!2d-77.03787048465106!3d38.8976762795705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b7ba7ef9b53f%3A0x2a3b7243db13d065!2sThe%20White%20House!5e0!3m2!1sen!2sus!4v1625737321063!5m2!1sen!2sus"
          class="w-100" style="height: 50vh;" loading="lazy"></iframe>
               
            </div>

            <!-- 営業時間セクション -->
            <div class="business-hours">
                <h3>営業時間</h3>
                <p><strong>月曜日〜金曜日:</strong> 9:00 AM - 1:00 PM</p>
                <p><strong>土曜日:</strong> 9:00 AM - 11:00 AM</p>
                <p><strong>日曜日・祝日:</strong> 休業</p>
            </div>
        </div>
    </section>
</main>

@include('partials.footer')
</body>
</html>