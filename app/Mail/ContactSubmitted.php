<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * メッセージのインスタンスを新規作成
     *
     * @param array $data メールで使用するデータ
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data; // データをプロパティに保存
    }

    /**
     * メッセージの封筒情報を取得
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'お問い合わせ内容が送信されました', // メールの件名
        );
    }

    /**
     * メッセージのコンテンツ定義を取得
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.contact_submitted', // メール本文のビュー
            with: ['data' => $this->data] // ビューに渡すデータ
        );
    }

    /**
     * メッセージに添付するファイルを取得
     *
     * @return array
     */
    public function attachments()
    {
        return []; // 添付ファイルがある場合はここで定義
    }
}