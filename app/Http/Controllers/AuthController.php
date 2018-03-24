<?php

namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\User;
use Image;

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

         $user = Auth::user();
         $this->authorize('update', $user);

      return view('user.edit',compact('user'));
    }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user = Auth::user();
        $userDesc = Auth::user()->userDescription;
        $user->update($request->except('description','website'));
        if ($request->hasFile('avatar')) {
          $avatar = $request->file('avatar');
          $filename = time() . '.' . $avatar->getClientOriginalExtension();
          Image::make($avatar)->resize(300,300)->save(public_path( 'uploads/avatar/' . $filename));
          $userDesc->avatar = $filename;

        }

        $userDesc->update($request->only('description','website'));

        return redirect()->back()->with('success', 'User updated successfully');


    }
}
