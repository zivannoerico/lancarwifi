@extends('layouts.app')

@section('title', 'Internet Coverage - LancarWiFi')

@section('content')
<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

<style>
    /* Full Coverage App Layout */
    .coverage-page {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 100vh;
        max-height: 100vh;
        margin-top: 0;
        background: #f8fafc;
        overflow: hidden;
    }

    @media (min-width: 1024px) {
        .coverage-page {
            flex-direction: row;
        }
    }

    /* 1. TRUE GLASS SIDEBAR (Translucent Frosted Glass with Map Visible Behind) */
    .coverage-sidebar {
        position: relative;
        width: 100%;
        padding-top: 92px;
        padding-bottom: 24px;
        padding-left: 20px;
        padding-right: 20px;
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(20px) saturate(140%);
        -webkit-backdrop-filter: blur(20px) saturate(140%);
        border-right: 1px solid rgba(255, 255, 255, 0.25);
        box-shadow: 4px 0 30px rgba(0, 0, 0, 0.08);
        color: #0f172a;
        display: flex;
        flex-direction: column;
        z-index: 500;
    }

    @media (min-width: 1024px) {
        .coverage-sidebar {
            width: 350px;
            min-width: 350px;
            max-width: 350px;
            height: 100%;
            overflow-y: auto;
            flex-shrink: 0;
        }
    }

    /* Subtle Glass Highlight */
    .coverage-sidebar::before {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        background: linear-gradient(
            135deg,
            rgba(255, 255, 255, 0.35),
            rgba(255, 255, 255, 0.05) 45%,
            rgba(255, 255, 255, 0.02)
        );
        opacity: 0.35;
        z-index: 0;
    }

    .sidebar-content-wrapper {
        position: relative;
        z-index: 1;
    }

    /* Map fills background and entire area */
    .map-container {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        z-index: 10;
        background: #e2e8f0;
    }

    @media (max-width: 1023px) {
        .map-container {
            position: relative;
            height: 420px;
            inset: auto;
        }
    }

    #coverage-map {
        width: 100%;
        height: 100%;
    }

    /* Glass Elements */
    .glass-input {
        background: rgba(255, 255, 255, 0.22) !important;
        border: 1px solid rgba(255, 255, 255, 0.45) !important;
        backdrop-filter: blur(10px) !important;
        -webkit-backdrop-filter: blur(10px) !important;
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.35) !important;
        border-radius: 10px !important;
        color: #0f172a !important;
        transition: all 180ms ease !important;
    }
    .glass-input::placeholder {
        color: rgba(15, 23, 42, 0.55) !important;
    }
    .glass-input:focus {
        background: rgba(255, 255, 255, 0.35) !important;
        border-color: rgba(37, 99, 235, 0.55) !important;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.10), inset 0 1px 0 rgba(255, 255, 255, 0.4) !important;
    }

    .glass-btn-primary {
        background: linear-gradient(135deg, #2563eb, #06b6d4);
        color: white;
        border: none;
        box-shadow: 0 4px 14px rgba(37, 99, 235, 0.25);
        transition: all 180ms ease;
    }
    .glass-btn-primary:hover {
        filter: brightness(1.08);
        transform: translateY(-1px);
        box-shadow: 0 6px 18px rgba(37, 99, 235, 0.35);
    }

    .glass-btn-secondary {
        background: rgba(255, 255, 255, 0.20);
        border: 1px solid rgba(255, 255, 255, 0.45);
        color: #0f172a;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        transition: all 180ms ease;
    }
    .glass-btn-secondary:hover {
        background: rgba(255, 255, 255, 0.35);
        border-color: rgba(37, 99, 235, 0.35);
        transform: translateY(-1px);
    }

    .glass-panel-status {
        background: rgba(255, 255, 255, 0.14);
        border: 1px solid rgba(255, 255, 255, 0.35);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.25), 0 2px 10px rgba(0, 0, 0, 0.02);
        border-radius: 12px;
    }

    .glass-panel-info {
        background: rgba(59, 130, 246, 0.10);
        border: 1px solid rgba(59, 130, 246, 0.25);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border-radius: 12px;
    }

    /* Glass List Item */
    .glass-list-item {
        background: rgba(255, 255, 255, 0.12);
        border: 1px solid rgba(255, 255, 255, 0.32);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(15, 23, 42, 0.04);
        transition: all 180ms ease;
    }
    .glass-list-item:hover {
        background: rgba(255, 255, 255, 0.25);
        border-color: rgba(37, 99, 235, 0.25);
        transform: translateX(2px);
    }

    /* Status dot subtle glows */
    .dot-glow-green {
        background: #10b981;
        box-shadow: 0 0 8px rgba(16, 185, 129, 0.6);
    }
    .dot-glow-amber {
        background: #f59e0b;
        box-shadow: 0 0 8px rgba(245, 158, 11, 0.6);
    }
    .dot-glow-red {
        background: #ef4444;
        box-shadow: 0 0 8px rgba(239, 68, 68, 0.6);
    }

    /* Custom Leaflet Popup Light/Glass */
    .leaflet-popup-content-wrapper {
        border-radius: 1rem !important;
        padding: 0.25rem !important;
        box-shadow: 0 20px 30px -10px rgba(15, 23, 42, 0.2) !important;
        border: 1px solid rgba(255, 255, 255, 0.8) !important;
        background: rgba(255, 255, 255, 0.95) !important;
        backdrop-filter: blur(12px) !important;
        -webkit-backdrop-filter: blur(12px) !important;
        color: #0f172a !important;
    }
    .leaflet-popup-content {
        margin: 0.85rem 1rem !important;
        line-height: 1.4 !important;
        font-family: inherit !important;
    }
    .leaflet-popup-tip {
        background: rgba(255, 255, 255, 0.95) !important;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1) !important;
    }

    /* Pulsing user location radar marker */
    .user-pulse-marker {
        position: relative;
        width: 20px;
        height: 20px;
        background: #0284c7;
        border: 3px solid #ffffff;
        border-radius: 50%;
        box-shadow: 0 0 15px rgba(2, 132, 199, 0.8);
    }
    .user-pulse-marker::after {
        content: '';
        position: absolute;
        top: -6px;
        left: -6px;
        width: 26px;
        height: 26px;
        border-radius: 50%;
        background: rgba(2, 132, 199, 0.4);
        animation: radar-pulse 2s infinite ease-out;
        pointer-events: none;
    }
    @keyframes radar-pulse {
        0% { transform: scale(0.6); opacity: 1; }
        100% { transform: scale(2.2); opacity: 0; }
    }

    /* Custom Scrollbar for Sidebar */
    .sidebar-scrollbar::-webkit-scrollbar {
        width: 5px;
    }
    .sidebar-scrollbar::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.05);
    }
    .sidebar-scrollbar::-webkit-scrollbar-thumb {
        background: rgba(15, 23, 42, 0.15);
        border-radius: 6px;
    }
    .sidebar-scrollbar::-webkit-scrollbar-thumb:hover {
        background: rgba(37, 99, 235, 0.35);
    }
