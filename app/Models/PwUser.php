<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class PwUser extends Authenticatable
{
    protected $table = 'pw_users';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    // Jika tabel Anda tidak menggunakan kolom created_at dan updated_at
    public $timestamps = false;
}
