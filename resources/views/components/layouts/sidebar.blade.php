<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('adminlte3/dist/img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-2">
      <span class="brand-text font-weight-light">Arcapt School</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link @yield('dashboard')">
                    <img class="nav-icon fas" src="{{ asset('assets/icons/Home.svg') }}"></img>
                <p>
                    Dashboard
                </p>
                </a>
            </li>
            @if (auth()->user()->role === 'Admin')
                <li class="nav-header">MENU</li> <!-- Menu Admin -->
                <li class="nav-item">
                    <a wire:navigare href="#" class="nav-link">
                        <img class="nav-icon fas" src="{{ asset('assets/icons/List.svg') }}"></img>
                    <p>
                        Management
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview px-3">
                    <li class="nav-item">
                        <a wire:navigare href="{{ route('admin.manajemen-siswa.index') }}" class="nav-link @yield('menuManagementSiswa')">
                            <img class="nav-icon fas" src="{{ asset('assets/icons/Users.svg') }}"></img>
                            <p>
                            Siswa
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a wire:navigare href="{{ route('admin.manajemen-guru.index') }}" class="nav-link @yield('menuManagementGuru')">
                            <img class="nav-icon fas" src="{{ asset('assets/icons/Users.svg') }}"></img>
                            <p>
                            Guru
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a wire:navigare href="{{ route('admin.manajemen-jadwal.index') }}" class="nav-link @yield('menuManagementJadwal')">
                            <img class="nav-icon fas" src="{{ asset('assets/icons/NotebookPen.svg') }}"></img>
                            <p>
                            Jadwal
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a wire:navigare href="{{ route('admin.manajemen-kelas.index') }}" class="nav-link @yield('menuManagementKelas')">
                            <img class="nav-icon fas" src="{{ asset('assets/icons/NotebookPen.svg') }}"></img>
                            <p>
                                Kelas
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a wire:navigare href="{{ route('admin.manajemen-nilai-rapot.index') }}" class="nav-link @yield('menuManagementNilai')">
                            <img class="nav-icon fas" src="{{ asset('assets/icons/BookOpenCheck.svg') }}"></img>
                            <p>
                                Nilai & Raport
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a wire:navigare href="{{ route('admin.manajemen-pembayaran-spp.index') }}" class="nav-link @yield('menuManagementPembayaran')">
                            <img class="nav-icon fas" src="{{ asset('assets/icons/BookCopy.svg') }}"></img>
                            <p>
                                Pembayaran SPP
                            </p>
                        </a>
                    </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a wire:navigare href="{{ route('admin.forum-umum.index') }}" class="nav-link">
                        <img class="nav-icon fas" src="{{ asset('assets/icons/MessagesSquare.svg') }}"></img>
                    <p>
                        Forum Umum
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a wire:navigare href="{{ route('admin.pengaturan.index') }}" class="nav-link">
                        <img class="nav-icon fas" src="{{ asset('assets/icons/Settings.svg') }}"></img>
                        <p>
                        Pengaturan
                    </p>
                    </a>
                </li>
            @endif

            @if (auth()->user()->role === 'Guru')
                <li class="nav-header">MENU</li> <!-- Menu Guru -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <img class="nav-icon fas" src="{{ asset('assets/icons/CalendarDays.svg') }}"></img>
                    <p>
                        Jadwal Mengajar
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img class="nav-icon fas" src="{{ asset('assets/icons/Barcode.svg') }}"></img>
                    <p>
                        Absensi Siswa
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img class="nav-icon fas" src="{{ asset('assets/icons/FileInput.svg') }}"></img>
                    <p>
                        Upload Materi
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img class="nav-icon fas" src="{{ asset('assets/icons/FileInput.svg') }}"></img>
                    <p>
                        Buat Tugas
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img class="nav-icon fas" src="{{ asset('assets/icons/ArchiveRestore.svg') }}"></img>
                    <p>
                        Input Nilai
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img class="nav-icon fas" src="{{ asset('assets/icons/BookOpenCheck.svg') }}"></img>
                    <p>
                        Lihat & Koreksi Tugas
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img class="nav-icon fas" src="{{ asset('assets/icons/MessageSquareMore.svg') }}"></img>
                    <p>
                        Chat Siswa
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img class="nav-icon fas" src="{{ asset('assets/icons/MessagesSquare.svg') }}"></img>
                    <p>
                        Forum Diskusi
                    </p>
                    </a>
                </li>
            @endif

            @if (auth()->user()->role === 'Siswa')
                <li class="nav-header">MENU</li> <!-- Menu Siswa -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img class="nav-icon fas" src="{{ asset('assets/icons/CalendarDays.svg') }}"></img>
                    <p>
                        Jadwal Pelajaran
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img class="nav-icon fas" src="{{ asset('assets/icons/BadgeDollarSign.svg') }}"></img>
                    <p>
                        Pembayaran SPP
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img class="nav-icon fas" src="{{ asset('assets/icons/BookDown.svg') }}"></img>
                    <p>
                        Materi & Tugas
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img class="nav-icon fas" src="{{ asset('assets/icons/BookOpenText.svg') }}"></img>
                    <p>
                        Nilai & Rapor
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img class="nav-icon fas" src="{{ asset('assets/icons/FileInput.svg') }}"></img>
                    <p>
                        Sumbit Tugas
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img class="nav-icon fas" src="{{ asset('assets/icons/MessageSquareMore.svg') }}"></img>
                    <p>
                        Chat Guru
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img class="nav-icon fas" src="{{ asset('assets/icons/MessagesSquare.svg') }}"></img>
                    <p>
                        Forum Diskusi
                    </p>
                    </a>
                </li>
            @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
