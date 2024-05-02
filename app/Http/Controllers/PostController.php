<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view("posts.index", compact('posts'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'username'=> 'required|max:20',
            'title'=> 'required|max:255',
            'description'=> 'required|max:255',
        ]);

        $post = new Post;
        $post->username = $validate["username"];
        $post->title = $validate["title"];
        $post->description = $validate["description"];
        $post->save();

        session()->flash("message","Sucessfully posted");
        return redirect()->route("posts.index");


    }

    /**
     * Display the specified resource.
     */

     public function show($username)
     {
        $posts = Post::where('username', $username)->get();
        return view("posts.show", compact('posts'));
     }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
