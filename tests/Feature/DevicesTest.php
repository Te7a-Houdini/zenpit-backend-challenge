<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Device;

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

    public function test_update_device()
    {
        $device = factory(Device::class)->create();
 
        $this
        ->json(
            'PUT',
            '/api/devices/'.$device->id,
            array_merge($device->toArray(), [
                'name' => 'updated device name'
            ])
        )
        ->assertStatus(200)
        ->assertJson([
            'data' => ['name' => 'updated device name'],
        ]);
    }
}
