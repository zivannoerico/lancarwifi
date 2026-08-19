@extends('layouts.app')

@section('title', 'LancarWiFi - Internet Fiber Optic Ultra Cepat & Tanpa Batas')

@section('content')

<!-- 1. HERO — SIDE PEEKING PROMOTIONAL CAROUSEL BANNER -->
<section class="pt-24 sm:pt-28 pb-4 bg-white overflow-hidden">
    <div class="relative w-full" id="hero-carousel">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <!-- Carousel Outer Viewport Wrapper with Outer Edge Fade Mask -->
            <div class="w-full overflow-hidden py-2 relative [mask-image:linear-gradient(to_right,transparent_0%,black_4%,black_96%,transparent_100%)] [-webkit-mask-image:linear-gradient(to_right,transparent_0%,black_4%,black_96%,transparent_100%)]" id="carousel-viewport">
                <div class="flex items-center gap-4 sm:gap-6" id="carousel-track">
                    <!-- Slide 1 -->
                    <div class="carousel-slide slide-1 active w-[85%] sm:w-[78%] shrink-0 rounded-2xl overflow-hidden shadow-lg border border-slate-100 scale-100 opacity-100">
                        <a href="#paket" class="block w-full">
                            <img src="{{ asset('images/hero-banner-1.jpg') }}" alt="LancarWiFi Fiber Ultra Fast Internet Banner" class="w-full h-56 sm:h-72 md:h-[330px] object-cover rounded-2xl">
                        </a>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-slide slide-2 w-[85%] sm:w-[78%] shrink-0 rounded-2xl overflow-hidden shadow-lg border border-slate-100 scale-95 opacity-50">
                        <a href="#paket" class="block w-full">
                            <img src="{{ asset('images/hero-banner-2.jpg') }}" alt="LancarWiFi Pro Gamer Edition Banner" class="w-full h-56 sm:h-72 md:h-[330px] object-cover rounded-2xl">
                        </a>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-slide slide-3 w-[85%] sm:w-[78%] shrink-0 rounded-2xl overflow-hidden shadow-lg border border-slate-100 scale-95 opacity-50">
                        <a href="#promo" class="block w-full">
                            <img src="{{ asset('images/hero-banner-3.jpg') }}" alt="LancarWiFi Special Promo Free Router & Gift Banner" class="w-full h-56 sm:h-72 md:h-[330px] object-cover rounded-2xl">
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Dots Pagination Below Banner Carousel -->
        <div class="flex items-center justify-center gap-1.5 mt-3" id="carousel-dots">
            <span class="dot active w-5 h-2 bg-brand-blue rounded-full transition-all cursor-pointer" data-index="0"></span>
            <span class="dot w-2 h-2 bg-slate-300 hover:bg-slate-400 rounded-full transition-all cursor-pointer" data-index="1"></span>
            <span class="dot w-2 h-2 bg-slate-300 hover:bg-slate-400 rounded-full transition-all cursor-pointer" data-index="2"></span>
        </div>
    </div>
</section>

