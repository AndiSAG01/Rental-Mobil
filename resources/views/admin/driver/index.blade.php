@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Daftar Driver</h3>
            <a href="{{ route('driver.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No Telphone</th>
                            <th>alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>SIM</th>
                            <th>Status</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($driver as $dv)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $dv->name }}</td>
                            <td>{{ $dv->telphone }}</td>
                            <td>{{ $dv->address }}</td>
                            <td>{{ $dv->gender }}</td>
                            <td>
                                <img src="{{  Storage::url($dv->SIM) }}" width="200">
                            </td>
                            <td>{{ $dv->status }}</td>
                            <td>
                                <a href="{{ route('driver.edit', $dv->id) }}" class="btn btn-warning mb-2">Edit</a>
                                <form action="{{ route('driver.destroy', $dv->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
