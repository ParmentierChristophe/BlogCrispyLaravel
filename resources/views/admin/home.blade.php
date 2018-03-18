@extends('layout.app')

@section('content')
<div class="container-post">


 <div class="post">
   <form class="form-post" action="{{ action('\App\Http\Controllers\Auth\LoginController@logout')}}" method="post">

     @csrf

    <input class="btn-submit" type="submit" name="" value="Log Out">
   </form>
<div class="header-post">
 <div class="auth-post">
  <img class="photo-auth-post" src="{{asset('images/pp.jpg')}}" alt="">
  <div>
    <p class="auth-info name"><a href="">{{Auth::user()->name}}</a></p>

   <p class="auth-info">Developper Web - Graphiste Freelance basé à Lille - www.christophe-parmentier.fr</p>
  </div>

 </div>
</div>
</div>
</div>


<div class="container-posts">
  <div class="admin-posts-card">
   <div class="row">

@foreach($articles as $article)

    <div class="col-xs-12
                     col-sm-6
                     col-md-6
                     col-lg-4">
     <div class="box">
      <div class="card-posts-user">
       <h2>{{$article->title}}</h2>
       <p>{{ \Illuminate\Support\Str::words($article->content, 21,'...') }}</p>

       <div class="modi-and-tag">
             <a href="{{ action('CategoryControler@show',  $article->categorie->id)}}" class="{{$article->categorie->title}} ">#{{$article->categorie->title}}</a>
       </div>

       <a class="link-card-post2" href="{{ action('ArticleController@show',  $article->id)}}">
               </a>
      </div>
     </div>
    </div>
@endforeach

  </div>
 </div>
</div>
  @endsection
