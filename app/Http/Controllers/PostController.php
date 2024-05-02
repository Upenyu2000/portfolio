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


     public function show($username)
     {
        $posts = Post::where('username', $username)->get();
        return view("posts.show", compact('posts'));
     }


     public function edit($username)
     {
         $post = Post::where('username', $username)->first();
         return view('posts.edit', compact('post'));
     }
     
 
     public function update(Request $request, $username)
     {
         $validatedData = $request->validate([
             'title'=> 'required|max:255',
             'description'=> 'required|max:255',
         ]);
 
         $post = Post::where('username', $username)->first();
         if ($post) {
             $post->title = $validatedData["title"];
             $post->description = $validatedData["description"];
             $post->save();
             return redirect()->route("posts.index")->with('message', 'Post successfully updated.');
         } else {
             return redirect()->route("posts.index")->with('error', 'Post not found.');
         }
     }

    public function destroy(string $username)
    {
        $post = Post::where('username', $username)->first();
        if ($post) {
            $post->delete();
            return redirect()->route("posts.index")->with('message', 'Post successfully deleted.');
        } else {
            return redirect()->route("posts.index")->with('error', 'Post not found.');
        }
    }
    
}
