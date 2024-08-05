<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新しい墓清掃代行申し込み</title>
</head>
<body>

<p>清掃希望期間: {{ $cleaning_period }}</p>
<p>プラン: {{ $plan }}</p>
<p>オプション: {{ implode(', ', $options ?? []) }}</p>
<p>特記事項: {{ $special_notes }}</p>
<p>名前: {{ $name }}</p>
<p>メールアドレス: {{ $email }}</p>
<p>電話番号: {{ $phone }}</p>
<p>返信方法: {{ $response_method }}</p>
</body>
</html>