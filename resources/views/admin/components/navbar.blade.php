<header class="admin-navbar">
    <div class="admin-navbar__left">
        <button type="button" class="sidebar-toggle" id="sidebarToggle"
            aria-label="Open navigation" aria-controls="adminSidebar" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <h1 class="admin-page-title">@yield('title', 'Admin Panel')</h1>
    </div>

    <div class="admin-navbar__right">
        <div class="admin-user">
            <span class="admin-user__name">{{ auth()->user()->name }}</span>
            <span class="admin-user__role">Administrator</span>
        </div>
    </div>
</header>
