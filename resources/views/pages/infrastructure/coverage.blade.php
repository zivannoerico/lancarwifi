@extends('layouts.app')

@section('title', 'Internet Coverage - LancarWiFi')

@section('content')
<section class="py-8">
    <div class="container">
        <div style="text-align: center; margin-bottom: 48px;">
            <h1 class="section-title">Area Layanan (Coverage)</h1>
            <p class="section-subtitle">Kami terus memperluas jaringan kami. Periksa apakah area Anda sudah terjangkau oleh jaringan fiber optic LancarWiFi.</p>
        </div>

        <div style="max-width: 800px; margin: 0 auto; margin-bottom: 48px;">
            <div style="display: flex; gap: 16px;">
                <input type="text" placeholder="Masukkan nama kecamatan atau kota Anda..." style="flex-grow: 1; padding: 12px 16px; border: 1px solid #CBD5E1; border-radius: var(--radius-md); font-size: 16px;">
                <button class="btn btn-primary" onclick="alert('Fitur pencarian sedang dalam tahap pengembangan.')">Cek Area</button>
            </div>
        </div>

        @if(isset($coverages) && count($coverages) > 0)
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px;">
            @foreach($coverages as $coverage)
            <div class="card" style="display: flex; align-items: center; justify-content: space-between;">
                <div>
                    <h4 style="margin-bottom: 4px;">{{ $coverage->area_name }}</h4>
                    @if($coverage->status == 'available')
                        <span style="font-size: 12px; font-weight: 600; color: var(--color-success); background: #D1FAE5; padding: 2px 8px; border-radius: 4px;">Tersedia</span>
                    @else
                        <span style="font-size: 12px; font-weight: 600; color: var(--color-warning); background: #FEF3C7; padding: 2px 8px; border-radius: 4px;">Segera Hadir</span>
                    @endif
                </div>
                <i class='bx bx-map-alt' style="font-size: 24px; color: var(--color-text-muted);"></i>
            </div>
            @endforeach
        </div>
        @else
        <div class="card text-center" style="max-width: 600px; margin: 0 auto;">
            <h3 style="margin-bottom: 16px;">Jaringan Kami Terus Berkembang</h3>
            <p class="text-muted">Saat ini kami melayani wilayah [Kota/Kabupaten Placeholder]. Silakan hubungi kami untuk informasi lebih akurat mengenai ketersediaan jaringan di alamat spesifik Anda.</p>
        </div>
        @endif
    </div>
</section>
@endsection
