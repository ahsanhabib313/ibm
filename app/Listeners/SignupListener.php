<?php

namespace App\Listeners;

use Twilio\Rest\Client;
use App\Events\SignupEvent;
use App\Mail\SignupNotification;
use App\SMS\SendSMS;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SignupListener
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
    public function handle(SignupEvent $event)
    {
        $signup = $event->signup;

        Mail::to($signup['email'])->send(new SignupNotification($signup));

        // SendSMS::sendMsg($signup['sms'], $signup['phone']);
    }
}
