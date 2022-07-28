<?php

namespace Tests\Feature;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactUsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_submit_contact_us(): void
    {
        $response = $this
            ->withHeader('Accept', 'application/json')
            ->post('/api/contacts', Contact::factory()->raw());

        $response
            ->assertCreated()
            ->assertJsonStructure(['data']);
    }
}
