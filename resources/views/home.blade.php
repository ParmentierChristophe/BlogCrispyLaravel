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
    @foreach($users as $user)

    <p class="name-auth-card-posts">

     <a class="link-auth-posts-card" href="http://christophe-parmentier.fr/">{{ $user->name }}</a> le {{ $article->created_at->format('d F Y') }}
    </p>
    @endforeach
   </div>
   @foreach($cats as $cat)
   @if($cat->title == 'VueJs')
   <a href="" class="cat-tag-vue">#{{ $cat->title}}</a>
   @else
   <p>not found</p>
   @endif
   @endforeach
   <a class="link-card-post2" href="post.html">
  </a>
  </div>
@endforeach



  <!-- pagination OLDER NEWEST -->
  <div class="container-pagination">

   <div class="pagination">
    <a class="older-pagination Link-animatedHover" href="">Older</a>
    <a class="newest-pagination Link-animatedHover" href="">Newest</a>
   </div>

  </div>

  @endsection
