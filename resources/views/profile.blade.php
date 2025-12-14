<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>🤡 | MemoraX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

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
            background: radial-gradient(circle at center, #fff 0%, #fff 60%, #fff4df 85%, #fff4df 100%);
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
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .stat-item {
            text-align: center;
            flex: 1 1 80px;
            min-width: 70px;
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
            <div class="profile-banner" id="profileBanner"  style="background-image: url('{{ $user->banner ?? '' }}'); background-size: cover; background-position: center;">
                <button class="edit-btn" 
                        type="button"
                        data-bs-toggle="modal" 
                        data-bs-target="#bannerModal"
                        id="editBannerBtn">
                    <i class="fas fa-camera"></i> Ubah Banner
                </button>
                <div class="profile-picture" id="profilePicture" data-bs-toggle="modal" data-bs-target="#avatarModal">
                    <img src="{{ $user->avatar ?? 'https://i.pravatar.cc/120' }}" alt="Foto Profil" id="profileImg">
                </div>
            </div>
            
            <!-- <div class="profile-info">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <div class="level-badge">Level <span id="currentLevel">{{ $user->level }}</span></div>
                        <div class="username" id="usernameDisplay">{{ $user->username ?? $user->name }}</div>
                        <div class="mb-2">
                            <span class="badge">Pemula</span>
                            <span class="badge" style="background-color: var(--info-color);">Aktif</span>
                            <span class="badge" style="background-color: var(--accent-color);">Kreator</span>
                        </div>
                        <div class="xp-container">
                            @php
                                $maxXp = $user->level * 1000;
                                $xpProgress = ($user->xp / $maxXp) * 100;
                                $xpToNext = $maxXp - $user->xp;
                            @endphp
                            <div class="d-flex justify-content-between">
                                <span>XP: <span id="currentXP">{{ $user->xp }}</span>/</span></span>
                                <span id="xpToNextLevel">{{ $xpToNext }} XP menuju Level {{ $user->level + 1 }}</span>
                            </div>
                            </div>
                            <div class="xp-bar">
                                <div class="xp-progress" id="xpProgress" style="width: {{ $xpProgress }}%></div>
                            </div>
                        </div>
                        <div class="bio mt-3" id="userBio">
                             {{ $user->bio ?? 'Belum ada bio' }}
                        </div>
                        
                        <div class="stats-container">
                            <div class="stat-item">
                                <div class="stat-value" id="postCount">{{ $user->posts_count ?? 0 }}</div>
                                <div class="stat-label">Postingan</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value" id="likeCount">{{ $user->total_likes ?? 0 }}</div>
                                <div class="stat-label">Suka</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value" id="komentarCount">{{ $user->komentars_count ?? 0 }}</div>
                                <div class="stat-label">Komentar</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value" id="loginStreak">{{ $user->login_streak ?? 0 }}</div>
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
            </div> -->

            <div class="profile-info">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <div class="level-badge">Level <span id="currentLevel">{{ $user->level }}</span></div>
                        <div class="username" id="usernameDisplay">{{ $user->username ?? $user->name }}</div>
                    </div>
                    <button class="btn btn-warning btn-sm" 
                            type="button"
                            data-bs-toggle="modal" 
                            data-bs-target="#editProfileModal"
                            id="editProfileBtn">
                        <i class="fas fa-edit"></i> Edit Profil
                    </button>
                </div>
                
                <div class="mb-2">
                    <!-- <span class="badge">Pemula</span>
                    <span class="badge" style="background-color: var(--info-color);">Aktif</span>
                    <span class="badge" style="background-color: var(--accent-color);">Kreator</span> -->

                    @if($user->xp >= 1 && $user->xp <= 4999)
                        <span class="badge">Pemula</span>
                    @elseif($user->xp >= 5000 && $user->xp <= 9999)
                        <span class="badge" style="background-color: var(--info-color);">Aktif</span>
                    @elseif($user->xp >= 10000 && $user->xp <= 15000)
                        <span class="badge" style="background-color: var(--accent-color);">Kreator</span>
                    @endif
                </div>
                
                <div class="xp-container">
                    @php
                        $maxXp = $user->level * 1000;
                        $xpProgress = ($user->xp / $maxXp) * 100;
                        $xpToNext = $maxXp - $user->xp;
                         if ($user->xp > $user->level * 1000) {
                            $user->level = $user->level + 1;
                            $user->save(); // Jangan lupa save untuk menyimpan ke database
                        }
                    @endphp
                    <div class="d-flex justify-content-between">
                        <span>XP: <span id="currentXP">{{ $user->xp }}</span>/{{ $maxXp }}</span>
                        <span id="xpToNextLevel">{{ $xpToNext }} XP menuju Level {{ $user->level + 1 }}</span>
                    </div>
                    <div class="xp-bar">
                        <div class="xp-progress" id="xpProgress" style="width: {{ $xpProgress }}%"></div>
                    </div>
                </div>
                
                <div class="bio mt-3" id="userBio">
                    {{ $user->bio ?? 'Belum ada bio' }}
                </div>
                
                <div class="stats-container">
                    <div class="stat-item">
                        <div class="stat-value" id="postCount">{{ $user->posts_count ?? 0 }}</div>
                        <div class="stat-label">Postingan</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value" id="likeCount">{{ $user->total_likes ?? 0 }}</div>
                        <div class="stat-label">Suka</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value" id="komentarCount">{{ $user->komentars_count ?? 0 }}</div>
                        <div class="stat-label">Komentar</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value" id="loginStreak">{{ $user->login_streak ?? 0 }}</div>
                        <div class="stat-label">Hari Login</div>
                    </div>
                </div>
                
                <div class="penalty-history" id="penaltyHistory" style="display: none;">
                    <h6><i class="fas fa-exclamation-triangle me-2"></i>History Penalty</h6>
                    <ul id="penaltyList"></ul>
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
                <!-- TAB POSTINGAN - DARI DATABASE -->
                <div class="tab-pane fade show active" id="posts" role="tabpanel">
                    @forelse($user->posts as $post)
                        <div class="post-card" data-post-id="{{ $post->id }}">
                            <div class="post-header">
                                <img src="{{ $user->avatar ?? 'https://i.pravatar.cc/40' }}" class="post-avatar" alt="Avatar">
                                <div>
                                    <div class="username">{{ $user->username ?? $user->name }}</div>
                                    <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                                </div>
                            </div>
                            
                            @if($post->gambar)
                                <img src="{{ asset('storage/' . $post->gambar) }}" alt="{{ $post->judul }}" class="img-fluid rounded mb-2" style="max-height: 300px; object-fit: cover;">
                            @endif
                            
                            <h6 class="fw-bold">{{ $post->judul }}</h6>
                            <p>{{ Str::limit($post->isi, 150) }}</p>
                            
                            <div class="post-actions">
                                <div class="post-action like-btn" data-post-id="{{ $post->id }}">
                                    <i class="{{ $post->isLikedBy(auth()->user()) ? 'fas' : 'far' }} fa-heart"></i> 
                                    <span class="like-count">{{ $post->likes }}</span>
                                </div>
                                <div class="post-action komentar-btn" data-post-id="{{ $post->id }}">
                                    <i class="far fa-comment"></i> 
                                    <span class="komentar-count">{{ $post->komentars_count }}</span>
                                </div>
                                <div class="post-action">
                                    <i class="far fa-eye"></i> 
                                    <span>{{ $post->views ?? 0 }}</span>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-5">
                            <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                            <p class="text-muted">Belum ada postingan</p>
                            <a href="{{ route('upload') }}" class="btn btn-primary">Buat Postingan Pertama</a>
                        </div>
                    @endforelse
                </div>

                 <div class="tab-pane fade" id="activity" role="tabpanel">
                    @forelse($activities as $activity)
                        <div class="activity-item">
                            @php
                                $iconMap = [
                                    'like' => ['icon' => 'fa-heart', 'color' => 'danger'],
                                    'comment' => ['icon' => 'fa-comment', 'color' => 'info'],
                                    'post' => ['icon' => 'fa-plus-circle', 'color' => 'success'],
                                    'login' => ['icon' => 'fa-calendar-day', 'color' => 'primary'],
                                    'profile' => ['icon' => 'fa-user-edit', 'color' => 'warning'],
                                    'avatar' => ['icon' => 'fa-camera', 'color' => 'info'],
                                    'banner' => ['icon' => 'fa-image', 'color' => 'success'],
                                ];
                                
                                $activityType = $activity->type ?? 'post';
                                $icon = $iconMap[$activityType]['icon'] ?? 'fa-circle';
                                $color = $iconMap[$activityType]['color'] ?? 'secondary';
                            @endphp
                            
                            <i class="fas {{ $icon }} text-{{ $color }} me-2"></i>
                            <span>{{ $activity->description }}</span>
                            <small class="text-muted d-block">{{ $activity->created_at->diffForHumans() }}</small>
                        </div>
                    @empty
                        <div class="text-center text-muted py-5">
                            <i class="fas fa-inbox fa-3x mb-3"></i>
                            <p>Belum ada aktivitas</p>
                        </div>
                    @endforelse
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

    <div class="modal fade" id="avatarModal" tabindex="-1" aria-labelledby="avatarModalLabel" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="avatarModalLabel">
                        <i class="fas fa-user-circle me-2"></i>Ubah Foto Profil
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" id="closeAvatarModal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="avatarUpload" class="form-label">
                            <i class="fas fa-upload me-2"></i>Pilih foto profil baru (Max 2MB)
                        </label>
                        <input class="form-control" 
                            type="file" 
                            id="avatarUpload" 
                            accept="image/jpeg,image/png,image/jpg,image/gif">
                        <small class="text-muted">
                            <i class="fas fa-info-circle me-1"></i>
                            Format: JPG, PNG, GIF. Ukuran maksimal: 2MB. Rasio 1:1 (kotak) untuk hasil terbaik.
                        </small>
                    </div>
                    
                    <!-- Preview Container -->
                    <div class="avatar-preview-container" id="avatarPreviewContainer">
                        <img src="{{ $user->avatar ?? 'https://ui-avatars.com/api/?name=' . urlencode($user->name) . '&size=200&background=667eea&color=fff' }}" 
                            id="avatarPreview" 
                            alt="Preview Avatar">
                    </div>
                    
                    <!-- Loading Indicator -->
                    <div class="avatar-loading d-none" id="avatarLoading">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal" id="cancelAvatarBtn">
                        <i class="fas fa-times me-2"></i>Batal
                    </button>
                    <button type="button" class="btn btn-success" id="saveAvatar">
                        <i class="fas fa-check me-2"></i>Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="bannerModal" tabindex="-1" aria-labelledby="bannerModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bannerModalLabel">Ubah Banner Profil</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close" id="closeBannerModal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="bannerUpload" class="form-label">Pilih banner baru (Max 2MB)</label>
                            <input class="form-control" type="file" id="bannerUpload" accept="image/jpeg,image/png,image/jpg,image/gif">
                            <small class="text-muted">Format: JPG, PNG, GIF. Ukuran maksimal: 2MB</small>
                        </div>
                        <div class="text-center">
                            <img src="{{ $user->banner ?? 'https://via.placeholder.com/500x150/6c757d/ffffff?text=Banner+Preview' }}" 
                                id="bannerPreview" 
                                class="img-fluid rounded" 
                                alt="Preview Banner" 
                                style="max-height: 150px; width: 100%; object-fit: cover;">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="cancelBannerBtn">Batal</button>
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
                    <!-- <div class="mb-3">
                        <label for="nameInput" class="form-label">Username</label>
                        <input type="text" class="form-control" id="nameInput" value="{{$user->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="bioInput" class="form-label">Bio</label>
                        <textarea class="form-control" id="bioInput" rows="3">{{$user->bio}}</textarea>
                    </div> -->

                    <!-- 1. INPUT USERNAME -->
                    <div class="mb-3">
                        <label for="usernameInput" class="form-label">Username</label>
                        <input type="text" class="form-control" id="usernameInput" value="{{ $user->username ?? $user->name }}">
                    </div>

                    <!-- 2. INPUT NAME -->
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nameInput" value="{{ $user->name }}">
                    </div>

                    <!-- 3. INPUT BIO -->
                    <div class="mb-3">
                        <label for="bioInput" class="form-label">Bio</label>
                        <textarea class="form-control" id="bioInput" rows="3">{{ $user->bio ?? '' }}</textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="saveProfile">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // ===== DEBUG & FIX EDIT PROFILE =====
        document.addEventListener('DOMContentLoaded', function() {
            console.log('=== DEBUG: Page Loaded ===');
            
            // Check CSRF Token
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
            console.log('CSRF Token:', csrfToken ? 'Found ✓' : 'NOT FOUND ✗');
            
            // Check Save Button
            const saveProfileBtn = document.getElementById('saveProfile');
            console.log('Save Button:', saveProfileBtn ? 'Found ✓' : 'NOT FOUND ✗');
            
            if (!saveProfileBtn) {
                console.error('❌ Button saveProfile tidak ditemukan!');
                return;
            }
            
            // Check Input Fields
            const usernameInput = document.getElementById('usernameInput');
            const nameInput = document.getElementById('nameInput');
            const bioInput = document.getElementById('bioInput');
            
            console.log('Username Input:', usernameInput ? 'Found ✓' : 'NOT FOUND ✗');
            console.log('Name Input:', nameInput ? 'Found ✓' : 'NOT FOUND ✗');
            console.log('Bio Input:', bioInput ? 'Found ✓' : 'NOT FOUND ✗');
            
            // Add Click Event
            saveProfileBtn.addEventListener('click', async function(e) {
                e.preventDefault();
                console.log('=== DEBUG: Button Clicked ===');
                
                // Validate Elements
                if (!usernameInput || !nameInput || !bioInput) {
                    console.error('❌ Input fields tidak lengkap!');
                    alert('Error: Form tidak lengkap. Silakan refresh halaman.');
                    return;
                }
                
                // Get Values
                const username = usernameInput.value.trim();
                const name = nameInput.value.trim();
                const bio = bioInput.value.trim();
                
                console.log('Username:', username);
                console.log('Name:', name);
                console.log('Bio:', bio);
                
                // Validate
                if (!username) {
                    alert('Username tidak boleh kosong');
                    usernameInput.focus();
                    return;
                }
                
                if (!name) {
                    alert('Nama lengkap tidak boleh kosong');
                    nameInput.focus();
                    return;
                }
                
                // Check CSRF Token
                if (!csrfToken) {
                    console.error('❌ CSRF Token tidak ditemukan!');
                    alert('Error: CSRF Token tidak ditemukan. Silakan refresh halaman.');
                    return;
                }
                
                // Loading State
                const btn = this;
                const originalHTML = btn.innerHTML;
                btn.disabled = true;
                btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Menyimpan...';
                
                console.log('=== Sending Request ===');
                
                try {
                    const response = await fetch('/profile/update', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken,
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({
                            username: username,
                            name: name,
                            bio: bio
                        })
                    });
                    
                    console.log('Response Status:', response.status);
                    console.log('Response OK:', response.ok);
                    
                    const data = await response.json();
                    console.log('Response Data:', data);
                    
                    if (data.success) {
                        console.log('✅ Update berhasil!');
                        
                        // Update UI
                        const usernameDisplay = document.getElementById('usernameDisplay');
                        const userBio = document.getElementById('userBio');
                        
                        if (usernameDisplay) {
                            usernameDisplay.textContent = username;
                            console.log('Updated usernameDisplay');
                        }
                        
                        if (userBio) {
                            userBio.textContent = bio || 'Belum ada bio';
                            console.log('Updated userBio');
                        }
                        
                        // Close Modal
                        const modalElement = document.getElementById('editProfileModal');
                        const modalInstance = bootstrap.Modal.getInstance(modalElement);
                        
                        if (modalInstance) {
                            modalInstance.hide();
                            console.log('Modal closed via Bootstrap');
                        } else {
                            // Manual close
                            modalElement.classList.remove('show');
                            modalElement.style.display = 'none';
                            document.body.classList.remove('modal-open');
                            const backdrop = document.querySelector('.modal-backdrop');
                            if (backdrop) backdrop.remove();
                            console.log('Modal closed manually');
                        }
                        
                        alert('✅ Profil berhasil diupdate!');
                        
                        // Reload page untuk refresh data
                        setTimeout(() => {
                            window.location.reload();
                        }, 500);
                        
                    } else {
                        console.error('❌ Update gagal:', data.message);
                        alert(data.message || 'Gagal mengupdate profil');
                    }
                    
                } catch (error) {
                    console.error('❌ Error:', error);
                    alert('Terjadi kesalahan: ' + error.message);
                } finally {
                    btn.disabled = false;
                    btn.innerHTML = originalHTML;
                }
            });
            
            console.log('=== Event Listener Added ===');
        });
    </script>

    <script>
        // ===== CONFIGURATION =====
        const xpValues = {
            dailyLogin: 50,
            likePost: 5,
            komentarPost: 10,
            repost: 15,
            changeAvatar: 10,
            changeBanner: 15,
            editProfile: 5
        };

        // Get CSRF Token
        // const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

        function getCsrfToken() {
            const metaToken = document.querySelector('meta[name="csrf-token"]');
            if (metaToken) {
                return metaToken.getAttribute('content');
            }
            
            // Fallback: coba dari input hidden
            const inputToken = document.querySelector('input[name="_token"]');
            if (inputToken) {
                return inputToken.value;
            }
            
            console.error('CSRF token not found!');
            return null;
        }

        const csrfToken = getCsrfToken();


        // ===== XP NOTIFICATION =====
        function showXpNotification(xpAmount, message) {
            const notification = document.getElementById('xpNotification');
            const notificationText = document.getElementById('xpNotificationText');
            
            if (notification && notificationText) {
                notificationText.textContent = xpAmount > 0 ? `+${xpAmount} XP - ${message}` : message;
                notification.style.display = 'block';
                
                setTimeout(() => {
                    notification.style.display = 'none';
                }, 3000);
            }
        }

        // ===== ADD XP TO DATABASE =====
        async function addXP(amount, activity) {

            if (!csrfToken) {
                console.error('Cannot add XP: CSRF token missing');
                return;
            }

            try {
                const response = await fetch('/profile/add-xp', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        xp: amount,
                        activity: activity
                    })
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                } 

                const data = await response.json();
                
                if (data.success) {
                    showXpNotification(amount, activity);
                    
                    // // Update UI
                    // document.getElementById('currentXP').textContent = data.user.xp;
                    // document.getElementById('currentLevel').textContent = data.user.level;
                    
                    // Update UI
                    const currentXPEl = document.getElementById('currentXP');
                    const currentLevelEl = document.getElementById('currentLevel');
                    
                    if (currentXPEl) currentXPEl.textContent = data.user.xp;
                    if (currentLevelEl) currentLevelEl.textContent = data.user.level;
                    

                    // Update XP Progress Bar
                    updateXPProgressBar(data.user.xp, data.user.level);
                    
                    // Check level up
                    if (data.levelUp) {
                        showXpNotification(0, `Selamat! Anda naik ke level ${data.user.level}`);
                    }
                }
            } catch (error) {
                console.error('Error adding XP:', error);
            }
        }

        // ===== UPDATE XP PROGRESS BAR =====
        function updateXPProgressBar(currentXp, level) {
            const NextLevel = level + 1;
            const maxXpForLevel = level * 1000;
            const xpForCurrentLevel = (level - 1) * 1000;
            const xpInCurrentLevel = currentXp - xpForCurrentLevel;
            const xpPercentage = (xpInCurrentLevel / 1000) * 100;
            
            const xpProgress = document.getElementById('xpProgress');
            if (xpProgress) {
                xpProgress.style.width = `${xpPercentage}%`;
            }
            
            const xpToNextLevel = maxXpForLevel - currentXp;
            const xpToNextLevelEl = document.getElementById('xpToNextLevel');
            if (xpToNextLevelEl) {
                xpToNextLevelEl.textContent = `${xpToNextLevel} XP menuju Level ${level + 1}`;
            }
        }

        // ===== ADD ACTIVITY =====
        function addActivity(text, icon, color) {
            const activityTab = document.getElementById('activity');
            if (!activityTab) return;
            
            const activityItem = document.createElement('div');
            activityItem.className = 'activity-item';
            activityItem.innerHTML = `
                <i class="${icon} ${color} me-2"></i>
                <span>${text}</span>
                <small class="text-muted d-block">Baru saja</small>
            `;

            activityTab.insertBefore(activityItem, activityTab.firstChild);
        }

        // ===== FIX 3: DAILY LOGIN WITH AUTO XP =====
        document.getElementById('dailyLoginBtn')?.addEventListener('click', async function() {
            const btn = this;
            const originalHTML = btn.innerHTML;
            
            // Loading state
            btn.disabled = true;
            btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Memproses...';
            
            try {
                const response = await fetch('/profile/daily-login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json'
                    }
                });

                const data = await response.json();
                
                if (data.success) {
                    // ⭐ ADD XP OTOMATIS
                    await addXP(xpValues.dailyLogin, "Login harian");
                    
                    // Add activity
                    addActivity("Anda mengklaim XP login harian", "fas fa-calendar-day", "text-primary");
                    
                    // Update login streak
                    const loginStreakEl = document.getElementById('loginStreak');
                    if (loginStreakEl) {
                        loginStreakEl.textContent = data.loginStreak;
                    }
                    
                    // Success state
                    btn.classList.remove('daily-login-btn');
                    btn.classList.add('btn-secondary');
                    btn.innerHTML = '<i class="fas fa-check me-2"></i> XP Login Harian Sudah Diklaim';
                    
                    // Show success alert
                    const alert = document.createElement('div');
                    alert.className = 'alert alert-success alert-dismissible fade show mt-3';
                    alert.innerHTML = `
                        <strong>Berhasil!</strong> Anda mendapatkan ${xpValues.dailyLogin} XP dari login harian!
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    `;
                    btn.parentElement.insertBefore(alert, btn.nextSibling);
                    
                    setTimeout(() => alert.remove(), 5000);
                } else {
                    alert(data.message || 'XP login harian sudah diklaim hari ini');
                    btn.disabled = false;
                    btn.innerHTML = originalHTML;
                }
            } catch (error) {
                console.error('Error claiming daily login:', error);
                alert('Terjadi kesalahan saat mengklaim XP');
                btn.disabled = false;
                btn.innerHTML = originalHTML;
            }
        });

        // ===== POST INTERACTIONS =====
        document.addEventListener('click', function(e) {
            // LIKE POST
            if (e.target.closest('.like-btn')) {
                const likeBtn = e.target.closest('.like-btn');
                const postId = likeBtn.getAttribute('data-post-id');
                likePost(postId, likeBtn);
            }

            // COMMENT POST
            if (e.target.closest('.komentar-btn')) {
                const komentarBtn = e.target.closest('.komentar-btn');
                const postId = komentarBtn.getAttribute('data-post-id');
                komentarPost(postId, komentarBtn);
            }
        });

        // ===== LIKE POST FUNCTION =====
        async function likePost(postId, likeBtn) {
            try {
                const response = await fetch(`/posts/${postId}/like`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json'
                    }
                });

                const data = await response.json();
                
                if (data.success) {
                    const icon = likeBtn.querySelector('i');
                    const likeCount = likeBtn.querySelector('.like-count');
                    
                    if (data.liked) {
                        icon.classList.remove('far');
                        icon.classList.add('fas');
                        if (likeCount) {
                            likeCount.textContent = parseInt(likeCount.textContent || 0) + 1;
                        }
                        await addXP(xpValues.likePost, "Menyukai postingan");
                        addActivity("Anda menyukai sebuah postingan", "fas fa-heart", "text-danger");
                        
                        // Update stats
                        const likeCountStat = document.getElementById('likeCount');
                        if (likeCountStat) {
                            likeCountStat.textContent = parseInt(likeCountStat.textContent || 0) + 1;
                        }
                    } else {
                        icon.classList.remove('fas');
                        icon.classList.add('far');
                        if (likeCount) {
                            likeCount.textContent = Math.max(0, parseInt(likeCount.textContent || 0) - 1);
                        }
                        
                        // Update stats
                        const likeCountStat = document.getElementById('likeCount');
                        if (likeCountStat) {
                            likeCountStat.textContent = Math.max(0, parseInt(likeCountStat.textContent || 0) - 1);
                        }
                    }
                }
            } catch (error) {
                console.error('Error liking post:', error);
            }
        }

        // ===== COMMENT POST FUNCTION =====
        async function komentarPost(postId, komentarBtn) {
            const komentar = prompt("Tulis komentar Anda:");
            if (!komentar || !komentar.trim()) return;
            
            try {
                const response = await fetch(`/posts/${postId}/komentar`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({ 
                        content: komentar.trim()
                    })
                });

                const data = await response.json();
                
                if (data.success) {
                    const komentarCount = komentarBtn.querySelector('.komentar-count');
                    if (komentarCount) {
                        komentarCount.textContent = parseInt(komentarCount.textContent || 0) + 1;
                    }
                    
                    await addXP(xpValues.komentarPost, "Mengomentari postingan");
                    addActivity("Anda mengomentari sebuah postingan", "fas fa-comment", "text-info");
                    
                    // Update stats
                    const komentarCountStat = document.getElementById('komentarCount');
                    if (komentarCountStat) {
                        komentarCountStat.textContent = parseInt(komentarCountStat.textContent || 0) + 1;
                    }
                    
                    alert('Komentar berhasil ditambahkan!');
                }
            } catch (error) {
                console.error('Error commenting:', error);
                alert('Terjadi kesalahan saat menambahkan komentar');
            }
        }

        // ===== LOGOUT =====
        document.getElementById('logoutBtn')?.addEventListener('click', function() {
            if (confirm('Apakah Anda yakin ingin logout?')) {
                window.location.href = '{{ route("login") }}';
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            console.log('Profile page loaded');
            
            // Update XP progress bar on load
            const currentXp = parseInt(document.getElementById('currentXP')?.textContent || 0);
            const currentLevel = parseInt(document.getElementById('currentLevel')?.textContent || 1);
            updateXPProgressBar(currentXp, currentLevel);
        });

        const dailyLoginBtn = document.getElementById('dailyLoginBtn');
        if (dailyLoginBtn) {
            dailyLoginBtn.addEventListener('click', async function() {
                if (!csrfToken) {
                    alert('CSRF token tidak ditemukan. Silakan refresh halaman.');
                    return;
                }
                
                const btn = this;
                const originalHTML = btn.innerHTML;
                
                // Loading state
                btn.disabled = true;
                btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Memproses...';
                
                try {
                    const response = await fetch('/profile/daily-login', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken,
                            'Accept': 'application/json'
                        }
                    });

                    const data = await response.json();
                    
                    if (data.success) {
                        // Update XP dan Level langsung dari response
                        const currentXPEl = document.getElementById('currentXP');
                        const currentLevelEl = document.getElementById('currentLevel');
                        const loginStreakEl = document.getElementById('loginStreak');
                        
                        if (currentXPEl) currentXPEl.textContent = data.user.xp;
                        if (currentLevelEl) currentLevelEl.textContent = data.user.level;
                        if (loginStreakEl) loginStreakEl.textContent = data.loginStreak;
                        
                        // Update progress bar
                        updateXPProgressBar(data.user.xp, data.user.level);
                        
                        // Show notification
                        showXpNotification(50, "Login harian");
                        
                        // Success state
                        btn.classList.remove('daily-login-btn');
                        btn.classList.add('btn-secondary');
                        btn.innerHTML = '<i class="fas fa-check me-2"></i> XP Login Harian Sudah Diklaim';
                        
                        // Show level up if applicable
                        if (data.levelUp) {
                            setTimeout(() => {
                                showXpNotification(0, `Selamat! Anda naik ke level ${data.user.level}`);
                            }, 1000);
                        }
                    } else {
                        alert(data.message || 'XP login harian sudah diklaim hari ini');
                        btn.disabled = false;
                        btn.innerHTML = originalHTML;
                    }
                } catch (error) {
                    console.error('Error claiming daily login:', error);
                    alert('Terjadi kesalahan saat mengklaim XP. Silakan coba lagi.');
                    btn.disabled = false;
                    btn.innerHTML = originalHTML;
                }
            });
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('=== BANNER UPLOAD INIT ===');
            
            const bannerUpload = document.getElementById('bannerUpload');
            const saveBannerBtn = document.getElementById('saveBanner');
            const bannerPreview = document.getElementById('bannerPreview');
            const bannerModalEl = document.getElementById('bannerModal');
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
            
            // Check elements
            console.log('Elements check:');
            console.log('  Upload Input:', bannerUpload ? '✅' : '❌');
            console.log('  Save Button:', saveBannerBtn ? '✅' : '❌');
            console.log('  Preview:', bannerPreview ? '✅' : '❌');
            console.log('  Modal:', bannerModalEl ? '✅' : '❌');
            console.log('  CSRF:', csrfToken ? '✅' : '❌');
            
            if (!bannerUpload || !saveBannerBtn || !bannerPreview || !bannerModalEl) {
                console.error('❌ Elements incomplete!');
                return;
            }
            
            // Fix modal on show
            bannerModalEl.addEventListener('show.bs.modal', function() {
                console.log('🔓 Modal opening...');
                // Remove any stuck aria-hidden
                this.removeAttribute('aria-hidden');
                this.setAttribute('aria-modal', 'true');
            });
            
            // Fix modal on shown
            bannerModalEl.addEventListener('shown.bs.modal', function() {
                console.log('✅ Modal opened');
                // Ensure buttons are clickable
                saveBannerBtn.disabled = false;
                saveBannerBtn.style.pointerEvents = 'auto';
            });
            
            // Preview on file select
            bannerUpload.addEventListener('change', function(e) {
                const file = e.target.files[0];
                console.log('📁 File selected:', file?.name || 'None');
                
                if (!file) return;
                
                // Validate
                const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
                if (!validTypes.includes(file.type)) {
                    alert('❌ Format file tidak didukung!');
                    this.value = '';
                    return;
                }
                
                if (file.size > 2 * 1024 * 1024) {
                    alert('❌ Ukuran file terlalu besar! Max 2MB.');
                    this.value = '';
                    return;
                }
                
                console.log('✅ Valid:', (file.size/1024).toFixed(2), 'KB');
                
                // Preview
                const reader = new FileReader();
                reader.onload = (e) => {
                    bannerPreview.src = e.target.result;
                    console.log('✅ Preview updated');
                };
                reader.readAsDataURL(file);
            });
            
            // Save with pointer events fix
            saveBannerBtn.addEventListener('click', async function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                console.log('💾 SAVE CLICKED');
                
                const file = bannerUpload.files[0];
                
                if (!file) {
                    alert('⚠️ Pilih gambar dulu');
                    return;
                }
                
                const btn = this;
                const originalHTML = btn.innerHTML;
                btn.disabled = true;
                btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Uploading...';
                
                const formData = new FormData();
                formData.append('banner', file);
                
                console.log('📤 Uploading:', file.name);
                
                try {
                    const response = await fetch('/profile/update-banner', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken,
                            'Accept': 'application/json'
                        },
                        body: formData
                    });
                    
                    console.log('📥 Status:', response.status);
                    
                    const data = await response.json();
                    console.log('📥 Data:', data);
                    
                    if (data.success) {
                        console.log('✅ SUCCESS!');
                        
                        // Update UI
                        const profileBanner = document.getElementById('profileBanner');
                        if (profileBanner) {
                            profileBanner.style.backgroundImage = `url('${data.banner}')`;
                        }
                        
                        // Force close modal
                        const modal = bootstrap.Modal.getInstance(bannerModalEl);
                        if (modal) {
                            modal.hide();
                        }
                        
                        // Manual cleanup
                        bannerModalEl.classList.remove('show');
                        bannerModalEl.style.display = 'none';
                        bannerModalEl.setAttribute('aria-hidden', 'true');
                        bannerModalEl.removeAttribute('aria-modal');
                        
                        const backdrop = document.querySelector('.modal-backdrop');
                        if (backdrop) backdrop.remove();
                        
                        document.body.classList.remove('modal-open');
                        document.body.style.overflow = '';
                        document.body.style.paddingRight = '';
                        
                        alert('✅ Banner berhasil diubah!');
                        
                        setTimeout(() => location.reload(), 500);
                    } else {
                        console.error('❌ Failed:', data.message);
                        alert(data.message || 'Gagal upload');
                    }
                } catch (error) {
                    console.error('❌ Error:', error);
                    alert('Error: ' + error.message);
                } finally {
                    btn.disabled = false;
                    btn.innerHTML = originalHTML;
                }
            });
            
            // Manual close button
            const closeBtn = document.getElementById('closeBannerModal');
            const cancelBtn = document.getElementById('cancelBannerBtn');
            
            [closeBtn, cancelBtn].forEach(btn => {
                if (btn) {
                    btn.addEventListener('click', function() {
                        console.log('🚪 Closing modal manually');
                        
                        const modal = bootstrap.Modal.getInstance(bannerModalEl);
                        if (modal) modal.hide();
                        
                        // Force cleanup
                        setTimeout(() => {
                            bannerModalEl.classList.remove('show');
                            bannerModalEl.style.display = 'none';
                            bannerModalEl.setAttribute('aria-hidden', 'true');
                            
                            const backdrop = document.querySelector('.modal-backdrop');
                            if (backdrop) backdrop.remove();
                            
                            document.body.classList.remove('modal-open');
                            document.body.style.overflow = '';
                        }, 100);
                    });
                }
            });
            
            console.log('=== BANNER READY ===');
        });
    </script>

    <script>
        // ===== AVATAR UPLOAD SYSTEM =====
        document.addEventListener('DOMContentLoaded', function() {
            console.log('=== AVATAR UPLOAD INIT ===');
            
            const avatarUpload = document.getElementById('avatarUpload');
            const saveAvatarBtn = document.getElementById('saveAvatar');
            const avatarPreview = document.getElementById('avatarPreview');
            const avatarModalEl = document.getElementById('avatarModal');
            const avatarLoading = document.getElementById('avatarLoading');
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
            
            // Check elements
            console.log('Elements check:');
            console.log('  Upload Input:', avatarUpload ? '✅' : '❌');
            console.log('  Save Button:', saveAvatarBtn ? '✅' : '❌');
            console.log('  Preview:', avatarPreview ? '✅' : '❌');
            console.log('  Modal:', avatarModalEl ? '✅' : '❌');
            console.log('  CSRF:', csrfToken ? '✅' : '❌');
            
            if (!avatarUpload || !saveAvatarBtn || !avatarPreview || !avatarModalEl) {
                console.error('❌ Avatar elements incomplete!');
                return;
            }
            
            // Fix modal on show
            avatarModalEl.addEventListener('show.bs.modal', function() {
                console.log('🔓 Avatar modal opening...');
                this.removeAttribute('aria-hidden');
                this.setAttribute('aria-modal', 'true');
            });
            
            avatarModalEl.addEventListener('shown.bs.modal', function() {
                console.log('✅ Avatar modal opened');
                saveAvatarBtn.disabled = false;
                saveAvatarBtn.style.pointerEvents = 'auto';
            });
            
            // Preview on file select
            avatarUpload.addEventListener('change', function(e) {
                const file = e.target.files[0];
                console.log('📁 Avatar file selected:', file?.name || 'None');
                
                if (!file) return;
                
                // Validate file type
                const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
                if (!validTypes.includes(file.type)) {
                    alert('❌ Format file tidak didukung! Gunakan JPG, PNG, atau GIF.');
                    this.value = '';
                    return;
                }
                
                // Validate file size (2MB)
                if (file.size > 2 * 1024 * 1024) {
                    alert('❌ Ukuran file terlalu besar! Maksimal 2MB.');
                    this.value = '';
                    return;
                }
                
                console.log('✅ Valid:', (file.size/1024).toFixed(2), 'KB');
                
                // Show preview
                const reader = new FileReader();
                reader.onload = (e) => {
                    avatarPreview.src = e.target.result;
                    console.log('✅ Avatar preview updated');
                    
                    // Add animation
                    avatarPreview.style.animation = 'fadeIn 0.3s ease';
                };
                reader.onerror = () => {
                    console.error('❌ Failed to read file');
                    alert('Gagal membaca file. Silakan coba lagi.');
                };
                reader.readAsDataURL(file);
            });
            
            // Save avatar
            saveAvatarBtn.addEventListener('click', async function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                console.log('💾 SAVE AVATAR CLICKED');
                
                const file = avatarUpload.files[0];
                
                if (!file) {
                    alert('⚠️ Pilih foto profil terlebih dahulu');
                    return;
                }
                
                if (!csrfToken) {
                    alert('❌ CSRF Token tidak ditemukan. Refresh halaman.');
                    return;
                }
                
                const btn = this;
                const originalHTML = btn.innerHTML;
                btn.disabled = true;
                btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Mengupload...';
                
                // Show loading
                if (avatarLoading) {
                    avatarLoading.classList.remove('d-none');
                }
                
                const formData = new FormData();
                formData.append('avatar', file);
                
                console.log('📤 Uploading avatar:', file.name);
                
                try {
                    const response = await fetch('/profile/update-avatar', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken,
                            'Accept': 'application/json'
                        },
                        body: formData
                    });
                    
                    console.log('📥 Status:', response.status);
                    
                    const data = await response.json();
                    console.log('📥 Data:', data);
                    
                    if (data.success) {
                        console.log('✅ AVATAR UPLOADED!');
                        console.log('   New URL:', data.avatar);
                        
                        // Update all avatar instances
                        const profileImg = document.getElementById('profileImg');
                        if (profileImg) {
                            profileImg.src = data.avatar;
                            console.log('✅ Main avatar updated');
                        }
                        
                        // Update avatar in posts if exists
                        const postAvatars = document.querySelectorAll('.post-avatar');
                        postAvatars.forEach(avatar => {
                            avatar.src = data.avatar;
                        });
                        
                        // Hide loading
                        if (avatarLoading) {
                            avatarLoading.classList.add('d-none');
                        }
                        
                        // Close modal
                        const modal = bootstrap.Modal.getInstance(avatarModalEl);
                        if (modal) modal.hide();
                        
                        // Manual cleanup
                        avatarModalEl.classList.remove('show');
                        avatarModalEl.style.display = 'none';
                        avatarModalEl.setAttribute('aria-hidden', 'true');
                        avatarModalEl.removeAttribute('aria-modal');
                        
                        const backdrop = document.querySelector('.modal-backdrop');
                        if (backdrop) backdrop.remove();
                        
                        document.body.classList.remove('modal-open');
                        document.body.style.overflow = '';
                        document.body.style.paddingRight = '';
                        
                        // Success notification
                        alert('✅ Foto profil berhasil diubah!');
                        
                        // Add XP if function exists
                        if (typeof addXP === 'function') {
                            await addXP(10, "Mengubah foto profil");
                        }
                        
                        // Add activity if function exists
                        if (typeof addActivity === 'function') {
                            addActivity("Anda mengubah foto profil", "fas fa-camera", "text-info");
                        }
                        
                        // Reload page
                        setTimeout(() => location.reload(), 500);
                        
                    } else {
                        console.error('❌ Upload failed:', data.message);
                        alert(data.message || 'Gagal mengubah foto profil');
                        
                        // Hide loading
                        if (avatarLoading) {
                            avatarLoading.classList.add('d-none');
                        }
                    }
                } catch (error) {
                    console.error('❌ Error:', error);
                    alert('Terjadi kesalahan: ' + error.message);
                    
                    // Hide loading
                    if (avatarLoading) {
                        avatarLoading.classList.add('d-none');
                    }
                } finally {
                    btn.disabled = false;
                    btn.innerHTML = originalHTML;
                }
            });
            
            // Manual close buttons
            const closeBtn = document.getElementById('closeAvatarModal');
            const cancelBtn = document.getElementById('cancelAvatarBtn');
            
            [closeBtn, cancelBtn].forEach(btn => {
                if (btn) {
                    btn.addEventListener('click', function() {
                        console.log('🚪 Closing avatar modal manually');
                        
                        const modal = bootstrap.Modal.getInstance(avatarModalEl);
                        if (modal) modal.hide();
                        
                        // Force cleanup
                        setTimeout(() => {
                            avatarModalEl.classList.remove('show');
                            avatarModalEl.style.display = 'none';
                            avatarModalEl.setAttribute('aria-hidden', 'true');
                            
                            const backdrop = document.querySelector('.modal-backdrop');
                            if (backdrop) backdrop.remove();
                            
                            document.body.classList.remove('modal-open');
                            document.body.style.overflow = '';
                        }, 100);
                    });
                }
            });
            
            console.log('=== AVATAR UPLOAD READY ===');
        });

        // Add CSS animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeIn {
                from { opacity: 0; transform: scale(0.95); }
                to { opacity: 1; transform: scale(1); }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>