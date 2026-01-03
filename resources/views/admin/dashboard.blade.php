@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="bi bi-download text-white-50"></i> Generate Report
            </a>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Sales Overview Card -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Sales Overview</h6>
                        <div class="dropdown no-arrow">
                            <select class="form-control form-control-sm">
                                <option>March 2023</option>
                                <option>April 2023</option>
                                <option>May 2023</option>
                                <option>June 2023</option>
                            </select>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <div id="chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Yearly Breakup -->
                        <div class="card overflow-hidden">
                            <div class="card-body p-4">
                                <h5 class="card-title mb-9 fw-semibold">Yearly Breakup</h5>
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="fw-semibold mb-3">$36,358</h4>
                                        <div class="d-flex align-items-center mb-3">
                                            <span
                                                class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-arrow-up-left text-success"></i>
                                            </span>
                                            <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                                            <p class="fs-3 mb-0">last year</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="me-4">
                                                <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                                                <span class="fs-2">2023</span>
                                            </div>
                                            <div>
                                                <span
                                                    class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                                                <span class="fs-2">2023</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex justify-content-center">
                                            <div id="breakup"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- Monthly Earnings -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row alig n-items-start">
                                    <div class="col-8">
                                        <h5 class="card-title mb-9 fw-semibold"> Monthly Earnings </h5>
                                        <h4 class="fw-semibold mb-3">$6,820</h4>
                                        <div class="d-flex align-items-center pb-1">
                                            <span
                                                class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-arrow-down-right text-danger"></i>
                                            </span>
                                            <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                                            <p class="fs-3 mb-0">last year</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex justify-content-end">
                                            <div
                                                class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-currency-dollar fs-6"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="earning"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <h5 class="card-title fw-semibold">Recent Transactions</h5>
                        </div>
                        <ul class="timeline-widget mb-0 position-relative mb-n5">
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time text-dark flex-shrink-0 text-end">09:30</div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n1">Payment received from John Doe
                                    of $385.90</div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time text-dark flex-shrink-0 text-end">10:00 am</div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge border-2 border border-info flex-shrink-0 my-8"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New sale recorded <a
                                        href="javascript:void(0)" class="text-primary d-block fw-normal">#ML-3467</a>
                                </div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n1">Payment was made of $64.95 to
                                    Michael</div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New sale recorded <a
                                        href="javascript:void(0)" class="text-primary d-block fw-normal">#ML-3467</a>
                                </div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New arrival recorded
                                </div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n1">Payment Done</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5>
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 align-middle">
                                <thead class="text-dark fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Id</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Assigned</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Name</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Priority</h6>
                                        </th>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">Budget</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">1</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                                            <span class="fw-normal">Web Designer</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">Elite Admin</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="badge bg-primary rounded-3 fw-semibold">Low</span>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0 fs-4">$3.9</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">2</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1">Andrew McDownland</h6>
                                            <span class="fw-normal">Project Manager</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">Real Homes WP Theme</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="badge bg-secondary rounded-3 fw-semibold">Medium</span>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0 fs-4">$24.5k</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">3</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1">Christopher Jamil</h6>
                                            <span class="fw-normal">Project Manager</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">MedicalPro WP Theme</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="badge bg-danger rounded-3 fw-semibold">High</span>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0 fs-4">$12.8k</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">4</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1">Nirav Joshi</h6>
                                            <span class="fw-normal">Frontend Engineer</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">Hosting Press HTML</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="badge bg-success rounded-3 fw-semibold">Critical</span>
                                            </div>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0 fs-4">$2.4k</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-xl-3">
                <div class="card overflow-hidden rounded-2">
                    <div class="position-relative">
                        <a href="javascript:void(0)"><img src="../assets/images/products/s4.jpg"
                                class="card-img-top rounded-0" alt="..."></a>
                        <a href="javascript:void(0)"
                            class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                                class="ti ti-basket fs-4"></i></a>
                    </div>
                    <div class="card-body pt-3 p-4">
                        <h6 class="fw-semibold fs-4">Boat Headphone</h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="fw-semibold fs-4 mb-0">$50 <span
                                    class="ms-2 fw-normal text-muted fs-3"><del>$65</del></span></h6>
                            <ul class="list-unstyled d-flex align-items-center mb-0">
                                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                                </li>
                                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                                </li>
                                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                                </li>
                                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                                </li>
                                <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card overflow-hidden rounded-2">
                    <div class="position-relative">
                        <a href="javascript:void(0)"><img src="../assets/images/products/s5.jpg"
                                class="card-img-top rounded-0" alt="..."></a>
                        <a href="javascript:void(0)"
                            class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                                class="ti ti-basket fs-4"></i></a>
                    </div>
                    <div class="card-body pt-3 p-4">
                        <h6 class="fw-semibold fs-4">MacBook Air Pro</h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="fw-semibold fs-4 mb-0">$650 <span
                                    class="ms-2 fw-normal text-muted fs-3"><del>$900</del></span></h6>
                            <ul class="list-unstyled d-flex align-items-center mb-0">
                                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                                </li>
                                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                                </li>
                                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                                </li>
                                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                                </li>
                                <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card overflow-hidden rounded-2">
                    <div class="position-relative">
                        <a href="javascript:void(0)"><img src="../assets/images/products/s7.jpg"
                                class="card-img-top rounded-0" alt="..."></a>
                        <a href="javascript:void(0)"
                            class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                                class="ti ti-basket fs-4"></i></a>
                    </div>
                    <div class="card-body pt-3 p-4">
                        <h6 class="fw-semibold fs-4">Red Valvet Dress</h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="fw-semibold fs-4 mb-0">$150 <span
                                    class="ms-2 fw-normal text-muted fs-3"><del>$200</del></span></h6>
                            <ul class="list-unstyled d-flex align-items-center mb-0">
                                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                                </li>
                                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                                </li>
                                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                                </li>
                                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                                </li>
                                <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card overflow-hidden rounded-2">
                    <div class="position-relative">
                        <a href="javascript:void(0)"><img src="../assets/images/products/s11.jpg"
                                class="card-img-top rounded-0" alt="..."></a>
                        <a href="javascript:void(0)"
                            class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                                class="ti ti-basket fs-4"></i></a>
                    </div>
                    <div class="card-body pt-3 p-4">
                        <h6 class="fw-semibold fs-4">Cute Soft Teddybear</h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="fw-semibold fs-4 mb-0">$285 <span
                                    class="ms-2 fw-normal text-muted fs-3"><del>$345</del></span></h6>
                            <ul class="list-unstyled d-flex align-items-center mb-0">
                                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                                </li>
                                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                                </li>
                                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                                </li>
                                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a>
                                </li>
                                <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection{{-- ================================================
FILE: resources/views/admin/dashboard.blade.php
FUNGSI: Dashboard admin dengan statistik
================================================ --}}

