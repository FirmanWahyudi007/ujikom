<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Uji Kompetensi</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">GL</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            {{-- <li class="{{ Request::is('admin/post', 'admin/post/*') ? 'active' : '' }}">
                <a href="{{ route('post.index') }}" class="nav-link"><i
                        class="fas fa-book"></i><span>@lang('translation.post')</span></a>
            </li>
            @if (auth()->user()->role == 'admin')
                <li class="{{ Request::is('admin/category', 'admin/category/*') ? 'active' : '' }}">
                    <a href="{{ route('category.index') }}" class="nav-link"><i
                            class="fas fa-list"></i><span>@lang('translation.category')</span></a>
                </li>
            @endif
            <li class="{{ Request::is('admin/mud-vulcano', 'admin/mud-vulcano/*') ? 'active' : '' }}">
                <a href="{{ route('mud-vulcano.index') }}" class="nav-link"><i
                        class="fas fa-mountain"></i><span>@lang('translation.mud-vulcano')</span></a>
            </li>
            @if (auth()->user()->role == 'admin')
                <li class="{{ Request::is('admin/users', 'admin/users/*') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}" class="nav-link"><i
                            class="fas fa-users"></i><span>@lang('translation.users')</span></a>
                </li>
            @endif --}}
        </ul>
    </aside>
</div>
