<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;

class DoctorResourceController extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'fullname' =>  [
                'f_name' => $this->name,
                'l_name' => $this->name
            ],
            'phone' => $this->phone,

            'phones' =>  array(
                1  => 'box_name_1',
                2 => 'box_name_2',
                3 => 'box_name_3'
            ),
        ];
    }
}
