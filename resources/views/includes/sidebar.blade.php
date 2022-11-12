<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        {{-- <img src="logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" /> --}}
        <span class="brand-text font-weight-light">PKM POLIBATAM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <a href="/admin" class="nav-link {{ Request::path() == 'admin' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/data-user"
                        class="nav-link {{ Request::path() == 'admin/data-user' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Data User</p>
                    </a>
                </li>

                <li
                    class="nav-item {{ Request::path() == 'admin/pengajuan-judul' ? 'menu-open' : '' }} {{ Request::path() == 'admin/pengajuan-proposal' ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ Request::path() == 'admin/pengajuan-judul' ? 'active' : '' }} {{ Request::path() == 'admin/pengajuan-proposal' ? 'active' : '' }}">
                        <i class="fa fa-envelope-open nav-icon"></i>
                        <p>Pengajuan<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/pengajuan-judul"
                                class="nav-link {{ Request::path() == 'admin/pengajuan-judul' ? 'active' : '' }}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Judul Proposal</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/pengajuan-proposal"
                                class="nav-link {{ Request::path() == 'admin/pengajuan-proposal' ? 'active' : '' }}">
                                <i class="far fa-file nav-icon"></i>
                                <p>Proposal</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item ">
                    <a href="/admin/template-proposal"
                        class="nav-link {{ Request::path() == 'admin/template-proposal' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Template Proposal</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
