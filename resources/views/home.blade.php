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
                    Dukung ekonomi lokal dengan membeli produk berkualitas dari {{ $statistics['umkm_count'] }}+ UMKM terpercaya.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="{{ route('umkm.index') }}" class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
                        <i class="fas fa-store mr-2"></i>
                        Jelajahi {{ $statistics['umkm_count'] }} UMKM
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
                <h3 class="text-3xl font-bold text-blue-600 mb-2 counter" data-target="{{ $statistics['umkm_count'] }}">0</h3>
                <p class="text-gray-600 font-medium">UMKM Terdaftar</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-lg p-6 text-center transform hover:scale-105 transition-transform duration-300 hover:shadow-xl">
                <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-eye text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-3xl font-bold text-green-600 mb-2 counter" data-target="{{ $statistics['total_views'] }}">0</h3>
                <p class="text-gray-600 font-medium">Total Kunjungan</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-lg p-6 text-center transform hover:scale-105 transition-transform duration-300 hover:shadow-xl">
                <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-map-marker-alt text-yellow-600 text-2xl"></i>
                </div>
                <h3 class="text-3xl font-bold text-yellow-600 mb-2 counter" data-target="{{ $statistics['tourist_locations'] }}">0</h3>
                <p class="text-gray-600 font-medium">Lokasi Wisata</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-lg p-6 text-center transform hover:scale-105 transition-transform duration-300 hover:shadow-xl">
                <div class="bg-cyan-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-users text-cyan-600 text-2xl"></i>
                </div>
                <h3 class="text-3xl font-bold text-cyan-600 mb-2 counter" data-target="{{ $statistics['monthly_visitors'] }}">0</h3>
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
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Temukan berbagai produk unggulan dari {{ $categories->count() }} kategori pilihan</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($categories as $category)
                <div class="group bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="bg-{{ $category['color'] }}-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-{{ $category['color'] }}-200 transition-colors duration-300">
                        <i class="{{ $category['icon'] }} text-{{ $category['color'] }}-600 text-3xl"></i>
                    </div>
                    <h5 class="text-xl font-bold text-gray-800 mb-4">{{ $category['name'] }}</h5>
                    <p class="text-gray-600 mb-4">{{ $category['description'] }}</p>
                    <div class="mb-6">
                        <span class="bg-{{ $category['color'] }}-100 text-{{ $category['color'] }}-800 px-3 py-1 rounded-full text-sm font-semibold">
                            {{ $category['count'] }} UMKM
                        </span>
                    </div>
                    <a href="{{ route('umkm.index', ['kategori' => $category['slug']]) }}" class="inline-flex items-center text-{{ $category['color'] }}-600 hover:text-{{ $category['color'] }}-800 font-semibold group-hover:underline">
                        Lihat Produk 
                        <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- UMKM Unggulan Section -->
