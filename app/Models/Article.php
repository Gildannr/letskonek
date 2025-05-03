<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'tabel_article';
    protected $primaryKey = 'id_article';
    protected $guarded = ['id_article'];

    // Jika tabel Anda tidak menggunakan kolom created_at dan updated_at
    public $timestamps = false;
    
    // Fields: id_article, id_article_category, title, sub_title, content, gambar, keterangan_gambar, slug, tags, meta_keyword, meta_description, sumber_artikel, count_article, created, author, updated, updater, schedule, scheduled, status
    protected $fillable = [
        'id_article_category',
        'title',
        'sub_title',
        'content',
        'gambar',
        'keterangan_gambar',
        'slug',
        'tags',
        'meta_keyword',
        'meta_description',
        'sumber_artikel',
        'count_article',
        'created',
        'author',
        'updated',
        'updater',
        'schedule',
        'scheduled',
        'status'
    ];
    
    public function category()
    {
        return $this->belongsTo(ArticleCategory::class, 'id_article_category', 'id_article_category');
    }
} 