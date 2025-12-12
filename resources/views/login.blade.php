<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In MemoraX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

    
    <style>
        :root {
            --primary: #E18E2E;
            --secondary: #FFE97A;
            --accent: #EA4828;
            --warning: #E18E2E;
            --light: #FFE97A;
        }
        
        body {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
        }
        
        .login-container {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 100%;
            max-width: 420px;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }
        
        .login-container:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
        }
        
        .login-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 30px 25px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .login-header::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
        }
        
        .login-header h2 {
            margin: 0;
            font-weight: 700;
            font-size: 1.8rem;
            position: relative;
        }
        
        .login-header p {
            margin: 10px 0 0;
            opacity: 0.9;
            position: relative;
        }
        
        .login-body {
            padding: 30px;
        }
        
        .form-control {
            border-radius: 12px;
            padding: 14px 18px;
            border: 2px solid #e1e5ee;
            transition: all 0.3s;
            font-size: 1rem;
        }
        
        .form-control:focus {
            border-color: var(--secondary);
            box-shadow: 0 0 0 0.25rem rgba(67, 181, 173, 0.25);
        }
        
        .btn-login {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border: none;
            border-radius: 12px;
            padding: 14px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s;
            color: white;
        }
        
        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 15px rgba(39, 157, 159, 0.4);
        }
        
        .btn-login:active {
            transform: translateY(-1px);
        }
        
        .form-check-input:checked {
            background-color: var(--primary);
            border-color: var(--primary);
        }
        
        .form-check-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.25rem rgba(39, 157, 159, 0.25);
        }
        
        .dropdown-divider {
            margin: 25px 0;
            border-top: 1px solid #e1e5ee;
        }
        
        .dropdown-item {
            border-radius: 8px;
            padding: 10px 15px;
            transition: all 0.2s;
            color: var(--primary);
            font-weight: 500;
            text-align: center;
        }
        
        .dropdown-item:hover {
            background-color: rgba(67, 181, 173, 0.1);
            color: var(--primary);
        }
        
        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #6c757d;
            cursor: pointer;
            z-index: 10;
        }
        
        .password-container {
            position: relative;
        }
        
        .alert {
            border-radius: 12px;
            padding: 12px 16px;
            margin-bottom: 20px;
            border: none;
        }
        
        .alert-success {
            background-color: rgba(67, 181, 173, 0.15);
            color: var(--primary);
        }
        
        .alert-danger {
            background-color: rgba(234, 72, 40, 0.15);
            color: var(--accent);
        }
        
        .alert-info {
            background-color: rgba(255, 233, 122, 0.3);
            color: #856d1a;
        }
        
        .form-label {
            font-weight: 600;
            margin-bottom: 10px;
            color: #495057;
        }
        
        .login-footer {
            text-align: center;
            padding: 20px;
            font-size: 0.9rem;
            color: #6c757d;
            background-color: #f8f9fa;
            border-top: 1px solid #e9ecef;
        }
        
        .floating-icon {
            position: absolute;
            font-size: 1.5rem;
            opacity: 0.7;
        }
        
        .floating-icon:nth-child(1) {
            top: 20px;
            left: 20px;
            color: var(--accent);
        }
        
        .floating-icon:nth-child(2) {
            top: 20px;
            right: 20px;
            color: var(--warning);
        }
        
        .floating-icon:nth-child(3) {
            bottom: 20px;
            left: 20px;
            color: var(--light);
        }
        
        .floating-icon:nth-child(4) {
            bottom: 20px;
            right: 20px;
            color: var(--accent);
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        .shake {
            animation: shake 0.5s;
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }
        
        .modal-content {
            border-radius: 15px;
            border: none;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        
        .modal-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            border-radius: 15px 15px 0 0;
            border-bottom: none;
            padding: 20px 25px;
        }
        
        .modal-title {
            font-weight: 600;
        }
        
        .btn-close-white {
            filter: invert(1);
        }
        
        .reset-step {
            display: none;
        }
        
        .reset-step.active {
            display: block;
        }
        
        .btn-reset {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-weight: 600;
            color: white;
            transition: all 0.3s;
        }
        
        .btn-reset:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(39, 157, 159, 0.3);
        }
        
        .verification-code {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin: 20px 0;
        }
        
        .verification-input {
            width: 50px;
            height: 60px;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            border: 2px solid #e1e5ee;
            border-radius: 10px;
            transition: all 0.3s;
        }
        
        .verification-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(39, 157, 159, 0.25);
            outline: none;
        }
        
        .countdown {
            font-weight: 600;
            color: var(--primary);
        }
        
        .redirect-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }
        
        .redirect-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        
        .redirect-content {
            text-align: center;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 90%;
        }
        
        .redirect-icon {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 15px;
        }
        
        .redirect-text {
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: #495057;
        }
        
        .redirect-progress {
            height: 6px;
            background-color: #e9ecef;
            border-radius: 3px;
            overflow: hidden;
            margin-bottom: 10px;
        }
        
        .redirect-progress-bar {
            height: 100%;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            width: 0%;
            transition: width 3s linear;
        }
        
        .redirect-overlay.active .redirect-progress-bar {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="redirect-overlay" id="redirectOverlay">
        <div class="redirect-content">
            <i class="bi bi-check-circle-fill redirect-icon"></i>
            <h3>Login Berhasil!</h3>
            <p class="redirect-text">Mengalihkan ke halaman home...</p>
            <div class="redirect-progress">
                <div class="redirect-progress-bar"></div>
            </div>
            <p>Harap tunggu sebentar</p>
        </div>
    </div>

    <div class="login-container">
        <div class="login-header">
            <i class="bi bi-star-fill floating-icon pulse"></i>
            <i class="bi bi-heart-fill floating-icon"></i>
            <i class="bi bi-circle-fill floating-icon"></i>
            <i class="bi bi-square-fill floating-icon"></i>
            
            <h2>Selamat Datang</h2>
            <p>Masuk ke akun Anda</p>
        </div>
        
        <div class="login-body">
            <div id="alertContainer"></div>
            
            {{-- Form login dengan CSRF token --}}
            <form id="loginForm" action="{{ route('login.submit') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control" id="email" name="email" 
                           placeholder="nama@contoh.com" value="{{ old('email') }}">
                    <div class="invalid-feedback" id="emailError">
                        Harap masukkan alamat email yang valid.
                    </div>
                    @error('email')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <div class="password-container">
                        <input type="password" class="form-control" id="password" name="password" 
                               placeholder="Kata Sandi">
                        <button type="button" class="password-toggle" id="passwordToggle">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                    <div class="invalid-feedback" id="passwordError">
                        Kata sandi harus minimal 6 karakter.
                    </div>
                    @error('password')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-4 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">
                            Ingat saya
                        </label>
                    </div>
                    <a href="#" class="text-decoration-none" style="color: var(--accent); font-weight: 500;" 
                       id="forgotPasswordLink">Lupa kata sandi?</a>
                </div>
                
                <button type="submit" class="btn btn-primary w-100 btn-login mb-4" id="loginButton">
                    <span id="buttonText">Masuk</span>
                    <div class="spinner-border spinner-border-sm d-none" role="status" id="buttonSpinner">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </button>
            </form>
            
            <div class="dropdown-divider"></div>
            
            <div class="text-center">
                <span style="color: #6c757d;">Belum punya akun? </span>
                {{-- Menggunakan route() untuk link pendaftaran --}}
                <a href="{{ route('regis') }}" class="text-decoration-none fw-bold" 
                   style="color: var(--primary);" id="signupLink">Daftar sekarang</a>
            </div>
        </div>
        
        <div class="login-footer">
            &copy; {{ date('Y') }} MemoraX. All rights reserved.
        </div>
    </div>

    {{-- Modal reset password --}}
    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="forgotPasswordModalLabel">Reset Kata Sandi</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="resetAlertContainer"></div>
                    
                    <div class="reset-step active" id="resetStep1">
                        <p>Masukkan alamat email yang terkait dengan akun Anda. Kami akan mengirimkan kode verifikasi ke email tersebut.</p>
                        <div class="mb-3">
                            <label for="resetEmail" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="resetEmail" placeholder="nama@contoh.com">
                            <div class="invalid-feedback" id="resetEmailError">
                                Harap masukkan alamat email yang valid.
                            </div>
                        </div>
                        <button type="button" class="btn btn-reset w-100" id="sendCodeButton">
                            <span id="sendCodeText">Kirim Kode Verifikasi</span>
                            <div class="spinner-border spinner-border-sm d-none" role="status" id="sendCodeSpinner">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </button>
                    </div>
                    
                    <div class="reset-step" id="resetStep2">
                        <p>Kami telah mengirimkan kode verifikasi 6-digit ke <strong id="emailSentTo"></strong>. Masukkan kode tersebut di bawah ini.</p>
                        <div class="verification-code">
                            <input type="text" class="verification-input" maxlength="1" id="code1">
                            <input type="text" class="verification-input" maxlength="1" id="code2">
                            <input type="text" class="verification-input" maxlength="1" id="code3">
                            <input type="text" class="verification-input" maxlength="1" id="code4">
                            <input type="text" class="verification-input" maxlength="1" id="code5">
                            <input type="text" class="verification-input" maxlength="1" id="code6">
                        </div>
                        <div class="text-center mb-3">
                            <span id="countdownText">Kode kadaluarsa dalam: <span class="countdown" id="countdown">05:00</span></span>
                        </div>
                        <button type="button" class="btn btn-reset w-100 mb-2" id="verifyCodeButton">
                            <span id="verifyCodeText">Verifikasi Kode</span>
                            <div class="spinner-border spinner-border-sm d-none" role="status" id="verifyCodeSpinner">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </button>
                        <button type="button" class="btn btn-outline-secondary w-100" id="resendCodeButton">
                            Kirim Ulang Kode
                        </button>
                    </div>
                    
                    <div class="reset-step" id="resetStep3">
                        <p>Buat kata sandi baru untuk akun Anda.</p>
                        <div class="mb-3">
                            <label for="newPassword" class="form-label">Kata Sandi Baru</label>
                            <div class="password-container">
                                <input type="password" class="form-control" id="newPassword" placeholder="Kata sandi baru">
                                <button type="button" class="password-toggle" id="newPasswordToggle">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                            <div class="invalid-feedback" id="newPasswordError">
                                Kata sandi harus minimal 8 karakter.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="confirmNewPassword" class="form-label">Konfirmasi Kata Sandi Baru</label>
                            <div class="password-container">
                                <input type="password" class="form-control" id="confirmNewPassword" placeholder="Konfirmasi kata sandi">
                                <button type="button" class="password-toggle" id="confirmNewPasswordToggle">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                            <div class="invalid-feedback" id="confirmNewPasswordError">
                                Konfirmasi kata sandi tidak cocok.
                            </div>
                        </div>
                        <button type="button" class="btn btn-reset w-100" id="resetPasswordButton">
                            <span id="resetPasswordText">Reset Kata Sandi</span>
                            <div class="spinner-border spinner-border-sm d-none" role="status" id="resetPasswordSpinner">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </button>
                    </div>
                    
                    <div class="reset-step" id="resetStep4">
                        <div class="text-center py-4">
                            <i class="bi bi-check-circle-fill" style="font-size: 3rem; color: var(--primary);"></i>
                            <h5 class="mt-3" style="color: var(--primary);">Kata Sandi Berhasil Direset!</h5>
                            <p>Kata sandi Anda telah berhasil diubah. Silakan masuk dengan kata sandi baru Anda.</p>
                            <button type="button" class="btn btn-reset w-100" data-bs-dismiss="modal">
                                Tutup
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Menggunakan asset() untuk file lokal --}}
    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const loginForm = document.getElementById('loginForm');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const passwordToggle = document.getElementById('passwordToggle');
            const loginButton = document.getElementById('loginButton');
            const buttonText = document.getElementById('buttonText');
            const buttonSpinner = document.getElementById('buttonSpinner');
            const alertContainer = document.getElementById('alertContainer');
            const signupLink = document.getElementById('signupLink');
            const forgotPasswordLink = document.getElementById('forgotPasswordLink');
            const redirectOverlay = document.getElementById('redirectOverlay');
            
            const forgotPasswordModal = new bootstrap.Modal(document.getElementById('forgotPasswordModal'));
            const resetSteps = document.querySelectorAll('.reset-step');
            const resetEmailInput = document.getElementById('resetEmail');
            const sendCodeButton = document.getElementById('sendCodeButton');
            const sendCodeText = document.getElementById('sendCodeText');
            const sendCodeSpinner = document.getElementById('sendCodeSpinner');
            const emailSentTo = document.getElementById('emailSentTo');
            const verificationInputs = document.querySelectorAll('.verification-input');
            const countdownElement = document.getElementById('countdown');
            const verifyCodeButton = document.getElementById('verifyCodeButton');
            const verifyCodeText = document.getElementById('verifyCodeText');
            const verifyCodeSpinner = document.getElementById('verifyCodeSpinner');
            const resendCodeButton = document.getElementById('resendCodeButton');
            const newPasswordInput = document.getElementById('newPassword');
            const confirmNewPasswordInput = document.getElementById('confirmNewPassword');
            const newPasswordToggle = document.getElementById('newPasswordToggle');
            const confirmNewPasswordToggle = document.getElementById('confirmNewPasswordToggle');
            const resetPasswordButton = document.getElementById('resetPasswordButton');
            const resetPasswordText = document.getElementById('resetPasswordText');
            const resetPasswordSpinner = document.getElementById('resetPasswordSpinner');
            const resetAlertContainer = document.getElementById('resetAlertContainer');
            
            let currentResetStep = 0;
            let countdownTimer;
            let countdownTime = 300;
            let generatedCode = '';

            passwordToggle.addEventListener('click', function() {
                togglePasswordVisibility(passwordInput, this);
            });

            loginForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                resetValidation();
                
                const email = emailInput.value.trim();
                if (!isValidEmail(email)) {
                    showError(emailInput, 'emailError', 'Harap masukkan alamat email yang valid.');
                    return;
                }
                
                const password = passwordInput.value.trim();
                if (password.length < 6) {
                    showError(passwordInput, 'passwordError', 'Kata sandi harus minimal 6 karakter.');
                    return;
                }

                submitLoginForm(email, password);
            });

            forgotPasswordLink.addEventListener('click', function(e) {
                e.preventDefault();
                forgotPasswordModal.show();
            });

            sendCodeButton.addEventListener('click', function() {
                const email = resetEmailInput.value.trim();
                
                if (!isValidEmail(email)) {
                    showResetError(resetEmailInput, 'resetEmailError', 'Harap masukkan alamat email yang valid.');
                    return;
                }
                
                simulateSendCode(email);
            });

            verifyCodeButton.addEventListener('click', function() {
                const enteredCode = getVerificationCode();
                
                if (enteredCode.length !== 6) {
                    showResetAlert('Harap masukkan kode verifikasi lengkap.', 'danger');
                    return;
                }
                
                if (enteredCode !== generatedCode) {
                    showResetAlert('Kode verifikasi tidak valid. Silakan coba lagi.', 'danger');
                    return;
                }
                
                goToResetStep(2);
                clearInterval(countdownTimer);
            });

            resendCodeButton.addEventListener('click', function() {
                const email = resetEmailInput.value.trim();
                simulateSendCode(email);
            });

            resetPasswordButton.addEventListener('click', function() {
                const newPassword = newPasswordInput.value;
                const confirmNewPassword = confirmNewPasswordInput.value;
                
                if (newPassword.length < 8) {
                    showResetError(newPasswordInput, 'newPasswordError', 'Kata sandi harus minimal 8 karakter.');
                    return;
                }
                
                if (newPassword !== confirmNewPassword) {
                    showResetError(confirmNewPasswordInput, 'confirmNewPasswordError', 'Konfirmasi kata sandi tidak cocok.');
                    return;
                }
                
                simulateResetPassword();
            });

            newPasswordToggle.addEventListener('click', function() {
                togglePasswordVisibility(newPasswordInput, this);
            });
            
            confirmNewPasswordToggle.addEventListener('click', function() {
                togglePasswordVisibility(confirmNewPasswordInput, this);
            });

            verificationInputs.forEach((input, index) => {
                input.addEventListener('input', function() {
                    if (this.value.length === 1 && index < verificationInputs.length - 1) {
                        verificationInputs[index + 1].focus();
                    }
                    
                    if (index === verificationInputs.length - 1 && this.value.length === 1) {
                        const fullCode = getVerificationCode();
                        if (fullCode.length === 6) {
                            setTimeout(() => {
                                verifyCodeButton.click();
                            }, 500);
                        }
                    }
                });
                
                input.addEventListener('keydown', function(e) {
                    if (e.key === 'Backspace' && this.value.length === 0 && index > 0) {
                        verificationInputs[index - 1].focus();
                    }
                });
            });

            document.getElementById('forgotPasswordModal').addEventListener('hidden.bs.modal', function() {
                resetResetPasswordForm();
            });

            function togglePasswordVisibility(input, toggleBtn) {
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                
                const icon = toggleBtn.querySelector('i');
                if (type === 'password') {
                    icon.classList.remove('bi-eye-slash');
                    icon.classList.add('bi-eye');
                } else {
                    icon.classList.remove('bi-eye');
                    icon.classList.add('bi-eye-slash');
                }
            }

            function isValidEmail(email) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }

            function resetValidation() {
                emailInput.classList.remove('is-invalid');
                passwordInput.classList.remove('is-invalid');
                clearAlert();
            }

            function showError(input, errorId, message) {
                input.classList.add('is-invalid');
                document.getElementById(errorId).textContent = message;
            }

            function clearAlert() {
                alertContainer.innerHTML = '';
            }

            function showAlert(message, type) {
                const alert = document.createElement('div');
                alert.className = `alert alert-${type} alert-dismissible fade show`;
                alert.innerHTML = `
                    <div class="d-flex align-items-center">
                        <i class="bi ${type === 'success' ? 'bi-check-circle-fill' : type === 'danger' ? 'bi-exclamation-triangle-fill' : 'bi-info-circle-fill'} me-2"></i>
                        <div>${message}</div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                `;
                alertContainer.appendChild(alert);
                
                if (type !== 'danger') {
                    setTimeout(() => {
                        if (alert.parentNode) {
                            alert.remove();
                        }
                    }, 5000);
                }
            }

            function showResetError(input, errorId, message) {
                input.classList.add('is-invalid');
                document.getElementById(errorId).textContent = message;
            }

            function showResetAlert(message, type) {
                const alert = document.createElement('div');
                alert.className = `alert alert-${type} alert-dismissible fade show`;
                alert.innerHTML = `
                    <div class="d-flex align-items-center">
                        <i class="bi ${type === 'success' ? 'bi-check-circle-fill' : type === 'danger' ? 'bi-exclamation-triangle-fill' : 'bi-info-circle-fill'} me-2"></i>
                        <div>${message}</div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                `;
                resetAlertContainer.appendChild(alert);
                
                if (type !== 'danger') {
                    setTimeout(() => {
                        if (alert.parentNode) {
                            alert.remove();
                        }
                    }, 5000);
                }
            }

            function clearResetAlert() {
                resetAlertContainer.innerHTML = '';
            }

            function goToResetStep(step) {
                resetSteps.forEach((stepElement, index) => {
                    if (index === step) {
                        stepElement.classList.add('active');
                    } else {
                        stepElement.classList.remove('active');
                    }
                });
                currentResetStep = step;
                clearResetAlert();
            }

            function getVerificationCode() {
                let code = '';
                verificationInputs.forEach(input => {
                    code += input.value;
                });
                return code;
            }

            function startCountdown() {
                countdownTime = 300;
                updateCountdownDisplay();
                
                countdownTimer = setInterval(() => {
                    countdownTime--;
                    updateCountdownDisplay();
                    
                    if (countdownTime <= 0) {
                        clearInterval(countdownTimer);
                        showResetAlert('Kode verifikasi telah kadaluarsa. Silakan minta kode baru.', 'danger');
                    }
                }, 1000);
            }

            function updateCountdownDisplay() {
                const minutes = Math.floor(countdownTime / 60);
                const seconds = countdownTime % 60;
                countdownElement.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
            }

            function resetResetPasswordForm() {
                goToResetStep(0);
                
                resetEmailInput.value = '';
                verificationInputs.forEach(input => input.value = '');
                newPasswordInput.value = '';
                confirmNewPasswordInput.value = '';
                
                resetEmailInput.classList.remove('is-invalid');
                newPasswordInput.classList.remove('is-invalid');
                confirmNewPasswordInput.classList.remove('is-invalid');
                
                clearResetAlert();
                
                clearInterval(countdownTimer);
            }

            function generateVerificationCode() {
                return Math.floor(100000 + Math.random() * 900000).toString();
            }

            function redirectToHome() {
                redirectOverlay.classList.add('active');
                
                setTimeout(() => {
                    window.location.href = "{{ route('beranda') }}";
                }, 3000);
            }

            function submitLoginForm(email, password) {
                buttonText.classList.add('d-none');
                buttonSpinner.classList.remove('d-none');
                loginButton.disabled = true;

                fetch("{{ route('login.submit') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        email: email,
                        password: password,
                        remember: document.getElementById('remember').checked
                    })
                })
                .then(response => response.json())
                .then(data => {
                    buttonText.classList.remove('d-none');
                    buttonSpinner.classList.add('d-none');
                    loginButton.disabled = false;
                    
                    if (data.success) {
                        showAlert('Login berhasil! Mengalihkan ke halaman home...', 'success');
                        setTimeout(() => {
                            redirectToHome();
                        }, 1500);
                    } else {
                        showAlert(data.message || 'Email atau kata sandi salah. Silakan coba lagi.', 'danger');
                    }
                })
                .catch(error => {
                    buttonText.classList.remove('d-none');
                    buttonSpinner.classList.add('d-none');
                    loginButton.disabled = false;
                    
                    console.error('Error:', error);
                    showAlert('Terjadi kesalahan. Silakan coba lagi.', 'danger');
                });
            }

            function simulateSendCode(email) {
                sendCodeText.classList.add('d-none');
                sendCodeSpinner.classList.remove('d-none');
                sendCodeButton.disabled = true;
                
                setTimeout(() => {
                    sendCodeText.classList.remove('d-none');
                    sendCodeSpinner.classList.add('d-none');
                    sendCodeButton.disabled = false;
                    
                    generatedCode = generateVerificationCode();
                    
                    emailSentTo.textContent = email;
                    
                    goToResetStep(1);
                    
                    startCountdown();
                    
                    showResetAlert(`Kode verifikasi telah dikirim ke ${email}. Kode: ${generatedCode} (ini hanya demo)`, 'info');
                }, 1500);
            }

            function simulateResetPassword() {
                resetPasswordText.classList.add('d-none');
                resetPasswordSpinner.classList.remove('d-none');
                resetPasswordButton.disabled = true;
                
                setTimeout(() => {
                    resetPasswordText.classList.remove('d-none');
                    resetPasswordSpinner.classList.add('d-none');
                    resetPasswordButton.disabled = false;
                    
                    goToResetStep(3);
                }, 1500);
            }

            const loginContainer = document.querySelector('.login-container');
            loginContainer.style.opacity = '0';
            loginContainer.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                loginContainer.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                loginContainer.style.opacity = '1';
                loginContainer.style.transform = 'translateY(0)';
            }, 200);
        });
    </script>
</body>
</html>