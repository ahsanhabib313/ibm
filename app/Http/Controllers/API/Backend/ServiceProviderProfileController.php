<?php

namespace App\Http\Controllers\API\Backend;

use App\Models\User;
use App\Uploads\FileUpload;
use Illuminate\Http\Request;
use App\CrudMachanism\DataInsertion;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Auth;

class ServiceProviderProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::find(Auth::user()->id);

        return new UserResource($data);
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

        if($request->password != ""){

        $data['password'] = bcrypt($request->password);
        }

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
