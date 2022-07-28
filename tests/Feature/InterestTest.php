<?php

namespace Tests\Feature;

use App\Models\Contact;
use App\Models\Interest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InterestTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_indicate_interest(): void
    {
        $this->withoutExceptionHandling();
        $response = $this
            ->withHeader('Accept', 'application/json')
            ->post('/api/interests', Interest::factory()->raw());

        $response
            ->assertCreated()
            ->assertJsonStructure(['data']);
    }
}
