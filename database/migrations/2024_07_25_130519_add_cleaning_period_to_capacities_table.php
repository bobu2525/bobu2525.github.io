<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCleaningPeriodToCapacitiesTable extends Migration
{
    public function up()
    {
        Schema::table('capacities', function (Blueprint $table) {
            $table->tinyInteger('cleaning_period')->after('work_date'); // 'work_date' の後に追加する場合
        });
    }

    public function down()
    {
        Schema::table('capacities', function (Blueprint $table) {
            $table->dropColumn('cleaning_period');
        });
    }
}
