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

        .post-stats {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .post-stats .badge {
            font-size: 0.9rem;
            padding: 8px 15px;
        }

        .post-card-views {
            color: #666;
            font-size: 0.85rem;
        }

        .post-card-views i {
            color: #E18E2E;
            margin-right: 3px;
        }

        /* Post Detail Actions */
        .post-actions-detail .btn {
            padding: 0.5rem 1.5rem;
            font-weight: 500;
        }

        .like-btn-detail {
            transition: all 0.3s ease;
        }

        .like-btn-detail:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(220, 53, 69, 0.3);
        }

        .like-btn-detail.liked {
            background-color: #dc3545;
            color: white;
            border-color: #dc3545;
        }

        .like-btn-detail.liked:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        /* komentars Section Detail */
        .komentars-section-detail {
            margin-top: 2rem;
        }

        .komentar-form-wrapper {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 0.5rem;
            border: 1px solid #dee2e6;
        }

        .komentar-form-detail textarea {
            resize: vertical;
            min-height: 80px;
        }

        .komentars-list-detail {
            max-height: 600px;
            overflow-y: auto;
        }

        /* komentar Item di Detail Page */
        .komentar-item-detail {
            background: white;
            border: 1px solid #dee2e6;
            border-radius: 0.5rem;
            padding: 1rem;
            margin-bottom: 1rem;
            transition: all 0.2s;
        }

        .komentar-item-detail:hover {
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .komentar-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 0.5rem;
        }

        .komentar-author {
            font-weight: 600;
            color: #495057;
            font-size: 0.95rem;
        }

        .komentar-date {
            font-size: 0.85rem;
            color: #6c757d;
        }

        .komentar-content {
            color: #212529;
            line-height: 1.6;
            margin: 0;
        }

        /* Empty State */
        .empty-komentars {
            text-align: center;
            padding: 3rem 1rem;
            color: #6c757d;
        }

        .empty-komentars i {
            font-size: 3rem;
            margin-bottom: 1rem;
            opacity: 0.5;
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
        <div class="container mt-4">
            <h2>Hasil Pencarian: "{{ $query }}"</h2>
            <p>Ditemukan {{ $searchResults->count() }} hasil</p>
            
            <div class="posts-grid">
                @forelse($searchResults as $post)
                    <div class="post-card bg-white" data-post-id="{{ $post->id }}">
                        @if($post->gambar)
                            <img src="{{ asset('storage/' . $post->gambar) }}" class="post-card-img" alt="{{ $post->judul }}">
                        @else
                            <img src="https://via.placeholder.com/600x400" class="post-card-img" alt="{{ $post->judul }}">
                        @endif
                        
                        <div class="post-card-body">
                            <h5 class="post-card-title">{{ Str::limit($post->judul, 50) }}</h5>
                            <span class="post-card-badge">{{ $post->kategori }}</span>
                            <p class="post-card-text">{{ Str::limit($post->isi, 120) }}</p>
                            <small class="text-muted">Oleh: {{ $post->user->name ?? 'Anonymous' }}</small>
                        </div>
                        
                        <div class="post-card-footer">
                            <small class="post-card-views">
                                <i class="fas fa-heart"></i> {{ $post->likes }} likes
                            </small>
                            <a href="#" class="btn btn-custom-primary view-detail">Baca Selengkapnya</a>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <p class="text-muted">Tidak ada hasil yang ditemukan untuk "{{ $query }}"</p>
                    </div>
                @endforelse
            </div>
        </div>

        <div class="container">
            <h1 class="hall-of-shame-title">🔥 Postingan Populer Bulan Ini 🔥</h1>
            <p class="hall-of-shame-subtitle">Lihat konten yang paling banyak dibaca dan disukai oleh pengguna.</p>

            <div class="posts-grid">
                @forelse($popularPosts as $post)
                    <div class="post-card bg-white" data-post-id="{{ $post->id }}">
                        @if($post->gambar)
                            <img src="{{ asset('storage/' . $post->gambar) }}" class="post-card-img" alt="{{ $post->judul }}">
                        @else
                            <img src="https://via.placeholder.com/600x400/E18E2E/FFFFFF?text={{ urlencode($post->judul) }}" class="post-card-img" alt="{{ $post->judul }}">
                        @endif
                        
                        <div class="post-card-body">
                            <h5 class="post-card-title">{{ Str::limit($post->judul, 50) }}</h5>
                            <span class="post-card-badge">{{ $post->kategori }}</span>
                            <p class="post-card-text">
                                {{ Str::limit($post->isi, 120) }}
                            </p>
                        </div>
                        
                        <div class="post-card-footer">
                            <small class="post-card-views">
                                <i class="fas fa-heart"></i> {{ $post->likes }} likes
                                @if(isset($post->views))
                                    • <i class="fas fa-eye"></i> {{ number_format($post->views) }} views
                                @endif
                            </small>
                            <a href="#" class="btn btn-custom-primary view-detail">Baca Selengkapnya</a>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                        <p class="text-muted">Belum ada postingan populer bulan ini</p>
                    </div>
                @endforelse
            </div>
        </div>
    </main>

    <main class="main-content detail-page" id="detailPage" style="display: none;">
        <div class="container">
            <div class="post-container">
                <a href="#" class="back-button" id="backButton">
                    <i class="fas fa-arrow-left"></i> Kembali ke Hall of Shame
                </a>

                <h1 class="post-title" id="postTitle">Memuat...</h1>

                <div class="post-info">
                    Diposting pada: <b id="postDate"></b> • 
                    Kategori: <span class="badge bg-primary" id="postCategory"></span>
                </div>

                <img src="" class="post-media" id="postMedia" alt="Media Postingan" style="display: none;">

                <div class="post-story" id="postStory">Memuat konten...</div>

                <!-- Like & komentar Actions -->
                <div class="post-actions-detail mt-4 mb-4">
                    <div class="d-flex gap-3 align-items-center">
                        <!-- Like Button -->
                        @auth
                        <button class="btn btn-outline-danger like-btn-detail" id="likeButtonDetail" data-post-id="">
                            <i class="fas fa-heart"></i>
                            <span id="likesCountDetail">0</span> Likes
                        </button>
                        @else
                        <a href="{{ route('login') }}" class="btn btn-outline-danger">
                            <i class="fas fa-heart"></i> Login untuk Like
                        </a>
                        @endauth
                        
                        <!-- komentar Count Badge -->
                        <span class="badge bg-secondary">
                            <i class="fas fa-komentar"></i>
                            <span id="komentarsCountDetail">0</span> Komentar
                        </span>
                    </div>
                </div>

                <hr>

                <!-- komentars Section -->
                <div class="komentars-section-detail">
                    <h4 class="mb-4">
                        <i class="fas fa-komentars"></i> Komentar 
                        (<span id="totalkomentars">0</span>)
                    </h4>
                    
                    <!-- komentar Form -->
                    @auth
                    <div class="komentar-form-wrapper mb-4">
                        <form id="komentarFormDetail" class="komentar-form-detail">
                            @csrf
                            <div class="mb-3">
                                <textarea class="form-control" 
                                        id="komentarContent" 
                                        name="content" 
                                        rows="3" 
                                        placeholder="Tulis komentar Anda..." 
                                        required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i> Kirim Komentar
                            </button>
                        </form>
                    </div>
                    @else
                    <div class="alert alert-info">
                        Silakan <a href="{{ route('login') }}" class="alert-link">login</a> untuk berkomentar
                    </div>
                    @endauth
                    
                    <!-- komentars List -->
                    <div class="komentars-list-detail" id="komentarsListDetail">
                        <!-- komentars akan dimuat via JavaScript -->
                        <div class="text-center py-4">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <p class="text-muted mt-2">Memuat komentar...</p>
                        </div>
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
                    <p class="text-white text-decoration-none">Hak Cipta ©{{ date('Y') }} | Dibuat dengan Empati</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
    
    <script>
            const homePage = document.getElementById('homePage');
            const detailPage = document.getElementById('detailPage');
            const backButton = document.getElementById('backButton');
            const postTitle = document.getElementById('postTitle');
            const postDate = document.getElementById('postDate');
            const postCategory = document.getElementById('postCategory');
            const postMedia = document.getElementById('postMedia');
            const postStory = document.getElementById('postStory');

            // ===== TAMBAHAN - Variable untuk tracking post ID =====
            let currentPostId = null;

            // ===== DIUPDATE - Tambah load likes & komentars =====
            function showDetailPage(postId) {
                currentPostId = postId; // TAMBAHAN: simpan post ID
                
                // Tampilkan loading
                homePage.style.display = 'none';
                detailPage.style.display = 'block';
                postTitle.textContent = 'Memuat...';
                postStory.textContent = 'Memuat konten...';
                window.scrollTo(0, 0);
                
                // Set post ID ke like button (TAMBAHAN)
                const likeBtn = document.getElementById('likeButtonDetail');
                if (likeBtn) {
                    likeBtn.setAttribute('data-post-id', postId);
                }
                
                // Fetch dari database
                fetch(`/hall-of-shame/posts/${postId}`)
                    .then(response => {
                        if (!response.ok) throw new Error('Post not found');
                        return response.json();
                    })
                    .then(post => {
                        postTitle.textContent = post.judul;
                        postDate.textContent = post.formatted_date;
                        postCategory.textContent = post.kategori; // Hapus "Kategori: " karena sudah ada badge
                        postStory.textContent = post.isi;
                        
                        if (post.gambar) {
                            postMedia.style.display = 'block';
                            postMedia.src = `/storage/${post.gambar}`;
                            postMedia.alt = post.judul;
                        } else {
                            postMedia.style.display = 'none';
                        }
                        
                        // ===== TAMBAHAN - Update likes & komentars count =====
                        const likesCountEl = document.getElementById('likesCountDetail');
                        const komentarsCountEl = document.getElementById('komentarsCountDetail');
                        const totalkomentarsEl = document.getElementById('totalkomentars');
                        
                        if (likesCountEl) likesCountEl.textContent = post.likes_count || 0;
                        if (komentarsCountEl) komentarsCountEl.textContent = post.komentars_count || 0;
                        if (totalkomentarsEl) totalkomentarsEl.textContent = post.komentars_count || 0;
                        
                        // Update like button state
                        if (likeBtn && post.is_liked) {
                            likeBtn.classList.add('liked');
                        } else if (likeBtn) {
                            likeBtn.classList.remove('liked');
                        }
                        
                        // Load komentars
                        loadkomentars(postId);
                    })
                    .catch(error => {
                        console.error('Error loading post:', error);
                        alert('Postingan tidak ditemukan!');
                        showHomePage();
                    });
            }

            // ===== TAMBAHAN - Fungsi load komentars =====
            function loadkomentars(postId) {
                fetch(`/posts/${postId}/komentars`)
                    .then(res => res.json())
                    .then(data => {
                        const komentarsList = document.getElementById('komentarsListDetail');
                        
                        if (!komentarsList) return;
                        
                        if (data.komentars.length === 0) {
                            komentarsList.innerHTML = `
                                <div class="empty-komentars">
                                    <i class="fas fa-inbox"></i>
                                    <p>Belum ada komentar. Jadilah yang pertama berkomentar!</p>
                                </div>
                            `;
                            return;
                        }
                        
                        komentarsList.innerHTML = data.komentars.map(komentar => `
                            <div class="komentar-item-detail">
                                <div class="komentar-header">
                                    <span class="komentar-author">${komentar.user_name}</span>
                                    <span class="komentar-date">${komentar.created_at}</span>
                                </div>
                                <p class="komentar-content">${komentar.content}</p>
                            </div>
                        `).join('');
                    })
                    .catch(err => {
                        console.error('Error loading komentars:', err);
                        const komentarsList = document.getElementById('komentarsListDetail');
                        if (komentarsList) {
                            komentarsList.innerHTML = `
                                <div class="alert alert-danger">Gagal memuat komentar</div>
                            `;
                        }
                    });
            }

            // ===== DIBIARKAN - TETAP PAKAI =====
            function showHomePage() {
                detailPage.style.display = 'none';
                homePage.style.display = 'block';
                window.scrollTo(0, 0);
            }

            // ===== DIGANTI - EVENT DELEGATION (Support Card Dinamis) =====
            homePage.addEventListener('click', function(e) {
                // Cek apakah yang diklik adalah tombol "Baca Selengkapnya"
                const readMoreBtn = e.target.closest('.btn-custom-primary');
                if (readMoreBtn) {
                    e.preventDefault();
                    const card = readMoreBtn.closest('.post-card');
                    const postId = card.dataset.postId;
                    if (postId) {
                        showDetailPage(postId);
                    }
                    return;
                }
                
                // Atau klik langsung di card (tapi bukan di button)
                const card = e.target.closest('.post-card');
                if (card && !e.target.closest('.btn-custom-primary')) {
                    const postId = card.dataset.postId;
                    if (postId) {
                        showDetailPage(postId);
                    }
                }
            });

            // ===== DIBIARKAN - TETAP PAKAI =====
            backButton.addEventListener('click', function(e) {
                e.preventDefault();
                showHomePage();
            });

            // ===== DIBIARKAN - TETAP PAKAI =====
            document.addEventListener('DOMContentLoaded', function() {
                homePage.style.display = 'block';
                detailPage.style.display = 'none';
                
                // Nav active state
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

            // ===== DIBIARKAN - TETAP PAKAI =====
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Backspace' && detailPage.style.display === 'block') {
                    e.preventDefault();
                    showHomePage();
                }
            });

            // ===== TAMBAHAN - Handle Like Button =====
            document.addEventListener('click', function(e) {
                if (e.target.closest('.like-btn-detail')) {
                    e.preventDefault();
                    const btn = e.target.closest('.like-btn-detail');
                    const postId = btn.dataset.postId;
                    
                    if (!postId) return;
                    
                    fetch(`/posts/${postId}/like`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.error) {
                            alert(data.error);
                            return;
                        }
                        
                        // Update button state
                        if (data.liked) {
                            btn.classList.add('liked');
                        } else {
                            btn.classList.remove('liked');
                        }
                        
                        // Update count
                        document.getElementById('likesCountDetail').textContent = data.likes_count;
                    })
                    .catch(err => {
                        console.error('Error:', err);
                        alert('Terjadi kesalahan');
                    });
                }
            });

            // ===== TAMBAHAN - Handle komentar Form Submit =====
            const komentarForm = document.getElementById('komentarFormDetail');
            if (komentarForm) {
                komentarForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const textarea = document.getElementById('komentarContent');
                    const content = textarea.value.trim();
                    
                    if (!content || !currentPostId) return;
                    
                    const formData = new FormData();
                    formData.append('content', content);
                    
                    fetch(`/posts/${currentPostId}/komentar`, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.error) {
                            alert(data.error);
                            return;
                        }
                        
                        // Reload komentars
                        loadkomentars(currentPostId);
                        
                        // Update counter
                        const currentCount = parseInt(document.getElementById('komentarsCountDetail').textContent);
                        document.getElementById('komentarsCountDetail').textContent = currentCount + 1;
                        document.getElementById('totalkomentars').textContent = currentCount + 1;
                        
                        // Reset form
                        textarea.value = '';
                        
                        // Show success message
                        const successMsg = document.createElement('div');
                        successMsg.className = 'alert alert-success alert-dismissible fade show';
                        successMsg.innerHTML = `
                            Komentar berhasil dikirim!
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        `;
                        this.insertAdjacentElement('beforebegin', successMsg);
                        
                        setTimeout(() => successMsg.remove(), 3000);
                    })
                    .catch(err => {
                        console.error('Error:', err);
                        alert('Terjadi kesalahan');
                    });
                });
            }

            // ===== TAMBAHAN - Handle Toggle komentar Section di Card =====
            document.addEventListener('click', function(e) {
                if (e.target.closest('.komentar-toggle-btn')) {
                    const btn = e.target.closest('.komentar-toggle-btn');
                    const postId = btn.dataset.postId;
                    const wrapper = document.getElementById(`komentars-wrapper-${postId}`);
                    
                    if (wrapper) {
                        if (wrapper.style.display === 'none' || !wrapper.style.display) {
                            wrapper.style.display = 'block';
                        } else {
                            wrapper.style.display = 'none';
                        }
                    }
                }
            });

            // ===== TAMBAHAN - Handle Like di Card (List) =====
            document.addEventListener('click', function(e) {
                if (e.target.closest('.like-btn') && !e.target.closest('.like-btn-detail')) {
                    e.preventDefault();
                    const btn = e.target.closest('.like-btn');
                    const postId = btn.dataset.postId;
                    
                    fetch(`/posts/${postId}/like`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.error) {
                            alert(data.error);
                            return;
                        }
                        
                        // Update UI
                        if (data.liked) {
                            btn.classList.add('liked');
                        } else {
                            btn.classList.remove('liked');
                        }
                        
                        btn.querySelector('.likes-count').textContent = data.likes_count;
                    })
                    .catch(err => {
                        console.error('Error:', err);
                        alert('Terjadi kesalahan');
                    });
                }
            });

            // ===== TAMBAHAN - Handle komentar Submit di Card (List) =====
            document.addEventListener('submit', function(e) {
                if (e.target.classList.contains('komentar-form')) {
                    e.preventDefault();
                    const form = e.target;
                    const postId = form.dataset.postId;
                    const input = form.querySelector('input[name="content"]');
                    const content = input.value.trim();
                    
                    if (!content) return;
                    
                    const formData = new FormData();
                    formData.append('content', content);
                    
                    fetch(`/posts/${postId}/komentar`, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.error) {
                            alert(data.error);
                            return;
                        }
                        
                        // Add new komentar to list
                        const komentarsList = document.getElementById(`komentars-list-${postId}`);
                        if (komentarsList) {
                            const newkomentar = `
                                <div class="komentar-item mb-2">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <strong class="komentar-author">${data.komentar.user_name}</strong>
                                            <p class="komentar-text mb-0">${data.komentar.content}</p>
                                            <small class="text-muted">${data.komentar.created_at}</small>
                                        </div>
                                    </div>
                                </div>
                            `;
                            komentarsList.insertAdjacentHTML('afterbegin', newkomentar);
                        }
                        
                        // Update komentar count
                        const countSpan = document.querySelector(`[data-post-id="${postId}"].komentar-toggle-btn .komentars-count`);
                        if (countSpan) {
                            countSpan.textContent = parseInt(countSpan.textContent) + 1;
                        }
                        
                        // Reset form
                        input.value = '';
                    })
                    .catch(err => {
                        console.error('Error:', err);
                        alert('Terjadi kesalahan');
                    });
                }
            });
    </script>
</body>
</html>