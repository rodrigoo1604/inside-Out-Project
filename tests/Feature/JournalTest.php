<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Journal;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JournalTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_ListOffEntryCanBeRead()
    {
        $this->withoutExceptionHandling();

        Journal::all();

        $response = $this->get('/');

        $response->assertStatus(200)
                 ->assertViewIs('home');
    }
}
