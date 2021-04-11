<header id="main-header">
    <div class="main-header">
       <div class="container-fluid">
          <div class="row">
             <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                   <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse"
                      data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                      aria-expanded="false" aria-label="Toggle navigation">
                      <div class="navbar-toggler-icon" data-toggle="collapse">
                         <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                         <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                         <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                      </div>
                   </a>
                   <a class="navbar-brand" href="{{ route('home.index') }}"> <img class="img-fluid logo" src="{{ asset('asset/html/frontend/html/images/logo.png') }}"
                      alt="streamit" /> </a>
                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <div class="menu-main-menu-container">
                        <ul id="top-menu" class="navbar-nav ml-auto">
                           <li class="menu-item">
                              <a href="{{ route('home.index') }}">Home</a>
                           </li>
                           <li class="menu-item">
                              <a href="{{ route('movie.index', 1) }}">Movies</a>
                           </li>
                           <li class="menu-item">
                              <a href="{{ route('tv.index', 1) }}">Tv Shows</a>
                           </li>
                           <li class="menu-item">
                              <a href="{{ route('actor.index', 1) }}">Actors</a>
                           </li>
                        </ul>
                     </div>
                   </div>
                   <div class="mobile-more-menu">
                      <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton"
                         data-toggle="more-toggle" aria-haspopup="true" aria-expanded="false">
                      <i class="ri-more-line"></i>
                      </a>
                      <div class="more-menu" aria-labelledby="dropdownMenuButton">
                         <div class="navbar-right position-relative">
                            <ul class="d-flex align-items-center justify-content-end list-inline m-0">
                              {{-- Dropdown Menu Search --}}
                              @livewire('search-dropdown')
                              
                               <li class="nav-item nav-icon">
                                  <a href="#" class="search-toggle position-relative">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22"
                                        height="22" class="noti-svg">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path
                                           d="M18 10a6 6 0 1 0-12 0v8h12v-8zm2 8.667l.4.533a.5.5 0 0 1-.4.8H4a.5.5 0 0 1-.4-.8l.4-.533V10a8 8 0 1 1 16 0v8.667zM9.5 21h5a2.5 2.5 0 1 1-5 0z" />
                                     </svg>
                                     <span class="bg-danger dots"></span>
                                  </a>
                                  <div class="iq-sub-dropdown">
                                     <div class="iq-card shadow-none m-0">
                                        <div class="iq-card-body">
                                           <a href="#" class="iq-sub-card">
                                              <div class="media align-items-center">
                                                 <div class="media-body">
                                                    <h6 class="mb-0 ">Boop Bitty</h6>
                                                    <small class="font-size-12"> just now</small>
                                                 </div>
                                              </div>
                                           </a>
                                           <a href="#" class="iq-sub-card">
                                              <div class="media align-items-center">
                                                 <div class="media-body">
                                                    <h6 class="mb-0 ">The Last Breath</h6>
                                                    <small class="font-size-12">15 minutes ago</small>
                                                 </div>
                                              </div>
                                           </a>
                                           <a href="#" class="iq-sub-card">
                                              <div class="media align-items-center">
                                                 <div class="media-body">
                                                    <h6 class="mb-0 ">The Hero Camp</h6>
                                                    <small class="font-size-12">1 hour ago</small>
                                                 </div>
                                              </div>
                                           </a>
                                        </div>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <a href="#" class="iq-user-dropdown search-toggle d-flex align-items-center">
                                  <img src="{{ asset('asset/html/frontend/html/images/user/icon.png') }}" class="img-fluid avatar-40 rounded-circle"
                                     alt="user">
                                  </a>
                                  <div class="iq-sub-dropdown iq-user-dropdown">
                                     <div class="iq-card shadow-none m-0">
                                        <div class="iq-card-body p-0 pl-3 pr-3">
                                           <a href="#" class="iq-sub-card setting-dropdown">
                                              <div class="media align-items-center">
                                                 <div class="right-icon">
                                                    <i class="ri-file-user-line text-primary"></i>
                                                 </div>
                                                 <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Manage Profile</h6>
                                                 </div>
                                              </div>
                                           </a>
                                           <a href="#" class="iq-sub-card setting-dropdown">
                                              <div class="media align-items-center">
                                                 <div class="right-icon">
                                                    <i class="ri-settings-4-line text-primary"></i>
                                                 </div>
                                                 <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Settings</h6>
                                                 </div>
                                              </div>
                                           </a>
                                           <a href="#" class="iq-sub-card setting-dropdown">
                                              <div class="media align-items-center">
                                                 <div class="right-icon">
                                                    <i class="ri-settings-4-line text-primary"></i>
                                                 </div>
                                                 <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Pricing Plan</h6>
                                                 </div>
                                              </div>
                                           </a>
                                           <a href="#" class="iq-sub-card setting-dropdown">
                                              <div class="media align-items-center">
                                                 <div class="right-icon">
                                                    <i class="ri-logout-circle-line text-primary"></i>
                                                 </div>
                                                 <div class="media-body ml-3">
                                                    <h6 class="mb-0">Logout</h6>
                                                 </div>
                                              </div>
                                           </a>
                                        </div>
                                     </div>
                                  </div>
                               </li>
                            </ul>
                         </div>
                      </div>
                   </div>
                   <div class="navbar-right menu-right">
                      <ul class="d-flex align-items-center list-inline m-0">
                         
                        {{-- Dropdown Search --}}
                        @livewire('search-dropdown')
                        
                         <li class="nav-item nav-icon">
                            <a href="#" class="search-toggle" data-toggle="search-toggle">
                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22"
                                  class="noti-svg">
                                  <path fill="none" d="M0 0h24v24H0z" />
                                  <path
                                     d="M18 10a6 6 0 1 0-12 0v8h12v-8zm2 8.667l.4.533a.5.5 0 0 1-.4.8H4a.5.5 0 0 1-.4-.8l.4-.533V10a8 8 0 1 1 16 0v8.667zM9.5 21h5a2.5 2.5 0 1 1-5 0z" />
                               </svg>
                               <span class="bg-danger dots"></span>
                            </a>
                            <div class="iq-sub-dropdown">
                               <div class="iq-card shadow-none m-0">
                                  <div class="iq-card-body">
                                     <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                           <div class="media-body">
                                              <h6 class="mb-0 ">Boot Bitty</h6>
                                              <small class="font-size-12"> just now</small>
                                           </div>
                                        </div>
                                     </a>
                                     <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                           <div class="media-body">
                                              <h6 class="mb-0 ">The Last Breath</h6>
                                              <small class="font-size-12">15 minutes ago</small>
                                           </div>
                                        </div>
                                     </a>
                                     <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                           <div class="media-body">
                                              <h6 class="mb-0 ">The Hero Camp</h6>
                                              <small class="font-size-12">1 hour ago</small>
                                           </div>
                                        </div>
                                     </a>
                                  </div>
                               </div>
                            </div>
                         </li>
                         <li class="nav-item nav-icon">
                            <a href="#" class="iq-user-dropdown search-toggle p-0 d-flex align-items-center"
                               data-toggle="search-toggle">
                            <img src="{{ asset('asset/html/frontend/html/images/user/icon.png') }}" class="img-fluid avatar-40 rounded-circle" alt="user">
                            </a>
                            <div class="iq-sub-dropdown iq-user-dropdown">
                               <div class="iq-card shadow-none m-0">
                                  <div class="iq-card-body p-0 pl-3 pr-3">
                                     <a href="#" class="iq-sub-card setting-dropdown">
                                        <div class="media align-items-center">
                                           <div class="right-icon">
                                              <i class="ri-file-user-line text-primary"></i>
                                           </div>
                                           <div class="media-body ml-3">
                                              <h6 class="mb-0 ">Manage Profile</h6>
                                           </div>
                                        </div>
                                     </a>
                                     <a href="#" class="iq-sub-card setting-dropdown">
                                        <div class="media align-items-center">
                                           <div class="right-icon">
                                              <i class="ri-settings-4-line text-primary"></i>
                                           </div>
                                           <div class="media-body ml-3">
                                              <h6 class="mb-0 ">Settings</h6>
                                           </div>
                                        </div>
                                     </a>
                                     <a href="#" class="iq-sub-card setting-dropdown">
                                        <div class="media align-items-center">
                                           <div class="right-icon">
                                              <i class="ri-settings-4-line text-primary"></i>
                                           </div>
                                           <div class="media-body ml-3">
                                              <h6 class="mb-0 ">Pricing Plan</h6>
                                           </div>
                                        </div>
                                     </a>
                                     <a href="#" class="iq-sub-card setting-dropdown">
                                        <div class="media align-items-center">
                                           <div class="right-icon">
                                              <i class="ri-logout-circle-line text-primary"></i>
                                           </div>
                                           <div class="media-body ml-3">
                                              <h6 class="mb-0 ">Logout</h6>
                                           </div>
                                        </div>
                                     </a>
                                  </div>
                               </div>
                            </div>
                         </li>
                      </ul>
                   </div>
                </nav>
                <div class="nav-overlay"></div>
             </div>
          </div>
       </div>
    </div>
 </header>