<?php

namespace App\Http\Controllers\API\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getBlog(){
        return PostResource::collection(Post::paginate(10));
    }

    public function getSingleBlog($slug){

        $post = Post::where('slug', $slug)->first();
        return new PostResource($post);
        
    }
}
