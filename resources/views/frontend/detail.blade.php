@extends('layouts.frontend')

@section('content')
    {{-- <!-- Section-->
    <div class="site-section"style="background-image: url('assets/images/hero_1_a.jpg')">
        <div class="">
            <div class="container px-4 px-lg-10 mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 mb-5">
                        <div class="card h-10">
                            <!-- Product image-->
                            <div class="col mb-5">
                                <div class="card h-10">
                                    <!-- Sale badge-->
                                    <div class="badge badge-custom bg-{{ $data->status == 'Tersedia' ? 'success' : 'danger' }}
                                        text-white position-absolute"
                                        style="top: 0; right: 0">
                                        {{ $data->status}}
                                    </div>

                                    <img class="card-img-top" src="{{ Storage::url($data->gambar) }}" alt="..." />
                                    <div class="">
                                        <h2 class="">Deskripsi</h2>
                                        <p>
                                            {{ $data->deskripsi }}
                                        </p>
                                    </div>
                                    <!-- Product details-->
                                    <div class="card-body card-body-custom pt-4">
                                        <div>
                                            <!-- Product name-->
                                            <div class="mobil-info-list border-top pt-4">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        @if ($data->p3k)
                                                            <i class="ri-checkbox-circle-line"></i>
                                                        @else
                                                            <i class="ri-close-circle-line text-secondary"></i>
                                                        @endif
                                                        <span>P3K :<h6 class="badge bg-primary text-white">
                                                                @if ($data->p3k == true)
                                                                    Tersedia
                                                                @else
                                                                    Tidak Tersedia
                                                                @endif
                                                            </h6></span>
                                                    </li>

                                                    <li>
                                                        <i class="ri-close-circle-line text-secondary"></i>
                                                        <span>CHARGER : <h6 class="badge bg-primary text-white">
                                                                {{ $data->charger == true ? 'Tersedia' : 'Tidak tersedia' }}
                                                            </h6></span>
                                                    </li>
                                                    <li>
                                                        <i class="ri-close-circle-line text-secondary"></i>
                                                        <span>AUDIO : <h6 class="badge bg-primary text-white">
                                                                {{ $data->audio == true ? 'Tersedia' : 'Tidak tersedia' }}
                                                            </h6>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <i class="ri-checkbox-circle-line"></i>
                                                        <span>AC :<h6 class="badge bg-primary text-white">
                                                                {{ $data->ac == true ? 'Tersedia' : 'Tidak tersedia' }}</h6>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-10">
                                <div class="card">
                                    <!-- Product details-->
                                    <div class="card-body card-body-custom pt-4">
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="fw-bolder">Special Item</h5>
                                                <div class=" mb-3">
                                                    <span style="font-size: 1rem" class="text-primary">
                                                        @currency($data->harga_sewa)</span>day
                                                </div>
                                            </div>
                                            <ul class="list-unstyled list-style-group">
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class="card-footer border-top-0 bg-transparent">
                                        <div class="text-center">
                                            @if ($data ->status == 'Tersedia')
                                            <a class="btn d-flex align-items-center justify-content-center btn-primary mt-auto"
                                                href="{{ route('sewa', $data->id) }}" style="column-gap: 0.4rem">Sewa
                                                Mobil</i>
                                            </a>
                                            @endif
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    </section> --}}
                    <div class="container-fluid  pt-5 bg-dark">
                        <div class="container pt-5">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mb-5 card">
                                    <h1 class="display-4 text-center text-uppercase mb-5">{{$data->nama_mobil}}</h1>
                                    <div class="row mx-n2 mb-3">
                                        <div class="badge badge-custom bg-{{ $data->status == 'Tersedia' ? 'success' : 'danger' }}
                                            text-white position-absolute"
                                            style="top: 0; right: 0">
                                            {{ $data->status}}
                                        </div>

                                        <div class="col-md-3" >
                                            <img class="card-img-top" style="width: auto" src="{{ Storage::url($data->gambar) }}" alt="images-fluid" />
                                        </div>
                                    </div>
                                    <h2>Deskripsi</h2>
                                    <p>{{$data->deskripsi}}</p>
                                    <hr>
                                    <div class="row pt-2 justify-content-center mb-3">
                                        <li class="fa fa-car text-primary mr-2">
                                            @if ($data->p3k)
                                                <i class="ri-checkbox-circle-line"></i>
                                            @else
                                                <i class="ri-close-circle-line text-secondary"></i>
                                            @endif
                                            <span>P3K :<h6 class="badge bg-dark text-white">
                                                    @if ($data->p3k == true)
                                                        Tersedia
                                                    @else
                                                        Tidak Tersedia
                                                    @endif
                                                </h6></span>
                                        </li>
                                        <li class="fa fa-cogs text-primary mr-2">
                                            <i class="ri-close-circle-line text-secondary"></i>
                                            <span>CHARGER : <h6 class="badge bg-dark text-white">
                                                    {{ $data->charger == true ? 'Tersedia' : 'Tidak tersedia' }}
                                                </h6></span>
                                        </li>
                                        <li class="fa fa-road text-primary mr-2">
                                            <i class="ri-close-circle-line text-secondary"></i>
                                            <span>AUDIO : <h6 class="badge bg-dark text-white">
                                                    {{ $data->audio == true ? 'Tersedia' : 'Tidak tersedia' }}
                                                </h6>
                                            </span>
                                        </li>
                                        <li class="fa fa-road text-primary mr-2">
                                            <i class="ri-checkbox-circle-line"></i>
                                            <span>AC :<h6 class="badge bg-dark text-white">
                                                    {{ $data->ac == true ? 'Tersedia' : 'Tidak tersedia' }}</h6>
                                            </span>
                                        </li>
                                    </div>
                                    <hr>
                                    <div class="row pt-2 ">
                                        <div class="col-md-3 col-6 mb-2">
                                            <i class="fa fa-car text-primary mr-2"> Sewa</i>
                                            <span>{{$data->harga_sewa}}</span>
                                        </div>
                                        <div class="col-md-3 col-6 mb-2">
                                            <i class="fa fa-car text-primary mr-2"> Tahun Produksi : </i>
                                            <span>{{$data->tahun_mobil}}</span>
                                        </div>
                                        <div class="col-md-3 col-6 mb-2">
                                            <i class="fa fa-cogs text-primary mr-2"></i>
                                            <span>{{$data->transmisi}}</span>
                                        </div>
                                        <div class="col-md-3 col-6 mb-2">
                                            <i class="fa fa-road text-primary mr-2">BB</i>
                                            <span>{{$data->bahan_bakar}}</span>
                                        </div>
                                        <div class="col-md-3 col-6 mb-2">
                                            <i class="fa fa-eye text-primary mr-2"> Jumlah Kursi</i>
                                            <span>{{$data->jumlah_kursi}}</span>
                                        </div>
                                        <div class="col-md-3 col-6 mb-2">
                                            <i class="fa fa-car text-primary mr-2"> Denda</i>
                                            <span>{{$data->denda}}</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-footer border-top-0 bg-transparent">
                                        <div class="text-center">
                                            @if ($data ->status == 'Tersedia')
                                            <a class="btn d-flex align-items-center justify-content-center btn-primary mt-auto"
                                                href="{{ route('sewa', $data->id) }}" style="column-gap: 0.4rem">Sewa
                                                Mobil</i>
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    @include('footer')
                @endsection
