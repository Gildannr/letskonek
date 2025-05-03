<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CMSAbout extends Model
{
    protected $table = 'tabel_about_us';
    protected $primaryKey = 'id_about_us';
    protected $guarded = ['id_about_us'];

    // Jika tabel Anda tidak menggunakan kolom created_at dan updated_at
    public $timestamps = false;
}