<!-- 2. EDITORIAL USP / BRAND VALUE SECTION -->
<section class="py-20 sm:py-24 lg:py-28 bg-white border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Editorial 2-Column Asymmetric Header -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
            <!-- Left: Typography Headline -->
            <div class="lg:col-span-7 space-y-4 text-left">
                <span class="inline-block px-3.5 py-1 bg-blue-50 text-brand-blue text-xs font-black tracking-widest uppercase rounded-full">
                    Koneksi Digital Optimal
                </span>
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-black text-slate-950 tracking-tight leading-[1.08]">
                    Lebih Cepat.<br>
                    Lebih Stabil.<br>
                    Lebih Lancar.
                </h2>
                <p class="text-slate-600 text-lg sm:text-xl font-normal leading-relaxed pt-2 max-w-xl">
                    Dibangun dengan jaringan fiber optic murni untuk mendukung seluruh aktivitas digital keluarga di rumah tanpa kompromi.
                </p>
            </div>

            <!-- Right: Specification Visual Highlight -->
            <div class="lg:col-span-5">
                <div class="bg-gradient-to-br from-slate-900 to-slate-950 text-white rounded-3xl p-8 sm:p-10 shadow-2xl relative overflow-hidden">
                    <div class="absolute -right-6 -bottom-6 w-40 h-40 bg-brand-blue/20 rounded-full blur-2xl pointer-events-none"></div>
                    <span class="text-xs font-black tracking-widest uppercase text-amber-400 block mb-2">Standar Jaringan</span>
                    <div class="text-6xl sm:text-7xl lg:text-8xl font-black text-brand-blue tracking-tighter leading-none">
                        100%
                    </div>
                    <div class="text-xl sm:text-2xl font-black text-white tracking-widest uppercase mt-2">
                        FIBER OPTIC
                    </div>
                    <p class="text-slate-300 text-sm sm:text-base mt-4 leading-relaxed border-t border-slate-800 pt-4">
                        Jaringan serat optik murni dari pusat infrastruktur hingga router rumah Anda untuk transfer data ultra stabil.
                    </p>
                </div>
            </div>
        </div>

        <!-- Inline Specification & Statistics Bar (No Cards Grid) -->
        <div class="border-t border-slate-200 mt-16 pt-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12 divide-y sm:divide-y-0 sm:divide-x divide-slate-200">
                <!-- Stat 1 -->
                <div class="pt-4 sm:pt-0 sm:px-4 first:px-0">
                    <div class="text-3xl lg:text-4xl font-black text-slate-950 tracking-tight">1:1</div>
                    <div class="text-xs font-black text-brand-blue tracking-wider uppercase mt-1">SIMETRIS</div>
                    <p class="text-xs text-slate-500 mt-1.5 leading-normal">Kecepatan upload & download seimbang untuk meeting & gaming.</p>
                </div>

                <!-- Stat 2 -->
                <div class="pt-4 sm:pt-0 sm:px-4">
                    <div class="text-3xl lg:text-4xl font-black text-slate-950 tracking-tight">∞</div>
                    <div class="text-xs font-black text-brand-blue tracking-wider uppercase mt-1">TANPA FUP</div>
                    <p class="text-xs text-slate-500 mt-1.5 leading-normal">Bebas internetan tanpa batas pemakaian atau penurunan speed.</p>
                </div>

                <!-- Stat 3 -->
                <div class="pt-4 sm:pt-0 sm:px-4">
                    <div class="text-3xl lg:text-4xl font-black text-slate-950 tracking-tight">&lt; 5ms</div>
                    <div class="text-xs font-black text-brand-blue tracking-wider uppercase mt-1">LOW LATENCY</div>
                    <p class="text-xs text-slate-500 mt-1.5 leading-normal">Responsif dan stabil untuk streaming video 4K & game online.</p>
                </div>

                <!-- Stat 4 -->
                <div class="pt-4 sm:pt-0 sm:px-4">
                    <div class="text-3xl lg:text-4xl font-black text-slate-950 tracking-tight">24/7</div>
                    <div class="text-xs font-black text-brand-blue tracking-wider uppercase mt-1">SUPPORT RESPONSIF</div>
                    <p class="text-xs text-slate-500 mt-1.5 leading-normal">Tim teknis dan layanan bantuan siap menangani kebutuhan Anda.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. PAKET INTERNET (PRICING GRID - CARD ORIENTED) -->
