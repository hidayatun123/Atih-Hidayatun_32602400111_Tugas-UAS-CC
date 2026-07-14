@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="hero">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <h1>
                    Pertanian Modern<br>
                    dengan <span class="text-success">AgriSmart</span>
                </h1>

                <p class="mt-4">
                    Platform digital yang menghubungkan petani, pembeli,
                    dan teknologi cloud untuk mendukung pertanian Indonesia.
                </p>

                <a href="#" class="btn btn-success btn-lg mt-3">
                    Mulai Sekarang
                </a>

            </div>

            <div class="col-lg-6 text-center">

                <img src="https://images.unsplash.com/photo-1500937386664-56d1dfef3854?w=900"
                     class="img-fluid rounded shadow">

            </div>

        </div>

    </div>
</section>

<!-- FITUR -->
<section class="py-5">

<div class="container">

<h2 class="section-title">
Fitur AgriSmart
</h2>

<div class="row">

<div class="col-md-4 mb-4">

<div class="card p-4 text-center h-100">

<h3>🌾</h3>

<h4>Marketplace</h4>

<p>

Menjual dan membeli hasil panen secara langsung.

</p>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card p-4 text-center h-100">

<h3>☁️</h3>

<h4>Cloud Storage</h4>

<p>

Penyimpanan gambar produk menggunakan LocalStack S3.

</p>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card p-4 text-center h-100">

<h3>🤖</h3>

<h4>Smart Recommendation</h4>

<p>

Rekomendasi produk terbaik berdasarkan data.

</p>

</div>

</div>

</div>

</div>

</section>

<!-- STATISTIK -->
<section class="py-5 bg-light">

<div class="container">

<div class="row text-center">

<div class="col-md-3">

<h2 class="text-success">500+</h2>

<p>Petani</p>

</div>

<div class="col-md-3">

<h2 class="text-success">1500+</h2>

<p>Produk</p>

</div>

<div class="col-md-3">

<h2 class="text-success">1000+</h2>

<p>Pembeli</p>

</div>

<div class="col-md-3">

<h2 class="text-success">34</h2>

<p>Provinsi</p>

</div>

</div>

</div>

</section>

@endsection