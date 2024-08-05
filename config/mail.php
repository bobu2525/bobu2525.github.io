<?php

return [

    /*
    |--------------------------------------------------------------------------
    | デフォルトのメーラー
    |--------------------------------------------------------------------------
    |
    | このオプションは、アプリケーションによって送信されるすべてのメール
    | メッセージを送信するために使用されるデフォルトのメーラーを制御します。
    | 必要に応じて代替のメーラーを設定して使用できますが、このメーラーが
    | デフォルトで使用されます。
    |
    */

    'default' => env('MAIL_MAILER', 'smtp'),

    /*
    |--------------------------------------------------------------------------
    | メーラーの設定
    |--------------------------------------------------------------------------
    |
    | ここで、アプリケーションで使用されるすべてのメーラーとそれぞれの
    | 設定を構成できます。いくつかの例が設定されていますが、アプリケーション
    | に必要なものを自由に追加できます。
    |
    | Laravelは、メールの送信中に使用されるさまざまなメール「トランスポート」
    | ドライバーをサポートしています。以下で使用するトランスポートを指定
    | してください。必要に応じて追加のメーラーを自由に追加できます。
    |
    | サポートされているトランスポート: "smtp", "sendmail", "mailgun", "ses",
    | "postmark", "log", "array", "failover"
    |
    */

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'localhost'),
            'port' => env('MAIL_PORT', 1026),
            'encryption' => env('MAIL_ENCRYPTION', null),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'local_domain' => env('MAIL_EHLO_DOMAIN'),
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'mailgun' => [
            'transport' => 'mailgun',
        ],

        'postmark' => [
            'transport' => 'postmark',
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],

        'failover' => [
            'transport' => 'failover',
            'mailers' => [
                'smtp',
                'log',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | グローバル「From」アドレス
    |--------------------------------------------------------------------------
    |
    | アプリケーションによって送信されるすべてのメールが同じアドレスから
    | 送信されるようにしたい場合があります。ここで、アプリケーションによって
    | 送信されるすべてのメールに使用される名前とアドレスを指定できます。
    |
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

    /*
    |--------------------------------------------------------------------------
    | マークダウンメールの設定
    |--------------------------------------------------------------------------
    |
    | マークダウンベースのメールレンダリングを使用する場合は、テーマと
    | コンポーネントパスをここで設定できます。これにより、メールのデザインを
    | カスタマイズできます。または、単にLaravelのデフォルトを使用することも
    | できます！
    |
    */

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];