<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryImg extends Model
{
    protected $table = 'trs_product_category_img';
    protected $primaryKey = 'product_category_img_id';
    protected $guarded = ['product_category_img_id'];

    // Jika tabel Anda tidak menggunakan kolom created_at dan updated_at
    public $timestamps = false;
    
    // Fields: product_category_img_id, product_category_id, product_img, thumbail, created, author, updated, updater, status
    protected $fillable = [
        'product_category_id',
        'product_img',
        'thumbail',
        'created',
        'author',
        'updated',
        'updater',
        'status'
    ];
    
    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'product_category_id');
    }
} 