<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    @if (Auth::user()->avatar == null)
                        <img src="{{ 'https://ui-avatars.com/api/?name=' . Auth::user()->name }}" alt="profile">
                        <span class="login-status online"></span>
                    @else
                        <img src="{{ asset('storage/') . Auth::user()->avatar }}" alt="profile">
                        <span class="login-status online"></span>
                    @endif
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
                    <span
                        class="text-secondary text-small text-capitalize">{{ str_replace('-', ' ', Auth::user()->getRoleNames()[0]) }}</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/dashboard/*') ? 'active' : '' }}"
                href="{{ route('admin.dashboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/manage-users/*') ? 'active' : '' }}"
                href="{{ route('admin.manage-users.index') }}">
                <span class="menu-title">Manage Users</span>
                <i class="mdi mdi-account-multiple-plus menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/manage-post/*') ? 'active' : '' }}"
                href="{{ route('admin.post.index') }}">
                <span class="menu-title">Manage Post</span>
                <i class="mdi mdi-book-open-page-variant menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>
