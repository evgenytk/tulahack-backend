<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        DB::table('lessons')->insert([
            'user_id' => 7,
            'title' => 'Web разработка',
            'description' => 'Обучение современной веб разработке'
        ]);

        DB::table('lessons')->insert([
            'user_id' => 8,
            'title' => 'Desktop разработка',
            'description' => 'Обучение разработке под ПО для настольных компьютеров'
        ]);

        DB::table('lessons')->insert([
            'user_id' => 9,
            'title' => 'Mobile разработка',
            'description' => 'Обучение разработке под мобильные устройства iOS и Android'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
