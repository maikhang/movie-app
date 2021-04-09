@extends('client.master')

@section('content')
<div class="main-content main-block-custom">
    {{-- Popular Movies --}}
    <section id="iq-favorites">
       <div class="container-fluid">
          <div class="infinite-scroll row">
               @foreach ($popularActors as $popularActor)
                  <div class="col-md-3 col-sm-6 mb-3 item-scroll">
                     <a href="{{ route('actor.show', $popularActor['id']) }}">
                        <div class="block-images position-relative">
                           <div class="img-box" style="opacity: 0.4">
                                @if(isset($popularActor['profile_path']))
                                    <img src="https://www.themoviedb.org/t/p/w342{{$popularActor['profile_path']}}" class="img-fluid" alt="">
                                @else
                                    <img src="{{ asset('asset/html/frontend/html/images/not-found-image.jpg') }}" class="img-fluid" alt="">
                                @endif
                           </div>
                           <div class="block-description text-center" style="opacity: 1; justify-content: flex-end; padding: 0 15px 30px 15px;">
                              <h4>{{ $popularActor['name'] }}</h4>
                              <div class="hover-buttons">
                                 <span class="btn btn-hover">
                                 More Detail
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
   path: '/actors/page/@{{#}}',
   append: '.item-scroll',
});
</script>
@endsection