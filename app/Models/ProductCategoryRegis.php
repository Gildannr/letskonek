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
}
