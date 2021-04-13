@extends('client.master')

@section('content')
   <!-- Banner Start -->
   @if (isset($movie['videos']['results'][0]))
   <div class="video-container iq-main-slider">
      <iframe class="video d-block" src="https://www.youtube.com/embed/{{$movie['videos']['results'][0]['key']}}" frameborder="0" allow="" allowfullscreen alt="Trailer Not Found"></iframe>
   </div>
   @else
   <img src="{{ asset('asset/html/frontend/html/images/not-found-image-p.jpg') }}" class="img-fluid" alt="img">
   @endif
  
 <!-- Banner End -->
 <!-- MainContent -->
 <div class="main-content movie">
    <section class="movie-detail container-fluid">
       <div class="row">
          <div class="col-lg-12">
             <div class="trending-info g-border">
                <h1 class="trending-text big-title text-uppercase mt-0">{{ $movie['title'] }}</h1>
                <ul class="p-0 list-inline d-flex align-items-center movie-content" style="list-style-type: none">
                  @foreach ($movie['genres'] as $genre)
                     <li class="text-white">&#9889;{{$genre['name']}}</li>
                  @endforeach
                </ul>
                <style>
                  li::before{display: none;}
                </style>
                <div class="d-flex align-items-center text-white text-detail">
                   <span class="badge badge-secondary p-3">{{ $movie['vote_average']  * 10 .'%' }}</span>
                   <span class="ml-3">
                     @php($runtime = $movie['runtime'])
                     @if ($runtime >= 60)
                     {{ Carbon\CarbonInterval::minutes($runtime)->cascade()->forHumans(['short' => true]) }}
                     @else {{ $runtime }}m  
                     @endif
                  </span>
                  <span class="trending-year">
                     @if(isset($movie['release_date']))
                     {{Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}
                     @endif
                  </span>
                </div>
                <div class="d-flex align-items-center series mb-4">
                  @foreach ($movie['production_companies'] as $logo)
                     @if ($logo['logo_path'])
                     <img src="https://www.themoviedb.org/t/p/h30/{{$logo['logo_path']}}" class="img-fluid mr-3" style="background: white; padding:10px">
                     @endif
                  @endforeach
                  <span class="text-gold ml-3"></span>
                </div>
                <p class="trending-dec w-100 mb-0">{{ $movie['overview'] }}</p>
                <ul class="list-inline p-0 mt-4 share-icons music-play-lists">
                  <li><span><i class="ri-add-line"></i></span></li>
                  <li><span><i class="ri-heart-fill"></i></span></li>
                  <a href="{{$movie['homepage']}}" target="_blank" class="share-ico">
                     <li>
                        <span><i class="ri-share-fill"></i></span>
                     </li>
                  </a>
                </ul>
             </div>
          </div>
       </div>
    </section>

   {{-- ACTORS --}}
    <section id="iq-favorites" class="s-margin">
       <div class="container-fluid">
          <div class="row">
             <div class="col-sm-12 overflow-hidden">
                <div class="iq-main-header d-flex align-items-center justify-content-between">                     
                   <h4 class="main-title"><a href="#">Actors</a></h4>                     
                </div>
                <div class="favorites-contens">
                     <style>
                        a:hover{color:white!important}
                     </style>
                  <ul class="list-inline favorites-slider row p-0 mb-0">
                     @foreach ($movie['casts']['cast'] as $cast)
                     @if ($loop->index < 10 && $cast['profile_path'])
                     <li class="slide-item" style="color:white;">
                        <a href="{{ route('actor.show', $cast['id']) }}">
                           <div class="block-images position-relative" style="text-align: center">
                              <div class="img-box">
                                 @if(isset($cast['profile_path']))
                                    <img src="https://www.themoviedb.org/t/p/w342{{$cast['profile_path']}}" class="img-fluid" alt="">
                                 @else
                                    <img src="{{ asset('asset/html/frontend/html/images/not-found-image.jpg') }}" class="img-fluid" alt="">
                                 @endif
                              </div>
                              <div class="block-description">
                                 <span><b>{{ $cast['original_name'] }}</b></span>
                                 <span class="pb-3" style="font-weight: 100; font-size:12px"><i>{{ $cast['character'] }}</i></span>
                                 <div class="hover-buttons">
                                    <span class="btn btn-hover">View Detail</span>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </li>
                     @endif
                     @endforeach
                  </ul>
                </div>
             </div>
          </div>
       </div>
    </section>

   {{-- IMAGES --}}
   <section id="iq-favorites" class="s-margin">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12 overflow-hidden">
               <div class="iq-main-header d-flex align-items-center justify-content-between">                     
                  <h4 class="main-title"><a href="#">Backdrops</a></h4>                     
               </div>
               <div class="favorites-contens">
                    <style>
                       a:hover{color:white!important}
                       .backdropsWidth{width: 350px!important}
                    </style>
                 <ul class="list-inline favorites-slider row p-0 mb-0">
                    @foreach ($movie['images']['backdrops'] as $image)
                    @if ($loop->index < 8 && $image['file_path'])
                       <li class="slide-item" style="color:white">
                           <div class="block-images position-relative">
                           <div class="img-box">
                              <img src="https://www.themoviedb.org/t/p/original{{$image['file_path']}}" class="img-fluid" alt="">
                           </div>
                           </div>
                       </li>
                     @endif
                    @endforeach
                 </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   
 </div>
@endsection
