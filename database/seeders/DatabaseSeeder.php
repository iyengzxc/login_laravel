<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'usersID'=>1,
            'name'=>'administrator',
            'username'=>'admin',
            'password'=>'hahahaha'
        ]);
        DB::table('users')->insert([
            'name'=>'staff',
            'username'=>'staff'
        ]);
        DB::table('password_reset_tokens')->insert([
            'email'=>'email','@gmail.com',
            'token'=>'toeken',
            'created_at'=>'spanish'
        ]);
    }
}
