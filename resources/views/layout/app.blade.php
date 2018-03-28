<!doctype html>
<html class="no-js" lang="">

<head>
 <meta charset="utf-8">
 <meta http-equiv="x-ua-compatible" content="ie=edge">
 <title>Crispy blog</title>
 <meta name="description" content="">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="shortcut icon" href="{{{ asset('images/favicon.png') }}}">

 <link rel="apple-touch-icon" href="apple-touch-icon.png">
 <!-- Place favicon.ico in the root directory -->

 <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
 <link rel="stylesheet" href="{{ asset('css/style.css') }}">
 <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.css" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
 <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Spectral" rel="stylesheet">
 <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


</head>

<body>
 <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

 <!-- Add your site or application content here -->


 <!-- NAVBAR -->
 <div class="navbar">
  <div class="container-navbar">
   <a href="{{ action('ArticleController@index') }}" class="brand"><img class="logo" src="{{asset('images/crispyB.png')}}" alt="Crispy">Crispy</a>
   <ul>
    <li><a href="{{ action('ArticleController@index') }}">Home</a></li>
    @auth
    <li><a href="{{ action('AdminController@index') }}">Admin</a></li>

    <li><a href="{{ action('ArticleController@create') }}">Create</a></li>

    @endauth
    <!-- <li><a href="">CATEGORIES <i class="fas fa-angle-down"></i></a></li> -->

   </ul>
   <?php if (!Auth::check()) { ?>

   <div>
    <a href="https://github.com/ParmentierChristophe" class="reseau">
      <i class="fab fa-github"></i>
    </a>
    <a href="https://twitter.com/theCrispydesign" class="reseau">
        <i class="fab fa-twitter "></i>
    </a>
    <a href="https://www.linkedin.com/in/christophe-parmentier/" class="reseau">
      <i class="fab fa-linkedin-in"></i>
    </a>
   </div>
   <?php } ?>
  </div>
 </div>

 @yield('content')



  <!-- FOOTER -->
  <div class="center">
   <a href="{{ action('ArticleController@index') }}">
    <img class="logo-footer" src="{{asset('images/crispyB.png')}}" alt="">
   </a>
  </div>
 </div>



 <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
 <script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>

<script>
 <script>
  window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')
 </script>
 <script src="js/plugins.js"></script>
 <script src="js/main.js"></script>

 <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
 <script>
  (function(b, o, i, l, e, r) {
   b.GoogleAnalyticsObject = l;
   b[l] || (b[l] =
    function() {
     (b[l].q = b[l].q || []).push(arguments)
    });
   b[l].l = +new Date;
   e = o.createElement(i);
   r = o.getElementsByTagName(i)[0];
   e.src = 'https://www.google-analytics.com/analytics.js';
   r.parentNode.insertBefore(e, r)
  }(window, document, 'script', 'ga'));
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
 </script>

 <script type="text/javascript">
  $(".FormDeleteTime").submit(function (event) {
              var x = confirm("Are you sure you want to delete?");
                 if (x) {
                     return true;
                 }
                 else {

                     event.preventDefault();
                     return false;
                 }

             });

autosize(document.getElementById("note"));

</script>
</body>

</html>
