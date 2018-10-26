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
            $table->integer('teacher_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        DB::table('lessons')->insert([
            'teacher_id' => 11,
            'title' => 'Web разработка',
            'description' => 'Обучение современной веб разработке',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('lessons')->insert([
            'teacher_id' => 12,
            'title' => 'Desktop разработка',
            'description' => 'Обучение разработке под ПО для настольных компьютеров',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('lessons')->insert([
            'teacher_id' => 13,
            'title' => 'Mobile разработка',
            'description' => 'Обучение разработке под мобильные устройства iOS и Android',
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
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
