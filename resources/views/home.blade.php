@extends('layouts.app')

@section('title', 'Beranda - UMKM Karimun Jawa')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-600 to-blue-800 text-white py-20 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="%23ffffff" fill-opacity="0.1"><path d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/></g></g></svg>');"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col lg:flex-row items-center min-h-[60vh] gap-12">
            <div class="lg:w-1/2 text-center lg:text-left">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Temukan Produk UMKM <br>
                    <span class="text-yellow-400">Karimun Jawa</span>
                </h1>
                <p class="text-xl mb-8 text-blue-100 leading-relaxed">
                    Jelajahi kekayaan produk lokal dari Kepulauan Karimun Jawa. 
                    Dukung ekonomi lokal dengan membeli produk berkualitas dari UMKM terpercaya.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="{{ route('umkm.index') }}" class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
                        <i class="fas fa-store mr-2"></i>
                        Jelajahi UMKM
                    </a>
                    <a href="#kategori" class="bg-transparent border-2 border-white hover:bg-white hover:text-blue-800 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300">
                        <i class="fas fa-arrow-down mr-2"></i>
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
            <div class="lg:w-1/2 text-center">
                <div class="relative">
                    <img src="{{ asset('images/hero-karimunjawa.jpg') }}" alt="Karimun Jawa" class="w-full max-w-lg mx-auto rounded-2xl shadow-2xl transform hover:scale-105 transition-transform duration-300">
                    <div class="absolute -top-4 -right-4 bg-yellow-400 text-gray-900 p-4 rounded-xl shadow-lg">
                        <i class="fas fa-star text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistik Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl shadow-lg p-6 text-center transform hover:scale-105 transition-transform duration-300 hover:shadow-xl">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-store text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-3xl font-bold text-blue-600 mb-2">150+</h3>
                <p class="text-gray-600 font-medium">UMKM Terdaftar</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-lg p-6 text-center transform hover:scale-105 transition-transform duration-300 hover:shadow-xl">
                <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-box text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-3xl font-bold text-green-600 mb-2">500+</h3>
                <p class="text-gray-600 font-medium">Produk Tersedia</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-lg p-6 text-center transform hover:scale-105 transition-transform duration-300 hover:shadow-xl">
                <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-map-marker-alt text-yellow-600 text-2xl"></i>
                </div>
                <h3 class="text-3xl font-bold text-yellow-600 mb-2">25+</h3>
                <p class="text-gray-600 font-medium">Lokasi Wisata</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-lg p-6 text-center transform hover:scale-105 transition-transform duration-300 hover:shadow-xl">
                <div class="bg-cyan-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-users text-cyan-600 text-2xl"></i>
                </div>
                <h3 class="text-3xl font-bold text-cyan-600 mb-2">1000+</h3>
                <p class="text-gray-600 font-medium">Wisatawan/Bulan</p>
            </div>
        </div>
    </div>
</section>

<!-- Kategori Produk Section -->
<section id="kategori" class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Kategori Produk UMKM</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Temukan berbagai produk unggulan dari Karimun Jawa</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="group bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="bg-red-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-red-200 transition-colors duration-300">
                    <i class="fas fa-utensils text-red-600 text-3xl"></i>
                </div>
                <h5 class="text-xl font-bold text-gray-800 mb-4">Makanan & Minuman</h5>
                <p class="text-gray-600 mb-6">Produk kuliner khas Karimun Jawa yang lezat dan autentik</p>
                <a href="{{ route('umkm.index', ['kategori' => 'makanan']) }}" class="inline-flex items-center text-red-600 hover:text-red-800 font-semibold group-hover:underline">
                    Lihat Produk 
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                </a>
            </div>
            
            <div class="group bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="bg-green-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-green-200 transition-colors duration-300">
                    <i class="fas fa-palette text-green-600 text-3xl"></i>
                </div>
                <h5 class="text-xl font-bold text-gray-800 mb-4">Kerajinan Tangan</h5>
                <p class="text-gray-600 mb-6">Kerajinan unik yang dibuat dengan tangan terampil pengrajin lokal</p>
                <a href="{{ route('umkm.index', ['kategori' => 'kerajinan']) }}" class="inline-flex items-center text-green-600 hover:text-green-800 font-semibold group-hover:underline">
                    Lihat Produk
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                </a>
            </div>
            
            <div class="group bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-200 transition-colors duration-300">
                    <i class="fas fa-tshirt text-blue-600 text-3xl"></i>
                </div>
                <h5 class="text-xl font-bold text-gray-800 mb-4">Fashion</h5>
                <p class="text-gray-600 mb-6">Produk fashion dengan sentuhan khas Karimun Jawa</p>
                <a href="{{ route('umkm.index', ['kategori' => 'fashion']) }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold group-hover:underline">
                    Lihat Produk
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                </a>
            </div>
            
            <div class="group bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="bg-yellow-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-yellow-200 transition-colors duration-300">
                    <i class="fas fa-gift text-yellow-600 text-3xl"></i>
                </div>
                <h5 class="text-xl font-bold text-gray-800 mb-4">Oleh-oleh</h5>
                <p class="text-gray-600 mb-6">Souvenir dan oleh-oleh khas untuk kenang-kenangan</p>
                <a href="{{ route('umkm.index', ['kategori' => 'oleh-oleh']) }}" class="inline-flex items-center text-yellow-600 hover:text-yellow-800 font-semibold group-hover:underline">
                    Lihat Produk
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- UMKM Unggulan Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">UMKM Unggulan</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">UMKM terbaik dengan produk berkualitas tinggi</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Sample UMKM Cards -->
            <div class="group bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('images/umkm1.jpg') }}" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300" alt="UMKM 1">
                    <div class="absolute top-4 left-4">
                        <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Makanan</span>
                    </div>
                </div>
                <div class="p-6">
                    <h5 class="text-xl font-bold text-gray-800 mb-3">Toko Ikan Asin Pak Budi</h5>
                    <p class="text-gray-600 mb-4">Produsen ikan asin berkualitas dengan cita rasa khas Karimun Jawa</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-yellow-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="text-gray-600 ml-2 text-sm">(4.9)</span>
                        </div>
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-300">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="group bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('images/umkm2.jpg') }}" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300" alt="UMKM 2">
                    <div class="absolute top-4 left-4">
                        <span class="bg-green-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Kerajinan</span>
                    </div>
                </div>
                <div class="p-6">
                    <h5 class="text-xl font-bold text-gray-800 mb-3">Kerajinan Kayu Bu Sari</h5>
                    <p class="text-gray-600 mb-4">Kerajinan kayu unik dengan motif khas kepulauan</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-yellow-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="text-gray-600 ml-2 text-sm">(4.8)</span>
                        </div>
                        <a href="#" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-300">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="group bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="relative overflow-hidden">
                    <img src="{{ asset('images/umkm3.jpg') }}" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300" alt="UMKM 3">
                    <div class="absolute top-4 left-4">
                        <span class="bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Fashion</span>
                    </div>
                </div>
                <div class="p-6">
                    <h5 class="text-xl font-bold text-gray-800 mb-3">Batik Karimun Collection</h5>
                    <p class="text-gray-600 mb-4">Koleksi batik dengan motif laut dan kehidupan nelayan</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-yellow-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-gray-600 ml-2 text-sm">(4.7)</span>
                        </div>
                        <a href="#" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-300">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('umkm.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg inline-flex items-center">
                <i class="fas fa-store mr-2"></i>
                Lihat Semua UMKM
            </a>
        </div>
    </div>
