{{-- ================================================
FILE: resources/views/partials/footer.blade.php
FUNGSI: Footer website - Hijab Shop Theme
================================================ --}}

<footer class="bg-white border-top mt-5">
    {{-- Main Footer --}}
    <div class="container py-5">
        <div class="row g-4">
            {{-- Brand & Description --}}
            <div class="col-lg-4 col-md-6">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <div class="position-relative">
                        <svg width="40" height="40" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="footerLogoGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#667eea;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#764ba2;stop-opacity:1" />
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="48" fill="url(#footerLogoGradient)" opacity="0.1"/>
                            <path d="M50,30 Q35,30 35,45 Q35,55 45,65 L50,70 L55,65 Q65,55 65,45 Q65,30 50,30 Z" 
                                  fill="url(#footerLogoGradient)"/>
                        </svg>
                    </div>
                    <div>
                        <h5 class="mb-0 fw-bold" style="color: #2d3748;">Hijab</h5>
                        <h5 class="mb-0 fw-bold" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Collection</h5>
                    </div>
                </div>
                <p class="text-muted mb-3">Toko hijab online terpercaya dengan koleksi hijab premium berkualitas. Tampil cantik dan syar'i setiap hari.</p>
                
                {{-- Social Media --}}
                <div class="d-flex gap-2">
                    <a href="#" class="btn btn-sm rounded-circle d-flex align-items-center justify-content-center social-icon" 
                       style="width: 40px; height: 40px; background: #f8f9fa; transition: all 0.3s;">
                        <i class="bi bi-instagram" style="color: #667eea;"></i>
                    </a>
                    <a href="#" class="btn btn-sm rounded-circle d-flex align-items-center justify-content-center social-icon" 
                       style="width: 40px; height: 40px; background: #f8f9fa; transition: all 0.3s;">
                        <i class="bi bi-facebook" style="color: #667eea;"></i>
                    </a>
                    <a href="#" class="btn btn-sm rounded-circle d-flex align-items-center justify-content-center social-icon" 
                       style="width: 40px; height: 40px; background: #f8f9fa; transition: all 0.3s;">
                        <i class="bi bi-tiktok" style="color: #667eea;"></i>
                    </a>
                    <a href="#" class="btn btn-sm rounded-circle d-flex align-items-center justify-content-center social-icon" 
                       style="width: 40px; height: 40px; background: #f8f9fa; transition: all 0.3s;">
                        <i class="bi bi-whatsapp" style="color: #667eea;"></i>
                    </a>
                    <a href="#" class="btn btn-sm rounded-circle d-flex align-items-center justify-content-center social-icon" 
                       style="width: 40px; height: 40px; background: #f8f9fa; transition: all 0.3s;">
                        <i class="bi bi-youtube" style="color: #667eea;"></i>
                    </a>
                </div>
            </div>

            {{-- Quick Links --}}
            <div class="col-lg-2 col-md-6 col-6">
                <h6 class="fw-bold mb-3" style="color: #2d3748;">Menu</h6>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="{{ route('home') }}" class="text-muted text-decoration-none footer-link d-inline-block">
                            Beranda
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('catalog.index') }}" class="text-muted text-decoration-none footer-link d-inline-block">
                            Katalog Produk
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-muted text-decoration-none footer-link d-inline-block">
                            Promo
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-muted text-decoration-none footer-link d-inline-block">
                            Tentang Kami
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Help --}}
            <div class="col-lg-2 col-md-6 col-6">
                <h6 class="fw-bold mb-3" style="color: #2d3748;">Bantuan</h6>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="#" class="text-muted text-decoration-none footer-link d-inline-block">
                            FAQ
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-muted text-decoration-none footer-link d-inline-block">
                            Cara Belanja
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-muted text-decoration-none footer-link d-inline-block">
                            Pembayaran
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-muted text-decoration-none footer-link d-inline-block">
                            Kebijakan Privasi
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Contact --}}
            <div class="col-lg-4 col-md-6">
                <h6 class="fw-bold mb-3" style="color: #2d3748;">Hubungi Kami</h6>
                <ul class="list-unstyled">
                    <li class="mb-3 d-flex gap-2 align-items-start">
                        <i class="bi bi-geo-alt-fill" style="color: #667eea; font-size: 1.1rem;"></i>
                        <span class="text-muted small">Jl. Contoh No. 123, Bandung, Jawa Barat, Indonesia</span>
                    </li>
                    <li class="mb-3 d-flex gap-2 align-items-center">
                        <i class="bi bi-telephone-fill" style="color: #667eea; font-size: 1.1rem;"></i>
                        <span class="text-muted small">(022) 123-4567</span>
                    </li>
                    <li class="mb-3 d-flex gap-2 align-items-center">
                        <i class="bi bi-envelope-fill" style="color: #667eea; font-size: 1.1rem;"></i>
                        <span class="text-muted small">info@hijabcollection.com</span>
                    </li>
                    <li class="mb-3 d-flex gap-2 align-items-start">
                        <i class="bi bi-clock-fill" style="color: #667eea; font-size: 1.1rem;"></i>
                        <span class="text-muted small">Senin - Minggu<br>09:00 - 21:00 WIB</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Payment & Shipping Methods --}}
    <div class="border-top py-4" style="background: #f8f9fa;">
        <div class="container">
            <div class="row align-items-center g-3">
                <div class="col-md-6">
                    <small class="text-muted fw-500 d-block mb-2">Metode Pembayaran:</small>
                    <div class="d-flex gap-2 flex-wrap">
                        <span class="badge bg-white border px-3 py-2">
                            <i class="bi bi-credit-card text-muted"></i>
                            <small class="text-muted ms-1">Bank Transfer</small>
                        </span>
                        <span class="badge bg-white border px-3 py-2">
                            <i class="bi bi-wallet2 text-muted"></i>
                            <small class="text-muted ms-1">E-Wallet</small>
                        </span>
                        <span class="badge bg-white border px-3 py-2">
                            <i class="bi bi-cash text-muted"></i>
                            <small class="text-muted ms-1">COD</small>
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <small class="text-muted fw-500 d-block mb-2">Pengiriman:</small>
                    <div class="d-flex gap-2 flex-wrap">
                        <span class="badge bg-white border px-3 py-2">
                            <i class="bi bi-box-seam text-muted"></i>
                            <small class="text-muted ms-1">JNE</small>
                        </span>
                        <span class="badge bg-white border px-3 py-2">
                            <i class="bi bi-box-seam text-muted"></i>
                            <small class="text-muted ms-1">J&T</small>
                        </span>
                        <span class="badge bg-white border px-3 py-2">
                            <i class="bi bi-box-seam text-muted"></i>
                            <small class="text-muted ms-1">SiCepat</small>
                        </span>
                        <span class="badge bg-white border px-3 py-2">
                            <i class="bi bi-box-seam text-muted"></i>
                            <small class="text-muted ms-1">Anteraja</small>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Copyright --}}
    <div class="border-top py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <small class="text-muted">
                        &copy; {{ date('Y') }} <strong style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Hijab Collection</strong>. All rights reserved.
                    </small>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <small class="text-muted">
                        Made with <i class="bi bi-heart-fill" style="color: #667eea;"></i> in Indonesia
                    </small>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    .footer-link {
        transition: all 0.3s ease;
        display: inline-block;
    }
    
    .footer-link:hover {
        color: #667eea !important;
        transform: translateX(5px);
    }
    
    .social-icon {
        transition: all 0.3s ease;
    }
    
    .social-icon:hover {
        transform: translateY(-5px);
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
    }
    
    .social-icon:hover i {
        color: white !important;
    }
</style>