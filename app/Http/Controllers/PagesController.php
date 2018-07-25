<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PagesController extends Controller
{
  // index
  public function index() {
    $posts = Post::orderBy('created_at', 'desc')->paginate(5);
    $users = User::orderBy('created_at', 'desc')->paginate(5);
    return view('pages.index')->with(array('posts' => $posts, 'users' => $users));
  }
  // about
  public function about() {
    return view('pages.about');
  }
  // contact us
  public function contact() {
    return view('pages.contact');
  }
}
