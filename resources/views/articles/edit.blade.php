@extends('layout.app')

@section('content')
 <!-- ALL POSTS -->
 <div class="container-posts">
   <div class="container-post">

   <div class="header-post">
    <div class="auth-post">
     <img class="photo-auth-post" src="/uploads/avatar/{{ Auth::user()->userDescription->avatar }}" alt="">
     <div>
      <p class="auth-info name"><a href="">{{Auth::user()->name}}</a></p>
      <p class="auth-info">{{Auth::user()->userDescription->description}} - <a href="http://{{Auth::user()->userDescription->website}}"> {{Auth::user()->userDescription->website}}</a></p>

     </div>

    </div>
  </div>
   </div>
  <div class="admin-posts-card">
   <div class="row center-xs">

    <div class="col-xs-12
                     col-sm-12
                     col-md-12
                     col-lg-6">
     <div class="box-form">
       <form class="create-article-form" action="{{ action('ArticleController@update', $findarticle->id )}}" method="post">
         @csrf
         <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
         <input class="title-input-create" type="text" name="title" value="{{$findarticle->title}}" placeholder="+ Title">
         <textarea id="note" class="content-input-create" type="textarea" placeholder="Content" name="content">{{$findarticle->content}}</textarea>
          <div class="">
            <p class="{{$findarticle->categorie->title}} ">#{{$findarticle->categorie->title}}</p>

            <label>Select Category : </label>
            <select name="categorie_id">
              @foreach($categories as $categorie)

              <option value="{{$categorie->id}}">• {{$categorie->title}}</option>
              @endforeach

            </select>
          </div>

         <input class="submit-edit-profile" type="submit" value="Edit">

       </form>
     </div>
    </div>
   </div>



  </div>
 </div>
 </div>
 @endsection
