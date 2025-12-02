<?php

namespace App\Http\Controllers;

use App\Models\Properti;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertiController extends Controller
{
    public function index()
    {
        $propertis = Properti::with(['kategoris', 'spesifikasis'])->latest()->get();
        $kategoris = Kategori::all();

        return view('admin.property', compact('propertis', 'kategoris'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric|min:0',
            'alamat' => 'nullable|string',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
            'kategori_id' => 'array',
            'kategori_id.*' => 'exists:kategoris,id',
            'spesifikasi_key' => 'array',
            'spesifikasi_value' => 'array',
        ]);

        $property = Properti::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'alamat' => $request->alamat,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'created_by' => Auth::id(),
        ]);

        // Attach kategori (many-to-many)
        if ($request->kategori_id) {
            $property->kategoris()->attach($request->kategori_id);
        }

        // Spesifikasi
        if ($request->spesifikasi_key) {
            foreach ($request->spesifikasi_key as $i => $key) {
                if ($key && $request->spesifikasi_value[$i]) {
                    $property->spesifikasis()->create([
                        'key' => $key,
                        'value' => $request->spesifikasi_value[$i],
                    ]);
                }
            }
        }

        return redirect()->route('property.index')
            ->with('success', 'Properti berhasil ditambahkan!');
    }

    public function show(Properti $property)
    {
        //
    }

    public function edit(Properti $property)
    {
        //
    }

    public function update(Request $request, Properti $property)
    {
        // dd($request);
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric|min:0',
            'alamat' => 'nullable|string',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
            'kategori_id' => 'array',
            'kategori_id.*' => 'exists:kategoris,id',
            'spesifikasi_key' => 'array',
            'spesifikasi_value' => 'array',
        ]);

        // Update properti
        $property->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'alamat' => $request->alamat,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        // dd($properti->id, $request->kategori_id);
        // Sync kategori pivot
        $property->kategoris()->sync($request->kategori_id ?? []);

        // Hapus semua spesifikasi lama
        $property->spesifikasis()->delete();

        // Tambah spesifikasi baru
        if ($request->spesifikasi_key) {
            foreach ($request->spesifikasi_key as $i => $key) {
                $value = $request->spesifikasi_value[$i] ?? null;
                if ($key && $value) {
                    $spesifikasi = new \App\Models\PropertiSpesifikasi([
                        'key' => $key,
                        'value' => $value,
                    ]);
                    $property->spesifikasis()->save($spesifikasi);
                }
            }
        }

        return redirect()->route('property.index')
            ->with('success', 'Properti berhasil diperbarui!');
    }


    public function destroy(Properti $property)
    {
        $property->kategoris()->detach();
        $property->spesifikasis()->delete();
        $property->delete();

        return redirect()->back()->with('success', 'Properti berhasil dihapus.');
    }
}
