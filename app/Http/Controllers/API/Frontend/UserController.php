<?php

namespace App\Http\Controllers\API\Frontend;

use App\Models\User;
use App\Uploads\FileUpload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function getSingleUser($user_id)
    {

        $user = User::find($user_id);

        return new UserResource($user);

    }

    public function updateProfile(Request $request)
    {
        // return $request->all();

        $options         = FileUpload::setOptions($request->user_id, User::class, 'update', 'photo', 'uploads/user');
        $file            = new FileUpload($request, $options);
        $fileName        = $file->imgProcess();
        
        $data = $request->all();
        $data['photo'] = $fileName;

        User::find($request->user_id)->update($data);

        return response()->json([
            'status' => 'success',
            'message' => 'Profile has been updated'
        ]);
    }
}
