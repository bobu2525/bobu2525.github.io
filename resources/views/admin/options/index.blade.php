<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan Management</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}"> <!-- スタイルシートのパスを指定 -->
</head>
<body>
    <div class="container">
        <header>
            <h1>プラン管理</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('admin.dashboard') }}">ダッシュボード</a></li>
                    <li><a href="{{ route('admin.reservations.index') }}">予約管理</a></li>
                    <li><a href="{{ route('admin.plans.index') }}">プラン管理</a></li>
                    <li><a href="{{ route('admin.options.index') }}">オプション管理</a></li>
                    <li><a href="{{ route('admin.sales.index') }}">売上管理</a></li>
                    <li><a href="{{ route('admin.emails.index') }}">メール配信</a></li>
                    <li><a href="{{ route('logout') }}" 
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           ログアウト</a></li>
                </ul>
            </nav>
<div class="container">
    <h1>オプション一覧</h1>
    <p>これはデバッグメッセージです。</p>
    @if(isset($options) && $options->isNotEmpty())
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>名前</th>
                    <th>価格</th>
                    <th>説明</th>
                    <th>アクション</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($options as $option)
                    <tr>
                        <td>{{ $option->id }}</td>
                        <td>{{ $option->option_name }}</td>
                        <td>{{ $option->option_price }}</td>
                        <td>{{ $option->description ?? 'No description' }}</td> <!-- description が null の場合のデフォルト値を指定 -->
                        <td>
                            <a href="{{ route('admin.options.edit', $option->id) }}" class="btn btn-primary">編集</a>
                            <form action="{{ route('admin.options.destroy', $option->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">削除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No options available.</p>
    @endif
</div>
