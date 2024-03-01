@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Form Tambah Data
        </div>
        <div class="card-body">
            <form action="{{ route('driver.update', $driver->id) }} " method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group mb-4">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $driver->name) }}">
                </div>
                <div class="form-group mb-4">
                    <label for="telphone">No Telphone</label>
                    <input type="number" name="telphone" class="form-control" value="{{ old('telphone', $driver->telphone) }}">
                </div>
                <div class="form-group mb-4">
                    <label for="address">Alamat</label>
                    <input type="text" name="address" class="form-control" value="{{ old('address', $driver->address) }}">
                </div>
                <div class="form-group mb-4">
                    <label for="gender">Jenis Kelamin</label>
                    <select name="gender" id="gender" class="form-control">
                        <option {{ $driver->gender == 'Pria' ? 'selected' : null }} value="Pria">Pria</option>
                        <option {{ $driver->gender == 'Perempuan' ? 'selected' : null }} value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
                    </select>
                </div>
                <div class="card-header font-weight-bold text-baseline mb-4">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ Storage::url($driver->SIM) }}" class="rounded border-3"
                                style="object-fit: cover;
                object-position: center; width: 150px; height:150px;"
                                alt="{{ $driver->name }}">
                        </div>
                        <div class="col-8">
                            <div class="custom-file">
                                <label for="exampleFormControlFile1">Foto SIM</label>
                                <input type="file" name="SIM" class="form-control-file btn btn-primary"
                                    id="exampleFormControlFile1">
                                <small class="text-danger">Kosongkan jika tidak mengubah gambar</small>
    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
