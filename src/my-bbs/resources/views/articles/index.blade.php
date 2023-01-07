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

        <h1>Indexページ</h1>
        <p>{{ $messages['msg1'] }}</p>
        <p>{{ $messages['msg2'] }}</p>


        <h2 class="mb-3">記事一覧</h2>
        <div>
            <a href="{{ route('article.create') }}" class="btn btn-outline-primary mb-3">新規投稿</a>
        </div>
        <table class="table table-striped table-hover">
            @foreach ($articles as $item)
            <tr>
                <td>
                    <a href="{{ route('article.show', ['id' => $item->id]) }}">
                        {{ $item->title }}
                    </a>
                </td>
                <td>{{ $item->content }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>