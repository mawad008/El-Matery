<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RelatedNewsResource extends JsonResource
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
            'id'=>$this->id,
            'title'=>$this->title,
            'image'=>$this->main_image,
            'created_at'=>$this->created_at->toDateString(),
        ];
    }
}
