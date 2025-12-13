<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🤡 | MemoraX</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
        }

        html {
            height: 100%;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            position: relative;
            overflow-x: hidden;
            background: radial-gradient(circle at center, #fff 0%, #fff 60%, #fff4df 85%, #fff4df 100%);
        }
/* 
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background: linear-gradient(135deg, var(--yellow), var(--mint), var(--teal), var(--yellow));
            background-size: 400% 400%;
            animation: gradient 18s ease infinite;
            z-index: -1;
        } */

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
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
            animation: scrollLeft 20s linear infinite;
        }
        
        .swipe-right{
            display: flex;
            gap: 20px;
            width: max-content;
            animation: scrollRight 20s linear infinite;
        }
        
        @keyframes scrollLeft {
            from { transform: translateX(0); }
            to { transform: translateX(-100%); }
        }
        
        @keyframes scrollRight {
            from { transform: translateX(-100%); }
            to { transform: translateX(0); }
        }
        
        .scroll-container.paused {
            animation-play-state: paused !important;
        }

        .post-container {
            width: 100%;
            max-width: 700px;
            background: #ffffff;
            padding: 28px;
            border-radius: 22px;
            border: 3px solid var(--accent);
            box-shadow: 0px 8px 0px var(--primary);
            box-sizing: border-box;
            position: relative;
        }

        .post-title {
            font-size: 28px;
            font-weight: 800;
            color: var(--primary);
            margin: 0 0 5px 0;
        }

        .post-info {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }

        .post-category {
            display: inline-block;
            background: var(--accent);
            padding: 6px 12px;
            border-radius: 12px;
            font-weight: 600;
            color: #5c3a00;
            margin-bottom: 20px;
        }

        .post-media {
            width: 100%;
            border-radius: 18px;
            box-shadow: 0px 6px 0px var(--secondary);
            margin-bottom: 20px;
            object-fit: cover;
            max-height: 380px;
        }

        .post-story {
            line-height: 1.7;
            font-size: 16px;
            white-space: pre-line;
        }

        .back-button {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background: var(--primary);
            color: white;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.2s;
        }

        .back-button:hover {
            transform: translateY(-2px);
            color: white;
        }
        
        .detail-page {
            display: none;
        }

        .report-button {
            position: absolute;
            top: 28px;
            right: 28px;
            background: var(--red);
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 0px #c93820;
        }

        .report-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 0px #c93820;
        }

        .report-button:active {
            transform: translateY(1px);
            box-shadow: 0 2px 0px #c93820;
        }

        .report-button i {
            margin-right: 6px;
        }

        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1000;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .modal-overlay.show {
            display: flex;
        }

        .modal-report {
            background: white;
            border-radius: 20px;
            padding: 30px;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            border: 3px solid var(--accent);
            position: relative;
            animation: modalSlideIn 0.3s ease;
            max-height: 90vh;
            overflow-y: auto;
        }

        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .modal-report h3 {
            color: var(--red);
            font-weight: 800;
            margin-bottom: 10px;
            font-size: 24px;
        }

        .modal-report p {
            color: #666;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .close-modal {
            position: absolute;
            top: 15px;
            right: 15px;
            background: none;
            border: none;
            font-size: 24px;
            color: #999;
            cursor: pointer;
            transition: color 0.2s;
        }

        .close-modal:hover {
            color: var(--red);
        }

        .report-options {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-bottom: 20px;
        }

        .report-option {
            position: relative;
            cursor: pointer;
            border: 3px solid var(--secondary);
            border-radius: 12px;
            padding: 15px;
            background: #f9ffff;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
        }

        .report-option:hover {
            border-color: var(--orange);
            background: #FFF4C4;
            transform: translateX(5px);
        }

        .report-option input[type="radio"] {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }

        .report-option:has(input[type="radio"]:checked) {
            border-color: var(--red);
            background: #ffe6e6;
        }

        .report-option label {
            cursor: pointer;
            display: flex;
            align-items: center;
            width: 100%;
            margin: 0;
            font-weight: 600;
            color: #333;
        }

        .report-option i {
            margin-right: 10px;
            font-size: 18px;
            color: var(--red);
        }

        .report-textarea {
            width: 100%;
            padding: 12px;
            border: 3px solid var(--secondary);
            border-radius: 12px;
            margin-bottom: 20px;
            resize: vertical;
            min-height: 100px;
            font-size: 14px;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .report-textarea:focus {
            outline: none;
            border-color: var(--orange);
        }

        .submit-report {
            width: 100%;
            padding: 14px;
            background: var(--red);
            color: white;
            border: none;
            border-radius: 12px;
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 0px #c93820;
        }

        .submit-report:hover:not(:disabled) {
            transform: translateY(-2px);
            box-shadow: 0 6px 0px #c93820;
        }

        .submit-report:active:not(:disabled) {
            transform: translateY(1px);
            box-shadow: 0 2px 0px #c93820;
        }

        .submit-report:disabled {
            background: #ccc;
            cursor: not-allowed;
            box-shadow: none;
        }

        .success-message {
            display: none;
            background: #d4edda;
            border: 2px solid #c3e6cb;
            color: #155724;
            padding: 15px;
            border-radius: 12px;
            text-align: center;
            font-weight: 600;
            margin-top: 15px;
        }

        .success-message.show {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="header">
            <div class="container-fluid">
                {{-- Menggunakan asset() helper untuk gambar --}}
                <a class="navbar-brand" href="#"><img class="maskotweb" src="{{ asset('foto/maskotweb.jpeg') }}" alt="🤡"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    {{-- Menggunakan route() helper untuk link --}}
                    <li class="nav-item">
                    <a class="nav-link active" href="{{ route('beranda') }}">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('upload') }}">Make a memory</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('search') }}">Hall of Shame</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('feedback') }}">Feedback</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('support') }}">Support Us</a>
                    </li>
                </ul>
                
                {{-- Form dengan CSRF token jika menggunakan POST --}}
                <form class="d-flex" role="search" action="{{ route('search') }}" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                    <button class="searchButton" type="submit" style="border-radius: 10px;">Search</button>
                </form>

                </div>
            </div>
        </nav>
    </header>

    <main class="content" id="homePage">
        <div class="container py-5">
            <div class="text-center">
                <div class="judul">
                    <div class="shine typewriter">
                    <span>M</span><span>e</span><span>m</span><span>o</span><span>r</span><span>a</span><span>X</span>
                    </div>    
                </div>
                <p class="mt-3 fs-5 text-secondary">
                    Ceritakan pengalaman absurd mu tanpa takut ketauan
                </p>
            </div>
            <div class="row g-4 mt-5 justify-content-center">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card-fitur text-center">
                        <span class="badge bg-light text-dark">Make a Memory</span>
                        <p class="card-text mt-3">Bagikan cerita absurd mu ke sini, tanpa takut ketauan orang</p>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card-fitur text-center">
                        <span class="badge bg-light text-dark">Hall of Shame</span>
                        <p class="card-text mt-3">Baca pengalaman absurd dari orang lain</p>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card-fitur text-center">
                        <span class="badge bg-light text-dark">Support</span>
                        <p class="card-text mt-3">Dukung kami</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- <div class="content-base">
            <div class="swipe-left">
                @for($i = 0; $i < 2; $i++) {{-- Loop untuk duplikasi card --}}
                <div class="card" data-post-id="1">
                    <p class="card-text">Hari ini aku ketemu mantan di mall, dia lagi sama pacar barunya</p>
                    <div class="desc-card mt-3">From: Anonymous</div>
                </div>
                <div class="card" data-post-id="2">
                    <p class="card-text">Gak sengaja kirim meme ke grup keluarga, padahal maksudnya ke temen</p>
                    <div class="desc-card mt-3">From: Anonymous</div>
                </div>
                <div class="card" data-post-id="3">
                    <p class="card-text">Salah manggil dosen pake nama "sayang", langsung mau masuk lobang</p>
                    <div class="desc-card mt-3">From: Anonymous</div>
                </div>
                <div class="card" data-post-id="4">
                    <p class="card-text">Nyapa orang yang kupikir temen ternyata orang lain wkwk</p>
                    <div class="desc-card mt-3">From: Anonymous</div>
                </div>
                <div class="card" data-post-id="5">
                    <p class="card-text">Kenapa choso ganteng banget ya Allah, ganteng imut comel swamiku muah muah</p>
                    <div class="desc-card mt-3">From: Dela</div>
                </div>
                <div class="card" data-post-id="6">
                    <p class="card-text">Kentut di lift penuh orang, semua pada ngeliatin</p>
                    <div class="desc-card mt-3">From: Anonymous</div>
                </div>
                <div class="card" data-post-id="7">
                    <p class="card-text">Lupa bayar di warteg, udah sampai rumah baru inget</p>
                    <div class="desc-card mt-3">From: Anonymous</div>
                </div>
                <div class="card" data-post-id="8">
                    <p class="card-text">Nyanyi kenceng di kamar mandi ternyata mic nya nyala ke speaker</p>
                    <div class="desc-card mt-3">From: Anonymous</div>
                </div>
                <div class="card" data-post-id="9">
                    <p class="card-text">Geleng-geleng sendiri ternyata orang sebelah kira diajak ngobrol</p>
                    <div class="desc-card mt-3">From: Anonymous</div>
                </div>
                <div class="card" data-post-id="10">
                    <p class="card-text">Jatuh di depan gebetan, padahal lagi pengen kelihatan keren</p>
                    <div class="desc-card mt-3">From: Anonymous</div>
                </div>
                @endfor
            </div>
            <br>
            <div class="swipe-right">
                @for($i = 0; $i < 2; $i++) {{-- Loop untuk duplikasi card --}}
                <div class="card" data-post-id="11">
                    <p class="card-text">Lagi serius meeting tiba-tiba kucing lewat depan kamera</p>
                    <div class="desc-card mt-3">From: Anonymous</div>
                </div>
                <div class="card" data-post-id="12">
                    <p class="card-text">Salah transfer ke nomor yang mirip, uang sejuta melayang</p>
                    <div class="desc-card mt-3">From: Anonymous</div>
                </div>
                <div class="card" data-post-id="13">
                    <p class="card-text">Ngomong jelek tentang seseorang eh orangnya di belakang</p>
                    <div class="desc-card mt-3">From: Anonymous</div>
                </div>
                <div class="card" data-post-id="14">
                    <p class="card-text">Tidur di kelas terus ngiler, semua pada ketawa</p>
                    <div class="desc-card mt-3">From: Anonymous</div>
                </div>
                <div class="card" data-post-id="15">
                    <p class="card-text">Ngirim voice note marah ke orang yang salah</p>
                    <div class="desc-card mt-3">From: Anonymous</div>
                </div>
                <div class="card" data-post-id="16">
                    <p class="card-text">Foto selfie di kaca gedung eh ternyata orang dalem bisa liat</p>
                    <div class="desc-card mt-3">From: Anonymous</div>
                </div>
                <div class="card" data-post-id="17">
                    <p class="card-text">Nge-tweet ranty panjang lebar lupa akunnya public</p>
                    <div class="desc-card mt-3">From: Anonymous</div>
                </div>
                <div class="card" data-post-id="18">
                    <p class="card-text">Salah kirim screenshot chat ke orang yang dichat</p>
                    <div class="desc-card mt-3">From: Anonymous</div>
                </div>
                <div class="card" data-post-id="19">
                    <p class="card-text">Lagi interview kena disconnect karena kuota habis</p>
                    <div class="desc-card mt-3">From: Anonymous</div>
                </div>
                <div class="card" data-post-id="20">
                    <p class="card-text">Ngedance sendiri di kamar ternyata curtain kebuka</p>
                    <div class="desc-card mt-3">From: Anonymous</div>
                </div>
                @endfor
            </div>
        </div> -->

        <div class="content-base">
            <div class="swipe-left">
                @forelse($leftPosts as $post)
                    <div class="card" data-post-id="{{ $post->id }}">
                        <p class="card-text">{{ Str::limit($post->isi, 100) }}</p>
                        <div class="desc-card mt-3">
                            From: {{ $post->user->name ?? 'Anonymous' }}
                        </div>
                    </div>
                @empty
                    <p class="text-center">Belum ada postingan</p>
                @endforelse
            </div>
            
            <br>
            
            <div class="swipe-right">
                @forelse($rightPosts as $post)
                    <div class="card" data-post-id="{{ $post->id }}">
                        <p class="card-text">{{ Str::limit($post->isi, 100) }}</p>
                        <div class="desc-card mt-3">
                            From: {{ $post->user->name ?? 'Anonymous' }}
                        </div>
                    </div>
                @empty
                    <p class="text-center">Belum ada postingan</p>
                @endforelse
            </div>
        </div>
    </main>

    <main class="content detail-page" id="detailPage">
        <!-- <div class="post-container">
            <button class="report-button" id="reportButton">
                <i class="fas fa-flag"></i> Report
            </button>

            <a href="#" class="back-button" id="backButton">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>

            <h1 class="post-title" id="postTitle">Judul Postingan Muncul di Sini</h1>

            <div class="post-info">
                Diposting pada: <b id="postDate">20 November 2025</b>
            </div>

            <div class="post-category" id="postCategory">
                Kategori: Kucing
            </div>

            {{-- Menggunakan asset() untuk gambar --}}
            <img src="{{ asset('4.jpg') }}" class="post-media" id="postMedia" alt="Media Postingan">

            <div class="post-story" id="postStory">
                Ini adalah isi cerita yang kamu tulis ketika upload.
                
                Bisa panjang, bisa berbaris baru,
                semuanya akan tetap rapi karena pakai white-space: pre-line;
            </div>
        </div> -->

         <div class="post-container">
            <button class="report-button" id="reportButton">
                <i class="fas fa-flag"></i> Report
            </button>

            <a href="#" class="back-button" id="backButton">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>

            <h1 class="post-title" id="postTitle"></h1>

            <div class="post-info">
                Diposting pada: <b id="postDate"></b>
            </div>

            <div class="post-category" id="postCategory"></div>

            <img src="" class="post-media" id="postMedia" alt="Media Postingan" style="display: none;">

            <div class="post-story" id="postStory"></div>
        </div>
    </main>

    <div class="modal-overlay" id="reportModal">
        <div class="modal-report">
            <button class="close-modal" id="closeModal">&times;</button>
            <h3><i class="fas fa-flag"></i> Laporkan Postingan</h3>
            <p>Pilih alasan kenapa kamu melaporkan postingan ini. Laporan akan membantu kami menjaga komunitas tetap aman.</p>

            {{-- Form dengan CSRF token --}}
            <form id="reportForm" onsubmit="event.preventDefault();">
                @csrf
                <div class="report-options">
                    <div class="report-option">
                        <input type="radio" name="reportReason" id="spam" value="spam">
                        <label for="spam">
                            <i class="fas fa-ad"></i>
                            Spam atau Iklan yang Mengganggu
                        </label>
                    </div>

                    <div class="report-option">
                        <input type="radio" name="reportReason" id="harassment" value="harassment">
                        <label for="harassment">
                            <i class="fas fa-user-slash"></i>
                            Pelecehan atau Bullying
                        </label>
                    </div>

                    <div class="report-option">
                        <input type="radio" name="reportReason" id="hate" value="hate">
                        <label for="hate">
                            <i class="fas fa-heart-broken"></i>
                            Ujaran Kebencian
                        </label>
                    </div>

                    <div class="report-option">
                        <input type="radio" name="reportReason" id="violence" value="violence">
                        <label for="violence">
                            <i class="fas fa-exclamation-triangle"></i>
                            Kekerasan atau Konten Berbahaya
                        </label>
                    </div>

                    <div class="report-option">
                        <input type="radio" name="reportReason" id="inappropriate" value="inappropriate">
                        <label for="inappropriate">
                            <i class="fas fa-ban"></i>
                            Konten Tidak Pantas
                        </label>
                    </div>

                    <div class="report-option">
                        <input type="radio" name="reportReason" id="fake" value="fake">
                        <label for="fake">
                            <i class="fas fa-times-circle"></i>
                            Informasi Palsu atau Menyesatkan
                        </label>
                    </div>

                    <div class="report-option">
                        <input type="radio" name="reportReason" id="other" value="other">
                        <label for="other">
                            <i class="fas fa-ellipsis-h"></i>
                            Lainnya
                        </label>
                    </div>
                </div>

                <textarea 
                    class="report-textarea" 
                    id="reportDetails" 
                    placeholder="(Opsional) Jelaskan lebih detail tentang masalah yang kamu temukan..."></textarea>

                <button type="submit" class="submit-report" id="submitReport">
                    <i class="fas fa-paper-plane"></i> Kirim Laporan
                </button>

                <div class="success-message" id="successMessage">
                    <i class="fas fa-check-circle"></i> Laporan berhasil dikirim! Terima kasih atas perhatianmu.
                </div>
            </form>
        </div>
    </div>

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
//     const postsData = {
//         1: {
//             title: "Ketemu Mantan di Mall",
//             date: "15 November 2025",
//             category: "Cinta & Romansa",
//             media: "4.jpg",
//             story: `Hari ini aku lagi jalan-jalan di mall sendirian, tiba-tiba nemu mantan! Dia lagi jalan bareng pacar barunya yang keliatan lebih ganteng dan lebih stylish dari aku.

