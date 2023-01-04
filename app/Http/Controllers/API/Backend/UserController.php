<?php

namespace App\Http\Controllers\API\Backend;

use Carbon\Carbon;
use App\Models\User;
use App\Uploads\FileUpload;
use Illuminate\Http\Request;
use App\SearchEngine\DataMachine;
use App\CrudMachanism\DataShowing;
use App\CrudMachanism\DataDeletion;
use App\CrudMachanism\DataInsertion;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class UserController extends Controller
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
            'email',
            'phone',
            'nid'
        ];
        
        $extraData = [];
        
        $result = new DataMachine($searchable, $request, User::class, UserResource::class, $extraData);
        return  $result->dataRendering();
    }

    public function storeUpdate($request, $id, $method)
    { 

        // return $request->all();
        $options         = FileUpload::setOptions($id, User::class, $method, 'photo', 'uploads/user');
        $file            = new FileUpload($request, $options);
        $fileName        = $file->imgProcess();

      $data = $request->except([
        'photo',
        'dob',
        'joining_date',
      ]);


      $data['photo']         = $fileName;
      $data['user_type']         = 2;
      $data['dob'] = Carbon::parse($request->dob)->format('y-m-d');
      $data['joining_date'] = Carbon::parse($request->joining_date)->format('y-m-d');
    
      $operation                    = new DataInsertion(User::class, $method, 'User', $data, $id);
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
        return DataShowing::dataShow(User::class, $id, UserResource::class);
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
        $result =  DataDeletion::dataDelete(User::class, $id, 'User');
        return $result;
    }
}
