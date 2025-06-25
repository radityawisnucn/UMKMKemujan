<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    /**
     * Display a listing of UMKM articles.
     */
    public function index(Request $request)
    {
        $query = Umkm::published()->latest();

        // Search functionality
        if ($request->has('search') && $request->search) {
            $search = $request->get('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        // Featured filter
        if ($request->has('featured')) {
            $query->where('is_featured', true);
        }

        // Category filter (tambahkan field kategori di migration jika diperlukan)
        if ($request->has('kategori')) {
            // Untuk sementara, kita filter berdasarkan title atau description
            $kategori = $request->kategori;
            $query->where(function ($q) use ($kategori) {
                $q->where('title', 'like', "%{$kategori}%")
                  ->orWhere('description', 'like', "%{$kategori}%")
                  ->orWhere('content', 'like', "%{$kategori}%");
            });
        }

        $umkms = $query->paginate(12);
        $featured = Umkm::published()->featured()->take(3)->get();

        return view('umkm.index', compact('umkms', 'featured'));
    }

    /**
     * Display the specified UMKM article.
     */
    public function show(Umkm $umkm)
    {
        // Only show published articles
        if ($umkm->status !== 'published') {
            abort(404);
        }

        // Get related articles
        $related = Umkm::published()
            ->where('id', '!=', $umkm->id)
            ->take(3)
            ->get();

        return view('umkm.show', compact('umkm', 'related'));
    }
}