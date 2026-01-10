{{-- ========================================
FILE: resources/views/auth/passwords/email.blade.php
FUNGSI: Halaman form reset password (lupa password)
======================================== --}}

@extends('layouts.app')

@section('content')
    {{-- Container dengan video background --}}
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
                    <div class="col-md-5 col-lg-4">

                        {{-- Header --}}
                        <div class="text-center mb-4">
                            <div class="card border-0 shadow-lg mb-4 glass-card"
                                style="background: linear-gradient(135deg, rgba(255, 255, 255, 0.2) 0%, rgba(255, 255, 255, 0.1) 100%); backdrop-filter: blur(20px); border-radius: 24px; padding: 40px 30px; border: 1px solid rgba(255, 255, 255, 0.3);">
                                <div class="mb-3">
                                    <div
                                        style="width: 70px; height: 70px; margin: 0 auto; background: rgba(255, 255, 255, 0.25); border-radius: 50%; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
                                        <svg width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="white"
                                            stroke-width="2">
                                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                            <path d="M12 8v4"></path>
                                            <path d="M12 16h.01"></path>
                                        </svg>
                                    </div>
                                </div>
                                <h2 class="text-white fw-bold mb-2" style="font-size: 1.8rem;">Lupa Password?</h2>
                                <p class="text-white mb-0" style="font-size: 0.95rem; opacity: 0.9;">Kami akan kirim link
                                    reset ke email Anda</p>
                            </div>
                        </div>

                        {{-- Card Form --}}
                        <div class="card border-0 shadow-lg glass-card"
                            style="border-radius: 20px; background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(15px);">
                            <div class="card-body p-4">

                                {{-- Alert Success --}}
                                @if (session('status'))
                                    <div class="alert alert-success border-0 mb-4"
                                        style="border-radius: 12px; background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);">
                                        <div class="d-flex align-items-center">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" class="me-2">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                            <span>{{ session('status') }}</span>
                                        </div>
                                    </div>
                                @endif

                                {{-- FORM --}}
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    {{-- Info Text --}}
                                    <div class="alert alert-info border-0 mb-4"
                                        style="border-radius: 12px; background: linear-gradient(135deg, #d1ecf1 0%, #bee5eb 100%);">
                                        <small>
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2"
                                                style="vertical-align: text-bottom; margin-right: 4px;">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="16" x2="12" y2="12"></line>
                                                <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                            </svg>
                                            Masukkan email yang terdaftar untuk menerima link reset password
                                        </small>
                                    </div>

                                    {{-- FIELD EMAIL --}}
                                    <div class="mb-4">
                                        <label for="email" class="form-label fw-semibold" style="color: #333;">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2"
                                                style="vertical-align: text-bottom; margin-right: 4px;">
                                                <path
                                                    d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                </path>
                                                <polyline points="22,6 12,13 2,6"></polyline>
                                            </svg>
                                            Alamat Email
                                        </label>
                                        <input id="email" type="email"
                                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                            placeholder="nama@email.com"
                                            style="border-radius: 12px; border: 2px solid #e0e0e0; padding: 12px 16px; background: rgba(255, 255, 255, 0.9);">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    {{-- TOMBOL KIRIM --}}
                                    <div class="d-grid gap-2 mb-3">
                                        <button type="submit" class="btn btn-lg text-white fw-semibold btn-submit"
                                            style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; border-radius: 12px; padding: 14px;">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2"
                                                style="vertical-align: text-bottom; margin-right: 8px;">
                                                <line x1="22" y1="2" x2="11" y2="13"></line>
                                                <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                            </svg>
                                            Kirim Link Reset Password
                                        </button>
                                    </div>

                                    {{-- BACK TO LOGIN --}}
                                    <div class="text-center mt-4">
                                        <a href="{{ route('login') }}"
                                            class="text-decoration-none d-inline-flex align-items-center"
                                            style="color: #667eea; font-weight: 500;">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" class="me-2">
                                                <line x1="19" y1="12" x2="5" y2="12"></line>
                                                <polyline points="12 19 5 12 12 5"></polyline>
                                            </svg>
                                            Kembali ke Login
                                        </a>
                                    </div>
                                </form>

                            </div>
                        </div>

                        {{-- Footer Security Badge --}}
                        <div class="text-center mt-4 mb-5">
                            <p class="small text-white" style="text-shadow: 0 2px 4px rgba(0,0,0,0.3);">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" style="vertical-align: text-bottom; margin-right: 4px;">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                </svg>
                                Proses reset password aman & terenkripsi
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Login Section - Video hanya di area ini */
        .login-section {
            position: relative;
        }

        /* Video Background */
        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        /* Overlay untuk membuat teks lebih terbaca */
        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.75) 0%, rgba(118, 75, 162, 0.75) 100%);
            z-index: 1;
        }

        /* Glass Card Effect */
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

        /* Focus effect untuk input */
        .form-control:focus {
            border-color: #667eea !important;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25) !important;
            outline: none;
        }

        /* Hover effect tombol */
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.5);
            transition: all 0.3s ease;
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        /* Link hover */
        a:hover {
            opacity: 0.85;
            transition: opacity 0.2s ease;
        }

        /* Input hover */
        .form-control:hover {
            border-color: #b8c0ea;
            transition: border-color 0.2s ease;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .video-background {
                object-position: center;
            }

            .login-section {
                min-height: auto;
            }

            .glass-card h2 {
                font-size: 1.5rem !important;
            }
        }
    </style>
@endsection