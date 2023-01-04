<?php

namespace App\Http\Controllers\API\Backend;

use App\Models\User;
use App\Uploads\FileUpload;
use Illuminate\Http\Request;
use App\SearchEngine\DataMachine;
use App\CrudMachanism\DataShowing;
use App\CrudMachanism\DataDeletion;
use App\CrudMachanism\DataInsertion;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class ServiceProviderController extends Controller
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
        
        $result = User::where('user_type', 2)->paginate(20);// new DataMachine($searchable, $request, User::class, UserResource::class, $extraData);
        return  UserResource::collection($result);
    }

    public function getAllServiceProvider()
    {
        $result = User::where('user_type', 2)->get();

        return response()->json($result);
    }

    public function storeUpdate($request, $id, $method)
    { 

        $options         = FileUpload::setOptions($id, User::class, $method, 'photo', 'uploads/user');
        $file            = new FileUpload($request, $options);
        $fileName        = $file->imgProcess();

        $optionsW9Form         = FileUpload::setOptions($id, User::class, $method, 'w_9_form', 'uploads/user');
        $fileW9Form            = new FileUpload($request, $optionsW9Form);
        $fileNameW9Form        = $fileW9Form->imgProcess();

      $data = $request->except([
        'photo',
      ]);


      $data['user_type'] = 2;
      $data['photo']     = $fileName;
      $data['w_9_form']  = $fileNameW9Form;
      $data['password']  = bcrypt($request->password);
      $operation         = new DataInsertion(User::class, $method, 'User', $data, $id);
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
