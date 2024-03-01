<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategorieRequest;
use App\Models\categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        $categorie = categorie::get();
        return view('admin.categorie.index', compact('categorie'));
    }

    public function create()
    {
        return view('admin.categorie.created');
    }

    public function store(CategorieRequest $request)
    {
        categorie::create([
            'name' => $request->name,
        ]);
        return redirect()->route('admin.categorie')->with('success', 'Berhasil Menambahkan Kategori');
    }

    public function edit($id)
    {
        $categorie = categorie::find($id);
        return view('admin.categorie.edit', compact('categorie'));
    }

    public function update(CategorieRequest $request, $id)
    {
        $categorie = categorie::find($id);
        $categorie->name = $request->name;
        $categorie->update();
        return redirect()->route('admin.categorie')->with('success', 'Berhasil Mengubah Kategori');
    }

    public function destroy($id)
    {
        $categorie = categorie::find($id);
        $categorie->delete();
        return redirect()->route('admin.categorie')->with('success', 'Berhasil Menghapus Kategori');
    }
}
