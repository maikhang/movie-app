@extends('client.master')

@section('content')
    <!-- Slider Start -->
    <section id="home" class="iq-main-slider p-0">
        <div id="home-slider" class="slider m-0 p-0">
           @php($row=0)
           @foreach ($popularMovies as $popularMovie)
           <div class="slide slick-bg s-bg-{{$row}}" style="background-image: url('https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/{{ $popularMovie['backdrop_path'] }}');">
            <div class="container-fluid position-relative h-100">
               <div class="slider-inner h-100">
                  <div class="row align-items-center h-100">
                     <div class="col-xl-10 col-lg-12 col-md-12">
                        <a href="javascript:void(0);">
                           <div class="channel-logo" data-animation-in="fadeInLeft">
                              <img src="{{ asset('asset/html/frontend/html/images/logo.png') }}" class="c-logo" alt="streamit">
                           </div>
                        </a>
                        <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                           style="">{{ $popularMovie['title'] }}</h1>
                        <div class="d-flex align-items-center" data-animation-in="fadeInUp">
                           <span class="badge badge-secondary p-2">{{ $popularMovie['vote_average'] * 10 . '%' }}</span>
                           <span class="ml-3">
                              @foreach ($popularMovie['genre_ids'] as $genre)
                              &#9889;{{$genres->get($genre)}}
                              @endforeach
                           </span>
                           <span class="ml-3">
                              @if (isset($popularMovie['release_date']))
                              ({{ Carbon\Carbon::parse($popularMovie['release_date'])->format('M d, Y')  }})
                              @endif
                           </span>
                        </div>
                        <p data-animation-in="fadeInUp">{{ $popularMovie['overview'] }}</p>
                        <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp">
                           <a href="{{ route('movie.show', $popularMovie['id']) }}" class="btn btn-hover"><i class="fa fa-play mr-2"
                              aria-hidden="true"></i>Watch Now</a>
                        </div>
                     </div>
                  </div>
                  <div class="trailor-video">
                     <a href="{{ route('movie.show', $popularMovie['id']) }}" class="video-open playbtn">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                           x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7"
                           enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                           <polygon class='triangle' fill="none" stroke-width="7" stroke-linecap="round"
                              stroke-linejoin="round" stroke-miterlimit="10"
                              points="73.5,62.5 148.5,105.8 73.5,149.1 " />
                           <circle class='circle' fill="none" stroke-width="7" stroke-linecap="round"
                              stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3" />
                        </svg>
                        <span class="w-trailor">Watch Trailer</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
           <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle"
              fill="none" stroke="currentColor">
              <circle r="20" cy="22" cx="22" id="test"></circle>
           </symbol>
        </svg>
     </section>
     <!-- Slider End -->

     <!-- MainContent -->
     <div class="main-content">
        {{-- TOP Rated Movies --}}
        <section id="iq-favorites">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-sm-12 overflow-hidden">
                    <div class="iq-main-header d-flex align-items-center justify-content-between">
                       <h4 class="main-title"><a href="#">Top Rated Movies</a></h4>                      
                    </div>
                    <div class="favorites-contens">
                       <ul class="favorites-slider list-inline  row p-0 mb-0">
                        @foreach ($topRatedMovies as $topRatedMovie)
                        <li class="slide-item">
                           <a href="{{ route('movie.show', $topRatedMovie['id']) }}">
                              <div class="block-images position-relative">
                                 <div class="img-box">
                                    @if(isset($topRatedMovie['poster_path']))
                                       <img src="https://www.themoviedb.org/t/p/w342{{$topRatedMovie['poster_path']}}" class="img-fluid" alt="">
                                    @else
                                       <img src="{{ asset('asset/html/frontend/html/images/not-found-image.jpg') }}" class="img-fluid" alt="">
                                    @endif
                                 </div>
                                 <div class="block-description text-center">
                                    <h6>{{ $topRatedMovie['title'] }}</h6>
                                    <div class="movie-time d-flex align-items-center my-2 justify-content-center">
                                       <div class="badge badge-secondary p-1 mr-2">{{ $topRatedMovie['vote_average'] * 10 . '%' }}</div>
                                       <span class="text-white">
                                          @if (isset($topRatedMovie['release_date']))
                                          {{ Carbon\Carbon::parse($topRatedMovie['release_date'])->format('M d, Y')}}
                                          @endif
                                       </span>
                                    </div>
                                    <div class="hover-buttons">
                                       <span class="btn btn-hover">
                                       <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Watch Now
                                       </span>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </li>
                        @endforeach
                       </ul>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        
        {{-- TOP Popular TV Shows --}}
        <section id="iq-topten">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-sm-12 overflow-hidden">
                    <div class="iq-main-header d-flex align-items-center justify-content-between">
                       <h4 class="main-title topten-title-sm">Top 10 Popular TV Shows</h4>
                    </div>
                    <div class="topten-contens">
                       <h4 class="main-title topten-title">Top 10 Popular TV Shows</h4>
                       <ul id="top-ten-slider" class="list-inline p-0 m-0  d-flex align-items-center">
                          @foreach ($topTvShows as $topTvShow)
                              <li>
                                 <a href="{{ route('tv.show', $topTvShow['id']) }}">
                                    @if (isset($topTvShow['backdrop_path']))
                                    <img src="https://www.themoviedb.org/t/p/w1280{{$topTvShow['backdrop_path']}}" class="img-fluid w-100" alt="">
                                    @else
                                    <img src="{{ asset('asset/html/frontend/html/images/not-found-image-p.jpg') }}" class="img-fluid w-100" alt="">
                                    @endif
                                 </a>
                              </li>
                          @endforeach
                       </ul>
                       <div class="vertical_s">
                          <ul id="top-ten-slider-nav" class="list-inline p-0 m-0  d-flex align-items-center">
                           @foreach ($topTvShows as $topTvShow)
                              @if(isset($topTvShow['backdrop_path']))
                              <li style="cursor: pointer">
                                 <div class="block-images position-relative">
                                    <a href="{{ route('tv.show', $topTvShow['id']) }}">
                                       @if (isset($topTvShow['backdrop_path']))
                                       <img src="https://www.themoviedb.org/t/p/w1280{{$topTvShow['backdrop_path']}}" class="img-fluid w-100" alt="">
                                       @else
                                       <img src="{{ asset('asset/html/frontend/html/images/not-found-image-p.jpg') }}" class="img-fluid w-100" alt="">
                                       @endif
                                    </a>
                                    <div class="block-description">
                                       <h5>{{ $topTvShow['name'] }}</h5>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <div class="badge badge-secondary p-1 mr-2"> {{ $topTvShow['vote_average'] * 10 . '%' }}</div>
                                          <span class="text-white">
                                             @if(isset($topTvShow['first_air_date']))
                                             {{Carbon\Carbon::parse($topTvShow['first_air_date'])->format('M d, Y')}}
                                             @endif
                                          </span>
                                       </div>
                                       <div class="hover-buttons">   
                                          <a href="{{ route('tv.show', $topTvShow['id']) }}" class="btn btn-hover" tabindex="0">
                                          <i class="fa fa-play mr-1" aria-hidden="true"></i>Watch Now
                                          </a>
                                       </div>
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
           </div>
        </section>
        
        {{-- Latest Movie --}}
        <section id="parallex" class="parallax-window" style="background: url('https://www.themoviedb.org/t/p/w1280{{$upcomingMovies['backdrop_path']}}') center center!important">
           <div class="container-fluid h-100">
              <div class="row align-items-center justify-content-center h-100 parallaxt-details">
                 <div class="col-lg-4 r-mb-23">
                    <div class="text-left">
                        <span class="text-gold">#1 Upcoming Movie</span>
                        <h4>{{ $upcomingMovies['title'] }}</h4>
                        <div class="parallax-ratting d-flex align-items-center mt-3 mb-3">
                          <ul
                             class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                             <li><a href="javascript:void(0);" class="text-primary"><i class="fa fa-star"
                                aria-hidden="true"></i></a></li>
                             <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star"
                                aria-hidden="true"></i></a></li>
                             <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star"
                                aria-hidden="true"></i></a></li>
                             <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star"
                                aria-hidden="true"></i></a></li>
                             <li><a href="javascript:void(0);" class="pl-2 text-primary"><i class="fa fa-star-half-o"
                                aria-hidden="true"></i></a></li>
                          </ul>
                          <span class="text-white ml-3">{{ $upcomingMovies['vote_average'] }} (TMDB)</span>
                        </div>
                       <div class="movie-time d-flex align-items-center mb-3">
                          <div class="badge badge-secondary text-uppercase mr-3">{{ $upcomingMovies['original_language'] }}</div>
                          <h6 class="text-white">
                              @if (isset($upcomingMovies['release_date']))
                              {{Carbon\Carbon::parse($upcomingMovies['release_date'])->format('M d, Y')}}
                              @endif
                           </h6>
                       </div>
                       <p>{{ $upcomingMovies['overview'] }}</p>
                       <div class="parallax-buttons">
                          <a href="{{ route('movie.show', $upcomingMovies['id']) }}" class="btn btn-hover">Watch Now</a>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-8">
                    <div class="parallax-img">
                       <a href="{{ route('movie.show', $upcomingMovies['id']) }}">
                        @if (isset($upcomingMovies['backdrop_path']))
                        <img src="https://www.themoviedb.org/t/p/w1280{{$upcomingMovies['backdrop_path']}}" class="img-fluid w-100" alt="img">
                        @else
                        <img src="{{ asset('asset/html/frontend/html/images/not-found-image-p.jpg') }}" class="img-fluid w-100" alt="img">
                        @endif
                       </a>
                    </div>
                 </div>
              </div>
           </div>
        </section>

        {{-- TRENDING TODAY--}}
        <section id="iq-trending" class="s-margin">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-sm-12 overflow-hidden">
                    <div class="iq-main-header d-flex align-items-center justify-content-between">                      
                       <h4 class="main-title"><a href="#">Trending Today</a></h4>                        
                    </div>
                    <div class="trending-contens">
                        <ul id="trending-slider-nav" class="list-inline p-0 mb-0 row align-items-center">
                           @foreach ($trendingDayMovies as $trendingDayMovie)
                              @if ($loop->index < 10)
                                 <li>
                                    <a href="javascript:void(0);">
                                       <div class="movie-slick position-relative">
                                          @if (isset($trendingDayMovie['backdrop_path']))
                                          <img src="https://www.themoviedb.org/t/p/w1280{{$trendingDayMovie['backdrop_path']}}" class="img-fluid" alt="">
                                          @else
                                          <img src="{{ asset('asset/html/frontend/html/images/not-found-image-trend.jpg') }}" class="img-fluid" alt="">
                                          @endif
                                       </div>
                                    </a>
                                 </li>
                              @endif
                           @endforeach
                        </ul>
                        <ul id="trending-slider" class="list-inline p-0 m-0  d-flex align-items-center">
                           @foreach ($trendingDayMovies as $trendingDayMovie)
                              @if ($loop->index < 10 && ($trendingDayMovie['media_type'] === 'movie' || $trendingDayMovie['media_type'] === 'tv'))
                              <li>
                                 <div class="tranding-block position-relative"
                                    style="background-image:@if (isset($trendingDayMovie['backdrop_path'])) 
                                                               url('https://www.themoviedb.org/t/p/w1280{{$trendingDayMovie['backdrop_path']}}')
                                                            @endif
                                    ">
                                    <div class="trending-custom-tab">
                                       <div class="tab-title-info position-relative">
                                          <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center"
                                             role="tablist">
                                             <li class="nav-item">
                                                <a class="nav-link active show" data-toggle="pill" href="#trending-data1"
                                                   role="tab" aria-selected="true">Overview</a>
                                             </li>
                                          </ul>
                                       </div>

                                       {{--if Movie --}}
                                       @if ($trendingDayMovie['media_type'] === 'movie')
                                       <div class="trending-content mb-3">
                                          <div id="trending-data1" class="overview-tab tab-pane fade active show">
                                             <div class="trending-info align-items-center w-100 animated fadeInUp">
                                                <a href="javascript:void(0);" tabindex="0">
                                                   <div class="res-logo">
                                                      <div class="channel-logo">
                                                         <img src="{{ asset('asset/html/frontend/html/images/logo.png') }}" class="c-logo" alt="streamit">
                                                      </div>
                                                   </div>
                                                </a>
                                                <h1 class="trending-text big-title text-uppercase">{{ $trendingDayMovie['title'] }}</h1>
                                                <div class="d-flex align-items-center text-white text-detail">
                                                   <span class="badge badge-secondary p-3">{{ $trendingDayMovie['vote_average'] * 10 . '%' }}</span>
                                                   <span class="trending-year">
                                                      @if(isset($trendingDayMovie['release_date']))
                                                      {{Carbon\Carbon::parse($trendingDayMovie['release_date'])->format('M d, Y')}}
                                                      @endif
                                                   </span>
                                                </div>
                                                <p class="trending-dec">{{$trendingDayMovie['overview']}}</p>
                                                <div class="d-flex align-items-center p-0">
                                                   <a href="{{ route('movie.show', $trendingDayMovie['id']) }}" class="btn btn-hover mr-2" tabindex="0"><i
                                                      class="fa fa-play mr-2" aria-hidden="true"></i>Watch Now</a>
                                                </div>
                                                <div class="trending-list mt-4">
                                                   {{-- <div class="text-primary title">Starring: 
                                                      <span class="text-body">Wagner
                                                      Moura, Boyd Holbrook, Joanna</span>
                                                   </div> --}}
                                                   <div class="text-primary title">Original Language: <span class="text-body text-uppercase">{{$trendingDayMovie['original_language']}}</span>
                                                   <div class="text-primary title">Genres: 
                                                      @foreach ($trendingDayMovie['genre_ids'] as $genre)
                                                      <span class="text-body">
                                                         {{$genres->get($genre)}}@if(!$loop->last), @endif
                                                      </span>
                                                      @endforeach
                                                   </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       {{--if TV Show --}}
                                       @elseif ($trendingDayMovie['media_type'] === 'tv')
                                       <div class="trending-content mb-3">
                                          <div id="trending-data1" class="overview-tab tab-pane fade active show">
                                             <div class="trending-info align-items-center w-100 animated fadeInUp">
                                                <a href="javascript:void(0);" tabindex="0">
                                                   <div class="res-logo">
                                                      <div class="channel-logo">
                                                         <img src="{{ asset('asset/html/frontend/html/images/logo.png') }}" class="c-logo" alt="streamit">
                                                      </div>
                                                   </div>
                                                </a>
                                                <h1 class="trending-text big-title text-uppercase">{{ $trendingDayMovie['name'] }}</h1>
                                                <div class="d-flex align-items-center text-white text-detail">
                                                   <span class="badge badge-secondary p-3">{{ $trendingDayMovie['vote_average'] * 10 . '%' }}</span>
                                                   <span class="trending-year">
                                                      @if(isset($trendingDayMovie['first_air_date']))
                                                      {{Carbon\Carbon::parse($trendingDayMovie['first_air_date'])->format('M d, Y')}}
                                                      @endif
                                                   </span>
                                                </div>
                                                <p class="trending-dec">{{$trendingDayMovie['overview']}}</p>
                                                <div class="p-btns">
                                                   <div class="d-flex align-items-center p-0">
                                                      <a href="{{ route('tv.show', $trendingDayMovie['id']) }}" class="btn btn-hover mr-2" tabindex="0"><i
                                                         class="fa fa-play mr-2" aria-hidden="true"></i>Watch Now</a>
                                                   </div>
                                                </div>
                                                <div class="trending-list mt-4">
                                                   <div class="text-primary title">Original Language: <span class="text-body text-uppercase">{{$trendingDayMovie['original_language']}}</span>
                                                   <div class="text-primary title">Genres: 
                                                      @foreach ($trendingDayMovie['genre_ids'] as $genre)
                                                      <span class="text-body">
                                                         {{$genres->get($genre)}}@if(!$loop->last), @endif
                                                      </span>
                                                      @endforeach
                                                   </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       @endif
                                       
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