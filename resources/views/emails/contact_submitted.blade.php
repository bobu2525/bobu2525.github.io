<!DOCTYPE html>
<html>
<head>
    <title>お問い合わせ内容の確認</title>
</head>
<body>
    <h1>お問い合わせ内容</h1>
    <p>名前: {{ $data['name'] }}</p>
    <p>メール: {{ $data['email'] }}</p>
    <p>メッセージ: {{ $data['message'] }}</p>
</body>
</html>