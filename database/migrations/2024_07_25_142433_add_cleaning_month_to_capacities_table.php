<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
         * @return void
     */
    public function up()
    {
        Schema::table('capacities', function (Blueprint $table) {
            $table->tinyInteger('cleaning_month')->nullable(); // 必要に応じてdefaultやnullableを設定
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('capacities', function (Blueprint $table) {
            $table->dropColumn('cleaning_month');
        });
    }
};