@extends('layouts.app')

@section('title', 'Hubungi Kami - LancarWiFi')

@section('content')
<section class="py-8" style="background-color: var(--color-background);">
    <div class="container">
        <div style="text-align: center; margin-bottom: 48px;">
            <h1 class="section-title">Hubungi Kami</h1>
            <p class="section-subtitle">Tim kami siap membantu Anda 24/7. Silakan hubungi kami melalui kontak di bawah ini.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 32px; max-width: 1000px; margin: 0 auto;">
            
            <div class="card" style="display: flex; flex-direction: column; justify-content: center;">
                @if(isset($contact) && $contact->value)
                    {!! $contact->value !!}
                @else
                    <h3 style="margin-bottom: 24px; padding-bottom: 16px; border-bottom: 1px solid #E2E8F0;">Informasi Kontak</h3>
                    
                    <div style="display: flex; align-items: flex-start; gap: 16px; margin-bottom: 24px;">
                        <div style="background-color: #E0F2FE; width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class='bx bxl-whatsapp' style="font-size: 24px; color: var(--color-primary);"></i>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 4px;">WhatsApp & Telepon</h4>
                            <p class="text-muted">[Nomor Telepon / WA]</p>
                        </div>
                    </div>

                    <div style="display: flex; align-items: flex-start; gap: 16px; margin-bottom: 24px;">
                        <div style="background-color: #E0F2FE; width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class='bx bx-envelope' style="font-size: 24px; color: var(--color-primary);"></i>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 4px;">Email</h4>
                            <p class="text-muted">[Email Support]</p>
                        </div>
                    </div>

                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                        <div style="background-color: #E0F2FE; width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class='bx bx-map' style="font-size: 24px; color: var(--color-primary);"></i>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 4px;">Alamat Kantor</h4>
                            <p class="text-muted">[Alamat Lengkap Perusahaan]</p>
                        </div>
                    </div>
                @endif
            </div>

            <div class="card">
                <h3 style="margin-bottom: 24px;">Kirim Pesan</h3>
                <form action="#" method="POST">
                    <div style="margin-bottom: 16px;">
                        <label style="display: block; margin-bottom: 8px; font-weight: 500;">Nama Lengkap</label>
                        <input type="text" placeholder="Masukkan nama Anda" style="width: 100%; padding: 12px; border: 1px solid #CBD5E1; border-radius: var(--radius-md); font-family: inherit;">
                    </div>
                    <div style="margin-bottom: 16px;">
                        <label style="display: block; margin-bottom: 8px; font-weight: 500;">Nomor Telepon/WA</label>
                        <input type="text" placeholder="Masukkan nomor telepon" style="width: 100%; padding: 12px; border: 1px solid #CBD5E1; border-radius: var(--radius-md); font-family: inherit;">
                    </div>
                    <div style="margin-bottom: 16px;">
                        <label style="display: block; margin-bottom: 8px; font-weight: 500;">Pesan</label>
                        <textarea rows="4" placeholder="Tuliskan pertanyaan atau keluhan Anda" style="width: 100%; padding: 12px; border: 1px solid #CBD5E1; border-radius: var(--radius-md); font-family: inherit; resize: vertical;"></textarea>
                    </div>
                    <button type="button" onclick="alert('Form disubmit! (Placeholder)')" class="btn btn-primary" style="width: 100%;">Kirim Pesan</button>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection
