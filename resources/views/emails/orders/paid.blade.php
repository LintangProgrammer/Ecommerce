{{-- resources/views/emails/orders/paid.blade.php --}}

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Diterima - {{ config('app.name') }}</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f4f4; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f4f4f4; padding:20px;">
        <tr>
            <td align="center">

                <!-- Main Container -->
                <table width="600" cellpadding="0" cellspacing="0" border="0" style="max-width:600px; background-color:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,0.1);">
                    
                    <!-- Header -->
                    <tr>
                        <td style="background-color:#0d6efd; padding:30px 40px; text-align:center; color:white;">
                            <h1 style="margin:0; font-size:28px; font-weight:600;">Pembayaran Diterima!</h1>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding:40px;">
                            <h2 style="margin-top:0; font-size:22px; color:#212529;">
                                Halo, {{ $order->user->name }}
                            </h2>

                            <p style="font-size:16px; line-height:1.6; color:#495057; margin-bottom:24px;">
                                Terima kasih! Pembayaran untuk pesanan 
                                <strong>#{{ $order->order_number }}</strong> 
                                telah kami terima.<br>
                                Kami sedang memproses pesanan Anda secepat mungkin.
                            </p>

                            <!-- Order Summary Table -->
                            <table width="100%" cellpadding="12" cellspacing="0" border="0" style="border-collapse:collapse; font-size:15px; color:#212529; margin:24px 0;">
                                <thead>
                                    <tr style="background-color:#e9ecef;">
                                        <th style="text-align:left; padding:12px; border-bottom:2px solid #dee2e6;">Produk</th>
                                        <th style="text-align:center; padding:12px; border-bottom:2px solid #dee2e6;">Qty</th>
                                        <th style="text-align:right; padding:12px; border-bottom:2px solid #dee2e6;">Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order->items as $item)
                                    <tr style="border-bottom:1px solid #dee2e6;">
                                        <td style="padding:12px;">{{ $item->product_name }}</td>
                                        <td style="text-align:center; padding:12px;">{{ $item->quantity }}</td>
                                        <td style="text-align:right; padding:12px;">
                                            Rp {{ number_format($item->price, 0, ',', '.') }}
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr style="font-weight:bold; background-color:#f8f9fa;">
                                        <td colspan="2" style="padding:12px; text-align:right;">Total</td>
                                        <td style="text-align:right; padding:12px;">
                                            Rp {{ number_format($order->total_amount, 0, ',', '.') }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- Button -->
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin:32px 0;">
                                <tr>
                                    <td align="center">
                                        <a href="{{ route('orders.show', $order) }}" 
                                           target="_blank"
                                           style="display:inline-block; background-color:#0d6efd; color:white; font-size:16px; font-weight:500; text-decoration:none; padding:14px 32px; border-radius:6px; box-shadow:0 2px 8px rgba(13,110,253,0.3);">
                                            Lihat Detail Pesanan
                                        </a>
                                    </td>
                                </tr>
                            </table>

                            <p style="font-size:15px; color:#6c757d; margin-top:32px; line-height:1.6;">
                                Jika ada pertanyaan, silakan balas email ini kapan saja.<br>
                                Kami siap membantu!
                            </p>

                            <p style="margin-top:40px; font-size:15px; color:#495057;">
                                Salam hangat,<br>
                                <strong>{{ config('app.name') }}</strong>
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color:#f8f9fa; padding:24px; text-align:center; font-size:14px; color:#6c757d; border-top:1px solid #dee2e6;">
                            © {{ date('Y') }} {{ config('app.name') }} • Semua hak dilindungi
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>

</body>
</html>