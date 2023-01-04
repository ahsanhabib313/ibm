<?php

namespace App\Listeners;

use App\SMS\SendSMS;
use Twilio\Rest\Client;
use App\Events\SendMailSMSEvent;
use App\Mail\SendMailToCustomer;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentNotification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailSMSListener
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
    public function handle(SendMailSMSEvent $event)
    {
        $data = $event->info;



        // SendSMS::sendMsg($data['sms'], $data['phone']);

    }
}
