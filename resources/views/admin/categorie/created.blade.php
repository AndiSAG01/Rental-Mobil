@extends('layouts.admin')

@section('content')

<div class="card" style="background-color: rgba(118, 118, 245, 0.387)">
    <div class="card-header text-white" style="background-color: blue">
        <b>
            Form Tambah Data
        </b>
    </div>
    <div class="card-body text-dark">
        <form action="{{ route('categorie.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <label for="name">Nama Kategori</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

@endsection
