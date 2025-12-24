{{-- resources/views/checkout/index.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4 py-5">
        <h1 class="h3 mb-4 text-gray-800">Checkout</h1>

        <div class="row">
            <form action="{{ route('checkout.store') }}" method="POST">
                @csrf
                <div class="row g-4">

                    {{-- Form Alamat --}}
                    <div class="col-lg-8">
                        <div class="card shadow-sm border-0 h-100">
                            <div class="card-header bg-white border-0 pb-0">
                                <h5 class="card-title mb-3">
                                    <i class="fas fa-map-marker-alt me-2 text-primary"></i>
                                    Informasi Pengiriman
                                </h5>
                            </div>
                            <div class="card-body pt-0">
                                @include('partials._errors')

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold text-dark">Nama Penerima <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="name" value="{{ old('name', auth()->user()->name ?? '') }}"
                                            class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Masukkan nama lengkap" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold text-dark">Nomor Telepon <span
                                                class="text-danger">*</span></label>
                                        <input type="tel" name="phone" value="{{ old('phone') }}"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            placeholder="08xxxxxxxxxx" required>
                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label fw-semibold text-dark">Alamat Lengkap <span
                                                class="text-danger">*</span></label>
                                        <textarea name="address" rows="4"
                                            class="form-control @error('address') is-invalid @enderror"
                                            placeholder="Jl. Contoh No. 123, Kelurahan, Kecamatan, Kota, Provinsi"
                                            required>{{ old('address') }}</textarea>
                                        @error('address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Order Summary --}}
                    <div class="col-lg-4">
                        <div class="card shadow-sm border-0 sticky-top" style="top: 20px;">
                            <div class="card-header bg-gradient-primary text-white border-0">
                                <h5 class="card-title mb-0">
                                    <i class="fas fa-receipt me-2"></i>
                                    Ringkasan Pesanan
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive" style="max-height: 300px;">
                                    <table class="table table-sm table-borderless mb-0">
                                        <tbody>
                                            @foreach($cart->items as $item)
                                                <tr>
                                                    <td class="text-sm">
                                                        <div class="d-flex align-items-center">
                                                            @if($item->product->image)
                                                                <img src="{{ $item->product->image }}" class="rounded me-2"
                                                                    width="40" alt="{{ $item->product->name }}">
                                                            @endif
                                                            <div>
                                                                <div class="fw-semibold text-dark">
                                                                    {{ Str::limit($item->product->name, 30) }}</div>
                                                                <small class="text-muted">x {{ $item->quantity }}</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end fw-semibold text-primary">
                                                        Rp
                                                        {{ number_format($item->subtotal ?? ($item->product->price * $item->quantity), 0, ',', '.') }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <hr class="my-3">

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <span class="h5 mb-0 fw-bold text-dark">Total</span>
                                    <span class="h4 mb-0 fw-bold text-primary">
                                        Rp
                                        {{ number_format($cart->total_price ?? $cart->items->sum(function ($item) {
        return $item->subtotal ?? ($item->product->price * $item->quantity); }), 0, ',', '.') }}
                                    </span>
                                </div>

                                <button type="submit" class="btn btn-primary w-100 btn-lg fw-semibold shadow-sm">
                                    <i class="fas fa-credit-card me-2"></i>
                                    Buat Pesanan
                                </button>

                                <div class="mt-3 text-center">
                                    <small class="text-muted">
                                        <i class="fas fa-lock me-1"></i>
                                        Pembayaran aman & terjamin
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .bg-gradient-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .sticky-top {
            position: sticky;
            top: 20px;
        }

        @media (max-width: 992px) {
            .sticky-top {
                position: relative;
                top: 0;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Format nomor telepon
            const phoneInput = document.querySelector('input[name="phone"]');
            if (phoneInput) {
                phoneInput.addEventListener('input', function (e) {
                    let value = e.target.value.replace(/\D/g, '');
                    if (value.startsWith('08')) {
                        value = '0' + value.substring(1);
                    }
                    e.target.value = value;
                });
            }
        });
    </script>
@endpush