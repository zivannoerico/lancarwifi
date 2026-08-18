@extends('layouts.app')

@section('title', 'Sertifikasi & Legalitas - LancarWiFi')

@section('content')
<!-- Ultra Premium Hero Section -->
<section class="relative pt-24 pb-32 lg:pt-36 lg:pb-48 overflow-hidden bg-slate-900">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-900 via-slate-900 to-blue-900"></div>
        <!-- Animated glowing orbs -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500/20 rounded-full blur-[100px] animate-pulse mix-blend-screen"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-cyan-400/20 rounded-full blur-[100px] animate-pulse mix-blend-screen" style="animation-delay: 2s;"></div>
        <!-- Hexagon Pattern -->
        <div class="absolute inset-0 opacity-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTIwIDBsMjAgMTB2MjBsLTIwIDEwTDAgMzBWMTB6IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmYiIHN0cm9rZS13aWR0aD0iMSIvPjwvc3ZnPg==')]"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10 text-center">
        <div class="inline-flex items-center justify-center p-1 rounded-full bg-slate-800/50 border border-slate-700 backdrop-blur-md mb-8 shadow-2xl">
            <span class="bg-gradient-to-r from-blue-500 to-cyan-400 text-white text-xs font-bold px-4 py-1.5 rounded-full uppercase tracking-widest">Official & Verified</span>
        </div>
        <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-white mb-6 tracking-tight leading-tight">
            Sertifikasi <span class="font-light italic text-slate-400">&</span> <br/>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 via-blue-400 to-indigo-400">Legalitas Resmi</span>
        </h1>
        <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto font-light leading-relaxed">
            Standar emas dalam pelayanan. Kami mematuhi regulasi ketat untuk menjamin keamanan dan kenyamanan Anda.
        </p>
    </div>
    
    <!-- Decorative bottom wave/curve -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
        <svg class="relative block w-full h-[100px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118.08,130.83,119.93,197.36,108.68,236.85,101.9,279.16,68.42,321.39,56.44Z" class="fill-slate-50"></path>
        </svg>
    </div>
</section>

