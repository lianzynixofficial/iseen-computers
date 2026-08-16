<aside class="admin-sidebar" id="adminSidebar">
    <div class="admin-sidebar__header">
        <a href="{{ route('admin.dashboard') }}" class="admin-brand">
            <span class="admin-brand__name">I Seen Computer</span>
            <span class="admin-brand__label">Admin Panel</span>
        </a>
        <button type="button" class="sidebar-close" id="sidebarClose" aria-label="Close navigation">
            &times;
        </button>
    </div>

    <nav class="admin-navigation" aria-label="Admin navigation">
        <a href="{{ route('admin.dashboard') }}"
            class="admin-navigation__link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <span>Dashboard</span>
        </a>
        <a href="#" class="admin-navigation__link">
            <span>Home Management</span>
        </a>
        <a href="#" class="admin-navigation__link">
            <span>About Management</span>
        </a>
        <a href="{{ route('admin.messages.index') }}"
            class="admin-navigation__link {{ request()->routeIs('admin.messages.*') ? 'active' : '' }}">
            <span>Contact Messages</span>
        </a>
        <a href="#" class="admin-navigation__link">
            <span>Products</span>
        </a>
        <a href="#" class="admin-navigation__link">
            <span>Services</span>
        </a>
        <a href="#" class="admin-navigation__link">
            <span>Blog</span>
        </a>
        <a href="#" class="admin-navigation__link">
            <span>Settings</span>
        </a>
    </nav>

    <div class="admin-sidebar__footer">
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="admin-logout">Logout</button>
        </form>
    </div>
</aside>

<div class="sidebar-overlay" id="sidebarOverlay"></div>
