@extends('layouts.app')

@section('title', 'Tentang Kami - LancarWiFi')

@section('content')
<!-- Hero Section -->
<section class="relative pt-24 pb-32 lg:pt-32 lg:pb-40 overflow-hidden bg-slate-900">
    <div class="absolute inset-0 z-0">
        <!-- Abstract gradient background for Hero -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-slate-900 to-indigo-900"></div>
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-blue-600/20 rounded-full blur-[150px] -translate-y-1/2 translate-x-1/3"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-cyan-500/10 rounded-full blur-[120px] translate-y-1/3 -translate-x-1/4"></div>
        <!-- Grid pattern overlay -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4wNSkiLz48L3N2Zz4=')]"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10 text-center">
        <span class="inline-block py-1 px-4 rounded-full bg-blue-500/20 border border-blue-400/30 text-cyan-300 font-semibold tracking-widest uppercase text-sm mb-6">Cerita Kami</span>
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-white mb-6 tracking-tight leading-tight">
            Menghubungkan Anda <br class="hidden md:block">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-400">Tanpa Batas.</span>
        </h1>
        <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto font-light leading-relaxed">
            LancarWiFi berdedikasi membangun jembatan digital bagi masyarakat dan bisnis menuju era konektivitas super cepat dan tak terbatas.
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="py-20 lg:py-32 bg-slate-50 relative -mt-10 rounded-t-[3rem] z-20 shadow-[0_-20px_50px_rgba(0,0,0,0.1)]">
    <div class="container mx-auto px-4 max-w-7xl">
        
        @if(isset($about) && $about->value)
            <!-- Dynamically injected content from CMS -->
            <div class="bg-white rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 p-8 md:p-16 max-w-4xl mx-auto prose prose-lg prose-blue prose-slate">
                {!! $about->value !!}
            </div>
        @else
            <!-- Fallback Beautiful Design -->
            
            <!-- Profil Perusahaan -->
            <div class="max-w-4xl mx-auto mb-24 text-center">
                <div class="w-20 h-20 bg-blue-100 text-blue-600 rounded-3xl flex items-center justify-center mx-auto mb-8 transform rotate-3 hover:rotate-6 transition-transform">
                    <i class='bx bx-buildings text-4xl'></i>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-8">Siapa Kami?</h2>
                <p class="text-xl text-slate-600 leading-relaxed font-light mb-16">
                    LancarWiFi hadir sebagai solusi atas tingginya kebutuhan masyarakat akan koneksi internet yang <strong class="text-blue-600 font-semibold">cepat, stabil, dan terjangkau</strong>. Berawal dari komitmen untuk menghilangkan kesenjangan digital, kami terus membangun infrastruktur fiber optic modern di berbagai wilayah, memastikan bahwa setiap rumah dan bisnis memiliki akses ke dunia digital kelas satu.
                </p>
                
                <!-- Quick Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 pt-10 border-t border-slate-100">
                    <div class="text-center">
                        <div class="text-4xl font-extrabold text-slate-800 mb-2">99.9%</div>
                        <div class="text-slate-500 font-medium">Uptime Guarantee</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-extrabold text-slate-800 mb-2">24/7</div>
                        <div class="text-slate-500 font-medium">Support Teknis</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-extrabold text-slate-800 mb-2">10+</div>
                        <div class="text-slate-500 font-medium">Kota Jangkauan</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-extrabold text-slate-800 mb-2">100%</div>
                        <div class="text-slate-500 font-medium">Fiber Optic</div>
                    </div>
                </div>
            </div>

            <!-- Visi & Misi Split Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-stretch">
                
                <!-- Visi Card (Left Side) -->
                <div class="lg:col-span-5 bg-gradient-to-br from-blue-600 to-indigo-700 rounded-[2.5rem] p-10 md:p-14 text-white shadow-xl flex flex-col justify-center relative overflow-hidden group">
                    <div class="absolute top-0 right-0 -mt-10 -mr-10 w-64 h-64 bg-white opacity-5 rounded-full blur-3xl group-hover:opacity-10 transition-opacity duration-500"></div>
                    <div class="absolute bottom-0 left-0 w-32 h-32 bg-cyan-400 opacity-20 rounded-full blur-2xl"></div>
                    
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center backdrop-blur-sm mb-8 border border-white/20">
                            <i class='bx bx-bullseye text-3xl text-cyan-300'></i>
                        </div>
                        <h3 class="text-4xl font-extrabold mb-6">Visi Kami</h3>
                        <p class="text-xl text-blue-100 leading-relaxed font-light">
                            "Menjadi penyedia layanan telekomunikasi terdepan yang mendorong transformasi digital masyarakat Indonesia melalui infrastruktur handal dan pelayanan prima berkelas dunia."
                        </p>
                    </div>
                </div>

                <!-- Misi Cards (Right Side) -->
                <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="sm:col-span-2 mb-2">
                        <h3 class="text-3xl font-bold text-slate-800">Misi Kami</h3>
                        <p class="text-slate-500 mt-2">Pilar utama yang menopang langkah kami setiap hari.</p>
                    </div>
                    
                    <!-- Misi Item 1 -->
                    <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm hover:shadow-lg transition-all duration-300 group">
                        <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <i class='bx bx-rocket text-2xl'></i>
                        </div>
                        <h4 class="text-lg font-bold text-slate-800 mb-2">Kecepatan Maksimal</h4>
                        <p class="text-slate-500 leading-relaxed">Menyediakan koneksi internet fiber optic berkecepatan tinggi dengan harga terjangkau bagi semua kalangan.</p>
                    </div>

                    <!-- Misi Item 2 -->
                    <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm hover:shadow-lg transition-all duration-300 group">
                        <div class="w-12 h-12 bg-cyan-50 text-cyan-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-cyan-500 group-hover:text-white transition-colors">
                            <i class='bx bx-map-alt text-2xl'></i>
                        </div>
                        <h4 class="text-lg font-bold text-slate-800 mb-2">Perluasan Jangkauan</h4>
                        <p class="text-slate-500 leading-relaxed">Memperluas jangkauan jaringan infrastruktur hingga ke daerah-daerah berkembang dan pinggiran.</p>
                    </div>

                    <!-- Misi Item 3 -->
                    <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm hover:shadow-lg transition-all duration-300 group">
                        <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                            <i class='bx bx-support text-2xl'></i>
                        </div>
                        <h4 class="text-lg font-bold text-slate-800 mb-2">Layanan Prima 24/7</h4>
                        <p class="text-slate-500 leading-relaxed">Memberikan pelayanan pelanggan (Customer Service) yang responsif, hangat, dan selalu solutif setiap saat.</p>
                    </div>

                    <!-- Misi Item 4 -->
                    <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm hover:shadow-lg transition-all duration-300 group">
                        <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-emerald-500 group-hover:text-white transition-colors">
                            <i class='bx bx-bulb text-2xl'></i>
                        </div>
                        <h4 class="text-lg font-bold text-slate-800 mb-2">Inovasi Berkelanjutan</h4>
                        <p class="text-slate-500 leading-relaxed">Berinovasi secara terus-menerus dalam mengadopsi teknologi jaringan telekomunikasi masa depan.</p>
                    </div>
                </div>
            </div>

        @endif
    </div>
</section>
@endsection
