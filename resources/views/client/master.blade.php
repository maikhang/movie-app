<!doctype html>
<html lang="en-US">
   <head>
      <!-- Required meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Streamit</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="/asset/html/frontend/html/images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="/asset/html/frontend/html/css/bootstrap.min.css" />
      <!-- Typography CSS -->
      <link rel="stylesheet" href="/asset/html/frontend/html/css/typography.css">
      <!-- Style -->
      <link rel="stylesheet" href="/asset/html/frontend/html/css/style.css" />
      <!-- Responsive -->
      <link rel="stylesheet" href="/asset/html/frontend/html/css/responsive.css" />
      {{-- Livewire --}}
      @livewireStyles
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Header -->
      @include('layouts.header')
      <!-- Header End -->

      {{-- Content --}}
      @yield('content')
      {{-- End Content --}}

      {{-- FOOTER --}}
      @include('layouts.footer')
       <!-- back-to-top -->
      <div id="back-to-top">
         <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
      </div>
      <!-- back-to-top End -->
      <!-- jQuery, Popper JS -->
      <script src="/asset/html/frontend/html/js/jquery-3.4.1.min.js"></script>
      <script src="/asset/html/frontend/html/js/popper.min.js"></script>
      <!-- Bootstrap JS -->
      <script src="/asset/html/frontend/html/js/bootstrap.min.js"></script>
      <!-- Slick JS -->
      <script src="/asset/html/frontend/html/js/slick.min.js"></script>
      <!-- owl carousel Js -->
      <script src="/asset/html/frontend/html/js/owl.carousel.min.js"></script>
      <!-- select2 Js -->
      <script src="/asset/html/frontend/html/js/select2.min.js"></script>
      <!-- Magnific Popup-->
      <script src="/asset/html/frontend/html/js/jquery.magnific-popup.min.js"></script>
      <!-- Slick Animation-->
      <script src="/asset/html/frontend/html/js/slick-animation.min.js"></script>
      <!-- Custom JS-->
      <script src="/asset/html/frontend/html/js/custom.js"></script>
      {{-- Scripts --}}
      @yield('scripts')
      {{-- Livewire --}}
      @livewireScripts
   </body>
</html>

