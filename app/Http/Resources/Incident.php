<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Incident extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            "location" => [
            "latitude" => $this->latitude,
            "longitude" => $this->longitude,
            ],
            "title" => $this->title,
            "category" => $this->category_id,
            "people" => $this->people->map(function ($value) {
                return [
                'name' => $value->name,
                'type' => $value->type,
                ];
                }),
            "comments" => $this->comments,
            "incidentDate" => $this->incident_date,
            "createDate" => $this->create_date,
            "modifyDate" => $this->modify_date,
            ];
    }
}
