<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries
        DB::table('users')->insert([
            'name' => 'Network Admin',
            'email' => 'network@admin.com',
            'role' => 'network admin',
            'password' => Hash::make('password'),
            'created_at' => date('Y-m-d')
        ]);
        DB::table('users')->insert([
            'name' => 'Super Admin',
            'email' => 'super@admin.com',
            'role' => 'super admin',
            'password' => Hash::make('password'),
            'created_at' => date('Y-m-d')
        ]);
        DB::table('users')->insert([
            'name' => 'Member',
            'email' => 'member@mail.com',
            'role' => 'member',
            'password' => Hash::make('password'),
            'created_at' => date('Y-m-d')
        ]);
    }
}
