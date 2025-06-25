<footer class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Brand Section -->
            <div class="col-span-1 lg:col-span-2">
                <div class="flex items-center space-x-3 mb-4">
                    <img src="{{ asset('images/logo-karimunjawa.png') }}" alt="Logo" class="h-10 w-auto">
                    <span class="text-xl font-bold">UMKM Karimun Jawa</span>
                </div>
                <p class="text-gray-300 mb-4 max-w-md">
                    Portal resmi UMKM Karimun Jawa. Mendukung ekonomi lokal dan memperkenalkan produk-produk unggulan dari Karimun Jawa.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">
                        <i class="fab fa-facebook-f text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">
                        <i class="fab fa-youtube text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Menu Utama</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition-colors duration-200">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('umkm.index') }}" class="text-gray-300 hover:text-white transition-colors duration-200">
                            Semua UMKM
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('umkm.index', ['featured' => 1]) }}" class="text-gray-300 hover:text-white transition-colors duration-200">
                            UMKM Unggulan
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">
                            Tentang Kami
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Kontak</h3>
                <div class="space-y-3">
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-map-marker-alt text-primary-400 mt-1"></i>
                        <span class="text-gray-300 text-sm">
                            Karimun Jawa, Jepara<br>
                            Jawa Tengah, Indonesia
                        </span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-phone text-primary-400"></i>
                        <span class="text-gray-300 text-sm">+62 123 456 789</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-envelope text-primary-400"></i>
                        <span class="text-gray-300 text-sm">info@umkmkarimunjawa.com</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="border-t border-gray-700 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-300 text-sm">
                &copy; {{ date('Y') }} UMKM Karimun Jawa. All rights reserved.
            </p>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="text-gray-300 hover:text-white text-sm transition-colors duration-200">
                    Privacy Policy
                </a>
                <a href="#" class="text-gray-300 hover:text-white text-sm transition-colors duration-200">
                    Terms of Service
                </a>
            </div>
        </div>
    </div>
</footer>