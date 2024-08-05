<?php

// app/Http/Controllers/Admin/ReservationController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation; // モデルのインポート
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        // すべての予約を取得
        $reservations = Reservation::all();
        return view('admin.reservations.index', compact('reservations'));
    }
}