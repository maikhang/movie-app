@extends('client.master')

@section('content')
<section class="m-profile setting-wrapper">        
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="sign-user_card text-center">
                    @if(isset($actor['profile_path']))
                        <img src="https://image.tmdb.org/t/p/original{{ $actor['profile_path'] }}" class="img-fluid d-block mx-auto mb-3" alt="img">
                    @else
                        <img src="{{ asset('asset/html/frontend/html/images/not-found-image.jpg') }}" class="img-fluid d-block mx-auto mb-3" alt="img">
                    @endif
                    <h4>{{ $actor['name'] }}</h4>
                    <ul class="list-inline p-0 mt-4 share-icons music-play-lists">
                        @if ($social['facebook_id'] && $social['facebook_id'] != 'null')
                        <a href="https://facebook.com/{{ $social['facebook_id'] }}" target="_blank">
                            <li><span><i class="ri-facebook-fill"></i></span></li>
                        </a>
                        @endif
                        @if ($social['twitter_id'] && $social['twitter_id'] != 'null')
                        <a href="https://twitter.com/{{ $social['twitter_id'] }}" target="_blank">
                            <li><span><i class="ri-twitter-fill"></i></span></li>
                        </a>
                        @endif
                        @if ($actor['homepage'] && $actor['homepage'] != 'null')
                        <a href="{{ $actor['homepage'] }}" target="_blank">
                            <li><span><i class="ri-link"></i></span></li>
                        </a>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="sign-user_card">
                    <h5 class="mb-3 pb-3 a-border">Personal Details</h5>
                    <div class="row align-items-center justify-content-between mb-3">
                        <div class="col-md-4">
                            <span class="text-light font-size-14">Date of Birth</span>
                            <p class="mb-0">
                                @if (isset($actor['birthday']))
                                {{Carbon\Carbon::parse($actor['birthday'])->format('M d, Y') }} ({{ Carbon\Carbon::parse($actor['birthday'])->age }} Year Olds)
                                @endif
                            </p>
                        </div>
                        <div class="col-md-4">
                            <span class="text-light font-size-14">Country</span>
                            <p class="mb-0">{{ $actor['place_of_birth'] }}</p>
                        </div>
                        <div class="col-md-4">
                            <span class="text-light font-size-14">Known For Department</span>
                            <p class="mb-0">{{ $actor['known_for_department'] }}</p>
                        </div>
                    </div>

                    <div class="row align-items-center justify-content-between mb-3">
                        <div class="col-md-12">
                            <span class="text-light font-size-14">Biography</span>
                            <p class="mb-0">{{ $actor['biography'] }}</p>
                        </div>
                        
                    </div>
                    
                    <h5 class="pb-3 a-border">Known For</h5>
                    <section id="iq-favorites">
                        <div class="row">
                            <div class="col-sm-12 overflow-hidden">
                                <div class="iq-main-header d-flex align-items-center justify-content-between">                     
                                </div>
                                <div class="favorites-contens" style="margin-top:46px">
                                <style>
                                    a:hover{color:white!important}
                                </style>
                                <ul class="list-inline favorites-slider row p-0 mb-0">
                                @foreach ($knownFors as $cast)
                                {{-- If Movie --}}
                                @if ($cast['poster_path'] && $cast['media_type'] === 'movie')
                                <li class="slide-item" style="color:white;">
                                    <a href="{{ route('movie.show', $cast['id']) }}">
                                        <div class="block-images position-relative" style="text-align: center">
                                            <div class="img-box">
                                                @if(isset($cast['poster_path']))
                                                    <img src="https://image.tmdb.org/t/p/original{{ $cast['poster_path'] }}" class="img-fluid" alt="img">
                                                @else
                                                    <img src="{{ asset('asset/html/frontend/html/images/not-found-image.jpg') }}" class="img-fluid" alt="img">
                                                @endif
                                            </div>
                                            <div class="block-description">
                                            <span><b>{{ $cast['title'] }}</b></span>
                                            <div class="hover-buttons">
                                                <span class="btn btn-hover">View Detail</span>
                                            </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endif
                                {{-- If TV --}}
                                @if ($cast['poster_path'] && $cast['media_type'] === 'tv')
                                <li class="slide-item" style="color:white;">
                                    <a href="{{ route('tv.show', $cast['id']) }}">
                                        <div class="block-images position-relative" style="text-align: center">
                                            <div class="img-box">
                                            <img src="https://image.tmdb.org/t/p/original{{$cast['poster_path']}}" class="img-fluid" alt="">
                                            </div>
                                            <div class="block-description">
                                            <span><b>{{ $cast['name'] }}</b></span>
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
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="setting-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <div class="sign-user_card" style="background: var(--iq-bg1);">
                    <h4 class="main-title mb-4 a-border">Credits</h4>
                    <ul>
                        <h5 class="mb-1">Movies:</h5>
                        @foreach ($castMovies as $movie)
                        {{-- If Movie --}}
                        @if ($movie['media_type'] === 'movie')
                            <li>
                                @if (isset($movie['release_date']))
                                {{ Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }} &middot;
                                @endif
                                <strong><a href="{{ route('movie.show', $movie['id']) }}" style="color:var(--iq-primary); text-decoration: underline!important;">{{ $movie['title'] }}</a></strong>
                                as @if ($movie['character'])
                                    {{ $movie['character'] }}
                                    @else "Not Known"
                                @endif
                            </li>
                        @endif
                        @endforeach
                       
                        <h5 class="mb-1 mt-4">TV Shows:</h5>
                        @foreach ($castMovies as $movie)
                        {{-- If TV --}}
                        @if ($movie['media_type'] === 'tv')
                            <li>
                                @if(isset($movie['first_air_date']))
                                {{ Carbon\Carbon::parse($movie['first_air_date'])->format('M d, Y') }} &middot; 
                                @endif
                                <strong><a href="{{ route('tv.show', $movie['id']) }}" style="color:var(--iq-primary); text-decoration: underline!important;">{{ $movie['name'] }}</a></strong>
                                as @if ($movie['character'])
                                    {{ $movie['character'] }}
                                    @else "Not Known"
                                @endif
                            </li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection