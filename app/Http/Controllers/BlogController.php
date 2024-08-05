<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    // ブログ一覧ページ
    public function index()
    {
        // ブログデータを取得してビューに渡す
        $blogs = [
            ['id' => 1, 'title' => '海洋散骨の新しいトレンド', 'summary' => '海洋散骨が近年人気を集めています。自然に還る散骨方法として注目されている理由について紹介します。', 'image' => 'img/keina.png'],
            ['id' => 2, 'title' => 'ペットの供養の方法', 'summary' => '愛するペットの供養について、適切な方法や最近のトレンドについて詳しく解説します。', 'image' => 'img/keina.png'],
            // 他のブログ記事も追加可能
        ];

        return view('blog.index', compact('blogs'));
    }

    // ブログ詳細ページ
    public function show($id)
    {
        // IDに基づいてブログデータを取得（サンプルデータ）
        $blog = [
            'title' => '海洋散骨の新しいトレンド',
            'content' => '海洋散骨が近年人気を集めています。自然に還る散骨方法として注目されている理由について紹介します。',
            'image' => 'img/keina.png'
        ];

        return view('blog.show', compact('blog'));
    }
}