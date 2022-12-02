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
        <div class="image">
          <img src="{{asset('AdminLTE')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Nama Asesor</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="{{route('asesor.home');}}" class="nav-link @yield('dashboard')">
            <i class="nav-icon fas fa-user"></i>
              <p>
                Dashboard
              </p>
            </a>

          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-plus"></i>
              <p>
                data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('asesor.dataSesi');}}" class="nav-link @yield('dataSesi')">
                <i class="nav-icon fas fa-user-tie"></i>
                 <p>
                  Data Sesi
                </p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{route('asesor.dataKelas');}}" class="nav-link @yield('dataKelas')">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Data Kelas
                </p>
                </a>
              </li>
          <li class="nav-item has-treeview">
            <a href="{{route('asesor.dataPengujian');}}" class="nav-link @yield('dataPengujian')">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data pengujian
              </p>
            </a>
          </li>
        </ul>
        <li class="nav-item has-treeview ">
            <a href="{{route('asesor.home');}}" class="nav-link @yield('profile')">
            <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
              </p>
            </a>

          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
