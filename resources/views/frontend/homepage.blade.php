@extends('layouts.frontend')

@section('content')
    <div class="hero" style="background-image: url('assets/images/rental.png');">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10">

                    <div class="row mb-5">
                        <div class="col-lg-7 intro">
                            <h1><strong>CV. Chandra Putry</strong></h1>
                            <strong>
                                <p>
                                    <h5>Selamat Datang Di Rental Mobil Chandra Putry Dimana
                                        kami akan melayani anda dengan sepenuh hati dan Memberikan solusi Terbaik Untuk Masalah
                                        Anda.</h5>
                                    </p>
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <h2 class="section-heading"><strong>Cara Melakukan Penyewaan Rental Mobil ?</strong></h2>
            <p class="mb-5">Silahkan Ikuti Petunjuk Dibawah</p>

            <div class="row mb-5">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="step">
                        <div class="step-inner">
                            <span class="number text-primary">01.</span>
                            <h3>Pilih Mobil</h3>
                            <p>Silahkan Pilih mobil yang akan anda Rental</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="step">
                        <div class="step-inner">
                            <span class="number text-primary">02.</span>
                            <h3>Isi Form Sewa Mobil</h3>
                            <p>anda akan mengisi form penyewaan mobil</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="step">
                        <div class="step-inner">
                            <span class="number text-primary">03.</span>
                            <h3>melakukan Pembayaran</h3>
                            <p>anda diminta untuk mengupload struk pembayaran bank</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="step">
                        <div class="step-inner">
                            <span class="number text-primary">04.</span>
                            <h3>Menunggu Konfirmasi</h3>
                            <p>Menunggu Konfirmasi dari admin</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="step">
                        <div class="step-inner">
                            <span class="number text-primary">05.</span>
                            <h3>Sewa Berhasil</h3>
                            <p>Jika sudah di konfirmasi transaksi sewa anda berhasil
                                anda bisa mengambil Mobil Rental yang anda sewa
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
@endsection
