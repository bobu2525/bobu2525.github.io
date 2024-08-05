<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EmailController extends Controller
{
    // テンプレートの一覧表示
    public function index()
    {
        // テンプレートファイルのリストを取得
        $templates = File::files(resource_path('views/emails'));
        return view('admin.emails.index', compact('templates'));
    }

    // テンプレートの編集ページ表示
    public function edit($template)
    {
        $path = resource_path("views/emails/{$template}.blade.php");
        if (!File::exists($path)) {
            abort(404);
        }
        
        $content = File::get($path);
        return view('admin.emails.edit', compact('template', 'content'));
    }

    // テンプレートの更新
    public function update(Request $request, $template)
    {
        $path = resource_path("views/emails/{$template}.blade.php");
        if (!File::exists($path)) {
            abort(404);
        }

        // テンプレートの内容を更新
        File::put($path, $request->input('content'));
        return redirect()->route('admin.templates.index')->with('success', 'テンプレートが更新されました。');
    }
}





