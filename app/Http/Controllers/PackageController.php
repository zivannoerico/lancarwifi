<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::latest()->paginate(10);
        return view('admin.packages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'speed' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'duration' => 'required|string|in:bulan,tahun',
            'features' => 'nullable|string',
            'is_active' => 'boolean',
        ], [
            'name.required' => 'Nama paket wajib diisi.',
            'speed.required' => 'Kecepatan wajib diisi.',
            'speed.integer' => 'Kecepatan harus berupa angka.',
            'price.required' => 'Harga wajib diisi.',
            'price.numeric' => 'Harga harus berupa angka.',
        ]);

        $validated['is_active'] = $request->has('is_active');

        Package::create($validated);

        return redirect()->route('packages.index')->with('success', 'Paket internet berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Not implemented, usually admin uses index/edit
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        return view('admin.packages.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'speed' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'duration' => 'required|string|in:bulan,tahun',
            'features' => 'nullable|string',
            'is_active' => 'boolean',
        ], [
            'name.required' => 'Nama paket wajib diisi.',
            'speed.required' => 'Kecepatan wajib diisi.',
            'speed.integer' => 'Kecepatan harus berupa angka.',
            'price.required' => 'Harga wajib diisi.',
            'price.numeric' => 'Harga harus berupa angka.',
        ]);

        $validated['is_active'] = $request->has('is_active');

        $package->update($validated);

        return redirect()->route('packages.index')->with('success', 'Data paket berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('packages.index')->with('success', 'Paket internet berhasil dihapus.');
    }
}
