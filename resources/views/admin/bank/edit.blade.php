@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Form Tambah Data
        </div>
        <div class="card-body">
            <form action="{{ route('bank.update', $bank->id) }} " method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group mb-3">
                    <label for="no_rekening">No.Rekening</label>
                    <input type="number" name="no_rekening" class="form-control"
                        value="{{ old('no_rekening', $bank->no_rekening) }}">
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="form-group mb-3">
                            <img src="{{ Storage::url($bank->image) }}" width="200" alt="">
                        </div>
                    </div>
                    <div class="col-md">
                        <label for="image">Gambar</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
