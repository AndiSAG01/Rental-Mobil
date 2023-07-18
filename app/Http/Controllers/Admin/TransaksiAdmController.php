<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        Transaksi::where('id',$id)->update([
           'status' => 'telah di sewa'
        ]);
        return redirect()->back()->with(
            ['message' => 'Sudah Terkonfirmasi','alert-type' => 'success']
        );    }

        public function end($id)
        {
            Transaksi::whereId($id)->update([
                'status' => 'selesai',
                'tanggal_selesai' => now(),
            ]);

            return back()->with(['message' => 'Transaksi Selesai 👍','alert-type'=> 'success'] );
        }
}