@extends('layouts.admin')

@section('title', 'Dashboard')
@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
    {{-- Stats Cards --}}
    {{-- Data $stats dikirim dari Admin/DashboardController --}}
    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-muted mb-1">Total Pendapatan</p>
                            <h4 class="mb-0">Rp {{ number_format($stats['total_revenue'], 0, ',', '.') }}</h4>
                        </div>
                        <div class="bg-success bg-opacity-10 rounded p-3">
                            <i class="bi bi-currency-dollar text-success fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-muted mb-1">Total Pesanan</p>
                            <h4 class="mb-0">{{ $stats['total_orders'] }}</h4>
                        </div>
                        <div class="bg-primary bg-opacity-10 rounded p-3">
                            <i class="bi bi-bag text-primary fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-muted mb-1">Perlu Diproses</p>
                            <h4 class="mb-0">{{ $stats['pending_orders'] }}</h4>
                        </div>
                        <div class="bg-warning bg-opacity-10 rounded p-3">
                            <i class="bi bi-clock text-warning fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-muted mb-1">Stok Menipis</p>
                            <h4 class="mb-0">{{ $stats['low_stock'] }}</h4>
                        </div>
                        <div class="bg-danger bg-opacity-10 rounded p-3">
                            <i class="bi bi-exclamation-triangle text-danger fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        {{-- Recent Orders --}}
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Pesanan Terbaru</h5>
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-sm btn-outline-primary">
                        Lihat Semua
                    </a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>No. Order</th>
                                    <th>Customer</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentOrders as $order)
                                    <tr>
                                        <td>
                                            <a href="{{ route('admin.orders.show', $order) }}">
                                                #{{ $order->order_number }}
                                            </a>
                                        </td>
                                        <td>{{ $order->user->name }}</td>
                                        <td>Rp {{ number_format($order->total_amount, 0, ',', '.') }}</td>
                                        <td>
                                            <span class="badge bg-{{ $order->status_color }}">
                                                {{ ucfirst($order->status) }}
                                            </span>
                                        </td>
                                        <td>{{ $order->created_at->format('d M Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- Quick Actions --}}
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0">Aksi Cepat</h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
                            <i class="bi bi-plus-circle me-2"></i> Tambah Produk
                        </a>
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-primary">
                            <i class="bi bi-folder-plus me-2"></i> Kelola Kategori
                        </a>
                        <a href="{{ route('admin.reports.sales') }}" class="btn btn-outline-primary">
                            <i class="bi bi-file-earmark-bar-graph me-2"></i> Lihat Laporan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection