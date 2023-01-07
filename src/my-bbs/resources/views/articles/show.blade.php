<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="padding: 60px">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a href="{{ route('article.list') }}" class="navbar-brand">My BBS</a>
    </nav>
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
</body>

</html>