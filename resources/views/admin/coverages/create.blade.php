@extends('layouts.admin')

@section('header', 'Tambah Coverage')

@section('content')
<div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="px-6 py-4 border-b border-slate-200 bg-slate-50 flex items-center justify-between">
        <h3 class="font-bold text-slate-800 text-lg">Form Tambah Area</h3>
        <a href="{{ route('coverages.index') }}" class="text-sm font-semibold text-slate-500 hover:text-slate-700 flex items-center gap-1">
            <i class='bx bx-arrow-back'></i> Kembali
        </a>
    </div>

    <form action="{{ route('coverages.store') }}" method="POST" class="p-6">
        @csrf

        <div class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="area_name" class="block text-sm font-semibold text-slate-700 mb-2">Nama Area / Wilayah</label>
                    <input type="text" name="area_name" id="area_name" value="{{ old('area_name') }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors @error('area_name') border-red-500 @enderror" placeholder="Contoh: Kec. Klojen / Perumahan Indah">
                    @error('area_name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="region" class="block text-sm font-semibold text-slate-700 mb-2">Kota / Kabupaten</label>
                    <input type="text" name="region" id="region" value="{{ old('region') }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors @error('region') border-red-500 @enderror" placeholder="Contoh: Malang / Surabaya / Jombang">
                    @error('region')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label for="status" class="block text-sm font-semibold text-slate-700 mb-2">Status Coverage</label>
                    <select name="status" id="status" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors @error('status') border-red-500 @enderror">
                        <option value="available" {{ old('status') == 'available' ? 'selected' : '' }}>Available (Tersedia / Ready)</option>
                        <option value="planned" {{ old('status') == 'planned' ? 'selected' : '' }}>Planned (Perencanaan)</option>
                        <option value="maintenance" {{ old('status') == 'maintenance' ? 'selected' : '' }}>Maintenance (Pemeliharaan)</option>
                    </select>
                    @error('status')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="latitude" class="block text-sm font-semibold text-slate-700 mb-2">Latitude (Koordinat)</label>
                    <input type="text" name="latitude" id="latitude" value="{{ old('latitude') }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors @error('latitude') border-red-500 @enderror" placeholder="Contoh: -7.9826">
                    @error('latitude')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="longitude" class="block text-sm font-semibold text-slate-700 mb-2">Longitude (Koordinat)</label>
                    <input type="text" name="longitude" id="longitude" value="{{ old('longitude') }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors @error('longitude') border-red-500 @enderror" placeholder="Contoh: 112.6308">
                    @error('longitude')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="radius" class="block text-sm font-semibold text-slate-700 mb-2">Radius Sinyal (Meter)</label>
                    <input type="number" name="radius" id="radius" value="{{ old('radius', 2500) }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors @error('radius') border-red-500 @enderror" placeholder="Default: 2500">
                    <p class="text-xs text-slate-500 mt-1">Jangkauan lingkaran sinyal dalam satuan meter (misal: 2500 = 2.5 KM).</p>
                    @error('radius')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="map_url" class="block text-sm font-semibold text-slate-700 mb-2">Google Maps Embed URL (Opsional)</label>
                    <input type="url" name="map_url" id="map_url" value="{{ old('map_url') }}" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors @error('map_url') border-red-500 @enderror" placeholder="Contoh: https://maps.google.com/...">
                    <p class="text-xs text-slate-500 mt-1">Isi jika Anda ingin menampilkan map spesifik untuk area ini.</p>
                    @error('map_url')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="mt-8 pt-6 border-t border-slate-100 flex items-center justify-end gap-3">
            <button type="reset" class="px-5 py-2.5 rounded-xl font-semibold text-slate-600 hover:bg-slate-100 transition-colors">Reset</button>
            <button type="submit" class="px-5 py-2.5 rounded-xl font-semibold bg-blue-600 hover:bg-blue-700 text-white transition-colors shadow-sm">Simpan Area</button>
        </div>
    </form>
</div>
@endsection
