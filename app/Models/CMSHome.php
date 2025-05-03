<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CMSHome extends Model
{
    protected $table = 'tabel_setup_home';
    protected $primaryKey = 'id_setup_home';
    protected $guarded = ['id_setup_home'];

    // Jika tabel Anda tidak menggunakan kolom created_at dan updated_at
    public $timestamps = false;
}
