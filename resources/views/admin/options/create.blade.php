@extends('layouts.app')

@section('content')
<div class="container">
    <h1>オプション作成</h1>
    <form action="{{ route('admin.options.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">名前</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">作成</button>
    </form>
</div>
@endsection