@extends('layouts.app')

@section('title', 'Daftar UMKM - UMKM Karimun Jawa')

@section('content')
<!-- Header Section -->
<section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                @if(request('featured'))
                    UMKM Unggulan
                @elseif(request('kategori'))
                    UMKM {{ ucfirst(request('kategori')) }}
                @else
                    Semua UMKM
                @endif
            </h1>
            <p class="text-xl text-blue-100 mb-8">
                @if(request('search'))
                    Hasil pencarian untuk: "{{ request('search') }}"
                @else
                    Temukan produk unggulan dari Karimun Jawa
                @endif
            </p>
            
            <!-- Search Form -->
            <div class="max-w-md mx-auto">
                <form method="GET" action="{{ route('umkm.index') }}" class="flex">
                    <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                    <input type="hidden" name="featured" value="{{ request('featured') }}">
                    <div class="relative flex-1">
                        <input type="search" 
                               name="search" 
                               value="{{ request('search') }}"
                               placeholder="Cari UMKM..." 
                               class="w-full px-4 py-3 pl-12 text-gray-900 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-yellow-400">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                    </div>
                    <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 px-6 py-3 rounded-r-lg font-semibold transition-colors duration-300">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section class="bg-white shadow-sm border-b">
    <div class="container mx-auto px-4 py-6">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <!-- Category Filters -->
            <div class="flex flex-wrap gap-2">
                <a href="{{ route('umkm.index') }}" 
                   class="px-4 py-2 rounded-full text-sm font-medium transition-colors duration-300 {{ !request('kategori') && !request('featured') ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                    Semua
                </a>
                <a href="{{ route('umkm.index', ['featured' => 1]) }}" 
                   class="px-4 py-2 rounded-full text-sm font-medium transition-colors duration-300 {{ request('featured') ? 'bg-yellow-500 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                    <i class="fas fa-star mr-1"></i> Unggulan
                </a>
                <a href="{{ route('umkm.index', ['kategori' => 'makanan']) }}" 
                   class="px-4 py-2 rounded-full text-sm font-medium transition-colors duration-300 {{ request('kategori') == 'makanan' ? 'bg-red-500 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                    <i class="fas fa-utensils mr-1"></i> Makanan
                </a>
                <a href="{{ route('umkm.index', ['kategori' => 'kerajinan']) }}" 
                   class="px-4 py-2 rounded-full text-sm font-medium transition-colors duration-300 {{ request('kategori') == 'kerajinan' ? 'bg-green-500 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                    <i class="fas fa-palette mr-1"></i> Kerajinan
                </a>
                <a href="{{ route('umkm.index', ['kategori' => 'fashion']) }}" 
                   class="px-4 py-2 rounded-full text-sm font-medium transition-colors duration-300 {{ request('kategori') == 'fashion' ? 'bg-purple-500 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                    <i class="fas fa-tshirt mr-1"></i> Fashion
                </a>
            </div>

            <!-- Results Count -->
            <div class="text-sm text-gray-600">
                {{ $umkms->total() }} UMKM ditemukan
            </div>
        </div>
    </div>
</section>

<!-- UMKM Grid -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        @if($umkms->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($umkms as $umkm)
                    <div class="group bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                        <!-- Image -->
                        <div class="relative overflow-hidden h-48">
                            @if($umkm->image)
                                <img src="{{ Storage::url($umkm->image) }}" 
                                     alt="{{ $umkm->title }}" 
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                                    <i class="fas fa-store text-white text-4xl"></i>
                                </div>
                            @endif
                            
                            @if($umkm->is_featured)
                                <div class="absolute top-3 left-3">
                                    <span class="bg-yellow-500 text-white px-2 py-1 rounded-full text-xs font-semibold flex items-center">
                                        <i class="fas fa-star mr-1"></i> Unggulan
                                    </span>
                                </div>
                            @endif
                        </div>

                        <!-- Content -->
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition-colors duration-300">
                                {{ $umkm->title }}
                            </h3>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                                {{ $umkm->description }}
                            </p>
                            
                            <!-- Action Button -->
                            <a href="{{ route('umkm.show', $umkm->slug) }}" 
                               class="inline-flex items-center justify-center w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-300">
                                Lihat Detail
                                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $umkms->appends(request()->query())->links() }}
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-16">
                <div class="max-w-md mx-auto">
                    <div class="bg-gray-100 w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-search text-gray-400 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Tidak ada UMKM ditemukan</h3>
                    <p class="text-gray-600 mb-6">
                        @if(request('search'))
                            Maaf, tidak ada UMKM yang sesuai dengan pencarian "{{ request('search') }}".
                        @else
                            Belum ada UMKM yang terdaftar untuk kategori ini.
                        @endif
                    </p>
                    <a href="{{ route('umkm.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-colors duration-300">
                        Lihat Semua UMKM
                    </a>
                </div>
            </div>
        @endif
    </div>
</section>

<!-- Featured Section (if on main page) -->
@if(!request('search') && !request('kategori') && !request('featured') && $featured->count() > 0)
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">UMKM Unggulan</h2>
            <p class="text-lg text-gray-600">UMKM pilihan dengan kualitas terbaik</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featured as $umkm)
                <div class="group bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative overflow-hidden h-48">
                        @if($umkm->image)
                            <img src="{{ Storage::url($umkm->image) }}" 
                                 alt="{{ $umkm->title }}" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                                <i class="fas fa-store text-white text-4xl"></i>
                            </div>
                        @endif
                        
                        <div class="absolute top-3 left-3">
                            <span class="bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-semibold flex items-center">
                                <i class="fas fa-star mr-1"></i> Unggulan
                            </span>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $umkm->title }}</h3>
                        <p class="text-gray-600 text-sm mb-4">{{ Str::limit($umkm->description, 100) }}</p>
                        <a href="{{ route('umkm.show', $umkm->slug) }}" 
                           class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold">
                            Lihat Detail
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection

@push('styles')
<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endpush