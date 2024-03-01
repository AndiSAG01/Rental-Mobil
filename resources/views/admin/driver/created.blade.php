@extends('layouts.admin')

@section('content')

<div class="card" style="background-color: rgba(118, 118, 245, 0.387)">
    <div class="card-header text-white" style="background-color: blue">
        <b>
            Form Tambah Data
        </b>
    </div>
    <div class="card-body text-dark">
        <form action="{{ route('driver.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="form-group mb-4">
                <label for="telphone">No Telphone</label>
                <input type="number" name="telphone" class="form-control" value="{{ old('telphone') }}">
            </div>
            <div class="form-group mb-4">
                <label for="address">Alamat</label>
                <input type="text" name="address" class="form-control" value="{{ old('address') }}">
            </div>
            <div class="form-group mb-4">
                <label for="gender">Status</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="Pria">Pria</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group mb-4">
                <label for="SIM">SIM</label>
                <input type="file" name="SIM" class="form-control" value="{{ old('SIM') }}">
            </div>
            <div class="form-group mb-4">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                </select>
            </div>
            <div class="form-group mb-4">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

@endsection
