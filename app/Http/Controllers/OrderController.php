<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Services\MidtransService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Method untuk menampilkan detail order
    public function show(Order $order, MidtransService $midtrans)
{

    $order->load(['items','user']);

        $snapTokenn = null;
        if ($order->status === 'pending') {
            $snapToken = $midtrans->createSnapToken($order);
    }

    $order->load('items.product');
    
   
    return view('orders.show', compact('order', 'snapToken'));
}
    // Method lainnya...
}