<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  // index
  public function index() {
    return view('pages.index');
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
