<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BankStoreRequests;
use App\Http\Requests\Admin\BankUpdateRequest;
use App\Http\Requests\Admin\BankUpdateRequests;
use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bank = Bank::get();
        return view('admin.bank.index', compact('bank'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.bank.created');
    }

    public function store(BankStoreRequests $request)
    {
        if ($request->Validated()) {
            $gambar = $request->file('image')->store('assets/bank', 'public');
            Bank::create($request->except('image') + ['image' => $gambar]);
        }

        return redirect()->route('admin.bank')->with(
            ['message' => 'Data Sukses Dibuat', 'alert-type' => 'success']
        );
    }
    public function edit($id)
    {
        $bank = Bank::whereId($id)->first();
        return view('admin.bank.edit', compact('bank'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

       $request->validate([
        'no_rekening' => 'required'
       ]);

       $bank = Bank::findOrFail($id);
       $bank->no_rekening = $request->no_rekening;
       if ($request->hasFile('image')) {
        $gambar = $request->file('image')->store('assets/bank', 'public');
        $bank->image = $gambar;
       }

       $bank->save();

        return redirect()->route('admin.bank')->with([
            'message' => 'Data Berhasil Diedit',
            'alert-type' => 'info'
        ]);
    }

  
    public function destroy($id)
    {
        // Delete related transactions
        Bank::where('id', $id)->delete();

        return redirect()->back()->with([
            'message' => 'Data Berhasil Dihapus',
            'alert-type' => 'danger'
        ]);
    }
}
