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
            'title' => 'Admin'
        ]);

        DB::table('roles')->insert([
            'title' => 'User'
        ]);

        DB::table('users')->insert([
            'name' => "user",
            'email' => 'user'.'@gmail.com',
            'password' =>Hash::make('password'),
//            'institution_id' => '2',
            'email_verified_at' => now(),
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' =>'admin'.'@gmail.com',
            'password' =>Hash::make('password'),
//            'institution_id' => '1',
            'email_verified_at' => now(),
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);
        DB::table('role_user')->insert([
            'user_id'=>1,
            'role_id'=>2,
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);
    DB::table('role_user')->insert([
            'user_id'=>2,
            'role_id'=>1,
            'created_at'=>	now(),
            'updated_at'=>now(),
        ]);
    }
}
