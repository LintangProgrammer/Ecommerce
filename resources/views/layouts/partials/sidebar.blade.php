<aside class="left-sidebar shadow-sm">
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between px-4 py-3">
            <a href="/admin/dashboard" class="text-nowrap logo-img">
                {{-- Ganti dengan logo putih jika sidebar gelap, atau tetap jika terang --}}
                <h4 class="fw-bold mb-0"
                    style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                    Hijab Admin</h4>
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>

        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav" class="p-3">
                <li class="nav-small-cap mb-2">
                    <span class="hide-menu text-uppercase fw-bold"
                        style="font-size: 0.75rem; letter-spacing: 1px; color: #adb5bd;">Admin Menu</span>
                </li>

                <li class="sidebar-item mb-1">
                    <a class="sidebar-link rounded-3 {{ Request::is('admin/dashboard') ? 'active' : '' }}"
                        href="/admin/dashboard" aria-expanded="false">
                        <i class="ti ti-layout-dashboard fs-5"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item mb-1">
                    <a class="sidebar-link rounded-3" href="{{ route('home') }}" aria-expanded="false">
                        <i class="bi bi-house-door fs-5"></i>
                        <span class="hide-menu">Ke Toko (Home)</span>
                    </a>
                </li>

                <li class="nav-small-cap mt-4 mb-2">
                    <span class="hide-menu text-uppercase fw-bold"
                        style="font-size: 0.75rem; letter-spacing: 1px; color: #adb5bd;">Manajemen</span>
                </li>

                <li class="sidebar-item mb-1">
                    <a class="sidebar-link rounded-3 {{ Request::is('admin/categories*') ? 'active' : '' }}"
                        href="/admin/categories" aria-expanded="false">
                        <i class="ti ti-category fs-5"></i>
                        <span class="hide-menu">Kategori Produk</span>
                    </a>
                </li>

                <li class="sidebar-item mb-1">
                    <a class="sidebar-link rounded-3 {{ Request::is('admin/products*') ? 'active' : '' }}"
                        href="/admin/products" aria-expanded="false">
                        <i class="ti ti-package fs-5"></i>
                        <span class="hide-menu">Data Produk</span>
                    </a>
                </li>

                <li class="sidebar-item mb-1">
                    <a class="sidebar-link rounded-3 {{ Request::is('admin/orders*') ? 'active' : '' }}"
                        href="/admin/orders" aria-expanded="false">
                        <i class="ti ti-receipt fs-5"></i>
                        <span class="hide-menu">Daftar Pesanan</span>
                    </a>
                </li>

                <li class="sidebar-item mt-4">
                    <a class="sidebar-link rounded-3 bg-light-primary {{ Request::is('admin/reports*') ? 'active' : '' }}"
                        href="/admin/reports/sales" aria-expanded="false">
                        <i class="bi bi-megaphone fs-5 text-primary"></i>
                        <span class="hide-menu fw-semibold">Laporan Penjualan</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<style>
    /* Styling Dasar Sidebar */
    .left-sidebar {
        background: #ffffff;
        border-right: 1px solid rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    /* Styling Link Menu */
    .sidebar-nav ul .sidebar-item .sidebar-link {
        color: #5a6a85;
        display: flex;
        align-items: center;
        padding: 12px 15px;
        font-weight: 500;
        transition: all 0.3s ease;
        text-decoration: none;
        margin-bottom: 5px;
    }

    /* Link Menu Ikon */
    .sidebar-nav ul .sidebar-item .sidebar-link i {
        margin-right: 12px;
        transition: all 0.3s ease;
    }

    /* Efek Hover */
    .sidebar-nav ul .sidebar-item .sidebar-link:hover {
        background: rgba(102, 126, 234, 0.1);
        color: #667eea;
        transform: translateX(5px);
    }

    /* Menu Aktif (Sesuai tema Login/Register) */
    .sidebar-nav ul .sidebar-item .sidebar-link.active {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: #ffffff;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
    }

    .sidebar-nav ul .sidebar-item .sidebar-link.active i {
        color: #ffffff;
    }

    /* Scrollbar Halus */
    .scroll-sidebar {
        height: calc(100vh - 80px);
    }

    /* Label Group (Kecil) */
    .nav-small-cap {
        padding: 20px 15px 10px;
    }
</style>