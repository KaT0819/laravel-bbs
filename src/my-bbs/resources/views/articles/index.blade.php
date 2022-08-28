<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Indexページ</h1>
    <p>{{ $messages['msg1'] }}</p>
    <p>{{ $messages['msg2'] }}</p>

    <h2>記事一覧</h2>
    @foreach ($articles as $item)
        <p>
            <a href="{{ route('article.show', ['id' => $item->id]) }}">
                {{ $item->content }}
            </a>
        </p>
    @endforeach
</body>
</html>
