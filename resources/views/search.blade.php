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
        html {
            height: 100%;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            background-color: #fde3cf;
        }

        #header {
            background-color: #ffe97a !important;
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

        .main-content {
            flex: 1;
            padding: 20px 0;
        }

        .footer {
            background-color: #ea8428 !important;
            margin-top: auto;
        }

        .teksFooter {
            color: aliceblue !important;
        }

        :root {
            --color-honey-orange: #E18E2E;
            --color-brick-red: #EA4828;
            --color-light-tosca: #43B5AD;
            --color-dark-tosca: #279D9F;
            --color-light-yellow: #ffe97a;
        }

        .hall-of-shame-title {
            font-size: clamp(28px, 6vw, 42px);
            font-weight: bold;
            text-align: center;
            margin-bottom: 1rem;
            color: var(--color-brick-red);
        }

        .hall-of-shame-subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }

        .post-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
            overflow: hidden;
            cursor: pointer;
        }

        .post-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
        }

        .post-card-img {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .post-card-body {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .post-card-title {
            font-weight: bold;
            color: var(--color-brick-red);
            margin-bottom: 0.75rem;
            font-size: 1.25rem;
            line-height: 1.3;
        }

        .post-card-badge {
            background-color: var(--color-honey-orange);
            color: white;
            padding: 0.35rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-bottom: 1rem;
            display: inline-block;
        }

        .post-card-text {
            color: #666;
            flex-grow: 1;
            margin-bottom: 1.5rem;
            line-height: 1.5;
        }

        .post-card-footer {
            background: transparent;
            border: none;
            padding: 0 1.5rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
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
            transition: all 0.3s ease;
        }

        .btn-custom-primary:hover {
            background-color: var(--color-light-tosca);
            border-color: var(--color-light-tosca);
            color: white;
            transform: translateY(-2px);
        }

        .posts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        @media (max-width: 768px) {
            .posts-grid {
                grid-template-columns: 1fr;
            }
            
            .post-card-img {
                height: 180px;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .post-card {
            animation: fadeInUp 0.5s ease forwards;
        }

        .post-card:nth-child(1) { animation-delay: 0.1s; }
        .post-card:nth-child(2) { animation-delay: 0.2s; }
        .post-card:nth-child(3) { animation-delay: 0.3s; }
        .post-card:nth-child(4) { animation-delay: 0.4s; }

        .detail-page {
            display: none;
            padding: 20px;
        }

        .post-container {
            width: 100%;
            max-width: 700px;
            background: #ffffff;
            padding: 28px;
            border-radius: 22px;
            border: 3px solid var(--color-honey-orange);
            box-shadow: 0px 8px 0px var(--color-dark-tosca);
            box-sizing: border-box;
            position: relative;
            margin: 0 auto;
        }

        .post-title {
            font-size: 28px;
            font-weight: 800;
            color: var(--color-dark-tosca);
            margin: 0 0 5px 0;
        }

        .post-info {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }

        .post-category {
            display: inline-block;
            background: var(--color-honey-orange);
            padding: 6px 12px;
            border-radius: 12px;
            font-weight: 600;
            color: #5c3a00;
            margin-bottom: 20px;
        }

        .post-media {
            width: 100%;
            border-radius: 18px;
            box-shadow: 0px 6px 0px var(--color-light-tosca);
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
            background: var(--color-dark-tosca);
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
    </style>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="header">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('beranda') }}"><img class="maskotweb" src="{{ asset('foto/maskotweb.jpeg') }}" alt="🤡"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('beranda') ? 'active' : '' }}" href="{{ route('beranda') }}">Home</a>
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
                <form class="d-flex" role="search" action="{{ route('search') }}" method="GET">
                    <input class="form-control me-2" type="search" name="q" placeholder="Search" aria-label="Search" value="{{ request('q') }}"/>
                    <button class="searchButton" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
    </header>

    <main class="main-content" id="homePage">
        <div class="container">
            <h1 class="hall-of-shame-title">🔥 Postingan Populer Bulan Ini 🔥</h1>
            <p class="hall-of-shame-subtitle">Lihat konten yang paling banyak dibaca dan disukai oleh pengguna.</p>

            <div class="posts-grid">
                <div class="post-card bg-white" data-post-id="1">
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

                <div class="post-card bg-white" data-post-id="2">
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

                <div class="post-card bg-white" data-post-id="3">
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

                <div class="post-card bg-white" data-post-id="4">
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

    <main class="main-content detail-page" id="detailPage">
        <div class="container">
            <div class="post-container">
                <a href="#" class="back-button" id="backButton">
                    <i class="fas fa-arrow-left"></i> Kembali ke Hall of Shame
                </a>

                <h1 class="post-title" id="postTitle">Judul Postingan Muncul di Sini</h1>

                <div class="post-info">
                    Diposting pada: <b id="postDate">20 November 2025</b>
                </div>

                <div class="post-category" id="postCategory">
                    Kategori: Kucing
                </div>

                <img src="https://via.placeholder.com/600x400/E18E2E/FFFFFF?text=Postingan+Detail" class="post-media" id="postMedia" alt="Media Postingan">

                <div class="post-story" id="postStory">
                    Ini adalah isi cerita yang kamu tulis ketika upload.
                    
                    Bisa panjang, bisa berbaris baru,
                    semuanya akan tetap rapi karena pakai white-space: pre-line;
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
                    <p class="text-white text-decoration-none">Hak Cipta ©{{ date('Y') }} | Dibuat dengan Empati</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
    
    <script>

        const postsData = {
            1: {
                title: "Cara Menciptakan Memori Baru",
                date: "15 November 2025",
                category: "Inspirasi",
                media: "https://via.placeholder.com/600x400/E18E2E/FFFFFF?text=Postingan+1",
                story: `Pelajari tips dan trik sederhana untuk membuat momen tak terlupakan dalam hidup Anda.

1. Hadir Sepenuhnya
Matikan ponsel dan fokus pada momen yang sedang terjadi. Kehadiran penuh adalah kunci untuk menciptakan memori yang berarti.

2. Dokumentasikan dengan Bijak
Ambil foto atau video, tetapi jangan sampai mengganggu pengalaman itu sendiri. Beberapa gambar berkualitas lebih baik daripada ratusan foto biasa.

3. Libatkan Semua Indra
Perhatikan bau, suara, dan sensasi di sekitar Anda. Memori yang melibatkan banyak indra cenderung lebih tahan lama.

4. Berbagi dengan Orang Terdekat
Pengalaman yang dibagikan dengan orang lain seringkali lebih mudah diingat dan lebih bermakna.

5. Refleksikan Pengalaman
Luangkan waktu untuk merenungkan apa yang telah Anda alami dan pelajari darinya.`
            },
            2: {
                title: "10 Momen Paling 'Shame' di Tahun Ini",
                date: "10 November 2025",
                category: "Hiburan",
                media: "https://via.placeholder.com/600x400/43B5AD/FFFFFF?text=Postingan+2",
                story: `Kumpulan cerita dan insiden lucu yang membuat kita semua tersenyum sekaligus malu.

1. Salah Kirim Pesan
"Kirim pesan romantis untuk pacar, eh malah ke grup kantor. Bosku balas: 'Besok kita bahas di meeting ya!'"

2. Salah Panggil Nama
"Saat presentasi, panggil klien dengan nama mantan. Dia cuma senyum: 'Nama yang bagus, tapi bukan saya.'"

3. Tersandung Sendiri
"Pengen kelihatan cool, malah tersandung karpet di depan semua orang. Sekarang dijuluki 'Si Karpet'."

4. Lupa Zoom Mute
"Nyanyi-nyanyi lagu sedih sambil kerja, ternyata mic masih nyala. Sekarang semua kolega tau life storyku."

5. Salah Bawa Tas
"Bawa tas istri ke kantor. Isinya make-up semua. Diledek seharian sama temen-temen."

6. Auto-correct Fail
"Tulis 'meeting penting' jadi 'makan pentol'. Klien bingung, temen-temen ngakak."

7. Salah Kostum
"Datang ke pesta kostum, ternyata salah tanggal. Cuma aku yang pake kostum pirate di meeting bisnis."

8. Lupa Nama Sendiri
"Saat perkenalan di training, blank sejenak. "Nama saya... eh... tunggu dulu...""

9. Salah Angkat Tangan
"Angkat tangan waktu dosen tanya 'siapa yang belum paham?' Padahal maksudnya mau ke toilet."

10. Ketiduran di Tempat Umum
"Tidur di kereta, bangun-bangun udah di stasiun akhir. Muka ada bekas jendela di pipi."
`
            },
            3: {
                title: "Profil Pengguna Paling Setia",
                date: "5 November 2025",
                category: "Komunitas",
                media: "https://via.placeholder.com/600x400/EA4828/FFFFFF?text=Postingan+3",
                story: `Wawancara eksklusif dengan pengguna yang paling banyak memberikan dukungan.

Nama: Bambang "The Supporter" Santoso
Umur: 28 tahun
Bergabung sejak: Januari 2023
Total dukungan diberikan: 1.245 kali

"Bagi saya, memberikan dukungan itu seperti memberikan energi positif ke dunia. Setiap kali saya baca cerita seseorang yang sedang mengalami masa sulit atau momen memalukan, saya ingat bahwa kita semua manusia. Kita semua punya hari-hari buruk, momen canggung, dan pengalaman yang membuat kita malu."

"Bergabung dengan MemoraX mengubah cara pandang saya. Dulu saya sering merasa sendirian dalam menghadapi masalah. Sekarang saya tahu, ternyata banyak orang yang mengalami hal serupa. Dengan memberikan dukungan, saya merasa menjadi bagian dari komunitas yang saling menguatkan."

"Tips saya untuk pengguna baru: Jangan takut untuk berbagi. Setiap cerita yang kamu bagikan bisa menjadi inspirasi atau pelajaran bagi orang lain. Dan jangan lupa untuk memberikan dukungan kepada sesama. Kadang, satu 'like' atau kata penyemangat bisa mengubah hari seseorang."

"Komunitas ini seperti keluarga besar bagi saya. Di sini kita bisa menjadi diri sendiri tanpa takut dihakimi. Itulah kekuatan sebenarnya dari MemoraX."`
            },
            4: {
                title: "Tips Efektif Memberikan Support",
                date: "1 November 2025",
                category: "Panduan",
                media: "https://via.placeholder.com/600x400/279D9F/FFFFFF?text=Postingan+4",
                story: `Cara-cara terbaik untuk memberikan dukungan yang benar-benar bermakna kepada sesama.

1. Dengarkan dengan Tulus
Sebelum memberikan saran, pastikan kamu benar-benar memahami apa yang diceritakan. Kadang orang hanya perlu didengar.

2. Validasi Perasaan
Ungkapan seperti "Wajar kok kamu merasa seperti itu" atau "Saya mengerti kenapa kamu merasa malu" bisa sangat membantu.

3. Hindari Menyalahkan
Fokus pada dukungan, bukan pada mencari siapa yang salah. Setiap orang punya perspektif berbeda.

4. Tawarkan Perspektif Positif
"Setidaknya kamu belajar dari pengalaman itu" atau "Ini akan jadi cerita lucu suatu hari nanti" bisa meringankan beban.

5. Gunakan Emoji dengan Bijak
👍 = Saya setuju/mendukung
❤️ = Ini menyentuh hati
😂 = Ini lucu
🤗 = Pelukan virtual

6. Berbagi Pengalaman Serupa
"Pernah mengalami hal serupa..." membuat orang merasa tidak sendirian.

7. Hormati Privasi
Jangan tanyakan detail yang terlalu personal jika tidak diberitahu.

8. Jadilah Konsisten
Dukungan yang konsisten membangun kepercayaan dalam komunitas.

9. Fokus pada Solusi
Setelah memberikan empati, tawarkan perspektif atau saran yang membangun jika diminta.

10. Ingat: Kualitas > Kuantitas
Satu komentar yang tulus lebih berharga daripada banyak komentar yang asal-asalan.

Dengan memberikan dukungan yang tepat, kita tidak hanya membantu individu, tetapi juga memperkuat komunitas secara keseluruhan.`
            }
        };

        const homePage = document.getElementById('homePage');
        const detailPage = document.getElementById('detailPage');
        const postCards = document.querySelectorAll('.post-card');
        const backButton = document.getElementById('backButton');
        const postTitle = document.getElementById('postTitle');
        const postDate = document.getElementById('postDate');
        const postCategory = document.getElementById('postCategory');
        const postMedia = document.getElementById('postMedia');
        const postStory = document.getElementById('postStory');

        function showDetailPage(postId) {
            const post = postsData[postId];
            
            if (post) {
                postTitle.textContent = post.title;
                postDate.textContent = post.date;
                postCategory.textContent = `Kategori: ${post.category}`;
                postStory.textContent = post.story;
                
                if (post.media) {
                    postMedia.style.display = 'block';
                    postMedia.src = post.media;
                    postMedia.alt = post.title;
                } else {
                    postMedia.style.display = 'none';
                }
                
                homePage.style.display = 'none';
                detailPage.style.display = 'block';
                
                window.scrollTo(0, 0);
            }
        }

        function showHomePage() {
            detailPage.style.display = 'none';
            homePage.style.display = 'block';
            window.scrollTo(0, 0);
        }

        postCards.forEach(card => {
            card.addEventListener('click', function(e) {
                if (!e.target.classList.contains('btn-custom-primary')) {
                    const postId = parseInt(this.dataset.postId);
                    showDetailPage(postId);
                }
            });
            
            const readMoreBtn = card.querySelector('.btn-custom-primary');
            if (readMoreBtn) {
                readMoreBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    const postId = parseInt(this.closest('.post-card').dataset.postId);
                    showDetailPage(postId);
                });
            }
        });

        backButton.addEventListener('click', function(e) {
            e.preventDefault();
            showHomePage();
        });

        document.addEventListener('DOMContentLoaded', function() {
            homePage.style.display = 'block';
            detailPage.style.display = 'none';
            
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

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Backspace' && detailPage.style.display === 'block') {
                showHomePage();
            }
        });
    </script>
</body>
</html>