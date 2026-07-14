<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::with('product')
                    ->where('user_id', Auth::id())
                    ->get();

        return view('cart.index', compact('carts'));
    }

    public function store(Request $request)
    {
        $cart = Cart::where('user_id', Auth::id())
                    ->where('product_id', $request->product_id)
                    ->first();

        if ($cart) {

            $cart->increment('quantity');

        } else {

            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
                'quantity' => 1
            ]);

        }

        return back()->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();

        return back()->with('success', 'Produk dihapus dari keranjang.');
    }
}