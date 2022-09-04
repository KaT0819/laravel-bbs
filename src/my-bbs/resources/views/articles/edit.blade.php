<!DOCTYPE html>
<html>
<head>
    <title>create</title>
</head>
<body>
    <h1>記事編集フォーム</h1>
    {{ Form::model($article, ['method' => 'put', 'route' => ['article.update', $article->id]]) }}
    <div class="form-group">
        {{ Form::label('title', 'タイトル:') }}
        {{ Form::text('title', null) }}
    </div>
    <div class="form-group">
        {{ Form::label('content', 'コンテンツ:') }}
        {{ Form::text('content', null) }}
    </div>
    <div class="form-group">
        {{ Form::submit('変更する') }}
        <a href="{{ route('article.show', ['id' => $article->id]) }}">詳細に戻る</a>
    </div>

    {{ Form::close() }}
</body>
</html>
