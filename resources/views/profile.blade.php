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

        :root {
            --primary-color: #E18E2E;
            --secondary-color: #FFE97A;
            --accent-color: #EA4828;
            --info-color: #3bd6cb;
            --dark-color: #05c78d;
            --dark-bg: #ffffff;
            --darker-bg: #ffffff34;
            --light-text: #230575;
            --gray-text: #230575;
            --border-color: #2d3035;
        }
        
        body {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: var(--light-text);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
        }
        
       .profile-banner {
            height: 200px;
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
            position: relative;
            border-radius: 8px 8px 0 0;
            overflow: visible; 
            z-index: 1;
        }
        
       .profile-picture {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 5px solid var(--dark-bg);
            position: absolute;
            bottom: -60px;
            left: 30px;
            background-color: var(--darker-bg);
            overflow: hidden;
            cursor: pointer;
        }
        
        .profile-picture:hover {
            transform: scale(1.05);
        }
        
        .profile-picture img, .profile-banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .profile-info {
            background-color: var(--darker-bg);
            padding: 70px 20px 20px;
            border-radius: 0 0 8px 8px;
            margin-bottom: 20px;
            border: 1px solid var(--border-color);
            border-top: none;
        }
        
        .username {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 5px;
            color: var(--primary-color);
        }
        
        .badge {
            display: inline-block;
            background-color: var(--dark-color);
            color: white;
            padding: 3px 10px;
            border-radius: 12px;
            font-size: 0.8rem;
            margin-right: 5px;
            margin-bottom: 5px;
        }
        
        .badge-warning-report {
            background-color: var(--accent-color) !important;
            color: white !important;
            animation: pulse 2s infinite;
        }
        
        .badge-danger {
            background-color: #dc3545 !important;
            color: white !important;
        }
        
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(220, 53, 69, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(220, 53, 69, 0);
            }
        }
        
        .xp-bar {
            height: 12px;
            background-color: #2d3035;
            border-radius: 6px;
            margin: 10px 0;
            overflow: hidden;
            box-shadow: inset 0 1px 3px rgba(0,0,0,0.3);
        }
        
        .xp-progress {
            height: 100%;
            background: linear-gradient(90deg, var(--secondary-color), var(--dark-color));
            border-radius: 6px;
            width: 65%;
            transition: width 0.5s ease;
        }
        
        .post-card {
            background-color: var(--darker-bg);
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            border-left: 4px solid var(--info-color);
            border: 1px solid var(--border-color);
            transition: transform 0.2s;
        }
        
        .post-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        
        .post-header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        
        .post-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            border: 2px solid var(--info-color);
        }
        
        .post-actions {
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }
        
        .post-action {
            color: var(--gray-text);
            cursor: pointer;
            transition: color 0.2s;
            padding: 5px 10px;
            border-radius: 4px;
        }
        
        .post-action:hover {
            color: var(--light-text);
            background-color: rgba(255,255,255,0.1);
        }
        
        .post-action.active {
            color: var(--darker-bg);
        }
        
        .edit-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            border-radius: 4px;
            padding: 5px 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .edit-btn:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }
        
        .modal-content {
            background-color: var(--darker-bg);
            color: var(--light-text);
            border: 1px solid var(--border-color);
        }
        
        .modal-header {
            border-bottom: 1px solid var(--border-color);
        }
        
        .modal-footer {
            border-top: 1px solid var(--border-color);
        }
        
        .btn-primary {
            background-color: var(--info-color);
            border: none;
            color: white;
        }
        
        .btn-primary:hover {
            background-color: var(--dark-color);
        }
        
        .btn-warning {
            background-color: var(--primary-color);
            border: none;
            color: #333;
        }
        
        .form-control, .form-select {
            background-color: #2d3035;
            border: 1px solid var(--border-color);
            color: var(--light-text);
        }
        
        .form-control:focus, .form-select:focus {
            background-color: #2d3035;
            border-color: var(--info-color);
            color: var(--light-text);
            box-shadow: 0 0 0 0.25rem rgba(67, 181, 173, 0.25);
        }
        
        .nav-tabs {
            border-bottom: 1px solid var(--border-color);
        }
        
        .nav-tabs .nav-link {
            color: var(--gray-text);
            border: none;
        }
        
        .nav-tabs .nav-link.active {
            color: var(--primary-color);
            background-color: transparent;
            border-bottom: 2px solid var(--primary-color);
        }
        
        .activity-item {
            padding: 10px 0;
            border-bottom: 1px solid var(--border-color);
        }
        
        .activity-item:last-child {
            border-bottom: none;
        }
        
        .daily-login-btn {
            background: linear-gradient(135deg, var(--info-color), var(--dark-color));
            color: #333;
            border: none;
            font-weight: bold;
            padding: 8px 15px;
            border-radius: 20px;
            margin-bottom: 15px;
            transition: transform 0.2s;
        }
        
        .daily-login-btn:hover {
            transform: scale(1.05);
        }
        
        .daily-login-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }
        
        .xp-notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: var(--info-color);
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            z-index: 1000;
            display: none;
        }
        
        .stats-container {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
            padding: 10px;
            background-color: rgba(255,255,255,0.05);
            border-radius: 8px;
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-value {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-color);
        }
        
        .stat-report .stat-value {
            color: var(--accent-color) !important;
        }
        
        .stat-label {
            font-size: 0.8rem;
            color: var(--gray-text);
        }
        
        .level-badge {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: #333;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 10px;
        }
        
        .logout-btn-container {
            position: fixed;
            top: 80px;
            right: 20px;
            z-index: 1000;
        }
        
        .logout-btn-custom {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 500;
            box-shadow: 0 4px 8px rgba(220, 53, 69, 0.3);
            transition: all 0.3s ease;
        }
        
        .logout-btn-custom:hover {
            background-color: #c82333;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(220, 53, 69, 0.4);
        }
        
        .penalty-history {
            margin-top: 15px;
            padding: 10px;
            background-color: rgba(220, 53, 69, 0.1);
            border-radius: 8px;
            border-left: 4px solid var(--accent-color);
        }
        
        .penalty-history h6 {
            color: var(--accent-color);
            margin-bottom: 5px;
        }
        
        .penalty-history ul {
            margin: 0;
            padding-left: 20px;
        }
        
        .penalty-history li {
            color: var(--gray-text);
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" id="header">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img class="maskotweb" src="{{ asset('foto/maskotweb.jpeg') }}" alt="🤡"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('beranda') }}">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('upload') }}">Make a memory</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('search') }}">Hall of Shame</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('feedback') }}">Feedback</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('support') }}">Support Us</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="content container">
        <div class="logout-btn-container">
            <button class="btn logout-btn-custom" id="logoutBtn">
                <i class="fas fa-sign-out-alt me-2"></i>Logout
            </button>
        </div>
        
        <div class="xp-notification" id="xpNotification">
            <i class="fas fa-star me-2"></i>
            <span id="xpNotificationText">+10 XP</span>
        </div>
        
        <div class="container mt-4">
            <div class="profile-banner" id="profileBanner">
                <button class="edit-btn" data-bs-toggle="modal" data-bs-target="#bannerModal">
                    <i class="fas fa-camera"></i> Ubah Banner
                </button>
                <div class="profile-picture" id="profilePicture" data-bs-toggle="modal" data-bs-target="#avatarModal">
                    <img src="https://i.pravatar.cc/120" alt="Foto Profil" id="profileImg">
                </div>
            </div>
            
            <div class="profile-info">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <div class="level-badge">Level <span id="currentLevel">15</span></div>
                        <div class="username" id="usernameDisplay">User#1234</div>
                        <div class="mb-2">
                            <span class="badge">Pemula</span>
                            <span class="badge" style="background-color: var(--info-color);">Aktif</span>
                            <span class="badge" style="background-color: var(--accent-color);">Kreator</span>
                        </div>
                        <div class="xp-container">
                            <div class="d-flex justify-content-between">
                                <span>XP: <span id="currentXP">650</span>/1000</span>
                                <span id="xpToNextLevel">350 XP menuju Level 16</span>
                            </div>
                            <div class="xp-bar">
                                <div class="xp-progress" id="xpProgress"></div>
                            </div>
                        </div>
                        <div class="bio mt-3" id="userBio">
                            Halo! Saya pengguna baru di platform ini. Saya suka bermain game dan coding.
                        </div>
                        
                        <div class="stats-container">
                            <div class="stat-item">
                                <div class="stat-value" id="postCount">12</div>
                                <div class="stat-label">Postingan</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value" id="likeCount">47</div>
                                <div class="stat-label">Suka</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value" id="commentCount">23</div>
                                <div class="stat-label">Komentar</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value" id="loginStreak">5</div>
                                <div class="stat-label">Hari Login</div>
                            </div>
                        </div>
                        
                        <div class="penalty-history" id="penaltyHistory" style="display: none;">
                            <h6><i class="fas fa-exclamation-triangle me-2"></i>History Penalty</h6>
                            <ul id="penaltyList">
                            </ul>
                        </div>
                    </div>
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                        <i class="fas fa-edit"></i> Edit Profil
                    </button>
                </div>
            </div>
            
            <button class="btn daily-login-btn w-100" id="dailyLoginBtn">
                <i class="fas fa-calendar-day me-2"></i> Klaim XP Login Harian
            </button>
            
            <ul class="nav nav-tabs mb-3" id="profileTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="posts-tab" data-bs-toggle="tab" data-bs-target="#posts" type="button" role="tab" aria-controls="posts" aria-selected="true">Postingan</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="activity-tab" data-bs-toggle="tab" data-bs-target="#activity" type="button" role="tab" aria-controls="activity" aria-selected="false">Aktivitas</button>
                </li>
            </ul>
            
            <div class="tab-content" id="profileTabContent">
                <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                    <div class="post-card" data-post-id="1">
                        <div class="post-header">
                            <img src="https://i.pravatar.cc/40" class="post-avatar" alt="Avatar">
                            <div>
                                <div class="username">User#1234</div>
                                <small class="text-muted">2 jam yang lalu</small>
                            </div>
                        </div>
                        <p>Hari ini saya berhasil menyelesaikan proyek website baru! Sangat senang dengan hasilnya.</p>
                        <div class="post-actions">
                            <div class="post-action like-btn" data-post-id="1">
                                <i class="far fa-heart"></i> <span class="like-count">12</span>
                            </div>
                            <div class="post-action comment-btn" data-post-id="1">
                                <i class="far fa-comment"></i> <span class="comment-count">5</span>
                            </div>
                            <div class="post-action repost-btn" data-post-id="1">
                                <i class="far fa-share-square"></i> <span class="repost-count">2</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="post-card" data-post-id="2">
                        <div class="post-header">
                            <img src="https://i.pravatar.cc/40" class="post-avatar" alt="Avatar">
                            <div>
                                <div class="username">User#1234</div>
                                <small class="text-muted">1 hari yang lalu</small>
                            </div>
                        </div>
                        <p>Baru saja mencoba game terbaru, grafisnya sangat mengagumkan! Siapa yang sudah mencoba?</p>
                        <div class="post-actions">
                            <div class="post-action like-btn" data-post-id="2">
                                <i class="far fa-heart"></i> <span class="like-count">24</span>
                            </div>
                            <div class="post-action comment-btn" data-post-id="2">
                                <i class="far fa-comment"></i> <span class="comment-count">8</span>
                            </div>
                            <div class="post-action repost-btn" data-post-id="2">
                                <i class="far fa-share-square"></i> <span class="repost-count">3</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="activity" role="tabpanel" aria-labelledby="activity-tab">
                    <div class="activity-item">
                        <i class="fas fa-comment text-info me-2"></i>
                        <span>Anda mengomentari postingan "Tips Coding"</span>
                        <small class="text-muted d-block">3 jam yang lalu</small>
                    </div>
                    <div class="activity-item">
                        <i class="fas fa-heart text-danger me-2"></i>
                        <span>Anda menyukai postingan "Review Game Terbaru"</span>
                        <small class="text-muted d-block">5 jam yang lalu</small>
                    </div>
                    <div class="activity-item">
                        <i class="fas fa-share text-success me-2"></i>
                        <span>Anda membagikan postingan "Tutorial JavaScript"</span>
                        <small class="text-muted d-block">Kemarin</small>
                    </div>
                    <div class="activity-item">
                        <i class="fas fa-user-plus text-warning me-2"></i>
                        <span>Anda mengikuti DeveloperCommunity</span>
                        <small class="text-muted d-block">2 hari yang lalu</small>
                    </div>
                    <div class="activity-item">
                        <i class="fas fa-calendar-day text-primary me-2"></i>
                        <span>Anda mengklaim XP login harian</span>
                        <small class="text-muted d-block">3 hari yang lalu</small>
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

    <div class="modal fade" id="avatarModal" tabindex="-1" aria-labelledby="avatarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="avatarModalLabel">Ubah Foto Profil</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="avatarUpload" class="form-label">Pilih foto profil baru</label>
                        <input class="form-control" type="file" id="avatarUpload" accept="image/*">
                    </div>
                    <div class="text-center">
                        <img src="https://i.pravatar.cc/150" id="avatarPreview" class="rounded-circle" alt="Preview Avatar" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="saveAvatar">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="bannerModal" tabindex="-1" aria-labelledby="bannerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bannerModalLabel">Ubah Banner Profil</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="bannerUpload" class="form-label">Pilih banner baru</label>
                        <input class="form-control" type="file" id="bannerUpload" accept="image/*">
                    </div>
                    <div class="text-center">
                        <img src="https://via.placeholder.com/500x150" id="bannerPreview" class="img-fluid" alt="Preview Banner" style="max-height: 150px; object-fit: cover;">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="saveBanner">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profil</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="usernameInput" class="form-label">Username</label>
                        <input type="text" class="form-control" id="usernameInput" value="User#1234">
                    </div>
                    <div class="mb-3">
                        <label for="bioInput" class="form-label">Bio</label>
                        <textarea class="form-control" id="bioInput" rows="3">Halo! Saya pengguna baru di platform ini. Saya suka bermain game dan coding.</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="saveProfile">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const swipeLeft = document.querySelector('.swipe-left');
        const swipeRight = document.querySelector('.swipe-right');

        const leftCards = document.querySelectorAll('.swipe-left .card');
        const rightCards = document.querySelectorAll('.swipe-right .card');
        
        function pauseLeft() { if(swipeLeft) swipeLeft.style.animationPlayState = 'paused'; }
        function resumeLeft() { if(swipeLeft) swipeLeft.style.animationPlayState = 'running'; }

        function pauseRight() { if(swipeRight) swipeRight.style.animationPlayState = 'paused'; }
        function resumeRight() { if(swipeRight) swipeRight.style.animationPlayState = 'running'; }

        leftCards.forEach(card => {
            card.addEventListener('mouseenter', pauseLeft);
            card.addEventListener('mouseleave', resumeLeft);
            card.addEventListener('touchstart', pauseLeft, { passive: true });
            card.addEventListener('touchend', resumeLeft, { passive: true });
            card.addEventListener('touchcancel', resumeLeft, { passive: true });
            
            card.addEventListener('click', function() {
                window.location.href = '{{ route('beranda') }}';
            });
        });

        rightCards.forEach(card => {
            card.addEventListener('mouseenter', pauseRight);
            card.addEventListener('mouseleave', resumeRight);
            card.addEventListener('touchstart', pauseRight, { passive: true });
            card.addEventListener('touchend', resumeRight, { passive: true });
            card.addEventListener('touchcancel', resumeRight, { passive: true });
            
            card.addEventListener('click', function() {
                window.location.href = '{{ route('beranda') }}';
            });
        });

        setTimeout(() => {
            const shineElement = document.querySelector('.shine');
            if (shineElement) {
                shineElement.style.cursor = 'pointer';
            }
        }, 1000);

        let userData = {
            username: "User#1234",
            bio: "Halo! Saya pengguna baru di platform ini. Saya suka bermain game dan coding.",
            xp: 650,
            level: 15,
            badges: ["Pemula", "Aktif", "Kreator"],
            avatar: "https://i.pravatar.cc/120",
            banner: "https://via.placeholder.com/500x150",
            stats: {
                posts: 12,
                likes: 47,
                comments: 23,
                loginStreak: 5,
                reports: 0
            },
            dailyLoginClaimed: false,
            likedPosts: [],
            commentedPosts: [],
            repostedPosts: [],
            reportCount: 0,
            totalXpPenalty: 0,
            suspended: false
        };
        
        const xpValues = {
            dailyLogin: 50,
            likePost: 5,
            commentPost: 10,
            repost: 15,
            changeAvatar: 10,
            changeBanner: 15,
            editProfile: 5
        };
        
        function showXpNotification(xpAmount, message) {
            const notification = document.getElementById('xpNotification');
            const notificationText = document.getElementById('xpNotificationText');
            
            notificationText.textContent = `+${xpAmount} XP - ${message}`;
            notification.style.display = 'block';
            
            setTimeout(() => {
                notification.style.display = 'none';
            }, 3000);
        }
        
        function addXP(amount, activity) {
            userData.xp += amount;
            
            showXpNotification(amount, activity);
            
            checkLevelUp();
            
            updateProfileDisplay();
        }
        
        function loadUserData() {
            const currentUserId = localStorage.getItem('currentUserId') || 'user123';
            const savedData = JSON.parse(localStorage.getItem(`user_${currentUserId}`));
            
            if (savedData) {
                userData = { ...userData, ...savedData };
            }
            
            const allReports = JSON.parse(localStorage.getItem('reports')) || [];
            const userReports = allReports.filter(report => 
                getPostAuthorIdFromReport(report.postId) === currentUserId
            );
            
            userData.stats.reports = userReports.length;
            userData.reportCount = userReports.length;
            
            userData.totalXpPenalty = userReports.length * 50;
            
            if (userData.suspended && userData.suspendedUntil) {
                const suspendUntil = new Date(userData.suspendedUntil);
                const now = new Date();
                if (now > suspendUntil) {
                    userData.suspended = false;
                    userData.suspendedUntil = null;
                    localStorage.setItem(`user_${currentUserId}`, JSON.stringify(userData));
                }
            }
        }
        
        function getPostAuthorIdFromReport(postId) {
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
                10: 'user718',
                11: 'user192',
                12: 'user021',
                13: 'user223',
                14: 'user425',
                15: 'user526',
                16: 'user627',
                17: 'user728',
                18: 'user829',
                19: 'user930',
                20: 'user031'
            };
            return postAuthors[postId] || 'anonymous';
        }
        
        function updateProfileDisplay() {
            document.getElementById('usernameDisplay').textContent = userData.username;
            document.getElementById('userBio').textContent = userData.bio;
            document.getElementById('currentXP').textContent = userData.xp;
            document.getElementById('currentLevel').textContent = userData.level;
            
            const xpForCurrentLevel = (userData.level - 1) * 100;
            const xpInCurrentLevel = userData.xp - xpForCurrentLevel;
            const xpPercentage = (xpInCurrentLevel / 100) * 100;
            document.getElementById('xpProgress').style.width = `${xpPercentage}%`;
            
            const xpToNextLevel = 100 - xpInCurrentLevel;
            document.getElementById('xpToNextLevel').textContent = `${xpToNextLevel} XP menuju Level ${userData.level + 1}`;
            
            document.getElementById('profileImg').src = userData.avatar;
            document.getElementById('profileBanner').style.backgroundImage = `url('${userData.banner}')`;
            
            document.getElementById('postCount').textContent = userData.stats.posts;
            document.getElementById('likeCount').textContent = userData.stats.likes;
            document.getElementById('commentCount').textContent = userData.stats.comments;
            document.getElementById('loginStreak').textContent = userData.stats.loginStreak;
            
            updateReportBadge();
            
            updateReportStats();
            
            updatePenaltyHistory();
            
            const dailyLoginBtn = document.getElementById('dailyLoginBtn');
            if (userData.dailyLoginClaimed) {
                dailyLoginBtn.disabled = true;
                dailyLoginBtn.innerHTML = '<i class="fas fa-check me-2"></i> XP Login Harian Sudah Diklaim';
            } else {
                dailyLoginBtn.disabled = false;
                dailyLoginBtn.innerHTML = '<i class="fas fa-calendar-day me-2"></i> Klaim XP Login Harian';
            }
        }
        
        function updateReportBadge() {
            const badgeContainer = document.querySelector('.profile-info .mb-2');
            
            const existingReportBadge = badgeContainer.querySelector('.badge-warning-report');
            if (existingReportBadge) {
                existingReportBadge.remove();
            }
            
            const existingSuspendedBadge = badgeContainer.querySelector('.badge-danger');
            if (existingSuspendedBadge) {
                existingSuspendedBadge.remove();
            }
            
            if (userData.reportCount > 0) {
                const reportBadge = document.createElement('span');
                reportBadge.className = 'badge badge-warning-report';
                reportBadge.textContent = `${userData.reportCount} Report`;
                reportBadge.title = `${userData.reportCount} postingan Anda telah dilaporkan`;
                reportBadge.setAttribute('data-bs-toggle', 'tooltip');
                badgeContainer.appendChild(reportBadge);
            }
            
            if (userData.suspended) {
                const suspendedBadge = document.createElement('span');
                suspendedBadge.className = 'badge badge-danger';
                suspendedBadge.textContent = 'Suspended';
                suspendedBadge.title = 'Akun Anda ditangguhkan karena menerima banyak laporan';
                suspendedBadge.setAttribute('data-bs-toggle', 'tooltip');
                badgeContainer.appendChild(suspendedBadge);
                
                if (userData.suspendedUntil) {
                    const suspendUntil = new Date(userData.suspendedUntil);
                    const now = new Date();
                    if (suspendUntil > now) {
                        showSuspendedModal(suspendUntil);
                    }
                }
            }
        }
        
        function updateReportStats() {
            const statsContainer = document.querySelector('.stats-container');
            let reportStat = statsContainer.querySelector('.stat-report');
            
            if (!reportStat && userData.reportCount > 0) {
                reportStat = document.createElement('div');
                reportStat.className = 'stat-item stat-report';
                reportStat.innerHTML = `
                    <div class="stat-value" id="reportCount">${userData.reportCount}</div>
                    <div class="stat-label">Laporan</div>
                `;
                statsContainer.appendChild(reportStat);
            } else if (reportStat) {
                reportStat.querySelector('#reportCount').textContent = userData.reportCount;
            }
        }
        
        function updatePenaltyHistory() {
            const penaltyHistory = document.getElementById('penaltyHistory');
            const penaltyList = document.getElementById('penaltyList');
            
            if (userData.totalXpPenalty > 0) {
                penaltyHistory.style.display = 'block';
                penaltyList.innerHTML = '';
                
                const allReports = JSON.parse(localStorage.getItem('reports')) || [];
                const userReports = allReports.filter(report => 
                    getPostAuthorIdFromReport(report.postId) === localStorage.getItem('currentUserId')
                );
                
                userReports.forEach((report, index) => {
                    const li = document.createElement('li');
                    const reportDate = new Date(report.timestamp).toLocaleDateString('id-ID');
                    li.textContent = `-${50} XP (${reportDate}): Postingan dilaporkan karena "${report.reason}"`;
                    penaltyList.appendChild(li);
                });
                
                if (userData.suspended) {
                    const li = document.createElement('li');
                    li.textContent = `⚠️ Akun ditangguhkan selama 7 hari (menerima ${userData.reportCount} laporan)`;
                    penaltyList.appendChild(li);
                }
                
                const totalLi = document.createElement('li');
                totalLi.innerHTML = `<strong>Total XP yang hilang: -${userData.totalXpPenalty}</strong>`;
                penaltyList.appendChild(totalLi);
            } else {
                penaltyHistory.style.display = 'none';
            }
        }
        
        function showSuspendedModal(untilDate) {
            if (document.querySelector('.modal-suspended')) return;
            
            const modalHtml = `
                <div class="modal fade modal-suspended" id="suspendedModal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-danger text-white">
                                <h5 class="modal-title"><i class="fas fa-ban me-2"></i>Akun Ditangguhkan</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-danger">
                                    <h6><i class="fas fa-exclamation-triangle me-2"></i>Akses Anda dibatasi!</h6>
                                    <p>Akun Anda telah ditangguhkan karena menerima terlalu banyak laporan dari pengguna lain.</p>
                                    <p class="mb-0"><strong>Akun akan aktif kembali pada:</strong><br>
                                    ${untilDate.toLocaleDateString('id-ID', { 
                                        weekday: 'long', 
                                        year: 'numeric', 
                                        month: 'long', 
                                        day: 'numeric',
                                        hour: '2-digit',
                                        minute: '2-digit'
                                    })}</p>
                                </div>
                                <div class="mt-3">
                                    <h6>Alasan Penangguhan:</h6>
                                    <ul>
                                        <li>Postingan Anda dilaporkan karena melanggar aturan komunitas</li>
                                        <li>Menerima ${userData.reportCount} laporan dari pengguna lain</li>
                                        <li>XP Anda telah dikurangi sebanyak ${userData.totalXpPenalty} poin</li>
                                    </ul>
                                    <p class="text-muted mt-3">Selama penangguhan, Anda tidak dapat membuat postingan baru atau berinteraksi dengan postingan lain.</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            const modalContainer = document.createElement('div');
            modalContainer.innerHTML = modalHtml;
            document.body.appendChild(modalContainer);
            
            const modal = new bootstrap.Modal(document.getElementById('suspendedModal'));
            modal.show();
            
            document.getElementById('suspendedModal').addEventListener('hidden.bs.modal', function() {
                modalContainer.remove();
            });
        }

        function checkLevelUp() {
            const xpNeeded = userData.level * 100;
            if (userData.xp >= xpNeeded) {
                userData.level++;

                if (userData.level === 5 && !userData.badges.includes("Aktif")) {
                    userData.badges.push("Aktif");
                } else if (userData.level === 10 && !userData.badges.includes("Kreator")) {
                    userData.badges.push("Kreator");
                } else if (userData.level === 20 && !userData.badges.includes("Expert")) {
                    userData.badges.push("Expert");
                }
                
                updateProfileDisplay();

                showXpNotification(0, `Selamat! Anda naik ke level ${userData.level}`);
            }
        }

        document.getElementById('avatarUpload').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('avatarPreview').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
        
        document.getElementById('bannerUpload').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('bannerPreview').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
        
        document.getElementById('saveAvatar').addEventListener('click', function() {
            const newAvatar = document.getElementById('avatarPreview').src;
            userData.avatar = newAvatar;
            
            addXP(xpValues.changeAvatar, "Mengubah avatar");
            
            const currentUserId = localStorage.getItem('currentUserId') || 'user123';
            localStorage.setItem(`user_${currentUserId}`, JSON.stringify(userData));
            
            const modal = bootstrap.Modal.getInstance(document.getElementById('avatarModal'));
            modal.hide();
        });
        
        document.getElementById('saveBanner').addEventListener('click', function() {
            const newBanner = document.getElementById('bannerPreview').src;
            userData.banner = newBanner;
            
            addXP(xpValues.changeBanner, "Mengubah banner");
            
            const currentUserId = localStorage.getItem('currentUserId') || 'user123';
            localStorage.setItem(`user_${currentUserId}`, JSON.stringify(userData));
            
            const modal = bootstrap.Modal.getInstance(document.getElementById('bannerModal'));
            modal.hide();
        });
        
        document.getElementById('saveProfile').addEventListener('click', function() {
            userData.username = document.getElementById('usernameInput').value;
            userData.bio = document.getElementById('bioInput').value;
            
            addXP(xpValues.editProfile, "Mengedit profil");
            
            const currentUserId = localStorage.getItem('currentUserId') || 'user123';
            localStorage.setItem(`user_${currentUserId}`, JSON.stringify(userData));
            
            const modal = bootstrap.Modal.getInstance(document.getElementById('editProfileModal'));
            modal.hide();
        });

        document.getElementById('dailyLoginBtn').addEventListener('click', function() {
            if (!userData.dailyLoginClaimed) {
                userData.dailyLoginClaimed = true;
                userData.stats.loginStreak++;
                addXP(xpValues.dailyLogin, "Login harian");
                addActivity("Anda mengklaim XP login harian", "fas fa-calendar-day", "text-primary");
                
                const currentUserId = localStorage.getItem('currentUserId') || 'user123';
                localStorage.setItem(`user_${currentUserId}`, JSON.stringify(userData));
            }
        });

        function addActivity(text, icon, color) {
            const activityTab = document.getElementById('activity');
            const activityItem = document.createElement('div');
            activityItem.className = 'activity-item';
            activityItem.innerHTML = `
                <i class="${icon} ${color} me-2"></i>
                <span>${text}</span>
                <small class="text-muted d-block">Baru saja</small>
            `;

            activityTab.insertBefore(activityItem, activityTab.firstChild);
        }
 
        document.addEventListener('click', function(e) {
            if (e.target.closest('.like-btn')) {
                const likeBtn = e.target.closest('.like-btn');
                const postId = likeBtn.getAttribute('data-post-id');
                
                if (!userData.likedPosts.includes(postId)) {
                    userData.likedPosts.push(postId);
                    const likeCount = likeBtn.querySelector('.like-count');
                    likeCount.textContent = parseInt(likeCount.textContent) + 1;
                    addXP(xpValues.likePost, "Menyukai postingan");
                    userData.stats.likes++;
                    addActivity("Anda menyukai sebuah postingan", "fas fa-heart", "text-danger");
                    
                    const currentUserId = localStorage.getItem('currentUserId') || 'user123';
                    localStorage.setItem(`user_${currentUserId}`, JSON.stringify(userData));
                }
            }

            if (e.target.closest('.comment-btn')) {
                const commentBtn = e.target.closest('.comment-btn');
                const postId = commentBtn.getAttribute('data-post-id');
                
                if (!userData.commentedPosts.includes(postId)) {
                    userData.commentedPosts.push(postId);
                    const commentCount = commentBtn.querySelector('.comment-count');
                    commentCount.textContent = parseInt(commentCount.textContent) + 1;
                    addXP(xpValues.commentPost, "Mengomentari postingan");
                    userData.stats.comments++;
                    addActivity("Anda mengomentari sebuah postingan", "fas fa-comment", "text-info");
                    const comment = prompt("Tulis komentar Anda:");
                    if (comment) {
                        alert("Komentar berhasil ditambahkan!");
                    }
                    
                    const currentUserId = localStorage.getItem('currentUserId') || 'user123';
                    localStorage.setItem(`user_${currentUserId}`, JSON.stringify(userData));
                }
            }

            if (e.target.closest('.repost-btn')) {
                const repostBtn = e.target.closest('.repost-btn');
                const postId = repostBtn.getAttribute('data-post-id');
                
                if (!userData.repostedPosts.includes(postId)) {
                    userData.repostedPosts.push(postId);

                    const repostCount = repostBtn.querySelector('.repost-count');
                    repostCount.textContent = parseInt(repostCount.textContent) + 1;

                    addXP(xpValues.repost, "Membagikan postingan");

                    addActivity("Anda membagikan sebuah postingan", "fas fa-share", "text-success");
                    
                    alert("Postingan berhasil dibagikan!");
                    
                    const currentUserId = localStorage.getItem('currentUserId') || 'user123';
                    localStorage.setItem(`user_${currentUserId}`, JSON.stringify(userData));
                }
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            loadUserData();
            
            updateProfileDisplay();
            
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
            
            if (!localStorage.getItem('currentUserId')) {
                localStorage.setItem('currentUserId', 'user123');
            }
        });

        window.updateProfileDisplay = updateProfileDisplay;

        document.getElementById('logoutBtn').addEventListener('click', function() {
            if (confirm('Apakah Anda yakin ingin logout?')) {
                sessionStorage.clear();
                localStorage.removeItem('currentUserId');
               
                window.location.href = '{{ route('login') }}';
            }
        });
    </script>
    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>