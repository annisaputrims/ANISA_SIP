<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link ">
                {{-- <div class="nav-profile-image">
                    <img src="{{ asset('purple/assets/images/logo-ppkd.png') }}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div> --}}
                <div class="nav-profile-text d-flex flex-column ">
                    <span class="font-weight-bold mb-2">{{ auth()->user()->nama_lengkap }}</span>
                    <span class="text-secondary text-small">{{ auth()->user()->level->nama_level }} </span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('peserta.*') ? 'menu-open' : '' }}"
                href="{{ route('peserta.index') }}">
                <span class="menu-title">Peserta</span>
                <i class="mdi mdi mdi-account-multiple-outline menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('gelombang.*') ? 'menu-open' : '' }}"
                href="{{ route('gelombang.index') }}">
                <span class="menu-title">Gelombang</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('jurusan.*') ? 'menu-open' : '' }}"
                href="{{ route('jurusan.index') }}">
                <span class="menu-title">Jurusan</span>
                <i class="mdi mdi-school menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('level.*') ? 'menu-open' : '' }}" href="{{ route('level.index') }}">
                <span class="menu-title">Peran/Level</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('user.*') ? 'menu-open' : '' }}" href="{{ route('user.index') }}">
                <span class="menu-title">User</span>
                <i class="mdi mdi mdi-account menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>