</section>

<!-- Testimoni Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Apa Kata Mereka</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Testimoni dari pelanggan dan mitra UMKM kami</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-500 mr-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">"Produk UMKM dari Karimun Jawa sangat berkualitas. Ikan asinnya benar-benar segar dan tahan lama!"</p>
                <div class="flex items-center">
                    <img src="https://ui-avatars.com/api/?name=Sarah+Putri&background=3b82f6&color=fff" alt="Avatar" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <h6 class="font-semibold text-gray-800">Sarah Putri</h6>
                        <p class="text-sm text-gray-500">Pelanggan</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-500 mr-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">"Platform ini sangat membantu UMKM saya untuk menjangkau lebih banyak pelanggan. Terima kasih!"</p>
                <div class="flex items-center">
                    <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=10b981&color=fff" alt="Avatar" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <h6 class="font-semibold text-gray-800">Budi Santoso</h6>
                        <p class="text-sm text-gray-500">Pemilik UMKM</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-500 mr-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">"Kerajinan tangan dari sini sangat unik dan berkualitas. Cocok untuk oleh-oleh!"</p>
                <div class="flex items-center">
                    <img src="https://ui-avatars.com/api/?name=Rina+Dewi&background=f59e0b&color=fff" alt="Avatar" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <h6 class="font-semibold text-gray-800">Rina Dewi</h6>
                        <p class="text-sm text-gray-500">Wisatawan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-blue-800 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="%23ffffff" fill-opacity="0.1"><path d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/></g></g></svg>');"></div>
    </div>
    
    <div class="container mx-auto px-4 text-center relative z-10">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-bold mb-6">Bergabung dengan Komunitas UMKM Karimun Jawa</h2>
            <p class="text-xl mb-8 text-blue-100 leading-relaxed">
                Daftarkan UMKM Anda dan jangkau lebih banyak pelanggan. 
                Kami siap membantu mengembangkan bisnis Anda.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg inline-flex items-center justify-center">
                    <i class="fas fa-plus mr-2"></i>
                    Daftarkan UMKM
                </a>
                <a href="#" class="bg-transparent border-2 border-white hover:bg-white hover:text-blue-800 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 inline-flex items-center justify-center">
                    <i class="fas fa-phone mr-2"></i>
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    /* Custom animations for hero section */
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    .float-animation {
        animation: float 3s ease-in-out infinite;
    }
    
    /* Smooth scroll behavior */
    html {
        scroll-behavior: smooth;
    }
    
    /* Custom gradient text */
    .gradient-text {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
</style>
@endpush

@push('scripts')
<script>
    // Counter animation for statistics
    function animateCounter(element, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const current = Math.floor(progress * (end - start) + start);
            element.innerText = current + '+';
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                
                // Animate counters when statistics section is visible
                if (entry.target.querySelector('.text-3xl')) {
                    const counters = entry.target.querySelectorAll('.text-3xl');
                    counters.forEach((counter, index) => {
                        const finalNumber = [150, 500, 25, 1000][index];
                        setTimeout(() => {
                            animateCounter(counter, 0, finalNumber, 2000);
                        }, index * 200);
                    });
                }
            }
        });
    }, observerOptions);

    // Observe sections for animations
    document.addEventListener('DOMContentLoaded', () => {
        const sections = document.querySelectorAll('section');
        sections.forEach(section => {
            observer.observe(section);
        });
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>
@endpush