<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use App\CrudMachanism\ImageCustomize;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
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
            'id'                   => $this->id,
            'title'                => $this->title,
            'slug'                 => $this->slug,
            'total_unit'           => $this->total_unit,
            'course_category_id'   => $this->course_category_id,
            'course_category_name' => $this->courseCategory->name??'',
            'course_code'          => $this->course_code,
            'cricos_code'          => $this->cricos_code,
            'duration'             => $this->duration,
            'core_unit'            => $this->core_unit,
            'elective_unit'        => $this->elective_unit,
            'level'                => $this->level,
            'lectures'             => $this->lectures,
            'students'             => $this->students,
            'duration'             => $this->duration,
            'language'             => $this->language,
            'content'              => $this->content,
            'created_at'           => Carbon::parse($this->created_at)->format('M, d, Y'),
            'thumbnail'            => $this->thumbnail,
            'thumbnail_view'       => ImageCustomize::customize('course', $this->thumbnail),
        ];
    }
}
