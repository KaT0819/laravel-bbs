<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * 記事一覧表示.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $messages = array();
        $messages['msg1'] = 'いらっしゃいませ';
        $messages['msg2'] = '私のBBSへようこそ';
        $keyword = '';

        if ($request->filled('keyword')) {
            $keyword = $request->input('keyword');
            $articles = Article::where('title', 'like', "%{$keyword}%")->get();
        } else {
            $articles = Article::all();
        }

        // 配列での渡し方
        // return view('articles.index', ['viewMessages' => $messages]);
        // withを使用した渡し方
        // return view('articles.index')->with('viewMessages', $messages);
        // compactを使用した渡し方
        return view('articles.index', compact('messages', 'articles', 'keyword'));
    }

    /**
     * 記事投稿フォーム表示.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * 記事情報登録.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article();
        // カラムの値を設定
        $article->title = $request->title;
        $article->content = $request->content;
        // テーブルに登録
        $article->save();

        // 一覧ページへ遷移
        return redirect()->route('article.list');
    }

    /**
     * 記事詳細表示.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        // 特定のIDにマッチする記事を取得
        $article = Article::find($id);
        return view('articles.show', compact('article'));
    }

    /**
     * 記事編集フォーム表示.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        // 特定のIDにマッチする記事を取得
        $article = Article::find($id);
        // dd($article);
        return view('articles.edit', compact('article'));
    }

    /**
     * 記事情報更新.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Article $article)
    {
        // idにマッチする記事情報を取得
        $article = Article::find($id);

        // カラムの値を設定
        $article->title = $request->title;
        $article->content = $request->content;
        // データを更新
        $article->save();

        // 詳細ページにリダイレクト
        return redirect()->route('article.show', ['id' => $article->id]);
    }

    /**
     * 記事削除.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $article = Article::find($id);
        // データ削除
        $article->delete();

        // 一覧ページへ遷移
        return redirect()->route('article.list');
    }
}
