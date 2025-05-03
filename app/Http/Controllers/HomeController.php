<?php

namespace App\Http\Controllers;

use App\Models\CMSHome;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cmsHome = CMSHome::orderBy('urutan', 'asc')->get();

        // dd($cmsHome);
        $getProductCategories = ProductCategory::select(["product_category_id", "product_category"])->get(3);
        return view('page.home', compact('getProductCategories', 'cmsHome'));
    }
}
