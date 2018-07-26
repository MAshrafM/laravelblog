<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
  
  public function __construct(){
    $this->middleware('auth', ['except' => ['index', 'show']] );
  }
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
      'body' => 'required',
      'thumb' => 'image|nullable|max:1024',
    ]);
    
    if($request->hasFile('thumb')){
      $filename = $request->file('thumb')->getClientOriginalName();
      $name = pathinfo($filename, PATHINFO_FILENAME);
      $extension = $request->file('thumb')->getClientOriginalExtension();
      $fileStore = time(). '_' . $name . '.' . $extension;
      $path = $request->file('thumb')->storeAs('public/post_thumb', $fileStore);
    } else {
      $fileStore = 'noThumb.jpg';
    }
    $post = new Post;
    $post->subject = $request->input('subject');
    $post->body = $request->input('body');
    $post->uid = auth()->user()->id;
    $post->thumb = $fileStore;
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
    
    if(auth()->user()->id !== $post->uid){
      redirect('/posts')->with('error', 'Your are not authorized to edit this post');
    }
    return view('posts.edit')->with('post', $post);
  }
  
  // update
  public function update(Request $request, $id){
    $this->validate($request, [
      'subject' => 'required',
      'body' => 'required',
      'thumb' => 'image|nullable|max:1024',
    ]);
    
    $post = Post::find($id);
    if($request->hasFile('thumb')){
      $filename = $request->file('thumb')->getClientOriginalName();
      $name = pathinfo($filename, PATHINFO_FILENAME);
      $extension = $request->file('thumb')->getClientOriginalExtension();
      $fileStore = time(). '_' . $name . '.' . $extension;
      $path = $request->file('thumb')->storeAs('public/post_thumb', $fileStore);
      $post->thumb = $fileStore;
    } elseif ($post->thumb && $post->thumb != 'noThumb.jpg') {
      $post->thumb = $post->thumb;
    } else {
      $fileStore = 'noThumb.jpg';
      $post->thumb = $fileStore;
    }
    $post->subject = $request->input('subject');
    $post->body = $request->input('body');
    $post->save();
    return redirect('/posts')->with('success', 'Done Successfully');
  }
  
  // destroy
  public function destroy($id){
    $post = Post::find($id);
    if(auth()->user()->id !== $post->uid){
      redirect('/posts')->with('error', 'Your are not authorized to delete this post');
    }
    $post->delete();
    return redirect('/posts')->with('success', 'Done Successfully');
  }
}
