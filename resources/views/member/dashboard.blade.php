<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/member.css') }}"> <!-- スタイルシートのパスを指定 -->
</head>
<body>
    <div class="container">
    <header>
    <h1>会員ダッシュボード</h1>
    <nav>
        <ul>
            <li><a href="{{ route('member.dashboard') }}">ホーム</a></li>
            <li><a href="{{ route('profile.index') }}">プロフィール</a></li>
            <li><a href="{{ route('reservations.index') }}">予約</a></li>
            <li><a href="{{ route('payments.index') }}">支払い</a></li>
            <li><a href="{{ route('logout') }}" 
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                   ログアウト</a></li>
        </ul>
    </nav>
</header>

        <main>
            <div class="content">
                <h2>ようこそ、会員ページへ</h2>
                <p>メニューから操作を選択してください。</p>
            </div>
        </main>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</body>
</html>