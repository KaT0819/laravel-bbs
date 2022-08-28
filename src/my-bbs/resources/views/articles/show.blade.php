<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>記事詳細ページ</h1>

    <p>ID: {{ $article->id }}</p>
    <p>内容: {{ $article->content }}</p>

    <p></p>
    <p><a href="{{ route('article.list') }}">一覧へ戻る</a></p>
</body>

</html>
