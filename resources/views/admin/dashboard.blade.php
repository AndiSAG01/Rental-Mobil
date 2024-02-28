@extends('layouts.admin')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <div class="btn btn-primary">
        <a class="text-white" href="{{  route('admin.bank') }}">Masukan Rekening</a>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-4 d-flex align-items-stretch">
          <a href="{{ route('cars.index') }}" class="card bg-success text-white w-100 card-hover">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <i class="ti ti-basket display-6"></i>
                <div class="ms-auto">
                  <i class="ti ti-arrow-right fs-8"></i>
                </div>
              </div>
              <div class="mt-4">
                <h4 class="card-title mb-1 text-white">TOTAL MOBIL</h4>
                <h6 class="card-text fw-normal text-white-50">
                  {{$totalCars}}
                </h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 d-flex align-items-stretch">
          <a href="{{ route('admin.transaksi.index') }}" class="card bg-warning text-white w-100 card-hover">
              <div class="card-body">
                  <div class="d-flex align-items-center">
                      <i class="ti ti-shopping-cart display-6"></i>
                      <div class="ms-auto">
                          @php
                              $unconfirmedOrders = $order_terbaru->where('status', 'menunggu konfirmasi');
                              $quantityOrders = $order_terbaru->where('status','menununggu konfirmasi');
                          @endphp
                          @if($unconfirmedOrders->count() > 0)
                             <i class="ti ti-bell" style="color:#ff0000; background:#36353537">New Order</i>
                          @endif
                          <i class="ti ti-arrow-right fs-8"></i>
                      </div>
                  </div>
                  <div class="mt-4">
                      <h4 class="card-title mb-1 text-white">TRANSAKSI</h4>
                      <h6 class="card-text fw-normal text-white-50">
                          {{$totaltransaction}}
                      </h6>
                  </div>
              </div>
          </a>
      </div>
        <div class="col-md-4 d-flex align-items-stretch">
          <a href="{{ route('costumer.index') }}" class="card bg-danger text-white w-100 card-hover">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <i class="ti ti-user-plus display-6"></i>
                <div class="ms-auto">
                  <i class="ti ti-arrow-right fs-8"></i>
                </div>
              </div>
              <div class="mt-4">
                <h4 class="card-title mb-1 text-white">
                    TOTAL COSTUMER
                </h4>
                <h6 class="card-text fw-normal text-white-50">
                  {{$totalcustomer}}
                </h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 d-flex align-items-stretch">
          <a href="{{ route('admin.cars.laporancars') }}" class="card bg-primary text-white w-100 card-hover">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <i class="ti ti-layout display-6"></i>
                <div class="ms-auto">
                  <i class="ti ti-arrow-right fs-8"></i>
                </div>
              </div>
              <div class="mt-4">
                <h4 class="card-title mb-1 text-white">
                  LAPORAN DATA MOBIL
                </h4>
                <h6 class="card-text fw-normal text-white-50">
                  {{$totalCars}}
                </h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 d-flex align-items-stretch">
          <a href="{{ Route('report.Transaction') }}" class="card bg-info text-white w-100 card-hover">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <i class="ti ti-currency-dollar display-6"></i>
                <div class="ms-auto">
                  <i class="ti ti-arrow-right fs-8"></i>
                </div>
              </div>
              <div class="mt-4">
                <h4 class="card-title mb-1 text-white">LAPORAN TRANSAKSI</h4>
                <h6 class="card-text fw-normal text-white-50">
                  {{$totaltransaction}}
                </h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 d-flex align-items-stretch">
          <a href="{{ Route('report.costumers') }}" class="card bg-secondary text-white w-100 card-hover">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <i class="ti ti-user-circle display-6"></i>
                <div class="ms-auto">
                  <i class="ti ti-arrow-right fs-8"></i>
                </div>
              </div>
              <div class="mt-4">
                <h4 class="card-title mb-1 text-white">
                  LAPORAN TOTAL COSTUMER
                </h4>
                <h6 class="card-text fw-normal text-white-50">
                  {{$totalcustomer}}
                </h6>
              </div>
            </div>
          </a>
        </div>
      </div>
@endsection
