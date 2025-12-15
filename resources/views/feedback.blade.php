<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>🤡 | MemoraX - Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --yellow: #ffd91bff;
            --orange: #ffb350ff;
            --red: #EA4828;
            --mint: #E18E2E;
            --teal: #df8c2eff;
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
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
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

        .feedback-container {
            max-width: 800px;
            margin: 40px auto;
            background: #fffdf8ff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
            border: 3px solid var(--accent);
            position: relative;
            overflow: hidden;
        }

        .feedback-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--yellow), var(--orange), var(--red), var(--mint), var(--teal));
            animation: rainbow 3s linear infinite;
        }

        @keyframes rainbow {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }

        .feedback-title {
            color: var(--primary);
            font-weight: 800;
            margin-bottom: 30px;
            text-align: center;
            font-size: 2.2rem;
        }

        .feedback-subtitle {
            color: #666;
            text-align: center;
            margin-bottom: 40px;
            font-size: 1.1rem;
        }

        .feedback-section {
            margin-bottom: 40px;
            padding: 25px;
            background: #f8f9fa;
            border-radius: 15px;
            border-left: 5px solid var(--primary);
            transition: all 0.3s ease;
        }

        .feedback-section:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
        }

        .section-title i {
            margin-right: 10px;
            font-size: 1.4rem;
        }

        .rating-container {
            display: flex;
            gap: 5px;
            margin-bottom: 20px;
            justify-content: center;
        }

        .star {
            font-size: 2rem;
            color: #ddd;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .star:hover,
        .star.active {
            color: #ffc107;
            transform: scale(1.2);
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 25px;
        }

        .category-item {
            position: relative;
            cursor: pointer;
        }

        .category-checkbox {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }

        .category-label {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            background: white;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .category-label:hover {
            border-color: var(--primary);
            background: #f0f9ff;
        }

        .category-checkbox:checked + .category-label {
            border-color: var(--primary);
            background: var(--primary);
            color: white;
            transform: scale(1.05);
        }

        .category-label i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .feedback-textarea {
            width: 100%;
            min-height: 150px;
            padding: 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 1rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            resize: vertical;
            transition: all 0.3s ease;
        }

        .feedback-textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(39, 157, 159, 0.1);
        }

        .suggestions-list {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .suggestion-item {
            padding: 10px 15px;
            margin-bottom: 10px;
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .suggestion-item:hover {
            background: #f0f9ff;
            border-color: var(--primary);
            transform: translateX(5px);
        }

        .xp-bonus {
            background: linear-gradient(135deg, var(--yellow), var(--orange));
            color: #333;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            margin: 30px 0;
            font-weight: 600;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.02); }
            100% { transform: scale(1); }
        }

        .xp-bonus i {
            margin-right: 8px;
            color: #ff6b35;
        }

        .submit-feedback-btn {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.2rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(39, 157, 159, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .submit-feedback-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(39, 157, 159, 0.4);
        }

        .submit-feedback-btn:active {
            transform: translateY(0);
        }

        .submit-feedback-btn:disabled {
            background: #cccccc;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .success-message {
            display: none;
            background: #d4edda;
            border: 2px solid #c3e6cb;
            color: #155724;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-top: 20px;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .success-message.show {
            display: block;
        }

        .success-message i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #28a745;
            animation: bounce 1s ease infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .feedback-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin-top: 40px;
            padding-top: 30px;
            border-top: 2px dashed #e0e0e0;
        }

        .stat-item {
            text-align: center;
            padding: 15px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 0.9rem;
            color: #666;
        }

        .recent-feedback {
            margin-top: 50px;
        }

        .feedback-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 15px;
            border-left: 4px solid var(--accent);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .feedback-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .feedback-user {
            font-weight: 600;
            color: var(--primary);
        }

        .feedback-date {
            font-size: 0.85rem;
            color: #888;
        }

        .feedback-content {
            color: #333;
            line-height: 1.6;
        }

        .feedback-rating {
            color: #ffc107;
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .feedback-container {
                padding: 25px;
                margin: 20px;
            }
            
            .category-grid {
                grid-template-columns: 1fr;
            }
            
            .feedback-title {
                font-size: 1.8rem;
            }
            
            .star {
                font-size: 1.8rem;
            }
            
            .feedback-stats {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .feedback-container {
                padding: 20px;
                margin: 10px;
            }
            
            .feedback-section {
                padding: 20px;
            }
            
            .feedback-stats {
                grid-template-columns: 1fr;
            }
        }

        .xp-notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background: linear-gradient(135deg, var(--yellow), var(--orange));
            color: #333;
            padding: 15px 25px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            display: none;
            align-items: center;
            gap: 10px;
            animation: slideIn 0.5s ease;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(100px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .xp-notification.show {
            display: flex;
        }

        .notification-close {
            background: none;
            border: none;
            color: #333;
            font-size: 1.2rem;
            cursor: pointer;
            padding: 0;
            margin-left: 10px;
        }
    </style>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="header">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('beranda') }}"><img class="maskotweb" src="{{ asset('images/foto/maskotweb.png') }}" alt="🤡"></a>
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

    <div class="xp-notification" id="xpNotification">
        <i class="fas fa-star"></i>
        <span id="xpNotificationText">+50 XP untuk feedback Anda!</span>
        <button class="notification-close" id="closeNotification">&times;</button>
    </div>

    <main class="content">
        <div class="container">
            <div class="text-center mb-5">
                <div class="judul">
                    <div class="shine typewriter">
                        <span>F</span><span>e</span><span>e</span><span>d</span><span>b</span><span>a</span><span>c</span><span>k</span>
                    </div>    
                </div>
                <p class="mt-3 fs-5 text-secondary">
                    Bantu kami meningkatkan MemoraX dengan memberikan feedback Anda
                </p>
            </div>

            <div class="feedback-container">
                <h1 class="feedback-title">
                    <i class="fas fa-komentar-alt"></i> Bagikan Pendapat Anda
                </h1>
                <p class="feedback-subtitle">
                    Setiap feedback yang Anda berikan sangat berharga bagi kami. 
                    <br>Anda akan mendapatkan <strong>50 XP</strong> untuk setiap feedback yang dikirim!
                </p>

                <div class="xp-bonus">
                    <i class="fas fa-gift"></i> Bonus: Dapatkan 50 XP untuk feedback yang detail dan konstruktif!
                </div>

                <form id="feedbackForm">
                    <div class="feedback-section">
                        <h3 class="section-title">
                            <i class="fas fa-star"></i> Rating Keseluruhan
                        </h3>
                        <p class="mb-3">Seberapa puas Anda dengan pengalaman menggunakan MemoraX?</p>
                        
                        <div class="rating-container" id="overallRating">
                            <div class="star" data-rating="1">★</div>
                            <div class="star" data-rating="2">★</div>
                            <div class="star" data-rating="3">★</div>
                            <div class="star" data-rating="4">★</div>
                            <div class="star" data-rating="5">★</div>
                        </div>
                        <input type="hidden" id="overallRatingValue" value="0">
                        
                        <div class="mt-3 text-center">
                            <small class="text-muted">
                                <span id="ratingLabel">Belum ada rating</span>
                            </small>
                        </div>
                    </div>

                    <div class="feedback-section">
                        <h3 class="section-title">
                            <i class="fas fa-tags"></i> Kategori Feedback
                        </h3>
                        <p class="mb-3">Pilih topik yang ingin Anda berikan feedback:</p>
                        
                        <div class="category-grid">
                            <div class="category-item">
                                <input type="checkbox" class="category-checkbox" id="category1" value="user-experience">
                                <label for="category1" class="category-label">
                                    <i class="fas fa-user-check"></i> User Experience
                                </label>
                            </div>
                            
                            <div class="category-item">
                                <input type="checkbox" class="category-checkbox" id="category2" value="features">
                                <label for="category2" class="category-label">
                                    <i class="fas fa-cogs"></i> Fitur
                                </label>
                            </div>
                            
                            <div class="category-item">
                                <input type="checkbox" class="category-checkbox" id="category3" value="design">
                                <label for="category3" class="category-label">
                                    <i class="fas fa-palette"></i> Desain UI/UX
                                </label>
                            </div>
                            
                            <div class="category-item">
                                <input type="checkbox" class="category-checkbox" id="category4" value="performance">
                                <label for="category4" class="category-label">
                                    <i class="fas fa-tachometer-alt"></i> Performa
                                </label>
                            </div>
                            
                            <div class="category-item">
                                <input type="checkbox" class="category-checkbox" id="category5" value="content">
                                <label for="category5" class="category-label">
                                    <i class="fas fa-file-alt"></i> Konten
                                </label>
                            </div>
                            
                            <div class="category-item">
                                <input type="checkbox" class="category-checkbox" id="category6" value="suggestions">
                                <label for="category6" class="category-label">
                                    <i class="fas fa-lightbulb"></i> Saran
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="feedback-section">
                        <h3 class="section-title">
                            <i class="fas fa-edit"></i> Feedback Detail
                        </h3>
                        
                        <div class="mb-4">
                            <label for="feedbackTitle" class="form-label fw-semibold">Judul Feedback</label>
                            <input type="text" class="form-control" id="feedbackTitle" 
                                   placeholder="Contoh: Saran untuk fitur baru" maxlength="100">
                            <small class="text-muted"><span id="titleCount">0</span>/100 karakter</small>
                        </div>
                        
                        <div class="mb-4">
                            <label for="feedbackText" class="form-label fw-semibold">Ceritakan pengalaman atau saran Anda</label>
                            <textarea class="feedback-textarea" id="feedbackText" 
                                      placeholder="Apa yang Anda sukai? Apa yang bisa ditingkatkan? Fitur apa yang Anda inginkan?"></textarea>
                            <small class="text-muted"><span id="textCount">0</span>/1000 karakter (minimal 50 karakter)</small>
                        </div>

                        <div class="mt-4">
                            <p class="mb-2"><strong>Contoh feedback yang baik:</strong></p>
                            <ul class="suggestions-list">
                                <li class="suggestion-item" onclick="fillSuggestion('Saya suka fitur Hall of Shame, tapi bisa ditambah filter berdasarkan kategori?')">
                                    "Saya suka fitur Hall of Shame, tapi bisa ditambah filter berdasarkan kategori?"
                                </li>
                                <li class="suggestion-item" onclick="fillSuggestion('UI-nya lucu dan warna-warni, tapi loadingnya agak lama di HP saya')">
                                    "UI-nya lucu dan warna-warni, tapi loadingnya agak lama di HP saya"
                                </li>
                                <li class="suggestion-item" onclick="fillSuggestion('Bisa ditambah fitur bookmark untuk menyimpan postingan favorit?')">
                                    "Bisa ditambah fitur bookmark untuk menyimpan postingan favorit?"
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="feedback-section">
                        <h3 class="section-title">
                            <i class="fas fa-envelope"></i> Info Kontak (Opsional)
                        </h3>
                        <p class="mb-3">Jika Anda ingin kami menghubungi Anda untuk follow-up:</p>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="userEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="userEmail" 
                                       placeholder="nama@contoh.com">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="userName" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="userName" 
                                       placeholder="Nama Anda">
                            </div>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="allowContact">
                            <label class="form-check-label" for="allowContact">
                                Saya setuju untuk dihubungi untuk follow-up feedback ini
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="submit-feedback-btn" id="submitFeedbackBtn" disabled>
                        <i class="fas fa-paper-plane"></i> Kirim Feedback & Dapatkan 50 XP!
                    </button>

                    <div class="success-message" id="successMessage">
                        <i class="fas fa-check-circle"></i>
                        <h4>Terima Kasih atas Feedback Anda!</h4>
                        <p>Feedback Anda telah berhasil dikirim. Anda mendapatkan <strong>50 XP</strong>!</p>
                        <p class="mb-0">Kami sangat menghargai kontribusi Anda untuk membuat MemoraX lebih baik.</p>
                    </div>
                </form>
                <div class="feedback-stats">
                    <div class="stat-item">
                        <div class="stat-value" id="totalFeedbacks">0</div>
                        <div class="stat-label">Feedback Dikirim</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value" id="averageRating">0.0</div>
                        <div class="stat-label">Rating Rata-rata</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value" id="xpEarned">0</div>
                        <div class="stat-label">XP Didapat</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value" id="userRank">-</div>
                        <div class="stat-label">Peringkat Anda</div>
                    </div>
                </div>

                <div class="recent-feedback">
                    <h4 class="section-title">
                        <i class="fas fa-history"></i> Feedback Terbaru dari Pengguna Lain
                    </h4>
                    <div id="recentFeedbacks">
                    </div>
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

    <!-- <script>
        let currentUserId = localStorage.getItem('currentUserId') || 'user123';
        let userData = JSON.parse(localStorage.getItem(`user_${currentUserId}`)) || {};
        let feedbacks = JSON.parse(localStorage.getItem('feedbacks')) || [];
        let currentRating = 0;

        const stars = document.querySelectorAll('.star');
        const overallRatingValue = document.getElementById('overallRatingValue');
        const ratingLabel = document.getElementById('ratingLabel');
        const feedbackTitle = document.getElementById('feedbackTitle');
        const feedbackText = document.getElementById('feedbackText');
        const titleCount = document.getElementById('titleCount');
        const textCount = document.getElementById('textCount');
        const submitBtn = document.getElementById('submitFeedbackBtn');
        const feedbackForm = document.getElementById('feedbackForm');
        const successMessage = document.getElementById('successMessage');
        const xpNotification = document.getElementById('xpNotification');
        const xpNotificationText = document.getElementById('xpNotificationText');
        const closeNotification = document.getElementById('closeNotification');

        stars.forEach(star => {
            star.addEventListener('click', function() {
                const rating = parseInt(this.getAttribute('data-rating'));
                currentRating = rating;
                overallRatingValue.value = rating;
                
                stars.forEach((s, index) => {
                    if (index < rating) {
                        s.classList.add('active');
                        s.textContent = '★';
                    } else {
                        s.classList.remove('active');
                        s.textContent = '☆';
                    }
                });
                
                const labels = ['Sangat Buruk', 'Buruk', 'Cukup', 'Baik', 'Sangat Baik'];
                ratingLabel.textContent = labels[rating - 1];
                
                validateForm();
            });
            
            star.addEventListener('mouseover', function() {
                const rating = parseInt(this.getAttribute('data-rating'));
                stars.forEach((s, index) => {
                    if (index < rating) {
                        s.style.color = '#ffc107';
                    } else {
                        s.style.color = '#ddd';
                    }
                });
            });
            
            star.addEventListener('mouseout', function() {
                stars.forEach((s, index) => {
                    if (index < currentRating) {
                        s.style.color = '#ffc107';
                    } else {
                        s.style.color = '#ddd';
                    }
                });
            });
        });

        feedbackTitle.addEventListener('input', function() {
            const count = this.value.length;
            titleCount.textContent = count;
            titleCount.style.color = count > 100 ? '#dc3545' : '#666';
            validateForm();
        });

        feedbackText.addEventListener('input', function() {
            const count = this.value.length;
            textCount.textContent = count;
            textCount.style.color = count > 1000 ? '#dc3545' : '#666';
            validateForm();
        });

        function validateForm() {
            const titleValid = feedbackTitle.value.length >= 5 && feedbackTitle.value.length <= 100;
            const textValid = feedbackText.value.length >= 50 && feedbackText.value.length <= 1000;
            const ratingValid = currentRating > 0;
            
            const categories = document.querySelectorAll('.category-checkbox:checked');
            const categoriesValid = categories.length > 0;
            
            submitBtn.disabled = !(titleValid && textValid && ratingValid && categoriesValid);
            
            if (!submitBtn.disabled) {
                submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Kirim Feedback & Dapatkan 50 XP!';
            }
        }

        window.fillSuggestion = function(text) {
            feedbackText.value = text;
            feedbackText.dispatchEvent(new Event('input'));
        };

        feedbackForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (submitBtn.disabled) return;
            
            const categories = Array.from(document.querySelectorAll('.category-checkbox:checked'))
                .map(cb => cb.value);
            
            const feedbackData = {
                id: Date.now(),
                userId: currentUserId,
                userName: document.getElementById('userName').value || 'Anonymous',
                userEmail: document.getElementById('userEmail').value || '',
                rating: currentRating,
                title: feedbackTitle.value,
                text: feedbackText.value,
                categories: categories,
                allowContact: document.getElementById('allowContact').checked,
                timestamp: new Date().toISOString(),
                xpAwarded: 50
            };
            
            feedbacks.push(feedbackData);
            localStorage.setItem('feedbacks', JSON.stringify(feedbacks));
            
            awardXP(feedbackData.xpAwarded);
            
            showSuccessMessage();
            
            updateStatistics();
            
            resetForm();
            
            showXPNotification(feedbackData.xpAwarded);
        });

        function awardXP(amount) {
            const userKey = `user_${currentUserId}`;
            let userData = JSON.parse(localStorage.getItem(userKey)) || {
                userId: currentUserId,
                xp: 1000,
                level: 1,
                feedbackCount: 0
            };
            
            userData.xp = (userData.xp || 0) + amount;
            userData.feedbackCount = (userData.feedbackCount || 0) + 1;
            
            checkLevelUp(userData);
            
            localStorage.setItem(userKey, JSON.stringify(userData));
            
            if (typeof window.updateProfileDisplay === 'function') {
                window.updateProfileDisplay();
            }
            
            return userData;
        }

        function checkLevelUp(userData) {
            const oldLevel = userData.level || 1;
            const newLevel = Math.floor(userData.xp / 100) + 1;
            
            if (newLevel > oldLevel) {
                userData.level = newLevel;
                showLevelUpNotification(newLevel);
            }
        }

        function showLevelUpNotification(level) {
            const notification = document.createElement('div');
            notification.className = 'xp-notification';
            notification.innerHTML = `
                <i class="fas fa-trophy"></i>
                <span>Selamat! Anda naik ke Level ${level}!</span>
                <button class="notification-close" onclick="this.parentElement.remove()">&times;</button>
            `;
            
            document.body.appendChild(notification);
            notification.classList.add('show');
            
            setTimeout(() => {
                notification.remove();
            }, 5000);
        }

        function showSuccessMessage() {
            successMessage.classList.add('show');
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-check"></i> Feedback Terkirim!';
            
            successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
            
            setTimeout(() => {
                successMessage.classList.remove('show');
            }, 5000);
        }

        function showXPNotification(amount) {
            xpNotificationText.textContent = `+${amount} XP untuk feedback Anda!`;
            xpNotification.classList.add('show');
            
            setTimeout(() => {
                xpNotification.classList.remove('show');
            }, 5000);
        }

        closeNotification.addEventListener('click', function() {
            xpNotification.classList.remove('show');
        });

        function updateStatistics() {
            document.getElementById('totalFeedbacks').textContent = feedbacks.length;
            
            if (feedbacks.length > 0) {
                const avgRating = (feedbacks.reduce((sum, fb) => sum + fb.rating, 0) / feedbacks.length).toFixed(1);
                document.getElementById('averageRating').textContent = avgRating;
            }
            
            const userFeedbacks = feedbacks.filter(fb => fb.userId === currentUserId);
            const xpEarned = userFeedbacks.reduce((sum, fb) => sum + fb.xpAwarded, 0);
            document.getElementById('xpEarned').textContent = xpEarned;
            
            const allUsers = {};
            feedbacks.forEach(fb => {
                allUsers[fb.userId] = (allUsers[fb.userId] || 0) + 1;
            });
            
            const sortedUsers = Object.entries(allUsers).sort((a, b) => b[1] - a[1]);
            const userRank = sortedUsers.findIndex(([userId]) => userId === currentUserId) + 1;
            
            if (userRank > 0) {
                const rankSuffix = userRank === 1 ? 'st' : userRank === 2 ? 'nd' : userRank === 3 ? 'rd' : 'th';
                document.getElementById('userRank').textContent = `${userRank}${rankSuffix}`;
            }
            
            loadRecentFeedbacks();
        }

        function loadRecentFeedbacks() {
            const container = document.getElementById('recentFeedbacks');
            const recent = feedbacks.slice(-3).reverse();
            
            container.innerHTML = '';
            
            if (recent.length === 0) {
                container.innerHTML = '<p class="text-muted text-center">Belum ada feedback</p>';
                return;
            }
            
            recent.forEach(fb => {
                const card = document.createElement('div');
                card.className = 'feedback-card';
                
                const date = new Date(fb.timestamp).toLocaleDateString('id-ID', {
                    day: 'numeric',
                    month: 'short',
                    year: 'numeric'
                });
                
                let starsHtml = '';
                for (let i = 1; i <= 5; i++) {
                    starsHtml += i <= fb.rating ? '★' : '☆';
                }
                
                card.innerHTML = `
                    <div class="feedback-header">
                        <div class="feedback-user">${fb.userName}</div>
                        <div class="feedback-date">${date}</div>
                    </div>
                    <div class="feedback-content">
                        <strong>${fb.title}</strong>
                        <p class="mt-2">${fb.text.substring(0, 150)}${fb.text.length > 150 ? '...' : ''}</p>
                    </div>
                    <div class="feedback-rating">
                        ${starsHtml}
                    </div>
                    <div class="mt-2">
                        ${fb.categories.map(cat => `<span class="badge bg-primary me-1">${cat}</span>`).join('')}
                    </div>
                `;
                
                container.appendChild(card);
            });
        }

        function resetForm() {
            currentRating = 0;
            overallRatingValue.value = 0;
            stars.forEach(star => {
                star.classList.remove('active');
                star.textContent = '★';
                star.style.color = '#ddd';
            });
            ratingLabel.textContent = 'Belum ada rating';
            
            feedbackForm.reset();
            feedbackTitle.value = '';
            feedbackText.value = '';
            
            titleCount.textContent = '0';
            textCount.textContent = '0';
            
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Kirim Feedback & Dapatkan 50 XP!';
            
            document.querySelectorAll('.category-checkbox').forEach(cb => cb.checked = false);
        }

        document.addEventListener('DOMContentLoaded', function() {
            if (!localStorage.getItem('currentUserId')) {
                localStorage.setItem('currentUserId', 'user123');
            }
            
            const userKey = `user_${currentUserId}`;
            if (!localStorage.getItem(userKey)) {
                const initialUserData = {
                    userId: currentUserId,
                    username: `User#${currentUserId.slice(-3)}`,
                    xp: 1000,
                    level: 10,
                    feedbackCount: 0
                };
                localStorage.setItem(userKey, JSON.stringify(initialUserData));
            }
            
            if (!localStorage.getItem('feedbacks')) {
                const sampleFeedbacks = [
                    {
                        id: 1,
                        userId: 'user456',
                        userName: 'Budi',
                        rating: 5,
                        title: 'Platform yang sangat menghibur!',
                        text: 'Saya suka sekali dengan konsepnya. Membaca cerita-cerita absurd orang lain bikin hari saya lebih cerah. UI-nya juga lucu dan menarik.',
                        categories: ['user-experience', 'design'],
                        timestamp: new Date(Date.now() - 86400000).toISOString(),
                        xpAwarded: 50
                    },
                    {
                        id: 2,
                        userId: 'user_dela',
                        userName: 'Dela',
                        rating: 4,
                        title: 'Saran untuk fitur filter',
                        text: 'Bisa ditambahkan fitur filter berdasarkan kategori atau trending? Biar lebih mudah cari cerita yang sesuai mood.',
                        categories: ['features', 'suggestions'],
                        timestamp: new Date(Date.now() - 172800000).toISOString(),
                        xpAwarded: 50
                    }
                ];
                localStorage.setItem('feedbacks', JSON.stringify(sampleFeedbacks));
                feedbacks = sampleFeedbacks;
            }
            
            updateStatistics();
            
            document.querySelectorAll('.category-checkbox').forEach(cb => {
                cb.addEventListener('change', validateForm);
            });
            
            feedbackTitle.addEventListener('input', validateForm);
            feedbackText.addEventListener('input', validateForm);
            
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[title]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });

        window.addEventListener('storage', function(e) {
            if (e.key === `user_${currentUserId}`) {
                updateStatistics();
            }
        });
    </script> -->

    <script>
        // Get CSRF token from meta tag
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;

        // State variables
        let currentRating = 0;

        // DOM Elements
        const stars = document.querySelectorAll('.star');
        const overallRatingValue = document.getElementById('overallRatingValue');
        const ratingLabel = document.getElementById('ratingLabel');
        const feedbackTitle = document.getElementById('feedbackTitle');
        const feedbackText = document.getElementById('feedbackText');
        const titleCount = document.getElementById('titleCount');
        const textCount = document.getElementById('textCount');
        const submitBtn = document.getElementById('submitFeedbackBtn');
        const feedbackForm = document.getElementById('feedbackForm');
        const successMessage = document.getElementById('successMessage');
        const xpNotification = document.getElementById('xpNotification');
        const xpNotificationText = document.getElementById('xpNotificationText');
        const closeNotification = document.getElementById('closeNotification');

        // ===== STAR RATING FUNCTIONALITY =====
        stars.forEach(star => {
            // Click handler
            star.addEventListener('click', function() {
                const rating = parseInt(this.getAttribute('data-rating'));
                currentRating = rating;
                overallRatingValue.value = rating;
                
                // Update star display
                stars.forEach((s, index) => {
                    if (index < rating) {
                        s.classList.add('active');
                        s.textContent = '★';
                    } else {
                        s.classList.remove('active');
                        s.textContent = '☆';
                    }
                });
                
                // Update label
                const labels = ['Sangat Buruk', 'Buruk', 'Cukup', 'Baik', 'Sangat Baik'];
                ratingLabel.textContent = labels[rating - 1];
                
                validateForm();
            });
            
            // Hover effect
            star.addEventListener('mouseover', function() {
                const rating = parseInt(this.getAttribute('data-rating'));
                stars.forEach((s, index) => {
                    if (index < rating) {
                        s.style.color = '#ffc107';
                    } else {
                        s.style.color = '#ddd';
                    }
                });
            });
            
            star.addEventListener('mouseout', function() {
                stars.forEach((s, index) => {
                    if (index < currentRating) {
                        s.style.color = '#ffc107';
                    } else {
                        s.style.color = '#ddd';
                    }
                });
            });
        });

        // ===== CHARACTER COUNTER =====
        feedbackTitle.addEventListener('input', function() {
            const count = this.value.length;
            titleCount.textContent = count;
            titleCount.style.color = count > 100 ? '#dc3545' : '#666';
            validateForm();
        });

        feedbackText.addEventListener('input', function() {
            const count = this.value.length;
            textCount.textContent = count;
            textCount.style.color = count > 1000 ? '#dc3545' : '#666';
            validateForm();
        });

        // ===== FORM VALIDATION =====
        function validateForm() {
            const titleValid = feedbackTitle.value.length >= 5 && feedbackTitle.value.length <= 100;
            const textValid = feedbackText.value.length >= 50 && feedbackText.value.length <= 1000;
            const ratingValid = currentRating > 0;
            
            const categories = document.querySelectorAll('.category-checkbox:checked');
            const categoriesValid = categories.length > 0;
            
            submitBtn.disabled = !(titleValid && textValid && ratingValid && categoriesValid);
            
            if (!submitBtn.disabled) {
                submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Kirim Feedback & Dapatkan 50 XP!';
            }
        }

        // Add validation listener to category checkboxes
        document.querySelectorAll('.category-checkbox').forEach(cb => {
            cb.addEventListener('change', validateForm);
        });

        // ===== SUGGESTION CLICK =====
        window.fillSuggestion = function(text) {
            feedbackText.value = text;
            feedbackText.dispatchEvent(new Event('input'));
        };

        // ===== FORM SUBMISSION (LARAVEL API) =====
        feedbackForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            if (submitBtn.disabled) return;
            
            // Disable button and show loading
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mengirim...';
            
            // Collect form data
            const categories = Array.from(document.querySelectorAll('.category-checkbox:checked'))
                .map(cb => cb.value);
            
            const feedbackData = {
                rating: currentRating,
                title: feedbackTitle.value,
                feedback_text: feedbackText.value,
                categories: categories,
                email: document.getElementById('userEmail').value || null,
                name: document.getElementById('userName').value || null,
                allow_contact: document.getElementById('allowContact').checked
            };
            
            try {
                // Send to Laravel backend
                const response = await fetch('/feedback', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(feedbackData)
                });
                
                const result = await response.json();
                
                if (response.ok && result.success) {
                    // Show success message
                    showSuccessMessage();
                    
                    // Show XP notification
                    showXPNotification(result.xp_earned);
                    
                    // Update statistics
                    await loadStats();
                    await loadRecentFeedbacks();
                    
                    // Reset form
                    resetForm();
                } else {
                    // Handle validation errors
                    throw new Error(result.message || 'Gagal mengirim feedback');
                }
                
            } catch (error) {
                console.error('Error:', error);
                alert('Gagal mengirim feedback: ' + error.message);
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Kirim Feedback & Dapatkan 50 XP!';
            }
        });

        // ===== SHOW SUCCESS MESSAGE =====
        function showSuccessMessage() {
            successMessage.classList.add('show');
            successMessage.style.display = 'block';
            successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
            
            setTimeout(() => {
                successMessage.classList.remove('show');
                successMessage.style.display = 'none';
            }, 5000);
        }

        // ===== SHOW XP NOTIFICATION =====
        function showXPNotification(amount) {
            xpNotificationText.textContent = `+${amount} XP untuk feedback Anda!`;
            xpNotification.classList.add('show');
            
            setTimeout(() => {
                xpNotification.classList.remove('show');
            }, 5000);
        }

        closeNotification.addEventListener('click', function() {
            xpNotification.classList.remove('show');
        });

        // ===== RESET FORM =====
        function resetForm() {
            currentRating = 0;
            overallRatingValue.value = 0;
            
            stars.forEach(star => {
                star.classList.remove('active');
                star.textContent = '★';
                star.style.color = '#ddd';
            });
            
            ratingLabel.textContent = 'Belum ada rating';
            
            feedbackForm.reset();
            feedbackTitle.value = '';
            feedbackText.value = '';
            
            titleCount.textContent = '0';
            textCount.textContent = '0';
            
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Kirim Feedback & Dapatkan 50 XP!';
            
            document.querySelectorAll('.category-checkbox').forEach(cb => cb.checked = false);
        }

        // ===== LOAD STATISTICS FROM API =====
        async function loadStats() {
            try {
                const response = await fetch('/feedback/stats', {
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    }
                });
                
                const stats = await response.json();
                
                document.getElementById('totalFeedbacks').textContent = stats.total_feedbacks || 0;
                document.getElementById('averageRating').textContent = stats.average_rating || '0.0';
                document.getElementById('xpEarned').textContent = stats.total_xp_earned || 0;
                document.getElementById('userRank').textContent = stats.user_rank || '-';
                
            } catch (error) {
                console.error('Error loading stats:', error);
            }
        }

        // ===== LOAD RECENT FEEDBACKS FROM API =====
        async function loadRecentFeedbacks() {
            try {
                const response = await fetch('/feedback/recent', {
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    }
                });
                
                const feedbacks = await response.json();
                const container = document.getElementById('recentFeedbacks');
                
                if (feedbacks.length === 0) {
                    container.innerHTML = '<p class="text-muted text-center">Belum ada feedback</p>';
                    return;
                }
                
                container.innerHTML = feedbacks.map(fb => {
                    const date = new Date(fb.created_at).toLocaleDateString('id-ID', {
                        day: 'numeric',
                        month: 'short',
                        year: 'numeric'
                    });
                    
                    let starsHtml = '';
                    for (let i = 1; i <= 5; i++) {
                        starsHtml += i <= fb.rating ? '★' : '☆';
                    }
                    
                    return `
                        <div class="feedback-card mb-3" style="padding: 1rem; border: 1px solid #e0e0e0; border-radius: 8px;">
                            <div class="feedback-header d-flex justify-content-between mb-2">
                                <div class="feedback-user fw-bold">${fb.user?.name || 'Anonymous'}</div>
                                <div class="feedback-date text-muted">${date}</div>
                            </div>
                            <div class="feedback-content">
                                <strong>${fb.title}</strong>
                                <p class="mt-2 mb-0">${fb.feedback_text.substring(0, 150)}${fb.feedback_text.length > 150 ? '...' : ''}</p>
                            </div>
                            <div class="feedback-rating mt-2" style="color: #ffc107;">
                                ${starsHtml}
                            </div>
                        </div>
                    `;
                }).join('');
                
            } catch (error) {
                console.error('Error loading recent feedbacks:', error);
            }
        }

        // ===== INITIALIZE ON PAGE LOAD =====
        document.addEventListener('DOMContentLoaded', function() {
            // Load initial data
            loadStats();
            loadRecentFeedbacks();
            
            // Initial validation state
            validateForm();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>