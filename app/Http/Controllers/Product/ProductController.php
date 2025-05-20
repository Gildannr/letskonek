<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductAddon;
use App\Models\ProductCategory;
use App\Models\ProductCategoryRegis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class ProductController extends Controller
{
    public function index($slug)
    {
        $getProductCategory = ProductCategory::where('slug', $slug)->firstOrFail();
        $getProducts = Product::where('product_category_id', $getProductCategory->product_category_id)->paginate(6);

        // Logic to fetch and display products
        return view('page.produk.by-category', compact('getProductCategory', 'getProducts'));
    }

    public function detail($category_slug, $product_slug)
    {
        $getProductCategory = ProductCategory::where('slug', $category_slug)->firstOrFail();
        $getProduct = Product::where('slug', $product_slug)
            ->where('product_category_id', $getProductCategory->product_category_id)
            ->firstOrFail();
            
        $getProductAddOns = ProductAddon::where("product_id", $getProduct->product_id)->get();

        $questionsByCategory = ProductCategoryRegis::where('product_category_id', $getProduct->product_category_id)->get();
        $getProduct->view_count = $getProduct->view_count + 1;
        $getProduct->save();
        $getProductCategoryName = $getProductCategory->product_category;

        // Logic to fetch and display products
        return view('page.produk.detail', compact('getProduct', 'getProductCategoryName', 'questionsByCategory', 'getProductAddOns'));
    }
}