// Aku langsung panik! Cepat-cepat sembunyi di balik tanaman hias dekat food court. Tapi nasib sial, ternyata dia liatin aku! Dia cuma senyum kecil terus lanjut jalan.

// Malu banget! Aku masih pake kaos bekas lomba lari 5 tahun lalu sama celana training bolong. Sekarang aku masih nongkrong di toilet mall nungguin mereka pergi.`

//         },
//         2: {
//             title: "Salah Kirim Meme ke Grup Keluarga",
//             date: "10 November 2025",
//             category: "Kecelakaan Digital",
//             media: "",
//             story: `Baru bangun tidur, buka WhatsApp langsung kirim meme receh ke temen. Eh ternyata salah kirim ke grup keluarga besar! Isinya meme "When you realize it's Monday tomorrow" dengan gambar orang nangis darah.

// Satu menit kemudian, mama chat private: "Nak, ini gambar apa? Kok serem banget?"

// Om-om dan tante-tante pada kasih reaksi "?" semua. Papa malah tanya: "Ini artinya apa? Kode apa?"

// Aku bilang lagi tes fitur baru WhatsApp. Sekarang image-nya masih ada, jadi bahan ledekan tiap gathering keluarga.`
//         },
//         3: {
//             title: "Salah Manggil Dosen 'Sayang'",
//             date: "5 November 2025",
//             category: "Kampus",
//             media: "",
//             story: `Lagi asik chat sama pacar sambil nunggu dosen masuk kelas. Dosennya dateng, aku tanpa sadar masih kebawa suasana chat.

