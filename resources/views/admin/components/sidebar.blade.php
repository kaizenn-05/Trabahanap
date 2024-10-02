<div class="vertical-menu mm-active">

    <div data-simplebar="init" class="h-100 mm-show">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: -17px; bottom: 0 px;">
                    <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                        <div class="simplebar-content" style="padding: 0 px;">

                            <!--- Sidemenu -->
                            <div id="sidebar-menu" class="mm-active">
                                <!-- Left Menu Start -->
                                <ul class="metismenu list-unstyled mm-show" id="side-menu">
                                    <li class="menu-title" data-key="t-menu">Menu</li>

                                    <li class="">
                                        <a href="{{route('admin.dashboard')}}" class="{{request()->routeIs('admin.dashboard')?'active':'inactive'}}" aria-expanded="false">
                                            <i class="fas fa-home"></i>
                                            <span data-key="t-dashboard">Dashboard</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a href="{{route('admin.companies')}}" class="{{request()->routeIs('admin.companies')?'active':'inactive'}}" aria-expanded="false">
                                            <i class="fas fa-users"></i>
                                            <span data-key="t-dashboard">Companies</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{route('admin.jobs')}}" class="{{request()->routeIs('admin.jobs')?'active':'inactive'}}" aria-expanded="false">

                                            <i class="fas fa-briefcase "></i>

                                            <span data-key="t-dashboard">Jobs</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{route('admin.employees')}}" class="{{request()->routeIs('admin.employees')?'active':'inactive'}}" aria-expanded="false">
                                            <i class="fas fa-user "></i>
                                            <span data-key="t-dashboard">Employee</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{route('admin.candidates')}}" class="{{request()->routeIs('admin.candidates')?'active':'inactive'}}" aria-expanded="false">
                                            <i class="fas fa-user-circle "></i>
                                            <span data-key="t-dashboard">Candidates</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{route('admin.blogs')}}" class="{{request()->routeIs('admin.blogs')?'active':'inactive'}}" aria-expanded="false">
                                            <i class="fas fa-blog"></i>
                                            <span data-key="t-dasadmin.blogshboard">Blogs</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{route('admin.pages')}}" class="{{request()->routeIs('admin.pages')?'active':'inactive'}}" aria-expanded="false">
                                            <i class="fas fa-file "></i>
                                            <span data-key="t-dashboard">Pages</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{route('admin.plugins')}}" class="{{request()->routeIs('admin.plugins')?'active':'inactive'}}" aria-expanded="false">
                                            <i class="fas fa-plug "></i>
                                            <span data-key="t-dashboard">Plugins</span>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar -->
                    </div>
                </div>
            </div>
        </div>
        <div class="simplebar-placeholder" style="width: auto; height: 995px;"></div>
    </div>
    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
        <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
    </div>
    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
        <div class="simplebar-scrollbar"
             style="height: 738px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
    </div>
</div>

