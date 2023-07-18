@extends('layouts.admin')
@include('datatables')
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Daftar Costumer</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Alamat</th>
                            <th>Gender</th>
                            <th>No.Telepon</th>
                            <th>No.KTP</th>
                            <th>Foto KTP</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $no => $key)
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>{{ $key->name }}</td>
                            <td>{{ $key->username }}</td>
                            <td>{{ $key->alamat }}</td>
                            <td>{{ $key->gender }}</td>
                            <td>{{ $key->phone_number }}</td>
                            <td>{{ $key->ktp_number }}</td>
                            <td>
                                <img src="{{ Storage::url($key->ktp_photo) }}" alt="Foto KTP" width="100">
                            </td>
                            <td>
                                <a href="{{  route('costumer.show',['id' => $key-> id]) }}" class="btn btn-primary btn-sm">Detail</a>
                                <form onclick="return confirm ('anda yakin data dihapus?');" class="d-inline" action="{{Route ('costumer.destroy', $key -> id )}}" method="post">
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
