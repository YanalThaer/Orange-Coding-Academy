<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'register_id'
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'category_id');
    }
    public function register()
    {
        return $this->belongsTo(Reigistertion::class);
    }
    
}
