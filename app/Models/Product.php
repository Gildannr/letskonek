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
    
    // Fields: product_id, product_category_id, product_name, description, information, faq, thumbnail, image, price, slug, view_count, meta_description, meta_keyword, created, author, updated, updater, status
    protected $fillable = [
        'product_category_id',
        'product_name',
        'description',
        'information',
        'faq',
        'thumbnail',
        'image',
        'price',
        'slug',
        'view_count',
        'meta_description',
        'meta_keyword',
        'created',
        'author',
        'updated',
        'updater',
        'status'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'product_id', 'product_id');
    }
    
    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'product_category_id');
    }
    
    public function addons()
    {
        return $this->hasMany(ProductAddon::class, 'product_id', 'product_id');
    }
}
