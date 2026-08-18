<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LancarWiFi - Internet Lancar, Aktivitas Tanpa Batas')</title>
    <meta name="description" content="@yield('description', 'Penyedia layanan internet terbaik untuk kebutuhan rumah dan bisnis Anda.')">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container navbar-container">
            <a href="/" class="navbar-brand">
                <i class='bx bx-wifi'></i> Lancar<span>WiFi</span>
            </a>
            
            <button class="mobile-menu-toggle" id="mobile-menu-toggle">
                <i class='bx bx-menu'></i>
            </button>
            
            <ul class="nav-links" id="nav-links">
                <li class="nav-item">
                    <a href="/" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Layanan Utama <i class='bx bx-chevron-down'></i></a>
                    <div class="dropdown-menu">
                        <a href="/paket" class="dropdown-item">Paket Internet</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Infrastruktur <i class='bx bx-chevron-down'></i></a>
                    <div class="dropdown-menu">
                        <a href="/infrastruktur/colocation" class="dropdown-item">Colocation</a>
                        <a href="/infrastruktur/coverage" class="dropdown-item">Internet Coverage</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Kredibilitas <i class='bx bx-chevron-down'></i></a>
                    <div class="dropdown-menu">
                        <a href="/tentang-kami" class="dropdown-item">Tentang Kami</a>
                        <a href="/sertifikasi-legalitas" class="dropdown-item">Sertifikasi & Legalitas</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Bantuan <i class='bx bx-chevron-down'></i></a>
                    <div class="dropdown-menu">
                        <a href="/hubungi-kami" class="dropdown-item">Hubungi Kami</a>
                        <a href="/faq" class="dropdown-item">FAQ</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="/speedtest" class="nav-link">Speedtest</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <a href="/" class="navbar-brand" style="color: white;">
                        <i class='bx bx-wifi'></i> Lancar<span style="color: var(--color-secondary);">WiFi</span>
                    </a>
                    <p class="mt-3">Penyedia layanan internet dengan koneksi stabil, cepat, dan terpercaya untuk mendukung segala aktivitas digital Anda tanpa batas.</p>
                </div>
                <div>
                    <h3>Layanan</h3>
                    <ul class="footer-links">
                        <li><a href="/paket">Paket Internet</a></li>
                        <li><a href="/infrastruktur/colocation">Colocation</a></li>
                        <li><a href="/infrastruktur/coverage">Area Coverage</a></li>
                        <li><a href="/speedtest">Speedtest</a></li>
                    </ul>
                </div>
                <div>
                    <h3>Perusahaan</h3>
                    <ul class="footer-links">
                        <li><a href="/tentang-kami">Tentang Kami</a></li>
                        <li><a href="/sertifikasi-legalitas">Sertifikasi & Legalitas</a></li>
                        <li><a href="/hubungi-kami">Hubungi Kami</a></li>
                        <li><a href="/faq">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h3>Hubungi Kami</h3>
                    <p><i class='bx bxl-whatsapp'></i> [Nomor WhatsApp]</p>
                    <p><i class='bx bx-envelope'></i> [Email Support]</p>
                    <p><i class='bx bx-map'></i> [Alamat LancarWiFi]</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} LancarWiFi. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Mobile Menu Toggle
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const navLinks = document.getElementById('nav-links');
        
        mobileMenuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            const icon = mobileMenuToggle.querySelector('i');
            if(navLinks.classList.contains('active')){
                icon.classList.remove('bx-menu');
                icon.classList.add('bx-x');
            } else {
                icon.classList.remove('bx-x');
                icon.classList.add('bx-menu');
            }
        });

        // Mobile Dropdown Toggle
        const navItems = document.querySelectorAll('.nav-item');
        navItems.forEach(item => {
            item.addEventListener('click', (e) => {
                if(window.innerWidth <= 1024) {
                    if(e.target.classList.contains('nav-link') && item.querySelector('.dropdown-menu')) {
                        e.preventDefault();
                        item.classList.toggle('open');
                    }
                }
            });
        });
    </script>
</body>
</html>
