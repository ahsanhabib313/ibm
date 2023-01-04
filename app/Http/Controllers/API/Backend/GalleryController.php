<?php

namespace App\Http\Controllers\API\Backend;

use App\Models\Gallery;
use App\Uploads\FileUpload;
use Illuminate\Http\Request;
use App\SearchEngine\DataMachine;
use App\CrudMachanism\DataShowing;
use App\CrudMachanism\DataDeletion;
use App\CrudMachanism\DataInsertion;
use App\CrudMachanism\MassiveData;
use App\CrudMessage\CrudMessage;
use App\Http\Controllers\Controller;
use App\Http\Resources\GalleryResource;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchable = [
            'title',
        ];
        
        $extraData = [];
        
        $result = new DataMachine($searchable, $request, Gallery::class, GalleryResource::class, $extraData);
        return  $result->dataRendering();
    }

    public function storeUpdate($request, $id, $method)
    { 

        // return $request->all();
        $options         = FileUpload::setOptions($id, Gallery::class, $method, 'image', 'uploads/gallery');
        $file            = new FileUpload($request, $options);
        $fileName        = $file->imgProcess();

      $data = $request->except([
        'image',
      ]);

   
    if($method == 'store'){
        Gallery::insert($fileName);
        $message =  new CrudMessage('Gallery');

        return $message->createMsg();

    } else {

      $operation             = new DataInsertion(Gallery::class, $method, 'Gallery', $data, $id);
      $result                = $operation->crudItem($fileName);
     
      return $result;
    }
      
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
        return DataShowing::dataShow(Gallery::class, $id, GalleryResource::class);
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
        $result =  DataDeletion::dataDelete(Gallery::class, $id, 'Gallery');
        return $result;
    }
}
