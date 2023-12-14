@extends('layouts.admin')

@section('content')

<div class="card" style="background-color: rgba(118, 118, 245, 0.387)">
    <div class="card-header text-white" style="background-color: blue">
        <b>
            Form Tambah Data
        </b>
    </div>
    <div class="card-body text-dark">
        <form action="{{ route('bank.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <label for="no_rekening">No.Rekening</label>
                <input type="number" name="no_rekening" class="form-control" value="{{ old('no_rekening') }}">
            </div>
            <div class="form-group mb-4">
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
