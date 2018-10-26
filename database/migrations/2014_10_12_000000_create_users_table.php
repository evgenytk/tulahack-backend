<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->text('avatar')->nullable();
            $table->bigInteger('phone')->unique();
            $table->integer('type');
            $table->integer('parent_id')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'first_name' => 'Петр',
            'last_name' => 'Слепаков',
            'phone' => '79000000001',
            'type' => 1,
            'password' => '$2a$04$pyEABsuWZEtl/d5QlA.0fuo3sSRyDGfynk1ijwkjUt/kgXniirHma' //secret
        ]);

        DB::table('users')->insert([
            'first_name' => 'Дмитрий',
            'last_name' => 'Дорохов',
            'phone' => '79000000002',
            'type' => 1,
            'password' => '$2a$04$pyEABsuWZEtl/d5QlA.0fuo3sSRyDGfynk1ijwkjUt/kgXniirHma' //secret
        ]);

        DB::table('users')->insert([
            'first_name' => 'Генадий',
            'last_name' => 'Шишелов',
            'phone' => '79000000003',
            'type' => 1,
            'password' => '$2a$04$pyEABsuWZEtl/d5QlA.0fuo3sSRyDGfynk1ijwkjUt/kgXniirHma' //secret
        ]);

        DB::table('users')->insert([
            'first_name' => 'Евгений',
            'last_name' => 'Васильев',
            'phone' => '79000000004',
            'type' => 1,
            'password' => '$2a$04$pyEABsuWZEtl/d5QlA.0fuo3sSRyDGfynk1ijwkjUt/kgXniirHma' //secret
        ]);

        DB::table('users')->insert([
            'first_name' => 'Сергей',
            'last_name' => 'Логинов',
            'phone' => '79000000005',
            'type' => 1,
            'parent_id' => 6,
            'password' => '$2a$04$pyEABsuWZEtl/d5QlA.0fuo3sSRyDGfynk1ijwkjUt/kgXniirHma' //secret
        ]);






        DB::table('users')->insert([
            'first_name' => 'Анна',
            'last_name' => 'Логинова',
            'phone' => '79000000006',
            'type' => 3,
            'password' => '$2a$04$pyEABsuWZEtl/d5QlA.0fuo3sSRyDGfynk1ijwkjUt/kgXniirHma' //secret
        ]);







        DB::table('users')->insert([
            'first_name' => 'Борис',
            'last_name' => 'Никифоров',
            'phone' => '79000000007',
            'type' => 2,
            'password' => '$2a$04$pyEABsuWZEtl/d5QlA.0fuo3sSRyDGfynk1ijwkjUt/kgXniirHma' //secret
        ]);

        DB::table('users')->insert([
            'first_name' => 'Аркадий',
            'last_name' => 'Носонов',
            'phone' => '79000000008',
            'type' => 2,
            'password' => '$2a$04$pyEABsuWZEtl/d5QlA.0fuo3sSRyDGfynk1ijwkjUt/kgXniirHma' //secret
        ]);

        DB::table('users')->insert([
            'first_name' => 'Никита',
            'last_name' => 'Прохоров',
            'phone' => '79000000009',
            'type' => 2,
            'password' => '$2a$04$pyEABsuWZEtl/d5QlA.0fuo3sSRyDGfynk1ijwkjUt/kgXniirHma' //secret
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
