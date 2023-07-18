@extends('layouts.admin')
@include('dataprint')
@section('title')
Laporan Daftar Costumer {{ $year }}
@endsection
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Laporan Daftar Costumer</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Gender</th>
                            <th>No.Telepon</th>
                            <th>No.KTP</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $no => $key)
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>{{ $key->name }}</td>
                            <td>{{ $key->alamat }}</td>
                            <td>{{ $key->gender }}</td>
                            <td>{{ $key->phone_number }}</td>
                            <td>{{ $key->ktp_number }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
