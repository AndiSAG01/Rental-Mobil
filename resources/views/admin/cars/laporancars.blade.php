@extends('layouts.admin')
@include('dataprint')
@section('title')
Laporan Daftar Mobil {{ $year }}
@endsection
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Laporan Daftar Mobil</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mobil</th>
                            <th>Harga Sewa Mobil</th>
                            <th>Tahun Mobil</th>
                            <th>Denda</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $cars as $car )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $car->nama_mobil }}</td>
                            <td>{{ $car->harga_sewa}}</td>
                            <td>{{ $car->tahun_mobil }}</td>
                            <td>{{ $car->denda }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Data Kosong</td>
                        </tr>

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
