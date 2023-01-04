<?php

namespace App\Http\Controllers\API\Backend;

use App\Models\Certificate;
use App\Uploads\FileUpload;
use Illuminate\Http\Request;
use App\CrudMachanism\DataShowing;
use App\Http\Requests\CertificateRequest;
use App\CrudMachanism\DataDeletion;
use App\CrudMachanism\DataInsertion;
use App\Http\Controllers\Controller;
use App\Http\Resources\CertificateResource;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchable = [
            'user_id',
            'course_id',
        ];

        $extraData = [];

        $search = $request->search;
        $dataSorting = $request->sorting == 'false'?10:$request->sorting;

        $searchableField = $searchable;

        
        
        $data = $search == 'false'?Certificate::orderBy('id', 'desc')->paginate($dataSorting):Certificate::where(function($query) use($search, $searchableField){

            foreach ($searchableField as $key => $field) {

                $query->orWhere($field, 'LIKE', "%{$search}%");

            }
        
        })->orderBy('id', 'desc')->paginate($dataSorting);

      return  CertificateResource::collection($data)->additional($extraData);

        
    
        
    }

    public function storeUpdate($request, $id, $method)
    { 
        
        $options         = FileUpload::setOptions($id, Certificate::class, $method, 'certificate', 'uploads/certificate');
        $file            = new FileUpload($request, $options);
        $fileName        = $file->imgProcess();


      $data = $request->except([
        'certificate',
      ]);

      $data['certificate']       = $fileName;
      $operation           = new DataInsertion(Certificate::class, $method, 'Certificate', $data, $id);
      $result              = $operation->crudItem();
     
      return $result;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CertificateRequest $request)
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
        return DataShowing::dataShow(Certificate::class, $id, CertificateResource::class);
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
        // return $request->all();
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
        $result =  DataDeletion::dataDelete(Certificate::class, $id, 'Certificate');
        return $result;
    }
}
