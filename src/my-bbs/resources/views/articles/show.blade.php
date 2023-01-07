@extends('layout.main')

@section('content')
<div class="container">
    <h1>記事詳細ページ</h1>

    <p>ID: {{ $article->id }}</p>
    <p>タイトル: {{ $article->title }}</p>
    <p>内容: {{ $article->content }}</p>

    <p></p>
    <p>
        <a href="{{ route('article.list') }}" class="btn btn-outline-primary">一覧へ戻る</a>
        <a href="{{ route('article.edit', ['id' => $article->id]) }}" class="btn btn-outline-primary">編集</a>
    </p>

    <div>
        {!! Form::open(['method' => 'delete', 'route' => ['article.destroy', $article->id]]) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-outline-secondary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection