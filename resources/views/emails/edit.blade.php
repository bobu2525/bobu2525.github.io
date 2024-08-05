@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $template }} テンプレート編集</h1>
    <form action="{{ route('admin.templates.update', ['template' => $template]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="content">コンテンツ</label>
            <textarea name="content" id="content" class="form-control" rows="20">{{ old('content', $content) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">更新</button>
    </form>
</div>
@endsection