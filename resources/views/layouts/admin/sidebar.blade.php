<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route('admin.back-office') }}">
                        <img width="200px" height="150px" src="{{ asset('assets/images/logo/ONIDEMODE.webp') }}" alt="Logo">
                    </a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <!-- Dashboard -->
                <li class="sidebar-item {{ request()->routeIs('back-office') ? 'active' : '' }}">
                    <a href="{{ route('admin.back-office') }}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- Payments -->
                <li class="sidebar-item has-sub {{ request()->routeIs('admin.payments.manage') ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Payments</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item {{ request()->routeIs('admin.payments.manage') ? 'active' : '' }}">
                            <a href="{{ route('admin.payments.manage') }}">View all Payments</a>
                        </li>
                    </ul>
                </li>

                <!-- Settings -->
                <li class="sidebar-item has-sub {{ request()->routeIs('admin.settings.manage') ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-stack"></i>
                        <span>Settings</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item {{ request()->routeIs('admin.settings.manage') ? 'active' : '' }}">
                            <a href="{{ route('admin.settings.manage') }}">Manage site settings</a>
                        </li>
                    </ul>
                </li>

                <!-- Pages -->
                <li class="sidebar-item has-sub {{ request()->routeIs('admin.pages.manage') ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-collection-fill"></i>
                        <span>Pages</span>
                    </a>
                    <ul class="submenu">
                        @foreach (App\Models\Page::all() as $page)
                            <li class="submenu-item {{ request()->routeIs('admin.pages.manage', $page) ? 'active' : '' }}">
                                <a href="{{ route('admin.pages.manage', $page) }}">{{ $page->page_name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <!-- Users -->
                <li class="sidebar-item {{ request()->routeIs('admin.profile.edit') ? 'active' : '' }}">
                    <a href="{{ route('admin.profile.edit') }}" class="sidebar-link">
                        <i class="iconly-boldProfile"></i>
                        <span>Admin Profile</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->routeIs('admin.settings.participants.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.settings.participants.index') }}" class="sidebar-link">
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Participants</span>
                    </a>
                </li>

                <!-- Logout -->
                <li class="sidebar-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn sidebar-link">
                            <i class="bi bi-power"></i>
                            <span>Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
