<?php

namespace App\Http\Controllers\API\Backend;

use App\Models\User;
use App\Models\Service;
use App\Models\UserService;
use Illuminate\Http\Request;
use App\SearchEngine\DataMachine;
use App\CrudMachanism\DataShowing;
use App\CrudMachanism\MassiveData;
use App\CrudMachanism\DataDeletion;
use App\CrudMachanism\DataInsertion;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserServiceResource;

class UserServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchable = [
            'service_id',
            'user_id',
        ];
        
        $extraData = [
            'providers' => User::where('user_type', 2)->get(),
            'services' => Service::all(),
        ];
        
        $result = new DataMachine($searchable, $request, UserService::class, UserServiceResource::class, $extraData);
        return  $result->dataRendering();
    }

    public function storeUpdate($request, $id, $method)
    { 
       
      if($method == 'store'){

        $data = MassiveData::serviceDataProcessing($request);

      }

      if($method == 'update'){

          $data = $request->all();

      }

      $operation    = new DataInsertion(UserService::class, $method, 'Service Assign', $data, $id);
      $result       = $operation->massCrudItem();
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
        return DataShowing::dataShow(UserService::class, $id, UserServiceResource::class);
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
        $result =  DataDeletion::dataDelete(UserService::class, $id, 'User Service');
        return $result;
    }
}
