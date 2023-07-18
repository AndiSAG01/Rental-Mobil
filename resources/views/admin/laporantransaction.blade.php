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
            <th>Total Denda</th>
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
                <td>{{ Carbon\Carbon::parse($ts->tanggal_rental)->format('d M Y') }}</td>
                <td>{{ Carbon\Carbon::parse($ts->tanggal_kembali)->format('d M Y') }}</td>
                <td>
                    @php
                        $selisihHari = Carbon\Carbon::today()->diffInDays($ts->tanggal_kembali);
                    @endphp
                    @if (now() >= $ts->tanggal_kembali)
                        {{ $selisihHari * $ts->car->denda }}
                    @else
                        Tidak Ada Denda
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
