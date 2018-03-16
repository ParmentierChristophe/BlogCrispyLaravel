@extends('layout.app')

@section('content')
<div class="container-post">


 <div class="post">
<div class="header-post">
 <div class="auth-post">

    <div class="header-cat-page">
          <p class="{{$cat->title}} ">#{{$cat->title}}</p>
   <p class="auth-info">{{$nbAllArticlesByCat}} articles sur {{$cat->title}}</p>
  </div>

 </div>
</div>
</div>
</div>


<div class="container-posts">
  <div class="admin-posts-card">
   <div class="row">

@foreach($allArticlesCat as $article)

    <div class="col-xs-12
                     col-sm-6
                     col-md-6
                     col-lg-4">
     <div class="box">
      <div class="card-posts-user">
       <h2>{{$article->title}}</h2>
       <p>{{ \Illuminate\Support\Str::words($article->content, 21,'...') }}</p>

       <div class="modi-and-tag">
             <a href="" class="{{$article->categorie->title}} ">#{{$article->categorie->title}}</a>
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
