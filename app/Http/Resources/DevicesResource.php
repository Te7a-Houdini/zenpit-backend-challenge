<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DevicesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'battery_status' => $this->battery_status,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString()
        ];
    }
}
