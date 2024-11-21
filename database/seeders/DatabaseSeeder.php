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
            'entry' => 'Its my birthday !!!',
            'emotion' => 'img/emotions/joy.webp',
        ]);

        Journal::factory()->create([
            'entry' => 'I lost the bus',
            'emotion' => 'img/emotions/sadness.webp',
        ]);

        Journal::factory()->create([
            'entry' => 'I forgot to bring my lunch',
            'emotion' => 'img/emotions/anger.webp',
        ]);

        Journal::factory()->create([
            'entry' => 'The project is due tomorrow',
            'emotion' => 'img/emotions/anxiety.webp',
        ]);

        Journal::factory()->create([
            'entry' => 'I have nothing to do',
            'emotion' => 'img/emotions/boredom.webp',
        ]);

        Journal::factory()->create([
            'entry' => 'I have broccoli for lunch',
            'emotion' => 'img/emotions/disgust.webp',
        ]);

        Journal::factory()->create([
            'entry' => 'I peed my pants',
            'emotion' => 'img/emotions/embarrasment.webp',
        ]);

        Journal::factory()->create([
            'entry' => 'I would like that hairstyle',
            'emotion' => 'img/emotions/envy.webp',
        ]);

        Journal::factory()->create([
            'entry' => 'Why is that clown on my bedroom?',
            'emotion' => 'img/emotions/fear.webp',
        ]);

        Journal::factory()->create([
            'entry' => 'I miss my grandma',
            'emotion' => 'img/emotions/nostalgia.webp',
        ]);

        //Journal::factory(10)->create();
    }
}
