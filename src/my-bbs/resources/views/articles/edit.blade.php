@extends('layout.main')

@section('content')
<div class="container">

    <h1>記事編集フォーム</h1>
    {{ Form::model($article, ['method' => 'put', 'route' => ['article.update', $article->id]]) }}
    <div class="form-group">
        {{ Form::label('title', 'タイトル:', ['class' => 'form-label']) }}
        {{ Form::text('title', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('content', 'コンテンツ:', ['class' => 'form-label']) }}
        {{ Form::text('content', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group mt-3">
        {{ Form::submit('変更する', ['class' => 'btn btn-primary']) }}
        <a href="{{ route('article.show', ['id' => $article->id]) }}" class="btn btn-outline-secondary">詳細に戻る</a>
    </div>

    {{ Form::close() }}
</div>
@endsection