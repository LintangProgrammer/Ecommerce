{{-- ========================================
FILE: resources/views/auth/register.blade.php
FUNGSI: Halaman form register dengan video background (disesuaikan dengan login)
======================================== --}}

@extends('layouts.app')

@section('content')
    {{-- Container dengan video background (sama dengan login) --}}
    <div class="login-section position-relative" style="overflow: hidden; min-height: calc(100vh - 150px);">

        {{-- Video Background --}}
        <video autoplay muted loop playsinline class="video-background">
            <source src="{{ asset('videos/hijab-background.mp4') }}" type="video/mp4">
        </video>

        {{-- Overlay gelap untuk readability --}}
        <div class="video-overlay"></div>

        {{-- Content --}}
        <div class="position-relative" style="z-index: 2;">
            {{-- Spacer untuk navbar --}}
            <div style="height: 80px;"></div>

            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-5">

                        {{-- Header/Brand dengan gradient card (Sama dengan login) --}}
                        <div class="text-center mb-4">
                            <div class="card border-0 shadow-lg mb-4 glass-card"
                                style="background: linear-gradient(135deg, rgba(255, 255, 255, 0.2) 0%, rgba(255, 255, 255, 0.1) 100%); backdrop-filter: blur(20px); border-radius: 24px; padding: 40px 30px; border: 1px solid rgba(255, 255, 255, 0.3);">
                                <div class="mb-3">
                                    <div
                                        style="width: 70px; height: 70px; margin: 0 auto; background: rgba(255, 255, 255, 0.25); border-radius: 50%; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
                                        <svg width="40" height="40" viewBox="0 0 100 100" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="50" cy="30" r="12" fill="white" />
                                            <path
                                                d="M30 30 Q30 22, 38 22 L62 22 Q70 22, 70 30 L70 60 Q70 72, 58 77 L42 77 Q30 72, 30 60 Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                </div>
                                <h1 class="text-white fw-bold mb-2" style="font-size: 2rem; letter-spacing: -1px;">Hijab
                                    Collection</h1>
                                <div
                                    style="width: 50px; height: 3px; background: white; margin: 0 auto 10px; border-radius: 2px; opacity: 0.8;">
                                </div>
                                <p class="text-white mb-0"
                                    style="font-size: 1rem; font-weight: 300; letter-spacing: 0.5px;">Daftar Akun Baru</p>
                            </div>
                        </div>

                        {{-- Card Register dengan glass effect --}}
                        <div class="card border-0 shadow-lg glass-card"
                            style="border-radius: 20px; background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(15px);">
                            <div class="card-body p-4">

                                {{-- FORM REGISTER --}}
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    {{-- FIELD NAME --}}
                                    <div class="mb-3">
                                        <label for="name" class="form-label fw-semibold" style="color: #333;">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" class="me-1"
                                                style="vertical-align: text-bottom;">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                            Nama Lengkap
                                        </label>
                                        <input id="name" type="text"
                                            class="form-control form-control-lg @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name') }}" required autofocus
                                            placeholder="Masukkan nama lengkap"
                                            style="border-radius: 12px; border: 2px solid #e0e0e0; padding: 12px 16px; background: rgba(255, 255, 255, 0.9);">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>

                                    {{-- FIELD EMAIL --}}
                                    <div class="mb-3">
                                        <label for="email" class="form-label fw-semibold" style="color: #333;">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" class="me-1"
                                                style="vertical-align: text-bottom;">
                                                <path
                                                    d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                </path>
                                                <polyline points="22,6 12,13 2,6"></polyline>
                                            </svg>
                                            Email
                                        </label>
                                        <input id="email" type="email"
                                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required placeholder="nama@email.com"
                                            style="border-radius: 12px; border: 2px solid #e0e0e0; padding: 12px 16px; background: rgba(255, 255, 255, 0.9);">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        {{-- FIELD PASSWORD --}}
                                        <div class="col-md-6 mb-3">
                                            <label for="password" class="form-label fw-semibold"
                                                style="color: #333;">Password</label>
                                            <input id="password" type="password"
                                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                name="password" required placeholder="••••••••"
                                                style="border-radius: 12px; border: 2px solid #e0e0e0; padding: 12px 16px; background: rgba(255, 255, 255, 0.9);">
                                            @error('password')
                                                <span class="invalid-feedback"
                                                    role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>

                                        {{-- CONFIRM PASSWORD --}}
                                        <div class="col-md-6 mb-3">
                                            <label for="password-confirm" class="form-label fw-semibold"
                                                style="color: #333;">Konfirmasi</label>
                                            <input id="password-confirm" type="password"
                                                class="form-control form-control-lg" name="password_confirmation" required
                                                placeholder="••••••••"
                                                style="border-radius: 12px; border: 2px solid #e0e0e0; padding: 12px 16px; background: rgba(255, 255, 255, 0.9);">
                                        </div>
                                    </div>

                                    {{-- TOMBOL REGISTER --}}
                                    <div class="d-grid gap-2 mb-3 mt-2">
                                        <button type="submit" class="btn btn-lg text-white fw-semibold btn-login"
                                            style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; border-radius: 12px; padding: 14px;">
                                            Daftar Sekarang
                                        </button>
                                    </div>

                                    {{-- DIVIDER --}}
                                    <div class="position-relative my-4">
                                        <hr style="color: #ddd; opacity: 0.5;">
                                        <span class="position-absolute top-50 start-50 translate-middle px-3 small"
                                            style="background: rgba(255, 255, 255, 0.95); color: #999;">
                                            atau daftar dengan
                                        </span>
                                    </div>

                                    {{-- TOMBOL GOOGLE --}}
                                    <div class="d-grid gap-2">
                                        <a href="{{ route('auth.google') }}"
                                            class="btn btn-outline-secondary btn-lg d-flex align-items-center justify-content-center btn-google"
                                            style="border-radius: 12px; border: 2px solid #e0e0e0; padding: 12px; background: rgba(255, 255, 255, 0.9);">
                                            <svg class="me-2" width="20" height="20" viewBox="0 0 24 24">
                                                <path fill="#4285F4"
                                                    d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                                                <path fill="#34A853"
                                                    d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                                                <path fill="#FBBC05"
                                                    d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                                                <path fill="#EA4335"
                                                    d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                                            </svg>
                                            <span class="fw-semibold" style="color: #333;">Daftar dengan Google</span>
                                        </a>
                                    </div>

                                    {{-- LINK LOGIN --}}
                                    <p class="text-center mb-0 mt-4">
                                        <span style="color: #666;">Sudah punya akun?</span>
                                        <a href="{{ route('login') }}" class="text-decoration-none fw-bold ms-1"
                                            style="color: #667eea;">
                                            Login di sini
                                        </a>
                                    </p>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Menggunakan style yang sama persis dengan login untuk konsistensi */
        .login-section {
            position: relative;
        }

        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.75) 0%, rgba(118, 75, 162, 0.75) 100%);
            z-index: 1;
        }

        .glass-card {
            animation: fadeInUp 0.8s ease;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-control:focus {
            border-color: #667eea !important;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25) !important;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.5);
            transition: all 0.3s ease;
        }

        .btn-google:hover {
            background-color: rgba(248, 249, 250, 0.95) !important;
            border-color: #667eea !important;
            transform: translateY(-2px);
            transition: all 0.3s ease;
        }
    </style>
@endsection