</style>

<!-- Coverage Main Page Layout -->
<div class="coverage-page">
    
    <!-- 1. LEFT SIDEBAR (Fixed 350px width, True Frosted Glassmorphism) -->
    <aside class="coverage-sidebar sidebar-scrollbar p-5 flex flex-col justify-between">
        
        <div class="sidebar-content-wrapper space-y-5">
            <!-- Header -->
            <div>
               
                <h1 class="text-xl sm:text-2xl font-extrabold text-[#0f172a] tracking-tight leading-tight">Cek Area Jaringan</h1>
                <p class="text-[rgba(15,23,42,0.68)] text-xs mt-1.5 leading-relaxed font-normal">
                    Lihat apakah lokasi Anda tercover oleh jaringan Fiber Optic LancarWiFi.
                </p>
            </div>

            <!-- Search Section -->
            <div class="space-y-2.5">
                <label class="block text-[10px] font-bold text-[rgba(15,23,42,0.65)] uppercase tracking-wider">Cari Lokasi</label>
                
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-500">
                        <i class='bx bx-search text-base'></i>
                    </div>
                    <input 
                        type="text" 
                        id="coverage-search-input" 
                        placeholder="Masukkan alamat, kecamatan, kota..." 
                        class="glass-input w-full pl-9 pr-3 py-2.5 text-xs font-semibold text-[#0f172a] outline-none"
                    >
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                    <button 
                        type="button" 
                        id="btn-check-availability" 
                        class="glass-btn-primary w-full py-2 px-2.5 text-[11px] font-bold rounded-xl flex items-center justify-center gap-1.5 active:scale-95"
                    >
                        <i class='bx bx-search-alt-2 text-sm'></i>
                        <span>Cek Ketersediaan</span>
                    </button>
                    
                    <button 
                        type="button" 
                        id="btn-use-my-location" 
                        class="glass-btn-secondary w-full py-2 px-2.5 text-[11px] font-bold rounded-xl flex items-center justify-center gap-1.5 active:scale-95"
                    >
                        <i class='bx bx-current-location text-sm text-blue-600'></i>
                        <span>Gunakan Lokasi Saya</span>
                    </button>
                </div>
            </div>

            <!-- Network Status Legend (Glass Panel) -->
            <div class="glass-panel-status p-3">
                <div class="text-[10px] font-bold text-[rgba(15,23,42,0.60)] uppercase tracking-wider mb-2">Status Jaringan</div>
                <div class="flex items-center justify-between text-[11px] font-semibold text-[#334155]">
                    <span class="inline-flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full dot-glow-green"></span> Tersedia
                    </span>
                    <span class="inline-flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full dot-glow-amber"></span> Perencanaan
                    </span>
                    <span class="inline-flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full dot-glow-red"></span> Maintenance
                    </span>
                </div>
            </div>

            <!-- Dynamic Coverage Result Box -->
            <div id="coverage-result-box" class="transition-all duration-300">
                <!-- Initial Hint (Blue-tinted Glass) -->
                <div id="result-initial" class="glass-panel-info p-3 text-[#0f172a] flex items-start gap-2.5">
                    <i class='bx bx-info-circle text-lg text-blue-600 shrink-0 mt-0.5'></i>
                    <div class="text-[11px] leading-relaxed text-[#1e293b]">
                        <strong class="font-bold text-[#0f172a] block mb-0.5">Pilih Area atau Lokasi</strong>
                        Klik wilayah di daftar bawah atau gunakan tombol lokasi untuk memeriksa jangkauan fiber optic.
                    </div>
                </div>

                <!-- Result AVAILABLE -->
                <div id="result-available" class="hidden p-3.5 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-950 space-y-2.5 backdrop-blur-md">
                    <div class="flex items-start gap-2.5">
                        <div class="w-7 h-7 rounded-lg bg-emerald-500/20 text-emerald-700 flex items-center justify-center shrink-0 border border-emerald-500/30">
                            <i class='bx bx-check-circle text-lg'></i>
                        </div>
                        <div>
                            <h4 class="text-xs font-extrabold text-emerald-900">✓ Jaringan Tersedia</h4>
                            <p class="text-[11px] text-emerald-800 mt-0.5" id="available-area-text">LancarWiFi tersedia di lokasi kamu.</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between text-[10px] font-bold text-emerald-800 bg-emerald-500/15 py-1 px-2.5 rounded border border-emerald-500/20">
                        <span>Fiber Optic 100%</span>
                        <span>Internet Unlimited</span>
                    </div>
                    <a href="/paket" class="w-full py-2 px-3 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs rounded-lg transition-all shadow-md shadow-emerald-600/20 flex items-center justify-center gap-1.5">
                        <span>Lihat Paket Internet</span>
                        <i class='bx bx-right-arrow-alt text-base'></i>
                    </a>
                </div>

                <!-- Result NOT AVAILABLE -->
                <div id="result-not-available" class="hidden p-3.5 rounded-xl bg-amber-500/10 border border-amber-500/30 text-amber-950 space-y-2.5 backdrop-blur-md">
                    <div class="flex items-start gap-2.5">
                        <div class="w-7 h-7 rounded-lg bg-amber-500/20 text-amber-700 flex items-center justify-center shrink-0 border border-amber-500/30">
                            <i class='bx bx-map-pin text-lg'></i>
                        </div>
                        <div>
                            <h4 class="text-xs font-extrabold text-amber-900">Belum Tersedia</h4>
                            <p class="text-[11px] text-amber-800 mt-0.5">Area ini belum terjangkau jaringan LancarWiFi.</p>
                        </div>
                    </div>
                    <p class="text-[11px] text-amber-900 leading-relaxed font-normal">
                        Ajukan request jangkauan agar tim infrastruktur kami segera memprioritaskan area Anda.
                    </p>
                    <a href="/hubungi-kami" class="w-full py-2 px-3 bg-amber-600 hover:bg-amber-700 text-white font-bold text-xs rounded-lg transition-all shadow-md shadow-amber-600/20 flex items-center justify-center gap-1.5">
                        <span>Ajukan Request Coverage</span>
                        <i class='bx bx-send text-sm'></i>
                    </a>
                </div>

                <!-- Result MAINTENANCE -->
                <div id="result-maintenance" class="hidden p-3.5 rounded-xl bg-red-500/10 border border-red-500/30 text-red-950 space-y-2.5 backdrop-blur-md">
                    <div class="flex items-start gap-2.5">
                        <div class="w-7 h-7 rounded-lg bg-red-500/20 text-red-700 flex items-center justify-center shrink-0 border border-red-500/30">
                            <i class='bx bx-error text-lg'></i>
                        </div>
                        <div>
                            <h4 class="text-xs font-extrabold text-red-900">⚠ Maintenance Jaringan</h4>
                            <p class="text-[11px] text-red-800 mt-0.5" id="maintenance-area-text">Area sedang dalam pemeliharaan jaringan.</p>
                        </div>
                    </div>
                    <a href="/hubungi-kami" class="w-full py-2 px-3 bg-red-600 hover:bg-red-700 text-white font-bold text-xs rounded-lg transition-all flex items-center justify-center gap-1.5">
                        <span>Hubungi Support</span>
                        <i class='bx bx-support text-sm'></i>
                    </a>
                </div>
            </div>

            <!-- Coverage Areas List (Frosted Glass List Items) -->
            <div class="space-y-2">
                <div class="flex items-center justify-between">
                    <h3 class="text-[10px] font-bold text-[rgba(15,23,42,0.65)] uppercase tracking-wider">Coverage Areas</h3>
                    <span class="text-[10px] font-bold text-slate-500" id="coverage-count-text">Memuat...</span>
                </div>

                <div id="coverage-items-list" class="space-y-1.5 max-h-[200px] lg:max-h-[250px] overflow-y-auto pr-1 sidebar-scrollbar">
                    <!-- Items rendered dynamically by JS -->
                </div>
            </div>
        </div>

        <!-- 10. BOTTOM REQUEST AREA -->
        <div class="sidebar-content-wrapper pt-3.5 mt-4 border-t border-[rgba(255,255,255,0.35)] bg-[rgba(255,255,255,0.05)] rounded-lg p-2 flex items-center justify-between text-[11px]">
            <span class="text-[rgba(15,23,42,0.65)] font-medium">Lokasi belum tercover?</span>
            <a href="/hubungi-kami" class="text-[#0891b2] hover:text-[#0284c7] font-bold inline-flex items-center gap-0.5 transition-colors">
                <span>Request Penarikan Jaringan</span>
                <i class='bx bx-chevron-right text-sm'></i>
            </a>
        </div>

    </aside>

    <!-- 2. FULL MAP BEHIND AND RIGHT (Edge-to-Edge) -->
    <main class="map-container">
        <div id="coverage-map"></div>

        <!-- Floating Map Custom Controls (Top-Right) -->
        <div class="absolute top-24 right-4 z-[450] flex flex-col gap-2">
            <button type="button" id="btn-map-zoom-in" title="Perbesar Peta" class="w-9 h-9 bg-white/90 hover:bg-white text-[#0f172a] rounded-lg shadow-lg border border-slate-200/80 flex items-center justify-center text-lg font-bold transition-all transform hover:scale-105 active:scale-95 backdrop-blur-md">
                <i class='bx bx-plus'></i>
            </button>
            <button type="button" id="btn-map-zoom-out" title="Perkecil Peta" class="w-9 h-9 bg-white/90 hover:bg-white text-[#0f172a] rounded-lg shadow-lg border border-slate-200/80 flex items-center justify-center text-lg font-bold transition-all transform hover:scale-105 active:scale-95 backdrop-blur-md">
                <i class='bx bx-minus'></i>
            </button>
            <button type="button" id="btn-map-reset" title="Reset View" class="w-9 h-9 bg-white/90 hover:bg-white text-slate-700 hover:text-blue-600 rounded-lg shadow-lg border border-slate-200/80 flex items-center justify-center text-lg transition-all transform hover:scale-105 active:scale-95 backdrop-blur-md">
                <i class='bx bx-reset'></i>
            </button>
            <button type="button" id="btn-map-locate" title="Deteksi Lokasi Saya" class="w-9 h-9 bg-white/90 hover:bg-white text-blue-600 hover:text-blue-700 rounded-lg shadow-lg border border-blue-200 flex items-center justify-center text-lg transition-all transform hover:scale-105 active:scale-95 backdrop-blur-md">
                <i class='bx bx-target-lock'></i>
            </button>
        </div>
    </main>

