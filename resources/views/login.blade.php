<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In MemoraX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
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
        
        /* Animasi untuk redirect */
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
    <!-- Overlay untuk redirect -->
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
            
            <form id="loginForm">
                <div class="mb-4">
                    <label for="exampleDropdownFormEmail1" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="nama@contoh.com">
                    <div class="invalid-feedback" id="emailError">
                        Harap masukkan alamat email yang valid.
                    </div>
                </div>
                
                <div class="mb-4">
                    <label for="exampleDropdownFormPassword1" class="form-label">Kata Sandi</label>
                    <div class="password-container">
                        <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Kata Sandi">
                        <button type="button" class="password-toggle" id="passwordToggle">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                    <div class="invalid-feedback" id="passwordError">
                        Kata sandi harus minimal 6 karakter.
                    </div>
                </div>
                
                <div class="mb-4 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                        <label class="form-check-label" for="dropdownCheck">
                            Ingat saya
                        </label>
                    </div>
                    <a href="#" class="text-decoration-none" style="color: var(--accent); font-weight: 500;" id="forgotPasswordLink">Lupa kata sandi?</a>
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
                <a href="regis.html" class="text-decoration-none fw-bold" style="color: var(--primary);" id="signupLink">Daftar sekarang</a>
            </div>
        </div>
        
        <div class="login-footer">
            &copy; 2023 Login App. All rights reserved.
        </div>
    </div>

    <!-- Modal Lupa Password -->
    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="forgotPasswordModalLabel">Reset Kata Sandi</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="resetAlertContainer"></div>
                    
                    <!-- Step 1: Input Email -->
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
                    
                    <!-- Step 2: Verifikasi Kode -->
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
                    
                    <!-- Step 3: Reset Password -->
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
                    
                    <!-- Step 4: Success -->
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

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Elemen DOM
            const loginForm = document.getElementById('loginForm');
            const emailInput = document.getElementById('exampleDropdownFormEmail1');
            const passwordInput = document.getElementById('exampleDropdownFormPassword1');
            const passwordToggle = document.getElementById('passwordToggle');
            const loginButton = document.getElementById('loginButton');
            const buttonText = document.getElementById('buttonText');
            const buttonSpinner = document.getElementById('buttonSpinner');
            const alertContainer = document.getElementById('alertContainer');
            const signupLink = document.getElementById('signupLink');
            const forgotPasswordLink = document.getElementById('forgotPasswordLink');
            const redirectOverlay = document.getElementById('redirectOverlay');
            
            // Modal elements
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
            let countdownTime = 300; // 5 minutes in seconds
            let generatedCode = '';
            
            // Toggle visibilitas password
            passwordToggle.addEventListener('click', function() {
                togglePasswordVisibility(passwordInput, this);
            });
            
            // Validasi form login
            loginForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Reset validasi
                resetValidation();
                
                // Validasi email
                const email = emailInput.value.trim();
                if (!isValidEmail(email)) {
                    showError(emailInput, 'emailError', 'Harap masukkan alamat email yang valid.');
                    return;
                }
                
                // Validasi password
                const password = passwordInput.value.trim();
                if (password.length < 6) {
                    showError(passwordInput, 'passwordError', 'Kata sandi harus minimal 6 karakter.');
                    return;
                }
                
                // Simulasi proses login
                simulateLogin(email, password);
            });
            
            // Buka modal lupa password
            forgotPasswordLink.addEventListener('click', function(e) {
                e.preventDefault();
                forgotPasswordModal.show();
            });
            
            // Reset password step 1: Kirim kode verifikasi
            sendCodeButton.addEventListener('click', function() {
                const email = resetEmailInput.value.trim();
                
                if (!isValidEmail(email)) {
                    showResetError(resetEmailInput, 'resetEmailError', 'Harap masukkan alamat email yang valid.');
                    return;
                }
                
                // Simulasi pengiriman kode
                simulateSendCode(email);
            });
            
            // Reset password step 2: Verifikasi kode
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
                
                // Kode valid, lanjut ke step berikutnya
                goToResetStep(2);
                clearInterval(countdownTimer);
            });
            
            // Kirim ulang kode verifikasi
            resendCodeButton.addEventListener('click', function() {
                const email = resetEmailInput.value.trim();
                simulateSendCode(email);
            });
            
            // Reset password step 3: Reset password
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
                
                // Simulasi reset password
                simulateResetPassword();
            });
            
            // Toggle password visibility di modal
            newPasswordToggle.addEventListener('click', function() {
                togglePasswordVisibility(newPasswordInput, this);
            });
            
            confirmNewPasswordToggle.addEventListener('click', function() {
                togglePasswordVisibility(confirmNewPasswordInput, this);
            });
            
            // Handle input kode verifikasi
            verificationInputs.forEach((input, index) => {
                input.addEventListener('input', function() {
                    if (this.value.length === 1 && index < verificationInputs.length - 1) {
                        verificationInputs[index + 1].focus();
                    }
                    
                    // Auto verifikasi jika semua field terisi
                    if (index === verificationInputs.length - 1 && this.value.length === 1) {
                        const fullCode = getVerificationCode();
                        if (fullCode.length === 6) {
                            // Auto submit setelah 500ms
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
            
            // Reset modal ketika ditutup
            document.getElementById('forgotPasswordModal').addEventListener('hidden.bs.modal', function() {
                resetResetPasswordForm();
            });
            
            // Fungsi toggle password visibility
            function togglePasswordVisibility(input, toggleBtn) {
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                
                // Ganti ikon
                const icon = toggleBtn.querySelector('i');
                if (type === 'password') {
                    icon.classList.remove('bi-eye-slash');
                    icon.classList.add('bi-eye');
                } else {
                    icon.classList.remove('bi-eye');
                    icon.classList.add('bi-eye-slash');
                }
            }
            
            // Fungsi validasi email
            function isValidEmail(email) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }
            
            // Fungsi reset validasi
            function resetValidation() {
                emailInput.classList.remove('is-invalid');
                passwordInput.classList.remove('is-invalid');
                clearAlert();
            }
            
            // Fungsi menampilkan error
            function showError(input, errorId, message) {
                input.classList.add('is-invalid');
                document.getElementById(errorId).textContent = message;
            }
            
            // Fungsi membersihkan alert
            function clearAlert() {
                alertContainer.innerHTML = '';
            }
            
            // Fungsi menampilkan alert
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
                
                // Auto dismiss setelah 5 detik untuk alert success dan info
                if (type !== 'danger') {
                    setTimeout(() => {
                        if (alert.parentNode) {
                            alert.remove();
                        }
                    }, 5000);
                }
            }
            
            // Fungsi untuk reset password
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
                
                // Auto dismiss setelah 5 detik untuk alert success dan info
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
                countdownTime = 300; // Reset to 5 minutes
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
                // Reset semua step ke step 1
                goToResetStep(0);
                
                // Clear semua input
                resetEmailInput.value = '';
                verificationInputs.forEach(input => input.value = '');
                newPasswordInput.value = '';
                confirmNewPasswordInput.value = '';
                
                // Clear validasi
                resetEmailInput.classList.remove('is-invalid');
                newPasswordInput.classList.remove('is-invalid');
                confirmNewPasswordInput.classList.remove('is-invalid');
                
                // Clear alert
                clearResetAlert();
                
                // Stop countdown
                clearInterval(countdownTimer);
            }
            
            function generateVerificationCode() {
                return Math.floor(100000 + Math.random() * 900000).toString();
            }
            
            // Fungsi untuk redirect ke halaman home
            function redirectToHome() {
                // Tampilkan overlay redirect
                redirectOverlay.classList.add('active');
                
                // Simulasi loading selama 3 detik
                setTimeout(() => {
                    // Redirect ke halaman home
                    // Ganti URL berikut dengan URL halaman home yang sebenarnya
                    window.location.href = 'beranda.html';
                }, 3000);
            }
            
            // Simulasi proses login
            function simulateLogin(email, password) {
                // Tampilkan loading state
                buttonText.classList.add('d-none');
                buttonSpinner.classList.remove('d-none');
                loginButton.disabled = true;
                
                // Simulasi request API
                setTimeout(() => {
                    // Reset loading state
                    buttonText.classList.remove('d-none');
                    buttonSpinner.classList.add('d-none');
                    loginButton.disabled = false;
                    
                    // Cek kredensial (dalam aplikasi nyata, ini akan diganti dengan request ke server)
                    if (email === 'user@example.com' && password === 'password123') {
                        showAlert('Login berhasil! Mengalihkan ke halaman home...', 'success');
                        // Redirect ke halaman home setelah 1.5 detik
                        setTimeout(() => {
                            redirectToHome();
                        }, 1500);
                    } else {
                        showAlert('Email atau kata sandi salah. Silakan coba lagi.', 'danger');
                    }
                }, 2000);
            }
            
            // Simulasi kirim kode verifikasi
            function simulateSendCode(email) {
                // Tampilkan loading state
                sendCodeText.classList.add('d-none');
                sendCodeSpinner.classList.remove('d-none');
                sendCodeButton.disabled = true;
                
                // Simulasi pengiriman email
                setTimeout(() => {
                    // Reset loading state
                    sendCodeText.classList.remove('d-none');
                    sendCodeSpinner.classList.add('d-none');
                    sendCodeButton.disabled = false;
                    
                    // Generate kode verifikasi
                    generatedCode = generateVerificationCode();
                    
                    // Tampilkan email yang dikirim
                    emailSentTo.textContent = email;
                    
                    // Pindah ke step verifikasi
                    goToResetStep(1);
                    
                    // Mulai countdown
                    startCountdown();
                    
                    // Tampilkan alert sukses (dalam aplikasi nyata, kode akan dikirim via email)
                    showResetAlert(`Kode verifikasi telah dikirim ke ${email}. Kode: ${generatedCode} (ini hanya demo)`, 'info');
                }, 1500);
            }
            
            // Simulasi reset password
            function simulateResetPassword() {
                // Tampilkan loading state
                resetPasswordText.classList.add('d-none');
                resetPasswordSpinner.classList.remove('d-none');
                resetPasswordButton.disabled = true;
                
                // Simulasi proses reset
                setTimeout(() => {
                    // Reset loading state
                    resetPasswordText.classList.remove('d-none');
                    resetPasswordSpinner.classList.add('d-none');
                    resetPasswordButton.disabled = false;
                    
                    // Pindah ke step sukses
                    goToResetStep(3);
                }, 1500);
            }
            
            // Animasi saat halaman dimuat
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