// Pas dia nawarin bantuan, aku langsung jawab: "Iya sayang, tunggu bentar ya..."

// Sepi. Sunyi. Semua mata ngeliatin aku.

// Dosennya cuma senyum tipis: "Sayang? Kita kan baru ketemu semester ini..."

// Mau ngilang aja pengennya. Sampe sekarang tiap ketemu dosen itu, dia selalu panggil aku "sayang" di depan kelas.`
//         },
//         4: {
//             title: "Nyapa Orang Salah",
//             date: "1 November 2025",
//             category: "Social Fails",
//             media: "",
//             story: `Di halte bus, liat temen dari belakang. Langsung tepuk pundak sambil teriak: "WOI GOBLOK!"

// Eh ternyata orang lain. Bukan cuma orang lain, tapi bapak-bapak umur 50an yang lagi baca koran dengan tenang.

// Dia pelan-pelan nutup korannya, liatin aku dari ujung kaki ke ujung rambut, lalu bilang: "Siapa yang goblok?"

// Aku cuma bisa berkata: "Maaf pak, saya yang goblok."

// Langsung lari ke arah bus yang kebetulan lagi datang.`
//         },
//         5: {
//             title: "Pujian untuk Choso",
//             date: "28 Oktober 2025",
//             category: "Fandom",
//             media: "",
//             story: `AKU GAK TAHU LAGI HARUS GIMANA. SETIAP LIAT CHOSO DI JUJUTSU KAISEN LANGSUNG DEG-DEGAN.

