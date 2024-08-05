<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ | やすらぎ供養</title>
    <link rel="stylesheet" href="css/style.css"> <!-- スタイルシートをリンク -->
</head>

<body>
@include('partials.header')

    <main>
        <!-- パンくずリスト -->
        <nav class="breadcrumb">
            <ul>
                <li><a href="{{ url('/') }}">TOP</a></li>
                <li>お問い合わせ</li>
            </ul>
        </nav>
        
        <h2>お問い合わせ</h2>
        <p>ご質問やご相談は以下のフォームよりお気軽にお問い合わせください。</p>
        <!-- お問い合わせセクション -->
        <section class="contact">
            <div class="container">
                <form action="{{ route('contact.submit') }}" method="post">
                    @csrf <!-- CSRFトークンを生成 -->
                    <div class="contact-grid">
                        <div class="contact-option">
                            <p>お問い合わせ内容選択</p>
                            <label><input type="radio" name="inquiry_type" value="墓清掃代行"> 墓清掃代行</label><br>
                            <label><input type="radio" name="inquiry_type" value="墓清掃代行カスタム"> 墓清掃代行カスタム</label><br>
                            <label><input type="radio" name="inquiry_type" value="墓清掃定期プラン"> 墓清掃定期プラン</label><br>
                            <label><input type="radio" name="inquiry_type" value="墓清掃定期カスタム"> 墓清掃定期カスタム</label><br>
                            <label><input type="radio" name="inquiry_type" value="その他"> その他</label>
                            <input type="text" name="other_inquiry" placeholder="その他内容">
                        </div>
                        <div class="contact-detail">
                            <p>お問い合わせ内容</p>
                            <textarea name="message" rows="5" required></textarea>
                        </div>
                        <div class="contact-info">
                            <label for="name">お名前 <span class="required">必須</span></label>
                            <input type="text" name="name" id="name" required>
                            <label for="email">メールアドレス <span class="required">必須</span></label>
                            <input type="email" name="email" id="email" required>
                            <label for="phone">電話番号</label>
                            <input type="tel" name="phone" id="phone">
                        </div>
                        <div class="contact-method">
                            <label for="response_method">返信方法を選択</label>
                            <select name="response_method" id="response_method">
                                <option value="メール">メール</option>
                                <option value="電話">電話</option>
                            </select>
                        </div>
                    </div>
                    <div class="submit-btn">
                        <button type="submit">送信する</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    @include('partials.footer')
</body>

</html>