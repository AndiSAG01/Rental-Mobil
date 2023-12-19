<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use App\Http\Requests\Admin\CarStoreRequest;
use App\Http\Requests\Admin\CarUpdateRequest;
use App\Models\Transaksi;
use Carbon\Carbon;

class  CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $cars = Car::orderBy("created_at","desc")->paginate(10);
        $cars = Car::latest()->get();
        return view('admin.cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarStoreRequest $request)
    {
        if ($request->Validated()) {
            $gambar = $request->file('gambar')->store('assets/cars', 'public');
            $slug = Str::slug($request->nama_mobil, '-');
            Car::create($request->except('gambar') + ['gambar' => $gambar, 'slug' => $slug]);
        }

        return redirect()->route('cars.index')->with(
            ['message' => 'Data Sukses Dibuat', 'alert-type' => 'success']
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {

        return view('admin.cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarUpdateRequest $request, Car $car)
    {
        if ($request->validated()) {
            $slug = Str::slug($request->nama_mobil, '-');
            $car->update($request->validated() + ['slug' => $slug]);
        }

        return redirect()->route('admin.cars.index')->with([
            'message' => 'Data Berhasil Diedit',
            'alert-type' => 'info'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Delete related transactions
        Transaksi::where('car_id', $id)->delete();

        // Delete the car record
        Car::where('id', $id)->delete();

        return redirect()->back()->with([
            'message' => 'Data Mobil Berhasil Dihapus',
            'alert-type'=> 'danger'
        ]);
    }


    public function updateImage(Request $request, $carId)
    {
        $request->validate([
            'gambar' => 'required|image'
        ]);
        $car = Car::findOrFail($carId);
        if ($request->gambar) {
            unlink('storage/' . $car->gambar);
            $gambar = $request->file('gambar')->store('assets/car', 'public');

            $car->update(['gambar' => $gambar]);
        }

        return redirect()->back()->with([
            'message' => 'Gambar Berhasil Di Edit',
            'alert-type' => 'info'
        ]);
    }
    public function laporan()
    {
        $year = Carbon::now()->format('M-Y');
        $cars = Car::latest()->get();
        return view('admin.cars.laporancars', compact('cars','year'));
    }
}