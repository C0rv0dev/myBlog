<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'slug',
        'type'
    ];

    public function image_post()
    {
        return $this->belongsToMany(Post::class)->withTimestamps();
    }
}
