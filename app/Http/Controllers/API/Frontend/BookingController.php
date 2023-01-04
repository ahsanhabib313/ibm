<?php

namespace App\Http\Controllers\API\Frontend;

use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Events\BookingMailEvent;
use App\Events\SendMailSMSEvent;
use App\Mail\SendMailToCustomer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentNotification;
use App\Paypal\CompanyPaymentMechanism;

class BookingController extends Controller
{
    public function singleAppointment(Request $request)
    {
       $data =  $request->except(['date']);

      $data['provider_id']   = $request->provider_id;
      $data['schedule_date'] = Carbon::parse($request->schedule_date)->format('y-m-d');
      $data['user_id']       = Auth::user()->id;

      $booking = Booking::create($data);

      $order['order_code']   = uniqid().Carbon::now()->format('dmy').time();
      $order['booking_id']   = $booking->id;
      $order['user_id']      = $request->user_id;
      $order['amount']       = $request->amount;
      $order['due']          = $request->amount;
      $order['deduction']    = $request->deduction;
      $order['total_amount'] = $request->amount;

    $createOrder  = Order::create($order);    
    // SMS and Mail sent to service provider  and customer

    $paymentData = $request->all();
    $paymentData['order_id'] = $createOrder->id;
    $paymentData['customer_id'] = Auth::user()->id;
    
    $payment = new CompanyPaymentMechanism($paymentData);

    $payment->companyPaymentCreation();
    
    event(new BookingMailEvent($request));

      if($booking == true){
          return response()->json([
              'status'     => '200',
              'message'    => 'Service has been appointed',
              'order_data' => $createOrder
          ]);
      }



    }

    public function requestNearestAll(Request $request)
    {

    }
}
