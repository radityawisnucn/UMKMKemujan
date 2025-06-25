@extends('layouts.app')

@section('title', 'Beranda - UMKM Karimun Jawa')

@section('content')
<!-- Hero Section -->
<section class="hero-section bg-primary text-white py-5" style="background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);">
    <div class="container">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">
                    Temukan Produk UMKM <br>
                    <span class="text-warning">Karimun Jawa</span>
                </h1>
                <p class="lead mb-4">
                    Jelajahi kekayaan produk lokal dari Kepulauan Karimun Jawa. 
                    Dukung ekonomi lokal dengan membeli produk berkualitas dari UMKM terpercaya.
                </p>

            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('images/hero-karimunjawa.jpg') }}" alt="Karimun Jawa" class="img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Statistik Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <i class="fas fa-store text-primary fa-3x mb-3"></i>
                        <h3 class="fw-bold text-primary">150+</h3>
                        <p class="text-muted">UMKM Terdaftar</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <i class="fas fa-box text-success fa-3x mb-3"></i>
                        <h3 class="fw-bold text-success">500+</h3>
                        <p class="text-muted">Produk Tersedia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <i class="fas fa-map-marker-alt text-warning fa-3x mb-3"></i>
                        <h3 class="fw-bold text-warning">25+</h3>
                        <p class="text-muted">Lokasi Wisata</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <i class="fas fa-users text-info fa-3x mb-3"></i>
                        <h3 class="fw-bold text-info">1000+</h3>
                        <p class="text-muted">Wisatawan/Bulan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Kategori Produk Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Kategori Produk UMKM</h2>
            <p class="lead text-muted">Temukan berbagai produk unggulan dari Karimun Jawa</p>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100 category-card">
                    <div class="card-body text-center p-4">
                        <div class="category-icon mb-3">
                            <i class="fas fa-utensils text-danger fa-3x"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Makanan & Minuman</h5>
                        <p class="text-muted mb-3">Produk kuliner khas Karimun Jawa yang lezat dan autentik</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100 category-card">
                    <div class="card-body text-center p-4">
                        <div class="category-icon mb-3">
                            <i class="fas fa-palette text-success fa-3x"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Kerajinan Tangan</h5>
                        <p class="text-muted mb-3">Kerajinan unik yang dibuat dengan tangan terampil pengrajin lokal</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100 category-card">
                    <div class="card-body text-center p-4">
                        <div class="category-icon mb-3">
                            <i class="fas fa-tshirt text-primary fa-3x"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Fashion</h5>
                        <p class="text-muted mb-3">Produk fashion dengan sentuhan khas Karimun Jawa</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100 category-card">
                    <div class="card-body text-center p-4">
                        <div class="category-icon mb-3">
                            <i class="fas fa-gift text-warning fa-3x"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Oleh-oleh</h5>
                        <p class="text-muted mb-3">Souvenir dan oleh-oleh khas untuk kenang-kenangan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- UMKM Unggulan Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">UMKM Unggulan</h2>
            <p class="lead text-muted">UMKM terbaik dengan produk berkualitas tinggi</p>
        </div>
        
        <div class="row">
            <!-- Sample UMKM Cards - You can replace with dynamic data -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('images/umkm1.jpg') }}" class="card-img-top" alt="UMKM 1" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="fw-bold">Toko Ikan Asin Pak Budi</h5>
                        <p class="text-muted">Produsen ikan asin berkualitas dengan cita rasa khas Karimun Jawa</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-primary">Makanan</span>
                            <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('images/umkm2.jpg') }}" class="card-img-top" alt="UMKM 2" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="fw-bold">Kerajinan Kayu Bu Sari</h5>
                        <p class="text-muted">Kerajinan kayu unik dengan motif khas kepulauan</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-success">Kerajinan</span>
                            <a href="#" class="btn btn-sm btn-outline-success">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('images/umkm3.jpg') }}" class="card-img-top" alt="UMKM 3" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="fw-bold">Batik Karimun Collection</h5>
                        <p class="text-muted">Koleksi batik dengan motif laut dan kehidupan nelayan</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-warning text-dark">Fashion</span>
                            <a href="#" class="btn btn-sm btn-outline-warning">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
                <i class="fas fa-store me-2"></i>
                Lihat Semua UMKM
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-4">Bergabung dengan Komunitas UMKM Karimun Jawa</h2>
                <p class="lead mb-4">
                    Daftarkan UMKM Anda dan jangkau lebih banyak pelanggan. 
                    Kami siap membantu mengembangkan bisnis Anda.
                </p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                        <i class="fas fa-plus me-2"></i>
                        Daftarkan UMKM
                    </a>
                        <i class="fas fa-phone me-2"></i>
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection