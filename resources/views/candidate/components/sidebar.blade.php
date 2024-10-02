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
                                        <a href="{{route('candidate.dashboard')}}" class="{{ request()->routeIs('candidate.dashboard') ? 'active' : 'inactive' }}" aria-expanded="false">
                                           <i class="fas fa-home"> </i>
                                            <span data-key="t-dashboard">Dashboard</span>
                                        </a>
                                    </li>

                                    <li class="">
                                        <a href="{{route('candidate.jobs')}}" class="{{ request()->routeIs('candidate.jobs') ? 'active' : 'inactive' }}" aria-expanded="false">
                                            <i class="fas fa-briefcase"> </i>
                                            <span data-key="t-dashboard">Jobs</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="{{route('candidate.profile')}}" class="{{ request()->routeIs('candidate.profile') ? 'active' : 'inactive' }}" aria-expanded="false">

                                            <i class="fas fa-users"></i>

                                            <span data-key="t-dashboard">Profile</span>
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

