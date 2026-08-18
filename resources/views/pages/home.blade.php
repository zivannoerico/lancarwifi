@extends('layouts.app')

@section('title', 'LancarWiFi - Internet Fiber Optic Ultra Cepat & Tanpa Batas')

@section('content')

<!-- 1. HERO — SIDE PEEKING PROMOTIONAL CAROUSEL BANNER -->
<section class="pt-24 sm:pt-28 pb-4 bg-white overflow-hidden">
    <div class="relative w-full" id="hero-carousel">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <!-- Carousel Outer Viewport Wrapper -->
            <div class="w-full overflow-hidden py-2" id="carousel-viewport">
                <div class="flex items-center gap-4 sm:gap-6 transition-transform duration-500 ease-out" id="carousel-track">
                    <!-- Slide 1 -->
                    <div class="carousel-slide slide-1 active w-[85%] sm:w-[78%] shrink-0 rounded-2xl overflow-hidden shadow-lg border border-slate-100 transition-all duration-500 scale-100 opacity-100">
                        <a href="#paket" class="block w-full">
                            <img src="{{ asset('images/hero-banner-1.jpg') }}" alt="LancarWiFi Fiber Ultra Fast Internet Banner" class="w-full h-56 sm:h-72 md:h-[330px] object-cover rounded-2xl">
                        </a>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-slide slide-2 w-[85%] sm:w-[78%] shrink-0 rounded-2xl overflow-hidden shadow-lg border border-slate-100 transition-all duration-500 scale-95 opacity-50">
                        <a href="#paket" class="block w-full">
                            <img src="{{ asset('images/hero-banner-2.jpg') }}" alt="LancarWiFi Pro Gamer Edition Banner" class="w-full h-56 sm:h-72 md:h-[330px] object-cover rounded-2xl">
                        </a>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-slide slide-3 w-[85%] sm:w-[78%] shrink-0 rounded-2xl overflow-hidden shadow-lg border border-slate-100 transition-all duration-500 scale-95 opacity-50">
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

<!-- 2. CATEGORY NAVIGATION -->
<section class="py-6 sm:py-8 bg-white border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-start lg:justify-center gap-6 sm:gap-10 overflow-x-auto pb-2 scrollbar-none">
            <a href="#paket" class="flex flex-col items-center gap-2 group min-w-[90px]">
                <div class="w-14 h-14 rounded-2xl bg-blue-50 text-brand-blue group-hover:bg-brand-blue group-hover:text-white flex items-center justify-center text-2xl transition-all shadow-sm">
                    <i class='bx bx-wifi'></i>
                </div>
                <span class="text-xs font-bold text-slate-800 group-hover:text-brand-blue whitespace-nowrap">Internet</span>
            </a>
            <a href="#paket" class="flex flex-col items-center gap-2 group min-w-[90px]">
                <div class="w-14 h-14 rounded-2xl bg-slate-100 text-brand-blue group-hover:bg-brand-blue group-hover:text-white flex items-center justify-center text-2xl transition-all shadow-sm">
                    <i class='bx bx-tv'></i>
                </div>
                <span class="text-xs font-bold text-slate-800 group-hover:text-brand-blue whitespace-nowrap">Internet + Streaming</span>
            </a>
            <a href="#paket" class="flex flex-col items-center gap-2 group min-w-[90px]">
                <div class="w-14 h-14 rounded-2xl bg-slate-100 text-brand-blue group-hover:bg-brand-blue group-hover:text-white flex items-center justify-center text-2xl transition-all shadow-sm">
                    <i class='bx bx-devices'></i>
                </div>
                <span class="text-xs font-bold text-slate-800 group-hover:text-brand-blue whitespace-nowrap">Internet + TV</span>
            </a>
            <a href="#paket" class="flex flex-col items-center gap-2 group min-w-[90px]">
                <div class="w-14 h-14 rounded-2xl bg-slate-100 text-brand-blue group-hover:bg-brand-blue group-hover:text-white flex items-center justify-center text-2xl transition-all shadow-sm">
                    <i class='bx bx-game'></i>
                </div>
                <span class="text-xs font-bold text-slate-800 group-hover:text-brand-blue whitespace-nowrap">Gamer</span>
            </a>
            <a href="#promo" class="flex flex-col items-center gap-2 group min-w-[90px]">
                <div class="w-14 h-14 rounded-2xl bg-slate-100 text-brand-blue group-hover:bg-brand-blue group-hover:text-white flex items-center justify-center text-2xl transition-all shadow-sm">
                    <i class='bx bx-gift'></i>
                </div>
                <span class="text-xs font-bold text-slate-800 group-hover:text-brand-blue whitespace-nowrap">Promo</span>
            </a>
            <a href="/speedtest" class="flex flex-col items-center gap-2 group min-w-[90px]">
                <div class="w-14 h-14 rounded-2xl bg-slate-100 text-brand-blue group-hover:bg-brand-blue group-hover:text-white flex items-center justify-center text-2xl transition-all shadow-sm">
                    <i class='bx bx-tachometer'></i>
                </div>
                <span class="text-xs font-bold text-slate-800 group-hover:text-brand-blue whitespace-nowrap">Speed Test</span>
            </a>
            <a href="/faq" class="flex flex-col items-center gap-2 group min-w-[90px]">
                <div class="w-14 h-14 rounded-2xl bg-slate-100 text-brand-blue group-hover:bg-brand-blue group-hover:text-white flex items-center justify-center text-2xl transition-all shadow-sm">
                    <i class='bx bx-headphone'></i>
                </div>
                <span class="text-xs font-bold text-slate-800 group-hover:text-brand-blue whitespace-nowrap">Bantuan</span>
            </a>
        </div>
    </div>
