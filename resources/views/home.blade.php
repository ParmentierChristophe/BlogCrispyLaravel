@extends('layout.app')

@section('content')

 <!-- POSTS -->
 <div class="container-posts">
  <!-- CARD 1 -->
  <div class="card-posts">
   <h2>I'm Title</h2>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ...</p>

   <div class="card-footer">
    <img class="img-card-footer" src="{{asset('images/pp.jpg')}}" alt="" />
    <p class="name-auth-card-posts">
     <a class="link-auth-posts-card" href="http://christophe-parmentier.fr/">Christophe Parmentier</a> le 20 fevrier 2018
    </p>
   </div>
   <a href="" class="cat-tag-laravel">#Laravel</a>
   <a class="link-card-post2" href="post.html">
  </a>
  </div>


  <!-- CARD2 -->
  <div class="card-posts">
   <h2>I'm Title - 2</h2>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ...</p>

   <div class="card-footer">
    <img class="img-card-footer" src="{{asset('images/pp.jpg')}}" alt="" />
    <p class="name-auth-card-posts">
     <a class="link-auth-posts-card" href="http://christophe-parmentier.fr/">Christophe Parmentier</a> le 20 fevrier 2018
    </p>
   </div>
   <a href="" class="cat-tag-vue">#VueJs</a>
   <a class="link-card-post2" href="post.html">
  </a>
  </div>


  <!-- CARD 3 -->
  <div class="card-posts">
   <h2>I'm Title - 3</h2>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ...</p>

   <div class="card-footer">
    <img class="img-card-footer" src="{{asset('images/pp.jpg')}}" alt="" />
    <p class="name-auth-card-posts">
     <a class="link-auth-posts-card" href="http://christophe-parmentier.fr/">Christophe Parmentier</a> le 20 fevrier 2018
    </p>
   </div>
   <a href="" class="cat-tag-react">#ReactJs</a>
   <a class="link-card-post2" href="post.html">
  </a>
  </div>

  <!-- CARD 4 -->
  <div class="card-posts">
   <h2>I'm Title - 4</h2>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ...</p>

   <div class="card-footer">
    <img class="img-card-footer" src="{{asset('images/pp.jpg')}}" alt="" />
    <p class="name-auth-card-posts">
     <a class="link-auth-posts-card" href="http://christophe-parmentier.fr/">Christophe Parmentier</a> le 20 fevrier 2018
    </p>
   </div>
   <a href="" class="cat-tag-laravel">#Laravel</a>
   <a class="link-card-post2" href="post.html">
  </a>
  </div>

  <!-- pagination OLDER NEWEST -->
  <div class="container-pagination">

   <div class="pagination">
    <a class="older-pagination Link-animatedHover" href="">Older</a>
    <a class="newest-pagination Link-animatedHover" href="">Newest</a>
   </div>

  </div>

  @endsection
