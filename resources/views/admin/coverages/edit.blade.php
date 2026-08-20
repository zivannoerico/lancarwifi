@extends('layouts.admin')

@section('header', 'Edit Coverage')

@section('content')
<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="px-6 py-4 border-b border-slate-200 bg-slate-50 flex items-center justify-between">
        <h3 class="font-bold text-slate-800 text-lg">Form Edit Area</h3>
        <a href="{{ route('coverages.index') }}" class="text-sm font-semibold text-slate-500 hover:text-slate-700 flex items-center gap-1">
            <i class='bx bx-arrow-back'></i> Kembali
        </a>
    </div>

    <form action="{{ route('coverages.update', $coverage->id) }}" method="POST" class="p-6">
        @csrf
        @method('PUT')

        <div class="space-y-6">
            <div>
                <label for="area_name" class="block text-sm font-semibold text-slate-700 mb-2">Nama Area / Wilayah</label>
                <input type="text" name="area_name" id="area_name" value="{{ old('area_name', $coverage->area_name) }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors @error('area_name') border-red-500 @enderror">
                @error('area_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="status" class="block text-sm font-semibold text-slate-700 mb-2">Status Coverage</label>
                <select name="status" id="status" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors @error('status') border-red-500 @enderror">
                    <option value="available" {{ old('status', $coverage->status) == 'available' ? 'selected' : '' }}>Available (Tersedia / Ready)</option>
                    <option value="planned" {{ old('status', $coverage->status) == 'planned' ? 'selected' : '' }}>Planned (Perencanaan)</option>
                    <option value="maintenance" {{ old('status', $coverage->status) == 'maintenance' ? 'selected' : '' }}>Maintenance (Pemeliharaan)</option>
                </select>
                @error('status')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="map_url" class="block text-sm font-semibold text-slate-700 mb-2">Google Maps Embed URL (Opsional)</label>
                <input type="url" name="map_url" id="map_url" value="{{ old('map_url', $coverage->map_url) }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors @error('map_url') border-red-500 @enderror">
                <p class="text-xs text-slate-500 mt-1">Isi jika Anda ingin menampilkan map spesifik untuk area ini.</p>
                @error('map_url')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mt-8 pt-6 border-t border-slate-100 flex items-center justify-end gap-3">
            <button type="submit" class="px-5 py-2.5 rounded-xl font-semibold bg-blue-600 hover:bg-blue-700 text-white transition-colors shadow-sm">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection
