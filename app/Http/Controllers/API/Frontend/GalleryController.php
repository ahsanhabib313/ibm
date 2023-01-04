<?php

namespace App\Http\Controllers\API\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Resources\GalleryResource;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function getImage()
    {
        $images = Gallery::orderBy('id', 'desc')->get();

        return response()->json($images);
    }
}
