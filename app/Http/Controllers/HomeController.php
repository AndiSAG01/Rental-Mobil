<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\categorie;
use App\Models\Driver;
use App\Models\User;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.homepage');
    }

    public function contact()
    {
        return view('frontend.contact');
    }


    public function detail($id)
    {
        $data = Car::whereId($id)->first();
        return view('frontend.detail', [
            'data' => $data
        ]);
    }

    public function sewa(Request $request, $id)
    {
        $driver = Driver::where('status', 'Aktif')->get();

        $car = Car::find($id);
        return view('frontend.sewa', compact('car','driver'));
    }

    public function produkByKategori($id)
    {
       //menampilkan data sesua kategori yang diminta user
        return view('frontend.kategori', [
            'mobil' => Car::where('categories_id', $id)->paginate(5),
            'categories' => Categorie::where('id', $id)->first()
        ]);
    }

    public function listing()
    {
        $kat = Categorie::join('cars', 'cars.categories_id', '=', 'categories.id')
        ->select(DB::raw('count(cars.categories_id) as jumlah, categories.*'))
        ->groupBy('categories.id')
        ->get();
        
        return view('frontend.listing', [
            'mobil' => Car::get(),
            'categories' => $kat
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
     }

    public function costumer()
    {
        $customers = User::where('isAdmin', 0)->get();
        $year = Carbon::now()->format('M-Y');
        return view('admin.laporan', compact('customers','year'));
    }

    public function transaction()
    {
        $year = Carbon::now()->format('M-Y');
        $transaksi = Transaksi::get();
        return view('admin.laporantransaction', compact('transaksi','year'));
    }


}
