@extends('layouts.admin')
@include('datatables')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3>Daftar Transaksi</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Mobil</th>
                        <th>Bukti Pembayaran</th>
                        <th>Tanggal Rental</th>
                        <th>Tanggal Kembali</th>
                        <th>Total Harga sewa</th>
                        <th>Total Denda</th>
                        <th>Status</th>
                        <th>Tanggal Selesai Sewa</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $index => $ts)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $ts->user->name }}</td>
                        <td>{{ $ts->car->nama_mobil }}</td>
                        <td>
                            @if ($ts->image)
                            <img src="{{ Storage::url($ts->image) }}"  width="200px" height="300px"
                                alt="">
                        @else
                            <span class="badge badge-danger">Belum Bayar</span>
                        @endif
                        </td>
                        <td>{{ Carbon\Carbon::parse($ts->tanggal_rental)->format('d M Y') }}</td>
                        <td>{{ Carbon\Carbon::parse($ts->tanggal_kembali)->format('d M Y') }}</td>
                        <td> @php
                            $date = \Carbon\Carbon::parse($ts->tanggal_rental)->diffInDays(\Carbon\Carbon::parse($ts->tanggal_kembali));
                            $driver = $date * 200000;
                            @endphp
                            @if ($ts->driver == 1)
                            @currency($date * $ts->car->harga_sewa + $driver)
                            @else
                            @currency($date * $ts->car->harga_sewa)
                            @endif
                        </td>
                        <td>
                            @php
                            $selisihHari = Carbon\Carbon::today()->diffInDays($ts->tanggal_kembali);
                            @endphp
                            @if (now() >= $ts->tanggal_kembali)
                            @currency($selisihHari * $ts->car->denda)
                            @else
                            Tidak Ada Denda
                            @endif
                        </td>
                        <td>
                            @if ($ts->status == 'selesai')
                            <a class="btn btn-success" href="#" role="button">Selesai</a>
                            @elseif($ts->status == 'telah di sewa')
                            <a class="btn btn-info" href="#" role="button">Sedang disewa</a>
                            @elseif($ts->status == 'menunggu konfirmasi')
                            <a class="btn btn-secondary" href="#" role="button">Menunggu Konfirmasi</a>
                            @elseif(!$ts->status)
                            <a class="btn btn-primary" href="#" role="button">Belum bayar</a>
                            @elseif ($ts->status == 'sewa anda di tolak' )
                            <a class="btn btn-danger" href="#" role="button">Di Tolak</a>
                            @endif
                        </td>
                        <td>
                            {{ $ts->tanggal_selesai }}
                        </td>

                        <td>
                            @if ($ts->status == 'selesai')
                            <a class="btn btn-success mb-1" href="#" role="button">Selesai</a>
                            @foreach($transaksi as $item)
                            <form action="{{ route('admin.delete', $item->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                            @endforeach
                            @elseif($ts->status == 'telah di sewa')
                            <a href="{{ Route('admin.transaksi.selesai', $ts->id) }}" class="btn btn-success">Selesai</a>
                            @elseif($ts->status == 'menunggu konfirmasi')
                            <form action="{{ Route('transaksi.confirmation', $ts->id) }}" method="post">
                                @csrf
                                @method('put')

                                <button type="submit" class="btn btn-primary">Konfirmasi</button>
                            </form>

                            @elseif ($ts->status == null )
                            <form action="{{ Route('admin.transaksi.reject', $ts->id) }}" method="post">
                                @csrf
                                @method('put')

                                <button type="submit" class="btn btn-danger">Tolak</button>
                            </form>
                            @elseif($ts->status == 'sewa anda di tolak')
                            @foreach($transaksi as $item)
                            <form action="{{ route('admin.delete', $item->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                            @endforeach
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
