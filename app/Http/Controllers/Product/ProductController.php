<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductCategoryRegis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class ProductController extends Controller
{
    public function index($id_category)
    {
        // $id_category = Crypt::decrypt($id_category);
        $getProductCategory = ProductCategory::find($id_category);
        $getProducts = Product::where('product_category_id', $id_category)->paginate(6);

        // Logic to fetch and display products
        return view('page.produk.by-category', compact('getProductCategory', 'getProducts'));
    }

    public function detail($id_product)
    {
        // dd(Auth::user());
        // $id_product = base64_decode($id_product);
        $getProduct = Product::find($id_product);
        $questionsByCategory = ProductCategoryRegis::where('product_category_id', $getProduct->product_category_id)->get();
        $getProduct->view_count = $getProduct->view_count + 1;
        $getProduct->save();
        $getProductCategoryName = ProductCategory::find($getProduct->product_category_id)->product_category;

        // Logic to fetch and display products
        return view('page.produk.detail', compact('getProduct', 'getProductCategoryName', 'questionsByCategory'));
    }
}
