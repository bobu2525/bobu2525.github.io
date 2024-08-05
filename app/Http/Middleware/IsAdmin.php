<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // ユーザーが認証されていて、かつ管理者（roleがadmin）の場合のみ続行
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        // 認証されていないか管理者でない場合はリダイレクト
        return redirect('/'); // 管理者でない場合のリダイレクト先
    }
}