<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WalletResource extends JsonResource
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
            'id'              => $this->id,
            'user_id'         => $this->user_id,
            'order_id'        => $this->order_id,
            'payment_by'      => $this->order->user->name??'',
            'payment_from'    => $this->order->booking->user->name??'',
            'purpose'         => $this->purpose,
            'amount'          => $this->amount,
            'currency_symbol' => $this->currency_symbol,
            'currency'        => $this->currency,
            'country_name'    => $this->country_name,
        ];
    }
}
