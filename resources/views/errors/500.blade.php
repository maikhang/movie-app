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
   </head>
   <style>
       body{
        background: #1b1b1b;
       }
   </style>
   <body>  
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
                            <a class="btn btn-primary mt-3" style="background:var(--iq-primary); border:none" href="{{ route('home.index') }}"><i class="ri-home-4-line mr-2"></i>Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- End Content --}}
   </body>
</html>