</section>

<!-- 3. ISP MARKETING SECTION -->
<section class="py-16 sm:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                Nikmati WiFi Internet Rumah <span class="text-brand-blue">#WifiTerbaik</span>
            </h2>
            <p class="text-slate-600 text-base sm:text-lg">
                Nikmati kebebasan berinternet dengan koneksi stabil, kecepatan simetris, dan kuota murni tanpa FUP untuk seluruh anggota keluarga.
            </p>
        </div>

        <div class="bg-slate-50 border border-slate-200 rounded-3xl p-8 sm:p-14 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-7 space-y-6">
                <span class="inline-block px-3.5 py-1 bg-blue-100 text-brand-blue text-xs font-extrabold rounded-full">Fiber Optic Technology</span>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 leading-snug">Kecepatan Simetris 1:1 Download & Upload</h3>
                <p class="text-slate-600 text-sm sm:text-base">Kirim file besar, streaming video 4K Ultra HD, dan meeting online tanpa pernah takut buffering atau putus koneksi.</p>
                <div class="flex flex-wrap gap-4 pt-2">
                    <div class="flex items-center gap-2 text-slate-900 font-bold text-sm">
                        <i class='bx bx-check-circle text-emerald-500 text-xl'></i> True Unlimited (Tanpa FUP)
                    </div>
                    <div class="flex items-center gap-2 text-slate-900 font-bold text-sm">
                        <i class='bx bx-check-circle text-emerald-500 text-xl'></i> Router Wi-Fi 6 Gratis
                    </div>
                    <div class="flex items-center gap-2 text-slate-900 font-bold text-sm">
                        <i class='bx bx-check-circle text-emerald-500 text-xl'></i> Bebas Biaya Instalasi
                    </div>
                </div>
                <div class="pt-4">
                    <a href="#paket" class="inline-flex items-center justify-center px-6 py-3 bg-slate-900 hover:bg-slate-800 text-white font-bold text-sm rounded-xl transition-all">
                        Lihat Paket Internet
                    </a>
                </div>
            </div>
            <div class="lg:col-span-5">
                <div class="bg-white rounded-2xl p-10 text-center border border-slate-200 shadow-sm space-y-3">
                    <i class='bx bx-wifi-0 text-7xl text-brand-blue block'></i>
                    <div class="text-slate-900 font-extrabold text-lg">500 Mbps Pure Fiber</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. PAKET INTERNET (PRICING GRID) -->
