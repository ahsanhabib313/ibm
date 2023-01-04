<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Support\Str;
use App\CrudMachanism\ImageCustomize;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'id'            => $this->id,
            'title'         => $this->title,
            'user_id'       => $this->user_id,
            'user_name'       => $this->user->name??'',
            'slug'          => $this->slug,
            'image'         => $this->image,
            'feature_image' => $this->feature_image,
            'show_image'    => ImageCustomize::customize('post', $this->feature_image),
            'content'       => $this->content,
            'limit_content' => Str::limit($this->content, 100),
            'created_at'    => Carbon::parse($this->created_at)->format('M d, Y'),
        ];
    }
}
