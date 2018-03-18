@extends('layout.app')

@section('content')


 <!-- POSTS -->
 <div class="container-post">


  <div class="post">


   <div class="post-footer">

     <h1>Connexion</h1>
    <form class="form-post" action="" method="post">
     {{ csrf_field() }}
     <input class="input-post" placeholder="you@email.com" type="email" name="user_email" value="" required>
     <input class="input-post" placeholder="Password" type="password" name="Password" value="" required>

     <input class="btn-submit" type="submit" name="" value="Connexion">
    </form>
   </div>

  </div>



 </div>


  @endsection
