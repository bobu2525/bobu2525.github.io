<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('email');
            $table->string('phone_number');
            $table->enum('response_method', ['電話', 'メール']);
            $table->year('cleaning_year');
            $table->tinyInteger('cleaning_month');
            $table->tinyInteger('cleaning_period');
            $table->foreignId('plan_id')->constrained('plans')->onDelete('cascade'); // 修正箇所
            $table->text('special_notes')->nullable();
            $table->integer('total_amount');
            $table->date('order_date');
            $table->date('work_date');
            $table->boolean('payment_status')->default(0);
            $table->boolean('execution_status')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}