<section class="py-16 sm:py-20 bg-slate-50 border-t border-slate-200" id="paket">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">Pilih Paket Internet yang Cocok Untukmu</h2>
            <p class="text-slate-600 text-base sm:text-lg">Pilihan kecepatan dari rumah hingga bisnis dengan harga transparan tanpa biaya tersembunyi.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
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
                    @endphp
                    <div class="bg-white border {{ $isFeatured ? 'border-2 border-brand-orange shadow-xl scale-105' : 'border-slate-200 shadow-sm hover:shadow-lg' }} rounded-2xl p-8 relative flex flex-col justify-between transition-all">
                        @if($isFeatured)
                            <div class="absolute -top-3.5 right-6 bg-brand-orange text-white px-4 py-1 rounded-full text-xs font-black tracking-wider uppercase shadow-md">POPULER</div>
                        @endif
                        
                        <div class="space-y-6">
                            <div>
                                <h3 class="text-xl font-extrabold text-slate-900 mb-2">{{ $package->name }}</h3>
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
                        <h3 class="text-xl font-extrabold text-slate-900">Lancar Stream 30</h3>
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

                <div class="bg-white border-2 border-brand-orange rounded-2xl p-8 shadow-xl relative flex flex-col justify-between space-y-6">
                    <div class="absolute -top-3.5 right-6 bg-brand-orange text-white px-4 py-1 rounded-full text-xs font-black">POPULER</div>
                    <div class="space-y-4">
                        <h3 class="text-xl font-extrabold text-slate-900">Lancar Family 100</h3>
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
                        <h3 class="text-xl font-extrabold text-slate-900">Lancar Ultimate 250</h3>
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

<!-- 5. PROMO BANNER SECTION -->
<section class="py-12 bg-white" id="promo">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-slate-950 to-slate-900 rounded-3xl p-8 sm:p-14 text-white flex flex-col md:flex-row items-center justify-between gap-8 shadow-xl">
            <div class="space-y-3">
                <span class="inline-block px-3.5 py-1 bg-white/15 rounded-full text-xs font-bold text-amber-300">Promo Spesial</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white">Promo LancarWiFi — Internet makin lancar, harga makin hemat</h2>
                <p class="text-slate-300 text-sm sm:text-base">Nikmati berbagai diskon penawaran hemat bulanan dan bonus menarik untuk langganan rumah Anda.</p>
            </div>
            <div class="shrink-0">
                <a href="/hubungi-kami" class="inline-flex items-center justify-center px-8 py-3.5 bg-amber-400 hover:bg-amber-500 text-slate-950 font-extrabold text-base rounded-xl transition-all shadow-md">
                    Lihat Promo
                </a>
            </div>
        </div>
    </div>
</section>

<!-- 6. WHY LANCARWIFI (BENEFITS GRID) -->
<section class="py-16 sm:py-20 bg-slate-50 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">Kenapa Memilih LancarWiFi?</h2>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white border border-slate-200 rounded-2xl p-8 text-center space-y-3 shadow-sm">
                <i class='bx bx-rocket text-4xl text-brand-blue block'></i>
                <h4 class="text-lg font-bold text-slate-900">Internet Cepat</h4>
                <p class="text-sm text-slate-600">Upload dan download simetris tanpa penurunan kecepatan.</p>
            </div>
            <div class="bg-white border border-slate-200 rounded-2xl p-8 text-center space-y-3 shadow-sm">
                <i class='bx bx-infinite text-4xl text-brand-blue block'></i>
                <h4 class="text-lg font-bold text-slate-900">Internet Unlimited</h4>
                <p class="text-sm text-slate-600">Tanpa batas FUP, bebas berselancar sepuasnya setiap hari.</p>
            </div>
            <div class="bg-white border border-slate-200 rounded-2xl p-8 text-center space-y-3 shadow-sm">
                <i class='bx bx-cable text-4xl text-brand-blue block'></i>
                <h4 class="text-lg font-bold text-slate-900">Fiber Optic Murni</h4>
                <p class="text-sm text-slate-600">100% serat optik berkualitas tinggi tahan cuaca buruk.</p>
            </div>
            <div class="bg-white border border-slate-200 rounded-2xl p-8 text-center space-y-3 shadow-sm">
                <i class='bx bx-support text-4xl text-brand-blue block'></i>
                <h4 class="text-lg font-bold text-slate-900">Support Responsif</h4>
                <p class="text-sm text-slate-600">Tim penanganan teknis & CS siap membantu Anda 24 jam nonstop.</p>
            </div>
        </div>
    </div>
</section>

