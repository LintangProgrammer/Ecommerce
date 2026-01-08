@extends('layouts.app')

@section('title', 'Katalog Hijab & Pashmina Cantik')

@section('content')

<!-- Breadcrumb + Search Bar -->
<section class="bg-light-soft py-4 border-bottom">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none text-muted">Beranda</a></li>
                        <li class="breadcrumb-item active fw-medium" aria-current="page">Katalog</li>
                    </ol>
                </nav>
            </div>

            <div class="col-md-6">
                <form action="{{ route('catalog.index') }}" method="GET" class="position-relative">
                    <input type="text" name="q" class="form-control form-control-lg rounded-pill ps-5 pe-5 shadow-sm"
                           placeholder="Cari hijab, pashmina, warna, motif..." value="{{ request('q') }}">
                    <button type="submit" class="btn btn-link position-absolute top-50 start-0 translate-middle-y ps-4">
                        <i class="bi bi-search text-muted"></i>
                    </button>
                    @if(request('q'))
                        <a href="{{ route('catalog.index') }}" class="btn btn-link position-absolute top-50 end-0 translate-middle-y pe-4 text-muted">
                            <i class="bi bi-x-lg"></i>
                        </a>
                    @endif
                </form>
            </div>
        </div>
    </div>
</section>

<div class="container py-5">
    <div class="row g-4">

        <!-- SIDEBAR FILTER - Warna Ungu seperti Navbar -->
        <div class="col-lg-3">
            <div class="sticky-top" style="top: 100px;">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="card-header bg-gradient-purple text-white d-flex align-items-center justify-content-between py-4">
                        <h5 class="mb-0 fw-bold">
                            <i class="bi bi-funnel me-2"></i> Filter Produk
                        </h5>
                        @if(request()->hasAny(['category', 'min_price', 'max_price', 'on_sale', 'q']))
                            <a href="{{ route('catalog.index') }}" class="btn btn-sm btn-light rounded-pill px-3">
                                Reset
                            </a>
                        @endif
                    </div>

                    <div class="card-body p-4">
                        <form action="{{ route('catalog.index') }}" method="GET" id="filter-form">

                            <!-- Kategori -->
                            <div class="mb-5">
                                <h6 class="fw-bold mb-3 text-dark">Kategori</h6>
                                <div class="category-filter-list">
                                    @foreach($categories as $category)
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio"
                                                   name="category" id="cat-{{ $category->slug }}"
                                                   value="{{ $category->slug }}"
                                                   {{ request('category') == $category->slug ? 'checked' : '' }}
                                                   onchange="this.form.submit()">
                                            <label class="form-check-label d-flex justify-content-between align-items-center"
                                                   for="cat-{{ $category->slug }}">
                                                <span>{{ $category->name }}</span>
                                                <span class="badge bg-purple bg-opacity-20 text-purple rounded-pill">
                                                    {{ $category->products_count }}
                                                </span>
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Rentang Harga -->
                            <div class="mb-5">
                                <h6 class="fw-bold mb-3 text-dark">Rentang Harga</h6>
                                <div class="input-group input-group-sm mb-2">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" name="min_price" class="form-control"
                                           placeholder="Min" value="{{ request('min_price') }}">
                                </div>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" name="max_price" class="form-control"
                                           placeholder="Max" value="{{ request('max_price') }}">
                                </div>
                                <button type="submit" class="btn btn-purple btn-sm w-100 mt-3 rounded-pill text-white">
                                    Terapkan Filter Harga
                                </button>
                            </div>

                            <!-- Promo & Diskon -->
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="on_sale" id="on_sale"
                                           value="1" {{ request('on_sale') ? 'checked' : '' }}
                                           onchange="this.form.submit()">
                                    <label class="form-check-label fw-medium" for="on_sale">
                                        <i class="bi bi-fire text-danger me-1"></i>
                                        Sedang Diskon
                                    </label>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- MAIN CONTENT -->
        <div class="col-lg-9">

            <!-- Header & Sorting -->
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4 mb-5">
                <div>
                    <h3 class="fw-bold mb-1">
                        @if(request('q'))
                            Hasil Pencarian: <span class="text-purple">"{{ request('q') }}"</span>
                        @elseif(request('category'))
                            {{ $categories->firstWhere('slug', request('category'))?->name ?? 'Kategori' }}
                        @else
                            Semua Koleksi Hijab
                        @endif
                    </h3>
                    <p class="text-muted mb-0">{{ $products->total() }} produk ditemukan</p>
                </div>

                <div class="d-flex align-items-center gap-3">
                    <label class="text-muted text-nowrap mb-0">Urutkan:</label>
                    <select class="form-select rounded-pill shadow-sm" style="width: 220px;"
                            onchange="window.location.href = this.value">
                        <option value="{{ request()->fullUrlWithQuery(['sort' => 'newest']) }}"
                                {{ request('sort', 'newest') == 'newest' ? 'selected' : '' }}>Terbaru</option>
                        <option value="{{ request()->fullUrlWithQuery(['sort' => 'price_asc']) }}"
                                {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Harga Rendah → Tinggi</option>
                        <option value="{{ request()->fullUrlWithQuery(['sort' => 'price_desc']) }}"
                                {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Harga Tinggi → Rendah</option>
                        <option value="{{ request()->fullUrlWithQuery(['sort' => 'name_asc']) }}"
                                {{ request('sort') == 'name_asc' ? 'selected' : '' }}>Nama A → Z</option>
                    </select>
                </div>
            </div>

            <!-- Product Grid -->
            @if($products->count())
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
                    @foreach($products as $product)
                        <div class="col">
                            @include('partials.product-card', ['product' => $product])
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-5">
                    {{ $products->appends(request()->query())->links('pagination::bootstrap-5') }}
                </div>
            @else
                <!-- Empty State -->
                <div class="text-center py-5 my-5">
                    <div class="mb-4">
                        <i class="bi bi-emoji-frown display-1 text-muted"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Waduh... Produk tidak ditemukan</h4>
                    <p class="text-muted mb-4">Coba ubah kata kunci, filter, atau hapus filter yang sedang aktif</p>
                    <a href="{{ route('catalog.index') }}" class="btn btn-purple btn-lg rounded-pill px-5 text-white">
                        Lihat Semua Koleksi
                    </a>
                </div>
            @endif

        </div>
    </div>
</div>

@endsection

@push('styles')
<style>
    .bg-light-soft {
        background-color: #f8f5ff; /* sangat soft purple */
    }

    .bg-gradient-purple {
        background: linear-gradient(135deg, #7c3aed 0%, #a78bfa 100%);
    }

    .btn-purple {
        background-color: #7c3aed;
        border-color: #7c3aed;
    }

    .btn-purple:hover {
        background-color: #6d28d9;
        border-color: #6d28d9;
    }

    .text-purple {
        color: #7c3aed !important;
    }

    .badge.bg-purple {
        background-color: #7c3aed !important;
    }

    .badge.bg-opacity-20 {
        background-color: rgba(124, 58, 237, 0.15) !important;
    }

    .category-filter-list .form-check-input:checked + .form-check-label {
        color: #7c3aed;
        font-weight: 600;
    }

    .sticky-top {
        z-index: 990;
    }

    /* Pagination */
    .pagination .page-item.active .page-link {
        background-color: #7c3aed;
        border-color: #7c3aed;
    }
</style>
@endpush