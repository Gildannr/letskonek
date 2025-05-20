<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $table = 'tabel_mentors';
    protected $primaryKey = 'id_mentors';
    protected $guarded = ['id_mentors'];

    // Jika tabel Anda tidak menggunakan kolom created_at dan updated_at
    public $timestamps = false;
    
    // Fields: id_mentors, mentros_name, email, phone, address, description, gambar, gambar_detail, slug, created, author, updated, updater, status
    protected $fillable = [
        'mentros_name',
        'email',
        'phone',
        'address',
        'description',
        'gambar',
        'gambar_detail',
        'slug',
        'created',
        'author',
        'updated',
        'updater',
        'status'
    ];
    
    public function orders()
    {
        return $this->hasMany(Order::class, 'id_mentors', 'id_mentors');
    }
} 