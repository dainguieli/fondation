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
   //On récupère tous les Post
   $posts = Post::latest()->get();

   // On transmet les Post à la vue
   return view("posts.index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           // 1. La validation
     $this->validate($request, [
        'pseudo' => 'bail|required|string|max:255',
       
        "message" => 'bail|required',
    ]);



    // 3. On enregistre les informations du Post
    Post::create([
        "pseudo" => $request->pseudo,
        "message" =>  $request->message,
        "email" => $request->email,
    ]);
    
    // 4. On retourne vers tous les posts : route("posts.index")
    return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view("posts.show", compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view("posts.edit", compact("post"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
