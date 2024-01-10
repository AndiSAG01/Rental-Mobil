<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Car;
use PhpParser\Node\Expr\FuncCall;

class TransaksiAdmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $transaksi = Transaksi::get();
        return view('admin.transaksi.index', compact('transaksi'));
    }


    public function confirmation($id)
    {
        $transaksi = Transaksi::whereId($id)->first()->car->id;
        Car::whereId($transaksi)->update([
            'status' => 'Tidak Tersedia'
        ]);
        Transaksi::where('id', $id)->update([
            'status' => 'telah di sewa'
        ]);

        return redirect()->back()->with(
            ['message' => 'Sudah Terkonfirmasi', 'alert-type' => 'success']
        );
    }

    public function end($id)
    {

        $transaksi = Transaksi::whereId($id)->first()->car->id;
        Car::whereId($transaksi)->update([
            'status' => 'Tersedia'
        ]);
        Transaksi::whereId($id)->update([
            'status' => 'selesai',
            'tanggal_selesai' => now(),
        ]);

        return back()->with(['message' => 'Transaksi Selesai 👍', 'alert-type' => 'success']);
    }

    public function reject($id)
    {
        Transaksi::where('id', $id)->update([
            'status' => 'sewa anda di tolak'
        ]);
        return redirect()->back()->with(
            ['message' => 'Sudah Terkonfirmasi', 'alert-type' => 'success']
        );
    }


    public function destroy($id)
    {

        $transaksi = Transaksi::where('id', $id)->delete();

        return redirect()->back()->with([
            'transaksi',
            'message' => 'Data Berhasil Dihapus',
            'alert-type' => 'danger'
        ]);
    }
}
