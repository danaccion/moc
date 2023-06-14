<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(2000)
            ->hasProfile(3, function( array $attributes, \App\Models\User $user) {
                return ['user_id' => $user->id];
            }
            )
        ->create();
    }
}
