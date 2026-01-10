{{-- ================================================
FILE: resources/views/home.blade.php
FUNGSI: Halaman utama website - Hijab Shop Theme
================================================ --}}

@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    {{-- Hero Section dengan VIDEO BACKGROUND --}}
    <section class="hero-section position-relative overflow-hidden" style="min-height: 600px;">

        {{-- VIDEO BACKGROUND - UNTUK HOME --}}
        <video autoplay muted loop playsinline class="hero-video-background">
            <source src="{{ asset('videos/hijab-home.mp4') }}" type="video/mp4">
            {{-- Fallback jika video tidak ada --}}
        </video>

        {{-- Overlay untuk readability - TAMBAHAN BARU --}}
        <div class="hero-video-overlay"></div>

        <div class="container position-relative" style="padding-top: 100px; padding-bottom: 100px; z-index: 2;">
            <div class="row align-items-center">
                <div class="col-lg-6 text-white mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="badge bg-white text-primary mb-3 px-3 py-2">
                        <i class="bi bi-star-fill text-warning me-1"></i>
                        Koleksi Terbaru 2026
                    </div>
                    <h1 class="display-3 fw-bold mb-4" style="line-height: 1.2;">
                        Tampil Cantik & Syar'i dengan Hijab Berkualitas
                    </h1>
                    <p class="lead mb-4 opacity-90" style="font-size: 1.1rem;">
                        Koleksi hijab premium dengan bahan terbaik, desain modern dan harga terjangkau.
                        Gratis ongkir untuk pembelian pertama!
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="{{ route('catalog.index') }}" class="btn btn-light btn-lg px-4 shadow-sm">
                            <i class="bi bi-bag-heart me-2"></i>Belanja Sekarang
                        </a>
                        <a href="#kategori" class="btn btn-outline-light btn-lg px-4">
                            <i class="bi bi-grid-3x3-gap me-2"></i>Lihat Kategori
                        </a>
                    </div>

                    {{-- Stats --}}
                    <div class="row mt-5 g-4">
                        <div class="col-4">
                            <h3 class="fw-bold mb-0">1000+</h3>
                            <small class="opacity-75">Produk</small>
                        </div>
                        <div class="col-4">
                            <h3 class="fw-bold mb-0">50K+</h3>
                            <small class="opacity-75">Pelanggan</small>
                        </div>
                        <div class="col-4">
                            <h3 class="fw-bold mb-0">4.9★</h3>
                            <small class="opacity-75">Rating</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center" data-aos="fade-left">
                    <div class="position-relative d-flex justify-content-center align-items-center"
                        style="min-height: 400px;">
                        {{-- Decorative Background --}}
                        <div class="position-absolute"
                            style="width: 400px; height: 400px; background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, transparent 70%); border-radius: 50%;">
                        </div>

                        {{-- Hijab Collection Display --}}
                        <div class="row g-4 position-relative">
                            <div class="col-6" data-aos="zoom-in" data-aos-delay="100">
                                <div class="card border-0 shadow-lg"
                                    style="transform: rotate(-5deg); transition: transform 0.3s;">
                                    <div class="card-body p-4 text-center"
                                        style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                        <i class="bi bi-bag-heart-fill text-white" style="font-size: 4rem;"></i>
                                        <h5 class="text-white mt-3 mb-0">Hijab Premium</h5>
                                        <p class="text-white small opacity-75 mb-0">Berbagai Warna</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6" data-aos="zoom-in" data-aos-delay="200">
                                <div class="card border-0 shadow-lg"
                                    style="transform: rotate(5deg); transition: transform 0.3s;">
                                    <div class="card-body p-4 text-center"
                                        style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                                        <i class="bi bi-star-fill text-white" style="font-size: 4rem;"></i>
                                        <h5 class="text-white mt-3 mb-0">Best Quality</h5>
                                        <p class="text-white small opacity-75 mb-0">Bahan Pilihan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6" data-aos="zoom-in" data-aos-delay="300">
                                <div class="card border-0 shadow-lg"
                                    style="transform: rotate(5deg); transition: transform 0.3s;">
                                    <div class="card-body p-4 text-center"
                                        style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                                        <i class="bi bi-tags-fill text-white" style="font-size: 4rem;"></i>
                                        <h5 class="text-white mt-3 mb-0">Harga Terbaik</h5>
                                        <p class="text-white small opacity-75 mb-0">Terjangkau</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6" data-aos="zoom-in" data-aos-delay="400">
                                <div class="card border-0 shadow-lg"
                                    style="transform: rotate(-5deg); transition: transform 0.3s;">
                                    <div class="card-body p-4 text-center"
                                        style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                                        <i class="bi bi-truck text-white" style="font-size: 4rem;"></i>
                                        <h5 class="text-white mt-3 mb-0">Fast Delivery</h5>
                                        <p class="text-white small opacity-75 mb-0">Gratis Ongkir</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating Elements --}}
                        <div class="position-absolute"
                            style="top: -20px; left: 20px; animation: float 3s ease-in-out infinite;">
                            <i class="bi bi-heart-fill" style="font-size: 2rem; color: rgba(255,255,255,0.3);"></i>
                        </div>
                        <div class="position-absolute"
                            style="bottom: -20px; right: 20px; animation: float 4s ease-in-out infinite;">
                            <i class="bi bi-star-fill" style="font-size: 1.5rem; color: rgba(255,255,255,0.3);"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Keunggulan/Features --}}
    <section class="py-5" style="margin-top: -50px;">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="card border-0 shadow-sm h-100 text-center py-4">
                        <div class="card-body">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 70px; height: 70px;">
                                <i class="bi bi-truck text-primary" style="font-size: 2rem;"></i>
                            </div>
                            <h6 class="fw-bold mb-2">Gratis Ongkir</h6>
                            <small class="text-muted">Min. pembelian Rp 100.000</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100 text-center py-4">
                        <div class="card-body">
                            <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 70px; height: 70px;">
                                <i class="bi bi-shield-check text-success" style="font-size: 2rem;"></i>
                            </div>
                            <h6 class="fw-bold mb-2">100% Original</h6>
                            <small class="text-muted">Produk berkualitas premium</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100 text-center py-4">
                        <div class="card-body">
                            <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 70px; height: 70px;">
                                <i class="bi bi-arrow-repeat text-warning" style="font-size: 2rem;"></i>
                            </div>
                            <h6 class="fw-bold mb-2">Mudah Retur</h6>
                            <small class="text-muted">Garansi 7 hari</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100 text-center py-4">
                        <div class="card-body">
                            <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 70px; height: 70px;">
                                <i class="bi bi-headset text-info" style="font-size: 2rem;"></i>
                            </div>
                            <h6 class="fw-bold mb-2">CS 24/7</h6>
                            <small class="text-muted">Siap membantu Anda</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Kategori dengan Design Card Modern --}}
    <section class="py-5 bg-light" id="kategori">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-primary bg-opacity-10 text-primary mb-2 px-3 py-2">Kategori</span>
                <h2 class="fw-bold mb-3">Jelajahi Koleksi Kami</h2>
                <p class="text-muted">Temukan berbagai pilihan hijab sesuai kebutuhan dan gaya Anda</p>
            </div>

            <div class="row g-4">
                @foreach($categories as $index => $category)
                    <div class="col-6 col-md-4 col-lg-2" data-aos="zoom-in" data-aos-delay="{{ $index * 50 }}">
                        <a href="{{ route('catalog.index', ['category' => $category->slug]) }}" class="text-decoration-none">
                            <div class="card border-0 shadow-sm text-center h-100 category-card"
                                style="transition: all 0.3s ease;">
                                <div class="card-body p-4">
                                    <div class="position-relative mb-3">
                                        <img src="{{ $category->image_url }}" alt="{{ $category->name }}"
                                            class="rounded-circle border border-3 border-light shadow-sm" width="90" height="90"
                                            style="object-fit: cover;">
                                        <span class="position-absolute bottom-0 end-0 badge bg-primary rounded-circle"
                                            style="width: 30px; height: 30px; line-height: 20px;">
                                            {{ $category->products_count }}
                                        </span>
                                    </div>
                                    <h6 class="fw-bold mb-1 text-dark">{{ $category->name }}</h6>
                                    <small class="text-muted">{{ $category->products_count }} produk</small>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Promo Banner dengan Design Menarik --}}
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="card border-0 shadow-lg overflow-hidden h-100"
                        style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); min-height: 280px;">
                        <div class="card-body d-flex flex-column justify-content-center p-5 text-white position-relative">
                            <div class="position-absolute top-0 end-0 opacity-25"
                                style="font-size: 150px; line-height: 1; margin-top: -20px; margin-right: -20px;">
                                <i class="bi bi-lightning-fill"></i>
                            </div>
                            <div class="position-relative">
                                <div class="badge bg-white text-danger mb-3 px-3 py-2">
                                    <i class="bi bi-fire me-1"></i>Hot Deal!
                                </div>
                                <h3 class="fw-bold mb-3">Flash Sale Setiap Hari!</h3>
                                <p class="mb-4 opacity-90">Diskon hingga 50% untuk produk pilihan. Buruan sebelum kehabisan!
                                </p>
                                <a href="{{ route('catalog.index') }}" class="btn btn-light btn-lg shadow">
                                    <i class="bi bi-bag-check me-2"></i>Belanja Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="card border-0 shadow-lg overflow-hidden h-100"
                        style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); min-height: 280px;">
                        <div class="card-body d-flex flex-column justify-content-center p-5 text-white position-relative">
                            <div class="position-absolute top-0 end-0 opacity-25"
                                style="font-size: 150px; line-height: 1; margin-top: -20px; margin-right: -20px;">
                                <i class="bi bi-gift-fill"></i>
                            </div>
                            <div class="position-relative">
                                <div class="badge bg-white text-info mb-3 px-3 py-2">
                                    <i class="bi bi-star-fill me-1"></i>Member Baru
                                </div>
                                <h3 class="fw-bold mb-3">Voucher Rp 50.000</h3>
                                <p class="mb-4 opacity-90">Daftar sekarang dan dapatkan voucher untuk pembelian pertama
                                    Anda!</p>
                                @if(Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-light btn-lg shadow">
                                        <i class="bi bi-person-plus me-2"></i>Daftar Gratis
                                    </a>
                                @else
                                    <a href="/register" class="btn btn-light btn-lg shadow">
                                        <i class="bi bi-person-plus me-2"></i>Daftar Gratis
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Produk Unggulan dengan Grid Modern --}}
    <section class="py-5 bg-light">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-5" data-aos="fade-up">
                <div>
                    <span class="badge bg-primary bg-opacity-10 text-primary mb-2 px-3 py-2">Best Seller</span>
                    <h2 class="fw-bold mb-0">Produk Unggulan</h2>
                    <p class="text-muted mb-0">Pilihan favorit pelanggan kami</p>
                </div>
                <a href="{{ route('catalog.index') }}" class="btn btn-outline-primary d-none d-md-block">
                    Lihat Semua <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
            <div class="row g-4">
                @foreach($featuredProducts as $index => $product)
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                        @include('partials.product-card', ['product' => $product])
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-4 d-md-none">
                <a href="{{ route('catalog.index') }}" class="btn btn-outline-primary">
                    Lihat Semua Produk <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    {{-- Produk Terbaru --}}
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-success bg-opacity-10 text-success mb-2 px-3 py-2">
                    <i class="bi bi-clock-history me-1"></i>New Arrival
                </span>
                <h2 class="fw-bold mb-3">Koleksi Terbaru</h2>
                <p class="text-muted">Produk terbaru dengan desain modern dan trendy</p>
            </div>
            <div class="row g-4">
                @foreach($latestProducts as $index => $product)
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                        @include('partials.product-card', ['product' => $product])
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Testimonial Section --}}
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-warning bg-opacity-10 text-warning mb-2 px-3 py-2">
                    <i class="bi bi-chat-heart me-1"></i>Testimonial
                </span>
                <h2 class="fw-bold mb-3">Kata Mereka</h2>
                <p class="text-muted">Ribuan pelanggan puas dengan produk kami</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <p class="mb-3">"Kualitas hijabnya bagus banget! Bahannya adem dan nyaman dipakai seharian.
                                Pasti bakal order lagi!"</p>
                            <div class="d-flex align-items-center">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center text-white me-3"
                                    style="width: 40px; height: 40px;">
                                    <strong>S</strong>
                                </div>
                                <div>
                                    <h6 class="mb-0">Siti Nurhaliza</h6>
                                    <small class="text-muted">Jakarta</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <p class="mb-3">"Pengiriman cepat dan packing rapih. Hijabnya sesuai gambar, warnanya cantik.
                                Recommended seller!"</p>
                            <div class="d-flex align-items-center">
                                <div class="bg-success rounded-circle d-flex align-items-center justify-content-center text-white me-3"
                                    style="width: 40px; height: 40px;">
                                    <strong>F</strong>
                                </div>
                                <div>
                                    <h6 class="mb-0">Fatimah Az-Zahra</h6>
                                    <small class="text-muted">Bandung</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <p class="mb-3">"Harga terjangkau tapi kualitas premium. CS nya juga ramah dan fast respon. Top
                                deh pokoknya!"</p>
                            <div class="d-flex align-items-center">
                                <div class="bg-info rounded-circle d-flex align-items-center justify-content-center text-white me-3"
                                    style="width: 40px; height: 40px;">
                                    <strong>A</strong>
                                </div>
                                <div>
                                    <h6 class="mb-0">Aisyah Kamila</h6>
                                    <small class="text-muted">Surabaya</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('styles')
    <style>
        /* ============================================
               VIDEO BACKGROUND STYLES - TAMBAHAN BARU
               ============================================ */

        /* Video sebagai background hero */
        .hero-video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        /* Overlay untuk membuat teks lebih terbaca - OPACITY DIKURANGI */
        .hero-video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.60) 0%, rgba(118, 75, 162, 0.60) 100%);
            z-index: 1;
        }

        /* Pastikan konten di atas video */
        .hero-section .container {
            position: relative;
            z-index: 2;
        }

        /* ============================================
               EXISTING STYLES
               ============================================ */

        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15) !important;
        }

        .hero-section {
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            pointer-events: none;
            z-index: 2;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .card:hover {
            transform: rotate(0deg) scale(1.05) !important;
        }

        /* Responsive video */
        @media (max-width: 768px) {
            .hero-video-background {
                object-position: center;
            }
        }
    </style>
@endpush

@push('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    </script>
@endpush