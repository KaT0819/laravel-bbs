<!DOCTYPE html>
<html>
<head>
    <title>create</title>
</head>
<body>
    <h1>新規投稿フォーム</h1>
    {{ Form::open(['route' => 'article.store']) }}
    <div class="form-group">
        {{ Form::label('title', 'タイトル:') }}
        {{ Form::text('title', null) }}
    </div>
    <div class="form-group">
        {{ Form::label('content', 'コンテンツ:') }}
        {{ Form::text('content', null) }}
    </div>
    <div class="form-group">
        {{ Form::submit('投稿する', ['class' => 'btn btn-primary']) }}
        <a href="{{ route('article.list') }}">一覧に戻る</a>
    </div>

    {{ Form::close() }}
</body>
</html>
