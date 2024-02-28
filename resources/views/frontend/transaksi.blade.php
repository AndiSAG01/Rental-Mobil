@extends('layouts.frontend')
@include('datatables')
@section('content')
    <div class="hero" style="background-image: url('assets/images/rental.png')">
        <div class="container mt-5 pt-5">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="col-lg-7">
                        <h2 class="section-heading"><strong>Transaksi</strong></h2>
                    </div>
                    <table id="example" class="table bg-white table-striped table-bordered nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Mobil</th>
                                <th scope="col">Memakai Driver</th>
                                <th scope="col">Total Biaya Driver</th>
                                <th scope="col">Total Harga Sewa</th>
                                <th scope="col">Tanggal Rental</th>
                                <th scope="col">Tanggal Kembali</th>
                                <th scope="col">Bukti Pembayaran</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($transaksi as $index => $ts)
                                <tr>
                                    <th scope="row">{{ ++$index }}</th>
                                    <td>{{ $ts->car->nama_mobil }}</td>
                                    <td>{{ $ts->driver == 0 ? 'TIDAK' : 'YA' }}</td>
                                    <td>
                                        @php
                                            $date = \Carbon\Carbon::parse($ts->tanggal_rental)->subDays(1);

                                            $diffDate = $date->diffInDays(\Carbon\Carbon::parse($ts->tanggal_kembali));

                                            $driver = $diffDate * 200000;
                                        @endphp
                                        @if ($ts->driver == 1)
                                        @currency($driver)
                                        @else
                                        @currency(0)
                                        @endif
                                    </td>
                                    <td> @php
                                        $date = \Carbon\Carbon::parse($ts->tanggal_rental)->subDays(1);

                                        $diffDate = $date->diffInDays(\Carbon\Carbon::parse($ts->tanggal_kembali));

                                        $driver = $diffDate * 200000;
                                    @endphp
                                        @if ($ts->driver == 1)
                                            @currency($diffDate * $ts->car->harga_sewa + $driver)
                                        @else
                                            @currency($diffDate * $ts->car->harga_sewa)
                                        @endif
                                    </td>
                                    </td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($ts->tanggal_rental)->isoFormat('DD-MM-YYYY HH:mm') }}
                                    </td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($ts->tanggal_kembali)->isoFormat('DD-MM-YYYY HH:mm') }}
                                    </td>
                                    <td>
                                        @if ($ts->image)
                                            <img src="{{ Storage::url($ts->image) }}" class="img-fluid rounded w-25"
                                                alt="">
                                        @else
                                            <span class="badge badge-danger">Belum Bayar</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($ts->status == 'selesai')
                                            <a class="btn btn-success" href="#" role="button">Selesai</a>
                                        @elseif($ts->status == 'telah di sewa')
                                            <a class="btn btn-info" href="#" role="button">Sedang disewa</a>
                                        @elseif($ts->status == 'menunggu konfirmasi')
                                            <a class="btn btn-secondary" href="#" role="button">Menunggu
                                                Konfirmasi</a>
                                        @elseif($ts->status == 'sewa anda di tolak')
                                            <span class="text-white p-3 badge bg-danger">Di Tolak</span>
                                        @elseif(!$ts->status)
                                            <a href="{{ Route('transaksi.show', $ts->id) }}"
                                                class="btn btn-sm btn-warning mb-2">Upload Pembayaran</a>
                                            <form onclick="return confirm('anda yakin data dihapus?');" class="d-inline"
                                                action="{{ route('transaksi.destroy', $ts->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm">Batal</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada transaksi.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
@endsection
