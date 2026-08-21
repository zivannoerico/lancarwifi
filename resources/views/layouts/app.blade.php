<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LancarWiFi</title>
    <meta name="description" content="@yield('description', 'Penyedia layanan internet fiber optic super cepat dan stabil untuk kebutuhan rumah dan bisnis Anda.')">
    <link rel="icon" type="image/png" href="{{ asset('images/logoFooter.png') }}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Vite & Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Custom CSS (Navbar & Original Component Styles) -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ filemtime(public_path('css/style.css')) }}">
    
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- GSAP Animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
</head>
<body>

    <!-- Navbar Original -->
    <nav class="navbar" id="main-navbar">
        <div class="container navbar-container">
            <a href="/" class="navbar-brand">
                <img src="{{ asset('images/logo.png') }}" alt="LancarWiFi Logo" class="h-16 md:h-20 object-contain">
            </a>
            
            <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Toggle navigation">
                <i class='bx bx-menu'></i>
            </button>
            
            <ul class="nav-links" id="nav-links">
                <li class="nav-item">
                    <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="/paket" class="nav-link {{ Request::is('paket') ? 'active' : '' }}">Paket Internet</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Infrastruktur <i class='bx bx-chevron-down'></i></a>
                    <div class="dropdown-menu">
                        <a href="/infrastruktur/colocation" class="dropdown-item"><i class='bx bx-server'></i> Colocation</a>
                        <a href="/infrastruktur/coverage" class="dropdown-item"><i class='bx bx-map-pin'></i> Internet Coverage</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Kredibilitas <i class='bx bx-chevron-down'></i></a>
                    <div class="dropdown-menu">
                        <a href="/tentang-kami" class="dropdown-item"><i class='bx bx-buildings'></i> Tentang Kami</a>
                        <a href="/sertifikasi-legalitas" class="dropdown-item"><i class='bx bx-shield-quarter'></i> Sertifikasi & Legalitas</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Bantuan <i class='bx bx-chevron-down'></i></a>
                    <div class="dropdown-menu">
                        <a href="/hubungi-kami" class="dropdown-item"><i class='bx bx-phone-call'></i> Hubungi Kami</a>
                        <a href="/faq" class="dropdown-item"><i class='bx bx-help-circle'></i> FAQ</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="/speedtest" class="nav-link {{ Request::is('speedtest') ? 'active' : '' }}">Speedtest</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Floating WhatsApp Button (Custom CSS applied directly to avoid Tailwind recompilation issues) -->
    <style>
        .floating-wa {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .floating-wa:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 25px rgba(37, 211, 102, 0.6);
            color: white;
        }
        .wa-ping {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background-color: #25D366;
            opacity: 0.5;
            animation: ping-wa 2s cubic-bezier(0, 0, 0.2, 1) infinite;
        }
        @keyframes ping-wa {
            75%, 100% {
                transform: scale(1.8);
                opacity: 0;
            }
        }
        .wa-icon {
            font-size: 38px;
            position: relative;
            z-index: 10;
        }
    </style>
    <a href="https://wa.me/6281234567890" target="_blank" aria-label="Chat via WhatsApp" class="floating-wa">
        <span class="wa-ping"></span>
        <i class='bx bxl-whatsapp wa-icon'></i>
    </a>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <a href="/" class="footer-brand mb-2 inline-block -ml-3.5 -mt-5 md:-mt-6">
                        <img src="{{ asset('images/logoFooter.png') }}" alt="LancarWiFi Logo" class="h-16 md:h-18 w-auto object-contain transition-transform hover:scale-105">
                    </a>
                    <p class="footer-text">Penyedia layanan internet fiber optic ultra cepat, stabil, dan terpercaya untuk mendampingi segala aktivitas digital Anda tanpa batas.</p>
                    <div class="footer-socials">
                        <a href="#" class="social-icon" aria-label="Facebook"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="social-icon" aria-label="Instagram"><i class='bx bxl-instagram'></i></a>
                        <a href="#" class="social-icon" aria-label="WhatsApp"><i class='bx bxl-whatsapp'></i></a>
                        <a href="#" class="social-icon" aria-label="Youtube"><i class='bx bxl-youtube'></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="footer-heading">Layanan</h4>
                    <ul class="footer-links">
                        <li><a href="/paket">Paket Internet</a></li>
                        <li><a href="/infrastruktur/colocation">Server Colocation</a></li>
                        <li><a href="/infrastruktur/coverage">Cek Area Coverage</a></li>
                        <li><a href="/speedtest">Uji Kecepatan (Speedtest)</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="footer-heading">Perusahaan</h4>
                    <ul class="footer-links">
                        <li><a href="/tentang-kami">Tentang LancarWiFi</a></li>
                        <li><a href="/sertifikasi-legalitas">Sertifikasi & Legalitas</a></li>
                        <li><a href="/hubungi-kami">Hubungi Kami</a></li>
                        <li><a href="/faq">Pusat Bantuan (FAQ)</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="footer-heading">Hubungi Kami</h4>
                    <div class="footer-contact-item">
                        <i class='bx bxl-whatsapp'></i>
                        <div>
                            <strong>WhatsApp Sales & Care</strong><br>
                            <span>+62 812-3456-7890</span>
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <i class='bx bx-envelope'></i>
                        <div>
                            <strong>Email Support</strong><br>
                            <span>support@lancarwifi.id</span>
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <i class='bx bx-map'></i>
                        <div>
                            <strong>Kantor Pusat</strong><br>
                            <span>Jl. Fiber Optic No. 88, Jakarta Selatan</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} LancarWiFi. All rights reserved. Powered by Fiber Optic Infrastructure.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Navbar Scroll Effect
        const navbar = document.getElementById('main-navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Mobile Menu Toggle
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const navLinks = document.getElementById('nav-links');
        
        if (mobileMenuToggle && navLinks) {
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
        }

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
