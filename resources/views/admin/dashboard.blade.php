@extends('layouts.admin')

@section('header', 'Dashboard')

@section('content')

<!-- Welcome Section -->
<div class="mb-10">
    <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight mb-2">Dashboard Overview</h1>
    <p class="text-slate-500 text-lg">Pantau aktivitas terbaru dan ringkasan performa sistem LancarWiFi.</p>
</div>

<!-- Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
    <!-- Messages Stat -->
    <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm flex flex-col justify-between hover:border-blue-300 transition-colors">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-blue-600">
                <i class='bx bx-envelope text-2xl'></i>
            </div>
            <span class="text-xs font-bold text-blue-600 bg-blue-50 px-2 py-1 rounded-md uppercase tracking-wider">Pesan Baru</span>
        </div>
        <div>
            <h3 class="text-4xl font-black text-slate-800 mb-1">{{ $stats['messages'] ?? 0 }}</h3>
            <p class="text-slate-500 text-sm font-medium">Pesan belum dibaca</p>
        </div>
    </div>

    <!-- Packages Stat -->
    <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm flex flex-col justify-between hover:border-emerald-300 transition-colors">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-600">
                <i class='bx bx-package text-2xl'></i>
            </div>
        </div>
        <div>
            <h3 class="text-4xl font-black text-slate-800 mb-1">{{ $stats['packages'] ?? 0 }}</h3>
            <p class="text-slate-500 text-sm font-medium">Paket Internet Aktif</p>
        </div>
    </div>

    <!-- Coverage Stat -->
    <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm flex flex-col justify-between hover:border-indigo-300 transition-colors">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 rounded-full bg-indigo-50 flex items-center justify-center text-indigo-600">
                <i class='bx bx-map-alt text-2xl'></i>
            </div>
        </div>
        <div>
            <h3 class="text-4xl font-black text-slate-800 mb-1">{{ $stats['coverages'] ?? 0 }}</h3>
            <p class="text-slate-500 text-sm font-medium">Area Coverage</p>
        </div>
    </div>

    <!-- FAQ Stat -->
    <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm flex flex-col justify-between hover:border-amber-300 transition-colors">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 rounded-full bg-amber-50 flex items-center justify-center text-amber-600">
                <i class='bx bx-message-rounded-dots text-2xl'></i>
            </div>
        </div>
        <div>
            <h3 class="text-4xl font-black text-slate-800 mb-1">{{ $stats['faqs'] ?? 0 }}</h3>
            <p class="text-slate-500 text-sm font-medium">Pertanyaan Tersimpan (FAQ)</p>
        </div>
    </div>
</div>

<!-- Main Content Grid -->
<div class="flex flex-col lg:flex-row gap-8 w-full">
    
    <!-- Left Column: Recent Packages -->
    <div class="flex-1 min-w-0 w-full">
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden flex flex-col h-full w-full">
            <div class="px-6 py-5 border-b border-slate-100 flex items-center justify-between bg-slate-50/50">
                <h2 class="text-base font-bold text-slate-800">Paket Terbaru</h2>
                <a href="{{ route('packages.index') }}" class="text-sm font-semibold text-blue-600 hover:text-blue-700">Lihat Semua &rarr;</a>
            </div>
            
            <div class="overflow-x-auto w-full">
                <table class="w-full text-left border-collapse min-w-full">
                    <thead>
                        <tr class="text-slate-400 text-xs uppercase tracking-widest border-b border-slate-100 bg-white">
                            <th class="px-6 py-4 font-semibold whitespace-nowrap">Nama Paket</th>
                            <th class="px-6 py-4 font-semibold whitespace-nowrap">Kecepatan</th>
                            <th class="px-6 py-4 font-semibold whitespace-nowrap">Harga</th>
                            <th class="px-6 py-4 font-semibold text-right whitespace-nowrap">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-50 text-sm">
                        @forelse($recentPackages ?? [] as $pkg)
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-6 py-4 font-bold text-slate-800">{{ $pkg->name }}</td>
                            <td class="px-6 py-4 text-slate-600">{{ $pkg->speed }} Mbps</td>
                            <td class="px-6 py-4 text-slate-600">Rp {{ number_format($pkg->price, 0, ',', '.') }}<span class="text-xs text-slate-400">/{{ $pkg->duration }}</span></td>
                            <td class="px-6 py-4 text-right">
                                @if($pkg->is_active)
                                    <span class="inline-block px-2.5 py-1 bg-emerald-100 text-emerald-700 text-xs font-bold rounded-md">Aktif</span>
                                @else
                                    <span class="inline-block px-2.5 py-1 bg-slate-100 text-slate-600 text-xs font-bold rounded-md">Draft</span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-6 py-12 text-center text-slate-400">
                                Belum ada data paket yang ditambahkan.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Right Column: Quick Actions -->
    <div class="w-full lg:w-[400px] shrink-0 flex flex-col gap-4">
        <h2 class="text-sm font-bold text-slate-500 uppercase tracking-widest mb-2 px-1">Aksi Cepat</h2>
        
        <a href="{{ route('messages.index') }}" class="group block bg-white p-5 rounded-2xl border border-slate-200 shadow-sm hover:border-blue-400 hover:shadow-md transition-all">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                    <i class='bx bx-envelope text-xl'></i>
                </div>
                <div>
                    <h3 class="font-bold text-slate-800">Cek Pesan Masuk</h3>
                    <p class="text-xs text-slate-500 mt-0.5">Balas pertanyaan pelanggan</p>
                </div>
            </div>
        </a>

        <a href="{{ route('packages.create') }}" class="group block bg-white p-5 rounded-2xl border border-slate-200 shadow-sm hover:border-emerald-400 hover:shadow-md transition-all">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                    <i class='bx bx-plus text-xl'></i>
                </div>
                <div>
                    <h3 class="font-bold text-slate-800">Tambah Paket Baru</h3>
                    <p class="text-xs text-slate-500 mt-0.5">Buat penawaran internet baru</p>
                </div>
            </div>
        </a>

        <a href="{{ route('coverages.create') }}" class="group block bg-white p-5 rounded-2xl border border-slate-200 shadow-sm hover:border-indigo-400 hover:shadow-md transition-all">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                    <i class='bx bx-map-pin text-xl'></i>
                </div>
                <div>
                    <h3 class="font-bold text-slate-800">Update Area Jangkauan</h3>
                    <p class="text-xs text-slate-500 mt-0.5">Tambahkan wilayah layanan baru</p>
                </div>
            </div>
        </a>
    </div>

</div>

@endsection
