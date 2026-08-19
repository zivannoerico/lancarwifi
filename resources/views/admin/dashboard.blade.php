@extends('layouts.admin')

@section('header', 'Dashboard Overview')

@section('content')

<!-- Welcome Banner -->
<div class="mb-8 relative overflow-hidden bg-gradient-to-br from-blue-600 to-indigo-700 rounded-2xl shadow-lg shadow-blue-900/20 text-white p-8 md:p-10">
    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 rounded-full bg-white opacity-5 blur-3xl"></div>
    <div class="absolute bottom-0 right-32 mb-10 w-32 h-32 rounded-full bg-blue-400 opacity-20 blur-2xl"></div>
    
    <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
        <div class="max-w-2xl">
            <h1 class="text-3xl font-bold mb-3 tracking-tight">Selamat Datang di Admin Panel LancarWiFi</h1>
            <p class="text-blue-100 text-lg leading-relaxed font-light">
                Pantau statistik, kelola paket internet, area jangkauan, dan informasi website Anda dengan mudah dari satu layar interaktif.
            </p>
        </div>
        <div class="shrink-0 flex items-center gap-3">
            <a href="/" target="_blank" class="px-6 py-3 bg-white/10 hover:bg-white/20 border border-white/20 backdrop-blur-md rounded-xl font-semibold transition-all duration-300 shadow-sm flex items-center gap-2">
                <i class='bx bx-globe text-xl'></i> Lihat Website
            </a>
        </div>
    </div>
</div>

<!-- Stats Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    
    <!-- Stat Card 1 -->
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition-shadow group relative overflow-hidden">
        <div class="absolute top-0 right-0 w-24 h-24 bg-blue-50 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110"></div>
        <div class="relative z-10 flex items-start justify-between">
            <div>
                <p class="text-sm font-semibold text-slate-500 uppercase tracking-widest mb-1">Total Paket</p>
                <h3 class="text-4xl font-black text-slate-800">{{ $stats['packages'] }}</h3>
            </div>
            <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center shadow-inner">
                <i class='bx bx-package text-2xl'></i>
            </div>
        </div>
        <div class="relative z-10 mt-4 flex items-center text-sm">
            <a href="{{ route('packages.index') }}" class="text-blue-600 font-semibold hover:text-blue-700 flex items-center gap-1">
                Kelola Paket <i class='bx bx-right-arrow-alt'></i>
            </a>
        </div>
    </div>

    <!-- Stat Card 2 -->
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition-shadow group relative overflow-hidden">
        <div class="absolute top-0 right-0 w-24 h-24 bg-amber-50 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110"></div>
        <div class="relative z-10 flex items-start justify-between">
            <div>
                <p class="text-sm font-semibold text-slate-500 uppercase tracking-widest mb-1">Total FAQ</p>
                <h3 class="text-4xl font-black text-slate-800">{{ $stats['faqs'] }}</h3>
            </div>
            <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center shadow-inner">
                <i class='bx bx-question-mark text-2xl'></i>
            </div>
        </div>
        <div class="relative z-10 mt-4 flex items-center text-sm">
            <a href="{{ route('faqs.index') }}" class="text-amber-600 font-semibold hover:text-amber-700 flex items-center gap-1">
                Kelola FAQ <i class='bx bx-right-arrow-alt'></i>
            </a>
        </div>
    </div>

    <!-- Stat Card 3 -->
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition-shadow group relative overflow-hidden">
        <div class="absolute top-0 right-0 w-24 h-24 bg-emerald-50 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110"></div>
        <div class="relative z-10 flex items-start justify-between">
            <div>
                <p class="text-sm font-semibold text-slate-500 uppercase tracking-widest mb-1">Area Coverage</p>
                <h3 class="text-4xl font-black text-slate-800">{{ $stats['coverages'] }}</h3>
            </div>
            <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center shadow-inner">
                <i class='bx bx-map-alt text-2xl'></i>
            </div>
        </div>
        <div class="relative z-10 mt-4 flex items-center text-sm">
            <a href="{{ route('coverages.index') }}" class="text-emerald-600 font-semibold hover:text-emerald-700 flex items-center gap-1">
                Kelola Coverage <i class='bx bx-right-arrow-alt'></i>
            </a>
        </div>
    </div>

    <!-- Stat Card 4 -->
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition-shadow group relative overflow-hidden">
        <div class="absolute top-0 right-0 w-24 h-24 bg-purple-50 rounded-bl-full -mr-4 -mt-4 transition-transform group-hover:scale-110"></div>
        <div class="relative z-10 flex items-start justify-between">
            <div>
                <p class="text-sm font-semibold text-slate-500 uppercase tracking-widest mb-1">Sertifikasi</p>
                <h3 class="text-4xl font-black text-slate-800">{{ $stats['certifications'] }}</h3>
            </div>
            <div class="w-12 h-12 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center shadow-inner">
                <i class='bx bx-certification text-2xl'></i>
            </div>
        </div>
        <div class="relative z-10 mt-4 flex items-center text-sm">
            <a href="{{ route('certifications.index') }}" class="text-purple-600 font-semibold hover:text-purple-700 flex items-center gap-1">
                Kelola Sertifikasi <i class='bx bx-right-arrow-alt'></i>
            </a>
        </div>
    </div>

