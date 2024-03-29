<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function authors()
    {
    return $this->belongsToMany(Author::class);
    
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function bookshop()
        {
        return $this->belongsToMany(Bookshop::class);
        }
}
