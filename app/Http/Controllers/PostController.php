<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     return view('index', [
    //         'data' => 'Welcome',
    //         'posts' => Post::all(),
    //     ]);
    // }
    public function index()
    {
        return PostResource::collection(Post::orderByDesc('id')->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        dd($request);

        /**
         * validating data
         */
        $val_data = $request->validate([
            'title' => 'required|min:8|max:50',
            'description' => 'required|min:30|max:2000',
        ]);

        Post::create($request->all());

        return view('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        return view('show', [
            'post' => Post::find($post),
        ]);
        // return PostResource::collection(Post::find($post));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        //dd($post);

        return view('edit', [
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        //dd($request);

        /**
         * validating data
         */
        $val_data = $request->validate([
            'title' => 'required|min:8|max:50',
            'description' => 'required|min:30|max:2000',
        ]);

        $post->update($request->all());

        return view('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
    }

    // public function test()
    // {
    //     return PostResource::collection(Post::where('id', 9)->get());
    // }
}
