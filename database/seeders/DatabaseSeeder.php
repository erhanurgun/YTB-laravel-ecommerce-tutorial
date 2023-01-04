<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory()->create([
            'name' => 'Erhan ÜRGÜN',
            'email' => 'urgun.js@gmail.com',
            'password' => bcrypt('071109014'),
            'role_as' => true,
        ]);
    }
}
