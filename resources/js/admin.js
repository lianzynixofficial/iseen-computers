console.log('Admin panel loaded');

const sidebarToggle = document.getElementById('sidebarToggle');
const sidebarClose = document.getElementById('sidebarClose');
const adminSidebar = document.getElementById('adminSidebar');
const sidebarOverlay = document.getElementById('sidebarOverlay');

function openSidebar() {
    if (!adminSidebar || !sidebarOverlay || !sidebarToggle) {
        return;
    }

    adminSidebar.classList.add('is-open');
    sidebarOverlay.classList.add('is-visible');

    sidebarToggle.setAttribute('aria-expanded', 'true');
}

function closeSidebar() {
    if (!adminSidebar || !sidebarOverlay || !sidebarToggle) {
        return;
    }

    adminSidebar.classList.remove('is-open');
    sidebarOverlay.classList.remove('is-visible');

    sidebarToggle.setAttribute('aria-expanded', 'false');
}

if (sidebarToggle) {
    sidebarToggle.addEventListener('click', openSidebar);
}

if (sidebarClose) {
    sidebarClose.addEventListener('click', closeSidebar);
}

if (sidebarOverlay) {
    sidebarOverlay.addEventListener('click', closeSidebar);
}