// Dia tuh... GANTENG BANGET SIH? Rambutnya, matanya, sifatnya yang protektif ke Yuuji, semuanya sempurna!

// Aku sampe bikin 5 akun TikTok cuma buat edit Choso. Ig aku isinya cuma screenshot Choso doang. Temen-temen udah pada khawatir.

// Tapi gimana lagi? Dia imut comel banget! SWAMIKU! MUAH MUAH! ❤️✨

// #ChosoSupremacy #SaveMe`
//         },
//         6: {
//             title: "Kentut di Lift Penuh",
//             date: "25 Oktober 2025",
//             category: "Momen Memalukan",
//             media: "",
//             story: `Naik lift di gedung kantor, 8 orang termasuk aku. Perut tiba-tiba mules, dan... itu terjadi.

// Bukan cuma bunyi, tapi baunya... seperti telur busuk dicampur kubis.

// Semua pada mengernyit. Ada yang tutup hidung, ada yang pelan-pelan mundur ke pojok.

// Aku coba pura-pura liat ke atas seakan-akan mencari sumber suara. Tapi semua tahu.

// Sampai lantai tujuan, lift kosong tinggal aku sendiri. Penyesalan sepanjang hidup.`
//         },
//         7: {
//             title: "Lupa Bayar di Warteg",
//             date: "20 Oktober 2025",
//             category: "Keseharian",
//             media: "",
//             story: `Makan siang di warteg langganan, laper banget. Habis makan langsung buru-buru pulang karena ada meeting online.

