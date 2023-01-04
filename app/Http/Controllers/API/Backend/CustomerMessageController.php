<?php

namespace App\Http\Controllers\API\Backend;

use Auth;
use App\Models\Contact;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ContactResource;

class CustomerMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = ContactResource::collection(Contact::paginate(50));

        return response()->json($message);
    }

    public function getCustomer()
    {
        $users = Message::with('customer')->where('provider_id', Auth::user()->id)->get();

        $customer = [];

        foreach ($users as $key => $value) {
           
            $customer[$key] = $value->customer;

        }

        $uniqueUser = array_unique($customer);



        return response()->json($uniqueUser);

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
