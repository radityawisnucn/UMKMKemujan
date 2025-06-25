@extends('layouts.app')

@section('title', $umkm->meta_title ?: $umkm->title . ' - UMKM Karimun Jawa')

@section('content')
<!-- Breadcrumb -->
<nav class="bg-gray-50 py-4">
    <div class="container mx-auto px-4">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="{{ route('home') }}" class="hover:text-blue-600">Beranda</a></li>
            <li><i class="fas fa-chevron-right text-xs"></i></li>
            <li><a href="{{ route('umkm.index') }}" class="hover:text-blue-600">UMKM</a></li>
            <li><i class="fas fa-chevron-right text-xs"></i></li>
            <li class="text-gray-800 font-medium">{{ $umkm->title }}</li>
        </ol>
    </div>
</nav>

<!-- Main Content -->
<article class="py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <header class="mb-8">
                <div class="flex items-center gap-4 mb-4">
                    @if($umkm->is_featured)
                        <span class="bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-semibold flex items-center">
                            <i class="fas fa-star mr-1"></i> Unggulan
                        </span>
                    @endif
                    <span class="text-sm text-gray-500">
                        <i class="fas fa-calendar mr-1"></i>
                        {{ $umkm->created_at->format('d M Y') }}
                    </span>
                </div>
                
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">{{ $umkm->title }}</h1>
                <p class="text-xl text-gray-600 leading-relaxed">{{ $umkm->description }}</p>
            </header>

            <!-- Featured Image -->
            @if($umkm->image)
                <div class="mb-8">
                    <img src="{{ Storage::url($umkm->image) }}" 
                         alt="{{ $umkm->title }}" 
                         class="w-full h-96 object-cover rounded-xl shadow-lg">
                </div>
            @endif

            <!-- Content -->
            <div class="prose prose-lg max-w-none mb-12">
                {!! $umkm->content !!}
            </div>

            <!-- Share Buttons -->
            <div class="bg-gray-50 rounded-xl p-6 mb-12">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Bagikan Artikel Ini</h3>
                <div class="flex flex-wrap gap-3">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" 
                       target="_blank"
                       class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-300 flex items-center">
                        <i class="fab fa-facebook-f mr-2"></i> Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($umkm->title) }}" 
                       target="_blank"
                       class="bg-sky-500 hover:bg-sky-600 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-300 flex items-center">
                        <i class="fab fa-twitter mr-2"></i> Twitter
                    </a>
                    <a href="https://wa.me/?text={{ urlencode($umkm->title . ' - ' . request()->fullUrl()) }}" 
                       target="_blank"
                       class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-300 flex items-center">
                        <i class="fab fa-whatsapp mr-2"></i> WhatsApp
                    </a>
                    <button onclick="copyToClipboard()" 
                            class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-300 flex items-center">
                        <i class="fas fa-copy mr-2"></i> Salin Link
                    </button>
                </div>
            </div>
        </div>
    </div>
</article>

<!-- Related UMKM -->
@if($related->count() > 0)
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">UMKM Lainnya</h2>
            <p class="text-lg text-gray-600">Jelajahi UMKM lainnya yang menarik</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            @foreach($related as $item)
                <div class="group bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="relative overflow-hidden h-48">
                        @if($item->image)
                            <img src="{{ Storage::url($item->image) }}" 
                                 alt="{{ $item->title }}" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                                <i class="fas fa-store text-white text-4xl"></i>
                            </div>
                        @endif
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition-colors duration-300">
                            {{ $item->title }}
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">{{ Str::limit($item->description, 100) }}</p>
                        <a href="{{ route('umkm.show', $item->slug) }}" 
                           class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold">
                            Baca Selengkapnya
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('umkm.index') }}" 
               class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors duration-300 inline-flex items-center">
                <i class="fas fa-store mr-2"></i>
                Lihat Semua UMKM
            </a>
        </div>
    </div>
</section>
@endif
@endsection

@push('scripts')
<script>
    function copyToClipboard() {
        navigator.clipboard.writeText(window.location.href).then(function() {
            // Show success message
            const button = event.target.closest('button');
            const originalText = button.innerHTML;
            button.innerHTML = '<i class="fas fa-check mr-2"></i> Tersalin!';
            button.classList.remove('bg-gray-600', 'hover:bg-gray-700');
            button.classList.add('bg-green-600');
            
            setTimeout(() => {
                button.innerHTML = originalText;
                button.classList.remove('bg-green-600');
                button.classList.add('bg-gray-600', 'hover:bg-gray-700');
            }, 2000);
        });
    }
</script>
@endpush