// Baru sampai rumah 30 menit, dapat telpon dari mamang warteg: "Mas, makanannya enak gak?"

// Aku: "Enak bang Pak!"

// Mamang: "Iya, bayarnya kapan?"

// TERNYATA AKU LUBA BAYAR! Langsung balik ke warteg sambil bawa uang plus bonus karena malu.

// Sekarang tiap ke warteg itu, mamangnya selalu ingetin: "Jangan lupa bayar ya Mas!"`
//         },
//         8: {
//             title: "Menyanyi di Kamar Mandi",
//             date: "18 Oktober 2025",
//             category: "Musikal",
//             media: "",
//             story: `Lagi asik mandi, nyanyi-nyanyi lagu Bruno Mars full emotion. Sampe teriak-teriak high note-nya.

// Ternyata... MIC DROP KU MASIH NYALA DARI KEMAREN DAN TERHUBUNG KE SPEAKER BLUETOOTH DI RUANG TAMU!

// Adikku rekam, upload ke TikTok, sekarang dapat 500K views. Komentar pada bilang: "Suaranya bagus, tapinya..."

// Sekeluarga pada tau kalo aku suka nyanyi "When I Was Your Man" sambil nangis-nangis di kamar mandi.`
//         },
//         9: {
//             title: "Geleng-geleng Sendiri",
//             date: "15 Oktober 2025",
//             category: "Keseharian",
//             media: "",
//             story: `Naik angkot, lagi mikirin betapa absurdnya hidup. Geleng-geleng sendiri sambil senyum-senyum kecil.

