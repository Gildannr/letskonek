<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id_orders';
    protected $guarded = ['id_orders'];

    // Jika tabel Anda tidak menggunakan kolom created_at dan updated_at
    public $timestamps = false;

    // Relasi ke tabel produk
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }
    // Relasi ke tabel user
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'users_id');
    }
}
