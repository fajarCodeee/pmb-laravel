<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('adminlte') }}/index3.html" class="brand-link">
        <img src="{{ asset('adminlte') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('adminlte') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ $username }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('admin/home') }}" class="nav-link <?= $title == 'Dashboard' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/data-mahasiswa-baru') }}"
                        class="nav-link <?= $title == 'Data Mahasiswa' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Mahasiswa Baru
                        </p>
                    </a>
                </li>
                <li class="nav-header">Informasi PMB</li>
                <li class="nav-item">
                    <a href="{{ url('/admin/gelombang-pendaftaran') }}"
                        class="nav-link <?= $title == 'Gelombang Pendaftaran' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-calendar-week"></i>
                        <p>
                            Gelombang Pendaftaran
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin/data-kelas') }}"
                        class="nav-link <?= $title == 'Data Kelas' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-school"></i>
                        <p>
                            Data Kelas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/admin/data-program-studi') }}"
                        class="nav-link <?= $title == 'Data Prodi' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-graduation-cap"></i>
                        <p>
                            Data Prodi
                        </p>
                    </a>
                </li>
                <li class="nav-header">CBT</li>

                <li
                    class="nav-item @if ($title == 'Data Ujian') menu-open
                    @elseif($title == 'Data Soal') menu-open @elseif($title == 'Data Jawaban') menu-open @else @endif">
                    <a href="#"
                        class="nav-link @if ($title == 'Data Ujian') active
                    @elseif($title == 'Data Soal') active @elseif($title == 'Data Jawaban') active @else @endif">
                        <i class="nav-icon fas fa-book-reader"></i>
                        <p>
                            Informasi CBT
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/admin/data-ujian') }}"
                                class="nav-link <?= $title == 'Data Ujian' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Data Ujian
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/data-soal') }}"
                                class="nav-link <?= $title == 'Data Soal' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Data Soal
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/admin/data-jawaban') }}"
                                class="nav-link <?= $title == 'Data Jawaban' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Data Jawaban
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">Informasi Akun</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-circle"></i>
                        <p>
                            Manage Profile
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>
                            Akun lainnya
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link bg-danger">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
                <li class="nav-header"></li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
