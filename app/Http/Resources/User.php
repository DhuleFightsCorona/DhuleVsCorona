<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Data as DataResource;


class User extends JsonResource
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
            'family_info' => new DataResource($this->data),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
