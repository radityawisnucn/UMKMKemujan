<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo & Brand -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-3">
                    <img src="{{ asset('images/logo-karimunjawa.png') }}" alt="Logo" class="h-10 w-auto">
                    <span class="text-xl font-bold text-blue-600">UMKM Karimun Jawa</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <!-- Beranda -->
                <a href="{{ route('home') }}" 
                   class="nav-link {{ request()->routeIs('home') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-700 hover:text-blue-600' }} 
                          px-3 py-2 text-sm font-medium transition-colors duration-200">
                    <i class="fas fa-home mr-1"></i>
                    Beranda
                </a>

                <!-- UMKM -->
                <a href="{{ route('umkm.index') }}" 
                   class="nav-link {{ request()->routeIs('umkm.*') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-gray-700 hover:text-blue-600' }} 
                          px-3 py-2 text-sm font-medium transition-colors duration-200">
                    <i class="fas fa-store mr-1"></i>
                    UMKM
                </a>

                <!-- Dropdown Produk UMKM -->
                <div class="relative group">
                    <button class="flex items-center px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors duration-200">
                        <i class="fas fa-box mr-1"></i>
                        Produk UMKM
                        <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                    
                    <!-- Dropdown Menu -->
                    <div class="absolute left-0 mt-2 w-56 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="py-2">
                            <a href="{{ route('umkm.index') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors duration-150">
                                <i class="fas fa-list mr-3 w-4"></i>
                                Semua UMKM
                            </a>
                            <hr class="my-1 border-gray-200">
                            <a href="{{ route('umkm.index', ['featured' => 1]) }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors duration-150">
                                <i class="fas fa-star mr-3 w-4 text-yellow-500"></i>
                                UMKM Unggulan
                            </a>
                            <a href="{{ route('umkm.index', ['kategori' => 'makanan']) }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors duration-150">
                                <i class="fas fa-utensils mr-3 w-4 text-green-500"></i>
                                Makanan & Minuman
                            </a>
                            <a href="{{ route('umkm.index', ['kategori' => 'kerajinan']) }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors duration-150">
                                <i class="fas fa-palette mr-3 w-4 text-purple-500"></i>
                                Kerajinan Tangan
                            </a>
                            <a href="{{ route('umkm.index', ['kategori' => 'fashion']) }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors duration-150">
                                <i class="fas fa-tshirt mr-3 w-4 text-pink-500"></i>
                                Fashion & Aksesoris
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Search Form -->
                <form method="GET" action="{{ route('umkm.index') }}" class="flex items-center">
                    <div class="relative">
                        <input type="search" 
                               name="search" 
                               value="{{ request('search') }}"
                               placeholder="Cari UMKM..." 
                               class="w-64 px-4 py-2 pl-10 text-sm border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <button type="submit" class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <i class="fas fa-arrow-right text-gray-400 hover:text-blue-600 transition-colors duration-150"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button type="button" 
                        class="mobile-menu-button text-gray-700 hover:text-blue-600 focus:outline-none focus:text-blue-600 transition-colors duration-200"
                        onclick="toggleMobileMenu()">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 bg-gray-50 rounded-b-lg">
                <!-- Mobile Search -->
                <form method="GET" action="{{ route('umkm.index') }}" class="px-3 py-2">
                    <div class="relative">
                        <input type="search" 
                               name="search" 
                               value="{{ request('search') }}"
                               placeholder="Cari UMKM..." 
                               class="w-full px-4 py-2 pl-10 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                    </div>
                </form>

                <!-- Mobile Links -->
                <a href="{{ route('home') }}" 
                   class="block px-3 py-2 text-base font-medium {{ request()->routeIs('home') ? 'text-blue-600 bg-blue-50' : 'text-gray-700 hover:text-blue-600 hover:bg-gray-100' }} rounded-md transition-colors duration-200">
                    <i class="fas fa-home mr-2"></i>
                    Beranda
                </a>

                <a href="{{ route('umkm.index') }}" 
                   class="block px-3 py-2 text-base font-medium {{ request()->routeIs('umkm.*') ? 'text-blue-600 bg-blue-50' : 'text-gray-700 hover:text-blue-600 hover:bg-gray-100' }} rounded-md transition-colors duration-200">
                    <i class="fas fa-store mr-2"></i>
                    UMKM
                </a>

                <!-- Mobile Dropdown -->
                <div class="px-3 py-2">
                    <button onclick="toggleMobileDropdown()" class="flex items-center justify-between w-full text-left text-base font-medium text-gray-700 hover:text-blue-600 transition-colors duration-200">
                        <span>
                            <i class="fas fa-box mr-2"></i>
                            Produk UMKM
                        </span>
                        <i class="fas fa-chevron-down text-xs" id="mobile-dropdown-icon"></i>
                    </button>
                    
                    <div id="mobile-dropdown" class="hidden mt-2 space-y-1">
                        <a href="{{ route('umkm.index') }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-md transition-colors duration-150">
                            <i class="fas fa-list mr-2"></i> Semua UMKM
                        </a>
                        <a href="{{ route('umkm.index', ['featured' => 1]) }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-md transition-colors duration-150">
                            <i class="fas fa-star mr-2 text-yellow-500"></i> UMKM Unggulan
                        </a>
                        <a href="{{ route('umkm.index', ['kategori' => 'makanan']) }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-md transition-colors duration-150">
                            <i class="fas fa-utensils mr-2 text-green-500"></i> Makanan & Minuman
                        </a>
                        <a href="{{ route('umkm.index', ['kategori' => 'kerajinan']) }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-md transition-colors duration-150">
                            <i class="fas fa-palette mr-2 text-purple-500"></i> Kerajinan Tangan
                        </a>
                        <a href="{{ route('umkm.index', ['kategori' => 'fashion']) }}" class="block px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-md transition-colors duration-150">
                            <i class="fas fa-tshirt mr-2 text-pink-500"></i> Fashion & Aksesoris
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
}

function toggleMobileDropdown() {
    const dropdown = document.getElementById('mobile-dropdown');
    const icon = document.getElementById('mobile-dropdown-icon');
    
    dropdown.classList.toggle('hidden');
    
    if (dropdown.classList.contains('hidden')) {
        icon.classList.remove('fa-chevron-up');
        icon.classList.add('fa-chevron-down');
    } else {
        icon.classList.remove('fa-chevron-down');
        icon.classList.add('fa-chevron-up');
    }
}

// Close mobile menu when clicking outside
document.addEventListener('click', function(event) {
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    
    if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
        mobileMenu.classList.add('hidden');
    }
});
</script>