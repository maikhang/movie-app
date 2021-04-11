@if (strlen($search) > 0)
<li class="nav-item nav-icon iq-show">
   <a class="search-toggle device-search active">
@else
<li class="nav-item nav-icon">
   <a class="search-toggle device-search">
@endif
   <i class="ri-search-line"></i>
   </a>
   <div class="search-box iq-search-bar d-search">
      <div class="searchbox">
         <div class="form-group position-relative">

            <input wire:model.lazy="search" type="text" class="text search-input font-size-12" placeholder="Type here and press Enter to search...">
            <i class="search-link ri-search-line"></i>
            <i wire:loading class="ri-loader-4-line spinner" style="
               position: absolute;
               top: 20%;
               right: 3%;
            "></i>
         
            @if (strlen($search) >= 2)
            <div class="iq-sub-dropdown" style="width:100%; right:0">
               @if ($searchResults->count() > 0)
                  <div class="iq-card shadow-none m-0">
                     <div class="iq-card-body">
                        @foreach ($searchResults as $result)
                     {{-- If Movie --}}
                     @if ($result['media_type'] === 'movie')
                           <a href="{{ route('movie.show', $result['id']) }}" class="iq-sub-card">
                              <div class="media align-items-center">
                                 <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" class="img-fluid mr-3" alt="not found" style="width: 20%" />
                                 <div class="media-body">
                                    <small class="font-size-12">#Movie</small>
                                    <h6 class="mb-0 ">{{ $result['title'] }}</h6>
                                 </div>
                              </div>
                           </a>
                     @endif
                     {{-- If TV --}}
                     @if ($result['media_type'] === 'tv')
                           <a href="{{ route('tv.show', $result['id']) }}" class="iq-sub-card">
                              <div class="media align-items-center">
                                 <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" class="img-fluid mr-3" alt="not found" style="width: 20%" />
                                 <div class="media-body">
                                    <small class="font-size-12">#TV Show</small>
                                    <h6 class="mb-0 ">{{ $result['name'] }}</h6>
                                 </div>
                              </div>
                           </a>
                     @endif
                     {{-- If Movie --}}
                     @if ($result['media_type'] === 'person')
                           <a href="{{ route('actor.show', $result['id']) }}" class="iq-sub-card">
                              <div class="media align-items-center">
                                 <img src="https://image.tmdb.org/t/p/w185/{{ $result['profile_path'] }}" class="img-fluid mr-3" alt="not found" style="width: 20%" />
                                 <div class="media-body">
                                    <small class="font-size-12">#Person</small>
                                    <h6 class="mb-0 ">{{ $result['name'] }}</h6>
                                 </div>
                              </div>
                           </a>
                     @endif
                     @endforeach
                     </div>
                  </div>
               @else
                  <div class="iq-card shadow-none m-0">
                     <div class="iq-card-body">No results for "{{ $search }}"</div>
                  </div>
               @endif
            </div>
            @endif

         </div>
      </div>
   </div>    
</li>
