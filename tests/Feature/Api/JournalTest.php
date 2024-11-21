<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Journal;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JournalTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfReceiveAllEntryOfJournalInJsonFile()
    {
        $journal = Journal::factory(2)->create();

        $response = $this->get(route('apihome'));

        $response->assertStatus(200)
                 ->assertJsonCount(2);
    }

    public function test_CheckIfCanDeleteEntryInJournalWithApi()
    {
        $journal = Journal::factory(2)->create();

        $response = $this->delete(route('apidestroy', 1));
        $this->assertDatabaseCount('journals', 1);

        $response = $this->get(route('apihome'));

        $response->assertJsonCount(1);
    }

    public function test_CheckIfCanCreateNewEntryInJournalWithJsonFile()
    {
        $response = $this->post(route('apistore'), [
            'entry' => 'Hola mundo',
            'emotion' => 'Emocion de viva el mundo'
        ]);

        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
                ->assertJsonCount(1);
    }

    public function test_CheckIfCanUpdateEntryInJournalWithJsonFile()
    {
        $response = $this->post(route('apistore'), [
            'entry' => 'Hola mundo',
            'emotion' => 'Emocion de viva el mundo'
        ]);

        $data = ['entry' => 'Hola mundo'];
        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);

        $response = $this->put('/api/journals/1', [
            'entry' => 'Holi mundi',
            'emotion' => 'Emocion de no viva el mundo redondo'
        ]);

        $data = ['entry' => 'Holi mundi'];
        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);
    }
}
