<?php

namespace App\Listeners;

use App\Events\CashPaymentSendMailEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CashPaymentSendMailListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(CashPaymentSendMailEvent $event)
    {
        $paymentMail = $event->cashPayment;

    }
}
