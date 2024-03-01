<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DriverRequest;
use App\Http\Requests\DriverUpdateRequest;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DriverController extends Controller
{
   public function index()
   {
    $driver = Driver::get();
    return view('admin.driver.index', compact('driver'));
   }
   public function create()
   {
    return view('admin.driver.created');
   }

   public function store(DriverRequest $request)
   {
      $data = Driver::create([
         'name' => $request->name,
         'telphone' => $request->telphone,
         'address' => $request->address,
         'gender' => $request->gender,
         'status' => $request->status,
         'SIM'         => $request->SIM

     ]);

     if ($request->hasfile('SIM')) {
      $imagePath = $request->file('SIM')->store('assets/SIM', 'public');
      $data->SIM = $imagePath;
      $data->save();
  }

      return redirect()->route('admin.driver')->with('success', 'Data Berhasil Ditambahkan');
   }

   public function edit($id)
   {
      $driver = Driver::find($id);
      return view('admin.driver.edit', compact('driver'));
   }

   public function update(Driver $id, DriverRequest $request)
   {
       $driver = $id;

        // Menghapus file gambar lama jika ada gambar baru yang diunggah
       if ($request->hasFile('SIM')) {
           Storage::delete($driver->SIM);
       }
       // $driver = driveruct::find($id);
       if($request->hasFile('SIM')){
           $imagePath = $request->file('SIM')->store('assets/SIM', 'public');
           $driver->SIM = $imagePath;
           $driver->update();
       }

       $driver->name = $request->name;
       $driver->telphone = $request->telphone;
       $driver->address = $request->address;
       $driver->gender = $request->gender;
       $driver->status = $request->status;

       $driver->update();

       return redirect()->route('admin.driver')->with('success', 'Berhasil Mengubah Produk');
   }

   public function destroy(Driver $id)
    {

        //mengahapus produk
        Storage::delete('SIM/' . $id->SIM);
        $id->delete();

        return redirect()->route('admin.driver')->with('success', 'Berhasil Menghapus Produk');
    }
}
