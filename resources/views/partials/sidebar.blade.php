<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CV.Chandra Putry </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('cars.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Daftar Mobil</span></a>
    </li>

    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('costumer.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Daftar Costumer</span></a>
    </li>

    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.transaksi.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Daftar Transaksi</span></a>
    </li>

    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.cars.laporancars') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Laporan Daftar Mobil</span></a>
    </li>

    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="{{ Route('report.costumers') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Laporan Data Costumer</span></a>
    </li>

    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="{{ Route('report.Transaction') }}">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Laporan Data Transaksi</span></a>
    </li>

    <hr class="sidebar-divider">
    <li  class="nav-item active">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <i class="fas fa-fw"></i>
            <button   type="submit" class="btn btn-primary">Logout</button>
        </form>
      </li>




</ul>
