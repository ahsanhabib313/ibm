<?php

namespace App\Listeners;

use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Service;
use App\Events\BookingMailEvent;
use App\Events\SendMailSMSEvent;
use App\Mail\SendMailToCustomer;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentNotification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class BookingMailListener
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
    public function handle(BookingMailEvent $event)
    {
        $request = $event->bookingData;        
        $providerUser =  User::find($request->provider_id);
        $userData['service_provider_name'] = $providerUser->name;
        $userData['customer_name'] = Auth::user()->name;
        $userData['service_name'] = Service::find($request->service_id)->name;       
        $userData['service_price'] = $request->price;
        $userData['schedule_date'] = Carbon::parse($request->schedule_date)->format('y-m-d');
        $userData['schedule_time'] = $request->schedule_time;

        // SMS and Mail sent to customer

        if(Auth::user()->user_type == 3){

            
            $userData['phone'] = Auth::user()->phone;
            $userData['email'] = Auth::user()->email;
            $userData['sms'] = " Congratulations! Your appointment has been booked. A service provider will contact you soon!";
            $userData['message'] = " Congratulations! Your appointment has been booked. A service provider will contact you soon!";
            event(new SendMailSMSEvent($userData));

            Mail::to(Auth::user()->email)->send(new SendMailToCustomer($userData));
        
        }

        
        // SMS and Mail sent to service provider
        
        $userData['phone'] = $providerUser->phone;
        $userData['email'] = $providerUser->email;
        $userData['sms'] = Auth::user()->name. " took appointment just now on your service! Please visit your order list.";
        $userData['message'] = Auth::user()->name. " took appointment just now on your service! Please visit your order list.";
        Mail::to($providerUser->email)->send(new AppointmentNotification($userData));

    }
}
