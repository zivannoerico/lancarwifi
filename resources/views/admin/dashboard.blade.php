@extends('layouts.admin')

@section('header', 'Dashboard Overview')

@section('content')

<!-- ==========================================
     DASHBOARD HEADER
     ========================================== -->
<div class="mb-8 relative overflow-hidden bg-white border border-slate-200 rounded-3xl shadow-sm p-8 md:p-10 flex flex-col md:flex-row md:items-center justify-between gap-8">
    <div class="relative z-10 max-w-2xl">
        <div class="inline-flex items-center gap-2 px-3 py-1 bg-blue-50 text-blue-600 rounded-lg text-xs font-bold tracking-widest uppercase mb-4 border border-blue-100">
            <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span> System Active
        </div>
        <h1 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight mb-3">Selamat Datang, Administrator.</h1>
        <p class="text-slate-500 text-lg leading-relaxed">
            Kelola dan pantau seluruh ekosistem layanan LancarWiFi dari satu pusat kendali terintegrasi.
        </p>
    </div>
    
    <div class="relative z-10 shrink-0">
        <div class="bg-slate-50 p-4 rounded-2xl border border-slate-100 text-center min-w-[200px]">
            <p class="text-xs text-slate-500 font-bold uppercase tracking-widest mb-1">{{ \Carbon\Carbon::now()->translatedFormat('l') }}</p>
            <p class="text-2xl font-black text-slate-800 tracking-tighter">{{ \Carbon\Carbon::now()->translatedFormat('d M Y') }}</p>
            <div class="mt-3 flex items-center justify-center gap-1 text-sm font-semibold text-emerald-600 bg-emerald-50 px-3 py-1.5 rounded-lg border border-emerald-100">
                <i class='bx bx-check-circle'></i> All systems operational
            </div>
        </div>
    </div>
    
    <!-- Abstract Decoration -->
    <div class="absolute right-0 bottom-0 pointer-events-none opacity-[0.03] transform translate-x-1/4 translate-y-1/4">
        <i class='bx bx-hive text-[300px]'></i>
    </div>
</div>

<!-- ==========================================
     KPI SUMMARY
     ========================================== -->
<div class="mb-8">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-lg font-bold text-slate-800 tracking-tight">System Metrics</h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- Metric: Packages -->
        <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition-shadow group relative overflow-hidden flex flex-col h-full">
            <div class="absolute top-0 left-0 w-full h-1 bg-blue-500"></div>
            
            <div class="flex items-start justify-between mb-8">
                <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center border border-blue-100 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                    <i class='bx bx-package text-2xl'></i>
                </div>
                <div class="px-2.5 py-1 bg-slate-50 border border-slate-100 rounded-lg text-xs font-semibold text-slate-500">
                    Active
                </div>
            </div>
            
            <div>
                <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-1">Total Paket</p>
                <div class="flex items-end gap-3">
                    <h3 class="text-4xl font-black text-slate-900 tracking-tighter leading-none">{{ $stats['packages'] ?? 0 }}</h3>
                    <span class="text-sm font-medium text-slate-400 mb-1">Layanan</span>
                </div>
            </div>
        </div>

        <!-- Metric: Coverage -->
        <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition-shadow group relative overflow-hidden flex flex-col h-full">
            <div class="absolute top-0 left-0 w-full h-1 bg-indigo-500"></div>
            
            <div class="flex items-start justify-between mb-8">
                <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center border border-indigo-100 group-hover:bg-indigo-600 group-hover:text-white transition-colors duration-300">
                    <i class='bx bx-map-alt text-2xl'></i>
                </div>
                <div class="px-2.5 py-1 bg-emerald-50 border border-emerald-100 rounded-lg text-xs font-semibold text-emerald-600 flex items-center gap-1">
                    <i class='bx bx-trending-up'></i> +2 Area
                </div>
            </div>
            
            <div>
                <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-1">Area Coverage</p>
                <div class="flex items-end gap-3">
                    <h3 class="text-4xl font-black text-slate-900 tracking-tighter leading-none">{{ $stats['coverages'] ?? 0 }}</h3>
                    <span class="text-sm font-medium text-slate-400 mb-1">Wilayah</span>
                </div>
            </div>
        </div>

        <!-- Metric: FAQs -->
        <div class="bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:shadow-md transition-shadow group relative overflow-hidden flex flex-col h-full">
            <div class="absolute top-0 left-0 w-full h-1 bg-slate-800"></div>
            
            <div class="flex items-start justify-between mb-8">
                <div class="w-12 h-12 bg-slate-100 text-slate-700 rounded-2xl flex items-center justify-center border border-slate-200 group-hover:bg-slate-800 group-hover:text-white transition-colors duration-300">
                    <i class='bx bx-message-rounded-dots text-2xl'></i>
                </div>
                <div class="px-2.5 py-1 bg-slate-50 border border-slate-100 rounded-lg text-xs font-semibold text-slate-500">
                    Support
                </div>
            </div>
            
            <div>
                <p class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-1">Total FAQ</p>
                <div class="flex items-end gap-3">
                    <h3 class="text-4xl font-black text-slate-900 tracking-tighter leading-none">{{ $stats['faqs'] ?? 0 }}</h3>
                    <span class="text-sm font-medium text-slate-400 mb-1">Entri</span>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- ==========================================
     MAIN CONTENT & QUICK ACTIONS
     ========================================== -->
