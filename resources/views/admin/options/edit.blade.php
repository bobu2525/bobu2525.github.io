@extends('layouts.app')

@section('content')
<div class="container">
    <h1>オプション編集</h1>
    <form action="{{ route('admin.options.update', $option->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">名前</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $option->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">更新</button>
    </form>
</div>
@endsection