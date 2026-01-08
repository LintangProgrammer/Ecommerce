{{-- ================================================
FILE: resources/views/partials/navbar.blade.php
FUNGSI: Navigation bar untuk customer - Hijab Shop Premium
================================================ --}}

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top"
    style="border-bottom: 1px solid #f0f0f0;">
    <div class="container py-2">
        {{-- Logo & Brand --}}
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}" style="font-size: 1.4rem;">
            <div class="position-relative">
                <svg width="45" height="45" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="logoGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#667eea;stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#764ba2;stop-opacity:1" />
                        </linearGradient>
                    </defs>
                    <circle cx="50" cy="50" r="48" fill="url(#logoGradient)" opacity="0.1" />
                    <path d="M50,30 Q35,30 35,45 Q35,55 45,65 L50,70 L55,65 Q65,55 65,45 Q65,30 50,30 Z"
                        fill="url(#logoGradient)" stroke="url(#logoGradient)" stroke-width="2" />
                </svg>
            </div>
            <div class="d-flex flex-column" style="line-height: 1.2;">
                <span class="fw-bold" style="font-size: 1.3rem; color: #2d3748;">Hijab</span>
                <span class="fw-bold"
                    style="font-size: 1.3rem; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Collection</span>
            </div>
        </a>

        {{-- Mobile Toggle --}}
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarMain">
            <i class="bi bi-list fs-4"></i>
        </button>

        {{-- Navbar Content --}}
        <div class="collapse navbar-collapse" id="navbarMain">
            {{-- Search Form --}}
            <form class="d-flex mx-lg-auto my-3 my-lg-0" style="max-width: 500px; width: 100%;"
                action="{{ route('catalog.index') }}" method="GET">
                <div class="input-group"
                    style="border-radius: 25px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                    <span class="input-group-text bg-white border-0 ps-4">
                        <i class="bi bi-search text-muted"></i>
                    </span>
                    <input type="text" name="q" class="form-control border-0 py-2 px-3"
                        placeholder="Cari hijab, pashmina, bergo..." value="{{ request('q') }}"
                        style="box-shadow: none;">
                    <button class="btn border-0 px-4 text-white" type="submit"
                        style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                        Cari
                    </button>
                </div>
            </form>

            {{-- Right Menu --}}
            <ul class="navbar-nav ms-lg-auto align-items-lg-center gap-2 mt-3 mt-lg-0">
                {{-- Katalog --}}
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded-3 d-flex align-items-center gap-2"
                        href="{{ route('catalog.index') }}"
                        style="transition: all 0.3s; font-weight: 500; color: #4a5568;">
                        <i class="bi bi-grid-3x3-gap-fill"></i>
                        Katalog
                    </a>
                </li>

                @auth
                    {{-- Wishlist --}}
                    <li class="nav-item">
                        <a class="nav-link position-relative p-2 rounded-3" href="{{ route('wishlist.index') }}"
                            title="Wishlist" style="transition: all 0.3s;">
                            <i class="bi bi-heart fs-5" style="color: #4a5568;"></i>
                            @if(auth()->user()->wishlists()->count() > 0)
                                <span class="position-absolute badge rounded-pill"
                                    style="font-size: 0.6rem; top: 0; right: 0; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 0.25rem 0.4rem;">
                                    {{ auth()->user()->wishlists()->count() }}
                                </span>
                            @endif
                        </a>
                    </li>

                    {{-- Cart --}}
                    <li class="nav-item">
                        <a class="nav-link position-relative p-2 rounded-3" href="{{ route('cart.index') }}"
                            title="Keranjang" style="transition: all 0.3s;">
                            <i class="bi bi-bag fs-5" style="color: #4a5568;"></i>
                            @php
                                $cartCount = auth()->user()->cart?->items()->count() ?? 0;
                            @endphp
                            @if($cartCount > 0)
                                <span class="position-absolute badge rounded-pill"
                                    style="font-size: 0.6rem; top: 0; right: 0; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 0.25rem 0.4rem;">
                                    {{ $cartCount }}
                                </span>
                            @endif
                        </a>
                    </li>

                    {{-- User Dropdown --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center gap-2 px-3 py-2 rounded-3" href="#"
                            id="userDropdown" data-bs-toggle="dropdown"
                            style="transition: all 0.3s; border: 1px solid #e2e8f0;">
                            <img src="{{ auth()->user()->avatar_url }}" class="rounded-circle" width="32" height="32"
                                style="object-fit: cover;" alt="{{ auth()->user()->name }}">
                            <span class="d-none d-lg-inline fw-500" style="color: #2d3748;">
                                {{ Str::limit(auth()->user()->name, 12) }}
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg mt-3 p-2"
                            style="min-width: 250px; border-radius: 12px;">
                            <li class="px-3 py-3 border-bottom mb-2">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="{{ auth()->user()->avatar_url }}" class="rounded-circle" width="48"
                                        height="48" style="object-fit: cover;" alt="{{ auth()->user()->name }}">
                                    <div>
                                        <div class="fw-bold" style="color: #2d3748;">{{ auth()->user()->name }}</div>
                                        <div class="small text-muted">{{ Str::limit(auth()->user()->email, 25) }}</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="dropdown-item py-2 px-3 rounded-3 d-flex align-items-center gap-2"
                                    href="{{ route('profile.edit') }}" style="transition: all 0.2s;">
                                    <i class="bi bi-person-circle" style="color: #667eea;"></i>
                                    <span>Profil Saya</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item py-2 px-3 rounded-3 d-flex align-items-center gap-2"
                                    href="{{ route('orders.index') }}" style="transition: all 0.2s;">
                                    <i class="bi bi-bag-check" style="color: #10b981;"></i>
                                    <span>Pesanan Saya</span>
                                </a>
                            </li>
                            @if(auth()->user()->isAdmin())
                                <li>
                                    <hr class="dropdown-divider my-2">
                                </li>
                                <li>
                                    <a class="dropdown-item py-2 px-3 rounded-3 d-flex align-items-center gap-2"
                                        href="{{ route('admin.dashboard') }}"
                                        style="background: linear-gradient(135deg, #667eea15 0%, #764ba215 100%); transition: all 0.2s;">
                                        <i class="bi bi-speedometer2" style="color: #667eea;"></i>
                                        <span style="color: #667eea; font-weight: 600;">Admin Panel</span>
                                    </a>
                                </li>
                            @endif
                            <li>
                                <hr class="dropdown-divider my-2">
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="dropdown-item py-2 px-3 rounded-3 d-flex align-items-center gap-2 text-danger"
                                        style="transition: all 0.2s;">
                                        <i class="bi bi-box-arrow-right"></i>
                                        <span>Keluar</span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    {{-- Guest Links --}}
                    <li class="nav-item">
                        <a class="nav-link px-4 py-2 rounded-3 fw-500" href="{{ route('login') }}"
                            style="color: #4a5568; transition: all 0.3s;">
                            Masuk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn text-white px-4 py-2 rounded-3 shadow-sm fw-500" href="{{ route('register') }}"
                            style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; transition: all 0.3s;">
                            Daftar Gratis
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

@push('styles')
    <style>
        .navbar-brand:hover {
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        .nav-link:hover {
            background: linear-gradient(135deg, #667eea10 0%, #764ba210 100%);
            color: #667eea !important;
        }

        .nav-link:hover i {
            color: #667eea !important;
        }

        .dropdown-item:hover {
            background: linear-gradient(135deg, #667eea10 0%, #764ba210 100%);
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        .input-group input:focus {
            box-shadow: none !important;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(102, 126, 234, 0.4) !important;
        }

        @media (max-width: 991.98px) {
            .navbar-nav {
                padding-top: 1rem;
                border-top: 1px solid #f0f0f0;
            }
        }
    </style>
@endpush