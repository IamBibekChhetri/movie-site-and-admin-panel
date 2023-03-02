<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReleaseMovie extends Model
{
    protected $fillable = [
        'category_id', 'title', 'description', 'actor', 'poster', 'time', 'status',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function rating()
    {
        return $this->hasMany(Rating::class);
    }
}
