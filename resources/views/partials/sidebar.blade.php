
<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">
      <hr>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('dashboard.index') }}" aria-expanded="false">
          <span>
            <i class="ti ti-layout-dashboard"></i>
          </span>
          <span class="hide-menu">Dashboard</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('cars.index') }}" aria-expanded="false">
          <span>
            <i class="ti ti-basket"></i>
          </span>
          <span class="hide-menu">DATA MOBIL</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('costumer.index') }}" aria-expanded="false">
          <span>
            <i class="ti ti-user-plus"></i>
          </span>
          <span class="hide-menu">DATA COSTUMER</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('admin.transaksi.index') }}" aria-expanded="false">
          <span>
            <i class="ti ti-shopping-cart"></i>
          </span>
          <span class="hide-menu">DATA TRANSAKSI</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('admin.cars.laporancars') }}" aria-expanded="false">
          <span>
            <i class="ti ti-layout"></i>
          </span>
          <span class="hide-menu">LAPORAN MOBIL</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ Route('report.costumers') }}" aria-expanded="false">
          <span>
            <i class="ti ti-user-circle"></i>
          </span>
          <span class="hide-menu">LAPORAN COSTUMER</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ Route('report.Transaction') }}" aria-expanded="false">
          <span>
            <i class="ti ti-currency-dollar"></i>
          </span>
          <span class="hide-menu">LAPORAN TRANSAKSI</span>
        </a>
      </li>
    </ul>
  </nav>
