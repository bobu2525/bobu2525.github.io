<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $table = 'options'; // テーブル名を明示的に指定

    protected $fillable = ['option_name', 'option_price'];
}