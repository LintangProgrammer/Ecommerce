@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
    <div class="container-fluid py-4">

        {{-- Header Dashboard --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold mb-0">Ringkasan Bisnis</h3>
                <p class="text-muted">Selamat datang kembali, berikut adalah performa toko Anda hari ini.</p>
            </div>
            <button class="btn btn-white shadow-sm border-0 px-3 py-2 rounded-3">
                <i class="bi bi-calendar3 me-2"></i> {{ date('d M Y') }}
            </button>
        </div>

        {{-- 1. Stats Cards Grid --}}
        <div class="row g-4 mb-4">
            {{-- Revenue Card --}}
            <div class="col-sm-6 col-xl-3">
                <div class="card border-0 shadow-sm rounded-4 h-100 stat-card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-muted text-uppercase fw-bold mb-2"
                                    style="font-size: 0.75rem; letter-spacing: 1px;">Total Pendapatan</p>
                                <h3 class="fw-bold mb-0">Rp {{ number_format($stats['total_revenue'], 0, ',', '.') }}</h3>
                            </div>
                            <div class="icon-shape bg-success-soft text-success rounded-3">
                                <i class="bi bi-currency-dollar fs-4"></i>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="text-success small fw-bold"><i class="bi bi-arrow-up"></i> +12%</span>
                            <span class="text-muted small ms-1">dari bulan lalu</span>
                        </div>
                    </div>
                    <div class="progress-thin bg-success"></div>
                </div>
            </div>

            {{-- Pending Orders --}}
            <div class="col-sm-6 col-xl-3">
                <div class="card border-0 shadow-sm rounded-4 h-100 stat-card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-muted text-uppercase fw-bold mb-2"
                                    style="font-size: 0.75rem; letter-spacing: 1px;">Perlu Diproses</p>
                                <h3 class="fw-bold mb-0 text-warning">{{ $stats['pending_orders'] }}</h3>
                            </div>
                            <div class="icon-shape bg-warning-soft text-warning rounded-3">
                                <i class="bi bi-clock-history fs-4"></i>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('admin.orders.index') }}"
                                class="text-decoration-none small text-warning fw-bold">Cek Pesanan &rarr;</a>
                        </div>
                    </div>
                    <div class="progress-thin bg-warning"></div>
                </div>
            </div>

            {{-- Low Stock --}}
            <div class="col-sm-6 col-xl-3">
                <div class="card border-0 shadow-sm rounded-4 h-100 stat-card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-muted text-uppercase fw-bold mb-2"
                                    style="font-size: 0.75rem; letter-spacing: 1px;">Stok Menipis</p>
                                <h3 class="fw-bold mb-0 text-danger">{{ $stats['low_stock'] }}</h3>
                            </div>
                            <div class="icon-shape bg-danger-soft text-danger rounded-3">
                                <i class="bi bi-box-seam fs-4"></i>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="text-muted small">Segera restock produk</span>
                        </div>
                    </div>
                    <div class="progress-thin bg-danger"></div>
                </div>
            </div>

            {{-- Total Products --}}
            <div class="col-sm-6 col-xl-3">
                <div class="card border-0 shadow-sm rounded-4 h-100 stat-card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="text-muted text-uppercase fw-bold mb-2"
                                    style="font-size: 0.75rem; letter-spacing: 1px;">Total Produk</p>
                                <h3 class="fw-bold mb-0 text-primary">{{ $stats['total_products'] }}</h3>
                            </div>
                            <div class="icon-shape bg-primary-soft text-primary rounded-3">
                                <i class="bi bi-grid fs-4"></i>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="text-muted small">Produk aktif di katalog</span>
                        </div>
                    </div>
                    <div class="progress-thin bg-primary"></div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            {{-- 2. Revenue Chart --}}
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-header bg-white border-0 py-4 px-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="fw-bold mb-0">Grafik Penjualan</h5>
                            <span class="badge bg-light text-primary rounded-pill px-3">7 Hari Terakhir</span>
                        </div>
                    </div>
                    <div class="card-body px-4 pb-4">
                        <div style="height: 300px;">
                            <canvas id="revenueChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 3. Recent Orders --}}
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-header bg-white border-0 py-4 px-4">
                        <h5 class="fw-bold mb-0">Pesanan Terbaru</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            @foreach($recentOrders as $order)
                                <div
                                    class="list-group-item d-flex justify-content-between align-items-center px-4 py-3 border-0 border-bottom border-light">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="avatar-sm bg-light rounded-circle me-3 d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person text-muted"></i>
                                        </div>
                                        <div>
                                            <div class="fw-bold text-dark mb-0">#{{ $order->order_number }}</div>
                                            <small class="text-muted">{{ Str::limit($order->user->name, 15) }}</small>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <div class="fw-bold text-dark">Rp{{ number_format($order->total_amount, 0, ',', '.') }}
                                        </div>
                                        <span
                                            class="badge rounded-pill {{ $order->payment_status == 'paid' ? 'bg-success-soft text-success' : 'bg-secondary-soft text-secondary' }}"
                                            style="font-size: 0.7rem;">
                                            {{ strtoupper($order->status) }}
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0 text-center py-4">
                        <a href="{{ route('admin.orders.index') }}"
                            class="btn btn-outline-primary btn-sm rounded-pill px-4">
                            Lihat Semua Pesanan
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- 4. Top Selling Products --}}
        <div class="card border-0 shadow-sm rounded-4 mt-4 mb-5">
            <div class="card-header bg-white border-0 py-4 px-4 d-flex justify-content-between align-items-center">
                <h5 class="fw-bold mb-0">Produk Terlaris</h5>
                <i class="bi bi-star-fill text-warning"></i>
            </div>
            <div class="card-body px-4 pb-4">
                <div class="row g-4">
                    @foreach($topProducts as $product)
                        <div class="col-6 col-md-3 col-lg-2 text-center">
                            <div class="product-mini-card p-3 rounded-4 border border-light transition h-100">
                                <div class="position-relative mb-3">
                                    <img src="{{ $product->image_url }}" class="img-fluid rounded-3 shadow-sm"
                                        style="height: 120px; width: 100%; object-fit: cover;">
                                </div>
                                <h6 class="text-truncate fw-bold mb-1" title="{{ $product->name }}">{{ $product->name }}</h6>
                                <div class="badge bg-light text-primary rounded-pill mb-0 small">{{ $product->sold }} terjual
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Styling Dasar & Soft UI */
        body {
            background-color: #f8f9fa;
        }

        .stat-card {
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .icon-shape {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Soft Colors */
        .bg-primary-soft {
            background-color: rgba(102, 126, 234, 0.1);
        }

        .bg-success-soft {
            background-color: rgba(40, 167, 69, 0.1);
        }

        .bg-warning-soft {
            background-color: rgba(255, 193, 7, 0.1);
        }

        .bg-danger-soft {
            background-color: rgba(220, 53, 69, 0.1);
        }

        .bg-secondary-soft {
            background-color: rgba(108, 117, 125, 0.1);
        }

        /* Progress decoration */
        .progress-thin {
            height: 4px;
            width: 100%;
            position: absolute;
            bottom: 0;
            left: 0;
            opacity: 0.6;
        }

        /* Product card hover */
        .product-mini-card:hover {
            background-color: #fff;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            border-color: transparent !important;
            transform: scale(1.03);
        }

        .transition {
            transition: all 0.3s ease;
        }

        /* Chart labels */
        canvas#revenueChart {
            filter: drop-shadow(0px 10px 10px rgba(102, 126, 234, 0.1));
        }
    </style>

    {{-- Script Chart.js --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('revenueChart').getContext('2d');

        // Create Gradient for Chart
        const gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(102, 126, 234, 0.4)');
        gradient.addColorStop(1, 'rgba(102, 126, 234, 0)');

        const labels = {!! json_encode($revenueChart->pluck('date')) !!};
        const data = {!! json_encode($revenueChart->pluck('total')) !!};

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Pendapatan',
                    data: data,
                    borderColor: '#667eea',
                    backgroundColor: gradient,
                    borderWidth: 3,
                    tension: 0.4,
                    fill: true,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#667eea',
                    pointBorderWidth: 2,
                    pointRadius: 5,
                    pointHoverRadius: 7
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        padding: 12,
                        backgroundColor: '#1e293b',
                        titleFont: { size: 14 },
                        bodyFont: { size: 14 },
                        callbacks: {
                            label: function (context) {
                                return ' Rp ' + new Intl.NumberFormat('id-ID').format(context.raw);
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: { display: true, color: '#f1f5f9' },
                        ticks: {
                            callback: function (value) {
                                return 'Rp' + new Intl.NumberFormat('id-ID', { notation: "compact" }).format(value);
                            }
                        }
                    },
                    x: { grid: { display: false } }
                }
            }
        });
    </script>
@endsection