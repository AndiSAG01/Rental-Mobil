<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order_terbaru = DB::table('transaksi')
        ->join('users', 'users.id', '=', 'transaksi.user_id')
        ->join('cars', 'cars.id', '=', 'transaksi.car_id') 
        ->select('transaksi.*', 'users.name', 'cars.nama_mobil')
        ->limit(10)
        ->get();
        return view ('admin.dashboard',[
            'totalCars' => Car::count() ,
            'totaltransaction' => Transaksi::count(),
            'totalcustomer' => User::where('IsAdmin','0')->count(),
            'order_terbaru' => $order_terbaru,
            
        ]);
    }
}
