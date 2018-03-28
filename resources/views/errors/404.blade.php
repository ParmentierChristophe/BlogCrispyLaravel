@extends('layout.app')

@section('content')
 <!-- ALL POSTS -->
 <div class="container-posts">
   <div class="container-post">

   <p class="error_404">Error 404</p>
   <p class="msg_404">ooops, something
went wrong</p>

        <a class="back_link_404" href="{{ redirect()->back()->getTargetUrl() }}"><i class="fas fa-arrow-left fa-lg"></i> Return back</a>
 </div>
 </div>
 @endsection
