<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - LancarWiFi</title>
    <meta name="description" content="Admin Portal LancarWiFi - Kelola layanan internet fiber optic Anda.">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        /* ============================================
           RESET & BASE
           ============================================ */
        *, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            overflow: hidden;
        }

        body {
            font-family: 'Plus Jakarta Sans', 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* ============================================
           SPLIT LAYOUT
           ============================================ */
        .login-wrapper {
            display: flex;
            height: 100vh;
            width: 100%;
        }

        /* ============================================
           LEFT SIDE — BRANDING
           ============================================ */
        .branding-side {
            flex: 0 0 48%;
            background: linear-gradient(135deg, #0c1d4d 0%, #0f3285 35%, #1a56c4 65%, #2563eb 100%);
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 64px;
            overflow: hidden;
        }

        /* Animated glowing orbs */
        .branding-side::before {
            content: '';
            position: absolute;
            top: -120px;
            right: -80px;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(56, 189, 248, 0.2) 0%, transparent 70%);
            border-radius: 50%;
            animation: float-orb 8s ease-in-out infinite;
        }

        .branding-side::after {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -60px;
            width: 350px;
            height: 350px;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.15) 0%, transparent 70%);
            border-radius: 50%;
            animation: float-orb 10s ease-in-out infinite reverse;
        }

        @keyframes float-orb {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(30px, -20px) scale(1.1); }
        }

        /* Network grid pattern */
        .network-pattern {
            position: absolute;
            inset: 0;
            opacity: 0.06;
            background-image:
                radial-gradient(circle at 25% 25%, rgba(255,255,255,0.3) 1px, transparent 1px),
                radial-gradient(circle at 75% 75%, rgba(255,255,255,0.3) 1px, transparent 1px),
                radial-gradient(circle at 50% 50%, rgba(255,255,255,0.2) 1px, transparent 1px);
            background-size: 60px 60px, 60px 60px, 30px 30px;
        }

        /* Connection lines SVG */
        .network-lines {
            position: absolute;
            inset: 0;
            opacity: 0.08;
        }

        .branding-content {
            position: relative;
            z-index: 10;
            max-width: 440px;
        }

        .branding-logo {
            height: 72px;
            width: auto;
            margin-bottom: 48px;
            filter: brightness(0) invert(1);
            opacity: 0.95;
        }

        .branding-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 16px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 100px;
            font-size: 12px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.8);
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 32px;
            backdrop-filter: blur(8px);
        }

        .branding-badge i {
            font-size: 14px;
            color: #38bdf8;
        }

        .branding-title {
            font-size: 40px;
            font-weight: 800;
            color: #ffffff;
            line-height: 1.2;
            margin-bottom: 16px;
            letter-spacing: -0.5px;
        }

        .branding-title span {
            color: #38bdf8;
        }

        .branding-desc {
            font-size: 16px;
            font-weight: 400;
            color: rgba(255, 255, 255, 0.65);
            line-height: 1.7;
            margin-bottom: 48px;
        }

        /* Feature pills */
        .feature-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .feature-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 18px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            font-size: 13px;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(4px);
            transition: all 0.3s ease;
        }

        .feature-pill:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .feature-pill i {
            font-size: 18px;
            color: #38bdf8;
        }

        /* ============================================
           RIGHT SIDE — LOGIN FORM
           ============================================ */
        .form-side {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 48px;
            background: #ffffff;
            position: relative;
            overflow-y: auto;
        }

        /* Subtle corner decoration */
        .form-side::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(37, 99, 235, 0.03) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        .form-container {
            width: 100%;
            max-width: 420px;
            position: relative;
            z-index: 10;
        }

        /* Mobile logo (hidden on desktop) */
        .mobile-logo {
            display: none;
            text-align: center;
            margin-bottom: 40px;
        }

        .mobile-logo img {
            height: 56px;
            width: auto;
        }

        .form-header {
            margin-bottom: 40px;
        }

        .form-header h1 {
            font-size: 28px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 8px;
            letter-spacing: -0.3px;
        }

        .form-header p {
            font-size: 15px;
            font-weight: 400;
            color: #64748b;
            line-height: 1.5;
        }

        /* ============================================
           ERROR ALERT
           ============================================ */
        .alert-error {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 14px 16px;
            background: #fef2f2;
            border: 1px solid #fecaca;
            border-radius: 12px;
            margin-bottom: 24px;
            animation: shake 0.4s ease-in-out;
        }

        .alert-error i {
            font-size: 20px;
            color: #ef4444;
            margin-top: 1px;
            flex-shrink: 0;
        }

        .alert-error span {
            font-size: 14px;
            color: #991b1b;
            font-weight: 500;
            line-height: 1.5;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            20% { transform: translateX(-6px); }
            40% { transform: translateX(6px); }
            60% { transform: translateX(-4px); }
            80% { transform: translateX(4px); }
        }

        /* ============================================
           FORM FIELDS
           ============================================ */
        .form-group {
            margin-bottom: 24px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #334155;
            margin-bottom: 8px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper i.input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
            color: #94a3b8;
            pointer-events: none;
            transition: color 0.2s ease;
        }

        .input-wrapper input {
            width: 100%;
            padding: 14px 16px 14px 48px;
            font-family: inherit;
            font-size: 15px;
            font-weight: 500;
            color: #1e293b;
            background: #f8fafc;
            border: 1.5px solid #e2e8f0;
            border-radius: 12px;
            outline: none;
            transition: all 0.25s ease;
        }

        .input-wrapper input::placeholder {
            color: #94a3b8;
            font-weight: 400;
        }

        .input-wrapper input:hover {
            border-color: #cbd5e1;
            background: #f1f5f9;
        }

        .input-wrapper input:focus {
            border-color: #2563eb;
            background: #ffffff;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
        }

        .input-wrapper input:focus ~ i.input-icon {
            color: #2563eb;
        }

        .input-wrapper input.is-invalid {
            border-color: #ef4444;
            background: #fef2f2;
        }

        .input-wrapper input.is-invalid:focus {
            box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.1);
        }

        /* Password toggle */
        .password-toggle {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #94a3b8;
            font-size: 20px;
            padding: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: color 0.2s ease;
        }

        .password-toggle:hover {
            color: #475569;
        }

        .field-error {
            display: flex;
            align-items: center;
            gap: 6px;
            margin-top: 8px;
            font-size: 13px;
            font-weight: 500;
            color: #ef4444;
        }

        .field-error i {
            font-size: 14px;
        }

        /* ============================================
           REMEMBER ME
           ============================================ */
        .form-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 32px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            user-select: none;
        }

        .remember-me input[type="checkbox"] {
            appearance: none;
            -webkit-appearance: none;
            width: 20px;
            height: 20px;
            border: 1.5px solid #cbd5e1;
            border-radius: 6px;
            background: #f8fafc;
            cursor: pointer;
            position: relative;
            transition: all 0.2s ease;
            flex-shrink: 0;
        }

        .remember-me input[type="checkbox"]:hover {
            border-color: #2563eb;
        }

        .remember-me input[type="checkbox"]:checked {
            background: #2563eb;
            border-color: #2563eb;
        }

        .remember-me input[type="checkbox"]:checked::after {
            content: '';
            position: absolute;
            left: 6px;
            top: 3px;
            width: 5px;
            height: 9px;
            border: solid #fff;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .remember-me input[type="checkbox"]:focus {
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
        }

        .remember-me span {
            font-size: 14px;
            font-weight: 500;
            color: #64748b;
        }

        /* ============================================
           LOGIN BUTTON
           ============================================ */
        .btn-login {
            width: 100%;
            padding: 16px 24px;
            font-family: inherit;
            font-size: 16px;
            font-weight: 700;
            color: #ffffff;
            background: linear-gradient(135deg, #1d4ed8 0%, #2563eb 50%, #3b82f6 100%);
            border: none;
            border-radius: 12px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 16px rgba(37, 99, 235, 0.3);
        }

        .btn-login::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #1e40af 0%, #1d4ed8 50%, #2563eb 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.4);
        }

        .btn-login:hover::before {
            opacity: 1;
        }

        .btn-login:active {
            transform: translateY(0);
            box-shadow: 0 2px 8px rgba(37, 99, 235, 0.3);
        }

        .btn-login span,
        .btn-login i {
            position: relative;
            z-index: 1;
        }

        .btn-login i {
            font-size: 20px;
            transition: transform 0.3s ease;
        }

        .btn-login:hover i {
            transform: translateX(3px);
        }

        /* Loading state */
        .btn-login.is-loading {
            pointer-events: none;
            opacity: 0.8;
        }

        .btn-login.is-loading span {
            visibility: hidden;
        }

        .btn-login.is-loading i {
            visibility: hidden;
        }

        .btn-login.is-loading::after {
            content: '';
            position: absolute;
            width: 22px;
            height: 22px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-top-color: #ffffff;
            border-radius: 50%;
            animation: spin 0.7s linear infinite;
            z-index: 2;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* ============================================
           FOOTER
           ============================================ */
        .form-footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 24px;
            border-top: 1px solid #f1f5f9;
        }

        .form-footer a {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 14px;
            font-weight: 500;
            color: #64748b;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .form-footer a:hover {
            color: #2563eb;
        }

        .form-footer a i {
            font-size: 18px;
        }

        .form-copyright {
            margin-top: 16px;
            font-size: 12px;
            color: #94a3b8;
        }

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 1024px) {
            .branding-side {
                flex: 0 0 42%;
                padding: 48px;
            }

            .branding-title {
                font-size: 32px;
            }

            .branding-desc {
                font-size: 15px;
            }
        }

        @media (max-width: 768px) {
            html, body {
                overflow-y: auto;
            }

            .login-wrapper {
                flex-direction: column;
                height: auto;
                min-height: 100vh;
            }

            .branding-side {
                flex: none;
                padding: 40px 24px;
                align-items: center;
                text-align: center;
            }

            .branding-content {
                max-width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .branding-logo {
                height: 44px;
                margin-bottom: 24px;
            }

            .branding-title {
                font-size: 24px;
                margin-bottom: 12px;
            }

            .branding-desc {
                font-size: 14px;
                margin-bottom: 24px;
            }

            .feature-pills {
                justify-content: center;
            }

            .form-side {
                padding: 32px 24px 48px;
            }

            .mobile-logo {
                display: block;
            }

            .form-header {
                margin-bottom: 32px;
            }

            .form-header h1 {
                font-size: 24px;
            }
        }

        @media (max-width: 430px) {
            .branding-side {
                padding: 32px 20px;
            }

            .branding-title {
                font-size: 22px;
            }

            .feature-pills {
                gap: 8px;
            }

            .feature-pill {
                padding: 8px 14px;
                font-size: 12px;
            }

            .form-side {
                padding: 28px 20px 40px;
            }

            .form-header h1 {
                font-size: 22px;
            }

            .form-header p {
                font-size: 14px;
            }

            .input-wrapper input {
                padding: 12px 16px 12px 44px;
                font-size: 14px;
            }

            .btn-login {
                padding: 14px 20px;
                font-size: 15px;
            }
        }

        @media (max-width: 360px) {
            .branding-side {
                padding: 24px 16px;
            }

            .branding-title {
                font-size: 20px;
            }

            .branding-badge {
                font-size: 11px;
                padding: 5px 12px;
            }

            .form-side {
                padding: 24px 16px 36px;
            }

            .form-container {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="login-wrapper">

        <!-- ========================================
             LEFT SIDE: BRANDING
             ======================================== -->
        <div class="branding-side">
            <!-- Background patterns -->
            <div class="network-pattern"></div>
            <svg class="network-lines" viewBox="0 0 600 800" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="100" y1="100" x2="300" y2="200" stroke="white" stroke-width="0.5" opacity="0.4"/>
                <line x1="300" y1="200" x2="500" y2="150" stroke="white" stroke-width="0.5" opacity="0.3"/>
                <line x1="300" y1="200" x2="200" y2="400" stroke="white" stroke-width="0.5" opacity="0.35"/>
                <line x1="200" y1="400" x2="450" y2="350" stroke="white" stroke-width="0.5" opacity="0.3"/>
                <line x1="450" y1="350" x2="500" y2="550" stroke="white" stroke-width="0.5" opacity="0.25"/>
                <line x1="200" y1="400" x2="100" y2="600" stroke="white" stroke-width="0.5" opacity="0.3"/>
                <line x1="100" y1="600" x2="350" y2="650" stroke="white" stroke-width="0.5" opacity="0.25"/>
                <line x1="350" y1="650" x2="500" y2="550" stroke="white" stroke-width="0.5" opacity="0.2"/>
                <circle cx="100" cy="100" r="3" fill="white" opacity="0.5"/>
                <circle cx="300" cy="200" r="4" fill="white" opacity="0.6"/>
                <circle cx="500" cy="150" r="3" fill="white" opacity="0.4"/>
                <circle cx="200" cy="400" r="4" fill="white" opacity="0.5"/>
                <circle cx="450" cy="350" r="3" fill="white" opacity="0.4"/>
                <circle cx="500" cy="550" r="3" fill="white" opacity="0.3"/>
                <circle cx="100" cy="600" r="3" fill="white" opacity="0.4"/>
                <circle cx="350" cy="650" r="4" fill="white" opacity="0.35"/>
            </svg>

            <!-- Content -->
            <div class="branding-content">
                <img src="{{ asset('images/logo.png') }}" alt="LancarWiFi Logo" class="branding-logo">
                

                <h2 class="branding-title">
                    Kelola Layanan<br>
                    <span>LancarWiFi</span>
                </h2>

                <p class="branding-desc">
                    Akses panel administrasi untuk mengelola paket internet, informasi layanan, dan konten website LancarWiFi dalam satu tempat yang aman.
                </p>

                <div class="feature-pills">
                    <div class="feature-pill">
                        <i class='bx bx-package'></i>
                        Manajemen Paket
                    </div>
                    <div class="feature-pill">
                        <i class='bx bx-map-alt'></i>
                        Area Coverage
                    </div>
                    <div class="feature-pill">
                        <i class='bx bx-help-circle'></i>
                        FAQ & Konten
                    </div>
                    <div class="feature-pill">
                        <i class='bx bx-bar-chart-alt-2'></i>
                        Statistik
                    </div>
                </div>
            </div>
        </div>

        <!-- ========================================
             RIGHT SIDE: LOGIN FORM
             ======================================== -->
        <div class="form-side">
            <div class="form-container">

                <!-- Mobile Logo -->
                <div class="mobile-logo">
                    <img src="{{ asset('images/logo.png') }}" alt="LancarWiFi Logo">
                </div>

                <!-- Header -->
                <div class="form-header">
                    <h1>Selamat Datang Kembali</h1>
                    <p>Masuk ke Admin Panel LancarWiFi</p>
                </div>

                <!-- Error Alert -->
                @if ($errors->any())
                    <div class="alert-error" role="alert">
                        <i class='bx bx-error-circle'></i>
                        <span>{{ $errors->first('email') }}</span>
                    </div>
                @endif

                <!-- Login Form -->
                <form action="{{ route('admin.login') }}" method="POST" id="loginForm">
                    @csrf

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <div class="input-wrapper">
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                value="{{ old('email') }}" 
                                placeholder="admin@lancarwifi.id" 
                                required 
                                autofocus
                                class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                                autocomplete="email"
                            >
                            <i class='bx bx-envelope input-icon'></i>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-wrapper">
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                placeholder="Masukkan password Anda" 
                                required
                                autocomplete="current-password"
                            >
                            <i class='bx bx-lock-alt input-icon'></i>
                            <button type="button" class="password-toggle" id="togglePassword" aria-label="Tampilkan password">
                                <i class='bx bx-hide' id="toggleIcon"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="form-options">
                        <label class="remember-me">
                            <input type="checkbox" name="remember" id="remember">
                            <span>Ingat Saya</span>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn-login" id="btnLogin">
                        <span>Masuk ke Dashboard</span>
                        <i class='bx bx-right-arrow-alt'></i>
                    </button>
                </form>

                <!-- Footer -->
                <div class="form-footer">
                    <a href="/">
                        <i class='bx bx-arrow-back'></i>
                        Kembali ke Website
                    </a>
                    <p class="form-copyright">&copy; {{ date('Y') }} LancarWiFi. All rights reserved.</p>
                </div>

            </div>
        </div>

    </div>

    <!-- ============================================
         SCRIPTS
         ============================================ -->
    <script>
        // Show/Hide Password Toggle
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('toggleIcon');

        togglePassword.addEventListener('click', function() {
            const isPassword = passwordInput.getAttribute('type') === 'password';
            passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
            toggleIcon.classList.toggle('bx-hide', !isPassword);
            toggleIcon.classList.toggle('bx-show', isPassword);
            this.setAttribute('aria-label', isPassword ? 'Sembunyikan password' : 'Tampilkan password');
        });

        // Loading State on Submit
        const loginForm = document.getElementById('loginForm');
        const btnLogin = document.getElementById('btnLogin');

        loginForm.addEventListener('submit', function() {
            btnLogin.classList.add('is-loading');
        });

        // Remove loading state if user navigates back
        window.addEventListener('pageshow', function() {
            btnLogin.classList.remove('is-loading');
        });
    </script>
</body>
</html>
