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
    public function index()
    {
        $messages = array();
        $messages['msg1'] = 'いらっしゃいませ';
        $messages['msg2'] = '私のBBSへようこそ';

        $articles = Article::all();

        // 配列での渡し方
        // return view('articles.index', ['viewMessages' => $messages]);
        // withを使用した渡し方
        // return view('articles.index')->with('viewMessages', $messages);
        // compactを使用した渡し方
        return view('articles.index', compact('messages', 'articles'));
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
