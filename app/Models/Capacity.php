<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacity extends Model
{
    use HasFactory;

    // 必要に応じてテーブル名、フィルタブルなプロパティなどを定義します
    protected $table = 'capacities'; // テーブル名が `capacities` の場合
    protected $fillable = ['work_date', 'max_capacity', 'reserved_count']; // 必要なカラムを列挙
}