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

            <!-- Navigation Controls -->
            <button class="absolute left-2 sm:left-4 top-1/2 -translate-y-1/2 w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-white hover:bg-slate-50 text-slate-900 flex items-center justify-center text-xl sm:text-2xl shadow-xl border border-slate-200 transition-transform hover:scale-110 z-20" id="carousel-prev" aria-label="Previous Slide">
                <i class='bx bx-chevron-left'></i>
            </button>
            <button class="absolute right-2 sm:right-4 top-1/2 -translate-y-1/2 w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-white hover:bg-slate-50 text-slate-900 flex items-center justify-center text-xl sm:text-2xl shadow-xl border border-slate-200 transition-transform hover:scale-110 z-20" id="carousel-next" aria-label="Next Slide">
                <i class='bx bx-chevron-right'></i>
            </button>
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
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">
            @if(isset($packages) && count($packages) > 0)
                @foreach($packages as $index => $package)
                    @php
                        $isFeatured = $index === 1 || $package->speed >= 50;
                        $featuresList = [];
                        if($package->features) {
                            $decoded = json_decode($package->features, true);
                            $featuresList = is_array($decoded) ? $decoded : explode(',', $package->features);
                        } else {
                            $featuresList = ['100% Fiber Optic Murni', 'True Unlimited (Tanpa FUP)', 'Gratis Router Wi-Fi 6', 'Gratis Biaya Pemasangan'];
                        }

                        $pkgDesc = 'Koneksi fiber optic berkualitas tinggi untuk kebutuhan internet rumah Anda.';
                        if (str_contains(strtolower($package->name), 'stream') || $package->speed <= 30) {
                            $pkgDesc = 'Cocok untuk penggunaan harian, browsing, belajar, dan streaming.';
                        } elseif (str_contains(strtolower($package->name), 'family') || ($package->speed > 30 && $package->speed <= 100)) {
                            $pkgDesc = 'Pilihan ideal untuk keluarga dengan banyak perangkat dan aktivitas online bersamaan.';
                        } elseif (str_contains(strtolower($package->name), 'ultimate') || $package->speed > 100) {
                            $pkgDesc = 'Untuk kebutuhan gaming, streaming, kerja, dan banyak perangkat.';
                        }
                    @endphp
                    <div class="bg-white border {{ $isFeatured ? 'border-2 border-brand-orange shadow-xl lg:-translate-y-2' : 'border-slate-200 shadow-sm hover:shadow-lg' }} rounded-2xl p-8 relative flex flex-col justify-between transition-all">
                        @if($isFeatured)
                            <div class="absolute -top-3.5 right-6 bg-brand-orange text-white px-4 py-1 rounded-full text-xs font-black tracking-wider uppercase shadow-md">PALING POPULER</div>
                        @endif
                        
                        <div class="space-y-6">
                            <div>
                                <h3 class="text-xl font-extrabold text-slate-900 mb-1">{{ $package->name }}</h3>
                                <p class="text-xs text-slate-500 mb-4">{{ $pkgDesc }}</p>
                                <div class="flex items-baseline gap-1 text-slate-900">
                                    <span class="text-4xl font-black text-slate-950">{{ $package->speed }}</span>
                                    <span class="text-lg font-bold text-slate-500">Mbps</span>
                                </div>
                            </div>

                            <div class="py-4 border-y border-slate-100">
                                <span class="text-sm font-bold text-slate-400">Rp</span>
                                <span class="text-3xl font-black text-slate-900">{{ number_format($package->price, 0, ',', '.') }}</span>
                                <span class="text-xs text-slate-500 font-medium">/{{ $package->duration ?? 'bulan' }}</span>
                            </div>

                            <ul class="space-y-3 text-sm text-slate-700 font-medium">
                                @foreach($featuresList as $feature)
                                    <li class="flex items-center gap-3">
                                        <i class='bx bx-check text-emerald-500 text-lg'></i> {{ trim($feature) }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="pt-8">
                            <a href="/hubungi-kami" class="w-full inline-flex justify-center items-center py-3.5 px-6 rounded-xl font-extrabold text-sm transition-all {{ $isFeatured ? 'bg-brand-orange hover:bg-amber-600 text-white shadow-md shadow-brand-orange/30' : 'bg-white border border-brand-blue text-brand-blue hover:bg-blue-50' }}">
                                Pilih Paket
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Fallback Packages -->
                <div class="bg-white border border-slate-200 rounded-2xl p-8 shadow-sm flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-xl font-extrabold text-slate-900 mb-1">Lancar Stream 30</h3>
                            <p class="text-xs text-slate-500">Cocok untuk penggunaan harian, browsing, belajar, dan streaming.</p>
                        </div>
                        <div class="flex items-baseline gap-1"><span class="text-4xl font-black text-slate-950">30</span><span class="text-lg font-bold text-slate-500">Mbps</span></div>
                        <div class="py-3 border-y border-slate-100"><span class="text-sm font-bold text-slate-400">Rp</span><span class="text-3xl font-black text-slate-900">175.000</span><span class="text-xs text-slate-500">/bulan</span></div>
                        <ul class="space-y-2.5 text-sm text-slate-700 font-medium">
                            <li class="flex items-center gap-2"><i class='bx bx-check text-emerald-500'></i> 100% Fiber Optic Murni</li>
                            <li class="flex items-center gap-2"><i class='bx bx-check text-emerald-500'></i> True Unlimited (Tanpa FUP)</li>
                            <li class="flex items-center gap-2"><i class='bx bx-check text-emerald-500'></i> Cocok untuk 1-3 Perangkat</li>
                        </ul>
                    </div>
                    <a href="/hubungi-kami" class="w-full inline-flex justify-center py-3 border border-brand-blue text-brand-blue hover:bg-blue-50 font-bold text-sm rounded-xl">Pilih Paket</a>
                </div>

                <div class="bg-white border-2 border-brand-orange rounded-2xl p-8 shadow-xl relative flex flex-col justify-between space-y-6 lg:-translate-y-2">
                    <div class="absolute -top-3.5 right-6 bg-brand-orange text-white px-4 py-1 rounded-full text-xs font-black">PALING POPULER</div>
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-xl font-extrabold text-slate-900 mb-1">Lancar Family 100</h3>
                            <p class="text-xs text-slate-500">Pilihan ideal untuk keluarga dengan banyak perangkat dan aktivitas online bersamaan.</p>
                        </div>
                        <div class="flex items-baseline gap-1"><span class="text-4xl font-black text-slate-950">100</span><span class="text-lg font-bold text-slate-500">Mbps</span></div>
                        <div class="py-3 border-y border-slate-100"><span class="text-sm font-bold text-slate-400">Rp</span><span class="text-3xl font-black text-slate-900">299.000</span><span class="text-xs text-slate-500">/bulan</span></div>
                        <ul class="space-y-2.5 text-sm text-slate-700 font-medium">
                            <li class="flex items-center gap-2"><i class='bx bx-check text-emerald-500'></i> Kecepatan Simetris 1:1</li>
                            <li class="flex items-center gap-2"><i class='bx bx-check text-emerald-500'></i> Cocok untuk 4-8 Perangkat</li>
                            <li class="flex items-center gap-2"><i class='bx bx-check text-emerald-500'></i> Gratis Wi-Fi 6 Router</li>
                        </ul>
                    </div>
                    <a href="/hubungi-kami" class="w-full inline-flex justify-center py-3 bg-brand-orange hover:bg-amber-600 text-white font-bold text-sm rounded-xl shadow-md">Pilih Paket</a>
                </div>

                <div class="bg-white border border-slate-200 rounded-2xl p-8 shadow-sm flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-xl font-extrabold text-slate-900 mb-1">Lancar Ultimate 250</h3>
                            <p class="text-xs text-slate-500">Untuk kebutuhan gaming, streaming, kerja, dan banyak perangkat.</p>
                        </div>
                        <div class="flex items-baseline gap-1"><span class="text-4xl font-black text-slate-950">250</span><span class="text-lg font-bold text-slate-500">Mbps</span></div>
                        <div class="py-3 border-y border-slate-100"><span class="text-sm font-bold text-slate-400">Rp</span><span class="text-3xl font-black text-slate-900">499.000</span><span class="text-xs text-slate-500">/bulan</span></div>
                        <ul class="space-y-2.5 text-sm text-slate-700 font-medium">
                            <li class="flex items-center gap-2"><i class='bx bx-check text-emerald-500'></i> Kecepatan Maksimal 250 Mbps</li>
                            <li class="flex items-center gap-2"><i class='bx bx-check text-emerald-500'></i> Dedicated Gaming Route</li>
                            <li class="flex items-center gap-2"><i class='bx bx-check text-emerald-500'></i> Support VIP 24/7</li>
                        </ul>
                    </div>
                    <a href="/hubungi-kami" class="w-full inline-flex justify-center py-3 border border-brand-blue text-brand-blue hover:bg-blue-50 font-bold text-sm rounded-xl">Pilih Paket</a>
                </div>
            @endif
        </div>
    </div>
</section>

<!-- 4. FULL-WIDTH HORIZONTAL PROMO BANNER SECTION -->
<section class="py-16 sm:py-20 lg:py-24 bg-white" id="promo">
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
</section>

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
<section class="py-20 sm:py-24 lg:py-28 bg-blue-50/70 border-y border-blue-100" id="coverage">
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
</section>

<!-- 7. FAQ ACCORDION (EDITORIAL ASYMMETRIC LAYOUT) -->
<section class="py-24 sm:py-28 lg:py-32 bg-white" id="faq">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
            <!-- Left: Editorial Sticky Heading -->
            <div class="lg:col-span-5 space-y-4">
                <div class="sticky top-28 space-y-4">
                    <span class="inline-block px-3.5 py-1 bg-slate-100 text-slate-800 text-xs font-black tracking-widest uppercase rounded-full">
                        PUSAT BANTUAN
                    </span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-950 tracking-tight leading-tight">
                        Pertanyaan yang sering ditanyakan.
                    </h2>
                    <p class="text-slate-600 text-base leading-relaxed">
                        Punya pertanyaan seputar cara pendaftaran, batas FUP, atau proses pemasangan internet? Temukan semua jawabannya di sini.
                    </p>
                </div>
            </div>

            <!-- Right: FAQ Accordion -->
            <div class="lg:col-span-7">
                <div class="space-y-4" id="faq-accordion">
                    @if(isset($faqs) && count($faqs) > 0)
                        @foreach($faqs as $index => $faq)
                            <div class="faq-item border border-slate-200 rounded-xl bg-white overflow-hidden shadow-sm transition-all cursor-pointer">
                                <div class="faq-header p-5 font-bold text-slate-900 text-base flex items-center justify-between">
                                    <span>{{ $faq->question }}</span>
                                    <i class='bx bx-chevron-down text-xl transition-transform duration-200'></i>
                                </div>
                                <div class="faq-body {{ $index === 0 ? '' : 'hidden' }} px-5 pb-5 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                                    <p>{{ $faq->answer }}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="faq-item border border-slate-200 rounded-xl bg-white overflow-hidden shadow-sm transition-all cursor-pointer">
                            <div class="faq-header p-5 font-bold text-slate-900 text-base flex items-center justify-between">
                                <span>Bagaimana cara mendaftar dan berlangganan LancarWiFi?</span>
                                <i class='bx bx-chevron-down text-xl transition-transform duration-200'></i>
                            </div>
                            <div class="faq-body px-5 pb-5 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                                <p>Anda dapat memilih paket pada halaman ini lalu menekan tombol "Pilih Paket" atau "Cek Lokasi Kamu". Tim kami akan memverifikasi area dan menjadwalkan pemasangan.</p>
                            </div>
                        </div>
                        <div class="faq-item border border-slate-200 rounded-xl bg-white overflow-hidden shadow-sm transition-all cursor-pointer">
                            <div class="faq-header p-5 font-bold text-slate-900 text-base flex items-center justify-between">
                                <span>Apakah ada batas FUP (Fair Usage Policy)?</span>
                                <i class='bx bx-chevron-down text-xl transition-transform duration-200'></i>
                            </div>
                            <div class="faq-body hidden px-5 pb-5 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                                <p>Tidak ada FUP sama sekali. Semua paket LancarWiFi bersifat True Unlimited dengan kecepatan konsisten tanpa batas kuota.</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

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

            // Autoplay (5 seconds)
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
