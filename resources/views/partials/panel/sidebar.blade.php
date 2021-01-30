<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <center>
                <img src="{{ asset('assets/images/favicon.svg') }}">
            </center>
        </div>
        <div class="sidebar-menu">
            @auth
            <ul class="menu">
                <li class="sidebar-item @if($menu == 'Dashboard') active @endif">
                    <a href="{{ route('admin.dashboard') }}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item @if($menu == 'Administrasi') active @endif">
                    <a href="{{ route('admin.administrasi') }}" class='sidebar-link'>
                        <i data-feather="briefcase" width="20"></i>
                        <span>Administrasi</span>
                    </a>
                </li>
                <li class="sidebar-item @if($menu == 'E-Raport') active @endif has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="layers" width="20"></i>
                        <span>E-Raport</span>
                    </a>
                    <ul class="submenu ">
                        <li>
                            <a href="{{ route('admin.list.raport') }}">
                                <i data-feather="file-text" width="20"></i>
                                <span>List Raport</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.tambah.raport') }}">
                                <i data-feather="file-plus" width="20"></i>
                                <span>Tambah Raport</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.kirim.raport') }}">
                                <i data-feather="triangle" width="20"></i>
                                <span>Kirim Raport</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            @endauth
            @guest
            <ul class="menu">
                <li class='sidebar-title'>BIODATA</li>
                <li class="sidebar-item active">
                    <h5>&ensp; Nama : {{ $raport->name }}</h5>
                    <h5>&ensp; Nisn : {{ $raport->nisn }}</h5>
                    <h5>&ensp; Kelas : {{ $raport->classroom }}</h5>
                    <h5>&ensp; Update : {{ $raport->updated_at }}</h5>
                </li>
            </ul>   
            @endguest
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>