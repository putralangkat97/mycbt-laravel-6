<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="/admin" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/admin" class="nav-link{{ request()->is('admin') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/event" class="nav-link{{ request()->is('admin/event') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-calendar"></i>
                        <p>Event</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link @if (request()->is('admin/mapel') || request()->is('admin/pertanyaan')) active @else @endif">
                        <i class="nav-icon fas fa-graduation-cap"></i>
                        <p>
                            Modul
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/mapel" class="nav-link{{ request()->is('admin/mapel') ? ' active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mata Pelajaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/pertanyaan" class="nav-link{{ request()->is('admin/pertanyaan') ? ' active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kumpulan Soal</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/jawaban" class="nav-link{{ request()->is('admin/jawaban') ? ' active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kumpulan Jawaban</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/admin/penilaian" class="nav-link{{ request()->is('admin/penilaian') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-star"></i>
                        <p>Penilaian</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>{{ __('Keluar') }}</p>
                    </a>
                    <form id="logout-form" action="/admin/logout" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>