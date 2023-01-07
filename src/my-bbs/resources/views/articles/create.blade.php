@extends('layout.main')

@section('content')
<div class="container">

    <h1>新規投稿フォーム</h1>
    {{ Form::open(['route' => 'article.store']) }}
    <div class="form-group">
        {{ Form::label('title', 'タイトル:', ['class' => 'form-label']) }}
        {{ Form::text('title', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('content', 'コンテンツ:', ['class' => 'form-label']) }}
        {{ Form::text('content', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group mt-3">
        {{ Form::submit('投稿する', ['class' => 'btn btn-primary']) }}
        <a href="{{ route('article.list') }}" class="btn btn-outline-secondary">一覧に戻る</a>
    </div>

    {{ Form::close() }}
</div>
@endsection