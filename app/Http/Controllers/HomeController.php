<?php

namespace App\Http\Controllers;

use App\Models\CMSHome;
use App\Models\ProductCategory;
use App\Models\Video;
use App\Models\FAQ;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cmsHome = CMSHome::orderBy('urutan', 'asc')->get();

        // dd($cmsHome);
        $getProductCategories = ProductCategory::select(["product_category_id", "product_category", "slug", "thumbnail", "icon"])
                                            ->where('status', '2')
                                            ->orderBy('product_category')
                                            ->take(3)
                                            ->get();
        
        // Fetch the first active video record (assuming status '1' or '2' is active, check your convention)
        // Based on SQL dump, there's only id=1, let's fetch that directly or the first active.
        $video = Video::where('id_video', 1)->first(); // Or use ->where('status', 'active_status_code')->first();

        // Fetch active FAQs ordered by 'urutan'
        $faqs = FAQ::where('status', '1') // Assuming status '1' is active based on SQL dump
                    ->orderBy('urutan', 'asc')
                    ->get();

        // Fetch latest 3 active articles
        $articles = Article::where('status', '1') // Assuming status '1' is active/published
                          ->orderBy('created', 'desc') // Order by creation date, newest first
                          ->take(3) // Limit to 3 articles
                          ->get();

        return view('page.home', compact('getProductCategories', 'cmsHome', 'video', 'faqs', 'articles'));
    }
}
