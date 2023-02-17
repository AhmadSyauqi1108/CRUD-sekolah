<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sekolah QI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="/dashboard" class="nav-link {{$menu == 'dashboard' ? 'active' : ''}}">
                <i class="nav-icon fas fa-columns"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>   
            <li class="nav-item">
                <a href="/data-siswa" class="nav-link {{$menu == 'siswa' ? 'active' : ''}}">
                <i class="nav-icon fas fa-columns"></i>
                    <p>
                        Data Siswa
                    </p>
                </a>
            </li>   
            <li class="nav-item">
                <a href="/data-kelas" class="nav-link {{$menu == 'kelas' ? 'active' : ''}}">
                <i class="nav-icon fas fa-columns"></i>
                    <p>
                        Data Kelas
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/data-jurusan" class="nav-link {{$menu == 'jurusan' ? 'active' : ''}}">
                <i class="nav-icon fas fa-columns"></i>
                    <p>
                        Data Jurusan
                    </p>
                </a>
            </li>
        </ul>
      </nav>
    </div>
  </aside>