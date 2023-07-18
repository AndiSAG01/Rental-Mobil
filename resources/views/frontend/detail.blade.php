@extends('layouts.frontend')

@section('content')
    <!-- Section-->
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
                                    <div class="badge badge-custom <?php echo $data->status ? 'bg-success' : 'bg-danger'; ?> text-white position-absolute"
                                        style="top: 0; right: 0">
                                        <?php echo $data->status; ?>
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
                                                        Rp.{{ $data->harga_sewa }}/</span>day
                                                </div>
                                            </div>
                                            <ul class="list-unstyled list-style-group">
                                                <li class="border-bottom p-2 d-flex justify-content-between">
                                                    <span>Bahan Bakar</span>
                                                    <span style="font-weight: 600">{{ $data->bahan_bakar }}</span>
                                                </li>
                                                <li class="border-bottom p-2 d-flex justify-content-between">
                                                    <span>Jumlah Kursi</span>
                                                    <span style="font-weight: 600">{{ $data->jumlah_kursi }}</span>
                                                </li>
                                                <li class="border-bottom p-2 d-flex justify-content-between">
                                                    <span>Transmisi</span>
                                                    <span style="font-weight: 600">{{ $data->transmisi }}</span>
                                                </li>
                                                <li class="border-bottom p-2 d-flex justify-content-between">
                                                    <span>Denda</span>
                                                    <span style="font-weight: 600">{{ $data->denda }}</span>
                                                </li>
                                                <li class="border-bottom p-2 d-flex justify-content-between">
                                                    <span>Tahun Produksi</span>
                                                    <span style="font-weight: 600">{{ $data->tahun_mobil }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class="card-footer border-top-0 bg-transparent">
                                        <div class="text-center">
                                            <a class="btn d-flex align-items-center justify-content-center btn-primary mt-auto"
                                                href="{{ route('sewa', $data->id) }}" style="column-gap: 0.4rem">Sewa
                                                Mobil</i>
                                            </a>
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
                    </section>
                    @include('footer')
                @endsection
