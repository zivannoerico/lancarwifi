<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - LancarWiFi</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        :root {
            --admin-primary: #0F52BA;
            --admin-sidebar: #1E293B;
            --admin-bg: #F1F5F9;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
        body { background-color: var(--admin-bg); color: #333; display: flex; min-height: 100vh; }
        
        .sidebar { width: 250px; background-color: var(--admin-sidebar); color: white; display: flex; flex-direction: column; }
        .sidebar-header { padding: 20px; font-size: 20px; font-weight: bold; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; align-items: center; gap: 10px; }
        .sidebar-menu { list-style: none; padding: 20px 0; flex-grow: 1; }
        .sidebar-menu li a { display: flex; align-items: center; gap: 10px; padding: 12px 20px; color: rgba(255,255,255,0.7); text-decoration: none; transition: 0.2s; }
        .sidebar-menu li a:hover, .sidebar-menu li a.active { background-color: rgba(255,255,255,0.1); color: white; border-left: 4px solid var(--admin-primary); }
        
        .main-content { flex-grow: 1; display: flex; flex-direction: column; }
        .topbar { height: 70px; background-color: white; border-bottom: 1px solid #E2E8F0; display: flex; justify-content: space-between; align-items: center; padding: 0 30px; }
        .content-area { padding: 30px; flex-grow: 1; overflow-y: auto; }
        
        .card { background: white; border-radius: 8px; padding: 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
        .btn { padding: 8px 16px; border: none; border-radius: 6px; cursor: pointer; text-decoration: none; display: inline-block; font-size: 14px; }
        .btn-primary { background-color: var(--admin-primary); color: white; }
        .btn-danger { background-color: #EF4444; color: white; }
        
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table th, table td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #E2E8F0; }
        table th { background-color: #F8FAFC; }
    </style>
</head>
<body>

    <aside class="sidebar">
        <div class="sidebar-header">
            <i class='bx bx-wifi'></i> Admin LancarWiFi
        </div>
        <ul class="sidebar-menu">
            <li><a href="{{ route('admin.dashboard') }}"><i class='bx bxs-dashboard'></i> Dashboard</a></li>
            <li><a href="{{ route('packages.index') }}"><i class='bx bx-package'></i> Paket Internet</a></li>
            <li><a href="{{ route('faqs.index') }}"><i class='bx bx-question-mark'></i> FAQ</a></li>
            <li><a href="{{ route('coverages.index') }}"><i class='bx bx-map-alt'></i> Coverage Area</a></li>
            <li><a href="{{ route('certifications.index') }}"><i class='bx bx-certification'></i> Sertifikasi</a></li>
            <li><a href="{{ route('settings.index') }}"><i class='bx bx-cog'></i> Pengaturan</a></li>
        </ul>
        <div style="padding: 20px;">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger" style="width: 100%;"><i class='bx bx-log-out'></i> Logout</button>
            </form>
        </div>
    </aside>

    <main class="main-content">
        <header class="topbar">
            <h2>@yield('header', 'Dashboard')</h2>
            <div>
                Halo, Admin
            </div>
        </header>
        <div class="content-area">
            @if(session('success'))
                <div style="background-color: #D1FAE5; color: #065F46; padding: 12px 20px; border-radius: 6px; margin-bottom: 20px;">
                    {{ session('success') }}
                </div>
            @endif
            @yield('content')
        </div>
    </main>

</body>
</html>