@if($featuredUmkm->count() > 0)
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">UMKM Unggulan</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">{{ $featuredUmkm->count() }} UMKM terbaik dengan produk berkualitas tinggi</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredUmkm->take(6) as $umkm)
                <div class="group bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative overflow-hidden">
                        @if($umkm->image)
                            <img src="{{ Storage::url($umkm->image) }}" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300" alt="{{ $umkm->title }}">
                        @else
                            <div class="w-full h-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                                <i class="fas fa-store text-white text-4xl"></i>
                            </div>
                        @endif
                        
                        <div class="absolute top-4 left-4">
                            <span class="bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-semibold flex items-center">
                                <i class="fas fa-star mr-1"></i> Unggulan
                            </span>
                        </div>
                        
                        @if($umkm->view_count > 0)
                            <div class="absolute top-4 right-4">
                                <span class="bg-black bg-opacity-50 text-white px-2 py-1 rounded text-xs">
                                    <i class="fas fa-eye mr-1"></i> {{ $umkm->formatted_view_count }}
                                </span>
                            </div>
                        @endif
                    </div>
                    <div class="p-6">
                        <h5 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-blue-600 transition-colors duration-300">
                            {{ $umkm->title }}
                        </h5>
                        <p class="text-gray-600 mb-4">{{ Str::limit($umkm->description, 80) }}</p>
                        <div class="flex items-center justify-between">
                            <div class="text-sm text-gray-500">
                                <i class="fas fa-calendar mr-1"></i>
                                {{ $umkm->created_at->format('d M Y') }}
                            </div>
                            <a href="{{ route('umkm.show', $umkm->slug) }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-300">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('umkm.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg inline-flex items-center">
                <i class="fas fa-store mr-2"></i>
                Lihat Semua {{ $statistics['umkm_count'] }} UMKM
            </a>
        </div>
    </div>
</section>
@endif

<!-- UMKM Terbaru Section -->
@if($latestUmkm->count() > 0)
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">UMKM Terbaru</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">UMKM yang baru bergabung dengan platform kami</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($latestUmkm as $umkm)
                <div class="group bg-gradient-to-br from-green-50 to-green-100 rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative overflow-hidden h-48">
                        @if($umkm->image)
                            <img src="{{ Storage::url($umkm->image) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300" alt="{{ $umkm->title }}">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                                <i class="fas fa-store text-white text-4xl"></i>
                            </div>
                        @endif
                        
                        <div class="absolute top-4 left-4">
                            <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold flex items-center">
                                <i class="fas fa-plus mr-1"></i> Baru
                            </span>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-green-600 transition-colors duration-300">
                            {{ $umkm->title }}
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">{{ Str::limit($umkm->description, 100) }}</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">
                                {{ $umkm->created_at->diffForHumans() }}
                            </span>
                            <a href="{{ route('umkm.show', $umkm->slug) }}" class="inline-flex items-center text-green-600 hover:text-green-800 font-semibold">
                                Baca Selengkapnya
                                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Testimoni Section -->
@if($testimonials->count() > 0)
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Apa Kata Mereka</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Testimoni dari pelanggan dan mitra UMKM kami</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-500 mr-2">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $testimonial['rating'])
                                    <i class="fas fa-star"></i>
                                @else
                                    <i class="far fa-star"></i>
                                @endif
                            @endfor
                        </div>
                        <span class="text-sm text-gray-500 ml-2">{{ $testimonial['rating'] }}/5</span>
                    </div>
                    <p class="text-gray-600 mb-4">"{{ $testimonial['comment'] }}"</p>
                    <div class="flex items-center">
                        <img src="{{ $testimonial['avatar'] }}" alt="{{ $testimonial['name'] }}" class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <h6 class="font-semibold text-gray-800">{{ $testimonial['name'] }}</h6>
                            <p class="text-sm text-gray-500">{{ $testimonial['role'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

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
                Bergabunglah dengan {{ $statistics['umkm_count'] }} UMKM lainnya yang sudah merasakan manfaatnya.
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

    /* Counter animation */
    .counter {
        transition: all 0.3s ease;
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
            
            // Format numbers
            if (current >= 1000000) {
                element.innerText = (current / 1000000).toFixed(1) + 'M';
            } else if (current >= 1000) {
                element.innerText = (current / 1000).toFixed(1) + 'K';
            } else {
                element.innerText = current + (end >= 100 ? '+' : '');
            }
            
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
                const counters = entry.target.querySelectorAll('.counter');
                counters.forEach((counter, index) => {
                    const target = parseInt(counter.getAttribute('data-target'));
                    setTimeout(() => {
                        animateCounter(counter, 0, target, 2000);
                    }, index * 200);
                });
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

    // Lazy loading for images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }

    // Auto refresh statistics every 5 minutes
    setInterval(() => {
        fetch('/api/statistics')
            .then(response => response.json())
            .then(data => {
                // Update counters with new data
                document.querySelectorAll('.counter').forEach((counter, index) => {
                    const newTarget = Object.values(data)[index];
                    if (newTarget) {
                        counter.setAttribute('data-target', newTarget);
                    }
                });
            })
            .catch(console.error);
    }, 300000); // 5 minutes
</script>
@endpush