@extends('layouts.admin')

@section('header', 'Tambah Sertifikasi')

@section('content')
<div class="max-w-2xl bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="px-6 py-4 border-b border-slate-200 bg-slate-50 flex items-center justify-between">
        <h3 class="font-bold text-slate-800 text-lg">Form Tambah Sertifikasi</h3>
        <a href="{{ route('certifications.index') }}" class="text-sm font-semibold text-slate-500 hover:text-slate-700 flex items-center gap-1">
            <i class='bx bx-arrow-back'></i> Kembali
        </a>
    </div>

    <form action="{{ route('certifications.store') }}" method="POST" class="p-6">
        @csrf

        <div class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-semibold text-slate-700 mb-2">Nama Sertifikasi / Legalitas</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors @error('name') border-red-500 @enderror" placeholder="Contoh: Izin Penyelenggaraan Jaringan Telekomunikasi">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="document_url" class="block text-sm font-semibold text-slate-700 mb-2">URL Dokumen / Bukti (Opsional)</label>
                <input type="url" name="document_url" id="document_url" value="{{ old('document_url') }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors @error('document_url') border-red-500 @enderror" placeholder="https://...">
                @error('document_url')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center gap-3">
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="is_active" value="1" class="sr-only peer" {{ old('is_active', true) ? 'checked' : '' }}>
                    <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                    <span class="ml-3 text-sm font-semibold text-slate-700">Publish (Tampilkan di website)</span>
                </label>
            </div>
        </div>

        <div class="mt-8 pt-6 border-t border-slate-100 flex items-center justify-end gap-3">
            <button type="reset" class="px-5 py-2.5 rounded-xl font-semibold text-slate-600 hover:bg-slate-100 transition-colors">Reset</button>
            <button type="submit" class="px-5 py-2.5 rounded-xl font-semibold bg-blue-600 hover:bg-blue-700 text-white transition-colors shadow-sm">Simpan Sertifikasi</button>
        </div>
    </form>
</div>
@endsection
