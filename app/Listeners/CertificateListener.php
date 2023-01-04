<?php

namespace App\Listeners;

use App\Events\CertificateEvent;
use App\Models\Certificate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CertificateListener
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
    public function handle(CertificateEvent $event)
    {
        $certificate = $event->certificate;

        Certificate::create([
            'user_id'            => $certificate->id,
            'course_id'          => $certificate->course_id,
        ]);
    }
}
