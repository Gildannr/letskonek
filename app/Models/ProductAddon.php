<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductAddon extends Model
{
    protected $table = 'trs_product_addon';
    protected $primaryKey = 'product_addon_id';
    protected $guarded = ['product_addon_id'];

    // Jika tabel Anda tidak menggunakan kolom created_at dan updated_at
    public $timestamps = false;
    
    // Fields: product_addon_id, product_id, product_addon, description, price, created, author, updated, updater, status
    protected $fillable = [
        'product_id',
        'product_addon',
        'description',
        'price',
        'created',
        'author',
        'updated',
        'updater',
        'status'
    ];
    
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }
    
    public function orders()
    {
        return $this->hasMany(Order::class, 'id_product_addon', 'product_addon_id');
    }
} 