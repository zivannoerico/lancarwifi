@extends('layouts.app')

@section('title', 'Internet Coverage - LancarWiFi')

@section('content')
<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

<style>
    /* Custom Leaflet Map Styling */
    #coverage-map {
        width: 100%;
        height: 100%;
        min-height: 480px;
        z-index: 10;
    }
    
    @media (min-width: 1024px) {
        #coverage-map {
            min-height: 680px;
            height: 680px;
        }
    }

    /* Custom Leaflet Popup */
    .leaflet-popup-content-wrapper {
        border-radius: 1.25rem !important;
        padding: 0.25rem !important;
        box-shadow: 0 20px 30px -10px rgba(11, 59, 143, 0.2), 0 10px 15px -3px rgba(0, 0, 0, 0.05) !important;
        border: 1px solid #E2E8F0 !important;
        background: #ffffff !important;
    }
    .leaflet-popup-content {
        margin: 0.85rem 1rem !important;
        line-height: 1.4 !important;
        font-family: inherit !important;
    }
    .leaflet-popup-tip {
        background: #ffffff !important;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1) !important;
    }

    /* Pulsing user location marker */
    .user-pulse-marker {
        position: relative;
        width: 22px;
        height: 22px;
        background: #0B3B8F;
        border: 3px solid #ffffff;
        border-radius: 50%;
        box-shadow: 0 0 15px rgba(11, 59, 143, 0.6);
    }
    .user-pulse-marker::after {
        content: '';
        position: absolute;
        top: -8px;
        left: -8px;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: rgba(6, 182, 212, 0.4);
        animation: radar-pulse 2s infinite ease-out;
        pointer-events: none;
    }
    @keyframes radar-pulse {
        0% { transform: scale(0.6); opacity: 1; }
        100% { transform: scale(2.2); opacity: 0; }
    }

    /* Custom scrollbar for sidebar list */
    .custom-scrollbar::-webkit-scrollbar {
        width: 6px;
    }
    .custom-scrollbar::-webkit-scrollbar-track {
        background: #F1F5F9;
        border-radius: 8px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #CBD5E1;
        border-radius: 8px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background: #94A3B8;
    }
</style>

<!-- Hero / Header Section -->
<section class="relative mt-10 pt-24 pb-32 overflow-hidden bg-slate-900">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-900 via-slate-900 to-blue-900"></div>
        <!-- Animated glowing orbs -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500/20 rounded-full blur-[100px] animate-pulse mix-blend-screen"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-cyan-400/20 rounded-full blur-[100px] animate-pulse mix-blend-screen" style="animation-delay: 2s;"></div>
        <!-- Hexagon Pattern -->
        <div class="absolute inset-0 opacity-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTIwIDBsMjAgMTB2MjBsLTIwIDEwTDAgMzBWMTB6IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmYiIHN0cm9rZS13aWR0aD0iMSIvPjwvc3ZnPg==')]"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 tracking-tight">
            Cek Jangkauan <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-400">Jaringan Kami</span>
        </h1>
        <p class="text-xl text-slate-300 max-w-2xl mx-auto font-light leading-relaxed">
            Periksa ketersediaan layanan internet fiber optic super cepat LancarWiFi di wilayah tempat tinggal atau lokasi bisnis Anda secara real-time.
        </p>
    </div>
</section>

