<!-- Sidebar -->
@auth
<div class="panel">
  <ul class=" navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="height: 100%">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      {{-- <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div> --}}
      {{-- <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> --}}
      {{-- <div class="sidebar-brand-text mx-3">{{ Auth::user()-> }}
</div> --}}
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="{{ route('home') }}">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  --General--
</div>
<!-- Divider -->
<hr class="sidebar-divider">
<!-- Profile -->
<li class="nav-item">
  <a class="nav-link" href="{{ route('edit_profile_home', Auth::user()->id)}}">
    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
    Profile
  </a>

  {{-- <a class="nav-link" href="#">
        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
        Data Pendaftaran
      </a>
      <a class="nav-link" href="#">
        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
        Activity Log
      </a> --}}
  {{-- <div class="dropdown-divider"></div> --}}
</li>
<!-- Divider -->
{{-- <hr class="sidebar-divider"> --}}
<!-- Nav Item - Pages Collapse Menu -->
<!-- Menu PPDB -->
<!-- Heading -->
@role('operator')
<div class="sidebar-heading">
  -- PPDB --
</div>
<!-- Divider -->
<hr class="sidebar-divider">
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
    aria-controls="collapseTwo">
    <i class="fas fa-fw fa-cog"></i>
    <span>Data PPDB</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
      <a class="collapse-item" href="{{ route('data_ppdb')}}"><span class="title">Data Pendaftaran</span></a>
      {{-- <a class="collapse-item" href="{{ route('panitia_ppdb')}}"><span class="title">Panitia</span></a> --}}
    </div>
  </div>
  <div class="dropdown-divider"></div>

</li>

<!-- MPD -->
<div class="sidebar-heading">
  -- Admin --
</div>
<!-- Divider -->
<hr class="sidebar-divider">
<li class="nav-item">
  <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapseDapo" aria-expanded="true"
    aria-controls="collapseDapo">
    <i class="fas fa-globe"></i>
    <span class="title">Data Referensi Dapodik</span>
    <!-- <span class="arrow open"></span> -->
  </a>
  <div id="collapseDapo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a href="" class="collapse-item">
        <i class="fas fa-home"></i>
        <span class="title"> Profil Sekolah</span>
      </a>
      <a href="" class="collapse-item ">
        <i class="fas fa-book-open"></i>
        <span class="title">Data Mata Pelajaran</span>
      </a>
      <a href="?page=Data-Guru" class="collapse-item ">
        <i class="fas fa-users"></i>
        <span class="title">Data Guru</span>
      </a>
      <a href="{{ route('show_students') }}" class="collapse-item ">
        <i class="fas fa-users"></i>
        <span class="title">Data Siswa</span>
      </a>
      <a href="?page=Data-Kelas" class="collapse-item ">
        <i class="fas fa-folder-alt"></i>
        <span class="title">Data Kelas dan Ekskdiv</span>
      </a>
    </div>
  </div>
  <div class="dropdown-divider"></div>
</li>


<li class="nav-item">
  <a href="javascript:;" class="nav-link collapsed" data-toggle="collapse" data-target="#collapse-admin">
    <i class="fas fa-users-cog"></i>
    <span class="title">Manajemen User</span>
    <span class="arrow"></span>
  </a>
  <div id="collapse-admin" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a href="#" class="collapse-item">
        <i class="fas fa-users"></i>
        <span class="title">Data User</span>
      </a>
      <a href="{{ route('show_permissions') }}" class="collapse-item ">
        <i class="fas fa-key"></i>
        <span class="title">Permissions</span>
      </a>
      <a href="{{ route('show_roles') }}" class="collapse-item ">
        <i class="fas fa-user-tag"></i>
        <span class="title">Roles</span>
      </a>
    </div>
  </div>
  <div class="dropdown-divider"></div>
</li>
<!-- Heading -->
<div class="sidebar-heading">
  --Guru--
</div>
<!-- Divider -->
<hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
  --Siswa--
</div>
<!-- Divider -->
<hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
  --Wali Kelas--
</div>
@endrole
{{-- @endrole --}}
<!-- MPD End -->
<!-- Nav Item - Utilities Collapse Menu -->
{{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
          aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li> --}}

<!-- Divider -->
{{-- <hr class="sidebar-divider"> --}}

<!-- Heading -->
{{-- <div class="sidebar-heading">
        Addons
      </div> --}}

<!-- Nav Item - Pages Collapse Menu -->
{{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
          aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li> --}}

<!-- Nav Item - Charts -->
{{-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li> --}}

<!-- Nav Item - Tables -->
{{-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li> --}}

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
</div>
<!-- End of Sidebar -->
@endauth