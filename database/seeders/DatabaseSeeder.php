<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('roles')->insert([
            'title' => 'Institution'
        ]);

        DB::table('roles')->insert([
            'title' => 'Student'
        ]);
        DB::table('institutions')->insert([
            'name' => "shaheen",
            'description' => 'abcd efg hij ',
            'status' => '1',
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);

        DB::table('institutions')->insert([
            'name' => "adamjee",
            'description' => 'asasdasdasda abcd efg hij ',
            'status' => '1',
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);

    DB::table('disciplines')->insert([
            'name' => "science",
            'status' => '1',
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);

    DB::table('disciplines')->insert([
            'name' => "commerce",
            'status' => '1',
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);

      DB::table('disciplines')->insert([
            'name' => "arts",
            'status' => '1',
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);

        DB::table('users')->insert([
            'name' => 'institution admin',
            'email' =>'institution'.'@gmail.com',
            'password' =>Hash::make('password'),
            'institution_id' => '1',
            'access' => '1',
            'email_verified_at' => now(),
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);
        DB::table('users')->insert([
            'name' => "student user",
            'email' => 'student'.'@gmail.com',
            'password' =>Hash::make('password'),
            'institution_id' => '2',
            'access' => '0',
            'email_verified_at' => now(),
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);
        DB::table('role_user')->insert([
            'user_id'=>1,
            'role_id'=>1,
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);
    DB::table('role_user')->insert([
            'user_id'=>2,
            'role_id'=>2,
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);
    }
}
