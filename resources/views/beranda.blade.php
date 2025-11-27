<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🤡 | MemoraX</title>
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
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background: linear-gradient(135deg, var(--yellow), var(--mint), var(--teal), var(--yellow));
            background-size: 400% 400%;
            animation: gradient 18s ease infinite;
            z-index: -1;
        }

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
        background-color: #43B5AD !important;
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
        background-color: #43B5AD !important;
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
            to { transform: translateX(-50%); }
        }
        
        @keyframes scrollRight {
            from { transform: translateX(-50%); }
            to { transform: translateX(0); }
        }
        
        .scroll-container.paused {
            animation-play-state: paused !important;
        }

        /* ===========================
           POST CONTAINER
        =========================== */
        .post-container {
            width: 100%;
            max-width: 700px;
            background: #ffffff;
            padding: 28px;
            border-radius: 22px;
            border: 3px solid var(--accent);
            box-shadow: 0px 8px 0px var(--primary);
            box-sizing: border-box;
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
        
        /* Halaman Detail */
        .detail-page {
            display: none;
        }
    </style>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="header">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img class="maskotweb" src="{{ ('/foto/maskotweb.jpeg') }}" alt="🤡"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route ('beranda')}}" id="homeLink">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route ('upload') }}">Make a memory</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route ('search') }}">Hall of Shame</a>
                    </li>
                     <li class="nav-item">
                    <a class="nav-link" href=" {{ route ('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route ('support') }}">Support Us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                    <button class="searchButton" type="submit" style="border-radius: 10px;">Search</button>
                </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- Halaman Beranda -->
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
        
        <div class="content-base">
            <div class="swipe-left">
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
                <!-- Duplicate for infinite scroll -->
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
            </div>
            <br>
            <div class="swipe-right">
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
                <!-- Duplicate for infinite scroll -->
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
            </div>
        </div>
    </main>

    <!-- Halaman Detail -->
    <main class="content detail-page" id="detailPage">
        <div class="post-container">
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

            <!-- Media Post -->
            <img src="{{ asset('images/4.jpg') }}" class="post-media" id="postMedia" alt="Media Postingan">

            <div class="post-story" id="postStory">
                Ini adalah isi cerita yang kamu tulis ketika upload.
                
                Bisa panjang, bisa berbaris baru,
                semuanya akan tetap rapi karena pakai white-space: pre-line;
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
                    <p class="text-white text-decoration-none">Hak Cipta ©2025 | Dibuat dengan Empati</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Data dummy untuk demo
        const dummyPosts = {
            '1': {
                title: 'Ketemu Mantan di Mall',
                date: '27 November 2025',
                category: 'Malu',
                story: 'Hari ini aku ketemu mantan di mall, dia lagi sama pacar barunya. Awkward banget rasanya, aku langsung pura-pura sibuk liat HP padahal cuma buka galeri doang. Terus dia malah nyapa, dan aku kayak robot kaku banget ngomongnya. Setelah itu aku langsung kabur ke toilet sembunyi 15 menit. Pas keluar ternyata mereka udah pergi. Syukurlah...',
                image: '4.jpg'
            },
            '2': {
                title: 'Kirim Meme ke Grup Keluarga',
                date: '26 November 2025',
                category: 'Malu',
                story: 'Gak sengaja kirim meme ke grup keluarga, padahal maksudnya ke temen. Memenya tentang "cara survive di usia 30-an masih single". Sekarang semua keluarga pada nanya-nanya apakah aku ada masalah. Om-om dan tante-tante malah kasih saran buat cari jodoh. Aduh malu banget!',
                image: '4.jpg'
            },
            '3': {
                title: 'Salah Panggil Dosen',
                date: '25 November 2025',
                category: 'Malu',
                story: 'Salah manggil dosen pake nama "sayang", langsung mau masuk lobang. Habis itu aku bilang "maaf Bu, tadi lagi mikirin pacar". Padahal aku jomblo dari lahir! Dosennya cuma ketawa, tapi muka aku langsung merah padam. Sekarang tiap ketemu dosen itu, pasti ingat kejadian itu.',
                image: '4.jpg'
            },
            '4': {
                title: 'Salah Nyapa Orang',
                date: '24 November 2025',
                category: 'Lucu',
                story: 'Nyapa orang yang kupikir temen ternyata orang lain wkwk. Aku sampe tepuk punggungnya dan bilang "Eh lu disini juga!". Pas dia balik, ternyata orang yang gak aku kenal sama sekali. Aku cuma bisa bilang "Maaf, salah orang" sambil pergi dengan muka merah.',
                image: '4.jpg'
            },
            '5': {
                title: 'Choso Ganteng Banget',
                date: '26 November 2025',
                category: 'Senang',
                story: 'Kenapa choso ganteng banget ya Allah, ganteng imut comel swamiku muah muah. Setiap kali nonton Jujutsu Kaisen aku selalu nunggu Choso muncul. Karakternya yang cool tapi care sama adiknya bikin aku meleleh. Belum lagi pas dia masih pake rambut dua kepang itu, lucuuuu banget! Aku sampe beli merchnya banyak. Temen-temen bilang aku gila, tapi biarin deh. Choso is the best!',
                image: '4.jpg'
            },
            '6': {
                title: 'Kentut di Lift',
                date: '23 November 2025',
                category: 'Malu',
                story: 'Kentut di lift penuh orang, semua pada ngeliatin. Suaranya keras banget dan baunya... ya sudahlah. Aku cuma bisa pura-pura batuk sambil lihat ke atas. Sampai sekarang masih trauma naik lift bareng orang banyak.',
                image: '4.jpg'
            },
            '7': {
                title: 'Lupa Bayar di Warteg',
                date: '22 November 2025',
                category: 'Malu',
                story: 'Lupa bayar di warteg, udah sampai rumah baru inget. Langsung balik lagi ke warteg sambil minta maaf. Pemiliknya bilang "Gapapa Mas, saya kira Mas mau kabur". Malu banget! Sekarang tiap makan di warteg pasti bayar dulu sebelum pergi.',
                image: '4.jpg'
            },
            '8': {
                title: 'Nyanyi di Kamar Mandi',
                date: '21 November 2025',
                category: 'Lucu',
                story: 'Nyanyi kenceng di kamar mandi ternyata mic nya nyala ke speaker. Suaranya keluar ke seluruh rumah! Keluarga pada ketawa-ketawa. Padahal lagi serius nyanyi lagu sedih, jadi lucu deh.',
                image: '4.jpg'
            },
            '9': {
                title: 'Geleng-geleng Sendiri',
                date: '20 November 2025',
                category: 'Lucu',
                story: 'Geleng-geleng sendiri ternyata orang sebelah kira diajak ngobrol. Dia malah nanya "Ada apa? Kenapa geleng-geleng?". Aku cuma bisa bilang "Lagi latihan buat drama" sambil pergi dengan muka merah.',
                image: '4.jpg'
            },
            '10': {
                title: 'Jatuh di Depan Gebetan',
                date: '19 November 2025',
                category: 'Malu',
                story: 'Jatuh di depan gebetan, padahal lagi pengen kelihatan keren. Pas lagi jalan sambil senyum-senyum, gak liat ada batu. Langsung jatuh terguling. Gebetan cuma ketawa sambil nanya "Lagi latihan parkour ya?". Malu banget!',
                image: '4.jpg'
            }
        };

        // Fungsi untuk menampilkan halaman detail
        function showDetailPage(postId) {
            document.getElementById('homePage').style.display = 'none';
            document.getElementById('detailPage').style.display = 'flex';
            
            if (dummyPosts[postId]) {
                const post = dummyPosts[postId];
                document.getElementById('postTitle').textContent = post.title;
                document.getElementById('postDate').textContent = post.date;
                document.getElementById('postCategory').textContent = `Kategori: ${post.category}`;
                document.getElementById('postStory').textContent = post.story;
                document.getElementById('postMedia').src = post.image;
            } else {
                document.getElementById('postTitle').textContent = 'Postingan Tidak Ditemukan';
                document.getElementById('postStory').textContent = 'Maaf, postingan yang Anda cari tidak tersedia.';
            }
        }

        // Fungsi untuk kembali ke halaman beranda
        function showHomePage() {
            document.getElementById('homePage').style.display = 'block';
            document.getElementById('detailPage').style.display = 'none';
        }

        // Event listeners untuk card
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
                const postId = this.getAttribute('data-post-id');
                showDetailPage(postId);
            });
        });

        rightCards.forEach(card => {
            card.addEventListener('mouseenter', pauseRight);
            card.addEventListener('mouseleave', resumeRight);
            card.addEventListener('touchstart', pauseRight, { passive: true });
            card.addEventListener('touchend', resumeRight, { passive: true });
            card.addEventListener('touchcancel', resumeRight, { passive: true });
            
            card.addEventListener('click', function() {
                const postId = this.getAttribute('data-post-id');
                showDetailPage(postId);
            });
        });

        // Event listener untuk tombol kembali
        document.getElementById('backButton').addEventListener('click', function(e) {
            e.preventDefault();
            showHomePage();
        });

        // Event listener untuk link home di navbar
        document.getElementById('homeLink').addEventListener('click', function(e) {
            e.preventDefault();
            showHomePage();
        });

        setTimeout(() => {
            const shineElement = document.querySelector('.shine');
            if (shineElement) {
                shineElement.style.cursor = 'pointer';
            }
        }, 1000);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>