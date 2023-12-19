@extends('layouts.admin')
@include('datatables')
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Daftar Mobil</h3>
            <a href="{{ route('cars.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mobil</th>
                            <th>Gambar Mobil</th>
                            <th>Plat Mobil</th>
                            <th>Harga Sewa Mobil</th>
                            <th>Status Mobil</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $cars as $car )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $car->nama_mobil }}</td>
                            <td>
                                <img src="{{  Storage::url($car->gambar) }}" width="200">
                            </td>
                            <td>{{ $car->plat }}</td>
                            <td>@currency($car->harga_sewa)</td>
                            <td>{{ $car->status }}</td>
                            <td>
                                <a href="{{ route('cars.edit', $car -> id ) }}" class="btn btn-sm btn-warning">Edit</a>
                               <form onclick="return confirm ('anda yakin data dihapus?');" class="d-inline" action="{{ route ('cars.destroy', $car -> id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                               </form>
                            </td>
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
