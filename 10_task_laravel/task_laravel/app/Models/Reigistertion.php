<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; 

class Reigistertion extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['firstname', 'lastname', 'email', 'phone', 'password'];

    public function categories()
    {
        return $this->hasMany(category::class, 'register_id');
    }

   
}
