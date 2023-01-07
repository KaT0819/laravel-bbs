<form method="GET" action="{{ route('article.list') }}" accept-charset="UTF-8">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="keyword">キーワード</label>
        <input class="form-control" name="keyword" type="text" id="keyword" value="{{ $keyword }}">
    </div>
    <div class="form-group">
        <input class="btn btn-outline-primary" type="submit" value="検索">
        <a href="{{ route('article.list') }}">クリア</a>
    </div>
</form>
