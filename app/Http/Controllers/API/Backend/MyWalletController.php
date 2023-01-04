<?php

namespace App\Http\Controllers\API\Backend;

use App\Models\Wallet;
use Illuminate\Http\Request;
use App\SearchEngine\DataMachine;
use App\CrudMachanism\DataShowing;
use App\CrudMachanism\DataDeletion;
use App\CrudMachanism\DataInsertion;
use App\Http\Controllers\Controller;
use App\Http\Resources\WalletResource;

class MyWalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchable = [
            'name',
        ];
        
        $extraData = [];
        
        $result = Wallet::where('user_type', 2)->paginate(20);// new DataMachine($searchable, $request, Wallet::class, WalletResource::class, $extraData);
        return  WalletResource::collection($result);
    }

    public function storeUpdate($request, $id, $method)
    { 

        

      $data = $request->all();
      $operation                    = new DataInsertion(Wallet::class, $method, 'Wallet', $data, $id);
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
        return DataShowing::dataShow(Wallet::class, $id, WalletResource::class);
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
        $result =  DataDeletion::dataDelete(Wallet::class, $id, 'Wallet');
        return $result;
    }
}
