<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Costumer;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.costumer.index', [
            'customers' => User::where('isAdmin', 0)->get()
        ]);
    }

    public function show($id)
    {
        $data = User::whereId($id)->first();
        return view('admin.costumer.detail', [
            'data' => $data
        ]);
    }

    public function delete($id)
    {
        // Delete the car record
        User::where('id', $id)->delete();

        return redirect()->back()->with([
            'message' => 'Data Customer Berhasil Dihapus',
            'alert-type'=> 'danger'
        ]);
    }
}