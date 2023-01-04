<?php

namespace App\Http\Controllers\API\Backend;

use Illuminate\Http\Request;
use App\Models\PaypalCredential;
use App\CrudMachanism\DataInsertion;
use App\Http\Controllers\Controller;
use App\Http\Resources\PaypalCredentialResource;
use Auth;

class PaypalCredentialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Auth::user()->id;
        $data = PaypalCredential::where('user_id', Auth::user()->id)->first();

        return response()->json($data);
    }

    public function storeUpdate($request, $id, $method)
    { 

      $data = $request->all();
      $data['user_id'] = Auth::user()->id;
      $operation         = new DataInsertion(PaypalCredential::class, $method, 'PaypalCredential', $data, $id);
      $result            = $operation->crudItem();
     
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
        $model = PaypalCredential::updateOrCreate(

            ['user_id' => Auth::user()->id],
            [
                'user_id' => Auth::user()->id,
                'client_id' => $request->client_id,
                'secret_id' => $request->secret_id
            ]
        );

        return response()->json([
            'status' => true,
            'message' => 'Credential has been saved'
        ]);
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
        //
    }
}
