@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Daftar Rekening</h3>
            <a href="{{ route('bank.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No. Rekening</th>
                            <th>Gambar Bank</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $bank as $bk )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $bk->no_rekening }}</td>
                            <td><img src="{{  Storage::url($bk->image) }}" width="200"></td>
                            <td>
                                <a href="{{ route('bank.edit', $bk->id ) }}" class="btn btn-sm btn-warning">Edit</a>
                               <form onclick="return confirm ('anda yakin data dihapus?');" class="d-inline" action="{{ route ('bank.destroy', $bk -> id) }}" method="post">
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
