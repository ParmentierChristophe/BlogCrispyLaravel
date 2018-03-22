@extends('layout.app')

@section('content')




<div class="container-post">
  @if (session('success'))
      <div class="VueJs">
          {{ session('success') }}
      </div>
  @endif
  <form class="" action="{{ action('AuthController@update', Auth::user())}}" method="post">
    @csrf

<div class="input_edit_profil">
  <label for="">Name :</label>
  <input class="input-post" type="text" name="name" value="{{Auth::user()->name}}">
</div>
<div class="input_edit_profil">

  <label for="">Email :</label>
  <input class="input-post" type="text" name="email" value="{{Auth::user()->email}}">
</div>
<div class="input_edit_profil">

<input class="btn-submit" type="submit" name="" value="Update">
</div>
</form>

<!-- <div class="input_edit_profil">

  <label for="">New password :</label>
  <input class="input-post" type="password" name="" value="">
</div>
<div class="input_edit_profil">

  <label for="">Short description :</label>
  <textarea class="input-post" name="" value="">
    </textarea>
</div>

<div class="input_edit_profil">

  <label for="">Website :</label>
  <input class="input-post" type="text" name="" value="">
</div> -->

</div>

  @endsection
