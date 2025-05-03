<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $table = 'tabel_article_category';
    protected $primaryKey = 'id_article_category';
    protected $guarded = ['id_article_category'];

    // Jika tabel Anda tidak menggunakan kolom created_at dan updated_at
    public $timestamps = false;
    
    // Fields: id_article_category, article_category_name, slug, meta_keyword, meta_description, created, author, updated, updater, status
    protected $fillable = [
        'article_category_name',
        'slug',
        'meta_keyword',
        'meta_description',
        'created',
        'author',
        'updated',
        'updater',
        'status'
    ];
    
    public function articles()
    {
        return $this->hasMany(Article::class, 'id_article_category', 'id_article_category');
    }
} 