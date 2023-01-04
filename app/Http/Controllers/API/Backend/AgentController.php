<?php

namespace App\Http\Controllers\API\Backend;

use App\Models\User;
use App\Uploads\FileUpload;
use Illuminate\Http\Request;
use App\CrudMachanism\DataShowing;
use App\Http\Requests\UserRequest;
use App\CrudMachanism\DataDeletion;
use App\CrudMachanism\DataInsertion;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class AgentController extends Controller
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
            'country_state',
            'user_type',
            'is_online',
            'course_id',
        ];

        $extraData = [];

        $search = $request->search;
        $dataSorting = $request->sorting == 'false'?10:$request->sorting;

        $searchableField = $searchable;

        
        
        $data = $search == 'false'?User::where('user_type', 2)->orderBy('id', 'desc')->paginate($dataSorting):User::where('user_type', 2)->where(function($query) use($search, $searchableField){

            foreach ($searchableField as $key => $field) {

                $query->orWhere($field, 'LIKE', "%{$search}%");

            }
        
        })->orderBy('id', 'desc')->paginate($dataSorting);

      return  UserResource::collection($data)->additional($extraData);

        
    
        
    }

    public function storeUpdate($request, $id, $method)
    { 
        
        // $options         = FileUpload::setOptions($id, User::class, $method, 'image', 'uploads/User');
        // $file            = new FileUpload($request, $options);
        // $fileName        = $file->imgProcess();

        // $optionsIcon         = FileUpload::setOptions($id, User::class, $method, 'desktop_icon', 'uploads/User');
        // $fileIcon            = new FileUpload($request, $optionsIcon);
        // $fileNameIcon        = $fileIcon->imgProcess();

        // $optionsMobileIcon         = FileUpload::setOptions($id, User::class, $method, 'mobile_icon', 'uploads/User');
        // $fileMobileIcon            = new FileUpload($request, $optionsMobileIcon);
        // $fileNameMobileIcon        = $fileMobileIcon->imgProcess();

    //   $data = $request->except([
    //     'image',
    //     'desktop_icon',
    //     'mobile_icon',
    //   ]);

    $data = $request->all();

    //   $data['slug'] = strtolower(str_replace(' ', '_',$request->name));
    //   $data['image']       = $fileName;
    //   $data['desktop_icon']        = $fileNameIcon;
    //   $data['mobile_icon'] = $fileNameMobileIcon;

      $operation           = new DataInsertion(User::class, $method, 'User', $data, $id);
      $result              = $operation->crudItem();
     
      return $result;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
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
