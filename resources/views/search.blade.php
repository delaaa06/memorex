<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🤡 | MemoraX</title>
    <link href="./bootstrap-5.3.8-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        html {
            height: 100%;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            background-color: transparent;
        }

        /* Background animasi */
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background: linear-gradient(
                135deg,
                var(--yellow),
                var(--mint),
                var(--teal),
                var(--yellow)
            );
            background-size: 400% 400%;
            animation: gradient 18s ease infinite;
            z-index: -1;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        :root {
            --color-honey-orange: #E18E2E;
            --color-brick-red: #EA4828;
            --color-light-tosca: #43B5AD;
            --color-dark-tosca: #279D9F;
            --color-light-yellow: #ffe97a;

            /* gradient variables */
            --yellow: #FFE97A;
            --mint: #43B5AD;
            --teal: #279D9F;
        }


        /* =============================== HEADER ================================ */
        #header {
            background-color: #43B5AD !important;
        }

        .maskotweb {
            height: 45px;
            width: 45px;
            border-radius: 50%;
        }

        .searchButton {
            border-color: #f1ae61;
            color: gray;
            background-color: white;
            border-radius: 10px;
        }


        /* =============================== MAIN CONTENT ================================ */
        .main-content {
            flex: 1;
            padding: 20px 0;
        }

        .hall-of-shame-title {
    font-size: clamp(28px, 6vw, 42px);
    font-weight: bold;
    text-align: center;
    color: white;
    margin-bottom: 1rem;
}


       .hall-of-shame-subtitle {
    text-align: center;
    color: white;
    margin-bottom: 2rem;
    font-size: 1.1rem;
}


        /* =============================== POST CARD ================================ */
        .post-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            height: 100%;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            animation: fadeInUp 0.5s ease forwards;
        }

        .post-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
        }

        .post-card-img {
            height: 200px;
            object-fit: cover;
            border-radius: 15px 15px 0 0;
        }

        .post-card-body {
            display: flex;
            flex-direction: column;
            padding: 1.5rem;
            height: 100%;
        }

        .post-card-title {
            font-weight: bold;
            font-size: 1.25rem;
            color: var(--color-brick-red);
            margin-bottom: 0.75rem;
            line-height: 1.3;
        }

        .post-card-badge {
            background-color: var(--color-honey-orange);
            color: white;
            padding: 0.35rem 0.75rem;
            display: inline-block;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-bottom: 1rem;
        }

        .post-card-text {
            color: #666;
            line-height: 1.5;
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }

        .post-card-footer {
            padding: 0 1.5rem 1.5rem;
            display: flex;
            justify-content: space-between;
        }

        .post-card-views {
            color: #888;
            font-size: 0.9rem;
        }

        .btn-custom-primary {
            background-color: var(--color-dark-tosca);
            border-color: var(--color-dark-tosca);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: 500;
            transition: 0.3s;
        }

        .btn-custom-primary:hover {
            background-color: var(--color-light-tosca);
            border-color: var(--color-light-tosca);
            transform: translateY(-2px);
        }


        /* =============================== GRID ================================ */
        .posts-grid {
            display: grid;
            gap: 1.5rem;
            margin-top: 2rem;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        }

        @media (max-width: 768px) {
            .posts-grid {
                grid-template-columns: 1fr;
            }
            .post-card-img {
                height: 180px;
            }
        }


        /* =============================== ANIMATION ================================ */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .post-card:nth-child(1) { animation-delay: 0.1s; }
        .post-card:nth-child(2) { animation-delay: 0.2s; }
        .post-card:nth-child(3) { animation-delay: 0.3s; }
        .post-card:nth-child(4) { animation-delay: 0.4s; }


        /* =============================== FORM ELEMENTS ================================ */
        .form-container {
            background: rgba(255, 255, 255, 0.25) !important;
            backdrop-filter: blur(10px) !important;
            border: 2px solid rgba(255, 255, 255, 0.4) !important;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15) !important;
        }


        /* =============================== FOOTER ================================ */
        .footer {
            background-color: #43B5AD !important;
            margin-top: auto;
        }

        .teksFooter {
            color: aliceblue !important;
        }

    </style>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="header">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img class="maskotweb" src="/foto/maskotweb.jpeg" alt="🤡">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="beranda.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="6. upload.html">Make a memory</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="search.html">Hall of Shame</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profilepage.html">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="support.html">Support Us</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                        <button class="searchButton" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main class="main-content">
        <div class="container">
            <h1 class="hall-of-shame-title">🔥 Postingan Populer Bulan Ini 🔥</h1>
            <p class="hall-of-shame-subtitle">Lihat konten yang paling banyak dibaca dan disukai oleh pengguna.</p>

            <div class="posts-grid">
                <!-- Postingan 1 -->
                <div class="post-card bg-white">
                    <img src="https://via.placeholder.com/600x400/E18E2E/FFFFFF?text=Postingan+1" class="post-card-img" alt="Gambar Postingan 1">
                    <div class="post-card-body">
                        <h5 class="post-card-title">Cara Menciptakan Memori Baru</h5>
                        <span class="post-card-badge">Inspirasi</span>
                        <p class="post-card-text">
                            Pelajari tips dan trik sederhana untuk membuat momen tak terlupakan dalam hidup Anda.
                        </p>
                    </div>
                    <div class="post-card-footer">
                        <small class="post-card-views">Dilihat: 15K kali</small>
                        <a href="#" class="btn btn-custom-primary">Baca Selengkapnya</a>
                    </div>
                </div>

                <!-- Postingan 2 -->
                <div class="post-card bg-white">
                    <img src="https://via.placeholder.com/600x400/43B5AD/FFFFFF?text=Postingan+2" class="post-card-img" alt="Gambar Postingan 2">
                    <div class="post-card-body">
                        <h5 class="post-card-title">10 Momen Paling 'Shame' di Tahun Ini</h5>
                        <span class="post-card-badge">Hiburan</span>
                        <p class="post-card-text">
                            Kumpulan cerita dan insiden lucu yang membuat kita semua tersenyum sekaligus malu.
                        </p>
                    </div>
                    <div class="post-card-footer">
                        <small class="post-card-views">Dilihat: 12K kali</small>
                        <a href="#" class="btn btn-custom-primary">Baca Selengkapnya</a>
                    </div>
                </div>

                <!-- Postingan 3 -->
                <div class="post-card bg-white">
                    <img src="https://via.placeholder.com/600x400/EA4828/FFFFFF?text=Postingan+3" class="post-card-img" alt="Gambar Postingan 3">
                    <div class="post-card-body">
                        <h5 class="post-card-title">Profil Pengguna Paling Setia</h5>
                        <span class="post-card-badge">Komunitas</span>
                        <p class="post-card-text">
                            Wawancara eksklusif dengan pengguna yang paling banyak memberikan dukungan.
                        </p>
                    </div>
                    <div class="post-card-footer">
                        <small class="post-card-views">Dilihat: 9.8K kali</small>
                        <a href="#" class="btn btn-custom-primary">Baca Selengkapnya</a>
                    </div>
                </div>

                <!-- Postingan 4 -->
                <div class="post-card bg-white">
                    <img src="https://via.placeholder.com/600x400/279D9F/FFFFFF?text=Postingan+4" class="post-card-img" alt="Gambar Postingan 4">
                    <div class="post-card-body">
                        <h5 class="post-card-title">Tips Efektif Memberikan Support</h5>
                        <span class="post-card-badge">Panduan</span>
                        <p class="post-card-text">
                            Cara-cara terbaik untuk memberikan dukungan yang benar-benar bermakna kepada sesama.
                        </p>
                    </div>
                    <div class="post-card-footer">
                        <small class="post-card-views">Dilihat: 7.1K kali</small>
                        <a href="#" class="btn btn-custom-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
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

    <script src="./bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Menambahkan efek scroll halus untuk link
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Menambahkan kelas aktif pada navigasi
        document.addEventListener('DOMContentLoaded', function() {
            const currentPage = window.location.pathname.split('/').pop();
            const navLinks = document.querySelectorAll('.nav-link');
            
            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentPage) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        });
    </script>
</body>
</html>