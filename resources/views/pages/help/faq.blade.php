@extends('layouts.app')

@section('title', 'FAQ - LancarWiFi')

@section('content')
<section class="py-8">
    <div class="container">
        <div style="text-align: center; margin-bottom: 48px;">
            <h1 class="section-title">Frequently Asked Questions (FAQ)</h1>
            <p class="section-subtitle">Temukan jawaban atas pertanyaan yang paling sering diajukan seputar layanan LancarWiFi.</p>
        </div>

        <div style="max-width: 800px; margin: 0 auto;">
            @if(isset($faqs) && count($faqs) > 0)
                @foreach($faqs as $faq)
                <div class="card" style="margin-bottom: 16px; padding: 24px; cursor: pointer;" onclick="this.querySelector('.faq-answer').classList.toggle('active')">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <h4 style="margin: 0; font-size: 18px;">{{ $faq->question }}</h4>
                        <i class='bx bx-chevron-down' style="font-size: 24px;"></i>
                    </div>
                    <div class="faq-answer" style="margin-top: 16px; color: var(--color-text-muted); display: none;">
                        {{ $faq->answer }}
                    </div>
                </div>
                @endforeach
            @else
                <div class="card">
                    <h4 style="margin-bottom: 8px;">Bagaimana cara berlangganan LancarWiFi?</h4>
                    <p class="text-muted">Anda dapat menghubungi tim sales kami melalui halaman Hubungi Kami atau langsung mengisi form pada paket yang Anda inginkan.</p>
                </div>
                <div class="card mt-3">
                    <h4 style="margin-bottom: 8px;">Apakah ada biaya instalasi?</h4>
                    <p class="text-muted">Biaya instalasi bervariasi bergantung pada paket dan lokasi Anda. Terdapat promo gratis instalasi pada periode tertentu.</p>
                </div>
                <div class="card mt-3">
                    <h4 style="margin-bottom: 8px;">Berapa lama proses pemasangan?</h4>
                    <p class="text-muted">Jika lokasi Anda masuk dalam coverage area dan tiang fiber optic sudah tersedia, pemasangan memakan waktu maksimal 2x24 jam.</p>
                </div>
            @endif
        </div>
    </div>
</section>

<style>
    .faq-answer.active {
        display: block !important;
    }
</style>
@endsection
