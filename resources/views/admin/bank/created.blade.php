@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
    Form Tambah Data
    </div>
    <div class="card-body">
        <form action="{{ route('bank.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="no_rekening">No.Rekening</label>
                <input type="number" name="no_rekening" class="form-control" value="{{ old('no_rekening') }}">
            </div>
            <div class="form-group">
                <label for="image">Logo Bank</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

@endsection
