<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth')->except('logout');
  }

 public function index()
 {
   $articles = Auth::user()->articles->sortByDesc('id');

  return view( 'admin.home', compact('articles'));
 }
}
