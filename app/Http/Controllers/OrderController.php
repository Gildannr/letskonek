<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\ProductCategoryRegisAnswer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'product_id' => 'required|integer|exists:tabel_product,product_id',
            // 'quantity' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $getProduk = Product::find($request->product_id);
        $totalPrice = $getProduk->price;

        $orders_code = 'TRX' . 'AHR' . sprintf('%04d', Order::count() + 1) . date('dmy');

        // Buat order baru
        $order = Order::create([
            'orders_code' => $orders_code,
            'tgl_order' => now(),
            'users_id' => Auth::user()->id,
            'product_id' => $request->product_id,
            'total_payment' => $totalPrice,
            'keterangan' => $request->keterangan ?? "",
            'created' => now(),
            'updated' => now(),
            'updater' => Auth::user()->id,
            'author' => Auth::user()->id,
            'status' => 1,
        ]);

        // Simpan jawaban pertanyaan
        foreach ($request->answers as $questionId => $answer) {
            ProductCategoryRegisAnswer::create([
                'product_category_regis_id' => $questionId,
                'author' => Auth::user()->id,
                'created' => now(),
                'updated' => now(),
                'updater' => Auth::user()->id,
                'answer' => $answer,
                'status' => 1,
            ]);
        }

        // Redirect ke halaman order dengan flash message
        return redirect()->route('order.show', $orders_code)->with('success', 'Order berhasil dibuat');
    }

    public function show($orders_code)
    {
        // Cari order berdasarkan orders_code
        $order = Order::where('orders_code', $orders_code)->with('product')->first();

        // Jika order tidak ditemukan, kembalikan halaman 404
        if (!$order) {
            abort(404, 'Order tidak ditemukan');
        }

        // Ambil jawaban pertanyaan terkait order
        // $answers = ProductCategoryRegisAnswer::where('product_category_regis_id', $order->product_id)->get();

        // Kembalikan view dengan data order dan jawaban
        return view('page.produk.order', compact('order'));
    }
}
