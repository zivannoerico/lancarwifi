@extends('layouts.app')

@section('title', 'Speedtest - LancarWiFi')

@section('content')
<!-- Hero Section -->
<section class="relative pt-24 pb-40 overflow-hidden bg-slate-900">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-900 via-slate-900 to-blue-900"></div>
        <!-- Animated glowing orbs -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500/20 rounded-full blur-[100px] animate-pulse mix-blend-screen"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-cyan-400/20 rounded-full blur-[100px] animate-pulse mix-blend-screen" style="animation-delay: 2s;"></div>
        <!-- Hexagon Pattern -->
        <div class="absolute inset-0 opacity-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTIwIDBsMjAgMTB2MjBsLTIwIDEwTDAgMzBWMTB6IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmYiIHN0cm9rZS13aWR0aD0iMSIvPjwvc3ZnPg==')]"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 tracking-tight">
            Uji Kecepatan <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-400">Internet Anda</span>
        </h1>
        <p class="text-xl text-slate-300 max-w-2xl mx-auto font-light leading-relaxed">
            Pastikan Anda mendapatkan kecepatan penuh sesuai dengan paket berlangganan. Alat ukur kami menggunakan server lokal terdekat untuk hasil paling akurat.
        </p>
    </div>
</section>

<!-- Speedtest Dashboard Section -->
<section class="relative z-20 pb-32 bg-slate-50">
    <div class="container mx-auto px-4 max-w-5xl -mt-24">
        
        <div class="bg-white rounded-[3rem] p-8 md:p-16 shadow-[0_20px_50px_rgb(0,0,0,0.08)] border border-slate-100 relative overflow-hidden">
            <!-- Decorative corner glowing -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-blue-50 to-cyan-50 rounded-full blur-3xl -z-10 -mr-20 -mt-20"></div>
            
            <div class="flex flex-col items-center">
                
                <!-- Speedometer Visual -->
                <div class="relative w-64 h-64 md:w-80 md:h-80 mb-12 flex items-center justify-center group">
                    <!-- Outer pulsating rings -->
                    <div class="absolute inset-0 border-4 border-slate-100 rounded-full group-hover:border-blue-100 transition-colors duration-500 shadow-sm"></div>
                    <div class="absolute inset-4 border-[6px] border-slate-50 rounded-full border-t-blue-500 border-r-cyan-400 transform -rotate-45 group-hover:rotate-[315deg] transition-all duration-[1500ms] ease-in-out"></div>
                    <div class="absolute inset-8 border border-slate-200 rounded-full border-dashed group-hover:animate-[spin_15s_linear_infinite]"></div>
                    
                    <!-- Center Core -->
                    <div class="relative w-36 h-36 md:w-44 md:h-44 bg-gradient-to-br from-slate-50 to-white rounded-full shadow-[inset_0_4px_15px_rgb(0,0,0,0.05),0_10px_20px_rgb(0,0,0,0.05)] flex flex-col items-center justify-center z-10 border border-slate-100">
                        <i class='bx bx-tachometer text-6xl md:text-7xl text-blue-500 mb-2 group-hover:scale-110 transition-transform duration-300 drop-shadow-md'></i>
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Ready</span>
                    </div>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-3 gap-4 md:gap-8 w-full max-w-3xl mx-auto mb-16">
                    <!-- Ping -->
                    <div class="text-center p-6 bg-slate-50 rounded-[2rem] border border-slate-100 hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-sm text-slate-400">
                            <i class='bx bx-transfer-alt text-2xl'></i>
                        </div>
                        <div class="text-sm font-bold text-slate-500 uppercase tracking-widest mb-2">Ping</div>
                        <div class="text-3xl md:text-4xl font-black text-slate-800">-- <span class="text-base font-normal text-slate-400">ms</span></div>
                    </div>
                    
                    <!-- Download (Highlighted) -->
                    <div class="text-center p-6 bg-gradient-to-b from-blue-50 to-white rounded-[2rem] border border-blue-100 shadow-[0_10px_30px_rgb(59,130,246,0.1)] relative overflow-hidden transform md:-translate-y-4">
                        <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-blue-400 to-cyan-400"></div>
                        <div class="absolute top-0 right-0 w-24 h-24 bg-white opacity-60 rounded-full blur-xl"></div>
                        <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 shadow-sm text-blue-600">
                            <i class='bx bx-down-arrow-circle text-3xl'></i>
                        </div>
                        <div class="text-sm font-bold text-blue-600 uppercase tracking-widest mb-2">Download</div>
                        <div class="text-4xl md:text-5xl font-black text-slate-800">-- <span class="text-base font-normal text-slate-400">Mbps</span></div>
                    </div>
                    
                    <!-- Upload -->
                    <div class="text-center p-6 bg-slate-50 rounded-[2rem] border border-slate-100 hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-sm text-slate-400">
                            <i class='bx bx-up-arrow-circle text-2xl'></i>
                        </div>
                        <div class="text-sm font-bold text-slate-500 uppercase tracking-widest mb-2">Upload</div>
                        <div class="text-3xl md:text-4xl font-black text-slate-800">-- <span class="text-base font-normal text-slate-400">Mbps</span></div>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="text-center max-w-lg mx-auto">
                    <h3 class="text-2xl font-bold text-slate-800 mb-4">Siap Mengukur Kecepatan?</h3>
                    <p class="text-slate-500 leading-relaxed font-light mb-10">
                        Fitur speedtest saat ini sedang dalam tahap integrasi dengan API pengukuran global. Server lokal kami sedang dipersiapkan untuk memberikan hasil paling akurat.
                    </p>
                    
                    <button onclick="alert('API Speedtest belum terintegrasi. Server sedang dalam persiapan teknis.')" class="relative overflow-hidden group/btn bg-slate-900 text-white font-extrabold text-lg py-5 px-16 rounded-full shadow-[0_10px_30px_rgba(15,23,42,0.3)] hover:shadow-[0_15px_40px_rgba(59,130,246,0.4)] hover:bg-blue-600 transition-all duration-300 transform hover:-translate-y-1">
                        <!-- Shimmer effect -->
                        <div class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/20 to-transparent group-hover/btn:animate-[shimmer_1.5s_infinite]"></div>
                        <span class="relative z-10 flex items-center justify-center gap-3">
                            Mulai Test Sekarang <i class='bx bx-right-arrow-alt text-2xl group-hover/btn:translate-x-1 transition-transform'></i>
                        </span>
                    </button>
                </div>
                
            </div>
            
            <!-- Bottom Server Info -->
            <div class="mt-20 pt-8 border-t border-slate-100 flex flex-col md:flex-row items-center justify-between text-sm text-slate-500 font-medium">
                <div class="flex items-center gap-3 mb-4 md:mb-0">
                    <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center"><i class='bx bx-server text-lg'></i></div> 
                    <span>Server Terhubung: <strong class="text-slate-800">LancarWiFi Local (JKT)</strong></span>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center"><i class='bx bx-globe text-lg'></i></div> 
                    <span>IP Anda: <strong class="text-slate-800">Mendeteksi...</strong></span>
                </div>
            </div>
        </div>
        
    </div>
</section>

<!-- Custom Animation for Shimmer -->
<style>
    @keyframes shimmer {
        100% {
            transform: translateX(100%);
        }
    }
</style>
@endsection
