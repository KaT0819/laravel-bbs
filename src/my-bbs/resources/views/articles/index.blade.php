@extends('layout.main')

@section('content')
<div class="container">
    <h1>Indexページ</h1>
    <h2 class="mb-3">記事一覧</h2>
    <p>{{ $messages['msg1'] }}</p>
    <p>{{ $messages['msg2'] }}</p>
    @include('articles.search')

    <p />
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
@endsection
