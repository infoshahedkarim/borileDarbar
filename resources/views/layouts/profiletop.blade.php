<header id="page-topbar" class="isvertical-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="" class="logo logo-dark" style="margin-top: 10px;">
                    <span class="logo-sm">
                        <img src="" alt="" height="10" style="width: 45%; height: auto;">
                    </span>
                    <span class="logo-lg">
                        <img src="" alt="" height="10" style="width: 45%; height: auto;">
                    </span>
                </a>

                <a href="" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="" alt="" height="12">
                    </span>
                    <span class="logo-sm">
                        <img src="" alt="" height="12">
                    </span>
                </a>
            </div>

           <!-- Toggle Button -->
<button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn" onclick="toggleMenu()">
    <i class="bx bx-menu align-middle"></i>
</button>




            <!-- start page title -->
            <div class="page-title-box align-self-center d-none d-md-block">
                <h4 class="page-title mb-0">@yield('page-title')</h4>
            </div>
            <!-- end page title -->

        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item user text-start d-flex align-items-center"
                    id="page-header-user-dropdown-v" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                        src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-2 fw-medium font-size-15">{{ Auth::user()->name }}</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="p-3 border-bottom">
                        <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                        <p class="mb-0 font-size-11 text-muted">{{ Auth::user()->email }}</p>
                        <p class="mb-0 font-size-11 text-muted">{{ Auth::user()->user_type }}</p>
                    </div>
                    <a class="dropdown-item" href="{{route('profile.show')}}"><i
                            class="mdi mdi-account-circle text-muted font-size-16 align-middle me-2"></i> <span
                            class="align-middle">Profile</span></a>
                    <!-- <a class="dropdown-item" href="apps-chat"><i
                            class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-2"></i> <span
                            class="align-middle">Messages</span></a> -->
                    <a class="dropdown-item" href="https://ridgebenit.com/"><i
                            class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-2"></i> <span
                            class="align-middle">Help</span></a>
                  <!-- <a class="dropdown-item d-flex align-items-center" href="#"><i
                            class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-2"></i> <span
                            class="align-middle me-3">Settings</span><span
                            class="badge bg-success-subtle text-success ms-auto">New</span></a> -->

                            @if(Auth::user()->user_type == 'admin')
                            <a class="dropdown-item" href=""><i
                                class="mdi mdi-account-circle text-muted font-size-16 align-middle me-2"></i> <span
                                class="align-middle">Home</span></a>
                                @endif
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="javascript:void();"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="mdi mdi-logout text-muted font-size-16 align-middle me-2"></i> <span
                            class="align-middle">Logout</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    function toggleMenu() {
        const menu = document.getElementById('sidebarMenu');
        menu.classList.toggle('d-none');
    }

    document.addEventListener('click', function(event) {
        const button = document.querySelector('.vertical-menu-btn');
        const menu = document.getElementById('sidebarMenu');
        const isClickInside = button.contains(event.target) || menu.contains(event.target);

        if (!isClickInside) {
            menu.classList.add('d-none');
        }
    });
</script>
</header>