// Tiba-tiba nenek sebelahku nanya: "Ada apa Nak? Kenapa geleng-geleng? Nenek ada salah apa?"

// TERNYATA DIA KIRA AKU GELENGIN DIA!

// Aku cuma bisa bilang: "Bukan Nek, saya lagi latihan buat drama sekolah."

// Dia cuma manggut-manggut: "Oh, pinter juga ya."`
//         },
//         10: {
//             title: "Jatuh di Depan Gebetan",
//             date: "12 Oktober 2025",
//             category: "Cinta & Romansa",
//             media: "",
//             story: `Lagi jalan sama gebetan di taman, pengen kelihatan cool. Liat anak skateboard lewat, pengen nunjukkin kalo aku juga bisa.

// Pinjam skateboard-nya, bilang: "Liat ya, aku jago nih!"

// Langkah pertama... langsung jatuh telentang. Bukan cuma jatuh, tapi celanaku sobek di bagian belakang.

// Dia cuma ketawa sambil nolongin aku. Sekarang kita jadian, tapi cerita jatuh itu selalu jadi bahan ledekannya.`
//         }
//     };

      // public/js/posts.js atau dalam blade
      //ini yg kutambah 
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card');
            const detailPage = document.getElementById('detailPage');
            const backButton = document.getElementById('backButton');
            
            cards.forEach(card => {
                card.addEventListener('click', function() {
                    const postId = this.dataset.postId;
                    loadPostDetail(postId);
                });
            });
            
            async function loadPostDetail(postId) {
                try {
                    const response = await fetch(`/posts/${postId}`);
                    const post = await response.json();
                    
                    document.getElementById('postTitle').textContent = post.judul;
                    document.getElementById('postDate').textContent = post.formatted_date;
                    document.getElementById('postCategory').textContent = `Kategori: ${post.kategori}`;
                    document.getElementById('postStory').textContent = post.isi;
                    
                    const postMedia = document.getElementById('postMedia');
                    if (post.gambar) {
                        postMedia.src = `/storage/${post.gambar}`;
                        postMedia.style.display = 'block';
                    } else {
                        postMedia.style.display = 'none';
                    }
                    
                    // Tampilkan detail page
                    document.querySelector('.content-base').style.display = 'none';
                    detailPage.style.display = 'block';
                } catch (error) {
                    console.error('Error loading post:', error);
                }
            }
            
            backButton.addEventListener('click', function(e) {
                e.preventDefault();
                detailPage.style.display = 'none';
                document.querySelector('.content-base').style.display = 'block';
            });
        });  

        const homePage = document.getElementById('homePage');
        const detailPage = document.getElementById('detailPage');
        const cards = document.querySelectorAll('.card');
        const backButton = document.getElementById('backButton');
        const reportButton = document.getElementById('reportButton');
        const reportModal = document.getElementById('reportModal');
        const closeModal = document.getElementById('closeModal');
        const submitReportBtn = document.querySelector('.submit-report');
        const reportTextarea = document.querySelector('.report-textarea');
        const reportOptions = document.querySelectorAll('input[name="reportReason"]');
        const successMessage = document.querySelector('.success-message');

        const postTitle = document.getElementById('postTitle');
        const postDate = document.getElementById('postDate');
        const postCategory = document.getElementById('postCategory');
        const postMedia = document.getElementById('postMedia');
        const postStory = document.getElementById('postStory');

    // function showDetailPage(postId) {
    //     const post = postsData[postId];
        
    //     if (post) {
    //         postTitle.textContent = post.title;
    //         postDate.textContent = post.date;
    //         postCategory.textContent = `Kategori: ${post.category}`;
    //         postStory.textContent = post.story;
            
    //         if (post.media) {
    //             postMedia.style.display = 'block';
    //             postMedia.src = "{{ asset('') }}" + post.media;
    //             postMedia.alt = post.title;
    //         } else {
    //             postMedia.style.display = 'none';
    //         }
            
    //         detailPage.dataset.currentPostId = postId;
            
    //         homePage.style.display = 'none';
    //         detailPage.style.display = 'block';
            
    //         window.scrollTo(0, 0);
    //     } else {
    //         alert('Postingan tidak ditemukan!');
    //     }
    // }

        function showDetailPage(postId) {
        // Tampilkan loading
        homePage.style.display = 'none';
        detailPage.style.display = 'block';
        postTitle.textContent = 'Memuat...';
        postStory.textContent = 'Memuat konten...';
        
        // Fetch dari database
        fetch(`/posts/${postId}`)
            .then(response => {
                if (!response.ok) throw new Error('Post not found');
                return response.json();
            })
            .then(post => {
                postTitle.textContent = post.judul;
                postDate.textContent = post.formatted_date;
                postCategory.textContent = `Kategori: ${post.kategori}`;
                postStory.textContent = post.isi;
                
                if (post.gambar) {
                    postMedia.style.display = 'block';
                    postMedia.src = `/storage/${post.gambar}`;
                    postMedia.alt = post.judul;
                } else {
                    postMedia.style.display = 'none';
                }
                
                detailPage.dataset.currentPostId = postId;
                window.scrollTo(0, 0);
            })
            .catch(error => {
                console.error('Error loading post:', error);
                alert('Postingan tidak ditemukan!');
                showHomePage();
            });
        }

        function showHomePage() {
            detailPage.style.display = 'none';
            homePage.style.display = 'block';
            window.scrollTo(0, 0);
        }

        function showReportModal() {
            reportModal.classList.add('show');
            document.body.style.overflow = 'hidden';
        }

        function hideReportModal() {
            reportModal.classList.remove('show');
            document.body.style.overflow = 'auto';
            
            reportTextarea.value = '';
            reportOptions.forEach(option => option.checked = false);
            submitReportBtn.disabled = true;
            successMessage.classList.remove('show');
        }

       function submitReport() {
            const selectedReason = document.querySelector('input[name="reportReason"]:checked');
            const additionalReason = reportTextarea.value.trim();
            
            if (!selectedReason) {
                alert('Pilih alasan report terlebih dahulu!');
                return;
            }
            
            const postId = detailPage.dataset.currentPostId;
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            
            // Disable button saat loading
            submitReportBtn.disabled = true;
            submitReportBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mengirim...';
            
            fetch('/reports', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    post_id: postId,
                    reason: selectedReason.value,
                    details: additionalReason
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    successMessage.classList.add('show');
                    setTimeout(() => {
                        hideReportModal();
                        submitReportBtn.disabled = false;
                        submitReportBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Kirim Laporan';
                    }, 2000);
                } else {
                    alert(data.message || 'Gagal mengirim laporan');
                    submitReportBtn.disabled = false;
                    submitReportBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Kirim Laporan';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat mengirim laporan');
                submitReportBtn.disabled = false;
                submitReportBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Kirim Laporan';
            });
        }

    function getCurrentUserId() {
            return localStorage.getItem('currentUserId') || 'anonymous';
        }
        
    function getPostAuthorId(postId) {
            const postAuthors = {
                1: 'user123',
                2: 'user456',
                3: 'user789',
                4: 'user101',
                5: 'user_dela',
                6: 'user112',
                7: 'user131',
                8: 'user415',
                9: 'user161',
                10: 'user718'
            };
            return postAuthors[postId] || 'anonymous';
        }
        
        function saveReport(reportData) {
            let reports = JSON.parse(localStorage.getItem('reports')) || [];
            reports.push(reportData);
            localStorage.setItem('reports', JSON.stringify(reports));
        }
        
        function penalizeUserForReport(postId) {
            const authorId = getPostAuthorId(postId);
            
            if (authorId === 'anonymous') {
                console.log('Cannot penalize anonymous user');
                return;
            }
            
            const userKey = `user_${authorId}`;
            let userData = JSON.parse(localStorage.getItem(userKey));
            
            if (userData) {
                const xpPenalty = 50;
                userData.xp = Math.max(0, userData.xp - xpPenalty);
                
                localStorage.setItem(userKey, JSON.stringify(userData));
                
                userData.reportCount = (userData.reportCount || 0) + 1;
                localStorage.setItem(userKey, JSON.stringify(userData));
                
                console.log(`XP reduced by ${xpPenalty} for user ${authorId}. New XP: ${userData.xp}`);
                
                if (userData.reportCount >= 3) {
                    applyHeavyPenalty(userData, authorId);
                }
                
                updateUserDisplayIfActive(authorId);
            }
        }
        
        function applyHeavyPenalty(userData, userId) {
            userData.suspended = true;
            userData.suspendedUntil = new Date(Date.now() + 7 * 24 * 60 * 60 * 1000);
            localStorage.setItem(`user_${userId}`, JSON.stringify(userData));
            
            console.log(`User ${userId} suspended for 7 days due to multiple reports`);
        }
        
        function updateUserDisplayIfActive(userId) {
            const currentUser = localStorage.getItem('currentUserId');
            
            if (currentUser === userId) {
                if (typeof window.updateProfileDisplay === 'function') {
                    window.updateProfileDisplay();
                }
                
                showPenaltyNotification();
            }
        }
        
        function showPenaltyNotification() {
            const notification = document.createElement('div');
            notification.className = 'penalty-notification';
            notification.innerHTML = `
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <strong>Peringatan!</strong> XP Anda dikurangi 50 poin karena postingan Anda dilaporkan.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            `;
            
            document.body.appendChild(notification);
            
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.parentNode.removeChild(notification);
                }
            }, 5000);
        }
        
        const style = document.createElement('style');
        style.textContent = `
            .penalty-notification {
                position: fixed;
                top: 20px;
                right: 20px;
                z-index: 9999;
                max-width: 400px;
            }
        `;
        document.head.appendChild(style);

        cards.forEach(card => {
            card.addEventListener('click', function() {
                const postId = parseInt(this.dataset.postId);
                showDetailPage(postId);
            });
        });

        backButton.addEventListener('click', function(e) {
            e.preventDefault();
            showHomePage();
        });

        reportButton.addEventListener('click', showReportModal);

        closeModal.addEventListener('click', hideReportModal);

        reportModal.addEventListener('click', function(e) {
            if (e.target === reportModal) {
                hideReportModal();
            }
        });

        reportOptions.forEach(option => {
            option.addEventListener('change', function() {
                submitReportBtn.disabled = false;
            });
        });

        submitReportBtn.addEventListener('click', submitReport);

        const swipeLeft = document.querySelector('.swipe-left');
        const swipeRight = document.querySelector('.swipe-right');
        
        [swipeLeft, swipeRight].forEach(container => {

            container.addEventListener('mouseenter', () => {
                container.style.animationPlayState = 'paused';
            });
            
            container.addEventListener('mouseleave', () => {
                container.style.animationPlayState = 'running';
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            homePage.style.display = 'block';
            detailPage.style.display = 'none';
            submitReportBtn.disabled = true;
            
            submitReportBtn.disabled = true;
            
            const style = document.createElement('style');
            style.textContent = `
                .swipe-left:hover, .swipe-right:hover {
                    animation-play-state: paused !important;
                }
            `;
            document.head.appendChild(style);
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && reportModal.classList.contains('show')) {
                hideReportModal();
            }
            
            if (e.key === 'Backspace' && detailPage.style.display === 'block') {
                showHomePage();
            }
        });

    
</script>
<script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>