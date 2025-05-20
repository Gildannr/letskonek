<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'tabel_product_category';
    protected $primaryKey = 'product_category_id';
    protected $guarded = ['product_category_id'];

    // Jika tabel Anda tidak menggunakan kolom created_at dan updated_at
    public $timestamps = false;
    
    // Fields: product_category_id, product_category, description, information, faq, thumbnail, image, price, view_count, meta_description, meta_keyword, slug, created, author, updated, updater, status
    protected $fillable = [
        'product_category',
        'description',
        'information',
        'faq',
        'thumbnail',
        'image',
        'price',
        'view_count',
        'meta_description',
        'meta_keyword',
        'slug',
        'created',
        'author',
        'updated',
        'updater',
        'status'
    ];
    
    public function products()
    {
        return $this->hasMany(Product::class, 'product_category_id', 'product_category_id');
    }
    
    public function images()
    {
        return $this->hasMany(ProductCategoryImg::class, 'product_category_id', 'product_category_id');
    }
    
    public function registrationQuestions()
    {
        return $this->hasMany(ProductCategoryRegis::class, 'product_category_id', 'product_category_id');
    }
}
