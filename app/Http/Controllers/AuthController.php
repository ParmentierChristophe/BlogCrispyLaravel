<?php

namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\User;
use File;

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

  if ( ! User::where('email', $request->email)->first() ) {
      return redirect()->back()
          ->withErrors([
              'password' => 'Adresse mail invalide'
          ]);
  }

  if ( ! User::where('email', $request->email)->where('password', bcrypt($request->password))->first() ) {
      return redirect()->back()
          ->withErrors([
              'password' => 'Mot de passe invalide'
          ]);
  }
}



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
      if (\Auth::check())
       {
      return view('user.edit',compact('user'));
    }
      //
      // if (\Auth::check())
      // {
      //   return view('user.edit',compact('user'));
      // }
      // else
      // {
      //   return view('user.edit');
      // }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
}