<!-- Main Coverage Map & Sidebar Section -->
<section class="relative z-20 pb-32 bg-slate-50">
    <div class="container mx-auto px-4 max-w-7xl -mt-16">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- LEFT: LEAFLET MAP CONTAINER (Desktop: 68% / 8 Cols) -->
            <div class="lg:col-span-8 w-full">
                <div class="relative bg-white rounded-3xl border border-slate-200 shadow-xl overflow-hidden">
                    
                    <!-- Map Box -->
                    <div id="coverage-map"></div>

                    <!-- Floating Custom Map Controls (Top-Right) -->
                    <div class="absolute top-4 right-4 z-[500] flex flex-col gap-2">
                        <button type="button" id="btn-map-zoom-in" title="Perbesar" class="w-10 h-10 bg-white/95 hover:bg-white text-slate-700 hover:text-blue-600 rounded-xl shadow-md border border-slate-200 flex items-center justify-center text-xl font-bold transition-all transform hover:scale-105 active:scale-95 backdrop-blur-sm">
                            <i class='bx bx-plus'></i>
                        </button>
                        <button type="button" id="btn-map-zoom-out" title="Perkecil" class="w-10 h-10 bg-white/95 hover:bg-white text-slate-700 hover:text-blue-600 rounded-xl shadow-md border border-slate-200 flex items-center justify-center text-xl font-bold transition-all transform hover:scale-105 active:scale-95 backdrop-blur-sm">
                            <i class='bx bx-minus'></i>
                        </button>
                        <button type="button" id="btn-map-reset" title="Reset Tampilan" class="w-10 h-10 bg-white/95 hover:bg-white text-slate-700 hover:text-blue-600 rounded-xl shadow-md border border-slate-200 flex items-center justify-center text-xl transition-all transform hover:scale-105 active:scale-95 backdrop-blur-sm">
                            <i class='bx bx-reset'></i>
                        </button>
                        <button type="button" id="btn-map-locate" title="Deteksi Lokasi Saya" class="w-10 h-10 bg-white/95 hover:bg-white text-blue-600 hover:text-blue-700 rounded-xl shadow-md border border-blue-200 flex items-center justify-center text-xl transition-all transform hover:scale-105 active:scale-95 backdrop-blur-sm">
                            <i class='bx bx-target-lock'></i>
                        </button>
                    </div>

                    <!-- Floating Map Info Badge (Bottom-Left) -->
                    <div class="absolute bottom-4 left-4 z-[500] hidden sm:flex items-center gap-2 bg-white/90 backdrop-blur-md px-3.5 py-1.5 rounded-full border border-slate-200 text-xs font-semibold text-slate-600 shadow-sm pointer-events-none">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                        <span>Sistem Coverage Interaktif LancarWiFi</span>
                    </div>
                </div>
            </div>

            <!-- RIGHT: SIDEBAR COVERAGE PANEL (Desktop: 32% / 4 Cols) -->
            <div class="lg:col-span-4 w-full">
                <div class="bg-white rounded-3xl border border-slate-200 shadow-xl p-6 sm:p-7 flex flex-col gap-6">
                    
                    <!-- Sidebar Header -->
                    <div>
                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-blue-50 text-blue-700 border border-blue-100 rounded-full text-xs font-bold uppercase tracking-wider mb-3">
                            <i class='bx bx-broadcast'></i> Coverage Checker
                        </div>
                        <h2 class="text-2xl font-extrabold text-slate-900 tracking-tight">Cek Area Jaringan</h2>
                        <p class="text-slate-500 text-sm mt-1 leading-relaxed">
                            Lihat apakah lokasi Anda tercover oleh jaringan Fiber Optic LancarWiFi.
                        </p>
                    </div>

                    <!-- Search Input Box -->
                    <div class="space-y-2.5">
                        <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider">Cari Lokasi</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                <i class='bx bx-search text-lg'></i>
                            </div>
                            <input 
                                type="text" 
                                id="coverage-search-input" 
                                placeholder="Masukkan alamat, kecamatan, atau kota..." 
                                class="w-full pl-10 pr-4 py-3 bg-slate-50 hover:bg-slate-100/80 focus:bg-white border border-slate-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 rounded-xl text-sm font-medium text-slate-800 placeholder-slate-400 transition-all outline-none"
                            >
                        </div>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 pt-1">
                            <button 
                                type="button" 
                                id="btn-check-availability" 
                                class="w-full py-2.5 px-3 bg-blue-600 hover:bg-blue-700 active:bg-blue-800 text-white text-xs font-bold rounded-xl transition-all shadow-md shadow-blue-500/20 flex items-center justify-center gap-1.5"
                            >
                                <i class='bx bx-search-alt-2 text-base'></i>
                                <span>Cek Ketersediaan</span>
                            </button>
                            <button 
                                type="button" 
                                id="btn-use-my-location" 
                                class="w-full py-2.5 px-3 bg-slate-100 hover:bg-blue-50 hover:text-blue-700 active:bg-slate-200 text-slate-700 text-xs font-bold rounded-xl transition-all border border-slate-200 hover:border-blue-200 flex items-center justify-center gap-1.5"
                            >
                                <i class='bx bx-current-location text-base text-blue-600'></i>
                                <span>Gunakan Lokasi Saya</span>
                            </button>
                        </div>
                    </div>

                    <!-- Coverage Legend -->
                    <div class="p-3 bg-slate-50 rounded-2xl border border-slate-100">
                        <div class="text-[11px] font-bold text-slate-500 uppercase tracking-wider mb-2">Status Jaringan</div>
                        <div class="flex items-center justify-between text-xs font-semibold text-slate-700">
                            <span class="inline-flex items-center gap-1.5">
                                <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 shadow-sm"></span> Tersedia
                            </span>
                            <span class="inline-flex items-center gap-1.5">
                                <span class="w-2.5 h-2.5 rounded-full bg-amber-500 shadow-sm"></span> Perencanaan
                            </span>
                            <span class="inline-flex items-center gap-1.5">
                                <span class="w-2.5 h-2.5 rounded-full bg-red-500 shadow-sm"></span> Maintenance
                            </span>
                        </div>
                    </div>

                    <!-- Dynamic Coverage Result Box -->
                    <div id="coverage-result-box" class="transition-all duration-300">
                        <!-- Default Hint (When no check active) -->
                        <div id="result-initial" class="p-4 rounded-2xl bg-blue-50/60 border border-blue-100/80 text-blue-900 flex items-start gap-3">
                            <i class='bx bx-info-circle text-2xl text-blue-600 shrink-0 mt-0.5'></i>
                            <div class="text-xs leading-relaxed text-slate-600">
                                <strong class="font-bold text-slate-800 block mb-0.5">Pilih Area atau Lokasi</strong>
                                Klik salah satu wilayah di daftar bawah atau gunakan pencarian untuk memeriksa coverage.
                            </div>
                        </div>

                        <!-- Result AVAILABLE -->
                        <div id="result-available" class="hidden p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-950 space-y-3 animate-fadeIn">
                            <div class="flex items-start gap-3">
                                <div class="w-9 h-9 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center shrink-0">
                                    <i class='bx bx-check-circle text-2xl'></i>
                                </div>
                                <div>
                                    <h4 class="text-sm font-extrabold text-emerald-900">✓ Jaringan Tersedia</h4>
                                    <p class="text-xs text-emerald-700 mt-0.5" id="available-area-text">LancarWiFi tersedia di lokasi kamu.</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between text-[11px] font-bold text-emerald-800 bg-white/70 py-1.5 px-3 rounded-lg border border-emerald-100">
                                <span>Fiber Optic 100%</span>
                                <span>Internet Unlimited</span>
                            </div>
                            <a href="/paket" class="w-full py-2.5 px-4 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs rounded-xl transition-all shadow-md shadow-emerald-600/20 flex items-center justify-center gap-2">
                                <span>Lihat Paket Internet</span>
                                <i class='bx bx-right-arrow-alt text-base'></i>
                            </a>
                        </div>

                        <!-- Result NOT AVAILABLE -->
                        <div id="result-not-available" class="hidden p-4 rounded-2xl bg-amber-50 border border-amber-200 text-amber-950 space-y-3 animate-fadeIn">
                            <div class="flex items-start gap-3">
                                <div class="w-9 h-9 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center shrink-0">
                                    <i class='bx bx-map-pin text-2xl'></i>
                                </div>
                                <div>
                                    <h4 class="text-sm font-extrabold text-amber-900">Belum Tersedia</h4>
                                    <p class="text-xs text-amber-700 mt-0.5">Area ini belum terjangkau jaringan LancarWiFi.</p>
                                </div>
                            </div>
                            <p class="text-xs text-amber-800 leading-relaxed font-light">
                                Ingin wilayahmu segera terpasang jaringan fiber optic? Kirimkan permohonan jangkauan ke tim kami.
                            </p>
                            <a href="/hubungi-kami" class="w-full py-2.5 px-4 bg-amber-600 hover:bg-amber-700 text-white font-bold text-xs rounded-xl transition-all shadow-md shadow-amber-600/20 flex items-center justify-center gap-2">
                                <span>Ajukan Request Coverage</span>
                                <i class='bx bx-send text-base'></i>
                            </a>
                        </div>

                        <!-- Result MAINTENANCE -->
                        <div id="result-maintenance" class="hidden p-4 rounded-2xl bg-red-50 border border-red-200 text-red-950 space-y-3 animate-fadeIn">
                            <div class="flex items-start gap-3">
                                <div class="w-9 h-9 rounded-xl bg-red-100 text-red-700 flex items-center justify-center shrink-0">
                                    <i class='bx bx-error text-2xl'></i>
                                </div>
                                <div>
                                    <h4 class="text-sm font-extrabold text-red-900">⚠ Maintenance Jaringan</h4>
                                    <p class="text-xs text-red-700 mt-0.5" id="maintenance-area-text">Area sedang dalam pemeliharaan jaringan.</p>
                                </div>
                            </div>
                            <p class="text-xs text-red-800 leading-relaxed font-light">
                                Tim teknis sedang melakukan optimalisasi berkala untuk kualitas koneksi yang lebih stabil.
                            </p>
                            <a href="/hubungi-kami" class="w-full py-2 px-4 bg-red-600 hover:bg-red-700 text-white font-bold text-xs rounded-xl transition-all flex items-center justify-center gap-2">
                                <span>Hubungi Support</span>
                                <i class='bx bx-support text-base'></i>
                            </a>
                        </div>
                    </div>

                    <!-- Coverage Areas List -->
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xs font-bold text-slate-700 uppercase tracking-wider">Wilayah Terdaftar</h3>
                            <span class="text-[11px] font-semibold text-slate-400" id="coverage-count-text">Memuat...</span>
                        </div>

                        <div id="coverage-items-list" class="space-y-2.5 max-h-[260px] overflow-y-auto pr-1 custom-scrollbar">
                            <!-- Items dynamically rendered by JS -->
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

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
            // Coordinate extraction if map_url or area matches
            let matched = defaultCoverageData.find(d => d.area_name.toLowerCase() === item.area_name.toLowerCase());
            let lat = matched ? matched.lat : -7.5460 + (idx * 0.02);
            let lng = matched ? matched.lng : 112.2330 + (idx * 0.02);
            let radius = matched ? matched.radius : 2500;
            return {
                id: item.id || 'db_' + idx,
                area_name: item.area_name,
                region: 'Jombang',
                status: item.status || 'available',
                lat: lat,
                lng: lng,
                radius: radius
            };
        });
    } else {
        coverageAreas = defaultCoverageData;
    }

    // Default map center
    const defaultCenter = [-7.5460, 112.2330];
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

    // Color definitions based on LancarWiFi styling
    const statusConfig = {
        available: {
            color: '#22C55E',
            label: 'READY',
            badgeClass: 'bg-emerald-50 text-emerald-700 border-emerald-200',
            dotClass: 'bg-emerald-500'
        },
        planned: {
            color: '#F59E0B',
            label: 'PLANNED',
            badgeClass: 'bg-amber-50 text-amber-700 border-amber-200',
            dotClass: 'bg-amber-500'
        },
        maintenance: {
            color: '#EF4444',
            label: 'MAINTENANCE',
            badgeClass: 'bg-red-50 text-red-700 border-red-200',
            dotClass: 'bg-red-500'
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
            fillOpacity: 0.15,
            weight: 2
        }).addTo(map);

        // Custom Leaflet Marker Icon
        const markerHtml = `
            <div style="transform: translate(-50%, -50%); display: flex; align-items: center; justify-content: center;">
                <div style="width: 32px; height: 32px; background: #ffffff; border: 2.5px solid ${conf.color}; border-radius: 12px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(0,0,0,0.15); font-size: 16px; color: ${conf.color};">
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
                <div style="font-size: 15px; font-weight: 800; color: #0F172A; margin-bottom: 6px;">${area.area_name}</div>
                <div style="display: inline-flex; align-items: center; gap: 4px; padding: 2px 8px; border-radius: 9999px; font-size: 11px; font-weight: 700; background: ${conf.color}15; color: ${conf.color}; border: 1px solid ${conf.color}30; margin-bottom: 10px;">
                    <span style="width: 6px; height: 6px; border-radius: 50%; background: ${conf.color};"></span>
                    ${conf.label}
                </div>
                <div>
                    <a href="${area.status === 'available' ? '/paket' : '/hubungi-kami'}" style="display: block; width: 100%; text-align: center; background: #0B3B8F; color: #ffffff; padding: 6px 12px; border-radius: 8px; font-size: 11px; font-weight: 700; text-decoration: none;">
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

    // 4. Render Sidebar Area List
    const itemsListContainer = document.getElementById('coverage-items-list');
    const countText = document.getElementById('coverage-count-text');

    function renderSidebarList(filteredAreas) {
        itemsListContainer.innerHTML = '';
        countText.textContent = `${filteredAreas.length} Wilayah`;

        if (filteredAreas.length === 0) {
            itemsListContainer.innerHTML = `
                <div class="p-4 text-center text-xs text-slate-400 bg-slate-50 rounded-xl border border-dashed border-slate-200">
                    Tidak ada wilayah yang cocok.
                </div>
            `;
            return;
        }

        filteredAreas.forEach(area => {
            const conf = statusConfig[area.status] || statusConfig.available;
            const itemEl = document.createElement('div');
            itemEl.className = 'group p-3 bg-slate-50 hover:bg-blue-50/60 border border-slate-200/80 hover:border-blue-300 rounded-2xl cursor-pointer transition-all duration-200 flex items-center justify-between';
            itemEl.setAttribute('data-id', area.id);

            itemEl.innerHTML = `
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-xl bg-white border border-slate-200 flex items-center justify-center text-slate-500 group-hover:text-blue-600 transition-colors shadow-xs">
                        <i class='bx bx-map-pin text-lg'></i>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold text-slate-800 group-hover:text-blue-900 transition-colors">${area.area_name}</h4>
                        <span class="text-[11px] text-slate-400">${area.region}</span>
                    </div>
                </div>
                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[10px] font-bold ${conf.badgeClass} border">
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
            circle.setStyle({ weight: 4, fillOpacity: 0.3 });
            setTimeout(() => {
                circle.setStyle({ weight: 2, fillOpacity: 0.15 });
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
            // Not covered area
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
        document.getElementById('btn-use-my-location').innerHTML = `<i class='bx bx-loader-alt bx-spin text-base'></i><span>Mencari Lokasi...</span>`;

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
                    iconSize: [22, 22],
                    iconAnchor: [11, 11]
                });

                userMarker = L.marker([userLat, userLng], { icon: userIcon }).addTo(map);
                userMarker.bindPopup(`
                    <div style="font-family: inherit; font-size: 13px; font-weight: 700; color: #0B3B8F; padding: 2px;">
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
});
</script>
@endsection
