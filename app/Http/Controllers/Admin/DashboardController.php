<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * 管理者ダッシュボードを表示する
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.admin');
    }
}