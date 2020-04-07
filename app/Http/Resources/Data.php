<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Data extends JsonResource
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
            'pregnent_count' => $this->pregnent_count,
            'newborncount_count' => $this->newborn_count,
            'family_count' => $this->family_count,
            'family members' => $this->information
        ];
    }
}
