 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('AdminLTE')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SMKN 2 INDRAMAYU</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="{{asset('AdminLTE')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="{{route('admin.home');}}" class="nav-link @yield('dashboard')">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menu
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('admin.event');}}" class="nav-link @yield('event')">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Event
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('admin.Manajemen-Akun');}}" class="nav-link @yield('Manajemen-Akun')">
            <i class="nav-icon fas fa-tasks"></i>
              <p>
                Manajemen Akun
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('admin.penilaian');}}" class="nav-link @yield('penilaian')">
            <i class="nav-icon fas fa-tasks"></i>
              <p>
                Penilaian
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{route('admin.sertifikat');}}" class="nav-link @yield('sertifikat')">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Kelola sertifikat
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-plus"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.dataSesi');}}" class="nav-link @yield('dataSesi')">
                <i class="nav-icon fas fa-clock"></i>
                 <p>
                  Data Sesi
                </p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{route('admin.dataKelas');}}" class="nav-link @yield('dataKelas')">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Data Kelas
                </p>
                </a>
              </li>
          <li class="nav-item has-treeview">
            <a href="{{route('admin.dataPengujian');}}" class="nav-link @yield('dataPengujian')">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data pengujian
              </p>
            </a>
          </li>
        </ul>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
