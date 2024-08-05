<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkCapacityTable extends Migration
{
    public function up()
    {
        Schema::create('work_capacity', function (Blueprint $table) {
            $table->id();
            $table->integer('max_capacity')->default(5);
            $table->integer('reserved_count')->default(0);
            $table->date('work_date');
            $table->year('cleaning_year');
            $table->tinyInteger('cleaning_month');
            $table->tinyInteger('cleaning_period');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('work_capacity');
    }
}