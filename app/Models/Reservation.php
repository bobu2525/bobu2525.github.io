<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    
    // シーダーで使用する全てのカラムを$fillableに追加
    protected $fillable = [
        'work_date',
        'cleaning_period',
        'max_capacity',
        'reserved_count',
        'cleaning_month',
        'cleaning_year',
    ];
}