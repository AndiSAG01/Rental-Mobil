@extends('layouts.frontend')

@section('content')

   <!-- Carousel Start -->
   <div class="container-fluid p-0" style="margin-bottom: 90px;">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="rental.jpeg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">HF Rent Car</h4>
                        <h1 class="display-1 text-white mb-md-4">Tempat Terbaik Untuk Berkendara</h1>
                        <a href="{{ route('listing') }}" class="btn btn-primary py-md-3 px-md-5 mt-2">Reserve Now</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="rental.jpeg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">HF Rent Car</h4>
                        <h1 class="display-1 text-white mb-md-4">Kualitas Mobil Membuat Anda Nyaman</h1>
                        <a href="{{ route('listing') }}" class="btn btn-primary py-md-3 px-md-5 mt-2">Reserve Now</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>
<!-- Carousel End -->

<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-1 text-primary text-center">01</h1>
        <h1 class="display-4 text-uppercase text-center mb-5">Welcome To <span class="text-primary">HF Rent Car</span></h1>
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <img class="w-75 mb-4" src="/assets/cs1/img/about.png" alt="">
                <p>
                    HF RENT CAR JAMBI merupakan salah satu perusahaan di kota Jambi yang bergerak dibidang jasa penyewaan mobil.
                    Perusahaan ini berdiri sejak tahun 2019 dan pada awal berdirinya, Perusahaan ini hanya memiliki beberapa unit mobil rental.
                    Dikarenakan jasa penyewaan ini cukup banyak peminatnya dan untuk memaksimalkan kinerja dari perusahaan tersebut, maka HF RENT CAR JAMBI menambah unit mobil rental menjadi 20 unit.
                </p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-4 mb-2">
                <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                        <i class="fa fa-2x fa-headset text-secondary"></i>
                    </div>
                    <h4 class="text-uppercase m-0">Selalu Hadir Untuk Anda</h4>
                </div>
            </div>
            <div class="col-lg-4 mb-2">
                <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                        <i class="fa fa-2x fa-car text-secondary"></i>
                    </div>
                    <h4 class="text-dark text-uppercase m-0">Memiliki Mobil spesifikasi yang aman</h4>
                </div>
            </div>
            <div class="col-lg-4 mb-2">
                <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                        <i class="fa fa-2x fa-map-marker-alt text-secondary"></i>
                    </div>
                    <h4 class="text-uppercase m-0">Beralamat Budiman</h4>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h1 class="display-1 text-primary text-center">02</h1>
        <h1 class="display-4 text-uppercase text-center mb-5">SISTEM PENYEWAAN MOBIL</h1>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                            <i class="fa fa-2x fa-cogs text-secondary"></i>
                        </div>
                        <h1 class="display-2 text-dark mt-n2 m-0">01</h1>
                    </div>
                    <h4 class="text-uppercase mb-3">MELAKUKAN REGISTRASI</h4>
                    <p class="m-0">costumer malkukan registrasi terlebih dahulu</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                            <i class="fa fa-2x fa-taxi text-secondary"></i>
                        </div>
                        <h1 class="display-2 text-dark mt-n2 m-0">02</h1>
                    </div>
                    <h4 class="text-uppercase mb-3">MEMILIH MOBIL</h4>
                    <p class="m-0">costumer di minta untuk meilih mobil untuk di sewa</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                            <i class="fa fa-2x fa-car text-secondary"></i>
                        </div>
                        <h1 class="display-2 text-dark mt-n2 m-0">03</h1>
                    </div>
                    <h4 class="text-uppercase mb-3">MELAKUKAN SEWA</h4>
                    <p class="m-0">costumer melakukan penyewaan</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                            <i class="fa fa-2x fa-cogs text-secondary"></i>
                        </div>
                        <h1 class="display-2 text-dark mt-n2 m-0">04</h1>
                    </div>
                    <h4 class="text-uppercase mb-3">MENGISI FOMULIR</h4>
                    <p class="m-0">Costumer melakukan pengisian fomulir penyewaan</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                            <i class="fa fa-2x fa-money-check-alt text-secondary"></i>
                        </div>
                        <h1 class="display-2 text-dark mt-n2 m-0">05</h1>
                    </div>
                    <h4 class="text-uppercase mb-3">UPLOAD PEMBAYARAN</h4>
                    <p class="m-0">Costumer di minta untuk mengupload pembayaran</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                            <i class="fa fa-2x fa-headset text-secondary"></i>
                        </div>
                        <h1 class="display-2 text-dark mt-n2 m-0">06</h1>
                    </div>
                    <h4 class="text-uppercase mb-3">MENUNGGU KONFIRMASI</h4>
                    <p class="m-0">Costumer menunggu konfirmasi penyewaan mobil dari admin</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->
    @include('footer')
@endsection
