@extends('layouts.app')

@section('title', 'Speedtest - LancarWiFi')

@section('content')
<section class="py-8" style="background-color: var(--color-background); min-height: calc(100vh - 80px - 300px);">
    <div class="container text-center">
        <h1 class="section-title">Speedtest</h1>
        <p class="section-subtitle">Ukur kecepatan koneksi internet Anda saat ini.</p>

        <div class="card" style="max-width: 600px; margin: 0 auto; padding: 48px;">
            <div style="background-color: #F1F5F9; border-radius: 50%; width: 200px; height: 200px; display: flex; align-items: center; justify-content: center; margin: 0 auto; margin-bottom: 32px; border: 4px solid var(--color-primary-light);">
                <i class='bx bx-tachometer' style="font-size: 80px; color: var(--color-primary);"></i>
            </div>
            
            <h3 style="margin-bottom: 16px;">Siap Mengukur Kecepatan?</h3>
            <p class="text-muted" style="margin-bottom: 32px;">Fitur speedtest sedang dalam tahap integrasi dengan API speedtest. Server sedang dipersiapkan untuk pengukuran akurat.</p>
            
            <button class="btn btn-primary" onclick="alert('API Speedtest belum terintegrasi.')" style="padding: 16px 48px; font-size: 18px;">Mulai Test</button>
        </div>
    </div>
</section>
@endsection
