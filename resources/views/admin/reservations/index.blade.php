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
    <h1>Reservation List</h1>
    @if($reservations->isNotEmpty())
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Work Date</th>
                    <th>Cleaning Period</th>
                    <th>Max Capacity</th>
                    <th>Reserved Count</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Cleaning Month</th>
                    <th>Cleaning Year</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->id }}</td>
                        <td>{{ $reservation->work_date }}</td>
                        <td>{{ $reservation->cleaning_period }}</td>
                        <td>{{ $reservation->max_capacity }}</td>
                        <td>{{ $reservation->reserved_count }}</td>
                        <td>{{ $reservation->created_at }}</td>
                        <td>{{ $reservation->updated_at }}</td>
                        <td>{{ $reservation->cleaning_month }}</td>
                        <td>{{ $reservation->cleaning_year }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No reservations available.</p>
    @endif
</div>
