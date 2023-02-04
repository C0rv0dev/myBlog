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

    public function posts()
    {
        return $this->belongsToMany(Post::class)
        ->withTimestamps();
    }
    
    public function projects()
    {
        return $this->belongsToMany(Project::class)
        ->withTimestamps();
    }
}
