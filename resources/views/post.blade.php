@extends('layout.app')

@section('content')


 <!-- POSTS -->
 <div class="container-post">


  <div class="post">
   <div class="header-post">
    <div class="auth-post">
     <img class="photo-auth-post" src="{{asset('images/pp.jpg')}}" alt="">
     <div>
      <p class="auth-info name"><a href="">{{$article->user->name}}</a></p>
      <p class="auth-info">Developper Web - Graphiste Freelance basé à Lille - www.christophe-parmentier.fr</p>
      <p class="auth-info">{{$timeToRead}} min read · {{ $article->created_at->format('d F Y') }}</p>
     </div>

    </div>
   </div>
   <h1>{{$article->title}}</h1>
  <div class="markdown">
   <p class="text-post">{!! Markdown::convertToHtml($article->content)!!}



  </div>

   <div class="post-footer">
    <hr class="hr-post">
    <div class="tag-and-share">
      <a href="" class="{{$article->categorie->title}}">#{{$article->categorie->title}}</a>
      <div class="share">
        <a href="https://twitter.com/intent/tweet?text={{urlencode($article->title)}}%20via%20@theCrispydesign&url={{ urlencode(Request::fullUrl()) }}" target="_blank" class="share-text reseau">
        share on Twitter
            <i class="fab fa-twitter fa-sm"></i>
        </a>


      </div>
    </div>

    <p class="enjoy">Enjoyed this post? Receive the next one in your inbox!
    </p>

    <form class="form-post" action="index.html" method="post">
     <input class="input-post" placeholder="you@email.com" type="email" name="" value="">
     <input class="btn-submit" type="submit" name="" value="Subscribe">
    </form>
   </div>

  </div>



 </div>

 <hr>
 <div class="footer-next-previous">
  <div class="container-post">
   <div class="global-previous-next">
    <div class="previous">
     <p>Previous</p>

     @if($previousArticle)


     <a href="{{ action('ArticleController@show', $previousArticle->id) }}"><i class="fas fa-arrow-left fa-lg"></i> {{ $previousArticle->title}} - {{ \Illuminate\Support\Str::words($previousArticle->content, 7,'...') }}</a>
     @endif

    </div>

    <div class="next">
     <p>Next</p>

     @if($nextArticle)


     <a href="{{ action('ArticleController@show', $nextArticle->id) }}">{{ $nextArticle->title}} - {{ \Illuminate\Support\Str::words($nextArticle->content, 7,'...') }}<i class="fas fa-arrow-right fa-lg"></i></a>
     @endif

    </div>

   </div>

  @endsection
