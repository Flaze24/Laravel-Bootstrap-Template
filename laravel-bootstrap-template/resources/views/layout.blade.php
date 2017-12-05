<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Template</title>
  <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/styles-merged.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/custom.css')}}">



  <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body>
   <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close">
        <i class="icon-cross"></i>
      </a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div>

    <div class="probootstrap-page-wrapper">
    <header>
      @include('header');
    </header>

      <main>
        <div class="container">
          @yield('contenido');
        </div>
      </main>

      @include('footer');

     </div>
     <!-- END wrapper -->


     <script src="{{asset('js/scripts.min.js')}}"></script>
     <script src="{{asset('js/main.min.js')}}"></script>
     <script src="{{asset('js/custom.js')}}"></script>

   </body>

   </html>