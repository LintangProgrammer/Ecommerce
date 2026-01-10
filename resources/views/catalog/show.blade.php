@extends('layouts.app')

@section('title', $product->name . ' - Hijab Collection')

@section('content')

    {{-- ===================== Breadcrumb ===================== --}}
    <section class="bg-light-soft py-3 border-bottom">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}" class="text-muted text-decoration-none">Beranda</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('catalog.index') }}" class="text-muted text-decoration-none">Katalog</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('catalog.index', ['category' => $product->category->slug]) }}"
                            class="text-muted text-decoration-none">
                            {{ $product->category->name }}
                        </a>
                    </li>
                    <li class="breadcrumb-item active fw-semibold">
                        {{ Str::limit($product->name, 40) }}
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <div class="container py-5">
        <div class="row g-5">

            {{-- ===================== IMAGE ===================== --}}
            <div class="col-lg-6">
                <div class="bg-white rounded-4 shadow-sm p-4 position-sticky" style="top: 90px;">
                    <img src="{{ $product->image_url }}" id="mainImage" class="img-fluid w-100 rounded-3"
                        style="height: 420px; object-fit: contain; background:#fdf2f8" alt="{{ $product->name }}">

                    @if($product->has_discount)
                        <span class="badge bg-danger position-absolute top-0 start-0 m-4 fs-6 px-3 py-2 rounded-pill">
                            -{{ $product->discount_percentage }}%
                        </span>
                    @endif
                </div>
            </div>

            {{-- ===================== INFO ===================== --}}
            <div class="col-lg-6">
                <div class="product-info">

                    {{-- Category --}}
                    <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-2 mb-3">
                        {{ $product->category->name }}
                    </span>

                    {{-- Title --}}
                    <h1 class="fw-bold mb-3">{{ $product->name }}</h1>

                    {{-- Price --}}
                    @if($product->has_discount)
                        <div class="text-muted text-decoration-line-through fs-5">
                            {{ $product->formatted_original_price }}
                        </div>
                    @endif
                    <div class="fs-1 fw-bold text-primary mb-4">
                        {{ $product->formatted_price }}
                    </div>

                    {{-- Stock --}}
                    <div class="mb-4">
                        @if($product->stock > 10)
                            <span class="badge bg-success px-3 py-2">Stok Tersedia</span>
                        @elseif($product->stock > 0)
                            <span class="badge bg-warning text-dark px-3 py-2">
                                Tinggal {{ $product->stock }}
                            </span>
                        @else
                            <span class="badge bg-danger px-3 py-2">Stok Habis</span>
                        @endif
                    </div>

                    {{-- ===================== ADD TO CART ===================== --}}
                    <form action="{{ route('cart.add') }}" method="POST" class="mb-4">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                        <div class="row g-3 align-items-center">
                            {{-- JUMLAH (FIXED, TIDAK HILANG) --}}
                            <div class="col-auto">
                                <label class="fw-semibold mb-2">Jumlah</label>

                                <div class="d-flex align-items-center border rounded-pill px-2 shadow-sm"
                                    style="height: 48px; width: 150px; background:#fff">

                                    

                                    <input type="number" id="quantity" name="quantity" value="1" min="1"
                                        max="{{ $product->stock }}" class="border-0 text-center fw-bold"
                                        style="width:60px; outline:none;">
                                </div>
                            </div>

                            {{-- BUTTON --}}
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill"
                                    @if($product->stock == 0) disabled @endif>
                                    <i class="bi bi-cart-plus-fill me-2"></i>
                                    Tambah ke Keranjang
                                </button>
                            </div>
                        </div>
                    </form>

                    {{-- Wishlist --}}
                    @auth
                        <button class="btn btn-outline-danger w-100 rounded-pill mb-4"
                            onclick="toggleWishlist({{ $product->id }})">
                            <i class="bi bi-heart me-2"></i> Tambah ke Wishlist
                        </button>
                    @endauth

                    {{-- Description --}}
                    <hr>
                    <h5 class="fw-semibold">Deskripsi Produk</h5>
                    <p class="text-muted">{!! nl2br(e($product->description)) !!}</p>

                </div>
            </div>

        </div>
    </div>

@endsection

{{-- ===================== SCRIPT ===================== --}}
@push('scripts')
<script>
    function incrementQty() {
        const input = document.getElementById('quantity');
        const max = parseInt(input.max);
        if (parseInt(input.value) < max) {
            input.value++;
        }
    }

    function decrementQty() {