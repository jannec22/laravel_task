<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Car extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);

        // if we would like to skip some fields, or change keys
        // return [
        //     'id' => $this->id,
        //     'color' => $this->color,
        //     'brand' => $this->brand
        // ];
    }
}
