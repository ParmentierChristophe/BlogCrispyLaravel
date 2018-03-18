<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

  public function login(Request $request)
  {

    return view( 'connexion.connexion' );

  }

  public function postLogin(Request $request)
  {

 // attempt to do the login

 if (auth()->attempt(request(['email','password'])))
  {
    return redirect()->intended('admin');

  }
  return 'no';
}
}
