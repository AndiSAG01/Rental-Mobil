@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Daftar Kategori</h3>
            <a href="{{ route('categorie.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $categorie as $cg )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $cg->name }}</td>
                            <td>
                                <a href="{{ route('categorie.edit', $cg->id ) }}" class="btn btn-sm btn-warning">Edit</a>
                               <form onclick="return confirm ('anda yakin data dihapus?');" class="d-inline" action="{{ route ('categorie.destroy', $cg -> id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
