<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderOptionsTable extends Migration
{
    public function up()
    {
        Schema::create('order_options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders');
            $table->foreignId('option_id')->constrained('options');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_options');
    }
}