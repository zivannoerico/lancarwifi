@extends('layouts.app')

@section('title', 'Paket Internet - LancarWiFi')

@section('content')
<section class="py-8" style="background-color: var(--color-background);">
    <div class="container">
        <div style="text-align: center; margin-bottom: 64px;">
            <h1 class="section-title">Pilihan Paket Internet</h1>
            <p class="section-subtitle">Kami menyediakan berbagai macam pilihan paket internet sesuai dengan kebutuhan rumah atau bisnis Anda dengan harga yang transparan.</p>
        </div>

        @if(isset($packages) && count($packages) > 0)
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 32px;">
            @foreach($packages as $package)
            <div class="card" style="display: flex; flex-direction: column;">
                <div style="text-align: center; padding-bottom: 24px; border-bottom: 1px solid #E2E8F0; margin-bottom: 24px;">
                    <h3 style="font-size: 24px; color: var(--color-primary); margin-bottom: 8px;">{{ $package->name }}</h3>
                    <div style="font-size: 36px; font-weight: 800; color: var(--color-text);">
                        {{ $package->speed }} <span style="font-size: 18px; font-weight: 600; color: var(--color-text-muted);">Mbps</span>
                    </div>
                    <div style="font-size: 18px; font-weight: 600; margin-top: 16px;">
                        Rp {{ number_format($package->price, 0, ',', '.') }} <span style="font-size: 14px; font-weight: 400; color: var(--color-text-muted);">/ {{ $package->duration }}</span>
                    </div>
                </div>
                <div style="flex-grow: 1;">
                    <ul style="list-style: none;">
                        @if($package->features)
                            @php
                                // Asumsi features disimpan sebagai array JSON atau dipisahkan koma
                                $features = is_array(json_decode($package->features, true)) ? json_decode($package->features, true) : explode(',', $package->features);
                            @endphp
                            @foreach($features as $feature)
                            <li style="display: flex; align-items: center; gap: 8px; margin-bottom: 12px; color: var(--color-text-muted);">
                                <i class='bx bx-check' style="color: var(--color-success); font-size: 20px;"></i>
                                {{ trim($feature) }}
                            </li>
                            @endforeach
                        @else
                            <li style="display: flex; align-items: center; gap: 8px; margin-bottom: 12px; color: var(--color-text-muted);">
                                <i class='bx bx-check' style="color: var(--color-success); font-size: 20px;"></i> Unlimited Kuota
                            </li>
                            <li style="display: flex; align-items: center; gap: 8px; margin-bottom: 12px; color: var(--color-text-muted);">
                                <i class='bx bx-check' style="color: var(--color-success); font-size: 20px;"></i> Router Gratis
                            </li>
                        @endif
                    </ul>
                </div>
                <div style="margin-top: 32px;">
                    <a href="/hubungi-kami" class="btn btn-primary" style="width: 100%;">Berlangganan Sekarang</a>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div style="text-align: center; padding: 64px 0;">
            <i class='bx bx-package' style="font-size: 64px; color: var(--color-text-muted); margin-bottom: 16px;"></i>
            <h3>Belum ada paket yang tersedia.</h3>
            <p class="text-muted">Silakan kembali lagi nanti atau hubungi customer service kami.</p>
        </div>
        @endif
    </div>
</section>
@endsection
