<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function index()
    {
        // データ取得
        $options = Option::all();
        
        // デバッグ用: データが取得できているか確認
        // dd($options);

        // ビューにデータを渡す
        return view('admin.options.index', compact('options'));
    }

    public function create()
    {
        return view('admin.options.create'); // オプション作成ページの表示
    }

    public function store(Request $request)
    {
        // バリデーションと保存処理
        $request->validate([
            'option_name' => 'required|string|max:255',
            'option_price' => 'required|numeric',
        ]);

        Option::create([
            'option_name' => $request->option_name,
            'option_price' => $request->option_price,
        ]);

        return redirect()->route('admin.options.index');
    }

    public function edit($id)
    {
        $option = Option::findOrFail($id); // 指定されたIDのオプションを取得
        return view('admin.options.edit', compact('option'));
    }

    public function update(Request $request, $id)
    {
        // 更新処理
        $request->validate([
            'option_name' => 'required|string|max:255',
            'option_price' => 'required|numeric',
        ]);

        $option = Option::findOrFail($id);
        $option->update([
            'option_name' => $request->option_name,
            'option_price' => $request->option_price,
        ]);

        return redirect()->route('admin.options.index');
    }

    public function destroy($id)
    {
        $option = Option::findOrFail($id);
        $option->delete();

        return redirect()->route('admin.options.index');
    }
}