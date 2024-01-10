@extends('layouts.admin')
@include('dataprint')
@section('title')
Laporan Transaksi {{ $year }}
@endsection
@section('content')
<div class="card">
<div class="card-header d-flex justify-content-between align-items-center">
<h3>Laporan Daftar Transaksi</h3>
</div>
<div class="card-body">
<div class="table-responsive">
    <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mobil</th>
            <th>Tanggal Rental</th>
            <th>Tanggal Kembali</th>
            <th>Total Harga sewa</th>
            <th>Status</th>
            <th>Tanggal Selesai Sewa</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transaksi as $index => $ts)
            <tr>
                <td>{{ ++$index }}</td>
                <td>{{ $ts->user->name }}</td>
                <td>{{ $ts->car->nama_mobil }}</td>
                <td>{{ \Carbon\Carbon::parse($ts->tanggal_rental)->isoFormat('DD-MM-YYYY HH:mm') }}
                </td>
                <td>{{ \Carbon\Carbon::parse($ts->tanggal_kembali)->isoFormat('DD-MM-YYYY HH:mm') }}
                </td>
                <td>
                    @php
                            $date = \Carbon\Carbon::parse($ts->tanggal_rental)->subDays(1);

                            $diffDate = $date->diffInDays(\Carbon\Carbon::parse($ts->tanggal_kembali));

                            $driver = $diffDate * 200000;

                            $selisihHari = Carbon\Carbon::today()->diffInDays($ts->tanggal_kembali);
                            $denda = $selisihHari * $ts->car->denda;
                        @endphp
                            @if ($ts->driver == 1)
                                @currency($diffDate * $ts->car->harga_sewa + $driver)
                            @else
                                @currency($diffDate * $ts->car->harga_sewa + $denda )
                            @endif
                </td>
                <td>
                    @if ($ts->status == 'selesai')
                        <a class="btn btn-success" href="#" role="button">Selesai</a>

                    @endif
                </td>
                <td>
                    {{ $ts->tanggal_selesai }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</div>
@endsection
