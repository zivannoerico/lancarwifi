@extends('layouts.app')

@section('title', 'Paket Internet - LancarWiFi')

@section('content')
<section class="py-24 bg-gradient-to-b from-slate-50 to-white relative overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute top-0 left-0 w-full h-96 bg-blue-600/5 rounded-b-[100px] -z-10"></div>
    <div class="absolute top-20 right-10 w-64 h-64 bg-cyan-400/10 rounded-full blur-3xl -z-10"></div>
    <div class="absolute bottom-20 left-10 w-72 h-72 bg-blue-600/10 rounded-full blur-3xl -z-10"></div>

    <div class="container mx-auto px-4 max-w-7xl relative z-10">
        <div class="text-center mb-20 max-w-2xl mx-auto">
            <span class="text-blue-600 font-semibold tracking-wider uppercase text-sm mb-2 block">Harga Transparan</span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-800 mb-6 tracking-tight">Pilih Paket <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500">Internetmu</span></h1>
            <p class="text-slate-500 text-lg leading-relaxed">Koneksi super cepat dan stabil untuk mendukung segala aktivitas digital di rumah maupun bisnis Anda. Tanpa batasan kuota.</p>
        </div>

        @if(isset($packages) && count($packages) > 0)
        <!-- Grid setup for 3 cards max horizontally -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12 max-w-6xl mx-auto items-center">
            @foreach($packages as $package)
            @php
                // Highlight the middle card (or 2nd card)
                $isPopular = $loop->iteration == 2;
            @endphp
            <div class="relative group rounded-3xl transition-all duration-300 {{ $isPopular ? 'md:scale-105 z-10' : 'hover:-translate-y-2' }}">
                
                @if($isPopular)
                <!-- Glow effect behind popular card -->
                <div class="absolute -inset-0.5 bg-gradient-to-r from-cyan-400 to-blue-600 rounded-3xl blur opacity-30 group-hover:opacity-60 transition duration-500"></div>
                @endif

                <div class="relative h-full flex flex-col p-8 sm:p-10 rounded-3xl {{ $isPopular ? 'bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 text-white shadow-2xl border-0' : 'bg-white text-slate-800 shadow-[0_8px_30px_rgb(0,0,0,0.06)] border border-slate-100' }}">
                    
                    @if($isPopular)
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <span class="bg-gradient-to-r from-cyan-400 to-blue-500 text-white font-bold px-6 py-1.5 rounded-full text-sm uppercase tracking-wider shadow-lg whitespace-nowrap">
                            Paling Laris
                        </span>
                    </div>
                    @endif

                    <div class="text-center pb-8 border-b {{ $isPopular ? 'border-white/20' : 'border-slate-100' }} mb-8">
                        <h3 class="text-xl font-bold mb-4 {{ $isPopular ? 'text-blue-100' : 'text-blue-600' }} uppercase tracking-wider">{{ $package->name }}</h3>
                        <div class="flex justify-center items-baseline mb-4">
                            <span class="text-6xl font-extrabold tracking-tight {{ $isPopular ? 'text-white' : 'text-slate-800' }}">{{ $package->speed }}</span>
                            <span class="text-xl font-medium ml-2 {{ $isPopular ? 'text-blue-200' : 'text-slate-500' }}">Mbps</span>
                        </div>
                        <div class="text-lg font-medium flex justify-center items-center gap-1 {{ $isPopular ? 'text-white' : 'text-slate-700' }}">
                            <span class="text-sm {{ $isPopular ? 'text-blue-200' : 'text-slate-400' }}">Rp</span> 
                            <span>{{ number_format($package->price, 0, ',', '.') }}</span> 
                            <span class="text-sm font-normal {{ $isPopular ? 'text-blue-200' : 'text-slate-400' }}">/ {{ $package->duration }}</span>
                        </div>
                    </div>
                    
                    <div class="flex-grow">
                        <ul class="space-y-5">
                            @if($package->features)
                                @php
                                    $features = is_array(json_decode($package->features, true)) ? json_decode($package->features, true) : explode(',', $package->features);
                                @endphp
                                @foreach($features as $feature)
                                <li class="flex items-start">
                                    <i class='bx bx-check-circle text-xl mr-3 shrink-0 mt-0.5 {{ $isPopular ? 'text-cyan-300' : 'text-blue-500' }}'></i>
                                    <span class="{{ $isPopular ? 'text-blue-50' : 'text-slate-600' }}">{{ trim($feature) }}</span>
                                </li>
                                @endforeach
                            @else
                                <li class="flex items-start">
                                    <i class='bx bx-check-circle text-xl mr-3 shrink-0 mt-0.5 {{ $isPopular ? 'text-cyan-300' : 'text-blue-500' }}'></i>
                                    <span class="{{ $isPopular ? 'text-blue-50' : 'text-slate-600' }}">Unlimited Kuota, Tanpa FUP</span>
                                </li>
                                <li class="flex items-start">
                                    <i class='bx bx-check-circle text-xl mr-3 shrink-0 mt-0.5 {{ $isPopular ? 'text-cyan-300' : 'text-blue-500' }}'></i>
                                    <span class="{{ $isPopular ? 'text-blue-50' : 'text-slate-600' }}">Peminjaman Router Gratis</span>
                                </li>
                                <li class="flex items-start">
                                    <i class='bx bx-check-circle text-xl mr-3 shrink-0 mt-0.5 {{ $isPopular ? 'text-cyan-300' : 'text-blue-500' }}'></i>
                                    <span class="{{ $isPopular ? 'text-blue-50' : 'text-slate-600' }}">Support 24/7 Hari</span>
                                </li>
                            @endif
                        </ul>
                    </div>
                    
                    <div class="mt-10">
                        <a href="/hubungi-kami" class="block w-full py-4 px-6 text-center font-bold rounded-2xl transition-all duration-300 transform hover:-translate-y-1 {{ $isPopular ? 'bg-white text-blue-700 hover:bg-slate-50 hover:shadow-xl' : 'bg-slate-50 text-blue-600 hover:bg-blue-600 hover:text-white border border-slate-200 hover:border-transparent' }}">
                            Pilih Paket Ini
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
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
@endsection
