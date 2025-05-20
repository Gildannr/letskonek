<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    protected $table = 'tabel_faq';
    protected $primaryKey = 'id_faq';
    protected $guarded = ['id_faq'];

    // Jika tabel Anda tidak menggunakan kolom created_at dan updated_at
    public $timestamps = false;
    
    // Fields: id_faq, title, description, urutan, created, author, updated, updater, status
    protected $fillable = [
        'title',
        'description',
        'urutan',
        'created',
        'author',
        'updated',
        'updater',
        'status'
    ];
} 