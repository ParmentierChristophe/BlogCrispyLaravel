@extends('layout.app')

@section('content')




<div class="container-posts">


<div class="container-post">
  <h2 class="ReactJs">Editer votre profil</h2>

</div>


  <div class="admin-posts-card">
   <div class="row center-xs">

    <div class="col-xs-12
                     col-sm-12
                     col-md-8
                     col-lg-6">
     <div class="box">

      <div class="card-posts">
       <!-- Header Picture -->
       <div class="head-card-edit">
        <div class="img-section-edit">
       <form enctype="multipart/form-data" action="{{ action('AuthController@update', Auth::user())}}" method="post">
         @csrf

         <input class="input-file" type="file" name="avatar">
          <i class="fas fa-pencil-alt icon-edit-img"></i>
          <img class="img-edit-profile" src="/uploads/avatar/{{ Auth::user()->userDescription->avatar}}" alt="" />
        </div>
       </div>

       <!-- Name -->

        <input class="edit-profile-input-name" type="text" name="name" value="{{Auth::user()->name}}">
                <input class="edit-profile-input-site" type="text" name="email" value="{{Auth::user()->email}}">
        <textarea class="edit-profile-input-desc" name="description">{{Auth::user()->userDescription->description}}</textarea>
        <input class="edit-profile-input-site" type="text" name="website" value="{{Auth::user()->userDescription->website}}">


        <div class="card-footer">
         <input class="submit-edit-profile" type="submit" name="" value="Update">
        </div>
       </form>
      </div>
     </div>
    </div>


   </div>
  </div>


</div>

  @endsection
