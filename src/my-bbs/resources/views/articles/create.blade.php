<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="padding: 60px">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a href="{{ route('article.list') }}" class="navbar-brand">My BBS</a>
    </nav>
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
</body>

</html>