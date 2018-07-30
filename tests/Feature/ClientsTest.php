<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Client;
use App\Http\Resources\ClientResource;
use App\Http\Resources\ClientsResource;

class ClientsTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();

        $this->clients = factory(Client::class, 3)->create();
    }
    
    /** @test */
    public function can_view_clients()
    {
        $this
            ->get('/api/clients')
            ->assertResource(new ClientsResource($this->clients));
    }

    /** @test */
    public function can_view_a_client()
    {
        $client = $this->clients->first();
        
        $this
            ->get('/api/clients/' . $client->id)
            ->assertResource(new ClientResource($client));
    }

    /** @test */
    public function can_create_a_client()
    {
        $client = [
            'name' => 'Test Client',
            'telephone' => '123123123',
            'address' => 'Test Address, Town, City, TE5 5ST',
        ];

        $this
            ->post('/api/clients', $client)
            ->assertStatus(201)
            ->assertJsonFragment($client);
    }
}