<div class="grid grid-cols-1 xl:grid-cols-3 gap-8 mb-8">
    
    <!-- Primary Content: Recent Activity (Takes up 2/3) -->
    <div class="xl:col-span-2 flex flex-col gap-8">
        
        <!-- Recent Packages Table -->
        <div class="bg-white border border-slate-200 rounded-3xl shadow-sm overflow-hidden flex flex-col">
            <div class="px-8 py-6 border-b border-slate-100 flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-bold text-slate-800 tracking-tight">Paket Terbaru</h2>
                    <p class="text-sm text-slate-500 mt-1">Layanan internet yang baru ditambahkan ke sistem.</p>
                </div>
                <a href="{{ route('packages.index') }}" class="px-4 py-2 bg-slate-50 hover:bg-blue-50 text-blue-600 text-sm font-semibold rounded-xl border border-slate-100 hover:border-blue-100 transition-colors">
                    Lihat Semua
                </a>
            </div>
            
            <div class="p-0 overflow-x-auto">
                <table class="w-full text-left text-sm whitespace-nowrap">
                    <thead>
                        <tr class="bg-slate-50/50 text-slate-500">
                            <th class="py-4 px-8 font-semibold text-xs tracking-wider uppercase border-b border-slate-100">Nama Paket</th>
                            <th class="py-4 px-8 font-semibold text-xs tracking-wider uppercase border-b border-slate-100">Kecepatan</th>
                            <th class="py-4 px-8 font-semibold text-xs tracking-wider uppercase border-b border-slate-100">Harga</th>
                            <th class="py-4 px-8 font-semibold text-xs tracking-wider uppercase border-b border-slate-100 text-right">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($recentPackages ?? [] as $pkg)
                        <tr class="hover:bg-slate-50/80 transition-colors group">
                            <td class="py-4 px-8 text-slate-800 font-bold">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                                        <i class='bx bx-wifi'></i>
                                    </div>
                                    {{ $pkg->name }}
                                </div>
                            </td>
                            <td class="py-4 px-8 text-slate-600 font-medium">Up to {{ $pkg->speed }} Mbps</td>
                            <td class="py-4 px-8 text-slate-600 font-medium">Rp {{ number_format($pkg->price, 0, ',', '.') }}<span class="text-slate-400 text-xs">/{{ $pkg->duration }}</span></td>
                            <td class="py-4 px-8 text-right">
                                @if($pkg->is_active)
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-emerald-50 text-emerald-700 text-[11px] rounded-lg font-bold border border-emerald-100">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Published
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-slate-50 text-slate-600 text-[11px] rounded-lg font-bold border border-slate-200">
                                        <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span> Draft
                                    </span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="py-12 px-8 text-center">
                                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-slate-50 mb-3 border border-slate-100 text-slate-300 text-3xl">
                                    <i class='bx bx-folder-open'></i>
                                </div>
                                <p class="text-slate-500 font-medium">Belum ada data paket.</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>

    <!-- Secondary Content: Quick Actions (Takes up 1/3) -->
    <div class="xl:col-span-1 flex flex-col gap-6">
        
        <div class="flex items-center justify-between mb-2">
            <h2 class="text-lg font-bold text-slate-800 tracking-tight">Quick Actions</h2>
        </div>

        <a href="{{ route('packages.create') }}" class="group bg-white p-6 rounded-3xl border border-slate-200 shadow-sm hover:border-blue-300 hover:shadow-lg hover:shadow-blue-900/5 transition-all duration-300 flex items-center gap-5">
            <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center shrink-0 border border-blue-100 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 shadow-inner">
                <i class='bx bx-plus text-2xl'></i>
            </div>
            <div class="flex-1">
                <h3 class="text-base font-bold text-slate-800 group-hover:text-blue-700 transition-colors">Tambah Paket</h3>
                <p class="text-sm text-slate-500 mt-1 line-clamp-1">Buat layanan internet baru</p>
            </div>
            <i class='bx bx-chevron-right text-2xl text-slate-300 group-hover:text-blue-500 group-hover:translate-x-1 transition-all'></i>
        </a>

        <a href="{{ route('coverages.create') }}" class="group bg-white p-6 rounded-3xl border border-slate-200 shadow-sm hover:border-indigo-300 hover:shadow-lg hover:shadow-indigo-900/5 transition-all duration-300 flex items-center gap-5">
            <div class="w-14 h-14 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center shrink-0 border border-indigo-100 group-hover:scale-110 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300 shadow-inner">
                <i class='bx bx-map-pin text-2xl'></i>
            </div>
            <div class="flex-1">
                <h3 class="text-base font-bold text-slate-800 group-hover:text-indigo-700 transition-colors">Update Coverage</h3>
                <p class="text-sm text-slate-500 mt-1 line-clamp-1">Tambah area jangkauan jaringan</p>
            </div>
            <i class='bx bx-chevron-right text-2xl text-slate-300 group-hover:text-indigo-500 group-hover:translate-x-1 transition-all'></i>
        </a>

        <a href="{{ route('faqs.create') }}" class="group bg-white p-6 rounded-3xl border border-slate-200 shadow-sm hover:border-slate-400 hover:shadow-lg hover:shadow-slate-900/5 transition-all duration-300 flex items-center gap-5">
            <div class="w-14 h-14 bg-slate-100 text-slate-700 rounded-2xl flex items-center justify-center shrink-0 border border-slate-200 group-hover:scale-110 group-hover:bg-slate-800 group-hover:text-white transition-all duration-300 shadow-inner">
                <i class='bx bx-message-square-add text-2xl'></i>
            </div>
            <div class="flex-1">
                <h3 class="text-base font-bold text-slate-800 group-hover:text-slate-900 transition-colors">Tulis FAQ Baru</h3>
                <p class="text-sm text-slate-500 mt-1 line-clamp-1">Tambahkan jawaban bantuan</p>
            </div>
            <i class='bx bx-chevron-right text-2xl text-slate-300 group-hover:text-slate-600 group-hover:translate-x-1 transition-all'></i>
        </a>

    </div>
</div>

@endsection
