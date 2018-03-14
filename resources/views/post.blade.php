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
   <p class="text-post">{{$article->content}}
   <a class="link-post" href="#">consectetur adipisicing</a></p>



   <div class="post-footer">
    <hr class="hr-post">
    <div class="tag-and-share">
      <a href="" class="cat-tag-vue">#{{$article->categorie->title}}</a>
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



     <a href=""><i class="fas fa-arrow-left fa-lg"></i> Title - Article 1 with a long text for testing</a>
    </div>
    <div class="next">
     <p>Next</p>

     <a href="">Title - Article 3 with a long text for testing <i class="fas fa-arrow-right fa-lg"></i></a>

    </div>
   </div>

  @endsection
