@extends('layouts.app')

@section('title', 'LancarWiFi - Internet Lancar, Aktivitas Tanpa Batas')

@section('content')
<!-- Hero Section -->
<section style="background: linear-gradient(135deg, var(--color-primary-dark) 0%, var(--color-primary) 100%); color: white; padding: 120px 0; text-align: center;">
    <div class="container">
        <h1 style="font-size: 48px; margin-bottom: 24px; color: white;">Internet Lancar, Aktivitas Tanpa Batas.</h1>
        <p style="font-size: 20px; margin-bottom: 40px; color: rgba(255,255,255,0.9); max-width: 700px; margin-inline: auto;">Nikmati koneksi internet super cepat dan stabil untuk kebutuhan rumah dan bisnis Anda. Bersama LancarWiFi, semua jadi lebih mudah.</p>
        <div style="display: flex; gap: 16px; justify-content: center;">
            <a href="/paket" class="btn btn-secondary" style="background: white; border-color: white;">Lihat Paket</a>
            <a href="/hubungi-kami" class="btn btn-primary" style="background: var(--color-secondary); color: var(--color-text);">Hubungi Kami</a>
        </div>
    </div>
</section>

<!-- Keunggulan Section -->
<section class="py-12">
    <div class="container">
        <h2 class="section-title">Kenapa Memilih LancarWiFi?</h2>
        <p class="section-subtitle">Kami berkomitmen memberikan layanan terbaik dengan infrastruktur modern dan dukungan teknis yang handal.</p>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 32px;">
            <div class="card text-center">
                <i class='bx bx-rocket' style="font-size: 48px; color: var(--color-primary); margin-bottom: 16px;"></i>
                <h3>Koneksi Super Cepat</h3>
                <p class="mt-2 text-muted">Jaringan fiber optic yang memastikan kecepatan internet stabil di segala kondisi cuaca.</p>
            </div>
            <div class="card text-center">
                <i class='bx bx-support' style="font-size: 48px; color: var(--color-primary); margin-bottom: 16px;"></i>
                <h3>Dukungan 24/7</h3>
                <p class="mt-2 text-muted">Tim teknisi kami siap membantu Anda kapan saja jika terjadi kendala jaringan.</p>
            </div>
            <div class="card text-center">
                <i class='bx bx-wallet' style="font-size: 48px; color: var(--color-primary); margin-bottom: 16px;"></i>
                <h3>Harga Terjangkau</h3>
                <p class="mt-2 text-muted">Berbagai pilihan paket yang dapat disesuaikan dengan kebutuhan dan anggaran Anda.</p>
            </div>
        </div>
    </div>
</section>

<!-- Paket Singkat Section -->
<section class="py-12" style="background-color: white;">
    <div class="container text-center">
        <h2 class="section-title">Paket Internet Unggulan</h2>
        <p class="section-subtitle">Pilih paket yang paling sesuai dengan kebutuhan digital Anda saat ini.</p>
        
        <div style="display: flex; justify-content: center; margin-top: 40px;">
            <a href="/paket" class="btn btn-primary">Lihat Semua Paket Internet</a>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section style="background-color: var(--color-primary); padding: 80px 0; text-align: center; color: white;">
    <div class="container">
        <h2 style="color: white; margin-bottom: 24px;">Siap Beralih ke Koneksi yang Lebih Baik?</h2>
        <p style="margin-bottom: 32px; font-size: 18px; color: rgba(255,255,255,0.9);">Cek ketersediaan jaringan LancarWiFi di area Anda sekarang juga.</p>
        <a href="/infrastruktur/coverage" class="btn btn-secondary" style="background-color: white; border-color: white;">Cek Coverage Area</a>
    </div>
</section>
@endsection
