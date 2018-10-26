<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lesson_id');
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->timestamps();
        });

        DB::table('schedules')->insert([
            'lesson_id' => 1,
            'start_date' => '2018-10-28 14:00',
            'end_date' => '2018-10-28 14:55'
        ]);

        DB::table('schedules')->insert([
            'lesson_id' => 1,
            'start_date' => '2018-10-28 15:00',
            'end_date' => '2018-10-28 15:55'
        ]);

        DB::table('schedules')->insert([
            'lesson_id' => 1,
            'start_date' => '2018-10-28 16:00',
            'end_date' => '2018-10-28 16:55'
        ]);

        DB::table('schedules')->insert([
            'lesson_id' => 2,
            'start_date' => '2018-10-28 10:00',
            'end_date' => '2018-10-28 10:55'
        ]);

        DB::table('schedules')->insert([
            'lesson_id' => 2,
            'start_date' => '2018-10-28 11:00',
            'end_date' => '2018-10-28 11:55'
        ]);

        DB::table('schedules')->insert([
            'lesson_id' => 2,
            'start_date' => '2018-10-28 12:00',
            'end_date' => '2018-10-28 12:55'
        ]);

        DB::table('schedules')->insert([
            'lesson_id' => 3,
            'start_date' => '2018-10-29 10:00',
            'end_date' => '2018-10-29 10:55'
        ]);

        DB::table('schedules')->insert([
            'lesson_id' => 3,
            'start_date' => '2018-10-29 11:00',
            'end_date' => '2018-10-29 11:55'
        ]);

        DB::table('schedules')->insert([
            'lesson_id' => 3,
            'start_date' => '2018-10-29 12:00',
            'end_date' => '2018-10-29 12:55'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
