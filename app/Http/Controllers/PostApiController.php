<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;

class PostApiController extends Controller
{
    public function test()
    {
        return PostResource::collection(Post::where('id', 9)->get());
    }
}
