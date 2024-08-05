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
        </header>

        <main>
            <h2>プラン一覧</h2>
            <a href="{{ route('admin.plans.create') }}">新規プラン作成</a>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>プラン名</th>
                        <th>価格</th>
                        <th>アクション</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($plans as $plan)
                        <tr>
                            <td>{{ $plan->id }}</td>
                            <td>{{ $plan->name }}</td>
                            <td>{{ $plan->price }}</td>
                            <td>
                                <a href="{{ route('admin.plans.edit', $plan->id) }}">編集</a>
                                <form action="{{ route('admin.plans.destroy', $plan->id) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">削除</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>
</html>