<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryRegisAnswer extends Model
{
    protected $table = 'trs_product_category_regis_answer';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    // Jika tabel Anda tidak menggunakan kolom created_at dan updated_at
    public $timestamps = false;
    
    // Fields: id, product_category_regis_id, answer, created, author, updated, updater, status
    protected $fillable = [
        'product_category_regis_id',
        'answer',
        'created',
        'author',
        'updated',
        'updater',
        'status'
    ];
    
    public function question()
    {
        return $this->belongsTo(ProductCategoryRegis::class, 'product_category_regis_id', 'id');
    }
}
