<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index(){
    $posts = Post::orderBy('created_at', 'desc')->paginate(10);
    return view('posts.index')->with('posts', $posts);
}


    public function create(){
        return view('posts.create');
    }

    public function show($id){
        $posts = Post::find($id);
        return view('posts.show')->with('posts', $posts);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('posts',$post);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        //Create Post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body'); 
        $post->save();

        return redirect('/posts')->with('success','Post Updated');

    }

    public function destroy($id){
        $post= Post::find($id);
        $post->delete();
        return redirect('/posts')->with('success','Post Removed');

        
    }

    // Add store method to handle form submission
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        //Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body'); 
        $post->save();

        return redirect('/posts')->with('success','Post Created');

    }
}
