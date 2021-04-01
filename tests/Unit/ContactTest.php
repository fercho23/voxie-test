<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Contact List
     *
     * @return void
     */
    public function testContactList()
    {
        $response = $this->getJson('/api/contacts/');
        // $response = $this->postJson('/contacts', ['name' => 'Test', 'email' => 'email@gmail.com']);
        // $response = $this->json('POST', '/api/contacts', ['name' => 'Test', 'email' => 'email@♠gmail.com']);

        $response->assertStatus(200);
    }

    /**
     * Create contact
     *
     * @return void
     */
    public function testCreateContact()
    {
        $response = $this->postJson('/api/contacts', ['name' => 'Test', 'email' => 'email@gmail.com']);
        // $response = $this->postJson('/contacts', ['name' => 'Test', 'email' => 'email@gmail.com']);
        // $response = $this->json('POST', '/api/contacts', ['name' => 'Test', 'email' => 'email@♠gmail.com']);

        $response->assertStatus(200);
    }
}
