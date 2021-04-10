<!doctype html>
<html lang="en-US">
   <head>
      <!-- Required meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Streamit</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('asset/html/frontend/html/images/favicon.ico') }}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('asset/html/frontend/html/css/bootstrap.min.css') }}" />
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ asset('asset/html/frontend/html/css/typography.css') }}">
      <!-- Style -->
      <link rel="stylesheet" href="{{ asset('asset/html/frontend/html/css/style.css') }}" />
      <!-- Responsive -->
      <link rel="stylesheet" href="{{ asset('asset/html/frontend/html/css/responsive.css') }}" />
   </head>
   <style>
       body{
        background: #1b1b1b;
       }
   </style>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
    
      {{-- Content --}}
        <!-- Wrapper Start -->
        <div class="wrapper mt-3 mb-3">
            <div class="container pt-5">
                <div class="row no-gutters height-self-center">
                    <div class="col-sm-12 text-center align-self-center">
                        <div class="iq-error position-relative">
                            <img src="{{ asset('asset/html/frontend/html/images/server_error.gif') }}" class="img-fluid iq-error-img" style="width: 50%" alt="">
                            <h2 class="mb-0 mt-4">Oops! Internal Server Error</h2>
                            <p>The requested page dose not exist.</p>
                            <a class="btn btn-primary mt-3" style="background:var(--iq-primary); border:none" href="{{ route('home.index') }}"><i class="ri-home-4-line"></i>Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      {{-- End Content --}}

     
       <!-- back-to-top -->
      <div id="back-to-top">
         <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
      </div>
      <!-- back-to-top End -->
      <!-- jQuery, Popper JS -->
      <script src="{{ asset('asset/html/frontend/html/js/jquery-3.4.1.min.js') }}"></script>
      <script src="{{ asset('asset/html/frontend/html/js/popper.min.js') }}"></script>
      <!-- Bootstrap JS -->
      <script src="{{ asset('asset/html/frontend/html/js/bootstrap.min.js') }}"></script>
      <!-- Slick JS -->
      <script src="{{ asset('asset/html/frontend/html/js/slick.min.js') }}"></script>
      <!-- owl carousel Js -->
      <script src="{{ asset('asset/html/frontend/html/js/owl.carousel.min.js') }}"></script>
      <!-- select2 Js -->
      <script src="{{ asset('asset/html/frontend/html/js/select2.min.js') }}"></script>
      <!-- Magnific Popup-->
      <script src="{{ asset('asset/html/frontend/html/js/jquery.magnific-popup.min.js') }}"></script>
      <!-- Slick Animation-->
      <script src="{{ asset('asset/html/frontend/html/js/slick-animation.min.js') }}"></script>
      <!-- Custom JS-->
      <script src="{{ asset('asset/html/frontend/html/js/custom.js') }}"></script>
      {{-- Scripts --}}
      @yield('scripts')
   </body>
</html>

