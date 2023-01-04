<?php

namespace App\Http\Controllers\API\Frontend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResource;

class ServiceVisibilityController extends Controller
{
    public function getService()
    {
        $data = Service::orderBy('id', 'desc')->paginate(20);

        return  ServiceResource::collection($data);
    }

    public function singleService($service_slug)
    {
        $service = str_replace('-', '_', strtolower($service_slug));

        $data = Service::where('slug', $service)->first();
        return new ServiceResource($data);
    }
}
