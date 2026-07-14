<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index()
    {$orders = Order::with('user','items.product')
                        ->latest()
                        ->get();

        return view('admin.orders.index', compact('orders'));
    }

    public function update(Order $order)
    {
        $order->update([
            'status' => 'Selesai'
        ]);

        return back()->with('success', 'Status pesanan berhasil diperbarui.');
    }
}