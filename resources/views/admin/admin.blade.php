<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}"> <!-- スタイルシートのパスを指定 -->
</head>
<body>
    <div class="container">
        <header>
            <h1>管理者ダッシュボード</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('admin.dashboard') }}">ホーム</a></li>
                    <li><a href="{{ route('admin.reservations.index') }}">予約状況</a></li>
                    <li><a href="{{ route('admin.plans.index') }}">プラン編集</a></li>
                    <li><a href="{{ route('admin.options.index') }}">オプション項目編集</a></li>
                    <li><a href="{{ route('admin.sales.index') }}">売上管理</a></li>
                    <li><a href="{{ route('admin.emails.index') }}">メール配信</a></li>
                    <li><a href="{{ route('logout') }}" 
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           ログアウト</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <!-- メインコンテンツ -->
            <div class="content">
                <h2>管理者ページへようこそ</h2>
                <p>上のメニューから操作を選択しあがれ！！</p>
            </div>
        </main>
        @extends('layouts.app')

@section('content')
<div class="container">
    <h1>テンプレート一覧</h1>
    <ul>
        @foreach($templates as $template)
            <li>
                <a href="{{ route('admin.templates.edit', ['template' => $template->getFilenameWithoutExtension()]) }}">
                    {{ $template->getFilename() }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</body>
</html>