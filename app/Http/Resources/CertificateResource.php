<?php

namespace App\Http\Resources;

use App\CrudMachanism\ImageCustomize;
use Illuminate\Http\Resources\Json\JsonResource;

class CertificateResource extends JsonResource
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
            'id'                 => $this->id,
            'user_id'            => $this->user_id,
            'user'               => $this->user??'',
            'course_id'          => $this->course_id,
            'course_name'        => $this->course->title??'',
            'certificate'        => $this->certificate,
            'certificate_view'   => ImageCustomize::editImage('certificate',  $this->certificate),
            'course_status'      => $this->course_status,
            'certificate_status' => $this->certificate_status,
        ];
    }
}
