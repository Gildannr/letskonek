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
    
    // Fields: id_about_us, title, sub_title, description, slug, gambar, banner, created, author, updated, updater, status
    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'slug',
        'gambar',
        'banner',
        'created',
        'author',
        'updated',
        'updater',
        'status'
    ];
}
