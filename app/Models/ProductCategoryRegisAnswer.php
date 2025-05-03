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
}
