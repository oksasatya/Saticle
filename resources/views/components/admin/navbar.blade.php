<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{ route('admin.dashboard') }}"><img src="assets/images/logo2.svg"
                alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="{{ route('admin.dashboard') }}"><img
                src="assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                    aria-expanded="true">
                    <div class="nav-profile-img">
                        @if (Auth::user()->avatar == null)
                            <img src="{{ 'https://ui-avatars.com/api/?name=' . Auth::user()->name }}" alt="image">
                            <span class="availability-status online"></span>
                        @else
                            <img src="{{ asset('storage/') . Auth::user()->avatar }}" alt="image">
                            <span class="availability-status online"></span>
                        @endif
                    </div>
                    <div class="nav-profile-text">
                        <p class="mb-1 text-dark">{{ Auth::user()->name }}</p>
                    </div>
                </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                    <div class="dropdown-divider"></div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="dropdown-item">
                            <i class="mdi mdi-logout me-2 text-primary"></i> Signout
                        </button>
                    </form>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
