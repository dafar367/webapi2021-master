<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class courseResource extends JsonResource
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
            'course_code' => $this->course_code,
            'course_name'=> $this->course_name,
            'lecturer' => $this->lecturer,
            'number_sks' => $this->number_sks,
            'description' => $this->description
        ];
    }
}
