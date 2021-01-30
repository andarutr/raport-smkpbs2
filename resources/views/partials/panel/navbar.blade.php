<nav class="navbar navbar-header navbar-expand navbar-light">
    <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
    <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    @auth
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
            <li class="dropdown nav-icon">
                <a href="#" data-bs-toggle="dropdown"
                    class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                    <div class="d-lg-inline-block">
                        <i data-feather="bell"></i>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-large">
                    <h6 class='py-2 px-4'>Pemberitahuan</h6>
                    <ul class="list-group rounded-none">
                        <li class="list-group-item border-0 align-items-start">
                            <div class="avatar bg-success me-3">
                                <span class="avatar-content">A</span>
                            </div>
                            <div>
                                <h6 class='text-bold'>Andaru</h6>
                                <p class='text-xs'>
                                    Selamat datang di panel admin. Silahkan hubungi saya lebih lanjut, jika mengalami kendala.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" data-bs-toggle="dropdown"
                    class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <div class="avatar me-1">
                        <img src="{{ asset('assets/images/admin.png') }}" alt="" srcset="">
                    </div>
                    <div class="d-none d-md-block d-lg-inline-block">Hi, Admin</div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{ route('admin.logout') }}"><i data-feather="log-out"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
    @endauth
</nav>