@extends('layouts.frontend')

@section('content')
    <br>
    <br>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="section-heading"><strong>Sewa Mobil</strong></h2>
                </div>
            </div>
            <br>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="listing d-block  align-items-stretch">
                        <div class="card-body text-center">
                            <img src="{{ Storage::url($car->gambar) }}" alt="Image" width="700px" class="img-fluid">
                        </div>
                        <div class="listing-contents h-100">
                            <h3>{{ $car->nama_mobil }}</h3>
                            <div class="rent-price">
                                <strong>@currency($car->harga_sewa)</strong><span class="mx-1">/</span>day
                            </div>
                            <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                                <div class="listing-feature pr-4">
                                    <span class="caption">Bahan Bakar :</span>
                                    <span class="text">{{ $car->bahan_bakar }}</span>
                                </div>
                                <div class="listing-feature pr-4">
                                    <span class="caption">Jumlah Kursi :</span>
                                    <span class="number">{{ $car->jumlah_kursi }}</span>
                                </div>
                                <div class="listing-feature pr-4">
                                    <span class="caption">Transmisi :</span>
                                    <span class="">{{ $car->transmisi }}</span>
                                </div>
                                <div class="listing-feature pr-4">
                                    <span class="caption">Tahun Produksi :</span>
                                    <span class="">{{ $car->tahun_mobil }}</span>
                                </div>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ route('transaksi.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <h3 class="text-danger"><strong>Penting!</strong></h3>
                <h5>Silahkan Untuk Melengkapi Data Anda Dibawah Ini
                    Untuk Menyelesaikan Pesanan.</h5>
                <h4>
                    <strong class="text-capitalize">Harap di isi dengan data yang sebenarnya. Terimakasih</strong>
                </h4>
                <input type="hidden" name="user_id" value="{{ Auth()->user()->id }}">
                <input type="hidden" name="car_id" value="{{ $car->id }}">
                <div class="form-group">
                    <label for="tanggal_sewa">Memakai Driver :</label>
                    <p><b>Dikenakan Biaya Rp.200,000/hari</b></p>
                    <select name="driver" id="driverSelect" class="form-control">
                        <option value="1">YA</option>
                        <option value="0">TIDAK</option>
                    </select>
                </div>
                
                <div class="form-group" id="dataDriverSection" style="display: none;">
                    <label for="tanggal_sewa">Data Driver</label>
                    <select class="form-control" name="driver_id" id="driverIdSelect">
                        @foreach ($driver as $dv)
                            <option value="{{ $dv->id }}" data-status="{{ $dv->status }}">
                                {{ $dv->name }} | Status : {{ $dv->status =='Aktif' ? 'Aktif' : 'Tidak Aktif' }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="tanggal_sewa">Tanggal Sewa:</label>
                    <input type="datetime-local" name="tanggal_rental" id="tanggal_sewa" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_kembali">Tanggal kembali:</label>
                    <input type="datetime-local" name="tanggal_kembali" id="tanggal_kembali" class="form-control" required>
                    <span id="tanggalKembaliError" style="color: red;"></span>
                </div>

                <button type="submit" class="btn btn-primary">Sewa</button>
            </form>
        </div>
    </div>
    @include('footer')

@endsection
