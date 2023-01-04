<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'id'             => $this->id,
            'order_code'     => $this->order_code,
            'booking_id'     => $this->booking_id,
            'schedule_time'  => Carbon::parse($this->booking->schedule_time)->format('g: i a'),
            'schedule_date'  => Carbon::parse($this->booking->schedule_date)->format('m-d-y'),
            'booking'        => $this->booking??'',
            'service'        => $this->booking->service??'',
            'booking_user'   => $this->booking->user??'',
            'customer_name'  => $this->booking->user->name??'',
            'user_id'        => $this->user_id,
            'user'           => $this->user??'',
            'provider_name'  => $this->user->name??'',
            'amount'         => $this->amount,
            'due'            => $this->due,
            'deduction'      => $this->deduction,
            'total_amount'   => $this->total_amount,
            'transaction_id' => $this->transaction_id,
            'status'   => $this->order_status,
            'payment_type' => $this->payment_type,
            'payment_status' => $this->payment_status,
            'is_company_payment' => $this->is_company_payment,
            'payment_creation' => $this->paypalPaymentCreation??'',

        ];
    }
}
