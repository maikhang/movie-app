@extends('client.master')

@section('content')
    <!-- Slider Start -->
    <section id="home" class="iq-main-slider p-0">
        <div id="home-slider" class="slider m-0 p-0">
           <div class="slide slick-bg s-bg-1">
              <div class="container-fluid position-relative h-100">
                 <div class="slider-inner h-100">
                    <div class="row align-items-center  h-100">
                       <div class="col-xl-6 col-lg-12 col-md-12">
                          <a href="javascript:void(0);">
                             <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                                <img src="{{ asset('asset/html/frontend/html/images/logo.png') }}" class="c-logo" alt="streamit">
                             </div>
                          </a>
                          <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                             data-delay-in="0.6">bushland</h1>
                          <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="1">
                             <span class="badge badge-secondary p-2">18+</span>
                             <span class="ml-3">2 Seasons</span>
                          </div>
                          <p data-animation-in="fadeInUp" data-delay-in="1.2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                             dummy text ever since the 1500s.
                          </p>
                          <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.2">
                             <a href="{{ asset('asset/html/frontend/html/show-details.html') }}" class="btn btn-hover"><i class="fa fa-play mr-2"
                                aria-hidden="true"></i>Play Now</a>
                             <a href="{{ asset('asset/html/frontend/html/show-details.html') }}" class="btn btn-link">More details</a>
                          </div>
                       </div>
                    </div>
                    <div class="trailor-video">
                       <a href="{{ asset('asset/html/frontend/html/video/trailer.mp4') }}" class="video-open playbtn">
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
           <div class="slide slick-bg s-bg-2">
              <div class="container-fluid position-relative h-100">
                 <div class="slider-inner h-100">
                    <div class="row align-items-center  h-100">
                       <div class="col-xl-6 col-lg-12 col-md-12">
                          <a href="javascript:void(0);">
                             <div class="channel-logo" data-animation-in="fadeInLeft">
                                <img src="{{ asset('asset/html/frontend/html/images/logo.png') }}" class="c-logo" alt="streamit">
                             </div>
                          </a>
                          <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft">sail coaster</h1>
                          <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="0.5">
                             <span class="badge badge-secondary p-2">16+</span>
                             <span class="ml-3">2h 40m</span>
                          </div>
                          <p data-animation-in="fadeInUp" data-delay-in="0.7">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                             dummy text ever since the 1500s.
                          </p>
                          <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1">
                             <a href="{{ asset('asset/html/frontend/html/') }}movie-details.html" class="btn btn-hover"><i class="fa fa-play mr-2"
                                aria-hidden="true"></i>Play Now</a>
                             <a href="{{ asset('asset/html/frontend/html/') }}movie-details.html" class="btn btn-link">More details</a>
                          </div>
                       </div>
                    </div>
                    <div class="trailor-video">
                       <a href="{{ asset('asset/html/frontend/html/') }}video/trailer.mp4" class="video-open playbtn">
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
           <div class="slide slick-bg s-bg-3">
              <div class="container-fluid position-relative h-100">
                 <div class="slider-inner h-100">
                    <div class="row align-items-center  h-100">
                       <div class="col-xl-6 col-lg-12 col-md-12">
                          <a href="javascript:void(0);">
                             <div class="channel-logo" data-animation-in="fadeInLeft">
                                <img src="{{ asset('asset/html/frontend/html/') }}images/logo.png" class="c-logo" alt="streamit">
                             </div>
                          </a>
                          <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft">the army</h1>
                          <div class="d-flex align-items-center" data-animation-in="fadeInUp" data-delay-in="0.5">
                             <span class="badge badge-secondary p-2">20+</span>
                             <span class="ml-3">3h</span>
                          </div>
                          <p data-animation-in="fadeInUp" data-delay-in="0.7">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                             dummy text ever since the 1500s.
                          </p>
                          <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1">
                             <a href="{{ asset('asset/html/frontend/html/') }}movie-details.html" class="btn btn-hover"><i class="fa fa-play mr-2"
                                aria-hidden="true"></i>Play Now</a>
                             <a href="{{ asset('asset/html/frontend/html/') }}movie-details.html" class="btn btn-link">More details</a>
                          </div>
                       </div>
                    </div>
                    <div class="trailor-video">
                       <a href="{{ asset('asset/html/frontend/html/') }}video/trailer.mp4" class="video-open playbtn">
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
        <section id="iq-favorites">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-sm-12 overflow-hidden">
                    <div class="iq-main-header d-flex align-items-center justify-content-between">
                       <h4 class="main-title"><a href="{{ asset('asset/html/frontend/html/') }}movie-category.html">Your Favorites</a></h4>                      
                    </div>
                    <div class="favorites-contens">
                       <ul class="favorites-slider list-inline  row p-0 mb-0">
                          <li class="slide-item">
                             <a href="{{ asset('asset/html/frontend/html/movie-details.html') }}">
                                <div class="block-images position-relative">
                                   <div class="img-box">
                                      <img src="{{ asset('asset/html/frontend/html/images/favorite/01.jpg') }}" class="img-fluid" alt="">
                                   </div>
                                   <div class="block-description">
                                      <h6>Champions</h6>
                                      <div class="movie-time d-flex align-items-center my-2">
                                         <div class="badge badge-secondary p-1 mr-2">13+</div>
                                         <span class="text-white">2h 30m</span>
                                      </div>
                                      <div class="hover-buttons">
                                         <span class="btn btn-hover">
                                         <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                         Play Now
                                         </span>
                                      </div>
                                   </div>
                                   <div class="block-social-info">
                                      <ul class="list-inline p-0 m-0 music-play-lists">
                                         <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                         <li><span><i class="ri-heart-fill"></i></span></li>
                                         <li><span><i class="ri-add-line"></i></span></li>
                                      </ul>
                                   </div>
                                </div>
                             </a>
                          </li>
                          <li class="slide-item">
                             <a href="{{ asset('asset/html/frontend/html/') }}show-details.html">
                                <div class="block-images position-relative">
                                   <div class="img-box">
                                      <img src="{{ asset('asset/html/frontend/html/images/favorite/02.jpg') }}" class="img-fluid" alt="">
                                   </div>
                                   <div class="block-description">
                                      <h6>Last Race</h6>
                                      <div class="movie-time d-flex align-items-center my-2">
                                         <div class="badge badge-secondary p-1 mr-2">7+</div>
                                         <span class="text-white">2 Seasons</span>
                                      </div>
                                      <div class="hover-buttons">
                                         <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                         Play Now
                                         </span>
                                      </div>
                                   </div>
                                   <div class="block-social-info">
                                      <ul class="list-inline p-0 m-0 music-play-lists">
                                         <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                         <li><span><i class="ri-heart-fill"></i></span></li>
                                         <li><span><i class="ri-add-line"></i></span></li>
                                      </ul>
                                   </div>
                                </div>
                             </a>
                          </li>
                          <li class="slide-item">
                             <a href="{{ asset('asset/html/frontend/html/movie-details.html') }}">
                                <div class="block-images position-relative">
                                   <div class="img-box">
                                      <img src="{{ asset('asset/html/frontend/html/images/favorite/03.jpg') }}" class="img-fluid" alt="">
                                   </div>
                                   <div class="block-description">
                                      <h6>Boop Bitty</h6>
                                      <div class="movie-time d-flex align-items-center my-2">
                                         <div class="badge badge-secondary p-1 mr-2">15+</div>
                                         <span class="text-white">2h 30m</span>
                                      </div>
                                      <div class="hover-buttons">
                                         <span class="btn btn-hover">
                                         <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                         Play Now
                                         </span>
                                      </div>
                                   </div>
                                   <div class="block-social-info">
                                      <ul class="list-inline p-0 m-0 music-play-lists">
                                         <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                         <li><span><i class="ri-heart-fill"></i></span></li>
                                         <li><span><i class="ri-add-line"></i></span></li>
                                      </ul>
                                   </div>
                                </div>
                             </a>
                          </li>
                          <li class="slide-item">
                             <a href="{{ asset('asset/html/frontend/html/show-details.html') }}">
                                <div class="block-images position-relative">
                                   <div class="img-box">
                                      <img src="{{ asset('asset/html/frontend/html/images/favorite/04.jpg') }}" class="img-fluid" alt="">
                                   </div>
                                   <div class="block-description">
                                      <h6>Dino Land</h6>
                                      <div class="movie-time d-flex align-items-center my-2">
                                         <div class="badge badge-secondary p-1 mr-2">18+</div>
                                         <span class="text-white">3 Seasons</span>
                                      </div>
                                      <div class="hover-buttons">
                                         <span class="btn btn-hover">
                                         <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                         Play Now
                                         </span>
                                      </div>
                                   </div>
                                   <div class="block-social-info">
                                      <ul class="list-inline p-0 m-0 music-play-lists">
                                         <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                         <li><span><i class="ri-heart-fill"></i></span></li>
                                         <li><span><i class="ri-add-line"></i></span></li>
                                      </ul>
                                   </div>
                                </div>
                             </a>
                          </li>
                          <li class="slide-item">
                             <a href="{{ asset('asset/html/frontend/html/show-details.html') }}">
                                <div class="block-images position-relative">
                                   <div class="img-box">
                                      <img src="{{ asset('asset/html/frontend/html/images/favorite/05.jpg') }}" class="img-fluid" alt="">
                                   </div>
                                   <div class="block-description">
                                      <h6>Jaction action</h6>
                                      <div class="movie-time d-flex align-items-center my-2">
                                         <div class="badge badge-secondary p-1 mr-2">10+</div>
                                         <span class="text-white">1 Season</span>
                                      </div>
                                      <div class="hover-buttons">
                                         <span class="btn btn-hover">
                                         <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                         Play Now
                                         </span>
                                      </div>
                                   </div>
                                   <div class="block-social-info">
                                      <ul class="list-inline p-0 m-0 music-play-lists">
                                         <li><span><i class="ri-volume-mute-fill"></i></span></li>
                                         <li><span><i class="ri-heart-fill"></i></span></li>
                                         <li><span><i class="ri-add-line"></i></span></li>
                                      </ul>
                                   </div>
                                </div>
                             </a>
                          </li>
                       </ul>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        
        <section id="iq-topten">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-sm-12 overflow-hidden">
                    <div class="iq-main-header d-flex align-items-center justify-content-between">
                       <h4 class="main-title topten-title-sm">Top 10 in India</h4>
                    </div>
                    <div class="topten-contens">
                       <h4 class="main-title topten-title">Top 10 in India</h4>
                       <ul id="top-ten-slider" class="list-inline p-0 m-0  d-flex align-items-center">
                          <li>
                             <a href="movie-details.html">
                             <img src="{{ asset('asset/html/frontend/html/images/top-10/01.jpg') }}" class="img-fluid w-100" alt="">
                             </a>
                          </li>
                          <li>
                             <a href="movie-details.html">
                             <img src="{{ asset('asset/html/frontend/html/images/top-10/02.jpg') }}" class="img-fluid w-100" alt="">
                             </a>
                          </li>
                          <li>
                             <a href="movie-details.html">
                             <img src="{{ asset('asset/html/frontend/html/images/top-10/03.jpg') }}" class="img-fluid w-100" alt="">
                             </a>
                          </li>
                          <li>
                             <a href="movie-details.html">
                             <img src="{{ asset('asset/html/frontend/html/images/top-10/04.jpg') }}" class="img-fluid w-100" alt="">
                             </a>
                          </li>
                          <li>
                             <a href="movie-details.html">
                             <img src="{{ asset('asset/html/frontend/html/images/top-10/05.jpg') }}" class="img-fluid w-100" alt="">
                             </a>
                          </li>
                          <li>
                             <a href="movie-details.html">
                             <img src="{{ asset('asset/html/frontend/html/images/top-10/06.jpg') }}" class="img-fluid w-100" alt="">
                             </a>
                          </li>
                       </ul>
                       <div class="vertical_s">
                          <ul id="top-ten-slider-nav" class="list-inline p-0 m-0  d-flex align-items-center">
                             <li>
                                <div class="block-images position-relative">
                                   <a href="movie-details.html">
                                   <img src="{{ asset('asset/html/frontend/html/images/top-10/01.jpg') }}" class="img-fluid w-100" alt="">
                                   </a>
                                   <div class="block-description">
                                      <h5>The Illusion</h5>
                                      <div class="movie-time d-flex align-items-center my-2">
                                         <div class="badge badge-secondary p-1 mr-2">10+</div>
                                         <span class="text-white">3h 15m</span>
                                      </div>
                                      <div class="hover-buttons">
                                         <a href="movie-details.html" class="btn btn-hover" tabindex="0">
                                         <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                         </a>
                                      </div>
                                   </div>
                                </div>
                             </li>
                             <li>
                                <div class="block-images position-relative">
                                   <a href="movie-details.html">
                                   <img src="{{ asset('asset/html/frontend/html/images/top-10/02.jpg') }}" class="img-fluid w-100" alt="">
                                   </a>
                                   <div class="block-description">
                                      <h5>Burning</h5>
                                      <div class="movie-time d-flex align-items-center my-2">
                                         <div class="badge badge-secondary p-1 mr-2">13+</div>
                                         <span class="text-white">2h 20m</span>
                                      </div>
                                      <div class="hover-buttons">
                                         <a href="movie-details.html" class="btn btn-hover" tabindex="0">
                                         <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                         </a>
                                      </div>
                                   </div>
                                </div>
                             </li>
                             <li>
                                <div class="block-images position-relative">
                                   <a href="movie-details.html">
                                   <img src="{{ asset('asset/html/frontend/html/images/top-10/03.jpg') }}" class="img-fluid w-100" alt="">
                                   </a>
                                   <div class="block-description">
                                      <h5>Hubby Kubby</h5>
                                      <div class="movie-time d-flex align-items-center my-2">
                                         <div class="badge badge-secondary p-1 mr-2">9+</div>
                                         <span class="text-white">2h 40m</span>
                                      </div>
                                      <div class="hover-buttons">
                                         <a href="movie-details.html" class="btn btn-hover" tabindex="0">
                                         <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                         </a>
                                      </div>
                                   </div>
                                </div>
                             </li>
                             <li>
                                <div class="block-images position-relative">
                                   <a href="movie-details.html">
                                   <img src="{{ asset('asset/html/frontend/html/images/top-10/04.jpg') }}" class="img-fluid w-100" alt="">
                                   </a>
                                   <div class="block-description">
                                      <h5>Open Dead Shot</h5>
                                      <div class="movie-time d-flex align-items-center my-2">
                                         <div class="badge badge-secondary p-1 mr-2">16+</div>
                                         <span class="text-white">1h 40m</span>
                                      </div>
                                      <div class="hover-buttons">
                                         <a href="movie-details.html" class="btn btn-hover" tabindex="0">
                                         <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                         </a>
                                      </div>
                                   </div>
                                </div>
                             </li>
                             <li>
                                <div class="block-images position-relative">
                                   <a href="movie-details.html">
                                   <img src="{{ asset('asset/html/frontend/html/images/top-10/05.jpg') }}" class="img-fluid w-100" alt="">
                                   </a>
                                   <div class="block-description">
                                      <h5>Jumbo Queen</h5>
                                      <div class="movie-time d-flex align-items-center my-2">
                                         <div class="badge badge-secondary p-1 mr-2">15+</div>
                                         <span class="text-white">3h</span>
                                      </div>
                                      <div class="hover-buttons">
                                         <a href="movie-details.html" class="btn btn-hover" tabindex="0">
                                         <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                         </a>
                                      </div>
                                   </div>
                                </div>
                             </li>
                             <li>
                                <div class="block-images position-relative">
                                   <a href="movie-details.html">
                                   <img src="{{ asset('asset/html/frontend/html/images/top-10/06.jpg') }}" class="img-fluid w-100" alt="">
                                   </a>
                                   <div class="block-description">
                                      <h5>The Lost Journey</h5>
                                      <div class="movie-time d-flex align-items-center my-2">
                                         <div class="badge badge-secondary p-1 mr-2">20+</div>
                                         <span class="text-white">2h 15m</span>
                                      </div>
                                      <div class="hover-buttons">
                                         <a href="movie-details.html" class="btn btn-hover" tabindex="0">
                                         <i class="fa fa-play mr-1" aria-hidden="true"></i> Play Now
                                         </a>
                                      </div>
                                   </div>
                                </div>
                             </li>
                          </ul>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        
        <section id="parallex" class="parallax-window">
           <div class="container-fluid h-100">
              <div class="row align-items-center justify-content-center h-100 parallaxt-details">
                 <div class="col-lg-4 r-mb-23">
                    <div class="text-left">
                       <a href="javascript:void(0);">
                       <img src="{{ asset('asset/html/frontend/html/images/parallax/parallax-logo.png') }}" class="img-fluid" alt="bailey">
                       </a>
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
                          <span class="text-white ml-3">9.2 (lmdb)</span>
                       </div>
                       <div class="movie-time d-flex align-items-center mb-3">
                          <div class="badge badge-secondary mr-3">13+</div>
                          <h6 class="text-white">2h 30m</h6>
                       </div>
                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                       <div class="parallax-buttons">
                          <a href="movie-details.html" class="btn btn-hover">Play Now</a>
                          <a href="movie-details.html" class="btn btn-link">More details</a>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-8">
                    <div class="parallax-img">
                       <a href="movie-details.html">
                           <img src="{{ asset('asset/html/frontend/html/images/parallax/p1.jpg') }}" class="img-fluid w-100" alt="bailey">
                       </a>
                    </div>
                 </div>
              </div>
           </div>
        </section>

        {{-- TRENDING --}}
        <section id="iq-trending" class="s-margin">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-sm-12 overflow-hidden">
                    <div class="iq-main-header d-flex align-items-center justify-content-between">                      
                       <h4 class="main-title"><a href="show-category.html">Trending</a></h4>                        
                    </div>
                    <div class="trending-contens">
                       <ul id="trending-slider-nav" class="list-inline p-0 mb-0 row align-items-center">
                          <li>
                             <a href="javascript:void(0);">
                                <div class="movie-slick position-relative">
                                   <img src="{{ asset('asset/html/frontend/html/images/trending/01.jpg') }}" class="img-fluid" alt="">
                                </div>
                             </a>
                          </li>
                          <li>
                             <a href="javascript:void(0);">
                                <div class="movie-slick position-relative">
                                   <img src="{{ asset('asset/html/frontend/html/images/trending/02.jpg') }}" class="img-fluid" alt="">
                                </div>
                             </a>
                          </li>
                          <li>
                             <a href="javascript:void(0);">
                                <div class="movie-slick position-relative">
                                   <img src="{{ asset('asset/html/frontend/html/images/trending/03.jpg') }}" class="img-fluid" alt="">
                                </div>
                             </a>
                          </li>
                          <li>
                             <a href="javascript:void(0);">
                                <div class="movie-slick position-relative">
                                   <img src="{{ asset('asset/html/frontend/html/images/trending/04.jpg') }}" class="img-fluid" alt="">
                                </div>
                             </a>
                          </li>
                          <li>
                             <a href="javascript:void(0);">
                                <div class="movie-slick position-relative">
                                   <img src="{{ asset('asset/html/frontend/html/images/trending/05.jpg') }}" class="img-fluid" alt="">
                                </div>
                             </a>
                          </li>
                          <li>
                             <a href="javascript:void(0);">
                                <div class="movie-slick position-relative">
                                   <img src="{{ asset('asset/html/frontend/html/images/trending/06.jpg') }}" class="img-fluid" alt="">
                                </div>
                             </a>
                          </li>
                       </ul>
                       <ul id="trending-slider" class="list-inline p-0 m-0  d-flex align-items-center">
                          <li>
                             <div class="tranding-block position-relative"
                                style="background-image: url({{ asset('asset/html/frontend/html/images/trending/01.jpg') }});">
                                <div class="trending-custom-tab">
                                   <div class="tab-title-info position-relative">
                                      <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center"
                                         role="tablist">
                                         <li class="nav-item">
                                            <a class="nav-link active show" data-toggle="pill" href="#trending-data1"
                                               role="tab" aria-selected="true">Overview</a>
                                         </li>
                                         <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#trending-data2" role="tab"
                                               aria-selected="false">Episodes</a>
                                         </li>
                                         <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#trending-data3" role="tab"
                                               aria-selected="false">Trailers</a>
                                         </li>
                                         <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#trending-data4" role="tab"
                                               aria-selected="false">Similar Like This</a>
                                         </li>
                                      </ul>
                                   </div>
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
                                            <h1 class="trending-text big-title text-uppercase">the hero camp</h1>
                                            <div class="d-flex align-items-center text-white text-detail">
                                               <span class="badge badge-secondary p-3">18+</span>
                                               <span class="ml-3">3 Seasons</span>
                                               <span class="trending-year">2020</span>
                                            </div>
                                            <div class="d-flex align-items-center series mb-4">
                                               <a href="javascript:void(0);"><img src="{{ asset('asset/html/frontend/html/images/trending/trending-label.png') }}') }}"
                                                  class="img-fluid" alt=""></a>
                                               <span class="text-gold ml-3">#2 in Series Today</span>
                                            </div>
                                            <p class="trending-dec">Lorem Ipsum is simply dummy text of the printing and typesetting
                                               industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                            </p>
                                            <div class="p-btns">
                                               <div class="d-flex align-items-center p-0">
                                                  <a href="show-details.html" class="btn btn-hover mr-2" tabindex="0"><i
                                                     class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                                                  <a href="javascript:void(0);" class="btn btn-link" tabindex="0"><i class="ri-add-line"></i>My
                                                  List</a>
                                               </div>
                                            </div>
                                            <div class="trending-list mt-4">
                                               <div class="text-primary title">Starring: <span class="text-body">Wagner
                                                  Moura, Boyd Holbrook, Joanna</span>
                                               </div>
                                               <div class="text-primary title">Genres: <span class="text-body">Crime,
                                                  Action, Thriller, Biography</span>
                                               </div>
                                               <div class="text-primary title">This Is: <span class="text-body">Violent,
                                                  Forceful</span>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                     
                                   </div>
                                </div>
                             </div>
                          </li>

                       </ul>
                    </div>
                 </div>
              </div>
           </div>
        </section>
       
     </div>
@endsection