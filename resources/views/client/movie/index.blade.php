@extends('client.master')

@section('content')
<div class="main-content main-block-custom">
    {{-- Popular Movies --}}
    <section id="iq-favorites">
       <div class="container-fluid">
          <div class="infinite-scroll row">
               @foreach ($popularMovies as $popularMovie)
                  <div class="col-md-3 col-sm-6 mb-3 item-scroll">
                     <a href="{{ route('movie.show', $popularMovie['id']) }}">
                        <div class="block-images position-relative">
                           <div class="img-box" style="opacity: 0.4">
                              @if(isset($popularMovie['poster_path']))
                                 <img src="https://www.themoviedb.org/t/p/w342{{$popularMovie['poster_path']}}" class="img-fluid" alt="">
                              @else
                                 <img src="{{ asset('asset/html/frontend/html/images/not-found-image.jpg') }}" class="img-fluid" alt="">
                              @endif
                           </div>
                           <div class="block-description text-center" style="opacity: 1">
                              <h6>{{ $popularMovie['title'] }}</h6>
                              <div class="movie-time d-flex align-items-center my-2 justify-content-center">
                                 <div class="badge badge-secondary p-1 mr-2">{{ $popularMovie['vote_average'] * 10 . '%' }}</div>
                                 <span class="text-white">
                                    @if (isset($popularMovie['release_date']))
                                    {{ Carbon\Carbon::parse($popularMovie['release_date'])->format('M d, Y')  }}
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
                  </div>
               @endforeach
             </div>
          </div>
       </div>
    </section>
</div>
@endsection

@section('scripts')
<script src="{{ asset('asset/infinite-scroll/infinite-scroll.pkgd.min.js') }}"></script>
<script>
   $('.infinite-scroll').infiniteScroll({
   // options
   path: '/movies/page/@{{#}}',
   append: '.item-scroll',
});
</script>
@endsection