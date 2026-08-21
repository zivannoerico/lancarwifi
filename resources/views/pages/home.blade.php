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

<!-- 3. PAKET INTERNET (PACKAGE SHOWCASE CAROUSEL) -->
<section class="py-20 sm:py-24 lg:py-28 bg-slate-50/80 border-b border-slate-200 overflow-hidden relative" id="paket">
    <!-- Subtle Background Glow Behind Carousel Center -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[500px] bg-gradient-to-r from-blue-400/10 via-cyan-400/10 to-indigo-500/10 rounded-full blur-3xl pointer-events-none -z-0"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16 space-y-3">
            <span class="inline-block px-4 py-1.5 bg-blue-100 text-blue-700 font-bold text-xs uppercase tracking-widest rounded-full shadow-sm">
                Pilihan Kecepatan Terbaik
            </span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-950 tracking-tight">Pilih Kecepatan yang Pas untuk Kebutuhanmu</h2>
            <p class="text-slate-600 text-base sm:text-lg">Dari kebutuhan harian hingga rumah dengan banyak perangkat, pilih paket LancarWifi yang sesuai dengan kebutuhanmu.</p>
        </div>
        
        @if(isset($packages) && count($packages) > 0)
        <!-- Package Carousel Container (5-Slot Premium Showcase) -->
        <div class="relative w-full max-w-7xl mx-auto px-2 sm:px-4" id="package-carousel-root">
            
            <!-- Navigation Buttons (Desktop Floating & Visible) -->
            <button id="pkg-prev-btn" aria-label="Paket Sebelumnya" class="absolute left-2 sm:left-4 lg:left-6 top-1/2 -translate-y-1/2 z-40 w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-white/95 backdrop-blur shadow-[0_10px_30px_rgba(0,0,0,0.18)] border border-slate-200/80 text-slate-700 hover:text-blue-600 hover:bg-white hover:scale-110 active:scale-95 transition-all flex items-center justify-center cursor-pointer group">
                <i class='bx bx-chevron-left text-3xl group-hover:-translate-x-0.5 transition-transform'></i>
            </button>
            <button id="pkg-next-btn" aria-label="Paket Berikutnya" class="absolute right-2 sm:right-4 lg:right-6 top-1/2 -translate-y-1/2 z-40 w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-white/95 backdrop-blur shadow-[0_10px_30px_rgba(0,0,0,0.18)] border border-slate-200/80 text-slate-700 hover:text-blue-600 hover:bg-white hover:scale-110 active:scale-95 transition-all flex items-center justify-center cursor-pointer group">
                <i class='bx bx-chevron-right text-3xl group-hover:translate-x-0.5 transition-transform'></i>
            </button>

            <!-- Viewport with 5-Slot View & Left/Right Gradient Fade Mask -->
            <div class="w-full overflow-hidden py-12 px-0 select-none [mask-image:linear-gradient(to_right,transparent_0%,black_10%,black_90%,transparent_100%)] [-webkit-mask-image:linear-gradient(to_right,transparent_0%,black_10%,black_90%,transparent_100%)]" id="pkg-viewport">
                
                <!-- Carousel Track -->
                <div class="flex items-center cursor-grab active:cursor-grabbing will-change-transform" id="pkg-track" style="touch-action: pan-y;">
                    @foreach($packages as $package)
                    @php
                        $isFeatured = (bool)($package->is_popular ?? false);
                        $deviceCount = '1-3';
                        if($package->speed >= 50) $deviceCount = '4-7';
                        if($package->speed >= 100) $deviceCount = '8+';
                    @endphp
                    
                    <!-- Package Card Item -->
                    <div class="pkg-card-item shrink-0 px-2 sm:px-3 md:px-4 transition-[transform,opacity,filter] duration-500 will-change-transform {{ $isFeatured ? 'is-featured' : '' }}" data-pkg-id="{{ $package->id }}" data-is-featured="{{ $isFeatured ? '1' : '0' }}" data-index="{{ $loop->index }}">
                        
                        <div class="pkg-card-inner relative rounded-[2.5rem] p-6 sm:p-8 md:p-9 overflow-hidden flex flex-col justify-between transition-all duration-500 bg-white text-slate-800 border border-slate-200/80 shadow-[0_15px_35px_rgba(15,23,42,0.06)] h-full">
                            
                            <!-- Magical border glow element (controlled dynamically or in active state) -->
                            <div class="pkg-active-glow absolute -inset-[2px] bg-gradient-to-r from-cyan-400 via-blue-500 to-indigo-600 rounded-[2.6rem] blur-md opacity-0 pointer-events-none transition-opacity duration-500"></div>

                            <!-- Decorative card background orbs & watermark icons -->
                            <div class="pkg-dark-bg absolute inset-0 bg-gradient-to-b from-slate-950 via-slate-900 to-indigo-950 opacity-0 transition-opacity duration-500 pointer-events-none"></div>
                            
                            <div class="pkg-orb-1 absolute top-0 right-0 w-64 h-64 bg-slate-100/60 rounded-full blur-3xl -mr-20 -mt-20 pointer-events-none transition-all duration-500"></div>
                            <div class="pkg-orb-2 absolute bottom-0 left-0 w-48 h-48 bg-blue-500/0 rounded-full blur-3xl -ml-10 -mb-10 pointer-events-none transition-all duration-500"></div>
                            
                            <i class='bx bx-wifi pkg-watermark absolute -right-8 top-16 text-[170px] text-slate-900/[0.03] -rotate-12 pointer-events-none transition-colors duration-500'></i>

                            <!-- Popular / Featured Badge -->
                            <div class="pkg-badge absolute top-0 inset-x-0 flex justify-center -mt-0 opacity-0 transition-all duration-500 z-20">
                                <div class="bg-gradient-to-r from-cyan-400 via-blue-500 to-indigo-600 text-white font-black px-6 py-2 rounded-b-2xl text-xs uppercase tracking-widest shadow-lg border-x border-b border-blue-400/30 backdrop-blur-sm">
                                    Paket Unggulan
                                </div>
                            </div>

                            <!-- Card Top/Header Area -->
                            <div class="relative z-10 flex flex-col mb-5 pkg-header-content transition-all duration-500">
                                <div class="flex items-start justify-between gap-3 mb-4">
                                    <h3 class="pkg-title font-black uppercase tracking-wider text-slate-800 transition-colors duration-500">
                                        {{ $package->name }}
                                    </h3>
                                    <div class="pkg-icon-wrap w-10 h-10 rounded-full flex items-center justify-center bg-slate-100 text-blue-600 shrink-0 transition-colors duration-500">
                                        <i class='bx bx-wifi text-xl pkg-icon'></i>
                                    </div>
                                </div>

                                <div class="flex flex-col mb-2">
                                    <span class="pkg-speed-upto text-xs font-bold tracking-widest uppercase mb-1 text-slate-400 transition-colors duration-500">UP TO</span>
                                    <div class="pkg-speed-value flex items-baseline gap-1.5 flex-nowrap whitespace-nowrap">
                                        <span class="pkg-speed-val font-black tracking-tighter text-slate-900 transition-colors duration-500">{{ $package->speed }}</span>
                                        <span class="pkg-speed-unit font-bold text-slate-500 transition-colors duration-500">Mbps</span>
                                    </div>
                                </div>
                                
                                <div class="pkg-device-pill inline-flex items-center self-start px-3 py-1 mt-1 rounded-lg text-xs font-bold bg-slate-100 text-slate-600 border border-slate-200 transition-colors duration-500 whitespace-nowrap">
                                    <i class='bx bx-devices mr-1.5 shrink-0'></i> Ideal untuk {{ $deviceCount }} Perangkat
                                </div>
                            </div>

                            <!-- Card Price Row -->
                            <div class="pkg-price-row relative z-10 py-4 border-y border-slate-100 mb-5 flex items-baseline gap-1.5 flex-nowrap whitespace-nowrap transition-colors duration-500">
                                <span class="pkg-currency font-bold text-slate-400 transition-colors duration-500">Rp</span> 
                                <span class="pkg-price-val font-black tracking-tight text-slate-900 transition-colors duration-500">{{ number_format($package->price, 0, ',', '.') }}</span> 
                                <span class="pkg-duration font-medium text-slate-500 transition-colors duration-500">/ {{ $package->duration }}</span>
                            </div>
                            
                            <!-- Features List (Consistent middle area, clean 2-line wraps) -->
                            <div class="relative z-10 flex-1 flex flex-col justify-start mb-6 pkg-features-container">
                                <ul class="space-y-3">
                                    @php
                                        $features = $package->features ? (is_array(json_decode($package->features, true)) ? json_decode($package->features, true) : explode(',', $package->features)) : ['Unlimited Kuota, Tanpa FUP', 'Peminjaman Router Gratis', 'Support 24/7 Hari'];
                                    @endphp
                                    @foreach($features as $feature)
                                    <li class="flex items-start group/item">
                                        <div class="pkg-check-wrap w-5 h-5 rounded-full flex items-center justify-center shrink-0 mt-0.5 mr-2.5 bg-blue-50 text-blue-600 transition-colors duration-500">
                                            <i class='bx bx-check text-xs font-bold'></i>
                                        </div>
                                        <span class="pkg-feature-text font-medium text-xs sm:text-sm text-slate-600 transition-colors duration-500">{{ trim($feature) }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            
                            <!-- CTA Button (Pinned securely to Bottom) -->
                            <div class="relative z-10 mt-auto pt-2">
                                <a href="/hubungi-kami" class="pkg-cta-btn flex items-center justify-center gap-2 w-full py-3.5 sm:py-4 px-5 text-center font-bold rounded-2xl transition-all duration-300 transform hover:-translate-y-0.5 bg-slate-900 text-white hover:bg-slate-800 shadow-md">
                                    <span class="whitespace-nowrap">Berlangganan Sekarang</span>
                                    <i class='bx bx-right-arrow-alt text-xl group-hover:translate-x-1 transition-transform'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Dots Pagination / Indicator Below Carousel -->
            <div class="flex items-center justify-center gap-2 mt-4" id="pkg-dots">
                @foreach($packages as $package)
                <button type="button" aria-label="Lihat paket {{ $package->name }}" class="pkg-dot w-3 h-3 rounded-full bg-slate-300 hover:bg-slate-400 transition-all duration-300 cursor-pointer" data-index="{{ $loop->index }}"></button>
                @endforeach
            </div>

        </div>
        @else
        <div class="text-center py-20 bg-white rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 max-w-2xl mx-auto">
            <div class="w-24 h-24 bg-slate-50 rounded-full flex items-center justify-center mx-auto mb-6">
                <i class='bx bx-package text-5xl text-slate-300'></i>
            </div>
            <h3 class="text-2xl font-bold text-slate-800 mb-3">Paket Belum Tersedia</h3>
            <p class="text-slate-500 mb-8 max-w-md mx-auto">Saat ini kami sedang memperbarui daftar paket internet. Silakan kembali lagi nanti atau hubungi kami.</p>
            <a href="/hubungi-kami" class="inline-block py-3 px-8 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl transition-colors">Hubungi CS</a>
        </div>
        @endif
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
                        KENAPA LANCARWIFI?
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
                slideInterval = setInterval(goToNext, 5000);
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

        // =========================================================================
        // PACKAGE SHOWCASE CAROUSEL (Active Center-Focus Carousel)
        // =========================================================================
        const pkgTrack = document.getElementById('pkg-track');
        const pkgViewport = document.getElementById('pkg-viewport');
        const pkgPrevBtn = document.getElementById('pkg-prev-btn');
        const pkgNextBtn = document.getElementById('pkg-next-btn');
        const pkgDotsContainer = document.getElementById('pkg-dots');
        const pkgDots = pkgDotsContainer ? Array.from(pkgDotsContainer.children) : [];

        if (pkgTrack) {
            const origPkgCards = Array.from(pkgTrack.children);
            const totalPkgCount = origPkgCards.length;

            if (totalPkgCount > 0) {
                let activeIndex = 0; // Index in activeTrackCards
                let isCloned = false;
                let activeTrackCards = origPkgCards;

                // Find initial featured package index from data-is-featured
                const featuredOriginalIndex = origPkgCards.findIndex(card => card.getAttribute('data-is-featured') === '1');
                const defaultOrigTargetIndex = featuredOriginalIndex !== -1 ? featuredOriginalIndex : (totalPkgCount >= 2 ? 1 : 0);

                if (totalPkgCount > 1) {
                    isCloned = true;
                    // Prepend 4 sets and append 4 sets for a massive 9-set buffer (45 cards)
                    // This allows endless continuous clicking with zero boundary collision
                    const CLONE_SETS = 4;
                    const prependFrag = document.createDocumentFragment();
                    for (let s = 0; s < CLONE_SETS; s++) {
                        origPkgCards.forEach(card => {
                            const clone = card.cloneNode(true);
                            clone.classList.add('pkg-clone');
                            prependFrag.appendChild(clone);
                        });
                    }
                    pkgTrack.insertBefore(prependFrag, origPkgCards[0]);

                    const appendFrag = document.createDocumentFragment();
                    for (let s = 0; s < CLONE_SETS; s++) {
                        origPkgCards.forEach(card => {
                            const clone = card.cloneNode(true);
                            clone.classList.add('pkg-clone');
                            appendFrag.appendChild(clone);
                        });
                    }
                    pkgTrack.appendChild(appendFrag);

                    activeTrackCards = Array.from(pkgTrack.children);
                    // Start in the original middle set (index: 4 * totalPkgCount + initial target)
                    activeIndex = (CLONE_SETS * totalPkgCount) + defaultOrigTargetIndex;
                } else {
                    activeIndex = 0;
                }

                let isPkgAnimating = false;

                // Pure mathematical offset calculation using exact container width + gap
                const getPkgOffset = (targetIndex) => {
                    if (!pkgViewport || activeTrackCards.length === 0) return 0;
                    const vWidth = pkgViewport.clientWidth;
                    const firstCard = activeTrackCards[0];
                    if (!firstCard) return 0;

                    const cardWidth = firstCard.offsetWidth;
                    // Read actual CSS gap from track
                    const trackStyles = window.getComputedStyle(pkgTrack);
                    const gap = parseFloat(trackStyles.gap) || (trackStyles.columnGap ? parseFloat(trackStyles.columnGap) : 16);
                    const stride = cardWidth + gap;
                    const centerOffset = (vWidth - cardWidth) / 2;

                    return centerOffset - (targetIndex * stride);
                };

                const updatePkgVisuals = (activeIdx) => {
                    const realIndex = isCloned ? ((activeIdx % totalPkgCount + totalPkgCount) % totalPkgCount) : activeIdx;

                    activeTrackCards.forEach((card, i) => {
                        const distFromActive = Math.abs(i - activeIdx);
                        const isCenter = (distFromActive === 0);
                        const isSide = (distFromActive === 1);
                        const isEdge = (distFromActive >= 2);

                        // Position-only classes
                        card.classList.remove('is-active', 'is-side', 'is-edge', 'is-distant');

                        if (isCenter) {
                            card.classList.add('is-active');
                        } else if (isSide) {
                            card.classList.add('is-side');
                        } else if (isEdge) {
                            card.classList.add('is-edge');
                        }
                    });

                    // Update dots pagination indicator
                    pkgDots.forEach((dot, idx) => {
                        if (idx === realIndex) {
                            dot.classList.remove('bg-slate-300');
                            dot.classList.add('bg-blue-600', 'w-8');
                        } else {
                            dot.classList.remove('bg-blue-600', 'w-8');
                            dot.classList.add('bg-slate-300', 'w-3');
                        }
                    });
                };

                const goToPkgSlide = (targetIdx, immediate = false) => {
                    if (isPkgAnimating && !immediate) return;

                    if (!isCloned) {
                        if (targetIdx < 0) targetIdx = 0;
                        if (targetIdx >= totalPkgCount) targetIdx = totalPkgCount - 1;
                    }

                    // Update visual state for target index
                    updatePkgVisuals(targetIdx);
                    const targetX = getPkgOffset(targetIdx);

                    if (window.gsap && !immediate) {
                        isPkgAnimating = true;

                        gsap.to(pkgTrack, {
                            x: targetX,
                            duration: 0.48,
                            ease: 'power2.out',
                            onComplete: () => {
                                activeIndex = targetIdx;

                                if (isCloned) {
                                    // If activeIndex is reaching outer buffers (< 2*totalPkgCount or >= 7*totalPkgCount)
                                    // silently warp to middle set (4 * totalPkgCount + realIndex)
                                    if (activeIndex < 2 * totalPkgCount || activeIndex >= 7 * totalPkgCount) {
                                        const realIndex = ((activeIndex % totalPkgCount) + totalPkgCount) % totalPkgCount;
                                        activeIndex = (4 * totalPkgCount) + realIndex;
                                        updatePkgVisuals(activeIndex);
                                        gsap.set(pkgTrack, { x: getPkgOffset(activeIndex) });
                                    }
                                }
                                isPkgAnimating = false;
                            }
                        });
                    } else {
                        activeIndex = targetIdx;
                        updatePkgVisuals(targetIdx);
                        if (window.gsap) {
                            gsap.set(pkgTrack, { x: getPkgOffset(targetIdx) });
                        } else {
                            pkgTrack.style.transform = `translateX(${getPkgOffset(targetIdx)}px)`;
                        }
                        isPkgAnimating = false;
                    }
                };

                const pkgNext = () => {
                    if (isPkgAnimating) return;
                    if (isCloned) {
                        goToPkgSlide(activeIndex + 1);
                    } else {
                        const nextIdx = (activeIndex + 1) % totalPkgCount;
                        goToPkgSlide(nextIdx);
                    }
                };

                const pkgPrev = () => {
                    if (isPkgAnimating) return;
                    if (isCloned) {
                        goToPkgSlide(activeIndex - 1);
                    } else {
                        const prevIdx = (activeIndex - 1 + totalPkgCount) % totalPkgCount;
                        goToPkgSlide(prevIdx);
                    }
                };

                if (pkgNextBtn) pkgNextBtn.addEventListener('click', pkgNext);
                if (pkgPrevBtn) pkgPrevBtn.addEventListener('click', pkgPrev);

                // Clicking on any card makes it the active center card
                activeTrackCards.forEach((card, idx) => {
                    card.addEventListener('click', (e) => {
                        if (e.target.closest('a') || e.target.closest('button')) return;
                        if (idx !== activeIndex) {
                            goToPkgSlide(idx);
                        }
                    });
                });

                // Dot click
                pkgDots.forEach((dot, i) => {
                    dot.addEventListener('click', () => {
                        const targetIdx = isCloned ? (totalPkgCount + i) : i;
                        goToPkgSlide(targetIdx);
                    });
                });

                // Touch & Mouse Drag (Safe gesture detection that doesn't conflict with vertical scrolling)
                let isDragging = false;
                let startX = 0;
                let currentTranslateX = 0;
                let dragDistance = 0;
                let isHorizontalSwipe = null;
                let startY = 0;

                const onDragStart = (e) => {
                    if (isPkgAnimating) return;
                    isDragging = true;
                    startX = e.type.includes('touch') ? e.touches[0].clientX : e.clientX;
                    startY = e.type.includes('touch') ? e.touches[0].clientY : e.clientY;
                    dragDistance = 0;
                    isHorizontalSwipe = null;
                    currentTranslateX = getPkgOffset(activeIndex);
                };

                const onDragMove = (e) => {
                    if (!isDragging) return;
                    const currentX = e.type.includes('touch') ? e.touches[0].clientX : e.clientX;
                    const currentY = e.type.includes('touch') ? e.touches[0].clientY : e.clientY;
                    const diffX = currentX - startX;
                    const diffY = currentY - startY;

                    if (isHorizontalSwipe === null) {
                        if (Math.abs(diffX) > 8 || Math.abs(diffY) > 8) {
                            isHorizontalSwipe = Math.abs(diffX) > Math.abs(diffY);
                        }
                    }

                    if (isHorizontalSwipe) {
                        if (e.cancelable && e.type.includes('touch')) {
                            e.preventDefault();
                        }
                        dragDistance = diffX;
                        const newX = currentTranslateX + diffX;
                        if (window.gsap) {
                            gsap.set(pkgTrack, { x: newX });
                        } else {
                            pkgTrack.style.transform = `translateX(${newX}px)`;
                        }
                    }
                };

                const onDragEnd = () => {
                    if (!isDragging) return;
                    isDragging = false;
                    if (isHorizontalSwipe) {
                        const threshold = 40;
                        if (dragDistance < -threshold) {
                            pkgNext();
                        } else if (dragDistance > threshold) {
                            pkgPrev();
                        } else {
                            goToPkgSlide(activeIndex);
                        }
                    }
                    isHorizontalSwipe = null;
                    dragDistance = 0;
                };

                pkgTrack.addEventListener('mousedown', onDragStart);
                window.addEventListener('mousemove', onDragMove);
                window.addEventListener('mouseup', onDragEnd);

                pkgTrack.addEventListener('touchstart', onDragStart, { passive: true });
                pkgTrack.addEventListener('touchmove', onDragMove, { passive: false });
                pkgTrack.addEventListener('touchend', onDragEnd);

                // Window Resize Handler
                window.addEventListener('resize', () => {
                    goToPkgSlide(activeIndex, true);
                });

                // Initial alignment to center active card immediately
                setTimeout(() => {
                    goToPkgSlide(activeIndex, true);
                }, 50);
            }
        }

        // =========================================================================
        // FAQ Accordion Script
        // =========================================================================
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