</div>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // 1. Initial Data Source: Existing database coverages or fallback real district coordinates
    const dbCoverages = @json(isset($coverages) ? $coverages : []);
    
    // Default real geographic coordinates for typical service zones (Jombang & surroundings)
    const defaultCoverageData = [
        {
            id: 'c1',
            area_name: 'Kec. Jombang',
            region: 'Jombang',
            status: 'available', // available | planned | maintenance
            lat: -7.5460,
            lng: 112.2330,
            radius: 3200
        },
        {
            id: 'c2',
            area_name: 'Kec. Diwek',
            region: 'Jombang',
            status: 'available',
            lat: -7.5925,
            lng: 112.2312,
            radius: 2800
        },
        {
            id: 'c3',
            area_name: 'Kec. Peterongan',
            region: 'Jombang',
            status: 'available',
            lat: -7.5385,
            lng: 112.2810,
            radius: 2600
        },
        {
            id: 'c4',
            area_name: 'Kec. Sumobito',
            region: 'Jombang',
            status: 'planned',
            lat: -7.5255,
            lng: 112.3385,
            radius: 2400
        },
        {
            id: 'c5',
            area_name: 'Kec. Tembelang',
            region: 'Jombang',
            status: 'planned',
            lat: -7.4890,
            lng: 112.2380,
            radius: 2500
        },
        {
            id: 'c6',
            area_name: 'Kec. Ploso',
            region: 'Jombang',
            status: 'maintenance',
            lat: -7.4580,
            lng: 112.2150,
            radius: 2200
        }
    ];

    // Combine with DB data if DB has entries
    let coverageAreas = [];
    if (Array.isArray(dbCoverages) && dbCoverages.length > 0) {
        coverageAreas = dbCoverages.map((item, idx) => {
            let matched = defaultCoverageData.find(d => d.area_name.toLowerCase() === item.area_name.toLowerCase());
            let lat = item.latitude ? parseFloat(item.latitude) : (matched ? matched.lat : -7.5460 + (idx * 0.02));
            let lng = item.longitude ? parseFloat(item.longitude) : (matched ? matched.lng : 112.2330 + (idx * 0.02));
            let radius = item.radius ? parseInt(item.radius) : (matched ? matched.radius : 2500);
            let region = item.region ? item.region : (matched ? matched.region : 'Jombang');
            return {
                id: item.id || 'db_' + idx,
                area_name: item.area_name,
                region: region,
                status: item.status || 'available',
                lat: lat,
                lng: lng,
                radius: radius
            };
        });
    } else {
        coverageAreas = defaultCoverageData;
    }

    // Default map center (center to first area if exists, else Jombang)
    const defaultCenter = (coverageAreas.length > 0 && coverageAreas[0].lat && coverageAreas[0].lng)
        ? [coverageAreas[0].lat, coverageAreas[0].lng]
        : [-7.5460, 112.2330];
    const defaultZoom = 12;

    // 2. Initialize Leaflet Map
    const map = L.map('coverage-map', {
        zoomControl: false,
        attributionControl: true
    }).setView(defaultCenter, defaultZoom);

    // OpenStreetMap Tile Layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // 9. Translucent Glass Badges based on status
    const statusConfig = {
        available: {
            color: '#10b981',
            label: 'READY',
            badgeStyle: 'background: rgba(16,185,129,0.12); color: #059669; border: 1px solid rgba(16,185,129,0.25);',
            dotClass: 'dot-glow-green'
        },
        planned: {
            color: '#f59e0b',
            label: 'PLANNED',
            badgeStyle: 'background: rgba(245,158,11,0.12); color: #d97706; border: 1px solid rgba(245,158,11,0.25);',
            dotClass: 'dot-glow-amber'
        },
        maintenance: {
            color: '#ef4444',
            label: 'MAINTENANCE',
            badgeStyle: 'background: rgba(239,68,68,0.12); color: #dc2626; border: 1px solid rgba(239,68,68,0.25);',
            dotClass: 'dot-glow-red'
        }
    };

    // Store references to map layers and markers
    const areaLayers = {};
    let userMarker = null;

    // 3. Render Coverage Zones and Markers
    coverageAreas.forEach(area => {
        const conf = statusConfig[area.status] || statusConfig.available;

        // Leaflet Coverage Circle
        const circle = L.circle([area.lat, area.lng], {
            radius: area.radius,
            color: conf.color,
            fillColor: conf.color,
            fillOpacity: 0.18,
            weight: 2
        }).addTo(map);

        // Custom Leaflet Marker Icon
        const markerHtml = `
            <div style="transform: translate(-50%, -50%); display: flex; align-items: center; justify-content: center;">
                <div style="width: 32px; height: 32px; background: #ffffff; border: 2px solid ${conf.color}; border-radius: 10px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(0,0,0,0.15); font-size: 16px; color: ${conf.color};">
                    <i class='bx bx-broadcast'></i>
                </div>
            </div>
        `;
        const customIcon = L.divIcon({
            html: markerHtml,
            className: 'coverage-custom-icon',
            iconSize: [32, 32],
            iconAnchor: [16, 16]
        });

        const marker = L.marker([area.lat, area.lng], { icon: customIcon }).addTo(map);

        // Popup Content
        const popupContent = `
            <div style="font-family: inherit; min-width: 170px;">
                <div style="font-size: 10px; font-weight: 800; text-transform: uppercase; color: #64748B; margin-bottom: 2px;">Area Coverage</div>
                <div style="font-size: 14px; font-weight: 800; color: #0F172A; margin-bottom: 5px;">${area.area_name}</div>
                <div style="display: inline-flex; align-items: center; gap: 4px; padding: 2px 7px; border-radius: 9999px; font-size: 10px; font-weight: 700; ${conf.badgeStyle} margin-bottom: 8px;">
                    <span style="width: 5px; height: 5px; border-radius: 50%; background: ${conf.color};"></span>
                    ${conf.label}
                </div>
                <div>
                    <a href="${area.status === 'available' ? '/paket' : '/hubungi-kami'}" style="display: block; width: 100%; text-align: center; background: ${area.status === 'available' ? '#0284c7' : '#475569'}; color: #ffffff; padding: 5px 10px; border-radius: 6px; font-size: 11px; font-weight: 700; text-decoration: none;">
                        ${area.status === 'available' ? 'Lihat Paket' : 'Hubungi Kami'}
                    </a>
                </div>
            </div>
        `;
        marker.bindPopup(popupContent);

        marker.on('click', () => {
            selectCoverageArea(area);
        });

        circle.on('click', () => {
            selectCoverageArea(area);
            marker.openPopup();
        });

        areaLayers[area.id] = { circle, marker, area };
    });

    // 4. Render Sidebar Area List (8. Frosted Glass Rows)
    const itemsListContainer = document.getElementById('coverage-items-list');
    const countText = document.getElementById('coverage-count-text');

    function renderSidebarList(filteredAreas) {
        itemsListContainer.innerHTML = '';
        countText.textContent = `${filteredAreas.length} Wilayah`;

        if (filteredAreas.length === 0) {
            itemsListContainer.innerHTML = `
                <div class="p-3 text-center text-xs text-slate-500 glass-panel-status">
                    Tidak ada wilayah yang cocok.
                </div>
            `;
            return;
        }

        filteredAreas.forEach(area => {
            const conf = statusConfig[area.status] || statusConfig.available;
            const itemEl = document.createElement('div');
            itemEl.className = 'glass-list-item p-2.5 cursor-pointer flex items-center justify-between group';
            itemEl.setAttribute('data-id', area.id);

            itemEl.innerHTML = `
                <div class="flex items-center gap-2.5">
                    <div class="w-7 h-7 rounded-lg bg-white/60 border border-white/80 flex items-center justify-center text-slate-700 group-hover:text-blue-600 group-hover:border-blue-300 transition-colors shadow-xs">
                        <i class='bx bx-map-pin text-sm'></i>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold text-[#0f172a] group-hover:text-blue-600 transition-colors">${area.area_name}</h4>
                        <span class="text-[10px] font-medium text-slate-500">${area.region}</span>
                    </div>
                </div>
                <span class="inline-flex items-center px-2 py-0.5 rounded text-[9px] font-bold" style="${conf.badgeStyle}">
                    ● ${conf.label}
                </span>
            `;

            itemEl.addEventListener('click', () => {
                selectCoverageArea(area);
            });

            itemsListContainer.appendChild(itemEl);
        });
    }

    renderSidebarList(coverageAreas);

    // 5. Select Area Function (Smooth FlyTo & Result Display)
    function selectCoverageArea(area) {
        // Smooth map flyTo
        map.flyTo([area.lat, area.lng], 14, {
            duration: 1.2
        });

        // Open marker popup
        if (areaLayers[area.id] && areaLayers[area.id].marker) {
            areaLayers[area.id].marker.openPopup();
        }

        // Highlight circle briefly
        if (areaLayers[area.id] && areaLayers[area.id].circle) {
            const circle = areaLayers[area.id].circle;
            circle.setStyle({ weight: 4, fillOpacity: 0.35 });
            setTimeout(() => {
                circle.setStyle({ weight: 2, fillOpacity: 0.18 });
            }, 2500);
        }

        // Show Status Result Box
        showResultBox(area.status, area.area_name);
    }

    // 6. Result Box Visibility Handler
    function showResultBox(status, areaName = '') {
        const initialBox = document.getElementById('result-initial');
        const availBox = document.getElementById('result-available');
        const notAvailBox = document.getElementById('result-not-available');
        const maintBox = document.getElementById('result-maintenance');

        initialBox.classList.add('hidden');
        availBox.classList.add('hidden');
        notAvailBox.classList.add('hidden');
        maintBox.classList.add('hidden');

        if (status === 'available') {
            document.getElementById('available-area-text').textContent = areaName ? `LancarWiFi tersedia di ${areaName}.` : 'LancarWiFi tersedia di lokasi kamu.';
            availBox.classList.remove('hidden');
        } else if (status === 'not_available') {
            notAvailBox.classList.remove('hidden');
        } else if (status === 'maintenance') {
            document.getElementById('maintenance-area-text').textContent = areaName ? `${areaName} sedang dalam pemeliharaan.` : 'Area sedang dalam pemeliharaan jaringan.';
            maintBox.classList.remove('hidden');
        } else if (status === 'planned') {
            notAvailBox.classList.remove('hidden');
        }
    }

    // 7. Search Input Functionality
    const searchInput = document.getElementById('coverage-search-input');
    const checkBtn = document.getElementById('btn-check-availability');

    window.checkCoverageLocation = function (query) {
        if (!query || query.trim() === '') {
            renderSidebarList(coverageAreas);
            return;
        }

        const q = query.toLowerCase().trim();
        const matched = coverageAreas.find(a => a.area_name.toLowerCase().includes(q) || a.region.toLowerCase().includes(q));

        if (matched) {
            selectCoverageArea(matched);
            renderSidebarList([matched]);
        } else {
            showResultBox('not_available');
            renderSidebarList([]);
        }
    };

    searchInput.addEventListener('input', function (e) {
        const val = e.target.value.toLowerCase().trim();
        if (val === '') {
            renderSidebarList(coverageAreas);
            return;
        }
        const filtered = coverageAreas.filter(a => a.area_name.toLowerCase().includes(val) || a.region.toLowerCase().includes(val));
        renderSidebarList(filtered);
    });

    searchInput.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') {
            window.checkCoverageLocation(searchInput.value);
        }
    });

    checkBtn.addEventListener('click', function () {
        window.checkCoverageLocation(searchInput.value);
    });

    // 8. Geolocation ("Gunakan Lokasi Saya")
    const locateBtns = [document.getElementById('btn-use-my-location'), document.getElementById('btn-map-locate')];

    function handleGeolocation() {
        if (!navigator.geolocation) {
            alert('Perangkat Anda tidak mendukung fitur geolokasi.');
            return;
        }

        const originalBtnText = document.getElementById('btn-use-my-location').innerHTML;
        document.getElementById('btn-use-my-location').innerHTML = `<i class='bx bx-loader-alt bx-spin text-sm'></i><span>Mencari...</span>`;

        navigator.geolocation.getCurrentPosition(
            function (position) {
                document.getElementById('btn-use-my-location').innerHTML = originalBtnText;
                const userLat = position.coords.latitude;
                const userLng = position.coords.longitude;

                // Create or update User Location Marker
                if (userMarker) {
                    map.removeLayer(userMarker);
                }

                const userIcon = L.divIcon({
                    html: '<div class="user-pulse-marker"></div>',
                    className: 'user-location-custom',
                    iconSize: [20, 20],
                    iconAnchor: [10, 10]
                });

                userMarker = L.marker([userLat, userLng], { icon: userIcon }).addTo(map);
                userMarker.bindPopup(`
                    <div style="font-family: inherit; font-size: 12px; font-weight: 700; color: #0284c7; padding: 2px;">
                        📍 Lokasi Kamu
                    </div>
                `).openPopup();

                map.flyTo([userLat, userLng], 14, { duration: 1.5 });

                // Check distance to closest coverage zone
                let covered = false;
                let closestArea = null;

                coverageAreas.forEach(area => {
                    const dist = getDistanceInMeters(userLat, userLng, area.lat, area.lng);
                    if (dist <= area.radius) {
                        covered = true;
                        closestArea = area;
                    }
                });

                if (covered && closestArea) {
                    showResultBox(closestArea.status, closestArea.area_name);
                } else {
                    showResultBox('not_available');
                }
            },
            function (error) {
                document.getElementById('btn-use-my-location').innerHTML = originalBtnText;
                alert('Lokasi tidak dapat diakses. Silakan masukkan alamat secara manual.');
            },
            { enableHighAccuracy: true, timeout: 10000 }
        );
    }

    locateBtns.forEach(btn => {
        if (btn) btn.addEventListener('click', handleGeolocation);
    });

    // Haversine distance calculator
    function getDistanceInMeters(lat1, lon1, lat2, lon2) {
        const R = 6371e3; // Radius of Earth in meters
        const φ1 = lat1 * Math.PI / 180;
        const φ2 = lat2 * Math.PI / 180;
        const Δφ = (lat2 - lat1) * Math.PI / 180;
        const Δλ = (lon2 - lon1) * Math.PI / 180;

        const a = Math.sin(Δφ / 2) * Math.sin(Δφ / 2) +
                  Math.cos(φ1) * Math.cos(φ2) *
                  Math.sin(Δλ / 2) * Math.sin(Δλ / 2);
        const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

        return R * c;
    }

    // 9. Custom Map Control Buttons
    document.getElementById('btn-map-zoom-in').addEventListener('click', () => map.zoomIn());
    document.getElementById('btn-map-zoom-out').addEventListener('click', () => map.zoomOut());
    document.getElementById('btn-map-reset').addEventListener('click', () => {
        map.flyTo(defaultCenter, defaultZoom, { duration: 1 });
        showResultBox('initial');
        searchInput.value = '';
        renderSidebarList(coverageAreas);
    });

    // Invalidate map size after render to avoid grey tile issues
    setTimeout(() => {
        map.invalidateSize();
    }, 200);
});
</script>
@endsection
