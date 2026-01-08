@extends('layouts.app')

@section('title', $product->name . ' - Hijab Cantik & Syar\'i')

@section('content')

    <!-- Breadcrumb Modern -->
    <section class="bg-light-soft py-4 border-bottom">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"
                            class="text-decoration-none text-muted">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('catalog.index') }}"
                            class="text-decoration-none text-muted">Katalog</a></li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('catalog.index', ['category' => $product->category->slug]) }}"
                            class="text-decoration-none text-muted">
                            {{ $product->category->name }}
                        </a>
                    </li>
                    <li class="breadcrumb-item active fw-medium" aria-current="page">
                        {{ Str::limit($product->name, 40) }}
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <div class="container py-5">
        <div class="row g-5">

            <!-- Gallery Section (Left) -->
            <div class="col-lg-6">
                <div class="product-gallery shadow-lg rounded-4 overflow-hidden bg-white position-sticky"
                    style="top: 100px;">

                    <!-- Main Image with Zoom Effect -->
                    <div class="main-image-wrapper position-relative">
                        <img src="{{ $product->image_url }}" id="mainImage" class="img-fluid w-100 rounded-4 zoom-image"
                            alt="{{ $product->name }}"
                            style="object-fit: contain; background: linear-gradient(145deg, #fdf2f8, #fff);">

                        @if($product->has_discount)
                            <div class="discount-badge position-absolute top-0 start-0 m-4">
                                <span class="badge bg-danger fs-5 px-4 py-2 rounded-pill shadow">
                                    -{{ $product->discount_percentage }}%
                                </span>
                            </div>
                        @endif

                        @if($product->stock == 0)
                            <div
                                class="out-of-stock-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                                <div class="bg-dark bg-opacity-75 text-white px-5 py-4 rounded-4 text-center">
                                    <h4 class="mb-2">Stok Habis</h4>
                                    <p class="mb-0">Segera restock!</p>
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Thumbnail Gallery -->
                    @if($product->images->count() > 1)
                        <div class="thumbnails p-4 bg-white">
                            <div class="d-flex gap-3 overflow-auto pb-2">
                                @foreach($product->images as $image)
                                    <div class="thumb-item rounded-3 overflow-hidden border border-2 border-light shadow-sm cursor-pointer transition-all"
                                        onclick="changeMainImage('{{ asset('storage/' . $image->image_path) }}', this)">
                                        <img src="{{ asset('storage/' . $image->image_path) }}" alt="Thumbnail"
                                            class="w-100 h-100 object-fit-cover">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Product Info (Right) -->
            <div class="col-lg-6">
                <div class="product-info">

                    <!-- Category Badge -->
                    <a href="{{ route('catalog.index', ['category' => $product->category->slug]) }}"
                        class="badge bg-primary bg-opacity-10 text-primary px-4 py-2 rounded-pill mb-3 d-inline-block">
                        {{ $product->category->name }}
                    </a>

                    <!-- Title -->
                    <h1 class="fw-extrabold mb-3 display-5 lh-1">{{ $product->name }}</h1>

                    <!-- Price Area -->
                    <div class="price-area mb-4">
                        @if($product->has_discount)
                            <div class="original-price text-muted text-decoration-line-through fs-5">
                                {{ $product->formatted_original_price }}
                            </div>
                        @endif
                        <div class="current-price display-5 fw-bold text-primary">
                            {{ $product->formatted_price }}
                        </div>
                    </div>

                    <!-- Stock & Rating -->
                    <div class="d-flex align-items-center gap-4 mb-4">
                        <div>
                            @if($product->stock > 10)
                                <span class="badge bg-success px-4 py-2 fs-6">
                                    <i class="bi bi-check-circle-fill me-1"></i> Stok Tersedia
                                </span>
                            @elseif($product->stock > 0)
                                <span class="badge bg-warning text-dark px-4 py-2 fs-6">
                                    <i class="bi bi-exclamation-triangle-fill me-1"></i> Tinggal {{ $product->stock }}
                                </span>
                            @else
                                <span class="badge bg-danger px-4 py-2 fs-6">
                                    <i class="bi bi-x-circle-fill me-1"></i> Stok Habis
                                </span>
                            @endif
                        </div>

                        <div class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                            <span class="text-muted ms-2">(4.8)</span>
                        </div>
                    </div>

                    <!-- Add to Cart Form -->
                    <form action="{{ route('cart.add') }}" method="POST" class="mb-5">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                        <div class="row g-3 align-items-end">
                            <div class="col-auto">
                                <label class="form-label fw-medium">Jumlah</label>
                                <div class="input-group input-group-lg shadow-sm rounded-pill overflow-hidden"
                                    style="width: 160px;">
                                    <button type="button" class="btn btn-outline-secondary px-4"
                                        onclick="decrementQty()">−</button>
                                    <input type="number" name="quantity" id="quantity" value="1" min="1"
                                        max="{{ $product->stock }}"
                                        class="form-control text-center border-0 bg-white fw-bold fs-5">
                                    <button type="button" class="btn btn-outline-secondary px-4"
                                        onclick="incrementQty()">+</button>
                                </div>
                            </div>

                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill shadow-lg hover-lift"
                                    @if($product->stock == 0) disabled @endif>
                                    <i class="bi bi-cart-plus-fill me-2"></i>
                                    Tambah ke Keranjang
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Wishlist Button -->
                    @auth
                        <button type="button"
                            class="btn btn-outline-danger btn-lg w-100 rounded-pill mb-5 wishlist-btn-{{ $product->id }}"
                            onclick="toggleWishlist({{ $product->id }})">
                            <i class="bi {{ auth()->user()->hasInWishlist($product) ? 'bi-heart-fill' : 'bi-heart' }} me-2"></i>
                            {{ auth()->user()->hasInWishlist($product) ? 'Hapus dari Wishlist' : 'Tambah ke Wishlist' }}
                        </button>
                    @endauth

                    <!-- Description & Details -->
                    <div class="accordion accordion-flush" id="productDetails">
                        <div class="accordion-item border-0 shadow-sm mb-3 rounded-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#desc">
                                    Deskripsi Produk
                                </button>
                            </h2>
                            <div id="desc" class="accordion-collapse collapse show">
                                <div class="accordion-body text-muted">
                                    {!! nl2br(e($product->description)) !!}
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 shadow-sm rounded-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#detail">
                                    Detail Produk
                                </button>
                            </h2>
                            <div id="detail" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="row g-3 text-muted">
                                        <div class="col-6">
                                            <i class="bi bi-box me-2"></i> Berat: {{ $product->weight }} gram
                                        </div>
                                        <div class="col-6">
                                            <i class="bi bi-tag me-2"></i> SKU:
                                            PROD-{{ str_pad($product->id, 5, '0', STR_PAD_LEFT) }}
                                        </div>
                                        <div class="col-6">
                                            <i class="bi bi-calendar-event me-2"></i> Ditambahkan:
                                            {{ $product->created_at->format('d M Y') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@push('styles')
    <style>
        .bg-light-soft {
            background: #fdf2f8;
        }

        .zoom-image {
            transition: transform 0.6s ease;
        }

        .main-image-wrapper:hover .zoom-image {
            transform: scale(1.05);
        }

        .thumb-item {
            width: 90px;
            height: 90px;
            transition: all 0.3s ease;
        }

        .thumb-item:hover,
        .thumb-item.active {
            border-color: var(--bs-primary) !important;
            transform: scale(1.08);
        }

        .out-of-stock-overlay {
            background: rgba(0, 0, 0, 0.6);
            opacity: 0.9;
        }

        .discount-badge .badge {
            font-size: 1.4rem;
            box-shadow: 0 4px 15px rgba(220, 38, 38, 0.4);
        }

        .hover-lift:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(236, 72, 153, 0.25) !important;
        }

        .accordion-button:not(.collapsed) {
            background-color: #fdf2f8;
            color: var(--bs-primary);
        }
    </style>
@endpush

@push('scripts')
    <script>
        function changeMainImage(src, element) {
            document.getElementById('mainImage').src = src;
            document.querySelectorAll('.thumb-item').forEach(item => item.classList.remove('active'));
            element.classList.add('active');
        }

        function incrementQty() {
            const input = document.getElementById('quantity');
            const max = parseInt(input.max);
            if (parseInt(input.value) < max) {
                input.value = parseInt(input.value) + 1;
            }
        }

        function decrementQty() {
            const input = document.getElementById('quantity');
            if (parseInt(input.value) > 1) {
                input.value = parseInt(input.value) - 1;
            }
        }

        // Optional: Auto activate first thumbnail
        document.addEventListener('DOMContentLoaded', () => {
            const firstThumb = document.querySelector('.thumb-item');
            if (firstThumb) firstThumb.classList.add('active');
        });

        // Wishlist toggle (contoh sederhana - sesuaikan dengan AJAX Anda)
        function toggleWishlist(productId) {
            // Implementasi AJAX toggle wishlist di sini
            alert('Fitur wishlist akan diimplementasikan dengan AJAX!');
        }
    </script>
@endpush