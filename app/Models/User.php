<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $primaryKey = 'users_id';
    protected $guarded = ['users_id'];

    // Jika tabel Anda tidak menggunakan kolom created_at dan updated_at
    public $timestamps = false;
    
    // Fields: users_id, fullname, email, phone, created, author, updated, updater, status, avatar, fcm_token
    protected $fillable = [
        'fullname',
        'email',
        'password',
        'phone',
        'created',
        'author',
        'updated',
        'updater',
        'status',
        'avatar',
        'fcm_token'
    ];
    
    public function orders()
    {
        return $this->hasMany(Order::class, 'users_id', 'users_id');
    }
}
