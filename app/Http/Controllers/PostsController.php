<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
  // Index
  public function index() {
    $posts = Post::all();
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
    
  }
  
  // edit
  public function edit($id){
    
  }
  
  // update
  public function update(Request $request){
    
  }
  
  // destroy
  public function destroy($id){
    
  }
}
