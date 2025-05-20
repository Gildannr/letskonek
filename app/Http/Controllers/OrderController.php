<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderAddon;
use App\Models\Product;
use App\Models\ProductAddon;
use App\Models\ProductCategoryRegisAnswer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // public function store(Request $request)
    // {
    //     // Validasi data

    //     $validator = Validator::make($request->all(), [
    //         'product_id' => 'required|integer|exists:tabel_product,product_id',
    //         // 'quantity' => 'required|integer|min:1',
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }

    //     // Load product with its category to get category price
    //     $product = Product::with(['category', 'addons'])->find($request->product_id);
        
    //     // Calculate product price (using product category price)
    //     $productPrice = $product->category->price ?? 0;
        
    //     // Get all addons for this product and sum their prices
    //     $addonTotal = 0;
    //     $productAddons = $product->addons->where('status', 1); // Only active addons
        
    //     foreach ($productAddons as $addon) {
    //         $addonTotal += $addon->price;
    //     }
        
    //     // Final price calculation
    //     $productPrice += $addonTotal;
    //     $totalPrice = $productPrice; // You might have additional calculations here for the total

    //     $orders_code = 'TRX' . 'AHR' . sprintf('%04d', Order::count() + 1) . date('dmy');

    //     // Buat order baru
    //     $order = Order::create([
    //         'orders_code' => $orders_code,
    //         'tgl_order' => now(),
    //         'users_id' => Auth::user()->id,
    //         'product_id' => $request->product_id,
    //         'product_price' => $productPrice, // Store the calculated product price
    //         'total_payment' => $totalPrice,
    //         'keterangan' => $request->keterangan ?? "",
    //         'created' => now(),
    //         'updated' => now(),
    //         'updater' => Auth::user()->id,
    //         'author' => Auth::user()->id,
    //         'status' => "1", // 1 = Pending as per profile.blade.php
    //     ]);

    //     // Store all product addons in orders_addon table
    //     foreach ($productAddons as $addon) {
    //         $order->orderAddons()->create([
    //             'orders_code' => $orders_code,
    //             'product_id' => $request->product_id,
    //             'id_product_addon' => $addon->product_addon_id,
    //             'users_id' => Auth::user()->id,
    //             'payment' => $addon->price,
    //             'created' => now(),
    //             'author' => Auth::user()->id,
    //             'status' => "1", // Set same status as parent order
    //         ]);
    //     }

    //     // Simpan jawaban pertanyaan
    //     if (isset($request->answers) && is_array($request->answers)) {
    //         foreach ($request->answers as $questionId => $answer) {
    //             ProductCategoryRegisAnswer::create([
    //                 'product_category_regis_id' => $questionId,
    //                 'author' => Auth::user()->id,
    //                 'created' => now(),
    //                 'updated' => now(),
    //                 'updater' => Auth::user()->id,
    //                 'answer' => $answer,
    //                 'status' => "1",
    //             ]);
    //         }
    //     }

    //     // Redirect ke halaman order dengan flash message
    //     return redirect()->route('order.show', $orders_code)->with('success', 'Order berhasil dibuat');
    // }
    
    public function store(Request $request)
    {
        // Validasi data
        // dd($request->all());
        // foreach ($request->addons as $addon) {
        //     dd($addon);
        // }

        $validator = Validator::make($request->all(), [
            'product_id' => 'required|integer|exists:tabel_product,product_id',
            // 'quantity' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Load product with its category to get category price
        $product = Product::with(['category', 'addons'])->find($request->product_id);
        
        // Final price calculation
        $productPrice = $product->price;
        $totalPrice = $request->total_price; // You might have additional calculations here for the total

        $orders_code = 'LK' . sprintf('%04d', Order::count() + 1) . date('dmy');

        // Buat order baru
        $order = Order::create([
            'orders_code' => $orders_code,
            'tgl_order' => now(),
            'users_id' => Auth::user()->users_id,
            'product_id' => $request->product_id,
            'product_price' => $productPrice, // Store the calculated product price
            'total_payment' => $totalPrice,
            'keterangan' => $request->keterangan ?? "",
            'created' => now(),
            'updated' => now(),
            'updater' => Auth::user()->users_id,
            'author' => Auth::user()->users_id,
            'status' => "1", // 1 = Pending as per profile.blade.php
        ]);

        // Store all product addons in orders_addon table
        foreach ($request->addons as $addon) {
            $productAddon = ProductAddon::find($addon);
            $orderAddOns = OrderAddon::create([
                'id_orders' => $order->id_orders,
                'orders_code' => $orders_code,
                'product_id' => $request->product_id,
                'id_product_addon' => $addon,
                'users_id' => Auth::user()->users_id,
                'payment' => $productAddon->price,
                'keterangan' => "",
                'created' => now(),
                'author' => Auth::user()->users_id,
                'status' => "1", // Set same status as parent order
            ]);
        }

        // Simpan jawaban pertanyaan
        if (isset($request->answers) && is_array($request->answers)) {
            foreach ($request->answers as $questionId => $answer) {
                ProductCategoryRegisAnswer::create([
                    'product_category_regis_id' => $questionId,
                    'author' => Auth::user()->users_id,
                    'created' => now(),
                    'updated' => now(),
                    'updater' => Auth::user()->users_id,
                    'answer' => $answer,
                    'status' => "1",
                ]);
            }
        }

        // Redirect ke halaman order dengan flash message
        return redirect()->route('order.show', $orders_code)->with('success', 'Order berhasil dibuat');
    }

    public function show($orders_code)
    {
        // Cari order berdasarkan orders_code
        $order = Order::where('orders_code', $orders_code)->with('product')->first();
        
        $orderAddOns = OrderAddon::where('id_orders', $order->id_orders)->with('product_addon')->get();
        // dd($orderAddOns);

        // Jika order tidak ditemukan, kembalikan halaman 404
        if (!$order) {
            abort(404, 'Order tidak ditemukan');
        }

        // Ambil jawaban pertanyaan terkait order
        // $answers = ProductCategoryRegisAnswer::where('product_category_regis_id', $order->product_id)->get();

        // Kembalikan view dengan data order dan jawaban
        return view('page.produk.order', compact('order', 'orderAddOns'));
    }

    public function updateStatus($ordersCode, $status)
    {
        // Find the order
        $order = Order::where('orders_code', $ordersCode)->first();
        
        if (!$order) {
            return redirect()->back()->with('error', 'Order tidak ditemukan');
        }
        
        // Update status
        // Status values: 0=Cancelled, 1=Pending, 2=Completed
        $order->update([
            'status' => $status,
            'updated' => now(),
            'updater' => Auth::user()->users_id
        ]);
        
        // Also update all order addons
        $order->orderAddons()->update([
            'status' => $status,
            'updated' => now(),
            'updater' => Auth::user()->users_id
        ]);
        
        $statusText = '';
        switch ($status) {
            case 0:
                $statusText = 'dibatalkan';
                break;
            case 2:
                $statusText = 'diselesaikan';
                break;
            default:
                $statusText = 'diubah';
        }
        
        return redirect()->back()->with('success', "Order berhasil $statusText");
    }
    
    public function markAsCompleted($ordersCode)
    {
        return $this->updateStatus($ordersCode, "2"); // 2 = Completed
    }
    
    public function cancel($ordersCode)
    {
        return $this->updateStatus($ordersCode, "0"); // 0 = Cancelled
    }
}
