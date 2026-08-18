@extends('layouts.app')

@section('title', 'FAQ - LancarWiFi')

@section('content')
<!-- Hero Section -->
<section class="relative pt-24 pb-32 overflow-hidden bg-slate-900">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-b from-blue-900 to-slate-900"></div>
        <div class="absolute top-0 inset-x-0 h-px bg-gradient-to-r from-transparent via-blue-500 to-transparent opacity-50"></div>
        <!-- Decorative grid -->
        <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(#3b82f6 1.5px, transparent 1.5px), linear-gradient(90deg, #3b82f6 1.5px, transparent 1.5px); background-size: 40px 40px;"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10 text-center">
        <div class="w-20 h-20 bg-blue-500/20 text-blue-400 rounded-3xl flex items-center justify-center mx-auto mb-8 backdrop-blur-md border border-blue-400/30 transform -rotate-3 hover:rotate-0 transition-transform duration-300">
            <i class='bx bx-message-rounded-dots text-4xl'></i>
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 tracking-tight">
            Frequently Asked <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-400">Questions</span>
        </h1>
        <p class="text-xl text-slate-300 max-w-2xl mx-auto font-light leading-relaxed">
            Temukan jawaban cepat atas pertanyaan yang paling sering diajukan seputar layanan, paket, dan dukungan teknis LancarWiFi.
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="relative z-20 pb-32 bg-slate-50">
    <div class="container mx-auto px-4 max-w-4xl -mt-16">
        
        <div class="bg-white rounded-[2.5rem] p-8 md:p-12 shadow-[0_20px_50px_rgb(0,0,0,0.05)] border border-slate-100">
            <div class="space-y-4">
                @if(isset($faqs) && count($faqs) > 0)
                    @foreach($faqs as $faq)
                    <div class="group border border-slate-200 rounded-2xl overflow-hidden transition-all duration-300 hover:border-blue-300 hover:shadow-md bg-slate-50 hover:bg-white">
                        <button class="faq-toggle w-full px-6 py-5 flex items-center justify-between focus:outline-none" onclick="toggleFaq(this)">
                            <h4 class="text-lg font-bold text-slate-800 text-left pr-4 group-hover:text-blue-600 transition-colors">{{ $faq->question }}</h4>
                            <div class="w-10 h-10 rounded-full bg-white border border-slate-200 text-slate-500 flex items-center justify-center shrink-0 transition-all duration-300 faq-icon group-hover:border-blue-200 group-hover:bg-blue-50 group-hover:text-blue-600">
                                <i class='bx bx-plus text-xl'></i>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-6 pb-6 pt-2 text-slate-600 leading-relaxed font-light">
                                {{ $faq->answer }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <!-- Fallback Content -->
                    <div class="group border border-slate-200 rounded-2xl overflow-hidden transition-all duration-300 hover:border-blue-300 hover:shadow-md bg-slate-50 hover:bg-white">
                        <button class="faq-toggle w-full px-6 py-5 flex items-center justify-between focus:outline-none" onclick="toggleFaq(this)">
                            <h4 class="text-lg font-bold text-slate-800 text-left pr-4 group-hover:text-blue-600 transition-colors">Bagaimana cara berlangganan LancarWiFi?</h4>
                            <div class="w-10 h-10 rounded-full bg-white border border-slate-200 text-slate-500 flex items-center justify-center shrink-0 transition-all duration-300 faq-icon group-hover:border-blue-200 group-hover:bg-blue-50 group-hover:text-blue-600">
                                <i class='bx bx-plus text-xl'></i>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-6 pb-6 pt-2 text-slate-600 leading-relaxed font-light">
                                Anda dapat menghubungi tim sales kami melalui halaman <a href="/hubungi-kami" class="text-blue-600 font-semibold hover:underline">Hubungi Kami</a> atau langsung mengisi form pendaftaran pada paket internet yang Anda inginkan.
                            </div>
                        </div>
                    </div>

                    <div class="group border border-slate-200 rounded-2xl overflow-hidden transition-all duration-300 hover:border-blue-300 hover:shadow-md bg-slate-50 hover:bg-white">
                        <button class="faq-toggle w-full px-6 py-5 flex items-center justify-between focus:outline-none" onclick="toggleFaq(this)">
                            <h4 class="text-lg font-bold text-slate-800 text-left pr-4 group-hover:text-blue-600 transition-colors">Apakah ada biaya instalasi?</h4>
                            <div class="w-10 h-10 rounded-full bg-white border border-slate-200 text-slate-500 flex items-center justify-center shrink-0 transition-all duration-300 faq-icon group-hover:border-blue-200 group-hover:bg-blue-50 group-hover:text-blue-600">
                                <i class='bx bx-plus text-xl'></i>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-6 pb-6 pt-2 text-slate-600 leading-relaxed font-light">
                                Biaya instalasi bervariasi bergantung pada paket dan rincian lokasi Anda. Terdapat promo <strong class="font-semibold text-slate-800">Gratis Instalasi</strong> pada periode dan paket-paket tertentu yang sedang berjalan.
                            </div>
                        </div>
                    </div>

                    <div class="group border border-slate-200 rounded-2xl overflow-hidden transition-all duration-300 hover:border-blue-300 hover:shadow-md bg-slate-50 hover:bg-white">
                        <button class="faq-toggle w-full px-6 py-5 flex items-center justify-between focus:outline-none" onclick="toggleFaq(this)">
                            <h4 class="text-lg font-bold text-slate-800 text-left pr-4 group-hover:text-blue-600 transition-colors">Berapa lama proses pemasangan?</h4>
                            <div class="w-10 h-10 rounded-full bg-white border border-slate-200 text-slate-500 flex items-center justify-center shrink-0 transition-all duration-300 faq-icon group-hover:border-blue-200 group-hover:bg-blue-50 group-hover:text-blue-600">
                                <i class='bx bx-plus text-xl'></i>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="px-6 pb-6 pt-2 text-slate-600 leading-relaxed font-light">
                                Jika lokasi Anda masuk dalam <em>coverage area</em> dan tiang jaringan fiber optic kami sudah tersedia di sekitar sana, proses pemasangan normalnya memakan waktu maksimal <strong>2x24 jam kerja</strong> setelah pembayaran administrasi awal diselesaikan.
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <!-- Call to action Banner -->
        <div class="mt-16 bg-gradient-to-r from-blue-600 to-indigo-700 rounded-[2.5rem] p-10 md:p-14 text-center shadow-2xl relative overflow-hidden">
            <!-- Decorative light bursts -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-10 rounded-full blur-3xl -mr-20 -mt-20 pointer-events-none"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-cyan-400 opacity-20 rounded-full blur-3xl -ml-20 -mb-20 pointer-events-none"></div>
            
            <div class="relative z-10 flex flex-col items-center">
                <div class="w-16 h-16 bg-white/10 rounded-full flex items-center justify-center mb-6 border border-white/20 backdrop-blur-sm">
                    <i class='bx bx-headphone text-3xl text-cyan-300'></i>
                </div>
                <h3 class="text-3xl md:text-4xl font-extrabold text-white mb-4 tracking-tight">Belum menemukan jawaban?</h3>
                <p class="text-blue-100 mb-10 max-w-xl mx-auto text-lg font-light leading-relaxed">
                    Jangan sungkan. Tim *Customer Success* kami selalu standby dan siap membantu Anda kapan pun Anda membutuhkannya.
                </p>
                <a href="/hubungi-kami" class="inline-flex items-center justify-center px-8 py-4 bg-white text-blue-600 hover:bg-slate-50 font-bold rounded-xl transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1 group">
                    Hubungi Kami Sekarang <i class='bx bx-right-arrow-alt ml-2 text-2xl group-hover:translate-x-1 transition-transform'></i>
                </a>
            </div>
        </div>
        
    </div>
</section>

<!-- Custom Vanilla JS for Smooth Accordion -->
<script>
    function toggleFaq(button) {
        const content = button.nextElementSibling;
        const icon = button.querySelector('.faq-icon');
        const iconBx = icon.querySelector('i');
        const parentDiv = button.parentElement;
        
        // Close all other FAQs
        document.querySelectorAll('.faq-content').forEach(el => {
            if (el !== content) {
                el.style.maxHeight = null;
                const prevBtn = el.previousElementSibling;
                const prevIconBx = prevBtn.querySelector('.faq-icon i');
                const prevIcon = prevBtn.querySelector('.faq-icon');
                
                prevIconBx.classList.replace('bx-minus', 'bx-plus');
                prevIcon.classList.remove('rotate-90', 'bg-blue-600', 'text-white', 'border-blue-600');
                el.parentElement.classList.remove('border-blue-300', 'shadow-md', 'bg-white');
                el.parentElement.classList.add('bg-slate-50');
            }
        });

        // Toggle current FAQ
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
            iconBx.classList.replace('bx-minus', 'bx-plus');
            icon.classList.remove('rotate-90', 'bg-blue-600', 'text-white', 'border-blue-600');
            parentDiv.classList.remove('border-blue-300', 'shadow-md', 'bg-white');
            parentDiv.classList.add('bg-slate-50');
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
            iconBx.classList.replace('bx-plus', 'bx-minus');
            icon.classList.add('rotate-90', 'bg-blue-600', 'text-white', 'border-blue-600');
            parentDiv.classList.add('border-blue-300', 'shadow-md', 'bg-white');
            parentDiv.classList.remove('bg-slate-50');
        }
    }
</script>
@endsection
