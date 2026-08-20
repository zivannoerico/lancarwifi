@extends('layouts.admin')

@section('header', 'Edit Paket Internet')

@section('content')

<div class="mb-6 flex items-center justify-between">
    <div>
        <a href="{{ route('packages.index') }}" class="text-sm font-semibold text-blue-600 hover:text-blue-700 flex items-center gap-1 mb-2">
            <i class='bx bx-left-arrow-alt'></i> Kembali ke Daftar
        </a>
        <h2 class="text-2xl font-bold text-slate-800">Edit Data Paket</h2>
    </div>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
    <form action="{{ route('packages.update', $package->id) }}" method="POST" class="p-6 md:p-8">
        @csrf
        @method('PUT')
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <!-- Nama Paket -->
            <div class="md:col-span-2">
                <label for="name" class="block text-sm font-semibold text-slate-700 mb-2">Nama Paket <span class="text-red-500">*</span></label>
                <input type="text" id="name" name="name" value="{{ old('name', $package->name) }}" placeholder="Contoh: Paket Keluarga Ultimate" required
                    class="w-full px-4 py-2.5 bg-slate-50 border @error('name') border-red-300 focus:border-red-500 focus:ring-red-500/20 @else border-slate-200 focus:border-blue-500 focus:ring-blue-500/20 @enderror rounded-xl outline-none transition-all">
                @error('name')
                    <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p>
                @enderror
            </div>

            <!-- Kecepatan -->
            <div>
                <label for="speed" class="block text-sm font-semibold text-slate-700 mb-2">Kecepatan <span class="text-red-500">*</span></label>
                <div class="relative">
                    <input type="number" id="speed" name="speed" value="{{ old('speed', $package->speed) }}" placeholder="0" min="1" required
                        class="w-full px-4 py-2.5 pr-16 bg-slate-50 border @error('speed') border-red-300 focus:border-red-500 focus:ring-red-500/20 @else border-slate-200 focus:border-blue-500 focus:ring-blue-500/20 @enderror rounded-xl outline-none transition-all">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                        <span class="text-slate-500 font-medium text-sm">Mbps</span>
                    </div>
                </div>
                @error('speed')
                    <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p>
                @enderror
            </div>

            <!-- Harga -->
            <div>
                <label for="price" class="block text-sm font-semibold text-slate-700 mb-2">Harga Dasar <span class="text-red-500">*</span></label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                        <span class="text-slate-500 font-medium text-sm">Rp</span>
                    </div>
                    <!-- Ensure integer representation of decimal for edit field -->
                    <input type="number" id="price" name="price" value="{{ old('price', (int)$package->price) }}" placeholder="0" min="0" required
                        class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border @error('price') border-red-300 focus:border-red-500 focus:ring-red-500/20 @else border-slate-200 focus:border-blue-500 focus:ring-blue-500/20 @enderror rounded-xl outline-none transition-all">
                </div>
                @error('price')
                    <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p>
                @enderror
            </div>

            <!-- Durasi -->
            <div>
                <label for="duration" class="block text-sm font-semibold text-slate-700 mb-2">Periode Berlangganan <span class="text-red-500">*</span></label>
                <div class="relative">
                    <select id="duration" name="duration" required
                        class="w-full px-4 py-2.5 bg-slate-50 border @error('duration') border-red-300 focus:border-red-500 focus:ring-red-500/20 @else border-slate-200 focus:border-blue-500 focus:ring-blue-500/20 @enderror rounded-xl outline-none transition-all appearance-none cursor-pointer">
                        <option value="bulan" {{ old('duration', $package->duration) == 'bulan' ? 'selected' : '' }}>Per Bulan</option>
                        <option value="tahun" {{ old('duration', $package->duration) == 'tahun' ? 'selected' : '' }}>Per Tahun</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-slate-400">
                        <i class='bx bx-chevron-down text-xl'></i>
                    </div>
                </div>
                @error('duration')
                    <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p>
                @enderror
            </div>

            <!-- Status -->
            <div class="flex items-center gap-6 mt-2 md:mt-8">
                <!-- Status Aktif -->
                <label class="flex items-center gap-3 cursor-pointer group">
                    <div class="relative">
                        <input type="checkbox" name="is_active" value="1" class="sr-only peer" {{ old('is_active', $package->is_active) ? 'checked' : '' }}>
                        <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-100 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                    </div>
                    <span class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition-colors">Paket Aktif</span>
                </label>

                <!-- Pilihan Terfavorit -->
                <label class="flex items-center gap-3 cursor-pointer group">
                    <div class="relative">
                        <input type="checkbox" name="is_popular" value="1" class="sr-only peer" {{ old('is_popular', $package->is_popular) ? 'checked' : '' }}>
                        <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-indigo-100 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-indigo-600"></div>
                    </div>
                    <span class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition-colors">Jadikan Pilihan Terfavorit</span>
                </label>
            </div>

            <!-- Fitur Paket (Textarea) -->
            <div class="md:col-span-2 mt-4">
                <label for="features" class="block text-sm font-semibold text-slate-700 mb-2">Fitur / Keunggulan Paket</label>
                <textarea id="features" name="features" rows="4" placeholder="Contoh: Unlimited Kuota, Router Gratis, Cocok untuk 3 perangkat"
                    class="w-full px-4 py-3 bg-slate-50 border @error('features') border-red-300 focus:border-red-500 focus:ring-red-500/20 @else border-slate-200 focus:border-blue-500 focus:ring-blue-500/20 @enderror rounded-xl outline-none transition-all resize-y">{{ old('features', $package->features) }}</textarea>
                <p class="text-slate-500 text-xs mt-2 flex items-start gap-1">
                    <i class='bx bx-info-circle text-sm'></i> Pisahkan setiap fitur dengan tanda koma (,)
                </p>
                @error('features')
                    <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex items-center gap-4 pt-6 border-t border-slate-100">
            <button type="submit" class="px-6 py-2.5 bg-blue-600 text-white font-semibold rounded-xl hover:bg-blue-700 hover:shadow-lg hover:shadow-blue-600/20 transition-all">
                Update Paket
            </button>
            <a href="{{ route('packages.index') }}" class="px-6 py-2.5 bg-white border border-slate-200 text-slate-600 font-semibold rounded-xl hover:bg-slate-50 hover:text-slate-800 transition-all">
                Batal
            </a>
        </div>
    </form>
</div>

@endsection
