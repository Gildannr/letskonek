<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryRegis extends Model
{
    protected $table = 'trs_product_category_regis';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    // Jika tabel Anda tidak menggunakan kolom created_at dan updated_at
    public $timestamps = false;
    
    // Fields: id, product_category_id, question, description, created, author, updated, updater, status
    protected $fillable = [
        'product_category_id',
        'question',
        'description',
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
    
    public function answers()
    {
        return $this->hasMany(ProductCategoryRegisAnswer::class, 'product_category_regis_id', 'id');
    }
}
