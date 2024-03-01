
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
        <a class="sidebar-link" href="{{ route('admin.categorie') }}" aria-expanded="false">
          <span>
            <i class="ti ti-window"></i>
          </span>
          <span class="hide-menu">DATA KATEGORI</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('admin.driver') }}" aria-expanded="false">
          <span>
            <i class="ti ti-user"></i>
          </span>
          <span class="hide-menu">DATA DRIVER</span>
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
      @php
      $order_terbaru = DB::table('transaksi')
                        ->join('users', 'users.id', '=', 'transaksi.user_id')
                        ->join('cars', 'cars.id', '=', 'transaksi.car_id') 
                        ->select('transaksi.*', 'users.name', 'cars.nama_mobil')
                        ->limit(10)
                        ->get();
         $pendingConfirmationCount = $order_terbaru->where('status', 'menunggu konfirmasi')->count();
      @endphp
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('admin.transaksi.index') }}" aria-expanded="false">
          <span>
            <i class="ti ti-shopping-cart"></i>
          </span>
          <span class="hide-menu">DATA TRANSAKSI</span>
          @if($pendingConfirmationCount > 0)
          <i class="ti ti-bell" style="color:#ff0000;">{{ $pendingConfirmationCount }}</i>
      @endif
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