<section class="py-24 sm:py-28 lg:py-32 bg-slate-50/80 border-b border-slate-200" id="paket">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-950 tracking-tight">Pilih Kecepatan yang Pas untuk Kebutuhanmu</h2>
            <p class="text-slate-600 text-base sm:text-lg">Dari kebutuhan harian hingga rumah dengan banyak perangkat, pilih paket LancarWifi yang sesuai dengan kebutuhanmu.</p>
        </div>
        
        @if(isset($packages) && count($packages) > 0)
        <!-- Grid setup for 3 cards max horizontally -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-10 max-w-6xl mx-auto items-center relative z-20">
            @foreach($packages as $package)
            @php
                $isPopular = $loop->iteration == 2;
                $deviceCount = '1-3';
                if($package->speed >= 50) $deviceCount = '4-7';
                if($package->speed >= 100) $deviceCount = '8+';
            @endphp
            
            <div class="relative group rounded-[2.5rem] transition-all duration-500 {{ $isPopular ? 'md:scale-105 z-20' : 'hover:-translate-y-3 z-10' }}">
                
                @if($isPopular)
                <!-- Animated magical border glow for popular card -->
                <div class="absolute -inset-[2px] bg-gradient-to-r from-cyan-400 via-blue-500 to-indigo-600 rounded-[2.6rem] blur-md opacity-70 group-hover:opacity-100 transition duration-500 animate-pulse"></div>
                @endif

                <div class="relative h-full flex flex-col p-8 sm:p-10 rounded-[2.5rem] overflow-hidden {{ $isPopular ? 'bg-gradient-to-b from-slate-900 via-blue-900 to-indigo-950 text-white border border-slate-700/50' : 'bg-white text-slate-800 border border-slate-100 shadow-[0_20px_50px_rgb(0,0,0,0.08)]' }}">
                    
                    <!-- Decorative background elements inside card -->
                    @if($isPopular)
                        <div class="absolute top-0 right-0 w-64 h-64 bg-blue-500/20 rounded-full blur-3xl -mr-20 -mt-20"></div>
                        <div class="absolute bottom-0 left-0 w-48 h-48 bg-cyan-500/20 rounded-full blur-3xl -ml-10 -mb-10"></div>
                        <i class='bx bx-rocket absolute -right-6 top-20 text-[180px] text-white/[0.03] rotate-12 pointer-events-none'></i>
                    @else
                        <div class="absolute top-0 right-0 w-64 h-64 bg-slate-100/50 rounded-full blur-3xl -mr-20 -mt-20"></div>
                        <i class='bx bx-wifi absolute -right-10 top-20 text-[180px] text-slate-900/[0.02] -rotate-12 pointer-events-none'></i>
                    @endif

                    <!-- Popular Badge -->
                    @if($isPopular)
                    <div class="absolute top-0 inset-x-0 flex justify-center -mt-0">
                        <div class="bg-gradient-to-r from-cyan-400 to-blue-500 text-white font-extrabold px-6 py-2 rounded-b-2xl text-xs uppercase tracking-widest shadow-lg border-x border-b border-blue-400/30 backdrop-blur-sm">
                            Pilihan Terfavorit
                        </div>
                    </div>
                    @endif

                    <div class="relative z-10 flex flex-col mb-8 {{ $isPopular ? 'pt-6' : '' }}">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-black uppercase tracking-wider {{ $isPopular ? 'text-white' : 'text-slate-800' }}">
                                {{ $package->name }}
                            </h3>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center {{ $isPopular ? 'bg-white/10 text-cyan-300' : 'bg-slate-50 text-blue-600' }}">
                                <i class='bx {{ $isPopular ? "bx-rocket" : "bx-wifi" }} text-xl'></i>
                            </div>
                        </div>

                        <div class="flex items-start gap-1 mb-2">
                            <span class="text-sm font-bold tracking-widest uppercase mt-2 {{ $isPopular ? 'text-blue-300' : 'text-slate-400' }}">UP TO</span>
                            <div class="flex items-baseline">
                                <span class="text-7xl font-black tracking-tighter leading-none {{ $isPopular ? 'text-white' : 'text-slate-900' }}">{{ $package->speed }}</span>
                                <span class="text-xl font-bold ml-1 {{ $isPopular ? 'text-blue-200' : 'text-slate-500' }}">Mbps</span>
                            </div>
                        </div>
                        
                        <div class="inline-flex items-center self-start px-3 py-1 mt-2 rounded-lg text-xs font-bold {{ $isPopular ? 'bg-white/10 text-cyan-100 border border-white/10' : 'bg-slate-100 text-slate-600 border border-slate-200' }}">
                            <i class='bx bx-devices mr-1.5'></i> Ideal untuk {{ $deviceCount }} Perangkat
                        </div>
                    </div>

                    <div class="relative z-10 py-6 border-y {{ $isPopular ? 'border-white/10' : 'border-slate-100' }} mb-8 flex items-end gap-2">
                        <span class="text-lg font-bold {{ $isPopular ? 'text-blue-300' : 'text-slate-400' }}">Rp</span> 
                        <span class="text-4xl font-black leading-none tracking-tight {{ $isPopular ? 'text-white' : 'text-slate-800' }}">{{ number_format($package->price, 0, ',', '.') }}</span> 
                        <span class="text-sm font-medium {{ $isPopular ? 'text-blue-300' : 'text-slate-500' }}">/ {{ $package->duration }}</span>
                    </div>
                    
                    <div class="relative z-10 flex-grow">
                        <ul class="space-y-4">
                            @php
                                $features = $package->features ? (is_array(json_decode($package->features, true)) ? json_decode($package->features, true) : explode(',', $package->features)) : ['Unlimited Kuota, Tanpa FUP', 'Peminjaman Router Gratis', 'Support 24/7 Hari'];
                            @endphp
                            @foreach($features as $feature)
                            <li class="flex items-start group/item">
                                <div class="w-6 h-6 rounded-full flex items-center justify-center shrink-0 mt-0.5 mr-3 transition-colors {{ $isPopular ? 'bg-blue-500/20 text-cyan-300 group-hover/item:bg-cyan-400 group-hover/item:text-slate-900' : 'bg-blue-50 text-blue-600 group-hover/item:bg-blue-600 group-hover/item:text-white' }}">
                                    <i class='bx bx-check text-sm font-bold'></i>
                                </div>
                                <span class="font-medium text-sm leading-relaxed {{ $isPopular ? 'text-blue-50 group-hover/item:text-white' : 'text-slate-600 group-hover/item:text-slate-900' }} transition-colors">{{ trim($feature) }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <div class="relative z-10 mt-10">
                        <a href="/hubungi-kami" class="flex items-center justify-center gap-2 w-full py-4 px-6 text-center font-bold rounded-2xl transition-all duration-300 transform group-hover:-translate-y-1 !text-white hover:!text-white {{ $isPopular ? 'bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-400 hover:to-indigo-500 shadow-[0_10px_20px_rgba(59,130,246,0.4)]' : 'bg-slate-900 hover:bg-slate-800 hover:shadow-xl' }}" style="color: white !important;">
                            <span class="!text-white hover:!text-white">Berlangganan Sekarang</span>
                            <i class='bx bx-right-arrow-alt text-xl !text-white group-hover:translate-x-1 transition-transform'></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
        </div>
    </div>
</section>

<!-- 4. FULL-WIDTH HORIZONTAL PROMO BANNER SECTION -->
<!-- <section class="py-16 sm:py-20 lg:py-24 bg-white" id="promo">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-slate-950 via-slate-900 to-slate-950 rounded-3xl p-8 sm:p-12 lg:p-16 text-white shadow-2xl relative overflow-hidden flex flex-col md:flex-row items-start md:items-center justify-between gap-8">
            <div class="absolute -right-20 -top-20 w-80 h-80 bg-brand-orange/15 rounded-full blur-3xl pointer-events-none"></div>
            
            <div class="space-y-4 max-w-2xl relative z-10">
                <span class="inline-block px-3.5 py-1 bg-amber-400/15 border border-amber-400/30 rounded-full text-xs font-black text-amber-300 uppercase tracking-widest">
                    PROMO SPECIAL
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight leading-tight">
                    Internet makin lancar,<br class="hidden sm:inline"> harga makin hemat.
                </h2>
                <p class="text-slate-300 text-base sm:text-lg font-normal leading-relaxed">
                    Nikmati penawaran hemat bulanan, diskon biaya instalasi, dan bonus perangkat Wi-Fi 6 untuk pendaftaran pelanggan baru bulan ini.
                </p>
            </div>

            <div class="shrink-0 relative z-10">
                <a href="/hubungi-kami" class="inline-flex items-center justify-center px-8 py-4 bg-brand-orange hover:bg-amber-600 text-white font-extrabold text-base rounded-xl transition-all shadow-lg hover:scale-105 gap-2">
                    Lihat Promo <i class='bx bx-right-arrow-alt text-xl'></i>
                </a>
            </div>
        </div>
    </div>
</section> -->

<!-- 5. STORYTELLING WHY LANCARWIFI (SPLIT LAYOUT - NO CARDS) -->
<section class="py-20 sm:py-24 lg:py-32 bg-white border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <!-- Left Column: Visual Storytelling Focal Block -->
            <div class="lg:col-span-5">
                <div class="bg-blue-50/60 border border-blue-100 rounded-3xl p-8 sm:p-10 space-y-6 relative">
                    <div class="w-16 h-16 rounded-2xl bg-brand-blue text-white flex items-center justify-center text-3xl shadow-lg">
                        <i class='bx bx-wifi'></i>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-950 leading-tight">
                        Infrastruktur Modern Tanpa Throttling
                    </h3>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Kami menghubungkan rumah Anda langsung ke tulang punggung serat optik murni dengan perangkat kelas operator untuk menjamin kestabilan jaringan 24/7.
                    </p>
                    
                    <div class="pt-4 border-t border-blue-100 space-y-3">
                        <div class="flex items-center justify-between text-xs font-bold text-slate-700">
                            <span>Uptime Jaringan Target</span>
                            <span class="text-brand-blue">99.9%</span>
                        </div>
                        <div class="w-full h-2 bg-blue-100 rounded-full overflow-hidden">
                            <div class="h-full bg-brand-blue w-[99.9%] rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Storytelling List (Vertical Dividers, No Cards) -->
            <div class="lg:col-span-7 space-y-8">
                <div class="space-y-3">
                    <span class="inline-block px-3.5 py-1 bg-blue-50 text-brand-blue text-xs font-black tracking-widest uppercase rounded-full">
                        KENAPA LANCAWIFI?
                    </span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-950 tracking-tight leading-tight">
                        Karena internet bukan cuma soal cepat.
                    </h2>
                </div>

                <!-- Vertical Divider List -->
                <div class="divide-y divide-slate-200">
                    <!-- Item 1 -->
                    <div class="py-5 first:pt-0 flex items-start gap-4">
                        <div class="w-7 h-7 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0 mt-1 font-bold text-sm">
                            ✓
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-slate-950">Internet Cepat</h4>
                            <p class="text-sm text-slate-600 mt-1 leading-relaxed">Upload dan download simetris 1:1 tanpa penurunan kecepatan pada jam-jam sibuk.</p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="py-5 flex items-start gap-4">
                        <div class="w-7 h-7 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0 mt-1 font-bold text-sm">
                            ✓
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-slate-950">Internet Unlimited</h4>
                            <p class="text-sm text-slate-600 mt-1 leading-relaxed">True Unlimited murni tanpa batas pemakaian FUP dan tanpa kejutan tambahan tagihan.</p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="py-5 flex items-start gap-4">
                        <div class="w-7 h-7 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0 mt-1 font-bold text-sm">
                            ✓
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-slate-950">Fiber Optic Murni</h4>
                            <p class="text-sm text-slate-600 mt-1 leading-relaxed">100% serat optik berkualitas tinggi hingga ke titik modem rumah tahan kendala cuaca buruk.</p>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="py-5 last:pb-0 flex items-start gap-4">
                        <div class="w-7 h-7 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0 mt-1 font-bold text-sm">
                            ✓
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-slate-950">Support Responsif</h4>
                            <p class="text-sm text-slate-600 mt-1 leading-relaxed">Tim customer service dan teknisi lapangan siap membantu menyelesaikan kebutuhan Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. COVERAGE CHECKER (FULL-WIDTH VISUAL CTA SECTION) -->
<!-- <section class="py-20 sm:py-24 lg:py-28 bg-blue-50/70 border-y border-blue-100" id="coverage">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
            <div class="lg:col-span-7 space-y-4">
                <span class="inline-block px-3.5 py-1 bg-white text-brand-blue text-xs font-black tracking-widest uppercase rounded-full shadow-sm">
                    JANGKAUAN JARINGAN
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-950 tracking-tight leading-tight">
                    Cek Ketersediaan LancarWifi
                </h2>
                <p class="text-slate-600 text-base sm:text-lg leading-relaxed max-w-xl">
                    Internet cepat mungkin sudah dekat. Masukkan lokasi untuk melihat apakah jaringan fiber optic LancarWifi tersedia di area tempat tinggalmu.
                </p>
            </div>

            <div class="lg:col-span-5">
                <form action="/infrastruktur/coverage" method="GET" class="bg-white p-4 sm:p-5 rounded-2xl border border-blue-200 shadow-md space-y-3">
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider">Lokasi Rumah / Alamat</label>
                    <input type="text" name="location" placeholder="Masukkan nama kota atau kecamatan..." required class="w-full px-4 py-3.5 rounded-xl border border-slate-300 text-slate-900 text-sm focus:outline-none focus:border-brand-blue focus:ring-1 focus:ring-brand-blue">
                    <button type="submit" class="w-full py-3.5 bg-brand-orange hover:bg-amber-600 text-white font-black text-sm rounded-xl shadow-md transition-all">
                        CEK COVERAGE
                    </button>
                </form>
            </div>
        </div>
    </div>
</section> -->

<!-- 7. TESTIMONIALS SECTION -->
<section class="py-16 sm:py-20 lg:py-24 bg-white" id="testimoni">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-10 space-y-4">
            <span class="inline-block px-4 py-1.5 bg-brand-blue/10 text-brand-blue text-xs font-black tracking-widest uppercase rounded-full">
                TESTIMONI PELANGGAN
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-950 tracking-tight leading-tight">
                Kata mereka yang sudah pakai LancarWiFi.
            </h2>
            <p class="text-slate-500 text-base sm:text-lg leading-relaxed">
                Lebih dari ratusan pelanggan telah merasakan kecepatan dan stabilitas internet fiber optic LancarWiFi.
            </p>
        </div>

        <!-- Stats Bar -->
        <div class="flex flex-wrap justify-center gap-8 sm:gap-16 mb-12">
            <div class="text-center">
                <div class="text-4xl font-black text-slate-950">500+</div>
                <div class="text-sm text-slate-500 mt-1 font-medium">Pelanggan Aktif</div>
            </div>
            <div class="w-px bg-slate-200 hidden sm:block"></div>
            <div class="text-center">
                <div class="text-4xl font-black text-slate-950">4.9<span class="text-brand-orange">★</span></div>
                <div class="text-sm text-slate-500 mt-1 font-medium">Rating Kepuasan</div>
            </div>
            <div class="w-px bg-slate-200 hidden sm:block"></div>
            <div class="text-center">
                <div class="text-4xl font-black text-slate-950">99.9%</div>
                <div class="text-sm text-slate-500 mt-1 font-medium">Uptime Jaringan</div>
            </div>
        </div>

        <!-- Marquee Track -->
        <div class="relative overflow-hidden" style="-webkit-mask-image: linear-gradient(to right, transparent 0%, black 8%, black 92%, transparent 100%); mask-image: linear-gradient(to right, transparent 0%, black 8%, black 92%, transparent 100%);">
            <div class="flex gap-5 testimonial-marquee" id="testimonial-track" style="width: max-content;">

                <!-- Card 1 -->
                <div class="testimonial-card flex-shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-6 flex flex-col gap-4 shadow-[0_4px_20px_rgba(0,0,0,0.06)]">
                    <div class="flex items-center justify-between">
                        <div class="flex gap-0.5 text-amber-400 text-base">★★★★★</div>
                        <span class="text-xs font-bold text-brand-blue bg-brand-blue/10 px-2.5 py-1 rounded-full">Verified</span>
                    </div>
                    <blockquote class="text-slate-700 text-sm leading-relaxed font-medium flex-1">
                        "Udah 8 bulan pakai LancarWiFi, belum pernah sekali pun ngerasain lemot atau putus. Ping stabil di bawah 10ms. Ga nyesel pindah dari ISP lama!"
                    </blockquote>
                    <div class="flex items-center gap-3 pt-2 border-t border-slate-100">
                        <div class="w-9 h-9 rounded-full bg-gradient-to-br from-amber-400 to-orange-500 flex items-center justify-center text-white font-black text-sm shrink-0">R</div>
                        <div>
                            <div class="font-bold text-slate-900 text-xs">Rizky Firmansyah</div>
                            <div class="text-slate-400 text-xs">Gamer · Jan 2026</div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="testimonial-card flex-shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-6 flex flex-col gap-4 shadow-[0_4px_20px_rgba(0,0,0,0.06)]">
                    <div class="flex gap-0.5 text-amber-400 text-base">★★★★★</div>
                    <blockquote class="text-slate-700 text-sm leading-relaxed font-medium flex-1">
                        "WFH selama 2 tahun, baru kali ini nemu internet yang beneran stabil buat video call seharian. Upload sama download, mantap!"
                    </blockquote>
                    <div class="flex items-center gap-3 pt-2 border-t border-slate-100">
                        <div class="w-9 h-9 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white font-black text-sm shrink-0">S</div>
                        <div>
                            <div class="font-bold text-slate-900 text-xs">Sari Dewi</div>
                            <div class="text-slate-400 text-xs">WFH · Mar 2026</div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="testimonial-card flex-shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-6 flex flex-col gap-4 shadow-[0_4px_20px_rgba(0,0,0,0.06)]">
                    <div class="flex gap-0.5 text-amber-400 text-base">★★★★★</div>
                    <blockquote class="text-slate-700 text-sm leading-relaxed font-medium flex-1">
                        "Proses pasangnya cepet banget, teknisi ramah dan sabar. Instalasi selesai kurang dari 2 jam. Highly recommended buat semua!"
                    </blockquote>
                    <div class="flex items-center gap-3 pt-2 border-t border-slate-100">
                        <div class="w-9 h-9 rounded-full bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center text-white font-black text-sm shrink-0">B</div>
                        <div>
                            <div class="font-bold text-slate-900 text-xs">Budi Santoso</div>
                            <div class="text-slate-400 text-xs">Keluarga · Feb 2026</div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="testimonial-card flex-shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-6 flex flex-col gap-4 shadow-[0_4px_20px_rgba(0,0,0,0.06)]">
                    <div class="flex gap-0.5 text-amber-400 text-base">★★★★★</div>
                    <blockquote class="text-slate-700 text-sm leading-relaxed font-medium flex-1">
                        "Anak-anak streaming Netflix 4K sambil gw kerja, tetap lancar tanpa buffering. Harganya masuk akal untuk kualitas sebagus ini."
                    </blockquote>
                    <div class="flex items-center gap-3 pt-2 border-t border-slate-100">
                        <div class="w-9 h-9 rounded-full bg-gradient-to-br from-pink-500 to-rose-600 flex items-center justify-center text-white font-black text-sm shrink-0">A</div>
                        <div>
                            <div class="font-bold text-slate-900 text-xs">Anita Rahayu</div>
                            <div class="text-slate-400 text-xs">Ibu RT · Apr 2026</div>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="testimonial-card flex-shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-6 flex flex-col gap-4 shadow-[0_4px_20px_rgba(0,0,0,0.06)]">
                    <div class="flex gap-0.5 text-amber-400 text-base">★★★★★</div>
                    <blockquote class="text-slate-700 text-sm leading-relaxed font-medium flex-1">
                        "CS-nya responsif banget, langsung dihubungi kurang dari 1 jam setelah daftar. Jarang ada ISP yang servis pelanggannya secepat ini!"
                    </blockquote>
                    <div class="flex items-center gap-3 pt-2 border-t border-slate-100">
                        <div class="w-9 h-9 rounded-full bg-gradient-to-br from-violet-500 to-purple-600 flex items-center justify-center text-white font-black text-sm shrink-0">D</div>
                        <div>
                            <div class="font-bold text-slate-900 text-xs">Darmawan Putra</div>
                            <div class="text-slate-400 text-xs">Wirausaha · Mei 2026</div>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="testimonial-card flex-shrink-0 w-80 bg-white border border-slate-200 rounded-2xl p-6 flex flex-col gap-4 shadow-[0_4px_20px_rgba(0,0,0,0.06)]">
                    <div class="flex gap-0.5 text-amber-400 text-base">★★★★★</div>
                    <blockquote class="text-slate-700 text-sm leading-relaxed font-medium flex-1">
                        "Sebelumnya sering komplain internet lambat, sekarang buka YouTube, Zoom, dan download file kerja bareng di 1 rumah, semua lancar jaya!"
                    </blockquote>
                    <div class="flex items-center gap-3 pt-2 border-t border-slate-100">
                        <div class="w-9 h-9 rounded-full bg-gradient-to-br from-cyan-500 to-sky-600 flex items-center justify-center text-white font-black text-sm shrink-0">H</div>
                        <div>
                            <div class="font-bold text-slate-900 text-xs">Hendra Wijaya</div>
                            <div class="text-slate-400 text-xs">Mahasiswa · Jun 2026</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Bottom CTA -->
        <!-- <div class="mt-12 text-center">
            <a href="/hubungi-kami" class="inline-flex items-center gap-2 px-8 py-4 bg-slate-950 hover:bg-slate-800 !text-white hover:!text-white font-bold rounded-2xl transition-all shadow-lg hover:-translate-y-0.5" style="color: white !important;">
                Bergabung Sekarang <i class='bx bx-right-arrow-alt text-xl'></i>
            </a>
        </div> -->

    </div>
</section>

<style>
.testimonial-marquee {
    animation: marquee-scroll 28s linear infinite;
}
.testimonial-marquee:hover {
    animation-play-state: paused;
}
@keyframes marquee-scroll {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
</style>

<script>
(function() {
    const track = document.getElementById('testimonial-track');
    if (!track) return;
    const cards = Array.from(track.children);
    cards.forEach(card => track.appendChild(card.cloneNode(true)));
})();
</script>



<!-- CAROUSEL & ACCORDION JS SCRIPT -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Carousel Script (Multi-Set Cloned Infinite Center-Peeking GSAP Carousel)
        const track = document.getElementById('carousel-track');
        const viewport = document.getElementById('carousel-viewport');
        const origSlides = Array.from(track ? track.children : []);
        const nextBtn = document.getElementById('carousel-next');
        const prevBtn = document.getElementById('carousel-prev');
        const dotsNav = document.getElementById('carousel-dots');
        const dots = dotsNav ? Array.from(dotsNav.children) : [];

        if (track && origSlides.length > 0) {
            const realCount = origSlides.length;

            // Duplicate origSlides twice to create 3 complete sets [Set 1, Set 2 (active), Set 3]
            origSlides.forEach(slide => {
                const cloneBefore = slide.cloneNode(true);
                const cloneAfter = slide.cloneNode(true);
                track.insertBefore(cloneBefore, origSlides[0]);
                track.appendChild(cloneAfter);
            });

            const allSlides = Array.from(track.children);
            // Real active slides start at middle set (index = realCount, e.g. 3)
            let currentIndex = realCount;
            let slideInterval;
            let isAnimating = false;

            const getOffset = (idx) => {
                const viewportWidth = viewport ? viewport.clientWidth : 0;
                const activeSlide = allSlides[idx];
                const slideWidth = activeSlide ? activeSlide.offsetWidth : 0;
                const gap = window.innerWidth >= 640 ? 24 : 16;
                return (viewportWidth - slideWidth) / 2 - idx * (slideWidth + gap);
            };

            const updateVisuals = (activeIdx, animate = true) => {
                const realIndex = activeIdx % realCount;

                allSlides.forEach((slide, i) => {
                    const isTarget = i === activeIdx;
                    if (animate && window.gsap) {
                        gsap.to(slide, {
                            scale: isTarget ? 1 : 0.95,
                            opacity: isTarget ? 1 : 0.55,
                            duration: 0.6,
                            ease: 'power3.out'
                        });
                    } else {
                        if (window.gsap) {
                            gsap.set(slide, {
                                scale: isTarget ? 1 : 0.95,
                                opacity: isTarget ? 1 : 0.55
                            });
                        } else {
                            slide.style.transform = isTarget ? 'scale(1)' : 'scale(0.95)';
                            slide.style.opacity = isTarget ? '1' : '0.55';
                        }
                    }
                });

                dots.forEach((dot, i) => {
                    const isSelected = i === realIndex;
                    if (animate && window.gsap) {
                        gsap.to(dot, {
                            width: isSelected ? 24 : 8,
                            backgroundColor: isSelected ? '#0284c7' : '#cbd5e1',
                            duration: 0.35
                        });
                    } else {
                        dot.style.width = isSelected ? '24px' : '8px';
                        dot.style.backgroundColor = isSelected ? '#0284c7' : '#cbd5e1';
                    }
                });
            };

            const goToSlide = (targetIdx, immediate = false) => {
                if (isAnimating && !immediate) return;

                const targetX = getOffset(targetIdx);

                if (window.gsap && !immediate) {
                    isAnimating = true;
                    updateVisuals(targetIdx, true);

                    gsap.to(track, {
                        x: targetX,
                        duration: 0.65,
                        ease: 'power3.out',
                        onComplete: () => {
                            // Seamless 0ms teleportation when sliding into outer sets
                            if (targetIdx >= 2 * realCount) {
                                currentIndex = targetIdx - realCount;
                                gsap.set(track, { x: getOffset(currentIndex) });
                                updateVisuals(currentIndex, false);
                            } else if (targetIdx < realCount) {
                                currentIndex = targetIdx + realCount;
                                gsap.set(track, { x: getOffset(currentIndex) });
                                updateVisuals(currentIndex, false);
                            } else {
                                currentIndex = targetIdx;
                            }
                            isAnimating = false;
                        }
                    });
                } else {
                    if (window.gsap) {
                        gsap.set(track, { x: targetX });
                    } else {
                        track.style.transform = `translateX(${targetX}px)`;
                    }
                    currentIndex = targetIdx;
                    updateVisuals(targetIdx, false);
                }
            };

            const goToNext = () => goToSlide(currentIndex + 1);
            const goToPrev = () => goToSlide(currentIndex - 1);

            if (nextBtn) {
                nextBtn.addEventListener('click', () => {
                    if (window.gsap) gsap.fromTo(nextBtn, { scale: 0.85 }, { scale: 1, duration: 0.25, ease: 'back.out(2)' });
                    goToNext();
                });
            }

            if (prevBtn) {
                prevBtn.addEventListener('click', () => {
                    if (window.gsap) gsap.fromTo(prevBtn, { scale: 0.85 }, { scale: 1, duration: 0.25, ease: 'back.out(2)' });
                    goToPrev();
                });
            }

            dots.forEach((dot, i) => {
                dot.addEventListener('click', () => {
                    const targetIdx = realCount + i;
                    goToSlide(targetIdx);
                });
            });

            window.addEventListener('resize', () => goToSlide(currentIndex, true));

            // Autoplay (3 seconds)
            const startAutoplay = () => {
                slideInterval = setInterval(goToNext, 3000);
            };

            const stopAutoplay = () => {
                clearInterval(slideInterval);
            };

            const carouselContainer = document.getElementById('hero-carousel');
            if (carouselContainer) {
                carouselContainer.addEventListener('mouseenter', stopAutoplay);
                carouselContainer.addEventListener('mouseleave', startAutoplay);
            }

            // Initial alignment
            setTimeout(() => goToSlide(realCount, true), 50);
            startAutoplay();
        }

        // FAQ Accordion Script
        const faqAccordion = document.getElementById('faq-accordion');
        if (faqAccordion) {
            const faqItems = faqAccordion.querySelectorAll('.faq-item');
            faqItems.forEach(item => {
                const header = item.querySelector('.faq-header');
                const body = item.querySelector('.faq-body');
                const icon = item.querySelector('.bx-chevron-down');
                
                if (header && body) {
                    header.addEventListener('click', () => {
                        const isHidden = body.classList.contains('hidden');
                        
                        faqItems.forEach(otherItem => {
                            const otherBody = otherItem.querySelector('.faq-body');
                            const otherIcon = otherItem.querySelector('.bx-chevron-down');
                            if (otherBody) otherBody.classList.add('hidden');
                            if (otherIcon) otherIcon.style.transform = 'rotate(0deg)';
                        });

                        if (isHidden) {
                            body.classList.remove('hidden');
                            if (icon) icon.style.transform = 'rotate(180deg)';
                        }
                    });
                }
            });
        }
    });
</script>

@endsection
