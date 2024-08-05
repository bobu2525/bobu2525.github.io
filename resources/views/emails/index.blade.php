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