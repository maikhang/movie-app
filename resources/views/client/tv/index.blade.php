@extends('client.master')

@section('content')
<div class="main-content main-block-custom">
    {{-- Popular Movies --}}
    <section id="iq-favorites">
       <div class="container-fluid">
          <div class="infinite-scroll row">
               @foreach ($popularTvs as $popularTv)
                  <div class="col-md-3 col-sm-6 mb-3 item-scroll">
                     <a href="{{ route('tv.show', $popularTv['id']) }}">
                        <div class="block-images position-relative">
                           <div class="img-box" style="opacity: 0.4">
                              @if(isset($popularTv['poster_path']))
                                 <img src="https://www.themoviedb.org/t/p/w342{{$popularTv['poster_path']}}" class="img-fluid" alt="">
                              @else
                                 <img src="{{ asset('asset/html/frontend/html/images/not-found-image.jpg') }}" class="img-fluid" alt="">
                              @endif
                           </div>
                           <div class="block-description text-center" style="opacity: 1">
                              <h6>{{ $popularTv['name'] }}</h6>
                              <div class="movie-time d-flex align-items-center my-2 justify-content-center">
                                 <div class="badge badge-secondary p-1 mr-2">{{ $popularTv['vote_average'] * 10 . '%' }}</div>
                                 <span class="text-white">
                                    @if (isset($popularTv['first_air_date']))
                                    {{ Carbon\Carbon::parse($popularTv['first_air_date'])->format('M d, Y')  }}
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
   path: '/tvs/page/@{{#}}',
   append: '.item-scroll',
});
</script>
@endsection