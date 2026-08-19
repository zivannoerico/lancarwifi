<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Certification;

class CertificationController extends Controller
{
    public function index()
    {
        $certifications = Certification::latest()->paginate(10);
        return view('admin.certifications.index', compact('certifications'));
    }

    public function create()
    {
        return view('admin.certifications.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'document_url' => 'nullable|url',
            'is_active' => 'boolean',
        ], [
            'name.required' => 'Nama sertifikasi wajib diisi.',
            'document_url.url' => 'Format URL dokumen tidak valid.',
        ]);

        $validated['is_active'] = $request->has('is_active');
        Certification::create($validated);

        return redirect()->route('certifications.index')->with('success', 'Sertifikasi berhasil ditambahkan.');
    }

    public function show(string $id)
    {
    }

    public function edit(Certification $certification)
    {
        return view('admin.certifications.edit', compact('certification'));
    }

    public function update(Request $request, Certification $certification)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'document_url' => 'nullable|url',
            'is_active' => 'boolean',
        ], [
            'name.required' => 'Nama sertifikasi wajib diisi.',
            'document_url.url' => 'Format URL dokumen tidak valid.',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $certification->update($validated);

        return redirect()->route('certifications.index')->with('success', 'Sertifikasi berhasil diperbarui.');
    }

    public function destroy(Certification $certification)
    {
        $certification->delete();
        return redirect()->route('certifications.index')->with('success', 'Sertifikasi berhasil dihapus.');
    }
}
