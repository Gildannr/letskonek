<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tabel_product';
    protected $primaryKey = 'product_id';
    protected $guarded = ['product_id'];

    // Jika tabel Anda tidak menggunakan kolom created_at dan updated_at
    public $timestamps = false;

    public function order()
    {
        return $this->hasMany(Product::class, 'product_id', 'product_id');
    }
}
