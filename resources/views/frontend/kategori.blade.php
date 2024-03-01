@extends('layouts.frontend')
@section('content')


<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center font-weight-bold text-primary mb-4">
                <h3 class="display-5" style="text-transform:uppercase">Kategori Mobil {{ $categories->name }}</h3>
                <hr>
            </div>
        </div>
        <div class="row mb-5 justify-content-center">
            <div class="row mb-5">
                @foreach ($mobil as $item)
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4 listing d-block align-items-stretch card">
                        <div class="badge badge-custom bg-{{ $item->status == 'Tersedia' ? 'success' : 'danger' }}
                            text-white position-absolute"
                            style="top: 0; right: 0">
                            {{ $item->status }}
                        </div>
                        <img src="{{ Storage::url($item->gambar) }}" alt="Image" class="img-fluid">
                        <h4 class="text-uppercase mb-4">{{ $item->nama_mobil }}</h4>
                        <h4 class="text-uppercase mb-4">{{ $item->plat }}</h4>
                        <p>{{ $item->deskripsi }}</p>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"> Tahun Produksi</i>
                                <span>{{ $item->tahun_mobil }}</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>{{ $item->transmisi }}</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1">Denda</i>
                                <span>@currency($item->denda)</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"> BB </i>
                                <span>{{ $item->bahan_bakar }}</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mb-4">
                            <a class="btn btn-primary px-3" href="">@currency($item->harga_sewa)/Hari</a>
                        </div>
                        <div class="d-flex justify-content-center mb-4">
                            <p>
                                <a href="{{ route('detail', $item->id) }}" class="btn btn-primary btn-sm">Detail</a>
                                @if ($item->status == 'Tersedia')
                                    <a href="{{ route('sewa', $item->id) }}" class="btn btn-primary btn-sm">Sewa</a>
                                @endif
                            </p>

                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            {{-- <div class="col-md-9 order-2">

            </div> --}}
        </div>
    </div>

</div>
@endsection