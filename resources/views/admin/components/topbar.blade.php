<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{url('/')}}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src=" {{asset('frontend')}}/assets/img/logo/logov2_img.png" alt="" height="24">
                                </span>
                    <span class="logo-lg">
                                    <img src=" {{asset('frontend')}}/assets/img/logo/logov2_img.png" alt="" height="24"> <span
                                class="logo-txt">Jobmatch</span>
                                </span>
                </a>

                <a href="" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src=" {{asset('frontend')}}/assets/img/logo/logov2_img.png" alt="logo-light"
                                         height="24">
                                </span>
                    <span class="logo-lg">
                                    <img src=" {{asset('frontend')}}/assets/img/logo/logov2_img.png" alt="logo-dark"
                                         height="24"> <span
                                class="logo-txt">Jobmatch</span>
                                </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            {{--            <form class="app-search d-none d-lg-block">--}}
            {{--                <div class="position-relative">--}}
            {{--                    <input type="text" class="form-control" placeholder="Search...">--}}
            {{--                    <button class="btn btn-primary" type="button"><i class="bx bx-search-alt align-middle"></i></button>--}}
            {{--                </div>--}}
            {{--            </form>--}}
            {{--            <div class="d-flex justify-content-center align-items-center">--}}
            {{--                <span class="font-size-24 fw-bold">Admin Dashboard</span>--}}
            {{--            </div>--}}

        </div>
        {!! request()->routeIs('admin.dashboard') ? '<div class="d-flex justify-content-center align-items-center"><i class="fas fa-user-alt"> </i> <span class="px-2 logo-txt ">Admin Dashboard</span></div>' : '' !!}
        {!!   request()->routeIs('admin.jobs') ? '<div class="d-flex justify-content-center align-items-center"><i class="fas fa-user-alt"> </i> <span class="px-2 logo-txt ">Job List</span></div>' : '' !!}
        {!! request()->routeIs('admin.profile') ? '<div class="d-flex justify-content-center align-items-center"><i class="fas fa-user-alt"> </i> <span class="px-2 logo-txt ">Admin Profile</span></div>' : '' !!}
        {!! request()->routeIs('admin.companies') ? '<div class="d-flex justify-content-center align-items-center"><i class="fas fa-user-alt"> </i> <span class="px-2 logo-txt ">Company List</span></div>' : '' !!}
        {!!   request()->routeIs('admin.employees') ? '<div class="d-flex justify-content-center align-items-center"><i class="fas fa-user-alt"> </i> <span class="px-2 logo-txt ">Employees List</span></div>' : '' !!}
        {!! request()->routeIs('admin.candidates') ? '<div class="d-flex justify-content-center align-items-center"><i class="fas fa-user-alt"> </i> <span class="px-2 logo-txt ">Candidate List</span></div>' : '' !!}
        {!! request()->routeIs('admin.blogs') ? '<div class="d-flex justify-content-center align-items-center"><i class="fas fa-user-alt"> </i> <span class="px-2 logo-txt ">Blogs</span></div>' : '' !!}
        {!!   request()->routeIs('admin.pages') ? '<div class="d-flex justify-content-center align-items-center"><i class="fas fa-user-alt"> </i> <span class="px-2 logo-txt ">Pages</span></div>' : '' !!}
        {!! request()->routeIs('admin.plugins') ? '<div class="d-flex justify-content-center align-items-center"><i class="fas fa-user-alt"> </i> <span class="px-2 logo-txt ">Plugins</span></div>' : '' !!}


        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item" id="page-header-search-dropdown" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-search icon-lg">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                     aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..."
                                       aria-label="Search Result">

                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="dropdown d-none d-sm-inline-block">
                <button type="button" class="btn header-item" id="mode-setting-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-moon icon-lg layout-mode-dark">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-sun icon-lg layout-mode-light">
                        <circle cx="12" cy="12" r="5"></circle>
                        <line x1="12" y1="1" x2="12" y2="3"></line>
                        <line x1="12" y1="21" x2="12" y2="23"></line>
                        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                        <line x1="1" y1="12" x2="3" y2="12"></line>
                        <line x1="21" y1="12" x2="23" y2="12"></line>
                        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                    </svg>
                </button>
            </div>


            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon position-relative"
                        id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-bell icon-lg">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                    </svg>
                    <span class="badge bg-danger rounded-pill">5</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                     aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> Notifications </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small text-reset text-decoration-underline"> Unread (3)</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar="init" style="max-height: 230px;">
                        <div class="simplebar-wrapper" style="margin: 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;">
                                        <div class="simplebar-content" style="padding: 0px;">
                                            <a href="#!" class="text-reset notification-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src=" {{asset('assets')}}/images/users/avatar-3.jpg"
                                                             class="rounded-circle avatar-sm" alt="user-pic">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">James Lemire</h6>
                                                        <div class="font-size-13 text-muted">
                                                            <p class="mb-1">It will seem like simplified English.</p>
                                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour ago</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#!" class="text-reset notification-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 avatar-sm me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Your order is placed</h6>
                                                        <div class="font-size-13 text-muted">
                                                            <p class="mb-1">If several languages coalesce the
                                                                grammar</p>
                                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#!" class="text-reset notification-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 avatar-sm me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Your item is shipped</h6>
                                                        <div class="font-size-13 text-muted">
                                                            <p class="mb-1">If several languages coalesce the
                                                                grammar</p>
                                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="#!" class="text-reset notification-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src=" {{asset('assets')}}/images/users/avatar-6.jpg"
                                                             class="rounded-circle avatar-sm" alt="user-pic">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Salena Layfield</h6>
                                                        <div class="font-size-13 text-muted">
                                                            <p class="mb-1">As a skeptical Cambridge friend of mine
                                                                occidental.</p>
                                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour ago</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar"
                                 style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                            <div class="simplebar-scrollbar"
                                 style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                        </div>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span>
                        </a>
                    </div>
                </div>
            </div>


            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-soft-light border-start border-end"
                        id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src=" {{asset('assets')}}/images/users/avatar-1.jpg"
                         alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium">{{ Auth::guard('admin')->user()->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{route('admin.profile')}}"><i
                                class="mdi mdi-face-man-profile font-size-16 align-middle me-1"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{url('/admin/logout')}}"><i
                            class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                </div>
            </div>

        </div>
    </div>
</header>
