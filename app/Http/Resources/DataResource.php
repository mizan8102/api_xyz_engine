<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'project_name'  => $this->stepone->project_name,
            'project_desc'  => $this->stepone->project_desc,
            'client'        => $this->stepone->client,
            'contractor'    => $this->stepone->contractor,
            'stepone_id'    => $this->stepone_id,
            'max_X'         => $this->max_X,
            'min_X'         => $this->min_X,
            'max_Y'         => $this->max_Y,
            'min_Y'         => $this->min_Y,
            'max_Z'         => $this->max_Z,
            'min_Z'         => $this->min_Z,
        ];
    }
}
