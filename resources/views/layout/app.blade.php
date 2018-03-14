<!doctype html>
<html class="no-js" lang="">

<head>
 <meta charset="utf-8">
 <meta http-equiv="x-ua-compatible" content="ie=edge">
 <title></title>
 <meta name="description" content="">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="apple-touch-icon" href="apple-touch-icon.png">
 <!-- Place favicon.ico in the root directory -->

 <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
 <link rel="stylesheet" href="{{ asset('css/style.css') }}">
 <script src="js/vendor/modernizr-2.8.3.min.js"></script>
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
    <!-- <li><a href="">CATEGORIES <i class="fas fa-angle-down"></i></a></li> -->

   </ul>
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
</body>

</html>
