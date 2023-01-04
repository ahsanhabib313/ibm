<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $service = $this->service;
        $status = $this->booking_status == 0?"badg bg-danger":"badge bg-success";
        $status_message = $this->booking_status == 0?"Not Accept":"Accepted";
        return [
            'id'             => $this->id,
            'user_id'        => $this->user_id,
            'order'        => $this->order??'',
            'assign_to'      => $this->order->user->name??'',
            'user'           => $this->user??'',
            'user_name'      => $this->user->name,
            'service_id'     => $this->service_id,
            'service'     => $this->service??'',
            'service'        => $this->service,
            'service_name'   => $this->service->name,
            'booking_status' => "<span class='{$status}'>{$status_message}</span>",
            'schedule_date'  => Carbon::parse($this->schedule_date)->format('d-m-y'),
            'schedule_time'  => Carbon::parse($this->schedule_time)->format('g: i a'),
        ];
    }
}
