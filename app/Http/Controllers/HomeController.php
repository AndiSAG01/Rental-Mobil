<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Validated;


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


        $car = Car::find($id); // Assuming you want to retrieve the car with ID 1
        return view('frontend.sewa', compact('car'));
    }



    public function listing()
    {

        return view('frontend.listing', [
            'mobil' => Car::get(),
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
