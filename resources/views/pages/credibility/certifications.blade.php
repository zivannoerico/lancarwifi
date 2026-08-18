@extends('layouts.app')

@section('title', 'Sertifikasi & Legalitas - LancarWiFi')

@section('content')
<section class="py-8">
    <div class="container">
        <div style="text-align: center; margin-bottom: 48px;">
            <h1 class="section-title">Sertifikasi & Legalitas</h1>
            <p class="section-subtitle">Kepercayaan Anda adalah prioritas kami. LancarWiFi beroperasi secara legal dan tersertifikasi oleh instansi yang berwenang.</p>
        </div>

        @if(isset($certifications) && count($certifications) > 0)
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 32px;">
            @foreach($certifications as $cert)
            <div class="card" style="text-align: center;">
                <i class='bx bx-check-shield' style="font-size: 48px; color: var(--color-primary); margin-bottom: 16px;"></i>
                <h3 style="margin-bottom: 8px;">{{ $cert->name }}</h3>
                @if($cert->document_url)
                <a href="{{ $cert->document_url }}" target="_blank" class="btn btn-secondary mt-3" style="padding: 8px 16px; font-size: 14px;">Lihat Dokumen</a>
                @endif
            </div>
            @endforeach
        </div>
        @else
        <div class="card text-center" style="max-width: 600px; margin: 0 auto; padding: 48px;">
            <i class='bx bx-certification' style="font-size: 64px; color: var(--color-text-muted); margin-bottom: 16px;"></i>
            <h3>Izin Resmi</h3>
            <p class="text-muted mt-2">LancarWiFi merupakan Penyelenggara Jasa Internet (ISP) yang telah memiliki izin resmi dari Kementerian Komunikasi dan Informatika (Kominfo).</p>
        </div>
        @endif
    </div>
</section>
@endsection
