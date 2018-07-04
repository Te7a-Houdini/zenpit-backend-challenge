<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DevicesTest extends TestCase
{
    public function test_create_device()
    {
        $this
        ->json('POST', '/api/devices', [
            'name' => 'created test device',
            'battery_status' => 'full',
            'longitude' => '333',
            'latitude' => '4766'
        ])
        ->assertStatus(201)
        ->assertJson([
            'data' => ['name' => 'created test device'],
        ]);
    }
}
