@extends('layouts.admin')

@section('header', 'Dashboard Overview')

@section('content')
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
    
    <div class="card" style="display: flex; align-items: center; gap: 20px;">
        <div style="background-color: #E0F2FE; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
            <i class='bx bx-package' style="font-size: 32px; color: #0F52BA;"></i>
        </div>
        <div>
            <h3 style="font-size: 24px; margin-bottom: 4px;">{{ $stats['packages'] }}</h3>
            <p style="color: #64748B;">Total Paket</p>
        </div>
    </div>

    <div class="card" style="display: flex; align-items: center; gap: 20px;">
        <div style="background-color: #FEF3C7; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
            <i class='bx bx-question-mark' style="font-size: 32px; color: #D97706;"></i>
        </div>
        <div>
            <h3 style="font-size: 24px; margin-bottom: 4px;">{{ $stats['faqs'] }}</h3>
            <p style="color: #64748B;">Total FAQ</p>
        </div>
    </div>

    <div class="card" style="display: flex; align-items: center; gap: 20px;">
        <div style="background-color: #D1FAE5; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
            <i class='bx bx-map-alt' style="font-size: 32px; color: #059669;"></i>
        </div>
        <div>
            <h3 style="font-size: 24px; margin-bottom: 4px;">{{ $stats['coverages'] }}</h3>
            <p style="color: #64748B;">Area Coverage</p>
        </div>
    </div>

    <div class="card" style="display: flex; align-items: center; gap: 20px;">
        <div style="background-color: #FCE7F3; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
            <i class='bx bx-certification' style="font-size: 32px; color: #DB2777;"></i>
        </div>
        <div>
            <h3 style="font-size: 24px; margin-bottom: 4px;">{{ $stats['certifications'] }}</h3>
            <p style="color: #64748B;">Sertifikasi</p>
        </div>
    </div>

</div>

<div class="card" style="margin-top: 30px;">
    <h3>Selamat Datang di Admin Panel LancarWiFi</h3>
    <p style="color: #64748B; margin-top: 10px; line-height: 1.6;">
        Gunakan menu di sidebar sebelah kiri untuk mengelola konten website seperti penambahan paket internet, area coverage, dan informasi kredibilitas.
    </p>
</div>
@endsection
