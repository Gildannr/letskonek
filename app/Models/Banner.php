<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'tabel_banner';
    protected $primaryKey = 'id_banner';
    protected $guarded = ['id_banner'];

    // Jika tabel Anda tidak menggunakan kolom created_at dan updated_at
    public $timestamps = false;
    
    // Fields: id_banner, title, description, link, gambar, gambar_mobile, created, author, updated, updater, status
    protected $fillable = [
        'title',
        'description',
        'link',
        'gambar',
        'gambar_mobile',
        'created',
        'author',
        'updated',
        'updater',
        'status'
    ];
} 