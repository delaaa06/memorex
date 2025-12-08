<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🤡 | MemoraX</title>
    <link href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        html {
            height: 100%;
        }
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
            padding: 20px;
        }
        .footer {
            background-color: #ea8428 !important;
        }
        .teksFooter{
            color: aliceblue !important; 
        }
        .searchButton{
            border-color: #f1ae61;
            color: gray;
            background-color: white;
        }
        .maskotweb{
            height: 45px;
            width: 45px;
            border-radius: 50%;
        }
        #header {
            background-color: #ffe97a !important;
        }

        .judul{
            font-size: clamp(28px, 6vw, 55px);
            font-weight: bold;
            font-family: segoe script,cursive;
            text-align: center;
            margin: 0;
        }
        .shine {
            position: relative;
            display: inline-block;
            color: #333;
            overflow: hidden;
        }

        .shine::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                120deg,
                rgba(0, 136, 255, 0) 0%,
                rgba(255, 255, 255, 0.6) 50%,
                rgba(0, 136, 255, 0) 100%
            );
            transform: skewX(-20deg);
            animation: shineLoop 3s ease-in-out infinite;
            z-index: 1;
            pointer-events: none;
        }
        @keyframes shineLoop {
            0%, 100% { left: -100%; }
            50% { left: 150%; }
        }
        .typewriter span {
            opacity: 0;
            display: inline-block;
            animation: fadeInLetter 0.08s forwards;
            position: relative;
            z-index: 0;
        }

        @keyframes fadeInLetter {
            from {
                opacity: 0;
                transform: translateX(-10px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .typewriter span:nth-child(1) { animation-delay: 0.05s; }
        .typewriter span:nth-child(2) { animation-delay: 0.10s; }
        .typewriter span:nth-child(3) { animation-delay: 0.15s; }
        .typewriter span:nth-child(4) { animation-delay: 0.20s; }
        .typewriter span:nth-child(5) { animation-delay: 0.25s; }
        .typewriter span:nth-child(6) { animation-delay: 0.30s; }
        .typewriter span:nth-child(7) { animation-delay: 0.35s; }
        .typewriter span:nth-child(8) { animation-delay: 0.40s; }
        .typewriter span:nth-child(9) { animation-delay: 0.45s; }
        .typewriter span:nth-child(10){ animation-delay: 0.50s; }
        .typewriter span:nth-child(11){ animation-delay: 0.55s; }
        .typewriter span:nth-child(12){ animation-delay: 0.60s; }

        .card-fitur{
            width: 100%;
            height: 100%;
            opacity: 1;
            border-radius: 20px;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            scroll-snap-align: start;
            border: 2px solid transparent;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
        }

        .card-fitur:hover{
            border-color: #5675b3;
        }
        .scroll-content {
            display: flex;
            gap: 20px;
            overflow-x: auto;
            padding-bottom: 20px;
            scroll-snap-type: x mandatory;
            padding-left: 20px;
        }
        .card{
            width: 420px;
            height: 260px;
            max-height: 310px;
            min-width: 310px;
            opacity: 1;
            border-radius: 20px;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            scroll-snap-align: start;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            cursor: pointer;
        }
        .card-text{
            font-family: 'Segoe Script', cursive;
            font-size: 20px;
        }
        .desc-card{
            width: 100%;
            background: #f8f9fa;
            padding: 15px;
            border-radius: 15px;
            margin-top: auto;
            box-shadow: 0 5px 20px rgba(0,0,0,0.3);
        }
        .card:hover{
            border-color: #5675b3;
            transform: scale(1.05) translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }
        .content-base {
            overflow: hidden;
            width: 100%;
            padding: 20px 0;
        }
        .swipe-left {
            display: flex;
            gap: 20px;
            width: max-content;
            animation: scrollLeft 10s linear infinite;
        }
        .swipe-right{
            display: flex;
            gap: 20px;
            width: max-content;
            animation: scrollRight 10s linear infinite;
        }
        @keyframes scrollLeft {
            from { transform: translateX(0); }
            to { transform: translateX(-50%); }
        }
        @keyframes scrollRight {
            from { transform: translateX(-50%); }
            to { transform: translateX(0); }
        }
        .scroll-container.paused {
            animation-play-state: paused !important;
        }

        .support-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .support-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .support-header h2 {
            font-weight: 700;
            color: #279D9F;
            margin-bottom: 10px;
        }

        .support-header p {
            color: #666;
            font-size: 16px;
        }

        .saweria-button {
            display: inline-block;
            background-color: #FF6B6B;
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 107, 107, 0.3);
        }

        .saweria-button:hover {
            background-color: #FF5252;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 107, 107, 0.4);
            color: white;
        }

        .support-card {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="header">
            <div class="container-fluid">
                {{-- Menggunakan asset() untuk gambar --}}
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img class="maskotweb" src="{{ asset('foto/maskotweb.jpeg') }}" alt="🤡">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('upload') ? 'active' : '' }}" href="{{ route('upload') }}">Make a memory</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('search') ? 'active' : '' }}" href="{{ route('search') }}">Hall of Shame</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}" href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('feedback') ? 'active' : '' }}" href="{{ route('feedback') }}">Feedback</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('support') ? 'active' : '' }}" href="{{ route('support') }}">Support Us</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="content container">
        <div class="support-container">
            <div class="support-header">
                <h2>☕ Dukung Kami</h2>
                <p>Bantu kami terus berkembang dengan memberikan dukungan melalui Saweria!</p>
            </div>

            <div class="text-center">
                <div class="support-card">
                    <i class="fas fa-heart" style="font-size: 64px; color: #EA4828; margin-bottom: 20px;"></i>
                    <h3 style="color: #279D9F; margin-bottom: 15px;">Terima kasih atas dukungannya!</h3>
                    <p style="color: #666; margin-bottom: 30px;">
                        Dukungan Anda sangat berarti bagi kami untuk terus mengembangkan platform ini.
                    </p>
                    <a href="https://saweria.co/MemoraX" target="_blank" class="saweria-button">
                        <i class="fas fa-external-link-alt"></i> Buka Saweria
                    </a>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer" style="--bs-bg-opacity: .5">
        <div class="container text-center text-md-start">
            <div class="row text-center text-md-start">

                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="teksFooter"><b>MemoraX</b></h5>
                    <p class="text-white text-decoration-none">platform tempat siapa saja bisa berbagi dan membaca cerita tentang momen memalukan dengan cara yang seru, ringan, dan menghibur.</p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="teksFooter"><b>Tautan Cepat</b></h5>
                    <p><a href="#" class="text-white text-decoration-none">FAQ</a></p>
                    <p><a href="#" class="text-white text-decoration-none">Karir</a></p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="teksFooter"><b>Kontak</b></h5>
                    <p class="text-white text-decoration-none">Alamat: Surabaya</p>
                    <p class="text-white text-decoration-none">Email: MemoraXMail@gmail.com</p>
                    <p class="text-white text-decoration-none">Telepon: 08123456789</p>
                </div>

                </div>
                    <hr class="mb-4">
                <div class="row align-items-center">

                <div class="col-12 text-center">
                    {{-- Menggunakan date() helper untuk tahun dinamis --}}
                    <p class="text-white text-decoration-none">Hak Cipta ©{{ date('Y') }} | Dibuat dengan Empati</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const swipeLeft = document.querySelector('.swipe-left');
        const swipeRight = document.querySelector('.swipe-right');

        const leftCards = document.querySelectorAll('.swipe-left .card');
        const rightCards = document.querySelectorAll('.swipe-right .card');
        
        function pauseLeft() { swipeLeft.style.animationPlayState = 'paused'; }
        function resumeLeft() { swipeLeft.style.animationPlayState = 'running'; }

        function pauseRight() { swipeRight.style.animationPlayState = 'paused'; }
        function resumeRight() { swipeRight.style.animationPlayState = 'running'; }

        leftCards.forEach(card => {
            card.addEventListener('mouseenter', pauseLeft);
            card.addEventListener('mouseleave', resumeLeft);
            card.addEventListener('touchstart', pauseLeft, { passive: true });
            card.addEventListener('touchend', resumeLeft, { passive: true });
            card.addEventListener('touchcancel', resumeLeft, { passive: true });
            
            card.addEventListener('click', function() {
                window.location.href = "{{ route('detail', ['id' => 1]) }}";
            });
        });

        rightCards.forEach(card => {
            card.addEventListener('mouseenter', pauseRight);
            card.addEventListener('mouseleave', resumeRight);
            card.addEventListener('touchstart', pauseRight, { passive: true });
            card.addEventListener('touchend', resumeRight, { passive: true });
            card.addEventListener('touchcancel', resumeRight, { passive: true });
            
            card.addEventListener('click', function() {
                window.location.href = "{{ route('detail', ['id' => 1]) }}";
            });
        });

        setTimeout(() => {
            const shineElement = document.querySelector('.shine');
            if (shineElement) {
                shineElement.style.cursor = 'pointer';
            }
        }, 1000);
    </script>
    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>