<?php

namespace App\Providers;

use App\Events\AuthEvent;
use App\Events\BookingMailEvent;
use App\Events\CertificateEvent;
use App\Events\MessageMailSentEvent;
use App\Events\SendMailEvent;
use App\Events\SendMailSMSEvent;
use App\Events\SignupEvent;
use App\Listeners\OrderListener;
use App\Listeners\BookingListener;
use App\Listeners\BookingMailListener;
use App\Listeners\CertificateListener;
use App\Listeners\MessageMailSentListener;
use App\Listeners\SendMailListener;
use App\Listeners\SendMailSMSListener;
use App\Listeners\SignupListener;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        SignupEvent::class => [

            SignupListener::class
        ],

        AuthEvent::class =>[

            BookingListener::class,
            OrderListener::class,
        ],

        SendMailSMSEvent::class => [
            SendMailSMSListener::class,
        ],

        BookingMailEvent::class => [
            BookingMailListener::class,
        ],

        SendMailEvent::class =>[
            SendMailListener::class,
        ],

        MessageMailSentEvent::class =>[
            
            MessageMailSentListener::class,
        ],

        CertificateEvent::class =>[
            
            CertificateListener::class,
            
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