<!-- 7. COVERAGE CHECKER SECTION -->
<section class="py-16 sm:py-20 bg-white" id="coverage">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-blue-50 border border-blue-200 rounded-3xl p-8 sm:p-14 text-center max-w-4xl mx-auto space-y-6 shadow-sm">
            <h2 class="text-2xl sm:text-3xl font-black text-slate-900">Cek Apakah LancarWiFi Sudah Tersedia di Lokasimu</h2>
            <p class="text-slate-600 text-sm sm:text-base max-w-2xl mx-auto">Masukkan nama kota atau kecamatan tempat tinggalmu untuk mengetahui titik jaringan terdekat.</p>
            
            <form action="/infrastruktur/coverage" method="GET" class="flex flex-col sm:flex-row gap-3 max-w-xl mx-auto pt-2">
                <input type="text" name="location" placeholder="Masukkan alamat / kota tempat tinggalmu..." required class="flex-1 px-5 py-3.5 rounded-xl border border-slate-300 text-slate-900 text-sm focus:outline-none focus:border-brand-blue">
                <button type="submit" class="px-7 py-3.5 bg-brand-orange hover:bg-amber-600 text-white font-extrabold text-sm rounded-xl shadow-md transition-all">
                    CEK LOKASI KAMU
                </button>
            </form>
        </div>
    </div>
</section>

<!-- 8. FAQ ACCORDION SECTION -->
<section class="py-16 sm:py-20 bg-white border-t border-slate-100" id="faq">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">Pertanyaan Sering Diajukan (FAQ)</h2>
        </div>

        <div class="max-w-4xl mx-auto space-y-4" id="faq-accordion">
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
</section>

<!-- CAROUSEL & ACCORDION JS SCRIPT -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Carousel Script (Center Peeking Mode)
        const track = document.getElementById('carousel-track');
        const viewport = document.getElementById('carousel-viewport');
        const slides = Array.from(track ? track.children : []);
        const nextBtn = document.getElementById('carousel-next');
        const prevBtn = document.getElementById('carousel-prev');
        const dotsNav = document.getElementById('carousel-dots');
        const dots = dotsNav ? Array.from(dotsNav.children) : [];

        if (track && slides.length > 0) {
            let currentIndex = 0;
            let slideInterval;

            const updateCarousel = (index) => {
                const viewportWidth = viewport ? viewport.clientWidth : 0;
                const total = slides.length;
                if (total === 0) return;

                const activeSlide = slides[index];
                const prevIndex = (index - 1 + total) % total;
                const nextIndex = (index + 1) % total;

                // Infinite loop: Assign flex order [prev, current, next]
                slides[prevIndex].style.order = 1;
                slides[index].style.order = 2;
                slides[nextIndex].style.order = 3;

                // Position any extra slides if total > 3
                for (let i = 0; i < total; i++) {
                    if (i !== index && i !== prevIndex && i !== nextIndex) {
                        slides[i].style.order = 4;
                    }
                }

                // Calculate constant offset to center the active slide (order:2) inside viewport
                const slideWidth = activeSlide.offsetWidth;
                const gap = window.innerWidth >= 640 ? 24 : 16;
                const offset = (viewportWidth - slideWidth) / 2 - (slideWidth + gap);

                track.style.transform = `translateX(${offset}px)`;

                slides.forEach((slide, i) => {
                    if (i === index) {
                        slide.classList.add('scale-100', 'opacity-100', 'active');
                        slide.classList.remove('scale-95', 'opacity-50');
                    } else {
                        slide.classList.remove('scale-100', 'opacity-100', 'active');
                        slide.classList.add('scale-95', 'opacity-50');
                    }
                });

                dots.forEach((dot, i) => {
                    if (i === index) {
                        dot.classList.add('w-5', 'bg-brand-blue');
                        dot.classList.remove('w-2', 'bg-slate-300');
                    } else {
                        dot.classList.remove('w-5', 'bg-brand-blue');
                        dot.classList.add('w-2', 'bg-slate-300');
                    }
                });

                currentIndex = index;
            };

            const nextSlide = () => {
                let nextIndex = (currentIndex + 1) % slides.length;
                updateCarousel(nextIndex);
            };

            const prevSlide = () => {
                let prevIndex = (currentIndex - 1 + slides.length) % slides.length;
                updateCarousel(prevIndex);
            };

            if (nextBtn) nextBtn.addEventListener('click', nextSlide);
            if (prevBtn) prevBtn.addEventListener('click', prevSlide);

            dots.forEach((dot, i) => {
                dot.addEventListener('click', () => updateCarousel(i));
            });

            window.addEventListener('resize', () => updateCarousel(currentIndex));

            // Autoplay (5 seconds)
            const startAutoplay = () => {
                slideInterval = setInterval(nextSlide, 5000);
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
            setTimeout(() => updateCarousel(0), 100);
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
