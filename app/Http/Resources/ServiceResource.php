<?php

namespace App\Http\Resources;

use Illuminate\Support\Str;
use App\CrudMachanism\ImageCustomize;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
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
            'id'                    => $this->id,
            'name'                  => $this->name,
            'slug'                  => $this->slug,
            'price'                 => $this->price,
            'commission'            => $this->commission,
            'commission_percentage' => $this->commission_percentage,
            'details'               => Str::limit($this->details, 95, '...'),
            'single_page_details'   => $this->details,
            'single_page_image'     => $this->image,
            'image'                 => ImageCustomize::customize('service', $this->image),
            'edit_image'            => ImageCustomize::editImage('service',  $this->image),
            'desktop_icon'          => ImageCustomize::customize('service', $this->desktop_icon),
            'edit_desktop_icon'     => ImageCustomize::editImage('service',  $this->desktop_icon),
            'mobile_icon'           => ImageCustomize::customize('service', $this->mobile_icon),
            'edit_mobile_icon'      => ImageCustomize::editImage('service',  $this->mobile_icon),
            'user'                  => $this->user??''
        ];
    }
}
