<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - LancarWiFi</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- Tailwind CSS (via Vite) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Alpine.js (for dropdowns and mobile sidebar toggle) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body { font-family: 'Plus Jakarta Sans', 'Inter', sans-serif; }
        /* Hide scrollbar for sidebar */
        .sidebar-scroll::-webkit-scrollbar { width: 6px; }
        .sidebar-scroll::-webkit-scrollbar-track { background: transparent; }
        .sidebar-scroll::-webkit-scrollbar-thumb { background: #334155; border-radius: 10px; }
        .sidebar-scroll::-webkit-scrollbar-thumb:hover { background: #475569; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased overflow-hidden" x-data="{ sidebarOpen: false }">

    <div class="flex h-screen overflow-hidden">

        <!-- ==========================================
             MOBILE SIDEBAR OVERLAY
             ========================================== -->
        <div x-show="sidebarOpen" x-transition.opacity class="fixed inset-0 z-20 bg-slate-900/50 lg:hidden backdrop-blur-sm" @click="sidebarOpen = false"></div>

        <!-- ==========================================
             SIDEBAR
             ========================================== -->
        <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" class="fixed inset-y-0 left-0 z-30 w-72 bg-slate-900 text-slate-300 transition-transform duration-300 lg:static lg:translate-x-0 flex flex-col border-r border-slate-800 shadow-2xl lg:shadow-none">
            
            <!-- Sidebar Header -->
            <div class="flex items-center justify-between h-20 px-6 border-b border-slate-800/50 bg-slate-950/20 shrink-0">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 rounded-xl bg-blue-600 flex items-center justify-center text-white shadow-lg shadow-blue-600/20 group-hover:bg-blue-500 transition-colors">
                        <i class='bx bx-wifi text-2xl'></i>
                    </div>
                    <div>
                        <h1 class="text-white font-bold text-lg leading-tight">LancarWiFi</h1>
                        <p class="text-xs text-slate-400 font-medium tracking-wider">ADMIN PORTAL</p>
                    </div>
                </a>
                <button @click="sidebarOpen = false" class="lg:hidden p-2 text-slate-400 hover:text-white rounded-lg hover:bg-slate-800 transition-colors">
                    <i class='bx bx-x text-2xl'></i>
                </button>
            </div>

            <!-- Sidebar Navigation -->
            <div class="flex-1 overflow-y-auto sidebar-scroll py-6 px-4 space-y-8">
                
                <!-- Main Menu -->
                <div>
                    <p class="px-4 text-xs font-semibold text-slate-500 uppercase tracking-widest mb-3">Menu Utama</p>
                    <ul class="space-y-1">
                        <li>
                            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 {{ Request::routeIs('admin.dashboard') ? 'bg-blue-600 text-white shadow-md shadow-blue-900/20' : 'hover:bg-slate-800 hover:text-white' }}">
                                <i class='bx bxs-dashboard text-xl {{ Request::routeIs('admin.dashboard') ? 'text-white' : 'text-slate-400' }}'></i>
                                <span class="font-medium">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Content Management -->
                <div>
                    <p class="px-4 text-xs font-semibold text-slate-500 uppercase tracking-widest mb-3">Konten Website</p>
                    <ul class="space-y-1">
                        <li>
                            <a href="{{ route('packages.index') }}" class="flex items-center justify-between px-4 py-3 rounded-xl transition-all duration-200 {{ Request::routeIs('packages.*') ? 'bg-blue-600/10 text-blue-400 font-semibold' : 'hover:bg-slate-800 hover:text-white' }}">
                                <div class="flex items-center gap-3">
                                    <i class='bx bx-package text-xl {{ Request::routeIs('packages.*') ? 'text-blue-400' : 'text-slate-400' }}'></i>
                                    <span>Paket Internet</span>
                                </div>
                                @php $pkgCount = \App\Models\Package::count(); @endphp
                                @if($pkgCount > 0) <span class="px-2 py-0.5 rounded-full bg-slate-800 text-xs">{{ $pkgCount }}</span> @endif
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('coverages.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 {{ Request::routeIs('coverages.*') ? 'bg-blue-600/10 text-blue-400 font-semibold' : 'hover:bg-slate-800 hover:text-white' }}">
                                <i class='bx bx-map-alt text-xl {{ Request::routeIs('coverages.*') ? 'text-blue-400' : 'text-slate-400' }}'></i>
                                <span>Area Coverage</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('certifications.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 {{ Request::routeIs('certifications.*') ? 'bg-blue-600/10 text-blue-400 font-semibold' : 'hover:bg-slate-800 hover:text-white' }}">
                                <i class='bx bx-certification text-xl {{ Request::routeIs('certifications.*') ? 'text-blue-400' : 'text-slate-400' }}'></i>
                                <span>Sertifikasi</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('faqs.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 {{ Request::routeIs('faqs.*') ? 'bg-blue-600/10 text-blue-400 font-semibold' : 'hover:bg-slate-800 hover:text-white' }}">
                                <i class='bx bx-question-mark text-xl {{ Request::routeIs('faqs.*') ? 'text-blue-400' : 'text-slate-400' }}'></i>
                                <span>FAQ</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Settings -->
                <div>
                    <p class="px-4 text-xs font-semibold text-slate-500 uppercase tracking-widest mb-3">Pengaturan</p>
                    <ul class="space-y-1">
                        <li>
                            <a href="{{ route('settings.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200 {{ Request::routeIs('settings.*') ? 'bg-blue-600/10 text-blue-400 font-semibold' : 'hover:bg-slate-800 hover:text-white' }}">
                                <i class='bx bx-cog text-xl {{ Request::routeIs('settings.*') ? 'text-blue-400' : 'text-slate-400' }}'></i>
                                <span>Settings Global</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Sidebar Footer (Logout) -->
            <div class="p-4 shrink-0 border-t border-slate-800/50 bg-slate-950/10">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-slate-800 hover:bg-red-500/10 hover:text-red-400 text-slate-300 transition-colors border border-slate-700 hover:border-red-500/30">
                        <i class='bx bx-log-out text-lg'></i>
                        <span class="font-medium">Logout Admin</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- ==========================================
             MAIN CONTENT WRAPPER
             ========================================== -->
        <div class="flex-1 flex flex-col min-w-0 overflow-hidden bg-slate-50">
            
            <!-- TOPBAR -->
            <header class="h-20 bg-white border-b border-slate-200 shadow-sm shadow-slate-100/50 shrink-0 flex items-center justify-between px-6 z-10">
                <div class="flex items-center gap-4">
                    <!-- Mobile Menu Button -->
                    <button @click="sidebarOpen = true" class="lg:hidden p-2 -ml-2 text-slate-500 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">
                        <i class='bx bx-menu text-2xl'></i>
                    </button>

                    <!-- Page Title / Breadcrumb -->
                    <div class="hidden sm:block">
                        <h2 class="text-xl font-bold text-slate-800 leading-none">@yield('header', 'Dashboard')</h2>
                        <div class="text-sm text-slate-500 mt-1 flex items-center gap-2">
                            <i class='bx bx-home-alt'></i> 
                            <span>/</span> 
                            <span class="text-blue-600 font-medium">@yield('header', 'Overview')</span>
                        </div>
                    </div>
                </div>

                <!-- Right Topbar (Profile) -->
                <div class="flex items-center gap-4">
                    <!-- Notification Bell (Example) -->
                    <button class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 hover:bg-blue-50 hover:text-blue-600 transition-colors relative">
                        <i class='bx bx-bell text-xl'></i>
                        <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-white"></span>
                    </button>

                    <div class="h-8 w-px bg-slate-200"></div>

                    <!-- Profile Dropdown (Alpine) -->
                    <div class="relative" x-data="{ profileOpen: false }">
                        <button @click="profileOpen = !profileOpen" @click.outside="profileOpen = false" class="flex items-center gap-3 hover:bg-slate-50 p-1.5 pr-3 rounded-full transition-colors border border-transparent hover:border-slate-200">
                            <div class="w-9 h-9 rounded-full bg-gradient-to-tr from-blue-600 to-indigo-500 text-white flex items-center justify-center font-bold shadow-md">
                                A
                            </div>
                            <div class="hidden md:block text-left">
                                <p class="text-sm font-bold text-slate-700 leading-tight">Admin System</p>
                                <p class="text-xs text-slate-500 font-medium">Administrator</p>
                            </div>
                            <i class='bx bx-chevron-down text-slate-400 hidden md:block'></i>
                        </button>

                        <!-- Dropdown Menu -->
                        <div x-show="profileOpen" x-transition.opacity.duration.200ms class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-xl border border-slate-100 py-2 z-50" style="display: none;">
                            <div class="px-4 py-2 border-b border-slate-100 mb-2 md:hidden">
                                <p class="text-sm font-bold text-slate-700">Admin System</p>
                                <p class="text-xs text-slate-500">Administrator</p>
                            </div>
                            <a href="/" target="_blank" class="flex items-center gap-2 px-4 py-2 text-sm text-slate-600 hover:bg-slate-50 hover:text-blue-600 transition-colors">
                                <i class='bx bx-globe text-lg'></i> Lihat Website
                            </a>
                            <form action="{{ route('admin.logout') }}" method="POST" class="mt-1 border-t border-slate-100 pt-1">
                                @csrf
                                <button type="submit" class="w-full flex items-center gap-2 px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors text-left">
                                    <i class='bx bx-log-out text-lg'></i> Keluar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <!-- MAIN CONTENT AREA -->
            <main class="flex-1 overflow-y-auto p-4 md:p-6 lg:p-8">
                <div class="max-w-7xl mx-auto">
                    
                    <!-- Mobile Page Title (visible only on mobile) -->
                    <div class="sm:hidden mb-6">
                        <h2 class="text-2xl font-bold text-slate-800">@yield('header', 'Dashboard')</h2>
                    </div>

                    <!-- Flash Messages -->
                    @if(session('success'))
                        <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-r-xl shadow-sm flex items-start gap-3" x-data="{ show: true }" x-show="show" x-transition>
                            <i class='bx bxs-check-circle text-green-500 text-xl mt-0.5'></i>
                            <div class="flex-1">
                                <h3 class="text-green-800 font-bold text-sm">Berhasil!</h3>
                                <p class="text-green-700 text-sm mt-1">{{ session('success') }}</p>
                            </div>
                            <button @click="show = false" class="text-green-500 hover:text-green-700">
                                <i class='bx bx-x text-xl'></i>
                            </button>
                        </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="mb-6 bg-red-50 border-l-4 border-red-500 p-4 rounded-r-xl shadow-sm flex items-start gap-3" x-data="{ show: true }" x-show="show" x-transition>
                            <i class='bx bxs-error-circle text-red-500 text-xl mt-0.5'></i>
                            <div class="flex-1">
                                <h3 class="text-red-800 font-bold text-sm">Terjadi Kesalahan</h3>
                                <p class="text-red-700 text-sm mt-1">{{ session('error') }}</p>
                            </div>
                            <button @click="show = false" class="text-red-500 hover:text-red-700">
                                <i class='bx bx-x text-xl'></i>
                            </button>
                        </div>
                    @endif

                    <!-- The Content Content -->
                    @yield('content')
                    
                </div>
            </main>

            <!-- Copyright Footer -->
            <footer class="bg-white border-t border-slate-200 p-4 text-center text-sm text-slate-500 shrink-0">
                &copy; {{ date('Y') }} <strong>LancarWiFi</strong> Admin Panel. All rights reserved.
            </footer>

        </div>
    </div>

    @stack('scripts')
</body>
</html>
