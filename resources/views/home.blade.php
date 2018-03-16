@extends('layout.app')

@section('content')

 <!-- POSTS -->
 <div class="container-posts">
  <!-- CARD 1 -->
  @foreach($articles as $article)
  <div class="card-posts">
   <h2>{{$article->title}}</h2>
   <p>{{ \Illuminate\Support\Str::words($article->content, 21,'...') }}</p>

   <div class="card-footer">
    <img class="img-card-footer" src="{{asset('images/pp.jpg')}}" alt="" />

    <p class="name-auth-card-posts">

     <a class="link-auth-posts-card" href="{{ action('UserControler@show',  $article->user->id)}}">{{$article->user->name}}</a> le {{ $article->created_at->format('d F Y') }}
    </p>
   </div>

    <a href="{{ action('CategoryControler@show',  $article->categorie->id)}}" class="{{$article->categorie->title}} ">#{{$article->categorie->title}}</a>

   <a class="link-card-post2" href="{{ action('ArticleController@show',  $article->id)}}">
  </a>
  </div>
@endforeach



  <!-- pagination OLDER NEWEST -->
  <div class="container-pagination">

    {{ $articles->links('vendor.pagination.custom') }}


  </div>

  @endsection
