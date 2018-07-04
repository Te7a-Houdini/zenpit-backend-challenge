<?php

use Illuminate\Database\Seeder;
use App\Device;

class DevicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(0,10) as $value)
        {
            factory(Device::class)->create();
        }
    }
}
