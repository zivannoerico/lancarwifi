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
                        <a href="/hubungi-kami" class="flex items-center justify-center gap-2 w-full py-4 px-6 text-center font-bold rounded-2xl transition-all duration-300 transform group-hover:-translate-y-1 {{ $isPopular ? 'bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-400 hover:to-indigo-500 text-white shadow-[0_10px_20px_rgba(59,130,246,0.4)]' : 'bg-slate-900 text-white hover:bg-blue-600 hover:shadow-xl hover:shadow-blue-500/20' }}">
                            <span>Berlangganan Sekarang</span>
                            <i class='bx bx-right-arrow-alt text-xl group-hover:translate-x-1 transition-transform'></i>
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
