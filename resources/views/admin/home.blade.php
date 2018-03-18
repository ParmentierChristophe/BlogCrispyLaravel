@extends('layout.app')

@section('content')


 <!-- POSTS -->
  {{ Auth::user()->name}}

  <form class="form-post" action="{{ action('\App\Http\Controllers\Auth\LoginController@logout')}}" method="post">
    @csrf

   <input class="btn-submit" type="submit" name="" value="Log out">
  </form>
  @endsection
