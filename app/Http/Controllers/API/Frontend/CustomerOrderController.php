<?php

namespace App\Http\Controllers\API\Frontend;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Booking;
use Auth;

class CustomerOrderController extends Controller
{
    public function customerOrder()
    {
        
        $booking = Booking::where('user_id', Auth::user()->id)->pluck('id');
        
        $result = Order::whereIn('booking_id', $booking)->paginate(20);
        return  OrderResource::collection($result);
    }
}
