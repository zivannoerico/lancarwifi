@extends('layouts.app')

@section('title', 'Layanan Colocation - LancarWiFi')

@section('content')
<!-- Hero Section with Spectacular Background Image -->
<section class="relative pt-32 pb-48 lg:pt-40 lg:pb-64 overflow-hidden">
    <!-- The generated spectacular background image -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/datacenter.png') }}" alt="Data Center LancarWiFi" class="w-full h-full object-cover object-center" />
        <!-- Dramatic Gradient Overlay for readability and premium feel -->
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/95 via-slate-900/80 to-blue-900/60"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-flex items-center px-4 py-2 rounded-full bg-blue-500/20 border border-blue-400/30 backdrop-blur-sm text-cyan-300 font-semibold text-sm tracking-widest uppercase mb-6 shadow-[0_0_15px_rgba(34,211,238,0.2)]">
                <span class="w-2 h-2 rounded-full bg-cyan-400 mr-2 animate-pulse"></span>
                Infrastruktur Premium
            </div>
            <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 leading-tight tracking-tight">
                Keandalan Tanpa <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-400">Kompromi.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 mb-10 leading-relaxed font-light max-w-2xl">
                Tempatkan server bisnis Anda di fasilitas Data Center Tier III dengan keamanan tingkat tinggi, daya tanpa henti, dan konektivitas kelas dunia.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="/hubungi-kami" class="px-8 py-4 bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-white font-bold rounded-full transition-all duration-300 shadow-[0_0_20px_rgba(59,130,246,0.4)] hover:shadow-[0_0_30px_rgba(59,130,246,0.6)] transform hover:-translate-y-1">
                    Konsultasi Gratis
                </a>
                <a href="#fitur" class="px-8 py-4 bg-white/10 hover:bg-white/20 border border-white/20 backdrop-blur-md text-white font-bold rounded-full transition-all duration-300">
                    Pelajari Detailnya
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Overlapping Glassmorphism Feature Section -->
<section id="fitur" class="relative z-20 -mt-24 lg:-mt-32 pb-24 px-4">
    <div class="container mx-auto max-w-7xl">
        
        @if(isset($colocation) && $colocation->value)
            <div class="bg-white/90 backdrop-blur-xl rounded-[2.5rem] shadow-2xl border border-white/40 p-8 md:p-16 text-slate-800 leading-relaxed text-lg lg:text-xl">
                {!! $colocation->value !!}
            </div>
        @else
            <!-- The Spectacular Feature Grid -->
            <div class="bg-white/80 backdrop-blur-2xl rounded-[2.5rem] shadow-[0_20px_50px_rgb(0,0,0,0.15)] border border-white p-4 md:p-10">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-10">
                    
                    <!-- Feature 1 -->
                    <div class="bg-white rounded-3xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-slate-50 group">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-100 to-blue-50 rounded-2xl flex items-center justify-center text-blue-600 mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class='bx bx-check-shield text-4xl group-hover:text-cyan-500 transition-colors'></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-800 mb-4">Keamanan Ketat</h3>
                        <p class="text-slate-500 leading-relaxed text-lg">CCTV pintar 24/7, akses biometrik berlapis, dan tim keamanan di lokasi menjamin server Anda 100% tak tersentuh oleh pihak tak berwenang.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-white rounded-3xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-slate-50 group">
                        <div class="w-16 h-16 bg-gradient-to-br from-cyan-100 to-cyan-50 rounded-2xl flex items-center justify-center text-cyan-600 mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class='bx bx-bolt-circle text-4xl group-hover:text-blue-500 transition-colors'></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-800 mb-4">Daya Redundan</h3>
                        <p class="text-slate-500 leading-relaxed text-lg">UPS industri dan Generator siaga ganda (N+1) menjamin server Anda tetap menyala sempurna meski pemadaman listrik kota terjadi.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-white rounded-3xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-slate-50 group">
                        <div class="w-16 h-16 bg-gradient-to-br from-indigo-100 to-indigo-50 rounded-2xl flex items-center justify-center text-indigo-600 mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class='bx bx-wind text-4xl group-hover:text-cyan-500 transition-colors'></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-800 mb-4">Pendingin Presisi</h3>
                        <p class="text-slate-500 leading-relaxed text-lg">Sistem Precision Air Conditioning (PAC) menjaga mikroklimat ideal, mencegah overheat untuk performa server terkuat Anda.</p>
                    </div>

                </div>
            </div>
            
            <!-- Bottom Call To Action Detail -->
            <div class="mt-20 text-center max-w-3xl mx-auto">
                <h2 class="text-3xl font-bold text-slate-800 mb-6">Fleksibilitas Tanpa Batas</h2>
                <p class="text-xl text-slate-500 mb-10 leading-relaxed">
                    Baik Anda hanya butuh menaruh satu server (1U) maupun memblokade satu lorong rak penuh (Full Rack), kami memiliki kapasitas dan dukungan ahli untuk merealisasikannya.
                </p>
                <div class="flex justify-center gap-6 text-slate-700 font-semibold text-lg flex-wrap">
                    <span class="flex items-center"><i class='bx bxs-server text-blue-500 mr-2 text-2xl'></i> Sewa 1U - 4U</span>
                    <span class="flex items-center"><i class='bx bxs-server text-blue-500 mr-2 text-2xl'></i> Half Rack (20U)</span>
                    <span class="flex items-center"><i class='bx bxs-server text-blue-500 mr-2 text-2xl'></i> Full Rack (42U)</span>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection
