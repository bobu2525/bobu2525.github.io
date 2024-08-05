<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class CalendarController extends Controller
{
    public function show()
    {
        $year = date('Y');
        $month = date('n');
        $capacities = Reservation::whereYear('work_date', $year)
                                ->whereMonth('work_date', $month)
                                ->get();

        return view('calendar', compact('year', 'month', 'capacities'));
    }
}