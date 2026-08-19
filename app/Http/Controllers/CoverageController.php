<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Coverage;

class CoverageController extends Controller
{
    public function index()
    {
        $coverages = Coverage::latest()->paginate(10);
        return view('admin.coverages.index', compact('coverages'));
    }

    public function create()
    {
        return view('admin.coverages.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'area_name' => 'required|string|max:255',
            'status' => 'required|string|in:available,planned,maintenance',
            'map_url' => 'nullable|url',
        ], [
            'area_name.required' => 'Nama area wajib diisi.',
            'status.required' => 'Status wajib dipilih.',
            'map_url.url' => 'Format URL peta tidak valid.',
        ]);

        Coverage::create($validated);

        return redirect()->route('coverages.index')->with('success', 'Area coverage berhasil ditambahkan.');
    }

    public function show(string $id)
    {
    }

    public function edit(Coverage $coverage)
    {
        return view('admin.coverages.edit', compact('coverage'));
    }

    public function update(Request $request, Coverage $coverage)
    {
        $validated = $request->validate([
            'area_name' => 'required|string|max:255',
            'status' => 'required|string|in:available,planned,maintenance',
            'map_url' => 'nullable|url',
        ], [
            'area_name.required' => 'Nama area wajib diisi.',
            'status.required' => 'Status wajib dipilih.',
            'map_url.url' => 'Format URL peta tidak valid.',
        ]);

        $coverage->update($validated);

        return redirect()->route('coverages.index')->with('success', 'Area coverage berhasil diperbarui.');
    }

    public function destroy(Coverage $coverage)
    {
        $coverage->delete();
        return redirect()->route('coverages.index')->with('success', 'Area coverage berhasil dihapus.');
    }
}
