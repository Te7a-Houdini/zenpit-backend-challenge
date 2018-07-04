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

    public function test_delete_device()
    {
        $device = factory(Device::class)->create();

        $this->json('DELETE', '/api/devices/' . $device->id)
            ->assertStatus(204);
    }

    public function test_listing_devices()
    {
        factory(Device::class)->create();

        factory(Device::class)->create();

        $this->json('GET', '/api/devices')
            ->assertStatus(200)
            ->assertJsonStructure([
                'data' =>
                [
                    '*' => [
                            'id' ,'name' , 'battery_status','longitude','latitude'
                        ]
                ] ,
            ]);
    }

    public function test_showing_single_device()
    {
        $device = factory(Device::class)->create();
        
        $this->json('GET', '/api/devices/' . $device->id)
            ->assertStatus(200)
            ->assertJson([
                'data' => [
                    'id' => $device->id,
                    'name' => $device->name,
                    'longitude' => $device->longitude,
                    'latitude' => $device->latitude
                ]
            ]);
    }
}
