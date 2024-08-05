<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactSubmission;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSubmitted;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // バリデーションの実施
        $validatedData = $request->validate([
            'inquiry_type' => 'required|string',
            'message' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'response_method' => 'required|string'
        ]);

        // データベースに保存
        ContactSubmission::create($validatedData);

        // メールの送信
        Mail::to($validatedData['email'])->send(new ContactSubmitted($validatedData));

        // サンキューページにリダイレクト
        return redirect('/thank-you');
    }
}