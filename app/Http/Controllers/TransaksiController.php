<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Car;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.transaksi', [
            'transaksi' => Transaksi::where('user_id', Auth()->user()->id)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Transaksi::create([
            'user_id' => $request->user_id,
            'car_id' => $request->car_id,
            'tanggal_rental' => $request->tanggal_rental,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => null
        ]);
        return redirect('/transaksi')->with('success', 'blblaaa');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $transaksi = Transaksi::find($id);

        if (!$transaksi) {
            // Handle the case when the transaction with the given ID is not found.
            // You can return an error view or redirect back, or do something else.
            // For example:
            // return redirect()->back()->with('error', 'Transaction not found.');
        }

        // Assuming that the relationship between Transaksi and Bank is correctly set up.
        $data = $transaksi;
        $bank = Bank::get(); // Fetch all banks from the database

        return view('frontend.pembayaran', [
            'data' => $data,
            'bank' => $bank,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
       $transaksi = Transaksi::whereId($id)->update([
        'image' => $request->file('image')->store('assets/bukti_pembayaran','public'),
        'status' => 'menunggu konfirmasi',
       ]);
       return redirect('/transaksi');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Delete related transactions
        Transaksi::where('id', $id)->delete();
        return redirect()->back()->with([
            'message' => 'Data Mobil Berhasil Dihapus',
            'alert-type'=> 'danger'
        ]);
    }
}