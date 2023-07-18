@extends('layouts.frontend')

@section('content')
<div class="site-section">
    <div class="container">
        <div class="card-body">
            <div class="card text-center">
                <div class="card-header text-left">
                  <h2><strong>Informasi Pembayaran</strong></h2>
                </div>
                <div class="card-body">
                  <h5 class="card-title"> Silahkan Melakukan Pembayaran Rekening Di Bawah Ini</h5>
                  @foreach ($bank as $bk )
                  <div class="">
                    <a class="navbar-brand text-black" href="#">
                        <img src="{{ asset('storage/' . $bk->image) }}" width="70" height="40" class="d-inline-block align-top" alt="">
                        {{ $bk->no_rekening }}
                    </a>
                  </div>
                  @endforeach

                  <form action="{{ route('transaksi.bayar', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group text-left">
                        <h3><strong> <label for="image"> Foto Bukti  Pembayaran</label></strong></h3>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                </div>
              </div>
        </div>
    </div>
</div>
@endsection
