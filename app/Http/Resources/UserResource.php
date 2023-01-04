<?php

namespace App\Http\Resources;

use App\CrudMachanism\ImageCustomize;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name'               => $this->name,
            'user_type'          => $this->user_type,
            'is_online'          => $this->is_online,
            'email'              => $this->email,
            'phone'              => $this->phone,
            'about'              => $this->about,
            'address'            => $this->address,
            'password'           => $this->password,
            'course_id'          => $this->course_id,
            'course_name'        => $this->course->title??'',
            'course_enroll_type' => $this->course_enroll_type == 1? 'Online':($this->course_enroll_type == 2 ? 'Offline':($this->course_enroll_type == 3? 'None of them':'')),
            'certified_by'       => $this->certified_by == 1? 'RPL':($this->certified_by == 2?'Course':''),
            'country_state'      => $this->country_state,
            'agent_type'         => $this->agent_type == 1? 'Individual':($this->agent_type == 2?'Organization':''),
            'photo'              => $this->photo,
            'view_photo'         => ImageCustomize::customize('user', $this->photo),
            'edit_photo'         => ImageCustomize::editImage('user',  $this->photo),
        ];
    }
}
