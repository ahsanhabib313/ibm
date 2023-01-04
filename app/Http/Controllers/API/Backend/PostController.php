<?php

namespace App\Http\Controllers\API\Backend;

use Auth;
use App\Models\Post;
use App\Uploads\FileUpload;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\SearchEngine\DataMachine;
use App\CrudMachanism\DataShowing;
use App\CrudMachanism\DataDeletion;
use App\CrudMachanism\DataInsertion;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;

class PostController extends Controller
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
        
        $result = new DataMachine($searchable, $request, Post::class, PostResource::class, $extraData);
        return  $result->dataRendering();
    }

    public function storeUpdate($request, $id, $method)
    { 

        $options         = FileUpload::setOptions($id, Post::class, $method, 'image', 'uploads/post');
        $file            = new FileUpload($request, $options);
        $fileName        = $file->imgProcess();

        $optionsIcon         = FileUpload::setOptions($id, Post::class, $method, 'feature_image', 'uploads/post');
        $fileIcon            = new FileUpload($request, $optionsIcon);
        $fileNameIcon        = $fileIcon->imgProcess();

       

      $data = $request->except([
        'image',
        'feature_image',
      ]);

      $data['slug']          = Str::slug($request->title, '_'); //strtolower(str_replace(' ', '-',$request->name));
      $data['image']         = $fileName;
      $data['feature_image'] = $fileNameIcon;
      $data['user_id']         = Auth::user()->id;
      $operation             = new DataInsertion(Post::class, $method, 'post', $data, $id);
      $result                = $operation->crudItem();
     
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
        return DataShowing::dataShow(Post::class, $id, PostResource::class);
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
        $result =  DataDeletion::dataDelete(Post::class, $id, 'post');
        return $result;
    }
}
