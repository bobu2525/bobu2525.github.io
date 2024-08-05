<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailTestController extends Controller
{
    public function sendTestMail()
    {
        $data = [
            'name' => 'Test User',
            'email' => 'test@example.com',
        ];

        Mail::send('emails.test', $data, function($message) use ($data) {
            $message->to('takadanobuyuki25@gmail.com')
                    ->subject('テストメール');
        });

        return 'メールが送信されました';
    }
}