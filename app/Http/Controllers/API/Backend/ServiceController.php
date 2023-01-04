<?php

namespace App\Http\Controllers\API\Backend;

use Carbon\Carbon;
use App\Models\Service;
use App\Uploads\FileUpload;
use Illuminate\Http\Request;
use App\SearchEngine\DataMachine;
use App\CrudMachanism\DataShowing;
use App\CrudMachanism\DataDeletion;
use App\CrudMachanism\DataInsertion;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Http\Resources\ServiceResource;

class ServiceController extends Controller
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
        
        $result = new DataMachine($searchable, $request, Service::class, ServiceResource::class, $extraData);
        return  $result->dataRendering();
    }

    public function storeUpdate($request, $id, $method)
    { 
        
        $options         = FileUpload::setOptions($id, Service::class, $method, 'image', 'uploads/service');
        $file            = new FileUpload($request, $options);
        $fileName        = $file->imgProcess();

        $optionsIcon         = FileUpload::setOptions($id, Service::class, $method, 'desktop_icon', 'uploads/service');
        $fileIcon            = new FileUpload($request, $optionsIcon);
        $fileNameIcon        = $fileIcon->imgProcess();

        $optionsMobileIcon         = FileUpload::setOptions($id, Service::class, $method, 'mobile_icon', 'uploads/service');
        $fileMobileIcon            = new FileUpload($request, $optionsMobileIcon);
        $fileNameMobileIcon        = $fileMobileIcon->imgProcess();

      $data = $request->except([
        'image',
        'desktop_icon',
        'mobile_icon',
      ]);

      $data['slug'] = strtolower(str_replace(' ', '_',$request->name));
      $data['image']       = $fileName;
      $data['desktop_icon']        = $fileNameIcon;
      $data['mobile_icon'] = $fileNameMobileIcon;
      $operation           = new DataInsertion(Service::class, $method, 'Service', $data, $id);
      $result              = $operation->crudItem();
     
      return $result;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
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
        return DataShowing::dataShow(Service::class, $id, ServiceResource::class);
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
        $result =  DataDeletion::dataDelete(Service::class, $id, 'Service');
        return $result;
    }
}
