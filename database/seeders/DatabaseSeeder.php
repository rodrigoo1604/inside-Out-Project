<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Journal;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //User::factory()->create([
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
        //]);
        
        Journal::factory(10)->create([
            'entry' => 'Hoy es mi cum !!!',
            'emotion' => 'img/emotions/alegria.jpg',
        ]);

        //Journal::factory(10)->create();
    }
}
