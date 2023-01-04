<?php

namespace App\Http\Controllers\API\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class NearestServiceProviderController extends Controller
{
    public function getNearestProvider()
    {
        $user = User::where('user_type', 2)->orderBy('id', 'asc')->paginate(20);

        return UserResource::collection($user);
    }
}
