@extends('layout.app')

@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="container-post">
  <h2 class="VueJs">Espace d'administration.</h2>

 <div class="post">

<div class="header-post">

 <div class="auth-post">
  <img class="photo-auth-post" src="{{asset('images/pp.jpg')}}" alt="">
  <div>

    <p class="auth-info name">{{Auth::user()->name}}</p>

   <p class="auth-info">{{Auth::user()->userDescription->description}} - <a href="http://{{Auth::user()->userDescription->website}}"> {{Auth::user()->userDescription->website}}</a></p>
  </div>
  <form class="form-post" action="{{ action('\App\Http\Controllers\Auth\LoginController@logout')}}" method="patch">

   <input class="btn-submit-disc" type="submit" name="" value="Log Out">
  </form>
  <div class="form-post">

   <a class="btn-submit-edit" href="{{ action('AuthController@edit', Auth::user())}}">Edit</a>
 </div>
 </div>
</div>
</div>
<hr>

</div>


<div class="container-posts">
  <h2>Vos articles :</h2>

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
             <div class="modif-and-del">
               <form class="" action="" method="post">
                 @csrf
                 <input type="hidden" name="_method" value="DELETE">
                 <button class="input_sub pencil" type="submit">
                 <i class="fas fa-pencil-alt"></i>
               </button>
               </form>

               <form class="FormDeleteTime" action="{{ action('ArticleController@destroy', $article->id)}}" method="post">
                 @csrf
                 <input type="hidden" name="_method" value="DELETE">
                 <button class="input_sub ban" value=" " type="submit">
                    <i class="fas fa-ban"></i>
                  </button>
               </form>

            </div>
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
