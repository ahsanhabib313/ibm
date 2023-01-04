<?php

namespace App\Http\Controllers\API\Backend;

use Auth;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\SearchEngine\DataMachine;
use App\CrudMachanism\DataShowing;
use App\CrudMachanism\DataDeletion;
use App\CrudMachanism\DataInsertion;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookingResource;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchable = [
            'user_id',
        ];
        
        $extraData = [
            'service_providers' => User::where('user_type', 2)->get()
        ];
        
        // $result = new DataMachine($searchable, $request, Booking::class, BookingResource::class, $extraData);
        // return  $result->dataRendering();

        $data = Booking::where('provider_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(20);

        return BookingResource::collection($data);

    }

    public function storeUpdate($request, $id, $method)
    { 

      $data = $request->all();
      $operation                    = new DataInsertion(Booking::class, $method, 'Booking', $data, $id);
      $result                       = $operation->crudItem();
     
      return $result;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        return DataShowing::dataShow(Booking::class, $id, BookingResource::class);
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
        $result =  $this->storeUpdate($request, $id, 'update');
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
        $result =  DataDeletion::dataDelete(Booking::class, $id, 'Booking');
        return $result;
    }
}
