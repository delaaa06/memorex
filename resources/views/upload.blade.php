<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🤡 | MemoraX</title>
    <link href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --yellow: #FFE97A;
            --orange: #E18E2E;
            --red: #EA4828;
            --mint: #43B5AD;
            --teal: #279D9F;

            --primary: var(--teal);
            --secondary: var(--mint);
            --accent: var(--yellow);
            --danger: var(--red);
        }

        html {
            height: 100%;
        }
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            position: relative;
            overflow-x: hidden;
        }
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background: linear-gradient(135deg, var(--yellow) 0%, var(--mint) 100%);
            z-index: -2;
        }
        body::after {
            content: "";
            position: fixed;
            inset: 0;
            background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVQIW2NkYGBgAAAABQABDQottAAAAABJRU5ErkJggg==");
            opacity: 0.18;
            z-index: -1;
            pointer-events: none;
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

        .form-container {
            background: #ffffff;
            border-radius: 20px;
            padding: 25px;
            max-width: 620px;
            margin: 0 auto;
            box-shadow: 0px 8px 0px var(--primary);
            border: 3px solid var(--accent);
        }

        h2 {
            text-align: center;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 14px;
        }

        label {
            display: block;
            font-weight: 600;
            font-size: 14px;
            color: var(--primary);
            margin-top: 16px;
        }
        
        input:not([type="file"]):not([type="radio"]),
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid var(--secondary);
            border-radius: 14px;
            margin-top: 5px;
            background: #f9ffff;
            font-size: 14px;
            transition: border-color 0.2s, box-shadow 0.2s;
            box-sizing: border-box;
            color: #333;
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }
        
        input:not([type="file"]):not([type="radio"]):focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: var(--orange);
            box-shadow: 0 0 0 4px rgba(225, 142, 46, 0.3);
        }
        
        .upload-box {
            display: block;
            width: 100%;
            box-sizing: border-box;
            border: 3px dashed var(--orange);
            padding: 25px;
            background: #FFF4C4;
            border-radius: 16px;
            text-align: center;
            color: #633f00;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 10px;
        }

        .upload-box:hover {
            background: var(--yellow);
        }

        input[type="file"] {
            display: none;
        }
        
        .upload-box small {
            font-weight: 400;
            display: block;
            margin-top: 5px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 14px;
            border-radius: 18px;
            border: none;
            font-size: 16px;
            font-weight: 700;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            color: white;
            margin-top: 28px;
            cursor: pointer;
            box-shadow: 0px 6px 0px var(--primary);
            transition: transform 0.15s, box-shadow 0.15s;
        }

        button[type="submit"]:active {
            transform: translateY(3px);
            box-shadow: 0px 3px 0px var(--primary);
        }

        .visibility-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 12px;
            margin-top: 10px;
        }

        .visibility-card {
            position: relative;
            cursor: pointer;
            border: 3px solid var(--secondary);
            border-radius: 14px;
            padding: 18px 12px;
            background: #f9ffff;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .visibility-card:hover {
            border-color: var(--orange);
            background: #FFF4C4;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .visibility-card input[type="radio"] {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }

        .visibility-card input[type="radio"]:checked + .visibility-content {
            color: var(--primary);
        }

        .visibility-card input[type="radio"]:checked ~ .visibility-content i {
            color: var(--orange);
            transform: scale(1.2);
        }

        .visibility-card:has(input[type="radio"]:checked) {
            border-color: var(--orange);
            background: linear-gradient(135deg, #FFF4C4 0%, #f9ffff 100%);
            box-shadow: 0 0 0 3px rgba(225, 142, 46, 0.2);
        }

        .visibility-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .visibility-content i {
            font-size: 28px;
            color: var(--secondary);
            transition: all 0.3s ease;
            margin-bottom: 4px;
        }

        .visibility-title {
            font-weight: 700;
            font-size: 14px;
            color: var(--primary);
            display: block;
        }

        .visibility-content small {
            font-size: 11px;
            color: #666;
            font-weight: 400;
            line-height: 1.3;
        }
    </style>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="header">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}"><img class="maskotweb" src="{{ asset('foto/maskotweb.jpeg') }}" alt="🤡"></a>
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
        <div class="form-container">
            <h2>Unggah Postingan 🎉</h2>

            <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <label for="title">Judul Momen</label>
                <input type="text" id="title" name="title" required value="{{ old('title') }}" />

                <label for="story">Cerita Lengkap</label>
                <textarea id="story" name="story" required>{{ old('story') }}</textarea>

                <label for="category">Kategori</label>
                <select id="category" name="category" required>
                    <option value="">Pilih kategori</option>
                    <option value="konyol" {{ old('category') == 'konyol' ? 'selected' : '' }}>Konyol</option>
                    <option value="malu" {{ old('category') == 'malu' ? 'selected' : '' }}>Malu</option>
                    <option value="hebat" {{ old('category') == 'hebat' ? 'selected' : '' }}>Senang</option>
                    <option value="lainnya" {{ old('category') == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                </select>

                <label for="datetime">Tanggal Kejadian</label>
                <input type="datetime-local" id="datetime" name="datetime" value="{{ old('datetime') }}" />

                <label>Visibilitas</label>
                <div class="visibility-options">
                    <label class="visibility-card">
                        <input type="radio" name="visibility" value="public" required {{ old('visibility') == 'public' ? 'checked' : '' }}>
                        <div class="visibility-content">
                            <i class="fas fa-globe"></i>
                            <span class="visibility-title">Public</span>
                            <small>Semua orang bisa melihat</small>
                        </div>
                    </label>
                    
                    <label class="visibility-card">
                        <input type="radio" name="visibility" value="private" required {{ old('visibility') == 'private' ? 'checked' : '' }}>
                        <div class="visibility-content">
                            <i class="fas fa-lock"></i>
                            <span class="visibility-title">Private</span>
                            <small>Hanya kamu yang bisa lihat</small>
                        </div>
                    </label>
                    
                    <label class="visibility-card">
                        <input type="radio" name="visibility" value="anon" required {{ old('visibility') == 'anon' ? 'checked' : '' }}>
                        <div class="visibility-content">
                            <i class="fas fa-user-secret"></i>
                            <span class="visibility-title">Anonymous</span>
                            <small>Public tanpa nama</small>
                        </div>
                    </label>
                </div>

                <label>Upload Media (max 80MB)</label>
                
                <label for="media" class="upload-box">
                    Klik di sini untuk pilih file<br>
                    <small>(gambar atau video)</small>
                </label>

                <input 
                    type="file"
                    id="media"
                    name="media"
                    accept="image/*,video/*"
                    required
                />

                <button type="submit" name="submit">Upload Sekarang 🚀</button>
            </form>
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
                    <p class="text-white text-decoration-none">Hak Cipta ©{{ date('Y') }} | Dibuat dengan Empati</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const swipeLeft = document.querySelector('.swipe-left');
        const swipeRight = document.querySelector('.swipe-right');

        if (swipeLeft) {
            const leftCards = document.querySelectorAll('.swipe-left .card');
            
            function pauseLeft() { swipeLeft.style.animationPlayState = 'paused'; }
            function resumeLeft() { swipeLeft.style.animationPlayState = 'running'; }

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
        }

        if (swipeRight) {
            const rightCards = document.querySelectorAll('.swipe-right .card');
            
            function pauseRight() { swipeRight.style.animationPlayState = 'paused'; }
            function resumeRight() { swipeRight.style.animationPlayState = 'running'; }

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
        }

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