@extends('layouts.app')

@section('title', 'Layanan Colocation - LancarWiFi')

@section('content')
<section class="py-8">
    <div class="container">
        <div style="text-align: center; margin-bottom: 48px;">
            <h1 class="section-title">Layanan Colocation</h1>
            <p class="section-subtitle">Solusi penempatan server yang aman dan handal untuk mendukung infrastruktur IT bisnis Anda.</p>
        </div>

        <div class="card" style="max-width: 800px; margin: 0 auto;">
            @if(isset($colocation) && $colocation->value)
                {!! $colocation->value !!}
            @else
                <div style="text-align: center; padding: 40px;">
                    <i class='bx bx-server' style="font-size: 64px; color: var(--color-primary); margin-bottom: 24px;"></i>
                    <h3>Data Center Tier III</h3>
                    <p class="text-muted mt-3" style="max-width: 500px; margin-inline: auto;">
                        Fasilitas colocation LancarWiFi memberikan lingkungan yang aman, sistem pendingin optimal, dan daya cadangan untuk memastikan server Anda menyala 24/7 tanpa gangguan. 
                        Untuk penawaran dan spesifikasi lebih lanjut, silakan hubungi tim sales kami.
                    </p>
                    <a href="/hubungi-kami" class="btn btn-primary mt-4">Hubungi Sales</a>
                </div>
            @endif
        </div>
    </div>
</section>
@endsection
