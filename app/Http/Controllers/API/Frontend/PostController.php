<?php

namespace App\Http\Controllers\API\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getPost()
    {
        $post = Post::orderBy('id', 'desc')->paginate(8);

        $data = PostResource::collection($post);

        return $data;
    }
}
