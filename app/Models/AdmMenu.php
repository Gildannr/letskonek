<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmMenu extends Model
{
    protected $table = 'adm_menu';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    // Jika tabel Anda tidak menggunakan kolom created_at dan updated_at
    public $timestamps = false;
    
    // Fields: id, judul, type, parent, icon, menu, keterangan, notif_info, notif_db
    protected $fillable = [
        'judul',
        'type',
        'parent',
        'icon',
        'menu',
        'keterangan',
        'notif_info',
        'notif_db'
    ];
} 