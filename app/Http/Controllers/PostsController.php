<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
  // Index
  public function index() {
    $posts = Post::orderBy('created_at', 'desc')->paginate(4);
    return view('posts.index')->with('posts', $posts);
  }
  
  // create
  public function create() {
    return view('posts.new');
  }
  
  // store
  public function store(Request $request){
    $this->validate($request, [
      'subject' => 'required',
      'body' => 'required'
    ]);
    
    $post = new Post;
    $post->subject = $request->input('subject');
    $post->body = $request->input('body');
    $post->save();
    return redirect('/posts')->with('success', 'Done Successfully');
  }
  
  // show
  public function show($id){
    $post = Post::find($id);
    return view('posts.show')->with('post', $post);
  }
  
  // edit
  public function edit($id){
    $post = Post::find($id);
    return view('posts.edit')->with('post', $post);
  }
  
  // update
  public function update(Request $request, $id){
    $this->validate($request, [
      'subject' => 'required',
      'body' => 'required'
    ]);
    
    $post = Post::find($id);
    $post->subject = $request->input('subject');
    $post->body = $request->input('body');
    $post->save();
    return redirect('/posts')->with('success', 'Done Successfully');
  }
  
  // destroy
  public function destroy($id){
    $post = Post::find($id);
    $post->delete();
    return redirect('/posts')->with('success', 'Done Successfully');
  }
}
