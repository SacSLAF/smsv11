<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">SMS</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-item @if (Request::segment(2) == 'dashboard') active @endif">
                <a class="sidebar-link" href="{{ url('/panel/dashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span
                        class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item @if (Request::segment(2) == 'profile') active @endif">
                <a class="sidebar-link" href="{{url('/panel/profile')}}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                </a>
            </li>
            <li class="sidebar-item @if (Request::segment(2) == 'users') active @endif">
                <a class="sidebar-link" href="{{url('/panel/users')}}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Users</span>
                </a>
            </li>
            <li class="sidebar-item @if (Request::segment(2) == 'roles') active @endif">
                <a class="sidebar-link" href="{{url('/panel/roles')}}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Role</span>
                </a>
            </li>
            {{-- <li class="sidebar-item">
                <a class="sidebar-link" href="pages-blank.html">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
                </a>
            </li> --}}
            <li class="sidebar-item @if (Request::segment(2) == 'categories') active @endif">
                <a class="sidebar-link" href="{{url('/panel/categories')}}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Category</span>
                </a>
            </li>
            <li class="sidebar-item @if (Request::segment(2) == 'subcategories') active @endif">
                <a class="sidebar-link" href="{{url('/panel/subcategories')}}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Sub Category</span>
                </a>
            </li>
            <li class="sidebar-item @if (Request::segment(2) == 'products') active @endif">
                <a class="sidebar-link" href="{{url('/panel/products')}}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Products</span>
                </a>
            </li>
            <li class="sidebar-item @if (Request::segment(2) == 'settings') active @endif">
                <a class="sidebar-link" href="{{url('/panel/settings')}}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Settings</span>
                </a>
            </li>
        </ul>

        {{-- <div class="sidebar-cta">
            <div class="sidebar-cta-content">
                <strong class="d-inline-block mb-2">Upgrade to Pro</strong>
                <div class="mb-3 text-sm">
                    Are you looking for more components? Check out our premium version.
                </div>
                <div class="d-grid">
                    <a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
                </div>
            </div>
        </div> --}}
    </div>
</nav>