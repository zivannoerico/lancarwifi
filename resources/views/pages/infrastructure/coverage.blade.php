@extends('layouts.app')

@section('title', 'Internet Coverage - LancarWiFi')

@section('content')
<section class="py-24 lg:py-32 bg-slate-50 relative overflow-hidden">
    <!-- Decorative background mapping grid -->
    <div class="absolute inset-0 z-0 opacity-[0.03]" style="background-image: radial-gradient(#3b82f6 1.5px, transparent 1.5px); background-size: 32px 32px;"></div>
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-blue-400/10 rounded-full blur-[120px] -z-10 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-cyan-400/10 rounded-full blur-[120px] -z-10 pointer-events-none"></div>

    <div class="container mx-auto px-4 max-w-7xl relative z-10">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-blue-600 font-bold tracking-wider uppercase text-sm mb-3 block">Jangkauan Jaringan</span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-800 mb-6 tracking-tight">Cek Area <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500">Layanan Kami</span></h1>
            <p class="text-lg text-slate-500 leading-relaxed">
                Kami terus memperluas jaringan fiber optic kami ke berbagai wilayah. Gunakan fitur pencarian di bawah untuk memastikan ketersediaan layanan LancarWiFi di lokasi Anda.
            </p>
        </div>

        <!-- Search Bar -->
        <div class="max-w-2xl mx-auto mb-20 relative z-20">
            <div class="relative group">
                <div class="absolute inset-y-0 left-0 pl-6 flex items-center pointer-events-none">
                    <i class='bx bx-search text-2xl text-slate-400 group-focus-within:text-blue-600 transition-colors'></i>
                </div>
                <input type="text" placeholder="Ketik nama kecamatan atau kota Anda..." class="block w-full pl-16 pr-36 py-5 bg-white border-2 border-transparent rounded-2xl text-lg shadow-[0_8px_30px_rgb(0,0,0,0.06)] focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition-all text-slate-700 placeholder-slate-400">
                <button onclick="alert('Fitur pencarian real-time sedang dalam tahap pengembangan.')" class="absolute inset-y-2 right-2 px-8 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                    Cek Area
                </button>
            </div>
        </div>

        <!-- Coverage Grid -->
        <div class="max-w-5xl mx-auto relative z-10">
            @if(isset($coverages) && count($coverages) > 0)
                <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-8 gap-4">
                    <h3 class="text-2xl font-bold text-slate-800">Daftar Wilayah Jangkauan</h3>
                    <div class="flex gap-4">
                        <span class="flex items-center text-sm font-medium text-slate-600"><span class="w-3 h-3 rounded-full bg-emerald-500 mr-2 shadow-sm"></span> Tersedia</span>
                        <span class="flex items-center text-sm font-medium text-slate-600"><span class="w-3 h-3 rounded-full bg-amber-400 mr-2 shadow-sm"></span> Segera Hadir</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($coverages as $coverage)
                    <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-[0_2px_10px_rgb(0,0,0,0.02)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all duration-300 transform hover:-translate-y-1 flex items-start justify-between group">
                        <div>
                            <h4 class="text-lg font-bold text-slate-800 mb-3 group-hover:text-blue-600 transition-colors">{{ $coverage->area_name }}</h4>
                            @if($coverage->status == 'available')
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                    <i class='bx bx-check-circle mr-1.5 text-sm'></i> Tersedia
                                </span>
                            @else
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-amber-50 text-amber-700 border border-amber-200">
                                    <i class='bx bx-time-five mr-1.5 text-sm'></i> Segera Hadir
                                </span>
                            @endif
                        </div>
                        <div class="w-12 h-12 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 group-hover:bg-blue-50 group-hover:text-blue-600 transition-colors shrink-0 ml-4">
                            <i class='bx bx-map-pin text-2xl'></i>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="bg-white rounded-3xl p-12 text-center border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] max-w-2xl mx-auto">
                    <div class="w-24 h-24 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-6 shadow-inner">
                        <i class='bx bx-map-alt text-5xl text-blue-500'></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-800 mb-4">Jaringan Kami Terus Berkembang</h3>
                    <p class="text-slate-500 leading-relaxed mb-8">Saat ini kami melayani beberapa wilayah pusat. Silakan hubungi Customer Service kami untuk informasi lebih akurat mengenai ketersediaan jaringan di alamat spesifik Anda.</p>
                    <a href="/hubungi-kami" class="inline-flex items-center justify-center px-8 py-3 bg-slate-800 hover:bg-slate-900 text-white font-semibold rounded-xl transition-colors shadow-lg hover:shadow-xl">
                        Hubungi CS Kami
                    </a>
                </div>
            @endif
        </div>
    </div>
</section>
@endsection