</div>

<!-- Quick Actions -->
<div class="bg-white border border-slate-200 rounded-2xl shadow-sm overflow-hidden">
    <div class="px-6 py-4 border-b border-slate-100 bg-slate-50/50 flex items-center justify-between">
        <h3 class="font-bold text-slate-800 text-lg">Aksi Cepat</h3>
    </div>
    <div class="p-6 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
        
        <a href="{{ route('packages.create') }}" class="flex flex-col items-center justify-center p-6 bg-slate-50 hover:bg-blue-50 border border-slate-100 hover:border-blue-200 rounded-xl transition-all group text-center gap-3">
            <div class="w-12 h-12 rounded-full bg-white shadow-sm flex items-center justify-center text-blue-600 group-hover:scale-110 transition-transform">
                <i class='bx bx-plus text-2xl'></i>
            </div>
            <div>
                <h4 class="font-bold text-slate-700 group-hover:text-blue-700">Tambah Paket</h4>
                <p class="text-xs text-slate-500 mt-1">Buat paket internet baru</p>
            </div>
        </a>

        <a href="{{ route('coverages.create') }}" class="flex flex-col items-center justify-center p-6 bg-slate-50 hover:bg-emerald-50 border border-slate-100 hover:border-emerald-200 rounded-xl transition-all group text-center gap-3">
            <div class="w-12 h-12 rounded-full bg-white shadow-sm flex items-center justify-center text-emerald-600 group-hover:scale-110 transition-transform">
                <i class='bx bx-plus text-2xl'></i>
            </div>
            <div>
                <h4 class="font-bold text-slate-700 group-hover:text-emerald-700">Tambah Area</h4>
                <p class="text-xs text-slate-500 mt-1">Input area jangkauan baru</p>
            </div>
        </a>
        
        <a href="{{ route('faqs.create') }}" class="flex flex-col items-center justify-center p-6 bg-slate-50 hover:bg-amber-50 border border-slate-100 hover:border-amber-200 rounded-xl transition-all group text-center gap-3">
            <div class="w-12 h-12 rounded-full bg-white shadow-sm flex items-center justify-center text-amber-600 group-hover:scale-110 transition-transform">
                <i class='bx bx-plus text-2xl'></i>
            </div>
            <div>
                <h4 class="font-bold text-slate-700 group-hover:text-amber-700">Tambah FAQ</h4>
                <p class="text-xs text-slate-500 mt-1">Buat jawaban pertanyaan baru</p>
            </div>
        </a>

        <a href="{{ route('settings.index') }}" class="flex flex-col items-center justify-center p-6 bg-slate-50 hover:bg-slate-100 border border-slate-100 hover:border-slate-300 rounded-xl transition-all group text-center gap-3">
            <div class="w-12 h-12 rounded-full bg-white shadow-sm flex items-center justify-center text-slate-600 group-hover:scale-110 transition-transform">
                <i class='bx bx-cog text-2xl'></i>
            </div>
            <div>
                <h4 class="font-bold text-slate-700 group-hover:text-slate-900">Pengaturan</h4>
                <p class="text-xs text-slate-500 mt-1">Ubah konfigurasi website</p>
            </div>
        </a>

    </div>
</div>

@endsection
