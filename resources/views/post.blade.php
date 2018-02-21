@extends('layout.app')

@section('content')


 <!-- POSTS -->
 <div class="container-post">


  <div class="post">
   <div class="header-post">
    <div class="auth-post">
     <img class="photo-auth-post" src="{{asset('images/pp.jpg')}}" alt="">
     <div>
      <p class="auth-info name"><a href="">Christophe Parmentier</a></p>
      <p class="auth-info">Developper Web - Graphiste Freelance basé à Lille - www.christophe-parmentier.fr</p>
      <p class="auth-info">4 min read · February 16th 2018</p>
     </div>

    </div>
   </div>
   <h1>I'm Title</h1>
   <p class="text-post">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <a class="link-post" href="#">nostrud</a> exercitation ullamco laboris nisi ut aliquip ex ea
    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

   <img src="{{asset('images/test.jpg')}}" alt="">
   <h2>I'm subtitle</h2>
   <p class="text-post">Lorem ipsum dolor sit amet, <a class="link-post" href="#">consectetur adipisicing</a> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut <a class="link-post"
     href="#">aliquip</a> ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
    est laborum.</p>


   <div class="post-footer">
    <hr class="hr-post">
    <div class="tag-and-share">
      <a href="" class="cat-tag-vue">#VueJs</a>
      <div class="share">
        <a href="https://twitter.com/theCrispydesign" class="share-text reseau">
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
