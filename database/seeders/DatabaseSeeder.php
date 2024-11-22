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
        
        Journal::factory()->create([
            'entry' => 'Today we presented our project and after that we didnt do much, also after a long week oof doing the project and assignments I dont feel like doing anything',
            'emotion' => 'img/emotions/boredom.webp',
        ]);

        //Journal::factory(10)->create();
    }
}
