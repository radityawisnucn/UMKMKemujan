<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display the homepage with dynamic data
     */
    public function index()
    {
        // Cache data untuk performance
        $data = Cache::remember('homepage_data', 3600, function () {
            return [
                // Statistik dinamis
                'statistics' => $this->getStatistics(),
                
                // UMKM unggulan
                'featuredUmkm' => Umkm::published()
                    ->featured()
                    ->latest()
                    ->take(6)
                    ->get(),
                
                // UMKM terbaru
                'latestUmkm' => Umkm::published()
                    ->latest()
                    ->take(3)
                    ->get(),
                
                // Kategori dengan hitungan
                
                // Testimoni (bisa dari database atau static)
                'testimonials' => $this->getTestimonials(),
                
            ];
        });

        return view('home', $data);
    }


    private function getCategoriesWithCount()
    {
        return collect([
            [
                'name' => 'Makanan & Minuman',
                'slug' => 'makanan',
                'icon' => 'fas fa-utensils',
                'color' => 'red',
                'description' => 'Produk kuliner khas Karimun Jawa yang lezat dan autentik',
                'count' => Umkm::published()->where(function($q) {
                    $q->where('title', 'like', '%makanan%')
                      ->orWhere('content', 'like', '%makanan%')
                      ->orWhere('content', 'like', '%kuliner%')
                      ->orWhere('content', 'like', '%ikan%')
                      ->orWhere('content', 'like', '%asin%');
                })->count()
            ],
            [
                'name' => 'Kerajinan Tangan',
                'slug' => 'kerajinan',
                'icon' => 'fas fa-palette',
                'color' => 'green',
                'description' => 'Kerajinan unik yang dibuat dengan tangan terampil pengrajin lokal',
                'count' => Umkm::published()->where(function($q) {
                    $q->where('title', 'like', '%kerajinan%')
                      ->orWhere('content', 'like', '%kerajinan%')
                      ->orWhere('content', 'like', '%kayu%')
                      ->orWhere('content', 'like', '%anyaman%');
                })->count()
            ],
            [
                'name' => 'Fashion',
                'slug' => 'fashion',
                'icon' => 'fas fa-tshirt',
                'color' => 'blue',
                'description' => 'Produk fashion dengan sentuhan khas Karimun Jawa',
                'count' => Umkm::published()->where(function($q) {
                    $q->where('title', 'like', '%fashion%')
                      ->orWhere('content', 'like', '%fashion%')
                      ->orWhere('content', 'like', '%batik%')
                      ->orWhere('content', 'like', '%pakaian%');
                })->count()
            ],
            [
                'name' => 'Oleh-oleh',
                'slug' => 'oleh-oleh',
                'icon' => 'fas fa-gift',
                'color' => 'yellow',
                'description' => 'Souvenir dan oleh-oleh khas untuk kenang-kenangan',
                'count' => Umkm::published()->where(function($q) {
                    $q->where('title', 'like', '%oleh-oleh%')
                      ->orWhere('content', 'like', '%oleh-oleh%')
                      ->orWhere('content', 'like', '%souvenir%')
                      ->orWhere('content', 'like', '%cinderamata%');
                })->count()
            ],
        ]);
    }

    /**
     * Get testimonials (bisa dari database atau static)
     */
    private function getTestimonials()
    {
        return collect([
            [
                'name' => 'Sarah Putri',
                'role' => 'Pelanggan',
                'avatar' => 'https://ui-avatars.com/api/?name=Sarah+Putri&background=3b82f6&color=fff',
                'rating' => 5,
                'comment' => 'Produk UMKM dari Karimun Jawa sangat berkualitas. Ikan asinnya benar-benar segar dan tahan lama!',
                'date' => '2025-01-15'
            ],
            [
                'name' => 'Budi Santoso',
                'role' => 'Pemilik UMKM',
                'avatar' => 'https://ui-avatars.com/api/?name=Budi+Santoso&background=10b981&color=fff',
                'rating' => 5,
                'comment' => 'Platform ini sangat membantu UMKM saya untuk menjangkau lebih banyak pelanggan. Terima kasih!',
                'date' => '2025-01-20'
            ],
            [
                'name' => 'Rina Dewi',
                'role' => 'Wisatawan',
                'avatar' => 'https://ui-avatars.com/api/?name=Rina+Dewi&background=f59e0b&color=fff',
                'rating' => 5,
                'comment' => 'Kerajinan tangan dari sini sangat unik dan berkualitas. Cocok untuk oleh-oleh!',
                'date' => '2025-01-22'
            ],
        ]);
    }

    /**
     * Clear homepage cache
     */
    public function clearCache()
    {
        Cache::forget('homepage_data');
        return response()->json(['success' => true, 'message' => 'Homepage cache cleared']);
    }
}