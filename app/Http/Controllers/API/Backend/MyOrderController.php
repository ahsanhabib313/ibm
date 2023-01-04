<?php

namespace App\Http\Controllers\API\Backend;

use App\Models\Order;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\SearchEngine\DataMachine;
use App\CrudMachanism\DataShowing;
use App\CrudMachanism\DataDeletion;
use App\Http\Requests\OrderRequest;
use App\CrudMachanism\DataInsertion;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Resources\OrderResource;
use App\Models\PaypalPaymentCreation;

class MyOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchable = [
            'booking_id',
        ];
        
        $extraData = [];
        
        $result = Order::where('user_id', Auth::user()->id)->paginate(20);// new DataMachine($searchable, $request, Order::class, OrderResource::class, $extraData);
        return  OrderResource::collection($result);
    }

    public function getSingleOrder($order_id)
    {
        $order = Order::with('booking')->find($order_id);

        $data = [
            'order_id'    => $order->id,
            'amount'      => $order->amount,
            'customer_id' => $order->booking->user_id,
            'service_id'  => $order->booking->service_id

        ];

        return response()->json($data);

    }

    public function acceptOrder(Request $request)
    {
        $booking_id = Order::find($request->order_id)->booking_id;

        // Order::find($request->order_id)->update(['is_accept' => 1]);

        Booking::where('id', $booking_id)->update(['is_accept' => 1, 'booking_status' => 1]); 

        // PaypalPaymentCreation::where('order_id', $request->order_id)->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Order has been accepted'
        ]);
    }

    public function storeUpdate($request, $id, $method)
    { 

       

      $data = $request->except(['_method']);
    
      $operation                    = new DataInsertion(Order::class, $method, 'Order', $data, $id);
      $result                       = $operation->crudItem();
     
      return $result;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request)
    {
        $result =  $this->storeUpdate($request,'', 'store');
        return $result;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return DataShowing::dataShow(Order::class, $id, OrderResource::class);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    //    return $request->all();

        $result =  $this->storeUpdate($request, $id, 'update');
        $booking_id = Order::find($id)->booking_id;

        Booking::where('id', $booking_id)->update(['booking_status' => 1]);
        
        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result =  DataDeletion::dataDelete(Order::class, $id, 'Order');
        return $result;
    }
}
