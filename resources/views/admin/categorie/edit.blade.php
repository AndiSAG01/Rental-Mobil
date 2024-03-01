@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Form Edit Data
        </div>
        <div class="card-body">
            <form action="{{ route('categorie.update', $categorie->id) }} " method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group mb-3">
                    <label for="name">Nama Kategori</label>
                    <input type="text" name="name" class="form-control"
                        value="{{ old('name', $categorie->name) }}">
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
