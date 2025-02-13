<?php

namespace Database\Seeders;

use App\Models\Note;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'id' => 1,
             'name' => 'Test User',
             'email' => 'test@example.com',
             'password' => bcrypt('pass123.')
         ]);

         Note::factory(100)->create();
    }
}
