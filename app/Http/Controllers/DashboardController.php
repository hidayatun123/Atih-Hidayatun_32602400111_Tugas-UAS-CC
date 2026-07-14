<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Fertilizer;
use App\Models\Order;
use App\Models\Consultation;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'totalProducts' => Product::count(),
            'totalFertilizers' => Fertilizer::count(),
            'totalOrders' => Order::count(),
            'totalConsultations' => Consultation::count(),
            'pendingConsultations' => Consultation::where('status','pending')->count(),
        ]);
    }
}