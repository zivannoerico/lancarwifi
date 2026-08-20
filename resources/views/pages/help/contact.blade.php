@extends('layouts.app')

@section('title', 'Hubungi Kami - LancarWiFi')

@section('content')
<!-- Hero Section -->
<section class="relative pt-24 pb-32 overflow-hidden bg-slate-900">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-900 via-slate-900 to-blue-900"></div>
        <!-- Animated glowing orbs -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500/20 rounded-full blur-[100px] animate-pulse mix-blend-screen"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-cyan-400/20 rounded-full blur-[100px] animate-pulse mix-blend-screen" style="animation-delay: 2s;"></div>
        <!-- Hexagon Pattern -->
        <div class="absolute inset-0 opacity-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTIwIDBsMjAgMTB2MjBsLTIwIDEwTDAgMzBWMTB6IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmYiIHN0cm9rZS13aWR0aD0iMSIvPjwvc3ZnPg==')]"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="mt-10     text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 tracking-tight">
            Hubungi <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Tim Kami</span>
        </h1>
        <p class="text-xl text-slate-300 max-w-2xl mx-auto font-light leading-relaxed">
            Punya pertanyaan seputar paket, butuh bantuan teknis, atau ingin berlangganan? Jangan ragu untuk menghubungi kami melalui saluran di bawah ini.
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="mt-10 relative z-20 pb-32 bg-slate-50">
    <div class="container mx-auto px-4 max-w-7xl -mt-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-stretch">
            
            <!-- Contact Information (Left Column) -->
            <div class="lg:col-span-5 flex flex-col gap-6 h-full">
                    <!-- WhatsApp Card -->
                    <div class="flex-1 bg-white rounded-[2rem] p-8 md:p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-xl transition-all duration-300 border border-slate-100 group relative overflow-hidden transform hover:-translate-y-1 flex flex-col justify-center">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-green-50 rounded-bl-[4rem] -z-10 group-hover:scale-125 transition-transform duration-700 ease-out"></div>
                        <div class="flex items-start gap-6">
                            <div class="w-16 h-16 bg-green-100 text-green-600 rounded-2xl flex items-center justify-center shrink-0 shadow-inner group-hover:bg-green-500 group-hover:text-white transition-colors duration-300 group-hover:rotate-6">
                                <i class='bx bxl-whatsapp text-4xl'></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-slate-800 mb-2">WhatsApp / Telp</h3>
                                <p class="text-slate-500 mb-4 leading-relaxed font-light">Hubungi CS kami untuk respon cepat dan solutif.</p>
                                <a href="#" class="inline-flex items-center text-green-600 font-bold hover:text-green-700 group/link">
                                    [Nomor Telepon / WA] <i class='bx bx-right-arrow-alt ml-1 text-xl group-hover/link:translate-x-1 transition-transform'></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Email Card -->
                    <div class="flex-1 bg-white rounded-[2rem] p-8 md:p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-xl transition-all duration-300 border border-slate-100 group relative overflow-hidden transform hover:-translate-y-1 flex flex-col justify-center">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50 rounded-bl-[4rem] -z-10 group-hover:scale-125 transition-transform duration-700 ease-out"></div>
                        <div class="flex items-start gap-6">
                            <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center shrink-0 shadow-inner group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300 group-hover:rotate-6">
                                <i class='bx bx-envelope text-3xl'></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-slate-800 mb-2">Email Support</h3>
                                <p class="text-slate-500 mb-4 leading-relaxed font-light">Kirimkan keluhan atau pertanyaan detail Anda.</p>
                                <a href="mailto:support@lancarwifi.com" class="inline-flex items-center text-blue-600 font-bold hover:text-blue-700 group/link">
                                    [Email Support] <i class='bx bx-right-arrow-alt ml-1 text-xl group-hover/link:translate-x-1 transition-transform'></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Address Card -->
                    <div class="flex-1 bg-white rounded-[2rem] p-8 md:p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-xl transition-all duration-300 border border-slate-100 group relative overflow-hidden transform hover:-translate-y-1 flex flex-col justify-center">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-indigo-50 rounded-bl-[4rem] -z-10 group-hover:scale-125 transition-transform duration-700 ease-out"></div>
                        <div class="flex items-start gap-6">
                            <div class="w-16 h-16 bg-indigo-100 text-indigo-600 rounded-2xl flex items-center justify-center shrink-0 shadow-inner group-hover:bg-indigo-600 group-hover:text-white transition-colors duration-300 group-hover:rotate-6">
                                <i class='bx bx-map-alt text-3xl'></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-slate-800 mb-2">Alamat Kantor</h3>
                                <p class="text-slate-500 mb-4 leading-relaxed font-light">[Alamat Lengkap Perusahaan, Kota, Kode Pos]</p>
                                <a href="#" class="inline-flex items-center text-indigo-600 font-bold hover:text-indigo-700 group/link">
                                    Lihat di Maps <i class='bx bx-right-arrow-alt ml-1 text-xl group-hover/link:translate-x-1 transition-transform'></i>
                                </a>
                            </div>
                        </div>
                    </div>
            </div>

            <!-- Contact Form (Right Column) -->
            <div class="lg:col-span-7 h-full">
                <div class="bg-white rounded-[2.5rem] p-8 md:p-12 shadow-[0_20px_50px_rgb(0,0,0,0.1)] border border-slate-100 relative overflow-hidden h-full flex flex-col">
                    <!-- Decorative accents -->
                    <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-blue-50 to-cyan-50 rounded-full blur-3xl -z-10 -mr-20 -mt-20"></div>
                    <div class="absolute bottom-0 left-0 w-64 h-64 bg-gradient-to-tr from-indigo-50 to-blue-50 rounded-full blur-3xl -z-10 -ml-20 -mb-20"></div>
                    
                    <div class="mb-10">
                        <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-inner">
                            <i class='bx bx-paper-plane text-3xl'></i>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-slate-800 mb-4 tracking-tight">Kirim Pesan Langsung</h2>
                        <p class="text-slate-500 text-lg font-light leading-relaxed">Isi formulir di bawah ini dan tim *Customer Success* kami akan segera menghubungi Anda kembali dengan solusi terbaik.</p>
                    </div>

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6 flex-grow flex flex-col">
                        @csrf

                        <!-- Flash Messages -->
                        @if(session('success'))
                            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Name -->
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-slate-700 uppercase tracking-widest">Nama Lengkap</label>
                                <div class="relative group/input">
                                    <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                                        <i class='bx bx-user text-slate-400 text-xl group-focus-within/input:text-blue-500 transition-colors'></i>
                                    </div>
                                    <input type="text" name="name" required placeholder="John Doe" class="w-full pl-14 pr-4 py-4 bg-slate-50 hover:bg-slate-100 border border-transparent focus:outline-none focus:ring-4 focus:ring-blue-500/10 focus:bg-white focus:border-blue-500 rounded-2xl transition-all text-slate-700 placeholder-slate-400 font-medium">
                                </div>
                            </div>
                            
                            <!-- Phone -->
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-slate-700 uppercase tracking-widest">Nomor Telepon/WA</label>
                                <div class="relative group/input">
                                    <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                                        <i class='bx bx-phone text-slate-400 text-xl group-focus-within/input:text-blue-500 transition-colors'></i>
                                    </div>
                                    <input type="text" name="phone" required placeholder="0812-xxxx-xxxx" class="w-full pl-14 pr-4 py-4 bg-slate-50 hover:bg-slate-100 border border-transparent focus:outline-none focus:ring-4 focus:ring-blue-500/10 focus:bg-white focus:border-blue-500 rounded-2xl transition-all text-slate-700 placeholder-slate-400 font-medium">
                                </div>
                            </div>
                        </div>

                        <!-- Subject -->
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-700 uppercase tracking-widest">Topik Pertanyaan</label>
                            <div class="relative group/input">
                                <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                                    <i class='bx bx-layer text-slate-400 text-xl group-focus-within/input:text-blue-500 transition-colors'></i>
                                </div>
                                <select name="subject" required class="w-full pl-14 pr-4 py-4 bg-slate-50 hover:bg-slate-100 border border-transparent focus:outline-none focus:ring-4 focus:ring-blue-500/10 focus:bg-white focus:border-blue-500 rounded-2xl transition-all text-slate-700 font-medium appearance-none cursor-pointer">
                                    <option value="" disabled selected>Pilih topik yang sesuai...</option>
                                    <option value="pemasangan">Info Pemasangan Baru</option>
                                    <option value="gangguan">Laporan Gangguan Teknis</option>
                                    <option value="tagihan">Info Tagihan & Pembayaran</option>
                                    <option value="lainnya">Pertanyaan Lainnya</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 pr-5 flex items-center pointer-events-none">
                                    <i class='bx bx-chevron-down text-slate-400 text-2xl'></i>
                                </div>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="space-y-2 flex-grow flex flex-col">
                            <label class="text-xs font-bold text-slate-700 uppercase tracking-widest">Pesan Anda</label>
                            <div class="relative flex-grow flex">
                                <div class="absolute top-5 left-0 pl-5 pointer-events-none">
                                    <i class='bx bx-message-detail text-slate-400 text-xl group-focus-within/input:text-blue-500 transition-colors'></i>
                                </div>
                                <textarea name="message" required placeholder="Ceritakan kebutuhan atau keluhan Anda secara detail di sini..." class="w-full h-full min-h-[150px] pl-14 pr-4 py-5 bg-slate-50 hover:bg-slate-100 border border-transparent focus:outline-none focus:ring-4 focus:ring-blue-500/10 focus:bg-white focus:border-blue-500 rounded-2xl transition-all text-slate-700 placeholder-slate-400 font-medium resize-none"></textarea>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-4 mt-auto">
                            <button type="submit" class="w-full py-5 px-8 bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white font-bold rounded-2xl transition-all duration-300 shadow-xl hover:shadow-blue-500/30 transform hover:-translate-y-1 flex items-center justify-center gap-3 text-lg group/btn">
                                <span>Kirim Pesan Sekarang</span>
                                <i class='bx bx-send text-2xl group-hover/btn:translate-x-1 group-hover:-translate-y-1 transition-transform'></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection
