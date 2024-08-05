<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * 会員ダッシュボードを表示する
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('member.dashboard'); // 会員ダッシュボードのビューを返す
    }
}