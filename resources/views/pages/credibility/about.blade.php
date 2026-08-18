@extends('layouts.app')

@section('title', 'Tentang Kami - LancarWiFi')

@section('content')
<section class="py-12" style="background-color: var(--color-primary-dark); color: white;">
    <div class="container text-center">
        <h1 style="color: white; margin-bottom: 16px;">Tentang LancarWiFi</h1>
        <p style="font-size: 18px; color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto;">Penyedia layanan internet berdedikasi untuk menghubungkan masyarakat dan bisnis menuju era digital tanpa batas.</p>
    </div>
</section>

<section class="py-8">
    <div class="container">
        <div class="card" style="max-width: 900px; margin: 0 auto; padding: 48px;">
            @if(isset($about) && $about->value)
                {!! $about->value !!}
            @else
                <h2 style="margin-bottom: 24px;">Profil Perusahaan</h2>
                <p style="margin-bottom: 24px; color: var(--color-text-muted);">
                    LancarWiFi hadir sebagai solusi atas tingginya kebutuhan masyarakat akan koneksi internet yang cepat, stabil, dan terjangkau. 
                    Berawal dari komitmen untuk menghilangkan kesenjangan digital, kami terus membangun infrastruktur fiber optic modern di berbagai wilayah.
                </p>

                <h3 style="margin-top: 32px; margin-bottom: 16px;">Visi Kami</h3>
                <p style="margin-bottom: 24px; color: var(--color-text-muted);">
                    Menjadi penyedia layanan internet terdepan yang mendorong transformasi digital masyarakat Indonesia melalui infrastruktur handal dan pelayanan prima.
                </p>

                <h3 style="margin-top: 32px; margin-bottom: 16px;">Misi Kami</h3>
                <ul style="color: var(--color-text-muted); margin-left: 24px; margin-bottom: 24px;">
                    <li style="margin-bottom: 8px;">Menyediakan koneksi internet berkecepatan tinggi dengan harga terjangkau.</li>
                    <li style="margin-bottom: 8px;">Memperluas jangkauan jaringan hingga ke daerah-daerah berkembang.</li>
                    <li style="margin-bottom: 8px;">Memberikan pelayanan pelanggan (Customer Service) 24/7 yang responsif dan solutif.</li>
                    <li style="margin-bottom: 8px;">Berinovasi secara berkelanjutan dalam teknologi jaringan telekomunikasi.</li>
                </ul>
            @endif
        </div>
    </div>
</section>
@endsection