<section class="py-10 pb-32 bg-slate-50 relative z-20">
    <div class="container mx-auto px-4 max-w-7xl">

        @if(isset($certifications) && count($certifications) > 0)
        <!-- Premium Staggered Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 max-w-6xl mx-auto -mt-24 relative z-30">
            @foreach($certifications as $index => $cert)
            <div class="group relative bg-white rounded-[2rem] p-1 border border-slate-200 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 {{ $index % 2 != 0 ? 'lg:mt-12' : '' }}">
                <!-- Glowing border effect on hover -->
                <div class="absolute inset-0 bg-gradient-to-br from-blue-400 via-indigo-500 to-cyan-400 rounded-[2rem] opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10 blur-md"></div>
                
                <div class="bg-white rounded-[1.9rem] p-8 h-full flex flex-col relative z-10 overflow-hidden">
                    <!-- Decorative corner graphic -->
                    <div class="absolute -top-12 -right-12 w-32 h-32 bg-blue-50 rounded-full group-hover:scale-150 transition-transform duration-700 ease-in-out"></div>
                    
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-100 to-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-8 shadow-inner border border-white relative z-10 group-hover:rotate-12 transition-transform duration-300">
                        <i class='bx bx-certification text-5xl'></i>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-slate-800 mb-4 relative z-10">{{ $cert->name }}</h3>
                    <p class="text-slate-500 text-sm mb-8 flex-grow relative z-10">Sertifikasi resmi yang menjamin standar operasional pelayanan LancarWiFi.</p>
                    
                    @if($cert->document_url)
                    <div class="relative z-10 mt-auto">
                        <a href="{{ $cert->document_url }}" target="_blank" class="flex items-center justify-between w-full py-4 px-6 bg-slate-900 hover:bg-blue-600 text-white font-semibold rounded-xl transition-colors duration-300 shadow-lg group/btn">
                            <span>Lihat Dokumen</span>
                            <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center group-hover/btn:translate-x-1 transition-transform">
                                <i class='bx bx-right-arrow-alt text-xl'></i>
                            </div>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        @else
        <!-- Premium Fallback Content -->
        <div class="max-w-4xl mx-auto -mt-24 relative z-30">
            <div class="bg-white rounded-[3rem] p-2 shadow-2xl border border-slate-100 relative group overflow-hidden">
                <!-- Magical animated border background -->
                <div class="absolute inset-0 bg-[conic-gradient(at_top_right,_var(--tw-gradient-stops))] from-blue-600 via-cyan-400 to-indigo-600 opacity-20 animate-[spin_4s_linear_infinite] group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="bg-white rounded-[2.8rem] p-12 md:p-20 relative z-10 flex flex-col md:flex-row items-center gap-12 h-full">
                    <div class="w-32 h-32 md:w-48 md:h-48 shrink-0 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-full flex items-center justify-center shadow-inner border-[8px] border-white z-10 relative">
                        <div class="absolute inset-0 bg-blue-500 rounded-full blur-xl opacity-20 animate-pulse"></div>
                        <i class='bx bxs-check-shield text-7xl md:text-8xl text-blue-600'></i>
                    </div>
                    
                    <div>
                        <div class="inline-block px-4 py-1.5 bg-emerald-100 text-emerald-700 font-bold rounded-full text-sm mb-6 border border-emerald-200">
                            <i class='bx bx-check-circle mr-1'></i> Status: Legal & Resmi
                        </div>
                        <h3 class="text-3xl md:text-5xl font-extrabold text-slate-800 mb-6 tracking-tight">Izin Penyelenggaraan Resmi</h3>
                        <p class="text-xl text-slate-500 leading-relaxed font-light">
                            LancarWiFi beroperasi di bawah payung hukum yang ketat. Kami merupakan Penyelenggara Jasa Internet (ISP) yang telah memiliki perizinan penuh dari <strong class="text-blue-600 font-semibold">Kementerian Komunikasi dan Informatika (Kominfo)</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endif
        
        <!-- Ultra Premium Trust Banner -->
        <div class="mt-32 max-w-5xl mx-auto">
            <div class="text-center mb-10">
                <span class="text-slate-400 font-bold tracking-[0.3em] uppercase text-xs">Standar Kepatuhan Kami</span>
                <div class="w-12 h-1 bg-blue-500 mx-auto mt-4 rounded-full opacity-50"></div>
            </div>
            
            <div class="bg-white rounded-3xl p-8 shadow-sm border border-slate-100 flex flex-wrap justify-center items-center gap-12 md:gap-20">
                <!-- APJII -->
                <div class="group flex flex-col items-center cursor-pointer">
                    <div class="w-16 h-16 bg-slate-50 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 text-slate-400 transform group-hover:-translate-y-2 group-hover:shadow-lg">
                        <i class='bx bx-network-chart text-3xl'></i>
                    </div>
                    <span class="font-bold text-slate-800 tracking-tight">APJII</span>
                </div>
                
                <!-- KOMINFO -->
                <div class="group flex flex-col items-center cursor-pointer">
                    <div class="w-16 h-16 bg-slate-50 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300 text-slate-400 transform group-hover:-translate-y-2 group-hover:shadow-lg">
                        <i class='bx bxs-institution text-3xl'></i>
                    </div>
                    <span class="font-bold text-slate-800 tracking-tight">KOMINFO</span>
                </div>
                
                <!-- Keamanan Data -->
                <div class="group flex flex-col items-center cursor-pointer">
                    <div class="w-16 h-16 bg-slate-50 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-cyan-500 group-hover:text-white transition-all duration-300 text-slate-400 transform group-hover:-translate-y-2 group-hover:shadow-lg">
                        <i class='bx bx-lock-alt text-3xl'></i>
                    </div>
                    <span class="font-bold text-slate-800 tracking-tight">Data Secure</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
