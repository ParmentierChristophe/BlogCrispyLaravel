@extends('layout.app')

@section('content')


 <!-- POSTS -->
 <div class="container-post">


  <div class="post">


   <div class="post-footer">
     @if ($error = $errors->first('password'))
     <h3 class="Laravel">{{$error}}</h3>

     @endif
     <h1>Connexion</h1>
    <form class="form-post" action="" method="post">
      @csrf
     <input class="input-post" placeholder="you@email.com" type="email" name="email" required>
     <input class="input-post" placeholder="Password" type="password" name="password"  required>

     <input class="btn-submit" type="submit" name="" value="Connexion">
    </form>
   </div>

  </div>



 </div>


  @endsection
