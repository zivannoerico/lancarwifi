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
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body { font-family: 'Plus Jakarta Sans', 'Inter', sans-serif; }
        .sidebar-scroll::-webkit-scrollbar { width: 4px; }
        .sidebar-scroll::-webkit-scrollbar-track { background: transparent; }
        .sidebar-scroll::-webkit-scrollbar-thumb { background: #334155; border-radius: 4px; }
        .sidebar-scroll::-webkit-scrollbar-thumb:hover { background: #475569; }
        
        /* Smooth transitions */
        .nav-item { transition: all 0.2s ease-in-out; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased overflow-hidden" x-data="{ sidebarOpen: false }">

    <div class="flex h-screen overflow-hidden">

        <!-- Mobile Sidebar Overlay -->
        <div x-show="sidebarOpen" x-transition.opacity class="fixed inset-0 z-40 bg-slate-900/60 backdrop-blur-sm lg:hidden" @click="sidebarOpen = false"></div>

        <!-- ==========================================
             SIDEBAR
             ========================================== -->
        <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" class="fixed inset-y-0 left-0 z-50 w-72 bg-slate-900 text-slate-300 transition-transform duration-300 lg:static lg:translate-x-0 flex flex-col border-r border-slate-800 shadow-2xl lg:shadow-none">
            
            <!-- Sidebar Header -->
            <div class="flex items-center h-20 px-6 border-b border-slate-800 bg-slate-900 shrink-0">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-4 group w-full">
                    <div class="w-10 h-10 rounded-xl bg-white flex items-center justify-center p-1 shadow-md shadow-blue-500/10 shrink-0">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-full h-full object-contain">
                    </div>
                    <div class="flex-1 overflow-hidden">
                        <h1 class="text-white font-extrabold text-lg leading-tight tracking-tight truncate">LancarWiFi</h1>
                        <p class="text-[10px] text-blue-400 font-bold tracking-[0.2em] uppercase mt-0.5">Admin Portal</p>
                    </div>
                </a>
                <button @click="sidebarOpen = false" class="lg:hidden p-2 -mr-2 text-slate-400 hover:text-white rounded-lg transition-colors">
                    <i class='bx bx-x text-2xl'></i>
                </button>
            </div>

            <!-- Sidebar Navigation -->
            <div class="flex-1 overflow-y-auto sidebar-scroll py-6 space-y-8">
                
                <!-- Section: OVERVIEW -->
                <div class="px-4">
                    <p class="px-4 text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-3">Overview</p>
                    <ul class="space-y-1">
                        <li>
                            <a href="{{ route('admin.dashboard') }}" class="nav-item flex items-center gap-3 px-4 py-3 rounded-xl {{ Request::routeIs('admin.dashboard') ? 'bg-blue-600 text-white font-semibold shadow-lg shadow-blue-900/20' : 'hover:bg-slate-800 hover:text-white font-medium text-slate-400' }}">
                                <i class='bx {{ Request::routeIs('admin.dashboard') ? 'bxs-dashboard' : 'bx-grid-alt' }} text-xl'></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Section: CONTENT MANAGEMENT -->
                <div class="px-4">
                    <p class="px-4 text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-3">Content Management</p>
                    <ul class="space-y-1">
                        <li>
                            <a href="{{ route('packages.index') }}" class="nav-item flex items-center justify-between px-4 py-3 rounded-xl {{ Request::routeIs('packages.*') ? 'bg-blue-500/10 text-blue-400 font-semibold' : 'hover:bg-slate-800 hover:text-white font-medium text-slate-400' }}">
                                <div class="flex items-center gap-3">
                                    <i class='bx {{ Request::routeIs('packages.*') ? 'bxs-package' : 'bx-package' }} text-xl'></i>
                                    <span>Paket</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('coverages.index') }}" class="nav-item flex items-center justify-between px-4 py-3 rounded-xl {{ Request::routeIs('coverages.*') ? 'bg-blue-500/10 text-blue-400 font-semibold' : 'hover:bg-slate-800 hover:text-white font-medium text-slate-400' }}">
                                <div class="flex items-center gap-3">
                                    <i class='bx {{ Request::routeIs('coverages.*') ? 'bxs-map-alt' : 'bx-map-alt' }} text-xl'></i>
                                    <span>Coverage</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('faqs.index') }}" class="nav-item flex items-center justify-between px-4 py-3 rounded-xl {{ Request::routeIs('faqs.*') ? 'bg-blue-500/10 text-blue-400 font-semibold' : 'hover:bg-slate-800 hover:text-white font-medium text-slate-400' }}">
                                <div class="flex items-center gap-3">
                                    <i class='bx {{ Request::routeIs('faqs.*') ? 'bxs-message-rounded-dots' : 'bx-message-rounded-dots' }} text-xl'></i>
                                    <span>FAQ</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Section: COMMUNICATION -->
                <div class="px-4">
                    <p class="px-4 text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-3">Communication</p>
                    <ul class="space-y-1">
                        <li>
                            <a href="#" class="nav-item flex items-center justify-between px-4 py-3 rounded-xl hover:bg-slate-800 hover:text-white font-medium text-slate-400 group">
                                <div class="flex items-center gap-3">
                                    <i class='bx bx-envelope text-xl'></i>
                                    <span>Pesan</span>
                                </div>
                                <span class="bg-blue-600 text-white text-[10px] font-bold px-2 py-0.5 rounded-full">3</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Section: SYSTEM -->
                <div class="px-4 pb-4">
                    <p class="px-4 text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-3">System</p>
                    <ul class="space-y-1">
                        <li>
                            <a href="{{ route('settings.index') }}" class="nav-item flex items-center gap-3 px-4 py-3 rounded-xl {{ Request::routeIs('settings.*') ? 'bg-blue-500/10 text-blue-400 font-semibold' : 'hover:bg-slate-800 hover:text-white font-medium text-slate-400' }}">
                                <i class='bx {{ Request::routeIs('settings.*') ? 'bxs-cog' : 'bx-cog' }} text-xl'></i>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li>
                            <form action="{{ route('admin.logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full text-left nav-item flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-red-500/10 hover:text-red-400 font-medium text-slate-400 group">
                                    <i class='bx bx-log-out text-xl group-hover:text-red-400'></i>
                                    <span>Logout</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>

        <!-- ==========================================
             MAIN CONTENT WRAPPER
             ========================================== -->
        <div class="flex-1 flex flex-col min-w-0 bg-slate-50">
            
            <!-- TOPBAR -->
            <header class="h-20 bg-white border-b border-slate-200 shrink-0 flex items-center justify-between px-6 lg:px-10 z-10 sticky top-0">
                <div class="flex items-center gap-4">
                    <!-- Mobile Menu Button -->
                    <button @click="sidebarOpen = true" class="lg:hidden p-2 -ml-2 text-slate-500 hover:text-slate-800 hover:bg-slate-100 rounded-xl transition-colors">
                        <i class='bx bx-menu-alt-left text-2xl'></i>
                    </button>

                    <!-- Page Title / Breadcrumb -->
                    <div class="hidden sm:flex flex-col justify-center">
                        <h2 class="text-xl font-bold text-slate-800 tracking-tight leading-tight">@yield('header', 'Dashboard')</h2>
                        <div class="text-[13px] font-medium text-slate-400 mt-0.5 flex items-center gap-1.5">
                            <i class='bx bx-home-alt text-sm'></i> 
                            <span>/</span> 
                            <span class="text-slate-500">Overview</span>
                            <span>/</span>
                            <span class="text-blue-600">@yield('header', 'Dashboard')</span>
                        </div>
                    </div>
                </div>

                <!-- Right Topbar -->
                <div class="flex items-center gap-3 md:gap-5">
                    
                    <a href="/" target="_blank" class="hidden md:flex items-center gap-2 text-sm font-semibold text-slate-500 hover:text-blue-600 transition-colors mr-2">
                        <i class='bx bx-globe text-lg'></i> View Site
                    </a>

                    <!-- Notification -->
                    <button class="relative p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-xl transition-colors">
                        <i class='bx bx-bell text-2xl'></i>
                        <span class="absolute top-1.5 right-1.5 w-2.5 h-2.5 bg-red-500 rounded-full border-2 border-white"></span>
                    </button>

                    <div class="h-8 w-px bg-slate-200 hidden md:block"></div>

                    <!-- Profile Dropdown -->
                    <div class="relative" x-data="{ profileOpen: false }">
                        <button @click="profileOpen = !profileOpen" @click.outside="profileOpen = false" class="flex items-center gap-3 p-1 rounded-full hover:bg-slate-50 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-100">
                            <div class="text-right hidden md:block mr-1">
                                <p class="text-sm font-bold text-slate-800 leading-tight">Administrator</p>
                                <p class="text-[11px] font-medium text-slate-500">Admin System</p>
                            </div>
                            <div class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-lg shadow-sm border-2 border-white ring-1 ring-slate-100">
                                A
                            </div>
                            <i class='bx bx-chevron-down text-slate-400 text-lg hidden md:block'></i>
                        </button>

                        <div x-show="profileOpen" x-transition.opacity.duration.200ms class="absolute right-0 mt-3 w-56 bg-white rounded-2xl shadow-[0_10px_40px_-10px_rgba(0,0,0,0.1)] border border-slate-100 overflow-hidden z-50" style="display: none;">
                            <div class="p-4 border-b border-slate-100 bg-slate-50 md:hidden">
                                <p class="text-sm font-bold text-slate-800">Administrator</p>
                                <p class="text-xs text-slate-500">Admin System</p>
                            </div>
                            <div class="p-2">
                                <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-sm font-medium text-slate-600 hover:bg-slate-50 hover:text-blue-600 rounded-xl transition-colors">
                                    <i class='bx bx-user text-lg'></i> Profile Info
                                </a>
                                <a href="{{ route('settings.index') }}" class="flex items-center gap-3 px-4 py-2.5 text-sm font-medium text-slate-600 hover:bg-slate-50 hover:text-blue-600 rounded-xl transition-colors">
                                    <i class='bx bx-cog text-lg'></i> Account Settings
                                </a>
                            </div>
                            <div class="p-2 border-t border-slate-100">
                                <form action="{{ route('admin.logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="w-full flex items-center gap-3 px-4 py-2.5 text-sm font-medium text-red-600 hover:bg-red-50 rounded-xl transition-colors text-left">
                                        <i class='bx bx-log-out text-lg'></i> Keluar Aplikasi
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- MAIN CONTENT AREA -->
            <main class="flex-1 overflow-y-auto p-6 md:p-8 lg:p-10">
                <div class="max-w-7xl mx-auto">
                    
                    <!-- Mobile Page Title -->
                    <div class="sm:hidden mb-6 flex flex-col">
                        <h2 class="text-2xl font-bold text-slate-800 tracking-tight">@yield('header', 'Dashboard')</h2>
                        <div class="w-10 h-1 bg-blue-600 mt-2 rounded-full"></div>
                    </div>

                    <!-- Flash Messages -->
                    @if(session('success'))
                        <div class="mb-8 bg-emerald-50 border border-emerald-200 p-4 rounded-2xl flex items-start gap-3 shadow-sm" x-data="{ show: true }" x-show="show" x-transition>
                            <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0 mt-0.5">
                                <i class='bx bx-check text-xl'></i>
                            </div>
                            <div class="flex-1 pt-1">
                                <h3 class="text-emerald-800 font-bold text-sm tracking-wide">SUKSES</h3>
                                <p class="text-emerald-700 text-sm mt-0.5">{{ session('success') }}</p>
                            </div>
                            <button @click="show = false" class="text-emerald-400 hover:text-emerald-600 p-1">
                                <i class='bx bx-x text-xl'></i>
                            </button>
                        </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="mb-8 bg-red-50 border border-red-200 p-4 rounded-2xl flex items-start gap-3 shadow-sm" x-data="{ show: true }" x-show="show" x-transition>
                            <div class="w-8 h-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center shrink-0 mt-0.5">
                                <i class='bx bx-error text-xl'></i>
                            </div>
                            <div class="flex-1 pt-1">
                                <h3 class="text-red-800 font-bold text-sm tracking-wide">GAGAL</h3>
                                <p class="text-red-700 text-sm mt-0.5">{{ session('error') }}</p>
                            </div>
                            <button @click="show = false" class="text-red-400 hover:text-red-600 p-1">
                                <i class='bx bx-x text-xl'></i>
                            </button>
                        </div>
                    @endif

                    <!-- Section Content Injection -->
                    @yield('content')
                    
                </div>
            </main>

        </div>
    </div>

    @stack('scripts')
</body>
</html>
