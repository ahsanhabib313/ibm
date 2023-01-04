<?php

namespace App\Http\Resources;

use App\CrudMachanism\ImageCustomize;
use Illuminate\Http\Resources\Json\JsonResource;

class GalleryResource extends JsonResource
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
            'id'         => $this->id,
            'image'      => $this->image,
            'show_image' => ImageCustomize::customize('gallery', $this->image),
            'edit_image' => ImageCustomize::editImage('gallery', $this->image),
        ];
    }
}
