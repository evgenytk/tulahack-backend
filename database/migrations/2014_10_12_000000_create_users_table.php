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
            'avatar' => 'http://tester1.evgenytk.ru/avatar-1.png',
            'phone' => '79000000001',
            'type' => 1,
            'password' => \Hash::make('secret'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'first_name' => 'Дмитрий',
            'last_name' => 'Дорохов',
            'avatar' => 'http://tester1.evgenytk.ru/avatar-2.png',
            'phone' => '79000000002',
            'type' => 1,
            'password' => \Hash::make('secret'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'first_name' => 'Генадий',
            'last_name' => 'Шишелов',
            'avatar' => 'http://tester1.evgenytk.ru/avatar-3.png',
            'phone' => '79000000003',
            'type' => 1,
            'password' => \Hash::make('secret'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'first_name' => 'Евгений',
            'last_name' => 'Васильев',
            'avatar' => 'http://tester1.evgenytk.ru/avatar-4.png',
            'phone' => '79000000004',
            'type' => 1,
            'password' => \Hash::make('secret'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'first_name' => 'Сергей',
            'last_name' => 'Логинов',
            'avatar' => 'http://tester1.evgenytk.ru/avatar-5.png',
            'phone' => '79000000005',
            'type' => 1,
            'parent_id' => 14,
            'password' => \Hash::make('secret'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'first_name' => 'Алексей',
            'last_name' => 'Ротманов',
            'avatar' => 'http://tester1.evgenytk.ru/avatar-6.png',
            'phone' => '79000000006',
            'type' => 1,
            'password' => \Hash::make('secret'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'first_name' => 'Борис',
            'last_name' => 'Метельников',
            'avatar' => 'http://tester1.evgenytk.ru/avatar-7.png',
            'phone' => '79000000007',
            'type' => 1,
            'password' => \Hash::make('secret'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'first_name' => 'Максим',
            'last_name' => 'Матвеев',
            'avatar' => 'http://tester1.evgenytk.ru/avatar-8.png',
            'phone' => '79000000008',
            'type' => 1,
            'password' => \Hash::make('secret'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'first_name' => 'Артем',
            'last_name' => 'Широков',
            'avatar' => 'http://tester1.evgenytk.ru/avatar-9.png',
            'phone' => '79000000009',
            'type' => 1,
            'password' => \Hash::make('secret'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'first_name' => 'Олег',
            'last_name' => 'Зеленцов',
            'avatar' => 'http://tester1.evgenytk.ru/avatar-10.png',
            'phone' => '79000000010',
            'type' => 1,
            'password' => \Hash::make('secret'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);








        DB::table('users')->insert([
            'first_name' => 'Борис',
            'last_name' => 'Никифоров',
            'avatar' => 'http://tester1.evgenytk.ru/avatar-11.png',
            'phone' => '79000000012',
            'type' => 2,
            'password' => \Hash::make('secret'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'first_name' => 'Аркадий',
            'last_name' => 'Носонов',
            'avatar' => 'http://tester1.evgenytk.ru/avatar-12.png',
            'phone' => '79000000013',
            'type' => 2,
            'password' => \Hash::make('secret'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'first_name' => 'Никита',
            'last_name' => 'Прохоров',
            'phone' => '79000000014',
            'type' => 2,
            'password' => \Hash::make('secret'),
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);







        DB::table('users')->insert([
            'first_name' => 'Анна',
            'last_name' => 'Логинова',
            'phone' => '79000000011',
            'type' => 3,
            'password' => \Hash::make('secret'),
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
        Schema::dropIfExists('users');
    }
}
