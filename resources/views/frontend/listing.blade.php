@extends('layouts.frontend')

@section('content')
    <br>
    <br>
    .
    <div class="site-section" style="background-image: url('assets/images/rental.png'); obje">
        <div class="container-fluid">
            <div class="card-body">
                <div class="col-lg-7">
                    <h2 class="section-heading"><strong>Daftar Mobil</strong></h2>
                    <p class="mb-5">Pilih Mobil Sesuai Yang Anda Butuhkan</p>
                </div>
            </div>
            <div class="row">
                @foreach ($mobil as $item)
                    <div class="col-md-10 col-lg-5 mb-4">
                        <div class="listing d-block  align-items-stretch card">
                            <div class="badge badge-custom bg-{{ $item->status == 'Tersedia' ? 'success' : 'danger' }}
                                text-white position-absolute"
                                style="top: 0; right: 0">
                                {{$item -> status }}
                            </div>
                            <div class="listing-img h-100 mr-4">
                                <img src="{{ Storage::url($item->gambar) }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="listing-contents h-100">
                                <h3>{{ $item->nama_mobil }} </h3>
                                <h3>{{ $item->plat }}</h3>
                                <div class="rent-price">
                                    <strong>@currency($item->harga_sewa)</strong><span class="mx-1">/</span>day
                                </div>
                                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Bahan Bakar :</span>
                                        <span class="text">{{ $item->bahan_bakar }}</span>
                                    </div>
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Jumlah Kursi :</span>
                                        <span class="number">{{ $item->jumlah_kursi }}</span>
                                    </div>
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Tahun Prodksi :</span>
                                        <span class="number">{{ $item->tahun_mobil }}</span>
                                    </div>
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Transmisi:</span>
                                        <span class="text">{{ $item->transmisi }}</span>
                                    </div>
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Denda :</span>
                                        <span class="text">@currency($item->denda)</span>
                                    </div>
                                </div>
                                <div>
                                    <p>{{ $item->deskripsi }}</p>
                                    <p>
                                        <a href="{{ route('detail', $item->id) }}"
                                            class="btn btn-primary btn-sm">Detail</a>
                                            @if ($item ->status == 'Tersedia')
                                            <a href="{{ route('sewa', $item->id) }}" class="btn btn-primary btn-sm">Sewa</a>
                                            @endif
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    @include('footer')
@endsection
