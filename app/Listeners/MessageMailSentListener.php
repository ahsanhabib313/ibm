<?php

namespace App\Listeners;

use App\Mail\MessageMail;
use App\Events\MessageMailSentEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageMailSentListener
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
    public function handle(MessageMailSentEvent $event)
    {
        $mail = $event->mail;
        Mail::to($mail['recipient'])->send(new MessageMail($mail));
    }
}
