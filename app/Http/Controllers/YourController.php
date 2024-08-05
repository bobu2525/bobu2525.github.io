<?php
namespace App\Http\Controllers;

use App\Models\Capacity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Email;
use Carbon\Carbon;

class YourController extends Controller
{
    public function showGraveCleaningApply($year = null, $month = null)
    {
        $year = $year ?? date('Y');
        $month = $month ?? date('n');
        $today = Carbon::today();
        $currentPeriod = $this->getPeriod($today->day);

        $periods = [
            '上旬' => 1,
            '中旬' => 2,
            '下旬' => 3,
        ];

        $capacities = [];

        foreach ($periods as $periodName => $periodValue) {
            $capacity = Capacity::whereYear('work_date', $year)
                                ->whereMonth('work_date', $month)
                                ->where('cleaning_period', $periodValue)
                                ->first();

            $periodEndDay = $this->getPeriodEndDay($periodValue);
            $periodEndDate = Carbon::createFromDate($year, $month, $periodEndDay);
            $isPastPeriod = $today->greaterThanOrEqualTo($periodEndDate);

            if ($capacity) {
                $availableSlots = $capacity->max_capacity - $capacity->reserved_count;
                $status = ($isPastPeriod) ? '受付終了' :
                          ($availableSlots > 0 ? '受付可能' : '満席');
            } else {
                $status = $isPastPeriod ? '受付終了' : '受付可能';
                $availableSlots = 0;
            }

            $capacities[] = (object)[
                'period' => $periodName,
                'status' => $status,
                'availableSlots' => $status === '受付終了' ? null : $availableSlots, // 受付終了時は枠数を非表示
            ];
        }

        $currentDate = Carbon::createFromDate($year, $month, 1);
        $previousMonth = $currentDate->copy()->subMonth();
        $nextMonth = $currentDate->copy()->addMonth();

        return view('grave-cleaning-apply', compact('year', 'month', 'capacities', 'previousMonth', 'nextMonth'));
    }

    private function getPeriod($day)
    {
        if ($day <= 10) return '上旬';
        if ($day <= 20) return '中旬';
        return '下旬';
    }

    private function getPeriodEndDay($period)
    {
        switch ($period) {
            case 1:
                return 10;
            case 2:
                return 20;
            case 3:
            default:
                return Carbon::now()->endOfMonth()->day;
        }
    }

    public function submitApplication(Request $request)
    {
        $validated = $request->validate([
            'cleaning_period' => 'required|string',
            'plan' => 'required|string',
            'options' => 'nullable|array',
            'special_notes' => 'nullable|string',
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'response_method' => 'required|string',
        ]);

        Mail::send('emails.application', $validated, function($message) use ($request) {
            $message->to('takadanobuyuki25@gmail.com')
                    ->subject('新しい墓清掃代行申し込み')
                    ->from($request->email, $request->name);
        });

        Email::create([
            'to' => 'takadanobuyuki25@gmail.com',
            'subject' => '新しい墓清掃代行申し込み',
            'body' => view('emails.application', $validated)->render(),
        ]);

        return redirect()->route('thankyou');
    }
}