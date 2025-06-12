<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{route('backend.index')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-dark-sm.png') }}" alt="" height="26">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="28">
            </span>
        </a>

        <a href="{{route('backend.index')}}" class="logo logo-light">
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="30">
            </span>
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-light-sm.png') }}" alt="" height="26">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
        <i class="bx bx-menu align-middle"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{route('home')}}">
                    <i class="bx bx-home-alt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-ecommerce">Home</span>
                    </a>
                </li>

               <li>
                    <a href="javascript: void(0);">
                        
                        <span class="menu-item" data-key="t-dashboard">Manage Orosh</span>
                        <span class="badge rounded-pill bg-primary">2</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('nextorosh.index') }}" data-key="t-ecommerce">All Orosh</a></li>
                        <li><a href="{{ route('nextorosh.create') }}" data-key="t-sales">Add Orosh</a></li>
                    </ul>
                </li>

                <li class="menu-title" data-key="t-applications">Applications</li>

                <li>
                    <a href="{{ route('admin.blog.index') }}">
                        <span class="menu-item" data-key="t-ecommerce">Blogs</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('namaz.edit') }}">
                        <span class="menu-item" data-key="t-ecommerce">Namaz Time</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('banner1.create') }}">
                        <span class="menu-item" data-key="t-ecommerce">Banner</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.history.index') }}">
                        <span class="menu-item" data-key="t-ecommerce">History</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.board-members.index') }}">
                        <span class="menu-item" data-key="t-ecommerce">Board Member</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.web_info.index') }}">
                        <span class="menu-item" data-key="t-ecommerce">Manage Contact (Logo)</span>
                    </a>
                </li>

             
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->