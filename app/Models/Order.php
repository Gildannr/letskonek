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

    // Fields: id_orders, id_mentors, orders_code, tgl_order, users_id, product_id, total_payment, price_mentors, keterangan, created, author, updated, updater, status
    protected $fillable = [
        'id_mentors',
        'orders_code',
        'tgl_order',
        'users_id',
        'product_id',
        'total_payment',
        'price_mentors',
        'product_price',
        'keterangan',
        'created',
        'author',
        'updated',
        'updater',
        'status'
    ];

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
    
    // Relasi ke tabel mentor
    public function mentor()
    {
        return $this->belongsTo(Mentor::class, 'id_mentors', 'id_mentors');
    }
    
    // Relasi ke tabel orders_addon
    public function orderAddons()
    {
        return $this->hasMany(OrderAddon::class, 'id_orders', 'id_orders');
    }
}
