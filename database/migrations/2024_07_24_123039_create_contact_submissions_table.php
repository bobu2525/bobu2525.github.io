<?php

// database/migrations/xxxx_xx_xx_create_contact_submissions_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactSubmissionsTable extends Migration
{
    public function up()
    {
        // contact_submissions テーブルを作成
        Schema::create('contact_submissions', function (Blueprint $table) {
            $table->id(); // 自動増分ID
            $table->string('inquiry_type'); // お問い合わせ内容
            $table->text('message'); // メッセージ内容
            $table->string('name'); // お名前
            $table->string('email'); // メールアドレス
            $table->string('phone')->nullable(); // 電話番号 (任意)
            $table->string('response_method'); // 返信方法
            $table->timestamps(); // 作成日時と更新日時
        });
    }

    public function down()
    {
        // contact_submissions テーブルを削除
        Schema::dropIfExists('contact_submissions');
    }
}