<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout()
    {
        $carts = Cart::with('product')
                    ->where('user_id', Auth::id())
                    ->get();

        if ($carts->isEmpty()) {
            return redirect()->back()->with('error', 'Keranjang kosong!');
        }

        $total = 0;

        foreach ($carts as $cart) {
            $total += $cart->product->price * $cart->quantity;
        }

        $order = Order::create([
            'user_id' => Auth::id(),
            'total' => $total,
            'status' => 'Diproses'
        ]);

       foreach ($carts as $cart) {

foreach ($carts as $cart) {

    OrderItem::create([
        'order_id' => $order->id,
        'product_id' => $cart->product_id,
        'quantity' => $cart->quantity,
        'price' => $cart->product->price
    ]);

    // Kurangi stok produk
    $product = $cart->product;
    $product->stock -= $cart->quantity;
    $product->save();

}
 }

        Cart::where('user_id', Auth::id())->delete();

        return redirect()->route('marketplace')
            ->with('success', 'Pesanan berhasil dibuat!');
    }
    public function index()
{
    $orders = Order::where('user_id', auth()->id())
                    ->latest()
                    ->get();

    return view('orders.index', compact('orders'));
}

}