<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    // Jika tabel Anda tidak menggunakan kolom created_at dan updated_at
    public $timestamps = false;
    
    // Fields: id, id_menu, order_by, keterangan
    protected $fillable = [
        'id_menu',
        'order_by',
        'keterangan'
    ];
} 