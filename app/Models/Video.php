<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'tabel_video';
    protected $primaryKey = 'id_video';
    protected $guarded = ['id_video'];

    // Jika tabel Anda tidak menggunakan kolom created_at dan updated_at
    public $timestamps = false;
    
    // Fields: id_video, video, gambar, updated, updater, status
    protected $fillable = [
        'video',
        'gambar',
        'updated',
        'updater',
        'status'
    ];
} 