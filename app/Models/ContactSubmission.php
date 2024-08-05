<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    use HasFactory;

    /**
     * 一括代入可能な属性
     *
     * @var array
     */
    protected $fillable = [
        'inquiry_type',
        'message',
        'name',
        'email',
        'phone',
        'response_method',
    ];
}