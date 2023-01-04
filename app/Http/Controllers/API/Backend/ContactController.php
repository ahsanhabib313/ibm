<?php

namespace App\Http\Controllers\API\Backend;

use App\Models\Booking;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\SearchEngine\DataMachine;
use App\CrudMachanism\DataShowing;
use App\CrudMachanism\DataDeletion;
use App\CrudMachanism\DataInsertion;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Resources\ContactResource;

class ContactController extends Controller
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
       
       $result = new DataMachine($searchable, $request, Contact::class, ContactResource::class, $extraData);
       return  $result->dataRendering();
   }

   public function storeUpdate($request, $id, $method)
   { 

      

     $data = $request->all();
   
     $operation                    = new DataInsertion(Contact::class, $method, 'Contact', $data, $id);
     $result                       = $operation->crudItem();

     Booking::find($request->booking_id)->update(['booking_status' => 1]);
    
     return $result;
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(ContactRequest $request)
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
       return DataShowing::dataShow(Contact::class, $id, ContactResource::class);
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
       $result =  DataDeletion::dataDelete(Contact::class, $id, 'Contact');
       return $result;
   }
}
