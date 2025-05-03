<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'tabel_team';
    protected $primaryKey = 'id_team';
    protected $guarded = ['id_team'];

    // Jika tabel Anda tidak menggunakan kolom created_at dan updated_at
    public $timestamps = false;
    
    // Fields: id_team, title, sub_title, description, gambar, gambar_detail, banner, slug, urutan, created, author, updated, updater, status
    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'gambar',
        'gambar_detail',
        'banner',
        'slug',
        'urutan',
        'created',
        'author',
        'updated',
        'updater',
        'status'
    ];
} 