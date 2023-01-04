<?php

namespace App\Http\Controllers\API\Backend;

use Auth;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Wallet;

class CompanyReportController extends Controller
{
    public function totalOrder(Request $request)
    {
       
        // return gettype($request->date_range);
        $orders = Order::with('booking.user')->where(function($query) use($request){

            $query->where('user_id', $request->provider_id);
            if($request->date_range != NULL){
                $query->orWhereBetween('created_at', $request->date_range);
            }
             
            

        })->get();

        $total_order  = Order::where('user_id', $request->provider_id)->get()->count();
        $total_paid   = Order::where('user_id', $request->provider_id)->get()->sum('deduction');
        $total_amount = Order::where('user_id', $request->provider_id)->get()->sum('amount');

        return response()->json([
            'orders'       => $orders,
            'total_order'  => $total_order,
            'total_paid'   => $total_paid,
            'total_amount' => $total_amount,
        ]);
    }
    public function totalCustomerOrder(Request $request)
    {
       
        // return gettype($request->date_range);
        $orders = Order::with('booking.user')->where(function($query) use($request){

            $query->where('user_id', Auth::user()->id);
            if($request->date_range != NULL){
                $query->orWhereBetween('created_at', $request->date_range);
            }
             
            

        })->get();

        $total_order  = Order::where('user_id', Auth::user()->id)->get()->count();
        $total_paid   = Order::where('user_id', Auth::user()->id)->get()->sum('deduction');
        $total_amount = Order::where('user_id', Auth::user()->id)->get()->sum('amount');

        return response()->json([
            'orders'       => $orders,
            'total_order'  => $total_order,
            'total_paid'   => $total_paid,
            'total_amount' => $total_amount,
        ]);
    }

    public function totalCustomer()
    {
        
        $customers     = User::where('user_type', 3)->get();

        foreach ($customers as $key => $customer) {
            $customers[$key]->total_cost = Order::where('user_id', $customer->id)->sum('amount');
        }

        $totalCustomer = User::where('user_type', 3)->count();

        return response()->json([
            'customers'      => $customers,
            'total_customer' => $totalCustomer
        ]);


    }
    public function totalProvider()
    {

         $providers      = User::where('user_type', 2)->get();

         foreach ($providers as $key => $provider) {
             $providers[$key]->total_earn = Wallet::where('user_id', $provider->id)->sum('amount');
         }

        $totalProviders = User::where('user_type', 2)->count();

        return response()->json([
            'providers'      => $providers,
            'total_provider' => $totalProviders
        ]);

    }
}
