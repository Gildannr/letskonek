<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderAddon extends Model
{
    protected $table = 'orders_addon';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    // Jika tabel Anda tidak menggunakan kolom created_at dan updated_at
    public $timestamps = false;
    
    // Fields: id, id_orders, orders_code, product_id, id_product_addon, users_id, payment, keterangan, created, author, status
    protected $fillable = [
        'id_orders',
        'orders_code',
        'product_id',
        'id_product_addon',
        'users_id',
        'payment',
        'keterangan',
        'created',
        'author',
        'status'
    ];
    
    public function order()
    {
        return $this->belongsTo(Order::class, 'id_orders', 'id_orders');
    }
    
    public function product_addon()
    {
        return $this->belongsTo(ProductAddon::class, 'id_product_addon', 'product_addon_id');
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'users_id');
    }
} 