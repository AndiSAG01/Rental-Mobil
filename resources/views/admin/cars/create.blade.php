@extends('layouts.admin')

@section('content')

<div class="card" style="background-color: rgba(118, 118, 245, 0.387)">
    <div class="card-header text-white" style="background-color: blue">
        <b>
            Form Tambah Data
        </b>
    </div>
    <div class="card-body text-dark">
        <form action="{{ route('cars.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_mobil">Nama Mobil</label>
                <input type="text" name="nama_mobil" class="form-control" value="{{ old('nama_mobil') }}">
            </div>
            <div class="form-group">
                <label for="harga_sewa">Harga Sewa</label>
                <input type="number" name="harga_sewa" class="form-control" value="{{ old('harga_sewa') }}">
            </div>
            <div class="form-group">
                <label for="tahun_mobil">Tahun Produksi</label>
                <input type="number" name="tahun_mobil" class="form-control" id="tahun_mobil" value="{{ old ('tahun_mobil') }}">
            </div>
            <div class="form-group">
                <label for="plat">Plat Mobil</label>
                <input type="text" name="plat" class="form-control" id="tahun_mobil" value="{{ old ('plat') }}">
            </div>
            <div class="form-group">
                <label for="bahan_bakar">Bahan Bakar</label>
                <input type="text" name="bahan_bakar" class="form-control" value="{{ old('bahan_bakar') }}">
            </div>
            <div class="form-group">
                <label for="jumlah_kursi">Jumlah Kursi</label>
                <input type="number" name="jumlah_kursi" class="form-control" value="{{ old('jumlah_kursi') }}">
            </div>
            <div class="form-group">
                <label for="transmisi">Transmisi</label>
                <select name="transmisi" id="transmisi" class="form-control">
                    <option value="manual">Manual</option>
                    <option value="otomatis">Otomatis</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="Tersedia">Tersedia</option>
                    <option value="Tidak tersedia">Tidak Tersedia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="5">{{ old ('deskripsi') }}</textarea>
            </div>
            <div class="form-group">
                <label for="denda">Denda</label>
                <input type = 'number' name="denda" class="form-control" id="denda" cols="30" rows="5">{{ old ('denda') }}
            </div>
            <div class="form-group">
                <label for="p3k">p3k</label>
                <select name="p3k" id="p3k" class="form-control">
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak Tersedia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="charger">Charger</label>
                <select name="charger" id="charger" class="form-control">
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak Tersedia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="audio">Audio</label>
                <select name="audio" id="audio" class="form-control">
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak Tersedia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ac">AC</label>
                <select name="ac" id="ac" class="form-control">
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak Tersedia</option>
                </select>
            </div>
            <div class="form-group mb-4">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" name="gambar">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

@endsection
